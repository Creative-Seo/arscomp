<?php
$title = 'Главная';
$description = 'проектирование,архитектурное проектирование, строительство,металлоконструкции,изыскательская деятельность,геологическая лаборатория  бурение скважин, металлоконструкции,автономная газификация, пожарная безопасность';
$keywords = '';

$root = '';
include($root.'config.php');
include($root.'blocks/meta.php');
include($root.'blocks/header.php');
include($root.'blocks/navbar.php');
include($root.'blocks/slider.php');
include('content.php');
include($root.'blocks/footer.php');
?>