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
 * @package    Mageside_Base
 * @copyright  Copyright (c) 2015-2016 Mageside Co. (http://mageside.com/)
 * @license    http://mageside.com/MS-LICENSE.txt
 * @author     Mageside <extensions@mageside.com>
 */

class Mageside_Base_Block_Adminhtml_System_Config_Form_Field_Button extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $value = '';
        $url = '';
        $this->setElement($element);

        $fieldConf = $element->getData('field_config');

        if (isset($fieldConf->value)) {
            $value = $fieldConf->value;
        }

        if (isset($fieldConf->onclickurl)) {
            $url = $fieldConf->onclickurl;
            if (substr($url, 0, 4) != 'http') {
                $url = $this->getUrl($url);
            }
        }

        $html = $this->getLayout()->createBlock('adminhtml/widget_button')
            ->setType('button')
            ->setClass('scalable')
            ->setStyle('min-width: 60px;')
            ->setLabel($value)
            ->setOnClick("this.disabled=true; setLocation('$url');");

        return $html->toHtml();
    }

}