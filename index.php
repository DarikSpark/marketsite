<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class='no-js'>
<!--<![endif]-->
<head>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/polymer/0.3.3/platform.js"></script> -->
  
  <!--   <link rel="import" href="./components/info-top.php"> -->
  <!-- <link rel="import" href="./components/components.php">   -->
  <meta charset='utf-8'>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>


  <base  />


  <meta name="description" content="Мы занимаемся созданием и продвижением веб сайтов под ключ. Работаем по антикризисным ценам по всему СНГ! Разрабатываем уникальный и адаптивный дизайн. Оказываем техническую и информационную поддержку сайтов. Делаем SEO оптимизацию и аудиты сайтов. Настраиваем и ведём рекламные компании Яндекс.Директ и Google AdWords в контекстно-медийной сети. Занимаемся SMM продвижением и управлением репутаций в сети! Веб Студия SINNAPS." />
  <meta name="keywords" content="разработка сайтов,создание сайтов в Санкт Петербурге, создание сайтов в Москве ,создание и продвижение сайтов, seo оптимизация и продвижение сайтов, создание и разработка сайтов, сайт в кредит, создание интернет магазина" />
    <!--
      hash is 464e0fb146194482a3ab153fc11e6346175a63f0
    -->
    <title>Создание и продвижение веб сайтов | Студия веб дизайна SINNAPS</title>
 
 <? include_once './components/head_includes.php'; ?>



</head>
<body class=''>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/webcomponentsjs/0.7.22/HTMLImports.min.js"></script> -->


  <div itemscope itemtype="http://schema.org/LocalBusiness" class='contain-to-grid sticky'>
    <!-- navigation panel inserting -->
    <!-- <script src="https://polygit2.appspot.com/components/webcomponentsjs/webcomponents-lite.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/webcomponentsjs/0.7.22/HTMLImports.js"></script> -->
<!--     <link rel="import" href="./components/nav-panel.php">  
    <script>
      var link = document.querySelector('link[rel=import]');
      var infotop = link.import.querySelector('#info-top');
      document.body.appendChild(infotop.cloneNode(true));

      var content = link.import.querySelector('#nav-pan');
      document.body.appendChild(content.cloneNode(true));
    </script>

    <script src="./components/include-html.js"></script> -->
    <!-- <div w3-include-html="./components/nav-panel.php"></div> -->

<!--     <script>
      includeHTML();
    </script> -->
    <?  
    include_once './components/nav-panel.php';
    ?>

  </div>


  <script>
    jQuery(document).ready(function() {
      var options = {
        nextButton: true,
        prevButton: true,
        autoPlay: true,
        autoPlayDelay: 5000,
          //pauseButton: true,
          preloader: true,
          //animateStartingFrameIn: true,
          pagination: true,
          reverseAnimationsWhenNavigatingBackwards: true,
          preventDelayWhenReversingAnimations: true,
          fadeFrameWhenSkipped: false,
          swipeEvents: {
            left: "next",
            right: "prev"
          }
        }
        var sequence = jQuery("#sequence").sequence(options).data("sequence");
        sequence.beforeCurrentFrameAnimatesOut = function() {
          setTimeout(function() {
            jQuery(".frame.static").removeClass('static');
          }, 1000);
        }

      });
    </script>

    <div id='sequence'>
      <ul class='sequence-canvas'>

		<!--<li class='frame static'>
          <div class='bg' style='background-image: url(/redstyle/images/@stock/holiday-party-invite-pic-14.jpg);'></div>
          <div class='title bottom-to-top centered'>
            <div class='row'>
              <div class='large-12 columns'>
                <h2 style="line-height: 1.25em;padding: 10px 20px;">Поздравляем с Рождеством<br />и Новым Годом!</h2>
              </div>
            </div>
          </div>
          <div class='info bottom-to-top centered'>
            <div class='row'>
              <div class='large-12 columns'>
                <h3 style="color: #fff;font-size: 30px;">Желаем Успехов и Процветания!</h3>
                <p>Команда веб-студии REDLINE</p>
              </div>
            </div>
          </div>
        </li>-->

        <li class='frame static'>
          <div class='bg' style='background-image: url(redstyle/images/_40stock/1bitrix.jpg);'></div>
          <div class='title left-to-right'>
            <div class='row'>
              <div class='large-12 columns'>
                <strong class="main-slider-strong" style="font-size: 35px;">Мечты сбываются!</strong>
              </div>
            </div>
          </div>
          <div class='info left-to-right'>
            <div class='row'>
              <div class='large-12 columns'>
                <p>
                 Только с 1 по 31 августа<br>
                 на все продукты 1-с битрикс<br>
                 действуют скидки<br>
                 <strong style="font-size: 28px;">от 10% до 30%!</strong>
               </p>
               <div class='one spacing'></div>
               <a class='button' href="novosti/razrabotka-sajtov-na-cms-1c-bitriks.php">Получить консультацию</a>
             </div>
           </div>
         </div>
       </li>
       <li class='frame'>
        <div class='bg' style='background-image: url(redstyle/images/_40stock/slide-1.jpg);'></div>
        <div class='title bottom-to-top centered'>
          <div class='row'>
            <div class='large-12 columns'>
              <strong class="main-slider-strong">Разработка сайтов</strong>
            </div>
          </div>
        </div>
        <div class='info bottom-to-top centered'>
          <div class='row'>
            <div class='large-12 columns'>
              <strong class="main-slider-strong">Сайт-визитка, лендинг, интернет магазин, корпоративный сайт</strong>
              <div class='two spacing'></div>
              <a class='button' href="uslugi/razrabotka-sajtov/default.php">Узнать больше</a>
              <a class='button boxed' href="portfolio/default.php">Посмотреть работы</a>
            </div>
          </div>
        </div>
      </li>
      <li class='frame'>
        <div class='bg' style='background-image: url(redstyle/images/_40stock/slide-9.jpg);'></div>
        <div class='title bottom-to-top centered'>
          <div class='row'>
            <div class='large-12 columns'>
              <strong class="main-slider-strong">Продвижение сайтов</strong>
            </div>
          </div>
        </div>
        <div class='info bottom-to-top centered'>
          <div class='row'>
            <div class='large-12 columns'>
              <strong class="main-slider-strong">Мы предлагаем комплекс мер по улучшению показателей веб-ресурса</strong>
              <div class='two spacing'></div>
              <a class='button' href="uslugi/prodvizhenie-sajtov/default.php">Узнать больше</a>
            </div>
          </div>
        </div>
      </li>
      <li class='frame'>
        <div class='bg' style='background-image: url(redstyle/images/_40stock/slide-6.jpg);'></div>
        <div class='title left-to-right'>
          <div class='row'>
            <div class='large-12 columns'>
              <strong class="main-slider-strong">Контекстная реклама</strong>
            </div>
          </div>
        </div>
        <div class='info left-to-right'>
          <div class='row'>
            <div class='large-12 columns'>
              <strong class="main-slider-strong">Яндекс.Директ и Google AdWords</strong>
              <div class='two spacing'></div>
              <a class='button' href="uslugi/prodvizhenie-sajtov/kontekstnaya-reklama.php">Узнать больше</a>
            </div>
          </div>
        </div>
      </li>
      <li class='frame'>
        <div class='bg' style='background-image: url(redstyle/images/_40stock/slide-8.jpg);'></div>
        <div class='title bottom-to-top centered'>
          <div class='row'>
            <div class='large-12 columns'>
              <strong class="main-slider-strong">Эскиз сайта бесплатно!</strong>
            </div>
          </div>
        </div>
        <div class='info bottom-to-top centered'>
          <div class='row'>
            <div class='large-12 columns'>
              <p>Оставьте заявку сейчас и получите эскиз вашего будущего сайта<br/>и анализ ниши бесплатно!</p>
              <div class='two spacing'></div>
              <a class='button' href="akcii/maket-vashego-sajta-besplatno.php">Узнать больше</a>
            </div>
          </div>
        </div>
      </li>
		<!--<li class='frame'>
          <div class='bg' style='background-image: url(/redstyle/images/@stock/slide-8.jpg);'></div>
          <div class='title bottom-to-top centered'>
            <div class='row'>
              <div class='large-12 columns'>
                <h2>Сайт в рассрочку!</h2>
              </div>
            </div>
          </div>
          <div class='info bottom-to-top centered'>
            <div class='row'>
              <div class='large-12 columns'>
                <p>Мы предлагаем рассрочку на все типы сайтов</p>
                <div class='two spacing'></div>
                <a class='button' href="uslugi/razrabotka-sajtov/sajt-v-rasrochku.php">Узнать больше</a>
              </div>
            </div>
          </div>
        </li>-->
      </ul>
      <a class='sequence-prev' href='javascript:void(0);'>
        <span></span>
      </a>
      <a class='sequence-next' href='javascript:void(0);'>
        <span></span>
      </a>
      <ul class='sequence-pagination'>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>

    <div class='full white no-padding client-logo'>
      <div class='spacing'></div>
      <div class='row no-row'>
        <div class='small-6 medium-2 large-1 columns icon-text fadein' data-delay='000'>          
          <img alt='' src='redstyle/stylesheets/images/vitkeram.jpg'>
        </div>
        <div class='small-6 edium-2 large-1 columns icon-text fadein' data-delay='200'>          
          <img alt='' src='redstyle/stylesheets/images/vox.jpg'>
        </div>
        <div class='small-6 medium-2 large-1 columns icon-text fadein' data-delay='400'>          
          <img alt='' src='redstyle/stylesheets/images/za.jpg'>
        </div>
        <div class='small-6 medium-2 large-1 columns icon-text fadein' data-delay='600'>          
          <img alt='' src='redstyle/stylesheets/images/neo.jpg'>
        </div>
        <div class='small-6 medium-2 large-1 columns icon-text fadein' data-delay='800'>          
          <img alt='' src='redstyle/stylesheets/images/nbk.jpg'>
        </div>
        <div class='small-6 medium-2 large-1 columns icon-text fadein' data-delay='1000'>          
          <img alt='' src='redstyle/stylesheets/images/stalker.jpg'>
        </div>
        <div class='small-6 medium-2 large-1 columns icon-text fadein' data-delay='1200'>          
          <img alt='' src='redstyle/stylesheets/images/gruz.jpg'>
        </div>
        <div class='small-6 medium-2 large-1 columns icon-text fadein' data-delay='1400'>          
          <img alt='' src='redstyle/stylesheets/images/poli.jpg'>
        </div>
        <div class='small-6 medium-2 large-1 columns icon-text fadein' data-delay='1600'>          
          <img alt='' src='redstyle/stylesheets/images/anim.jpg'>
        </div>
        <div class='small-6 medium-2 large-1 columns icon-text fadein' data-delay='1800'>          
          <img alt='' src='redstyle/stylesheets/images/apost.jpg'>
        </div>
        <div class='small-6 medium-2 large-1 columns icon-text fadein' data-delay='2000'>          
          <img alt='' src='redstyle/stylesheets/images/zamk.jpg'>
        </div>
        <div class='small-6 medium-2 large-1 columns icon-text fadein' data-delay='2200'>          
          <img alt='' src='redstyle/stylesheets/images/kamin.jpg'>
        </div>
      </div>
      <div class='spacing'></div>
    </div>
    <div class='full members-bg'>
      <div class='row'>
        <div class='spacing'></div>
      </div>
      <div class='row'>
       <div class="main-title">
         <h1>Создание и продвижение сайтов</h1>
       </div>

       <div class='medium-6 large-6 columns'>
        <p>
          <span class='drop-letters'>Мы</span>
          занимаемся <a href="uslugi/razrabotka-sajtov/default.php">созданием</a> и <a href="uslugi/prodvizhenie-sajtov/default.php">продвижением</a> веб сайтов под ключ. Работаем по антикризисным ценам со всеми странами СНГ и Прибалтики! Разрабатываем уникальный и адаптивный <a href="uslugi/razrabotka-sajtov/adaptivnaya-verstka.php">дизайн</a>. Оказываем техническую и информационную поддержку 
          сайтов. Делаем SEO оптимизацию и аудиты сайтов. Настраиваем и ведём рекламные
          компанию Яндекс.Директ и Google AdWords в контекстно-медийной сети. Занимаемся SMM продвижением и управлением репутаций в сети! SINNAPS - digital агентство полного цикла </p>
        </div>
        <div class='medium-6 large-6 columns'>
          <ul class='bars'>
            <li>

              Людей, покупающих товары онлайн
              <strong>45%</strong>

              <p class='highlighted' data-percent='45'></p>
            </li>
            <li>

              Просматривают первую страницу выдачи
              <strong>86%</strong>

              <p class='highlighted' data-percent='86'></p>
            </li>
            <li>

              Просматривают вторую страницу выдачи
              <strong>10%</strong>

              <p class='highlighted' data-percent='20'></p>
            </li>
            <li>

              Офлайн бизнесов представлено в сети
              <strong>74%</strong>

              <p class='highlighted' data-percent='74'></p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class='members'>
      <div class='full members-bg no-padding'>
        <div class='row'>

          <div class='medium-3 large-3 columns'>           

           <a href="uslugi/razrabotka-sajtov/sajt-vizitka.php"><div class='member centered-text'>

            <img alt='' src='redstyle/stylesheets/images/razrab-mini.jpg'>
            <p class="usl-title">САЙТ ВИЗИТКА</p>
            <p class='position'>от 499 рублей</p>
            <!--<p class='active-line'></p>-->
          </div></a>

        </div>

        <div class='medium-3 large-3 columns'>
          <a href="uslugi/razrabotka-sajtov/lending.php"><div class='member centered-text'>
            <img alt='' src='redstyle/stylesheets/images/seo-mini.jpg'>
            <p class="usl-title">LANDING PAGE</p>
            <p class='position'> от 899 рублей</p>
            <!--<p class='active-line'></p>-->
          </div>
        </div></a>

        <div class='medium-3 large-3 columns'>
         <a href="uslugi/razrabotka-sajtov/korporativnyij-sajt/default.php"><div class='member centered-text'>
          <img alt='' src='redstyle/stylesheets/images/contekst-mini.jpg'>
          <p class="usl-title">КОРПОРАТИВНЫЙ САЙТ</p>
          <p class='position'>от 1099 рублей</p>
          <!--<p class='active-line'></p>-->
        </div></a>
      </div>
      <div class='medium-3 large-3 columns'>
        <a href="uslugi/razrabotka-sajtov/internet-magazin.php"><div class='member centered-text'>
          <img alt='' src='redstyle/stylesheets/images/firmstyle.jpg'>
          <p class="usl-title">ИНТЕРНЕТ-МАГАЗИН</p>
          <p class='position'>от 1199 рублей</p>
          <!--<p class='active-line'></p>-->
        </div></a>
      </div>
    </div>
  </div>
      <!--<div class='full white'>
        <div class='row'>
          <div class='member-intro active' id='member-1'>
            <div class='medium-8 large-8 columns'>
              <p>
                Вы решили сделать новый веб-сайт или улучшить старый?<br />
                Главная наша задача – сделать Вам не просто качественный сайт, а бизнес онлайн! Более 160 проектов! 8 лет успешной работы!
              </p>
              <a class='button' href='uslugi/razrabotka-sajtov/'>Узнать больше</a>
            </div>
            <div class='medium-4 large-4 columns'>
              <div class='socials'>
                <a href='https://vk.com/redline_vitebsk' title="REDLINE в ВКонтакте" target="blank">
              <i class='fa fa-vk yellow'></i>
            </a>
            <a href='https://www.facebook.com/groups/1464036370563403/' title="REDLINE в Facebook" target="blank">
              <i class='fa fa-facebook yellow'></i>
            </a>
            <a class='ok-gr' href='//ok.ru/group/53594708508907' title="REDLINE в Одноклассниках" target="blank">
              <i class='yellow'></i>
            </a>
			<a href='https://twitter.com/Redline_Web' title="REDLINE в Twitter" target="blank">
              <i class="fa fa-twitter yellow"></i>
            </a>
			<a href='https://www.linkedin.com/in/вебстудия-redline-a96a9a114' title="REDLINE в LinkedIn" target="blank">
              <i class="fa fa-linkedin yellow"></i>
            </a>
                <a href='mailto:info@sinnaps.ru'>
                  <i class='icon-mail yellow'></i>
                </a>
              </div>
            </div>
          </div>
          <div class='member-intro' id='member-2'>
            <div class='medium-8 large-8 columns'>
              <p>
                Надоело вбухивать гигантские бюджеты в рекламу? Хотите получить БЕСПЛАТНЫЙ трафик на свой сайт? Обратитесь к специалистам REDLINE. Опыт продвижения сайтов 8 лет. Более 50 проектов в топе! 
              </p>
              <a class='button' href='uslugi/prodvizhenie-sajtov/'>Узнать больше</a>
            </div>
            <div class='medium-4 large-4 columns'>
              <div class='socials'>
                <a href='https://vk.com/redline_vitebsk' title="REDLINE в ВКонтакте" target="blank">
              <i class='fa fa-vk yellow'></i>
            </a>
            <a href='https://www.facebook.com/groups/1464036370563403/' title="REDLINE в Facebook" target="blank">
              <i class='fa fa-facebook yellow'></i>
            </a>
            <a class='ok-gr' href='//ok.ru/group/53594708508907' title="REDLINE в Одноклассниках" target="blank">
              <i class='yellow'></i>
            </a>
			<a href='https://twitter.com/Redline_Web' title="REDLINE в Twitter" target="blank">
              <i class="fa fa-twitter yellow"></i>
            </a>
			<a href='https://www.linkedin.com/in/вебстудия-redline-a96a9a114' title="REDLINE в LinkedIn" target="blank">
              <i class="fa fa-linkedin yellow"></i>
            </a>
                <a href='mailto:info@sinnaps.ru'>
                  <i class='icon-mail yellow'></i>
                </a>
              </div>
            </div>
          </div>
          <div class='member-intro' id='member-3'>
            <div class='medium-8 large-8 columns'>
              <p>
                Нужен быстрый трафик на Вашем сайте? Хотите получить первых клиентов уже через 2 часа после запуска сайта? Закажите настройку контекстной рекламы у проффесионалов REDLINE!  Более 400 успешных компаний!

              </p>
              <a class='button' href='uslugi/prodvizhenie-sajtov/kontekstnaya-reklama.php'>Узнать больше</a>
            </div>
            <div class='medium-4 large-4 columns'>
              <div class='socials'>
                <a href='https://vk.com/redline_vitebsk' title="REDLINE в ВКонтакте" target="blank">
              <i class='fa fa-vk yellow'></i>
            </a>
            <a href='https://www.facebook.com/groups/1464036370563403/' title="REDLINE в Facebook" target="blank">
              <i class='fa fa-facebook yellow'></i>
            </a>
            <a class='ok-gr' href='//ok.ru/group/53594708508907' title="REDLINE в Одноклассниках" target="blank">
              <i class='yellow'></i>
            </a>
			<a href='https://twitter.com/Redline_Web' title="REDLINE в Twitter" target="blank">
              <i class="fa fa-twitter yellow"></i>
            </a>
			<a href='https://www.linkedin.com/in/вебстудия-redline-a96a9a114' title="REDLINE в LinkedIn" target="blank">
              <i class="fa fa-linkedin yellow"></i>
            </a>
                <a href='mailto:info@sinnaps.ru'>
                  <i class='icon-mail yellow'></i>
                </a>
              </div>
            </div>
          </div>
          <div class='member-intro' id='member-4'>
            <div class='medium-8 large-8 columns'>
              <p>
                Хотите сделать редизайн сайта или разработать фирменный стиль? А может быть сделать тюнинг своему сайту или просто создать логотип? Web дизайнеры и маркетологи нашей студии предложат Вам оптимальные варианты! Гарантия увеличения конверсии!
              </p>
              <a class='button' href='uslugi/dizajn-i-grafika/razrabotka-firmennogo-stilya/'>Узнать больше</a>
            </div>
            <div class='medium-4 large-4 columns'>
              <div class='socials'>
                <a href='https://vk.com/redline_vitebsk' title="REDLINE в ВКонтакте" target="blank">
              <i class='fa fa-vk yellow'></i>
            </a>
            <a href='https://www.facebook.com/groups/1464036370563403/' title="REDLINE в Facebook" target="blank">
              <i class='fa fa-facebook yellow'></i>
            </a>
            <a class='ok-gr' href='//ok.ru/group/53594708508907' title="REDLINE в Одноклассниках" target="blank">
              <i class='yellow'></i>
            </a>
			<a href='https://twitter.com/Redline_Web' title="REDLINE в Twitter" target="blank">
              <i class="fa fa-twitter yellow"></i>
            </a>
			<a href='https://www.linkedin.com/in/вебстудия-redline-a96a9a114' title="REDLINE в LinkedIn" target="blank">
              <i class="fa fa-linkedin yellow"></i>
            </a>
                <a href='mailto:info@sinnaps.ru'>
                  <i class='icon-mail yellow'></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>-->
    </div>
    
    <div class='full bg-4 no-padding'>
      <div class='two spacing'></div>
      <div class='row'>
        <div class='medium-3 large-3 columns'>
          <div class='milestone light'>
            <strong data-from='0' data-to='8'></strong>
            <span>Лет на рынке</span>
          </div>
        </div>
        <div class='medium-3 large-3 columns'>
          <div class='milestone light'>
            <strong data-from='0' data-to='200'></strong>
            <span>Проектов завершено</span>
          </div>
        </div>
        <div class='medium-3 large-3 columns'>
          <div class='milestone light'>
            <strong data-from='0' data-to='10'></strong>
            <span>Специалистов в команде</span>
          </div>
        </div>
        <div class='medium-3 large-3 columns'>
          <div class='milestone light'>
            <strong data-from='0' data-to='300'></strong>
            <span>Счастливых клиентов </span>
          </div>
        </div>
      </div>
      <div class='two spacing'></div>
    </div>
    
    <div class='full call-to-action-bg no-padding'>
      <div class='two spacing'></div>
      <div class='row'>
        <div class='call-to-action light'>
          <div class='medium-9 large-9 columns'>
            <p class='left'>Ваш сайт или проект не  стандартный? Получите консультацию по срокам и стоимости его разработки. Оставьте заявку, и наш специалист свяжемся с Вами в ближайшее время.</p>
          </div>
          <div class='medium-3 large-3 columns'>
            <a class='button' href='#modalWindow' onclick="sub_name('Заказ сайта - Рассрочка','pikt')">Бесплатная консультация</a>
          </div>
        </div>
      </div>
      <div class='spacing'></div>
    </div>
    
    <div class='full white'>
      <div class='row'>
        <div class='special-title centered-text'>
          <h2>Почему стоит заказать создание сайта у нас</h2>
          <p>Что нас отличает от других студий</p>
          <p class='shortline'></p>
        </div>
        <div class='spacing'></div>
        <div class='spacing'></div>
      </div>
      
      <div class='row'>
        <div class='medium-4 large-4 columns icon-text fadein' data-delay='000'>          
          <i class='icon-users blue'></i>
          <h3>Опытная команда</h3>
          <p>
            Мы создаём более 8 лет. Уже реализовано более 200 проектов. 
            Нам доверяют крупнейшие компании региона и страны!
          </p>
        </div>
        <div class='medium-4 large-4 columns icon-text fadein' data-delay='200'>
          <i class='fa fa-eye orange'></i>
          <h3>Следим за новинками</h3>
          <p>Используем только современные инструменты интернет-маркетинга и веб-разработки</p>
        </div>
        <div class='medium-4 large-4 columns icon-text fadein' data-delay='400'>
          <i class='fa fa-hand-spock-o green'></i>
          <h3>Индивидуальный подход</h3>
          <p>Мы умеем слушать нашего клиента! И поэтому понимаем, что нужно именно ему</p>
        </div>
      </div>
      <div class='spacing'></div>

      <div class='row'>
        <div class='medium-4 large-4 columns icon-text fadein' data-delay='600'>
          <i class='fa fa-random blue'></i>
          <h3>Гибкость в работе</h3>
          <p>Для постоянных партнеров мы готовы предоставить особые условия работы. </p>
        </div>
        <div class='medium-4 large-4 columns icon-text fadein' data-delay='800'>
          <i class='fa fa-thumbs-o-up yellow'></i>
          <h3>Система управления</h3>
          <p>Мы работаем только с удобными и понятными системами управления контентом</p>
        </div>
        <div class='medium-4 large-4 columns icon-text fadein' data-delay='1000'>
          <i class='icon-lock cyan'></i>
          <h3>Долгосрочность отношений</h3>
          <p>Мы оказываем техническую и информационную поддержку наших продуктов 24/7</p>
        </div>
        <div id="zakaz-now"></div>
      </div>

    </div>



    <div class='full bg-5 no-padding action-block'>
      <div class='three spacing'></div>
      <div class='row'>
        <div class='large-6 columns'>
          <img alt='' class='fadeinleft' src='redstyle/stylesheets/images/maket-website.png'>
        </div>
        <div class='large-6 columns'>
          <h2 class='light'>Эскиз Вашего сайта БЕСПЛАТНО!</h2>
          <p class='light' style="font-size: 16px;">
            Акция от SINNAPS!<br /> Оставьте заявку сейчас и получите эскиз вашего будущего сайта и анализ ниши БЕСПЛАТНО!
          </p>
          <br />
          <a class='button white' href='#modalWindow' onclick="sub_name('Заказ сайта - Счетчик','count')" style="border-color: #fff; margin-right:5px;">Заказать сейчас!</a>
          <a class='button boxed' href='akcii/maket-vashego-sajta-besplatno.php'>Узнать больше</a>
        </div>
      </div>
    </div>



    <!-- block -->
    <div class="full-one members-bg"></div>
    <div class='members'>
      <div class='full members-bg no-padding'>
        <div class='row'>

          <div class='medium-3 large-3 columns'>           

           <a href="uslugi/prodvizhenie-sajtov/default.php"><div class='member centered-text'>
            <img class="img-noborder"  alt='' src='redstyle/stylesheets/images/dop_usl1.png'>
            <p class="usl-title">ПРОДВИЖЕНИЕ</p>             
          </div></a>			
        </div>

        <div class='medium-3 large-3 columns'>
          <a href="uslugi/prodvizhenie-sajtov/kontekstnaya-reklama.php"><div class='member centered-text'>
            <img class="img-noborder" alt='' src='redstyle/stylesheets/images/dop_usl2.png'>
            <p class="usl-title">РЕКЛАМА</p>            
          </div>
        </div></a>

        <div class='medium-3 large-3 columns'>
         <a href="uslugi/dizajn-i-grafika/default.php"><div class='member centered-text'>
          <img class="img-noborder" alt='' src='redstyle/stylesheets/images/dop_usl3.png'>
          <p class="usl-title">ДИЗАЙН И ГРАФИКА</p>             
        </div></a>
      </div>

      <div class='medium-3 large-3 columns'>
        <a href="uslugi/razrabotka-sajtov/internet-magazin.php"><div class='member centered-text'>
          <img class="img-noborder" alt='' src='redstyle/stylesheets/images/dop_usl4.png'>
          <p class="usl-title">ДОП.УСЛУГИ</p>             
        </div></a>
      </div>

    </div>
  </div>
</div>


<div class='full white'>
  <div class='row'>
    <div class='special-title centered-text'>
      <h2>Полный список услуг - от создания сайтов до продвижения в интернете </h2>
      <p>Вам не придется работать с разними подрядчиками</p>
      <p class='shortline'></p>
    </div>
    <div class='spacing'></div>
    <div class='spacing'></div>
  </div>

  <div class='row'>
    <div class='medium-4 large-4 columns icon-text fadein' data-delay='000'>          
      <i class='icon-users blue'></i>
      <h3>Продвижение</h3>
      <p>
        Занимаемся продвижением сайтов 7 лет. Мы привели на сайты наших клиентов более 10 000 посетителей! Постоянно оптимизируем свою работу под новые требования поисковиков!
      </p>
    </div>
    <div class='medium-4 large-4 columns icon-text fadein' data-delay='200'>
      <i class='fa fa-eye orange'></i>
      <h3>Контекстная реклама</h3>
      <p>Настраиваем и запускаем <a href="uslugi/prodvizhenie-sajtov/kontekstnaya-reklama.php">контекстную рекламу</a> в самых популярных поисковиках Яндекс и Google. Высокая конверсия и низкая стоимость клика гарантирована!</p>
    </div>
    <div class='medium-4 large-4 columns icon-text fadein' data-delay='400'>
      <i class='fa fa-hand-spock-o green'></i>
      <h3>СММ активность</h3>
      <p>Мы создаём и ведём групп в основных социальных сетях: vkontakte.ru, facebook.com, odnaklassikini.ru, instagram.com, и занимаемся их раскруткой и продвижением.
      </p>
    </div>
  </div>
  <div class='spacing'></div>

  <div class='row'>
    <div class='medium-4 large-4 columns icon-text fadein' data-delay='600'>
      <i class='fa fa-random blue'></i>
      <h3>Логотипы</h3>
      <p>Наши маркетологи изучат рынок, в котором вы работаете, вашу индивидуальную специфику, создадут концепцию для разработки, а дизайнеры красочно реализуют ёё в <a href="uslugi/dizajn-i-grafika/razrabotka-logotipa.php">логотип</a>. </p>
    </div>
    <div class='medium-4 large-4 columns icon-text fadein' data-delay='800'>
      <i class='fa fa-thumbs-o-up yellow'></i>
      <h3>Поддержка</h3>
      <p>Мы оказываем техническую поддержку всех своих проектов. Занимаемся наполнением сайтов контентом и товарами, пишем продающие статьи и рисуем сочные баннеры.</p>
    </div>
    <div class='medium-4 large-4 columns icon-text fadein' data-delay='1000'>
      <i class='icon-lock cyan'></i>
      <h3>Фирменный стиль</h3>
      <p>Разработаем элементы, которые сформируют необходимое отношение потребителя к компании и её продукции: логотип, бланки, конверты, визитки, баннеры, растяжки, наклейки на авто</p>
    </div>
    <div id="zakaz-now"></div>
  </div>

</div>












<!--=== Портфолио ===-->   
<div class='full'>
  <div class='row'>
    <div class='special-title centered-text'>
      <!--<i class='fa fa-desktop'></i>-->
      <a id="portf"></a>
      <h2><a href='portfolio/default.php'>Сайты, которые мы разработали </a></h2>
      <p>Здесь представлены некоторые из наших работ</p>
      <p class='shortline'></p>
    </div>
  </div>
</div>
<ul class='gallery small-block-grid-2 medium-block-grid-3 large-block-grid-4'>
  <li>
    <a href="../www.angiography.su/default.php"  data-title="Ангиография" target="blank">
     <img alt='Ангиография' src='assets/cache_image/resources/angiography-2_380x245_f3e.jpg'>
     <div class='overlay'>
       <div class='thumb-info'>
        <h3>Ангиография</h3>
        <!--<p>http://www.angiography.su</p>-->
        <span>ModX Revolution, 30 дней</span>
      </div>
    </div>
  </a>
</li>
<li>
  <a href="../baltkub.by/default.php"  data-title="Балткуб" target="blank">
   <img alt='Балткуб' src='assets/cache_image/resources/baltkub-min_380x245_f3e.jpg'>
   <div class='overlay'>
     <div class='thumb-info'>
      <h3>Балткуб</h3>
      <!--<p>http://baltkub.by/</p>-->
      <span>ModX Evolution, 10 дней</span>
    </div>
  </div>
</a>
</li>
<li>
  <a href="../hplcompact.ru/products/default.php"  data-title="HPL Compakt" target="blank">
   <img alt='HPL Compakt' src='assets/cache_image/resources/news/16/03/01/2016-06-16_15-22-28_380x245_126.png'>
   <div class='overlay'>
     <div class='thumb-info'>
      <h3>HPL Compakt</h3>
      <!--<p>http://hplcompact.ru/products/</p>-->
      <span>1С-Битрикс, 20 дней</span>
    </div>
  </div>
</a>
</li>
<li>
  <a href="../fedorit.by/default.php"  data-title="Магазин декоративного камня и обоев Федорит" target="blank">
   <img alt='Магазин декоративного камня и обоев Федорит' src='assets/cache_image/resources/news/16/03/01/2016-06-29_10-43-46_380x245_126.png'>
   <div class='overlay'>
     <div class='thumb-info'>
      <h3>Магазин декоративного камня и обоев Федорит</h3>
      <!--<p>http://fedorit.by/</p>-->
      <span>ModX Evo, 20 дней</span>
    </div>
  </div>
</a>
</li>
<li>
  <a href="../aluwest.by/default.php"  data-title="Оконная компания aluwest" target="blank">
   <img alt='Оконная компания aluwest' src='assets/cache_image/resources/zaoknom_380x245_f3e.jpg'>
   <div class='overlay'>
     <div class='thumb-info'>
      <h3>Оконная компания aluwest</h3>
      <!--<p>http://aluwest.by/</p>-->
      <span>ModX Revolution, 10 дней</span>
    </div>
  </div>
</a>
</li>
<li>
  <a href="../stroy-sale.by/default.php"  data-title="Stroy-sale.by" target="blank">
   <img alt='Stroy-sale.by' src='assets/cache_image/resources/stroy-sale_380x245_f3e.jpg'>
   <div class='overlay'>
     <div class='thumb-info'>
      <h3>Stroy-sale.by</h3>
      <!--<p>http://stroy-sale.by</p>-->
      <span>OpenCart 2.0, 10 дней</span>
    </div>
  </div>
</a>
</li>
<li>
  <a href="../www.new-horizons.ru/default.php"  data-title="New horizons" target="blank">
   <img alt='New horizons' src='assets/cache_image/resources/new-horizont_380x245_f3e.jpg'>
   <div class='overlay'>
     <div class='thumb-info'>
      <h3>New horizons</h3>
      <!--<p>http://www.new-horizons.ru</p>-->
      <span>ModX Evolution, 10 дней</span>
    </div>
  </div>
</a>
</li>
<li>
  <a href="portfolio/lend/reklamnyij-buklet-meridian-press.php"  data-title="Рекламный буклет МЕРИДИАН пресс" target="blank">
   <img alt='Рекламный буклет МЕРИДИАН пресс' src='assets/cache_image/resources/news/16/7/2016-07-20_18-28-23_380x245_126.png'>
   <div class='overlay'>
     <div class='thumb-info'>
      <h3>Рекламный буклет МЕРИДИАН пресс</h3>
      <!--<p>/portfolio/lend/reklamnyij-buklet-meridian-press.php</p>-->
      <span>Codeigniter 3, PHP, срок разработки 20 рабочих дней.</span>
    </div>
  </div>
</a>
</li>
</ul>
<script type="text/javascript" src="redstyle/javascripts/lightbox.min.js"></script>


<div class='full call-to-action-bg no-padding'>
  <div class='two spacing'></div>
  <div class='row'>
    <div class='call-to-action light'>
      <div class='medium-9 large-9 columns'>
        <p class='left'><a href='portfolio/default.php'>Хотите увидеть свой будущий сайт у нас в портфолио?</a></p>
      </div>
      <div class='medium-3 large-3 columns'>
        <a class='button' href='#modalWindow' onclick="sub_name('Заказ сайта - Портфолио','portf')">Заказать сайт</a>
      </div>
    </div>
  </div>
  <div class='spacing'></div>
</div>
<!--=== End Портфолио ===-->

<div class='testimonials full bg-2 light centered-text no-padding'>
  <div class='two spacing'></div>
  <div class='row'>
    <div class='special-title'>
      <!--<i class='icon-quote'></i>-->
      <h2 class='light'>Отзывы клиентов о нас</h2>
    </div>
    <div class='spacing'></div>
    <div class='spacing'></div>
  </div>
  <div class='row'>
    <div class='small-9 small-centered columns'>
      <ul data-orbit=''>
       <li>
         <p class='quote'>"С компанией Sinnaps работаем на протяжении 6 месяцев, заказывали seo и контекстную рекламу.  Не только ежемесячные отчеты, но и новые клиенты показали, что результат есть, и что интернет – это огромный простор для бизнеса. Будем и в дальнейшем обращаться и работать только с Вами."</p>
         <p class='author'>- Александр, Витебский кирпич</p>
         <div class='spacing'></div>
       </li>
       <li>
        <p class='quote'>"Заказывал у студии веб-дизайна Sinnaps создание сайта для "Za окном". Хочу поблагодарить вас за проделанную работу. Заказчик я  довольно придирчивый, поэтому угодить мне непросто, очень часто даже сам не могу до конца сформулировать свои требования. Они вроде крутятся в голове, а словами сказать удается не всегда. Команде Sinnaps хочу выразить отдельную благодарность за то, что они умудрялись расшифровывать мои желания и сделали именно такой сайт, какой я и хотел. Спасибо огромное! "</p>
        <p class='author'>- Виктор, Za окном</p>
        <div class='spacing'></div>
      </li>
      <li>
        <p class='quote'>"Спасибо студии Sinnaps за наш прекрасный сайт! Рекомендуем всем заинтересованным компаниям сотрудничать с этой студией. Ценник умеренный, работа выполнена качественно и в срок. Разъяснили все нюансы по работе с сайтом, будем и в дальнейшем сотрудничать с Sinnaps!"</p>
        <p class='author'>- Вадим, Грузоперевозки</p>
        <div class='spacing'></div>
      </li>
      <li>
        <p class='quote'>"Обратились в Sinnaps по поводу создания лендинга. Договорились о сроках и цене, схеме оплаты за работу. Без труда нашли общий язык с командой специалистов студии: с терпением отнеслись к нашем внезапным порывам переделать некоторые блоки на сайте. Рекомендуем заинтересованным лицам студию Sinnaps, как надежного партнера и профессионалов своего дела."</p>
        <p class='author'>- Андрей, Неокортекс</p>
        <div class='spacing'></div>
      </li>
      <li>
        <p class='quote'>"Работать с компанией SINNAPS было приятно и легко, все наши идеи были воплощены дизайнером Вадимом, и ни одного вопроса не оставили без ответа. Помогли разобраться с управлением сайта, а также дали несколько дельных советов по контенту и продвижению. Спасибо за приятное сотрудничество."</p>
        <p class='author'>- Вадим, Сайдинг VOX</p>
        <div class='spacing'></div>
      </li>
      <li>
        <p class='quote'>"Удивлен, что получилось найти компанию, где ожидания и реальность совпадают: сайт сдали в срок, а самое главное – за нормальную цену. Специально искал такую веб-студию, чтобы не переплачивать за их популярность, и не чувствовать, что из тебя хотят вытянуть как можно больше денег. Спасибо всем, кто работал с нашим  сайтом. Будем дальше у вас продвигаться. В общем, очень доволен, всем советую."</p>
        <p class='author'>- Владимир, НБК Строй</p>
        <div class='spacing'></div>
      </li>
    </ul>
  </div>
  <div class='spacing'></div>
</div>
</div>



<div class='full bg-4 no-padding last-news'>
  <div class='spacing'></div>
  <div class='two spacing'></div>
  <div class='row'>
    <div class='special-title centered-text'>
      <h2 class="light">Новости из мира IT и SEO </h2>
      <p style="color: #fff;">Последние новинки и статьи от SINNAPS</p>
      <p class='shortline'></p>
    </div>
    <div class='spacing'></div>
    <div class='spacing'></div>
  </div>      

  <div class='row'>
    <div class='medium-4 large-4 columns'>
      <p>Инстаграм – это известная социальная фотосеть. И с каждым годом она становится всё более популярной, количество пользователей неуклонно растет. На с</p>
      <a href="novosti/prodvizhenie-v-instagram.php">подробнее &#8594;</a>
    </div>
    <div class='medium-4 large-4 columns'>
      <p> 
        Если у вас появилось желание создать сайт для своего интернет-магазина, то для начала необходимо разобраться в его структуре,</p>
        <a href="novosti/struktura-internet-magazina.php">подробнее &#8594;</a>
      </div>
      <div class='medium-4 large-4 columns'>
        <p>Продвижение с помощью SSM (Social Media Marketing) является действенным средством к достижению раскрутки вашего сайта. Данный процесс на сегодняшний день достаточно популярен и востребован. А всё потому, что бо</p>
        <a href="novosti/smm-prodvizhenie.php">подробнее &#8594;</a>
      </div>
    </div>
    <div class='two spacing'></div>
    <div class='spacing'></div>
  </div>


  <div class='full'>
    <div class='row'>
      <div class='large-10 small-centered columns'>
        <div class='special-title centered-text'>
          <i class='icon-mail'></i>
          <h2>Заказать разработку сайта </h2>
          <p>Акция! Оставьте заявку сейчас и получите эскиз вашего будущего сайта и анализ ниши Бесплатно!</p>
        </div>
      </div>
    </div>
  </div>

<!--   <div w3-include-html="./components/submit-form.php"></div>
  <script>
    includeHTML();
  </script> -->

<!--   <link rel="import" href="./components/submit-form.php">  
  <script>
    var link = document.querySelector('link[rel=import]');
    var submitform = link.import.querySelector('#submitform');
    document.body.appendChild(submitform.cloneNode(true));
  </script> -->



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
            <a href="/publichnyij-dogovor/publichnyij-dogovor-na-razrabotku-sajta.php" class="button boxed">Разработка сайта</a>
        </div>
        <div class="medium-3 large-3 columns">
            <a href="/publichnyij-dogovor/publichnyij-dogovor-na-kontekstnuyu-reklamu.php" class="button boxed">Контекстная реклама</a>
        </div>
        <div class="medium-3 large-3 columns">
            <a href="/publichnyij-dogovor/publichnyij-dogovor-na-seo-prodvizhenie.php" class="button boxed">SEO продвижение</a>
        </div>
        <div class="medium-3 large-3 columns">
            <a href="/publichnyij-dogovor/publichnyij-dogovor-okazaniya-uslug-xostinga.php" class="button boxed">Услуги хостинга</a>
        </div>
    </div>
    <div class='spacing'></div>
  </div>-->
  <!-- <div w3-include-html="./components/submit-form.php"></div> -->
  <!-- <div w3-include-html="./components/footer.php"></div>
  <script>
    includeHTML();
  </script> -->

  <?
  include_once './components/submit-form.php';
  include_once './components/footer.php';
  ?>


<!--   <link rel="import" href="./components/footer.php">  
  <script>
    var link = document.querySelector('link[rel=import]');
    var infotop = link.import.querySelector('#footer');
    document.body.appendChild(infotop.cloneNode(true));
  </script> -->

</body>
</html>
