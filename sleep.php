<?php

if (isset($_GET['SECOND'])) {
	$second = $_GET['SECOND'];
} else {
	$second = 3;
}
sleep($second);

echo('Hi!!');

?>