<?php $title = 'Национальный гелиогеофизический комплекс Российской Академии Наук.';
$description = 'Новости ОКП &quot;АРС&quot; 8 800 7000 672';
$keywords = '';

$lang = json_decode('{
"h1":"Новости"
}',true);

$root='../';
$dir=$_SERVER['REQUEST_URI'];
include($root."config.php");
include($root."template".$dir."ind.php");
?>
