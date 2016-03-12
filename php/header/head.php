<?php
	// Get Lang
    $sLang = $_REQUEST['lang'];
    if (empty($sLang)) {
    	$sLang = 'fr';
    }

    // DB Setting
    $sServername = "198.71.227.97:3306";
    $sUsername = "yannickthibault";
    $sDbName = "syt";
    
    // Get DB password
    $sPassword = PASSWORD_SYT;    
    
    // Create connection
    $oConnHead = new mysqli($sServername, $sUsername, $sPassword, $sDbName);
    
    // Check connection
    if ($oConnHead->connect_error) {
    	 
    	if ($sLang == 'fr') {
    		die("La connexion a échoué: ".$oConnHead->connect_error);
    	}
    	else {
    		die("Connection failed: ".$oConnHead->connect_error);
    	}
    }
    else {
    	// Get Last Date Modified
    	$sSqlLastDateModified = "SELECT tSystem.Data
    			                 FROM tSystem
    			                 WHERE tSystem.Code = 'LastDateModified'";
    	$oResultLastDateModified = $oConnHead->query($sSqlLastDateModified);
    	
    	// Set Last Date Modified
    	if ($oResultLastDateModified->num_rows > 0) {
    		$oRow = $oResultLastDateModified->fetch_assoc();
    		$sLastDateModified = $oRow['Data'];
    	}
    	 
    	// Close Cnn
    	$oConnHead->close();
    }
    
    // Translation
    if ($sLang == 'fr') {    	
    	$sTitle = 'Solutions Yannick Thibault';
    	$sMetaKeywords = 'Yannick Thibault,Solutions Yannick Thibault,Yannick,Thibault,Consultant,Programmeur,Développeur,Architecte,.Net,C#,VB.Net,PHP,Travailleur indépendant,Analyse,Architecture,Développement,Expert,Android,iOS,Analyste d\'affaires,Spécification des exigences logicielles,Architecture logiciel,Révision du code,Tests de performance,OOP,MVVM,MVC,SQL,WPF,Agile,HTML,CSS,JS,Javascript,JQuery,Entity framework,NHibernate,Java,Objective-C,WordPress,Magento,EPI Server,WCF,Telerik,514-250-7010,5142507010,Solutions informatiques';
    	$sMetaDescription = 'Solutions Yannick Thibault';    	
    }
    else {
    	$sTitle = 'Yannick Thibault Solutions';
    	$sMetaKeywords = 'Yannick Thibault,Yannick Thibault Solutions,Yannick, Thibault,Consultant,Programmer,Developer,Architect,.Net,C#,VB.Net,PHP,Freelancer,Analysis,Architecture,Development,Expert,Android,iOS,Business analyst,Software requirements specification,Software architecture,Code review,Benchmarks,OOP,MVVM,MVC,SQL,WPF,Agile,HTML,CSS,JS,Javascript,JQuery,Entity framework,NHibernate,Java,Objective-C,WordPress,Magento,EPI Server,WCF,Telerik,514-250-7010,5142507010,IT solutions';
    	$sMetaDescription = 'Yannick Thibault Solutions';    	
    }
php?>

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
		<link rel="apple-touch-icon" sizes="57x57" href="/images/icons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/images/icons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/images/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/images/icons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/images/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/images/icons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/images/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/images/icons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="/images/icons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/images/icons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/images/icons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/images/icons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/images/icons/manifest.json">
		<link rel="mask-icon" href="/images/icons/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="/images/icons/favicon.ico">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/images/icons/mstile-144x144.png">
		<meta name="msapplication-config" content="/images/icons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

        <!-- =========================================
        CSS
        ========================================== -->
        <link rel="stylesheet" media="screen" href="/css/bootstrap.min.css" />
        <link rel="stylesheet" media="screen" href="/css/syt_style.min.css" />

        <!-- =========================================
        Head Libs
        ========================================== -->
        <script type="text/javascript" src="/js/vendor/modernizr.custom.js"></script>

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