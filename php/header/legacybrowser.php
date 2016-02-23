<?php
	// Get Lang
    $sLang = $_REQUEST['lang'];
    if (empty($sLang)) {
    	$sLang = 'fr';
    }

    // Translation
    if ($sLang == 'fr') {    	
    	$sBrowserHappy = 'Vous utilisez un navigateur obsolète. SVP <a href="http://browsehappy.com/" onClick="ga(\'send\', \'event\', \'browsehappy\', \'Click\', \'browsehappy\');">mettre à jour votre navigateur</a> pour améliorer votre expérience.';
    }
    else {
    	$sBrowserHappy = 'You are using an outdated browser. Please <a href="http://browsehappy.com/" onClick="ga(\'send\', \'event\', \'browsehappy\', \'Click\', \'browsehappy\');">upgrade your browser</a> to improve your experience.';
    }
php?>
        
        <!--[if lt IE 7]>
            <p class="browsehappy"><?php echo $sBrowserHappy; php?></p>
        <![endif]-->
