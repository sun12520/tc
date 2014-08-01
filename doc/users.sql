/*
Navicat MySQL Data Transfer

Source Server         : 10.176.40.132_xiangyang
Source Server Version : 50158
Source Host           : 10.176.40.132:3306
Source Database       : tccenter

Target Server Type    : MYSQL
Target Server Version : 50158
File Encoding         : 65001

Date: 2014-08-01 09:50:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` char(255) NOT NULL,
  `passwd` char(255) NOT NULL,
  `email` char(255) DEFAULT NULL,
  `pic` blob,
  `phone` int(11) DEFAULT NULL,
  `reg_date` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `tag_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'sunquan', 'aaaaaa', '', '', '0', '1406511606', '1', '');
INSERT INTO `users` VALUES ('2', 'andy', 'aaaaaa', '', '', '0', '1406515107', '1', '');
INSERT INTO `users` VALUES ('3', 'sq', 'aaaaaa', '', '', '0', '1406529051', '1', '');
INSERT INTO `users` VALUES ('4', 'ffff', 'aaa', '', '', '0', '1406529108', '1', '');
INSERT INTO `users` VALUES ('5', '0', '0', '', '', '0', '1406530088', '1', '');
INSERT INTO `users` VALUES ('6', 'ccccc', 'aaaaaa', '', '', '0', '1406530099', '1', '');
