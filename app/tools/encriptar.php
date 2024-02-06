
<?php

//   openssl_encrypt
//   $data        ==  Lo que se quiere encriptar 
//   AES-256-OFB  ==  metodo cifrado
//   $key         ==  La contraseña utilizada para el encriptamiento 
//   $iv          ==  Un Vector de Inicialización no NULL. 

function encrypt($data,$key)
{
    $iv 			= 	openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-OFB'));
    $encrypted 		=	openssl_encrypt($data, "AES-256-OFB", $key, 0, $iv);  
    return base64_encode($encrypted."::".$iv);  // codifica
}

function decrypt($data,$key)
{
    list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);  // decodifica
    return openssl_decrypt($encrypted_data, 'AES-256-OFB', $key, 0, $iv);
}


function generaPass() 
{
	$cadena 			= 	"ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890*_";
	$longitudCadena 	=	strlen($cadena);
	$pass 				= 	"";
	$longitudPass  		=	9;
	for($i=1 ; $i<=$longitudPass ; $i++)	{
		$pos 	=	rand( 0, $longitudCadena-1 );
		$pass   =  	$pass.substr( $cadena, $pos, 1 );
	}
	return $pass;
}


/*
$key 		=	"97@#78#";
$string 	=	"GER_877*A";
 
$encryptado 	=	encrypt($string,$key);  	// se almacena el resultado del metodo BD 

echo $encryptado;

echo "<hr>";
echo decrypt($encryptado,$key);					// se desincripta lo de la base para mostrar al usuario
*/

?>

