<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arActivityDescription = array(
	'NAME' => GetMessage('CRM_ACTIVITY_GET_DATA_ENTITY_NAME'),
	'DESCRIPTION' => GetMessage('CRM_ACTIVITY_GET_DATA_ENTITY_DESC'),
	'TYPE' => 'activity',
	'CLASS' => 'crmidcompareactivity1c',
	'JSCLASS' => 'BizProcActivity',
	'CATEGORY' => array(
		'ID' => 'document',
		"OWN_ID" => 'crm',
		"OWN_NAME" => 'CRM',
	),
	'ADDITIONAL_RESULT' => array('EntityFields')
);