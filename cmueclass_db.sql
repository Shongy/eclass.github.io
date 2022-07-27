/*
Navicat MySQL Data Transfer

Source Server         : cmueclass_db
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : cmueclass_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-05-04 15:59:14
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
INSERT INTO `accounts_admin` VALUES ('2', 'Rhoneth John', 'Fabre', 'Mendez', 'rhoneth', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', '', 'Maramag Bukidnon', 'P-5 North Poblacion', '07-06-1997', 'M', 'I am the administrator.', '0', '', '', '', '');
INSERT INTO `accounts_admin` VALUES ('3', 'Eugine', 'Lianto', 'M', 'eugine', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'eugine.lianto@gmail.com', '', '', '08-03-1997', 'M', 'Gwapo', '0', '', '', '', 'http://www.facebook.com');

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
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of accounts_student
-- ----------------------------
INSERT INTO `accounts_student` VALUES ('41', 'Adrian Paul', 'Relayosa', 'Cuajao', 'adrianpaul', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'fabrerhonethjohn1@gmail.com', 'Maramag Bukidnon', 'P-6 North Poblacion', '18-10-1997', 'M', 'Hi! Good Day!', '0', '', '', '', '', 'Engineering ', 'Mechanical', '4th Year', '0', 'Active', '20160612_153448_ads.jpg');
INSERT INTO `accounts_student` VALUES ('42', 'Jhun Kinley', 'Villapaz', 'Canales', 'jhunkinley', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'fabrerhonethjohn@gmail.com', 'Maramag Bukidnon', 'P-7 South Poblacion', '16-10-1996', 'M', 'Itom akong kuko.', '0', '', '', '', '', '', '', '', '0', 'Active', '20160614_173035.jpg');
INSERT INTO `accounts_student` VALUES ('44', 'Gerard Jan', 'Estrada', 'Celestial', 'gerardjan', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'rhonethjohnfabre101@gmail.com', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '0', 'Active', '20160705_153642.jpg');
INSERT INTO `accounts_student` VALUES ('45', 'Eugine', 'Lianto', 'Medel', 'eugine101', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre23@gmail.com', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '0', 'Active', 'Zoom Out.PNG');
INSERT INTO `accounts_student` VALUES ('47', 'Edfe Lawrence', 'Borbon', 'Mendez', 'edfelawrence', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre1003@gmail.com', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '0', 'Active', '20170528_104017.jpg');
INSERT INTO `accounts_student` VALUES ('48', 'Bryan', 'Lianto', 'Medel', 'bryan', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'seekercracker@gmail.com', null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('139', 'Cris John', 'Acala', 'Acas ', 'crisjohn', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', '', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '0', 'Active', '20160712_110737.jpg');
INSERT INTO `accounts_student` VALUES ('140', 'Christian', 'Tampus', 'Canton', 'christian', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('141', 'John Elbert', 'Estrada', '', 'johnelbert', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('152', 'Elaine Amor', 'Mantalaba', 'Versano', 'amor', '0048a973df331dcc6fa69755734c1956f94f9183922e577dcfb808f7a7d496a9', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('153', 'Kezia', 'Callanta', 'Marie', 'ke', '8e5202705183bd3a20a29e224499b0f77a8273ee33cd93cca71043c57ad4bdfc', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('154', 'Elaine Amor', 'Mantalaba', 'Versano', '', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('155', 'Kent Vincent', 'Butal', 'Saren', 'kentvincent', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre@gmail.com', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '0', 'Active', 'e92b32b76f48f7c4745197f9df52eaf8.png');
INSERT INTO `accounts_student` VALUES ('156', 'Denmark', 'Fabre', 'Mendez', 'denmark', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre105@gmail.com', null, null, null, null, null, null, null, null, null, null, null, null, null, '042', 'Inactive', null);
INSERT INTO `accounts_student` VALUES ('157', 'Maria', 'Mercedes', 'Medel', 'maria', '94aec9fbed989ece189a7e172c9cf41669050495152bc4c1dbf2a38d7fd85627', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('158', 'Pedro', 'Penduko', 'Fabre', 'pedro', 'ee5cd7d5d96c8874117891b2c92a036f96918e66c102bc698ae77542c186f981', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('159', 'Juan', 'Cruz', 'Dela', 'juan', 'ed08c290d7e22f7bb324b15cbadce35b0b348564fd2d5f95752388d86d71bcca', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of accounts_teacher
-- ----------------------------
INSERT INTO `accounts_teacher` VALUES ('56', 'Rhoneth John', 'Fabre', 'Mendez', 'rhonethjohn', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'rhonethjohnfabre1@gmail.com', 'Maramag Bukidnon', 'P-5 North Poblacion', '07-06-1997', 'M', 'Rhoneth John here! and just only a test.', '9972550429', '', '', '', '', 'Business and Management', 'BS Business Administration', 'College Dean', '0', 'Active', 'CLD.jpg');
INSERT INTO `accounts_teacher` VALUES ('57', 'Christian', 'Tampus', 'Canton', 'tanshong', 'd75d1a574597b1f98f7229be606b689cf2f6e872d4d4c22b68164d41541d2279', 'tanshongshongy@gmail.com', '', '', '', 'M', '', '9052168312', '', '', '', '', '', '', '', '0', 'Active', '1231231231.JPG');
INSERT INTO `accounts_teacher` VALUES ('58', 'Giovanni', 'Abella', 'Ponce', 'giovanni', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'rhonethjohnfabre105@gmail.com', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '0', 'Active', '20160612_153138.jpg');
INSERT INTO `accounts_teacher` VALUES ('60', 'Nathalie Joy', 'Galia', 'Pontillas', 'nathaliejoy', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'nathalie@gmail.com', null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=4008 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of activities
-- ----------------------------
INSERT INTO `activities` VALUES ('3963', '2018-05-04 10:50:57', 'uploaded new photo as profile picture. <a href=\"viewprofile.php?refid=57&usertype=11\">Take a look.</a>', '11', '57');
INSERT INTO `activities` VALUES ('3964', '2018-05-04 10:50:57', 'updated personal information. <a href=\"viewprofile.php?refid=57&usertype=11\">Take a look.</a>', '11', '57');
INSERT INTO `activities` VALUES ('3965', '2018-05-04 11:00:18', 'created a new class of Algebra.', '11', '57');
INSERT INTO `activities` VALUES ('3966', '2018-05-04 11:04:26', 'has added an announcement to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3967', '2018-05-04 11:04:44', 'has deleted a(n) announcement <strong class=\"orange\">Announcement</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3968', '2018-05-04 11:07:11', 'has added an announcement to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3969', '2018-05-04 11:07:15', 'has deleted a(n) announcement <strong class=\"orange\">Announcement</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3970', '2018-05-04 11:07:20', 'has added an announcement to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3971', '2018-05-04 11:07:25', 'has deleted a(n) announcement <strong class=\"orange\">Announcement</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3972', '2018-05-04 11:07:45', 'has uploaded new file(s) to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3973', '2018-05-04 11:07:55', 'has deleted a(n) files <strong class=\"orange\">this is a [ost</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3974', '2018-05-04 11:52:39', 'has uploaded new file(s) to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3975', '2018-05-04 11:52:51', 'has deleted a(n) files <strong class=\"orange\">ta</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3976', '2018-05-04 11:53:08', 'has added an announcement to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3977', '2018-05-04 11:54:40', 'has deleted a(n) announcement <strong class=\"orange\">Announcement</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3978', '2018-05-04 11:54:47', 'has added a new link to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3979', '2018-05-04 11:54:55', 'has deleted a(n) link <strong class=\"orange\">das</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3980', '2018-05-04 11:56:05', 'has added a new link to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3981', '2018-05-04 11:56:51', 'has deleted a(n) link <strong class=\"orange\"></strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3982', '2018-05-04 11:57:00', 'has added a new link to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3983', '2018-05-04 11:57:31', 'has deleted a(n) link <strong class=\"orange\">d</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3984', '2018-05-04 11:57:35', 'has added a new link to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3985', '2018-05-04 11:57:52', 'has deleted a(n) link <strong class=\"orange\"></strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3986', '2018-05-04 12:00:11', 'has added a new link to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3987', '2018-05-04 12:01:55', 'has deleted a(n) link <strong class=\"orange\"></strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3988', '2018-05-04 12:02:07', 'has added a new link to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3989', '2018-05-04 12:03:46', 'has added a new link to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3990', '2018-05-04 12:21:31', 'has deleted a(n) link <strong class=\"orange\"></strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3991', '2018-05-04 12:21:33', 'has deleted a(n) link <strong class=\"orange\"></strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3992', '2018-05-04 12:21:43', 'has added a new link to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3993', '2018-05-04 12:24:28', 'has deleted a(n) link <strong class=\"orange\">asd</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3994', '2018-05-04 12:24:36', 'has added a new link to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3995', '2018-05-04 12:32:29', 'has deleted a(n) link <strong class=\"orange\">tanshong</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3996', '2018-05-04 12:32:46', 'has uploaded new file(s) to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3997', '2018-05-04 12:33:05', 'has added an announcement to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3998', '2018-05-04 12:33:15', 'has deleted a(n) announcement <strong class=\"orange\">Announcement</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('3999', '2018-05-04 12:38:53', 'has uploaded new file(s) to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4000', '2018-05-04 12:40:39', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '42');
INSERT INTO `activities` VALUES ('4001', '2018-05-04 12:40:47', 'accepted <a href=\"viewprofile.php?refid=42&usertype=111\">Jhun Kinley Canales Jhun Kinley</a> to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> class.', '11', '57');
INSERT INTO `activities` VALUES ('4002', '2018-05-04 12:40:47', 'was accepted on joining <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> class.', '111', '42');
INSERT INTO `activities` VALUES ('4003', '2018-05-04 12:46:33', 'has added an examination <strong class=\"orange\">create exam</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4004', '2018-05-04 13:00:04', 'has deleted a(n) exam <strong class=\"orange\">create exam</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4005', '2018-05-04 13:01:21', 'has deleted a(n) files <strong class=\"orange\">dsa</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4006', '2018-05-04 13:01:38', 'has deleted a(n) files <strong class=\"orange\">asd</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4007', '2018-05-04 13:02:03', 'has added an announcement to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');

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
INSERT INTO `courses` VALUES ('G7N2H16O', '57', 'Algebra', 'Math 1', '', 'Active', '2018-05-04');

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
) ENGINE=InnoDB AUTO_INCREMENT=1638 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of enrolled_students
-- ----------------------------
INSERT INTO `enrolled_students` VALUES ('1099', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1100', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1101', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1102', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1103', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1104', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1105', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1106', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1107', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1108', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1109', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1110', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1111', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1112', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1113', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1114', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1115', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1116', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1117', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1118', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1119', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1120', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1121', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1122', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1123', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1124', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1125', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1126', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1127', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1128', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1129', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1130', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1131', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1132', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1133', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1134', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1135', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1136', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1137', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1138', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1139', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1140', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1141', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1142', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1143', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1144', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1145', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1146', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1147', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1148', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1149', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1150', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1151', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1152', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1153', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1154', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1155', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1156', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1157', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1158', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1159', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1160', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1161', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1162', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1163', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1164', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1165', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1166', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1167', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1168', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1169', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1170', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1171', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1172', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1173', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1174', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1175', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1176', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1177', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1178', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1179', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1180', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1181', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1182', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1183', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1184', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1185', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1186', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1187', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1188', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1189', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1190', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1191', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1192', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1193', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1194', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1195', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1196', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1197', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1198', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1199', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1200', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1201', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1202', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1203', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1204', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1205', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1206', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1207', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1208', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1209', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1210', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1211', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1212', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1213', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1214', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1215', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1216', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1217', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1218', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1219', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1220', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1221', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1222', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1223', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1224', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1225', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1226', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1227', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1228', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1229', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1230', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1231', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1232', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1233', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1234', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1235', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1236', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1237', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1238', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1239', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1240', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1241', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1242', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1243', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1244', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1245', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1246', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1247', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1248', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1249', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1250', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1251', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1252', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1253', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1254', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1255', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1256', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1257', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1258', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1259', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1260', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1261', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1262', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1263', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1264', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1265', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1266', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1267', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1268', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1269', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1270', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1271', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1272', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1273', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1274', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1275', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1276', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1277', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1278', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1279', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1280', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1281', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1282', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1283', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1284', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1285', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1286', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1287', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1288', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1289', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1290', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1291', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1292', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1293', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1294', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1295', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1296', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1297', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1298', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1299', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1300', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1301', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1302', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1303', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1304', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1305', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1306', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1307', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1308', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1309', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1310', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1311', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1312', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1313', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1314', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1315', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1316', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1317', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1318', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1319', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1320', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1321', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1322', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1323', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1324', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1325', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1326', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1327', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1328', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1329', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1330', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1331', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1332', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1333', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1334', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1335', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1336', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1337', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1338', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1339', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1340', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1341', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1342', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1343', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1344', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1345', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1346', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1347', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1348', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1349', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1350', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1351', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1352', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1353', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1354', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1355', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1356', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1357', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1358', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1359', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1360', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1361', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1362', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1363', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1364', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1365', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1366', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1367', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1368', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1369', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1370', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1371', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1372', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1373', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1374', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1375', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1376', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1377', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1378', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1379', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1380', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1381', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1382', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1383', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1384', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1385', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1386', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1387', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1388', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1389', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1390', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1391', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1392', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1393', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1394', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1395', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1396', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1397', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1398', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1399', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1400', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1401', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1402', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1403', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1404', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1405', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1406', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1407', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1408', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1409', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1410', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1411', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1412', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1413', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1414', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1415', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1416', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1417', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1418', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1419', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1420', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1421', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1422', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1423', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1424', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1425', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1426', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1427', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1428', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1429', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1430', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1431', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1432', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1433', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1434', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1435', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1436', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1437', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1438', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1439', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1440', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1441', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1442', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1443', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1444', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1445', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1446', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1447', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1448', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1449', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1450', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1451', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1452', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1453', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1454', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1455', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1456', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1457', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1458', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1459', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1460', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1461', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1462', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1463', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1464', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1465', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1466', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1467', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1468', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1469', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1470', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1471', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1472', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1473', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1474', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1475', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1476', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1477', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1478', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1479', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1480', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1481', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1482', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1483', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1484', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1485', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1486', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1487', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1488', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1489', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1490', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1491', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1492', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1493', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1494', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1495', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1496', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1497', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1498', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1499', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1500', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1501', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1502', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1503', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1504', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1505', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1506', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1507', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1508', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1509', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1510', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1511', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1512', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1513', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1514', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1515', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1516', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1517', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1518', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1519', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1520', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1521', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1522', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1523', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1524', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1525', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1526', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1527', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1528', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1529', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1530', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1531', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1532', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1533', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1534', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1535', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1536', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1537', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1538', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1539', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1540', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1541', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1542', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1543', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1544', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1545', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1546', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1547', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1548', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1549', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1550', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1551', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1552', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1553', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1554', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1555', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1556', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1557', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1558', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1559', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1560', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1561', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1562', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1563', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1564', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1565', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1566', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1567', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1568', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1569', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1570', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1571', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1572', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1573', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1574', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1575', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1576', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1577', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1578', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1579', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1580', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1581', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1582', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1583', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1584', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1585', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1586', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1587', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1588', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1589', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1590', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1591', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1592', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1593', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1594', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1595', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1596', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1597', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1598', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1599', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1600', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1601', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1602', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1603', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1604', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1605', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1606', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1607', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1608', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1609', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1610', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1611', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1612', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1613', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1614', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1615', '0', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1616', '152', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1617', '153', 'CLSSJMFAC', '2018-04-28', '0');
INSERT INTO `enrolled_students` VALUES ('1618', '42', 'NEWNUUQAM', '2018-04-29', '0');
INSERT INTO `enrolled_students` VALUES ('1619', '152', 'NEWNUUQAM', '2018-04-29', '0');
INSERT INTO `enrolled_students` VALUES ('1620', '153', 'NEWNUUQAM', '2018-04-29', '0');
INSERT INTO `enrolled_students` VALUES ('1621', '152', 'clsNCTD12', '2018-04-29', '0');
INSERT INTO `enrolled_students` VALUES ('1622', '153', 'clsNCTD12', '2018-04-29', '0');
INSERT INTO `enrolled_students` VALUES ('1623', '42', 'tanMWT6MC', '2018-04-29', '2752');
INSERT INTO `enrolled_students` VALUES ('1624', '154', '', '2018-04-29', '0');
INSERT INTO `enrolled_students` VALUES ('1625', '154', '', '2018-04-29', '0');
INSERT INTO `enrolled_students` VALUES ('1626', '42', 'tanKWN7XC', '2018-05-02', '2753');
INSERT INTO `enrolled_students` VALUES ('1627', '0', 'Save This New Questi', '2018-05-03', '0');
INSERT INTO `enrolled_students` VALUES ('1628', '157', 'engAFFCAT', '2018-05-03', '0');
INSERT INTO `enrolled_students` VALUES ('1629', '158', 'engAFFCAT', '2018-05-03', '0');
INSERT INTO `enrolled_students` VALUES ('1630', '159', 'engAFFCAT', '2018-05-03', '0');
INSERT INTO `enrolled_students` VALUES ('1631', '0', 'Save This New Questi', '2018-05-03', '0');
INSERT INTO `enrolled_students` VALUES ('1632', '41', 'engAFFCAT', '2018-05-03', '0');
INSERT INTO `enrolled_students` VALUES ('1633', '157', 'engAFFCAT', '2018-05-03', '0');
INSERT INTO `enrolled_students` VALUES ('1634', '158', 'engAFFCAT', '2018-05-03', '0');
INSERT INTO `enrolled_students` VALUES ('1635', '159', 'engAFFCAT', '2018-05-03', '0');
INSERT INTO `enrolled_students` VALUES ('1636', '41', 'CLS2XT3NV', '2018-05-03', '2761');
INSERT INTO `enrolled_students` VALUES ('1637', '42', 'G7N2H16O', '2018-05-04', '2762');

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
  `exam_date` datetime DEFAULT NULL,
  `exam_password` varchar(50) DEFAULT NULL,
  `availability` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `teacher_account_no` int(8) DEFAULT NULL,
  `date_publish` datetime DEFAULT NULL,
  `exam_date_expired` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`exam_no`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exams
-- ----------------------------
INSERT INTO `exams` VALUES ('80', 'create exam', 'G7N2H16O', '', '30', '2018-05-04 12:47:00', 'ta', 'Available', '2018-05-04 06:45:30', '57', '2018-05-04 06:46:32', '2018-05-04 1:00:00');

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
  `answer7` text,
  `answer8` text,
  `answer9` text,
  `answer10` text,
  `choice1` text,
  `choice2` text,
  `choice3` text,
  `choice4` text,
  `choice5` text,
  `choice6` text,
  `choice7` text,
  `choice8` text,
  `choice9` text,
  `choice10` text,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=563 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exam_details
-- ----------------------------
INSERT INTO `exam_details` VALUES ('80', 'multiple', '562', 'what is ', '1', 'asd', 'dasd', 'asd', 'd', null, null, null, null, null, null, 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', null, null, null, null, null);

-- ----------------------------
-- Table structure for `exam_results`
-- ----------------------------
DROP TABLE IF EXISTS `exam_results`;
CREATE TABLE `exam_results` (
  `exam_result_no` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) NOT NULL,
  `student_account_no` int(11) NOT NULL,
  `exam_no` int(11) NOT NULL,
  `perfect_scores` int(11) NOT NULL,
  PRIMARY KEY (`exam_result_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exam_results
-- ----------------------------

-- ----------------------------
-- Table structure for `exam_result_details`
-- ----------------------------
DROP TABLE IF EXISTS `exam_result_details`;
CREATE TABLE `exam_result_details` (
  `exam_result_dtls_no` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `remarks` int(11) NOT NULL,
  `exam_result_no` int(11) NOT NULL,
  PRIMARY KEY (`exam_result_dtls_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exam_result_details
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=224 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of file_details
-- ----------------------------
INSERT INTO `file_details` VALUES ('223', '202', 'asd', 'asd');

-- ----------------------------
-- Table structure for `grades`
-- ----------------------------
DROP TABLE IF EXISTS `grades`;
CREATE TABLE `grades` (
  `grade_id` int(8) NOT NULL,
  `class_code` varchar(50) DEFAULT NULL,
  `teacher_account_no` int(8) DEFAULT NULL,
  `student_account_no` int(8) DEFAULT NULL,
  `1stgrading` varchar(255) DEFAULT NULL,
  `2ndgrading` varchar(255) DEFAULT NULL,
  `3rdgrading` varchar(255) DEFAULT NULL,
  `4thgrading` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`grade_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of grades
-- ----------------------------

-- ----------------------------
-- Table structure for `inactive_accounts`
-- ----------------------------
DROP TABLE IF EXISTS `inactive_accounts`;
CREATE TABLE `inactive_accounts` (
  `inactive_account_no` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `admin_account_no` int(11) NOT NULL,
  PRIMARY KEY (`inactive_account_no`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of inactive_accounts
-- ----------------------------

-- ----------------------------
-- Table structure for `lost_accounts`
-- ----------------------------
DROP TABLE IF EXISTS `lost_accounts`;
CREATE TABLE `lost_accounts` (
  `lost_account_no` int(8) NOT NULL AUTO_INCREMENT,
  `teacher_account_no` int(8) DEFAULT NULL,
  `student_account_no` int(8) DEFAULT NULL,
  PRIMARY KEY (`lost_account_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of lost_accounts
-- ----------------------------

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
  `viewed` int(11) NOT NULL,
  PRIMARY KEY (`post_no`)
) ENGINE=InnoDB AUTO_INCREMENT=203 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('202', 'G7N2H16O', '2018-05-04 07:02:03', 'announcement', 'Announcement', 'asdas', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=2763 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of students_request
-- ----------------------------
INSERT INTO `students_request` VALUES ('2762', '57', '42', 'G7N2H16O', '2018-05-04', 'Confirmed');
