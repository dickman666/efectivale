/*
 Navicat Premium Data Transfer

 Source Server         : Weenets1
 Source Server Type    : MySQL
 Source Server Version : 100038
 Source Host           : weenets.com:3306
 Source Schema         : weenets_efectivale

 Target Server Type    : MySQL
 Target Server Version : 100038
 File Encoding         : 65001

 Date: 12/02/2022 01:25:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apaterno` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `amaterno` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` decimal(10, 0) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  `visible` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for login_tokens
-- ----------------------------
DROP TABLE IF EXISTS `login_tokens`;
CREATE TABLE `login_tokens`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `duration` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT 0,
  `expires` datetime(0) NOT NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for setting_options
-- ----------------------------
DROP TABLE IF EXISTS `setting_options`;
CREATE TABLE `setting_options`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of setting_options
-- ----------------------------
INSERT INTO `setting_options` VALUES (1, 'Tinymce', '2015-12-22 20:24:30', '2015-12-22 20:24:30');
INSERT INTO `setting_options` VALUES (2, 'Ckeditor', '2015-12-22 20:24:30', '2015-12-22 20:24:30');

-- ----------------------------
-- Table structure for user_activities
-- ----------------------------
DROP TABLE IF EXISTS `user_activities`;
CREATE TABLE `user_activities`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `useragent` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `last_action` int(11) NOT NULL,
  `last_url` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `user_browser` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `ip_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `logout` int(11) NOT NULL DEFAULT 0,
  `deleted` int(1) NOT NULL DEFAULT 0,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for user_details
-- ----------------------------
DROP TABLE IF EXISTS `user_details`;
CREATE TABLE `user_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `location` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cellphone` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for user_group_permissions
-- ----------------------------
DROP TABLE IF EXISTS `user_group_permissions`;
CREATE TABLE `user_group_permissions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) NOT NULL,
  `prefix` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `plugin` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `controller` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `allowed` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 696 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_group_permissions
-- ----------------------------
INSERT INTO `user_group_permissions` VALUES (1, 1, NULL, NULL, 'Pages', 'display', 1);
INSERT INTO `user_group_permissions` VALUES (4, 1, NULL, 'Usermgmt', 'Autocomplete', 'fetch', 1);
INSERT INTO `user_group_permissions` VALUES (6, 1, NULL, 'Usermgmt', 'StaticPages', 'index', 1);
INSERT INTO `user_group_permissions` VALUES (7, 1, NULL, 'Usermgmt', 'StaticPages', 'add', 1);
INSERT INTO `user_group_permissions` VALUES (8, 1, NULL, 'Usermgmt', 'StaticPages', 'edit', 1);
INSERT INTO `user_group_permissions` VALUES (9, 1, NULL, 'Usermgmt', 'StaticPages', 'view', 1);
INSERT INTO `user_group_permissions` VALUES (10, 1, NULL, 'Usermgmt', 'StaticPages', 'delete', 1);
INSERT INTO `user_group_permissions` VALUES (11, 1, NULL, 'Usermgmt', 'StaticPages', 'preview', 1);
INSERT INTO `user_group_permissions` VALUES (12, 1, NULL, 'Usermgmt', 'UserContacts', 'index', 1);
INSERT INTO `user_group_permissions` VALUES (13, 1, NULL, 'Usermgmt', 'UserContacts', 'contactUs', 1);
INSERT INTO `user_group_permissions` VALUES (16, 1, NULL, 'Usermgmt', 'UserContacts', 'sendReply', 1);
INSERT INTO `user_group_permissions` VALUES (19, 1, NULL, 'Usermgmt', 'UserEmails', 'index', 1);
INSERT INTO `user_group_permissions` VALUES (20, 1, NULL, 'Usermgmt', 'UserEmails', 'send', 1);
INSERT INTO `user_group_permissions` VALUES (21, 1, NULL, 'Usermgmt', 'UserEmails', 'sendToUser', 1);
INSERT INTO `user_group_permissions` VALUES (22, 1, NULL, 'Usermgmt', 'UserEmails', 'view', 1);
INSERT INTO `user_group_permissions` VALUES (23, 1, NULL, 'Usermgmt', 'UserEmails', 'searchEmails', 1);
INSERT INTO `user_group_permissions` VALUES (24, 1, NULL, 'Usermgmt', 'UserEmailSignatures', 'index', 1);
INSERT INTO `user_group_permissions` VALUES (25, 1, NULL, 'Usermgmt', 'UserEmailSignatures', 'add', 1);
INSERT INTO `user_group_permissions` VALUES (26, 1, NULL, 'Usermgmt', 'UserEmailSignatures', 'edit', 1);
INSERT INTO `user_group_permissions` VALUES (27, 1, NULL, 'Usermgmt', 'UserEmailSignatures', 'delete', 1);
INSERT INTO `user_group_permissions` VALUES (28, 1, NULL, 'Usermgmt', 'UserEmailTemplates', 'index', 1);
INSERT INTO `user_group_permissions` VALUES (29, 1, NULL, 'Usermgmt', 'UserEmailTemplates', 'add', 1);
INSERT INTO `user_group_permissions` VALUES (30, 1, NULL, 'Usermgmt', 'UserEmailTemplates', 'edit', 1);
INSERT INTO `user_group_permissions` VALUES (31, 1, NULL, 'Usermgmt', 'UserEmailTemplates', 'delete', 1);
INSERT INTO `user_group_permissions` VALUES (32, 1, NULL, 'Usermgmt', 'UserGroupPermissions', 'permissionGroupMatrix', 1);
INSERT INTO `user_group_permissions` VALUES (33, 1, NULL, 'Usermgmt', 'UserGroupPermissions', 'permissionSubGroupMatrix', 1);
INSERT INTO `user_group_permissions` VALUES (34, 1, NULL, 'Usermgmt', 'UserGroupPermissions', 'changePermission', 1);
INSERT INTO `user_group_permissions` VALUES (35, 1, NULL, 'Usermgmt', 'UserGroupPermissions', 'getPermissions', 1);
INSERT INTO `user_group_permissions` VALUES (38, 1, NULL, 'Usermgmt', 'UserGroups', 'index', 1);
INSERT INTO `user_group_permissions` VALUES (39, 1, NULL, 'Usermgmt', 'UserGroups', 'add', 1);
INSERT INTO `user_group_permissions` VALUES (40, 1, NULL, 'Usermgmt', 'UserGroups', 'edit', 1);
INSERT INTO `user_group_permissions` VALUES (41, 1, NULL, 'Usermgmt', 'UserGroups', 'delete', 1);
INSERT INTO `user_group_permissions` VALUES (42, 1, NULL, 'Usermgmt', 'Users', 'dashboard', 1);
INSERT INTO `user_group_permissions` VALUES (44, 1, NULL, 'Usermgmt', 'Users', 'index', 1);
INSERT INTO `user_group_permissions` VALUES (45, 1, NULL, 'Usermgmt', 'Users', 'indexSearch', 1);
INSERT INTO `user_group_permissions` VALUES (46, 1, NULL, 'Usermgmt', 'Users', 'online', 1);
INSERT INTO `user_group_permissions` VALUES (47, 1, NULL, 'Usermgmt', 'Users', 'addUser', 1);
INSERT INTO `user_group_permissions` VALUES (48, 1, NULL, 'Usermgmt', 'Users', 'editUser', 1);
INSERT INTO `user_group_permissions` VALUES (49, 1, NULL, 'Usermgmt', 'Users', 'viewUser', 1);
INSERT INTO `user_group_permissions` VALUES (50, 1, NULL, 'Usermgmt', 'Users', 'deleteUser', 1);
INSERT INTO `user_group_permissions` VALUES (51, 1, NULL, 'Usermgmt', 'Users', 'setActive', 1);
INSERT INTO `user_group_permissions` VALUES (52, 1, NULL, 'Usermgmt', 'Users', 'setInactive', 1);
INSERT INTO `user_group_permissions` VALUES (53, 1, NULL, 'Usermgmt', 'Users', 'verifyEmail', 1);
INSERT INTO `user_group_permissions` VALUES (54, 1, NULL, 'Usermgmt', 'Users', 'changeUserPassword', 1);
INSERT INTO `user_group_permissions` VALUES (55, 1, NULL, 'Usermgmt', 'Users', 'logoutUser', 1);
INSERT INTO `user_group_permissions` VALUES (56, 1, NULL, 'Usermgmt', 'Users', 'viewUserPermissions', 1);
INSERT INTO `user_group_permissions` VALUES (57, 1, NULL, 'Usermgmt', 'Users', 'uploadCsv', 1);
INSERT INTO `user_group_permissions` VALUES (58, 1, NULL, 'Usermgmt', 'Users', 'addMultipleUsers', 1);
INSERT INTO `user_group_permissions` VALUES (59, 1, NULL, 'Usermgmt', 'Users', 'accessDenied', 1);
INSERT INTO `user_group_permissions` VALUES (61, 1, NULL, 'Usermgmt', 'Users', 'login', 1);
INSERT INTO `user_group_permissions` VALUES (64, 1, NULL, 'Usermgmt', 'Users', 'logout', 1);
INSERT INTO `user_group_permissions` VALUES (67, 1, NULL, 'Usermgmt', 'Users', 'register', 1);
INSERT INTO `user_group_permissions` VALUES (70, 1, NULL, 'Usermgmt', 'Users', 'myprofile', 1);
INSERT INTO `user_group_permissions` VALUES (72, 1, NULL, 'Usermgmt', 'Users', 'editProfile', 1);
INSERT INTO `user_group_permissions` VALUES (74, 1, NULL, 'Usermgmt', 'Users', 'changePassword', 1);
INSERT INTO `user_group_permissions` VALUES (76, 1, NULL, 'Usermgmt', 'Users', 'deleteAccount', 1);
INSERT INTO `user_group_permissions` VALUES (78, 1, NULL, 'Usermgmt', 'Users', 'forgotPassword', 1);
INSERT INTO `user_group_permissions` VALUES (81, 1, NULL, 'Usermgmt', 'Users', 'activatePassword', 1);
INSERT INTO `user_group_permissions` VALUES (84, 1, NULL, 'Usermgmt', 'Users', 'emailVerification', 1);
INSERT INTO `user_group_permissions` VALUES (87, 1, NULL, 'Usermgmt', 'Users', 'userVerification', 1);
INSERT INTO `user_group_permissions` VALUES (90, 1, NULL, 'Usermgmt', 'Users', 'deleteCache', 1);
INSERT INTO `user_group_permissions` VALUES (91, 1, NULL, 'Usermgmt', 'UserSettings', 'index', 1);
INSERT INTO `user_group_permissions` VALUES (92, 1, NULL, 'Usermgmt', 'UserSettings', 'editSetting', 1);
INSERT INTO `user_group_permissions` VALUES (93, 1, NULL, 'Usermgmt', 'UserSettings', 'cakelog', 1);
INSERT INTO `user_group_permissions` VALUES (94, 1, NULL, 'Usermgmt', 'UserSettings', 'cakelogbackup', 1);
INSERT INTO `user_group_permissions` VALUES (95, 1, NULL, 'Usermgmt', 'UserSettings', 'cakelogdelete', 1);
INSERT INTO `user_group_permissions` VALUES (96, 1, NULL, 'Usermgmt', 'UserSettings', 'cakelogempty', 1);
INSERT INTO `user_group_permissions` VALUES (97, 1, NULL, 'Usermgmt', 'CronJobs', 'sendScheduledEmails', 1);
INSERT INTO `user_group_permissions` VALUES (98, 1, NULL, 'Usermgmt', 'ScheduledEmails', 'index', 1);
INSERT INTO `user_group_permissions` VALUES (99, 1, NULL, 'Usermgmt', 'ScheduledEmails', 'edit', 1);
INSERT INTO `user_group_permissions` VALUES (100, 1, NULL, 'Usermgmt', 'ScheduledEmails', 'view', 1);
INSERT INTO `user_group_permissions` VALUES (101, 1, NULL, 'Usermgmt', 'ScheduledEmails', 'delete', 1);
INSERT INTO `user_group_permissions` VALUES (102, 1, NULL, 'Usermgmt', 'ScheduledEmails', 'delete_recipient', 1);
INSERT INTO `user_group_permissions` VALUES (103, 1, NULL, 'Usermgmt', 'SettingOptions', 'index', 1);
INSERT INTO `user_group_permissions` VALUES (104, 1, NULL, 'Usermgmt', 'SettingOptions', 'add', 1);
INSERT INTO `user_group_permissions` VALUES (105, 1, NULL, 'Usermgmt', 'SettingOptions', 'edit', 1);
INSERT INTO `user_group_permissions` VALUES (106, 1, NULL, 'Usermgmt', 'SettingOptions', 'delete', 1);
INSERT INTO `user_group_permissions` VALUES (107, 1, NULL, 'Usermgmt', 'UserGroupPermissions', 'printPermissionChanges', 1);
INSERT INTO `user_group_permissions` VALUES (690, 2, NULL, 'Usermgmt', 'Users', 'dashboard', 1);
INSERT INTO `user_group_permissions` VALUES (691, 2, NULL, 'Usermgmt', 'Users', 'editProfile', 1);
INSERT INTO `user_group_permissions` VALUES (692, 2, NULL, 'Usermgmt', 'Users', 'changePassword', 1);
INSERT INTO `user_group_permissions` VALUES (693, 2, NULL, 'Usermgmt', 'Users', 'myprofile', 1);
INSERT INTO `user_group_permissions` VALUES (694, 2, NULL, NULL, 'Clientes', 'index', 1);
INSERT INTO `user_group_permissions` VALUES (695, 2, NULL, NULL, 'Clientes', 'notificado', 1);

-- ----------------------------
-- Table structure for user_groups
-- ----------------------------
DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE `user_groups`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `registration_allowed` int(1) NOT NULL DEFAULT 1,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_groups
-- ----------------------------
INSERT INTO `user_groups` VALUES (1, 0, 'Administrador', 'NULL', 0, '2022-02-10 20:24:31', '2022-02-10 12:36:37');
INSERT INTO `user_groups` VALUES (2, 0, 'Usuario', NULL, 0, '2022-02-10 17:47:05', '2022-02-10 17:47:08');

-- ----------------------------
-- Table structure for user_setting_options
-- ----------------------------
DROP TABLE IF EXISTS `user_setting_options`;
CREATE TABLE `user_setting_options`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_setting_id` int(11) NOT NULL,
  `setting_option_id` int(11) NOT NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of user_setting_options
-- ----------------------------
INSERT INTO `user_setting_options` VALUES (1, 58, 1, '2015-12-22 20:24:31', '2015-12-22 20:24:31');
INSERT INTO `user_setting_options` VALUES (2, 58, 2, '2015-12-22 20:24:31', '2015-12-22 20:24:31');

-- ----------------------------
-- Table structure for user_settings
-- ----------------------------
DROP TABLE IF EXISTS `user_settings`;
CREATE TABLE `user_settings`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `display_name` varchar(1024) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `value` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `type` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'OTHER',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 73 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_settings
-- ----------------------------
INSERT INTO `user_settings` VALUES (1, 'default_time_zone', 'Enter default time zone identifier for e.g. America/New_York', 'America/Monterrey', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (2, 'site_name', 'Enter Your Full Site Name', 'Efectivale', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (3, 'site_name_short', 'Enter Your Short Site Name', 'efectivale', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (4, 'login_redirect_url', 'Enter URL where user will be redirected after login', '/dashboard', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (5, 'logout_redirect_url', 'Enter URL where user will be redirected after logout', '/login', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (6, 'login_cookie_name', 'Please enter login cookie name for your site which is used to login user automatically for remember me functionality', 'UMPremiumCookie', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (7, 'use_https', 'Do you want to use HTTPS for whole site?', '0', 'checkbox', 'SITE');
INSERT INTO `user_settings` VALUES (8, 'https_urls', 'You can enter selected urls for HTTPS, If URL belongs to any plugin then prepend plugin name in URL, if you want to allow all actions of controller on HTTPS then use controllername/* (e.g. usermgmt/users/login, usermgmt/users/register, products/cart, payments/*)', NULL, 'input', 'SITE');
INSERT INTO `user_settings` VALUES (9, 'default_group_id', 'Enter default group id for user registration', '2', 'input', 'GROUP');
INSERT INTO `user_settings` VALUES (10, 'admin_group_id', 'Enter Admin Group Id', '1', 'input', 'GROUP');
INSERT INTO `user_settings` VALUES (11, 'guest_group_id', 'Enter Guest Group Id', '3', 'input', 'GROUP');
INSERT INTO `user_settings` VALUES (12, 'site_registration', 'Do you want to allow new registrations?', '1', 'checkbox', 'USER');
INSERT INTO `user_settings` VALUES (13, 'email_verification', 'Do you want user to verify his/her email address during registration?', '0', 'checkbox', 'EMAIL');
INSERT INTO `user_settings` VALUES (14, 'allow_delete_account', 'Do you want to allow users to delete their account', '0', 'checkbox', 'USER');
INSERT INTO `user_settings` VALUES (15, 'allow_change_username', 'Do you want to allow users to change their username?', '0', 'checkbox', 'USER');
INSERT INTO `user_settings` VALUES (16, 'banned_usernames', 'Enter banned usernames comma separated(no space, no quotes)', 'Administrator, SuperAdmin', 'input', 'USER');
INSERT INTO `user_settings` VALUES (17, 'permissions', 'Do you want to check permissions for users?', '1', 'checkbox', 'PERMISSION');
INSERT INTO `user_settings` VALUES (18, 'admin_permissions', 'Do you want to check permissions for Admin?', '0', 'checkbox', 'PERMISSION');
INSERT INTO `user_settings` VALUES (19, 'allow_user_multiple_login', 'Do you want to allow multiple logins with same user account for users(not admin)?', '1', 'checkbox', 'USER');
INSERT INTO `user_settings` VALUES (20, 'allow_admin_multiple_login', 'Do you want to allow multiple logins with same user account for admin(not users)?', '1', 'checkbox', 'USER');
INSERT INTO `user_settings` VALUES (21, 'login_idle_time', 'Set max idle time in minutes for user. This idle time will be used when multiple logins are not allowed for same user account. If max idle time reached since user last activity on the site then anyone can login with same account in other browser and idle user will be logged out.', '10', 'input', 'USER');
INSERT INTO `user_settings` VALUES (22, 'view_online_user_time', 'You can view online users and guest from last few minutes, set time in minutes ', '30', 'input', 'USER');
INSERT INTO `user_settings` VALUES (23, 'img_dir', 'Enter Image directory name where users profile photos will be uploaded. This directory should be in webroot/library directory', 'umphotos', 'input', 'USER');
INSERT INTO `user_settings` VALUES (24, 'qrdn', 'Increase this number by 1 every time if you made any changes in CSS or JS file, If you delete cache from admin then it increases automatically', '123457089', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (25, 'use_remember_me', 'Do you want to show remember me feature on login page?', '0', 'checkbox', 'USER');
INSERT INTO `user_settings` VALUES (26, 'email_from_address', 'Enter From Email Address to send emails', 'christian.sanchez@weenets.com', 'input', 'EMAIL');
INSERT INTO `user_settings` VALUES (27, 'email_from_name', 'Enter From Email Name', 'Christian Sánchez', 'input', 'EMAIL');
INSERT INTO `user_settings` VALUES (28, 'admin_email_address', 'Enter Admin Email Address to receive emails for e.g. contact enquiries', NULL, 'input', 'EMAIL');
INSERT INTO `user_settings` VALUES (29, 'send_registration_mail', 'Do you want to send welcome registration email to user after registration', '0', 'checkbox', 'EMAIL');
INSERT INTO `user_settings` VALUES (30, 'send_password_change_mail', 'Do you want to send password change email if users change their password', '1', 'checkbox', 'EMAIL');
INSERT INTO `user_settings` VALUES (31, 'private_key_from_recaptcha', 'Enter private key for Recaptcha from google (also known as secret key)', NULL, 'input', 'RECAPTCHA');
INSERT INTO `user_settings` VALUES (32, 'public_key_from_recaptcha', 'Enter public key for recaptcha from google (also known as site key)', NULL, 'input', 'RECAPTCHA');
INSERT INTO `user_settings` VALUES (33, 'use_recaptcha_on_login', 'Do you want to add captcha support on login form?', '0', 'checkbox', 'RECAPTCHA');
INSERT INTO `user_settings` VALUES (34, 'use_recaptcha_on_bad_login', 'Do you want to add captcha support on bad login? if user tried bad login credentials then after specifed bad login count recaptcha will be added on login form', '0', 'checkbox', 'RECAPTCHA');
INSERT INTO `user_settings` VALUES (35, 'bad_login_allow_count', 'Enter bad login count to add captcha on login. for e.g. 5 or 10', '5', 'input', 'RECAPTCHA');
INSERT INTO `user_settings` VALUES (36, 'use_recaptcha_on_registration', 'Do you want to add captcha support on registration form? ', '0', 'checkbox', 'RECAPTCHA');
INSERT INTO `user_settings` VALUES (37, 'use_recaptcha_on_forgot_password', 'Do you want to add captcha support on forgot password page? ', '0', 'checkbox', 'RECAPTCHA');
INSERT INTO `user_settings` VALUES (38, 'use_recaptcha_on_email_verification', 'Do you want to add captcha support on email verification page? ', '0', 'checkbox', 'RECAPTCHA');
INSERT INTO `user_settings` VALUES (39, 'use_fb_login', 'Do you want to use Facebook Connect on your site?', '0', 'checkbox', 'FACEBOOK');
INSERT INTO `user_settings` VALUES (40, 'fb_app_id', 'Enter Facebook Application Id', NULL, 'input', 'FACEBOOK');
INSERT INTO `user_settings` VALUES (41, 'fb_secret', 'Enter Facebook Application Secret Code', NULL, 'input', 'FACEBOOK');
INSERT INTO `user_settings` VALUES (42, 'fb_scope', 'Enter Facebook Permissions', 'email', 'input', 'FACEBOOK');
INSERT INTO `user_settings` VALUES (43, 'use_twt_login', 'Want to use Twitter Connect on your site?', '0', 'checkbox', 'TWITTER');
INSERT INTO `user_settings` VALUES (44, 'twt_app_id', 'Enter Twitter Consumer Key', NULL, 'input', 'TWITTER');
INSERT INTO `user_settings` VALUES (45, 'twt_secret', 'Enter Twitter Consumer Secret', NULL, 'input', 'TWITTER');
INSERT INTO `user_settings` VALUES (46, 'use_gmail_login', 'Do you want to use Google Connect on your site?', '0', 'checkbox', 'GOOGLE');
INSERT INTO `user_settings` VALUES (47, 'gmail_api_key', 'Enter Google Api Key', NULL, 'input', 'GOOGLE');
INSERT INTO `user_settings` VALUES (48, 'gmail_client_id', 'Enter Google Client Id', NULL, 'input', 'GOOGLE');
INSERT INTO `user_settings` VALUES (49, 'gmail_client_secret', 'Enter Google Client Secret', NULL, 'input', 'GOOGLE');
INSERT INTO `user_settings` VALUES (50, 'use_yahoo_login', 'Do you want to use Yahoo Connect on your site?', '0', 'checkbox', 'YAHOO');
INSERT INTO `user_settings` VALUES (51, 'use_ldn_login', 'Do you want to use Linkedin Connect on your site?', '0', 'checkbox', 'LINKEDIN');
INSERT INTO `user_settings` VALUES (52, 'ldn_api_key', 'Enter Linkedin Api Key', NULL, 'input', 'LINKEDIN');
INSERT INTO `user_settings` VALUES (53, 'ldn_secret_key', 'Enter Linkedin Secret Key', NULL, 'input', 'LINKEDIN');
INSERT INTO `user_settings` VALUES (54, 'use_fs_login', 'Do you want to use Foursquare Connect on your site?', '0', 'checkbox', 'FOURSQUARE');
INSERT INTO `user_settings` VALUES (55, 'fs_client_id', 'Enter Foursquare Client Id', NULL, 'input', 'FOURSQUARE');
INSERT INTO `user_settings` VALUES (56, 'fs_client_secret', 'Enter Foursquare Client Secret', NULL, 'input', 'FOURSQUARE');
INSERT INTO `user_settings` VALUES (57, 'change_password_on_social_registration', 'Do you want to show change password page after user registration from social account?', '1', 'checkbox', 'USER');
INSERT INTO `user_settings` VALUES (58, 'default_html_editor', 'Which is default html editor for your application, possible values are Tinymce, Ckeditor', '1', 'radio', 'SITE');
INSERT INTO `user_settings` VALUES (59, 'notification_message_position', 'We are using toastr message notification. Please enter flash message position on screen. possible values are\ntoast-top-center\ntoast-bottom-center\ntoast-top-full-width\ntoast-bottom-full-width\ntoast-top-left\ntoast-top-right\ntoast-bottom-right\ntoast-bottom-left', 'toast-top-full-width', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (60, 'notification_message_close_time', 'We are using toastr message notification. Please enter flash message close/hide time in seconds. You can leave blank if you do not want to auto close/hide.', '10', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (61, 'idioma', 'Idioma del sistema', 'es', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (62, 'logotipo_site', 'Logotipo del Sitio', 'logoLogin.png', 'upload', 'SITE');
INSERT INTO `user_settings` VALUES (63, 'saldo_cliente_virtual', 'Saldo predeterminado del cliente virtual', '0', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (64, 'saldo_cliente_ejecutivo', 'Saldo predeterminado del cliente ejecutivo', '20', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (65, 'dias_cliente_virtual', 'Dias predeterminado del cliente virtual', '20', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (66, 'dias_cliente_ejecutivo', 'Dias predeterminado del cliente ejecutivo', '0', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (67, 'partida_descuento_default', NULL, '25', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (68, 'partida_descuento_extra', NULL, '35', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (69, 'send_fact_payment', 'Enviar timbrado de complemento', '1', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (70, 'send_reject_cancel_payment', 'Rechazo de cancelacion complemento', '1', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (71, 'send_cancel_payment', 'Enviar cancelacion complemento', '1', 'input', 'SITE');
INSERT INTO `user_settings` VALUES (72, 'GMAPS_API_KEY', 'Api Google Maps', 'AIzaSyAOyspn8tZzsQi7wIQUDV7MeU1JXTTUxYc', NULL, 'SITE');

-- ----------------------------
-- Table structure for user_statuses
-- ----------------------------
DROP TABLE IF EXISTS `user_statuses`;
CREATE TABLE `user_statuses`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `color` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_statuses
-- ----------------------------
INSERT INTO `user_statuses` VALUES (1, 'Activo', NULL, '#639449');
INSERT INTO `user_statuses` VALUES (2, 'Inactivo', NULL, '#bf7d65');
INSERT INTO `user_statuses` VALUES (3, 'Suspendido', NULL, '#a9a9a9');
INSERT INTO `user_statuses` VALUES (4, 'Archivado', NULL, '');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `first_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `clast_name` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `gender` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `photo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `bday` date NULL DEFAULT NULL,
  `entrydate` date NULL DEFAULT NULL,
  `email_verified` int(1) NOT NULL DEFAULT 0,
  `last_login` datetime(0) NULL DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `terms_and_conditions` tinyint(1) NOT NULL DEFAULT 0,
  `ip_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `active` int(1) NULL DEFAULT 0,
  `user_status_id` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `modified_by` int(11) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `codigo_activacion` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tiempo_activacion` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user`(`username`) USING BTREE,
  INDEX `mail`(`email`) USING BTREE,
  INDEX `users_FKIndex1`(`user_group_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, '1', 'admin', '$2y$10$aF//UlVwr1tl6FXGNGGP1O4nzUv3bI8Bb4ZQgvBmrPyJJ9n0sr.Qa', 'christian.sanchez@weenets.com', 'Christian Yahir', 'Sánchez', 'Carrillo', 'M', NULL, '2002-04-04', '2020-04-04', 1, '2022-02-12 01:13:55', '+52 (81) 8252 8058', 'DEVELOP', 1, '127.0.0.1', 1, 1, 0, NULL, '2022-02-12 01:13:55', NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
