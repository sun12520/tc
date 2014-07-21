/*
Navicat MySQL Data Transfer

Source Server         : 10.176.40.132_xiangyang
Source Server Version : 50158
Source Host           : 10.176.40.132:3306
Source Database       : tccenter

Target Server Type    : MYSQL
Target Server Version : 50158
File Encoding         : 65001

Date: 2014-07-21 17:39:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `assess`
-- ----------------------------
DROP TABLE IF EXISTS `assess`;
CREATE TABLE `assess` (
  `assess_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` char(24) NOT NULL,
  `price` float NOT NULL,
  `location` char(255) NOT NULL,
  `pic` blob NOT NULL,
  `pic_type` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `tag` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `key_id` int(11) NOT NULL,
  `ci_date` int(11) NOT NULL,
  `review_date` int(11) DEFAULT NULL,
  `review_content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`assess_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of assess
-- ----------------------------
