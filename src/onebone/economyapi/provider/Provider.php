<?php

/*
 * EconomyS, the massive economy plugin with many features for PocketMine-MP
 * Copyright (C) 2013-2016  onebone <jyc00410@gmail.com>
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
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace onebone\economyapi\provider;

use onebone\economyapi\EconomyAPI;

interface Provider{

	public function __construct(EconomyAPI $plugin);

	public function open();

	public function accountExists($player);

	public function createAccount($player, $defaultMoney = 1000);

	public function removeAccount($player);

	public function getMoney($player);

	public function setMoney($player, $amount);

	public function addMoney($player, $amount);

	public function reduceMoney($player, $amount);

	public function getRank($player);

	public function getPlayerByRank($rank);

	public function getAll();

	public function getName();

	public function save();

	public function close();
}