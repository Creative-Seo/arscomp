<?php $title = 'Первое место в архитектурном конкурсе';
$description = 'проектирование социальных объектов';
$keywords = 'проект школы, проект детского сада, социальные проекты, архитектура школа, садик камешково, школа во Владимире, проект школы скачать';

$lang = json_decode('{
"h1":"Новости"
}',true);

$root='../';
$dir=$_SERVER['REQUEST_URI'];
include($root."config.php");
include($root."template".$dir."ind.php");
?>