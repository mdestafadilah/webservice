/*
Navicat MySQL Data Transfer

Source Server         : root@localhost
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : webservice

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-12-23 17:15:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `barang`
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `idbarang` int(50) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `harga` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`idbarang`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES ('1', 'BAJU', 'LONG', '2000');
INSERT INTO `barang` VALUES ('2', 'CELANA', 'SHORT', '9000');
INSERT INTO `barang` VALUES ('4', 'baju', 'daleman', '10000');
