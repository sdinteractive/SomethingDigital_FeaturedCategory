<?php
/* @var $installer SomethingDigital_FeaturedCategory_Model_Entity_Setup */
$installer = $this;
$installer->startSetup();

$this->addAttribute(Mage_Catalog_Model_Category::ENTITY, 'featured_category', array(
	'group'            => 'General Information',
	'type'             => 'int',
	'input'            => 'select',
	'source'           => 'eav/entity_attribute_source_boolean',
	'label'            => 'Featured',
	'backend'          => '',
	'visible'          => true,
	'required'         => false,
	'visible_on_front' => true,
	'global'           => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));

$installer->endSetup();
