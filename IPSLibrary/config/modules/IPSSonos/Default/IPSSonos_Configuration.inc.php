<?
	/**@defgroup IPSSonos_configuration IPSSonos Konfiguration
	 * @ingroup IPSSonos
	 * @{
	 *
	 * IPSSonos Konfiguration
	 *
	 * @file          IPSSonos_Configuration.inc.php
	 * @author        joki
	 * @version
	 * Version 1.0.0, 01.09.2014<br/>
	 *
	 */
	IPSUtils_Include ("IPSSonos_Constants.inc.php",      "IPSLibrary::app::modules::IPSSonos");
	
	function IPSSonos_GetServerConfiguration() {
		return array(
			IPSSONOS_VAR_IPADDR		=>	'192.168.20.103',	// IP Adresse eines Sonosger�ts, dass m�glichst immer an ist. Steuert zentrale Funktionen wie z.B. Synchronisation der Playlists
			);
	}

	function IPSSonos_GetRoomConfiguration() {
		return array(
			'Wohnzimmer'	=>	array(
				IPSSONOS_VAR_IPADDR		=>	'192.168.20.108', 
				IPSSONOS_VAR_RINCON		=>	'RINCON_000E5829F33A01400',
				IPSSONOS_VAL_MAXVOL		=> 	'25'),
			'Schlafzimmer'	=>	array(
				IPSSONOS_VAR_IPADDR		=>	'192.168.20.105', 
				IPSSONOS_VAR_RINCON		=>	'RINCON_000E5872E10801400',
				IPSSONOS_VAL_MAXVOL		=> 	'25'),				
			'Kueche'		=>	array(
				IPSSONOS_VAR_IPADDR		=>	'192.168.20.103', 
				IPSSONOS_VAR_RINCON		=>	'RINCON_000E582732C001400',
				IPSSONOS_VAL_MAXVOL		=> 	'25'),				
			);
	}

	/** @}*/
?>