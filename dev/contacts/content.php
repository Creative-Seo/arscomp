<div class="maps">
	<div id="map" class="maps-block"><script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=glG3ZPDVhHLtDLxiAp-ycBX_4ZI4TBNt&lang=ru_RU&sourceType=constructor"></script></div>
</div>
<?php echo $_SERVER['REQUEST_URI'];?>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<h2 class="contacts-h2">Офис во Владимире</h2>	
			<p>Бизнес парк "Техника" Дворянская ул. 27А | Корпус 1 этаж 2й, ОКП "АРС"</p>
			<ul class="list-unstyled">
				<li><i class="fa fa-phone"></i>8 800 7000 672</li> 
				<li><i class="fa fa-phone"></i>+7 4922 37 99 99</li> 
				<li><i class="fa fa fa-envelope-o"></i>info@okpars.ru</li> 
				<li><i class="fa fa-home"></i>600001, Россия, г.Владимир.</li>
			</ul>
		</div>
		<div class="col-sm-4">
			<h2 class="contacts-h2">Офис во Москве</h2>	
			<p>Территория ОКБ МЭИ Красноказарменная ул. 14 | Корпус 4 офис 505</p>
			<ul class="list-unstyled">
				<li><i class="fa fa-phone"></i>8 800 7000 672</li> 
				<li><i class="fa fa-envelope-o"></i>market@okpars.ru</li> 
				<li><i class="fa fa-home"></i>Россия, Москва</li>
			</ul>
		</div>
		<div class="col-sm-4">
			<h2 class="contacts-h2">Офис во Иркутске</h2>	
			<p>г.Иркутск ул. Декабрьских событий д. 57 офис 505</p>
			<ul class="list-unstyled">
				<li><i class="fa fa-phone"></i>+7 (3952) 288 890</li> 
				<li><i class="fa fa-home"></i>664000, Россия, г. Иркутск</li>
			</ul>
		</div>
	</div>

	<div class="row">
		<h2 class="contacts-h2">Форма обратной связи</h2>
		<form class="form-horizontal contacts-form" id="contact-form">
			<div class="form-group">
				<label for="jform_contact_name" class="col-sm-2 control-label">Имя *</label>
				<div class="col-sm-6">
					<input type="text" name="jform[contact_name]" class="form-control" id="jform_contact_name">
				</div>
			</div>
			<div class="form-group">
				<label for="jform_contact_email" class="col-sm-2 control-label">E-mail *</label>
				<div class="col-sm-6">
					<input type="email" name="jform[contact_email]" class="form-control" id="jform_contact_email">
				</div>
			</div>
			<div class="form-group">
				<label for="jform_contact_emailmsg" class="col-sm-2 control-label">Тема *</label>
				<div class="col-sm-6">
					<input type="text" name="jform[contact_subject]" class="form-control" id="jform_contact_emailmsg">
				</div>
			</div>
			<div class="form-group">
				<label for="jform_contact_message" class="col-sm-2 control-label">Сообщение *</label>
				<div class="col-sm-6">
					<textarea name="jform[contact_message]" class="form-control" id="jform_contact_message" rows="3"></textarea>
				</div>
			</div>
	 		<div class="form-group">
				<div class="col-sm-6 col-sm-offset-2">
					<p class="help-block">* обязательные поля для заполнения</p>
					<button class="btn btn-default" id="jform_contact_btn">Отправить сообщение</button>
				</div>
			</div>
		</form>
	</div>
</div>
