<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
  <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
  <?php $this->header(); ?>
</head>
<body>
	<div class="container">
	  <nav id="nav">
	  	<a href="<?php $this->options->siteUrl(); ?>" class="site-title"><?php $this->options->title() ?></a>
	  	<div class="category">
			  <?php $this->widget('Widget_Metas_Category_List')->parse('<a href="{permalink}">{name}</a>'); ?>
			</div>
	  </nav>
	  <div class="clear"></div>
  

