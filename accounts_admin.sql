/*
Navicat MySQL Data Transfer

Source Server         : cmue-class
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : cmueclass_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-21 03:06:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `accounts_admin`
-- ----------------------------
DROP TABLE IF EXISTS `accounts_admin`;
CREATE TABLE `accounts_admin` (
  `admin_account_no` int(8) NOT NULL AUTO_INCREMENT,
  `admin_firstname` varchar(255) DEFAULT NULL,
  `admin_lastname` varchar(255) DEFAULT NULL,
  `admin_middleinitial` varchar(255) DEFAULT NULL,
  `admin_username` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_province` varchar(255) DEFAULT NULL,
  `admin_street` varchar(255) DEFAULT NULL,
  `admin_bdate` varchar(255) DEFAULT NULL,
  `admin_gender` varchar(1) DEFAULT NULL,
  `admin_about` varchar(255) DEFAULT NULL,
  `admin_phone` decimal(11,0) DEFAULT NULL,
  `admin_fb` varchar(255) DEFAULT NULL,
  `admin_twitter` varchar(255) DEFAULT NULL,
  `admin_gplus` varchar(255) DEFAULT NULL,
  `admin_site` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`admin_account_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of accounts_admin
-- ----------------------------
INSERT INTO `accounts_admin` VALUES ('1', 'Christian', 'Tampus', 'C', 'tanshongy', '2c67ed88e6e51ee6964c45faa0d0d48bc9f2aa7bb69a2bce727a6f0f0f77e2db', 'tanshongshongy@gmail.com', 'Maramag', 'P-2 North', '1997-06-18', 'M', 'I am me. Im exactly what Im supposed to be me! yeah', '9354974937', 'https://www.facebook.com/tanshongisreal', 'https://www.twitter.com/tanshongshongy', 'https://www.wala.com', 'https://www.facebook.com/tanshongisreal');
INSERT INTO `accounts_admin` VALUES ('2', 'Rhoneth', 'Fabre', 'M', 'rhoneth', '5c1471e1e22463c72b8a063f385f56641a83601d7779f071b84289a4d3407b8d', '', '', '', '', 'M', '', '0', '', '', '', '');
INSERT INTO `accounts_admin` VALUES ('3', 'Eugine', 'Lianto', 'M', 'eugine', '8505b3f26d5da704ffa5fc5de87620c24f2e4e68d4898355f577f9004f66775b', 'eugine.lianto@gmail.com', '', '', '08-03-1997', 'M', 'Gwapo', '0', '', '', '', 'http://www.facebook.com');

-- ----------------------------
-- Table structure for `accounts_student`
-- ----------------------------
DROP TABLE IF EXISTS `accounts_student`;
CREATE TABLE `accounts_student` (
  `student_account_no` int(8) NOT NULL AUTO_INCREMENT,
  `student_firstname` varchar(255) DEFAULT NULL,
  `student_lastname` varchar(255) DEFAULT NULL,
  `student_middleinitial` varchar(255) DEFAULT NULL,
  `student_username` varchar(255) DEFAULT NULL,
  `student_password` varchar(255) DEFAULT NULL,
  `student_email` varchar(255) DEFAULT NULL,
  `student_province` varchar(255) DEFAULT NULL,
  `student_street` varchar(255) DEFAULT NULL,
  `student_bdate` varchar(255) DEFAULT NULL,
  `student_gender` varchar(1) DEFAULT NULL,
  `student_about` longtext,
  `student_phone` decimal(11,0) DEFAULT NULL,
  `student_fb` varchar(255) DEFAULT NULL,
  `student_twitter` varchar(255) DEFAULT NULL,
  `student_gplus` varchar(255) DEFAULT NULL,
  `student_site` varchar(255) DEFAULT NULL,
  `student_program` varchar(255) DEFAULT NULL,
  `student_major` varchar(255) DEFAULT NULL,
  `student_yl` varchar(255) DEFAULT NULL,
  `student_confirmationcode` varchar(255) DEFAULT NULL,
  `student_status` varchar(255) DEFAULT NULL,
  `student_imgno` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`student_account_no`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of accounts_student
-- ----------------------------
INSERT INTO `accounts_student` VALUES ('41', 'Adrian Paul', 'Relayosa', 'Cuajao', 'adrianpaul', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'fabrerhonethjohn1@gmail.com', 'Maramag Bukidnon', 'P-6 North Poblacion', '18-10-1997', 'M', 'Hi! Good Day!', '0', '', '', '', '', 'Engineering', 'Mechanical', '4th Year', '15903', 'Active', '20160612_153448.jpg');
INSERT INTO `accounts_student` VALUES ('42', 'Jhun Kinley', 'Villapaz', 'Canales', 'jhunkinley', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'fabrerhonethjohn@gmail.com', 'Maramag Bukidnon', 'P-7 South Poblacion', '16-10-1996', 'M', 'Itom akong kuko.', '0', '', '', '', '', '', '', '', '21892', 'Active', '20160614_173035.jpg');
INSERT INTO `accounts_student` VALUES ('44', 'Gerard Jan', 'Estrada', 'Celestial', 'gerardjan', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre101@gmail.com', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '13859', 'Active', '20160705_153642.jpg');
INSERT INTO `accounts_student` VALUES ('45', 'Eugine', 'Lianto', 'Medel', 'eugine101', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre102@gmail.com', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '328', 'Active', 'Zoom Out.PNG');
INSERT INTO `accounts_student` VALUES ('46', 'Kent Vincent', 'Butal', 'Saren', 'kentvincent', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre103@gmail.com', null, null, null, null, null, null, null, null, null, null, null, null, null, '18012', 'Inactive', null);
INSERT INTO `accounts_student` VALUES ('47', 'Edfe Lawrence', 'Borbon', 'Mendez', 'edfelawrence', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre@gmail.com', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '18482', 'Active', '20170528_104017.jpg');

-- ----------------------------
-- Table structure for `accounts_teacher`
-- ----------------------------
DROP TABLE IF EXISTS `accounts_teacher`;
CREATE TABLE `accounts_teacher` (
  `teacher_account_no` int(8) NOT NULL AUTO_INCREMENT,
  `teacher_firstname` varchar(255) DEFAULT NULL,
  `teacher_lastname` varchar(255) DEFAULT NULL,
  `teacher_middleinitial` varchar(255) DEFAULT NULL,
  `teacher_username` varchar(255) DEFAULT NULL,
  `teacher_password` varchar(255) DEFAULT NULL,
  `teacher_email` varchar(255) DEFAULT NULL,
  `teacher_province` varchar(255) DEFAULT NULL,
  `teacher_street` varchar(255) DEFAULT NULL,
  `teacher_bdate` varchar(255) DEFAULT NULL,
  `teacher_gender` varchar(1) DEFAULT NULL,
  `teacher_about` longtext,
  `teacher_phone` decimal(11,0) DEFAULT NULL,
  `teacher_fb` varchar(255) DEFAULT NULL,
  `teacher_twitter` varchar(255) DEFAULT NULL,
  `teacher_gplus` varchar(255) DEFAULT NULL,
  `teacher_site` varchar(255) DEFAULT NULL,
  `teacher_college` varchar(255) DEFAULT NULL,
  `teacher_dept` varchar(255) DEFAULT NULL,
  `teacher_position` varchar(255) DEFAULT NULL,
  `teacher_confirmationcode` varchar(255) DEFAULT NULL,
  `teacher_status` varchar(255) DEFAULT NULL,
  `teacher_imgno` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`teacher_account_no`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of accounts_teacher
-- ----------------------------
INSERT INTO `accounts_teacher` VALUES ('56', 'Rhoneth John', 'Fabre', 'Mendez', 'rhonethjohn', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre104@gmail.com', 'Maramag Bukidnon', 'P-5 North Poblacion', '07-06-1997', 'M', 'Rhoneth John here!', '9972550429', '', '', '', '', 'Business and Management', 'BS Business Administration', 'College Dean', '1617', 'Active', '20170112_174704.jpg');
INSERT INTO `accounts_teacher` VALUES ('57', 'Christian', 'Tampus', 'Canton', 'tanshong', 'd75d1a574597b1f98f7229be606b689cf2f6e872d4d4c22b68164d41541d2279', 'tanshongshongy@gmail.com', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '19173', 'Active', '20160612_125257.jpg');
INSERT INTO `accounts_teacher` VALUES ('58', 'Giovanni', 'Abella', 'Ponce', 'giovanni', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre105@gmail.com', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '20224', 'Active', '20160612_153138.jpg');

-- ----------------------------
-- Table structure for `activities`
-- ----------------------------
DROP TABLE IF EXISTS `activities`;
CREATE TABLE `activities` (
  `activity_no` int(11) NOT NULL AUTO_INCREMENT,
  `activity_time` datetime NOT NULL,
  `activity_name` text NOT NULL,
  `usertype` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`activity_no`)
) ENGINE=InnoDB AUTO_INCREMENT=3059 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of activities
-- ----------------------------
INSERT INTO `activities` VALUES ('150', '2018-04-14 01:44:10', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('151', '2018-04-14 01:44:25', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('152', '2018-04-14 01:45:34', 'was accepted on joining Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('153', '2018-04-14 01:50:03', 'updated personal information.', '111', '58');
INSERT INTO `activities` VALUES ('154', '2018-04-14 01:50:39', 'updated personal information.', '111', '58');
INSERT INTO `activities` VALUES ('155', '2018-04-14 01:52:15', 'logged in.', '111', '42');
INSERT INTO `activities` VALUES ('156', '2018-04-14 01:54:15', 'requests to join College Algebra class.', '111', '42');
INSERT INTO `activities` VALUES ('157', '2018-04-14 01:54:26', 'was accepted on joining Programming II class.', '111', '42');
INSERT INTO `activities` VALUES ('158', '2018-04-14 01:55:47', 'was accepted on joining College Algebra class.', '111', '42');
INSERT INTO `activities` VALUES ('159', '2018-04-14 02:03:40', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('160', '2018-04-14 02:03:57', 'requests to join College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('161', '2018-04-14 02:03:58', 'requests to join College Trigonometry class.', '111', '56');
INSERT INTO `activities` VALUES ('162', '2018-04-14 02:04:02', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('163', '2018-04-14 02:04:03', 'requests to join Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('164', '2018-04-14 02:06:04', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('165', '2018-04-14 02:11:07', 'was accepted on joining Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('166', '2018-04-14 02:15:44', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('167', '2018-04-14 02:18:02', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('168', '2018-04-14 02:18:04', 'requests to join College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('169', '2018-04-14 02:18:05', 'requests to join Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('170', '2018-04-14 02:18:07', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('171', '2018-04-14 02:18:08', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('172', '2018-04-14 02:18:09', 'requests to join Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('173', '2018-04-14 02:18:27', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('174', '2018-04-14 02:19:10', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('175', '2018-04-14 02:23:49', 'logged in.', '111', '45');
INSERT INTO `activities` VALUES ('176', '2018-04-14 02:24:11', 'requests to join College Algebra class.', '111', '45');
INSERT INTO `activities` VALUES ('177', '2018-04-14 02:24:12', 'requests to join Programming I class.', '111', '45');
INSERT INTO `activities` VALUES ('178', '2018-04-14 02:24:13', 'requests to join Programming II class.', '111', '45');
INSERT INTO `activities` VALUES ('179', '2018-04-14 02:24:19', 'logged out.', '111', '45');
INSERT INTO `activities` VALUES ('180', '2018-04-14 02:24:47', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('181', '2018-04-14 02:24:47', 'requests to join College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('182', '2018-04-14 02:24:49', 'requests to join Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('183', '2018-04-14 02:24:50', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('184', '2018-04-14 02:24:51', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('185', '2018-04-14 02:24:51', 'requests to join Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('186', '2018-04-14 02:24:54', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('187', '2018-04-14 02:29:41', 'was accepted on joining Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('188', '2018-04-14 02:55:08', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('189', '2018-04-14 02:59:05', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('190', '2018-04-14 02:59:05', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('191', '2018-04-14 02:59:33', 'requests to join College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('192', '2018-04-14 02:59:34', 'requests to join Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('193', '2018-04-14 02:59:36', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('194', '2018-04-14 02:59:37', 'requests to join Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('195', '2018-04-14 02:59:44', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('196', '2018-04-14 03:10:02', 'was accepted on joining College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('197', '2018-04-14 03:11:21', 'was accepted on joining Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('198', '2018-04-14 03:22:04', 'was accepted on joining Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('199', '2018-04-14 03:22:50', 'was accepted on joining Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('200', '2018-04-14 03:26:48', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('201', '2018-04-14 03:26:58', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('202', '2018-04-14 03:27:01', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('203', '2018-04-14 03:27:02', 'requests to join Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('204', '2018-04-14 03:27:36', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('205', '2018-04-14 03:29:14', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('206', '2018-04-14 03:29:37', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('207', '2018-04-14 03:30:50', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('208', '2018-04-14 03:31:10', 'was accepted on joining College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('209', '2018-04-14 03:31:16', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('210', '2018-04-14 03:38:20', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('211', '2018-04-14 03:38:26', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('212', '2018-04-14 12:13:49', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('213', '2018-04-14 12:21:15', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('214', '2018-04-14 14:43:57', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('215', '2018-04-14 18:19:17', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('216', '2018-04-14 19:23:53', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('217', '2018-04-14 19:24:09', 'requests to join College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('218', '2018-04-14 19:24:18', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('219', '2018-04-14 19:25:06', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('220', '2018-04-14 19:25:24', 'requests to join Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('221', '2018-04-14 19:25:28', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('222', '2018-04-14 19:25:53', 'was accepted on joining College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('223', '2018-04-14 19:25:53', 'was accepted on joining Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('224', '2018-04-14 21:34:08', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('225', '2018-04-14 22:23:58', 'requests to join Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('226', '2018-04-14 22:23:59', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('227', '2018-04-14 22:24:01', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('228', '2018-04-14 22:31:03', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('229', '2018-04-14 23:00:01', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('230', '2018-04-14 23:02:56', 'requests to join College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('231', '2018-04-14 23:04:12', 'requests to join Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('232', '2018-04-14 23:08:28', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('233', '2018-04-14 23:10:02', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('234', '2018-04-14 23:22:40', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('235', '2018-04-14 23:23:02', 'requests to join Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('236', '2018-04-14 23:23:23', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('237', '2018-04-14 23:49:45', 'logged in.', '111', '45');
INSERT INTO `activities` VALUES ('238', '2018-04-14 23:50:43', 'logged out.', '111', '45');
INSERT INTO `activities` VALUES ('239', '2018-04-14 23:55:23', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('240', '2018-04-14 23:56:49', 'requests to join  class.', '111', '58');
INSERT INTO `activities` VALUES ('241', '2018-04-14 23:56:50', 'requests to join  class.', '111', '58');
INSERT INTO `activities` VALUES ('242', '2018-04-14 23:57:23', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('243', '2018-04-14 23:57:23', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('244', '2018-04-14 23:57:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('245', '2018-04-14 23:57:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('246', '2018-04-14 23:58:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('247', '2018-04-14 23:58:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('248', '2018-04-14 23:59:23', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('249', '2018-04-15 00:00:19', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('250', '2018-04-15 00:02:26', '', '111', '41');
INSERT INTO `activities` VALUES ('251', '2018-04-15 00:05:12', '', '111', '41');
INSERT INTO `activities` VALUES ('252', '2018-04-15 00:06:58', '', '111', '41');
INSERT INTO `activities` VALUES ('253', '2018-04-15 00:07:03', '', '111', '41');
INSERT INTO `activities` VALUES ('254', '2018-04-15 00:09:03', 'CLS9AY365', '111', '41');
INSERT INTO `activities` VALUES ('255', '2018-04-15 00:19:49', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('256', '2018-04-15 00:21:00', '', '111', '41');
INSERT INTO `activities` VALUES ('257', '2018-04-15 00:21:09', 'CLS66EYTJ', '111', '41');
INSERT INTO `activities` VALUES ('258', '2018-04-15 00:23:22', 'CLS66EYTJ', '111', '41');
INSERT INTO `activities` VALUES ('259', '2018-04-15 00:23:32', 'CLS9N2H16', '111', '41');
INSERT INTO `activities` VALUES ('260', '2018-04-15 00:25:52', '', '111', '41');
INSERT INTO `activities` VALUES ('261', '2018-04-15 00:25:58', 'CLS9AY365', '111', '41');
INSERT INTO `activities` VALUES ('262', '2018-04-15 00:27:19', 'CLS9N2H16', '111', '41');
INSERT INTO `activities` VALUES ('263', '2018-04-15 00:27:25', 'CLS9N2H16', '111', '41');
INSERT INTO `activities` VALUES ('264', '2018-04-15 00:27:29', 'CLS9N2H16', '111', '41');
INSERT INTO `activities` VALUES ('265', '2018-04-15 00:33:59', 'requests to join Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('266', '2018-04-15 00:37:28', 'CLSFNQMIB', '111', '41');
INSERT INTO `activities` VALUES ('267', '2018-04-15 00:45:13', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('268', '2018-04-15 00:45:24', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('269', '2018-04-15 00:45:31', 'logged in.', '111', '45');
INSERT INTO `activities` VALUES ('270', '2018-04-15 00:45:43', 'requests to join IT Fundamentals class.', '111', '45');
INSERT INTO `activities` VALUES ('271', '2018-04-15 00:45:48', 'logged out.', '111', '45');
INSERT INTO `activities` VALUES ('272', '2018-04-15 00:46:05', 'was accepted on joining IT Fundamentals class.', '111', '45');
INSERT INTO `activities` VALUES ('273', '2018-04-15 00:48:04', 'requests to join IT Fundamentals class.', '111', '41');
INSERT INTO `activities` VALUES ('274', '2018-04-15 01:17:41', 'requests to join Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('275', '2018-04-15 01:25:19', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('276', '2018-04-15 01:44:17', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('277', '2018-04-15 01:47:14', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('278', '2018-04-15 01:47:40', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('279', '2018-04-15 01:47:48', 'requests to join Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('280', '2018-04-15 01:49:12', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('281', '2018-04-15 02:06:20', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('282', '2018-04-15 02:07:58', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('283', '2018-04-15 02:08:26', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('284', '2018-04-15 02:09:03', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('285', '2018-04-15 02:14:51', 'requests to join IT Fundamentals class.', '111', '41');
INSERT INTO `activities` VALUES ('286', '2018-04-15 02:18:35', 'requests to join College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('287', '2018-04-15 02:27:52', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('288', '2018-04-15 02:28:54', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('289', '2018-04-15 02:30:00', 'was accepted on joining Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('290', '2018-04-15 02:49:17', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('291', '2018-04-15 02:49:17', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('292', '2018-04-15 02:49:19', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('293', '2018-04-15 02:49:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('294', '2018-04-15 02:49:23', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('295', '2018-04-15 02:49:25', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('296', '2018-04-15 02:49:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('297', '2018-04-15 02:49:30', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('298', '2018-04-15 02:49:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('299', '2018-04-15 02:49:34', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('300', '2018-04-15 02:49:36', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('301', '2018-04-15 02:49:38', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('302', '2018-04-15 02:49:40', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('303', '2018-04-15 02:49:43', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('304', '2018-04-15 02:49:45', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('305', '2018-04-15 02:49:47', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('306', '2018-04-15 02:49:49', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('307', '2018-04-15 02:49:51', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('308', '2018-04-15 02:49:54', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('309', '2018-04-15 02:49:56', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('310', '2018-04-15 02:49:58', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('311', '2018-04-15 02:50:00', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('312', '2018-04-15 02:50:02', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('313', '2018-04-15 02:50:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('314', '2018-04-15 02:50:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('315', '2018-04-15 02:50:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('316', '2018-04-15 02:50:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('317', '2018-04-15 02:50:13', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('318', '2018-04-15 02:50:15', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('319', '2018-04-15 02:50:17', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('320', '2018-04-15 02:50:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('321', '2018-04-15 02:50:22', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('322', '2018-04-15 02:50:24', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('323', '2018-04-15 02:50:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('324', '2018-04-15 02:50:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('325', '2018-04-15 02:50:31', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('326', '2018-04-15 02:50:33', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('327', '2018-04-15 02:50:35', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('328', '2018-04-15 02:50:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('329', '2018-04-15 02:50:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('330', '2018-04-15 02:50:41', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('331', '2018-04-15 02:50:44', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('332', '2018-04-15 02:50:46', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('333', '2018-04-15 02:50:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('334', '2018-04-15 02:50:50', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('335', '2018-04-15 02:50:53', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('336', '2018-04-15 02:50:55', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('337', '2018-04-15 02:50:57', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('338', '2018-04-15 02:50:59', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('339', '2018-04-15 02:51:02', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('340', '2018-04-15 02:51:04', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('341', '2018-04-15 02:51:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('342', '2018-04-15 02:51:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('343', '2018-04-15 02:51:14', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('344', '2018-04-15 02:51:17', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('345', '2018-04-15 02:51:19', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('346', '2018-04-15 02:51:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('347', '2018-04-15 02:51:23', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('348', '2018-04-15 02:51:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('349', '2018-04-15 02:51:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('350', '2018-04-15 02:51:30', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('351', '2018-04-15 02:51:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('352', '2018-04-15 02:51:46', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('353', '2018-04-15 02:51:46', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('354', '2018-04-15 02:51:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('355', '2018-04-15 02:51:51', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('356', '2018-04-15 02:51:53', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('357', '2018-04-15 02:51:55', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('358', '2018-04-15 02:51:57', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('359', '2018-04-15 02:51:59', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('360', '2018-04-15 02:52:02', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('361', '2018-04-15 02:52:04', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('362', '2018-04-15 02:52:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('363', '2018-04-15 02:52:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('364', '2018-04-15 02:52:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('365', '2018-04-15 02:52:13', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('366', '2018-04-15 02:52:15', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('367', '2018-04-15 02:52:17', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('368', '2018-04-15 02:52:19', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('369', '2018-04-15 02:52:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('370', '2018-04-15 02:52:23', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('371', '2018-04-15 02:52:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('372', '2018-04-15 02:52:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('373', '2018-04-15 02:52:30', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('374', '2018-04-15 02:52:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('375', '2018-04-15 02:52:34', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('376', '2018-04-15 02:52:36', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('377', '2018-04-15 02:52:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('378', '2018-04-15 02:52:41', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('379', '2018-04-15 02:52:43', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('380', '2018-04-15 02:52:45', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('381', '2018-04-15 02:52:47', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('382', '2018-04-15 02:52:49', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('383', '2018-04-15 02:52:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('384', '2018-04-15 02:52:54', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('385', '2018-04-15 02:52:56', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('386', '2018-04-15 02:52:58', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('387', '2018-04-15 02:53:00', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('388', '2018-04-15 02:53:02', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('389', '2018-04-15 02:53:04', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('390', '2018-04-15 02:53:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('391', '2018-04-15 02:53:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('392', '2018-04-15 02:53:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('393', '2018-04-15 02:53:13', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('394', '2018-04-15 02:53:15', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('395', '2018-04-15 02:53:17', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('396', '2018-04-15 02:53:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('397', '2018-04-15 02:53:22', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('398', '2018-04-15 02:53:24', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('399', '2018-04-15 02:53:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('400', '2018-04-15 02:53:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('401', '2018-04-15 02:53:31', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('402', '2018-04-15 02:53:33', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('403', '2018-04-15 02:53:35', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('404', '2018-04-15 02:53:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('405', '2018-04-15 02:53:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('406', '2018-04-15 02:53:41', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('407', '2018-04-15 02:53:43', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('408', '2018-04-15 02:53:46', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('409', '2018-04-15 02:53:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('410', '2018-04-15 02:53:50', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('411', '2018-04-15 02:53:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('412', '2018-04-15 02:53:54', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('413', '2018-04-15 02:53:56', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('414', '2018-04-15 02:53:58', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('415', '2018-04-15 02:54:01', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('416', '2018-04-15 02:54:03', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('417', '2018-04-15 02:54:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('418', '2018-04-15 02:54:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('419', '2018-04-15 02:54:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('420', '2018-04-15 02:54:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('421', '2018-04-15 02:54:13', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('422', '2018-04-15 02:54:16', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('423', '2018-04-15 02:54:18', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('424', '2018-04-15 02:54:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('425', '2018-04-15 02:54:22', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('426', '2018-04-15 02:54:24', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('427', '2018-04-15 02:54:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('428', '2018-04-15 02:54:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('429', '2018-04-15 02:54:31', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('430', '2018-04-15 02:54:33', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('431', '2018-04-15 02:54:35', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('432', '2018-04-15 02:54:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('433', '2018-04-15 02:54:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('434', '2018-04-15 02:54:41', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('435', '2018-04-15 02:54:44', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('436', '2018-04-15 02:54:46', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('437', '2018-04-15 02:54:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('438', '2018-04-15 02:54:50', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('439', '2018-04-15 02:54:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('440', '2018-04-15 02:54:54', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('441', '2018-04-15 02:54:56', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('442', '2018-04-15 02:54:59', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('443', '2018-04-15 02:55:01', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('444', '2018-04-15 02:55:03', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('445', '2018-04-15 02:55:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('446', '2018-04-15 02:55:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('447', '2018-04-15 02:55:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('448', '2018-04-15 02:55:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('449', '2018-04-15 02:55:14', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('450', '2018-04-15 02:55:16', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('451', '2018-04-15 02:55:18', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('452', '2018-04-15 02:55:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('453', '2018-04-15 02:55:22', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('454', '2018-04-15 02:55:25', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('455', '2018-04-15 02:55:27', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('456', '2018-04-15 02:55:29', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('457', '2018-04-15 02:55:31', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('458', '2018-04-15 02:55:33', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('459', '2018-04-15 02:55:35', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('460', '2018-04-15 02:55:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('461', '2018-04-15 02:55:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('462', '2018-04-15 02:55:42', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('463', '2018-04-15 02:55:44', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('464', '2018-04-15 02:55:46', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('465', '2018-04-15 02:55:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('466', '2018-04-15 02:55:50', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('467', '2018-04-15 02:55:53', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('468', '2018-04-15 02:55:55', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('469', '2018-04-15 02:55:57', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('470', '2018-04-15 02:55:59', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('471', '2018-04-15 02:56:01', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('472', '2018-04-15 02:56:03', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('473', '2018-04-15 02:56:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('474', '2018-04-15 02:56:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('475', '2018-04-15 02:56:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('476', '2018-04-15 02:56:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('477', '2018-04-15 02:56:14', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('478', '2018-04-15 02:56:16', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('479', '2018-04-15 02:56:18', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('480', '2018-04-15 02:56:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('481', '2018-04-15 02:56:23', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('482', '2018-04-15 02:56:25', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('483', '2018-04-15 02:56:27', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('484', '2018-04-15 02:56:29', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('485', '2018-04-15 02:56:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('486', '2018-04-15 02:56:34', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('487', '2018-04-15 02:56:36', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('488', '2018-04-15 02:56:38', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('489', '2018-04-15 02:56:40', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('490', '2018-04-15 02:56:42', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('491', '2018-04-15 02:56:45', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('492', '2018-04-15 02:56:47', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('493', '2018-04-15 02:56:49', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('494', '2018-04-15 02:56:51', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('495', '2018-04-15 02:56:53', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('496', '2018-04-15 02:56:55', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('497', '2018-04-15 02:56:58', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('498', '2018-04-15 02:57:00', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('499', '2018-04-15 02:57:02', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('500', '2018-04-15 02:57:04', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('501', '2018-04-15 02:57:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('502', '2018-04-15 02:57:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('503', '2018-04-15 02:57:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('504', '2018-04-15 02:57:13', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('505', '2018-04-15 02:57:15', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('506', '2018-04-15 02:57:17', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('507', '2018-04-15 02:57:19', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('508', '2018-04-15 02:57:22', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('509', '2018-04-15 02:57:24', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('510', '2018-04-15 02:57:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('511', '2018-04-15 02:57:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('512', '2018-04-15 02:57:30', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('513', '2018-04-15 02:57:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('514', '2018-04-15 02:57:35', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('515', '2018-04-15 02:58:03', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('516', '2018-04-15 02:58:03', 'requests to join IT Fundamentals class.', '111', '41');
INSERT INTO `activities` VALUES ('517', '2018-04-15 02:58:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('518', '2018-04-15 02:58:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('519', '2018-04-15 02:58:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('520', '2018-04-15 02:58:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('521', '2018-04-15 02:58:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('522', '2018-04-15 02:58:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('523', '2018-04-15 02:58:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('524', '2018-04-15 02:58:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('525', '2018-04-15 02:58:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('526', '2018-04-15 02:58:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('527', '2018-04-15 02:58:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('528', '2018-04-15 02:58:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('529', '2018-04-15 02:58:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('530', '2018-04-15 02:58:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('531', '2018-04-15 02:58:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('532', '2018-04-15 02:58:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('533', '2018-04-15 02:58:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('534', '2018-04-15 02:58:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('535', '2018-04-15 02:58:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('536', '2018-04-15 02:58:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('537', '2018-04-15 02:58:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('538', '2018-04-15 02:58:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('539', '2018-04-15 02:58:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('540', '2018-04-15 02:58:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('541', '2018-04-15 02:58:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('542', '2018-04-15 02:58:13', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('543', '2018-04-15 02:58:13', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('544', '2018-04-15 02:58:13', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('545', '2018-04-15 02:58:13', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('546', '2018-04-15 02:58:13', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('547', '2018-04-15 02:58:14', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('548', '2018-04-15 02:58:14', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('549', '2018-04-15 02:58:14', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('550', '2018-04-15 02:58:14', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('551', '2018-04-15 02:58:14', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('552', '2018-04-15 02:58:14', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('553', '2018-04-15 02:58:14', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('554', '2018-04-15 02:58:14', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('555', '2018-04-15 02:58:14', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('556', '2018-04-15 02:58:15', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('557', '2018-04-15 02:58:15', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('558', '2018-04-15 02:58:15', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('559', '2018-04-15 02:58:15', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('560', '2018-04-15 02:58:15', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('561', '2018-04-15 02:58:15', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('562', '2018-04-15 02:58:15', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('563', '2018-04-15 02:58:15', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('564', '2018-04-15 02:58:15', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('565', '2018-04-15 02:58:15', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('566', '2018-04-15 02:58:15', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('567', '2018-04-15 02:58:16', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('568', '2018-04-15 02:58:16', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('569', '2018-04-15 02:58:16', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('570', '2018-04-15 02:58:16', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('571', '2018-04-15 02:58:16', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('572', '2018-04-15 02:58:16', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('573', '2018-04-15 02:58:16', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('574', '2018-04-15 02:58:16', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('575', '2018-04-15 02:58:16', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('576', '2018-04-15 02:58:16', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('577', '2018-04-15 02:58:17', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('578', '2018-04-15 02:58:17', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('579', '2018-04-15 02:58:17', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('580', '2018-04-15 02:58:17', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('581', '2018-04-15 02:58:17', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('582', '2018-04-15 02:58:17', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('583', '2018-04-15 02:58:17', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('584', '2018-04-15 02:58:17', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('585', '2018-04-15 02:58:17', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('586', '2018-04-15 02:58:17', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('587', '2018-04-15 02:58:18', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('588', '2018-04-15 02:58:18', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('589', '2018-04-15 02:58:18', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('590', '2018-04-15 02:58:18', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('591', '2018-04-15 02:58:18', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('592', '2018-04-15 02:58:18', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('593', '2018-04-15 02:58:18', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('594', '2018-04-15 02:58:18', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('595', '2018-04-15 02:58:18', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('596', '2018-04-15 02:58:18', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('597', '2018-04-15 02:58:18', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('598', '2018-04-15 02:58:18', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('599', '2018-04-15 02:58:18', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('600', '2018-04-15 02:58:19', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('601', '2018-04-15 02:58:19', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('602', '2018-04-15 02:58:19', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('603', '2018-04-15 02:58:19', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('604', '2018-04-15 02:58:19', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('605', '2018-04-15 02:58:19', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('606', '2018-04-15 02:58:19', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('607', '2018-04-15 02:58:19', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('608', '2018-04-15 02:58:19', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('609', '2018-04-15 02:58:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('610', '2018-04-15 02:58:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('611', '2018-04-15 02:58:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('612', '2018-04-15 02:58:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('613', '2018-04-15 02:58:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('614', '2018-04-15 02:58:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('615', '2018-04-15 02:58:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('616', '2018-04-15 02:58:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('617', '2018-04-15 02:58:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('618', '2018-04-15 02:58:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('619', '2018-04-15 02:58:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('620', '2018-04-15 02:58:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('621', '2018-04-15 02:58:20', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('622', '2018-04-15 02:58:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('623', '2018-04-15 02:58:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('624', '2018-04-15 02:58:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('625', '2018-04-15 02:58:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('626', '2018-04-15 02:58:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('627', '2018-04-15 02:58:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('628', '2018-04-15 02:58:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('629', '2018-04-15 02:58:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('630', '2018-04-15 02:58:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('631', '2018-04-15 02:58:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('632', '2018-04-15 02:58:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('633', '2018-04-15 02:58:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('634', '2018-04-15 02:58:21', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('635', '2018-04-15 02:58:22', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('636', '2018-04-15 02:58:22', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('637', '2018-04-15 02:58:22', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('638', '2018-04-15 02:58:22', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('639', '2018-04-15 02:58:22', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('640', '2018-04-15 02:58:22', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('641', '2018-04-15 02:58:22', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('642', '2018-04-15 02:58:23', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('643', '2018-04-15 02:58:23', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('644', '2018-04-15 02:58:23', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('645', '2018-04-15 02:58:23', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('646', '2018-04-15 02:58:24', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('647', '2018-04-15 02:58:24', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('648', '2018-04-15 02:58:24', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('649', '2018-04-15 02:58:24', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('650', '2018-04-15 02:58:24', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('651', '2018-04-15 02:58:24', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('652', '2018-04-15 02:58:24', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('653', '2018-04-15 02:58:24', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('654', '2018-04-15 02:58:25', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('655', '2018-04-15 02:58:25', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('656', '2018-04-15 02:58:25', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('657', '2018-04-15 02:58:25', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('658', '2018-04-15 02:58:25', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('659', '2018-04-15 02:58:25', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('660', '2018-04-15 02:58:25', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('661', '2018-04-15 02:58:25', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('662', '2018-04-15 02:58:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('663', '2018-04-15 02:58:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('664', '2018-04-15 02:58:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('665', '2018-04-15 02:58:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('666', '2018-04-15 02:58:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('667', '2018-04-15 02:58:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('668', '2018-04-15 02:58:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('669', '2018-04-15 02:58:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('670', '2018-04-15 02:58:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('671', '2018-04-15 02:58:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('672', '2018-04-15 02:58:26', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('673', '2018-04-15 02:58:27', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('674', '2018-04-15 02:58:27', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('675', '2018-04-15 02:58:27', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('676', '2018-04-15 02:58:27', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('677', '2018-04-15 02:58:27', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('678', '2018-04-15 02:58:27', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('679', '2018-04-15 02:58:27', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('680', '2018-04-15 02:58:27', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('681', '2018-04-15 02:58:27', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('682', '2018-04-15 02:58:27', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('683', '2018-04-15 02:58:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('684', '2018-04-15 02:58:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('685', '2018-04-15 02:58:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('686', '2018-04-15 02:58:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('687', '2018-04-15 02:58:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('688', '2018-04-15 02:58:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('689', '2018-04-15 02:58:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('690', '2018-04-15 02:58:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('691', '2018-04-15 02:58:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('692', '2018-04-15 02:58:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('693', '2018-04-15 02:58:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('694', '2018-04-15 02:58:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('695', '2018-04-15 02:58:28', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('696', '2018-04-15 02:58:29', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('697', '2018-04-15 02:58:29', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('698', '2018-04-15 02:58:29', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('699', '2018-04-15 02:58:29', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('700', '2018-04-15 02:58:29', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('701', '2018-04-15 02:58:29', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('702', '2018-04-15 02:58:29', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('703', '2018-04-15 02:58:29', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('704', '2018-04-15 02:58:29', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('705', '2018-04-15 02:58:29', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('706', '2018-04-15 02:58:29', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('707', '2018-04-15 02:58:29', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('708', '2018-04-15 02:58:29', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('709', '2018-04-15 02:58:30', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('710', '2018-04-15 02:58:30', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('711', '2018-04-15 02:58:30', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('712', '2018-04-15 02:58:30', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('713', '2018-04-15 02:58:31', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('714', '2018-04-15 02:58:31', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('715', '2018-04-15 02:58:31', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('716', '2018-04-15 02:58:31', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('717', '2018-04-15 02:58:31', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('718', '2018-04-15 02:58:31', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('719', '2018-04-15 02:58:31', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('720', '2018-04-15 02:58:31', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('721', '2018-04-15 02:58:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('722', '2018-04-15 02:58:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('723', '2018-04-15 02:58:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('724', '2018-04-15 02:58:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('725', '2018-04-15 02:58:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('726', '2018-04-15 02:58:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('727', '2018-04-15 02:58:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('728', '2018-04-15 02:58:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('729', '2018-04-15 02:58:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('730', '2018-04-15 02:58:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('731', '2018-04-15 02:58:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('732', '2018-04-15 02:58:32', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('733', '2018-04-15 02:58:33', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('734', '2018-04-15 02:58:33', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('735', '2018-04-15 02:58:33', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('736', '2018-04-15 02:58:33', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('737', '2018-04-15 02:58:33', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('738', '2018-04-15 02:58:33', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('739', '2018-04-15 02:58:33', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('740', '2018-04-15 02:58:33', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('741', '2018-04-15 02:58:33', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('742', '2018-04-15 02:58:33', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('743', '2018-04-15 02:58:33', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('744', '2018-04-15 02:58:33', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('745', '2018-04-15 02:58:34', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('746', '2018-04-15 02:58:34', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('747', '2018-04-15 02:58:34', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('748', '2018-04-15 02:58:34', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('749', '2018-04-15 02:58:34', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('750', '2018-04-15 02:58:34', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('751', '2018-04-15 02:58:34', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('752', '2018-04-15 02:58:34', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('753', '2018-04-15 02:58:34', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('754', '2018-04-15 02:58:34', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('755', '2018-04-15 02:58:34', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('756', '2018-04-15 02:58:34', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('757', '2018-04-15 02:58:35', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('758', '2018-04-15 02:58:35', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('759', '2018-04-15 02:58:35', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('760', '2018-04-15 02:58:35', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('761', '2018-04-15 02:58:35', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('762', '2018-04-15 02:58:35', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('763', '2018-04-15 02:58:35', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('764', '2018-04-15 02:58:35', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('765', '2018-04-15 02:58:35', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('766', '2018-04-15 02:58:35', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('767', '2018-04-15 02:58:35', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('768', '2018-04-15 02:58:36', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('769', '2018-04-15 02:58:36', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('770', '2018-04-15 02:58:36', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('771', '2018-04-15 02:58:36', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('772', '2018-04-15 02:58:36', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('773', '2018-04-15 02:58:36', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('774', '2018-04-15 02:58:36', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('775', '2018-04-15 02:58:36', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('776', '2018-04-15 02:58:36', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('777', '2018-04-15 02:58:36', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('778', '2018-04-15 02:58:36', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('779', '2018-04-15 02:58:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('780', '2018-04-15 02:58:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('781', '2018-04-15 02:58:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('782', '2018-04-15 02:58:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('783', '2018-04-15 02:58:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('784', '2018-04-15 02:58:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('785', '2018-04-15 02:58:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('786', '2018-04-15 02:58:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('787', '2018-04-15 02:58:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('788', '2018-04-15 02:58:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('789', '2018-04-15 02:58:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('790', '2018-04-15 02:58:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('791', '2018-04-15 02:58:37', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('792', '2018-04-15 02:58:38', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('793', '2018-04-15 02:58:38', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('794', '2018-04-15 02:58:38', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('795', '2018-04-15 02:58:38', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('796', '2018-04-15 02:58:38', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('797', '2018-04-15 02:58:38', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('798', '2018-04-15 02:58:38', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('799', '2018-04-15 02:58:38', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('800', '2018-04-15 02:58:38', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('801', '2018-04-15 02:58:38', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('802', '2018-04-15 02:58:38', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('803', '2018-04-15 02:58:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('804', '2018-04-15 02:58:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('805', '2018-04-15 02:58:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('806', '2018-04-15 02:58:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('807', '2018-04-15 02:58:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('808', '2018-04-15 02:58:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('809', '2018-04-15 02:58:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('810', '2018-04-15 02:58:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('811', '2018-04-15 02:58:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('812', '2018-04-15 02:58:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('813', '2018-04-15 02:58:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('814', '2018-04-15 02:58:39', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('815', '2018-04-15 02:58:40', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('816', '2018-04-15 02:58:40', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('817', '2018-04-15 02:58:40', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('818', '2018-04-15 02:58:40', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('819', '2018-04-15 02:58:40', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('820', '2018-04-15 02:58:40', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('821', '2018-04-15 02:58:40', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('822', '2018-04-15 02:58:40', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('823', '2018-04-15 02:58:40', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('824', '2018-04-15 02:58:40', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('825', '2018-04-15 02:58:40', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('826', '2018-04-15 02:58:40', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('827', '2018-04-15 02:58:41', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('828', '2018-04-15 02:58:41', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('829', '2018-04-15 02:58:41', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('830', '2018-04-15 02:58:41', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('831', '2018-04-15 02:58:42', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('832', '2018-04-15 02:58:42', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('833', '2018-04-15 02:58:42', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('834', '2018-04-15 02:58:43', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('835', '2018-04-15 02:58:43', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('836', '2018-04-15 02:58:43', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('837', '2018-04-15 02:58:43', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('838', '2018-04-15 02:58:43', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('839', '2018-04-15 02:58:43', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('840', '2018-04-15 02:58:43', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('841', '2018-04-15 02:58:43', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('842', '2018-04-15 02:58:43', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('843', '2018-04-15 02:58:43', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('844', '2018-04-15 02:58:43', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('845', '2018-04-15 02:58:43', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('846', '2018-04-15 02:58:44', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('847', '2018-04-15 02:58:44', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('848', '2018-04-15 02:58:44', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('849', '2018-04-15 02:58:44', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('850', '2018-04-15 02:58:44', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('851', '2018-04-15 02:58:44', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('852', '2018-04-15 02:58:44', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('853', '2018-04-15 02:58:44', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('854', '2018-04-15 02:58:44', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('855', '2018-04-15 02:58:45', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('856', '2018-04-15 02:58:45', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('857', '2018-04-15 02:58:45', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('858', '2018-04-15 02:58:45', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('859', '2018-04-15 02:58:45', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('860', '2018-04-15 02:58:45', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('861', '2018-04-15 02:58:45', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('862', '2018-04-15 02:58:45', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('863', '2018-04-15 02:58:45', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('864', '2018-04-15 02:58:45', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('865', '2018-04-15 02:58:46', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('866', '2018-04-15 02:58:46', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('867', '2018-04-15 02:58:46', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('868', '2018-04-15 02:58:46', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('869', '2018-04-15 02:58:46', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('870', '2018-04-15 02:58:46', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('871', '2018-04-15 02:58:46', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('872', '2018-04-15 02:58:46', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('873', '2018-04-15 02:58:46', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('874', '2018-04-15 02:58:46', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('875', '2018-04-15 02:58:46', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('876', '2018-04-15 02:58:47', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('877', '2018-04-15 02:58:47', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('878', '2018-04-15 02:58:47', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('879', '2018-04-15 02:58:47', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('880', '2018-04-15 02:58:47', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('881', '2018-04-15 02:58:47', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('882', '2018-04-15 02:58:47', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('883', '2018-04-15 02:58:47', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('884', '2018-04-15 02:58:47', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('885', '2018-04-15 02:58:47', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('886', '2018-04-15 02:58:47', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('887', '2018-04-15 02:58:47', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('888', '2018-04-15 02:58:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('889', '2018-04-15 02:58:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('890', '2018-04-15 02:58:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('891', '2018-04-15 02:58:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('892', '2018-04-15 02:58:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('893', '2018-04-15 02:58:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('894', '2018-04-15 02:58:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('895', '2018-04-15 02:58:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('896', '2018-04-15 02:58:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('897', '2018-04-15 02:58:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('898', '2018-04-15 02:58:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('899', '2018-04-15 02:58:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('900', '2018-04-15 02:58:48', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('901', '2018-04-15 02:58:49', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('902', '2018-04-15 02:58:49', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('903', '2018-04-15 02:58:49', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('904', '2018-04-15 02:58:49', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('905', '2018-04-15 02:58:49', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('906', '2018-04-15 02:58:49', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('907', '2018-04-15 02:58:49', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('908', '2018-04-15 02:58:49', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('909', '2018-04-15 02:58:49', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('910', '2018-04-15 02:58:49', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('911', '2018-04-15 02:58:49', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('912', '2018-04-15 02:58:49', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('913', '2018-04-15 02:58:50', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('914', '2018-04-15 02:58:50', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('915', '2018-04-15 02:58:50', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('916', '2018-04-15 02:58:50', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('917', '2018-04-15 02:58:50', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('918', '2018-04-15 02:58:50', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('919', '2018-04-15 02:58:50', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('920', '2018-04-15 02:58:50', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('921', '2018-04-15 02:58:50', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('922', '2018-04-15 02:58:50', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('923', '2018-04-15 02:58:50', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('924', '2018-04-15 02:58:50', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('925', '2018-04-15 02:58:51', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('926', '2018-04-15 02:58:51', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('927', '2018-04-15 02:58:51', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('928', '2018-04-15 02:58:51', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('929', '2018-04-15 02:58:51', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('930', '2018-04-15 02:58:51', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('931', '2018-04-15 02:58:51', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('932', '2018-04-15 02:58:51', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('933', '2018-04-15 02:58:51', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('934', '2018-04-15 02:58:51', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('935', '2018-04-15 02:58:51', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('936', '2018-04-15 02:58:51', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('937', '2018-04-15 02:58:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('938', '2018-04-15 02:58:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('939', '2018-04-15 02:58:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('940', '2018-04-15 02:58:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('941', '2018-04-15 02:58:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('942', '2018-04-15 02:58:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('943', '2018-04-15 02:58:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('944', '2018-04-15 02:58:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('945', '2018-04-15 02:58:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('946', '2018-04-15 02:58:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('947', '2018-04-15 02:58:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('948', '2018-04-15 02:58:52', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('949', '2018-04-15 02:58:53', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('950', '2018-04-15 02:58:53', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('951', '2018-04-15 02:58:53', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('952', '2018-04-15 02:58:53', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('953', '2018-04-15 02:58:53', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('954', '2018-04-15 02:58:53', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('955', '2018-04-15 02:58:53', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('956', '2018-04-15 02:58:53', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('957', '2018-04-15 02:58:53', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('958', '2018-04-15 02:58:53', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('959', '2018-04-15 02:58:53', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('960', '2018-04-15 02:58:54', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('961', '2018-04-15 02:58:54', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('962', '2018-04-15 02:58:54', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('963', '2018-04-15 02:58:54', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('964', '2018-04-15 02:58:54', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('965', '2018-04-15 02:58:54', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('966', '2018-04-15 02:58:54', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('967', '2018-04-15 02:58:54', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('968', '2018-04-15 02:58:54', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('969', '2018-04-15 02:58:54', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('970', '2018-04-15 02:58:54', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('971', '2018-04-15 02:58:55', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('972', '2018-04-15 02:58:55', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('973', '2018-04-15 02:58:55', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('974', '2018-04-15 02:58:55', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('975', '2018-04-15 02:58:55', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('976', '2018-04-15 02:58:55', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('977', '2018-04-15 02:58:55', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('978', '2018-04-15 02:58:55', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('979', '2018-04-15 02:58:55', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('980', '2018-04-15 02:58:55', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('981', '2018-04-15 02:58:55', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('982', '2018-04-15 02:58:56', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('983', '2018-04-15 02:58:56', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('984', '2018-04-15 02:58:56', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('985', '2018-04-15 02:58:56', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('986', '2018-04-15 02:58:56', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('987', '2018-04-15 02:58:56', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('988', '2018-04-15 02:58:56', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('989', '2018-04-15 02:58:56', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('990', '2018-04-15 02:58:56', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('991', '2018-04-15 02:58:56', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('992', '2018-04-15 02:58:57', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('993', '2018-04-15 02:58:57', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('994', '2018-04-15 02:58:57', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('995', '2018-04-15 02:58:57', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('996', '2018-04-15 02:58:57', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('997', '2018-04-15 02:58:57', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('998', '2018-04-15 02:58:57', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('999', '2018-04-15 02:58:57', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1000', '2018-04-15 02:58:57', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1001', '2018-04-15 02:58:57', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1002', '2018-04-15 02:58:57', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1003', '2018-04-15 02:58:57', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1004', '2018-04-15 02:58:58', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1005', '2018-04-15 02:58:58', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1006', '2018-04-15 02:58:58', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1007', '2018-04-15 02:58:58', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1008', '2018-04-15 02:58:58', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1009', '2018-04-15 02:58:58', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1010', '2018-04-15 02:58:58', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1011', '2018-04-15 02:58:58', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1012', '2018-04-15 02:58:58', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1013', '2018-04-15 02:58:58', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1014', '2018-04-15 02:58:58', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1015', '2018-04-15 02:58:58', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1016', '2018-04-15 02:58:59', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1017', '2018-04-15 02:58:59', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1018', '2018-04-15 02:59:02', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1019', '2018-04-15 02:59:02', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1020', '2018-04-15 02:59:02', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1021', '2018-04-15 02:59:02', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1022', '2018-04-15 02:59:02', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1023', '2018-04-15 02:59:03', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1024', '2018-04-15 02:59:03', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1025', '2018-04-15 02:59:03', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1026', '2018-04-15 02:59:03', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1027', '2018-04-15 02:59:03', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1028', '2018-04-15 02:59:03', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1029', '2018-04-15 02:59:03', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1030', '2018-04-15 02:59:03', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1031', '2018-04-15 02:59:03', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1032', '2018-04-15 02:59:03', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1033', '2018-04-15 02:59:04', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1034', '2018-04-15 02:59:04', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1035', '2018-04-15 02:59:04', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1036', '2018-04-15 02:59:04', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1037', '2018-04-15 02:59:04', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1038', '2018-04-15 02:59:04', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1039', '2018-04-15 02:59:04', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1040', '2018-04-15 02:59:04', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1041', '2018-04-15 02:59:04', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1042', '2018-04-15 02:59:04', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1043', '2018-04-15 02:59:04', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1044', '2018-04-15 02:59:04', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1045', '2018-04-15 02:59:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1046', '2018-04-15 02:59:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1047', '2018-04-15 02:59:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1048', '2018-04-15 02:59:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1049', '2018-04-15 02:59:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1050', '2018-04-15 02:59:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1051', '2018-04-15 02:59:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1052', '2018-04-15 02:59:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1053', '2018-04-15 02:59:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1054', '2018-04-15 02:59:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1055', '2018-04-15 02:59:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1056', '2018-04-15 02:59:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1057', '2018-04-15 02:59:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1058', '2018-04-15 02:59:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1059', '2018-04-15 02:59:05', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1060', '2018-04-15 02:59:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1061', '2018-04-15 02:59:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1062', '2018-04-15 02:59:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1063', '2018-04-15 02:59:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1064', '2018-04-15 02:59:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1065', '2018-04-15 02:59:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1066', '2018-04-15 02:59:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1067', '2018-04-15 02:59:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1068', '2018-04-15 02:59:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1069', '2018-04-15 02:59:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1070', '2018-04-15 02:59:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1071', '2018-04-15 02:59:06', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1072', '2018-04-15 02:59:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1073', '2018-04-15 02:59:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1074', '2018-04-15 02:59:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1075', '2018-04-15 02:59:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1076', '2018-04-15 02:59:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1077', '2018-04-15 02:59:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1078', '2018-04-15 02:59:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1079', '2018-04-15 02:59:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1080', '2018-04-15 02:59:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1081', '2018-04-15 02:59:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1082', '2018-04-15 02:59:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1083', '2018-04-15 02:59:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1084', '2018-04-15 02:59:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1085', '2018-04-15 02:59:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1086', '2018-04-15 02:59:07', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1087', '2018-04-15 02:59:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1088', '2018-04-15 02:59:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1089', '2018-04-15 02:59:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1090', '2018-04-15 02:59:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1091', '2018-04-15 02:59:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1092', '2018-04-15 02:59:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1093', '2018-04-15 02:59:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1094', '2018-04-15 02:59:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1095', '2018-04-15 02:59:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1096', '2018-04-15 02:59:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1097', '2018-04-15 02:59:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1098', '2018-04-15 02:59:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1099', '2018-04-15 02:59:08', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1100', '2018-04-15 02:59:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1101', '2018-04-15 02:59:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1102', '2018-04-15 02:59:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1103', '2018-04-15 02:59:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1104', '2018-04-15 02:59:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1105', '2018-04-15 02:59:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1106', '2018-04-15 02:59:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1107', '2018-04-15 02:59:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1108', '2018-04-15 02:59:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1109', '2018-04-15 02:59:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1110', '2018-04-15 02:59:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1111', '2018-04-15 02:59:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1112', '2018-04-15 02:59:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1113', '2018-04-15 02:59:09', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1114', '2018-04-15 02:59:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1115', '2018-04-15 02:59:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1116', '2018-04-15 02:59:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1117', '2018-04-15 02:59:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1118', '2018-04-15 02:59:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1119', '2018-04-15 02:59:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1120', '2018-04-15 02:59:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1121', '2018-04-15 02:59:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1122', '2018-04-15 02:59:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1123', '2018-04-15 02:59:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1124', '2018-04-15 02:59:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1125', '2018-04-15 02:59:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1126', '2018-04-15 02:59:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1127', '2018-04-15 02:59:10', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1128', '2018-04-15 02:59:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1129', '2018-04-15 02:59:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1130', '2018-04-15 02:59:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1131', '2018-04-15 02:59:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1132', '2018-04-15 02:59:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1133', '2018-04-15 02:59:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1134', '2018-04-15 02:59:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1135', '2018-04-15 02:59:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1136', '2018-04-15 02:59:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1137', '2018-04-15 02:59:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1138', '2018-04-15 02:59:11', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1139', '2018-04-15 02:59:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1140', '2018-04-15 02:59:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1141', '2018-04-15 02:59:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1142', '2018-04-15 02:59:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1143', '2018-04-15 02:59:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1144', '2018-04-15 02:59:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1145', '2018-04-15 02:59:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1146', '2018-04-15 02:59:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1147', '2018-04-15 02:59:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1148', '2018-04-15 02:59:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('1149', '2018-04-15 02:59:12', 'requests to join  class.', '111', '41');
INSERT INTO `activities` VALUES ('2782', '2018-04-16 21:16:01', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2783', '2018-04-16 21:31:27', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('2784', '2018-04-16 21:32:45', 'was accepted on joining College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('2785', '2018-04-16 21:34:33', 'requests to join College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('2786', '2018-04-16 21:35:00', 'was accepted on joining College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('2787', '2018-04-16 21:36:17', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('2788', '2018-04-16 21:36:41', 'requests to join IT Fundamentals class.', '111', '41');
INSERT INTO `activities` VALUES ('2789', '2018-04-16 21:39:26', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('2790', '2018-04-16 21:42:28', 'requests to join Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('2791', '2018-04-16 21:43:46', 'requests to join Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('2792', '2018-04-16 21:46:26', 'requests to join IT Fundamentals class.', '111', '41');
INSERT INTO `activities` VALUES ('2793', '2018-04-16 22:31:33', 'requests to join Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('2794', '2018-04-16 22:35:54', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('2795', '2018-04-16 22:37:29', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('2796', '2018-04-16 22:45:04', 'requests to join Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('2797', '2018-04-16 22:57:15', 'requests to join College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('2798', '2018-04-16 23:14:00', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2799', '2018-04-16 23:14:05', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2800', '2018-04-16 23:14:36', 'logged in.', '111', '45');
INSERT INTO `activities` VALUES ('2801', '2018-04-16 23:14:46', 'requests to join College Trigonometry class.', '111', '45');
INSERT INTO `activities` VALUES ('2802', '2018-04-16 23:14:50', 'logged out.', '111', '45');
INSERT INTO `activities` VALUES ('2803', '2018-04-16 23:15:12', 'was accepted on joining College Trigonometry class.', '111', '45');
INSERT INTO `activities` VALUES ('2804', '2018-04-16 23:17:37', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('2805', '2018-04-16 23:18:42', 'requests to join College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('2806', '2018-04-16 23:27:06', 'requests to join IT Fundamentals class.', '111', '41');
INSERT INTO `activities` VALUES ('2807', '2018-04-16 23:45:43', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('2808', '2018-04-16 23:56:51', 'requests to join Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('2809', '2018-04-16 23:59:35', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('2810', '2018-04-17 00:01:00', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('2811', '2018-04-17 00:04:05', 'requests to join Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('2812', '2018-04-17 00:09:54', 'requests to join Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('2813', '2018-04-17 00:18:32', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('2814', '2018-04-17 00:18:32', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('2815', '2018-04-17 00:18:53', 'requests to join IT Fundamentals class.', '111', '41');
INSERT INTO `activities` VALUES ('2816', '2018-04-17 00:18:53', 'requests to join IT Fundamentals class.', '111', '41');
INSERT INTO `activities` VALUES ('2817', '2018-04-17 00:21:41', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('2818', '2018-04-17 00:25:23', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('2819', '2018-04-17 00:27:35', 'requests to join IT Fundamentals class.', '111', '41');
INSERT INTO `activities` VALUES ('2820', '2018-04-17 00:29:46', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('2821', '2018-04-17 00:31:33', 'requests to join Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('2822', '2018-04-17 00:34:55', 'requests to join Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('2823', '2018-04-17 00:36:01', 'requests to join College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('2824', '2018-04-17 00:37:12', 'requests to join Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('2825', '2018-04-17 00:38:01', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('2826', '2018-04-17 00:41:18', 'requests to join IT Fundamentals class.', '111', '41');
INSERT INTO `activities` VALUES ('2827', '2018-04-17 00:43:20', 'requests to join College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('2828', '2018-04-17 00:45:37', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('2829', '2018-04-17 00:50:58', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2830', '2018-04-17 01:01:49', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('2831', '2018-04-17 01:03:34', 'requests to join Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('2832', '2018-04-17 01:11:06', 'requests to join Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('2833', '2018-04-17 01:13:14', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('2834', '2018-04-17 01:13:45', 'requests to join College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('2835', '2018-04-17 01:14:28', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('2836', '2018-04-17 01:15:50', 'requests to join IT Fundamentals class.', '111', '41');
INSERT INTO `activities` VALUES ('2837', '2018-04-17 01:16:42', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('2838', '2018-04-17 01:19:47', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('2839', '2018-04-17 01:32:04', 'requests to join College Algebra class.', '111', '41');
INSERT INTO `activities` VALUES ('2840', '2018-04-17 01:32:43', 'requests to join Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('2841', '2018-04-17 01:36:50', 'requests to join IT Fundamentals class.', '111', '41');
INSERT INTO `activities` VALUES ('2842', '2018-04-17 01:39:46', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('2843', '2018-04-17 01:40:58', 'requests to join Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('2844', '2018-04-17 01:41:40', 'requests to join College Trigonometry class.', '111', '41');
INSERT INTO `activities` VALUES ('2845', '2018-04-17 01:45:10', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2846', '2018-04-17 01:45:35', 'logged in.', '111', '42');
INSERT INTO `activities` VALUES ('2847', '2018-04-17 01:45:49', 'requests to join College Trigonometry class.', '111', '42');
INSERT INTO `activities` VALUES ('2848', '2018-04-17 01:46:26', 'was accepted on joining College Trigonometry class.', '111', '42');
INSERT INTO `activities` VALUES ('2849', '2018-04-17 01:50:07', 'requests to join Programming I class.', '111', '42');
INSERT INTO `activities` VALUES ('2850', '2018-04-17 01:57:35', 'logged in.', '111', '44');
INSERT INTO `activities` VALUES ('2851', '2018-04-17 01:58:16', 'logged out.', '111', '44');
INSERT INTO `activities` VALUES ('2852', '2018-04-17 02:05:32', 'requests to join Programming II class.', '111', '42');
INSERT INTO `activities` VALUES ('2853', '2018-04-17 02:08:56', 'requests to join IT Fundamentals class.', '111', '42');
INSERT INTO `activities` VALUES ('2854', '2018-04-17 02:40:46', 'was accepted on joining Programming I class.', '111', '42');
INSERT INTO `activities` VALUES ('2855', '2018-04-17 02:40:46', 'was accepted on joining Programming II class.', '111', '42');
INSERT INTO `activities` VALUES ('2856', '2018-04-17 02:40:47', 'was accepted on joining IT Fundamentals class.', '111', '42');
INSERT INTO `activities` VALUES ('2857', '2018-04-17 02:56:15', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2858', '2018-04-17 03:04:21', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2859', '2018-04-17 11:44:34', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2860', '2018-04-17 11:45:06', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2861', '2018-04-17 11:45:38', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2862', '2018-04-17 11:48:13', 'changes profile picture.', '111', '41');
INSERT INTO `activities` VALUES ('2863', '2018-04-17 11:48:28', 'changes profile picture.', '111', '41');
INSERT INTO `activities` VALUES ('2864', '2018-04-17 12:25:08', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2865', '2018-04-17 13:09:38', 'logged in.', '111', '44');
INSERT INTO `activities` VALUES ('2866', '2018-04-17 13:10:39', 'logged out.', '111', '44');
INSERT INTO `activities` VALUES ('2867', '2018-04-17 13:11:04', 'logged in.', '111', '45');
INSERT INTO `activities` VALUES ('2868', '2018-04-17 13:11:27', 'logged out.', '111', '45');
INSERT INTO `activities` VALUES ('2869', '2018-04-17 13:11:33', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2870', '2018-04-17 13:14:20', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2871', '2018-04-17 13:17:22', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2872', '2018-04-17 13:25:04', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2873', '2018-04-17 13:32:04', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2874', '2018-04-17 13:48:29', 'changes profile picture.', '111', '41');
INSERT INTO `activities` VALUES ('2875', '2018-04-17 14:10:04', 'updated personal information.', '111', '41');
INSERT INTO `activities` VALUES ('2876', '2018-04-17 14:15:25', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2877', '2018-04-17 14:45:15', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2878', '2018-04-18 16:12:58', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2879', '2018-04-18 17:12:56', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2880', '2018-04-18 17:15:15', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2881', '2018-04-18 17:15:47', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2882', '2018-04-18 18:39:05', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2883', '2018-04-18 20:07:21', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2884', '2018-04-18 20:16:25', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2885', '2018-04-18 20:21:45', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2886', '2018-04-18 20:22:46', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2887', '2018-04-18 20:32:01', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2888', '2018-04-18 20:32:42', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2889', '2018-04-18 20:53:09', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2890', '2018-04-18 20:55:54', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2891', '2018-04-18 21:47:15', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2892', '2018-04-18 21:51:46', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2893', '2018-04-18 21:52:07', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2894', '2018-04-18 21:54:54', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2895', '2018-04-18 21:55:38', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2896', '2018-04-18 22:12:04', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2897', '2018-04-18 22:16:41', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2898', '2018-04-18 23:15:46', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2899', '2018-04-18 23:16:15', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2900', '2018-04-18 23:34:38', 'logged in.', '111', '44');
INSERT INTO `activities` VALUES ('2901', '2018-04-18 23:34:50', 'logged out.', '111', '44');
INSERT INTO `activities` VALUES ('2902', '2018-04-18 23:35:23', 'logged in.', '111', '45');
INSERT INTO `activities` VALUES ('2903', '2018-04-18 23:35:26', 'logged out.', '111', '45');
INSERT INTO `activities` VALUES ('2904', '2018-04-18 23:35:35', 'logged in.', '111', '42');
INSERT INTO `activities` VALUES ('2905', '2018-04-18 23:35:38', 'logged out.', '111', '42');
INSERT INTO `activities` VALUES ('2906', '2018-04-18 23:53:19', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2907', '2018-04-18 23:53:32', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2908', '2018-04-18 23:54:23', 'logged in.', '111', '45');
INSERT INTO `activities` VALUES ('2909', '2018-04-18 23:54:29', 'logged out.', '111', '45');
INSERT INTO `activities` VALUES ('2910', '2018-04-19 00:04:21', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2911', '2018-04-19 00:23:17', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2912', '2018-04-19 00:31:01', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2913', '2018-04-19 00:42:05', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2914', '2018-04-19 00:42:40', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2915', '2018-04-19 00:42:58', 'logged in.', '111', '44');
INSERT INTO `activities` VALUES ('2916', '2018-04-19 00:43:20', 'logged out.', '111', '44');
INSERT INTO `activities` VALUES ('2917', '2018-04-19 00:43:28', 'logged in.', '111', '42');
INSERT INTO `activities` VALUES ('2918', '2018-04-19 00:52:52', 'logged out.', '111', '42');
INSERT INTO `activities` VALUES ('2919', '2018-04-19 01:17:57', 'logged in.', '111', '45');
INSERT INTO `activities` VALUES ('2920', '2018-04-19 01:20:53', 'uploaded new photo as profile picture.', '111', '45');
INSERT INTO `activities` VALUES ('2921', '2018-04-19 01:20:54', 'updated personal information.', '111', '45');
INSERT INTO `activities` VALUES ('2922', '2018-04-19 01:21:20', 'logged out.', '111', '45');
INSERT INTO `activities` VALUES ('2923', '2018-04-19 01:24:02', 'logged in.', '111', '45');
INSERT INTO `activities` VALUES ('2924', '2018-04-19 01:25:17', 'requests to join Plane and Spherical Trigonometry class.', '111', '45');
INSERT INTO `activities` VALUES ('2925', '2018-04-19 01:25:38', 'logged out.', '111', '45');
INSERT INTO `activities` VALUES ('2926', '2018-04-19 01:26:02', 'was accepted on joining Plane and Spherical Trigonometry class.', '111', '45');
INSERT INTO `activities` VALUES ('2927', '2018-04-19 01:30:28', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2928', '2018-04-19 01:35:51', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2929', '2018-04-19 01:47:03', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2930', '2018-04-19 01:53:14', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2931', '2018-04-19 01:53:33', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2932', '2018-04-19 01:53:57', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2933', '2018-04-19 06:26:04', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('2934', '2018-04-19 06:26:19', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('2935', '2018-04-19 06:31:02', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('2936', '2018-04-19 06:33:34', 'uploaded new photo as profile picture.', '11', '58');
INSERT INTO `activities` VALUES ('2937', '2018-04-19 06:33:34', 'updated personal information.', '11', '58');
INSERT INTO `activities` VALUES ('2938', '2018-04-19 06:34:06', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('2939', '2018-04-19 06:34:30', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2940', '2018-04-19 06:35:10', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2941', '2018-04-19 06:42:03', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2942', '2018-04-19 06:42:20', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('2943', '2018-04-19 06:42:34', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('2944', '2018-04-19 06:42:40', 'logged in.', '11', '57');
INSERT INTO `activities` VALUES ('2945', '2018-04-19 06:42:59', 'accepted a student to join Physical Education class.', '11', '41');
INSERT INTO `activities` VALUES ('2946', '2018-04-19 06:42:59', 'was accepted on joining Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('2947', '2018-04-19 06:44:24', 'logged in.', '111', '45');
INSERT INTO `activities` VALUES ('2948', '2018-04-19 06:45:08', 'requests to join Physical Education class.', '111', '45');
INSERT INTO `activities` VALUES ('2949', '2018-04-19 06:45:12', 'logged out.', '111', '45');
INSERT INTO `activities` VALUES ('2950', '2018-04-19 06:45:46', 'logged in.', '111', '45');
INSERT INTO `activities` VALUES ('2951', '2018-04-19 06:45:56', 'logged out.', '111', '45');
INSERT INTO `activities` VALUES ('2952', '2018-04-19 06:46:02', 'logged in.', '11', '57');
INSERT INTO `activities` VALUES ('2953', '2018-04-19 06:46:06', 'accepted a student to join Physical Education class.', '11', '57');
INSERT INTO `activities` VALUES ('2954', '2018-04-19 06:46:06', 'was accepted on joining Physical Education class.', '111', '45');
INSERT INTO `activities` VALUES ('2955', '2018-04-19 06:50:20', 'logged in.', '111', '42');
INSERT INTO `activities` VALUES ('2956', '2018-04-19 06:50:32', 'requests to join Physical Education class.', '111', '42');
INSERT INTO `activities` VALUES ('2957', '2018-04-19 06:50:47', 'logged out.', '111', '42');
INSERT INTO `activities` VALUES ('2958', '2018-04-19 06:51:22', 'logged in.', '11', '57');
INSERT INTO `activities` VALUES ('2959', '2018-04-19 06:51:28', 'accepted a student to join Physical Education class.', '11', '57');
INSERT INTO `activities` VALUES ('2960', '2018-04-19 06:51:28', 'was accepted on joining Physical Education class.', '111', '42');
INSERT INTO `activities` VALUES ('2961', '2018-04-19 06:52:53', 'logged in.', '11', '57');
INSERT INTO `activities` VALUES ('2962', '2018-04-19 06:53:25', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('2973', '2018-04-19 07:44:53', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('2974', '2018-04-19 07:45:00', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('2975', '2018-04-19 07:45:38', 'created a new class of Solid Mensuration.', '11', '56');
INSERT INTO `activities` VALUES ('2976', '2018-04-19 07:45:38', 'added Adrian Paul Cuajao Relayosa to the class of Solid Mensuration.', '11', '56');
INSERT INTO `activities` VALUES ('2977', '2018-04-19 07:45:38', 'added Eugine Medel Lianto of the to the class of Solid Mensuration.', '11', '56');
INSERT INTO `activities` VALUES ('2978', '2018-04-19 07:45:38', 'added Gerard Jan Celestial Estrada to the class of Solid Mensuration.', '11', '56');
INSERT INTO `activities` VALUES ('2979', '2018-04-19 07:45:38', 'added Jhun Kinley Canales Villapaz to the Solid Mensuration.', '11', '56');
INSERT INTO `activities` VALUES ('2980', '2018-04-19 11:15:35', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('2981', '2018-04-19 11:20:20', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('2982', '2018-04-19 11:21:30', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('2983', '2018-04-19 14:29:23', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('2984', '2018-04-19 14:29:29', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('2985', '2018-04-19 16:32:14', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('2986', '2018-04-19 16:32:26', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('2987', '2018-04-19 20:28:51', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2988', '2018-04-19 20:30:46', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('2989', '2018-04-19 20:31:20', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('2990', '2018-04-19 20:40:20', 'logged in.', '111', '47');
INSERT INTO `activities` VALUES ('2991', '2018-04-19 20:41:35', 'uploaded new photo as profile picture.', '111', '47');
INSERT INTO `activities` VALUES ('2992', '2018-04-19 20:41:35', 'updated personal information.', '111', '47');
INSERT INTO `activities` VALUES ('2993', '2018-04-19 20:48:51', 'requests to join Fluids class.', '111', '41');
INSERT INTO `activities` VALUES ('2994', '2018-04-19 20:52:45', 'logged out.', '111', '47');
INSERT INTO `activities` VALUES ('2995', '2018-04-19 20:57:44', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('2996', '2018-04-19 20:57:48', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('2997', '2018-04-19 21:00:04', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('2998', '2018-04-19 21:00:10', 'logged in.', '11', '57');
INSERT INTO `activities` VALUES ('2999', '2018-04-19 21:04:57', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('3000', '2018-04-19 21:29:50', 'requests to join Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('3001', '2018-04-19 21:30:25', 'accepted a student to join Programming I class.', '11', '58');
INSERT INTO `activities` VALUES ('3002', '2018-04-19 21:30:25', 'was accepted on joining Programming I class.', '111', '41');
INSERT INTO `activities` VALUES ('3003', '2018-04-19 21:36:20', 'accepted a student to join  class.', '11', '57');
INSERT INTO `activities` VALUES ('3004', '2018-04-19 22:35:30', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('3005', '2018-04-19 22:37:06', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('3006', '2018-04-19 22:45:31', 'accepted a student to join  class.', '11', '57');
INSERT INTO `activities` VALUES ('3007', '2018-04-19 23:08:37', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('3008', '2018-04-19 23:11:33', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('3009', '2018-04-19 23:11:43', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('3010', '2018-04-19 23:15:58', 'requests to join Programming II class.', '111', '41');
INSERT INTO `activities` VALUES ('3011', '2018-04-20 00:26:15', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('3012', '2018-04-20 00:27:30', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('3013', '2018-04-20 00:27:48', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('3014', '2018-04-20 00:34:48', 'accepted a student to join  class.', '11', '57');
INSERT INTO `activities` VALUES ('3015', '2018-04-20 01:19:02', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('3016', '2018-04-20 01:19:07', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('3017', '2018-04-20 01:46:58', 'requests to join Physical Education class.', '111', '41');
INSERT INTO `activities` VALUES ('3018', '2018-04-20 02:09:29', 'accepted a student to join  class.', '11', '58');
INSERT INTO `activities` VALUES ('3019', '2018-04-20 02:12:28', 'requests to join IT Fundamentals class.', '111', '41');
INSERT INTO `activities` VALUES ('3020', '2018-04-20 03:04:36', 'accepted a student to join  class.', '11', '58');
INSERT INTO `activities` VALUES ('3021', '2018-04-20 03:40:53', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('3022', '2018-04-20 03:41:06', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('3023', '2018-04-20 03:41:12', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('3024', '2018-04-20 10:37:08', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('3025', '2018-04-20 14:02:38', 'accepted a student to join  class.', '11', '58');
INSERT INTO `activities` VALUES ('3026', '2018-04-20 14:02:51', 'accepted a student to join  class.', '11', '58');
INSERT INTO `activities` VALUES ('3027', '2018-04-20 17:13:53', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('3028', '2018-04-20 17:14:00', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('3029', '2018-04-20 17:16:45', 'accepted a student to join  class.', '11', '56');
INSERT INTO `activities` VALUES ('3030', '2018-04-20 17:17:45', 'accepted a student to join  class.', '11', '56');
INSERT INTO `activities` VALUES ('3031', '2018-04-20 17:18:18', 'accepted a student to join  class.', '11', '56');
INSERT INTO `activities` VALUES ('3032', '2018-04-20 17:19:01', 'accepted a student to join  class.', '11', '56');
INSERT INTO `activities` VALUES ('3033', '2018-04-20 17:20:09', 'accepted a student to join  class.', '11', '56');
INSERT INTO `activities` VALUES ('3034', '2018-04-20 17:21:09', 'accepted a student to join  class.', '11', '56');
INSERT INTO `activities` VALUES ('3035', '2018-04-20 17:21:57', 'accepted a student to join  class.', '11', '56');
INSERT INTO `activities` VALUES ('3036', '2018-04-20 17:22:44', 'accepted a student to join  class.', '11', '56');
INSERT INTO `activities` VALUES ('3037', '2018-04-20 17:23:27', 'accepted a student to join  class.', '11', '56');
INSERT INTO `activities` VALUES ('3038', '2018-04-20 17:24:19', 'accepted a student to join  class.', '11', '56');
INSERT INTO `activities` VALUES ('3039', '2018-04-20 22:17:15', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('3040', '2018-04-20 22:20:03', 'logged in.', '11', '56');
INSERT INTO `activities` VALUES ('3041', '2018-04-20 22:21:32', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('3042', '2018-04-20 22:21:43', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('3043', '2018-04-20 22:29:39', 'accepted a student to join  class.', '11', '58');
INSERT INTO `activities` VALUES ('3044', '2018-04-20 22:34:27', 'logged in.', '11', '57');
INSERT INTO `activities` VALUES ('3045', '2018-04-21 00:06:53', 'logged in.', '11', '57');
INSERT INTO `activities` VALUES ('3046', '2018-04-21 00:07:42', 'accepted a student to join  class.', '11', '57');
INSERT INTO `activities` VALUES ('3047', '2018-04-21 00:18:37', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('3048', '2018-04-21 00:25:07', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('3049', '2018-04-21 00:25:23', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('3050', '2018-04-21 00:54:39', 'accepted a student to join  class.', '11', '57');
INSERT INTO `activities` VALUES ('3051', '2018-04-21 00:54:54', 'accepted a student to join  class.', '11', '57');
INSERT INTO `activities` VALUES ('3052', '2018-04-21 00:55:12', 'accepted a student to join  class.', '11', '57');
INSERT INTO `activities` VALUES ('3053', '2018-04-21 00:55:24', 'accepted a student to join  class.', '11', '57');
INSERT INTO `activities` VALUES ('3054', '2018-04-21 02:01:30', 'logged out.', '111', '41');
INSERT INTO `activities` VALUES ('3055', '2018-04-21 02:01:43', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('3056', '2018-04-21 02:11:36', 'logged in.', '11', '58');
INSERT INTO `activities` VALUES ('3057', '2018-04-21 02:11:49', 'logged in.', '111', '41');
INSERT INTO `activities` VALUES ('3058', '2018-04-21 02:24:24', 'logged in.', '111', '41');

-- ----------------------------
-- Table structure for `courses`
-- ----------------------------
DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `class_code` varchar(20) NOT NULL,
  `teacher_account_no` int(8) DEFAULT NULL,
  `course_title` varchar(60) DEFAULT NULL,
  `course_code` varchar(10) DEFAULT NULL,
  `course_description` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `datecreated` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`class_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of courses
-- ----------------------------
INSERT INTO `courses` VALUES ('CLS13CTE8', '56', 'Solid Mensuration', 'Math 21', '', 'Active', '2018-04-19');
INSERT INTO `courses` VALUES ('CLS2XT3NV', '57', 'Physical Education', 'PE 3', '', 'Active', '2018-04-13');
INSERT INTO `courses` VALUES ('CLS66EYTJ', '58', 'College Trigonometry', 'Math 12', 'College Trigonometry', 'Active', '2018-04-09');
INSERT INTO `courses` VALUES ('CLS9N2H16', '58', 'Programming I', 'IT 11', '', 'Active', '2018-04-09');
INSERT INTO `courses` VALUES ('CLSA43RUC', '56', 'Advanced Algebra', 'Math 15', '', 'Active', '2018-04-19');
INSERT INTO `courses` VALUES ('CLSC9HLRR', '56', 'Plane and Spherical Trigonometry', 'Math 14', '', 'Active', '2018-04-18');
INSERT INTO `courses` VALUES ('CLSFNQMIB', '58', 'Programming II', 'IT 24', '', 'Active', '2018-04-09');
INSERT INTO `courses` VALUES ('CLSJE1CDX', '58', 'IT Fundamentals', 'IT 11', '', 'Active', '2018-04-14');
INSERT INTO `courses` VALUES ('CLSX4S8DT', '58', 'Physical Education', 'PE II', 'This will be ', 'Active', '2018-04-09');
INSERT INTO `courses` VALUES ('CLSY4OA99', '58', 'Fluids', 'ME45', 'Mabagsak mo ani!', 'Active', '2018-04-09');

-- ----------------------------
-- Table structure for `enrolled_students`
-- ----------------------------
DROP TABLE IF EXISTS `enrolled_students`;
CREATE TABLE `enrolled_students` (
  `enroll_no` int(8) NOT NULL AUTO_INCREMENT,
  `student_account_no` int(8) DEFAULT NULL,
  `class_code` varchar(20) DEFAULT NULL,
  `enroll_date` varchar(50) DEFAULT NULL,
  `request_no` int(11) NOT NULL,
  PRIMARY KEY (`enroll_no`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of enrolled_students
-- ----------------------------
INSERT INTO `enrolled_students` VALUES ('88', '41', 'CLS66EYTJ', '2018-04-16', '2672');
INSERT INTO `enrolled_students` VALUES ('89', '41', 'CLS9AY365', '2018-04-16', '2673');
INSERT INTO `enrolled_students` VALUES ('90', '45', 'CLS66EYTJ', '2018-04-16', '2685');
INSERT INTO `enrolled_students` VALUES ('91', '44', 'CLS9N2H16', '2018-04-16', '0');
INSERT INTO `enrolled_students` VALUES ('92', '42', 'CLS66EYTJ', '2018-04-16', '2726');
INSERT INTO `enrolled_students` VALUES ('93', '0', 'Add +', '2018-04-16', '0');
INSERT INTO `enrolled_students` VALUES ('94', '0', 'Add +', '2018-04-16', '0');
INSERT INTO `enrolled_students` VALUES ('95', '42', 'CLS9N2H16', '2018-04-16', '2727');
INSERT INTO `enrolled_students` VALUES ('96', '42', 'CLSFNQMIB', '2018-04-16', '2728');
INSERT INTO `enrolled_students` VALUES ('97', '42', 'CLSJE1CDX', '2018-04-16', '2729');
INSERT INTO `enrolled_students` VALUES ('98', '41', 'CLSC9HLRR', '2018-04-18', '0');
INSERT INTO `enrolled_students` VALUES ('99', '45', 'CLSC9HLRR', '2018-04-18', '2730');
INSERT INTO `enrolled_students` VALUES ('100', '41', 'CLS2XT3NV', '2018-04-19', '2731');
INSERT INTO `enrolled_students` VALUES ('101', '45', 'CLS2XT3NV', '2018-04-19', '2732');
INSERT INTO `enrolled_students` VALUES ('102', '42', 'CLS2XT3NV', '2018-04-19', '2733');
INSERT INTO `enrolled_students` VALUES ('103', '45', 'CLSSQ8HLY', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('104', '45', 'CLSAK32NS', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('105', '41', 'CLSDF2C27', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('106', '41', 'CLSA43RUC', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('107', '45', 'CLSA43RUC', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('108', '44', 'CLSA43RUC', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('109', '42', 'CLSA43RUC', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('110', '41', 'CLSXMYGKA', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('111', '45', 'CLSXMYGKA', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('112', '44', 'CLSXMYGKA', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('113', '42', 'CLSXMYGKA', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('114', '41', 'CLS13CTE8', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('115', '45', 'CLS13CTE8', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('116', '44', 'CLS13CTE8', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('117', '42', 'CLS13CTE8', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('118', '41', 'CLS9N2H16', '2018-04-19', '2735');
INSERT INTO `enrolled_students` VALUES ('119', '0', 'Add +', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('120', '0', 'Add +', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('121', '0', 'Add +', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('122', '0', 'Add +', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('123', '0', 'Add +', '2018-04-19', '0');
INSERT INTO `enrolled_students` VALUES ('124', '0', 'Add +', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('125', '0', 'Add +', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('126', '0', 'Add +', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('127', '0', 'Add +', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('128', '0', 'Add +', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('129', '0', 'Add +', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('130', '0', 'Add +', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('131', '0', 'Add +', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('132', '0', 'Add +', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('133', '0', 'Add +', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('134', '0', 'Add +', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('135', '0', 'Add +', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('136', '0', 'Add +', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('137', '0', 'Add +', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('138', '0', 'Add +', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('139', '0', 'Save', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('140', '0', 'Save', '2018-04-20', '0');
INSERT INTO `enrolled_students` VALUES ('141', '0', 'Add +', '2018-04-20', '0');

-- ----------------------------
-- Table structure for `exam_details`
-- ----------------------------
DROP TABLE IF EXISTS `exam_details`;
CREATE TABLE `exam_details` (
  `exam_no` int(8) NOT NULL,
  `question_type` varchar(255) DEFAULT NULL,
  `question_id` int(8) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `question_no` int(8) NOT NULL,
  `answer1` text,
  `answer2` text,
  `answer3` text,
  `answer4` text,
  `answer5` text,
  `answer6` text,
  `choice1` text,
  `choice2` text,
  `choice3` text,
  `choice4` text,
  `choice5` text,
  `choice6` text,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=362 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exam_details
-- ----------------------------
INSERT INTO `exam_details` VALUES ('13', 'tof', '226', '<p>aasd</p>', '4', 'True', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('13', 'multiple', '233', '', '9', null, null, null, null, null, null, '', '', '', '', '', null);
INSERT INTO `exam_details` VALUES ('13', 'enumeration', '249', '<p><br /></p>', '10', '', '', '', '', '', null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('13', 'identification', '252', '<p><br /></p>', '13', '', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('13', 'multiple', '257', '<p><br /></p>', '14', null, null, null, null, null, null, 'as', 'as', '', '', '', null);
INSERT INTO `exam_details` VALUES ('13', 'enumeration', '258', '<p><br /></p>', '15', 'das', 'das', '', '', '', null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('14', 'multiple', '260', 'Gwapo ko? <strong>Rhonethni.</strong>', '1', null, null, null, null, null, null, 'Oo', 'Dili', '', '', '', null);
INSERT INTO `exam_details` VALUES ('14', 'multiple', '262', '<p>Makauli\r\n  <g class=\"gr_ gr_41 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace\" id=\"41\" data-gr-id=\"41\">kaha</g>\r\n  <g class=\"gr_ gr_45 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling\" id=\"45\" data-gr-id=\"45\">kog</g>\r\n  <g class=\"gr_ gr_53 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace\" id=\"53\" data-gr-id=\"53\">sayo</g>?</p>', '2', null, null, null, null, null, null, 'Oo', 'Dili', '', '', '', null);
INSERT INTO `exam_details` VALUES ('16', 'multiple', '265', '<p>Kinsay pinaka gwapo sa tamarin?</p>', '1', null, null, 'Eugine', '', null, null, 'Pangag', 'Tanshong', 'Eugine', 'Giovanni', '', null);
INSERT INTO `exam_details` VALUES ('16', 'multiple', '266', '<p>Kinsay pinaka lagom sa Purok 2?</p>', '2', null, null, '', 'Giovanni', null, null, 'Eugine', 'Pangag', 'Tanshong', 'Giovanni', '', null);
INSERT INTO `exam_details` VALUES ('15', 'tof', '282', '<p><br /></p>', '16', 'False', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('15', 'multiple', '284', '<p><br /></p>', '17', null, null, null, null, null, null, '', '', '', '', '', null);
INSERT INTO `exam_details` VALUES ('15', 'identification', '285', '<p><br /></p>', '18', '', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('15', 'multiple', '287', '<p><br /></p>', '20', null, null, null, null, null, null, '', '', '', '', '', null);
INSERT INTO `exam_details` VALUES ('17', 'multiple', '288', '<p>Mahuman\r\n  <g class=\"gr_ gr_11 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace\" id=\"11\" data-gr-id=\"11\">kaha</g> mi\r\n  <g class=\"gr_ gr_12 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace\" id=\"12\" data-gr-id=\"12\">sa</g> among capstone?</p>', '1', null, null, '', null, null, null, 'Oo', 'Dili', 'Basin', '', '', null);
INSERT INTO `exam_details` VALUES ('17', 'multiple', '289', '<p>\r\n  <g class=\"gr_ gr_23 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace\" id=\"23\" data-gr-id=\"23\">Unsa</g>\r\n  <g class=\"gr_ gr_26 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace\" id=\"26\" data-gr-id=\"26\">kaha</g> mi\r\n  <g class=\"gr_ gr_41 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace\" id=\"41\" data-gr-id=\"41\">oras</g>\r\n  <g class=\"gr_ gr_55 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling\" id=\"55\" data-gr-id=\"55\">makauli</g>\r\n  <g class=\"gr_ gr_52 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace\" id=\"52\" data-gr-id=\"52\">karn</g>?</p>', '2', null, null, '', null, null, null, '3', '4', '5', '', '', null);
INSERT INTO `exam_details` VALUES ('15', 'enumeration', '290', '<p>qwertyuio</p>', '21', '', '', '', '', '', null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('18', 'multiple', '291', '<p>This is just a test for two choices.</p>', '1', null, null, null, null, null, null, 'Yes', 'No', '', '', '', null);
INSERT INTO `exam_details` VALUES ('18', 'multiple', '293', '<p>This is just a test for multiple choices.</p>', '2', 'Yes', null, 'Maybe', null, null, null, 'Yes', 'No', 'Maybe', '', '', null);
INSERT INTO `exam_details` VALUES ('18', 'tof', '294', '<p>This is just a test for True or False.</p>', '22', 'True', null, null, null, null, null, 'True', 'False', null, null, null, null);
INSERT INTO `exam_details` VALUES ('18', 'identification', '295', '<p>This is just a test for identification.</p>', '23', 'Test', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('18', 'enumeration', '296', '<p>This is just a test for enumeration.</p>', '24', 'Test1', 'Test2', 'Test3', '', '', null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('15', 'multiple', '297', '<p><br /></p>', '22', null, null, null, null, null, null, '', '', '', '', '', null);
INSERT INTO `exam_details` VALUES ('15', 'identification', '298', '<p><br /></p>', '25', '', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('19', 'multiple', '299', '<p>2 choices.</p>', '1', null, null, null, null, null, null, 'Yes', 'No', '', '', '', null);
INSERT INTO `exam_details` VALUES ('19', 'multiple', '301', '<p>5 choices.</p>', '2', null, null, '3rd choice', '', '5th choice', null, '1st choice', '2nd choice', '3rd choice', '4th choice', '5th choice', null);
INSERT INTO `exam_details` VALUES ('19', 'tof', '302', '<p>True or False.</p>', '26', 'False', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('19', 'identification', '303', '<p>Identification</p>', '27', 'Identification', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('19', 'enumeration', '304', '<p>6 enumerations.</p>', '28', '1st enumeration', '2nd enumeration', '3rd enumeration', '4th enumeration', '5th enumeration', '6th enumeration', null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('20', 'multiple', '305', '<p>2 choices?</p>', '1', 'Yes', null, null, null, null, null, 'Yes', 'No', '', '', '', null);
INSERT INTO `exam_details` VALUES ('20', 'multiple', '306', '<p>3 choices?</p>', '2', 'No', null, null, null, null, null, 'Yes', 'No', '', '', '', null);
INSERT INTO `exam_details` VALUES ('20', 'multiple', '307', '<p>Multiple choices?</p>', '3', 'Yes', null, 'True', '', null, null, 'Yes', 'No', 'True', 'False', '', null);
INSERT INTO `exam_details` VALUES ('20', 'multiple', '308', '<p>Not multiple choices?</p>', '4', null, 'No', '', 'False', null, null, 'Yes', 'No', 'True', 'False', '', null);
INSERT INTO `exam_details` VALUES ('20', 'tof', '309', '<p>Am i handsome?</p>', '29', 'True', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('20', 'tof', '310', '<p>Am I ugly?</p>', '30', 'False', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('20', 'identification', '311', '<p>Who created this test exam?</p>', '31', 'Rhoneth', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('20', 'identification', '312', '<p>What is my course?</p>', '32', 'Information Technology', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('20', 'enumeration', '313', '<p>Enumerate the courses that are being offered by the college of engineering.</p>', '33', 'Information Technology', 'Electrical Engineering', 'Mechanical Engineering', 'Civil Engineering', '', null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('21', 'tof', '314', '<p>My name is Rhoneth John Fabre</p>', '34', 'True', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('21', 'tof', '315', '<p>There are 6 departments that are being offered in the College of Engineering.</p>', '35', 'False', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('21', 'tof', '316', '<p>The Director of ICA is John D. Tajones</p>', '36', 'True', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('21', 'tof', '317', '<p>Charles Bautista is the College Secretary of Engineering.</p>', '37', 'True', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('21', 'tof', '318', '<p>There are 7 laboratories of Engineering.</p>', '38', 'False', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('21', 'tof', '319', '<p>I am handsome.</p>', '39', 'True', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('21', 'tof', '320', '<p>The abbreviation of CMU is Central Mindanao University.&nbsp;</p>', '40', 'True', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('21', 'tof', '321', '<p>Most of the students of CMU is\r\n  <g class=\"gr_ gr_87 gr-alert gr_gramm gr_inline_cards gr_run_anim Grammar multiReplace\" id=\"87\" data-gr-id=\"87\">a filipin</g>o.</p>', '41', 'True', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('21', 'tof', '322', '<p>JAVA is an objective programming language.</p>\r\n<p><br /></p>\r\n<p><br /></p>', '42', 'True', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('21', 'tof', '323', '<p>Dr. Maria Soliven is the third female president of CMU.</p>', '43', 'False', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('22', 'identification', '324', 'The meaning of IT.', '44', 'Information Technology', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('22', 'identification', '325', 'The meaning of ME.', '45', 'Mechanical Engineering', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('22', 'identification', '326', 'The meaning of EE.', '46', 'Electrical Engineering', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('22', 'identification', '327', 'The meaning of CE.', '47', 'Civil Engineering', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('22', 'identification', '328', 'The meaning of AE.', '48', 'Agricultural Engineering', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('22', 'identification', '331', '<p>Who is the dean of College of Engineering?</p>', '49', 'Constancio Verula Jr.', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('22', 'identification', '332', '<p>Who is the secretary of College of Engineering?</p>', '50', 'Charles Bautista', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('22', 'identification', '333', '<p>Who is the Director of ICA?</p>', '51', 'John D. Tajones', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('22', 'identification', '334', '<p>What is the meaning of ICA?</p>', '52', 'Institute of Computer Applications', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('22', 'identification', '335', '<p>How many laboratories are there in the College of Engineering?</p>', '53', '5', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('23', 'enumeration', '336', '<p>What are the departments of College of Engineering?</p>', '54', 'Agricultural Engineering', 'Civil Engineering', 'Electrical Engineering', 'Mechanical Engineering', '', null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('23', 'enumeration', '337', '<p>What are the courses being offered in College of Business and Management?&nbsp;</p>', '55', 'Office Administration', 'Business Administration', 'Accountancy', '', '', null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('23', 'enumeration', '338', '<p>Unsa nga mga&nbsp;baranggay ang imung mga agian kung muadto kag musuan?</p>', '56', 'Anhawon', 'Panadtalan', 'Bayabason', 'Tubigon', '', null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('24', 'identification', '339', 'Kinsa ang pinaka gwapo sa Maramag?', '57', 'TANSHONG', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('24', 'multiple', '340', '<p>Kinsay pinaka gamayg oten sa south?</p>', '58', '', '', 'Pangag', null, null, null, 'Giovanni', 'Tampos', 'Pangag', '', '', null);
INSERT INTO `exam_details` VALUES ('24', 'tof', '341', 'Si pangag ay bayot?<br />', '59', 'True', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('24', 'enumeration', '342', 'Ranking sa mga gwapo', '60', 'Tampus', 'Tampus', 'Tampus', 'Lianto', 'Fabre', 'Lianto', null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('26', 'multiple', '343', '<p>tanshong question 1</p>', '1', 'qwe', 'qwe', null, null, null, null, 'qwe', 'qwe', '', '', '', null);
INSERT INTO `exam_details` VALUES ('26', 'enumeration', '344', '<p>asd</p>', '61', 'asd', 'asd', '', '', '', null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('26', 'enumeration', '345', '<p>asd</p>', '62', 'das', 'asds', 'asdasd', 'asda', 'asd', 'asdasd', null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('26', 'enumeration', '346', '<p>asd</p>', '63', 'asdasd', 'asd', 'asdasd', 'asd', 'asd', 'asd', null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('26', 'enumeration', '347', '<p>asd</p>', '64', 'asd', 'asd', 'sd', 'd', 'd', 'd', null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('27', 'multiple', '348', '<p>asdasd</p>', '1', 'asd', 'asd', '', '', '', null, 'asd', 'asd', 'asd', 'asd', 'asdasd', null);
INSERT INTO `exam_details` VALUES ('27', 'identification', '350', '<p>asdasd</p>', '66', 'asdasd', 'asdasdasd', 'asd', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('27', 'enumeration', '351', '<p>asdasdsad</p>', '67', 'asdasd', 'asdasd', 'asasdasd', 'asd', 'dasd', 'asdas', null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('27', 'multiple', '352', '<p>6868</p>', '68', 'asd', 'asd', null, null, null, null, 'asd', 'asd', '', '', '', null);
INSERT INTO `exam_details` VALUES ('27', 'multiple', '353', '<p><br /></p>', '69', '', '', null, null, null, null, '', '', '', '', '', null);
INSERT INTO `exam_details` VALUES ('27', 'multiple', '354', '<p><br /></p>', '70', '', '', null, null, null, null, '', '', '', '', '', null);
INSERT INTO `exam_details` VALUES ('27', 'multiple', '355', '<p><br /></p>', '71', '', '', null, null, null, null, '', '', '', '', '', null);
INSERT INTO `exam_details` VALUES ('27', 'multiple', '356', '<p>asdasdas</p>', '72', '', '', null, null, null, null, 'asd', 'asd', '', '', '', null);
INSERT INTO `exam_details` VALUES ('27', 'multiple', '357', '<p>74</p>', '73', 'asd', 'asd', null, null, null, null, 'asd', 'asd', '', '', '', null);
INSERT INTO `exam_details` VALUES ('27', 'multiple', '358', '<p>74</p>', '74', '', '', null, null, null, null, 'asd', 'asd', '', '', '', null);
INSERT INTO `exam_details` VALUES ('27', 'tof', '359', '<h4>TANSH</h4>', '75', 'True', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('27', 'tof', '360', '<p>ASDASDTANSH</p>', '76', 'False', null, null, null, null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `exam_results`
-- ----------------------------
DROP TABLE IF EXISTS `exam_results`;
CREATE TABLE `exam_results` (
  `exam_result_no` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) NOT NULL,
  `student_account_no` int(11) NOT NULL,
  `exam_no` int(11) NOT NULL,
  PRIMARY KEY (`exam_result_no`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exam_results
-- ----------------------------
INSERT INTO `exam_results` VALUES ('1', '14', '41', '20');
INSERT INTO `exam_results` VALUES ('8', '1', '41', '20');
INSERT INTO `exam_results` VALUES ('9', '10', '41', '22');
INSERT INTO `exam_results` VALUES ('10', '1', '41', '24');

-- ----------------------------
-- Table structure for `exams`
-- ----------------------------
DROP TABLE IF EXISTS `exams`;
CREATE TABLE `exams` (
  `exam_no` int(8) NOT NULL AUTO_INCREMENT,
  `exam_name` varchar(255) DEFAULT NULL,
  `class_code` varchar(255) DEFAULT NULL,
  `exam_description` text,
  `time_limit` double(11,0) DEFAULT NULL,
  `exam_date` varchar(255) DEFAULT NULL,
  `exam_password` varchar(50) DEFAULT NULL,
  `availability` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  PRIMARY KEY (`exam_no`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exams
-- ----------------------------
INSERT INTO `exams` VALUES ('1', 'Practical Exam', 'CLSD58P1I', 'tanshong', null, null, null, null, null, null);
INSERT INTO `exams` VALUES ('2', 'Midterm Exam', 'CLS9N2H16', 'Thiss asd', null, null, null, null, null, null);
INSERT INTO `exams` VALUES ('3', 'sfs', 'CLS9N2H16', '', null, null, null, null, null, null);
INSERT INTO `exams` VALUES ('4', 'Physical Exam', 'CLS2XT3NV', 'Answer it', null, null, null, null, null, null);
INSERT INTO `exams` VALUES ('5', 'regal', 'CLS2XT3NV', 'asd', null, null, null, 'Not Available', null, null);
INSERT INTO `exams` VALUES ('6', 'tanshong', 'CLS2XT3NV', 'd', null, null, null, 'Available', null, null);
INSERT INTO `exams` VALUES ('7', 'tanshonnnnngg', 'CLS2XT3NV', 'dd', null, null, null, 'Available', null, null);
INSERT INTO `exams` VALUES ('8', 'Midterm Exam', 'CLS2XT3NV', 'tans', null, null, null, 'Available', null, null);
INSERT INTO `exams` VALUES ('9', 'FINAL EXAM', 'CLS2XT3NV', '', null, null, null, 'Available', null, null);
INSERT INTO `exams` VALUES ('10', 'asd', 'CLS2XT3NV', 'dsa', null, null, null, 'Available', null, null);
INSERT INTO `exams` VALUES ('11', 'my exam', 'CLS2XT3NV', '', null, null, null, 'Available', null, null);
INSERT INTO `exams` VALUES ('12', 'FINAL EXAM', 'CLS2XT3NV', '', null, null, null, 'Available', null, null);
INSERT INTO `exams` VALUES ('13', 'MIDTERM EXAM', 'CLS2XT3NV', '', '0', '0000-00-00 00:00:00', 'tanshong', 'Available', '0000-00-00', '0000-00-00');
INSERT INTO `exams` VALUES ('14', 'FINAL EXAM', 'CLS13CTE8', '', '0', '0000-00-00 00:00:00', 'thisisatest', 'Available', '0000-00-00', '0000-00-00');
INSERT INTO `exams` VALUES ('15', 'PRACTICAL EXAM', 'CLS2XT3NV', '', '0', '0000-00-00 00:00:00', 'tan', 'Available', '0000-00-00', '0000-00-00');
INSERT INTO `exams` VALUES ('16', 'Last Exam', 'CLS9N2H16', 'Gwapo ang nag buhat', '0', '0000-00-00 00:00:00', 'eugine', 'yes', '0000-00-00', '0000-00-00');
INSERT INTO `exams` VALUES ('17', 'Midterm Exam', 'CLS9N2H16', '', '0', '0000-00-00 00:00:00', 'thisisthepassword', 'yes', '0000-00-00', '0000-00-00');
INSERT INTO `exams` VALUES ('18', 'Test Exam', 'CLS9N2H16', '', '0', '0000-00-00 00:00:00', 'testexam', 'yes', '0000-00-00', '0000-00-00');
INSERT INTO `exams` VALUES ('19', 'Removal Exam', 'CLS9N2H16', '', '0', '0000-00-00 00:00:00', 'thisisthepassword', 'yes', '0000-00-00', '0000-00-00');
INSERT INTO `exams` VALUES ('20', 'Testing', 'CLS9N2H16', '', '0', '0000-00-00 00:00:00', 'testexam', 'yes', '0000-00-00', '0000-00-00');
INSERT INTO `exams` VALUES ('21', 'Midterm Examination', 'CLSC9HLRR', '', '0', '0000-00-00 00:00:00', 'midtermexamination', 'yes', '0000-00-00', '0000-00-00');
INSERT INTO `exams` VALUES ('22', 'Finalterm Examination', 'CLSC9HLRR', '', '0', '0000-00-00 00:00:00', 'engineering', 'yes', '0000-00-00', '0000-00-00');
INSERT INTO `exams` VALUES ('23', 'Enumeration Examination', 'CLSC9HLRR', '', '0', '0000-00-00 00:00:00', 'enumeration', 'yes', '0000-00-00', '0000-00-00');
INSERT INTO `exams` VALUES ('24', 'Gwapo Exam', 'CLS66EYTJ', '', '30', '0000-00-00 00:00:00', 'gf', 'Available', '0000-00-00', '0000-00-00');
INSERT INTO `exams` VALUES ('25', 'dasdsadsaf', 'CLSC9HLRR', '', null, null, null, 'no', null, null);
INSERT INTO `exams` VALUES ('26', 'tanshong', 'CLS2XT3NV', '', null, null, null, 'no', null, null);
INSERT INTO `exams` VALUES ('27', 'tanshong', 'CLS2XT3NV', '', '30', '27/Apr/2018 03:01:00', 'as', 'Not Available', '0000-00-00', '0000-00-00');

-- ----------------------------
-- Table structure for `file_details`
-- ----------------------------
DROP TABLE IF EXISTS `file_details`;
CREATE TABLE `file_details` (
  `file_idno` int(8) NOT NULL AUTO_INCREMENT,
  `post_no` varchar(20) DEFAULT NULL,
  `file_name` text,
  `file_link_or_path` text,
  PRIMARY KEY (`file_idno`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of file_details
-- ----------------------------
INSERT INTO `file_details` VALUES ('1', '1', 'FEB - Copy.xlsx', 'classfiles/clsDBMS11/FEB - Copy.xlsx');
INSERT INTO `file_details` VALUES ('2', '1', 'FEB.xlsx', 'classfiles/clsDBMS11/FEB.xlsx');
INSERT INTO `file_details` VALUES ('3', '2', 'accounts_admin.sql', 'classfiles/clsDBMS11/accounts_admin.sql');
INSERT INTO `file_details` VALUES ('4', '2', 'answers.sql', 'classfiles/clsDBMS11/answers.sql');
INSERT INTO `file_details` VALUES ('5', '3', 'bibigirl sched.jpg', 'classfiles/clsDBMS11/bibigirl sched.jpg');
INSERT INTO `file_details` VALUES ('6', '3', 'dynamically generate form-field-using-jquery.zip', 'classfiles/clsDBMS11/dynamically generate form-field-using-jquery.zip');
INSERT INTO `file_details` VALUES ('7', '4', 'inputfieldmulti.txt', 'classfiles/CLS3IPBDV/inputfieldmulti.txt');
INSERT INTO `file_details` VALUES ('8', '4', 'javascript - Adding input elements dynamically to form - Stack Overflow.pdf', 'classfiles/CLS3IPBDV/javascript - Adding input elements dynamically to form - Stack Overflow.pdf');
INSERT INTO `file_details` VALUES ('9', '4', 'javascript - Create _div_ and append _div_ dynamically - Stack Overflow.pdf', 'classfiles/CLS3IPBDV/javascript - Create _div_ and append _div_ dynamically - Stack Overflow.pdf');
INSERT INTO `file_details` VALUES ('10', '4', 'js to php.pdf', 'classfiles/CLS3IPBDV/js to php.pdf');
INSERT INTO `file_details` VALUES ('11', '4', 'larav.txt', 'classfiles/CLS3IPBDV/larav.txt');
INSERT INTO `file_details` VALUES ('12', '4', 'maxsize.pdf', 'classfiles/CLS3IPBDV/maxsize.pdf');
INSERT INTO `file_details` VALUES ('13', '4', 'maxsize2.pdf', 'classfiles/CLS3IPBDV/maxsize2.pdf');
INSERT INTO `file_details` VALUES ('14', '4', 'modal image.txt', 'classfiles/CLS3IPBDV/modal image.txt');
INSERT INTO `file_details` VALUES ('15', '6', 'http://localhost/cmue-class/main/mycourse.php', 'http://localhost/cmue-class/main/mycourse.php');
INSERT INTO `file_details` VALUES ('19', '10', 'FEB.xlsx', 'classfiles/CLSQW5/FEB.xlsx');
INSERT INTO `file_details` VALUES ('20', '11', 'http://localhost/cmue-class/main/mycourse.php', 'http://localhost/cmue-class/main/mycourse.php');
INSERT INTO `file_details` VALUES ('21', '12', 'How to Make a Simple JavaScript Quiz â€” SitePoint.pdf', 'classfiles/clsDBMS11/How to Make a Simple JavaScript Quiz â€” SitePoint.pdf');
INSERT INTO `file_details` VALUES ('22', '12', 'inputfieldmulti.txt', 'classfiles/clsDBMS11/inputfieldmulti.txt');
INSERT INTO `file_details` VALUES ('23', '13', 'http://localhost/cmue-class/main/login.php', 'http://localhost/cmue-class/main/login.php');
INSERT INTO `file_details` VALUES ('24', '14', '123.jpg', 'classfiles/CLS9XPEF5/123.jpg');
INSERT INTO `file_details` VALUES ('25', '14', '11703045_860956957319630_5208143255941529222_n.jpg', 'classfiles/CLS9XPEF5/11703045_860956957319630_5208143255941529222_n.jpg');
INSERT INTO `file_details` VALUES ('31', '23', 'asd', 'asd');
INSERT INTO `file_details` VALUES ('32', '24', 'tanshong', 'tanshong');
INSERT INTO `file_details` VALUES ('33', '26', 'tan', 'tan');
INSERT INTO `file_details` VALUES ('35', '28', 'CLSVYUH1W CLSVYUH1W CLSVYUH1W\r\nCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1W CLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1W CLSVYUH1W CLSVYUH1W CLSVYUH1W', 'CLSVYUH1W CLSVYUH1W CLSVYUH1W\r\nCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1W CLSVYUH1WCLSVYUH1WCLSVYUH1WCLSVYUH1W CLSVYUH1W CLSVYUH1W CLSVYUH1W');
INSERT INTO `file_details` VALUES ('36', '29', 'SpeechDemo final.docx', 'classfiles/CLS1BF8SR/SpeechDemo final.docx');
INSERT INTO `file_details` VALUES ('37', '29', 'Speechlol.rtf', 'classfiles/CLS1BF8SR/Speechlol.rtf');
INSERT INTO `file_details` VALUES ('38', '30', 'https://www.youtube.com/watch?v=s7_L1HGXaSA', 'https://www.youtube.com/watch?v=s7_L1HGXaSA');
INSERT INTO `file_details` VALUES ('39', '31', 'insidious-the-last-key-2018-webrip-1080p-ytsam-arabic-123438.zip', 'classfiles/CLSKJV63F/insidious-the-last-key-2018-webrip-1080p-ytsam-arabic-123438.zip');
INSERT INTO `file_details` VALUES ('40', '31', 'larav.txt', 'classfiles/CLSKJV63F/larav.txt');
INSERT INTO `file_details` VALUES ('41', '32', 'http://localhost/cmue-class/main/mycourse.php?classcode=CLS9XPEF5', 'http://localhost/cmue-class/main/mycourse.php?classcode=CLS9XPEF5');
INSERT INTO `file_details` VALUES ('42', '33', 'http://localhost:8080/cmue-class/main/mycourse.php?classcode=CLS9XPEF5', 'http://localhost:8080/cmue-class/main/mycourse.php?classcode=CLS9XPEF5');
INSERT INTO `file_details` VALUES ('43', '34', '20160612_125307.jpg', 'classfiles/CLSX4S8DT/20160612_125307.jpg');
INSERT INTO `file_details` VALUES ('44', '34', '20160612_125318.jpg', 'classfiles/CLSX4S8DT/20160612_125318.jpg');
INSERT INTO `file_details` VALUES ('45', '34', '20160612_125758.jpg', 'classfiles/CLSX4S8DT/20160612_125758.jpg');
INSERT INTO `file_details` VALUES ('46', '34', '20160612_143207.jpg', 'classfiles/CLSX4S8DT/20160612_143207.jpg');
INSERT INTO `file_details` VALUES ('47', '35', 'tan', 'tan');
INSERT INTO `file_details` VALUES ('48', '36', 'MIDTERM EXAM', 'examination.php?refid=13&cc=CLS2XT3NV');
INSERT INTO `file_details` VALUES ('49', '37', 'FINAL EXAM', 'examination.php?refid=&cc=CLS13CTE8');
INSERT INTO `file_details` VALUES ('50', '38', '', '');
INSERT INTO `file_details` VALUES ('51', '39', 'PRACTICAL EXAM', 'examination.php?refid=&cc=CLS2XT3NV');
INSERT INTO `file_details` VALUES ('52', '40', 'ANNOUNCEMENT', 'ANNOUNCEMENT');
INSERT INTO `file_details` VALUES ('53', '41', 'Last Exam', 'examination.php?refid=16&cc=CLS9N2H16');
INSERT INTO `file_details` VALUES ('54', '42', '', '');
INSERT INTO `file_details` VALUES ('55', '43', 'PRACTICAL EXAM', 'examination.php?refid=15&cc=CLS2XT3NV');
INSERT INTO `file_details` VALUES ('56', '44', 'Midterm Exam', 'examination.php?refid=17&cc=CLS9N2H16');
INSERT INTO `file_details` VALUES ('57', '45', 'Test Exam', 'examination.php?refid=18&cc=CLS9N2H16');
INSERT INTO `file_details` VALUES ('58', '46', 'Removal Exam', 'examination.php?refid=19&cc=CLS9N2H16');
INSERT INTO `file_details` VALUES ('59', '47', 'Testing', 'examination.php?refid=20&cc=CLS9N2H16');
INSERT INTO `file_details` VALUES ('60', '48', 'Midterm Examination', 'examination.php?refid=21&cc=CLSC9HLRR');
INSERT INTO `file_details` VALUES ('61', '49', 'Finalterm Examination', 'examination.php?refid=22&cc=CLSC9HLRR');
INSERT INTO `file_details` VALUES ('62', '50', 'Enumeration Examination', 'examination.php?refid=23&cc=CLSC9HLRR');
INSERT INTO `file_details` VALUES ('63', '51', 'Gwapo Exam', 'examination.php?refid=24&cc=CLS66EYTJ');
INSERT INTO `file_details` VALUES ('64', '52', 'tanshong', '27');
INSERT INTO `file_details` VALUES ('65', '53', 'tanshong', '27');
INSERT INTO `file_details` VALUES ('66', '54', 'tanshong', '27');
INSERT INTO `file_details` VALUES ('67', '55', 'tanshong', '27');
INSERT INTO `file_details` VALUES ('68', '56', 'tanshong', '27');
INSERT INTO `file_details` VALUES ('69', '57', 'Gwapo Exam', '24');
INSERT INTO `file_details` VALUES ('70', '58', 'tanshong', '27');
INSERT INTO `file_details` VALUES ('71', '59', 'https://www.youtube.com/watch?v=qD_Smv85vr4', 'https://www.youtube.com/watch?v=qD_Smv85vr4');
INSERT INTO `file_details` VALUES ('72', '60', 'tanshong', '27');
INSERT INTO `file_details` VALUES ('73', '61', 'tanshong', '27');
INSERT INTO `file_details` VALUES ('74', '62', 'https://www.youtube.com/watch?v=qD_Smv85vr4', 'https://www.youtube.com/watch?v=qD_Smv85vr4');
INSERT INTO `file_details` VALUES ('75', '63', 'tanshong', '27');

-- ----------------------------
-- Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `post_no` int(8) NOT NULL AUTO_INCREMENT,
  `class_code` varchar(20) DEFAULT NULL,
  `posted_date` datetime DEFAULT NULL,
  `post_type` varchar(20) DEFAULT NULL,
  `post_title` varchar(255) DEFAULT NULL,
  `post_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`post_no`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', 'clsDBMS11', '2018-03-18 07:10:21', 'files', 'STUDYHI NINYO NI', 'SDASDASDdas asda sda da sdas ');
INSERT INTO `posts` VALUES ('2', 'clsDBMS11', '2018-03-18 07:12:02', 'files', 'HI GUYS', 'das dasd asd asd asd');
INSERT INTO `posts` VALUES ('3', 'clsDBMS11', '2018-03-18 08:05:36', 'files', 'POST NAKO KARUN ', 'BLA');
INSERT INTO `posts` VALUES ('4', 'CLS3IPBDV', '2018-03-18 08:07:41', 'files', 'trial', 'wahhhhh');
INSERT INTO `posts` VALUES ('6', 'CLS3IPBDV', '2018-03-18 08:37:03', 'link', 'Linksssss', 'asdasd');
INSERT INTO `posts` VALUES ('11', 'CLSQW5', '2018-03-18 12:29:36', 'link', 'ss', 's');
INSERT INTO `posts` VALUES ('12', 'clsDBMS11', '2018-03-19 02:35:08', 'files', 'assadasdsadsad', 'asdasdas');
INSERT INTO `posts` VALUES ('13', 'clsDBMS11', '2018-03-19 02:41:44', 'link', 'Login MO DIRI', '');
INSERT INTO `posts` VALUES ('28', 'CLSVYUH1W', '2018-03-19 08:34:51', 'announcement', 'Announcement', 'CLSVYUH1W');
INSERT INTO `posts` VALUES ('29', 'CLS1BF8SR', '2018-03-21 03:13:39', 'files', 'Study the files', '');
INSERT INTO `posts` VALUES ('30', 'CLSC4YTCP', '2018-03-26 16:06:05', 'link', 'f', 'f');
INSERT INTO `posts` VALUES ('31', 'CLSKJV63F', '2018-04-05 04:00:44', 'files', 'POST NAKO KARUN ', '');
INSERT INTO `posts` VALUES ('32', 'CLS9XPEF5', '2018-04-05 04:03:09', 'link', 'ik', '');
INSERT INTO `posts` VALUES ('33', 'CLS9XPEF5', '2018-04-07 17:37:14', 'link', ' n', '');
INSERT INTO `posts` VALUES ('34', 'CLSX4S8DT', '2018-04-12 18:29:32', 'files', 'fd', '');
INSERT INTO `posts` VALUES ('35', 'CLS2XT3NV', '2018-04-19 14:22:13', 'announcement', 'Announcement', 'tan');
INSERT INTO `posts` VALUES ('36', 'CLS2XT3NV', '2018-04-19 14:52:16', 'exam', 'MIDTERM EXAM', '');
INSERT INTO `posts` VALUES ('37', 'CLS13CTE8', '2018-04-19 15:05:37', 'exam', 'FINAL EXAM', '');
INSERT INTO `posts` VALUES ('38', 'CLS9N2H16', '2018-04-19 15:16:32', 'link', 'Exam 101', 'Exami ni');
INSERT INTO `posts` VALUES ('39', 'CLS2XT3NV', '2018-04-19 15:20:16', 'exam', 'PRACTICAL EXAM', '');
INSERT INTO `posts` VALUES ('40', 'CLS2XT3NV', '2018-04-19 15:25:21', 'announcement', 'Announcement', 'ANNOUNCEMENT');
INSERT INTO `posts` VALUES ('41', 'CLS9N2H16', '2018-04-19 15:25:58', 'exam', 'Last Exam', 'Gwapo ang nag buhat');
INSERT INTO `posts` VALUES ('42', 'CLS13CTE8', '2018-04-19 15:34:31', 'link', 'fdaf', '');
INSERT INTO `posts` VALUES ('43', 'CLS2XT3NV', '2018-04-19 15:41:04', 'exam', 'PRACTICAL EXAM', '');
INSERT INTO `posts` VALUES ('44', 'CLS9N2H16', '2018-04-19 19:22:50', 'exam', 'Midterm Exam', '');
INSERT INTO `posts` VALUES ('45', 'CLS9N2H16', '2018-04-19 20:11:17', 'exam', 'Test Exam', '');
INSERT INTO `posts` VALUES ('46', 'CLS9N2H16', '2018-04-19 21:07:06', 'exam', 'Removal Exam', '');
INSERT INTO `posts` VALUES ('47', 'CLS9N2H16', '2018-04-20 08:06:39', 'exam', 'Testing', '');
INSERT INTO `posts` VALUES ('48', 'CLSC9HLRR', '2018-04-20 11:24:57', 'exam', 'Midterm Examination', '');
INSERT INTO `posts` VALUES ('49', 'CLSC9HLRR', '2018-04-20 11:58:41', 'exam', 'Finalterm Examination', '');
INSERT INTO `posts` VALUES ('50', 'CLSC9HLRR', '2018-04-20 12:12:19', 'exam', 'Enumeration Examination', '');
INSERT INTO `posts` VALUES ('51', 'CLS66EYTJ', '2018-04-20 16:37:34', 'exam', 'Gwapo Exam', 'Pinaka gwapo sa tamarin ang tag iya');
INSERT INTO `posts` VALUES ('52', 'CLS2XT3NV', '2018-04-20 19:01:44', 'exam', 'tanshong', '');
INSERT INTO `posts` VALUES ('53', 'CLS2XT3NV', '2018-04-20 20:05:25', 'exam', 'tanshong', '');
INSERT INTO `posts` VALUES ('54', 'CLS2XT3NV', '2018-04-20 20:07:47', 'exam', 'tanshong', '');
INSERT INTO `posts` VALUES ('55', 'CLS2XT3NV', '2018-04-20 20:19:06', 'exam', 'tanshong', '');
INSERT INTO `posts` VALUES ('56', 'CLS2XT3NV', '2018-04-20 20:20:56', 'exam', 'tanshong', 'tansdsh');
INSERT INTO `posts` VALUES ('57', 'CLS2XT3NV', '2018-04-20 20:46:04', 'exam', 'Gwapo Exam', '');
INSERT INTO `posts` VALUES ('58', 'CLS2XT3NV', '2018-04-20 20:48:25', 'exam', 'tanshong', 'czx');
INSERT INTO `posts` VALUES ('59', 'CLS2XT3NV', '2018-04-20 20:50:01', 'link', 'youtube', '');
INSERT INTO `posts` VALUES ('60', 'CLS2XT3NV', '2018-04-20 21:01:25', 'exam', 'tanshong', 'vc');
INSERT INTO `posts` VALUES ('61', 'CLS2XT3NV', '2018-04-20 21:02:09', 'exam', 'tanshong', '');
INSERT INTO `posts` VALUES ('62', 'CLS2XT3NV', '2018-04-20 21:03:51', 'link', 'tan awa lang', '');
INSERT INTO `posts` VALUES ('63', 'CLS2XT3NV', '2018-04-20 21:05:10', 'exam', 'tanshong', '');

-- ----------------------------
-- Table structure for `students_request`
-- ----------------------------
DROP TABLE IF EXISTS `students_request`;
CREATE TABLE `students_request` (
  `request_no` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_account_no` int(11) DEFAULT NULL,
  `student_account_no` int(11) DEFAULT NULL,
  `class_code` varchar(20) DEFAULT NULL,
  `request_date` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`request_no`)
) ENGINE=InnoDB AUTO_INCREMENT=2739 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of students_request
-- ----------------------------
INSERT INTO `students_request` VALUES ('2726', '58', '42', 'CLS66EYTJ', '2018-04-16', 'Confirmed');
INSERT INTO `students_request` VALUES ('2727', '58', '42', 'CLS9N2H16', '2018-04-16', 'Confirmed');
INSERT INTO `students_request` VALUES ('2728', '58', '42', 'CLSFNQMIB', '2018-04-16', 'Confirmed');
INSERT INTO `students_request` VALUES ('2729', '58', '42', 'CLSJE1CDX', '2018-04-16', 'Confirmed');
INSERT INTO `students_request` VALUES ('2730', '56', '45', 'CLSC9HLRR', '2018-04-18', 'Confirmed');
INSERT INTO `students_request` VALUES ('2731', '57', '41', 'CLS2XT3NV', '2018-04-19', 'Confirmed');
INSERT INTO `students_request` VALUES ('2732', '57', '45', 'CLS2XT3NV', '2018-04-19', 'Confirmed');
INSERT INTO `students_request` VALUES ('2733', '57', '42', 'CLS2XT3NV', '2018-04-19', 'Confirmed');
INSERT INTO `students_request` VALUES ('2735', '58', '41', 'CLS9N2H16', '2018-04-19', 'Confirmed');
INSERT INTO `students_request` VALUES ('2736', '58', '41', 'CLSFNQMIB', '2018-04-19', 'Unconfirmed');
INSERT INTO `students_request` VALUES ('2737', '58', '41', 'CLSX4S8DT', '2018-04-19', 'Unconfirmed');
INSERT INTO `students_request` VALUES ('2738', '58', '41', 'CLSJE1CDX', '2018-04-19', 'Unconfirmed');
