<div class="container">

<p class="h3 text-center">Добро пожаловать на официальный сайт компании</p>
<h1 class="text-center">Особое Конструкторское Подразделение "АРС"</h1>

<ul class="nav nav-tabs">
  <li class="active"><a href="#tab1" data-toggle="tab">О нас</a></li>
  <li><a href="#tab2" data-toggle="tab">Штат Компании</a></li>
  <li><a href="#tab3" data-toggle="tab">Преимущества</a></li>
</ul>
<div class="tab-content">
  	<div class="tab-pane active" id="tab1">
  		<div class="tab-fon"><img class="hidden-img size-auto" src="/images/okpars.ru/tabs/triangle.png" alt="<?php echo $h1;?>" title="<?php echo $h1;?>"></div>
 		<div class="tab-text">
			<p class="tab-title"><strong>Особое Конструкторское Подразделение </strong>"АРС"</p>
			<p class="hidden-text">Полный спектр услуг по согласованию, сопровождению проектов строительства, разработку обоснований инвестиций, рабочей документации для нового строительства, реконструкции, капитального ремонта, ландшафтной архитектуры, градостроительного проектирования...</p>
			<p><br><a class="button" href="/o-kompanii">Читать далее</a></p>
		</div>
 	</div>
  	<div class="tab-pane" id="tab2">
		<div class="tab-fon"><img class="hidden-img size-auto" src="/images/okpars.ru/tabs/niche.png" alt="<?php echo $h1;?>" title="<?php echo $h1;?>"></div>
		<div class="tab-text">
			<p class="tab-title"><strong>Штат</strong>&nbsp;сотрудников компании</p>
			<p class="hidden-text">В настоящее время в компании работает более 400 человек, 200 из них - это только проектный отдел. Все сотрудники компании высококвалифицированные специалисты с колоссальным опытом работы, которые смогут в кратчайшие сроки разработать любую проектно-техническую документацию, а так же рассмотреть готовые проектные решения и дать заключения по их оптимизации.</p>
			<p><br><a class="button" href="/o-kompanii">Читать далее</a></p>
		</div>
	</div>
	<div class="tab-pane" id="tab3">
		<div class="tab-fon"><img class="hidden-img size-auto" src="/images/okpars.ru/tabs/launch.png" alt="<?php echo $h1;?>" title="<?php echo $h1;?>"></div>
		<div class="tab-text">
			<p class="tab-title"><strong>Конкурентные&nbsp;</strong>Преимущества</p>
			<p class="hidden-text">Соблюдение сроков исполнения заказа,ответственный подход к большим и малым объектам, собственные инженерные лаборатории, современные компьютерные системы и новейшее программное обеспечение,собственный парк строительной и специализированной техники</p>
			<p><br><a class="button" href="/o-kompanii">Читать далее</a></p>
		</div>
	</div>
</div>

<h2>Новости</h2>	
<div id="owl-news" class="owl-carousel">
<?php foreach ($novosti as $row) { ?>
	<div><a href="/novosti/<?php echo $row['url'];?>">
		<img src="/novosti/<?php echo $row['url'];?>/glav.jpg" class="img-responsive" alt="<?php echo $row['h2'];?>" title="<?php echo $row['h2'];?>">
		<p><?php echo $row['h2'];?></p>
	</a></div>
<?php } ?>
</div>

<h2>Наши партнёры</h2>	
<div id="owl-partneri" class="owl-carousel">
<?php $partneri=[["20-1.png","партнёр"],["20-2.png","партнёр"],["20-3.png","партнёр"],["20-4.png","партнёр"],["20-5.png","партнёр"],["20-6.png","партнёр"],["20-7.png","партнёр"],["20-8.png","партнёр"],["20-9.png","партнёр"],["20-10.png","партнёр"],["20-11.png","партнёр"],["12.png","партнёр"]];
foreach ($partneri as $row) { ?>
	<div><img src="/images/okpars.ru/partneri/new_partner/<?php echo $row[0];?>" alt="<?php echo $row[1];?>" title="<?php echo $row[1];?>" height="150"></div>
<?php } ?>
</div>

</div>