/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50622
 Source Host           : localhost
 Source Database       : yii2-workshop-day2

 Target Server Type    : MySQL
 Target Server Version : 50622
 File Encoding         : utf-8

 Date: 06/30/2015 17:02:41 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `blog`
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส',
  `title` varchar(255) DEFAULT NULL COMMENT 'ชื่อเรื่อง',
  `detail` varchar(255) DEFAULT NULL COMMENT 'รายละเอียด',
  `publish` int(11) DEFAULT NULL COMMENT 'เผยแพร่',
  `created_at` int(11) DEFAULT NULL COMMENT 'สร้างวันที่',
  `updated_at` int(11) DEFAULT NULL COMMENT 'ปรับปรุงวันที่',
  `created_by` int(11) DEFAULT NULL COMMENT 'สร้างโดย',
  `updated_by` int(11) DEFAULT NULL COMMENT 'แก้ไขโดย',
  `tag` varchar(255) DEFAULT NULL COMMENT 'คำค้น',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `blog`
-- ----------------------------
BEGIN;
INSERT INTO `blog` VALUES ('1', 'การสร้างฟอร์ม CRUD', 'การสร้างฟอร์ม CRUD เนื้อหา', null, null, null, null, null, 'crud'), ('4', 'การสร้างฟอร์ม CRUD 4', '', null, null, null, null, null, ''), ('5', 'การสร้างฟอร์ม CRUD 5', 'การสร้างฟอร์ม CRUD 5', null, null, null, null, null, ''), ('6', 'sdf', 'sdf', null, '1435648847', '1435648847', null, null, ''), ('7', 'sdf', 'sdf', null, '1435649142', '1435649142', '100', '100', ''), ('8', '', '', null, '1435652526', '1435652526', '100', '100', ''), ('9', 'sdf', 'sdf', '1', '1435653881', '1435653881', '100', '100', '234234');
COMMIT;

-- ----------------------------
--  Table structure for `employee`
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `sex` tinyint(1) DEFAULT NULL COMMENT 'เพศ',
  `title` varchar(50) DEFAULT NULL COMMENT 'คำนำหน้า',
  `name` varchar(100) DEFAULT NULL COMMENT 'ชื่อ',
  `surname` varchar(100) DEFAULT NULL COMMENT 'นามสกุล',
  `address` text COMMENT 'ที่อยู่',
  `zip_code` varchar(10) DEFAULT NULL COMMENT 'รหัสไปรษณีย์',
  `birthday` date DEFAULT NULL COMMENT 'วันเกิด',
  `email` varchar(100) DEFAULT NULL COMMENT 'อีเมล์',
  `mobile_phone` varchar(20) DEFAULT NULL COMMENT 'เบอร์มือถือ',
  `modify_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'แก้ไขวันที่',
  `create_date` datetime DEFAULT NULL COMMENT 'สร้างวันที่',
  `position` varchar(150) DEFAULT NULL COMMENT 'ตำแหน่งงาน',
  `salary` int(11) DEFAULT NULL COMMENT 'เงินเดือน',
  `expire_date` date DEFAULT NULL COMMENT 'วันที่ลาออก',
  `website` varchar(150) DEFAULT NULL,
  `skill` varchar(255) DEFAULT 'ความสามารถ',
  `countries` varchar(10) DEFAULT NULL COMMENT 'ประเทศ',
  `age` int(11) DEFAULT NULL COMMENT 'อายุ',
  `experience` varchar(10) DEFAULT NULL COMMENT 'ประสบการณ์การทำงาน',
  `personal_id` varchar(20) DEFAULT '20' COMMENT 'เลขที่บัตรประชาชน',
  `marital` int(11) DEFAULT NULL COMMENT 'สถานนะภาพการสมรส',
  `province` varchar(6) DEFAULT NULL COMMENT 'จังหวัด',
  `amphur` varchar(6) DEFAULT NULL COMMENT 'อำเภอ',
  `district` varchar(6) DEFAULT NULL COMMENT 'ตำบล',
  `social` varchar(150) DEFAULT NULL COMMENT 'ใช้ social network อะไรบ้าง',
  `resume` varchar(100) DEFAULT NULL COMMENT 'ไฟล์ resume',
  `token_forupload` varchar(100) DEFAULT NULL,
  `count_download_resume` int(11) DEFAULT NULL COMMENT 'นับจำนวนที่ download resume',
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `employee`
-- ----------------------------
BEGIN;
INSERT INTO `employee` VALUES ('1', '1', 'นาย', 'สาธิต', 'สีถาพล', '44/54 ม.2 หมู่บ้านกัลยารัตน์ 3 ถนน ชาตะผดุง', '40000', '1984-02-19', 'dixonsatit@gmail.com', '09-1419-2801', '2015-03-20 10:32:48', '2015-03-20 01:26:04', 'นักวิชาการคอมพิวเตอร์', '73000', null, 'http://www.dimpled.me', 'Objective C,PHP,SQL,FoxPro,ASP', 'TH', '31', '7 ปี', '7474747474774', '2', '28', '393', '3491', 'facebook,twiter,google+', '8cc147dfb163f6c57a1f9b5a6853a091.pdf', 'iOOxVkSwrurplsO0DicB-K', '2');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
