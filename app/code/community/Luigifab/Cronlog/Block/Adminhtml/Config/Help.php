<?php
/**
 * Created V/23/05/2014
 * Updated M/13/09/2016
 * Version 3
 *
 * Copyright 2012-2016 | Fabrice Creuzot (luigifab) <code~luigifab~info>
 * https://redmine.luigifab.info/projects/magento/wiki/cronlog
 *
 * This program is free software, you can redistribute it or modify
 * it under the terms of the GNU General Public License (GPL) as published
 * by the free software foundation, either version 2 of the license, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but without any warranty, without even the implied warranty of
 * merchantability or fitness for a particular purpose. See the
 * GNU General Public License (GPL) for more details.
 */

class Luigifab_Cronlog_Block_Adminhtml_Config_Help extends Mage_Adminhtml_Block_Abstract implements Varien_Data_Form_Element_Renderer_Interface {

	public function render(Varien_Data_Form_Element_Abstract $element) {
		$url = 'https://redmine.luigifab.info/projects/magento/wiki/cronlog';
		return sprintf('<p class="box">Luigifab/Cronlog %s <a href="%s" onclick="window.open(this.href); return false;" style="float:right;">%2$s</a></p>', $this->helper('cronlog')->getVersion(), $url);
	}
}