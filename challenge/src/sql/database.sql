SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS corb3nik_cms;
GRANT ALL PRIVILEGES ON corb3nik_cms.* TO 'corb3nik'@'localhost' IDENTIFIED BY 'corb3nik';
GRANT FILE ON *.* TO 'corb3nik'@'localhost';
FLUSH PRIVILEGES;
USE corb3nik_cms;

-- ----------------------------
-- Table structure for `homework`
-- ----------------------------
DROP TABLE IF EXISTS `homework`;
CREATE TABLE `homework` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET ascii NOT NULL,
  `brief` varchar(255) CHARACTER SET ascii DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(100) CHARACTER SET ascii NOT NULL,
  `password` varchar(100) CHARACTER SET ascii NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
