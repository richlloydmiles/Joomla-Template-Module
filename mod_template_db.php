<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
//Parameters
$document				= JFactory::getDocument();
$uniqid 				= $module->id;

// Include the syndicate functions only once
require_once( dirname(__FILE__).'/helper.php' );

// $document->addStyleSheet('modules/mod_product_slider/assets/css/template.css');
// $document->addScript('modules/mod_product_slider/assets/js/template.js');

$items = modTemplateDBHelper::getTemplate();
$heading =  $params->get('heading');
require JModuleHelper::getLayoutPath('mod_template_db', $params->get('layout', 'default'));

