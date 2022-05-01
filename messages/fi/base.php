<?php
return array (
  '<strong>Keycloak</strong> Sign-In configuration' => '<strong>Keycloak</strong> -sisäänkirjautumisasetukset',
  'Add a page in account settings allowing users to change their Keycloak password' => 'Lisää tilin asetuksiin sivu, jolla käyttäjät voivat vaihtaa Keycloak-salasanansa',
  'Advanced settings (optional)' => 'Lisäasetukset (valinnainen)',
  'Advanced settings requiring an admin user for the API (optional)' => 'Lisäasetukset, jotka vaativat järjestelmänvalvojan sovellusliittymälle (valinnainen)',
  'Automatic login' => 'Automaattinen sisäänkirjautuminen',
  'Base URL' => 'Perus-URL-osoite',
  'Button {AddBuiltin} and check theses attributes:' => 'Painike {AddBuiltin} ja tarkista opinnäytetyön attribuutit:',
  'Change password on {keycloakRealmDisplayName}' => 'Vaihda salasana {keycloakRealmDisplayName}',
  'Client ID' => 'Asiakastunnus',
  'Client secret is in the "Credentials" tab (if in the settings "Access Type" is set to "confidential")' => 'Asiakkaan salaisuus on "Käyttöoikeustiedot"-välilehdellä (jos asetuksissa "Käyttöoikeustyyppi" on "luottamuksellinen")',
  'Client secret key' => 'Asiakkaan salainen avain',
  'Confirm new password' => 'Vahvista uusi salasana',
  'Edit {usernameAttribute} and in {TokenClaimName}, replace {preferredUsernameAttribute} with {idAttribute}' => 'Muokkaa {usernameAttribute} ja korvaa {TokenClaimName} -kohdassa {preferredUsernameAttribute} {idAttribute}',
  'Enable this auth client' => 'Ota tämä todennusohjelma käyttöön',
  'Hide username field in registration form' => 'Piilota käyttäjätunnuskenttä rekisteröintilomakkeessa',
  'Humhub to Keycloak sync is done in real time. Keycloak to Humhub sync is done once a day. Keycloak subgroups are not synced.' => 'Humhub ja Keycloak synkronointi tapahtuu reaaliajassa. Keycloak to Humhub synkronointi tehdään kerran päivässä. Keycoak-alaryhmiä ei synkronoida.',
  'If the username sent by Keycloak is the user\'s email, it is replaced by a username auto-generated from the first and last name (CamelCase formatted)' => 'Jos Keycloakin lähettämä käyttäjätunnus on käyttäjän sähköposti, se korvataan etu- ja sukunimestä automaattisesti luodulla käyttäjätunnuksella (CamelCase-muotoiltu)',
  'If you set a custom title, it will not be translated to the user\'s language unless you have a custom translation file in the protected/config folder. Leave blank to set default title.' => 'Jos asetat mukautetun otsikon, sitä ei käännetä käyttäjän kielelle, ellei suojatussa/konfiguraatiokansiossa ole mukautettua käännöstiedostoa. Jätä tyhjäksi asettaaksesi oletusotsikon.',
  'Keycloak API admin password' => 'Keycloak API -järjestelmänvalvojan salasana',
  'Keycloak API admin username' => 'Keycloak API -järjestelmänvalvojan käyttäjätunnus',
  'Keycloak attribute to use to get username on account creation: `preferred_username` (to use Keycloak username), `sub` (to use Keycloak ID) or other custom Token Claim Name' => 'Keycloak-attribuutti, jota käytetään käyttäjänimen hankkimiseen tilin luomisen yhteydessä: "preferred_username" (jotta käytetään Keycloak-käyttäjänimeä), "sub" (jotta käytetään Keycloak ID:tä) tai muu mukautettu Token Claim Name',
  'New password' => 'Uusi salasana',
  'No sync' => 'Ei synkronointia',
  'On Keycloak, create a client for Humhub and configure it:' => 'Luo Keycloakissa asiakas Humhubille ja määritä se:',
  'Password confirmation does not match.' => 'Salasanan vahvistus ei täsmää.',
  'Possible only if anonymous registration is allowed in the admin users settings' => 'Mahdollista vain, jos anonyymi rekisteröinti on sallittu järjestelmänvalvojan käyttäjien asetuksissa',
  'Realm name' => 'Valtakunnan nimi',
  'Remove user\'s Keycloak sessions after logout' => 'Poista käyttäjän Keycloak-istunnot uloskirjautumisen jälkeen',
  'Sync Humhub towards Keycloak' => 'Synkronoi Humhub Keycloakin kanssa',
  'Sync Humhub towards Keycloak (but no removal on Keycloak)' => 'Synkronoi Humhub Keycloakin kanssa (mutta ei poistamista Keycloakista)',
  'Sync Keycloak towards Humhub' => 'Synkronoi Keycloak Humhubiin',
  'Sync Keycloak towards Humhub (but no removal on Humhub)' => 'Synkronoi Keycloak Humhubiin (mutta ei poistamista Humhubista)',
  'Sync both ways' => 'Synkronoi molempiin suuntiin',
  'Sync both ways (but no removal on Humhub)' => 'Synkronoi molempiin suuntiin (mutta ei poistamista Humhubissa)',
  'Sync both ways (but no removal on Keycloak or Humhub)' => 'Synkronoi molempiin suuntiin (mutta ei poistamista Keycloakissa tai Humhubissa)',
  'Sync both ways (but no removal on Keycloak)' => 'Synkronoi molempiin suuntiin (mutta ei poistamista Keycloakissa)',
  'Synchronize groups and their members' => 'Synkronoi ryhmät ja niiden jäsenet',
  'The client id provided by Keycloak' => 'Keycloakin tarjoama asiakastunnus',
  'The new password could not be saved.' => 'Uutta salasanaa ei voitu tallentaa.',
  'This admin user must be in the {master} realm and have permission to manage users of the realm belonging to the client for this Humhub' => 'Tämän järjestelmänvalvojan käyttäjän on oltava pääalueella ja hänellä on oltava lupa {master} tämän Humhubin asiakkaalle kuuluvan alueen käyttäjiä',
  'Title of the button (if autoLogin is disabled)' => 'Painikkeen nimi (jos automaattinen sisäänkirjautuminen on poistettu käytöstä)',
  'Update user\'s email on Humhub when changed on Keycloak' => 'Päivitä käyttäjän sähköposti Humhubissa, kun sitä muutetaan Keycloakissa',
  'Update user\'s email on Keycloak when changed on Humhub' => 'Päivitä käyttäjän sähköposti Keycloakissa, kun sitä muutetaan Humhubissa',
  'Your current password can be changed here.' => 'Voit vaihtaa nykyisen salasanasi täällä.',
  '{Credentials} tab: copy the secret key' => '{Credentials} -välilehti: kopioi salainen avain',
  '{Mappers} tab:' => '{Mappers} välilehti:',
  '{Settings} tab -> {AccessType}: choose {confidential}. Save settings.' => '{Settings} -välilehti -> {AccessType} : valitse {confidential} . Tallenna asetukset.',
);
