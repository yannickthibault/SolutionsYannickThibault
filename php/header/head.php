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
    	$sMetaKeywords = 'Solutions Yannick Thibault, Yannick, Thibault, Yannick Thibault, Programmeur, Développeur, Architecte';
    	$sMetaDescription = 'Solutions Yannick Thibault';    	
    }
    else {
    	$sTitle = 'Yannick Thibault Solutions';
    	$sMetaKeywords = 'Yannick Thibault Solutions, Yannick, Thibault, Yannick Thibault, Programmer, Developer, Architect';
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
        <link rel="shortcut icon" href="/images/icons/favicon.ico" />
        <link rel="apple-touch-icon-precomposed" href="/images/icons/icon.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/icons/icon@2x.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/icons/icon-72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/icons/icon-72@2x.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/images/icons/icon-60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/images/icons/icon-60@2x.png" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/images/icons/icon-76.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/images/icons/icon-76@2x.png" />

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