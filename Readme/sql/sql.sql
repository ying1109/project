-- 关于我们
DROP TABLE IF EXIST `about_us`;
CREATE TABLE `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `detail` varchar(255) DEFAULT NULL COMMENT '详情',
  `status` int(11) DEFAULT '1' COMMENT '状态',
  `create_time` varchar(255) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='关于我们';

-- 后台管理员表
DROP TABLE IF EXIST `admin`;
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
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='后台管理员表';

-- 轮播图
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner` text COMMENT '轮播图',
  `status` int(11) DEFAULT '1' COMMENT '状态',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='轮播图';

-- 诗词歌赋
DROP TABLE IF EXISTS `scgf`;
CREATE TABLE `scgf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '名字',
  `author` varchar(255) DEFAULT NULL COMMENT '作者',
  `dynasty` varchar(255) DEFAULT NULL COMMENT '朝代',
  `content` text DEFAULT NULL COMMENT '内容',
  `detail` text DEFAULT NULL COMMENT '详情',
  `status` int(1) DEFAULT '1' COMMENT '状态',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='诗词歌赋';

-- 规则
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
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='规则';


-- 模块
DROP TABLE IF EXISTS `admin_module`;
CREATE TABLE `admin_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '模块',
  `name` varchar(255) DEFAULT NULL,
  `pid` int(11) DEFAULT '0' COMMENT '父级id',
  `status` int(4) DEFAULT '1' COMMENT '状态',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- 组别
DROP TABLE IF EXISTS `admin_group`;
CREATE TABLE `admin_group` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户组id,自增主键',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '用户组中文名称',
  `description` varchar(80) NOT NULL DEFAULT '' COMMENT '描述信息',
  `status` int(3) NOT NULL DEFAULT '1' COMMENT '用户组状态：为1正常，为0禁用,-1为删除',
  `rules` varchar(500) NOT NULL DEFAULT '' COMMENT '用户组拥有的规则id，多个规则 , 隔开',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


