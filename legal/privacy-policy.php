<?php
	// Get Lang
    $sLang = $_REQUEST['lang'];
    if (empty($sLang)) {
    	$sLang = 'fr';
    }
    
    // Get DB Lang to use
    if (strtoupper($sLang) == 'FR') {
    	$sLangDB = '_Fr';
    }
    else {
    	$sLangDB = '_En';
    }
   
    // Set Scripts and CSSs version
    $sScriptVersion = '11';
    $sCSSVersion = '11';
    
    // DB Setting
    $sServername = "198.71.227.97:3306";
    $sUsername = "yannickthibault";
    $sDbName = "syt";
    
  	// Get DB password
    define( 'IN_CODE', '1' );
    include( '..\..\config\config.php' );
    $sPassword = PASSWORD_SYT;
    
    // Create connection
    $oConn = new mysqli($sServername, $sUsername, $sPassword, $sDbName);
    
    // Check connection
    if ($oConn->connect_error) {
    	
    	if ($sLang == 'fr') {
    		die("La connexion a échoué: ".$oConn->connect_error);
    	}
    	else {
    		die("Connection failed: ".$oConn->connect_error);
    	}
    }
    else {
    	// Get Last Date Modified
    	$sSqlLastDateModified = "SELECT tSystem.Data
    			                 FROM tSystem
    			                 WHERE tSystem.Code = 'LastDateModified'";
    	$oResultLastDateModified = $oConn->query($sSqlLastDateModified);
	    	
    	// Set Last Date Modified
    	if ($oResultLastDateModified->num_rows > 0) {
    		$oRow = $oResultLastDateModified->fetch_assoc();
    		$sLastDateModified = $oRow['Data'];
    	}   
    	
    	// Close Cnn
    	$oConn->close();    	
    }
    
    $sBreakingNews = '';
    $sBreakingNewsActive = 'false';
    
    // Translation
    if ($sLang == 'fr') {

    	$sSwitchLang = 'English';
    	$sUrl = 'http://www.solutionsyannickthibault.com';
    	$sUrl2 = 'http://www.solutionsyannickthibault.com/en';
    	$sTitle = 'Solutions Yannick Thibault';
    	$sShortTitle = 'Yannick Thibault';
    	$sMetaKeywords = 'Solutions Yannick Thibault, Yannick, Thibault, Yannick Thibault, Programmeur, Développeur, Architecte';
    	$sMetaDescription = 'Solutions Yannick Thibault';
    	$sBrowserHappy = 'Vous utilisez un navigateur obsolète. SVP <a href="http://browsehappy.com/" onClick="ga(\'send\', \'event\', \'browsehappy\', \'Click\', \'browsehappy\');">mettre à jour votre navigateur</a> pour améliorer votre expérience.';
    	$sHome = 'Accueil';
    	$sServices = 'Services';
    	$sSkills = 'Compétences';
    	$sResume = 'CV';
    	$sContact = 'Contact';
    	$sFollowMe = 'Me suivre';
    	$sAltLogo = 'Logo';
    	$sAltLoader = 'Charger';	
		$dNowCopyrights = new DateTime();
		$sYearCopyrights = $dNowCopyrights->format("Y");
		$sCopyrights = '&copy; '.$sYearCopyrights.' <a href="'.$sUrl.'" title="Solutions Yannick Thibault" target="_self" onClick="ga(\'send\', \'event\', \'Copyrights\', \'Click\', \'Copyrights\');">Solutions Yannick Thibault</a>, tous droits réservés.';
    	$sPhone = 'Téléphone: ';
    	$sEmail = 'Courriel: ';
    }
    else {
    	$sSwitchLang = 'Français';
    	$sUrl = 'http://www.solutionsyannickthibault.com/en';
    	$sUrl2 = 'http://www.solutionsyannickthibault.com';
    	$sTitle = 'Yannick Thibault Solutions';
    	$sShortTitle = 'Yannick Thibault';
    	$sMetaKeywords = 'Yannick Thibault Solutions, Yannick, Thibault, Yannick Thibault, Programmer, Developer, Architect';
    	$sMetaDescription = 'Yannick Thibault Solutions';    	
    	$sBrowserHappy = 'You are using an outdated browser. Please <a href="http://browsehappy.com/" onClick="ga(\'send\', \'event\', \'browsehappy\', \'Click\', \'browsehappy\');">upgrade your browser</a> to improve your experience.';
    	$sHome = 'Home';
    	$sServices = 'Services';
    	$sSkills = 'Skills';
    	$sResume = 'Resume';
    	$sContact = 'Contact';
    	$sFollowMe = 'Follow me';
    	$sAltLogo = 'Logo';
    	$sAltLoader = 'Loader';
    	$dNowCopyrights = new DateTime();
    	$sYearCopyrights = $dNowCopyrights->format("Y");
    	$sCopyrights = '&copy; '.$sYearCopyrights.' <a href="'.$sUrl.'" title="Yannick Thibault Solutions" target="_self" onClick="ga(\'send\', \'event\', \'Copyrights\', \'Click\', \'Copyrights\');">Yannick Thibault Solutions</a>, all rights reserved.';
    	$sPhone = 'Phone: ';
    	$sEmail = 'Email: ';
    }    
?>    

<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="<?php echo $sLang; ?>" class="no-js"> <!--<![endif]-->
    <!-- =========================================
    head
    ========================================== -->
    <head>
        <!-- =========================================
        Cache
        ========================================== -->
		<meta http-equiv="expires" content="Sun, 31 Dec 2017 12:00:00 GMT" />
		<meta http-equiv="last-modified" content="<?php echo $sLastDateModified; php?>" />
		<meta http-equiv="content-language" content="<?php echo $sLang; ?>" />
		<meta http-equiv="cache-control" content="public" />

        <!-- =========================================
        Basic
        ========================================== -->
        <title><?php echo $sTitle; php?></title>
        <meta name="author" content="Yannick Thibault" />
        <meta name="robots" content="index follow" />
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="keywords" content="<?php echo $sMetaKeywords; php?>" />
        <meta name="description" content="<?php echo $sMetaDescription; php?>" />

        <!-- =========================================
        Mobile Configurations
        ========================================== -->
        <meta name="GOOGLEBOT" content="index follow" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />

        <!-- =========================================
        fav & icons for iPhone and iPad
        ========================================== -->
        <link rel="shortcut icon" href="/../images/icons/favicon.ico" />
        <link rel="apple-touch-icon-precomposed" href="/../images/icons/icon.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/../images/icons/icon@2x.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/../images/icons/icon-72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/../images/icons/icon-72@2x.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/../images/icons/icon-60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/../images/icons/icon-60@2x.png" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/../images/icons/icon-76.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/../images/icons/icon-76@2x.png" />

        <!-- =========================================
        CSS
        ========================================== -->
        <link rel="stylesheet" media="screen" href="/../css/bootstrap.min.css" />
        <link rel="stylesheet" media="screen" href="/../css/syt_style.min.css" />

        <!-- =========================================
        Head Libs
        ========================================== -->
        <script type="text/javascript" src="/../js/vendor/modernizr.custom.js"></script>

        <!-- =========================================
        Google Analytics
        ========================================== -->
		<script>
	  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  		ga('create', 'UA-73549309-1', 'auto');
	  		ga('send', 'pageview');
		</script>
    </head><!-- /head -->

    <!-- =========================================
    body
    ========================================== -->
    <body class="main-page dark-version">
    
        <!--[if lt IE 7]>
            <p class="browsehappy"><?php echo $sBrowserHappy; php?></p>
        <![endif]-->    
    
<!-- =========================================
        Loader
        ========================================== -->
        <!-- loader -->
        <div id="loader">
            <!-- loader-container -->
            <div id="loader-container">
                <img src="/../images/loader.gif" alt="<?php echo $sAltLoader; php?>" />
            </div><!-- /loader-container -->
        </div><!-- /loader -->

        <!-- =========================================
        Top Content
        ========================================== -->
        <!-- top-content -->
        <div id="top-content">
            <!-- top-content-overlayer -->
            <div id="top-content-overlayer"></div>
            <!-- =========================================
            Menu
            ========================================== -->
            <!-- slide-menu-wrapper -->
            <div id="slide-menu-wrapper">
                <!-- slide-menu-scroller -->
                <div id="slide-menu-scroller">
                    <!-- slide-menu-container -->
                    <div id="slide-menu-container">
                        <!-- mobile-menu -->
                        <nav class="mobile-menu">
                            <!-- nav -->
                            <ul>
                                <!-- Home -->
                                <li>
                                    <a href="<?php echo $sUrl; php?>/#home-section" title="<?php echo $sHome; php?>" onClick="ga('send', 'event', 'Home', 'Click', 'mobile-menu');">
                                        <?php echo $sHome; php?>
                                    </a>
                                </li>
                                <!-- /Home -->
                                <!-- Services -->
                                <li>
                                    <a href="#services-section" title="<?php echo $sServices; php?>" onClick="ga('send', 'event', 'Services', 'Click', 'mobile-menu');">
                                        <?php echo $sServices; php?>
                                    </a>
                                </li>
                                <!-- /Services -->
                                <!-- Skills -->
                                <li>
                                    <a href="<?php echo $sUrl; php?>/#skills-section" title="<?php echo $sSkills; php?>" onClick="ga('send', 'event', 'Skills', 'Click', 'mobile-menu');">
                                        <?php echo $sSkills; php?>
                                    </a>
                                </li>
                                <!-- /Skills -->
                                <!-- Resume -->
                                <li>
                                    <a href="<?php echo $sUrl; php?>/#resume-section" title="<?php echo $sResume; php?>" onClick="ga('send', 'event', 'Resumes', 'Click', 'mobile-menu');">
                                        <?php echo $sResume; php?>
                                    </a>
                                </li>
                                <!-- /Resume -->
                                <!-- Contact -->
                                <li>
                                    <a href="<?php echo $sUrl; php?>/#contact-section" title="<?php echo $sContact; php?>" onClick="ga('send', 'event', 'Contact', 'Click', 'mobile-menu');">
                                        <?php echo $sContact; php?>
                                    </a>
                                </li>
                                <!-- /Contact -->
                                <!-- Lang -->
                                <li>
                                    <a href="<?php echo $sUrl2; php?>" onClick="ga('send', 'event', 'SwitchLang', 'Click', 'Mobile - <?php echo $sSwitchLang; php?>');">
                                        <?php echo $sSwitchLang; php?>
                                    </a>
                                </li>
                                <!-- /Lang -->
                            </ul><!-- /nav -->
                        </nav><!-- /navbar-collapse -->
                        <!-- widget widget-social -->
                        <div class="widget widget-social">
                            <ul class="social-icons">
                                <li>
                                    <a href="https://www.facebook.com/yannick.thibault" class="facebook" title="Facebook" target="_blank" onClick="ga('send', 'social', 'Facebook', 'Send', 'https://www.facebook.com/yannick.thibault');">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/YannickThibault" class="twitter" title="Twitter" target="_blank" onClick="ga('send', 'social', 'Twitter', 'Send', 'https://twitter.com/YannickThibault');">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/yannickthibault" class="linkedin" title="Linkedin" target="_blank" onClick="ga('send', 'social', 'Linkedin', 'Send', 'https://www.linkedin.com/in/yannickthibault');">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- /widget widget-social -->
                    </div><!-- /slide-menu-container -->
                </div><!-- /slide-menu-scroller -->
            </div><!-- /slide-menu-wrapper -->

            <!-- =========================================
            Profile
            ========================================== -->
            <!-- profile-wrapper -->
            <div id="profile-wrapper">
                <!-- profile-container -->
                <div id="profile-container">
                    <!-- logo -->
                    <a href="<?php echo $sUrl; php?>" target="_self" class="navbar-brand" title="<?php echo $sTitle; php?>" onClick="ga('send', 'event', 'Logo', 'Click', 'profile-container');">
                    	<img class="lazy-load" src="/../images/blank.png" data-src="/../images/logo.png" alt="<?php echo $sAltLogo; php?>" />
                    </a><!-- /logo -->
                </div><!-- /profile-container -->
            </div><!-- /profile-wrapper -->
        </div><!-- /top-content -->

        <!-- =========================================
        Content
        ========================================== -->
        <!-- content-wrapper -->
        <div id="content-wrapper">
            <!-- =========================================
            Menu
            ========================================== -->
            <!-- menu-wrapper -->
            <header id="menu-wrapper">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- col-md-12 -->
                        <div class="col-md-12">
                            <!-- navbar-header -->
                            <div class="navbar-header">
                                <!-- logo -->
                                <a href="<?php echo $sUrl; php?>" target="_self" class="navbar-brand" title="<?php echo $sTitle; php?>" onClick="ga('send', 'event', 'Logo', 'Click', 'navbar-header');">
                                    <img class="lazy-load" src="/../images/blank.png" data-src="/../images/logo.png" alt="<?php echo $sAltLogo; php?>" />
                                </a><!-- /logo -->
                            </div><!-- /navbar-header -->
                            <!-- menu-button -->
                            <button class="menu-button" id="open-button" onClick="ga('send', 'event', 'Menu', 'Click', 'menu-button');">
                                <i class="fa fa-bars"></i>
                            </button>
                            <!-- /menu-button -->
                            <!-- navbar-collapse -->
                            <nav class="navbar-collapse collapse">
                                <!-- nav -->
                                <ul class="nav navbar-nav navbar-right">
                                    <!-- Home -->
                                    <li>
                                        <a href="<?php echo $sUrl; php?>/#home-section" title="Home" onClick="ga('send', 'event', 'Home', 'Click', 'navbar-nav');">
                                            <?php echo $sHome; php?>
                                        </a>
                                    </li>
                                    <!-- /Home -->
                                    <!-- Services -->
                                    <li>
                                        <a href="<?php echo $sUrl; php?>/#services-section" title="Services" onClick="ga('send', 'event', 'Services', 'Click', 'navbar-nav');">
                                            <?php echo $sServices; php?>
                                        </a>
                                    </li>
                                    <!-- /Services -->
                                    <!-- Skills -->
                                    <li>
                                        <a href="<?php echo $sUrl; php?>/#skills-section" title="Skills" onClick="ga('send', 'event', 'Skills', 'Click', 'navbar-nav');">
                                            <?php echo $sSkills; php?>
                                        </a>
                                    </li>
                                    <!-- /Skills -->
                                    <!-- Resume -->
                                    <li>
                                        <a href="<?php echo $sUrl; php?>/#resume-section" title="Resume" onClick="ga('send', 'event', 'Resumes', 'Click', 'navbar-nav');">
                                            <?php echo $sResume; php?>
                                        </a>
                                    </li>
                                    <!-- /Resume -->
                                    <!-- Contact -->
                                    <li>
                                        <a href="<?php echo $sUrl; php?>/#contact-section" title="Contact" onClick="ga('send', 'event', 'Contact', 'Click', 'navbar-nav');">
                                            <?php echo $sContact; php?>
                                        </a>
                                    </li><!-- /Contact -->
                                    <!-- Lang -->
                                    <li>
                                        <a href="<?php echo $sUrl2; php?>" onClick="ga('send', 'event', 'xxx', 'Click', 'navbar-nav - <?php echo $sSwitchLang; php?>');">
                                            <?php echo $sSwitchLang; php?>
                                        </a>
                                    </li><!-- /Lang -->
                                    <li>
                                    </li>
                                </ul><!-- /nav -->
                            </nav><!-- /navbar-collapse -->
                        </div><!-- /col-md-12 -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </header><!-- /menu-wrapper -->    
    
            <!-- =========================================
            Legal Section
            ========================================== -->
            <!-- services-section -->
            <div id="services-section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- col-md-12 -->
                        <div class="col-md-12">
                        
                        bla bla bla
                        
                        </div>
                    </div><!-- /row -->
                </div><!-- /container -->
            </div><!-- /services-section -->                        
    
            <!-- =========================================
            Footer Section
            ========================================== -->
            <!-- footer-section -->
            <footer id="footer-section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- col-md-12 -->
                        <div class="col-md-12">
             	            <!-- footer-logo -->
	                        <div class="footer-logo wow fadeInDown" data-wow-duration="1.5s">
	                            <!-- logo -->
                                <a href="<?php echo $sUrl; php?>" target="_self" class="scrollto" title="<?php echo $sTitle; php?>" onClick="ga('send', 'event', 'Logo', 'Click', 'footer-logo');">
                                    <img class="lazy-load" src="/../images/blank.png" data-src="/../images/logo.png" alt="<?php echo $sLogo; php?>" />
                                </a><!-- /logo -->
	                        </div><!-- /footer-logo -->
	                        
	                       <p class="quickcontact wow fadeIn" data-wow-duration="1.5s">
                           		<strong><?php echo $sPhone; php?></strong>514-250-7010<br/>
                           		<strong><?php echo $sEmail; php?></strong><a title="Curriel" href="mailto:contact@solutionsyannickthibault.com" target="_blank">contact@solutionsyannickthibault.com</a>
                           </p<!-- /section-desc -->
	                        
                            <!-- social-icons -->
                            <ul class="social-icons wow fadeInUp" data-wow-duration="1.5s">
                                <li><a href="https://www.facebook.com/yannick.thibault" title="Facebook" target="_blank" onClick="ga('send', 'social', 'Facebook', 'Send', 'https://www.facebook.com/yannick.thibault');"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/YannickThibault" title="Twitter" target="_blank" onClick="ga('send', 'social', 'Twitter', 'Send', 'https://twitter.com/YannickThibault');"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/yannickthibault" title="Linkedin" target="_blank" onClick="ga('send', 'social', 'Linkedin', 'Send', 'https://www.linkedin.com/in/yannickthibault');"><i class="fa fa-linkedin"></i></a></li>
                            </ul><!-- /social-icons -->
                            
                            <!-- copyright -->
                            <p class="copyright wow fadeIn" data-wow-duration="1.5s">
                                <?php echo $sCopyrights; php?>
                            </p><!-- /copyright -->
                        </div><!-- /col-md-12 -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </footer><!-- /footer-section -->
        </div><!-- /content-wrapper -->    
    
        <!-- =========================================
        java script
        ========================================== -->   
        <script type="text/javascript">
        	var profileTypes = [<?php echo $sProfileTypes; php?>];
        	var notificationActive = <?php echo $sBreakingNewsActive; php?>;
        	var breakingNews = "<?php echo $sBreakingNews; php?>"
        </script>             
        <script type="text/javascript" src="/../js/vendor/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="/../js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="/../js/plugins/plugin.min.js"></script>
        <script type="text/javascript" src="/../js/Sponshy.min.js"></script>       
        <!--[if lt IE 9]>
            <script src="/../js/plugins/html5shiv.min.js"></script>
            <script src="/../js/plugins/selectivizr.min.js"></script>
        <![endif]-->    
        
        <!-- =========================================
        java script for lazy loading of images
        ========================================== -->
        <script type="text/javascript">
			!function(){function e(e){var t=0;if(e.offsetParent){do t+=e.offsetTop;while(e=e.offsetParent);return t}}var t=window.addEventListener||function(e,t){window.attachEvent("on"+e,t)},o=window.removeEventListener||function(e,t,o){window.detachEvent("on"+e,t)},n={cache:[],mobileScreenSize:500,addObservers:function(){t("scroll",n.throttledLoad),t("resize",n.throttledLoad)},removeObservers:function(){o("scroll",n.throttledLoad,!1),o("resize",n.throttledLoad,!1)},throttleTimer:(new Date).getTime(),throttledLoad:function(){var e=(new Date).getTime();e-n.throttleTimer>=200&&(n.throttleTimer=e,n.loadVisibleImages())},loadVisibleImages:function(){for(var t=window.pageYOffset||document.documentElement.scrollTop,o=window.innerHeight||document.documentElement.clientHeight,r={min:t-300,max:t+o+300},i=0;i<n.cache.length;){var a=n.cache[i],c=e(a),l=a.height||0;if(c>=r.min-l&&c<=r.max){var s=a.getAttribute("data-src-mobile");a.onload=function(){this.className="lazy-loaded"},s&&screen.width<=n.mobileScreenSize?a.src=s:a.src=a.getAttribute("data-src"),a.removeAttribute("data-src"),a.removeAttribute("data-src-mobile"),n.cache.splice(i,1)}else i++}0===n.cache.length&&n.removeObservers()},init:function(){document.querySelectorAll||(document.querySelectorAll=function(e){var t=document,o=t.documentElement.firstChild,n=t.createElement("STYLE");return o.appendChild(n),t.__qsaels=[],n.styleSheet.cssText=e+"{x:expression(document.__qsaels.push(this))}",window.scrollBy(0,0),t.__qsaels}),t("load",function e(){for(var t=document.querySelectorAll("img[data-src]"),r=0;r<t.length;r++){var i=t[r];n.cache.push(i)}n.addObservers(),n.loadVisibleImages(),o("load",e,!1)})}};n.init()}();
		</script>        
    </body><!-- /body -->
</html><!-- /html -->    