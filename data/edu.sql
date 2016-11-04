/*
Navicat MySQL Data Transfer

Source Server         : 本地环境
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : edu

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-11-04 19:42:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for edu_info
-- ----------------------------
DROP TABLE IF EXISTS `edu_info`;
CREATE TABLE `edu_info` (
  `id` int(11) NOT NULL COMMENT '网站信息id',
  `title` varchar(64) NOT NULL COMMENT '网站标题',
  `logo` varchar(64) NOT NULL COMMENT '网站logo',
  `keywords` varchar(200) DEFAULT NULL COMMENT '关键词',
  `descr` varchar(200) DEFAULT NULL COMMENT '描述',
  `domain` varchar(64) DEFAULT NULL COMMENT '网站地址',
  `number` varchar(32) DEFAULT NULL COMMENT '网站备案号',
  `person` varchar(16) DEFAULT NULL COMMENT '联系人',
  `email` varchar(16) DEFAULT NULL COMMENT '公司邮箱',
  `fax` varchar(32) DEFAULT NULL COMMENT '公司传真',
  `qq` varchar(32) DEFAULT NULL COMMENT 'qq',
  `phone` varchar(16) DEFAULT NULL COMMENT '联系电话',
  `address` varchar(100) DEFAULT NULL COMMENT '公司地址',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of edu_info
-- ----------------------------

-- ----------------------------
-- Table structure for edu_user
-- ----------------------------
DROP TABLE IF EXISTS `edu_user`;
CREATE TABLE `edu_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户表 主键id',
  `username` varchar(32) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `sex` tinyint(2) DEFAULT '2' COMMENT '性别 0-男 1-女 2-保密',
  `age` int(3) DEFAULT NULL COMMENT '年龄',
  `create_time` datetime NOT NULL COMMENT '注册时间',
  `admin` tinyint(2) NOT NULL DEFAULT '0' COMMENT '管理员0-否 1-是',
  `logintime` int(11) NOT NULL COMMENT '最近一次的登录时间',
  `loginnum` int(11) NOT NULL DEFAULT '1' COMMENT '登录的次数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of edu_user
-- ----------------------------
INSERT INTO `edu_user` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', null, null, '2016-11-04 15:41:00', '1', '1478246200', '2');
