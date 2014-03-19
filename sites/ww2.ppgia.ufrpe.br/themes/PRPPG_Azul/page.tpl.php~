<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['slideshow']: I'll try to use for the slide show.
 * - $page['content']: The main content of the current page.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

	<div id="page-wrapper"><div id="page">
		<div id="header-wrap" class="wrap">
			<div id="header" class="section clearfix content">
				<div id="barra-brasil">
					<a href="http://www.acessoainformacao.gov.br/" style="position: relative; left:60%;"><img src="<?php print base_path() . path_to_theme() . '/' . 'images/Acesso.png'; ?>"/></a>
					<a href="http://ufrpe.br" style="position: relative; left:60%"><img src="<?php print base_path() . path_to_theme() . '/' . 'images/BRASIL.png'; ?>" /></a>
						<div id="language">
							<?php print render($page['language']);?>
						</div>
				</div>
				<div id="Head">
					<div id="divBrasao">
						<a href="http://ufrpe.br" title="UFRPE" >
							<img src="<?php print base_path() . path_to_theme() . '/' . 'images/brasao.png'; ?>"style="border-right:#999 2px solid; padding-right:20px; width:60px; height:96px;;" id="logo"/></a>
						<?php if ($logo): ?>
							<a href="<?php print $front_page; ?>" title="<?php print t('Inicio'); ?>" rel="home">
							<img src="<?php print $logo; ?>" alt="<?php print t('UFRPE'); ?>" style="width:96px; height:96px;"/>
							</a>
						<?php endif; ?>
							
					</div>
					<a href="<?php print $front_page; ?>" title="<?php print t('Inicio'); ?>" rel="home">
					<div id="divTitulo"><center id="Titulo"><p class="Titulo"> <?php print $site_name; ?> </p> <p class="Slogan"> <?php print $site_slogan; ?> </p></center>
					</div></a>
        
					<div id="divBusca" style="text-align:center">
						<?php print render($page['header']); ?>
					</div>      
				</div>
				</div>
			</div>
		</div>
		
		<div id="nav-wrapper" class="wrap">
			<div id="nav" class="section clearfix content">					
				<?php if ($page['navigation']): ?>
					<?php print render($page['navigation']);?>
				<?php endif; ?>
			</div>
		</div>
		
		<div id="beadcrumbs-wrap" class="wrap">
			<div id="breadcrumb" class="section clearfix content">
				<div id="crumbs">
				<?php if ($breadcrumb): ?>
					<?php print $breadcrumb; ?>
				<?php endif; ?>
				</div>
			</div>
		</div>
		
		
		<?php if ($messages): ?>
			<div id="messages"><div class="section clearfix">
			<?php print $messages; ?>
			</div></div>
		<?php endif; ?>
		
		<?php if ($page['slideshow']): ?>
			<div id="slideshow"><div class="section clearfix content">
			<?php print render($page['slideshow']); ?>
			</div></div> <!-- /.section, /#slideshow -->
		<?php endif; ?>
		
		<div id="content-wrap" class="wrap">
			<div id="content" class="section clearfix content">
				<a id="main-content"></a>
				<?php print render($title_prefix); ?>
				<?php if ($title): ?>
					<h1 class="title" id="page-title">
						<?php print $title; ?>
					</h1>
				<?php endif; ?>
				<?php print render($title_suffix); ?>
				<?php if ($tabs): ?>
					<div class="tabs">
						<?php print render($tabs); ?>
					</div>
				<?php endif; ?>
					<div class="content" id="page-content">
						<?php print render($page['content']); ?>
					</div>
				<?php print $feed_icons; ?>
			</div>
		</div>
		
		<div id="footer-wrap" class="wrap">
			<div id="footer" class="section clearfix content">
				<div id="Outros">
            	<h2>Outros Sites</h2>
                <a href="http://www.periodicos.capes.gov.br"><img src="<?php print base_path() . path_to_theme() . '/' . 'images/periodicos.png'; ?>" alt="Periodicos Capes"/></a>
                <a href="http://www.cnpq.br/"><img src="<?php print base_path() . path_to_theme() . '/' . 'images/CNPq.png'; ?>" alt="CNPq"/></a>
                <a href="http://www.facepe.br"><img src="<?php print base_path() . path_to_theme() . '/' . 'images/FACEPE.png'; ?>" alt="FACEPE"/></a> 
                <a href="http://www.finep.gov.br"><img src="<?php print base_path() . path_to_theme() . '/' . 'images/FINEP.png'; ?>" alt="FINEP"/></a>
                <a href="http://www.sudene.gov.br/"><img src="<?php print base_path() . path_to_theme() . '/' . 'images/Sudene.png'; ?>" alt="Sudene"/></a>
                <a href="http://www.capes.gov.br/"><img src="<?php print base_path() . path_to_theme() . '/' . 'images/Capes.png'; ?>" alt="CAPES"/></a>	
                <span style="padding-left:130px;"><a href="http://www.bnb.gov.br/Content/Aplicacao/Grupo_Principal/Home/Conteudo/PortalBN.asp"><img src="<?php print base_path() . path_to_theme() . '/' . 'images/Banco.png'; ?>" alt="Bando do Nordeste"/></a></span>
            </div>
			<div id="NTI">
				<p>© Copyright 2012</p>
				<p>Universidade Federal Rural de Pernambuco</p>
				<a href="http://www.nti.ufrpe.br/‎"><img src="<?php print base_path() . path_to_theme() . '/' . 'images/NTI.png'; ?>" alt="Núcleo de Tecnologia da Informação UFRPE"/></a>
			</div>
			<div id="login">
				<?php print render($page['footer']); ?>
			</div>
			</div>
		</div>
