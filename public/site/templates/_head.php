<?php if(!$user->isLoggedin()) $session->redirect("/iniciar-sesion"); ?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Archivo digital</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,500,700" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h38ggY=" crossorigin="anonymous" rel="stylesheet">
  <link href="https://cdn.rawgit.com/cobyism/gridism/0.2.2/gridism.css" rel="stylesheet">
  <link href="<?php echo $config->urls->templates; ?>assets/styles/_main.css" rel="stylesheet">
  <link rel="apple-touch-icon" href="https://dummyimage.com/50x50/000/fff">
  <link rel="shortcut icon" href="https://dummyimage.com/50x50/000/fff">
</head>

<body>
  <div class="container">
   <aside class="sidebar clearfix">
      <nav>
        <div class="dropdown">
          <a href="#">Usuario <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/down-chevron.svg" alt=""></a>
          <ul>
            <a href="#"><li>Subir</li></a>
            <a href="#"><li>Administrar</li></a>
            <a href="#"><li>Usuario nuevo</li></a>
            <a href="#"><li>Cerrar sesión</li></a>
          </ul>
        </div>
      </nav>
    </aside>
    <div id="morphsearch" class="morphsearch">
        <form class="morphsearch-form">
          <input class="morphsearch-input" type="search" placeholder="Buscar..."/>
          <button class="morphsearch-submit" type="submit"></button>
        </form>
        <div class="morphsearch-content">
          <div class="dummy-column">
            <h2>People</h2>
            <a class="dummy-media-object" href="http://twitter.com/SaraSoueidan">
              <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan"/>
              <h3>Sara Soueidan</h3>
            </a>
            <a class="dummy-media-object" href="http://twitter.com/rachsmithtweets">
              <img class="round" src="http://0.gravatar.com/avatar/48959f453dffdb6236f4b33eb8e9f4b7?s=50&d=identicon&r=G" alt="Rachel Smith"/>
              <h3>Rachel Smith</h3>
            </a>
            <a class="dummy-media-object" href="http://www.twitter.com/peterfinlan">
              <img class="round" src="http://0.gravatar.com/avatar/06458359cb9e370d7c15bf6329e5facb?s=50&d=identicon&r=G" alt="Peter Finlan"/>
              <h3>Peter Finlan</h3>
            </a>
            <a class="dummy-media-object" href="http://www.twitter.com/pcridesagain">
              <img class="round" src="http://1.gravatar.com/avatar/db7700c89ae12f7d98827642b30c879f?s=50&d=identicon&r=G" alt="Patrick Cox"/>
              <h3>Patrick Cox</h3>
            </a>
            <a class="dummy-media-object" href="https://twitter.com/twholman">
              <img class="round" src="http://0.gravatar.com/avatar/cb947f0ebdde8d0f973741b366a51ed6?s=50&d=identicon&r=G" alt="Tim Holman"/>
              <h3>Tim Holman</h3>
            </a>
            <a class="dummy-media-object" href="https://twitter.com/shaund0na">
              <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona"/>
              <h3>Shaun Dona</h3>
            </a>
          </div>
          <div class="dummy-column">
            <h2>Popular</h2>
            <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/08/05/page-preloading-effect/">
              <img src="https://dummyimage.com/50x50/000/fff" alt="PagePreloadingEffect"/>
              <h3>Page Preloading Effect</h3>
            </a>
            <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/05/28/arrow-navigation-styles/">
              <img src="https://dummyimage.com/50x50/000/fff" alt="ArrowNavigationStyles"/>
              <h3>Arrow Navigation Styles</h3>
            </a>
            <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/06/19/ideas-for-subtle-hover-effects/">
              <img src="https://dummyimage.com/50x50/000/fff" alt="HoverEffectsIdeasNew"/>
              <h3>Ideas for Subtle Hover Effects</h3>
            </a>
            <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/07/14/freebie-halcyon-days-one-page-website-template/">
              <img src="https://dummyimage.com/50x50/000/fff" alt="FreebieHalcyonDays"/>
              <h3>Halcyon Days Template</h3>
            </a>
            <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/05/22/inspiration-for-article-intro-effects/">
              <img src="https://dummyimage.com/50x50/000/fff" alt="ArticleIntroEffects"/>
              <h3>Inspiration for Article Intro Effects</h3>
            </a>
            <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/06/26/draggable-dual-view-slideshow/">
              <img src="https://dummyimage.com/50x50/000/fff" alt="DraggableDualViewSlideshow"/>
              <h3>Draggable Dual-View Slideshow</h3>
            </a>
          </div>
          <div class="dummy-column">
            <h2>Recent</h2>
            <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/10/07/tooltip-styles-inspiration/">
              <img src="https://dummyimage.com/50x50/000/fff" alt="TooltipStylesInspiration"/>
              <h3>Tooltip Styles Inspiration</h3>
            </a>
            <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/09/23/animated-background-headers/">
              <img src="https://dummyimage.com/50x50/000/fff" alt="AnimatedHeaderBackgrounds"/>
              <h3>Animated Background Headers</h3>
            </a>
            <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/09/16/off-canvas-menu-effects/">
              <img src="https://dummyimage.com/50x50/000/fff" alt="OffCanvas"/>
              <h3>Off-Canvas Menu Effects</h3>
            </a>
            <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/09/02/tab-styles-inspiration/">
              <img src="https://dummyimage.com/50x50/000/fff" alt="TabStyles"/>
              <h3>Tab Styles Inspiration</h3>
            </a>
            <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/08/19/making-svgs-responsive-with-css/">
              <img src="https://dummyimage.com/50x50/000/fff" alt="ResponsiveSVGs"/>
              <h3>Make SVGs Responsive with CSS</h3>
            </a>
            <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/07/23/notification-styles-inspiration/">
              <img src="https://dummyimage.com/50x50/000/fff" alt="NotificationStyles"/>
              <h3>Notification Styles Inspiration</h3>
            </a>
          </div>
        </div><!-- /morphsearch-content -->
        <span class="morphsearch-close"></span>
      </div><!-- /morphsearch -->
    <div class="overlay"></div>
  </div><!-- /container -->
   <div class="j-workspace">
     <div class="j-wrap">
       <header>
          <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/jems-color.svg" alt="">
         <h1>Archivo digital</h1>
       </header>
     </div>
   </div>