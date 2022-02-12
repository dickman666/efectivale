CREATE TABLE users (
  id int IDENTITY(1,1) PRIMARY KEY,
  user_group_id varchar(256) DEFAULT NULL,
  username varchar(100) DEFAULT NULL,
  password varchar(255) DEFAULT NULL,
  email varchar(100) DEFAULT NULL,
  first_name varchar(100) DEFAULT NULL,
  last_name varchar(100) DEFAULT NULL,
  gender varchar(20) DEFAULT NULL,
  photo varchar(50) DEFAULT NULL,
  bday date DEFAULT NULL,
  active tinyint DEFAULT 0,
  email_verified tinyint NOT NULL DEFAULT 0,
  last_login datetime DEFAULT NULL,
  ip_address varchar(50) DEFAULT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  created_by int DEFAULT NULL,
  modified_by int DEFAULT NULL
 );

alter table users add user_status_id int;
alter table users add deleted tinyint;

CREATE INDEX username ON users(username);
CREATE INDEX email ON users(email);

SET IDENTITY_INSERT dbo.users ON;

INSERT INTO users (id, user_group_id, username, password, email, first_name, last_name, gender, photo, bday, active, email_verified, last_login, ip_address, created, modified, created_by, modified_by) VALUES
(1, '1', 'admin', '$2y$10$.dezXbhZdar0R0YWE45R3.NshUKQn6OXXqlWdcJe1tevJSWo469ei', 'admin@admin.com', 'Admin', '', NULL, NULL, NULL, 1, 1, NULL, NULL, getdate(), getdate(), NULL, NULL);

SET IDENTITY_INSERT dbo.users OFF;

-------------------------------------------------------------------------------------

CREATE TABLE user_settings (
  id int IDENTITY(1,1) PRIMARY KEY,
  name varchar(100) DEFAULT NULL,
  display_name varchar(1024) DEFAULT NULL,
  value text,
  type varchar(50) DEFAULT NULL,
  category varchar(20) DEFAULT 'OTHER'
);

SET IDENTITY_INSERT dbo.user_settings ON;

INSERT INTO user_settings (id, name, display_name, value, type, category) VALUES
(1, 'default_time_zone', 'Enter default time zone identifier for e.g. America/New_York', 'America/New_York', 'input', 'SITE'),
(2, 'site_name', 'Enter Your Full Site Name', 'User Management Plugin', 'input', 'SITE'),
(3, 'site_name_short', 'Enter Your Short Site Name', 'UMP', 'input', 'SITE'),
(4, 'login_redirect_url', 'Enter URL where user will be redirected after login', '/dashboard', 'input', 'SITE'),
(5, 'logout_redirect_url', 'Enter URL where user will be redirected after logout', '/login', 'input', 'SITE'),
(6, 'login_cookie_name', 'Please enter login cookie name for your site which is used to login user automatically for remember me functionality', 'UMPremiumCookie', 'input', 'SITE'),
(7, 'use_https', 'Do you want to use HTTPS for whole site?', '0', 'checkbox', 'SITE'),
(8, 'https_urls', 'You can enter selected urls for HTTPS, If URL belongs to any plugin then prepend plugin name in URL, if you want to allow all actions of controller on HTTPS then use controllername/* (e.g. usermgmt/users/login, usermgmt/users/register, products/cart, payments/*)', NULL, 'input', 'SITE'),
(9, 'default_group_id', 'Enter default group id for user registration', '2', 'input', 'GROUP'),
(10, 'admin_group_id', 'Enter Admin Group Id', '1', 'input', 'GROUP'),
(11, 'guest_group_id', 'Enter Guest Group Id', '3', 'input', 'GROUP'),
(12, 'site_registration', 'Do you want to allow new registrations?', '1', 'checkbox', 'USER'),
(13, 'email_verification', 'Do you want user to verify his/her email address during registration?', '1', 'checkbox', 'EMAIL'),
(14, 'allow_delete_account', 'Do you want to allow users to delete their account', '0', 'checkbox', 'USER'),
(15, 'allow_change_username', 'Do you want to allow users to change their username?', '0', 'checkbox', 'USER'),
(16, 'banned_usernames', 'Enter banned usernames comma separated(no space, no quotes)', 'Administrator, SuperAdmin', 'input', 'USER'),
(17, 'permissions', 'Do you want to check permissions for users?', '1', 'checkbox', 'PERMISSION'),
(18, 'admin_permissions', 'Do you want to check permissions for Admin?', '0', 'checkbox', 'PERMISSION'),
(19, 'allow_user_multiple_login', 'Do you want to allow multiple logins with same user account for users(not admin)?', '1', 'checkbox', 'USER'),
(20, 'allow_admin_multiple_login', 'Do you want to allow multiple logins with same user account for admin(not users)?', '1', 'checkbox', 'USER'),
(21, 'login_idle_time', 'Set max idle time in minutes for user. This idle time will be used when multiple logins are not allowed for same user account. If max idle time reached since user last activity on the site then anyone can login with same account in other browser and idle user will be logged out.', '10', 'input', 'USER'),
(22, 'view_online_user_time', 'You can view online users and guest from last few minutes, set time in minutes ', '30', 'input', 'USER'),
(23, 'img_dir', 'Enter Image directory name where users profile photos will be uploaded. This directory should be in webroot/library directory', 'umphotos', 'input', 'USER'),
(24, 'qrdn', 'Increase this number by 1 every time if you made any changes in CSS or JS file, If you delete cache from admin then it increases automatically', '123456790', 'input', 'SITE'),
(25, 'use_remember_me', 'Do you want to show remember me feature on login page?', '1', 'checkbox', 'USER'),
(26, 'email_from_address', 'Enter From Email Address to send emails', 'test@test.com', 'input', 'EMAIL'),
(27, 'email_from_name', 'Enter From Email Name', 'User Management Plugin', 'input', 'EMAIL'),
(28, 'admin_email_address', 'Enter Admin Email Address to receive emails for e.g. contact enquiries', NULL, 'input', 'EMAIL'),
(29, 'send_registration_mail', 'Do you want to send welcome registration email to user after registration', '0', 'checkbox', 'EMAIL'),
(30, 'send_password_change_mail', 'Do you want to send password change email if users change their password', '0', 'checkbox', 'EMAIL'),
(31, 'private_key_from_recaptcha', 'Enter private key for Recaptcha from google (also known as secret key)', NULL, 'input', 'RECAPTCHA'),
(32, 'public_key_from_recaptcha', 'Enter public key for recaptcha from google (also known as site key)', NULL, 'input', 'RECAPTCHA'),
(33, 'use_recaptcha_on_login', 'Do you want to add captcha support on login form?', '0', 'checkbox', 'RECAPTCHA'),
(34, 'use_recaptcha_on_bad_login', 'Do you want to add captcha support on bad login? if user tried bad login credentials then after specifed bad login count recaptcha will be added on login form', '0', 'checkbox', 'RECAPTCHA'),
(35, 'bad_login_allow_count', 'Enter bad login count to add captcha on login. for e.g. 5 or 10', '5', 'input', 'RECAPTCHA'),
(36, 'use_recaptcha_on_registration', 'Do you want to add captcha support on registration form? ', '0', 'checkbox', 'RECAPTCHA'),
(37, 'use_recaptcha_on_forgot_password', 'Do you want to add captcha support on forgot password page? ', '0', 'checkbox', 'RECAPTCHA'),
(38, 'use_recaptcha_on_email_verification', 'Do you want to add captcha support on email verification page? ', '0', 'checkbox', 'RECAPTCHA'),
(39, 'use_fb_login', 'Do you want to use Facebook Connect on your site?', '0', 'checkbox', 'FACEBOOK'),
(40, 'fb_app_id', 'Enter Facebook Application Id', NULL, 'input', 'FACEBOOK'),
(41, 'fb_secret', 'Enter Facebook Application Secret Code', NULL, 'input', 'FACEBOOK'),
(42, 'fb_scope', 'Enter Facebook Permissions', 'email', 'input', 'FACEBOOK'),
(43, 'use_twt_login', 'Want to use Twitter Connect on your site?', '0', 'checkbox', 'TWITTER'),
(44, 'twt_app_id', 'Enter Twitter Consumer Key', NULL, 'input', 'TWITTER'),
(45, 'twt_secret', 'Enter Twitter Consumer Secret', NULL, 'input', 'TWITTER'),
(46, 'use_gmail_login', 'Do you want to use Google Connect on your site?', '0', 'checkbox', 'GOOGLE'),
(47, 'gmail_api_key', 'Enter Google Api Key', NULL, 'input', 'GOOGLE'),
(48, 'gmail_client_id', 'Enter Google Client Id', NULL, 'input', 'GOOGLE'),
(49, 'gmail_client_secret', 'Enter Google Client Secret', NULL, 'input', 'GOOGLE'),
(50, 'use_yahoo_login', 'Do you want to use Yahoo Connect on your site?', '0', 'checkbox', 'YAHOO'),
(51, 'use_ldn_login', 'Do you want to use Linkedin Connect on your site?', '0', 'checkbox', 'LINKEDIN'),
(52, 'ldn_api_key', 'Enter Linkedin Api Key', NULL, 'input', 'LINKEDIN'),
(53, 'ldn_secret_key', 'Enter Linkedin Secret Key', NULL, 'input', 'LINKEDIN'),
(54, 'use_fs_login', 'Do you want to use Foursquare Connect on your site?', '0', 'checkbox', 'FOURSQUARE'),
(55, 'fs_client_id', 'Enter Foursquare Client Id', NULL, 'input', 'FOURSQUARE'),
(56, 'fs_client_secret', 'Enter Foursquare Client Secret', NULL, 'input', 'FOURSQUARE'),
(57, 'change_password_on_social_registration', 'Do you want to show change password page after user registration from social account?', '1', 'checkbox', 'USER'),
(58, 'default_html_editor', 'Which is default html editor for your application, possible values are Tinymce, Ckeditor', '2', 'radio', 'SITE'),
(59, 'notification_message_position', 'We are using toastr message notification. Please enter flash message position on screen. possible values are\ntoast-top-center\ntoast-bottom-center\ntoast-top-full-width\ntoast-bottom-full-width\ntoast-top-left\ntoast-top-right\ntoast-bottom-right\ntoast-bottom-left', 'toast-top-full-width', 'input', 'SITE'),
(60, 'notification_message_close_time', 'We are using toastr message notification. Please enter flash message close/hide time in seconds. You can leave blank if you do not want to auto close/hide.', '10', 'input', 'SITE');

SET IDENTITY_INSERT dbo.user_settings OFF;

----------------------------------------------------------------------------------------

CREATE TABLE user_setting_options (
  id int IDENTITY(1,1) PRIMARY KEY,
  user_setting_id int NOT NULL,
  setting_option_id int NOT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL
);

SET IDENTITY_INSERT dbo.user_setting_options ON;

INSERT INTO user_setting_options (id, user_setting_id, setting_option_id, created, modified) VALUES
(1, 58, 1, getdate(), getdate()),
(2, 58, 2, getdate(), getdate());

SET IDENTITY_INSERT dbo.user_setting_options OFF;

--------------------------------------------------------------------------------------

CREATE TABLE user_details (
  id int IDENTITY(1,1) PRIMARY KEY,
  user_id int NOT NULL,
  location varchar(256) DEFAULT NULL,
  cellphone varchar(15) DEFAULT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL
);

SET IDENTITY_INSERT dbo.user_details ON;

INSERT INTO user_details (id, user_id, location, cellphone, created, modified) VALUES
(1, 1, NULL, NULL, getdate(), getdate());

SET IDENTITY_INSERT dbo.user_details OFF;

---------------------------------------------------------------------------------------

CREATE TABLE user_groups (
  id int IDENTITY(1,1) PRIMARY KEY,
  parent_id int NOT NULL DEFAULT '0',
  name varchar(100) DEFAULT NULL,
  description text,
  registration_allowed tinyint NOT NULL DEFAULT '1',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL
);

SET IDENTITY_INSERT dbo.user_groups ON;

INSERT INTO user_groups (id, parent_id, name, description, registration_allowed, created, modified) VALUES
(1, 0, 'Admin', NULL, 0, getdate(), getdate());

SET IDENTITY_INSERT dbo.user_groups OFF;

---------------------------------------------------------------------------------------

CREATE TABLE user_group_permissions (
  id int IDENTITY(1,1) PRIMARY KEY,
  user_group_id int NOT NULL,
  prefix varchar(256) DEFAULT NULL,
  plugin varchar(50) DEFAULT NULL,
  controller varchar(50) NOT NULL,
  action varchar(100) NOT NULL,
  allowed tinyint NOT NULL DEFAULT '1'
);

SET IDENTITY_INSERT dbo.user_group_permissions ON;

INSERT INTO user_group_permissions (id, user_group_id, prefix, plugin, controller, action, allowed) VALUES
(1, 1, NULL, NULL, 'Pages', 'display', 1),
(2, 1, NULL, 'Usermgmt', 'Autocomplete', 'fetch', 1),
(3, 1, NULL, 'Usermgmt', 'StaticPages', 'index', 1),
(4, 1, NULL, 'Usermgmt', 'StaticPages', 'add', 1),
(5, 1, NULL, 'Usermgmt', 'StaticPages', 'edit', 1),
(6, 1, NULL, 'Usermgmt', 'StaticPages', 'view', 1),
(7, 1, NULL, 'Usermgmt', 'StaticPages', 'delete', 1),
(8, 1, NULL, 'Usermgmt', 'StaticPages', 'preview', 1),
(9, 1, NULL, 'Usermgmt', 'UserContacts', 'index', 1),
(10, 1, NULL, 'Usermgmt', 'UserContacts', 'contactUs', 1),
(11, 1, NULL, 'Usermgmt', 'UserContacts', 'sendReply', 1),
(12, 1, NULL, 'Usermgmt', 'UserEmails', 'index', 1),
(13, 1, NULL, 'Usermgmt', 'UserEmails', 'send', 1),
(14, 1, NULL, 'Usermgmt', 'UserEmails', 'sendToUser', 1),
(15, 1, NULL, 'Usermgmt', 'UserEmails', 'view', 1),
(16, 1, NULL, 'Usermgmt', 'UserEmails', 'searchEmails', 1),
(17, 1, NULL, 'Usermgmt', 'UserEmailSignatures', 'index', 1),
(18, 1, NULL, 'Usermgmt', 'UserEmailSignatures', 'add', 1),
(19, 1, NULL, 'Usermgmt', 'UserEmailSignatures', 'edit', 1),
(20, 1, NULL, 'Usermgmt', 'UserEmailSignatures', 'delete', 1),
(21, 1, NULL, 'Usermgmt', 'UserEmailTemplates', 'index', 1),
(22, 1, NULL, 'Usermgmt', 'UserEmailTemplates', 'add', 1),
(23, 1, NULL, 'Usermgmt', 'UserEmailTemplates', 'edit', 1),
(24, 1, NULL, 'Usermgmt', 'UserEmailTemplates', 'delete', 1),
(25, 1, NULL, 'Usermgmt', 'UserGroupPermissions', 'permissionGroupMatrix', 1),
(26, 1, NULL, 'Usermgmt', 'UserGroupPermissions', 'permissionSubGroupMatrix', 1),
(27, 1, NULL, 'Usermgmt', 'UserGroupPermissions', 'changePermission', 1),
(28, 1, NULL, 'Usermgmt', 'UserGroupPermissions', 'getPermissions', 1),
(29, 1, NULL, 'Usermgmt', 'UserGroups', 'index', 1),
(30, 1, NULL, 'Usermgmt', 'UserGroups', 'add', 1),
(31, 1, NULL, 'Usermgmt', 'UserGroups', 'edit', 1),
(32, 1, NULL, 'Usermgmt', 'UserGroups', 'delete', 1),
(33, 1, NULL, 'Usermgmt', 'Users', 'dashboard', 1),
(34, 1, NULL, 'Usermgmt', 'Users', 'index', 1),
(35, 1, NULL, 'Usermgmt', 'Users', 'indexSearch', 1),
(36, 1, NULL, 'Usermgmt', 'Users', 'online', 1),
(37, 1, NULL, 'Usermgmt', 'Users', 'addUser', 1),
(38, 1, NULL, 'Usermgmt', 'Users', 'editUser', 1),
(39, 1, NULL, 'Usermgmt', 'Users', 'viewUser', 1),
(40, 1, NULL, 'Usermgmt', 'Users', 'deleteUser', 1),
(41, 1, NULL, 'Usermgmt', 'Users', 'setActive', 1),
(42, 1, NULL, 'Usermgmt', 'Users', 'setInactive', 1),
(43, 1, NULL, 'Usermgmt', 'Users', 'verifyEmail', 1),
(44, 1, NULL, 'Usermgmt', 'Users', 'changeUserPassword', 1),
(45, 1, NULL, 'Usermgmt', 'Users', 'logoutUser', 1),
(46, 1, NULL, 'Usermgmt', 'Users', 'viewUserPermissions', 1),
(47, 1, NULL, 'Usermgmt', 'Users', 'uploadCsv', 1),
(48, 1, NULL, 'Usermgmt', 'Users', 'addMultipleUsers', 1),
(49, 1, NULL, 'Usermgmt', 'Users', 'accessDenied', 1),
(50, 1, NULL, 'Usermgmt', 'Users', 'login', 1),
(51, 1, NULL, 'Usermgmt', 'Users', 'logout', 1),
(52, 1, NULL, 'Usermgmt', 'Users', 'register', 1),
(53, 1, NULL, 'Usermgmt', 'Users', 'myprofile', 1),
(54, 1, NULL, 'Usermgmt', 'Users', 'editProfile', 1),
(55, 1, NULL, 'Usermgmt', 'Users', 'changePassword', 1),
(56, 1, NULL, 'Usermgmt', 'Users', 'deleteAccount', 1),
(57, 1, NULL, 'Usermgmt', 'Users', 'forgotPassword', 1),
(58, 1, NULL, 'Usermgmt', 'Users', 'activatePassword', 1),
(59, 1, NULL, 'Usermgmt', 'Users', 'emailVerification', 1),
(60, 1, NULL, 'Usermgmt', 'Users', 'userVerification', 1),
(61, 1, NULL, 'Usermgmt', 'Users', 'deleteCache', 1),
(62, 1, NULL, 'Usermgmt', 'UserSettings', 'index', 1),
(63, 1, NULL, 'Usermgmt', 'UserSettings', 'editSetting', 1),
(64, 1, NULL, 'Usermgmt', 'UserSettings', 'cakelog', 1),
(65, 1, NULL, 'Usermgmt', 'UserSettings', 'cakelogbackup', 1),
(66, 1, NULL, 'Usermgmt', 'UserSettings', 'cakelogdelete', 1),
(67, 1, NULL, 'Usermgmt', 'UserSettings', 'cakelogempty', 1),
(68, 1, NULL, 'Usermgmt', 'CronJobs', 'sendScheduledEmails', 1),
(69, 1, NULL, 'Usermgmt', 'ScheduledEmails', 'index', 1),
(70, 1, NULL, 'Usermgmt', 'ScheduledEmails', 'edit', 1),
(71, 1, NULL, 'Usermgmt', 'ScheduledEmails', 'view', 1),
(72, 1, NULL, 'Usermgmt', 'ScheduledEmails', 'delete', 1),
(73, 1, NULL, 'Usermgmt', 'ScheduledEmails', 'delete_recipient', 1),
(74, 1, NULL, 'Usermgmt', 'SettingOptions', 'index', 1),
(75, 1, NULL, 'Usermgmt', 'SettingOptions', 'add', 1),
(76, 1, NULL, 'Usermgmt', 'SettingOptions', 'edit', 1),
(77, 1, NULL, 'Usermgmt', 'SettingOptions', 'delete', 1),
(78, 1, NULL, 'Usermgmt', 'UserGroupPermissions', 'printPermissionChanges', 1);

SET IDENTITY_INSERT dbo.user_group_permissions OFF;

---------------------------------------------------------------------------------------

CREATE TABLE setting_options (
  id int IDENTITY(1,1) PRIMARY KEY,
  title varchar(256) NOT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL
);

SET IDENTITY_INSERT dbo.setting_options ON;

INSERT INTO setting_options (id, title, created, modified) VALUES
(1, 'Tinymce', getdate(), getdate()),
(2, 'Ckeditor', getdate(), getdate());

SET IDENTITY_INSERT dbo.setting_options OFF;

---------------------------------------------------------------------------------------

CREATE TABLE login_tokens (
  id INT IDENTITY(1,1) PRIMARY KEY,
  user_id INT NOT NULL,
  token char(32) NOT NULL,
  duration varchar(32) NOT NULL,
  used tinyint NOT NULL DEFAULT '0',
  expires datetime NOT NULL,
  created datetime DEFAULT NULL
);

---------------------------------------------------------------------------------------

CREATE TABLE user_statuses (
  id int IDENTITY(1,1) PRIMARY KEY,
  name varchar(100) DEFAULT NULL,
  description text,
  color varchar(10) NOT NULL
);

SET IDENTITY_INSERT dbo.user_statuses ON;

INSERT INTO user_statuses (id, name, description, color) VALUES
(1, 'Activo', 'Activo', '#639449'),
(2, 'Inactivo', 'Inactivo', '#bf7d65');

SET IDENTITY_INSERT dbo.user_statuses OFF;

---------------------------------------------------------------------------------------

CREATE TABLE user_activities (
  id int IDENTITY(1,1) PRIMARY KEY,
  useragent varchar(256) NOT NULL,
  user_id int DEFAULT NULL,
  last_action int NOT NULL,
  last_url text,
  user_browser text,
  ip_address varchar(50) DEFAULT NULL,
  logout int NOT NULL DEFAULT '0',
  deleted tinyint NOT NULL DEFAULT '0',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL
);

---------------------------------------------------------------------------------------

