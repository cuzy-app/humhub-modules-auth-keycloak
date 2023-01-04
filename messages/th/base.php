<?php
return array (
  '<strong>Keycloak</strong> Sign-In configuration' => 'การกำหนดค่าการลงชื่อเข้าใช้ <strong>Keycloak</strong>',
  'Add a page in account settings allowing users to change their Keycloak password' => 'เพิ่มหน้าในการตั้งค่าบัญชีเพื่อให้ผู้ใช้สามารถเปลี่ยนรหัสผ่าน Keycloak ได้',
  'Advanced settings (optional)' => 'การตั้งค่าขั้นสูง (ไม่บังคับ)',
  'Advanced settings requiring an admin user for the API (optional)' => 'การตั้งค่าขั้นสูงที่ต้องใช้ผู้ดูแลระบบสำหรับ API (ไม่บังคับ)',
  'Authentication to Keycloak API failed!' => 'การตรวจสอบความถูกต้องของ Keycloak API ล้มเหลว!',
  'Authentication to Keycloak API succeeded!' => 'การตรวจสอบความถูกต้องของ Keycloak API สำเร็จแล้ว!',
  'Automatic login' => 'เข้าสู่ระบบอัตโนมัติ',
  'Base URL' => 'URL ฐาน',
  'Button {AddMapper} (for Keycloak version <20: {AddBuiltin}) and add theses attributes:' => 'ปุ่ม {AddMapper} (สำหรับรุ่น Humhub <20: {AddBuiltin} ) และเพิ่มแอตทริบิวต์เหล่านี้:',
  'Called {nameInEnglish} in english' => 'เรียกชื่อ {nameInEnglish} in English',
  'Change password on {keycloakRealmDisplayName}' => 'เปลี่ยนรหัสผ่านบน {keycloakRealmDisplayName}',
  'Client ID' => 'รหัสลูกค้า',
  'Client secret is in the "Credentials" tab (if in the settings "Access Type" is set to "confidential")' => 'ความลับของไคลเอ็นต์อยู่ในแท็บ "ข้อมูลประจำตัว" (หากในการตั้งค่า "ประเภทการเข้าถึง" ถูกตั้งค่าเป็น "ลับ")',
  'Client secret key' => 'รหัสลับลูกค้า',
  'Confirm new password' => 'ยืนยันรหัสผ่านใหม่',
  'Edit {usernameAttribute} and in {TokenClaimName}, replace {preferredUsernameAttribute} with {idAttribute}' => 'แก้ไข {usernameAttribute} และใน {TokenClaimName} แทนที่ {preferredUsernameAttribute} ด้วย {idAttribute}',
  'Enable this auth client' => 'เปิดใช้งานไคลเอนต์รับรองความถูกต้องนี้',
  'For administrators allowed to manage users' => 'สำหรับผู้ดูแลระบบอนุญาตให้จัดการผู้ใช้',
  'Hide username field in registration form' => 'ซ่อนช่องชื่อผู้ใช้ในแบบฟอร์มลงทะเบียน',
  'Humhub to Keycloak sync is done in real time. Keycloak to Humhub sync is done once a day. Keycloak subgroups are not synced.' => 'การซิงค์ Humhub กับ Keycloak ทำได้แบบเรียลไทม์ การซิงค์ Keycloak ไปยัง Humhub ทำได้วันละครั้ง กลุ่มย่อย Keycloak ไม่ได้รับการซิงค์',
  'If enabled, you should also enable {removeKeycloakSessionsAfterLogoutAttrLabel}, otherwise users cannot logout.' => 'หากเปิดใช้งาน คุณควรเปิดใช้ {removeKeycloakSessionsAfterLogoutAttrLabel} ด้วย มิฉะนั้น ผู้ใช้จะไม่สามารถออกจากระบบได้',
  'If the username sent by Keycloak is the user\'s email, it is replaced by a username auto-generated from the first and last name (CamelCase formatted)' => 'หากชื่อผู้ใช้ที่ส่งโดย Keycloak เป็นอีเมลของผู้ใช้ จะถูกแทนที่ด้วยชื่อผู้ใช้ที่สร้างขึ้นโดยอัตโนมัติจากชื่อและนามสกุล (รูปแบบ CamelCase)',
  'If you set a custom title, it will not be translated to the user\'s language unless you have a custom translation file in the protected/config folder. Leave blank to set default title.' => 'หากคุณตั้งชื่อที่กำหนดเอง ชื่อนั้นจะไม่ถูกแปลเป็นภาษาของผู้ใช้ เว้นแต่คุณจะมีไฟล์การแปลแบบกำหนดเองในโฟลเดอร์ที่ได้รับการป้องกัน/config เว้นว่างไว้เพื่อตั้งชื่อเริ่มต้น',
  'In admin, hide password fields in edit user form' => 'ในผู้ดูแลระบบ ให้ซ่อนฟิลด์รหัสผ่านในแบบฟอร์มแก้ไขผู้ใช้',
  'Keycloak API admin password' => 'รหัสผ่านผู้ดูแลระบบ Keycloak API',
  'Keycloak API admin username' => 'ชื่อผู้ใช้ของผู้ดูแลระบบ Keycloak API',
  'Keycloak attribute to use to get username on account creation' => 'แอตทริบิวต์ Keycloak เพื่อใช้รับชื่อผู้ใช้ในการสร้างบัญชี',
  'New password' => 'รหัสผ่านใหม่',
  'No sync' => 'ไม่มีการซิงค์',
  'On Keycloak, create a client for Humhub and configure it:' => 'บน Keycloak สร้างไคลเอนต์สำหรับ Humhub และกำหนดค่า:',
  'Password confirmation does not match.' => 'การยืนยันรหัสผ่านไม่ตรงกัน',
  'Possible only if {newUsersCanRegister} is allowed in Administration -> Users -> Settings.' => 'เป็นไปได้ก็ต่อเมื่อ {newUsersCanRegister} ได้รับอนุญาตในการดูแลระบบ -> ผู้ใช้ -> การตั้งค่า',
  'Realm name' => 'ชื่ออาณาจักร',
  'Remove user\'s Keycloak sessions after logout' => 'ลบเซสชัน Keycloak ของผู้ใช้หลังจากออกจากระบบ',
  'Sync Humhub towards Keycloak' => 'ซิงค์ Humhub กับ Keycloak',
  'Sync Humhub towards Keycloak (but no removal on Keycloak)' => 'ซิงค์ Humhub กับ Keycloak (แต่ไม่มีการลบใน Keycloak)',
  'Sync Keycloak towards Humhub' => 'ซิงค์ Keycloak กับ Humhub',
  'Sync Keycloak towards Humhub (but no removal on Humhub)' => 'ซิงค์ Keycloak กับ Humhub (แต่ไม่มีการลบใน Humhub)',
  'Sync both ways' => 'ซิงค์ทั้งสองวิธี',
  'Sync both ways (but no removal on Humhub)' => 'ซิงค์ทั้งสองวิธี (แต่ไม่มีการลบใน Humhub)',
  'Sync both ways (but no removal on Keycloak or Humhub)' => 'ซิงค์ทั้งสองวิธี (แต่ไม่มีการลบใน Keycloak หรือ Humhub)',
  'Sync both ways (but no removal on Keycloak)' => 'ซิงค์ทั้งสองวิธี (แต่ไม่มีการลบใน Keycloak)',
  'Synchronize groups and their members' => 'ประสานกลุ่มและสมาชิก',
  'The client id provided by Keycloak' => 'รหัสลูกค้าที่จัดทำโดย Keycloak',
  'The new password could not be saved.' => 'ไม่สามารถบันทึกรหัสผ่านใหม่ได้',
  'This admin user must be in the {master} realm and have permission to manage users of the realm belonging to the client for this Humhub' => 'ผู้ดูแลระบบนี้ต้องอยู่ในขอบเขต {master} และมีสิทธิ์จัดการผู้ใช้ของขอบเขตที่เป็นของลูกค้าสำหรับ Humhub นี้',
  'Title of the button (if autoLogin is disabled)' => 'ชื่อของปุ่ม (หากปิดใช้งานการเข้าสู่ระบบอัตโนมัติ)',
  'Update user\'s email on Humhub when changed on Keycloak' => 'อัปเดตอีเมลของผู้ใช้บน Humhub เมื่อเปลี่ยนใน Keycloak',
  'Update user\'s email on Keycloak when changed on Humhub' => 'อัปเดตอีเมลของผู้ใช้บน Keycloak เมื่อเปลี่ยนใน Humhub',
  'Update user\'s username on Humhub when changed on Keycloak' => 'อัปเดตชื่อผู้ใช้ของผู้ใช้บน Humhub เมื่อเปลี่ยนบน Keycloak',
  'Update user\'s username on Keycloak when changed on Humhub' => 'อัปเดตชื่อผู้ใช้บน Keycloak เมื่อเปลี่ยนบน Humhub',
  'Will only work if in Keycloak\'s realm settings "Email as username" is disabled and "Edit username" is enabled.' => 'จะใช้ได้เฉพาะในกรณีที่การตั้งค่าขอบเขตของ Keycloak "อีเมลเป็นชื่อผู้ใช้" ถูกปิดใช้งานและเปิดใช้งาน "แก้ไขชื่อผู้ใช้"',
  'Your current password can be changed here.' => 'รหัสผ่านปัจจุบันของคุณสามารถเปลี่ยนได้ที่นี่',
  '`preferred_username` (to use Keycloak username), `sub` (to use Keycloak ID) or other custom Token Claim Name' => '`preferred_username\' (เพื่อใช้ชื่อผู้ใช้ Keycloak), `sub\' (เพื่อใช้ Keycloak ID) หรือชื่อการอ้างสิทธิ์ Token ที่กำหนดเองอื่น ๆ',
  '{ClientScope} tab -> click on the first {scopeName} (for Keycloak version <20: {Mappers} tab):' => 'แท็บ {ClientScope} -> คลิกที่ {scopeName} แรก (สำหรับเวอร์ชัน Humhub <20: แท็บ {Mappers} ):',
  '{Credentials} tab: copy the secret key' => 'แท็บ {Credentials} : คัดลอกรหัสลับ',
  '{Settings} tab -> {ClientAuthenticationOn} (for Keycloak version <20: {AccessTypeValue}).' => 'แท็บ {Settings} -> {ClientAuthenticationOn} (สำหรับ Humhub รุ่น <20: {AccessTypeValue} )',
  '{Settings} tab -> {ValidRedirectURIsValue}.' => 'แท็บ {Settings} -> {ValidRedirectURIsValue}',
);
