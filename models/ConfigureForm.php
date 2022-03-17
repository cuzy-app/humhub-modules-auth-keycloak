<?php
/**
 * * Keycloak Sign-In
 * @link https://github.com/cuzy-app/humhub-modules-auth-keycloak
 * @license https://github.com/cuzy-app/humhub-modules-auth-keycloak/blob/master/docs/LICENCE.md
 * @author [Marc FARRE](https://marc.fun) for [CUZY.APP](https://www.cuzy.app)
 */

namespace humhub\modules\authKeycloak\models;

use humhub\modules\authKeycloak\jobs\GroupsFullSync;
use humhub\modules\authKeycloak\Module;
use Yii;
use yii\base\Model;
use yii\helpers\Url;

/**
 * The module configuration model
 */
class ConfigureForm extends Model
{
    public const DEFAULT_TITLE = 'Connect with Keycloak';

    public const GROUP_SYNC_MODE_NONE = null;
    public const GROUP_SYNC_MODE_HH_TO_KC = 'hh2kc';
    public const GROUP_SYNC_MODE_KC_TO_HH = 'kc2hh';
    public const GROUP_SYNC_MODE_FULL = 'full';
    public const GROUP_SYNC_MODE_HH_TO_KC_NO_DEL = 'hh2kcNoDel';
    public const GROUP_SYNC_MODE_KC_TO_HH_NO_DEL = 'kc2hhNoDel';
    public const GROUP_SYNC_MODE_FULL_NO_KC_DEL = 'fullNoKcDel';
    public const GROUP_SYNC_MODE_FULL_NO_HH_DEL = 'fullNoHhDel';
    public const GROUP_SYNC_MODE_FULL_NO_DEL = 'fullNoDel';

    /**
     * @var boolean
     */
    public $enabled = false;
    /**
     * @var string
     */
    public $clientId;
    /**
     * @var string
     */
    public $clientSecret;
    /**
     * @var string
     */
    public $realm = 'master';
    /**
     * @var string
     */
    public $baseUrl;
    /**
     * @var string readonly
     */
    public $redirectUri;
    /**
     * @var string
     */
    public $usernameMapper = 'preferred_username';
    /**
     * @var string
     */
    public $title;
    /**
     * @var bool
     */
    public $autoLogin = false;
    /**
     * @var bool
     */
    public $hideRegistrationUsernameField = false;
    /**
     * @var bool
     */
    public $removeKeycloakSessionsAfterLogout = false;
    /**
     * @var bool
     */
    public $updateHumhubEmailFromBrokerEmail = true;
    /**
     * @var bool
     */
    public $updatedBrokerEmailFromHumhubEmail = false;
    /**
     * @var string
     */
    public $apiUsername = '';
    /**
     * @var string
     */
    public $apiPassword = '';
    /**
     * @var string
     */
    public $groupsSyncMode = self::GROUP_SYNC_MODE_NONE;


    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        /** @var Module $module */
        $module = Yii::$app->getModule('auth-keycloak');
        $settings = $module->settings;

        $this->enabled = (bool)$settings->get('enabled', $this->enabled);
        $this->clientId = $settings->get('clientId');
        $this->clientSecret = $settings->get('clientSecret');
        $this->realm = $settings->get('realm', $this->realm);
        $this->baseUrl = $settings->get('baseUrl');
        $this->usernameMapper = $settings->get('usernameMapper', $this->usernameMapper);
        $this->title = $settings->get('title', Yii::t('AuthKeycloakModule.base', static::DEFAULT_TITLE));
        $this->autoLogin = (bool)$settings->get('autoLogin', $this->autoLogin);
        $this->hideRegistrationUsernameField = (bool)$settings->get('hideRegistrationUsernameField', $this->hideRegistrationUsernameField);
        $this->removeKeycloakSessionsAfterLogout = (bool)$settings->get('removeKeycloakSessionsAfterLogout', $this->removeKeycloakSessionsAfterLogout);
        $this->updateHumhubEmailFromBrokerEmail = (bool)$settings->get('updateHumhubEmailFromBrokerEmail', $this->updateHumhubEmailFromBrokerEmail);
        $this->updatedBrokerEmailFromHumhubEmail = (bool)$settings->get('updatedBrokerEmailFromHumhubEmail', $this->updatedBrokerEmailFromHumhubEmail);
        $this->apiUsername = $settings->get('apiUsername', $this->apiUsername);
        $this->apiPassword = $settings->get('apiPassword', $this->apiPassword);
        $this->groupsSyncMode = $settings->get('groupsSyncMode', $this->groupsSyncMode);

        $this->redirectUri = Url::to(['/user/auth/external', 'authclient' => 'Keycloak'], true);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['clientId', 'clientSecret', 'baseUrl', 'usernameMapper'], 'required'],
            [['clientId', 'clientSecret', 'baseUrl', 'usernameMapper', 'title', 'realm', 'apiUsername', 'apiPassword'], 'string'],
            [['enabled', 'autoLogin', 'hideRegistrationUsernameField', 'removeKeycloakSessionsAfterLogout', 'updateHumhubEmailFromBrokerEmail', 'updatedBrokerEmailFromHumhubEmail'], 'boolean'],
            [['groupsSyncMode'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'enabled' => Yii::t('AuthKeycloakModule.base', 'Enable this auth client'),
            'clientId' => Yii::t('AuthKeycloakModule.base', 'Client ID'),
            'clientSecret' => Yii::t('AuthKeycloakModule.base', 'Client secret key'),
            'realm' => Yii::t('AuthKeycloakModule.base', 'Realm name'),
            'baseUrl' => Yii::t('AuthKeycloakModule.base', 'Base URL'),
            'usernameMapper' => Yii::t('AuthKeycloakModule.base', 'Keycloak attribute to use to get username on account creation: `preferred_username` (to use Keycloak username), `sub` (to use Keycloak ID) or other custom Token Claim Name'),
            'title' => Yii::t('AuthKeycloakModule.base', 'Title of the button (if autoLogin is disabled)'),
            'autoLogin' => Yii::t('AuthKeycloakModule.base', 'Automatic login'),
            'hideRegistrationUsernameField' => Yii::t('AuthKeycloakModule.base', 'Hide username field in registration form'),
            'removeKeycloakSessionsAfterLogout' => Yii::t('AuthKeycloakModule.base', 'Remove user\'s Keycloak sessions after logout'),
            'updateHumhubEmailFromBrokerEmail' => Yii::t('AuthKeycloakModule.base', 'Update user\'s email on Humhub when changed on Keycloak'),
            'updatedBrokerEmailFromHumhubEmail' => Yii::t('AuthKeycloakModule.base', 'Update user\'s email on Keycloak when changed on Humhub'),
            'apiUsername' => Yii::t('AuthKeycloakModule.base', 'Keycloak API admin username'),
            'apiPassword' => Yii::t('AuthKeycloakModule.base', 'Keycloak API admin password'),
            'groupsSyncMode' => Yii::t('AuthKeycloakModule.base', 'Synchronize groups and their members'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'clientId' => Yii::t('AuthKeycloakModule.base', 'The client id provided by Keycloak'),
            'clientSecret' => Yii::t('AuthKeycloakModule.base', 'Client secret is in the "Credentials" tab (if in the settings "Access Type" is set to "confidential")'),
            'baseUrl' => 'Depending on your configuration: https://idp-domain.tdl or https://idp-domain.tdl/auth',
            'title' => Yii::t('AuthKeycloakModule.base', 'If you set a custom title, it will not be translated to the user\'s language unless you have a custom translation file in the protected/config folder. Leave blank to set default title.'),
            'autoLogin' => Yii::t('AuthKeycloakModule.base', 'Possible only if anonymous registration is allowed in the admin users settings'),
            'apiUsername' => Yii::t('AuthKeycloakModule.base', 'This admin user must be in the {master} realm and have permission to manage users of the realm belonging to the client for this Humhub', ['master' => '“master”']),
            'groupsSyncMode' => Yii::t('AuthKeycloakModule.base', 'Humhub to Keycloak sync is done in real time. Keycloak to Humhub sync is done once a day. Keycloak subgroups are not synced.'),
        ];
    }

    /**
     * @return array
     */
    public function groupsSyncModeItems()
    {
        return [
            self::GROUP_SYNC_MODE_NONE => Yii::t('AuthKeycloakModule.base', 'No sync'),
            self::GROUP_SYNC_MODE_HH_TO_KC => Yii::t('AuthKeycloakModule.base', 'Sync Humhub towards Keycloak'),
            self::GROUP_SYNC_MODE_KC_TO_HH => Yii::t('AuthKeycloakModule.base', 'Sync Keycloak towards Humhub'),
            self::GROUP_SYNC_MODE_FULL => Yii::t('AuthKeycloakModule.base', 'Sync both ways'),
            self::GROUP_SYNC_MODE_HH_TO_KC_NO_DEL => Yii::t('AuthKeycloakModule.base', 'Sync Humhub towards Keycloak (but no removal on Keycloak)'),
            self::GROUP_SYNC_MODE_KC_TO_HH_NO_DEL => Yii::t('AuthKeycloakModule.base', 'Sync Keycloak towards Humhub (but no removal on Humhub)'),
            self::GROUP_SYNC_MODE_FULL_NO_KC_DEL => Yii::t('AuthKeycloakModule.base', 'Sync both ways (but no removal on Keycloak)'),
            self::GROUP_SYNC_MODE_FULL_NO_HH_DEL => Yii::t('AuthKeycloakModule.base', 'Sync both ways (but no removal on Humhub)'),
            self::GROUP_SYNC_MODE_FULL_NO_DEL => Yii::t('AuthKeycloakModule.base', 'Sync both ways (but no removal on Keycloak or Humhub)'),
        ];
    }

    /**
     * Saves module settings
     */
    public function save()
    {
        /** @var Module $module */
        $module = Yii::$app->getModule('auth-keycloak');

        $module->settings->set('enabled', $this->enabled);
        $module->settings->set('clientId', trim($this->clientId));
        $module->settings->set('clientSecret', trim($this->clientSecret));
        $module->settings->set('realm', trim($this->realm));
        $module->settings->set('baseUrl', rtrim(trim($this->baseUrl), '/'));
        $module->settings->set('usernameMapper', trim($this->usernameMapper));
        if (!$this->title) {
            $this->title = static::DEFAULT_TITLE;
        }
        $module->settings->set('title', $this->title);
        $module->settings->set('autoLogin', $this->autoLogin);
        $module->settings->set('hideRegistrationUsernameField', $this->hideRegistrationUsernameField);
        $module->settings->set('apiUsername', $this->apiUsername);
        $module->settings->set('apiPassword', $this->apiPassword);
        $module->settings->set('groupsSyncMode', $this->groupsSyncMode);

        // Following settings can be enabled only if API settings are entered
        if (!$this->hasApiParams()) {
            $this->removeKeycloakSessionsAfterLogout = false;
            $this->updatedBrokerEmailFromHumhubEmail = false;
        }
        $module->settings->set('removeKeycloakSessionsAfterLogout', $this->removeKeycloakSessionsAfterLogout);
        $module->settings->set('updatedBrokerEmailFromHumhubEmail', $this->updatedBrokerEmailFromHumhubEmail);
        $module->settings->set('updateHumhubEmailFromBrokerEmail', $this->updateHumhubEmailFromBrokerEmail);

        // Add groups sync to jobs
        Yii::$app->queue->push(new GroupsFullSync(['firstSync' => true]));

        return true;
    }

    /**
     * @return bool
     */
    public function hasApiParams()
    {
        return $this->baseUrl && $this->realm && $this->apiUsername && $this->apiPassword;
    }

    /**
     * @param bool $canRemoveOnKeycloak
     * @return bool
     */
    public function syncHumhubGroupsToKeycloak(bool $canRemoveOnKeycloak = false)
    {
        $hh2Kc = in_array($this->groupsSyncMode, [
            self::GROUP_SYNC_MODE_HH_TO_KC,
            self::GROUP_SYNC_MODE_FULL,
            self::GROUP_SYNC_MODE_FULL_NO_HH_DEL,
        ], true);
        if ($canRemoveOnKeycloak) {
            return $hh2Kc;
        }
        return $hh2Kc || in_array($this->groupsSyncMode, [
                self::GROUP_SYNC_MODE_HH_TO_KC_NO_DEL,
                self::GROUP_SYNC_MODE_FULL_NO_DEL,
                self::GROUP_SYNC_MODE_FULL_NO_KC_DEL,
            ], true);
    }

    /**
     * @param $canRemoveOnHumhub
     * @return bool
     */
    public function syncKeycloakGroupsToHumhub($canRemoveOnHumhub = false)
    {
        $hh2Kc = in_array($this->groupsSyncMode, [
            self::GROUP_SYNC_MODE_KC_TO_HH,
            self::GROUP_SYNC_MODE_FULL,
            self::GROUP_SYNC_MODE_FULL_NO_KC_DEL,
        ], true);
        if ($canRemoveOnHumhub) {
            return $hh2Kc;
        }
        return $hh2Kc || in_array($this->groupsSyncMode, [
                self::GROUP_SYNC_MODE_KC_TO_HH_NO_DEL,
                self::GROUP_SYNC_MODE_FULL_NO_DEL,
                self::GROUP_SYNC_MODE_FULL_NO_HH_DEL,
            ], true);
    }
}