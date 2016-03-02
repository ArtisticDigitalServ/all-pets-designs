<?php
date_default_timezone_set('America/Chicago');
error_reporting(E_ALL);

$d = 'all_pets_design_db';
$u = 'apd_mysql_admin';
$p = 'yZga46&2';
$h = 'localhost';

$db = mysqli_connect($h, $u, $p, $d);
if (!$db) {
	echo "<p>Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL.'</p>';
	exit;
}

?>
<head>
	<title>All Pets Design</title>
	<link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png" />
	<link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png" />
	<link rel="manifest" href="/images/favicon/manifest.json" />
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<link href='https://fonts.googleapis.com/css?family=Alegreya+SC:400,700,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/style.css" />
</head>