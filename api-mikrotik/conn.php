<?php

require('routeros_api.class.php');

$API = new RouterosAPI();

if ($API->connect('192.168.100.1', 'windy', 'tanpakode')) {
}
