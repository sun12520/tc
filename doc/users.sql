/*
Navicat MySQL Data Transfer

Source Server         : 10.176.40.132_xiangyang
Source Server Version : 50158
Source Host           : 10.176.40.132:3306
Source Database       : tccenter

Target Server Type    : MYSQL
Target Server Version : 50158
File Encoding         : 65001

Date: 2014-07-25 16:36:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `pic` blob,
  `phone` int(11) DEFAULT NULL,
  `reg_date` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `tag_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
