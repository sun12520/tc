/*
Navicat MySQL Data Transfer

Source Server         : 10.176.40.132_xiangyang
Source Server Version : 50158
Source Host           : 10.176.40.132:3306
Source Database       : tccenter

Target Server Type    : MYSQL
Target Server Version : 50158
File Encoding         : 65001

Date: 2014-08-01 09:49:47
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
  `pzType` varchar(255) NOT NULL,
  `Content` varchar(255) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `ci_date` int(11) NOT NULL,
  `review_date` int(11) DEFAULT NULL,
  `review_content` varchar(255) DEFAULT NULL,
  `zan` int(10) unsigned zerofill NOT NULL DEFAULT '0000000000',
  PRIMARY KEY (`assess_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of assess
-- ----------------------------
INSERT INTO `assess` VALUES ('1', '10000000', '恒久之星 18k白金南非钻石女戒/结婚钻戒/戒指', '1288', '京东', '', '0', '太奇葩奇葩奇葩奇葩啦', '0', '0', '1406253341', null, null, '0000000011');
INSERT INTO `assess` VALUES ('2', '10000000', '恒久之星 18k白金南非钻石女戒/结婚钻戒/戒指', '1288', '京东', '', '0', '太奇葩奇葩奇葩奇葩啦', '0', '0', '1406253397', null, null, '0000000014');
INSERT INTO `assess` VALUES ('3', '10000000', '七夕礼物 珂兰钻石18K白金玫瑰金钻石吊坠项坠项', '2399', '京东', 'b0603926da3380542b13c67e6b92e169', '0', '太奇葩奇葩奇葩奇葩啦', '0', '0', '1406253445', null, null, '0000000016');
INSERT INTO `assess` VALUES ('4', '10000000', '【春舞枝】爱你一整年 产地直供 鲜切花从采摘到手', '999', '京东', '84242839e24d7aec161a8dcd94215688', '0', '突突突突  啊啊啊突突突突  啊啊啊啊突突突突天天突突突突', '0', '1', '1406280216', '1406511625', '', '0000000006');
INSERT INTO `assess` VALUES ('5', '10000000', '【春舞枝】爱你一整年 产地直供 鲜切花从采摘到手', '999', '京东', '84242839e24d7aec161a8dcd94215688', '购买截图', '9085是多少的', '0', '1', '1406280489', '1406511623', '', '0000000007');
INSERT INTO `assess` VALUES ('6', '10000000', '【春舞枝】爱你一整年 产地直供 鲜切花从采摘到手', '999', '京东', '2b58200fa90cb68e6406c1fe649acc0c', '发票图片', 'http://item.jd.com/1212673977.html', '奇葩', '1', '1406280763', '1406511617', '', '0000000024');
INSERT INTO `assess` VALUES ('7', '10000000', '【春舞枝】爱你一整年 产地直供 鲜切花从采摘到手', '999', '京东', '84242839e24d7aec161a8dcd94215688', '发票图片', 'adadahttp://item.jd.com/1212673977.html', '奇葩', '1', '1406281105', '1406511620', '', '0000000004');
INSERT INTO `assess` VALUES ('8', '10000000', '【乐心Mambo微信版】乐心（LIFESENSE', '299', '京东', '84242839e24d7aec161a8dcd94215688', '发票图片', '', '奇葩', '1', '1406514790', '1406526048', '', '0000000000');
INSERT INTO `assess` VALUES ('9', '10000000', '【乐心Mambo微信版】乐心（LIFESENSE', '299', '京东', '84242839e24d7aec161a8dcd94215688', '发票图片', 'weqweqwe', '奇葩', '1', '1406514811', '1406514886', '', '0000000005');
INSERT INTO `assess` VALUES ('10', '1', '【壳牌10W-40】【京东自营】壳牌（Shell', '129', '京东', '84242839e24d7aec161a8dcd94215688', '发票图片', '按时打算打算打', '奇葩', '1', '1406531099', '1406531107', '', '0000000000');
