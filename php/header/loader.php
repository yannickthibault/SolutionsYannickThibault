<?php
    // Translation
    if ($sLang == 'fr') {    	
    	$sAltLoader = 'Charger';
    }
    else {
    	$sAltLoader = 'Loader';
    }
php?>

        <!-- =========================================
        Loader
        ========================================== -->
        <!-- loader -->
        <div id="loader">
            <!-- loader-container -->
            <div id="loader-container">
                <img src="/images/loader.gif" alt="<?php echo $sAltLoader; php?>" />
            </div><!-- /loader-container -->
        </div><!-- /loader -->