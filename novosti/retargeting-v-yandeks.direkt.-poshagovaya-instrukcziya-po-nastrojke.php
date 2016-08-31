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

 
     <meta name="description" content="Пошаговая инструкция по настройке ретаргетинга в контекстной рекламе Яндекса. Почему нужно связывать Директ и Метрику, и как правильно условия ретаргетинга." />
    <meta name="keywords" content="" />
    <!--
      hash is 464e0fb146194482a3ab153fc11e6346175a63f0
    -->
    <title>Ретаргетинг в Яндекс.Директ. Пошаговая инструкция по настройке</title>
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



		<meta property="og:image" content="http://redline.by/resources/./targeting-1.jpg"/>
<meta property="og:site_name" content="Red Line"/>
<meta property="og:title" content="Ретаргетинг в Яндекс.Директ. Пошаговая инструкция по настройке"/>
<meta property="og:url" content="http://redline.by/novosti/retargeting-v-yandeks.direkt.-poshagovaya-instrukcziya-po-nastrojke.html"/>
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
 &rarr; <li class="B_lastCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_currentCrumb" itemprop="url" rel="Ретаргетинг в Яндекс.Директ. Пошаговая инструкция по настройке" href="retargeting-v-yandeks.direkt.-poshagovaya-instrukcziya-po-nastrojke.html"><span itemprop="title">Ретаргетинг в Яндекс.Директ. Пошаговая инструкция по настройке</span></a></li>
</ul>

		 <div class='special-title centered-text'>
          <!--<i class='fa fa-newspaper-o'></i>-->
		 <div class="main-title">
			  <h1>Ретаргетинг в Яндекс.Директ. Пошаговая инструкция по настройке</h1>
		</div>

          <p class='shortline'></p>
        </div>
		<div class='two spacing'></div>

		<div class='large-12 columns news-block'>
		  
		  <div class='post'>
            <!--<div class='info'>
              <h1>
                Ретаргетинг в Яндекс.Директ. Пошаговая инструкция по настройке
              </h1>

            </div>-->

            <div class='content'>
              <p class='image'>
                <a href='retargeting-v-yandeks.direkt.-poshagovaya-instrukcziya-po-nastrojke.html'>
                  <img alt='Ретаргетинг в Яндекс.Директ. Пошаговая инструкция по настройке' src='../assets/cache_image/resources/targeting-1_1600x487_490.jpg'>
                </a>
              </p>
              <!--noindex-->
<h2>Ретаргетинг в Яндекс.Директ. Пошаговая инструкция по настройке</h2>
<p>В этой статье вы узнаете как пошагово настроить ретаргетинг в <a href="../uslugi/prodvizhenie-sajtov/kontekstnaya-reklama.html">Яндекс.Директ</a>.</p>
<p align="justify">Итак, <strong>ретаргетинговые объявления </strong>— это объявления, которые вы показываете посетителям которые уже были у вас на сайте. А значит, что для начала нужно «показать» системе, кто эти люди. Это называется «Сбор аудитории ретаргетинга». В Яндекс.Директ сбор аудитории ведется с помощью счетчика Яндекс Метрики.</p>
<h2 align="center">Связываем Директ и Метрику</h2>
<p align="justify">Для начала убедитесь, что у вас корректно установлен счетчик Яндекс Метрики на все страницы сайта. Если счетчик Метрики у вас заведен на аккаунте, с которого вы собираетесь размещать <strong>ретаргетинговые кампании</strong>, поздравляю — в таком случае Директ с Метрикой уже связаны и вы можете переходить к следующему шагу. Если кампании и счетчик находятся на разных аккаунтах, для начала вам нужно открыть доступ аккаунту Директа до счетчика Метрики. Допустим, вы размещаете рекламу в Директе с аккаунта: directRulez@yandex.ru</p>
<p>Открываем ему доступ до Метрики:</p>
<div id="attachment_9760">
<div align="center"><a href="../../convertmonster.ru/wp-content/uploads/dostup.jpg" target="_blank"><img src="../../convertmonster.ru/wp-content/uploads/dostup.jpg" alt="dostup" width="1277" height="279" /></a></div>
<p align="center"><em>Открываем доступ Яндекс.Директа до статистики Метрики</em></p>
</div>
<p>1) В списке счетчиков нажимаем кнопку «Доступ» у нужного нам счетчика.</p>
<p>2) В открывшемся окне нажимаем плюсик.</p>
<p>3) Вводим название аккаунта. И комментарий (не обязательно). Нажимаем кнопку «Добавить».</p>
<h2 align="center">Как настроить условие ретаргетинга</h2>
<p>Итак аккаунты связаны, пора приступать к <strong>созданию аудитории</strong>.</p>
<p align="justify">Для начала нужно понять, по каким условиям будут отбираться люди в нашу аудиторию. О чудо, мы можем не просто показывать одну и ту же рекламу всем посетителям нашего сайта, <strong>мы можем разбивать их на разные группы и показывать им разную рекламу</strong>, а кому-то и не показывать вовсе. Если вы все же хотите показываться всем, выбирайте условие «Посетил сайт» — оно становится доступным сразу после связи аккаунтов. Метрика 2.0 и Директ предоставляют мощные инструменты для формирования условий ретаргетинга.</p>
<p>Давайте разберемся в них:</p>
<h2 align="center">Настроить условия в Яндекс Метрике</h2>
<blockquote>
<p>Для формирования условий ретаргетинга вы можете использовать 2 инструмента Метрики:</p>
<ul>
<li><strong>Цели</strong></li>
<li><strong>Сегменты</strong></li>
</ul>
</blockquote>
<h2 align="center"><strong>Цели</strong></h2>
<div id="attachment_9764">
<div align="center"><a href="../../convertmonster.ru/wp-content/uploads/celi.jpg" target="_blank"><img title="Цели" src="../../convertmonster.ru/wp-content/uploads/celi.jpg" alt="Метрика. Цели" width="830" height="247" /></a></div>
<p align="center"><em>Цели в Яндекс Метрике</em></p>
</div>
<p align="justify">Подробнее про настройку целей можно почитать тут. Соответственно Метрика может передавать Директу данные о людях, которые выполнили или не выполнили определенные цели (например «Оставили заявку», или «Зашли в корзину). Если цель настроена, вы сразу можете использовать ее в Директе при настройке условий ретаргетинга.</p>
<h2 align="center"><strong>Сегменты</strong></h2>
<div id="attachment_9765">
<div align="center"><a href="../../convertmonster.ru/wp-content/uploads/segment.jpg"><img title="Сегменты" src="../../convertmonster.ru/wp-content/uploads/segment.jpg" alt="Метрика. Сегменты" width="1066" height="489" /></a></div>
<p align="center"><em>Сегменты в Яндекс Метрике</em></p>
</div>
<p align="justify">Сегменты - нововведение Метрики 2.0. Как исходит из названия, с помощью сегментов вы можете выделять из всех посетителей сайта только тех, которые удовлетворяют определенным условиям (сегментировать посетителей). Например: «только посетители из Воронежа» или «только мужчины» или «только мужчины из Воронежа» и т.д. Для того, чтобы использовать сегменты при настройке ретаргетинга, вы должны сохранить нужные вам сегменты.</p>
<p>Для того, чтобы создать сегмент и использовать его в ретаргетинге:</p>
<p>1) Нажимаем «Сегментировать» в любом отчете Метрики.</p>
<div id="attachment_9769">
<div align="center"><a href="../../convertmonster.ru/wp-content/uploads/segmentirovat.jpg" target="_blank"><img title="Сегментировать" src="../../convertmonster.ru/wp-content/uploads/segmentirovat.jpg" alt="Кнопка 'Сегментировать'" width="878" height="161" /></a></div>
<p align="center"><em>Кнопка «Сегментировать» в любом отчете Метрики</em></p>
</div>
<p>2) Выбираем условие, по которому будем сегментировать. (можно воспользоваться удобным поиском)</p>
<div id="attachment_9770">
<div align="center"><a href="../../convertmonster.ru/wp-content/uploads/uslovie_segment.jpg" target="_blank"><img title="Сегментирование" src="../../convertmonster.ru/wp-content/uploads/uslovie_segment.jpg" alt="Метрика. Сегментирование" width="850" height="807" /></a></div>
<p align="center"><em>Процесс построения Сегмента</em></p>
</div>
<p>3) Сохраняем и Называем полученный сегмент.</p>
<div id="attachment_9771">
<div align="center"><a href="../../convertmonster.ru/wp-content/uploads/save_segment.jpg" target="_blank"><img src="../../convertmonster.ru/wp-content/uploads/save_segment.jpg" alt="'Сохранить' Сегмент " width="313" height="150" /></a></div>
<p align="center"><em>Сохраняем Сегмент</em></p>
</div>
<div id="attachment_9772">
<div align="center"><a href="../../convertmonster.ru/wp-content/uploads/name_segment.jpg" target="_blank"><img src="../../convertmonster.ru/wp-content/uploads/name_segment.jpg" alt="Название Сегмента" width="361" height="167" /></a></div>
<p align="center"><em>Даем название Сегменту</em></p>
</div>
<p>Как только вы сохранили Сегмент в Метрике, он станет доступен для настройки условия ретаргетинга в Директе.</p>
<h2 align="center">Выбор условий ретаргетинга в Яндекс.Директ</h2>
<p>Итак, вы создали интересующие вас цели, сегменты. Теперь пора начать <strong>собирать аудиторию</strong>, используя эти цели и сегменты.</p>
<p>Для этого в самом низу интерфейса Директа ищем строчку «Условия ретаргетинга», нажимаем. И попадаем на страницу с сохраненными условиями Ретаргетинга. Если связь Директа с Метрикой работает корректно, у вас будет возможность добавить новое условие:</p>
<div id="attachment_9775">
<div align="center"><a href="../../convertmonster.ru/wp-content/uploads/create_retarg.jpg" target="_blank"><img title="Условия Ретаргетинга" src="../../convertmonster.ru/wp-content/uploads/create_retarg.jpg" alt="Страница условий ретаргетинга" width="928" height="292" /></a></div>
<p align="center"><em>Добавляем новое условие</em></p>
</div>
<p>Давайте разберемся с интерфейсом создания нового Условия:</p>
<div id="attachment_9777">
<div align="center"><a href="../../convertmonster.ru/wp-content/uploads/new_cond.jpg" target="_blank"><img title="Окно Условия ретаргетинга" src="../../convertmonster.ru/wp-content/uploads/new_cond.jpg" alt="Директ. Условие ретаргетинга" width="528" height="517" /></a></div>
<p align="center"><em>Настраиваем условие ретаргетинга</em></p>
</div>
<p align="justify">1) <strong>Название</strong> (+ Примечание) — тут все понятно. В этом поле вы даете название (и если нужно примечание) условию ретаргетинга.</p>
<p align="justify">2) <strong>Показывать объявления если </strong>- вот тут-то вы и задаете все условия ретаргетинга (условия формирования аудитории) которые вас интересуют</p>
<blockquote>
<p>При формировании условия ретаргетинга вы можете использовать несколько «групп условий» (которые объединяются <strong>логическим «И»</strong>. А значит для показа объявления человек должен удовлетворять условиям всех групп).</p>
</blockquote>
<p align="justify">При настройке каждой группы условий вы можете использовать несколько целей и/или сегментов из Метрики. Причем вы можете ставить условие как выполнения цели (попадания в сегмент), так и не выполнения цели (непопадания в сегмент). Делается это с помощью следующих вариантов:</p>
<p align="justify">а)<strong> «Выполнено хотя бы одно»</strong> — если человек во время посещения сайта выполнил хотя бы одну из перечисленных целей или попадает хотя бы в один из перечисленных сегментов, условие группы будет выполнено.</p>
<p align="justify">б)<strong> «Выполнены все»</strong> - если человек во время посещения сайта выполнил все из перечисленных целей и входит во все перечисленные сегменты, условие группы будет выполнено.</p>
<p align="justify">в) <strong>«Не выполнено ни одного»</strong> - если человек во время посещения сайта не выполнил ни одной из перечисленных целей и не входит ни в один из перечисленных сегментов, условие группы будет выполнено.</p>
<p align="justify">Каждый раз при указании цели или сегмента вы задаете время ретроспективной выборки, которое вас интересует. Указывается в днях. Количество дней считается от текущего дня и может быть в интервале от 1 до 30. То есть например выбрав «14 дней», вы отбираете людей которые выполнили (или нет) цель за последние 14 дней. Это значит, что людям, которые были на вашем сайте больше месяца назад, показывать рекламу невозможно. Также это означает, что ваша <strong>аудитория ретаргетинга</strong> постоянно обновляется (кто-то приходит, кто-то уходит).</p>
<h2 align="center">Объявление для ретаргетинга: пример</h2>
<div id="attachment_9779">
<div align="center"><a href="../../convertmonster.ru/wp-content/uploads/primer_cond.jpg" target="_blank"><img src="../../convertmonster.ru/wp-content/uploads/primer_cond.jpg" alt="Директ. Ретаргетинг. Пример" width="525" height="626" /></a></div>
<p align="center"><em>Пример настроенного условия Ретаргетинга</em></p>
</div>
<p>В данном примере я формирую аудиторию людей, которая удовлетворяет следующим условиям (ВСЕМ этим условиям одновременно):</p>
<p>1) <strong>(Группа 1)</strong> Эти люди должны были попасть на сайт с Директа или AdWords. Для этого я использую 2 сегмента (построенных на utm метках) объединенных «Выполнено хотя бы одно»</p>
<p>Настройка Сегмента «Пришел с AdWords»</p>
<div id="attachment_9782">
<div align="center"><a href="../../convertmonster.ru/wp-content/uploads/prishel_adwords1.jpg" target="_blank"><img title="Сохраненный Сегмент" src="../../convertmonster.ru/wp-content/uploads/prishel_adwords1.jpg" alt="Сегмент 'Пришел с AdWords'" width="461" height="124" /></a></div>
<p align="center"><em>Сохраненный сегмент «Пришел с AdWords»</em></p>
</div>
<p> </p>
<p>2) <strong>(Группа 2)</strong> Эти люди не должны были оставить заявок ни на одной из 2 форм. Для этого используется 2 цели, отвечающих за попадание на страницы «Спасибо» каждой формы, объединенных «Не выполнено ни одного».</p>
<p>3) <strong>(Группа 3) </strong>Эти люди должны были сидеть на сайте с помощью браузера Google Chrome. Для этого используется сегмент по браузеру и условие «Выполнены все».</p>
<h2 align="center">Создаем объявление</h2>
<p>Итак, мы настроили условие, нажали кнопочку «Сохранить» и оно отобразилось у нас в списке Условий.</p>
<blockquote>
<p><strong>Обратите внимание:</strong> Сбор базы начнется только после того, как вы задали условие ретаргетинга. То есть пользователи, удовлетворяющие условию, но посетившие сайт ДО создания «Условия ретаргетинга» в Директе собраны не будут. Это значит, что создавать «Условие ретаргетинга» желательно как можно раньше, чтобы как можно раньше начать собирать аудиторию.</p>
</blockquote>
<p>Для того, чтобы начать <strong>показ объявления по аудитории ретаргетинга</strong> вы должны указать условие ретаргетинга в настройках объявления. К сожалению, это можно сделать только в веб-интерфейсе. Если вы создаете отдельную кампанию на ретаргетинг с нуля через Excel или Директ Коммандер, то, чтобы залить кампанию на сервер, вам нужно будет использовать ключевое слово (любое, хотя бы даже «ретаргетинг»), которое после настройки условия можно будет просто отключить.</p>
<p>Итак, допустим, вы подготовили отдельную кампанию на ретаргетинг и залили ее на сервер. Для добавления условия ретаргетинга вам следует:</p>
<p>а) Перейти на страницу редактирования группы объявлений</p>
<div id="attachment_9784">
<div align="center"><a href="../../convertmonster.ru/wp-content/uploads/edit_group.jpg" target="_blank"><img title="Директ. Группа" src="../../convertmonster.ru/wp-content/uploads/edit_group.jpg" alt="Редактирование группы объявлений" width="1316" height="394" /></a></div>
<p align="center"><em>Переходим на страницу редактирования группы</em></p>
</div>
<p>б) Добавить ваше подготовленное условие ретаргетинга в пункте «Условия ретаргетинга» с помощью кнопки «Добавить»</p>
<div id="attachment_9785">
<div align="center"><a href="../../convertmonster.ru/wp-content/uploads/add_retarg.jpg" target="_blank"><img title="Директ Ретаргетинг" src="../../convertmonster.ru/wp-content/uploads/add_retarg.jpg" alt="Условие ретаргетинга в настройках" width="948" height="438" /></a></div>
<p align="center"><em>Добавляем условие ретаргетинга</em></p>
</div>
<p>в) Выставить ставку на Выбранное условие</p>
<div id="attachment_9786">
<div align="center"><a href="../../convertmonster.ru/wp-content/uploads/stavka.jpg" target="_blank"><img title="Директ Ретаргетинг Ставка" src="../../convertmonster.ru/wp-content/uploads/stavka.jpg" alt="Ставка на условие ретаргетинга" width="1283" height="475" /></a></div>
<p align="center"><em>Выставляем ставку на условие</em></p>
</div>
<p>г) Отключить фразу, с помощью которой вы просто заливали кампанию на аккаунт</p>
<div id="attachment_9787">
<div align="center"><a href="../../convertmonster.ru/wp-content/uploads/phrase_off.jpg" target="_blank"><img title="Директ. Отключение фразы" src="../../convertmonster.ru/wp-content/uploads/phrase_off.jpg" alt="Отключение фразы" width="1009" height="304" /></a></div>
<p align="center"><em>Отключаем фразу, при наличии условия ретаргетинга</em></p>
</div>
<p>Все готово! Поздравляю, вы начали <strong>показ объявления по условию ретаргетинга!</strong></p>
<p>Если вам сложно это сделать самим, вы всегда можете обратится с нашим  сиртифицированным директологоам, получить любую консультацию по настройке,  либо заказать настройку контекстной рекламы с нуля!</p>
<!--/noindex-->
			  <p><a class="button" onclick="sub_name('Ретаргетинг в Яндекс.Директ. Пошаговая инструкция по настройке','pikt')" href="#modalWindow">Бесплатная консультация специалиста</a></p>

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
		<a href="retargeting-v-yandeks.direkt.-poshagovaya-instrukcziya-po-nastrojke.html" class="modal_close" id="close" onclick="resets()"><i class="fa fa-times"></i></a>
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
		  <input type="hidden" name="place" value="Ретаргетинг в Яндекс.Директ. Пошаговая инструкция по настройке">
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
		var ref ='retargeting-v-yandeks.direkt.-poshagovaya-instrukcziya-po-nastrojke.html';
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
