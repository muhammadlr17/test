<?php	
/* cara mysql 
 * mysql_connect("localhost","user","password");
 * 
 * cara oracle 
 * oci_connect("user","password","localhost/XE");
 */
$conn = oci_connect('lutfi', '12345678', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}else{
    echo "Berhasil";
}

	
