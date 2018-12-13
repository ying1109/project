/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : my_project

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-12-14 00:04:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `about_us`
-- ----------------------------
DROP TABLE IF EXISTS `about_us`;
CREATE TABLE `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `detail` varchar(255) DEFAULT NULL COMMENT '详情',
  `status` int(11) DEFAULT '1' COMMENT '状态',
  `create_time` varchar(255) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='关于我们';

-- ----------------------------
-- Records of about_us
-- ----------------------------
INSERT INTO `about_us` VALUES ('1', '<p>舌间搁浅的妙蔓、是想为你舞一曲最后倾国倾城。</p>', '1', '1544356439');

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员',
  `account` varchar(255) DEFAULT NULL COMMENT '账号',
  `password` varchar(255) DEFAULT NULL COMMENT '密码',
  `password_md5` varchar(255) DEFAULT NULL COMMENT 'md5加密后密码',
  `nickname` varchar(255) DEFAULT NULL COMMENT '昵称',
  `phone` char(11) DEFAULT NULL COMMENT '手机号',
  `portrait` varchar(255) DEFAULT NULL COMMENT '头像',
  `s_province` varchar(20) DEFAULT NULL COMMENT '省',
  `s_city` varchar(20) DEFAULT NULL COMMENT '市',
  `s_county` varchar(20) DEFAULT NULL COMMENT '区',
  `address` varchar(255) DEFAULT NULL COMMENT '详细地址',
  `last_login_time` int(11) DEFAULT NULL COMMENT '最后一次登陆时间',
  `last_login_ip` varchar(20) DEFAULT NULL COMMENT '最后一次登录ip',
  `this_login_time` varchar(255) DEFAULT NULL COMMENT '本次登录时间',
  `this_login_ip` varchar(255) DEFAULT NULL COMMENT '本次登录ip',
  `auth` longtext COMMENT '权限，用英文逗号隔开',
  `login_secrect` varchar(255) DEFAULT NULL COMMENT '登录秘钥（原密码）',
  `remark` varchar(250) DEFAULT NULL COMMENT '备注',
  `group_id` varchar(255) DEFAULT NULL COMMENT '组别id',
  `status` int(4) DEFAULT '1' COMMENT '是否启用，0不启用，1启用',
  `create_time` varchar(255) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='后台管理员表';

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '123456', 'a8f283efb0a7639652c9f09012f43cbb', '执笔画浮尘', '1551234567', '/Uploads/system/admin/2018-12-11/5c0fb5a23224f.jpg', '湖南省', '长沙市', '岳麓区', '', '1544545516', '127.0.0.1', '1544547424', '127.0.0.1', null, null, '', null, '1', '1544341065');
INSERT INTO `admin` VALUES ('2', 'admin1', 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', '雪落无痕', '13312345678', '', '', '', '', '', null, null, null, null, null, null, '', null, '1', '1544341631');

-- ----------------------------
-- Table structure for `admin_module`
-- ----------------------------
DROP TABLE IF EXISTS `admin_module`;
CREATE TABLE `admin_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '模块',
  `name` varchar(255) DEFAULT NULL,
  `pid` int(11) DEFAULT '0' COMMENT '父级id',
  `status` int(4) DEFAULT '1' COMMENT '状态',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_module
-- ----------------------------

-- ----------------------------
-- Table structure for `admin_rule`
-- ----------------------------
DROP TABLE IF EXISTS `admin_rule`;
CREATE TABLE `admin_rule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(255) DEFAULT NULL COMMENT '规则所属module',
  `url` varchar(255) DEFAULT NULL COMMENT '规则唯一英文标识',
  `name` varchar(255) DEFAULT NULL COMMENT '规则中文描述',
  `condition` varchar(300) NOT NULL DEFAULT '' COMMENT '规则附加条件',
  `status` int(1) DEFAULT '1' COMMENT '状态：1启用、-1禁用',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='规则';

-- ----------------------------
-- Records of admin_rule
-- ----------------------------

-- ----------------------------
-- Table structure for `banner`
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner` text COMMENT '轮播图',
  `status` int(11) DEFAULT '1' COMMENT '状态',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='轮播图';

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('1', '[{\"pic\":{\"file_path\":\"\\/Uploads\\/system\\/banner\\/2018-12-09\\/5c0cfd06a3c48.jpg\",\"file_ext\":\"jpg\",\"name\":\"a1.jpg\",\"savename\":\"5c0cfd06a3c48.jpg\"},\"link_url\":\"\",\"link_info\":\"\"},{\"pic\":{\"file_path\":\"\\/Uploads\\/system\\/banner\\/2018-12-09\\/5c0cfd0be394d.jpg\",\"file_ext\":\"jpg\",\"name\":\"a2.jpg\",\"savename\":\"5c0cfd0be394d.jpg\"},\"link_url\":\"\",\"link_info\":\"\"}]', '1', '1544355085', '1544026893');

-- ----------------------------
-- Table structure for `scgf`
-- ----------------------------
DROP TABLE IF EXISTS `scgf`;
CREATE TABLE `scgf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '名字',
  `author` varchar(255) DEFAULT NULL COMMENT '作者',
  `dynasty` varchar(255) DEFAULT NULL COMMENT '朝代',
  `content` text COMMENT '内容',
  `detail` text COMMENT '详情',
  `type` int(1) DEFAULT '1' COMMENT '类型：1诗、2词、3歌、4赋',
  `status` int(1) DEFAULT '1' COMMENT '状态',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='诗词歌赋';

-- ----------------------------
-- Records of scgf
-- ----------------------------
INSERT INTO `scgf` VALUES ('1', '不第后赋菊', '黄巢', '唐', '待到秋来九月八，我花开后百花杀。冲天香阵透长安，满城尽带黄金甲。', '根据明代郎瑛《七修类稿》引《清暇录》关于此诗的记载，此诗是黄巢落第后所作。黄巢在起义之前，曾到京城长安参加科举考试，但没有被录取。科场的失利以及整个社会的黑暗和吏治的腐败，使他对李唐王朝益发不满。考试不第后，他豪情倍增，借咏菊花来抒写自己的抱负，写下了这首《不第后赋菊》。', '1', '1', '1544357239', '1544355480');
INSERT INTO `scgf` VALUES ('2', '《临江仙·未遇行藏谁肯信》', '侯蒙', '宋', '未遇行藏谁肯信，如今方表名踪。无端良匠画形容。当风轻借力，一举入高空。  才得吹嘘身渐稳，只疑远赴蟾宫。雨馀时候夕阳红。几人平地上，看我碧霄中。', '据宋人洪迈《夷坚志》记载，侯蒙年青时，久困于考场，三十一岁才中了举人。他长得难看，人们都轻笑他，有爱开玩笑的人，把他的像画在风筝上，引线放入天空，讽刺他妄想上天。侯蒙看了就在上面题了这首词。', '2', '1', '1544537165', '1544537165');

-- ----------------------------
-- Table structure for `test`
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `create_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of test
-- ----------------------------
