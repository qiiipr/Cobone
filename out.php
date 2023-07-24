<?php


	foreach ($_COOKIE as $key => $value) {
		unset($value);
		setcookie($key, NULL, time() - 3600);
}

?>
