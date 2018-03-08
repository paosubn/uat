<?php
/*La siguiente función recibe un usuario y contraseña por parámetros, autentifica contra active directory y devuelve el status: 0 = usuario o contraseña inválidos, 1 = datos correctos pero no pertenece al grupo, 2 = autentificación correcta*/
function login($usuario,$pass) {
    $ip = "192.108.24.107";
	$dn = "OU=FGE,DC=fiscaliaveracruz,DC=gob,DC=mx";
	$grupo = "ZZ";
	$dominio = '@fiscaliaveracruz.gob.mx';
	$mensaje = '';
	$conexion = ldap_connect($ip);
	ldap_set_option($conexion,LDAP_OPT_PROTOCOL_VERSION,3);
	ldap_set_option($conexion,LDAP_OPT_REFERRALS,0);
	if($bind = @ldap_bind($conexion, $usuario.$dominio, $pass)) {
		$filtro = "(sAMAccountName=".$usuario.")";
		$attr = array("memberof","extensionattribute1","extensionattribute2");
		$result = ldap_search($conexion, $dn, $filtro, $attr);
		$entries = ldap_get_entries($conexion, $result);
		ldap_unbind($conexion);
		foreach($entries[0]['memberof'] as $grps) {		
			if(strpos($grps, $grupo)!==FALSE) { 
				$mensaje = 2;
				break;
			}
			else{
				$mensaje = 1;
			}
		}
	} 
	else {
		$mensaje = 0;
	}
	return $mensaje;
}