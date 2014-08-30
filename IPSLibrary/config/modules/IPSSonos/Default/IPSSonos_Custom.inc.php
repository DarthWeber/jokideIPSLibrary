<?
	/*
	 * This file is part of the IPSLibrary.
	 *
	 * The IPSLibrary is free software: you can redistribute it and/or modify
	 * it under the terms of the GNU General Public License as published
	 * by the Free Software Foundation, either version 3 of the License, or
	 * (at your option) any later version.
	 *
	 * The IPSLibrary is distributed in the hope that it will be useful,
	 * but WITHOUT ANY WARRANTY; without even the implied warranty of
	 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	 * GNU General Public License for more details.
	 *
	 * You should have received a copy of the GNU General Public License
	 * along with the IPSLibrary. If not, see http://www.gnu.org/licenses/gpl.txt.
	 */

	/**@addtogroup IPSSonos_configuration
	 * @{
	 *
	 *
	 * @file          IPSSonos_Custom.inc.php
	 * @author        joki
	 * @version
	 * Version 1.0.0, 01.09.2014<br/>
	 *
	 * Callback Methoden f�r IPSSonos
	 *
	 */

	/**
	 * This function is getting called when a room is switched on
	 *
	 * Parameters:
	 *   @param string $room_name name of the room in IPSSonos
	 *   @param boolean $value value on/off
	 *   @result boolean 
	 *
	 */
	function IPSSonos_Custom_SetRoomPower($room_name, $value) {

		return true;
	}
	
	/**
	 * This function is getting called when IPSSonos detects that a Sonos device was switched on and is now reachable.
	 * There can be a delay of 30 sec when a power switch is used to shutdown the Sonos device.
	 *
	 * Parameters:
	 *   @param string $room_name name of the room in which the device was detected as "on"
	 *
	 */	
	function IPSSonos_Custom_RoomPowerOn($room_name) {
	
		return true;
	}
	/** @}*/

?>