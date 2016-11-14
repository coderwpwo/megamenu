<?php
$installer = $this;
$installer->startSetup();


$installer->addAttribute("catalog_category", "top_content_for_category",  array(
    "group"    => "General Information",
	"type"     => "text",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Top Content For Category",
    "input"    => "textarea",
    "class"    => "",
    "source"   => "",
    "global"   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    "visible"  => true,
    "required" => false,
    "user_defined"  => false,
    "default" => "",
    "searchable" => false,
    "filterable" => false,
    "comparable" => false,
	"wysiwyg_enabled"   => 1,
    "is_html_allowed_on_front" => true,
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => ""

	));

$installer->addAttribute("catalog_category", "bottom_content_for_category",  array(
    "group"    => "General Information",
	"type"     => "text",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Bottom Content For Category",
    "input"    => "textarea",
    "class"    => "",
    "source"   => "",
    "global"   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    "visible"  => true,
    "required" => false,
    "user_defined"  => false,
    "default" => "",
    "searchable" => false,
    "filterable" => false,
    "comparable" => false,
	"wysiwyg_enabled"   => 1,
    "is_html_allowed_on_front" => true,
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => ""

	));

$installer->addAttribute("catalog_category", "left_content_for_category",  array(
    "group"    => "General Information",
	"type"     => "text",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Left Content For Category",
    "input"    => "textarea",
    "class"    => "",
    "source"   => "",
    "global"   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    "visible"  => true,
    "required" => false,
    "user_defined"  => false,
    "default" => "",
    "searchable" => false,
    "filterable" => false,
    "comparable" => false,
	"wysiwyg_enabled"   => 1,
    "is_html_allowed_on_front" => true,
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => "For Parent Category Only"

	));

$installer->addAttribute("catalog_category", "right_content_for_category",  array(
    "group"    => "General Information",
	"type"     => "text",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Right Content For Category",
    "input"    => "textarea",
    "class"    => "",
    "source"   => "",
    "global"   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    "visible"  => true,
    "required" => false,
    "user_defined"  => false,
    "default" => "",
    "searchable" => false,
    "filterable" => false,
    "comparable" => false,
	"wysiwyg_enabled"   => 1,
    "is_html_allowed_on_front" => true,
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => "For Parent Category Only"

	));

$installer->endSetup();
	 