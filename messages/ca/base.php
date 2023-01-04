<?php
return array (
  '<strong>Keycloak</strong> Sign-In configuration' => 'Configuració d\'inici de sessió <strong>Keycloak</strong>',
  'Add a page in account settings allowing users to change their Keycloak password' => 'Afegiu una pàgina a la configuració del compte que permeti als usuaris canviar la seva contrasenya Keycloak',
  'Advanced settings (optional)' => 'Configuració avançada (opcional)',
  'Advanced settings requiring an admin user for the API (optional)' => 'Configuració avançada que requereix un usuari administrador per a l\'API (opcional)',
  'Authentication to Keycloak API failed!' => 'L\'autenticació a l\'API Keycloak ha fallat!',
  'Authentication to Keycloak API succeeded!' => 'L\'autenticació a l\'API Keycloak ha estat correcta!',
  'Automatic login' => 'Inici de sessió automàtic',
  'Base URL' => 'URL base',
  'Button {AddMapper} (for Keycloak version <20: {AddBuiltin}) and add theses attributes:' => 'Botó {AddMapper} (per a la versió Humhub <20: {AddBuiltin} ) i afegiu aquests atributs:',
  'Called {nameInEnglish} in english' => 'S\'anomena {nameInEnglish} en anglès',
  'Change password on {keycloakRealmDisplayName}' => 'Canvia la contrasenya a {keycloakRealmDisplayName}',
  'Client ID' => 'ID de client',
  'Client secret is in the "Credentials" tab (if in the settings "Access Type" is set to "confidential")' => 'El secret del client es troba a la pestanya "Credencials" (si a la configuració "Tipus d\'accés" està definit com a "confidencial")',
  'Client secret key' => 'Clau secreta del client',
  'Confirm new password' => 'Confirmar nova contrasenya',
  'Edit {usernameAttribute} and in {TokenClaimName}, replace {preferredUsernameAttribute} with {idAttribute}' => 'Editeu {usernameAttribute} i, a {TokenClaimName} , substituïu {preferredUsernameAttribute} per {idAttribute}',
  'Enable this auth client' => 'Activa aquest client d\'autenticació',
  'For administrators allowed to manage users' => 'Per a administradors autoritzats a gestionar usuaris',
  'Hide username field in registration form' => 'Amaga el camp del nom d\'usuari al formulari de registre',
  'Humhub to Keycloak sync is done in real time. Keycloak to Humhub sync is done once a day. Keycloak subgroups are not synced.' => 'La sincronització de Humhub amb Keycloak es fa en temps real. La sincronització de Keycloak amb Humhub es fa un cop al dia. Els subgrups de claus no estan sincronitzats.',
  'If enabled, you should also enable {removeKeycloakSessionsAfterLogoutAttrLabel}, otherwise users cannot logout.' => 'Si està activat, també hauríeu d\'habilitar {removeKeycloakSessionsAfterLogoutAttrLabel} , en cas contrari, els usuaris no podran tancar la sessió.',
  'If the username sent by Keycloak is the user\'s email, it is replaced by a username auto-generated from the first and last name (CamelCase formatted)' => 'Si el nom d\'usuari enviat per Keycloak és el correu electrònic de l\'usuari, se substituirà per un nom d\'usuari generat automàticament a partir del nom i cognom (format CamelCase)',
  'If you set a custom title, it will not be translated to the user\'s language unless you have a custom translation file in the protected/config folder. Leave blank to set default title.' => 'Si configureu un títol personalitzat, no es traduirà a l\'idioma de l\'usuari tret que tingueu un fitxer de traducció personalitzat a la carpeta protegida/config. Deixa en blanc per definir el títol predeterminat.',
  'In admin, hide password fields in edit user form' => 'A l\'administració, amagueu els camps de contrasenya al formulari d\'edició d\'usuari',
  'Keycloak API admin password' => 'Contrasenya d\'administrador de l\'API Keycloak',
  'Keycloak API admin username' => 'Nom d\'usuari administrador de l\'API Keycloak',
  'Keycloak attribute to use to get username on account creation' => 'Atribut Keycloak que cal utilitzar per obtenir el nom d\'usuari en la creació del compte',
  'New password' => 'Nova contrasenya',
  'No sync' => 'Sense sincronització',
  'On Keycloak, create a client for Humhub and configure it:' => 'A Keycloak, creeu un client per a Humhub i configureu-lo:',
  'Password confirmation does not match.' => 'La confirmació de la contrasenya no coincideix.',
  'Possible only if {newUsersCanRegister} is allowed in Administration -> Users -> Settings.' => 'Només és possible si {newUsersCanRegister} està permès a Administració -> Usuaris -> Configuració.',
  'Realm name' => 'Nom del regne',
  'Remove user\'s Keycloak sessions after logout' => 'Elimineu les sessions Keycloak de l\'usuari després de tancar la sessió',
  'Sync Humhub towards Keycloak' => 'Sincronitza Humhub amb Keycloak',
  'Sync Humhub towards Keycloak (but no removal on Keycloak)' => 'Sincronitza Humhub amb Keycloak (però sense eliminació a Keycloak)',
  'Sync Keycloak towards Humhub' => 'Sincronitza Keycloak cap a Humhub',
  'Sync Keycloak towards Humhub (but no removal on Humhub)' => 'Sincronitza Keycloak amb Humhub (però sense eliminació a Humhub)',
  'Sync both ways' => 'Sincronitza les dues maneres',
  'Sync both ways (but no removal on Humhub)' => 'Sincronitza les dues maneres (però sense eliminació a Humhub)',
  'Sync both ways (but no removal on Keycloak or Humhub)' => 'Sincronitza les dues maneres (però sense eliminació a Keycloak o Humhub)',
  'Sync both ways (but no removal on Keycloak)' => 'Sincronitza les dues maneres (però sense eliminació a Keycloak)',
  'Synchronize groups and their members' => 'Sincronitzar grups i els seus membres',
  'The client id provided by Keycloak' => 'L\'identificador de client proporcionat per Keycloak',
  'The new password could not be saved.' => 'No s\'ha pogut desar la contrasenya nova.',
  'This admin user must be in the {master} realm and have permission to manage users of the realm belonging to the client for this Humhub' => 'Aquest usuari administrador ha d\'estar al regne {master} i tenir permís per gestionar els usuaris del regne que pertanyen al client d\'aquest Humhub',
  'Title of the button (if autoLogin is disabled)' => 'Títol del botó (si l\'inici de sessió automàtic està desactivat)',
  'Update user\'s email on Humhub when changed on Keycloak' => 'Actualitza el correu electrònic de l\'usuari a Humhub quan es canvia a Keycloak',
  'Update user\'s email on Keycloak when changed on Humhub' => 'Actualitza el correu electrònic de l\'usuari a Keycloak quan es canvia a Humhub',
  'Update user\'s username on Humhub when changed on Keycloak' => 'Actualitza el nom d\'usuari de l\'usuari a Humhub quan es canvia a Keycloak',
  'Update user\'s username on Keycloak when changed on Humhub' => 'Actualitza el nom d\'usuari de l\'usuari a Keycloak quan es canvia a Humhub',
  'Will only work if in Keycloak\'s realm settings "Email as username" is disabled and "Edit username" is enabled.' => 'Només funcionarà si a la configuració del regne de Keycloak està desactivat "Correu electrònic com a nom d\'usuari" i "Edita el nom d\'usuari" està habilitat.',
  'Your current password can be changed here.' => 'La vostra contrasenya actual es pot canviar aquí.',
  '`preferred_username` (to use Keycloak username), `sub` (to use Keycloak ID) or other custom Token Claim Name' => '`preferred_username` (per utilitzar el nom d\'usuari de Keycloak), `sub` (per utilitzar l\'ID de Keycloak) o un altre nom de reclamació de testimoni personalitzat',
  '{ClientScope} tab -> click on the first {scopeName} (for Keycloak version <20: {Mappers} tab):' => 'Pestanya {ClientScope} -> feu clic al primer {scopeName} (per a la versió Humhub <20: pestanya {Mappers} ):',
  '{Credentials} tab: copy the secret key' => 'Pestanya {Credentials} : copieu la clau secreta',
  '{Settings} tab -> {ClientAuthenticationOn} (for Keycloak version <20: {AccessTypeValue}).' => 'Pestanya {Settings} -> {ClientAuthenticationOn} (per a la versió de Humhub <20: {AccessTypeValue} ).',
  '{Settings} tab -> {ValidRedirectURIsValue}.' => 'Pestanya {Settings} -> {ValidRedirectURIsValue} .',
);
