/*
Navicat MySQL Data Transfer

Source Server         : locahost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : wr

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-08-27 18:20:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `content`
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nav-id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `text-left` text,
  `text-right` text,
  `type` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `column-id` (`nav-id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES ('25', '1', 'bottles1.jpg', null, null, '1');
INSERT INTO `content` VALUES ('26', '1', '80-clients.jpg', null, null, '1');
INSERT INTO `content` VALUES ('30', '2', 'cygnus_reddot.jpg', null, '&lt;p style=&quot;margin-top:0px;margin-bottom:10px;padding:0px;border:0px;outline:0px;font-size:14px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;The Mk5 gauge was required to be tough, impact resistant, waterproof and simple to operate. The use in harsh environments was the foremost design requirement with function dictating the form. The final ergonomic shape makes it ideal for operators with gloved hands. A combination of polycarbonate and rubber TPE creates sealed windows for the displays and a durable outer body.&lt;/p&gt;&lt;p style=&quot;margin-top:0px;margin-bottom:10px;padding:0px;border:0px;outline:0px;font-size:14px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;&lt;em style=&quot;margin:0px;padding:0px;border:0px;outline:0px;vertical-align:baseline;background:transparent;&quot;&gt;WDL: industrial design concepts through to engineering in Pro/ENGINEER, UK tooling.&lt;/em&gt;&lt;/p&gt;&lt;p style=&quot;margin-top:0px;margin-bottom:10px;padding:0px;border:0px;outline:0px;font-size:14px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;“We wanted to work with a design firm that would genuinely listen and care about the detail that was essential to us. They also needed to be skilled enough to bring to bear a genuine depth of experience and expertise. We are exceptionally pleased with WDL and really look forward to working with them again.”&lt;/p&gt;&lt;p style=&quot;margin-top:0px;margin-bottom:10px;padding:0px;border:0px;outline:0px;font-size:14px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;&lt;span style=&quot;margin:0px;padding:0px;border:0px;outline:0px;vertical-align:baseline;font-weight:600;background:transparent;&quot;&gt;&lt;em style=&quot;margin:0px;padding:0px;border:0px;outline:0px;vertical-align:baseline;background:transparent;&quot;&gt;Cygnus Instruments Managing Director&lt;/em&gt;&lt;/span&gt;&lt;/p&gt;', '2');
INSERT INTO `content` VALUES ('32', '3', null, '&lt;h3 style=&quot;margin:0px 0px 10px;padding:0px;border:0px;outline:0px;font-size:16px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;At WDL we design and develop solutions that provide our clients with a distinctive, competitive edge, creating a product experience that underpins the value of their brand. We challenge convention when appropriate and understand that design and innovation is about making a difference.&lt;/h3&gt;&lt;h3 style=&quot;margin:0px 0px 10px;padding:0px;border:0px;outline:0px;font-size:16px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;&lt;span style=&quot;margin:0px;padding:0px;border:0px;outline:0px;vertical-align:baseline;color:#F70775;background:transparent;&quot;&gt;It’s not about us it’s about you&lt;/span&gt;&lt;/h3&gt;&lt;p style=&quot;margin-top:0px;margin-bottom:10px;padding:0px;border:0px;outline:0px;font-size:14px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;We appreciate that it’s your product, it’s your company and the product experience will represent your company values.&lt;/p&gt;&lt;p style=&quot;margin-top:0px;margin-bottom:10px;padding:0px;border:0px;outline:0px;font-size:14px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;We don’t just work for our clients, we work with our clients. We establish a clear understanding of business and project objectives, drawing on our wealth of experience to develop project briefs, define project direction and provide solutions that maximise product impact.&lt;/p&gt;&lt;p style=&quot;margin-top:0px;margin-bottom:10px;padding:0px;border:0px;outline:0px;font-size:14px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;Ultimately our success is based on that of our clients&lt;/p&gt;&lt;h3 style=&quot;margin:0px 0px 10px;padding:0px;border:0px;outline:0px;font-size:16px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;&lt;span style=&quot;margin:0px;padding:0px;border:0px;outline:0px;vertical-align:baseline;color:#F70775;background:transparent;&quot;&gt;What makes a great brand?&lt;/span&gt;&lt;/h3&gt;&lt;p style=&quot;margin-top:0px;margin-bottom:10px;padding:0px;border:0px;outline:0px;font-size:14px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;A great brand is more than a slick identity. A great brand will embody the fundamental values of the company in every aspect of the business. We therefore ensure that a product provides an overall experience that supports a clients principles and ambitions.&lt;/p&gt;', '&lt;h3 style=&quot;margin:0px 0px 10px;padding:0px;border:0px;outline:0px;font-size:16px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;&lt;span style=&quot;margin:0px;padding:0px;border:0px;outline:0px;vertical-align:baseline;color:#F70775;background:transparent;&quot;&gt;What makes a great product?&lt;/span&gt;&lt;/h3&gt;&lt;p style=&quot;margin-top:0px;margin-bottom:10px;padding:0px;border:0px;outline:0px;font-size:14px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;Every product that we develop involves interaction with people. A great product will provide a positive experience at every point of contact. Components must be sourced or manufactured successfully, the product can be assembled efficiently, there is an effective route to market and it delivers the maximum benefit to the client and end user&lt;/p&gt;&lt;h3 style=&quot;margin:0px 0px 10px;padding:0px;border:0px;outline:0px;font-size:16px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;&lt;span style=&quot;margin:0px;padding:0px;border:0px;outline:0px;vertical-align:baseline;color:#F70775;background:transparent;&quot;&gt;Why use WDL?&lt;/span&gt;&lt;/h3&gt;&lt;p style=&quot;margin-top:0px;margin-bottom:10px;padding:0px;border:0px;outline:0px;font-size:14px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;Since our inception 1996 our fundamental value was to design great looking products that are fit for purpose and well-engineered. We have always challenged convention encouraging change where change provides a better and more competitive solution. Products that we design today are thoroughly thought through with consideration given to the total lifecycle of the product, defining the experience and interaction of the end user in a solution that can be successfully realised.&lt;/p&gt;&lt;p style=&quot;margin-top:0px;margin-bottom:10px;padding:0px;border:0px;outline:0px;font-size:14px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;There are fewer elements within a good working relationship that are more critical than good communication. We listen, we question, we support.&lt;/p&gt;&lt;p style=&quot;margin-top:0px;margin-bottom:10px;padding:0px;border:0px;outline:0px;font-size:14px;vertical-align:baseline;color:#939393;font-family:Calibri, Candara, Segoe, &quot;line-height:normal;white-space:normal;background:#FFFFFF;&quot;&gt;We’re proud of the fact that WDL today has a multitude of well established relationships with clients that date right back to the birth of the company.&lt;/p&gt;', '3');

-- ----------------------------
-- Table structure for `nav`
-- ----------------------------
DROP TABLE IF EXISTS `nav`;
CREATE TABLE `nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nav-name` varchar(255) NOT NULL,
  `sort` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sort` (`sort`),
  KEY `nav-name` (`nav-name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nav
-- ----------------------------
INSERT INTO `nav` VALUES ('1', 'snapshot', '1');
INSERT INTO `nav` VALUES ('2', 'wdl news', '2');
INSERT INTO `nav` VALUES ('3', 'about wdl', '3');
