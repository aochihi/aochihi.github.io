
<?php
mb_language("uni");
mb_internal_encoding("UTF-8"); 
mb_http_input("auto");
mb_http_output("UTF-8");
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	foreach($_POST as $k => $v){
		
		if (get_magic_quotes_gpc()) {
			$v = stripslashes($v);
		}
		$v = htmlspecialchars($v);
		$$k = $v;
	}
} else {
	exit();
}
 
if($test != "7hs4sk2"){
  exit("Your message cannot be sent. Sorry.");
}
 

$ip = getenv("REMOTE_ADDR");
$host = getenv("REMOTE_HOST");
if ($host == null || $host == $ip)
$host = gethostbyaddr($ip);
 

$to = "webmaster@ah-ha.fr";
 

$content = "$message

Mail: $mail 
IP: $ip
HOST: $host";
 
if($message == "") {
		$h1 = "error";
		$msg = "No content included in your message. ";
	} else {
	if (mb_send_mail($to, "[Message] Web AH-HA", $content)) {
		$h1 = "Your message has been sent.";
		$msg = "Thank you for your message.<br><br><div style="text-align:center;" align="center"><a href="index.html">back to top page. </a></div>";
	}
}
 

echo "<h1>" . $h1 . "</h1>";
echo $msg;
?>
