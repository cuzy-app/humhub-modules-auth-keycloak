<?php
return array (
  '<strong>Keycloak</strong> Sign-In configuration' => '<strong>Konfigurace Keycloak</strong> Sign-In',
  'Add a page in account settings allowing users to change their Keycloak password' => 'Přidejte stránku do nastavení účtu, která uživatelům umožní změnit heslo Keycloak',
  'Advanced settings (optional)' => 'Pokročilá nastavení (volitelné)',
  'Advanced settings requiring an admin user for the API (optional)' => 'Pokročilá nastavení vyžadující administrátora pro rozhraní API (volitelné)',
  'Authentication to Keycloak API failed!' => 'Ověření pomocí Keycloak API se nezdařilo!',
  'Authentication to Keycloak API succeeded!' => 'Autentizace na Keycloak API byla úspěšná!',
  'Automatic login' => 'Automatické přihlášení',
  'Base URL' => 'Základní URL',
  'Button {AddMapper} (for Keycloak version <20: {AddBuiltin}) and add theses attributes:' => 'Tlačítko {AddMapper} (pro Humhub verze <20: {AddBuiltin} ) a přidejte tyto atributy:',
  'Called {nameInEnglish} in english' => 'V angličtině se nazývá {nameInEnglish}',
  'Change password on {keycloakRealmDisplayName}' => 'Změňte heslo na {keycloakRealmDisplayName}',
  'Client ID' => 'ID klienta',
  'Client secret is in the "Credentials" tab (if in the settings "Access Type" is set to "confidential")' => 'Tajný klíč klienta je na kartě "Přihlašovací údaje" (pokud je v nastavení "Typ přístupu" nastaven na "důvěrný")',
  'Client secret key' => 'Tajný klíč klienta',
  'Confirm new password' => 'Potvrďte nové heslo',
  'Edit {usernameAttribute} and in {TokenClaimName}, replace {preferredUsernameAttribute} with {idAttribute}' => 'Upravte {usernameAttribute} a v {TokenClaimName} nahraďte {preferredUsernameAttribute} za {idAttribute}',
  'Enable this auth client' => 'Povolit tohoto ověřovacího klienta',
  'For administrators allowed to manage users' => 'Pro administrátory s oprávněním spravovat uživatele',
  'Hide username field in registration form' => 'Skrýt pole uživatelského jména v registračním formuláři',
  'Humhub to Keycloak sync is done in real time. Keycloak to Humhub sync is done once a day. Keycloak subgroups are not synced.' => 'Synchronizace Humhub to Keycloak probíhá v reálném čase. Synchronizace Keycloak s Humhubem se provádí jednou denně. Podskupiny Keycloak nejsou synchronizovány.',
  'If enabled, you should also enable {removeKeycloakSessionsAfterLogoutAttrLabel}, otherwise users cannot logout.' => 'Pokud je povoleno, měli byste také povolit {removeKeycloakSessionsAfterLogoutAttrLabel} , jinak se uživatelé nebudou moci odhlásit.',
  'If the username sent by Keycloak is the user\'s email, it is replaced by a username auto-generated from the first and last name (CamelCase formatted)' => 'Pokud je uživatelské jméno zaslané Keycloak e-mailem uživatele, je nahrazeno uživatelským jménem automaticky vygenerovaným z jména a příjmení (ve formátu CamelCase)',
  'If you set a custom title, it will not be translated to the user\'s language unless you have a custom translation file in the protected/config folder. Leave blank to set default title.' => 'Pokud nastavíte vlastní název, nebude přeložen do jazyka uživatele, pokud nemáte vlastní soubor překladu ve složce protected/config. Chcete-li nastavit výchozí název, ponechte prázdné.',
  'In admin, hide password fields in edit user form' => 'V admin skryjte pole hesla ve formuláři pro úpravu uživatele',
  'Keycloak API admin password' => 'Heslo správce rozhraní Keycloak API',
  'Keycloak API admin username' => 'Uživatelské jméno správce rozhraní Keycloak API',
  'Keycloak attribute to use to get username on account creation' => 'Atribut Keycloak, který se má použít k získání uživatelského jména při vytváření účtu',
  'New password' => 'Nové heslo',
  'No sync' => 'Žádná synchronizace',
  'On Keycloak, create a client for Humhub and configure it:' => 'Na Keycloak vytvořte klienta pro Humhub a nakonfigurujte jej:',
  'Password confirmation does not match.' => 'Potvrzení hesla se neshoduje.',
  'Possible only if {newUsersCanRegister} is allowed in Administration -> Users -> Settings.' => 'Možné pouze v případě, že je povolen {newUsersCanRegister} v Administraci -> Uživatelé -> Nastavení.',
  'Realm name' => 'Jméno říše',
  'Remove user\'s Keycloak sessions after logout' => 'Po odhlášení odeberte uživatelské relace Keycloak',
  'Sync Humhub towards Keycloak' => 'Synchronizujte Humhub s Keycloak',
  'Sync Humhub towards Keycloak (but no removal on Keycloak)' => 'Synchronizovat Humhub s Keycloak (ale bez odstranění na Keycloak)',
  'Sync Keycloak towards Humhub' => 'Synchronizujte Keycloak směrem k Humhubu',
  'Sync Keycloak towards Humhub (but no removal on Humhub)' => 'Synchronizace Keycloak směrem k Humhubu (ale žádné odstranění na Humhubu)',
  'Sync both ways' => 'Synchronizujte oběma způsoby',
  'Sync both ways (but no removal on Humhub)' => 'Synchronizace oběma způsoby (ale žádné odstranění na Humhubu)',
  'Sync both ways (but no removal on Keycloak or Humhub)' => 'Synchronizace oběma způsoby (ale žádné odstranění na Keycloak nebo Humhub)',
  'Sync both ways (but no removal on Keycloak)' => 'Synchronizace oběma způsoby (ale žádné odstranění na Keycloak)',
  'Synchronize groups and their members' => 'Synchronizujte skupiny a jejich členy',
  'The client id provided by Keycloak' => 'ID klienta poskytnuté společností Keycloak',
  'The new password could not be saved.' => 'Nové heslo se nepodařilo uložit.',
  'This admin user must be in the {master} realm and have permission to manage users of the realm belonging to the client for this Humhub' => 'Tento administrátor musí být v {master} sféře a mít oprávnění ke správě uživatelů sféry patřící klientovi pro tento Humhub',
  'Title of the button (if autoLogin is disabled)' => 'Název tlačítka (pokud je deaktivováno automatické přihlášení)',
  'Update user\'s email on Humhub when changed on Keycloak' => 'Aktualizujte e-mail uživatele na Humhub při změně na Keycloak',
  'Update user\'s email on Keycloak when changed on Humhub' => 'Aktualizujte e-mail uživatele na Keycloak při změně na Humhubu',
  'Update user\'s username on Humhub when changed on Keycloak' => 'Aktualizujte uživatelské jméno uživatele na Humhub při změně na Keycloak',
  'Update user\'s username on Keycloak when changed on Humhub' => 'Aktualizujte uživatelské jméno uživatele na Keycloak při změně na Humhubu',
  'Will only work if in Keycloak\'s realm settings "Email as username" is disabled and "Edit username" is enabled.' => 'Bude fungovat pouze v případě, že v nastavení sféry Keycloak je zakázáno „E-mailovat jako uživatelské jméno“ a povoleno „Upravit uživatelské jméno“.',
  'Your current password can be changed here.' => 'Vaše aktuální heslo lze změnit zde.',
  '`preferred_username` (to use Keycloak username), `sub` (to use Keycloak ID) or other custom Token Claim Name' => '`preferred_username` (pro použití uživatelského jména Keycloak), `sub` (pro použití Keycloak ID) nebo jiného vlastního názvu nároku na token',
  '{ClientScope} tab -> click on the first {scopeName} (for Keycloak version <20: {Mappers} tab):' => 'Záložka {ClientScope} -> klikněte na první {scopeName} (pro Humhub verze <20: karta {Mappers} ):',
  '{Credentials} tab: copy the secret key' => 'Karta {Credentials} : zkopírujte tajný klíč',
  '{Settings} tab -> {ClientAuthenticationOn} (for Keycloak version <20: {AccessTypeValue}).' => 'Záložka {Settings} -> {ClientAuthenticationOn} (pro Humhub verze <20: {AccessTypeValue} ).',
  '{Settings} tab -> {ValidRedirectURIsValue}.' => 'Záložka {Settings} -> {ValidRedirectURIsValue} .',
);
