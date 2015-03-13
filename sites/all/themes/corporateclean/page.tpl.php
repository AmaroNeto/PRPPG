<!-- #header -->
<div id="header">
	<!-- #header-inside -->
	<div id="header-inside" class="container_12 clearfix">
		<!-- #header-inside-left -->
		<div id="header-inside-left" class="grid_3">
			<a href="http://ufrpe.br" title="UFRPE"> <img
				src="<?php print base_path() . path_to_theme() . '/' . 'images/brasao.png'; ?>"
				style="border-right: #999 2px solid; padding-right: 20px;"
				class="imgHead" /></a>
						
            <?php if ($logo): ?>
            <a href="<?php print check_url($front_page); ?>"
				title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>"
				alt="<?php print t('Home'); ?>" class="imgHead" /></a>
            <?php endif; ?>
            
        </div>
		<!-- EOF: #header-inside-left -->

		<!-- #header-inside-right -->
		<div id="header-inside-right" class="grid_6	">

		<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
						if (strpos($actual_link,'.ufrpe.br/br') !== false):?>
			<h1>Universidade Federal Rural de Pernambuco</h1>
			<?php endif;?>
			<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
						if (strpos($actual_link,'.ufrpe.br/en') !== false):?>
			<h1>Federal Rural University of Pernambuco</h1>
			<?php endif;?>
			 <?php if ($site_name || $site_slogan): ?>
			 <div class="clearfix">
            <?php if ($site_slogan): ?>
            <h2 id="slogan"><?php print $site_slogan; ?></span>
            <?php endif; ?>
            <?php if ($site_name): ?>
            <h3 id="site-name">
						<a href="<?php print check_url($front_page); ?>"
							title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
            <?php endif; ?>
         
			
			</div>
            <?php endif; ?>
         
          </div>
		<!-- EOF: #header-inside-right -->


		<div id="search_area" class="grid_3">
            <?php print drupal_render($page['machine_search']); ?>
         </div>

	</div>
	<!-- EOF: #header-inside -->

</div>
<!-- EOF: #header -->

<!-- #header-menu -->
<div id="header-menu">

<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
						if (strpos($actual_link,'.ufrpe.br/br') !== false):?>
	<div id="header-menu-inside" class="container_12 clearfix">

		<div class="grid_12">
			<div id="navigation" class="clearfix">
                          <div class="region region-navigation">
    <div id="block-menu-menu-navega-o" class="block block-menu">

<h2>Navegação PRPPG</h2>

<div class="content">
<ul class="menu"><li class="first leaf active-trail"><a href="/br/noticias" class="active-trail active">Início</a></li>
<li class="leaf"><a href="/br/content/sobre">Sobre</a></li>
<li class="expanded"><a href="/br/coord" title="">Equipe</a><ul class="menu"><li class="first leaf"><a href="/br/coord">Coordenação</a></li>
<li class="leaf"><a href="/br/docentes">Docentes</a></li>
<li class="last leaf"><a href="/br/dicentes" title="Discentes">Discentes</a></li>
</ul></li>
<li class="expanded"><a href="/br/areas-de-concentracao" title="">Áreas &amp; Pesquisa</a><ul class="menu"><li class="first leaf"><a href="/br/areas-de-concentracao">Áreas de Concentração</a></li>
<li class="leaf"><a href="/br/linhas-de-pesquisas">Linhas de Pesquisas</a></li>
<li class="leaf"><a href="/br/disciplinas">Disciplinas</a></li>
<li class="last leaf"><a href="/br/projetos-de-pesquisa">Projetos de Pesquisa</a></li>
</ul></li>
<li class="expanded"><a href="/br/teses" title="">Documentos &amp; Publicações</a><ul class="menu"><li class="first leaf"><a href="/br/teses">Teses</a></li>
<li class="leaf"><a href="/br/dissertacoes" title="">Dissertações</a></li>
<li class="leaf"><a href="/br/producao-intelectual">Produção Intelectual</a></li>
<li class="last leaf"><a href="/br/documentos">Documentos</a></li>
</ul></li>
<li class="leaf"><a href="/br/galeria">Galeria</a></li>
<li class="last leaf"><a href="/br/contato">Contato</a></li>
</ul></div>
</div>  </div>
            <?php endif; ?>

						<?php if (strpos($actual_link,'.ufrpe.br/br') == false):?>
	<div id="header-menu-inside" class="container_12 clearfix">

		<div class="grid_12">
			<div id="navigation" class="clearfix">
                          <div class="region region-navigation">
    <div id="block-menu-menu-navega-o" class="block block-menu">

<h2>Navigation PRPPG</h2>

<div class="content">
<ul class="menu"><li class="first leaf active-trail"><a href="/en/noticias" class="active-trail active">Home</a></li>
<li class="leaf"><a href="/en/content/sobre">About</a></li>
<li class="expanded"><a href="/en/coord" title="">Team</a><ul class="menu"><li class="first leaf"><a href="/en/coord">Coordination</a></li>
<li class="leaf"><a href="/en/docentes">Professors</a></li>
<li class="last leaf"><a href="/en/dicentes" title="Discentes">Students</a></li>
</ul></li>
<li class="expanded"><a href="/en/areas-de-concentracao" title="">Areas &amp; Research</a><ul class="menu"><li class="first leaf"><a href="/en/areas-de-concentracao">Concetration Areas</a></li>
<li class="leaf"><a href="/en/linhas-de-pesquisas">Research lines</a></li>
<li class="leaf"><a href="/en/disciplinas">Disciplines</a></li>
<li class="last leaf"><a href="/en/projetos-de-pesquisa">Research Projects</a></li>
</ul></li>
<li class="expanded"><a href="/en/teses" title="">Documents &amp; Publications</a><ul class="menu"><li class="first leaf"><a href="/en/teses">Theses</a></li>
<li class="leaf"><a href="/en/dissertacoes" title="">Dissertation</a></li>
<li class="leaf"><a href="/en/producao-intelectual">Intelectual Production</a></li>
<li class="last leaf"><a href="/en/documentos">Documents</a></li>
</ul></li>
<li class="leaf"><a href="/en/galeria">Galery</a></li>
<li class="last leaf"><a href="/en/contato">Contact</a></li>
</ul></div>
</div>  </div>
            <?php endif; ?>
												 
												 
												 
												 
												 
												             </div>
		</div>

	</div>
	<!-- EOF: #header-menu-inside -->

</div>
<!-- EOF: #header-menu -->

<!-- #banner -->
<div id="banner">

	<?php print render($page['banner']); ?>
	
    <?php if (theme_get_setting('slideshow_display','corporateclean')): ?>
    
    <?php if ($is_front): ?>
    
    <!-- #slideshow -->
	<div id="slideshow">

		<!--slider-item-->
		<div class="slider-item">
			<div class="content container_12">
				<div class="grid_12">

					<!--slider-item content-->
					<div style="float: left; padding: 0 30px 0 0;">
						<img class="masked"
							src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/slide-1.jpg" />
					</div>
					<h2>Sample product name</h2>
					<strong>General</strong><br /> <em>Client name</em><br /> <br />
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
					eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
					ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
					aliquip ex ea commodo consequat. Duis aute irure dolor in
					reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
					pariatur.
					<div style="display: block; padding: 30px 0 10px 0;">
						<a class="more" href="#">Tell me more</a>
					</div>
					<!--EOF:slider-item content-->

				</div>
			</div>
		</div>
		<!--EOF:slider-item-->

		<!--slider-item-->
		<div class="slider-item">
			<div class="content container_12">
				<div class="grid_12">

					<!--slider-item content-->
					<div style="float: right; padding: 0 0 0 30px;">
						<img class="masked"
							src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/slide-2.jpg" />
					</div>
					<h2>Sample service name</h2>
					<strong>General</strong><br /> <em>Client name</em><br /> <br />
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
					eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
					ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
					aliquip ex ea commodo consequat. Duis aute irure dolor in
					reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
					pariatur.
					<div style="display: block; padding: 30px 0 10px 0;">
						<a class="more" href="#">Tell me more</a>
					</div>
					<!--EOF:slider-item content-->

				</div>
			</div>
		</div>
		<!--EOF:slider-item-->

		<!--slider-item-->
		<div class="slider-item">
			<div class="content container_12">
				<div class="grid_12">

					<!--slider-item content-->
					<h2>Sample product name</h2>
					<strong>General</strong><br /> <em>Client name</em><br /> <br />
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
					eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
					ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
					aliquip ex ea commodo consequat. Duis aute irure dolor in
					reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
					pariatur.
					<div style="display: block; padding: 30px 0 10px 0;">
						<a class="more" href="#">Tell me more</a>
					</div>
					<!--EOF:slider-item content-->

				</div>
			</div>
		</div>
		<!--EOF:slider-item-->

		<!--slider-item-->
		<div class="slider-item">
			<div class="content container_12">
				<div class="grid_12">

					<!--slider-item content-->
					<img class="masked"
						src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/slide-3.jpg" />
					<!--EOF:slider-item content-->
				</div>
			</div>
		</div>
		<!--EOF:slider-item-->

	</div>
	<!-- EOF: #slideshow -->

	<!-- #slider-controls-wrapper -->
	<div id="slider-controls-wrapper">
		<div id="slider-controls" class="container_12">
			<ul id="slider-navigation">
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
			</ul>
		</div>
	</div>
	<!-- EOF: #slider-controls-wrapper -->
    
    <?php endif; ?>
    
	<?php endif; ?>  

</div>
<!-- EOF: #banner -->


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
			<!-- #footer-inside -->
			<div id="footer-inside" class="container_12 clearfix">

				
        <?php if (!$logged_in): ?>
        <div class="footer-area grid_8">
					<h2 style="width: 300px;">Sites</h2>
					<div id="Outros">


						<a href="http://www.capes.gov.br/" class="imgFooter"><img
							src="/sites/all/themes/corporateclean/images/Capes.png"
							alt="CAPES"></a> <a href="http://www.cnpq.br/" class="imgFooter"><img
							src="/sites/all/themes/corporateclean/images/CNPq.png" alt="CNPq"></a>
						<a href="http://www.facepe.br" class="imgFooter"><img
							src="/sites/all/themes/corporateclean/images/FACEPE.png"
							alt="FACEPE"></a> <a href="http://www.periodicos.capes.gov.br"
							class="imgFooter"><img
							src="/sites/all/themes/corporateclean/images/periodicos.png"
							alt="Periodicos Capes"></a> <a href="http://www.finep.gov.br"
							class="imgFooter"><img
							src="/sites/all/themes/corporateclean/images/FINEP.png"
							alt="FINEP"></a> <a href="http://www.sudene.gov.br/"
							class="imgFooter"><img
							src="/sites/all/themes/corporateclean/images/Sudene.png"
							alt="Sudene"></a> <span><a
							href="http://www.bnb.gov.br/Content/Aplicacao/Grupo_Principal/Home/Conteudo/PortalBN.asp"
							class="imgFooter"><img
								src="/sites/all/themes/corporateclean/images/Banco.png"
								alt="Bando do Nordeste"></a></span>
					</div>


				</div>
				<!-- EOF: .footer-area -->

				<div class="footer-area grid_4">
					<div id="login">
						<div class="region region-footer">
							<div id="block-user-login" class="block block-user">
								<h2 style="margin-top: 0px; margin-bottom: 0px;">Login do
									usuário</h2>


								<div class="content">
									<form action="/br/node?destination=node" method="post"
										id="user-login-form" accept-charset="UTF-8">
										<div>
											<div class="form-item form-type-textfield form-item-name">
												<label for="edit-name">Usuário <span class="form-required"
													title="Este campo é obrigatório.">*</span></label> <input
													type="text" id="edit-name" name="name" value="" size="15"
													maxlength="60" class="form-text required">
											</div>
											<div class="form-item form-type-password form-item-pass">
												<label for="edit-pass">Senha <span class="form-required"
													title="Este campo é obrigatório.">*</span></label> <input
													type="password" id="edit-pass" name="pass" size="15"
													maxlength="128" class="form-text required">
											</div>
											<div class="item-list">
												<ul>
													<li class="first last"><a href="/br/user/password"
														title="Solicitar uma nova senha por email.">Recuperar
															senha</a></li>
												</ul>
											</div>
											<input type="hidden" name="form_build_id"
												value="form-7pfYKr3g_7EMzKRwxnekRKoFK_KajROPMEevz2_Aorw"> <input
												type="hidden" name="form_id" value="user_login_block">
											<div class="form-actions form-wrapper" id="edit-actions--2">
												<input type="submit" id="edit-submit--2" name="op"
													value="Entrar" class="form-submit">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>


					</div>
				</div>
        <?php endif; ?>  
        
        <?php if ($logged_in): ?>
        <div class="footer-area grid_12">
					<h2 style="width: 300px;">Sites</h2>
					<div id="Outros">


						<a href="http://www.capes.gov.br/" class="imgFooter"><img
							src="/sites/all/themes/corporateclean/images/Capes.png"
							alt="CAPES"></a> <a href="http://www.cnpq.br/" class="imgFooter"><img
							src="/sites/all/themes/corporateclean/images/CNPq.png" alt="CNPq"></a>
						<a href="http://www.facepe.br" class="imgFooter"><img
							src="/sites/all/themes/corporateclean/images/FACEPE.png"
							alt="FACEPE"></a> <a href="http://www.periodicos.capes.gov.br"
							class="imgFooter"><img
							src="/sites/all/themes/corporateclean/images/periodicos.png"
							alt="Periodicos Capes"></a> <a href="http://www.finep.gov.br"
							class="imgFooter"><img
							src="/sites/all/themes/corporateclean/images/FINEP.png"
							alt="FINEP"></a> <a href="http://www.sudene.gov.br/"
							class="imgFooter"><img
							src="/sites/all/themes/corporateclean/images/Sudene.png"
							alt="Sudene"></a> <span><a<div id="footer-bottom-inside" c
									href="http://www.bnb.gov.br/Content/Aplicacao/Grupo_Principal/Home/Conteudo/PortalBN.asp"
									class="imgFooter">
									<img src="/sites/all/themes/corporateclean/images/Banco.png"
										alt="Bando do Nordeste"></a></span>
					</div>
         <?php endif; ?> 
        
        
			</div>
				<!-- EOF: #footer-inside -->

			</div>
			<!-- EOF: #footer -->

			<!-- #footer-bottom -->
			<div id="footer-bottom">

				<!-- #footer-bottom-inside -->
				<div id="footer-bottom-inside" class="container_12 clearfix">
					<!-- #footer-bottom-left -->
					<div id="footer-bottom-left" class="grid_8">


						<!-- EOF: #footer-bottom-right -->

					</div>
					<!-- EOF: #footer-bottom-inside -->

					<!-- #credits -->
					<div id="credits" class="container_12 clearfix">
						<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
						if (strpos($actual_link,'.ufrpe.br/br') !== false):?>
								
						<div class="grid_12">
							<p class="rtecenter" align="center"
								style="margin-bottom: 2px; font-size: 12px;">Universidade
								Federal Rural de Pernambuco - UFRPE</p>
							<p class="rtecenter" align="center"
								style="margin-bottom: 2px; font-size: 12px;">Rua Dom Manoel de
								Medeiros, s/n, Dois Irmãos - CEP: 52171-900 - Recife/PE</p>
							<?php if ($logged_in): ?>
							<p class="rtecenter" align="center"
								style="margin-bottom: 2px; font-size: 12px;">suporte@nti.ufrpe.br</p>
							<?php endif; ?>
						</div>
<?php endif; ?>

<?php if (strpos($actual_link,'.ufrpe.br/en') !== false):?>
<div class="grid_12">
							<p class="rtecenter" align="center"
								style="margin-bottom: 2px; font-size: 12px;">Federal Rural University of Pernambuco - UFRPE</p>
							<p class="rtecenter" align="center"
								style="margin-bottom: 2px; font-size: 12px;">s/n, Dom Manoel de
								Medeiros - Dois Irmãos, Recife/PE, 52171-900</p>
							<?php if ($logged_in): ?>
							<p class="rtecenter" align="center"
								style="margin-bottom: 2px; font-size: 12px;">suporte@nti.ufrpe.br</p>
							<?php endif; ?>
						</div>
<?php endif; ?>
					</div>
					<!-- EOF: #credits -->

				</div>
				<!-- EOF: #footer -->