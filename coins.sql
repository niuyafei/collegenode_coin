/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Version : 50635
 Source Host           : localhost
 Source Database       : coin

 Target Server Version : 50635
 File Encoding         : utf-8

 Date: 05/06/2018 23:09:29 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `coins`
-- ----------------------------
DROP TABLE IF EXISTS `coins`;
CREATE TABLE `coins` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `wallet_url` varchar(255) NOT NULL COMMENT '钱包地址',
  `coins` int(10) NOT NULL COMMENT '钱币数量',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态，1-》未充值，2-》已充值',
  `create_time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `coins`
-- ----------------------------
BEGIN;
INSERT INTO `coins` VALUES ('1', 'http://www.coin.collegenode.com/paht92j294j2', '10', '1', '2018-05-02 22:35:23'), ('2', 'http://coin.collegenode.com', '20', '1', '2018-05-02 22:55:21'), ('3', 'http://www.baidu.com', '10', '1', '2018-05-02 23:10:16'), ('4', 'http://www.baidu.com', '10', '1', '2018-05-02 23:12:11'), ('5', 'http://test.coin.collegenode.com/', '13', '1', '2018-05-02 23:18:11'), ('6', 'http://www.abc.com', '3', '1', '2018-05-04 23:27:46'), ('7', 'http://www.abc.com', '3', '1', '2018-05-04 23:27:51'), ('8', 'http://www.abc.com', '3', '1', '2018-05-04 23:27:54'), ('9', 'http://www.abc11.com', '12', '1', '2018-05-04 23:28:00'), ('10', 'http://www.abc11.com', '12', '1', '2018-05-04 23:28:03'), ('11', 'http://www.abc11.com', '12', '1', '2018-05-04 23:28:05'), ('12', 'http://www.abc11.com', '12', '1', '2018-05-04 23:28:07'), ('13', 'http://www.abc11.com', '12', '1', '2018-05-04 23:28:09'), ('14', 'http://www.abc11.com', '12', '1', '2018-05-04 23:28:10'), ('15', 'http://www.abc11.com', '12', '1', '2018-05-04 23:28:12');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
