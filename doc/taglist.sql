/*
Navicat MySQL Data Transfer

Source Server         : 10.176.40.132_xiangyang
Source Server Version : 50158
Source Host           : 10.176.40.132:3306
Source Database       : tccenter

Target Server Type    : MYSQL
Target Server Version : 50158
File Encoding         : 65001

Date: 2014-08-01 09:50:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `taglist`
-- ----------------------------
DROP TABLE IF EXISTS `taglist`;
CREATE TABLE `taglist` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` char(255) NOT NULL,
  `num` int(11) NOT NULL,
  `tag_type` int(11) NOT NULL,
  `item_type_id` int(11) NOT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of taglist
-- ----------------------------
