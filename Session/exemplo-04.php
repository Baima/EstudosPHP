<?php

session_id('ff2c9u4o4mikq95cms65ud4658');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump ($_SESSION);


?>