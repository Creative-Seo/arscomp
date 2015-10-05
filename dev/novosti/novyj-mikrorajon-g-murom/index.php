<?php $title = 'Новый микрорайон г.Муром';
$description = 'Новости ОКП &quot;АРС&quot; 8 800 7000 672';
$keywords = '';

$lang = json_decode('{
"h1":"Новый микрорайон г.Муром"
}',true);

$root='../../';
$dir=$_SERVER['REQUEST_URI'];
include("../template.php");
?>