<?php
$url = 'http://vmcloud.com.cn/zabbix/api_jsonrpc.php' ;
$header = array ( "Content-type: application/json-rpc" ) ;
$user = 'Admin' ;
$password = '*****' ;
$logininfo = array (
'jsonrpc' = > '2.0' ,
'method' = > 'user.login' ,
'params' = > array (
'user' = > $user ,
'password' = > $password ,
) ,
'id' = > 1 ,
) ;
$data = json_encode ( $logininfo ) ;
function Curl ( $url , $header , $info ) {
$ch = curl_init ( ) ;
curl_setopt ( $ch , CURLOPT_URL , $url ) ;
curl_setopt ( $ch , CURLOPT_RETURNTRANSFER , 1 ) ;
curl_setopt ( $ch , CURLOPT_HTTPHEADER , $header ) ;
curl_setopt ( $ch , CURLOPT_POST , 1 ) ;
curl_setopt ( $ch , CURLOPT_POSTFIELDS , $info ) ;
$response = curl_exec ( $ch ) ;
curl_close ( $ch ) ;
return json_decode ( $response ) ;
}
$result = Curl ( $url , $header , $logininfo ) ;
var_dump ( $result ) ;
?>
