<?
	/**
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

	/**@defgroup IPSSonos_api IPSSonos API
	 * @ingroup IPSSonos
	 * @{
	 *
	 * IPSSonos Server API
	 *
	 * @file          IPSSonos.inc.php
	 * @author        Andreas Brauneis
	 * @version
	 * Version 2.50.1, 31.01.2012<br/>
	 *
	 * Dieses File kann von anderen Scripts per INCLUDE eingebunden werden und enth�lt Funktionen
	 * um alle IPSSonos Funktionen bequem per Funktionsaufruf steueren zu k�nnen.
	 *
	 */

 	include_once 'IPSSonos_Server.class.php';
	

	/**
	 * Ein- und Ausschalten eines einzelnen Raumes
	 *
	 * @param int $instanceId ID des IPSSonos Servers
	 * @param int $roomId Raum der ge�ndert werden soll (0-3)
	 * @param string $value TRUE oder '1' f�r An, FALSE oder '0' f�r Aus
	 * @return boolean Funktions Ergebnis, TRUE f�r OK, FALSE f�r Fehler
	 */
	function IPSSonos_SetRoomPower($roomName, $value) {
		$server = IPSSonos_GetServer();
		return $server->SendData(IPSSONOS_CMD_ROOM, $roomName, IPSSONOS_FNC_POWER, $value);
	}

	/**
	 * Status Raumverst�rker lesen
	 *
	 * @param int $instanceId ID des IPSSonos Servers
	 * @param int $roomId Raum der ausgelesen werden soll (0-3)
	 * @return boolean Status Raumverst�rker
	 */
	function IPSSonos_GetRoomPower($roomName) {
		$server = IPSSonos_GetServer();
		return $server->GetData(IPSSONOS_CMD_ROOM, $roomId, IPSSONOS_FNC_POWER, null);
	}
	
	function IPSSonos_Play($roomName) {
		$server = IPSSonos_GetServer();
		return $server->SendData(IPSSONOS_CMD_AUDIO, $roomName, IPSSONOS_FNC_PLAY, null);
	}

	function IPSSonos_Pause($roomName) {
		$server = IPSSonos_GetServer();
		return $server->SendData(IPSSONOS_CMD_AUDIO, $roomName, IPSSONOS_FNC_PAUSE, null);
	}	
	
	function IPSSonos_Stop($roomName) {
		$server = IPSSonos_GetServer();
		return $server->SendData(IPSSONOS_CMD_AUDIO, $roomName, IPSSONOS_FNC_STOP, null);
	}	
	
	function IPSSonos_Next($roomName) {
		$server = IPSSonos_GetServer();
		return $server->SendData(IPSSONOS_CMD_AUDIO, $roomName, IPSSONOS_FNC_NEXT, null);
	}
	function IPSSonos_Previous($roomName) {
		$server = IPSSonos_GetServer();
		return $server->SendData(IPSSONOS_CMD_AUDIO, $roomName, IPSSONOS_FNC_PREVIOUS, null);
	}	
	/**
	 * Auswahl des Eingangs, der f�r einen bestimmten Raum verwendet werden soll
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param int $roomId Raum der ge�ndert werden soll (0-3)
	 * @param int $value Eingang (1-4)
	 * @return boolean Funktions Ergebnis, TRUE f�r OK, FALSE f�r Fehler
	 */
	function IPSSonos_SetInputSelect($instanceId, $roomId, $value) {
		$server = IPSSonos_GetServer($instanceId);
		return $server->SendData(IPSSONOS_CMD_AUDIO, $roomId, IPSSONOS_FNC_INPUTSELECT, $value);
	}

	/**
	 * Eingangswahlschalter lesen
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param int $roomId Raum der ausgelesen werden soll (0-3)
	 * @return int Eingangswahl (1-4)
	 */
	function IPSSonos_GetInputSelect($instanceId, $roomId) {
		$server = IPSSonos_GetServer($instanceId);
		return $server->GetData(IPSSONOS_CMD_AUDIO, $roomId, IPSSONOS_FNC_INPUTSELECT, null)+1;
	}

	/**
	 * Eingangsverst�rkung setzen
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param int $roomId Raum der ge�ndert werden soll (0-3)
	 * @param int $value Verst�rkung (0-15)
	 * @return boolean Funktions Ergebnis, TRUE f�r OK, FALSE f�r Fehler
	 */
//	function IPSSonos_SetInputGain($instanceId, $roomId, $value) {
//		$server = IPSSonos_GetServer($instanceId);
//		return $server->SendData(IPSSONOS_TYP_SET, IPSSONOS_CMD_AUDIO, $roomId, IPSSONOS_FNC_INPUTGAIN, $value);
//	}

	/**
	 * Eingangsverst�rkung lesen
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param int $roomId Raum der ausgelesen werden soll (0-3)
	 * @return int Verst�rkung (0-15)
	 */
//	function IPSSonos_GetInputGain($instanceId, $roomId) {
//		$server = IPSSonos_GetServer($instanceId);
//		return $server->SendData(IPSSONOS_TYP_GET, IPSSONOS_CMD_AUDIO, $roomId, IPSSONOS_FNC_INPUTGAIN, null);
//	}

	/**
	 * Laust�rke setzen
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param int $roomId Raum der ge�ndert werden soll (0-3)
	 * @param int $value Lautst�rke (0-40)
	 * @return boolean Funktions Ergebnis, TRUE f�r OK, FALSE f�r Fehler
	 */
	function IPSSonos_SetVolume($roomName, $value) {
		$server = IPSSonos_GetServer();
		return $server->SendData(IPSSONOS_CMD_AUDIO, $roomName, IPSSONOS_FNC_VOLUME, $value);
	}
	/**
	 * Laust�rke erh�hen
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param int $roomId Raum der ge�ndert werden soll (0-3)
	 * @param int $value Lautst�rke (0-40)
	 * @return boolean Funktions Ergebnis, TRUE f�r OK, FALSE f�r Fehler
	 */
	function IPSSonos_IncVolume($roomName, $value) {
		$server = IPSSonos_GetServer();
		return $server->SendData(IPSSONOS_CMD_AUDIO, $roomName, IPSSONOS_FNC_VOLUME_INC, $value);
	}
	/**
	 * Laust�rke verringern
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param int $roomId Raum der ge�ndert werden soll (0-3)
	 * @param int $value Lautst�rke (0-40)
	 * @return boolean Funktions Ergebnis, TRUE f�r OK, FALSE f�r Fehler
	 */
	function IPSSonos_DecVolume($roomName, $value) {
		$server = IPSSonos_GetServer();
		return $server->SendData(IPSSONOS_CMD_AUDIO, $roomName, IPSSONOS_FNC_VOLUME_DEC, $value);
	}
		
	/**
	 * Laust�rke lesen
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param int $roomId Raum der ausgelesen werden soll (0-3)
	 * @return int Lautst�rke (0-40)
	 */
	function IPSSonos_GetVolume($instanceId, $roomId) {
		$server = IPSSonos_GetServer($instanceId);
		return $server->GetData(IPSSONOS_CMD_AUDIO, $roomId, IPSSONOS_FNC_VOLUME, null);
	}

	/**
	 * Muting setzen
	 *
	 * @param int $instanceId ID des IPSSonos Servers
	 * @param int $roomId Raum der ge�ndert werden soll (0-3)
	 * @param string $value TRUE oder '1' f�r An, FALSE oder '0' f�r Aus
	 * @return boolean Funktions Ergebnis, TRUE f�r OK, FALSE f�r Fehler
	 */
	function IPSSonos_SetMute($roomName, $value) {
		$server = IPSSonos_GetServer();
		return $server->SendData(IPSSONOS_CMD_AUDIO, $roomName, IPSSONOS_FNC_MUTE, $value);
	}

	/**
	 * Status Muting lesen
	 *
	 * @param int $instanceId ID des IPSSonos Servers
	 * @param int $roomId Raum der ausgelesen werden soll (0-3)
	 * @return boolean Status Muting
	 */
	function IPSSonos_GetMute($instanceId, $roomId) {
		$server = IPSSonos_GetServer($instanceId);
		return $server->GetData(IPSSONOS_CMD_AUDIO, $roomId, IPSSONOS_FNC_MUTE, null);
	}

	/**
	 * Balance setzen
	 *
	 * @param int $instanceId ID des IPSSonos Servers
	 * @param int $roomId Raum der ge�ndert werden soll (0-3)
	 * @param int $value Wert Balance (0-15)
	 * @return boolean Funktions Ergebnis, TRUE f�r OK, FALSE f�r Fehler
	 */
//	function IPSSonos_SetBalance($instanceId, $roomId, $value) {
//		$server = IPSSonos_GetServer($instanceId);
//		return $server->SendData(IPSSONOS_TYP_SET, IPSSONOS_CMD_AUDIO, $roomId, IPSSONOS_FNC_BALANCE, $value);
//	}

	/**
	 * Balance lesen
	 *
	 * @param int $instanceId ID des IPSSonos Servers
	 * @param int $roomId Raum der ausgelesen werden soll (0-3)
	 * @return int Wert Balance (0-15)
	 */
//	function IPSSonos_GetBalance($instanceId, $roomId) {
//		$server = IPSSonos_GetServer($instanceId);
//		return $server->SendData(IPSSONOS_TYP_GET, IPSSONOS_CMD_AUDIO, $roomId, IPSSONOS_FNC_BALANCE, null);
//	}

	/**
	 * Einstellung H�hen
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param int $roomId Raum der ge�ndert werden soll (0-3)
	 * @param int $value Wert H�hen (0-15)
	 * @return boolean Funktions Ergebnis, TRUE f�r OK, FALSE f�r Fehler
	 */
//	function IPSSonos_SetTreble($instanceId, $roomId, $value) {
//		$server = IPSSonos_GetServer($instanceId);
//		return $server->SendData(IPSSONOS_TYP_SET, IPSSONOS_CMD_AUDIO, $roomId, IPSSONOS_FNC_TREBLE, $value);
//	}

	/**
	 * Einstellung H�hen lesen
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param int $roomId Raum der ausgelesen werden soll (0-3)
	 * @return int Wert H�hen (0-15)
	 */
//	function IPSSonos_GetTreble($instanceId, $roomId) {
//		$server = IPSSonos_GetServer($instanceId);
//		return $server->SendData(IPSSONOS_TYP_GET, IPSSONOS_CMD_AUDIO, $roomId, IPSSONOS_FNC_TREBLE, null);
//	}

	/**
	 * Einstellung Mitten
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param int $roomId Raum der ge�ndert werden soll (0-3)
	 * @param int $value Wert Mitten (0-15)
	 * @return boolean Funktions Ergebnis, TRUE f�r OK, FALSE f�r Fehler
	 */
//	function IPSSonos_SetMiddle($instanceId, $roomId, $value) {
//		$server = IPSSonos_GetServer($instanceId);
//		return $server->SendData(IPSSONOS_TYP_SET, IPSSONOS_CMD_AUDIO, $roomId, IPSSONOS_FNC_MIDDLE, $value);
//	}

	/**
	 * Einstellung Mitten lesen
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param int $roomId Raum der ausgelesen werden soll (0-3)
	 * @return int Wert Mitten (0-15)
	 */
//	function IPSSonos_GetMiddle($instanceId, $roomId) {
//		$server = IPSSonos_GetServer($instanceId);
//		return $server->SendData(IPSSONOS_TYP_GET, IPSSONOS_CMD_AUDIO, $roomId, IPSSONOS_FNC_MIDDLE, null);
//	}

	/**
	 * Einstellung Bass setzen
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param int $roomId Raum der ge�ndert werden soll (0-3)
	 * @param int $value Wert Bass (0-15)
	 * @return boolean Funktions Ergebnis, TRUE f�r OK, FALSE f�r Fehler
	 */
//	function IPSSonos_SetBass($instanceId, $roomId, $value) {
//		$server = IPSSonos_GetServer($instanceId);
//		return $server->SendData(IPSSONOS_TYP_SET, IPSSONOS_CMD_AUDIO, $roomId, IPSSONOS_FNC_BASS, $value);
//	}

	/**
	 * Einstellung Bass lesen
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param int $roomId Raum der ausgelesen werden soll (0-3)
	 * @return int Wert Bass (0-15)
	 */
//	function IPSSonos_GetBass($instanceId, $roomId) {
//		$server = IPSSonos_GetServer($instanceId);
//		return $server->SendData(IPSSONOS_TYP_GET, IPSSONOS_CMD_AUDIO, $roomId, IPSSONOS_FNC_BASS, null);
//	}

	/**
	 * Set Mode
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param int $mode Mode (0-4)
	 * @param int $value Wert (0 oder 1)
	 * @return boolean Funktions Ergebnis, TRUE f�r OK, FALSE f�r Fehler
	 */
//	function IPSSonos_SetMode($instanceId, $mode, $value) {
//		$server = IPSSonos_GetServer($instanceId);
//		return $server->SendData(IPSSONOS_TYP_SET, IPSSONOS_CMD_MODE, null, $mode, $value);
//	}

	/**
	 * Get Mode
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param int $mode Mode (0-4)
	 * @return integer Mode Value (0 oder 1)
	 */
//	function IPSSonos_GetMode($instanceId, $mode) {
//		$server = IPSSonos_GetServer($instanceId);
//		return $server->SendData(IPSSONOS_TYP_SET, IPSSONOS_CMD_MODE, null, $mode, null);
//	}

	/**
	 * Set Text
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @param string $text1 Text Zeile 1
	 * @param string $text2 Text Zeile 2
	 * @param string $text3 Text Zeile 3
	 * @return boolean Funktions Ergebnis, TRUE f�r OK, FALSE f�r Fehler
	 */
//	function IPSSonos_SetText($instanceId, $text1, $text2=null, $text3=null) {
//		$server = IPSSonos_GetServer($instanceId);
//		return $server->SendData(IPSSONOS_TYP_SET, IPSSONOS_CMD_TEXT, null, null, $text1.IPSSONOS_COM_SEPARATOR.$text2.IPSSONOS_COM_SEPARATOR.$text3);
//	}

	/**
	 * Get Server
	 *
	 * @param int $instanceId  ID des IPSSonos Servers
	 * @return IPSSonos IPSSonos Server Object
	 */
	function IPSSonos_GetServer() {
	   	$instanceId = IPSUtil_ObjectIDByPath('Program.IPSLibrary.data.modules.IPSSonos.IPSSonos_Server');
		return new IPSSonos_Server($instanceId);
	}


   /** @}*/


?>