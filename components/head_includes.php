   <link href="/redstyle/stylesheets/framework.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="/stylesheet" href="../code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href="/redstyle/stylesheets/animate.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/redstyle/stylesheets/style.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/redstyle/stylesheets/skins.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/redstyle/stylesheets/fontello.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="alternate" type="application/rss+xml" title="RSS-лента Sinnaps" href="/rss-novostej.rss">

    <script type="text/javascript" src="/redstyle/javascripts/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="/redstyle/javascripts/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/redstyle/javascripts/jQueryRotate.js"></script>
    <script src="/redstyle/javascripts/libs.js" type="text/javascript"></script>
    <!--<script src="/redstyle/javascripts/app.js" type="text/javascript"></script>-->
    <!-- // terrificjs bootstrap -->
    <script>      
      (function($) {
        $(document).ready(function() {
          var $page = $('body');
          var config = {
            dependencyPath: {
              plugin: '/redstyle/javascripts/default.htm'
            }
          }
          var application = new Tc.Application($page, config);
          application.registerModules();
          application.start();
        });
      })(Tc.$);
    </script>

    <link href='../fonts.googleapis.com/css@family=PT+Sans_3A400,700,400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='../fonts.googleapis.com/css@family=Tinos_3A400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='../https@fonts.googleapis.com/css@family=Open+Sans_3A400,300,400italic,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter39317785 = new Ya.Metrika({
                    id:39317785,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true,
                    ecommerce:"dataLayer"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/39317785" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->



    <!-- Yandex.Metrika counter -->
<!-- 	<script src="../mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
	<script type="text/javascript">
	try { var yaCounter31671181 = new Ya.Metrika({id:31671181,
			  webvisor:true,
			  clickmap:true});
	} catch(e) { }
	</script>
	<noscript><div><img src="../mc.yandex.ru/watch/31671181" style="position:absolute; left:-9999px;" alt="" /></div></noscript> -->
	<!-- /Yandex.Metrika counter -->


<!-- 	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-65918808-1', 'auto');
	  ga('send', 'pageview');
	
	</script> -->


	<!--Запрет на копирование
	script type="text/javascript">
	document.ondragstart = noselect();
	document.onselectstart = noselect();
	document.oncontextmenu = noselect();
	function noselect() {return false;}
</script-->

<!-- add link -->
<script type="text/javascript">
  function addLink() {
    var body_element = document.getElementsByTagName('body')[0];
    var selection;
    selection = window.getSelection();
    var pagelink = "<br /><br /> Источник: <a href='"+document.location.href+"'>"+document.location.href+"</a><br />© sinnaps.ru"; // В этой строке поменяйте текст на свой
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