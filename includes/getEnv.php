<?php

use iniasDB\EnvParser;

require_once($base."includes/envParser/envParser.php");

(new EnvParser($base.".env"))->loadIntoEnv();

?>