<div id="owl-slider" class="owl-carousel">
<?php $partneri=[
["/arkhitekturno-stroitelnoe-proektirovanie","arch-berau","Архитектурно-Строительное Проектирование"],
["/geologicheskie-izyskaniya","geologich-iziska1","Геологические изыскания"],
["/geologicheskie-izyskaniya","geodezich-iziska1","Геодезические изыскания"],
["/ctroitelno-montazhnye-raboty","stroitelstvo","Строительство"],
["/proektirovanie-ob-ektov-linejnogo-sooruzheniya","proektirovanie-dorog1","Проектирование дорог"],
["/proizvodstvo/metallokonstruktsii","metallokonstrukcii","Металлоконструкции"],
["/arenda-spetsavtotransporta","arenda-spec-techniki","Аренда спецавтотехники"]
];
foreach ($partneri as $row) { ?>
	<div class="slider">
		<div class="slider-fon"><img src="/images/okpars.ru/slider/<?php echo $row[1];?>.jpg" alt="<?php echo $row[2];?>" title="<?php echo $row[2];?>" class="slider-img"></div>
		<div class="slider-left">
			<p class="slider-h2"><?php echo $row[2];?></p>
			<div class="slider-btn"><a href="<?php echo $row[0];?>" class="btn-orange">Подробнее</a></div>
		</div>
	</div>
<?php } ?>
</div>