<?php

//namespace Blog_PHP_Projem\Engine;

$user = 'root';
$password = 'root';
$db = 'blog';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();

$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);
/*final class Config
{
    // Database info (if you want to test the script, please edit the below constants with yours)
    const
    DB_HOST = 'localhost',
    DB_NAME = 'blog',
    DB_USR = 'root',
    DB_PWD = 'root',

    // Title of the site
    SITE_NAME = 'My Simple Blog!';
}*/

?>