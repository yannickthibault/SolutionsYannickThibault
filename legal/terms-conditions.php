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
    		die("La connexion a �chou�: ".$oConn->connect_error);
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
    	$sUrl2 = 'http://www.solutionsyannickthibault.com/en/legal/terms-conditions';
    	$sTitle = 'Solutions Yannick Thibault';
    	$sShortTitle = 'Yannick Thibault';
    	$sHome = 'Accueil';
    	$sServices = 'Services';
    	$sSkills = 'Comp�tences';
    	$sResume = 'CV';
    	$sContact = 'Contact';
    	$sFollowMe = 'Me suivre';
    	$sAltLogo = 'Logo';
		$dNowCopyrights = new DateTime();
		$sYearCopyrights = $dNowCopyrights->format("Y");
		$sCopyrights = '&copy; '.$sYearCopyrights.' <a href="'.$sUrl.'" title="Solutions Yannick Thibault" target="_self" onClick="ga(\'send\', \'event\', \'Copyrights\', \'Click\', \'Copyrights\');">Solutions Yannick Thibault</a>, tous droits r�serv�s.';
    	$sPhone = 'T�l�phone: ';
    	$sEmail = 'Courriel: ';
    	$sTerms = 'Conditions d\'utilisation';
    	$sTermsUrl = 'http://www.solutionsyannickthibault.com/juridique/termes-conditions';
    	$sPrivacy = 'Politique de confidentialit�';
    	$sPrivacyUrl = 'http://www.solutionsyannickthibault.com/juridique/politique-vie-privee';    	
    }
    else {
    	$sSwitchLang = 'Fran�ais';
    	$sUrl = 'http://www.solutionsyannickthibault.com/en';
    	$sUrl2 = 'http://www.solutionsyannickthibault.com/juridique/termes-conditions';
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
            <div id="services-section">
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
                        	<h6><strong><u>POLITIQUE D\'UTILISATION DU SITE WEB</u></strong></h6>
                        	<p>La pr�sente politique a pour objet d\'�tablir les conditions d\'utilisation de ce site Web et � assurer une utilisation ad�quate du contenu qui y est diffus� et des services qui y sont offerts. Elle vise �galement � �tablir un comportement individuel et collectif conforme aux exigences de Solutions Yannick Thibault, � celles de ses partenaires et � la l�gislation applicable.</p>      
    						<p>La pr�sente politique s\'applique � toute personne qui visite ce site Web.</p>  
    		
                        	<h6><strong><u>PROPRI�T� INTELLECTUELLE</u></strong></h6>
                        	<p>L\'ensemble du contenu diffus� sur ce site Web incluant, mais sans limiter la g�n�ralit� de ce qui pr�c�de, les textes, les photographies, les illustrations, les graphiques, les logos, les noms, les extraits audio ou vid�o (ci-apr�s d�sign�s le � Contenu �), est prot�g� par les lois nationales et internationales en mati�re de protection de propri�t� intellectuelle et notamment en mati�re de droit d\'auteur. Tous les droits, titres et int�r�ts sur le Contenu appartiennent � Solutions Yannick Thibault ou � ses conc�dants de licences. Toute copie, nouvelle publication, reproduction, distribution, diffusion, mise � la disposition du public, modification totale ou partielle sont strictement interdites. Toute autre utilisation du contenu diffus� sur ce site Web sans l\'autorisation �crite au pr�alable de Solutions Yannick Thibault ou de ses conc�dants de licences pourrait exposer le contrevenant � des sanctions l�gales.</p>
                        	<p>De plus, toute utilisation des marques de commerce et des logos apparaissant sur ce site Web est soumise � l\'autorisation �crite au pr�alable de Solutions Yannick Thibault ou de ses conc�dants de licences, sous peine de sanctions l�gales.</p> 
                        	<p>Pour de plus amples renseignements, nous vous prions de communiquer avec nous par �crit � contact@solutionsyannickthibault.com.</p> 
    		
                        	<h6><strong><u>LIMITATIONS G�N�RALES DE RESPONSABILIT�</u></strong></h6>
                        	<p>Malgr� tous les efforts d�ploy�s pour vous fournir un contenu de qualit� dans l\'ensemble de ce site Web, il se peut que certaines inexactitudes ou erreurs typographiques se produisent. Solutions Yannick Thibault et ses partenaires ne pourraient en aucun cas �tre tenus responsables de ces erreurs.</p>   
                        	<p>� moins de stipulations contraires, les articles, les critiques ou les autres textes soumis par un visiteur (ci-apr�s d�sign�s � Mat�riel Soumis �) et diffus� sur ce site Web refl�tent uniquement les opinions personnelles de leurs auteurs ne sont pas partag�es par Solutions Yannick Thibault ou ses partenaires. Solutions Yannick Thibault et ses partenaires ne peuvent en aucun cas �tre tenus responsables du Contenu ou du Mat�riel Soumis diffus� sur ce site Web.</p>  
                        	<p>Ce site web contient des hyperliens menant vers des sites Web op�r�s ou appartenant � des tiers. Solutions Yannick Thibault et ses partenaires ne font aucune garantie quant � ces sites Web et ne peuvent en aucun cas �tre tenus responsables du contenu diffus� ou des services qui y sont offerts.</p>  
                        	<p>Solutions Yannick Thibault et ses partenaires se r�servent le droit de modifier le contenu de ce site Web ou d\'en interrompre l\'acc�s, � leur discr�tion et sans pr�avis, y compris le droit de cesser toute activit� sur ce site Web avec ou sans pr�avis, sans encourir de responsabilit� vis-�-vis du visiteur.</p>  
                        	<p>Ce site Web, le contenu et les services qui y sont offerts sont fournis � tel quel � et � tel que disponibles �.  Solutions Yannick Thibault et ses partenaires ne font  aucune repr�sentation et n\'offrent aucune garantie expresse ou implicite quant au fonctionnement de ce site Web ou aux services qui y sont offerts.</p>      		
    		
                        	<h6><strong><u>MAT�RIEL SOUMIS</u></strong></h6>
                        	<p>Tout Mat�riel Soumis par le biais de ce site Web devient la propri�t� exclusive de Solutions Yannick Thibault et pourra �tre utilis� par Solutions Yannick Thibault sous toute forme et dans tous les m�dias connus et inconnus � ce jour sans limite de temps ni de territoire.</p>   
                        	<p>Vous nous garantissez que vous d�tenez tous les droits, titres et int�r�ts sur le Mat�riel Soumis dont, le cas �ch�ant, les droits n�cessaires obtenus de tierces parties, et que le Mat�riel Soumis ne viole aucun droit de propri�t� intellectuelle, de propri�t� ou tout autre droit de tierces parties, n\'est pas contraire � la loi et ne contient aucun mat�riel diffamatoire. En cons�quence de ce qui pr�c�de, vous vous engagez � prendre fait et cause et � indemniser Solutions Yannick Thibault et ses partenaires pour tous dommages, d�penses, frais et co�ts raisonnables encourus ou subis par eux � la suite de toute poursuite intent�e par un tiers en raison de la non-conformit� � l\'une ou l\'autre des d�clarations et garanties qui pr�c�dent ou � la violation des termes de la politique d\'utilisation de ce site Web.</p>   
                        	<p>Solutions Yannick Thibault surveille le Mat�riel Soumis diffus� sur ce site Web et peut, � sa seule discr�tion, retirer tout �l�ment qu\'il consid�re attentatoire aux droits de tiers ou contraire � la loi et bloquer l\'acc�s � ce site Web � un visiteur. </p>      		
    		
                        	<h6><strong><u>JURIDICTION</u></strong></h6>
                        	<p>La politique d\'utilisation de ce site Web et la relation entre le visiteur et Solutions Yannick Thibault sont r�gies par les lois de la Province du Qu�bec, Canada. Les parties conviennent d\'�lire domicile dans le district judiciaire de Saint-Jean-sur-Richelieu, Province de Qu�bec, Canada et choisissent celui-ci comme le district appropri� pour l\'audition de toute r�clamation d�coulant de l\'interpr�tation, l\'application, l\'accomplissement, l\'entr�e en vigueur, la validit� et les effets de la pr�sente politique d\'utilisation.</p>       		
';
}
else {
	echo '
                        	<h6><strong><u>WEBSITE TERS OF USE</u></strong></h6>
                        	<p>Welcome to www.solutionsyannickthibault.com (the �Website�) owned and operated by Solutions Yannick Thibault.  Please read these Terms of Use and the accompanying Privacy Policy carefully before using this Website and/or submitting any personal information that could identify you (including but not limited to name, address, telephone number and email address).  By using this Website, you signify your agreement to these Terms of Use and the Privacy Policy.  If you do not agree to these Terms of Use and/or the Privacy Policy, do not use this Website.</p>    
    		
                        	<h6><strong><u>COPYRIGHT AND TRADEMARKS</u></strong></h6>
                        	<p>All materials, including but not limited to images, audio and video clips, animation, diagrams, photographs and any and all information of any kind in any form (the �Materials�), incorporated into, published or otherwise exhibited on this Website are protected by copyright or other intellectual property rights and are owned and controlled by Solutions Yannick Thibault or third parties who have licensed Solutions Yannick Thibault the right to include the Materials in this Website.  Any copying, reproducing, republishing, uploading, posting, modifying or transmission or distribution of any Materials is strictly prohibited and will be considered a violation of Solutions Yannick Thibault\'s intellectual property rights and could result in legal liability and/or criminal sanction.</p>   
    			
                        	<h6><strong><u>DISCLAIMER</u></strong></h6>
                        	<p>The Material provided on this Website are for informational, educational and/or entertainment purposes only.  Solutions Yannick Thibault makes no warranties regarding the reliability, truthfulness, accuracy or completeness of any Materials.  Unless otherwise stated expressly, any opinion, view or idea expressed in any article, review or story, or any content contributed or published by visitors in chat rooms or on bulletin boards or otherwise disseminated or sent to Solutions Yannick Thibault or others on or via this Website (�Visitor Content�) is the author\'s own and does not reflect the views of Solutions Yannick Thibault or its affiliated and related entities, or its partners, sponsors, advertisers or content providers. Neither Solutions Yannick Thibault, its affiliated and related entities, partners, advertisers, sponsors or content providers are liable to any person or entity whatsoever for any loss, damage, injury, liability, claim or any other cause of action of any kind arising from the use, dissemination of or reliance on any Materials or Visitor Content provided on this Website.  You agree to use this Website entirely at your own risk.  Solutions Yannick Thibault and its affiliated and related entities, its partners, advertisers, sponsors and content providers disclaim all warranties, express or implied, including but not limited to implied warranties of merchantability and/or fitness for a particular purpose or that the Website will function error free or uninterrupted or that this Website or the servers that make it available for use are free of viruses or defects.  Solutions Yannick Thibault and its affiliated and related entities, its partners, advertisers, sponsors and content providers shall not be held liable for any information, services or products that are provided or offered by websites that are linked to this Website.  The links to other websites are provided only as a convenience to you and do not constitute any endorsement of the linked websites or any information, services or products that are provided or offered by the linked websites.  You agree that you use any linked websites entirely at your own risk.</p>   

                        	<h6><strong><u>VISITOR CONTENT AND INDEMNIFICATION</u></strong></h6>
                        	<p>Any Visitor Content provided by you to Solutions Yannick Thibault on its billboards, chat rooms or other means shall become the property of Solutions Yannick Thibault throughout the universe in perpetuity and Solutions Yannick Thibault shall have the right to publish, reproduce, disseminate, exhibit or otherwise distribute and use the Visitor Content in all media now known or hereafter devised.  By submitting Visitor Content to the Website, you agree to represent and warrant that such Visitor Content shall not contain any libelous, defamatory, obscene, illegal, threatening or abusive materials and shall not infringe any intellectual property right or any other right of any person or entity and shall not breach any law. By visiting and using this Website, you signify your agreement to save Solutions Yannick Thibault, it\'s affiliated and related entities, its officers, directors and employees harmless from any and all damages, legal actions or causes of action that may now or hereinafter arise as a result of your use of the Website and your breach of these Terms of Use and/or any representations and warranties related to the Visitor Content. Solutions Yannick Thibault monitors the use of its billboards, chat rooms and any posted materials and reserves the right to remove any Visitor Content and block access to any visitor for any reason at its sole discretion.</p>       			
    		
                        	<h6><strong><u>JURISDICTION</u></strong></h6>
                        	<p>This Website is owned and controlled by Solutions Yannick Thibault, a company whose head office is located in the city of Saint-Jean-sur-Richelieu.  This Website is presented solely for informational, educational and entertainment purposes to visitors located in Canada.  Neither Solutions Yannick Thibault nor its affiliated or related entities make any representation, express or implied, that this Website will be available for use in or comply with the law of any country other than Canada.  By using this Website, you agree that these Website Terms of Use and Privacy Policy shall be governed, construed and enforced in accordance with the laws of the province of Qu�bec as it is applied to contracts entered into and performed entirely within such province and you submit to the jurisdiction of the courts of such province.</p>    		
';	
}
php?>
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
                                <?php echo $sCopyrights; php?> | <a href="<?php echo $sTermsUrl; php?>" title="<?php echo $sTerms; php?>" target="_blank" onClick="ga('send', 'event', 'terms-conditions', 'Click', 'footer-section');"><?php echo $sTerms; php?></a> | <a href="<?php echo $sPrivacyUrl; php?>" title="<?php echo $sPrivacy; php?>" target="_blank" onClick="ga('send', 'event', 'privacy-policy', 'Click', 'footer-section');"><?php echo $sPrivacy; php?></a>
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