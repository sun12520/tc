/*
Navicat MySQL Data Transfer

Source Server         : 10.176.40.132_xiangyang
Source Server Version : 50158
Source Host           : 10.176.40.132:3306
Source Database       : tccenter

Target Server Type    : MYSQL
Target Server Version : 50158
File Encoding         : 65001

Date: 2014-07-25 16:35:39
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
  `pzPicPath` varchar(255) NOT NULL,
  `pzType` int(11) NOT NULL,
  `Content` varchar(255) NOT NULL,
  `tag` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `ci_date` int(11) NOT NULL,
  `review_date` int(11) DEFAULT NULL,
  `review_content` varchar(255) DEFAULT NULL,
  `zan` int(10) unsigned zerofill NOT NULL DEFAULT '0000000000',
  PRIMARY KEY (`assess_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of assess
-- ----------------------------
INSERT INTO `assess` VALUES ('1', '10000000', '恒久之星 18k白金南非钻石女戒/结婚钻戒/戒指', '1288', '京东', '', '0', '太奇葩奇葩奇葩奇葩啦', '0', '0', '1406253341', null, null, '0000000000');
INSERT INTO `assess` VALUES ('2', '10000000', '恒久之星 18k白金南非钻石女戒/结婚钻戒/戒指', '1288', '京东', '', '0', '太奇葩奇葩奇葩奇葩啦', '0', '0', '1406253397', null, null, '0000000000');
INSERT INTO `assess` VALUES ('3', '10000000', '七夕礼物 珂兰钻石18K白金玫瑰金钻石吊坠项坠项', '2399', '京东', 'b0603926da3380542b13c67e6b92e169', '0', '太奇葩奇葩奇葩奇葩啦', '0', '0', '1406253445', null, null, '0000000000');
