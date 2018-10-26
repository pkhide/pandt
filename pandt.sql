/*
Navicat MySQL Data Transfer

Source Server         : myConn
Source Server Version : 50549
Source Host           : localhost:3306
Source Database       : pandt

Target Server Type    : MYSQL
Target Server Version : 50549
File Encoding         : 65001

Date: 2018-10-13 23:58:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `customer`
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL AUTO_INCREMENT,
  `customerName` varchar(50) NOT NULL,
  `customerLName` varchar(50) NOT NULL,
  `customerMobile` varchar(10) NOT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer
-- ----------------------------

-- ----------------------------
-- Table structure for `payment`
-- ----------------------------
DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `paymentID` int(11) NOT NULL AUTO_INCREMENT,
  `rentID` int(11) NOT NULL,
  `amount` double NOT NULL,
  `paymentDate` date NOT NULL,
  `receiverBy` int(11) NOT NULL,
  PRIMARY KEY (`paymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of payment
-- ----------------------------

-- ----------------------------
-- Table structure for `rent`
-- ----------------------------
DROP TABLE IF EXISTS `rent`;
CREATE TABLE `rent` (
  `rentID` int(11) NOT NULL AUTO_INCREMENT,
  `roomID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `rentStart` date NOT NULL,
  `rentDuration` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  PRIMARY KEY (`rentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rent
-- ----------------------------

-- ----------------------------
-- Table structure for `room`
-- ----------------------------
DROP TABLE IF EXISTS `room`;
CREATE TABLE `room` (
  `roomID` int(11) NOT NULL,
  `roomNumber` varchar(20) NOT NULL,
  `roomstatID` int(11) NOT NULL,
  PRIMARY KEY (`roomID`)
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of room
-- ----------------------------
INSERT INTO `room` VALUES ('1', '101', '2');
INSERT INTO `room` VALUES ('2', '102', '2');
INSERT INTO `room` VALUES ('3', '103', '2');
INSERT INTO `room` VALUES ('4', '104', '2');
INSERT INTO `room` VALUES ('5', '105', '2');
INSERT INTO `room` VALUES ('6', '106', '2');
INSERT INTO `room` VALUES ('7', '107', '2');
INSERT INTO `room` VALUES ('8', '108', '2');
INSERT INTO `room` VALUES ('9', '109', '2');
INSERT INTO `room` VALUES ('10', '201', '2');
INSERT INTO `room` VALUES ('11', '202', '2');
INSERT INTO `room` VALUES ('12', '203', '2');
INSERT INTO `room` VALUES ('13', '204', '2');
INSERT INTO `room` VALUES ('14', '205', '2');
INSERT INTO `room` VALUES ('15', '206', '2');
INSERT INTO `room` VALUES ('16', '207', '2');
INSERT INTO `room` VALUES ('17', '208', '2');
INSERT INTO `room` VALUES ('18', '209', '2');
INSERT INTO `room` VALUES ('19', '301', '2');
INSERT INTO `room` VALUES ('20', '302', '2');
INSERT INTO `room` VALUES ('21', '303', '2');
INSERT INTO `room` VALUES ('22', '304', '2');
INSERT INTO `room` VALUES ('23', '305', '2');
INSERT INTO `room` VALUES ('24', '306', '2');
INSERT INTO `room` VALUES ('25', '307', '2');
INSERT INTO `room` VALUES ('26', '308', '2');
INSERT INTO `room` VALUES ('27', '309', '2');

-- ----------------------------
-- Table structure for `roomstat`
-- ----------------------------
DROP TABLE IF EXISTS `roomstat`;
CREATE TABLE `roomstat` (
  `roomstatID` int(11) NOT NULL,
  `roomstatName` varchar(20) NOT NULL,
  PRIMARY KEY (`roomstatID`)
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of roomstat
-- ----------------------------
INSERT INTO `roomstat` VALUES ('1', 'Available');
INSERT INTO `roomstat` VALUES ('2', 'ไม่ว่าง');

-- ----------------------------
-- Table structure for `userdata`
-- ----------------------------
DROP TABLE IF EXISTS `userdata`;
CREATE TABLE `userdata` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `ownerName` varchar(50) NOT NULL,
  `ownerLName` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userdata
-- ----------------------------
INSERT INTO `userdata` VALUES ('1', 'Prin', 'Kammasitt', 'pkhide', '1234');
