<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class='no-js'>
  <!--<![endif]-->
  <head>
    	<meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>


	<base  />

 
     <meta name="description" content="В этой статье мы рассмотрим наиболее популярные движки и CMS для создания интернет-магазина. Разберем их достоинства и недостатки не с точки зрения технической разработки, а для интернет-маркетологов и менеджеров. Общим для всех CMS является наличие русской локализации и технической поддержки, возможности для подключения и встроенные инструменты поисковой оптимизации." />
    <meta name="keywords" content="" />
    <!--
      hash is 464e0fb146194482a3ab153fc11e6346175a63f0
    -->
    <title>Как правильно выбрать движок, cms для создания интернет магазина | Редлайн</title>
    <link href="../redstyle/stylesheets/framework.css" media="screen" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../../code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link href="../redstyle/stylesheets/animate.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="../redstyle/stylesheets/style.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="../redstyle/stylesheets/skins.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="../redstyle/stylesheets/fontello.css" media="screen" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="alternate" type="application/rss+xml" title="RSS-лента Red Line" href="../rss-novostej.rss">

	<script type="text/javascript" src="../redstyle/javascripts/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="../redstyle/javascripts/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../redstyle/javascripts/jQueryRotate.js"></script>
    <script src="../redstyle/javascripts/libs.js" type="text/javascript"></script>
    <!--<script src="/redstyle/javascripts/app.js" type="text/javascript"></script>-->
    <script>
      // terrificjs bootstrap
      (function($) {
          $(document).ready(function() {
              var $page = $('body');
              var config = {
                dependencyPath: {
                  plugin: '../redstyle/javascripts/default.htm'
                }
              }
              var application = new Tc.Application($page, config);
              application.registerModules();
              application.start();
          });
      })(Tc.$);
    </script>

    <link href='../../fonts.googleapis.com/css@family=PT+Sans_3A400,700,400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='../../fonts.googleapis.com/css@family=Tinos_3A400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='../../https@fonts.googleapis.com/css@family=Open+Sans_3A400,300,400italic,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">







<!-- Yandex.Metrika counter -->
	<script src="../../mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
	<script type="text/javascript">
	try { var yaCounter31671181 = new Ya.Metrika({id:31671181,
			  webvisor:true,
			  clickmap:true});
	} catch(e) { }
	</script>
	<noscript><div><img src="../../mc.yandex.ru/watch/31671181" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->









	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-65918808-1', 'auto');
	  ga('send', 'pageview');
	
	</script>


	<!--Запрет на копирование
	script type="text/javascript">
	document.ondragstart = noselect();
	document.onselectstart = noselect();
	document.oncontextmenu = noselect();
	function noselect() {return false;}
	</script-->

<script type="text/javascript">
function addLink() {
    var body_element = document.getElementsByTagName('body')[0];
    var selection;
    selection = window.getSelection();
    var pagelink = "<br /><br /> Источник: <a href='"+document.location.href+"'>"+document.location.href+"</a><br />© redline.by"; // В этой строке поменяйте текст на свой
    var copytext = selection + pagelink;
    var newdiv = document.createElement('div');
    newdiv.style.position='absolute';
    newdiv.style.left='-99999px';
    body_element.appendChild(newdiv);
    newdiv.innerHTML = copytext;
    selection.selectAllChildren(newdiv);
    window.setTimeout(function() {
        body_element.removeChild(newdiv);
    },0);
}
document.oncopy = addLink;
</script>


<!--script src="../redstyle/javascripts/snowstorm.js"></script>
<script type="text/javascript">
//snowStorm.snowColor = '#99ccff'; // blue-ish snow!?
//snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
snowStorm.snowCharacter = '*';
snowStorm.flakesMaxActive = 16;
snowStorm.flakesMax = 53;
snowStorm.animationInterval = 15;
</script-->


<!--style>
.top-bar .name h1 a, .top-bar .name .logo a {
    background: rgba(0, 0, 0, 0) url("http://i.imgur.com/QwqUkZp.png") no-repeat scroll;
    color: #333333;
    display: block;
    padding-bottom: 2px;
    padding-left: 20px;
    background-width: 200px;
    background-size: 130px;
    background-position: 17px 0px ;
</style-->



		<meta property="og:image" content="http://redline.by/resources/news/16/03/им картинка.jpg"/>
<meta property="og:site_name" content="Red Line"/>
<meta property="og:title" content="Выбор движка для интернет магазина"/>
<meta property="og:url" content="http://redline.by/novosti/vyibor-dvizhka-dlya-internet-magazina.html"/>
<meta property="og:type" content="article"/>
  </head>
  <body class=''>
	
	
	
<div itemscope itemtype="http://schema.org/LocalBusiness" class='contain-to-grid sticky'>
	<div class='top-black'>
	  <div class='row'>
	  	<a title="Карта сайта" class="sitemap" href="../sitemap.html"><i class="fa fa-sitemap"></i> </a>
	 <div class="phone-block1">
	<span itemprop="email" class="mail"><a href="mailto:info@redline.by">info@redline.by</a></span>

  <span itemprop="telephone" class="mts">+375 (33) 601-41-11</span>
</div>

<div class="phone-block2">
  <span itemprop="telephone" class="velc">+375 (29) 391-01-11</span>  
  <span itemprop="telephone" class="skype"><i class="fa fa-skype"></i><a href="../skype_3Aredlineby.ivanov@chat">redlineby.ivanov</a></span>
</div>
<div class="call-back">
<div id="snake">
  <a class="but" href="../kontaktyi.html#modalWindow" onclick=""><i class="fa fa-phone"></i> Бесплатный звонок</a>
</div>
</div>
	  </div>
	</div>

  <nav class='top-bar' data-options='sticky_on: large' data-topbar=''>
	<ul class='title-area'>
	  <li class='name'>
		<div class='logo'>	  
		  <a href='default.htm' title="студия веб-дизайна">
		  	<span itemprop="name">Red line</span>
			<span class='logo-description'>студия<br/>веб-дизайна</span>
		</a>

		</div>
	  </li>
	  <li class='toggle-topbar menu-icon'>
		<a href='#'>Меню</a>
	  </li>
	</ul>
	<section class='top-bar-section'>
	  <ul class='right'>
		<li>
<a href="default.htm">Главная</a>
</li>
		














<li>
  <a class="active" href='../portfolio/default.htm'>Наши работы <span class="caret"></span></a>
  

  

</li>










<li class='has-dropdown'>
  <a class="active" href='../uslugi/default.htm'>Наши услуги <span class="caret"></span></a>
  <ul class='dropdown m-menu'><li><div class="row">
	<div class="medium-3 column">
  <h3><a href='../uslugi/razrabotka-sajtov/default.htm'>Разработка сайтов</a></h3>
  <ul>
	<li>
  <a href='../uslugi/razrabotka-sajtov/sajt-vizitka.html'>Сайт визитка</a>
</li>
<li>
  <a href='../uslugi/razrabotka-sajtov/lending.html'>Landing Page</a>
</li>
<li>
  <a href='../uslugi/razrabotka-sajtov/internet-magazin.html'>Интернет-магазин</a>
</li>
<li>
  <a href='../uslugi/razrabotka-sajtov/korporativnyij-sajt/default.htm'>Корпоративный сайт</a>
</li>
<li>
  <a href='../uslugi/razrabotka-sajtov/adaptivnaya-verstka.html'>Мобильная адаптация</a>
</li>
  </ul>
</div><!--end of .column-->



<div class="medium-3 column">
  <h3><a href='../uslugi/prodvizhenie-sajtov/default.htm'>Продвижение сайтов</a></h3>
  <ul>
	<li>
  <a href='../uslugi/prodvizhenie-sajtov/kontekstnaya-reklama.html'>Контекстная реклама</a>
</li>
<li>
  <a href='../uslugi/prodvizhenie-sajtov/prodvizhenie-grupp-i-publichnyix-stranicz-v-soczialnyix-setyax.html'>Продвижение в соц.сетях</a>
</li>
  </ul>
</div><!--end of .column-->



<div class="medium-3 column">
  <h3><a href='../uslugi/dizajn-i-grafika/default.htm'>Дизайн и графика</a></h3>
  <ul>
	<li>
  <a href='../uslugi/dizajn-i-grafika/razrabotka-firmennogo-stilya/default.htm'>Фирменный стиль</a>
</li>
<li>
  <a href='../uslugi/dizajn-i-grafika/razrabotka-logotipa.html'>Логотип</a>
</li>
<li>
  <a href='../uslugi/dizajn-i-grafika/razrabotka-dizajn-maketa-v-psd.html'>Разработка дизайна</a>
</li>
<li>
  <a href='../uslugi/dizajn-i-grafika/sozdanie-statichnyix-bannerov.html'>Создание баннеров</a>
</li>
  </ul>
</div><!--end of .column-->

  <div class="medium-3 column">
  
<img src="../redstyle/stylesheets/images/new_box.png" alt="" />
</div>









  </div></li></ul>

</li>










<li>
  <a class="active" href='default.htm'>Наш блог <span class="caret"></span></a>
  

  

</li>














<li>
  <a class="active" href='../kontaktyi.html'>Контакты <span class="caret"></span></a>
  

  

</li>




			<li>
<a href="../akcii.html" class="action-btn">Акции!</a>
</li>
	  </ul>
	</section>
  </nav>
</div>

	
	
	<!--=== Разработка сайтов ===-->
	<div class='full'>
	  <div class='row'>

		 <ul class="B_crumbBox"><li class="B_firstCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_homeCrumb" itemprop="url" rel="Home" href="../default.htm"><span itemprop="title">Главная</span></a></li>
 &rarr; <li itemscope="itemscope" class="B_crumb" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_crumb" itemprop="url" rel="Наш блог" href="default.htm"><span itemprop="title">Наш блог</span></a></li>
 &rarr; <li class="B_lastCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_currentCrumb" itemprop="url" rel="Выбор движка для интернет магазина" href="vyibor-dvizhka-dlya-internet-magazina.html"><span itemprop="title">Выбор движка для интернет магазина</span></a></li>
</ul>

		 <div class='special-title centered-text'>
          <!--<i class='fa fa-newspaper-o'></i>-->
		 <div class="main-title">
			  <h1>На каком движке делать интернет магазин?</h1>
		</div>

          <p class='shortline'></p>
        </div>
		<div class='two spacing'></div>

		<div class='large-12 columns news-block'>
		  
		  <div class='post'>
            <!--<div class='info'>
              <h1>
                Выбор движка для интернет магазина
              </h1>

            </div>-->

            <div class='content'>
              <p class='image'>
                <a href='vyibor-dvizhka-dlya-internet-magazina.html'>
                  <img alt='Выбор движка для интернет магазина' src='../assets/cache_image/resources/news/16/03/ _25D0_25BA_25D0_25B0_25D1_2580_25D1_2582_25D0_25B8_25D0_25BD_25D0_25BA_25D0_25B0_1600x487_490.jpg'>
                </a>
              </p>
              <p><span style="line-height:../1.5em;"><a href="../uslugi/razrabotka-sajtov/internet-magazin.html">Интернет-магазин</a> – это связующее звено между покупателем и продавцом. От удобства пользования им будет напрямую зависеть количество продаж. При этом комфортной должна быть не только витрина покупателя, но и панель управления продавца. Система, отвечающая за работу сайта, называется <a href="chto-vyibrat-cms-ili-framework.html">CMS</a>. Ее выбор определит всю дальнейшую работу ресурса.</span></p>
<p>В этой статье мы рассмотрим наиболее популярные CMS для создания интернет-магазина. Разберем их достоинства и недостатки не с точки зрения технической разработки, а для интернет-маркетологов и менеджеров. Общим для всех CMS является наличие русской локализации и технической поддержки, возможности для подключения и встроенные инструменты поисковой оптимизации.</p>
<h2>RED-CMS</h2>
<p>Наша компания предлагает разработку интернет-магазина с нуля, с учетом всех Ваших требований и специфики торговли. Разработанная нами система позволяет реализовать широкую функциональность и уникальный дизайн.</p>
<p>Преимущества RED-CMS:</p>
<ul>
<li>высокая скорость работы и КПД;</li>
<li>безопасность системы;</li>
<li>возможность реализации нестандартных решений.</li>
<li>хорошая <a href="../uslugi/prodvizhenie-sajtov/default.htm">СЕО</a> оптимизация сайта</li>
</ul>
<p>Недостатки:</p>
<ul>
<li>разработка индивидуального проекта займет некоторое время;</li>
<li>для грамотной реализации требуется квалифицированный специалист.</li>
</ul>
<h2>Бесплатные CMS</h2>
<p>Начинающие предприниматели и представители малого бизнеса часто обращаются к бесплатным CMS для интернет-магазина. Причиной этому служит явная экономия. При этом следует учесть, что комплектация готовой системы часто не соответствует требованиям конкретного интернет-магазина. Дополнительные приложения и модули приходится оплачивать отдельно. Выбор платных и бесплатных приложений велик, но каждый разработчик пишет их согласно своему подходу, из-за чего случаются конфликты приложений разного производства, нарушающие корректную работу системы.</p>
<p>Плюсом бесплатных CMS является также наличие развитых сообществ и отсутствие дефицита специалистов. Вы всегда найдете программиста, способного настроить функционирование интернет-магазина.</p>
<h2>Open Cart</h2>
<p>Мультиязычная система <a href="chto-takoe-opencart-osnovnyie-preimushhestva-i-nedostatki.html">Open Cart</a> представлена на рынке более 10 лет и предназначена специально для создания интернет-магазинов. Есть несколько сборок на выбор.</p>
<p>Преимущества:</p>
<ul>
<li>имеет неплохую скорость работы;</li>
<li>не требовательна к <a href="../uslugi/dopolnitelnyie-uslugi/predostavlenie-xostinga-dlya-sajta.html">хостингу</a>;</li>
<li>обладает большим количеством платных и бесплатных шаблонов и модулей;</li>
<li>интегрируется с разными платежными системами;</li>
<li>легка в освоении.</li>
</ul>
<p>Недостатки:</p>
<ul>
<li>для некоторых изменений в CMS потребуется профессиональный программист;</li>
<li>функционал готовых сборок потребует расширения;</li>
<li>случаются проблемы с ЧПУ.</li>
</ul>
<h2>Prestashop</h2>
<p>Мультиязычная CMS Prestashop работает в интернете почти двадцать лет. Дважды получала награду Best Open-source Business Application.</p>
<p>Преимущества:</p>
<ul>
<li>имеет широкий функционал базовой версии;</li>
<li>присутствуют модули подключения российских платежных систем;</li>
<li>возможен экспорт товаров в Яндекс.Маркет;</li>
<li>легка в освоении.</li>
</ul>
<p>Недостатки:</p>
<ul>
<li>невысокая производительность;</li>
<li>недостатки в организации поисковой оптимизации.</li>
</ul>
<h2>Wordpress</h2>
<p>Самая популярная CMS в системе интернет, <a href="chto-takoe-cms-wordpress-osnovnyie-dostoinstva-i-nedostatki!.html">Wordpress</a> не создавалась специально для интернет-магазинов, поэтому для данной функции требует подключения плагина Woocommerce.</p>
<p>Преимущества:</p>
<ul>
<li>простая в освоении и управлении;</li>
<li>имеет наибольшее число шаблонов и плагинов;</li>
<li>стоимость платных приложений относительно невелика из-за жесткой конкуренции разработчиков.</li>
</ul>
<p>К недостаткам Wordpress как CMS для интернет-магазина можно отнести высокую требовательность к ресурсам: скорости загрузки и нагрузки на хостинг. Система подойдет для обслуживания небольшого интернет-магазина.</p>
<h2>Платные CMS</h2>
<p>В Рунете из платных вариантов наиболее популярны CMS отечественного производства, которые легко интегрируются с другими системами и программами. Функционал платных CMS для создания интернет-магазина обычно позволяет обойтись без дополнительных плагинов. Готовые сборки включают себя интернет-витрины и различные маркетинговые инструменты. Они справляются с большой нагрузкой многотысячного ассортимента товаров, поэтому и требования к хостингу обычно высокие.</p>
<h2>1С Битрикс</h2>
<p>Одна из наиболее популярных CMS в Рунете. <a href="razrabotka-sajtov-na-cms-1c-bitriks.html">1С Битрикс</a> является отечественной разработкой для создания интернет-магазинов. Используется также для <a href="../uslugi/razrabotka-sajtov/korporativnyij-sajt/default.htm">корпоративных сайтов</a>.</p>
<p>Преимущества:</p>
<ul>
<li>хорошая базовая комплектация;</li>
<li>широкий выбор дополнительных приложений;</li>
<li>интеграция с бухгалтерским приложением 1С;</li>
<li>возможность экспорта в Яндекс.Маркет;</li>
<li>удобство управления;</li>
<li><a href="../uslugi/razrabotka-sajtov/adaptivnaya-verstka.html">адаптация</a> под мобильные устройства.</li>
</ul>
<p>Недостатки:</p>
<ul>
<li>требовательность к ресурсам;</li>
<li>довольно высокая стоимость приложений.</li>
</ul>
<h2>CS-Cart</h2>
<p>Также является отечественной разработкой. Имеет высокую популярность.</p>
<p>Преимущества:</p>
<ul>
<li>частые обновления;</li>
<li>в русской сборке присутствует возможность интеграции с 1С;</li>
<li>простота управления;</li>
<li>адаптация под мобильные устройства.</li>
</ul>
<p>Недостатки:</p>
<ul>
<li>процесс оформления заказа не изменяем.</li>
</ul>
<h2>UMI.CMS</h2>
<p>Еще одна распространенная отечественная CMS. Имеет разные направления, два из которых: Shop и Commerce подходят для создания интернет-магазинов.</p>
<p>Преимущества:</p>
<ul>
<li>работает со всеми основными сервисами оплаты и доставки;</li>
<li>интеграция с приложением 1С;</li>
<li>возможность экспорта в Яндекс.Маркет;</li>
<li>адаптируется под мобильные устройства.</li>
</ul>
<p>Недостатки:</p>
<ul>
<li>довольно высокая стоимость приложений.</li>
</ul>
<h2>Какую выбрать CMS для создания интернет-магазина?</h2>
<p>Не существует универсальной CMS, которая стала бы верным решением для каждого случая. Бесплатные приложения подойдут для небольших витрин малого бизнеса. Для масштабных проектов с высокой нагрузкой лучше сразу использовать платные CMS, ориентированные именно на создание интернет-магазинов и поддерживающие отечественные программы и приложения. Не менее важна возможность адаптации для мобильных устройств.</p>
<p>Чтобы не ошибиться с выбором CMS для Вашего интернет-магазина, обратитесь к <a href="../kontaktyi.html">специалистам</a>. Они отыщут оптимальное решение для конкретного случая с учетом возможностей системы и требований клиента.</p>
<p> </p>
<p> </p>
<p> </p>
<p> </p>
			  <p><a class="button" onclick="sub_name('Выбор движка для интернет магазина','pikt')" href="#modalWindow">Консультация специалиста</a></p>

			  <div class="social-icon">

			  <script type="text/javascript" src="../../yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
<script type="text/javascript" src="../../yastatic.net/share2/share.js" charset="utf-8"></script>
<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,linkedin,viber"></div>
			  
			 </div> 
			  
            </div>
          </div>
		  
		</div>
	  </div>
	</div> 
    <!--=== End Разработка сайтов ===-->
	
	

<!--<div class="doc-block">
    <div class='spacing'></div>
    <div class="row">
        <div class="special-title centered-text">
			
            <p style="color: #fff;">Здесь Вы можете ознакомиться с <span class="publ-doc">публичным договором</span> на определенный вид услуг</p>

        </div>
    </div>
	<div class='spacing'></div>
    <div class="row centered-text">
        <div class="medium-3 large-3 columns">
            <a href="/publichnyij-dogovor/publichnyij-dogovor-na-razrabotku-sajta.html" class="button boxed">Разработка сайта</a>
        </div>
        <div class="medium-3 large-3 columns">
            <a href="/publichnyij-dogovor/publichnyij-dogovor-na-kontekstnuyu-reklamu.html" class="button boxed">Контекстная реклама</a>
        </div>
        <div class="medium-3 large-3 columns">
            <a href="/publichnyij-dogovor/publichnyij-dogovor-na-seo-prodvizhenie.html" class="button boxed">SEO продвижение</a>
        </div>
        <div class="medium-3 large-3 columns">
            <a href="/publichnyij-dogovor/publichnyij-dogovor-okazaniya-uslug-xostinga.html" class="button boxed">Услуги хостинга</a>
        </div>
    </div>
    <div class='spacing'></div>
</div>-->

<div class='footer'>
      <div class='spacing'></div>
      <div class='row'>
      
        <div class='medium-3 large-3 columns'>
			<h3 class="footer-title">Интересное</h3>
            <div class='footer-news'>
  <h3><a href="prodvizhenie-v-instagram.html">Продвижение в Instagram</a></h3>
</div>
<div class='footer-news'>
  <h3><a href="struktura-internet-magazina.html">Структура интернет-магазина</a></h3>
</div>
<div class='footer-news'>
  <h3><a href="smm-prodvizhenie.html">SMM-продвижение</a></h3>
</div>
<div class='footer-news'>
  <h3><a href="sistemyi-onlajn-oplatyi/default.htm">Системы онлайн оплаты</a></h3>
</div>
        </div>
        
        <div class='medium-6 large-6 columns centered-text'>
          <!--<div class='logo light'>
            <span class='spacing'></span>
            Red line
          </div>
          <div class='spacing'></div>
          <div class='spacing'></div>-->
          <div class='socials centered-text'>
            <a href='../../https@vk.com/redline_vitebsk' title="REDLINE в ВКонтакте" target="blank">
              <i class='fa fa-vk grey'></i>
            </a>
            <a href='../../https@www.facebook.com/groups/1464036370563403/default.htm' title="REDLINE в Facebook" target="blank">
              <i class='fa fa-facebook grey'></i>
            </a>
            <a class='ok-gr' href='../../ok.ru/group/53594708508907' title="REDLINE в Одноклассниках" target="blank">
              <i class='grey'></i>
            </a>
			<a href='../../https@twitter.com/Redline_Web' title="REDLINE в Twitter" target="blank">
              <i class="fa fa-twitter grey"></i>
            </a>
			<a href='../../https@www.linkedin.com/in/_25D0_25B2_25D0_25B5_25D0_25B1_25D1_2581_25D1_2582_25D1_2583_25D0_25B4_25D0_25B8_25D1_258F-redline-a96a9a114' title="REDLINE в LinkedIn" target="blank">
              <i class="fa fa-linkedin grey"></i>
            </a>
            <!--<a href='mailto:info@redline.by'>
              <i class='icon-mail grey'></i>
            </a>-->
			<a href="../rss-novostej.rss" title="RSS REDLINE">
				<i class="fa fa-rss grey"></i>
			</a>
          </div>

			<div class="elevator">
				<svg class="sweet-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" height="100px" width="100px">
								  <path d="M70,47.5H30c-1.4,0-2.5,1.1-2.5,2.5v40c0,1.4,1.1,2.5,2.5,2.5h40c1.4,0,2.5-1.1,2.5-2.5V50C72.5,48.6,71.4,47.5,70,47.5z   M47.5,87.5h-5v-25h5V87.5z M57.5,87.5h-5v-25h5V87.5z M67.5,87.5h-5V60c0-1.4-1.1-2.5-2.5-2.5H40c-1.4,0-2.5,1.1-2.5,2.5v27.5h-5  v-35h35V87.5z"/>
								  <path d="M50,42.5c1.4,0,2.5-1.1,2.5-2.5V16l5.7,5.7c0.5,0.5,1.1,0.7,1.8,0.7s1.3-0.2,1.8-0.7c1-1,1-2.6,0-3.5l-10-10  c-1-1-2.6-1-3.5,0l-10,10c-1,1-1,2.6,0,3.5c1,1,2.6,1,3.5,0l5.7-5.7v24C47.5,41.4,48.6,42.5,50,42.5z"/>
				</svg>
				Подняться наверх
		  </div>

          <p class='copyright'>© 2008 – 2016 REDLINE. <!-- Наше представительство в РФ - студия <a target="blank" href="http://www.graffox.ru">Graffox</a>--></p>

		<div class="partner">





		</div>	

        </div>

        
        <div class="medium-3 large-3 columns">

			<h3 class="footer-title">Публичные договоры</h3>
				<div class="footer-news">
					<h3 style="text-align: left;"><a href="../publichnyij-dogovor/publichnyij-dogovor-okazaniya-uslug-xostinga.html">Договор на услуги хостинга</a></h3>
					<h3 style="text-align: left;"><a href="../vakansii/default.htm">Вакансии <span class="caret"></span></a></h3>

					</div>
        </div>
        
      </div>
    </div>

    <script src='../redstyle/javascripts/jquery.countTo.js'></script>
    <script src='../redstyle/javascripts/jquery.appear.js'></script>
    <script src='../redstyle/javascripts/jquery.sequence-min.js'></script>
    <script src='../redstyle/javascripts/jquery.validate.js'></script>
    <script src="../redstyle/javascripts/app.js" type="text/javascript"></script>
    <!--<script src="/redstyle/javascripts/scrollup.js" type="text/javascript"></script>-->
	<script type="text/javascript" src="../redstyle/javascripts/elevator.min.js"></script>
	<script>

            // Simple elevator usage.
            var elementButton = document.querySelector('.elevator');
            var elevator = new Elevator({
                element: elementButton,
                mainAudio: '../redstyle/music/elevator.mp3', // Music from http://www.bensound.com/
                endAudio:  '/redstyle/music/ding.mp3'
            });

    </script>

	<!-- BEGIN JIVOSITE CODE {literal} -->
	<script type='text/javascript'>
	(function(){ var widget_id = '7gp6SZLlL3';
	var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '../../code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
	<!-- {/literal} END JIVOSITE CODE -->







	 <a href="#modal" class="overlay_modal" id="modalWindow" onclick="resets()"></a>
  <div id="signup">
	<div id="signup-ct">
	  <div id="signup-header">
		<h2 id="head">Оставить заявку</h2>
		<a href="vyibor-dvizhka-dlya-internet-magazina.html" class="modal_close" id="close" onclick="resets()"><i class="fa fa-times"></i></a>
	  </div>
	  <div id="result"></div>
		
		<form method="post" id="form" action="../default.htm">
		  <input type="text" name="filter-spam" value=" " style="display:none;" />
		  <div class="txt-fld hidden-input">
			<!--input type="text" name="order" value="Тема" readonly="readonly" id="subj_name"/-->
		  </div>
		   <div class="txt-fld">
  			<select size="1" name="order" id="subj">
			  <option disabled selected>Выберите услугу</option>
			  <option value="t0">Бесплатный звонок</option>
			  <option value="t1">Разработка сайтов</option>
			  <option value="t2">Продвижение сайтов</option>
			  <option value="t3">Контекстная реклама</option>
			  <option value="t4">Разработка фирменного стиля</option>
			  <option value="t5">Поддержка сайтов</option>
			  <option value="t6">Другое</option>
			 </select>
  			</div>
		  <div class="txt-fld">
			<input type="text" name="email" placeholder="email" /><b id="error_email"></b>
		  </div>
		  <div class="txt-fld">
			<input type="text" name="phone" pattern="[0-9]*" placeholder="телефон"/> <b id="error_tel"></b>
		  </div>
		  <div class="txt-fld">
			<textarea class="required" name="message" placeholder="текст сообщения"></textarea>
		  </div>
		  <input type="hidden" name="place" value="Выбор движка для интернет магазина">
		  <div class="btn-fld centered-text">
			<a href="javascript:void(0)" onclick="one_click('form','result')" class="button">Отправить</a>
		  </div>
		</form>
	</div>
  </div>


<script type="text/javascript">
	  function sub_name(sub,refer)
	  {
		jQuery("input#subj_name").val(sub);
		var ref ='vyibor-dvizhka-dlya-internet-magazina.html';
		var a_link = ref + '#' + refer;
		jQuery("#close").attr('href',a_link);
		jQuery('#form').css({"display":"block"});
	  }

	   function resets()
	  {
		jQuery('#form').trigger( 'reset' );
		jQuery('#head').css({"display":"block"});
		jQuery('#result').html(' ');
		jQuery('#error_email').css({"display":"none"});
		jQuery('#error_tel').css({"display":"none"});
	  }
	  
	   function resetsBrif()
	  {
		jQuery('#formBrif').trigger( 'reset' );
		jQuery('#headBrif').css({"display":"block"});
		jQuery('#resultBrif').html(' ');
		jQuery('#error_name_Brif').css({"display":"none"});
		jQuery('#error_tel_Brif').css({"display":"none"});
	  }
	</script>
	
	<script type="text/javascript">
	  function one_click_Brif(form_id,div_id,id) 
	  {
		jQuery('#' + div_id).parents("#signup-ct").parents("#signup").append( "<div class='preload'></div>" );
		var msg   = jQuery('#' + form_id).serialize();
		var url = document.location.href;
		jQuery.ajax({
		  type: 'POST',
		  url: url,
		  data: msg,
		  success: function(dataBrif) {
			
			jQuery( "div.preload" ).remove();
			
			var arrBrif = dataBrif.split('||');
			
			if(arrBrif[0]!='null')
			{
			  jQuery('#error_name_Brif').css({"display":"block"});
			  jQuery('#error_name_Brif').html(arrBrif[0]);
			}
			else
			{
			   jQuery('#error_name_Brif').html('');
			   jQuery('#error_name_Brif').css({"display":"none"});
			}
			
			if(arrBrif[1]!='null')
			{
			  jQuery('#error_tel_Brif').css({"display":"block"});
			  jQuery('#error_tel_Brif').html(arrBrif[1]);
			}
			else
			{
			   jQuery('#error_tel_Brif').html('');
			   jQuery('#error_tel_Brif').css({"display":"none"});
			}
			
			if(arrBrif[2]!='null')
			{
			  jQuery('#' + div_id).html('<div class="sent_s">' + arrBrif[2] + '</div>');
			  jQuery('formBrif').trigger( 'reset' );
			  jQuery('#headBrif').css({"display":"none"});
			  jQuery('#error_name_Brif').css({"display":"none"});
			  jQuery('#error_tel_Brif').css({"display":"none"});
			  jQuery('#formBrif').css({"display":"none"});
			}
			
		  },
		  error:  function(xhr, str){
			jQuery('#' + div_id).html('<div class="sent">' + xhr + '</div>');
			jQuery('#headBrif').css({"display":"none"});
			jQuery('#formBrif').css({"display":"none"});
		  }
		});
	  }
	  
	  function one_click(form_id,div_id,id) 
	  {
		jQuery('#' + div_id).parents("#signup-ct").parents("#signup").append( "<div class='preload'></div>" );
		var msg   = jQuery('#' + form_id).serialize();
		var url = document.location.href;
		jQuery.ajax({
		  type: 'POST',
		  url: url,
		  data: msg,
		  success: function(data) {
			
			jQuery( "div.preload" ).remove();
			
			var arr = data.split('||');
			
			if(arr[0]!='null')
			{
			  jQuery('#error_email').css({"display":"block"});
			  jQuery('#error_email').html(arr[0]);
			}
			else
			{
			   jQuery('#error_email').html('');
			   jQuery('#error_email').css({"display":"none"});
			}
			
			if(arr[1]!='null')
			{
			  jQuery('#error_tel').css({"display":"block"});
			  jQuery('#error_tel').html(arr[1]);
			}
			else
			{
			   jQuery('#error_tel').html('');
			   jQuery('#error_tel').css({"display":"none"});
			}
			
			if(arr[2]!='null')
			{
			  jQuery('#' + div_id).html('<div class="sent_s">' + arr[2] + '</div>');
			  jQuery('form').trigger( 'reset' );
			  jQuery('#head').css({"display":"none"});
			  jQuery('#error_email').css({"display":"none"});
			  jQuery('#error_tel').css({"display":"none"});
			  jQuery('#form').css({"display":"none"});
			}
			
		  },
		  error:  function(xhr, str){
			jQuery('#' + div_id).html('<div class="sent_s">' + 'Ошибка сообщение не отправлено! Используйте телефонный номер' + '</div>');
			jQuery('#head').css({"display":"none"});
			jQuery('#form').css({"display":"none"});
		  }
		});
	  }
	</script>

	
	
	
  </body>
</html>
