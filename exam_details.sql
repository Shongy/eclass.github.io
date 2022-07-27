/*
Navicat MySQL Data Transfer

Source Server         : cmue-class
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : cmueclass_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-19 21:00:16
*/

SET FOREIGN_KEY_CHECKS=0;

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
) ENGINE=InnoDB AUTO_INCREMENT=260 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exam_details
-- ----------------------------
INSERT INTO `exam_details` VALUES ('13', 'tof', '226', '<p>aasd</p>', '4', 'True', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('13', 'multiple', '233', '', '9', null, null, null, null, null, null, '', '', '', '', '', null);
INSERT INTO `exam_details` VALUES ('13', 'enumeration', '249', '<p><br /></p>', '10', '', '', '', '', '', null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('13', 'identification', '252', '<p><br /></p>', '13', '', '', '', null, null, null, null, null, null, null, null, null);
INSERT INTO `exam_details` VALUES ('13', 'multiple', '257', '<p><br /></p>', '14', null, null, null, null, null, null, 'as', 'as', '', '', '', null);
INSERT INTO `exam_details` VALUES ('13', 'enumeration', '258', '<p><br /></p>', '15', 'das', 'das', '', '', '', null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `exams`
-- ----------------------------
DROP TABLE IF EXISTS `exams`;
CREATE TABLE `exams` (
  `exam_no` int(8) NOT NULL AUTO_INCREMENT,
  `exam_name` varchar(255) DEFAULT NULL,
  `class_code` varchar(255) DEFAULT NULL,
  `exam_description` text,
  `time_limit` int(11) DEFAULT NULL,
  `exam_date` datetime DEFAULT NULL,
  `exam_password` varchar(50) DEFAULT NULL,
  `availability` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  PRIMARY KEY (`exam_no`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exams
-- ----------------------------
INSERT INTO `exams` VALUES ('1', 'Practical Exam', 'CLSD58P1I', 'tanshong', null, null, null, null, null, null);
INSERT INTO `exams` VALUES ('2', 'Midterm Exam', 'CLS9N2H16', 'Thiss asd', null, null, null, null, null, null);
INSERT INTO `exams` VALUES ('3', 'sfs', 'CLS9N2H16', '', null, null, null, null, null, null);
INSERT INTO `exams` VALUES ('4', 'Physical Exam', 'CLS2XT3NV', 'Answer it', null, null, null, null, null, null);
INSERT INTO `exams` VALUES ('5', 'regal', 'CLS2XT3NV', 'asd', null, null, null, null, null, null);
INSERT INTO `exams` VALUES ('6', 'tanshong', 'CLS2XT3NV', 'd', null, null, null, null, null, null);
INSERT INTO `exams` VALUES ('7', 'tanshonnnnngg', 'CLS2XT3NV', 'dd', null, null, null, null, null, null);
INSERT INTO `exams` VALUES ('8', 'Midterm Exam', 'CLS2XT3NV', 'tans', null, null, null, null, null, null);
INSERT INTO `exams` VALUES ('9', 'FINAL EXAM', 'CLS2XT3NV', '', null, null, null, null, null, null);
INSERT INTO `exams` VALUES ('10', 'asd', 'CLS2XT3NV', 'dsa', null, null, null, null, null, null);
INSERT INTO `exams` VALUES ('11', 'my exam', 'CLS2XT3NV', '', null, null, null, null, null, null);
INSERT INTO `exams` VALUES ('12', 'FINAL EXAM', 'CLS2XT3NV', '', null, null, null, null, null, null);
INSERT INTO `exams` VALUES ('13', 'MIDTERM EXAM', 'CLS2XT3NV', '', '0', '0000-00-00 00:00:00', 'tanshong', 'yes', '0000-00-00', '0000-00-00');

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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

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
