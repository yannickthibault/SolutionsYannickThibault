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
    include_once( '..\config\config.php' );
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
    	// Get Prices
    	$sSqlPrices = "SELECT tPrices.Code, 
                              tPrices.Title_Fr, 
                              tPrices.Desc_Fr, 
                              tPrices.Title_En, 
                              tPrices.Desc_En,
                              tPrices.OrderNo 
    			       FROM tPrices 
    			       ORDER BY tPrices.OrderNo ASC";
    	$oResultPrices = $oConn->query($sSqlPrices);
    	
    	// Get Resumes
    	$sSqlResumes = "SELECT tResumes.Code, 
                               tResumes.ImageAlt_Fr, 
                               tResumes.Date_Fr, 
                               tResumes.Title_Fr, 
                               tResumes.Place_Fr, 
                               tResumes.Desc_Fr, 
                               tResumes.Image_Fr, 
                               tResumes.Icon_Fr, 
                               tResumes.ImageAlt_En, 
                               tResumes.Date_En, 
                               tResumes.Title_En, 
                               tResumes.Place_En, 
                               tResumes.Desc_En, 
                               tResumes.Image_En, 
                               tResumes.Icon_En,
                               tResumes.OrderNo 
    			       FROM tResumes 
    			       ORDER BY tResumes.OrderNo ASC";
    	$oResultResumes = $oConn->query($sSqlResumes);
    	
    	// Get Services
    	$sSqlServices = "SELECT tServices.Code, 
                                tServices.Title_Fr, 
                                tServices.Desc_Fr, 
                                tServices.Image_Fr, 
                                tServices.Title_En, 
                                tServices.Desc_En, 
                                tServices.Image_En,
                                tServices.OrderNo 
    			       FROM tServices
    			       ORDER BY tServices.OrderNo ASC";
    	$oResultServices = $oConn->query($sSqlServices);
    	
    	// Get Skills
    	$sSqlSkills = "SELECT tSkills.Code,
                              tSkills.ID_Fr, 
                              tSkills.Title_Fr, 
                              tSkills.Desc_Fr, 
                              tSkills.Number_Fr, 
                              tSkills.ID_En, 
                              tSkills.Title_En, 
                              tSkills.Desc_En, 
                              tSkills.Number_En,
                              tSkills.OrderNo 
    			       FROM tSkills 
    			       ORDER BY tSkills.OrderNo ASC";
    	$oResultSkills = $oConn->query($sSqlSkills);
    	
    	// Get Widgets
    	$sSqlWidgets = "SELECT tWidgets.Code, 
                               tWidgets.Title_Fr, 
                               tWidgets.Image_Fr, 
                               tWidgets.Title_En, 
                               tWidgets.Image_En,
                               tWidgets.OrderNo 
    			       FROM tWidgets 
    			       ORDER BY tWidgets.OrderNo ASC";
    	$oResultWidgets = $oConn->query($sSqlWidgets);   

    	// Get Last Date Modified
    	$sSqlLastDateModified = "SELECT tSystem.Data
    			                 FROM tSystem
    			                 WHERE tSystem.Code = 'LastDateModified'";
    	$oResultLastDateModified = $oConn->query($sSqlLastDateModified);
    	
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

    	// Set Breaking New
    	if ($oResultBreakingNews->num_rows > 0) {
    		$oRow = $oResultBreakingNews->fetch_assoc();
    		$sBreakingNews = $oRow['News'.$sLangDB];
    		$sBreakingNewsActive = 'true';
    	} 
    	else {
    		$sBreakingNews = '';
    		$sBreakingNewsActive = 'false';
    	}
    }
  
    // Translation
    if ($sLang == 'fr') {

    	$sUrl = 'http://www.solutionsyannickthibault.com';
    	$sUrl2 = 'http://www.solutionsyannickthibault.com/en';
    	$sTitle = 'Solutions Yannick Thibault';
    	$sShortTitle = 'Yannick Thibault';
    	$sHome = 'Accueil';
    	$sServices = 'Services';
    	$sSkills = 'Compétences';
    	$sResume = 'CV';
    	$sContact = 'Contact';
    	$sMyServices = 'Mes services';
    	$sProfileTypes = '\'Développeur\', \'Architecte\', \'Analyste\', \'Français/Anglais\'';
    	$sHereWhatIDo = 'Voici ce que je fais';
    	$sAltLogo = 'Logo';
    	$sResumeTitle = 'Expériences de travail & scolarité';
    	$sDownloadResume = 'Télécharger CV';
    	$sDownloadResumeLink = '#';
    	$sPriceTitle = 'Prix & distinctions';
		$sContactTitle = 'Contact';    
		$sEnterInContact = 'Entrer en contact';
		$sName = 'Nom';
		$sEmail = 'Courriel';
		$sSubject = 'Sujet';
		$sMessage = 'Message';
		$sSend = 'Envoyer';		
		$sContact_Success = 'Merci, je vous contact sous peu.';
		$sContact_Error = 'Il y a eu un problème, s\'il vous plaît essayer de nouveau!';
    	$sContact_InvalidName = 'Votre nom est requis!';
    	$sContact_InvalidEmail = 'Votre courriel est requis!';
    	$sContact_InvalidEmail2 = 'Veuillez entrer un courriel valide!';
    	$sContact_InvalidSubject = 'Le sujet est requis!';
    	$sContact_InvalidMessage = 'Le message est requis!';
    	$sPhone = 'Téléphone: ';
    	$sEmail = 'Courriel: ';
    }
    else {
    	$sUrl = 'http://www.solutionsyannickthibault.com/en';
    	$sUrl2 = 'http://www.solutionsyannickthibault.com';
    	$sTitle = 'Yannick Thibault Solutions';
    	$sShortTitle = 'Yannick Thibault';  	
    	$sHome = 'Home';
    	$sServices = 'Services';
    	$sSkills = 'Skills';
    	$sResume = 'Resume';
    	$sContact = 'Contact';
    	$sMyServices = 'My services';
    	$sProfileTypes = '\'Developer\', \'Architect\', \'Analyst\', \'French/English\'';
    	$sHereWhatIDo = 'Here is what I do';
    	$sAltLogo = 'Logo';
    	$sResumeTitle = 'Work & education experience';
    	$sDownloadResume = 'Download resume';
    	$sDownloadResumeLink = '#';
    	$sPriceTitle = 'Awards & recognition';
    	$sContactTitle = 'Contact';
    	$sEnterInContact = 'Get in touch';
    	$sName = 'Name';
    	$sEmail = 'Email';
    	$sSubject = 'Subject';
    	$sMessage = 'Message';
    	$sSend = 'Send';
    	$sContact_Success = 'Thank you, I will contact you shortly.';
    	$sContact_Error = 'There was a problem, please try again!';
    	$sContact_InvalidName = 'Your name is required!';
    	$sContact_InvalidEmail = 'Your email is required!';
    	$sContact_InvalidEmail2 = 'Please enter a valid email!';
    	$sContact_InvalidSubject = 'Your subject is required!';
    	$sContact_InvalidMessage = 'Your message is required!';
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
		<?php include( '\php\header\head.php' ); php?>
    </head><!-- /head -->

    <!-- =========================================
    body
    ========================================== -->
    <body class="image-slider main-page dark-version">

        <?php include( '\php\header\legacybrowser.php' ); php?>
        <?php include( '\php\header\loader.php' ); php?>
        <?php include( '\php\header\menumobile.php' ); php?>

        <!-- =========================================
        Content
        ========================================== -->
        <!-- content-wrapper -->
        <div id="content-wrapper">

			<?php include( '\php\header\menu.php' ); php?>

            <!-- =========================================
            Home Section
            ========================================== -->
            <!-- home-section -->
            <div id="home-section">
                <!-- home-section-overlayer -->
                <div id="home-section-overlayer"></div>
                <!-- home-section-container -->
                <div id="home-section-container">
                    <!-- personal-name -->
                    <div class="personal-name">
                        <h1><?php echo $sShortTitle; php?></h1>
                    </div><!-- /personal-name -->
                    <!-- personal-title -->
                    <div class="personal-title">
                        <h4><span id="personal-typed"></span></h4>
                    </div><!-- /personal-title -->
                    <!-- personal-button -->
                    <div class="personal-button">
                        <a href="#services-section" title="<?php echo $sMyServices; php?>" class="btn btn-lg btn-nesto-o" data-scroll onClick="ga('send', 'event', 'Services', 'Click', 'personal-button');">
                            <?php echo $sMyServices; php?>
                        </a>
                    </div><!-- /personal-button -->
                </div><!-- /home-section-container -->
            </div><!-- /home-section -->

            <!-- =========================================
            Services Section
            ========================================== -->
            <!-- services-section -->
            <div id="services-section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- col-md-12 -->
                        <div class="col-md-12">
                            <!-- section-title -->
                            <div class="section-title wow fadeInDown" data-wow-duration="1.5s">
                                <h1><?php echo $sServices; php?></h1>
                            </div><!-- /section-title -->
                            <!-- section-desc -->
                            <div class="section-desc wow fadeInUp" data-wow-duration="1.5s">
                                <h3><?php echo $sHereWhatIDo; php?></h3>
                            </div><!-- /section-desc -->
                        </div><!-- /col-md-12 -->
<?php 
if ($oResultServices->num_rows > 0) {
	while($oRow = $oResultServices->fetch_assoc()) {
		echo '
                        <!-- col-md-6 -->
                        <div class="col-md-6">
                            <!-- feature-box -->
                            <div class="feature-box wow fadeInLeft" data-wow-duration="1.5s">
                                <!-- box-icon -->
                                <div class="box-icon">
                                    <i class="'.$oRow['Image'.$sLangDB].'"></i>
                                </div><!-- /box-icon -->
                                <!-- box-icon -->
                                <div class="box-content">
                                    <!-- box-title -->
                                    <div class="box-title">
                                        <h3>'.$oRow['Title'.$sLangDB].'</h3>
                                    </div><!-- /box-title -->
                                    <!-- box-desc -->
                                    <div class="box-desc">
                                        <p>'.$oRow['Desc'.$sLangDB].'</p>
                                    </div><!-- /box-desc -->
                                </div><!-- /box-icon -->
                            </div><!-- /feature-box -->
                        </div><!-- /col-md-6 -->    		
    		';
	}
}
php?>
                    </div><!-- /row -->
                </div><!-- /container -->
            </div><!-- /services-section -->

            <!-- =========================================
            Skills Section
            ========================================== -->
            <!-- skills-section -->
            <div id="skills-section">
                <!-- skills-section-overlayer -->
                <div id="skills-section-overlayer">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <!-- owl-skills-wrapper -->
                            <div id="owl-skills-wrapper">
                                <!-- owl-skills -->
                                <div class="owl-skills">
<?php 
if ($oResultSkills->num_rows > 0) {
	while($oRow = $oResultSkills->fetch_assoc()) {
		echo '
                                    <!-- slide-item -->
                                    <div>
                                        <!-- slide-content -->
                                        <div class="slide-content">
                                            <!-- Value -->
                                            <div class="skills" data-rel="'.$oRow['Number'.$sLangDB].'" id="'.$oRow['ID'.$sLangDB].'"></div>
                                            <!-- skill-title -->
                                            <div class="skill-title">
                                                <h2>'.$oRow['Title'.$sLangDB].'</h2>
                                            </div><!-- /skill-title -->
                                            <!-- skill-content -->
                                            <div class="skill-content">
                                                <p>'.$oRow['Desc'.$sLangDB].'</p>
                                            </div><!-- /skill-content -->
                                        </div><!-- /slide-content -->
                                    </div><!-- /slide-item -->    		
    		';
	}
}
php?>
                                </div><!-- /owl-skills -->
                            </div><!-- /owl-skills-wrapper -->
                        </div><!-- /row -->
                    </div><!-- /container -->
                </div><!-- /skills-section-overlayer -->
            </div><!-- /skills-section -->

            <!-- =========================================
            Resume Section
            ========================================== -->
            <!-- resume-section -->
            <div id="resume-section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- col-md-12 -->
                        <div class="col-md-12">
                            <!-- section-title -->
                            <div class="section-title wow fadeInDown" data-wow-duration="1.5s">
                                <h1><?php echo $sResume; php?></h1>
                            </div><!-- /section-title -->
                            <!-- section-desc -->
                            <div class="section-desc wow fadeInUp" data-wow-duration="1.5s">
                                <h3><?php echo $sResumeTitle; php?></h3>
                            </div><!-- /section-desc -->
                        </div><!-- /col-md-12 -->
                        <!-- owl-resume-wrapper -->
                        <div id="owl-resume-wrapper">
                            <!-- owl-resume -->
                            <div class="owl-resume">
<?php 
if ($oResultResumes->num_rows > 0) {
	while($oRow = $oResultResumes->fetch_assoc()) {
		echo '
                                <!-- slide-item -->
                                <div>
                                    <!-- slide-content -->
                                    <div class="slide-content">
                                        <!-- resume-wrapper -->
                                        <div class="resume-wrapper">
                                            <!-- resume-image -->
                                            <div class="resume-image">
                                                <img class="lazy-load" src="/images/blank.png" alt="'.$oRow['ImageAlt'.$sLangDB].'" data-src="'.$oRow['Image'.$sLangDB].'" />
                                                <!-- resume-date -->
                                                <div class="resume-date">
                                                    <p>'.$oRow['Date'.$sLangDB].'</p>
                                                </div><!-- /resume-date -->
                                            </div><!-- /resume-image -->
                                            <!-- resume-type -->
                                            <div class="resume-type">
                                                <i class="fa '.$oRow['Icon'.$sLangDB].'"></i>
                                            </div><!-- /resume-type -->
                                            <!-- resume-content -->
                                            <div class="resume-content">
                                                <!-- resume-title -->
                                                <div class="resume-title">
                                                    <h4>'.$oRow['Title'.$sLangDB].'</h4>
                                                    <strong>'.$oRow['Place'.$sLangDB].'</strong>
                                                </div><!-- /resume-title -->
                                                <!-- resume-desc -->
                                                <div class="resume-desc">
                                                    <p>'.$oRow['Desc'.$sLangDB].'</p>
                                                </div><!-- /resume-desc -->
                                            </div><!-- /resume-content -->
                                        </div><!-- /resume-wrapper -->
                                    </div><!-- /slide-content -->
                                </div><!-- /slide-item -->    		
    		';
	}
}
php?>                         
                            </div><!-- /owl-resume -->
                        </div><!-- /owl-resume-wrapper -->
                        <!-- download-resume -->
                        <div class="download-resume">
                            <a href="<?php echo $sDownloadResumeLink; php?>" title="<?php echo $sDownloadResume; php?>" class="btn btn-lg btn-nesto" onClick="ga('send', 'event', 'Download', 'Click', 'download-resume');">
                                <?php echo $sDownloadResume; php?>
                            </a>
                        </div><!-- /download-resume -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div><!-- /resume-section -->

            <!-- =========================================
            Numbers Section
            ========================================== -->
            <!-- numbers-section -->
            <div id="numbers-section">
<?php

function WidgetData($row) {
	
	$dStart = new DateTime('2001-12-05');
	$dEnd  = new DateTime('now');
	$dDiff = $dStart->diff($dEnd);
	$year = intval($dDiff->days / 365);
	$days = $dDiff->days;
	
	switch ($row['Code']) {
		case 'Wid_1':
			return $days * rand(400, 700);
			break;
		case 'Wid_2':
			return $year;
			break;
		case 'Wid_3':
			return $days * rand(1,3);
			break;
		case 'Wid_4':
			return ($days / rand(4,7));
			break;
		default:
			return '1000';
	}
}
?>
                <!-- numbers-section-overlayer -->
                <div id="numbers-section-overlayer">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row">
<?php 
if ($oResultWidgets->num_rows > 0) {
	while($oRow = $oResultWidgets->fetch_assoc()) {
		echo '
                            <!-- col-md-3 col-sm-6 col-xs-6 -->
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <!-- numbers -->
                                <div class="numbers wow fadeInUp" data-wow-duration="1.5s">
                                    <!-- box-icon -->
                                    <div class="box-icon">
                                        <i class="'.$oRow['Image'.$sLangDB].'"></i>
                                    </div><!-- /box-icon -->
                                    <!-- box-numbers -->
                                    <div class="box-numbers">
                                        <span class="odometer" data-to="'.WidgetData($oRow).'"></span>
                                    </div><!-- /box-numbers -->
                                    <!-- box-title -->
                                    <div class="box-title">
                                        <h2>'.$oRow['Title'.$sLangDB].'</h2>
                                    </div><!-- /box-title -->
                                </div><!-- /numbers -->
                            </div><!-- /col-md-3 col-sm-6 col-xs-6 --> 		
    		';
	}
}
php?>  
                        </div><!-- /row -->
                    </div><!-- /container -->
                </div><!-- /numbers-section-overlayer -->
            </div><!-- /numbers-section -->

            <!-- =========================================
            Testimonials Section
            ========================================== -->
            <!-- testimonials-section -->
            <div id="testimonials-section">
                <!-- testimonials-section-overlayer -->
                <div id="testimonials-section-overlayer">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row">
	                        <!-- col-md-12 -->
	                        <div class="col-md-12">
	                            <!-- section-title -->
	                            <div class="section-title wow fadeInDown" data-wow-duration="1.5s">
	                                <h1><?php echo $sPriceTitle; php?></h1>
	                            </div><!-- /section-title -->
	                        </div><!-- /col-md-12 -->
                            <!-- col-md-12 -->
                            <div class="col-md-12">
                                <!-- owl-testimonials-wrapper -->
                                <div id="owl-testimonials-wrapper">
                                    <!-- owl-testimonials -->
                                    <div class="owl-testimonials">
<?php 
if ($oResultPrices->num_rows > 0) {
	while($oRow = $oResultPrices->fetch_assoc()) {
		echo '
                                        <!-- slide-item -->
                                        <div>
                                            <!-- slide-content -->
                                            <div class="slide-content">
                                                <!-- client-name -->
                                                <div class="client-name">
                                                    <h2>'.$oRow['Title'.$sLangDB].'</h2>
                                                </div><!-- /client-name -->
                                                <!-- client-quote -->
                                                <div class="client-quote">
                                                    <p>'.$oRow['Desc'.$sLangDB].'</p>
                                                </div><!-- /client-quote -->
                                            </div><!-- /slide-content -->
                                        </div><!-- /slide-item -->   		
    		';
	}
}
php?>
                                    </div><!-- /owl-testimonials -->
                                </div><!-- /owl-testimonials-wrapper -->
                            </div><!-- /col-md-12 -->
                        </div><!-- /row -->
                    </div><!-- /container -->
                </div><!-- /testimonials-section-overlayer -->
            </div><!-- /testimonials-section -->

            <!-- =========================================
            Contact Section
            ========================================== -->
            <!-- contact-section -->
            <div id="contact-section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- col-md-12 -->
                        <div class="col-md-12">
                            <!-- section-title -->
                            <div class="section-title wow fadeInDown" data-wow-duration="1.5s">
                                <h1><?php echo $sContactTitle; php?></h1>
                            </div><!-- /section-title -->
                            <!-- section-desc -->
                            <div class="section-desc wow fadeInUp" data-wow-duration="1.5s">
                                <h3><?php echo $sEnterInContact; php?></h3>
                            </div><!-- /section-desc -->
                        </div><!-- /col-md-12 -->
                        <!-- col-md-12 -->
                        <div class="col-md-12 wow pulse" data-wow-duration="1.5s">
                            <!-- row -->
                            <div class="row">
                                <!-- form -->
                                <form role="form" id="contactform" method="post" action="javascript:void(0);">
                                    <!-- col-md-4 -->
                                    <div class="col-md-4">
                                        <!-- Contact Name -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="<?php echo $sName; php?>" name="username" id="name">
                                        </div><!-- /Contact Name -->
                                    </div><!-- /col-md-4 -->
                                    <!-- col-md-4 -->
                                    <div class="col-md-4">
                                        <!-- Contact Email -->
                                        <div class="form-group">
                                            <input type="text" class="form-control email" placeholder="<?php echo $sEmail; php?>" name="useremail" id="email">
                                        </div><!-- /Contact Email -->
                                    </div><!-- /col-md-4 -->
                                    <!-- col-md-4 -->
                                    <div class="col-md-4">
                                        <!-- Contact Subject -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="<?php echo $sSubject; php?>" name="usersubject" id="subject">
                                        </div><!-- /Contact Subject -->
                                    </div><!-- /col-md-4 -->
                                    <!-- col-md-12 -->
                                    <div class="col-md-12">
                                        <!-- Contact Message -->
                                        <div class="form-group">
                                            <textarea rows="10" class="form-control" placeholder="<?php echo $sMessage; php?>" name="usermessage" id="message"></textarea>
                                        </div><!-- /Contact Message -->
                                    </div><!-- /col-md-12 -->
                                    <!-- col-md-12 -->
                                    <div class="col-md-12">
                                        <!-- Submit Button -->
                                        <button type="submit" id="nesto-submit" class="btn btn-lg btn-nesto" onClick="ga('send', 'event', 'SendMessage', 'Click', 'submit');">
                                            <?php echo $sSend; php?>
                                        </button>
                                    </div><!-- /col-md-12 -->
                                    <!-- col-md-12 -->
                                    <div class="col-md-12">
                                        <!-- form-message -->
                                        <div class="form-message"></div>
                                    </div><!-- /col-md-12 -->
                                </form><!-- /form -->                                
                            </div><!-- /row -->
                        </div><!-- /col-md-12 -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div><!-- /contact-section -->

            <?php include( '\php\footer\footer.php' ); php?>
            
        </div><!-- /content-wrapper -->

<?php
// Close Cnn
$oConn->close();
php?>

        <!-- =========================================
        java script
        ========================================== -->
        <script type="text/javascript">
        	var profileTypes = [<?php echo $sProfileTypes; php?>];
        	var notificationActive = <?php echo $sBreakingNewsActive; php?>;
        	var breakingNews = "<?php echo $sBreakingNews; php?>"
        	var contact_Success = "<?php echo $sContact_Success; php?>";
        	var contact_Error = "<?php echo $sContact_Error; php?>";
        	var contact_InvalidName = "<?php echo $sContact_InvalidName; php?>";
        	var contact_InvalidEmail = "<?php echo $sContact_InvalidEmail; php?>";
        	var contact_InvalidEmail2 = "<?php echo $sContact_InvalidEmail2; php?>";
        	var contact_InvalidSubject = "<?php echo $sContact_InvalidSubject; php?>";
        	var contact_InvalidMessage = "<?php echo $sContact_InvalidMessage; php?>";
        </script>        
      
      	<?php include( '\php\footer\scripts.php' ); php?>
        
        <!-- =========================================
        java script for Sections scroll
        ========================================== -->
        <script type="text/javascript">    

        	var homeDone = 0;
        	var servicesDone = 0;
        	var skillsDone = 0;
        	var resumesDone = 0;
        	var widgetsDone = 0;
        	var testimonialsDone = 0
			var contactDone = 0;
			var footerDone = 0;

        	jQuery(window).bind('scroll', function() {

        		if (homeDone == 0) {
            	    if(jQuery(window).scrollTop() >= jQuery('#home-section').offset().top - window.innerHeight) {
            	    	ga('send', 'event', 'Home', 'ScrollTo', '');
            	        homeDone = 1;
            	    }            		
            	}  
        	});	
			
        	jQuery(window).bind('scroll', function() {

        		if (servicesDone == 0) {
            	    if(jQuery(window).scrollTop() >= jQuery('#services-section').offset().top - window.innerHeight) {
            	    	ga('send', 'event', 'Services', 'ScrollTo', '');
            	        servicesDone = 1;
            	    }            		
            	}  
        	});				

        	jQuery(window).bind('scroll', function() {

        		if (skillsDone == 0) {
            	    if(jQuery(window).scrollTop() >= jQuery('#skills-section').offset().top - window.innerHeight) {
            	    	jQuery('#skills-section').css('background-image', 'url(/images/background/skillsbg.jpg)');
            	    	ga('send', 'event', 'Skills', 'ScrollTo', '');
            	        skillsDone = 1;
            	    }            		
            	}  
        	});	
			
        	jQuery(window).bind('scroll', function() {

        		if (resumesDone == 0) {
            	    if(jQuery(window).scrollTop() >= jQuery('#resume-section').offset().top - window.innerHeight) {
            	    	ga('send', 'event', 'Resumes', 'ScrollTo', '');
            	        resumesDone = 1;
            	    }            		
            	}  
        	});			

        	jQuery(window).bind('scroll', function() {

        		if (widgetsDone == 0) {
            	    if(jQuery(window).scrollTop() >= jQuery('#numbers-section').offset().top - window.innerHeight) {
            	    	jQuery('#numbers-section').css('background-image', 'url(/images/background/numbersbg.jpg)');
            	    	ga('send', 'event', 'Widgets', 'ScrollTo', '');
            	        widgetsDone = 1;
            	    }            		
            	}  
        	});
			
        	jQuery(window).bind('scroll', function() {

        		if (testimonialsDone == 0) {
            	    if(jQuery(window).scrollTop() >= jQuery('#testimonials-section').offset().top - window.innerHeight) {
            	    	ga('send', 'event', 'Prices', 'ScrollTo', '');
            	        testimonialsDone = 1;
            	    }            		
            	}  
        	});
			
        	jQuery(window).bind('scroll', function() {

        		if (contactDone == 0) {
            	    if(jQuery(window).scrollTop() >= jQuery('#contact-section').offset().top - window.innerHeight) {
            	    	jQuery('#contact-section').css('background-image', 'url(/images/background/testimonialsbg.jpg)');
            	    	ga('send', 'event', 'Contact', 'ScrollTo', '');
            	        contactDone = 1;
            	    }            		
            	}  
        	});

        	jQuery(window).bind('scroll', function() {

        		if (footerDone == 0) {
            	    if(jQuery(window).scrollTop() >= jQuery('#footer-section').offset().top - window.innerHeight) {
            	    	ga('send', 'event', 'Footer', 'ScrollTo', '');
            	    	footerDone = 1;
            	    }            		
            	}  
        	});        	
        	
        </script>          
				
    </body><!-- /body -->
</html><!-- /html -->