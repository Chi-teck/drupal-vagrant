#!/usr/bin/php
<?php
$input = file_get_contents('php://stdin');
preg_match('|^To: (.*)|', $input, $matches);
$t = tempnam("{{ mail_dir }}", $matches[1].'_');
file_put_contents($t, $input);
chmod($t, 0444);
