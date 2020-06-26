<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>Автомобильные грузоперевозки</title>
        <link rel="stylesheet" href="css/uikit.css" />
        
        
        <link rel="stylesheet" href="css/components/slideshow.min.css" />
        <link rel="stylesheet" href="css/components/slidenav.min.css" />
        <link rel="stylesheet" href="css/components/accordion.min.css" />


        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/ukstyle.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type='text/javascript'></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/components/slideshow.min.js"></script>
        <script src="js/components/accordion.min.js"></script>

        <script>

        	var price = '';

        	function send_form(a){
        		
		      	var name_client = $('.' + a + ' input[name="name_client"]').val();
		      	var phone_client = $('.' + a + ' input[name="phone_client"]').val();
		      	var email_client = $('.' + a + ' input[name="email_client"]').val();

		      	if (name_client && phone_client) {
				    $.ajax({
			            type: "POST",
			            url: "forma.php",
			            data: {
			                name_client: name_client,
			                phone_client: phone_client,
		                	email_client: email_client,
		                	price: price
		            	},
		            	success: function(data) {
		                	$('.forma_action').html(data);
		                	$('.norequired').removeClass('norequired_active');
		            	}
		        	});
				} else {
					$('.norequired').addClass('norequired_active');
					$('.norequired').html('<div class="uk-text-center" >Заполните поле Имя и Телефон</div>');
				}
    		}
    		
    		function getPrice(a) {
    			price = a;
    		}
        </script>
    </head>
    <body>
    	<div class="uk-grid" id="top">
    		<div class="uk-width-1-1">
    			<div class="uk-grid header">
    				<div class="uk-width-2-4 uk-width-small-1-3 uk-width-medium-1-3 uk-width-large-1-3">
    					<img class="head_logo disp-off disp-on-small" src="img/logo.png">
    					<img class="head_logo disp-on disp-off-small" src="img/logo-small.png">
    				</div>
    				<div class="uk-width-2-4 uk-width-small-2-3 uk-width-medium-2-3 uk-width-large-2-3 uk-text-right">
    					<a href="tel://8 (800) 555-02-02" class="head_phone">8 (800) 555-02-02</a>
    					<div style="display: inline-block;">
    						<a href="#modal" data-uk-modal onclick='getPrice("none");' class="btn btn_blue btn_small disp-off disp-on-medium">Расcчитать тариф</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>


		<div class="uk-slidenav-position" data-uk-slideshow="{animation: 'swipe', autoplay:true}">
	    	<ul class="uk-slideshow uk-overlay-active" >
	    		<li>
	        		<div class="uk-position-cover slide_1"></div>
	        		<canvas class="slider_canvas"></canvas>
	        		<div class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
	        			<div class="uk-grid">
	        				<div class="uk-width-1-1 uk-container-center uk-text-center padLeft">
	        					<div class="offer">Автомобильные грузоперевозки</div>
	        				</div>	
	        			</div>

	        			<div class="uk-grid">
	        				<div class="uk-width-1-1 uk-width-small-2-3 uk-container-center uk-text-center padLeft">
	        					<div class="descript">Перевозка грузов по международным и внутрироссийским направлениям</div>
	        				</div>	
	        			</div>

	        			<div class="uk-grid">
	        				<div class="uk-width-1-1 uk-width-small-1-2 uk-container-center uk-text-center padLeft">
	        					<a href="#modal" data-uk-modal class='btn btn_white btn_slider' onclick='getPrice("none");'>Рассчитать тариф</a>
	        				</div>	
	        			</div>
	        			<div class="uk-grid">
	        				<div class="uk-width-1-2 uk-container-center uk-text-center padLeft">
	        					<a href='#price' class="slider_arrow" data-uk-smooth-scroll>V</a>
	        				</div>	
	        			</div>
	        		</div>
	    		</li>

	    		<li>
	        		<div class="uk-position-cover slide_2"></div>
	        		<canvas class="slider_canvas"></canvas>
	        		<div class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
	        			<div class="uk-grid">
	        				<div class="uk-width-1-1 uk-container-center uk-text-center padLeft">
	        					<div class="offer">Автомобильные грузоперевозки</div>
	        				</div>	
	        			</div>

	        			<div class="uk-grid">
	        				<div class="uk-width-1-1 uk-width-small-2-3 uk-container-center uk-text-center padLeft">
	        					<div class="descript">Перевозка всех видов грузов, в том числе скоропортящихся, опасных и негабаритных</div>
	        				</div>	
	        			</div>

	        			<div class="uk-grid">
	        				<div class="uk-width-1-1 uk-width-small-1-2 uk-container-center uk-text-center padLeft">
	        					<a href="#modal" data-uk-modal class='btn btn_white btn_slider' onclick='getPrice("none");'>Рассчитать тариф</a>
	        				</div>	
	        			</div>
	        			<div class="uk-grid">
	        				<div class="uk-width-1-2 uk-container-center uk-text-center">
	        					<a href='#price' class="slider_arrow" data-uk-smooth-scroll>V</a>
	        				</div>	
	        			</div>
	        		</div>
	    		</li>


	    		<li>
	        		<div class="uk-position-cover slide_3"></div>
	        		<canvas class="slider_canvas"></canvas>
	        		<div class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
	        			<div class="uk-grid">
	        				<div class="uk-width-1-1 uk-container-center uk-text-center">
	        					<div class="offer">Автомобильные грузоперевозки</div>
	        				</div>	
	        			</div>

	        			<div class="uk-grid">
	        				<div class="uk-width-1-1 uk-width-small-2-3 uk-container-center uk-text-center">
	        					<div class="descript">Дополнительные услуги по хранению груза, страхование и таможенное оформление</div>
	        				</div>	
	        			</div>

	        			<div class="uk-grid">
	        				<div class="uk-width-1-1 uk-width-small-1-2 uk-container-center uk-text-center">
	        					<a href="#modal" data-uk-modal class='btn btn_white btn_slider' onclick='getPrice("none");'>Рассчитать тариф</a>
	        				</div>	
	        			</div>
	        			<div class="uk-grid">
	        				<div class="uk-width-1-2 uk-container-center uk-text-center">
	        					<a href='#price' class="slider_arrow" data-uk-smooth-scroll>V</a>
	        				</div>	
	        			</div>
	        		</div>
	    		</li>
			</ul>

			<a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
    		<a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
		</div>


		<div class="uk-grid" id='block_2'>
			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-width-small-2-3 uk-container-center uk-text-center">
						<div class="head_title head_title_dark">Мы предлагаем</div>
					</div>
				</div>
			</div>
			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-width-medium-1-3 uk-text-center art_block1" data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:300}">
						<div class="title"><p>Полный спектр</p><p>логистических услуг</p></div>
						<div class="description">включая таможенное оформление и транспортировку</div>
					</div>
					<div class="uk-width-1-1 uk-width-medium-1-3 uk-text-center art_block1" data-uk-scrollspy="{cls:'uk-animation-slide-top', delay:500}"> 
						<div class="title"><p>Комплексные</p><p>отраслевые решения</p></div>
						<div class="description">для любой сферы бизнеса</div>
					</div>
					<div class="uk-width-1-1 uk-width-medium-1-3 uk-text-center art_block1" data-uk-scrollspy="{cls:'uk-animation-slide-right', delay:400}">
						<div class="title"><p>Перевозку всех</p><p>видов грузов</p></div>
						<div class="description">сборных, негабаритных, опасных, скоропортящихся и других</div>
					</div>
				</div>
			</div>
			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-width-large-3-4 uk-container-center uk-text-center" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:600}">
						

						<div class="uk-accordion" data-uk-accordion>

						    <div class="uk-accordion-title">
						    	<a class="dashed_link blue_link" href="#">Что входит в услугу грузоперевозок?</a>
						    </div>
						    <div class="uk-accordion-content" aria-expanded="false">
						    	<ul class="uk-list uk-list-striped">
									<li><span>разработка оптимального маршрута</span></li>
									<li><span>подбор подходящего транспортного средства, исходя из типа ТМЦ, его параметров и необходимых условий доставки</span></li>
									<li><span>помощь с оформлением сопроводительной документации</span></li>
									<li><span>обеспечение доставки «от двери до двери»</span></li>
									<li><span>информирование по запросу о местонахождении товаров в любой момент времени</span></li>
						    	</ul>
						    </div>

						</div>
					</div>
				</div>
			</div>		

			<div class="uk-width-1-1">
				<div class="uk-grid">

					<div class="uk-width-1-1 uk-width-large-3-4 uk-container-center uk-text-center" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:600}">
						

						<div class="uk-accordion" data-uk-accordion>

						    <div class="uk-accordion-title">
						    	<a class="dashed_link blue_link" href="#">Дополнительные услуги</a>
						    </div>
						    <div class="uk-accordion-content" aria-expanded="false">
						    	<ul class="uk-list uk-list-striped">
									<li><span>оказание содействия в прохождении таможенных процедур и консалтинговая поддержка в этой сфере</span></li>
									<li><span>привлечение ведущих компаний страны для страхования груза</span></li>
									<li><span>обеспечение сопровождения и охрана автоперевозки</span></li>
									<li><span>оказание услуги по упаковке хрупкой продукции с предоставлением упаковочных материалов</span></li>
									<li><span>обеспечение ответственного хранения груза на наших складах</span></li>
									<li><span>решение вопроса с организацией погрузочно-разгрузочных работ</span></li>
									<li><span>предоставление возможности выгодной доставки в составе сборного груза</span></li>
						    	</ul>
						    </div>

						</div>
					</div>

				</div>
			</div>
		</div>


		<div class='back_3' id='price'>
		<div class="uk-grid dark_block">
			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-width-small-2-3 uk-container-center uk-text-center">
						<div class="head_title head_title_white">Тарифы (Тент 82 м3)</div>
					</div>
				</div>
			</div>
			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-width-small-1-3 uk-text-center art_block2" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
						<div class="title small">38 000 рублей</div>
						<div class="description big">Москва - Минск</div>
						<div class="description padTop">срок доставки - 2 дня</div>
						<!--<a href="#modal" data-uk-modal class='btn btn_white btn_slider' style="font-size: 14px;" onclick='getPrice("Москва - Минск");'>Рассчитать тариф</a>-->
					</div>
					<div class="uk-width-1-1 uk-width-small-1-3 uk-text-center art_block2" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
						<div class="title small">190 000 рублей</div>
						<div class="description big">Москва - Алматы</div>
						<div class="description padTop">срок доставки - 7 дней</div>
						<!--<a href="#modal" data-uk-modal class='btn btn_white btn_slider' style="font-size: 14px;" onclick='getPrice("Москва - Алматы");'>Рассчитать тариф</a>-->
					</div>
					<div class="uk-width-1-1 uk-width-small-1-3 uk-text-center art_block2 " data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
						<div class="title small">175 000 рублей</div>
						<div class="description big">Москва - Караганда</div>
						<div class="description padTop">срок доставки - 5 дней</div>
						<!--<a href="#modal" data-uk-modal class='btn btn_white btn_slider' style="font-size: 14px;" onclick='getPrice("Москва - Караганда");'>Рассчитать тариф</a>-->
					</div>
				</div>
			</div>
			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-width-small-1-3 uk-text-center art_block2" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
						<div class="title small">45 000 рублей</div>
						<div class="description big">Москва - Казань</div>
						<div class="description padTop">срок доставки - 2 дня</div>
						<!--<a href="#modal" data-uk-modal class='btn btn_white btn_slider' style="font-size: 14px;" onclick='getPrice("Москва - Казань");'>Рассчитать тариф</a>-->
					</div>
					<div class="uk-width-1-1 uk-width-small-1-3 uk-text-center art_block2" style="font-size: 14px;" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
						<div class="title small">122 000 рублей</div>
						<div class="description big">Москва - Омск</div>
						<div class="description padTop">срок доставки - 4 дня</div>
						<!--<a href="#modal" data-uk-modal class='btn btn_white btn_slider' style="font-size: 14px;" onclick='getPrice("Москва - Омск");'>Рассчитать тариф</a>-->
					</div>
					<div class="uk-width-1-1 uk-width-small-1-3 uk-text-center art_block2" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
						<div class="title small">146 000 рублей</div>
						<div class="description big">Москва - Новосибирск</div>
						<div class="description padTop">срок доставки - 7 дней</div>
						<!--<a href="#modal" data-uk-modal class='btn btn_white btn_slider' style="font-size: 14px;" onclick='getPrice("Москва - Новосибирск");'>Рассчитать тариф</a>-->
					</div>
				</div>
			</div>

			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-text-center" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
						<a href="#modal" data-uk-modal class='btn btn_white btn_slider' style="font-size: 14px;" onclick='getPrice("none");'>Заказать перевозку</a>
					</div>
				</div>
			</div>	
		</div>
	</div>	


		<!-- Все цены -->
		<div class="uk-grid">
			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-width-small-2-3 uk-container-center uk-text-center">
						<div class="head_title head_title_dark">Все тарифы (Тент 82 м3)</div>
					</div>
				</div>
			</div>
				<div class='uk-width-1-1 uk-width-large-1-2 uk-container-center uk-text-center'>
					<div class="uk-accordion" data-uk-accordion>
						<div class="uk-accordion-title">
							<a class="dashed_link blue_link" href="#">Тарифы на международные перевозки</a>
						</div>
						<div class="uk-accordion-content" aria-expanded="false">
							<ul class="uk-list uk-list-striped">
								<li>
									<span>Москва - Минск - 38 000 рублей (срок доставки - 2 дня)</span>
									<!--<a href="#modal" data-uk-modal onclick="getPrice('Москва - Минск');">Заказать услугу</a>-->
								</li>
								<li>
									<span>Москва - Брест - 40 000 рублей (срок доставки - 2 дня)</span>
									<!--<a href="#modal" data-uk-modal onclick="getPrice('Москва - Брест');">Заказать услугу</a>-->
								</li>
								<li>
									<span>Москва - Гомель - 38 000 рублей (срок доставки - 2 дня)</span>
									<!--<a href="#modal" data-uk-modal onclick="getPrice('Москва - Гомель');">Заказать услугу</a>-->
								</li>
								<li>
									<span>Москва - Астана - 165 000 рублей (срок доставки - 4 дня)</span>
									<!--<a href="#modal" data-uk-modal onclick="getPrice('Москва - Астана');">Заказать услугу</a>-->
								</li>
								<li>
									<span>Москва - Алматы - 190 000 рублей (срок доставки - 7 дней)</span>
									<!--<a href="#modal" data-uk-modal onclick="getPrice('Москва - Алматы');">Заказать услугу</a>-->
								</li>
								<li>
									<span>Москва - Караганда - 175 000 рублей (срок доставки - 5 дней)</span>
									<!--<a href="#modal" data-uk-modal onclick="getPrice('Москва - Караганда');">Заказать услугу</a>-->
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>	
			<div class="uk-grid">	
				<div class='uk-width-1-1 uk-width-large-1-2 uk-container-center uk-text-center'>
					<div class="uk-accordion" data-uk-accordion>
						<div class="uk-accordion-title">
							<a class="dashed_link blue_link" href="#">Тарифы на региональные перевозки</a>
						</div>
						<div class="uk-accordion-content" aria-expanded="false">
							<ul class="uk-list uk-list-striped">
								<li>
									<span>Москва - Нижний Новгород - 26 000 рублей (срок доставки - 1 день)</span>
									<!--<a href="#modal" data-uk-modal onclick="getPrice('Москва - Нижний Новгород');">Заказать услугу</a>-->
								</li>
								<li>
									<span>Москва - Казань - 45 000 рублей (срок доставки - 2 дня)</span>
									<!--<a href="#modal" data-uk-modal onclick="getPrice('Москва - Казань');">Заказать услугу</a>-->
								</li>
								<li>
									<span>Москва - Екатеринбург - 84 000 рублей (срок доставки - 3 дня)</span>
									<!--<a href="#modal" data-uk-modal onclick="getPrice('Москва - Екатеринбург');">Заказать услугу</a>-->
								</li>
								<li>
									<span>Москва - Тюмень - 96 000 рублей (срок доставки - 5 дней)</span>
									<!--<a href="#modal" data-uk-modal onclick="getPrice('Москва - Тюмень');">Заказать услугу</a>-->
								</li>
								<li>
									<span>Москва - Краноярск - 179 000 рублей (срок доставки - 9 дней)</span>
									<!--<a href="#modal" data-uk-modal onclick="getPrice('Москва - Краноярск');">Заказать услугу</a>-->
								</li>
								<li>
									<span>Москва - Омск - 122 000 рублей (срок доставки - 4 дня)</span>
									<!--<a href="#modal" data-uk-modal onclick="getPrice('Москва - Омск');">Заказать услугу</a>-->
								</li>
								<li>
									<span>Москва - Новосибирск - 146 000 рублей (срок доставки - 7 дней)</span>
									<!--<a href="#modal" data-uk-modal onclick="getPrice('Москва - Новосибирск');">Заказать услугу</a>-->
								</li>
								<li>
									<span>Москва - Кемерово - 159 000 рублей (срок доставки - 7 дней)</span>
									<!--<a href="#modal" data-uk-modal onclick="getPrice('Москва - Кемерово">Заказать услугу</a>-->
								</li>
								<li>
									<span>Москва - Барнаул - 159 000 рублей (срок доставки - 8 дней)</span>
									<!--<a href="#modal" data-uk-modal onclick="getPrice('Москва - Барнаул');">Заказать услугу</a>-->
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="uk-width-1-1 uk-text-center" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}" style='margin-bottom: 21px;'>
					<a href="#modal" data-uk-modal class='btn btn_blue btn_slider' style="font-size: 14px;" onclick='getPrice("none");'>Заказать перевозку</a>
				</div>
			</div>	
			<!-- Все цены конец -->

	<div class='back_2'>
		<div class="uk-grid dark_block">
			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-width-small-2-3 uk-container-center uk-text-center">
						<div class="head_title head_title_white">Гарантии</div>
						<div class="title_description">Мы несем полную ответственность за ваш груз</div>
					</div>
				</div>
			</div>
			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-width-small-1-3 uk-text-center art_block2" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
						<div class="title">100%</div>
						<div class="description">выполнение обязательств по доставке груза и его сохранности</div>
					</div>
					<div class="uk-width-1-1 uk-width-small-1-3 uk-text-center art_block2" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
						<div class="title">100%</div>
						<div class="description">заполнение накладных для перевозки</div>
					</div>
					<div class="uk-width-1-1 uk-width-small-1-3 uk-text-center art_block2 " data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
						<div class="title">100%</div>
						<div class="description">гарантия заявленной стоимости перевозки без скрытых доплат</div>
					</div>
				</div>
			</div>
			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-width-small-1-3 uk-text-center art_block2" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
						<div class="title">24 на 7</div>
						<div class="description">систематическое информирование клиента о статусе заказа. Отслеживание груза на всем пути следования</div>
					</div>
					<div class="uk-width-1-1 uk-width-small-1-3 uk-text-center art_block2" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
						<div class="title">800+</div>
						<div class="description">квалифицированных сотрудников нашей компании проходят обязательные предрейсовые медицинские осмотры</div>
					</div>
					<div class="uk-width-1-1 uk-width-small-1-3 uk-text-center art_block2" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
						<div class="title">1500+</div>
						<div class="description">автомобилей проходят обязательное техническое обслуживание перед каждым рейсом</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

		<div class="uk-grid">
			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-width-small-2-3 uk-container-center uk-text-center">
						<div class="head_title head_title_icons">Беспокоитесь за свой груз?</div>
						<div class="icons_description">С нами Вы можете быть уверены в сохранности своего груза</div>
					</div>
				</div>
			</div>
			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-width-small-1-3 uk-text-center art_block_icons" data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:300}">
						<div class="icons">
							<div class='icons_inner'>
								<img src="img/Icon_good.png">
							</div>	
						</div>
						<div class="description">100% проверка всех автомобилей и водителей перед рейсом службой экономической и технической безопасности</div>
					</div>
					<div class="uk-width-1-1 uk-width-small-1-3 uk-text-center art_block_icons" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
						<div class="icons">
							<div class='icons_inner'>
								<img src="img/icon_help.png">
							</div>
						</div>	
						<div class="description">Страхование Вашего груза по ставке от 0,04% от стоимости груза</div>
					</div>
					<div class="uk-width-1-1 uk-width-small-1-3 uk-text-center art_block_icons" data-uk-scrollspy="{cls:'uk-animation-slide-right', delay:300}">
						<div class="icons">
							<div class='icons_inner'>
								<img src="img/icon_message.png">
							</div>
						</div>	
						<div class="description">Мониторинг передвижения машин по маршруту следования с использованием GPS/Глонасс, спутниковой и мобильной связи</div>
					</div>
				</div>
			</div>
		</div>


	<div class='back_1'>	
		<div class="uk-grid dark_block">
			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-width-small-2-3 uk-container-center uk-text-center">
						<div class="head_title head_title_white">Вы получаете</div>
					</div>
				</div>
			</div>
			<div class="uk-width-1-1">
				<div class="uk-grid square_blocks">
					<div class="uk-width-1-1 uk-width-small-2-4 uk-width-large-1-4 uk-text-center art_block_white" data-uk-scrollspy="{cls:'uk-animation-slide-top', delay:300}">
						<div class="art_block3">
							<div class="title">Страхование</div>
							<div class="title2">до $5 млн.</div>
							<div class="description">Выбор оптимальных вариантов страхования грузов и ответственности</div>
						</div>
					</div>
					<div class="uk-width-1-1 uk-width-small-2-4 uk-width-large-1-4 uk-text-center art_block_white" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:400}">
						<div class="art_block3">
							<div class="title">Мониторинг</div>
							<div class="title2">24 на 7</div>
							<div class="description">Отслеживание сохранности груза на всех точках маршрута</div>
						</div>
					</div>
					<div class="uk-width-1-1 uk-width-small-2-4 uk-width-large-1-4 uk-text-center art_block_white" data-uk-scrollspy="{cls:'uk-animation-slide-top', delay:500}">
						<div class="art_block3">
							<div class="title">Скидки</div>
							<div class="title2">до 25%</div>
							<div class="description">Для постоянных клиентов у нас действует гибкая система скидок</div>
						</div>
					</div>
					<div class="uk-width-1-1 uk-width-small-2-4 uk-width-large-1-4 uk-text-center art_block_white" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:600}">
						<div class="art_block3">
							<div class="title">Контроль</div>
							<div class="title2">100%</div>
							<div class="description">Качество предоставляемых документов по всем стандартам</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

		<div class="uk-grid no_title">
			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-width-medium-1-3 uk-text-center art_block4" data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:300}">
						<div class="title">Договор</div>
						<div class="description">Заключается в течение 4 часов после отправления заявки</div>
					</div>
					<div class="uk-width-1-1 uk-width-medium-1-3 uk-text-center art_block4" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
						<div class="title">Сроки</div>
						<div class="description">Поставки машины не превышают 12 часов после заключения договора</div>
					</div>
					<div class="uk-width-1-1 uk-width-medium-1-3 uk-text-center art_block4" data-uk-scrollspy="{cls:'uk-animation-slide-right', delay:300}">
						<div class="title">Направление</div>
						<div class="description">Перевозок осуществляется любым маршрутом</div>
					</div>
				</div>
			</div>
		</div>


	<div class='back_3'>
		<div class="uk-grid dark_block">
			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-width-small-2-3 uk-container-center uk-text-center padLeft">
						<div class="head_title head_title_white" >Рассчитать тариф</div>
					</div>
				</div>

				<form action="" metchod="POST" class="page_form forma_action" >
					<div class="uk-grid">
						<div class="uk-width-1-1 uk-container-center uk-text-center padLeft">
							<div class="norequired"></div>
								<input type="text" class="placeholder" name="name_client" placeholder="Ваше имя" required data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
								<input type="text" class="placeholder" name="email_client" placeholder="Ваш e-mail" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:400}">
								<input type="text" class="phone placeholder" name="phone_client" placeholder="Ваш телефон" required data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:500}">
						</div>
					</div>

					<div class="uk-grid">
						<div class="uk-width-1-1 uk-container-center uk-text-center padLeft" >
							<a class='btn btn_white btn_slider' onclick="getPrice('none');send_form('page_form')" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:600}">Рассчитать тариф</a>
						</div>
					</div>	
				</form>
			</div>
		</div>
	</div>	



		<div class="uk-grid footer">
			<div class="uk-width-1-1">
				<div class="uk-grid">
					<div class="uk-width-2-3 uk-container-center uk-text-center footer_block1">
						<div class="title">Все права защищены. STS Logistics 2016 г.</div>
					</div>
				</div>
				<div class="uk-grid">
					<div class="uk-width-2-3 uk-container-center uk-text-center footer_block2">
						<div class="title"><span>quotte.</span> creative agency</div>
						<div class="description"><a href="http://quotte.ru" target="_blank" class="white_link">Разработка сайта</a></div>
					</div>
				</div>
				<div class="uk-grid">
	        		<div class="uk-width-1-2 uk-container-center uk-text-center">
	        			<a href="#top" class="footer_arrow" data-uk-smooth-scroll>^</a>
	        		</div>	
	        	</div>
			</div>
		</div>	



		<div id="modal" class="uk-modal">
    		<div class="uk-modal-dialog">
		        <a class="uk-modal-close uk-close"></a>
		        <form action="#" method="POST" class="form_modal forma_action">
		        	<div class="title">Рассчитать тариф</div>
		        	<div class="norequired"></div>
		        	<div class="label"><input type="text" class="placeholder" name="name_client" placeholder="Ваше имя" required></div>
					<div class="label"><input type="text" class="placeholder" name="email_client" placeholder="Ваш e-mail" ></div>
					<div class="label"><input type="text" class="phone placeholder" name="phone_client" placeholder="Ваш телефон" required></div>
					<div class="label"><a class='btn btn_blue' onclick="send_form('form_modal')">Рассчитать тариф</a></div>
				</form>				
    		</div>
		</div>


		<script type="text/javascript" src="js/input_phone.js"></script>	
		<script type="text/javascript" src="js/placeholder.min.js"></script>	
		<script>
			$(function($){
   				$(".phone").mask("+7 (999) 999-99-99");
			});
		</script>
    </body>
</html>