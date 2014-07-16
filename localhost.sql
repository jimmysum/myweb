-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 07 月 16 日 12:56
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `myweb`
--
CREATE DATABASE `myweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `myweb`;

-- --------------------------------------------------------

--
-- 表的结构 `cx_access`
--

CREATE TABLE IF NOT EXISTS `cx_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `g` varchar(20) NOT NULL COMMENT '项目',
  `m` varchar(20) NOT NULL COMMENT '模块',
  `a` varchar(20) NOT NULL COMMENT '方法',
  KEY `groupId` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `cx_ad`
--

CREATE TABLE IF NOT EXISTS `cx_ad` (
  `ad_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(255) NOT NULL,
  `ad_content` text,
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cx_admin_panel`
--

CREATE TABLE IF NOT EXISTS `cx_admin_panel` (
  `menuid` mediumint(8) unsigned NOT NULL,
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` char(32) DEFAULT NULL,
  `url` char(255) DEFAULT NULL,
  `datetime` int(10) unsigned DEFAULT '0',
  UNIQUE KEY `userid` (`menuid`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `cx_asset`
--

CREATE TABLE IF NOT EXISTS `cx_asset` (
  `aid` bigint(20) NOT NULL AUTO_INCREMENT,
  `_unique` varchar(14) NOT NULL,
  `filename` varchar(50) DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  `filepath` varchar(200) NOT NULL,
  `uploadtime` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `meta` text,
  `suffix` varchar(50) DEFAULT NULL,
  `download_times` int(6) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cx_commentmeta`
--

CREATE TABLE IF NOT EXISTS `cx_commentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cx_link`
--

CREATE TABLE IF NOT EXISTS `cx_link` (
  `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_image` varchar(255) DEFAULT '',
  `link_target` varchar(25) NOT NULL DEFAULT '_blank',
  `link_description` text NOT NULL,
  `link_status` int(2) NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_rel` varchar(255) DEFAULT '',
  `listorder` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cx_members`
--

CREATE TABLE IF NOT EXISTS `cx_members` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login_name` varchar(25) NOT NULL,
  `user_pass` varchar(64) NOT NULL DEFAULT '',
  `user_nickname` varchar(50) NOT NULL,
  `user_pic_assetid` int(8) NOT NULL,
  `sign_words` varchar(200) NOT NULL,
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `last_login_ip` varchar(16) NOT NULL,
  `last_login_time` int(12) NOT NULL,
  `create_time` int(12) NOT NULL,
  `user_activation_key` varchar(60) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `user_nicename` (`user_nickname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cx_menu`
--

CREATE TABLE IF NOT EXISTS `cx_menu` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `app` char(20) NOT NULL COMMENT '应用名称app',
  `model` char(20) NOT NULL DEFAULT '',
  `action` char(20) NOT NULL DEFAULT '',
  `data` char(50) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `icon` varchar(50) DEFAULT NULL,
  `remark` varchar(255) NOT NULL DEFAULT '',
  `listorder` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '排序ID',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `parentid` (`parentid`),
  KEY `model` (`model`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=306 ;

--
-- 转存表中的数据 `cx_menu`
--

INSERT INTO `cx_menu` (`id`, `parentid`, `app`, `model`, `action`, `data`, `type`, `status`, `name`, `icon`, `remark`, `listorder`) VALUES
(239, 0, 'Admin', 'Panel', 'default', '', 0, 1, '设置', 'cogs', '', 0),
(51, 0, 'Admin', 'Content', 'default', '', 0, 1, '内容管理', 'th', '', 10),
(245, 51, 'Admin', 'Term', 'index', '', 0, 1, '分类管理', '', '', 2),
(299, 260, 'Admin', 'Api', 'setting', '', 1, 1, '接口配置', 'leaf', '', 4),
(252, 239, 'Admin', 'Setting', 'default', '', 0, 1, '个人信息', NULL, '', 0),
(253, 252, 'Admin', 'User', 'userinfo', '', 1, 1, '修改信息', '', '', 0),
(254, 252, 'Admin', 'Setting', 'password', '', 1, 1, '修改密码', NULL, '', 0),
(260, 0, 'Admin', 'Extension', 'default', '', 0, 1, '扩展工具', 'cloud', '', 30),
(262, 260, 'Admin', 'Menu', 'add', '', 1, 1, '幻灯片', '', '', 1),
(264, 262, 'Admin', 'Slide', 'index', '', 1, 1, '幻灯片管理', '', '', 0),
(265, 260, 'Admin', 'ad', 'index', '', 1, 1, '网站广告', '', '', 2),
(268, 262, 'Admin', 'Slidecat', 'index', '', 1, 1, '幻灯片分类', '', '', 0),
(270, 260, 'Admin', 'Link', 'index', '', 0, 1, '友情链接', '', '', 3),
(277, 51, 'Admin', 'Page', 'index', '', 1, 1, '页面管理', '', '', 3),
(301, 300, 'Admin', 'Page', 'recyclebin', '', 1, 1, '页面回收', '', '', 1),
(302, 300, 'Admin', 'Post', 'recyclebin', '', 1, 1, '内容回收', '', '', 0),
(300, 51, 'Admin', 'recycle', 'default', '', 1, 1, '回收站', '', '', 4),
(284, 239, 'Admin', 'setting', 'site', '', 1, 1, '网站信息', '', '', 0),
(285, 51, 'Admin', 'Post', 'index', '', 1, 1, '内容管理', '', '', 1),
(286, 0, 'Admin', 'Member', 'default', '', 1, 1, '用户管理', 'group', '', 0),
(287, 289, 'Admin', 'Member', 'index', '', 1, 1, '本站用户', 'leaf', '', 0),
(288, 289, 'Admin', 'Api', 'index', '', 1, 1, '第三方用户', 'leaf', '', 0),
(289, 286, 'Admin', 'Member', 'default1', '', 1, 1, '用户组', '', '', 0),
(290, 286, 'Admin', 'Member', 'default3', '', 1, 1, '管理组', '', '', 0),
(291, 290, 'Admin', 'Rbac', 'index', '', 1, 1, '角色管理', '', '', 0),
(292, 290, 'Admin', 'User', 'index', '', 1, 1, '管理员', '', '', 0),
(293, 0, 'Admin', 'Menu', 'default', '', 1, 1, '菜单管理', 'list', '', 0),
(294, 293, 'Admin', 'Navcat', 'default1', '', 1, 1, '前台菜单', '', '', 0),
(295, 294, 'Admin', 'Nav', 'index', '', 1, 1, '菜单管理', '', '', 0),
(296, 294, 'Admin', 'Navcat', 'index', '', 1, 1, '菜单分类', '', '', 0),
(297, 293, 'Admin', 'Menu', 'index', '', 1, 1, '后台菜单', '', '', 0),
(298, 239, 'Admin', 'setting', 'clearcache', '', 1, 1, '清除缓存', '', '', 0),
(303, 260, 'Admin', 'Backup', 'index', '', 1, 1, '数据备份', '', '', 0),
(304, 260, 'Admin', 'Backup', 'restore', '', 1, 1, '数据恢复', '', '', 0),
(305, 262, 'Admin', 'Slide', 'delete', '', 1, 1, '删除', '', 'w', 0);

-- --------------------------------------------------------

--
-- 表的结构 `cx_nav`
--

CREATE TABLE IF NOT EXISTS `cx_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `parentid` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `target` varchar(50) DEFAULT NULL,
  `href` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `listorder` int(6) DEFAULT '0',
  `path` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `cx_nav`
--

INSERT INTO `cx_nav` (`id`, `cid`, `parentid`, `label`, `target`, `href`, `icon`, `status`, `listorder`, `path`) VALUES
(1, 2, 0, '无', '', '无', '', 1, 0, '-1'),
(2, 3, 0, '等等', '', '等等', '', 1, 0, '-2'),
(3, 3, 0, '等等', '', '等等', '', 1, 0, '-3'),
(4, 3, 0, '等等我', '', '等等我', '', 1, 0, '-4');

-- --------------------------------------------------------

--
-- 表的结构 `cx_nav_cat`
--

CREATE TABLE IF NOT EXISTS `cx_nav_cat` (
  `navcid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  `remark` text,
  PRIMARY KEY (`navcid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `cx_nav_cat`
--

INSERT INTO `cx_nav_cat` (`navcid`, `name`, `active`, `remark`) VALUES
(1, '首页', 0, '首页'),
(2, '二级分类', 0, '二级分类'),
(3, '分类', 1, '分类');

-- --------------------------------------------------------

--
-- 表的结构 `cx_oauth_member`
--

CREATE TABLE IF NOT EXISTS `cx_oauth_member` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `_from` varchar(20) NOT NULL,
  `_name` varchar(30) NOT NULL,
  `head_img` varchar(200) NOT NULL,
  `lock_to_id` int(20) NOT NULL,
  `create_time` int(12) NOT NULL,
  `last_login_time` int(12) NOT NULL,
  `last_login_ip` varchar(16) NOT NULL,
  `login_times` int(6) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `access_token` varchar(60) NOT NULL,
  `expires_date` int(12) NOT NULL,
  `openid` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cx_options`
--

CREATE TABLE IF NOT EXISTS `cx_options` (
  `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(64) NOT NULL DEFAULT '',
  `option_value` longtext NOT NULL,
  `autoload` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name` (`option_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `cx_options`
--

INSERT INTO `cx_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(2, 'site_options', '{"site_name":"\\u8fd9\\u4e2a\\u540d\\u79f0","site_host":"www.baidu.com","site_tpl":"default","site_icp":"ddd","site_admin_email":"dddd","site_tongji":"","site_copyright":"dddddd","site_seo_title":"","site_seo_keywords":"","site_seo_description":"","urlmode":"0","html_suffix":".html"}', 1);

-- --------------------------------------------------------

--
-- 表的结构 `cx_post`
--

CREATE TABLE IF NOT EXISTS `cx_post` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned DEFAULT '0',
  `post_keywords` varchar(150) NOT NULL,
  `post_date` datetime DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext,
  `post_title` text,
  `post_excerpt` text,
  `post_status` int(2) DEFAULT '1',
  `wx_status` int(2) DEFAULT '1',
  `comment_status` int(2) DEFAULT '1',
  `post_modified` datetime DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext,
  `post_parent` bigint(20) unsigned DEFAULT '0',
  `post_type` int(2) DEFAULT NULL,
  `post_mime_type` varchar(100) DEFAULT '',
  `comment_count` bigint(20) DEFAULT '0',
  `smeta` text,
  PRIMARY KEY (`ID`),
  KEY `type_status_date` (`wx_status`,`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `cx_post`
--

INSERT INTO `cx_post` (`ID`, `post_author`, `post_keywords`, `post_date`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `wx_status`, `comment_status`, `post_modified`, `post_content_filtered`, `post_parent`, `post_type`, `post_mime_type`, `comment_count`, `smeta`) VALUES
(1, 1, '', '2014-07-14 22:38:54', '<p>无</p>', '无', '', 0, 1, 0, '0000-00-00 00:00:00', NULL, 0, NULL, '', 0, '{"thumb":"\\/myweb\\/static\\/data\\/upload\\/20140714\\/53c3eb7a46333.jpg","template":"page"}'),
(2, 1, '', '2014-07-14 22:39:04', '<p>无</p>', '无', '', 0, 1, 0, '0000-00-00 00:00:00', NULL, 0, NULL, '', 0, '{"thumb":"\\/myweb\\/static\\/data\\/upload\\/20140714\\/53c3eb7a46333.jpg","template":"page"}'),
(3, 1, 'jjjj', '2014-07-16 20:19:23', '<p>&nbsp;&nbsp;&nbsp;&nbsp;fasdfsadfsdfasd<br/></p>', 'biaoto', 'jjjjj', 1, 1, 1, '2014-07-14 19:57:00', NULL, 0, NULL, '', 0, '{"thumb":"\\/myweb\\/static\\/data\\/upload\\/20140716\\/53c668d7e22fd.jpg"}'),
(4, 1, 'fadfasd', '2014-07-16 20:20:46', '<p>fasdfsadfsadfzxfxc</p>', 'biao', 'fasdfasdfsad', 1, 1, 1, '2014-07-14 20:20:00', NULL, 0, NULL, '', 0, '{"thumb":"\\/myweb\\/static\\/data\\/upload\\/20140716\\/53c66e0eb4822.jpg"}'),
(5, 1, 'fsadf', '2014-07-16 20:39:06', '<p>fasdfasdf</p>', 'gasdfgas', 'fasdfas', 0, 0, 0, '2014-07-28 20:38:00', NULL, 0, NULL, '', 0, '{"thumb":false}');

-- --------------------------------------------------------

--
-- 表的结构 `cx_postmeta`
--

CREATE TABLE IF NOT EXISTS `cx_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cx_role`
--

CREATE TABLE IF NOT EXISTS `cx_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '角色名称',
  `pid` smallint(6) DEFAULT NULL COMMENT '父角色ID',
  `status` tinyint(1) unsigned DEFAULT NULL COMMENT '状态',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  `create_time` int(11) unsigned NOT NULL COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL COMMENT '更新时间',
  `listorder` int(3) NOT NULL DEFAULT '0' COMMENT '排序字段',
  PRIMARY KEY (`id`),
  KEY `parentId` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='角色信息列表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `cx_role`
--

INSERT INTO `cx_role` (`id`, `name`, `pid`, `status`, `remark`, `create_time`, `update_time`, `listorder`) VALUES
(1, '用户', NULL, 1, '用户', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `cx_role_user`
--

CREATE TABLE IF NOT EXISTS `cx_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `cx_slide`
--

CREATE TABLE IF NOT EXISTS `cx_slide` (
  `slide_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slide_cid` bigint(20) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_pic` varchar(255) DEFAULT NULL,
  `slide_url` varchar(255) DEFAULT NULL,
  `slide_des` varchar(255) DEFAULT NULL,
  `slide_content` text,
  `slide_status` int(2) NOT NULL DEFAULT '1',
  `listorder` int(10) DEFAULT '0',
  PRIMARY KEY (`slide_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `cx_slide`
--

INSERT INTO `cx_slide` (`slide_id`, `slide_cid`, `slide_name`, `slide_pic`, `slide_url`, `slide_des`, `slide_content`, `slide_status`, `listorder`) VALUES
(1, 0, '1', '/myweb/static/data/upload/20140714/53c3e9d0183bb.jpg', 'baidu.com', 'wu ', 'wu ', 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `cx_slide_cat`
--

CREATE TABLE IF NOT EXISTS `cx_slide_cat` (
  `cid` bigint(20) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_idname` varchar(255) NOT NULL,
  `cat_remark` text,
  `cat_status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cx_term_relationships`
--

CREATE TABLE IF NOT EXISTS `cx_term_relationships` (
  `tid` bigint(20) NOT NULL AUTO_INCREMENT,
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `listorder` int(10) NOT NULL DEFAULT '0',
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`tid`),
  KEY `term_taxonomy_id` (`term_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `cx_term_relationships`
--

INSERT INTO `cx_term_relationships` (`tid`, `object_id`, `term_id`, `listorder`, `status`) VALUES
(1, 3, 0, 0, 1),
(2, 4, 0, 0, 1),
(3, 5, 0, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `cx_terms`
--

CREATE TABLE IF NOT EXISTS `cx_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT '',
  `slug` varchar(200) DEFAULT '',
  `taxonomy` varchar(32) DEFAULT '',
  `description` longtext,
  `parent` bigint(20) unsigned DEFAULT '0',
  `count` bigint(20) DEFAULT '0',
  `path` varchar(500) DEFAULT NULL,
  `seo_title` varchar(500) DEFAULT NULL,
  `seo_keywords` varchar(500) DEFAULT NULL,
  `seo_description` varchar(500) DEFAULT NULL,
  `list_tpl` varchar(50) DEFAULT NULL,
  `one_tpl` varchar(50) DEFAULT NULL,
  `listorder` int(5) NOT NULL DEFAULT '0',
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`term_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `cx_terms`
--

INSERT INTO `cx_terms` (`term_id`, `name`, `slug`, `taxonomy`, `description`, `parent`, `count`, `path`, `seo_title`, `seo_keywords`, `seo_description`, `list_tpl`, `one_tpl`, `listorder`, `status`) VALUES
(1, '文章', '', 'article', '文章', 0, 0, '0-1', '', '', '', NULL, NULL, 0, 1),
(2, '图片', '', 'picture', '图片', 0, 0, '0-2', '', '', '', NULL, NULL, 0, 1),
(3, '这个文章', '', 'article', '这个文章', 1, 0, '0-1-3', '', '', '', NULL, NULL, 0, 1),
(4, '另外图片', '', 'article', '', 2, 0, '0-2-4', '', '', '', NULL, NULL, 0, 1),
(5, '下一个文章', '', 'article', '', 3, 0, '0-1-3-5', '', '', '', NULL, NULL, 0, 1),
(6, '又一个', '', 'article', '', 1, 0, '0-1-6', '', '', '', NULL, NULL, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `cx_usermeta`
--

CREATE TABLE IF NOT EXISTS `cx_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cx_users`
--

CREATE TABLE IF NOT EXISTS `cx_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(64) NOT NULL DEFAULT '',
  `user_nicename` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_url` varchar(100) NOT NULL DEFAULT '',
  `last_login_ip` varchar(16) NOT NULL,
  `last_login_time` datetime NOT NULL,
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(60) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '1',
  `display_name` varchar(250) NOT NULL DEFAULT '',
  `role_id` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `cx_users`
--

INSERT INTO `cx_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `last_login_ip`, `last_login_time`, `create_time`, `user_activation_key`, `user_status`, `display_name`, `role_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'admin@admin.com', '', '127.0.0.1', '2014-07-16 19:44:19', '2014-07-14 10:12:45', '', 1, 'admin', 1);

-- --------------------------------------------------------

--
-- 表的结构 `cx_wx_event`
--

CREATE TABLE IF NOT EXISTS `cx_wx_event` (
  `id` int(10) unsigned NOT NULL,
  `ToUserName` varchar(200) DEFAULT NULL,
  `FromUserName` varchar(200) DEFAULT NULL,
  `CreateTime` int(10) unsigned DEFAULT NULL,
  `Event` varchar(20) DEFAULT NULL,
  `EventKey` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `cx_wx_info`
--

CREATE TABLE IF NOT EXISTS `cx_wx_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ToUserName` varchar(200) DEFAULT NULL,
  `FromUserName` varchar(200) DEFAULT NULL,
  `CreateTime` int(10) unsigned DEFAULT NULL,
  `MsgType` varchar(20) DEFAULT NULL,
  `Content` varchar(500) DEFAULT NULL,
  `MsgId` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
