<?php
	// Get Lang
    $sLang = $_REQUEST['lang'];
    if (empty($sLang)) {
    	$sLang = 'fr';
    }

    // Translation
    if ($sLang == 'fr') {
    	
    	$sUrl = 'http://www.solutionsyannickthibault.com';
    	$sTitle = 'Solutions Yannick Thibault';    
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
    	$sUrl = 'http://www.solutionsyannickthibault.com/en';
    	$sTitle = 'Yannick Thibault Solutions'; 
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
    php?>

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
                                    <img class="lazy-load" src="/images/blank.png" data-src="/images/logo.png" alt="<?php echo $sAltLogo; php?>" />
                                </a><!-- /logo -->
	                        </div><!-- /footer-logo -->
	                        
	                       <p class="quickcontact wow fadeIn" data-wow-duration="1.5s">
                           		<strong><?php echo $sPhone; php?></strong>514-250-7010<br/>
                           		<strong><?php echo $sEmail; php?></strong><a title="<?php echo $sEmail; php?>" href="mailto:contact@solutionsyannickthibault.com" target="_blank" onClick="ga('send', 'event', 'Email', 'Click', 'footer-section');">contact@solutionsyannickthibault.com</a>
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