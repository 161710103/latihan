<?php 

require_once 'robot.php';

$robot1 = new robot('ngok ngok') ;
$robot2 = new robot('ngok ngok');

$robot1->set_suara('ngek ngek');
$robot1->set_berat(10);
echo "bunyi robot 1 adalah : " .$robot1-> get_suara(). ' dan beratnya adalah  :' .$robot1-> get_berat().'<br>';


$robot2->set_suara('awa awa');
$robot2->set_berat(30);
echo "bunyi robot 2 adalah : " .$robot2-> get_suara(). ' dan beratnya adalah  :' .$robot2-> get_berat();



?>