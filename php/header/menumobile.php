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
php?>

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
                                    <a href="<?php echo $sUrl; php?>/#home-section" title="<?php echo $sHome; php?>" data-scroll onClick="ga('send', 'event', 'Home', 'Click', 'mobile-menu');">
                                        <?php echo $sHome; php?>
                                    </a>
                                </li>
                                <!-- /Home -->
                                <!-- Services -->
                                <li>
                                    <a href="<?php echo $sUrl; php?>/#services-section" title="<?php echo $sServices; php?>" data-scroll onClick="ga('send', 'event', 'Services', 'Click', 'mobile-menu');">
                                        <?php echo $sServices; php?>
                                    </a>
                                </li>
                                <!-- /Services -->
                                <!-- Skills -->
                                <li>
                                    <a href="<?php echo $sUrl; php?>/#skills-section" title="<?php echo $sSkills; php?>" data-scroll onClick="ga('send', 'event', 'Skills', 'Click', 'mobile-menu');">
                                        <?php echo $sSkills; php?>
                                    </a>
                                </li>
                                <!-- /Skills -->
                                <!-- Resume -->
                                <li>
                                    <a href="<?php echo $sUrl; php?>/#resume-section" title="<?php echo $sResume; php?>" data-scroll onClick="ga('send', 'event', 'Resumes', 'Click', 'mobile-menu');">
                                        <?php echo $sResume; php?>
                                    </a>
                                </li>
                                <!-- /Resume -->
                                <!-- Contact -->
                                <li>
                                    <a href="<?php echo $sUrl; php?>/#contact-section" title="<?php echo $sContact; php?>" data-scroll onClick="ga('send', 'event', 'Contact', 'Click', 'mobile-menu');">
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
                    	<img class="lazy-load" src="/..//images/logo.png" alt="<?php echo $sAltLogo; php?>" />
                    </a><!-- /logo -->
                </div><!-- /profile-container -->
            </div><!-- /profile-wrapper -->
        </div><!-- /top-content -->