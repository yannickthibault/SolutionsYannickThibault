<?php
	include_once( '..\php\header\globalvariables.php' );
        
    $sBreakingNews = '';
    $sBreakingNewsActive = 'false';
    
    // Translation
    if ($sLang == 'fr') {
    	$sUrl2 = 'http://www.solutionsyannickthibault.com/en/legal/terms-conditions'; 	
    }
    else {
    	$sUrl2 = 'http://www.solutionsyannickthibault.com/juridique/termes-conditions'; 	
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
        <?php include( '..\php\header\menumobile.php' ); php?>

        <!-- =========================================
        Content
        ========================================== -->
        <!-- content-wrapper -->
        <div id="content-wrapper">
        
            <?php include( '..\php\header\menu.php' ); php?>  
    
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
                        	<p>La présente politique a pour objet d\'établir les conditions d\'utilisation de ce site Web et à assurer une utilisation adéquate du contenu qui y est diffusé et des services qui y sont offerts. Elle vise également à établir un comportement individuel et collectif conforme aux exigences de Solutions Yannick Thibault, à celles de ses partenaires et à la législation applicable.</p>      
    						<p>La présente politique s\'applique à toute personne qui visite ce site Web.</p>  
    		
                        	<h6><strong><u>PROPRIÉTÉ INTELLECTUELLE</u></strong></h6>
                        	<p>L\'ensemble du contenu diffusé sur ce site Web incluant, mais sans limiter la généralité de ce qui précède, les textes, les photographies, les illustrations, les graphiques, les logos, les noms, les extraits audio ou vidéo (ci-après désignés le « Contenu »), est protégé par les lois nationales et internationales en matière de protection de propriété intellectuelle et notamment en matière de droit d\'auteur. Tous les droits, titres et intérêts sur le Contenu appartiennent à Solutions Yannick Thibault ou à ses concédants de licences. Toute copie, nouvelle publication, reproduction, distribution, diffusion, mise à la disposition du public, modification totale ou partielle sont strictement interdites. Toute autre utilisation du contenu diffusé sur ce site Web sans l\'autorisation écrite au préalable de Solutions Yannick Thibault ou de ses concédants de licences pourrait exposer le contrevenant à des sanctions légales.</p>
                        	<p>De plus, toute utilisation des marques de commerce et des logos apparaissant sur ce site Web est soumise à l\'autorisation écrite au préalable de Solutions Yannick Thibault ou de ses concédants de licences, sous peine de sanctions légales.</p> 
                        	<p>Pour de plus amples renseignements, nous vous prions de communiquer avec nous par écrit à contact@solutionsyannickthibault.com.</p> 
    		
                        	<h6><strong><u>LIMITATIONS GÉNÉRALES DE RESPONSABILITÉ</u></strong></h6>
                        	<p>Malgré tous les efforts déployés pour vous fournir un contenu de qualité dans l\'ensemble de ce site Web, il se peut que certaines inexactitudes ou erreurs typographiques se produisent. Solutions Yannick Thibault et ses partenaires ne pourraient en aucun cas être tenus responsables de ces erreurs.</p>   
                        	<p>À moins de stipulations contraires, les articles, les critiques ou les autres textes soumis par un visiteur (ci-après désignés « Matériel Soumis ») et diffusé sur ce site Web reflètent uniquement les opinions personnelles de leurs auteurs ne sont pas partagées par Solutions Yannick Thibault ou ses partenaires. Solutions Yannick Thibault et ses partenaires ne peuvent en aucun cas être tenus responsables du Contenu ou du Matériel Soumis diffusé sur ce site Web.</p>  
                        	<p>Ce site web contient des hyperliens menant vers des sites Web opérés ou appartenant à des tiers. Solutions Yannick Thibault et ses partenaires ne font aucune garantie quant à ces sites Web et ne peuvent en aucun cas être tenus responsables du contenu diffusé ou des services qui y sont offerts.</p>  
                        	<p>Solutions Yannick Thibault et ses partenaires se réservent le droit de modifier le contenu de ce site Web ou d\'en interrompre l\'accès, à leur discrétion et sans préavis, y compris le droit de cesser toute activité sur ce site Web avec ou sans préavis, sans encourir de responsabilité vis-à-vis du visiteur.</p>  
                        	<p>Ce site Web, le contenu et les services qui y sont offerts sont fournis « tel quel » et « tel que disponibles ».  Solutions Yannick Thibault et ses partenaires ne font  aucune représentation et n\'offrent aucune garantie expresse ou implicite quant au fonctionnement de ce site Web ou aux services qui y sont offerts.</p>      		
    		
                        	<h6><strong><u>MATÉRIEL SOUMIS</u></strong></h6>
                        	<p>Tout Matériel Soumis par le biais de ce site Web devient la propriété exclusive de Solutions Yannick Thibault et pourra être utilisé par Solutions Yannick Thibault sous toute forme et dans tous les médias connus et inconnus à ce jour sans limite de temps ni de territoire.</p>   
                        	<p>Vous nous garantissez que vous détenez tous les droits, titres et intérêts sur le Matériel Soumis dont, le cas échéant, les droits nécessaires obtenus de tierces parties, et que le Matériel Soumis ne viole aucun droit de propriété intellectuelle, de propriété ou tout autre droit de tierces parties, n\'est pas contraire à la loi et ne contient aucun matériel diffamatoire. En conséquence de ce qui précède, vous vous engagez à prendre fait et cause et à indemniser Solutions Yannick Thibault et ses partenaires pour tous dommages, dépenses, frais et coûts raisonnables encourus ou subis par eux à la suite de toute poursuite intentée par un tiers en raison de la non-conformité à l\'une ou l\'autre des déclarations et garanties qui précèdent ou à la violation des termes de la politique d\'utilisation de ce site Web.</p>   
                        	<p>Solutions Yannick Thibault surveille le Matériel Soumis diffusé sur ce site Web et peut, à sa seule discrétion, retirer tout élément qu\'il considère attentatoire aux droits de tiers ou contraire à la loi et bloquer l\'accès à ce site Web à un visiteur. </p>      		
    		
                        	<h6><strong><u>JURIDICTION</u></strong></h6>
                        	<p>La politique d\'utilisation de ce site Web et la relation entre le visiteur et Solutions Yannick Thibault sont régies par les lois de la Province du Québec, Canada. Les parties conviennent d\'élire domicile dans le district judiciaire de Saint-Jean-sur-Richelieu, Province de Québec, Canada et choisissent celui-ci comme le district approprié pour l\'audition de toute réclamation découlant de l\'interprétation, l\'application, l\'accomplissement, l\'entrée en vigueur, la validité et les effets de la présente politique d\'utilisation.</p>       		
';
}
else {
	echo '
                        	<h6><strong><u>WEBSITE TERS OF USE</u></strong></h6>
                        	<p>Welcome to www.solutionsyannickthibault.com (the “Website”) owned and operated by Solutions Yannick Thibault.  Please read these Terms of Use and the accompanying Privacy Policy carefully before using this Website and/or submitting any personal information that could identify you (including but not limited to name, address, telephone number and email address).  By using this Website, you signify your agreement to these Terms of Use and the Privacy Policy.  If you do not agree to these Terms of Use and/or the Privacy Policy, do not use this Website.</p>    
    		
                        	<h6><strong><u>COPYRIGHT AND TRADEMARKS</u></strong></h6>
                        	<p>All materials, including but not limited to images, audio and video clips, animation, diagrams, photographs and any and all information of any kind in any form (the “Materials”), incorporated into, published or otherwise exhibited on this Website are protected by copyright or other intellectual property rights and are owned and controlled by Solutions Yannick Thibault or third parties who have licensed Solutions Yannick Thibault the right to include the Materials in this Website.  Any copying, reproducing, republishing, uploading, posting, modifying or transmission or distribution of any Materials is strictly prohibited and will be considered a violation of Solutions Yannick Thibault\'s intellectual property rights and could result in legal liability and/or criminal sanction.</p>   
    			
                        	<h6><strong><u>DISCLAIMER</u></strong></h6>
                        	<p>The Material provided on this Website are for informational, educational and/or entertainment purposes only.  Solutions Yannick Thibault makes no warranties regarding the reliability, truthfulness, accuracy or completeness of any Materials.  Unless otherwise stated expressly, any opinion, view or idea expressed in any article, review or story, or any content contributed or published by visitors in chat rooms or on bulletin boards or otherwise disseminated or sent to Solutions Yannick Thibault or others on or via this Website (“Visitor Content”) is the author\'s own and does not reflect the views of Solutions Yannick Thibault or its affiliated and related entities, or its partners, sponsors, advertisers or content providers. Neither Solutions Yannick Thibault, its affiliated and related entities, partners, advertisers, sponsors or content providers are liable to any person or entity whatsoever for any loss, damage, injury, liability, claim or any other cause of action of any kind arising from the use, dissemination of or reliance on any Materials or Visitor Content provided on this Website.  You agree to use this Website entirely at your own risk.  Solutions Yannick Thibault and its affiliated and related entities, its partners, advertisers, sponsors and content providers disclaim all warranties, express or implied, including but not limited to implied warranties of merchantability and/or fitness for a particular purpose or that the Website will function error free or uninterrupted or that this Website or the servers that make it available for use are free of viruses or defects.  Solutions Yannick Thibault and its affiliated and related entities, its partners, advertisers, sponsors and content providers shall not be held liable for any information, services or products that are provided or offered by websites that are linked to this Website.  The links to other websites are provided only as a convenience to you and do not constitute any endorsement of the linked websites or any information, services or products that are provided or offered by the linked websites.  You agree that you use any linked websites entirely at your own risk.</p>   

                        	<h6><strong><u>VISITOR CONTENT AND INDEMNIFICATION</u></strong></h6>
                        	<p>Any Visitor Content provided by you to Solutions Yannick Thibault on its billboards, chat rooms or other means shall become the property of Solutions Yannick Thibault throughout the universe in perpetuity and Solutions Yannick Thibault shall have the right to publish, reproduce, disseminate, exhibit or otherwise distribute and use the Visitor Content in all media now known or hereafter devised.  By submitting Visitor Content to the Website, you agree to represent and warrant that such Visitor Content shall not contain any libelous, defamatory, obscene, illegal, threatening or abusive materials and shall not infringe any intellectual property right or any other right of any person or entity and shall not breach any law. By visiting and using this Website, you signify your agreement to save Solutions Yannick Thibault, it\'s affiliated and related entities, its officers, directors and employees harmless from any and all damages, legal actions or causes of action that may now or hereinafter arise as a result of your use of the Website and your breach of these Terms of Use and/or any representations and warranties related to the Visitor Content. Solutions Yannick Thibault monitors the use of its billboards, chat rooms and any posted materials and reserves the right to remove any Visitor Content and block access to any visitor for any reason at its sole discretion.</p>       			
    		
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
    
<?php
	include_once( '..\php\footer\clean.php' );
php?>    
    
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