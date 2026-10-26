<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$mcUser = $this->user;
$mcLoggedIn = $mcUser->hasLogin();
$mcCanWrite = $mcLoggedIn && $mcUser->pass('contributor', true);
$mcCanManage = $mcLoggedIn && $mcUser->pass('editor', true);
$mcAdmin = rtrim($this->options->siteUrl, '/') . '/admin/';
?>
