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
    	$sUrl2 = 'http://www.solutionsyannickthibault.com/en/legal/privacy-policy';
    	$sTitle = 'Solutions Yannick Thibault';
    	$sShortTitle = 'Yannick Thibault';
    	$sHome = 'Accueil';
    	$sServices = 'Services';
    	$sSkills = 'Compétences';
    	$sResume = 'CV';
    	$sContact = 'Contact';
    	$sFollowMe = 'Me suivre';
    	$sAltLogo = 'Logo';
		$dNowCopyrights = new DateTime();
		$sYearCopyrights = $dNowCopyrights->format("Y");
		$sCopyrights = '&copy; '.$sYearCopyrights.' <a href="'.$sUrl.'" title="Solutions Yannick Thibault" target="_self" onClick="ga(\'send\', \'event\', \'Copyrights\', \'Click\', \'Copyrights\');">Solutions Yannick Thibault</a>, tous droits réservés.';
    	$sPhone = 'Téléphone: ';
    	$sEmail = 'Courriel: ';
    	$sTerms = 'Conditions d\'utilisation';
    	$sTermsUrl = 'http://www.solutionsyannickthibault.com/juridique/termes-conditions';
    	$sPrivacy = 'Politique de confidentialité';
    	$sPrivacyUrl = 'http://www.solutionsyannickthibault.com/juridique/politique-vie-privee';    	
    }
    else {
    	$sSwitchLang = 'Français';
    	$sUrl = 'http://www.solutionsyannickthibault.com/en';
    	$sUrl2 = 'http://www.solutionsyannickthibault.com/juridique/politique-vie-privee';
    	$sTitle = 'Yannick Thibault Solutions';
    	$sShortTitle = 'Yannick Thibault';  	
    	$sHome = 'Home';
    	$sServices = 'Services';
    	$sSkills = 'Skills';
    	$sResume = 'Resume';
    	$sContact = 'Contact';
    	$sFollowMe = 'Follow me';
    	$sAltLogo = 'Logo';
    	$dNowCopyrights = new DateTime();
    	$sYearCopyrights = $dNowCopyrights->format("Y");
    	$sCopyrights = '&copy; '.$sYearCopyrights.' <a href="'.$sUrl.'" title="Yannick Thibault Solutions" target="_self" onClick="ga(\'send\', \'event\', \'Copyrights\', \'Click\', \'Copyrights\');">Yannick Thibault Solutions</a>, all rights reserved.';
    	$sPhone = 'Phone: ';
    	$sEmail = 'Email: ';  
    	$sTerms = 'Terms of use';
    	$sTermsUrl = 'http://www.solutionsyannickthibault.com/en/legal/terms-conditions';
    	$sPrivacy = 'Privacy policy';
    	$sPrivacyUrl = 'http://www.solutionsyannickthibault.com/en/legal/privacy-policy';    	
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
		<?php include( '..\php\header\head.php' ); php?>
    </head><!-- /head -->

    <!-- =========================================
    body
    ========================================== -->
    <body class="main-page dark-version">
    
        <?php include( '..\php\header\legacybrowser.php' ); php?>
        <?php include( '..\php\header\loader.php' ); php?>

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
            <div id="legal-section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- col-md-12 -->
                        <div class="col-md-12">   
<?php 
// Translation
if ($sLang == 'fr') {
	echo '
                        	<h6><strong><u>POLITIQUE DE VIE PRIVÉE ET DE CONFIDENTIALITÉ</u></strong></h6>
                        	<p>Solutions Yannick Thibault respecte et protège la confidentialité des internautes qui visitent ce site Web. La présente politique vise à informer le visiteur des principes qui réglementent la collecte, l\'utilisation, la protection et la divulgation des informations qu\'il peut être appelé à fournir en naviguant ce site Web.</p>
                        	<p>La présente politique s\'applique à toute personne qui visite ce site Web.</p>
                        	
                        	<h6><strong><u>INFORMATION PERSONNELLE</u></strong></h6>
                        	<p>Aucune information à caractère personnel ou nominatif, notamment le nom, l\'adresse, le numéro de téléphone ou l\'adresse courriel d\'un visiteur (ci-après collectivement désignés les « Informations Personnelles »), ne sera recueillie, utilisée ou divulguée par Solutions Yannick Thibault sans le consentement expresse du visiteur de ce site Web.</p>
                        	<p>Afin d\'offrir certains services sur ce site Web, il se peut que  Solutions Yannick Thibault demande à ses visiteurs de soumettre volontairement des Informations Personnelles. Ces Informations Personnelles seront recueillies, utilisées et le cas échéant divulguées, uniquement aux fins et pour les raisons spécifiées par Solutions Yannick Thibault au moment de la collecte de celles-ci. Le visiteur doit toujours signifier son consentement en cliquant sur un bouton avec la mention « j\'accepte ». Dans tous les cas, les Informations Personnelles ne sont conservées par Solutions Yannick Thibault que pour la durée nécessaire à la réalisation des fins précisées au moment de la collecte.</p>
                        	<p>Solutions Yannick Thibault peut également utiliser des Informations Personnelles afin de communiquer avec ses visiteurs. Si le visiteur ne désire plus recevoir ces communications, il peut en tout temps faire parvenir un courriel à contact@solutionsyannickthibault.com et demander à Solutions Yannick Thibault de le retirer de sa liste de diffusion et autres bases de données.</p>
                        	<p>Le visiteur peut à tout moment écrire à contact@solutionsyannickthibault.com et demander à Solutions Yannick Thibault de modifier, supprimer ou mettre à jour les Informations Personnelles qui le concernent. </p>
                        	<p>Les visiteurs sont responsables des informations qu\'ils soumettent volontairement dans les espaces de clavardage (chat rooms) ou sur les babillards électroniques. Solutions Yannick Thibault invite ses visiteurs à la prudence puisque ces espaces sont publics et accessibles à tous. Ainsi, Solutions Yannick Thibault ne peut aucunement garantir la sécurité des informations divulguées par un visiteur dans ces espaces publics.</p>
                        	
                        	<h6><strong><u>INFORMATION ANONYME ET NON PERSONNELLE</u></strong></h6>
                        	<p>Lorsqu\'un visiteur consulte ce site Web, certaines informations anonymes et non personnelles peuvent être recueillies. À l\'exclusion de toute information à caractère personnel ou nominatif relative aux visiteurs, ces informations peuvent notamment inclure le navigateur Web et le système d\'exploitation qu\'utilise un visiteur, le nombre de visites, le nombre de pages Web consultées, la durée des visites et la provenance du visiteur.</p>
                        	<p>Solutions Yannick Thibault utilise ces informations à des fins de statistiques seulement et afin d\'adapter ce site Web aux besoins de ses visiteurs. Solutions Yannick Thibault peut divulguer ces informations anonymes et non personnelles à des tierces parties, comme par exemples, des partenaires ou des commanditaires</p>
                        	
                        	<h6><strong><u>FICHIERS TÉMOINS (COOKIES)</u></strong></h6>
                        	<p>Il est possible que Solutions Yannick Thibault utilise des fichiers témoins (cookies) sur ce site Web. Ces fichiers témoins permettent d\'adapter le contenu du site Web aux habitudes de navigation du visiteur. Les fichiers témoins ne révèlent aucune Information Personnelle sur le visiteur.</p>
    						<p>Le visiteur peut refuser ou désactiver les fichiers témoins en modifiant les paramètres de configuration son votre navigateur Web.</p>
                        	
                        	<h6><strong><u>PROTECTION DES INFORMATIONS PERSONNELLES></u></strong></h6>
                        	<p>La sécurité des Informations Personnelles recueillies sur ce site Web est assurée au moyen de mesures technologiques et de politiques administratives mises en place par Solutions Yannick Thibault. L\'Information Personnelle située sur les serveurs de Solutions Yannick Thibault est protégée par coupe-feu et l\'accès à celle-ci est limité au personnel autorisé disposant des codes d\'accès appropriés.</p>
                        	
                        	<h6><strong><u>AUTRES SITES WEB</u></strong></h6>
                        	<p>Ce site web contient des hyperliens menant vers des sites Web opérés ou appartenant à des tiers et disposant de leurs propres politiques en matière de vie privée et de confidentialité des données à caractère personnel. Solutions Yannick Thibault n\'offre aucune garantie quant à ces sites Web et ne peut en aucun cas être tenu responsable de leurs activités, de leurs procédures et de leurs politiques.</p>
                        	
                        	<h6><strong><u>RESPONSABILITÉ</u></strong></h6>
                        	<p>La présente politique de vie privée et de confidentialité constitue la totalité de l\'accord passé entre toute personne qui visite ce site Web et Solutions Yannick Thibault. Toute personne qui n\'accepte pas une ou plusieurs dispositions de la présente politique est priée de s\'abstenir d\'accéder à ce site Web.</p>
                        	<p>Pour toute question, plainte ou commentaire concernant cette politique ou le traitement de vos Informations Personnelles, n\'hésitez par à communiquer avec Solutions Yannick Thibault par courriel à contact@solutionsyannickthibault.ca, par téléphone au (514) 250-7010 ou par écrit à 102-1212 boul. de la Mairie, Saint-Jean-sur-Richelieu, Québec, Canada, J2W 2R5.</p>
    		
                        	<h6><strong><u>JURIDICTION </u></strong></h6>
                        	<p>La présente politique et la relation entre le visiteur et Solutions Yannick Thibault sont régies par les lois de la Province du Québec, Canada. Les parties conviennent d\'élire domicile dans le district judiciaire de Saint-Jean-sur-Richelieu, Province de Québec, Canada et choisissent celui-ci comme le district approprié pour l\'audition de toute réclamation découlant de l\'interprétation, l\'application, l\'accomplissement, l\'entrée en vigueur, la validité et les effets de la présente politique.</p>    		
';
}
else {
	echo '
                        	<h6><strong><u>WEBSITE PRIVACY POLICY</u></strong></h6>
                        	<p>Solutions Yannick Thibault is committed to respecting the privacy concerns of its visitors to www.strangerthanfiction.com (“the Website”).  Solutions Yannick Thibault has created this privacy policy (the “Policy”) to establish guidelines that will govern the collection, use, protection and disclosure of the personal and non-personal information of its visitors.</p>
        		
                        	<h6><strong><u>PERSONAL INFORMATION</u></strong></h6>
                        	<p>Solutions Yannick Thibault does not automatically collect personal information, such as name, address, phone number, email address and other personally identifiable information, from its visitors (“Personal Information”). From time to time, Solutions Yannick Thibault will collect Personal Information that is voluntarily provided by its visitors in filling out contest entry forms and subscribing to newsletters and other activities carried out on the Website.  Solutions Yannick Thibault will only collect and use such Personal Information solely for the purpose(s) disclosed by Solutions Yannick Thibault at the time of collection and only after the visitor has voluntarily agreed to such collection and use, by clicking “I agree” on the online form or in writing if entering via faxed or mailed form.  Solutions Yannick Thibault also sometimes use email addresses that have been voluntarily provided by its visitors to respond to visitors who communicate with us, to inform winners of contests or to subscribe to newsletters.  All emails from Solutions Yannick Thibault to its visitors include instructions on how to discontinue receipt of emails, newsletters and other communication from Solutions Yannick Thibault and visitors can discontinue such communication at any time.  Email addresses from visitors who wish to discontinue receipt of Solutions Yannick Thibault\'s emails will be removed from Solutions Yannick Thibault\'s distribution list and data bases.  All Personal Information that may identify a visitor and has been collected with the visitor\'s consent by Solutions Yannick Thibault is not disclosed in any identifiable form to any other party outside the company except for the fulfillment of the specific purpose identified to the visitor at the time of collection.  However Solutions Yannick Thibault may disclose such information in anonymous, aggregated and non-personally identifiable form to other parties for marketing, advertising or other purposes and to better understand visitor\'s use of the Website.  At any time, a visitor may send an email to contact@solutionsyannickthibault.com to request that Personal Information be changed, removed or updated in Solutions Yannick Thibault\'s databases.</p>
        					<p>Visitors should exercise caution when they disclosed personally identifiable information on bulletin boards or chat rooms on this Website or any other website.  Such areas are accessible by anyone and may result in the visitor receiving unsolicited messages from other people and/or companies.  Although Solutions Yannick Thibault is committed to protecting the Personal Information provided to it by its visitors in compliance with this Privacy Policy, it cannot guarantee the security of information, whether personal or otherwise, that visitors disclose online to publicly accessible bulletin boards or chat rooms.</p>
        		
                        	<h6><strong><u>ANONYMOUS NON-PERSONAL INFORMATION</u></strong></h6>
                        	<p>When visitors visit the Website, anonymous, non personal information about their visit is automatically collected.  Such information may include the length and date of the visit, how the visitor navigated the Website, what pages the visitor viewed, the type of browser being used by the visitor, the type of operating system used by the visitor and the domain name of the visitor\'s Internet service provider.  Solutions Yannick Thibault uses this Anonymous Non-Personal Information to track the success of its Website with its visitors and to better tailor the Website to visitors\' needs and interests.  This Anonymous Non-Personal Information may be shared with other parties, such as broadcasters, advertisers, sponsors and partners.</p>
        		
                        	<h6><strong><u>COOKIE-BASED INFORMATION</u></strong></h6>
                        	<p>Solutions Yannick Thibault may use cookies on its Website.  “Cookies” are pieces of information that a website transfers to a visitor\'s hard drive for record keeping and identification purposes.  Cookies are used to make the visitor\'s use of a website easier by saving visitor preferences and passwords and to identify which areas of the Website are popular and which areas need improvement and how to target certain advertising to its visitors.  Solutions Yannick Thibault does not use cookies to collect personally identifiable information except in connection with a password protected online registration for a contest or newsletter or other service and only with the visitor\'s informed consent.  Visitors may visit the Website with its cookies turned off to avoid the collection of Cookiebased Information.</p>
        		
                        	<h6><strong><u>PROTECTION OF VISITORS\' PERSONAL INFORMATION</u></strong></h6>
                        	<p>Solutions Yannick Thibault protects the Personal Information it collects with appropriate technological, physical and administrative safeguards to protect if from unauthorized disclosure or use.  Access to Personal Information collected by Solutions Yannick Thibault is limited to authorized individuals and stored on its databases, which are protected by firewalls and are password-secured.  Solutions Yannick Thibault retains the Personal Information only for as long as is required for the purposes identified at the time of its collection and consented to by the visitor providing it or as otherwise required by law.  Once Personal Information is no longer necessary for the purposes consented to by the visitor, it is Solutions Yannick Thibault\'s practice to delete it from its data bases or systems or make it anonymous.</p>
        		
                        	<h6><strong><u>LINKED WEBSITES</u></strong></h6>
                        	<p>This Website may be linked to other websites. These linked websites are not under the control of Solutions Yannick Thibault and are required to have their own privacy policies.  Visitors should ensure that they read and understand how their Personal Information may be collected, used, and disclosed by the linked websites as Solutions Yannick Thibault is not responsible for and shall not be held liable for any procedures, policies or activities of any websites linked to the Website.</p>
        		
                        	<h6><strong><u>VISITOR\'S CONSENT TO PRIVACY POLICY</u></strong></h6>
                        	<p>By visiting and using this website, the visitor agrees to the Privacy Policy and the terms of use (“Terms of Use”) linked to this Privacy Policy.  If you do not agree to the Privacy Policy do not use this Website or provide Personal Information to Solutions Yannick Thibault.  If you wish to amend, update or remove the Personal Information already provided, contact contact@solutionsyannickthibault.com.</p>
        		
                        	<h6><strong><u>ACCOUNTABILITY</u></strong></h6>
                        	<p>Solutions Yannick Thibault takes its commitment to securing privacy very seriously.  From time to time, Solutions Yannick Thibault may amend or update this Privacy Policy to comply with visitor concerns, best practices and/or the law.  Solutions Yannick Thibault has appointed a member of its management team to act as Solutions Yannick Thibault\'s Privacy Officer and who is responsible for reviewing, approving and administering this Privacy Policy and Solutions Yannick Thibault\'s commitments hereunder.  If you have any questions, concerns or comments, feel free to contact the Privacy Officer at contatc@solutionsyannickthibault.com or by telephone at (514) 250-7010 or in writing at: 102-1212 boul. de la Mairie, Saint-Jean-sur-Richelieu, Québec, Canada, J2W 2R5.</p>
        		
                        	<h6><strong><u>JURISDICTION</u></strong></h6>
                        	<p>This Website is owned and controlled by Solutions Yannick Thibault, a company whose head office is located in the city of Saint-Jean-sur-Richelieu.  This Website is presented solely for informational, educational and entertainment purposes to visitors located in Canada.  Neither Solutions Yannick Thibault nor its affiliated or related entities make any representation, express or implied, that this Website will be available for use in or comply with the law of any country other than Canada.  By using this Website, you agree that these Website Terms of Use and Privacy Policy shall be governed, construed and enforced in accordance with the laws of the province of Québec as it is applied to contracts entered into and performed entirely within such province and you submit to the jurisdiction of the courts of such province.</p>
';	
}
php?>
                        </div>
                    </div><!-- /row -->
                </div><!-- /container -->
            </div><!-- /services-section -->                        
    
            <?php include( '..\php\footer\footer.php' ); php?>
            
        </div><!-- /content-wrapper -->    
    
        <!-- =========================================
        java script
        ========================================== -->   
        <script type="text/javascript">
        	var profileTypes = [<?php echo $sProfileTypes; php?>];
        	var notificationActive = <?php echo $sBreakingNewsActive; php?>;
        	var breakingNews = "<?php echo $sBreakingNews; php?>"
        </script>             
        <?php include( '..\php\footer\scripts.php' ); php?>        
    </body><!-- /body -->
</html><!-- /html -->    