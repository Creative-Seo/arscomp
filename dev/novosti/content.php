<div class="container">
<?php foreach ($novosti as $row) { ?>
	<div class="row margin-bottom">
		<div class="col-sm-4 col-md-3 col-lg-2"><a href="<?php echo $row['url'];?>"><img src="<?php echo $row['url'];?>/glav.jpg" class="img-responsive"></a></div>
		<div class="col-sm-8 col-md-9 col-lg-10">
			<h2><?php echo $row['h2'];?></h2>
			<p><?php echo $row['p'];?></p>
			<p><a href="<?php echo $row['url'];?>">Продолжить чтение...</a></p>
		</div>
	</div>
<?php } ?>
</div>