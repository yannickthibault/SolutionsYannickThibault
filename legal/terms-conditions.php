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