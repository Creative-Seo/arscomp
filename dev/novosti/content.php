<div class="container">
<?php foreach ($novosti as $row) { ?>
	<div class="row margin-bottom">
		<div class="col-sm-3"><a href="<?php echo $row['url'];?>"><img src="<?php echo $row['url'];?>/glav.jpg"></a></div>
		<div class="col-sm-9">
			<h2><?php echo $row['h2'];?></h2>
			<p><?php echo $row['p'];?></p>
			<p><a href="<?php echo $row['url'];?>">Продолжить чтение...</a></p>
		</div>
	</div>
<?php } ?>
</div>