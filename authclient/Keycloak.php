<?php
/**
 * * Keycloak Sign-In
 * @link https://github.com/cuzy-app/humhub-modules-auth-keycloak
 * @license https://github.com/cuzy-app/humhub-modules-auth-keycloak/blob/master/docs/LICENCE.md
 * @author [Marc FARRE](https://marc.fun) for [CUZY.APP](https://www.cuzy.app)
 */

namespace humhub\modules\authKeycloak\authclient;

use humhub\modules\authKeycloak\models\ConfigureForm;
use humhub\modules\authKeycloak\Module;
use humhub\modules\user\models\Auth;
use Yii;
use yii\authclient\OAuth2;
use yii\base\InvalidConfigException;
use yii\helpers\Url;


class Keycloak extends OAuth2
{
    public const DEFAULT_NAME = 'Keycloak';

    /**
     * @inheritdoc
     */
    public $authUrl;

    /**
     * @inheritdoc
     */
    public $tokenUrl;

    /**
     * @inheritdoc
     */
    public $apiBaseUrl;

    /**
     * @inheritdoc
     */
    public function init()
    {
        $config = new ConfigureForm();

        $this->apiBaseUrl = $config->baseUrl . '/realms/' . $config->realm . '/protocol/openid-connect';
        $this->authUrl = $this->apiBaseUrl . '/auth';
        $this->tokenUrl = $this->apiBaseUrl . '/token';

        parent::init();
    }

    public function applyAccessTokenToRequest($request, $accessToken)
    {
        $data = $request->getData();
        $data['Authorization'] = 'Bearer ' . $accessToken->getToken();
        $request->setHeaders($data);
    }

    public function redirectToBroker()
    {
        Yii::$app->session->set('loginRememberMe', true);

        // Try to set a better return URL after login
        $urlToRedirect = Url::current([], true);
        if (strpos($urlToRedirect, Url::to(['/user/auth'], true)) === 0) {
            $urlToRedirect = Yii::$app->request->referrer;
        }
        if (
            strpos($urlToRedirect, Url::to(['/user/auth'], true)) !== 0
            && strpos($urlToRedirect, Url::base(true)) === 0 // Referrer URL is not an other website
        ) {
            Yii::$app->user->setReturnUrl($urlToRedirect);
        }

        // Redirect to broker
        // The `return` will prevent logging user if URL doesn't exists
        return Yii::$app->getResponse()->redirect($this->buildAuthUrl());
    }

    /**
     * @inheritdoc
     */
    public function getReturnUrl()
    {
        return Url::to(['/user/auth/external', 'authclient' => 'Keycloak'], true);
    }

    /**
     * @inheritdoc
     * Update Humhub's user email if emails is different on Keycloak
     * @throws InvalidConfigException
     */
    public function getUserAttributes()
    {
        /** @var Module $module */
        $module = Yii::$app->getModule('auth-keycloak');
        $settings = $module->settings;

        if ($settings->get('updateHumhubEmailFromBrokerEmail')) {
            $userAttributes = $this->normalizeUserAttributes($this->initUserAttributes());

            $userAuth = Auth::findOne(['source' => static::DEFAULT_NAME, 'source_id' => $userAttributes['id']]);
            if ($userAuth !== null && $userAuth->user->email !== $userAttributes['email']) {
                $userAuth->user->email = $userAttributes['email'];
                $userAuth->user->save();
            }
        }

        return parent::getUserAttributes();
    }

    protected function initUserAttributes()
    {
        return $this->api('userinfo');
    }

    protected function defaultName()
    {
        return static::DEFAULT_NAME;
    }

    protected function defaultTitle()
    {
        /** @var Module $module */
        $module = Yii::$app->getModule('auth-keycloak');
        $settings = $module->settings;

        return $settings->get('title', Yii::t('AuthKeycloakModule.base', ConfigureForm::DEFAULT_TITLE));
    }

    protected function defaultViewOptions()
    {
        return [
            'cssIcon' => 'fa fa-sign-in',
            'buttonBackgroundColor' => '#e0492f',
        ];
    }

    protected function defaultNormalizeUserAttributeMap()
    {
        /** @var Module $module */
        $module = Yii::$app->getModule('auth-keycloak');
        $settings = $module->settings;

        return [
            'id' => 'sub',
            'username' => $settings->get('usernameMapper'),
            'firstname' => 'given_name',
            'lastname' => 'family_name',
            'email' => 'email',
        ];
    }
}