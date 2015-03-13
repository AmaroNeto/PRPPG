<div id="header">
	<!-- #header-inside -->
	<div id="header-inside" class="container_12 clearfix">
		<!-- #header-inside-left -->
		<div id="header-inside-left" class="grid_8">
			 <!-- Logo -->
      			 <?php if ($logo): ?>
           			 <a href="<?php print check_url($front_page); ?>"
				title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>"
				alt="<?php print t('Home'); ?>" class="imgHead" /></a>
            		<?php endif; ?>
			 <!-- /logo --> 
		</div>
		<div id="header-inside-right" class = "grid_3">
			<div id="search_area">
            			<?php print drupal_render($page['machine_search']); ?>
        		</div>
			<ul id="upper-header-menu" class = "grid_3">
				<li id="upper-li-first"><a href="http://siga.ufrpe.br/ufrpe/index.jsp" title="Siga" class="active">SIG@</a></li>
				<li id="upper-li-last"><a href="" title="Contato" class="active">Contato</a></li>
			</ul>
		</div>
	</div>
</div>
       

<!-- #header-menu -->
<div id="header-menu">
	<!-- #header-menu-inside -->
	<div id="header-menu-inside" class="container_12 clearfix">

		<div class="grid_12">
			<div id="navigation" class="clearfix">
            <?php if ($page['navigation']) :?>
            <?php print drupal_render($page['navigation']); ?>
            
												 
												 
												 
												 
												 
												 <?php else :
													if (module_exists ( 'i18n_menu' )) {
														$main_menu_tree = i18n_menu_translated_tree ( variable_get ( 'menu_main_links_source', 'main-menu' ) );
													} else {
														$main_menu_tree = menu_tree ( variable_get ( 'menu_main_links_source', 'main-menu' ) );
													}
													print drupal_render ( $main_menu_tree );
												endif;
												?>
            </div>
		</div>

	</div>
	<!-- EOF: #header-menu-inside -->

</div>
<!-- EOF: #header-menu -->

<!-- #content -->
<div id="content">
	<!-- #content-inside -->
	<div id="content-inside" class="container_12 clearfix">
    
        <?php if ($page['sidebar_first']) :?>
        <!-- #sidebar-first -->
		<div id="sidebar-first" class="grid_4">
        	<?php print render($page['sidebar_first']); ?>
        </div>
		<!-- EOF: #sidebar-first -->
        <?php endif; ?>
        
        <?php if ($page['sidebar_first'] && $page['sidebar_second']) { ?>
        <div class="grid_4">
        <?php } elseif ($page['sidebar_first'] || $page['sidebar_second']) { ?>
        <div id="main" class="grid_8">
		<?php } else { ?>
        <div id="main" class="grid_12">    
        <?php } ?>
            
            <?php if (theme_get_setting('breadcrumb_display','corporateclean')): print $breadcrumb; endif; ?>
            
            <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
       
            <?php if ($messages): ?>
            <div id="console" class="clearfix">
            <?php print $messages; ?>
            </div>
            <?php endif; ?>
     
            <?php if ($page['help']): ?>
            <div id="help">
            <?php print render($page['help']); ?>
            </div>
            <?php endif; ?>
            
            <?php if ($action_links): ?>
            <ul class="action-links">
            <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
            
			<?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1><?php print $title ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            
            <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
            
            <?php print render($page['content']); ?>
            
            <?php print $feed_icons; ?>
            
        </div>
				<!-- EOF: #main -->
        
        <?php if ($page['sidebar_second']) :?>
        <!-- #sidebar-second -->
				<div id="sidebar-second" class="grid_4">
        	<?php print render($page['sidebar_second']); ?>
        </div>
				<!-- EOF: #sidebar-second -->
        <?php endif; ?>  

    </div>
			<!-- EOF: #content-inside -->

		</div>
		<!-- EOF: #content -->
        
        <!-- #footer -->    
<div id="footer">

	<!-- #footer-upper -->
	<div id="footer-inside" class="container_12 clearfix">
    
        <div class="footer-area grid_12">
        <?php print render($page['footer_upper']); ?>
        </div><!-- EOF: .footer-area -->
       
    </div><!-- EOF: #footer-upper -->
    
	<!-- #footer-inside -->
    <div id="footer-inside" class="container_12 clearfix">
    
        <div class="footer-area grid_4">
        <?php print render($page['footer_first']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area grid_4">
        <?php print render($page['footer_second']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area grid_4">
        <?php print render($page['footer_third']); ?>
        </div><!-- EOF: .footer-area -->
       
    </div><!-- EOF: #footer-inside -->

</div><!-- EOF: #footer -->

<!-- #footer-bottom -->    
<div id="footer-bottom">

	<!-- #footer-bottom-inside --> 
    <div id="footer-bottom-inside" class="container_12 clearfix">
    	<!-- #footer-bottom-left --> 
    	<div id="footer-bottom-left" class="grid_8">
        
            <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('secondary-menu', 'links', 'clearfix')))); ?>
            
            <?php print render($page['footer']); ?>
            
        </div>
    	<!-- #footer-bottom-right --> 
        <div id="footer-bottom-right" class="grid_4">
        
        	<?php print render($page['footer_bottom_right']); ?>
        
        </div><!-- EOF: #footer-bottom-right -->
       
    </div><!-- EOF: #footer-bottom-inside -->
    
    <!-- #credits -->   
    <div id="credits" class="container_12 clearfix">
        <div class="grid_12">
        	<p class="rtecenter" align="center"
				style="margin-bottom: 2px; font-size: 12px;">Universidade
				Federal Rural de Pernambuco - UFRPE</p>
			<p class="rtecenter" align="center"
				style="margin-bottom: 2px; font-size: 12px;">Rua Dom Manoel de
		Medeiros, s/n, Dois Irmãos - CEP: 52171-900 - Recife/PE</p>
        </div>
    </div>
    <!-- EOF: #credits -->

</div><!-- EOF: #footer -->