<?php  

require_once 'vendor/autoload.php';

ORM::configure('mysql:host=localhost;dbname=mon_armoire');
ORM::configure('username','root');
ORM::configure('password','root');

$vetement = ORM::for_table('mes_chaussettes')
->where('id','description')->find_one();

$armoire =ORM::for_table('mes_chaussettes')->find_many();
foreach ($armoire as $vetement) {
	var_dump($vetement);
}