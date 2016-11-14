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
$installer->endSetup();
	 