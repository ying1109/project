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

