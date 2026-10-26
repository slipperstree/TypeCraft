<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
 $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('heroText', NULL, '探索、创造、记录每一天', _t('首页标语')));
 $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('accent', NULL, '#77b94b', _t('主题强调色')));
}
function themeFields($layout) {}
