/*
Navicat MySQL Data Transfer

Source Server         : 10.176.40.132_xiangyang
Source Server Version : 50158
Source Host           : 10.176.40.132:3306
Source Database       : tccenter

Target Server Type    : MYSQL
Target Server Version : 50158
File Encoding         : 65001

Date: 2014-07-21 17:40:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `keyword`
-- ----------------------------
DROP TABLE IF EXISTS `keyword`;
CREATE TABLE `keyword` (
  `keyword_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `con_ass` varchar(255) NOT NULL,
  PRIMARY KEY (`keyword_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of keyword
-- ----------------------------
