<?php get_header();?>
<!--page init -->

<div id="main" role="main">
	<div class="row">
		<div id="articolo_sx" class="col-md-5 col-sm-5 col-xs-24">
			<div class="row">        
				<nav id="nav_laterale" class="navbar navbar-default col-md-24 col-xs-24" role="navigation" aria-label="menu laterale">             
					<div class="container-fluid">
						<div class="row">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu_laterale">O Consulado<span class="sr-only"> Toggle navigation</span>
									<span class="glyphicon glyphicon-align-justify"></span> 
								</button>
							</div>
							<div class="collapse navbar-collapse" id="menu_laterale">
								<div class="testata"><a href="http://www.consrecife.esteri.it/consolato_recife/pt/il_consolato" title="O Consulado">O Consulado</a>
								</div>
								 <?php
                                         wp_nav_menu(array(
                                             'menu' => 'MenuLateral',
                                             'container' => 'nav', 
                                             'menu_class' => 'nav navbar-nav'  
                                             )); 
                                         ?>
							</div> 
						</div>
					</div>
				</nav>
			</div>
		</div>




		
					
					
					

				

	 <article id="articolo_centro" class="col-md-19 col-sm-19 padding_articolo item-page" itemscope="" itemtype="http://schema.org/Article" role="main" aria-label="articolo">
        
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); ?>
		
		<meta itemprop="inLanguage" content="pt-PT">
        <h1 itemprop="headline"><?php the_title();?></h1>
        <div class="sr-only" itemprop="datePublished">2016-07-04</div>
        <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-24">&nbsp;</div>
                <div class="col-md-17 col-sm-12 col-xs-24 share">		
                    <div class="moduletable">
						<script type="text/javascript">
                                    window.addEventListener('load', function (){
                                        if(typeof addthis_conf == 'undefined'){
                                            var script = document.createElement('script');
                                            script.src = '//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54984f4d0293db94';
                                            document.getElementsByTagName('head')[0].appendChild(script);
                                        }
                                    });
                        </script>
                        <div><!-- AddThis Button BEGIN -->
                            <script type="text/javascript">
                                var addthis_product = 'jlm-3.0';
                                var addthis_config = {
                                ui_hover_direction:false,
                                data_track_clickback:true,
                                ui_language:'en'
                                }
                             </script>
                                    <div class="addthis_toolbox addthis_default_style ">
                                            <a href="#" title="Facebook" tabindex="-1" class="addthis_button_facebook addthis_button_preferred_1 at300b"><span style="background-color: rgb(59, 89, 152); line-height: 16px; height: 16px; width: 16px;" class="at-icon-wrapper"><svg alt="Facebook" title="Facebook" style="width: 16px; height: 16px;" class="at-icon at-icon-facebook" viewBox="0 0 32 32" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><path fill-rule="evenodd" d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z"></path></g></svg></span></a>
                                            <a href="#" title="Twitter" tabindex="-1" class="addthis_button_twitter addthis_button_preferred_2 at300b"><span style="background-color: rgb(29, 161, 242); line-height: 16px; height: 16px; width: 16px;" class="at-icon-wrapper"><svg alt="Twitter" title="Twitter" style="width: 16px; height: 16px;" class="at-icon at-icon-twitter" viewBox="0 0 32 32" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><path fill-rule="evenodd" d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336"></path></g></svg></span></a>
                                            <a href="#" title="Print" tabindex="-1" class="addthis_button_print addthis_button_preferred_3 at300b"><span style="background-color: rgb(115, 138, 141); line-height: 16px; height: 16px; width: 16px;" class="at-icon-wrapper"><svg alt="Print" title="Print" style="width: 16px; height: 16px;" class="at-icon at-icon-print" viewBox="0 0 32 32" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><path d="M24.67 10.62h-2.86V7.49H10.82v3.12H7.95c-.5 0-.9.4-.9.9v7.66h3.77v1.31L15 24.66h6.81v-5.44h3.77v-7.7c-.01-.5-.41-.9-.91-.9zM11.88 8.56h8.86v2.06h-8.86V8.56zm10.98 9.18h-1.05v-2.1h-1.06v7.96H16.4c-1.58 0-.82-3.74-.82-3.74s-3.65.89-3.69-.78v-3.43h-1.06v2.06H9.77v-3.58h13.09v3.61zm.75-4.91c-.4 0-.72-.32-.72-.72s.32-.72.72-.72c.4 0 .72.32.72.72s-.32.72-.72.72zm-4.12 2.96h-6.1v1.06h6.1v-1.06zm-6.11 3.15h6.1v-1.06h-6.1v1.06z"></path></g></svg></span></a>
                                            <a href="#" title="Email" target="_blank" tabindex="-1" class="addthis_button_email addthis_button_preferred_4 at300b"><span style="background-color: rgb(132, 132, 132); line-height: 16px; height: 16px; width: 16px;" class="at-icon-wrapper"><svg alt="Email" title="Email" style="width: 16px; height: 16px;" class="at-icon at-icon-email" viewBox="0 0 32 32" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><g fill-rule="evenodd"></g><path d="M27 22.757c0 1.24-.988 2.243-2.19 2.243H7.19C5.98 25 5 23.994 5 22.757V13.67c0-.556.39-.773.855-.496l8.78 5.238c.782.467 1.95.467 2.73 0l8.78-5.238c.472-.28.855-.063.855.495v9.087z"></path><path d="M27 9.243C27 8.006 26.02 7 24.81 7H7.19C5.988 7 5 8.004 5 9.243v.465c0 .554.385 1.232.857 1.514l9.61 5.733c.267.16.8.16 1.067 0l9.61-5.733c.473-.283.856-.96.856-1.514v-.465z"></path></g></svg></span></a>
                                            <a href="#" tabindex="-1" class="addthis_button_compact at300m"><span style="background-color: rgb(255, 101, 80); line-height: 16px; height: 16px; width: 16px;" class="at-icon-wrapper"><svg alt="More" title="More" style="width: 16px; height: 16px;" class="at-icon at-icon-addthis" viewBox="0 0 32 32" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><path fill-rule="evenodd" d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z"></path></g></svg></span></a>
                                            <a href="#" style="display: inline-block;" tabindex="-1" class="addthis_counter addthis_bubble_style"><a href="#" title="More" target="_blank" class="addthis_button_expanded">2</a><a class="atc_s addthis_button_compact">Share<span></span></a></a>
                                            <div class="atclear">
                                            </div>
                                    </div><!-- AddThis Button END -->
                        </div>		
                    </div>
	        </div>
        </div>
        <hr>
            <div class="sr-only" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                    <img src="La%20Sede_files/anteprima_google.jpg" alt="La Sede">
                    <meta itemprop="url" content="http://www.esteri.it/mae/resource/img/preferiti/anteprima_google.jpg">
                    <meta itemprop="width" content="600">
                    <meta itemprop="height" content="60">
                </div>
                <meta itemprop="name" content="Maeci">
            </div> 
            <div class="sr-only" itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                <span itemprop="name">Maeci</span>
            </div>
            <div itemprop="mainEntityOfPage" itemscope="" itemtype="http://schema.org/WebPage">
            </div>
            <div class="sr-only" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject"><meta itemprop="url" content="http://www.esteri.it/mae/resource/img/preferiti/anteprima_google.jpg">
                <meta itemprop="width" content="250">
                <meta itemprop="height" content="250"></div>
                <meta itemprop="dateModified" content="2016-08-04 16:31:19">
                
				
				<div itemprop="articleBody">
                    <?php the_content();?>
                </div>
            <hr>
        <div class="row"></div>    
		<?php } // end while
			} // end if?>
			<!--page fim -->

	</article>








</div>



<?php get_footer();?>