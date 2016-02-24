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

// DB Setting
$sServername = "198.71.227.97:3306";
$sUsername = "yannickthibault";
$sDbName = "syt";

// Get DB password
define( 'IN_CODE', '1' );
include_once( '\..\..\..\config\config.php' );
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
	// Get Breaking News
	$sSqlBreakingNews = "SELECT tBreakingNews.News_Fr,
                                tBreakingNews.News_En
    			             FROM tBreakingNews
    			             WHERE NOW() >= tBreakingNews.StartDate AND NOW() <= tBreakingNews.EndDate
    			               AND tBreakingNews.News_Fr != ''
    			               AND tBreakingNews.News_En != ''
    			             ORDER BY tBreakingNews.StartDate DESC";
	$oResultBreakingNews = $oConn->query($sSqlBreakingNews);
	
	// Set Last Date Modified
	if ($oResultLastDateModified->num_rows > 0) {
		$oRow = $oResultLastDateModified->fetch_assoc();
		$sLastDateModified = $oRow['Data'];
	}
}

// Translation
if ($sLang == 'fr') {
	$sUrl = 'http://www.solutionsyannickthibault.com';
	$sTitle = 'Solutions Yannick Thibault';
	$sAltLogo = 'Logo';
	$sHome = 'Accueil';
	$sServices = 'Services';
	$sSkills = 'Compétences';
	$sResume = 'CV';
	$sContact = 'Contact';
	$sSwitchLang = 'English';
}
else {
	$sUrl = 'http://www.solutionsyannickthibault.com/en';
	$sTitle = 'Yannick Thibault Solutions';
	$sAltLogo = 'Logo';
	$sHome = 'Home';
	$sServices = 'Services';
	$sSkills = 'Skills';
	$sResume = 'Resume';
	$sContact = 'Contact';
	$sSwitchLang = 'Français';
}