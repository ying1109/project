-- 关于我们
DROP TABLE IF EXIST `about_us`;
CREATE TABLE `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `detail` varchar(255) DEFAULT NULL COMMENT '详情',
  `status` int(11) DEFAULT '1' COMMENT '状态',
  `create_time` varchar(255) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='关于我们';

-- 轮播图
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner` text DEFAULT NULL COMMENT '轮播图',
  `status` int(11) DEFAULT '1' COMMENT '状态',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='轮播图';

