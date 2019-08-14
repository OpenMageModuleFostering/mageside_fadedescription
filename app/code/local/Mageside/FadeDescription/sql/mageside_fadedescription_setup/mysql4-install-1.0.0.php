<?php
/**
 * Mageside
 * Copyright (C) 2015-2016  Mageside <customercare@mageside.com>
 *
 * NOTICE OF LICENSE
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see http://opensource.org/licenses/gpl-3.0.html.
 *
 * @category   Mageside
 * @package    Mageside_FadeDescription
 * @copyright  Copyright (c) 2015-2016 Mageside Co. (http://mageside.com/)
 * @license    http://mageside.com/MS-LICENSE.txt
 * @author     Mageside <extensions@mageside.com>
 */

/* @var $installer Mage_Catalog_Model_Resource_Eav_Mysql4_Setup */
$installer = $this;
$installer->startSetup();

$entityTypeId = Mage_Catalog_Model_Category::ENTITY;

$installer->addAttribute($entityTypeId, 'fade_descrip_height',  array(
    'group'         => 'Display Settings',
    'type'          => 'varchar',
    'label'         => 'Description Height (px)',
    'input'         => 'text',
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'required'      => false,
    'user_defined'  => false,
    'default'       => '',
    'sort_order'    => 100,
));

$installer->addAttribute($entityTypeId, 'fade_descrip_show_text',  array(
    'group'         => 'Display Settings',
    'type'          => 'varchar',
    'label'         => 'Show Description Link',
    'input'         => 'text',
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'required'      => false,
    'user_defined'  => false,
    'default'       => '',
    'sort_order'    => 101,
));

$installer->addAttribute($entityTypeId, 'fade_descrip_hide_text',  array(
    'group'         => 'Display Settings',
    'type'          => 'varchar',
    'label'         => 'Hide Description Link',
    'input'         => 'text',
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'required'      => false,
    'user_defined'  => false,
    'default'       => '',
    'sort_order'    => 102,
));

$installer->endSetup();