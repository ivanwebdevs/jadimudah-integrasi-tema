<?php
$host = '127.0.0.1';
$port = 8000;
$dir = __DIR__;

echo "Starting server at http://$host:$port\n";

die(shell_exec("php -S $host:$port -t $dir"));