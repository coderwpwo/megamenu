<?php
$installer = $this;
$installer->startSetup();


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