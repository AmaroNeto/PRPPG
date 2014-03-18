<?php
/**
 * @file
 * prppg.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function prppg_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: management:admin/structure/menu/manage/menu-navega-o
  $menu_links['management:admin/structure/menu/manage/menu-navega-o'] = array(
    'menu_name' => 'management',
    'link_path' => 'admin/structure/menu/manage/menu-navega-o',
    'router_path' => 'admin/structure/menu/manage/%',
    'link_title' => 'Navegação PRPPG',
    'options' => array(),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'parent_path' => 'admin/structure/menu',
  );
  // Exported menu link: management:admin/structure/menu/manage/menu-navega-o-prppg-ingl-s
  $menu_links['management:admin/structure/menu/manage/menu-navega-o-prppg-ingl-s'] = array(
    'menu_name' => 'management',
    'link_path' => 'admin/structure/menu/manage/menu-navega-o-prppg-ingl-s',
    'router_path' => 'admin/structure/menu/manage/%',
    'link_title' => 'Navegação PRPPG Inglês',
    'options' => array(),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'parent_path' => 'admin/structure/menu',
  );
  // Exported menu link: management:node/39
  $menu_links['management:node/39'] = array(
    'menu_name' => 'management',
    'link_path' => 'node/39',
    'router_path' => 'node/%',
    'link_title' => 'FAQ',
    'options' => array(
      'attributes' => array(
        'title' => 'Perguntas Frequentes',
      ),
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 6,
    'parent_path' => 'admin',
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:<front>
  $menu_links['menu-navega-o-prppg-ingl-s:<front>'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => '<front>',
    'router_path' => '',
    'link_title' => 'Home',
    'options' => array(
      'attributes' => array(
        'title' => 'Home Page',
      ),
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 1,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:node/10
  $menu_links['menu-navega-o-prppg-ingl-s:node/10'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => 'node/10',
    'router_path' => 'node/%',
    'link_title' => 'Team',
    'options' => array(
      'node_type' => 'panopoly_page',
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 1,
    'expanded' => 1,
    'weight' => 1,
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:node/12
  $menu_links['menu-navega-o-prppg-ingl-s:node/12'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => 'node/12',
    'router_path' => 'node/%',
    'link_title' => 'Areas of Concentration & Research Lines',
    'options' => array(
      'node_type' => 'panopoly_page',
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 1,
    'expanded' => 1,
    'weight' => 2,
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:node/14
  $menu_links['menu-navega-o-prppg-ingl-s:node/14'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => 'node/14',
    'router_path' => 'node/%',
    'link_title' => 'Documents & Publications',
    'options' => array(
      'node_type' => 'panopoly_page',
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 1,
    'expanded' => 1,
    'weight' => 3,
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:node/16
  $menu_links['menu-navega-o-prppg-ingl-s:node/16'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => 'node/16',
    'router_path' => 'node/%',
    'link_title' => 'Gallery',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 4,
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:node/18
  $menu_links['menu-navega-o-prppg-ingl-s:node/18'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => 'node/18',
    'router_path' => 'node/%',
    'link_title' => 'Contact',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 5,
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:node/20
  $menu_links['menu-navega-o-prppg-ingl-s:node/20'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => 'node/20',
    'router_path' => 'node/%',
    'link_title' => 'Coordination',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'parent_path' => 'node/10',
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:node/22
  $menu_links['menu-navega-o-prppg-ingl-s:node/22'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => 'node/22',
    'router_path' => 'node/%',
    'link_title' => 'Students',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 2,
    'parent_path' => 'node/10',
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:node/24
  $menu_links['menu-navega-o-prppg-ingl-s:node/24'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => 'node/24',
    'router_path' => 'node/%',
    'link_title' => 'Professors',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 1,
    'parent_path' => 'node/10',
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:node/26
  $menu_links['menu-navega-o-prppg-ingl-s:node/26'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => 'node/26',
    'router_path' => 'node/%',
    'link_title' => 'Areas of Concentration',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'parent_path' => 'node/12',
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:node/28
  $menu_links['menu-navega-o-prppg-ingl-s:node/28'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => 'node/28',
    'router_path' => 'node/%',
    'link_title' => 'Research Lines',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 1,
    'parent_path' => 'node/12',
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:node/30
  $menu_links['menu-navega-o-prppg-ingl-s:node/30'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => 'node/30',
    'router_path' => 'node/%',
    'link_title' => 'Disciplines',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 2,
    'parent_path' => 'node/12',
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:node/32
  $menu_links['menu-navega-o-prppg-ingl-s:node/32'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => 'node/32',
    'router_path' => 'node/%',
    'link_title' => 'Research Projects',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 3,
    'parent_path' => 'node/12',
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:node/34
  $menu_links['menu-navega-o-prppg-ingl-s:node/34'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => 'node/34',
    'router_path' => 'node/%',
    'link_title' => 'Completion Works',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'parent_path' => 'node/14',
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:node/36
  $menu_links['menu-navega-o-prppg-ingl-s:node/36'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => 'node/36',
    'router_path' => 'node/%',
    'link_title' => 'Intellectual Production',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 1,
    'parent_path' => 'node/14',
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:node/38
  $menu_links['menu-navega-o-prppg-ingl-s:node/38'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => 'node/38',
    'router_path' => 'node/%',
    'link_title' => 'Documents',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 2,
    'parent_path' => 'node/14',
  );
  // Exported menu link: menu-navega-o-prppg-ingl-s:node/6
  $menu_links['menu-navega-o-prppg-ingl-s:node/6'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'link_path' => 'node/6',
    'router_path' => 'node/%',
    'link_title' => 'Program',
    'options' => array(
      'attributes' => array(
        'title' => 'Program',
      ),
      'alter' => TRUE,
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
  );
  // Exported menu link: menu-navega-o:<front>
  $menu_links['menu-navega-o:<front>'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => '<front>',
    'router_path' => '',
    'link_title' => 'Início',
    'options' => array(
      'attributes' => array(
        'title' => 'Página Inicial',
      ),
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 1,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => -1,
  );
  // Exported menu link: menu-navega-o:node/11
  $menu_links['menu-navega-o:node/11'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => 'node/11',
    'router_path' => 'node/%',
    'link_title' => 'Áreas de Concentração & Linhas de Pesquisa',
    'options' => array(
      'node_type' => 'panopoly_page',
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 1,
    'expanded' => 1,
    'weight' => 2,
  );
  // Exported menu link: menu-navega-o:node/13
  $menu_links['menu-navega-o:node/13'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => 'node/13',
    'router_path' => 'node/%',
    'link_title' => 'Documentos & Publicações',
    'options' => array(
      'node_type' => 'panopoly_page',
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 1,
    'expanded' => 1,
    'weight' => 3,
  );
  // Exported menu link: menu-navega-o:node/15
  $menu_links['menu-navega-o:node/15'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => 'node/15',
    'router_path' => 'node/%',
    'link_title' => 'Galeria',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 4,
  );
  // Exported menu link: menu-navega-o:node/17
  $menu_links['menu-navega-o:node/17'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => 'node/17',
    'router_path' => 'node/%',
    'link_title' => 'Contato',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 5,
  );
  // Exported menu link: menu-navega-o:node/19
  $menu_links['menu-navega-o:node/19'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => 'node/19',
    'router_path' => 'node/%',
    'link_title' => 'Coordenação',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'parent_path' => 'node/9',
  );
  // Exported menu link: menu-navega-o:node/21
  $menu_links['menu-navega-o:node/21'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => 'node/21',
    'router_path' => 'node/%',
    'link_title' => 'Alunos',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 2,
    'parent_path' => 'node/9',
  );
  // Exported menu link: menu-navega-o:node/23
  $menu_links['menu-navega-o:node/23'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => 'node/23',
    'router_path' => 'node/%',
    'link_title' => 'Professores',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 1,
    'parent_path' => 'node/9',
  );
  // Exported menu link: menu-navega-o:node/25
  $menu_links['menu-navega-o:node/25'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => 'node/25',
    'router_path' => 'node/%',
    'link_title' => 'Áreas de Concentração',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'parent_path' => 'node/11',
  );
  // Exported menu link: menu-navega-o:node/27
  $menu_links['menu-navega-o:node/27'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => 'node/27',
    'router_path' => 'node/%',
    'link_title' => 'Linhas de Pesquisa',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 1,
    'parent_path' => 'node/11',
  );
  // Exported menu link: menu-navega-o:node/29
  $menu_links['menu-navega-o:node/29'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => 'node/29',
    'router_path' => 'node/%',
    'link_title' => 'Disciplinas',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 2,
    'parent_path' => 'node/11',
  );
  // Exported menu link: menu-navega-o:node/31
  $menu_links['menu-navega-o:node/31'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => 'node/31',
    'router_path' => 'node/%',
    'link_title' => 'Projetos de Pesquisa',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 3,
    'parent_path' => 'node/11',
  );
  // Exported menu link: menu-navega-o:node/33
  $menu_links['menu-navega-o:node/33'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => 'node/33',
    'router_path' => 'node/%',
    'link_title' => 'Trabalhos de Conclusão',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'parent_path' => 'node/13',
  );
  // Exported menu link: menu-navega-o:node/35
  $menu_links['menu-navega-o:node/35'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => 'node/35',
    'router_path' => 'node/%',
    'link_title' => 'Produção Intelectual',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 1,
    'parent_path' => 'node/13',
  );
  // Exported menu link: menu-navega-o:node/37
  $menu_links['menu-navega-o:node/37'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => 'node/37',
    'router_path' => 'node/%',
    'link_title' => 'Documentos',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 2,
    'parent_path' => 'node/13',
  );
  // Exported menu link: menu-navega-o:node/5
  $menu_links['menu-navega-o:node/5'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => 'node/5',
    'router_path' => 'node/%',
    'link_title' => 'Programa',
    'options' => array(
      'node_type' => 'panopoly_page',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
  );
  // Exported menu link: menu-navega-o:node/9
  $menu_links['menu-navega-o:node/9'] = array(
    'menu_name' => 'menu-navega-o',
    'link_path' => 'node/9',
    'router_path' => 'node/%',
    'link_title' => 'Equipe',
    'options' => array(
      'node_type' => 'panopoly_page',
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 1,
    'expanded' => 1,
    'weight' => 1,
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Alunos');
  t('Areas of Concentration');
  t('Areas of Concentration & Research Lines');
  t('Completion Works');
  t('Contact');
  t('Contato');
  t('Coordenação');
  t('Coordination');
  t('Disciplinas');
  t('Disciplines');
  t('Documentos');
  t('Documentos & Publicações');
  t('Documents');
  t('Documents & Publications');
  t('Equipe');
  t('FAQ');
  t('Galeria');
  t('Gallery');
  t('Home');
  t('Intellectual Production');
  t('Início');
  t('Linhas de Pesquisa');
  t('Navegação PRPPG');
  t('Navegação PRPPG Inglês');
  t('Produção Intelectual');
  t('Professores');
  t('Professors');
  t('Program');
  t('Programa');
  t('Projetos de Pesquisa');
  t('Research Lines');
  t('Research Projects');
  t('Students');
  t('Team');
  t('Trabalhos de Conclusão');
  t('Áreas de Concentração');
  t('Áreas de Concentração & Linhas de Pesquisa');


  return $menu_links;
}
