<?php

session_id('0ld6su3u3q175coerbuehh5qp2');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);