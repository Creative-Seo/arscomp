<?php
$dir = $_SERVER['REQUEST_URI'];
include($root.'blocks/meta.php');
include($root.'blocks/header.php');
include($root.'blocks/navbar.php');
include($root.'blocks/h1.php');?>

<div class="container">
<div class="row intro">
<?php $url='img/';
$images = scandir($url);
if (false !== $images) {
    $imgarray = preg_grep('/\.(?:jpe?g)$/', $images);
	$x=0;$y=[false,false,false,false];
	foreach($imgarray as $row) {
		$col[$x] =$col[$x].'<div class="col-xs-12 intro">
<a class="fancybox-thumb" rel="gallery1" href="'.$dir.'/'.$url.htmlspecialchars(urlencode($row)).'" title="">
	<img src="'.$dir.'/'.$url.htmlspecialchars(urlencode($row)).'" alt="'.$alt.'" class="img-responsive">
</a></div>' ;
		list($width_l, $height_l, $type_l, $attr_l) = getimagesize($url.$row);
		if ($height_l/$width_l>1.4) {$y[$x]=true;}
		$x++;if($x==4){$x=0;}
		if ($y[$x]) {$y[$x]=false;$x++;if($x==4){$x=0;}}
}} ?>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 "><div class="row"><?php echo $col[0];?></div></div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 "><div class="row"><?php echo $col[1];?></div></div>
	<div class="clearfix visible-sm"></div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 "><div class="row"><?php echo $col[2];?></div></div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 "><div class="row"><?php echo $col[3];?></div></div>
</div>
</div>
<?php include($root.'blocks/footer.php');?>