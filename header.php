<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array('category'=>_t('分类 %s 下的文章'), 'search'=>_t('包含关键字 %s 的文章'), 'tag'=>_t('标签 %s 下的文章'), 'author'=>_t('%s 发布的文章')), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/assets/css/001.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/assets/css/font-awesome.min.css'); ?>">
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('/assets/img/favicon.ico'); ?>" type="image/x-icon">
    <link rel="icon" href="<?php $this->options->themeUrl('/assets/img/favicon.ico'); ?>" type="image/x-icon">
    <?php $this->header('wlw=&xmlrpc=&rss2=&atom=&rss1=&template=&pingback=&generator'); ?>
</head>
<body>