<div id="owl-slider" class="owl-carousel">
<?php $partneri=[
["/uslugi/arkhitekturno-stroitelnoe-proektirovanie","arch-berau","Архитектурно-Строительное Проектирование"],
["/uslugi/inzhenernye-izyskaniya/geologicheskie-izyskaniya","geologich-iziska1","Геологические изыскания"],
["/uslugi/inzhenernye-izyskaniya/geologicheskie-izyskaniya","geodezich-iziska1","Геодезические изыскания"],
["/uslugi/ctroitelno-montazhnye-raboty","stroitelstvo","Строительство"],
["/uslugi/proektirovanie-ob-ektov-linejnogo-sooruzheniya","proektirovanie-dorog1","Проектирование дорог"],
["/proizvodstvo/metallokonstruktsii","metallokonstrukcii","Металлоконструкции"],
["/uslugi/arenda-spetsavtotransporta","arenda-spec-techniki","Аренда спецавтотехники"]
];
foreach ($partneri as $row) { ?>
	<div class="slider">
		<div class="slider-fon"><img src="/images/okpars.ru/slider/<?php echo $row[1];?>.jpg" alt="<?php echo $row[2];?>" class="slider-img"></div>
		<div class="slider-left">
			<p class="slider-h2"><?php echo $row[2];?></p>
			<a href="<?php echo $row[0];?>" class="btn-orange"><span>Подробнее</span></a>
		</div>
	</div>
<?php } ?>
</div>