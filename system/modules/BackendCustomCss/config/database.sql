-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

-- 
-- Table `tl_user`
-- 

CREATE TABLE `tl_user` (
  `backendCustomCssActive` char(1) NOT NULL default '',
  `backendCustomCssTemplateStyles` blob NULL,
  `backendCustomCssSystemStyles` blob NULL,
  `backendCustomCssUserStyles` blob NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;