<?php
/**
* en cookie
*/
$value = "Ja";
setcookie("ReciveCookie",$value, time()+3600*24);
?>
<div>
	<?php
	if ($_COOKIE['ReciveCookie'] === "Ja"){
		echo "Du har tidligere købt en reciver";
	}
	else {
		echo "Du burde købe en reciver";
	}
	?>
	
</div>
