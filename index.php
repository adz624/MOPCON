<?php
for ($i = date("Y"); $i >= 2012; $i--) {
	if (file_exists ( __DIR__.'/'.$i)) {
		header('Location: ./'.$i.'/');
		exit;
	}
}

header('Location: ./err/404.php');