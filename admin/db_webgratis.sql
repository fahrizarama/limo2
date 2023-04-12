/*
Navicat MySQL Data Transfer

Source Server         : Server Local
Source Server Version : 50532
Source Host           : 127.0.0.1:3306
Source Database       : db_webgratis

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2017-10-25 13:30:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `admin_nama` varchar(50) DEFAULT NULL,
  `admin_username` varchar(100) DEFAULT NULL,
  `admin_password` varchar(32) DEFAULT NULL,
  `admin_view_password` varchar(32) DEFAULT NULL,
  `admin_level` char(2) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'admin', 'e00cf25ad42683b3df678c61f42c6bda', 'admin1', '1');

-- ----------------------------
-- Table structure for form_kontak
-- ----------------------------
DROP TABLE IF EXISTS `form_kontak`;
CREATE TABLE `form_kontak` (
  `id_form` int(11) NOT NULL AUTO_INCREMENT,
  `nama_form` varchar(100) NOT NULL,
  `email_form` varchar(100) NOT NULL,
  `phone_form` varchar(30) NOT NULL,
  `pesan_form` text NOT NULL,
  PRIMARY KEY (`id_form`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of form_kontak
-- ----------------------------
INSERT INTO `form_kontak` VALUES ('1', 'a', 'as@a.com', 'skj', 'kjkas');
INSERT INTO `form_kontak` VALUES ('2', '0', '0', '0', '0');
INSERT INTO `form_kontak` VALUES ('3', 'e', 'edwinlaksono12@gmail.com', '456', 'rtert');
INSERT INTO `form_kontak` VALUES ('4', 'a', 'edwinlaksono12@gmail.com', '345', 'awdw');
INSERT INTO `form_kontak` VALUES ('5', 'ew', 'edwinlaksono12@gmail.com', '45', 'dsfsd');

-- ----------------------------
-- Table structure for mainmenu
-- ----------------------------
DROP TABLE IF EXISTS `mainmenu`;
CREATE TABLE `mainmenu` (
  `seq` int(11) NOT NULL AUTO_INCREMENT,
  `idmenu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `active_menu` varchar(50) NOT NULL,
  `icon_class` varchar(50) NOT NULL,
  `link_menu` varchar(50) NOT NULL,
  `menu_akses` varchar(12) NOT NULL,
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `entry_user` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`seq`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mainmenu
-- ----------------------------
INSERT INTO `mainmenu` VALUES ('1', '1', 'Dashboard', '', 'menu-icon fa fa-tachometer', 'Home', '', '2017-10-17 12:28:54', null);
INSERT INTO `mainmenu` VALUES ('8', '8', 'Administrator', '', 'menu-icon fa fa-user', '#', '', '2017-10-13 12:57:17', null);
INSERT INTO `mainmenu` VALUES ('2', '2', 'Slider', '', 'menu-icon fa fa-file-image-o', 'Slider', '', '2017-10-17 12:28:56', null);
INSERT INTO `mainmenu` VALUES ('3', '3', 'About', '', 'menu-icon fa fa-newspaper-o', 'About', '', '2017-10-17 12:29:00', null);
INSERT INTO `mainmenu` VALUES ('4', '4', 'Produk', '', 'menu-icon fa fa-briefcase', 'Produk', '', '2017-10-17 12:29:05', null);
INSERT INTO `mainmenu` VALUES ('5', '5', 'Gallery', '', 'menu-icon fa fa-file-image-o', 'Gallery', '', '2017-10-17 12:29:09', null);
INSERT INTO `mainmenu` VALUES ('6', '6', 'Kontak', '', 'menu-icon fa fa-book', 'Kontak', '', '2017-10-17 12:29:11', null);

-- ----------------------------
-- Table structure for submenu
-- ----------------------------
DROP TABLE IF EXISTS `submenu`;
CREATE TABLE `submenu` (
  `id_sub` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sub` varchar(50) NOT NULL,
  `mainmenu_idmenu` int(11) NOT NULL,
  `active_sub` varchar(20) NOT NULL,
  `icon_class` varchar(100) NOT NULL,
  `link_sub` varchar(50) NOT NULL,
  `sub_akses` varchar(12) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `entry_user` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_sub`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of submenu
-- ----------------------------
INSERT INTO `submenu` VALUES ('1', 'Entry User', '8', '', '', 'User', '', '2017-10-17 12:28:25', null);
INSERT INTO `submenu` VALUES ('2', 'Kategori Produk', '4', '', '', 'Produk', '', '2017-10-17 12:34:17', null);
INSERT INTO `submenu` VALUES ('3', 'Produk', '4', '', '', 'Produk/detail', '', '2017-10-17 12:34:26', null);
INSERT INTO `submenu` VALUES ('4', 'Album', '5', '', '', 'Gallery', '', '2017-10-17 12:34:34', null);
INSERT INTO `submenu` VALUES ('5', 'Foto', '5', '', '', 'Gallery/foto', '', '2017-10-17 12:34:40', null);

-- ----------------------------
-- Table structure for tab_akses_mainmenu
-- ----------------------------
DROP TABLE IF EXISTS `tab_akses_mainmenu`;
CREATE TABLE `tab_akses_mainmenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `c` int(11) DEFAULT '0',
  `r` int(11) DEFAULT '0',
  `u` int(11) DEFAULT '0',
  `d` int(11) DEFAULT '0',
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `entry_user` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_akses_mainmenu
-- ----------------------------
INSERT INTO `tab_akses_mainmenu` VALUES ('1', '1', '1', null, '1', null, null, '2017-09-25 11:49:01', 'direktur');
INSERT INTO `tab_akses_mainmenu` VALUES ('2', '8', '1', '0', '0', '0', '0', '2017-10-18 13:47:26', '');
INSERT INTO `tab_akses_mainmenu` VALUES ('3', '2', '1', '0', '1', '0', '0', '2017-10-13 14:29:46', '');
INSERT INTO `tab_akses_mainmenu` VALUES ('4', '3', '1', '0', '1', '0', '0', '2017-10-14 09:31:55', '');
INSERT INTO `tab_akses_mainmenu` VALUES ('5', '4', '1', '0', '1', '0', '0', '2017-10-15 14:22:01', '');
INSERT INTO `tab_akses_mainmenu` VALUES ('6', '5', '1', '0', '1', '0', '0', '2017-10-15 14:24:32', '');
INSERT INTO `tab_akses_mainmenu` VALUES ('7', '6', '1', '0', '1', '0', '0', '2017-10-18 13:47:15', '');

-- ----------------------------
-- Table structure for tab_akses_submenu
-- ----------------------------
DROP TABLE IF EXISTS `tab_akses_submenu`;
CREATE TABLE `tab_akses_submenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sub_menu` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `c` int(11) DEFAULT '0',
  `r` int(11) DEFAULT '0',
  `u` int(11) DEFAULT '0',
  `d` int(11) DEFAULT '0',
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `entry_user` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_akses_submenu
-- ----------------------------
INSERT INTO `tab_akses_submenu` VALUES ('1', '1', '1', '0', '1', '0', '0', '2017-10-13 12:45:40', '');
INSERT INTO `tab_akses_submenu` VALUES ('2', '2', '1', '0', '1', '0', '0', '2017-10-15 17:59:02', '');
INSERT INTO `tab_akses_submenu` VALUES ('3', '3', '1', '0', '0', '0', '0', '2017-10-17 23:12:32', '');
INSERT INTO `tab_akses_submenu` VALUES ('4', '4', '1', '0', '1', '0', '0', '2017-10-15 17:59:16', '');
INSERT INTO `tab_akses_submenu` VALUES ('5', '5', '1', '0', '0', '0', '0', '2017-10-17 23:12:33', '');

-- ----------------------------
-- Table structure for tb_about
-- ----------------------------
DROP TABLE IF EXISTS `tb_about`;
CREATE TABLE `tb_about` (
  `id_about` int(11) NOT NULL AUTO_INCREMENT,
  `about_logo` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `about_deskripsi` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `id_admin` int(11) DEFAULT NULL,
  `about_title_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `about_deskripsi_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `about_keyword_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_about`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_about
-- ----------------------------
INSERT INTO `tb_about` VALUES ('1', 'a.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquid scire se gaudeant? Immo alio genere; Quod vestri non item. Duo Reges: constructio interrete. Est enim effectrix multarum et magnarum voluptatum. Sed quanta sit alias, nunc tantum possitne esse tanta. Sint ista Graecorum; Consequens enim est et post oritur, ut dixi.</p>', '1', 'cc', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquid scire se gaudeant? Immo alio genere; Quod vestri non item. Duo Reges: constructio interrete. Est enim effectrix multarum et magna', 'aa');

-- ----------------------------
-- Table structure for tb_album
-- ----------------------------
DROP TABLE IF EXISTS `tb_album`;
CREATE TABLE `tb_album` (
  `id_album` int(11) NOT NULL AUTO_INCREMENT,
  `album_nama` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `album_gambar` varchar(200) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `album_title_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `album_deskripsi_meta` varchar(200) DEFAULT NULL,
  `album_keyword_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_album
-- ----------------------------
INSERT INTO `tb_album` VALUES ('1', 'Outbond', null, '1', null, null, null);
INSERT INTO `tb_album` VALUES ('2', 'Meeting', null, '1', null, null, null);
INSERT INTO `tb_album` VALUES ('4', 'vvv', '.jpg', '1', 'vvv', '', 'vvv');

-- ----------------------------
-- Table structure for tb_foto
-- ----------------------------
DROP TABLE IF EXISTS `tb_foto`;
CREATE TABLE `tb_foto` (
  `id_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_nama` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `gallery_gambar` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_album` int(11) DEFAULT NULL,
  `gallery_title_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `gallery_deskripsi_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `gallery_keyword_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_gallery`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_foto
-- ----------------------------
INSERT INTO `tb_foto` VALUES ('1', 'outband', 'thumb-4.jpg', '1', '1', null, 'aaaaaaaaa', null);
INSERT INTO `tb_foto` VALUES ('2', 'meeting', 'spa5.jpg', '1', '1', null, null, null);
INSERT INTO `tb_foto` VALUES ('5', 'bbb', 'image-1.jpg', '1', '4', 'bbb', '<p><br data-mce-bogus=\"1\"></p>', 'bbb');

-- ----------------------------
-- Table structure for tb_kategori_produk
-- ----------------------------
DROP TABLE IF EXISTS `tb_kategori_produk`;
CREATE TABLE `tb_kategori_produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `produk_utama` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `produk_title_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `produk_deskripsi_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `produk_keyword_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_kategori_produk
-- ----------------------------
INSERT INTO `tb_kategori_produk` VALUES ('1', 'room medium', '1', 'aaaa', '<p>aaaa</p>', '');
INSERT INTO `tb_kategori_produk` VALUES ('2', 'room premium', '1', 'room premium', '<p>room premium</p>', 'room premium');
INSERT INTO `tb_kategori_produk` VALUES ('3', 'room delux', null, null, null, null);

-- ----------------------------
-- Table structure for tb_kontak
-- ----------------------------
DROP TABLE IF EXISTS `tb_kontak`;
CREATE TABLE `tb_kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `kontak_lat` varchar(100) DEFAULT NULL,
  `kontak_long` varchar(100) DEFAULT NULL,
  `kontak_deskripsi` text,
  `kontak_judul` varchar(30) DEFAULT NULL,
  `kontak_title_meta` varchar(200) DEFAULT NULL,
  `kontak_deskripsi_meta` text,
  `kontak_keyword_meta` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_kontak
-- ----------------------------
INSERT INTO `tb_kontak` VALUES ('1', 'Hotel ', 'Hotel Viride', '<span class=\"contact-info\">Address: <em>322 Moon St, Venice\r\n                                            Italy, 1231</em></span><br><span class=\"contact-info\">Phone: <em>0039 12345 6789</em></span><br><span class=\"contact-info\">Email: <a href=\"#\"><em>hello@viride.com</em></a></span>', 'Hotel Viride', 'Hotel Viride', '<span class=\"contact-info\">Address: <em>322 Moon St, Venice\r\n                                            Italy, 1231</em></span><br><span class=\"contact-info\">Phone: <em>0039 12345 6789</em></span><br><span class=\"contact-info\">Email: <a href=\"#\"><em>hello@viride.com</em></a></span>', 'Hotel Viride');

-- ----------------------------
-- Table structure for tb_produk
-- ----------------------------
DROP TABLE IF EXISTS `tb_produk`;
CREATE TABLE `tb_produk` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `detail_judul` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `detail_deskripsi` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `detail_gambar` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_produk` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `detail_title_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `detail_deskripsi_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `detail_keyword_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_produk
-- ----------------------------
INSERT INTO `tb_produk` VALUES ('1', 'Welcome', 'A Place Feels Like Home', 'home1.jpg', null, '1', null, null, null);
INSERT INTO `tb_produk` VALUES ('2', 'Hai', 'Hem', 'meteor.jpg', null, '1', '', '', '');
INSERT INTO `tb_produk` VALUES ('3', 'Hai', 'Hem', 'home2.jpg', null, '3', '', '', '');
INSERT INTO `tb_produk` VALUES ('5', 'aku', '<p>aku</p>', 'a.jpg', '1', '2', 'ccc', '<p>ccc</p>', 'ccc');
INSERT INTO `tb_produk` VALUES ('6', 'BBBB', '<p>bbbb</p>', 'BBBB.jpg', '1', '3', 'vvv', '<p>vvvv</p>', 'vvv');

-- ----------------------------
-- Table structure for tb_slider
-- ----------------------------
DROP TABLE IF EXISTS `tb_slider`;
CREATE TABLE `tb_slider` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `slider_judul` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `slider_deskripsi` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `slider_gambar` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_slider
-- ----------------------------
INSERT INTO `tb_slider` VALUES ('1', 'Welcom', '<p>A Place Feels Like Home</p>', 'home1.jpg', '1');
INSERT INTO `tb_slider` VALUES ('2', 'Room', 'We Have A Room Special Same In Home', 'home2.jpg', null);

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('0', 'ew', 'edwin.jpg');

-- ----------------------------
-- Table structure for user_type
-- ----------------------------
DROP TABLE IF EXISTS `user_type`;
CREATE TABLE `user_type` (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_name` varchar(200) NOT NULL,
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_type
-- ----------------------------
INSERT INTO `user_type` VALUES ('1', 'Administrator');
