
<!doctype html>

<meta charset="utf-8">

<meta name="author" content="Amsul - http://amsul.ca">

<meta name="viewport" content="width=device-width">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

<title>pickadate.js</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap2.css" rel="stylesheet"/>
        <link rel="stylesheet" href="jquery-ui.css" />
        <link rel="stylesheet" href="classic.date.css" />
        <link  href="bootstrap-responsive.css" rel="stylesheet">
         <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="jquery.js"></script>
        <script src="jquery-1.9.1.js"></script>
        <script src="jquery-ui.js"></script>
        <script type="text/javascript" src = "bootstrap.js"></script>

        <script type="text/javascript" src = "charCount.js"></script>

        <script type="text/javascript" src = "picker.js"></script>
        <script type="text/javascript" src = "picker.date.js"></script>
    <script type="text/javascript" src = "picker.time.js"></script>


<!--[if lt IE 9]>
    <script>document.createElement('section')</script>
<![endif]-->


<body>


    <header class="section section--header section--splash">

        <div class="section__block section__block--scoped">
            <nav class="menu menu--header page-target" id="menu">
                <ul class="menu__list menu__list--header">
                    <li class="menu__item menu__item--touch menu__item--logo"><a class="menu__link menu__link--dimmed" href="index.htm"><span class="logocon"><span class="logocon__p">p</span><span class="logocon__u"></span></span></a></li>
                    <li class="menu__item menu__item--touch menu__item--toggle">
                        <a class="menu__link menu__link--dimmed page-target__display" href="#menu"><span class="page-target__toggle"></span></a>
                        <a class="menu__link menu__link--dimmed page-target__display--flip" href="#"><span class="page-target__toggle"></span></a>
                    </li>
                    <li class="menu__item menu__item--clear"></li>
                    <li class="menu__item menu__item--responsive page-target__reveal"><a class="menu__link menu__link--dimmed" href="date.htm">Date picker</a></li>
                    <li class="menu__item menu__item--responsive page-target__reveal"><a class="menu__link menu__link--dimmed" href="time.htm">Time picker</a></li>
                    <li class="menu__item menu__item--responsive page-target__reveal"><a class="menu__link menu__link--dimmed" href="api.htm">API</a></li>
                    <li class="menu__item menu__item--responsive page-target__reveal"><a class="menu__link menu__link--dimmed" href="v2-(deprecated)/index.htm">v2.1.8</a></li>
                    <li class="menu__item menu__item--responsive page-target__reveal"><a class="menu__link menu__link--dimmed" href="https://github.com/amsul/pickadate.js">Github</a></li>
                    <li class="menu__item menu__item--responsive page-target__reveal menu__item--trail">
                        <span class="menu__link">Themes: <input class="theme-toggle__input" type="radio" id="show_theme_default" name="show_theme" value="default" checked hidden><label class="theme-toggle__label" for="show_theme_default">default</label> and <input class="theme-toggle__input" type="radio" id="show_theme_classic" name="show_theme" value="classic" hidden><label class="theme-toggle__label" for="show_theme_classic" class="checked-negative">classic</label></span>
                    </li>
                </ul>
            </nav>
        </div> <!-- .section__block -->

        
<div class="section__block text-center">
    <h1 class="heading heading--splash"><img src="demo/images/logo.png" alt="pickadate.js" width="478" height="90"></h1>
    <h2 class="heading heading--thin">The mobile-friendly, responsive, and&nbsp;lightweight<br>jQuery date <span class="ampersand">&amp;</span> time input picker.</h2>
    <h3 class="heading heading--thin"><a class="button" href="https://github.com/amsul/pickadate.js/archive/3.3.1.zip">Download pickadate.js v3.3.1</a></h3>
    <div class="groupset groupset--splash">
        <span class="groupset__item"><iframe src="http://ghbtns.com/github-btn.html?user=amsul&repo=pickadate.js&size=large&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="145" height="30"></iframe></span>
        <span class="groupset__item"><iframe src="http://ghbtns.com/github-btn.html?user=amsul&repo=pickadate.js&size=large&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="135" height="30"></iframe></span>
    </div>
</div> <!-- .section__block -->


    </header> <!-- .section -->


    
<section class="section">

    <div class="section__block section__block--scoped">

        <h2 class="heading heading--one heading--divide-center heading--divide-first"><span class="heading__text">The Date Picker<a class="heading__anchor" name="date-picker" href="#date-picker">&sect;</a></span></h2>

        <pre class="pre--demo"><code data-language="javascript">$('.datepicker').pickadate()</code></pre>
        <fieldset class="fieldset fieldset--demo"><div class="fieldset__wrapper"><input class="fieldset__input js__datepicker" type="text" placeholder="Try me&hellip;"></div></fieldset>

        <p class="heading--three heading--thin">Customize it with <a href="date.htm#selectors">dropdown selectors</a>, <a href="date.htm#formats">date formats</a>, and <a href="date.htm"><i>lots more</i></a>.</p>

    </div> <!-- .section__block -->

    <div class="section__block section__block--scoped">

        <h2 class="heading heading--one heading--divide-center"><span class="heading__text">The Time Picker<a class="heading__anchor" name="time-picker" href="#time-picker">&sect;</a></span></h2>

        <pre class="pre--demo"><code data-language="javascript">$('.timepicker').pickatime()</code></pre>
        <fieldset class="fieldset fieldset--demo"><div class="fieldset__wrapper"><input class="fieldset__input js__timepicker" type="text" placeholder="Try me&hellip;"></div></fieldset>

        <p class="heading--three heading--thin">Customize it with <a href="time.htm#intervals">time intervals</a>, <a href="time.htm#formats">time formats</a>, and <a href="time.htm"><i>lots more</i></a>.</p>

    </div> <!-- .section__block -->

    <div class="section__block section__block--scoped">

        <h2 class="heading heading--one heading--divide-center"><span class="heading__text">Features<a class="heading__anchor" name="features" href="#features">&sect;</a></span></h2>

        <p class="heading--three heading--thin">Some highlights include support for <a href="http://jquery.com/">jQuery</a> 1.7 and up, touch &amp; keyboard friendliness, <a href="http://bem.info/">BEM</a> style class naming, <a href="http://lesscss.org/">LESS</a> based stylesheets, and a <a href="http://gruntjs.com/">Grunt</a> based build system.</p>

        <p>The picker is built to be <b>extended</b>. Check the <a href="api.htm">API</a> to see how you can add in custom functionality. Extensions – such as keyboard typing, “from” and “to” pickers, “clear” and “close” buttons – can be viewed on&nbsp;<a href="http://codepen.io/collection/vLcih">Codepen</a>.</p>

    </div> <!-- .section__block -->

    <div class="section__block section__block--scoped">

        <h2 class="heading heading--one heading--divide-center"><span class="heading__text">Browser Support<a class="heading__anchor" name="browser-support" href="#browser-support">&sect;</a></span></h2>

        <p class="heading--three heading--thin">Supports all modern browsers – and IE8+.</p>
        <p>Specifically, v3 has been tested with <a href="https://www.google.com/chrome/">Chrome</a> <small class="text-dimmed text-tiny">MWA</small>, <a href="http://www.mozilla.org/firefox/">Firefox</a> <small class="text-dimmed text-tiny">MWA</small>, <a href="http://www.opera.com/">Opera</a> <small class="text-dimmed text-tiny">MWA</small>, <a href="http://www.apple.com/ca/safari/">Safari</a> <small class="text-dimmed text-tiny">Mi</small>, <a href="http://windows.microsoft.com/ie/">Internet Explorer</a> <small class="text-dimmed text-tiny">W</small>, <a href="http://www.blackberry.com/">Blackberry</a> 6.0+ and <a href="http://www.android.com/">Android</a> 3.2+ browsers.</p>

        <small class="text-dimmed text-tiny">
            <p>M = Mac, W = Windows, A = Android, i = iOS</p>
        </small>

        <div class="section__block section__block--notification">
            <p>Make sure to also include the <code>legacy.js</code> file along for the oldie&nbsp;browsers.</p>
        </div>

    </div> <!-- .section__block -->

</section> <!-- .section -->




    <footer class="section section--footer">

        <div class="section__block section__block--scoped text-center">
            <h2 class="heading heading--one heading--divide-center"><span class="heading__text peace">&#x270C;</span></h2>
            <p class="heading heading--three heading--thin">Made by <a href="http://twitter.com/amsul_">Amsul</a>.</p>
            <p>Code licensed under <a href="http://amsul.ca/MIT">MIT</a>.</p>
        </div> <!-- .section__block -->

    </footer> <!-- .section -->


    <script>jQuery||document.write('<script src="tests/jquery.2.0.0.js"><\/script>')</script>

    <script src="main.js"></script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36321179-2']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>


</body>