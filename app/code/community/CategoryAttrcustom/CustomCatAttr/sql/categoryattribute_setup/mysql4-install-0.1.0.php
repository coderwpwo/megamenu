<?php
$installer = $this;
$installer->startSetup();

$installer->addAttribute("catalog_category", "tab_hex_color",  array(
    'group'         => 'General Information',
    "type"     => "varchar",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Category Tab Color",
    "input"    => "text",
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
	
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => "Add category tab color here with hexadecimal code e.g '#000000(Black)'."

	));

$installer->addAttribute("catalog_category", "cat_tab_label",  array(
    'group'         => 'General Information',
    "type"     => "varchar",
    "backend"  => "catalog/category_attribute_backend_image",
    "frontend" => "",
    "label"    => "Label for Category",
    "input"    => "image",
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
	
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => ""

	));

$installer->addAttribute("catalog_category", "drop_down_width",  array(
    'group'         => 'General Information',
    "type"     => "varchar",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Drop-Down Width",
    "input"    => "text",
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
	
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => ""

	));

$installer->addAttribute("catalog_category", "coloum_structure",  array(
    'group'         => 'General Information',
    "type"     => "varchar",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Column structure",
    "input"    => "text",
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
	
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => "Select how many columns should be displayed (1 to a maximum of 8)"

	));

$installer->addAttribute("catalog_category", "levels",  array(
    'group'         => 'General Information',
    "type"     => "varchar",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Category levels",
    "input"    => "text",
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
	
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => ""

	));

$installer->addAttribute("catalog_category", "custom_url",  array(
    'group'    => 'General Information',
    "type"     => "varchar",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Custom Url For Category",
    "input"    => "text",
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
	
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => ""

	));

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
	
$installer->addAttribute("catalog_category", "proportions_left_block",  array(
    'group'    => 'General Information',
    "type"     => "varchar",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Proportions Left Block",
    "input"    => "text",
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
	
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => ""

	));

$installer->addAttribute("catalog_category", "proportions_subcategoreis",  array(
    'group'    => 'General Information',
    "type"     => "varchar",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Proportions Subcategories",
    "input"    => "text",
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
	
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => ""

	));

$installer->addAttribute("catalog_category", "proportions_right_block",  array(
    'group'    => 'General Information',
    "type"     => "varchar",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Proportions Right Block",
    "input"    => "text",
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
	
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => ""

	));

$installer->addAttribute("catalog_category", "li_width_second_level",  array(
    "group"    => "General Information",
	"type"     => "varchar",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Width For Second Level",
    "input"    => "text",
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
	
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => "Only for second level sub category"

	));

$installer->addAttribute("catalog_category", "drop_break_point",  array(
    "group"    => "General Information",
	"type"     => "varchar",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Break Drop-down subcategories",
    "input"    => "text",
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
	
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => "Break Drop-down subcategories after nth element(like 4,5,6).",

	));


$installer->endSetup();
	 