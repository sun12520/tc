/*
Navicat MySQL Data Transfer

Source Server         : 10.176.40.132_xiangyang
Source Server Version : 50158
Source Host           : 10.176.40.132:3306
Source Database       : tccenter

Target Server Type    : MYSQL
Target Server Version : 50158
File Encoding         : 65001

Date: 2014-07-25 16:35:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `classify`
-- ----------------------------
DROP TABLE IF EXISTS `classify`;
CREATE TABLE `classify` (
  `classify_id` int(11) NOT NULL AUTO_INCREMENT,
  `type1` varchar(255) NOT NULL,
  `type2` varchar(255) NOT NULL,
  `type3` varchar(255) DEFAULT NULL,
  `type4` varchar(255) DEFAULT NULL,
  `cla_date` int(11) NOT NULL,
  PRIMARY KEY (`classify_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of classify
-- ----------------------------
