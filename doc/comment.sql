/*
Navicat MySQL Data Transfer

Source Server         : 10.176.40.132_xiangyang
Source Server Version : 50158
Source Host           : 10.176.40.132:3306
Source Database       : tccenter

Target Server Type    : MYSQL
Target Server Version : 50158
File Encoding         : 65001

Date: 2014-08-01 09:50:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `assess_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` char(255) NOT NULL,
  `comm_content` varchar(255) NOT NULL,
  `comm_date` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '1', '10000000', '', '吐槽太扯淡了啊，不客观', '1406253341');
INSERT INTO `comment` VALUES ('2', '1', '200000000', '', '说的很好 解气！', '1406253445');
INSERT INTO `comment` VALUES ('3', '1', '30000000', '', '', '1406269672');
INSERT INTO `comment` VALUES ('4', '1', '30000000', '', '擦擦擦擦擦擦擦', '1406269992');
INSERT INTO `comment` VALUES ('5', '1', '30000000', '', '5443333', '1406270058');
INSERT INTO `comment` VALUES ('6', '1', '30000000', '', '继续测试', '1406270161');
INSERT INTO `comment` VALUES ('7', '1', '30000000', '', '建军节建军节', '1406270232');
INSERT INTO `comment` VALUES ('8', '1', '30000000', '', '行行行行行行', '1406270359');
INSERT INTO `comment` VALUES ('9', '1', '30000000', '', '在啧啧啧啧啧啧啧啧啧', '1406270422');
INSERT INTO `comment` VALUES ('10', '1', '30000000', '', '该嘎嘎嘎嘎嘎嘎嘎嘎嘎', '1406270467');
INSERT INTO `comment` VALUES ('11', '1', '30000000', '', 'tttt吞吞吐吐吞吞吐吐', '1406271248');
INSERT INTO `comment` VALUES ('12', '1', '30000000', '', '元一样一样一样一样', '1406271476');
INSERT INTO `comment` VALUES ('13', '1', '30000000', '', '呃呃呃呃呃呃呃呃呃', '1406271579');
INSERT INTO `comment` VALUES ('14', '1', '30000000', '', '元元一样一样一样一样', '1406271922');
INSERT INTO `comment` VALUES ('15', '1', '30000000', '', '噢噢噢噢噢噢噢噢哦哦哦', '1406272017');
INSERT INTO `comment` VALUES ('16', '1', '30000000', '', '反反复复凤飞飞凤飞飞', '1406272270');
INSERT INTO `comment` VALUES ('17', '1', '30000000', '', '后好嘿嘿嘿嘿嘿嘿', '1406272917');
INSERT INTO `comment` VALUES ('18', '1', '30000000', '', '快快快快快快快快快快', '1406273666');
INSERT INTO `comment` VALUES ('19', '1', '30000000', '', '版本八佰伴八佰伴', '1406273720');
INSERT INTO `comment` VALUES ('20', '1', '30000000', '', '哈哈哈哈哈哈哈', '1406274091');
INSERT INTO `comment` VALUES ('21', '1', '30000000', '', 'kkkkkkkkkkkkkkkkkk', '1406275332');
INSERT INTO `comment` VALUES ('22', '1', '30000000', '', 'gagagagag', '1406275406');
INSERT INTO `comment` VALUES ('23', '1', '30000000', '', '上市公司公司', '1406275592');
INSERT INTO `comment` VALUES ('24', '1', '30000000', '', '该施工方上到公司', '1406275875');
INSERT INTO `comment` VALUES ('25', '1', '30000000', '', '到底上根深蒂固', '1406275966');
INSERT INTO `comment` VALUES ('26', '1', '30000000', '', '该说什么', '1406275975');
INSERT INTO `comment` VALUES ('27', '1', '30000000', '', '还多少大概', '1406275978');
INSERT INTO `comment` VALUES ('28', '1', '30000000', '', '阿大声道', '1406276730');
INSERT INTO `comment` VALUES ('29', '1', '30000000', '', '覆盖撒旦', '1406276736');
INSERT INTO `comment` VALUES ('30', '1', '30000000', '', '啊啊', '1406280245');
INSERT INTO `comment` VALUES ('31', '1', '30000000', '', 'http://item.jd.com/1212673977.html', '1406281146');
INSERT INTO `comment` VALUES ('32', '4', '30000000', '', 'Come on!', '1406511663');
INSERT INTO `comment` VALUES ('33', '9', '30000000', '', 'wqe', '1406514933');
INSERT INTO `comment` VALUES ('34', '5', '6', 'ccccc', 'adasdadad', '1406530669');
INSERT INTO `comment` VALUES ('35', '9', '6', 'ccccc', 'asdasda', '1406530764');
INSERT INTO `comment` VALUES ('36', '9', '1', 'sunquan', 'dasffe', '1406530914');
INSERT INTO `comment` VALUES ('37', '10', '1', 'sunquan', '后哈哈哈哈', '1406531123');
