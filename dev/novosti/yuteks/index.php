<?php $title = 'Ютекс';
$description = 'Новости ОКП &quot;АРС&quot; 8 800 7000 672';
$keywords = '';

$lang = json_decode('{
"h1":"Завершено проектирование и строительство производственного цеха."
}',true);

$root='../../';
$dir=$_SERVER['REQUEST_URI'];
include("../template.php");
?>