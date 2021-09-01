<!DOCTYPE html>

<html data-wf-page="5cd61efa8463a508d5af72ae" data-wf-site="5cd2467915a5c14bc27b77af">
<head>
  <meta charset="utf-8">
  <title>{{config('app.name')}}</title>
  <meta content="Home II" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta name="description" content="Premium Onepage Theme">
  <meta name="keywords" content="Some keywords that best describes your site">
  <link href="{{asset('frontend/css/normalize.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('frontend/css/detheme.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('frontend/css/kergan.detheme.css')}}" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Vollkorn:400,400italic,700,700italic","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Merriweather:300,300italic,400,400italic,700,700italic,900,900italic","PT Sans:400,400italic,700,700italic","Roboto:regular,900"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link rel="icon" type="image/x-icon" href="{{asset('asset/image/logo.webp')}}"/>
</head>
<body class="body">
  <div data-collapse="medium" data-animation="default" data-duration="400" class="nav-bar w-nav">
    <div class="wrapper navbar-2 w-container">
      <div class="div-block-8"><a href="#" class="nav-logo-2 w-inline-block"><img src="{{asset('asset/image/logo.webp')}}" width="50" height="50" alt=""></a></div>
      <nav role="navigation" class="nav-menu-2 w-nav-menu"><a href="#product" class="nav-link-2 w-nav-link">Product</a><a href="#Solutions" class="nav-link-2 w-nav-link">Solutions</a><a href="#features" class="nav-link-2 w-nav-link">Features</a>
        @guest
        <div class="nav-cta-button-container"><a href="{{route('login')}}" class="nav-link-2 border w-nav-link">Sign-in</a></div>
        @else
        <div class="nav-cta-button-container"><a href="{{route('dashboard')}}" class="nav-link-2 border w-nav-link">Dashboard</a></div>
        @endif
    </nav>
      <div class="menu-button-2 w-nav-button">
        <div class="burger-icon w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="section full-screen background-image-side">
    <div class="wrapper">
      <div class="columns column w-row">
        <div class="column herocontent w-col w-col-6">
          <h1 class="heading">Easiest Way To Manage Your Task is Here !<br></h1>
          <p class="short-paragraph">Whatodo delivers Easy Way to List Your Task, we Helping you Manage and List your task with very easy way</p>
          <div class="value-proposition-container">
            <div class="value-proposition-buttons"><a href="{{route('register')}}" class="button2 margin-left w-button">GET STARTED</a><a href="#product" class="button2 ghost hero w-button">LEARN MORE</a></div>
          </div>
        </div>
        <div class="w-col w-col-6"><img src="{{asset('frontend/images/woman-work-min.png')}}" sizes="(max-width: 479px) 100vw, (max-width: 767px) 83vw, 45vw" alt="" class="image"></div>
      </div>
    </div>
  </div>
  <div class="div-block-9">
    <div id="product" class="section less-v-margin">
      <div class="wrapper">
        <div class="row-2">
          <div class="col lg-5"><img src="{{asset('frontend/images/woman.png')}}" width="625"  sizes="(max-width: 479px) 100vw, (max-width: 767px) 89vw, (max-width: 991px) 45vw, 37vw" alt="" class="anim-b"></div>
          <div class="col lg-1"></div>
          <div class="col lg-5">
            <div class="margin-bottom">
              <h2 class="heading-2 ondark">How Can We Help You With ?</h2>
              <p class="ondark">Whatodo provide all your needs to manage your task,we have some simplified feature to help you with your task management</p>
            </div>
            <div class="row-2">
              <div class="col lg-6 sm-1">
                <div><img src="{{asset('frontend/images/note-f.png')}}" width="70" alt="" class="icon">
                  <h3 class="ondark">List Management</h3>
                  <p class="ondark">You can create a group of task , so you can see your task easily, for example : your task in Office,Home, etc.</p>
                </div>
              </div>
              <div class="col lg-6 sm-1">
                <div><img src="{{asset('frontend/images/calendar-f.png')}}" width="70" alt="" class="icon">
                  <h3 class="ondark">Today Task List</h3>
                  <p class="ondark">You can see all your task in one spot,cool right?</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div id="Solutions" class="section less-v-margin">
      <div class="wrapper">
        <div class="row-2 sm-reverse">
          <div class="col lg-1 hidden-lg-down"></div>
          <div class="col lg-4 sm-2 lg-vertical-align">
            <div class="sm-align-centre">
              <h2 class="ondark">Still Forgetting What is your Remain Task Today ?</h2>
              <p class="margin-bottom ondark">If you’re one of those people constantly hopping between tasks in a bid to get more done, chances are you’re going to store less new information. This is because our ability to focus is severely compromised when we’re constantly interrupting our train of thought. so you can write your task in our apps</p>
            </div>

          </div>
          <div class="col lg-1 hidden-lg-down"></div>
          <div class="col lg-6"><img src="{{('frontend/images/woman4.png')}}" width="625" sizes="(max-width: 479px) 100vw, (max-width: 767px) 89vw, (max-width: 991px) 45vw, 46vw" data-w-id="6894a54a-7ec3-cf46-4a35-b936bb428dba" style="opacity:0" alt="" class="side-image"></div>
        </div>
      </div>
    </div>
    <div class="section less-v-margin">
      <div class="wrapper">
        <div class="row-2">
          <div class="col lg-6"><img src="{{('frontend/images/woman2.png')}}" width="625" sizes="(max-width: 479px) 100vw, (max-width: 767px) 89vw, (max-width: 991px) 45vw, 46vw" data-w-id="a2b6252f-4804-1566-b140-e9f96b8c4838" style="opacity:0" alt="" class="side-image"></div>
          <div class="col lg-1 hidden-lg-down"></div>
          <div class="col lg-4 sm-2 lg-vertical-align">
            <div class="sm-align-centre">
              <h2 class="ondark">Totally Free</h2>
              <p class="margin-bottom ondark">An intelligently designed, beautifully crafted application management system for your task management. and its totally free to use !</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="features" class="section">
    <div class="wrapper">
      <h2 data-w-id="7b5c466a-962a-8742-1d10-203f426a0c19" style="opacity:0" class="section-header withdesc">Feature Overview</h2>
      <p class="short-paragraph sectionsub">This is all the feature we have now , more feature will be added soon</p>
      <div class="row-2">
        <div class="col lg-4">
          <div data-w-id="7b5c466a-962a-8742-1d10-203f426a0c1d" style="opacity:0" class="margin-bottom"><img src="{{asset('frontend/images/note.png')}}" width="170" alt="" class="icon">
            <h4>Today Task List</h4>
            <p class="paragraph">Get view of all your Task in one spot</p>
          </div>
        </div>
        <div class="col lg-4">
            <div data-w-id="7b5c466a-962a-8742-1d10-203f426a0c2b" style="opacity:0" class="margin-bottom"><img src="{{asset('frontend/images/refresh.png')}}" width="180" alt="" class="icon">
              <h4>Archieved List</h4>
              <p class="paragraph">You can Archieve your List if you dont need it anymore, you can also un-archieve it anytime</p>
            </div>
          </div>
        <div class="col lg-4">
          <div data-w-id="7b5c466a-962a-8742-1d10-203f426a0c24" style="opacity:0" class="margin-bottom"><img src="{{asset('frontend/images/calendar.png')}}" width="150" alt="" class="icon">
            <h4>List Management (Grouping Task)</h4>
            <p class="paragraph">Create List to Group Your Task, you can also Set the Text Color</p>
          </div>
        </div>


      </div>
    </div>
  </div>

  <div class="section bglite">
    <div class="wrapper">
      <div class="row-2 align-centre">
        <div class="col lg-6 md-3 xs-2">
          <div class="centre-align">
            <div class="margin-bottom">
              <h2 class="section-header withdesc ondark">Experience Kergan App Now</h2>
              <p class="ondark">It&#x27;s Totally Free !<br></p>

              <div class="value-proposition-buttons"><a href="{{route('register')}}" class="button2 margin-left w-button">GET STARTED</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="download" data-w-id="198c5aed-cf25-e317-0851-2c0c40bfb7e9" class="bgkluwer"></div>
  </div>

  <div class="section bggradient">
    <div class="wrapper">
      <div class="flex-horizontal-space-between footer"><a href="#" class="w-inline-block"><img src="{{asset('asset/image/logo.webp')}}" width="50" height="50" alt="" class="footer-logo"></a>
        <div class="footer-social-links-container"><p class="footer-link-2 no-padding w-inline-block">Tes Interview Siji - </p><a target="_blank" href="https://www.linkedin.com/in/muhammad-athaberyl-ramadhyli-adl-7099531b0/"> Athaberyl</a></div>
      </div>
    </div>
  </div>
  <script src="{{asset('backend/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/detheme.js')}}" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
