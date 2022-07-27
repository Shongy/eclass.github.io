/*
Navicat MySQL Data Transfer

Source Server         : bnshi_exam
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : bnshiexam_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-05-06 05:45:04
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
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of accounts_student
-- ----------------------------
INSERT INTO `accounts_student` VALUES ('41', 'Adrian Paul', 'Relayosa', 'Cuajao', 'adrianpaul', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'fabrerhonethjohn@gmail.com', 'Maramag Bukidnon', 'P-6 North Poblacion', '18-10-1997', 'M', 'Hi! Good Day!', '0', '', '', '', '', 'Engineering ', 'Mechanical', '4th Year', '0', 'Active', '20160612_153448_ads.jpg');
INSERT INTO `accounts_student` VALUES ('42', 'Jhun Kinley', 'Villapaz', 'Canales', 'jhunkinley', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'fabrerhonethjohn@gmail.com', 'Maramag Bukidnon', 'P-7 South Poblacion', '16-10-1996', 'M', 'Itom akong kuko.', '0', '', '', '', '', '', '', '', '0', 'Active', '20160614_173035.jpg');
INSERT INTO `accounts_student` VALUES ('44', 'Gerard Jan', 'Estrada', 'Celestial', 'gerardjan', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'rhonethjohnfabre101@gmail.com', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '0', 'Active', '20160705_153642.jpg');
INSERT INTO `accounts_student` VALUES ('45', 'Eugine', 'Lianto', 'Medel', 'eugine101', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre23@gmail.com', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '0', 'Active', 'Zoom Out.PNG');
INSERT INTO `accounts_student` VALUES ('47', 'Edfe Lawrence', 'Borbon', 'Mendez', 'edfelawrence', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre1003@gmail.com', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '0', 'Active', '20170528_104017.jpg');
INSERT INTO `accounts_student` VALUES ('48', 'Bryan', 'Lianto', 'Medel', 'bryan', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'seekercracker@gmail.com', null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('139', 'Cris John', 'Acala', 'Acas ', 'crisjohn', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', '', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '0', 'Active', '20160712_110737.jpg');
INSERT INTO `accounts_student` VALUES ('140', 'Christian', 'Tampus', 'Canton', 'christian', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('141', 'John Elbert', 'Estrada', '', 'johnelbert', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('152', 'Elaine Amor', 'Mantalaba', 'Versano', 'amor', '0048a973df331dcc6fa69755734c1956f94f9183922e577dcfb808f7a7d496a9', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('153', 'Kezia', 'Callanta', 'Marie', 'ke', '8e5202705183bd3a20a29e224499b0f77a8273ee33cd93cca71043c57ad4bdfc', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('154', 'Elaine Amor', 'Mantalaba', 'Versano', '', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('155', 'Kent Vincent', 'Butal', 'Saren', 'kentvincent', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre@gmail.com', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '0', 'Active', 'e92b32b76f48f7c4745197f9df52eaf8.png');
INSERT INTO `accounts_student` VALUES ('156', 'Denmark', 'Fabre', 'Mendez', 'denmark', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre105@gmail.com', null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('157', 'Maria', 'Mercedes', 'Medel', 'maria', '94aec9fbed989ece189a7e172c9cf41669050495152bc4c1dbf2a38d7fd85627', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('158', 'Pedro', 'Penduko', 'Fabre', 'pedro', 'ee5cd7d5d96c8874117891b2c92a036f96918e66c102bc698ae77542c186f981', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('159', 'Juan', 'Cruz', 'Dela', 'juan', 'ed08c290d7e22f7bb324b15cbadce35b0b348564fd2d5f95752388d86d71bcca', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_student` VALUES ('160', 'Ian', 'Rubio', 'Salar', 'ian', '6e659deaa85842cdabb5c6305fcc40033ba43772ec00d45c2a3c921741a5e377', 'rhonethjohnfabre@gmail.com', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '0', 'Active', 'colors-of-england-wallpapers_10581_1280x960.jpg');
INSERT INTO `accounts_student` VALUES ('161', 'Angeli Raquel', 'Sundo', 'Jamisolamin', 'angeliraquel', '6e659deaa85842cdabb5c6305fcc40033ba43772ec00d45c2a3c921741a5e377', 'rhonethjohnfabre@gmail.com', null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', 'default.png');
INSERT INTO `accounts_student` VALUES ('162', 'Ruby Mae', 'Villapaz', 'Canales', 'rubymae', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre@gmail.com', null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', 'default.png');

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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of accounts_teacher
-- ----------------------------
INSERT INTO `accounts_teacher` VALUES ('56', 'Rhoneth John', 'Fabre', 'Mendez', 'rhonethjohn', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'rhonethjohnfabre1@gmail.com', 'Maramag Bukidnon', 'P-5 North Poblacion', '07-06-1997', 'M', 'Rhoneth John here! and just only a test.', '9972550429', '', '', '', '', 'Business and Management', 'BS Business Administration', 'College Dean', '0', 'Lost', '20170112_174704.jpg');
INSERT INTO `accounts_teacher` VALUES ('57', 'Christian', 'Tampus', 'Canton', 'tanshong', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'tanshongshongy@gmail.com', '', '', '', 'M', '', '9052168312', '', '', '', '', '', '', '', '0', 'Active', '1231231231.JPG');
INSERT INTO `accounts_teacher` VALUES ('58', 'Giovanni', 'Abella', 'Ponce', 'giovanni', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre@gmail.com', '', '', '', 'M', '', '0', '', '', '', '', '', '', '', '0', 'Lost', '20160612_153138.jpg');
INSERT INTO `accounts_teacher` VALUES ('61', 'Rico John', 'Tasic', 'Abaniel', 'ricojohn', '89e01536ac207279409d4de1e5253e01f4a1769e696db0d6062ca9b8f56767c8', 'rhonethjohnfabre@gmail.com', null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', null);
INSERT INTO `accounts_teacher` VALUES ('62', 'Arwin', 'Rubio', 'Callano', 'arwin', '6e659deaa85842cdabb5c6305fcc40033ba43772ec00d45c2a3c921741a5e377', 'rhonethjohnfabre@gmail.com', null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', 'default.png');
INSERT INTO `accounts_teacher` VALUES ('63', 'Nathalie Joy', 'Galia', 'Pontillas', 'nathaliejoy', '6e659deaa85842cdabb5c6305fcc40033ba43772ec00d45c2a3c921741a5e377', 'rhonethjohnfabre@gmail.com', null, null, null, null, null, null, null, null, null, null, null, null, null, '0', 'Active', 'default.png');
INSERT INTO `accounts_teacher` VALUES ('64', 'Christian', 'Yap', 'Caintoy', 'christianyap', '6e659deaa85842cdabb5c6305fcc40033ba43772ec00d45c2a3c921741a5e377', 'fabrerhonethjohn@gmail.com', null, null, null, null, null, null, null, null, null, null, null, null, null, '0131', 'Inactive', 'default.png');

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
) ENGINE=InnoDB AUTO_INCREMENT=4441 DEFAULT CHARSET=latin1;

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
INSERT INTO `activities` VALUES ('4008', '2018-05-04 16:23:33', 'has deleted a(n) announcement <strong class=\"orange\">Announcement</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4009', '2018-05-04 18:52:32', 'has added a new link to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4010', '2018-05-04 18:53:12', 'has deleted a(n) link <strong class=\"orange\"></strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4011', '2018-05-04 18:56:34', 'has added an announcement to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4012', '2018-05-04 18:56:54', 'has deleted a(n) announcement <strong class=\"orange\">Announcement</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4013', '2018-05-04 18:59:47', 'has added a new link to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4014', '2018-05-04 18:59:52', 'has deleted a(n) link <strong class=\"orange\">asdasdasdasd</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4015', '2018-05-04 19:03:08', 'has added an announcement to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4016', '2018-05-04 19:03:23', 'has deleted a(n) announcement <strong class=\"orange\">Announcement</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4017', '2018-05-04 21:54:15', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4018', '2018-05-04 21:58:00', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4019', '2018-05-04 21:58:19', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4020', '2018-05-04 22:00:24', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4021', '2018-05-04 22:01:07', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4022', '2018-05-04 22:02:26', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4023', '2018-05-04 22:02:27', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4024', '2018-05-04 22:02:28', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4025', '2018-05-04 22:02:38', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '58');
INSERT INTO `activities` VALUES ('4026', '2018-05-04 22:02:46', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '60');
INSERT INTO `activities` VALUES ('4027', '2018-05-04 22:02:49', 'was set account to <strong class=\"green\">active</strong>.', '11', '60');
INSERT INTO `activities` VALUES ('4028', '2018-05-04 22:04:20', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4029', '2018-05-04 22:04:22', 'was set account to <strong class=\"green\">active</strong>.', '11', '58');
INSERT INTO `activities` VALUES ('4030', '2018-05-04 22:04:53', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4031', '2018-05-04 22:49:21', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4032', '2018-05-04 22:50:40', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4033', '2018-05-04 22:52:02', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4034', '2018-05-04 22:52:18', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4035', '2018-05-04 22:52:28', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4036', '2018-05-04 22:52:39', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4037', '2018-05-04 23:02:54', 'was set account to <strong class=\"green\">active</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4038', '2018-05-04 23:06:58', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4039', '2018-05-04 23:07:05', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4040', '2018-05-04 23:10:33', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4041', '2018-05-04 23:11:35', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4042', '2018-05-04 23:11:52', 'was set account to <strong class=\"green\">active</strong>.', '11', '58');
INSERT INTO `activities` VALUES ('4043', '2018-05-04 23:12:16', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4044', '2018-05-04 23:12:17', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4045', '2018-05-04 23:12:57', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4046', '2018-05-04 23:12:58', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4047', '2018-05-04 23:12:59', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4048', '2018-05-04 23:12:59', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4049', '2018-05-04 23:12:59', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4050', '2018-05-04 23:13:00', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4051', '2018-05-04 23:13:00', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4052', '2018-05-04 23:13:50', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4053', '2018-05-04 23:13:51', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '58');
INSERT INTO `activities` VALUES ('4054', '2018-05-04 23:13:51', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '60');
INSERT INTO `activities` VALUES ('4055', '2018-05-04 23:13:59', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4056', '2018-05-04 23:14:00', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4057', '2018-05-04 23:14:00', 'was set account to <strong class=\"green\">active</strong>.', '11', '58');
INSERT INTO `activities` VALUES ('4058', '2018-05-04 23:14:01', 'was set account to <strong class=\"green\">active</strong>.', '11', '60');
INSERT INTO `activities` VALUES ('4059', '2018-05-04 23:15:56', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4060', '2018-05-04 23:16:03', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4061', '2018-05-04 23:16:59', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4062', '2018-05-04 23:17:00', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '58');
INSERT INTO `activities` VALUES ('4063', '2018-05-04 23:17:01', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4064', '2018-05-04 23:17:02', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '60');
INSERT INTO `activities` VALUES ('4065', '2018-05-04 23:17:09', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4066', '2018-05-04 23:17:10', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4067', '2018-05-04 23:17:10', 'was set account to <strong class=\"green\">active</strong>.', '11', '58');
INSERT INTO `activities` VALUES ('4068', '2018-05-04 23:17:15', 'was set account to <strong class=\"green\">active</strong>.', '11', '60');
INSERT INTO `activities` VALUES ('4069', '2018-05-04 23:21:12', 'successfully <strong class=\"green\">confirmed account registration</strong>.', '11', '61');
INSERT INTO `activities` VALUES ('4070', '2018-05-04 23:32:20', 'accepted <a href=\"viewprofile.php?refid=&usertype=111\">  </a> to join <a href=\"mycourse.php?classcode=Save This New Question +\"></a> class.', '11', '57');
INSERT INTO `activities` VALUES ('4071', '2018-05-04 23:38:23', 'successfully <strong class=\"green\">confirmed account registration</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4072', '2018-05-04 23:43:26', 'successfully <strong class=\"green\">confirmed account registration</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4073', '2018-05-04 23:43:28', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4074', '2018-05-04 23:43:29', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4075', '2018-05-04 23:43:30', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4076', '2018-05-04 23:46:31', 'successfully <strong class=\"green\">confirmed account registration</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4077', '2018-05-04 23:46:31', 'successfully <strong class=\"green\">confirmed account registration</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4078', '2018-05-04 23:53:49', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4079', '2018-05-04 23:54:13', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4080', '2018-05-05 00:01:05', 'was set account to <strong class=\"green\">active</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4081', '2018-05-05 00:04:38', 'was set account to <strong class=\"green\">active</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4082', '2018-05-05 00:08:33', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4083', '2018-05-05 00:08:34', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '42');
INSERT INTO `activities` VALUES ('4084', '2018-05-05 00:08:35', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '44');
INSERT INTO `activities` VALUES ('4085', '2018-05-05 00:08:36', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '45');
INSERT INTO `activities` VALUES ('4086', '2018-05-05 00:09:41', 'was set account to <strong class=\"green\">active</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4087', '2018-05-05 00:11:15', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4088', '2018-05-05 00:11:16', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '47');
INSERT INTO `activities` VALUES ('4089', '2018-05-05 00:11:17', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '48');
INSERT INTO `activities` VALUES ('4090', '2018-05-05 00:11:17', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '48');
INSERT INTO `activities` VALUES ('4091', '2018-05-05 00:11:26', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '139');
INSERT INTO `activities` VALUES ('4092', '2018-05-05 00:11:27', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '140');
INSERT INTO `activities` VALUES ('4093', '2018-05-05 00:11:27', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '140');
INSERT INTO `activities` VALUES ('4094', '2018-05-05 00:11:28', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '141');
INSERT INTO `activities` VALUES ('4095', '2018-05-05 00:11:28', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '152');
INSERT INTO `activities` VALUES ('4096', '2018-05-05 00:11:29', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '152');
INSERT INTO `activities` VALUES ('4097', '2018-05-05 00:11:29', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '153');
INSERT INTO `activities` VALUES ('4098', '2018-05-05 00:11:29', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '153');
INSERT INTO `activities` VALUES ('4099', '2018-05-05 00:11:29', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '154');
INSERT INTO `activities` VALUES ('4100', '2018-05-05 00:11:30', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '155');
INSERT INTO `activities` VALUES ('4101', '2018-05-05 00:11:30', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '155');
INSERT INTO `activities` VALUES ('4102', '2018-05-05 00:11:31', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '157');
INSERT INTO `activities` VALUES ('4103', '2018-05-05 00:11:31', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '157');
INSERT INTO `activities` VALUES ('4104', '2018-05-05 00:11:31', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '157');
INSERT INTO `activities` VALUES ('4105', '2018-05-05 00:11:31', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '157');
INSERT INTO `activities` VALUES ('4106', '2018-05-05 00:11:31', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '158');
INSERT INTO `activities` VALUES ('4107', '2018-05-05 00:11:32', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '159');
INSERT INTO `activities` VALUES ('4108', '2018-05-05 00:11:43', 'was set account to <strong class=\"green\">active</strong>.', '111', '42');
INSERT INTO `activities` VALUES ('4109', '2018-05-05 00:11:45', 'was set account to <strong class=\"green\">active</strong>.', '111', '44');
INSERT INTO `activities` VALUES ('4110', '2018-05-05 00:11:45', 'was set account to <strong class=\"green\">active</strong>.', '111', '45');
INSERT INTO `activities` VALUES ('4111', '2018-05-05 00:11:45', 'was set account to <strong class=\"green\">active</strong>.', '111', '45');
INSERT INTO `activities` VALUES ('4112', '2018-05-05 00:11:46', 'was set account to <strong class=\"green\">active</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4113', '2018-05-05 00:11:46', 'was set account to <strong class=\"green\">active</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4114', '2018-05-05 00:11:46', 'was set account to <strong class=\"green\">active</strong>.', '111', '47');
INSERT INTO `activities` VALUES ('4115', '2018-05-05 00:11:46', 'was set account to <strong class=\"green\">active</strong>.', '111', '48');
INSERT INTO `activities` VALUES ('4116', '2018-05-05 00:11:47', 'was set account to <strong class=\"green\">active</strong>.', '111', '48');
INSERT INTO `activities` VALUES ('4117', '2018-05-05 00:11:47', 'was set account to <strong class=\"green\">active</strong>.', '111', '139');
INSERT INTO `activities` VALUES ('4118', '2018-05-05 00:11:47', 'was set account to <strong class=\"green\">active</strong>.', '111', '139');
INSERT INTO `activities` VALUES ('4119', '2018-05-05 00:11:47', 'was set account to <strong class=\"green\">active</strong>.', '111', '140');
INSERT INTO `activities` VALUES ('4120', '2018-05-05 00:11:48', 'was set account to <strong class=\"green\">active</strong>.', '111', '141');
INSERT INTO `activities` VALUES ('4121', '2018-05-05 00:11:48', 'was set account to <strong class=\"green\">active</strong>.', '111', '152');
INSERT INTO `activities` VALUES ('4122', '2018-05-05 00:11:48', 'was set account to <strong class=\"green\">active</strong>.', '111', '152');
INSERT INTO `activities` VALUES ('4123', '2018-05-05 00:11:49', 'was set account to <strong class=\"green\">active</strong>.', '111', '153');
INSERT INTO `activities` VALUES ('4124', '2018-05-05 00:11:49', 'was set account to <strong class=\"green\">active</strong>.', '111', '153');
INSERT INTO `activities` VALUES ('4125', '2018-05-05 00:11:49', 'was set account to <strong class=\"green\">active</strong>.', '111', '154');
INSERT INTO `activities` VALUES ('4126', '2018-05-05 00:11:49', 'was set account to <strong class=\"green\">active</strong>.', '111', '154');
INSERT INTO `activities` VALUES ('4127', '2018-05-05 00:11:50', 'was set account to <strong class=\"green\">active</strong>.', '111', '155');
INSERT INTO `activities` VALUES ('4128', '2018-05-05 00:11:50', 'was set account to <strong class=\"green\">active</strong>.', '111', '157');
INSERT INTO `activities` VALUES ('4129', '2018-05-05 00:11:50', 'was set account to <strong class=\"green\">active</strong>.', '111', '157');
INSERT INTO `activities` VALUES ('4130', '2018-05-05 00:11:51', 'was set account to <strong class=\"green\">active</strong>.', '111', '158');
INSERT INTO `activities` VALUES ('4131', '2018-05-05 00:11:51', 'was set account to <strong class=\"green\">active</strong>.', '111', '158');
INSERT INTO `activities` VALUES ('4132', '2018-05-05 00:11:51', 'was set account to <strong class=\"green\">active</strong>.', '111', '159');
INSERT INTO `activities` VALUES ('4133', '2018-05-05 00:12:06', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4134', '2018-05-05 00:12:12', 'was set account to <strong class=\"green\">active</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4135', '2018-05-05 00:17:00', 'successfully <strong class=\"green\">confirmed account registration.</strong>.', '111', '156');
INSERT INTO `activities` VALUES ('4136', '2018-05-05 00:18:51', 'successfully <strong class=\"green\">confirmed account registration.</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4137', '2018-05-05 00:20:18', 'successfully <strong class=\"green\">confirmed account registration.</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4138', '2018-05-05 00:20:19', 'was set account to <strong class=\"green\">active</strong>.', '111', '42');
INSERT INTO `activities` VALUES ('4139', '2018-05-05 00:20:21', 'was set account to <strong class=\"green\">active</strong>.', '111', '42');
INSERT INTO `activities` VALUES ('4140', '2018-05-05 00:20:21', 'was set account to <strong class=\"green\">active</strong>.', '111', '42');
INSERT INTO `activities` VALUES ('4141', '2018-05-05 00:20:21', 'was set account to <strong class=\"green\">active</strong>.', '111', '42');
INSERT INTO `activities` VALUES ('4142', '2018-05-05 00:21:46', 'successfully <strong class=\"green\">confirmed account registration.</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4143', '2018-05-05 00:21:46', 'successfully <strong class=\"green\">confirmed account registration.</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4144', '2018-05-05 00:21:48', 'successfully <strong class=\"green\">confirmed account registration.</strong>.', '111', '42');
INSERT INTO `activities` VALUES ('4145', '2018-05-05 00:22:28', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4146', '2018-05-05 00:23:27', 'successfully <strong class=\"green\">confirmed account registration.</strong>.', '111', '42');
INSERT INTO `activities` VALUES ('4147', '2018-05-05 00:23:28', 'successfully <strong class=\"green\">confirmed account registration.</strong>.', '111', '44');
INSERT INTO `activities` VALUES ('4148', '2018-05-05 00:23:29', 'successfully <strong class=\"green\">confirmed account registration.</strong>.', '111', '45');
INSERT INTO `activities` VALUES ('4149', '2018-05-05 00:24:22', 'was set account to <strong class=\"green\">active</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4150', '2018-05-05 00:55:37', 'has added a new link to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4151', '2018-05-05 00:57:26', 'has added a new link to <a href=\"mycourse.php?class_code=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4152', '2018-05-05 01:07:41', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4153', '2018-05-05 01:32:32', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4154', '2018-05-05 02:03:44', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4155', '2018-05-05 02:03:46', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4156', '2018-05-05 02:03:51', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4157', '2018-05-05 02:16:27', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4158', '2018-05-05 02:17:18', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4159', '2018-05-05 02:24:23', 'accepted <a href=\"viewprofile.php?refid=&usertype=111\">  </a> to join <a href=\"mycourse.php?classcode=Save This New Question +\"></a> class.', '11', '57');
INSERT INTO `activities` VALUES ('4160', '2018-05-05 02:24:46', 'accepted <a href=\"viewprofile.php?refid=&usertype=111\">  </a> to join <a href=\"mycourse.php?classcode=Save This New Question +\"></a> class.', '11', '57');
INSERT INTO `activities` VALUES ('4161', '2018-05-05 02:30:28', 'has added an examination <strong class=\"orange\">New Examination</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4162', '2018-05-05 02:30:35', 'accepted <a href=\"viewprofile.php?refid=41&usertype=111\">Adrian Paul Cuajao Adrian Paul</a> to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> class.', '11', '57');
INSERT INTO `activities` VALUES ('4163', '2018-05-05 02:30:35', 'was accepted on joining <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> class.', '111', '41');
INSERT INTO `activities` VALUES ('4164', '2018-05-05 02:46:19', 'has requested to join <a href=\"mycourse.php?classcode=undefined\"></a>.', '111', '41');
INSERT INTO `activities` VALUES ('4165', '2018-05-05 02:55:39', 'has requested to join <a href=\"mycourse.php?classcode=undefined\"></a>.', '111', '41');
INSERT INTO `activities` VALUES ('4166', '2018-05-05 02:58:43', 'has requested to join <a href=\"mycourse.php?classcode=\"></a>.', '111', '41');
INSERT INTO `activities` VALUES ('4167', '2018-05-05 02:59:09', 'has requested to join <a href=\"mycourse.php?classcode=undefined\"></a>.', '111', '41');
INSERT INTO `activities` VALUES ('4168', '2018-05-05 03:00:12', 'has requested to join <a href=\"mycourse.php?classcode=undefined\"></a>.', '111', '41');
INSERT INTO `activities` VALUES ('4169', '2018-05-05 03:02:46', 'has requested to join <a href=\"mycourse.php?classcode=\"></a>.', '111', '41');
INSERT INTO `activities` VALUES ('4170', '2018-05-05 03:03:55', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4171', '2018-05-05 03:14:10', 'created a new class of English 12.', '11', '57');
INSERT INTO `activities` VALUES ('4172', '2018-05-05 03:14:11', 'added Adrian Paul Cuajao Relayosa to the class of English 12.', '11', '57');
INSERT INTO `activities` VALUES ('4173', '2018-05-05 03:14:19', 'created a new class of English 12.', '11', '57');
INSERT INTO `activities` VALUES ('4174', '2018-05-05 03:14:19', 'added Adrian Paul Cuajao Relayosa to the class of English 12.', '11', '57');
INSERT INTO `activities` VALUES ('4175', '2018-05-05 03:21:31', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4176', '2018-05-05 03:30:35', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4177', '2018-05-05 03:31:30', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4178', '2018-05-05 03:32:21', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4179', '2018-05-05 03:33:03', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4180', '2018-05-05 03:36:28', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4181', '2018-05-05 03:37:16', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4182', '2018-05-05 03:37:23', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4183', '2018-05-05 03:38:09', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4184', '2018-05-05 03:38:10', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4185', '2018-05-05 03:38:25', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4186', '2018-05-05 03:38:55', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4187', '2018-05-05 03:39:08', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4188', '2018-05-05 03:39:12', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4189', '2018-05-05 03:40:12', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4190', '2018-05-05 03:40:49', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4191', '2018-05-05 03:41:33', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4192', '2018-05-05 03:44:25', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4193', '2018-05-05 03:45:17', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4194', '2018-05-05 03:46:19', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4195', '2018-05-05 03:46:23', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4196', '2018-05-05 03:46:41', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4197', '2018-05-05 03:47:29', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4198', '2018-05-05 03:48:04', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4199', '2018-05-05 03:50:19', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4200', '2018-05-05 03:52:45', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4201', '2018-05-05 03:57:13', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4202', '2018-05-05 03:57:41', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4203', '2018-05-05 03:59:54', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4204', '2018-05-05 04:16:53', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4205', '2018-05-05 04:19:25', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4206', '2018-05-05 04:23:26', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4207', '2018-05-05 04:23:44', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4208', '2018-05-05 04:26:23', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4209', '2018-05-05 04:31:03', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4210', '2018-05-05 04:33:10', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4211', '2018-05-05 04:34:09', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4212', '2018-05-05 04:36:39', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4213', '2018-05-05 04:36:51', 'has taken an examination <strong class=\"orange\">New Examination</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '41');
INSERT INTO `activities` VALUES ('4214', '2018-05-05 04:37:49', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4215', '2018-05-05 04:38:10', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4216', '2018-05-05 04:38:12', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '58');
INSERT INTO `activities` VALUES ('4217', '2018-05-05 04:38:13', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4218', '2018-05-05 04:38:38', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4219', '2018-05-05 04:38:47', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4220', '2018-05-05 04:39:45', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4221', '2018-05-05 04:39:53', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4222', '2018-05-05 04:44:19', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4223', '2018-05-05 04:44:26', 'was set account to <strong class=\"green\">active</strong>.', '11', '58');
INSERT INTO `activities` VALUES ('4224', '2018-05-05 04:45:02', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4225', '2018-05-05 04:45:03', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4226', '2018-05-05 04:45:21', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4227', '2018-05-05 04:46:16', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4228', '2018-05-05 04:47:59', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4229', '2018-05-05 04:52:18', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4230', '2018-05-05 04:53:59', 'changes profile picture. <a href=\"viewprofile.php?refid=56&usertype=11\">Take a look.</a>', '111', '56');
INSERT INTO `activities` VALUES ('4231', '2018-05-05 04:55:00', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '58');
INSERT INTO `activities` VALUES ('4232', '2018-05-05 04:56:32', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4233', '2018-05-05 04:56:35', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4234', '2018-05-05 04:56:36', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4235', '2018-05-05 04:56:37', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4236', '2018-05-05 04:57:41', 'was set account to <strong class=\"green\">active</strong>.', '11', '58');
INSERT INTO `activities` VALUES ('4237', '2018-05-05 04:57:41', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '58');
INSERT INTO `activities` VALUES ('4238', '2018-05-05 04:57:42', 'was set account to <strong class=\"green\">active</strong>.', '11', '58');
INSERT INTO `activities` VALUES ('4239', '2018-05-05 04:58:07', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4240', '2018-05-05 04:58:23', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4241', '2018-05-05 04:58:27', 'was set account to <strong class=\"green\">active</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4242', '2018-05-05 04:58:45', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4243', '2018-05-05 05:03:26', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4244', '2018-05-05 05:03:31', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4245', '2018-05-05 05:11:54', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4246', '2018-05-05 05:12:16', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4247', '2018-05-05 05:12:20', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4248', '2018-05-05 05:13:35', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4249', '2018-05-05 05:13:41', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4250', '2018-05-05 05:13:45', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4251', '2018-05-05 05:13:58', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4252', '2018-05-05 05:17:28', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4253', '2018-05-05 05:19:01', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4254', '2018-05-05 05:23:03', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4255', '2018-05-05 05:23:07', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4256', '2018-05-05 05:23:26', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4257', '2018-05-05 05:23:29', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4258', '2018-05-05 05:26:38', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4259', '2018-05-05 05:26:39', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4260', '2018-05-05 05:28:05', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4261', '2018-05-05 05:28:38', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4262', '2018-05-05 05:29:36', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4263', '2018-05-05 05:32:25', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4264', '2018-05-05 05:33:31', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4265', '2018-05-05 05:33:33', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4266', '2018-05-05 05:34:40', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4267', '2018-05-05 05:34:42', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4268', '2018-05-05 05:35:00', 'accepted <a href=\"viewprofile.php?refid=41&usertype=111\">Adrian Paul Cuajao Adrian Paul</a> to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> class.', '11', '57');
INSERT INTO `activities` VALUES ('4269', '2018-05-05 05:35:00', 'was accepted on joining <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> class.', '111', '41');
INSERT INTO `activities` VALUES ('4270', '2018-05-05 05:35:30', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4271', '2018-05-05 05:35:55', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4272', '2018-05-05 06:16:17', 'has uploaded new file(s) to <a href=\"mycourse.php?class_code=G84YPL7P\">English 12</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4273', '2018-05-05 06:17:24', 'has added an announcement to <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4274', '2018-05-05 06:17:32', 'has deleted a(n) announcement <strong class=\"orange\">Announcement</strong> to <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4275', '2018-05-05 06:17:57', 'has deleted a(n) files <strong class=\"orange\">tnahsongasdk alsd; sak</strong> to <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4276', '2018-05-05 08:02:32', 'accepted <a href=\"viewprofile.php?refid=&usertype=111\">  </a> to join <a href=\"mycourse.php?classcode=Save This New Question +\"></a> class.', '11', '57');
INSERT INTO `activities` VALUES ('4277', '2018-05-05 08:03:31', 'accepted <a href=\"viewprofile.php?refid=&usertype=111\">  </a> to join <a href=\"mycourse.php?classcode=Save\"></a> class.', '11', '57');
INSERT INTO `activities` VALUES ('4278', '2018-05-05 08:04:42', 'accepted <a href=\"viewprofile.php?refid=&usertype=111\">  </a> to join <a href=\"mycourse.php?classcode=Save\"></a> class.', '11', '57');
INSERT INTO `activities` VALUES ('4279', '2018-05-05 11:42:48', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4280', '2018-05-05 11:42:48', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4281', '2018-05-05 11:42:50', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4282', '2018-05-05 11:42:55', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4283', '2018-05-05 11:42:57', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4284', '2018-05-05 11:43:14', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4285', '2018-05-05 11:45:38', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4286', '2018-05-05 11:46:49', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4287', '2018-05-05 11:52:49', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4288', '2018-05-05 11:55:04', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4289', '2018-05-05 12:06:38', 'successfully <strong class=\"green\">confirmed account registration</strong>.', '111', '160');
INSERT INTO `activities` VALUES ('4290', '2018-05-05 12:07:55', 'uploaded new photo as profile picture. <a href=\"viewprofile.php?refid=160&usertype=111\">Take a look.</a>', '111', '160');
INSERT INTO `activities` VALUES ('4291', '2018-05-05 12:07:56', 'updated personal information. <a href=\"viewprofile.php?refid=160&usertype=111\">Take a look.</a>', '111', '160');
INSERT INTO `activities` VALUES ('4292', '2018-05-05 21:47:50', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4293', '2018-05-05 21:48:07', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4294', '2018-05-05 21:48:08', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4295', '2018-05-05 21:48:09', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4296', '2018-05-05 21:48:10', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4297', '2018-05-05 21:48:11', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4298', '2018-05-05 21:48:11', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4299', '2018-05-05 21:48:12', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4300', '2018-05-05 21:48:12', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4301', '2018-05-05 21:48:28', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4302', '2018-05-05 21:49:55', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '42');
INSERT INTO `activities` VALUES ('4303', '2018-05-05 21:52:07', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4304', '2018-05-05 21:53:48', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '60');
INSERT INTO `activities` VALUES ('4305', '2018-05-05 21:56:20', 'successfully <strong class=\"green\">confirmed account registration</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4306', '2018-05-05 21:56:35', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4307', '2018-05-05 22:05:48', 'has added an examination <strong class=\"orange\">wdqdq</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4308', '2018-05-05 22:15:57', 'accepted <a href=\"viewprofile.php?refid=42&usertype=111\">Jhun Kinley Canales Jhun Kinley</a> to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> class.', '11', '57');
INSERT INTO `activities` VALUES ('4309', '2018-05-05 22:15:57', 'was accepted on joining <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> class.', '111', '42');
INSERT INTO `activities` VALUES ('4310', '2018-05-05 22:21:11', 'was set account to <strong class=\"green\">active</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4311', '2018-05-05 22:21:30', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4312', '2018-05-05 22:21:55', 'was set account to <strong class=\"green\">active</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4313', '2018-05-05 22:22:10', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4314', '2018-05-05 22:22:39', 'was set account to <strong class=\"green\">active</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4315', '2018-05-05 22:23:00', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4316', '2018-05-05 22:24:52', 'was set account to <strong class=\"green\">active</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4317', '2018-05-05 22:25:06', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4318', '2018-05-05 22:28:21', 'was set account to <strong class=\"green\">active</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4319', '2018-05-05 22:28:36', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4320', '2018-05-05 22:30:52', 'was set account to <strong class=\"green\">active</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4321', '2018-05-05 22:33:53', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4322', '2018-05-05 22:36:16', 'was set account to <strong class=\"green\">active</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4323', '2018-05-05 22:38:00', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4324', '2018-05-05 22:42:12', 'has added an announcement to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4325', '2018-05-05 22:46:26', 'was set account to <strong class=\"green\">active</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4326', '2018-05-05 22:46:42', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4327', '2018-05-05 22:58:33', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4328', '2018-05-05 23:00:16', 'was set account to <strong class=\"green\">active</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4329', '2018-05-05 23:06:16', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4330', '2018-05-05 23:06:50', 'was set account to <strong class=\"green\">active</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4331', '2018-05-05 23:10:24', 'was set account to <strong class=\"green\">active</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4332', '2018-05-05 23:24:06', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4333', '2018-05-05 23:30:51', 'was set account to <strong class=\"green\">active</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4334', '2018-05-05 23:32:06', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4335', '2018-05-05 23:51:20', 'was set account to <strong class=\"green\">active</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4336', '2018-05-05 23:53:03', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4337', '2018-05-05 23:53:32', 'was set account to <strong class=\"green\">active</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4338', '2018-05-05 23:55:00', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4339', '2018-05-05 23:56:53', 'was set account to <strong class=\"green\">active</strong>.', '11', '63');
INSERT INTO `activities` VALUES ('4340', '2018-05-06 00:07:10', 'successfully <strong class=\"green\">confirmed account registration</strong>.', '11', '64');
INSERT INTO `activities` VALUES ('4341', '2018-05-06 00:16:06', 'successfully <strong class=\"green\">confirmed account registration</strong>.', '111', '161');
INSERT INTO `activities` VALUES ('4342', '2018-05-06 00:17:47', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '161');
INSERT INTO `activities` VALUES ('4343', '2018-05-06 00:19:44', 'was set account to <strong class=\"green\">active</strong>.', '111', '161');
INSERT INTO `activities` VALUES ('4344', '2018-05-06 00:19:48', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '160');
INSERT INTO `activities` VALUES ('4345', '2018-05-06 00:23:03', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4346', '2018-05-06 00:23:20', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4347', '2018-05-06 00:25:02', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4348', '2018-05-06 00:25:16', 'was set account to <strong class=\"green\">active</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4349', '2018-05-06 00:25:37', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '161');
INSERT INTO `activities` VALUES ('4350', '2018-05-06 00:25:43', 'was set account to <strong class=\"green\">active</strong>.', '111', '161');
INSERT INTO `activities` VALUES ('4351', '2018-05-06 00:26:40', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4352', '2018-05-06 00:27:16', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4353', '2018-05-06 00:27:35', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4354', '2018-05-06 00:28:37', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4355', '2018-05-06 00:28:48', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4356', '2018-05-06 00:29:45', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4357', '2018-05-06 01:18:37', 'updated personal information. <a href=\"viewprofile.php?refid=58&usertype=11\">Take a look.</a>', '11', '58');
INSERT INTO `activities` VALUES ('4358', '2018-05-06 01:19:28', 'updated personal information. <a href=\"viewprofile.php?refid=58&usertype=11\">Take a look.</a>', '11', '58');
INSERT INTO `activities` VALUES ('4359', '2018-05-06 01:33:31', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4360', '2018-05-06 01:41:18', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4361', '2018-05-06 01:41:22', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4362', '2018-05-06 01:41:24', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '41');
INSERT INTO `activities` VALUES ('4363', '2018-05-06 01:59:16', 'accepted <a href=\"viewprofile.php?refid=&usertype=111\">  </a> to join <a href=\"mycourse.php?classcode=Save This New Question +\"></a> class.', '11', '57');
INSERT INTO `activities` VALUES ('4364', '2018-05-06 02:03:47', 'accepted <a href=\"viewprofile.php?refid=&usertype=111\">  </a> to join <a href=\"mycourse.php?classcode=Save This New Question +\"></a> class.', '11', '57');
INSERT INTO `activities` VALUES ('4365', '2018-05-06 02:05:01', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4366', '2018-05-06 02:05:55', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4367', '2018-05-06 02:06:28', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4368', '2018-05-06 02:06:32', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4369', '2018-05-06 02:07:34', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4370', '2018-05-06 02:07:52', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4371', '2018-05-06 02:08:09', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4372', '2018-05-06 02:08:46', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4373', '2018-05-06 02:10:08', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4374', '2018-05-06 02:11:12', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4375', '2018-05-06 02:11:43', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '42');
INSERT INTO `activities` VALUES ('4376', '2018-05-06 02:11:59', 'accepted <a href=\"viewprofile.php?refid=41&usertype=111\">Adrian Paul Cuajao Adrian Paul</a> to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a> class.', '11', '57');
INSERT INTO `activities` VALUES ('4377', '2018-05-06 02:11:59', 'was accepted on joining <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a> class.', '111', '41');
INSERT INTO `activities` VALUES ('4378', '2018-05-06 02:12:53', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4379', '2018-05-06 02:13:13', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4380', '2018-05-06 02:14:28', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '44');
INSERT INTO `activities` VALUES ('4381', '2018-05-06 02:14:39', 'was set account to <strong class=\"green\">active</strong>.', '111', '44');
INSERT INTO `activities` VALUES ('4382', '2018-05-06 02:16:17', 'was set account to <strong class=\"green\">active</strong>.', '111', '42');
INSERT INTO `activities` VALUES ('4383', '2018-05-06 02:16:26', 'was set account to <strong class=\"green\">active</strong>.', '111', '42');
INSERT INTO `activities` VALUES ('4384', '2018-05-06 02:17:43', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '42');
INSERT INTO `activities` VALUES ('4385', '2018-05-06 02:18:03', 'was set account to <strong class=\"green\">active</strong>.', '111', '42');
INSERT INTO `activities` VALUES ('4386', '2018-05-06 02:19:40', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4387', '2018-05-06 02:28:36', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '42');
INSERT INTO `activities` VALUES ('4388', '2018-05-06 02:32:17', 'was set account to <strong class=\"green\">active</strong>.', '111', '42');
INSERT INTO `activities` VALUES ('4389', '2018-05-06 02:34:11', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4390', '2018-05-06 02:36:01', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4391', '2018-05-06 02:36:08', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4392', '2018-05-06 02:36:26', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4393', '2018-05-06 02:38:44', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4394', '2018-05-06 02:38:54', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4395', '2018-05-06 02:39:58', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4396', '2018-05-06 02:40:27', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4397', '2018-05-06 02:47:33', 'successfully <strong class=\"green\">confirmed account registration</strong>.', '11', '62');
INSERT INTO `activities` VALUES ('4398', '2018-05-06 02:56:25', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4399', '2018-05-06 02:57:18', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4400', '2018-05-06 02:58:09', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4401', '2018-05-06 02:58:35', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4402', '2018-05-06 02:58:54', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4403', '2018-05-06 02:59:34', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4404', '2018-05-06 02:59:44', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4405', '2018-05-06 03:00:01', 'was set account to <strong class=\"red\">inactive</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4406', '2018-05-06 03:00:23', 'was set account to <strong class=\"green\">active</strong>.', '11', '56');
INSERT INTO `activities` VALUES ('4407', '2018-05-06 03:43:55', 'updated personal information. <a href=\"viewprofile.php?refid=56&usertype=11\">Take a look.</a>', '11', '56');
INSERT INTO `activities` VALUES ('4408', '2018-05-06 03:52:04', 'has added an examination <strong class=\"orange\">sdfsd</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4409', '2018-05-06 03:52:43', 'has added an announcement to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4410', '2018-05-06 03:52:50', 'has deleted a(n) announcement <strong class=\"orange\">Announcement</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4411', '2018-05-06 04:15:50', 'has added an examination <strong class=\"orange\">sdfsd</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4412', '2018-05-06 04:17:14', 'was set account to <strong class=\"green\">active</strong>.', '111', '41');
INSERT INTO `activities` VALUES ('4413', '2018-05-06 04:19:23', 'was set account to <strong class=\"green\">active</strong>.', '11', '57');
INSERT INTO `activities` VALUES ('4414', '2018-05-06 04:19:30', 'was set account to <strong class=\"green\">active</strong>.', '111', '160');
INSERT INTO `activities` VALUES ('4415', '2018-05-06 04:19:34', 'successfully <strong class=\"green\">confirmed account registration.</strong>.', '111', '162');
INSERT INTO `activities` VALUES ('4416', '2018-05-06 04:21:04', 'has added an announcement to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4417', '2018-05-06 04:32:27', 'has added an examination <strong class=\"orange\">sdfsd</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4418', '2018-05-06 04:34:31', 'has deleted a(n) announcement <strong class=\"orange\">Announcement</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4419', '2018-05-06 04:34:35', 'has deleted a(n) exam <strong class=\"orange\">sdfsd</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4420', '2018-05-06 04:34:38', 'has deleted a(n) announcement <strong class=\"orange\">Announcement</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4421', '2018-05-06 04:34:41', 'has deleted a(n) exam <strong class=\"orange\">wdqdq</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4422', '2018-05-06 04:34:43', 'has deleted a(n) link <strong class=\"orange\"></strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4423', '2018-05-06 04:34:45', 'has deleted a(n) link <strong class=\"orange\"></strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4424', '2018-05-06 04:53:13', 'has taken an examination <strong class=\"orange\">sdfsd</strong> from <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '111', '42');
INSERT INTO `activities` VALUES ('4425', '2018-05-06 04:54:12', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '162');
INSERT INTO `activities` VALUES ('4426', '2018-05-06 05:01:23', 'has requested to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a>.', '111', '162');
INSERT INTO `activities` VALUES ('4427', '2018-05-06 05:22:59', 'accepted <a href=\"viewprofile.php?refid=162&usertype=111\">Ruby Mae Canales Ruby Mae</a> to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> class.', '11', '57');
INSERT INTO `activities` VALUES ('4428', '2018-05-06 05:22:59', 'was accepted on joining <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> class.', '111', '162');
INSERT INTO `activities` VALUES ('4429', '2018-05-06 05:27:18', 'has added an announcement to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4430', '2018-05-06 05:28:22', 'was set account to <strong class=\"red\">inactive</strong>.', '111', '162');
INSERT INTO `activities` VALUES ('4431', '2018-05-06 05:28:36', 'was set account to <strong class=\"green\">active</strong>.', '111', '162');
INSERT INTO `activities` VALUES ('4432', '2018-05-06 05:31:12', 'has added an announcement to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4433', '2018-05-06 05:34:10', 'accepted <a href=\"viewprofile.php?refid=162&usertype=111\">Ruby Mae Canales Ruby Mae</a> to join <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a> class.', '11', '57');
INSERT INTO `activities` VALUES ('4434', '2018-05-06 05:34:10', 'was accepted on joining <a href=\"mycourse.php?classcode=G84YPL7P\">English 12</a> class.', '111', '162');
INSERT INTO `activities` VALUES ('4435', '2018-05-06 05:37:17', 'has deleted a(n) announcement <strong class=\"orange\">Announcement</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4436', '2018-05-06 05:37:19', 'has deleted a(n) announcement <strong class=\"orange\">Announcement</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4437', '2018-05-06 05:37:21', 'has deleted a(n) announcement <strong class=\"orange\">Announcement</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4438', '2018-05-06 05:37:23', 'has deleted a(n) announcement <strong class=\"orange\">Announcement</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4439', '2018-05-06 05:37:29', 'has deleted a(n) exam <strong class=\"orange\">sdfsd</strong> to <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a> course.', '11', '57');
INSERT INTO `activities` VALUES ('4440', '2018-05-06 05:42:53', 'has requested to join <a href=\"mycourse.php?classcode=G7N2H16O\">Algebra</a>.', '111', '41');

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
INSERT INTO `courses` VALUES ('G84YPL7P', '57', 'English 12', 'Eng 12', '', 'Active', '2018-05-04');

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
) ENGINE=InnoDB AUTO_INCREMENT=1654 DEFAULT CHARSET=latin1;

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
INSERT INTO `enrolled_students` VALUES ('1638', '0', 'Save This New Questi', '2018-05-04', '0');
INSERT INTO `enrolled_students` VALUES ('1639', '0', 'Save This New Questi', '2018-05-04', '0');
INSERT INTO `enrolled_students` VALUES ('1640', '0', 'Save This New Questi', '2018-05-04', '0');
INSERT INTO `enrolled_students` VALUES ('1641', '41', 'G7N2H16O', '2018-05-04', '2763');
INSERT INTO `enrolled_students` VALUES ('1642', '41', 'G8AMPT1T', '2018-05-04', '0');
INSERT INTO `enrolled_students` VALUES ('1643', '41', 'G84YPL7P', '2018-05-04', '0');
INSERT INTO `enrolled_students` VALUES ('1644', '41', 'G7N2H16O', '2018-05-04', '2829');
INSERT INTO `enrolled_students` VALUES ('1645', '0', 'Save This New Questi', '2018-05-05', '0');
INSERT INTO `enrolled_students` VALUES ('1646', '0', 'Save', '2018-05-05', '0');
INSERT INTO `enrolled_students` VALUES ('1647', '0', 'Save', '2018-05-05', '0');
INSERT INTO `enrolled_students` VALUES ('1648', '42', 'G7N2H16O', '2018-05-05', '1');
INSERT INTO `enrolled_students` VALUES ('1649', '0', 'Save This New Questi', '2018-05-05', '0');
INSERT INTO `enrolled_students` VALUES ('1650', '0', 'Save This New Questi', '2018-05-05', '0');
INSERT INTO `enrolled_students` VALUES ('1651', '41', 'G84YPL7P', '2018-05-05', '4');
INSERT INTO `enrolled_students` VALUES ('1652', '162', 'G7N2H16O', '2018-05-05', '5');
INSERT INTO `enrolled_students` VALUES ('1653', '162', 'G84YPL7P', '2018-05-05', '6');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exams
-- ----------------------------

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
  `question_points` int(8) DEFAULT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exam_details
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exam_results
-- ----------------------------
INSERT INTO `exam_results` VALUES ('1', '2', '42', '8', '7');

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
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exam_result_details
-- ----------------------------
INSERT INTO `exam_result_details` VALUES ('1', '16', '0', '1');
INSERT INTO `exam_result_details` VALUES ('2', '17', '0', '1');
INSERT INTO `exam_result_details` VALUES ('3', '18', '0', '1');
INSERT INTO `exam_result_details` VALUES ('4', '17', '0', '2');
INSERT INTO `exam_result_details` VALUES ('5', '16', '0', '2');
INSERT INTO `exam_result_details` VALUES ('6', '18', '0', '2');
INSERT INTO `exam_result_details` VALUES ('7', '17', '0', '3');
INSERT INTO `exam_result_details` VALUES ('8', '16', '0', '3');
INSERT INTO `exam_result_details` VALUES ('9', '18', '0', '3');
INSERT INTO `exam_result_details` VALUES ('10', '17', '0', '4');
INSERT INTO `exam_result_details` VALUES ('11', '16', '0', '4');
INSERT INTO `exam_result_details` VALUES ('12', '18', '0', '4');
INSERT INTO `exam_result_details` VALUES ('13', '17', '0', '5');
INSERT INTO `exam_result_details` VALUES ('14', '16', '0', '5');
INSERT INTO `exam_result_details` VALUES ('15', '18', '0', '5');
INSERT INTO `exam_result_details` VALUES ('16', '17', '0', '6');
INSERT INTO `exam_result_details` VALUES ('17', '16', '0', '6');
INSERT INTO `exam_result_details` VALUES ('18', '18', '0', '6');
INSERT INTO `exam_result_details` VALUES ('19', '16', '0', '7');
INSERT INTO `exam_result_details` VALUES ('20', '18', '0', '7');
INSERT INTO `exam_result_details` VALUES ('21', '17', '0', '7');
INSERT INTO `exam_result_details` VALUES ('22', '17', '0', '8');
INSERT INTO `exam_result_details` VALUES ('23', '18', '0', '8');
INSERT INTO `exam_result_details` VALUES ('24', '16', '0', '8');
INSERT INTO `exam_result_details` VALUES ('25', '10', '0', '9');
INSERT INTO `exam_result_details` VALUES ('26', '13', '0', '9');
INSERT INTO `exam_result_details` VALUES ('27', '16', '0', '9');
INSERT INTO `exam_result_details` VALUES ('28', '18', '0', '9');
INSERT INTO `exam_result_details` VALUES ('29', '17', '0', '9');
INSERT INTO `exam_result_details` VALUES ('30', '10', '0', '10');
INSERT INTO `exam_result_details` VALUES ('31', '13', '0', '10');
INSERT INTO `exam_result_details` VALUES ('32', '16', '0', '10');
INSERT INTO `exam_result_details` VALUES ('33', '18', '0', '10');
INSERT INTO `exam_result_details` VALUES ('34', '17', '0', '10');
INSERT INTO `exam_result_details` VALUES ('35', '10', '0', '11');
INSERT INTO `exam_result_details` VALUES ('36', '13', '0', '11');
INSERT INTO `exam_result_details` VALUES ('37', '16', '0', '11');
INSERT INTO `exam_result_details` VALUES ('38', '18', '0', '11');
INSERT INTO `exam_result_details` VALUES ('39', '17', '0', '11');
INSERT INTO `exam_result_details` VALUES ('40', '10', '0', '12');
INSERT INTO `exam_result_details` VALUES ('41', '13', '0', '12');
INSERT INTO `exam_result_details` VALUES ('42', '16', '0', '12');
INSERT INTO `exam_result_details` VALUES ('43', '18', '0', '12');
INSERT INTO `exam_result_details` VALUES ('44', '17', '0', '12');
INSERT INTO `exam_result_details` VALUES ('45', '14', '0', '13');
INSERT INTO `exam_result_details` VALUES ('46', '18', '0', '13');
INSERT INTO `exam_result_details` VALUES ('47', '13', '0', '13');
INSERT INTO `exam_result_details` VALUES ('48', '16', '0', '13');
INSERT INTO `exam_result_details` VALUES ('49', '17', '1', '13');
INSERT INTO `exam_result_details` VALUES ('50', '14', '0', '14');
INSERT INTO `exam_result_details` VALUES ('51', '18', '0', '14');
INSERT INTO `exam_result_details` VALUES ('52', '13', '0', '14');
INSERT INTO `exam_result_details` VALUES ('53', '16', '0', '14');
INSERT INTO `exam_result_details` VALUES ('54', '17', '1', '14');
INSERT INTO `exam_result_details` VALUES ('55', '13', '1', '15');
INSERT INTO `exam_result_details` VALUES ('56', '16', '0', '15');
INSERT INTO `exam_result_details` VALUES ('57', '18', '0', '15');
INSERT INTO `exam_result_details` VALUES ('58', '17', '0', '15');
INSERT INTO `exam_result_details` VALUES ('59', '10', '1', '15');
INSERT INTO `exam_result_details` VALUES ('60', '13', '1', '16');
INSERT INTO `exam_result_details` VALUES ('61', '16', '0', '16');
INSERT INTO `exam_result_details` VALUES ('62', '18', '0', '16');
INSERT INTO `exam_result_details` VALUES ('63', '17', '0', '16');
INSERT INTO `exam_result_details` VALUES ('64', '10', '1', '16');
INSERT INTO `exam_result_details` VALUES ('65', '13', '1', '17');
INSERT INTO `exam_result_details` VALUES ('66', '16', '0', '17');
INSERT INTO `exam_result_details` VALUES ('67', '18', '0', '17');
INSERT INTO `exam_result_details` VALUES ('68', '17', '0', '17');
INSERT INTO `exam_result_details` VALUES ('69', '10', '1', '17');
INSERT INTO `exam_result_details` VALUES ('70', '16', '0', '18');
INSERT INTO `exam_result_details` VALUES ('71', '18', '0', '18');
INSERT INTO `exam_result_details` VALUES ('72', '17', '0', '18');
INSERT INTO `exam_result_details` VALUES ('73', '16', '0', '19');
INSERT INTO `exam_result_details` VALUES ('74', '17', '0', '19');
INSERT INTO `exam_result_details` VALUES ('75', '18', '0', '19');
INSERT INTO `exam_result_details` VALUES ('76', '16', '0', '20');
INSERT INTO `exam_result_details` VALUES ('77', '17', '0', '20');
INSERT INTO `exam_result_details` VALUES ('78', '18', '0', '20');
INSERT INTO `exam_result_details` VALUES ('79', '56', '1', '1');
INSERT INTO `exam_result_details` VALUES ('80', '54', '0', '1');
INSERT INTO `exam_result_details` VALUES ('81', '33', '1', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of file_details
-- ----------------------------
INSERT INTO `file_details` VALUES ('3', '3', 'New Examination', '1');

-- ----------------------------
-- Table structure for `grades`
-- ----------------------------
DROP TABLE IF EXISTS `grades`;
CREATE TABLE `grades` (
  `grade_id` int(8) NOT NULL AUTO_INCREMENT,
  `grade_desc` text,
  `date_upload` datetime DEFAULT NULL,
  `class_code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`grade_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of grades
-- ----------------------------
INSERT INTO `grades` VALUES ('1', 'asdasd', '2018-05-04 23:00:54', 'G84YPL7P');
INSERT INTO `grades` VALUES ('2', 'asdasd', '2018-05-04 23:02:21', 'G84YPL7P');

-- ----------------------------
-- Table structure for `grade_details`
-- ----------------------------
DROP TABLE IF EXISTS `grade_details`;
CREATE TABLE `grade_details` (
  `grade_id_details` int(8) NOT NULL AUTO_INCREMENT,
  `grade_id` int(8) DEFAULT NULL,
  `student_uname` varchar(255) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`grade_id_details`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of grade_details
-- ----------------------------
INSERT INTO `grade_details` VALUES ('1', '2', 'tanshong', '79');
INSERT INTO `grade_details` VALUES ('2', '2', 'lianto', '65');
INSERT INTO `grade_details` VALUES ('3', '2', 'pangag', '75');

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
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of inactive_accounts
-- ----------------------------
INSERT INTO `inactive_accounts` VALUES ('12', '11', '60', '2');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of posts
-- ----------------------------

-- ----------------------------
-- Table structure for `post_details`
-- ----------------------------
DROP TABLE IF EXISTS `post_details`;
CREATE TABLE `post_details` (
  `posts_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_no` int(11) NOT NULL,
  `student_account_no` int(11) NOT NULL,
  PRIMARY KEY (`posts_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of post_details
-- ----------------------------
INSERT INTO `post_details` VALUES ('1', '11', '42');
INSERT INTO `post_details` VALUES ('2', '13', '42');
INSERT INTO `post_details` VALUES ('3', '13', '41');
INSERT INTO `post_details` VALUES ('4', '13', '41');
INSERT INTO `post_details` VALUES ('5', '13', '42');
INSERT INTO `post_details` VALUES ('7', '14', '42');
INSERT INTO `post_details` VALUES ('8', '14', '41');
INSERT INTO `post_details` VALUES ('9', '14', '41');
INSERT INTO `post_details` VALUES ('10', '14', '42');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of students_request
-- ----------------------------
INSERT INTO `students_request` VALUES ('7', '57', '41', 'G7N2H16O', '2018-05-05', 'Unconfirmed');
