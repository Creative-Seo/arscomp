<?php $title = 'Новый микрорайон г.Владимир';
$description = 'проектирование городских районов с развитой инфраструктурой';
$keywords = 'проект района, генплан, планирование земельных участков, архитектура микрорайона, проекты высотных домов."';

$lang = json_decode('{
"h1":"Новости"
}',true);

$root='../';
$dir=$_SERVER['REQUEST_URI'];
include($root."config.php");
include($root."template".$dir."ind.php");
?>