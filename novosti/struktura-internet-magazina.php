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

 
     <meta name="description" content="Если у вас появилось желание создать сайт для своего интернет-магазина, то для начала необходимо разобраться в его структуре, как сделать ее удобной и понятной." />
    <meta name="keywords" content="" />
    <!--
      hash is 464e0fb146194482a3ab153fc11e6346175a63f0
    -->
    <title>Создание структуры интернет-магазина</title>
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



		<meta property="og:image" content="http://redline.by/resources/news/16/8/main.png"/>
<meta property="og:site_name" content="Red Line"/>
<meta property="og:title" content="Структура интернет-магазина"/>
<meta property="og:url" content="http://redline.by/novosti/struktura-internet-magazina.html"/>
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
 &rarr; <li class="B_lastCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_currentCrumb" itemprop="url" rel="Структура интернет-магазина" href="struktura-internet-magazina.html"><span itemprop="title">Структура интернет-магазина</span></a></li>
</ul>

		 <div class='special-title centered-text'>
          <!--<i class='fa fa-newspaper-o'></i>-->
		 <div class="main-title">
			  <h1>Создание структуры интернет-магазина</h1>
		</div>

          <p class='shortline'></p>
        </div>
		<div class='two spacing'></div>

		<div class='large-12 columns news-block'>
		  
		  <div class='post'>
            <!--<div class='info'>
              <h1>
                Структура интернет-магазина
              </h1>

            </div>-->

            <div class='content'>
              <p class='image'>
                <a href='struktura-internet-magazina.html'>
                  <img alt='Структура интернет-магазина' src='../assets/cache_image/resources/news/16/8/main_1600x487_9c7.png'>
                </a>
              </p>
              <p> </p>
<p><span style="line-height:../1.5em;">Если у вас появилось желание создать сайт для своего <a href="../uslugi/razrabotka-sajtov/internet-magazin.html">интернет-магазина</a>, то для начала необходимо разобраться в его <strong>структуре</strong>, как сделать ее удобной и понятной. Сперва давайте разберемся, что такое структура сайта.</span></p>
<p><strong>Структура сайта</strong> – это схема распределения внутренних разделов и подразделов, которые связаны между собой по смыслу. <strong>Качественно</strong> построенная структура скажется на оценке ее поисковыми системами. Очень важно, чтобы она была простой и удобной для посетителей. Представьте себя на месте клиента вашего сайта: найдет ли он во всем этом разнообразии то, что ему действительно необходимо? Или же он будет долго блуждать по сайту, в итоге уйдет, ничего не купив? Подумайте еще над тем, сколько всего должно быть у вас на сайте категорий и подкатегорий? И как итог: как <strong>увеличить</strong> трафик интернет-магазина?</p>
<p>Если ваш магазин продает какой-то конкретный товар, который практически не имеет разновидностей, то ваша работа заметно упрощается. В таком случае вам не придется создавать очень сложную и запутанную конфигурацию категорий товаров. Скорей всего, вся ваша схема будет состоять из <strong>таблицы</strong> и нескольких ответвлений. И в данном случае она будет отвечать всем требованиям посетителя и поисковой системы. К тому же, семантика будет состоять всего лишь из нескольких поисковых запросов, которые просто расположить на нескольких страницах.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" title="Создание структуры интернет-магазина" src="../resources/news/16/8/1.png" alt="Структура интернет-магазина" width="650" height="399" /></p>
<p><span style="line-height:../1.5em;">Совсем другая ситуация, если у вас интернет-магазин специализируется на продаже товаров, которые делятся на категории, а эти категории в свою очередь – на подкатегории. Под подкатегориями может подразумеваться: цвет, размер, марка, тип и т.д. И тут уже при построении структуры необходимо учитывать <strong>частотность</strong> запросов конкретной категории.</span></p>
<p><span style="line-height:../1.5em;"><img style="display: block; margin-left: auto; margin-right: auto;" title="Создание структуры интернет-магазина" src="../resources/news/16/8/2.png" alt="Структура интернет-магазина2" width="650" height="398" /></span></p>
<h2><span style="line-height:../1.5em;">Плюсы построения структуры интернет-магазина</span></h2>
<ul>
<li>Еще на этапе проектирования сайта, вы сможете продумать весь свой функционал, что и как должно работать. И уже потом вам не придется ничего менять на готовом сайте. Учтите, что доработки (переписывание URL, добавление новых разделов) стоят дорого и требует больших затрат не только денег, но и времени.</li>
<li>Если вы с самого начала представляете и понимаете, что именно хотят видеть на сайте ваши клиенты, у вас не составит труда придумать, как им это предоставить, дабы улучшить поведенческие факторы.</li>
<li>Значительно упрощается функция продвижения сайта с помощью улучшения landing page под запросы. Согласитесь, что оптимизировать статьи под одно ключевое слово куда проще, чем под десять.</li>
<li>Сокращается затрата на создание ссылочного пространства. А это значит, что хорошо оптимизированный сайт потребует небольшого количества ссылок для продвижения его в топ поиска.</li>
</ul>
<p>Прежде чем начать продвигать сайт, необходимо подобрать <strong>семантику</strong>, а уже потом создавать структуру на ее основе. Многие делают всё наоборот, что является изначально неправильным подходом к продвижению. Ведь чтобы составить правильную структуру, необходимо для начала изучить <strong>целевую аудиторию</strong>, и впоследствии подстроиться под ее запросы и ожидания. В чем нам и помогает семантическое ядро – ведь это и есть готовый список запросов клиентов.</p>
<p>Создание новой категории уже зависит от:</p>
<ul>
<li><span style="line-height:../1.5em;">спрос на данную категорию товаров</span></li>
<li><span style="line-height:../1.5em;">наличие большого количества товаров в созданной категории</span></li>
<li><span style="line-height:../1.5em;">существует ли данная категория у конкурентов.</span></li>
</ul>
<p>В итоге, составив полный список ключевых фраз, мы можем запросто определить тот список товаров, который необходимо отнести в отдельную категорию или наоборот, не создавать такой раздел вообще.</p>
<h2>Процесс создания структуры интернет-магазина</h2>
<p>Возьмем для примера разработанный <a href="../default.htm">нашей компанией</a> интернет-магазин <strong>ЮНИ Двери</strong>.</p>
<p><strong>Этап 1. Создание семантического ядра</strong></p>
<p>Для начала нам необходимо создать полное семантическое ядро, разбить его на страницы и разобраться с ключевыми словами, которые будут релевантны информации на этих страницах. Это можно сделать с помощью различных <strong>сервисов</strong>, YandexWordstat или Prodvigator. Вбиваем в строку поиска слово «двери» и получаем результат для Беларуси: 257 096 запросов.</p>
<p><img style="vertical-align: middle; display: block; margin-left: auto; margin-right: auto;" title="Создание структуры интернет-магазина" src="../resources/news/16/8/wardstat.PNG" alt="Поиск ключевых слов" width="650" height="490" /></p>
<p>Это и есть те самые <strong>ключевики</strong>, по которым продвигаются наши конкуренты по запросу «двери». Соответственно, получаем именно те запросы, с которых можно получить реальный трафик.</p>
<p><strong>Этап 2. Разделение запросов на группы</strong></p>
<p>После того, как мы определились с семантикой, необходимо общее ядро <strong>разбить</strong> на группы. Другими слова, нужно определиться с названиями для будущих категорий и подкатегорий интернет-магазина. Сделать это можно с помощью программы или вручную. Посмотрев на результаты нашего запроса, можно увидеть, что чаще всего со словом «двери» люди ищут «межкомнатные двери» и «входные двери». Это и будут первых две категории по месту их установки.<span style="line-height:../1.5em;"><br /></span></p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" title="Создание структуры интернет-магазина" src="../resources/news/16/8/3.PNG" alt="Разделы" width="402" height="80" /></p>
<p>Кстати, неплохо добавить категорию «акции» на видное место, если они у вас имеются. Если же запросы отсортировать по материалу, то получится, что чаще всего ищут «металлические двери». Получается, самым популярным запросом оказался «входные металлические двери» - вот и название <strong>категории</strong>. По популярности далее пойдут межкомнатные и раздвижные – тоже название категорий. Нельзя не заметить, что людей также интересует и цена на двери. Соответственно, как подкатегорию можно сделать «дешевле» и «дороже».<span style="line-height:../1.5em;"> </span></p>
<p><span style="line-height:../1.5em;"><img style="display: block; margin-left: auto; margin-right: auto;" title="Создание структуры интернет-магазина" src="../resources/news/16/8/tree.PNG" alt="Подразделы" width="616" height="61" /></span></p>
<p><strong>Этап 3. Создание структуры</strong></p>
<p>Структура магазина может быть построена <strong>несколькими</strong> способами: создание древа категорий, создание системы фильтрации, создание тегов.</p>
<p><strong>Древо категорий</strong> является неплохим вариантом, если же ваше семантическое ядро небольшое. В противном случае, клиент сможет запутаться в категориях и их подкатегориях. Да и вам самим будет непросто сделать глубокий уровень вложенности страниц. В результате структура каталога получится просто запутанной.</p>
<p><img style="vertical-align: middle; display: block; margin-left: auto; margin-right: auto;" title="Создание структуры интернет-магазина" src="../resources/news/16/8/doors.PNG" alt="Подкатегории" width="650" height="422" /></p>
<p><strong>Создание тегов</strong> используют вместе с другими способами группировки. Они позволяют более точно описать товар.</p>
<p><strong>Система фильтрации</strong> является наиболее эффективной. Пользователь не будет блуждать по сайту, переходя от одной категории к другой, а изначально выберет то, что он ищет с помощью фильтров.</p>
<p>                                                      <img title="Создание структуры интернет-магазина" src="../resources/news/16/8/filter.PNG" alt="Фильтр" width="255" height="596" />  <img class="justifyleft" title="Создание структуры интернет-магазина" src="../resources/news/16/8/filters.PNG" alt="Фильтры" width="264" height="776" /></p>
<p><span style="line-height:../1.5em;">Мы можете использовать <strong>одновременно</strong> все три способа разделения на категории. Например, для начала направить клиента в нужную категорию, а уже потом к этой категории добавить возможность фильтрации.</span></p>
<p>Что касается вопроса «создавать ли отдельную страницу под группу запросов?» можно ответить так: стоит, если это обусловлено большим количеством различных товаров. То есть, если в каждой подкатегории не более 7 товаров, создавать для нее отдельную страницу нет смысла.</p>
<p>После создания категории, остается лишь наполнить страницы контентом, прописать метаданные, добавить внутреннюю перелинковку.</p>
<p><strong>Краткий чек-лист:</strong></p>
<ol>
<li>Анализируем рынок конкурентов</li>
<li>Определяемся с семантикой</li>
<li>Оцениваем спрос и предложение</li>
<li>Создаем семантическое ядро</li>
<li>Делим ядро на группы запросов</li>
<li>Группы запросов соотносим с категориями и подкатегориями товаров в интернет-магазине</li>
<li>Оптимизируем сайт</li>
</ol>
<p><strong><span style="line-height:../1.5em;">Итог</span></strong></p>
<p>Существует несколько способов построения структуры интернет-магазина. Каждый имеет свои преимущества и особенности. Выберите <strong>удобный</strong> для вас, <a href="../uslugi/prodvizhenie-sajtov/sbor-semanticheskogo-yadra-sajta.html">соберите</a> полное семантическое ядро, <a href="../uslugi/prodvizhenie-sajtov/vnutrennyaya-optimizacziya-sajta.html">оптимизируйте</a> сайт – и рост трафика пользователей не заставит вас ждать.</p>
			  <p><a class="button" onclick="sub_name('Структура интернет-магазина','pikt')" href="#modalWindow">Проконсультироваться у специалиста</a></p>

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
		<a href="struktura-internet-magazina.html" class="modal_close" id="close" onclick="resets()"><i class="fa fa-times"></i></a>
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
		  <input type="hidden" name="place" value="Структура интернет-магазина">
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
		var ref ='struktura-internet-magazina.html';
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
