<?php
$installer = $this;
$installer->startSetup();


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
$installer->endSetup();
	 