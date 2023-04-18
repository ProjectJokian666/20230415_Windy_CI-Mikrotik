<?php
require('conn.php');
$userhotspot = $API->comm('/ip/hotspot/user/print');
$json = json_encode($userhotspot);

echo $json;
// foreach ($result as $data) {
//     echo $data['name'] . '<br>';
// }
$API->disconnect();
