<?php
/**
 * src/pocketmine/network/CachedEncapsulatedPacket.php
 *
 * @package default
 */


/*
 *
 *  _                       _           _ __  __ _
 * (_)                     (_)         | |  \/  (_)
 *  _ _ __ ___   __ _  __ _ _  ___ __ _| | \  / |_ _ __   ___
 * | | '_ ` _ \ / _` |/ _` | |/ __/ _` | | |\/| | | '_ \ / _ \
 * | | | | | | | (_| | (_| | | (_| (_| | | |  | | | | | |  __/
 * |_|_| |_| |_|\__,_|\__, |_|\___\__,_|_|_|  |_|_|_| |_|\___|
 *                     __/ |
 *                    |___/
 *
 * This program is a third party build by ImagicalMine.
 *
 * PocketMine is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author ImagicalMine Team
 * @link http://forums.imagicalcorp.ml/
 *
 *
*/

namespace pocketmine\network;

use raklib\protocol\EncapsulatedPacket;

class CachedEncapsulatedPacket extends EncapsulatedPacket{

	private $internalData = null;

	/**
	 *
	 * @param unknown $internal (optional)
	 * @return unknown
	 */
	public function toBinary($internal = false) {
		return $this->internalData === null ? ($this->internalData = parent::toBinary($internal)) : $this->internalData;
	}


}
