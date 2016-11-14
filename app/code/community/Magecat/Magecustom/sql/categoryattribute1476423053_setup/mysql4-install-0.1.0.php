<?php
$installer = $this;
$installer->startSetup();


$installer->addAttribute("catalog_category", "content_block_location_cat",  array(
    'group'    => 'General Information',
    "type"     => "int",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Content block Location for Category",
    "input"    => "select",
    "class"    => "",
    "source"   => "magecustom/eav_entity_attribute_source_categoryoptions14764230530",
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
    "note"       => "Left and right is available for Parent Level only!"

	));
$installer->endSetup();
	 