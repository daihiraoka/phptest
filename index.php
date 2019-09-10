<?php
$host_name = gethostname();
$ip = $_SERVER['REMOTE_ADDR'];
echo "Hello World!\n";
echo "hostname = $host_name\n";
echo "ip address = $ip";
?>
