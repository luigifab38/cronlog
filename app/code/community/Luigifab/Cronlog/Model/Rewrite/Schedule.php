<?php
/**
 * Created S/16/05/2015
 * Updated S/16/05/2015
 * Version 1
 *
 * Copyright 2012-2015 | Fabrice Creuzot (luigifab) <code~luigifab~info>
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

class Luigifab_Cronlog_Model_Rewrite_Schedule extends Mage_Cron_Model_Schedule {

	public function setExecutedAt($date) {

		$this->setData('executed_at', $date);
		$this->setData('status', Mage_Cron_Model_Schedule::STATUS_RUNNING);

		return $this;
	}
}