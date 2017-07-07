/*
Navicat MySQL Data Transfer

Source Server         : ads
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : joker

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-06-19 17:35:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `sw_admin`
-- ----------------------------
DROP TABLE IF EXISTS `sw_admin`;
CREATE TABLE `sw_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sw_admin
-- ----------------------------
INSERT INTO `sw_admin` VALUES ('1', 'joker', 'joker');

-- ----------------------------
-- Table structure for `sw_category`
-- ----------------------------
DROP TABLE IF EXISTS `sw_category`;
CREATE TABLE `sw_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '100',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sw_category
-- ----------------------------
INSERT INTO `sw_category` VALUES ('5', '服装', '0', '1', '1497410230', '1497602610', '200');
INSERT INTO `sw_category` VALUES ('6', '美食', '0', '1', '1497410260', '1497603420', '220');
INSERT INTO `sw_category` VALUES ('7', '电器', '0', '0', '1497410276', '1497833797', '10');
INSERT INTO `sw_category` VALUES ('9', '冰淇淋', '6', '1', '1497429130', '1497602512', '50');
INSERT INTO `sw_category` VALUES ('10', '游戏', '0', '0', '1497429556', '1497597248', '20');
INSERT INTO `sw_category` VALUES ('12', '短脚脚裤子', '5', '1', '1497431529', '1497583205', '50');
INSERT INTO `sw_category` VALUES ('20', 'KTV', '0', '1', '1497589868', '1497589893', '22');
INSERT INTO `sw_category` VALUES ('22', '舞蹈', '0', '1', '1497590490', '1497603430', '300');
INSERT INTO `sw_category` VALUES ('16', '唱歌', '20', '1', '1497576662', '1497833827', '50');
INSERT INTO `sw_category` VALUES ('17', '朒朒', '6', '1', '1497576749', '1497576749', '6');

-- ----------------------------
-- Table structure for `sw_category_copy`
-- ----------------------------
DROP TABLE IF EXISTS `sw_category_copy`;
CREATE TABLE `sw_category_copy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '100',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sw_category_copy
-- ----------------------------
INSERT INTO `sw_category_copy` VALUES ('1', '服装', '0', '1', '0', '0', '100');
INSERT INTO `sw_category_copy` VALUES ('2', '电器', '0', '1', '0', '0', '120');
INSERT INTO `sw_category_copy` VALUES ('3', '美食', '0', '1', '0', '0', '130');
INSERT INTO `sw_category_copy` VALUES ('4', '娱乐', '0', '1', '0', '0', '110');

-- ----------------------------
-- Table structure for `sw_city`
-- ----------------------------
DROP TABLE IF EXISTS `sw_city`;
CREATE TABLE `sw_city` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sw_city
-- ----------------------------
INSERT INTO `sw_city` VALUES ('1', '四川', '0', '1');
INSERT INTO `sw_city` VALUES ('2', '成都', '1', '1');
INSERT INTO `sw_city` VALUES ('3', '德阳', '1', '1');
INSERT INTO `sw_city` VALUES ('4', '河南', '0', '1');
INSERT INTO `sw_city` VALUES ('5', '岳阳', '4', '1');
INSERT INTO `sw_city` VALUES ('6', '陕西', '0', '1');

-- ----------------------------
-- Table structure for `sw_user`
-- ----------------------------
DROP TABLE IF EXISTS `sw_user`;
CREATE TABLE `sw_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `tel` tinyint(4) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sw_user
-- ----------------------------
INSERT INTO `sw_user` VALUES ('1', 'admin', '127', '1126266505@qq.com');
