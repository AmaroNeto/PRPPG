<?php
/**
 * @file
 * prppg.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function prppg_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: management.
  $menus['management'] = array(
    'menu_name' => 'management',
    'title' => 'Management',
    'description' => 'The <em>Management</em> menu contains links for administrative tasks.',
    'language' => 'und',
    'i18n_mode' => 0,
  );
  // Exported menu: menu-navega-o.
  $menus['menu-navega-o'] = array(
    'menu_name' => 'menu-navega-o',
    'title' => 'Navegação PRPPG',
    'description' => 'Menu da PRPPG',
    'language' => 'und',
    'i18n_mode' => 0,
  );
  // Exported menu: menu-navega-o-prppg-ingl-s.
  $menus['menu-navega-o-prppg-ingl-s'] = array(
    'menu_name' => 'menu-navega-o-prppg-ingl-s',
    'title' => 'Navegação PRPPG Inglês',
    'description' => 'Navegação em inglês',
    'language' => 'und',
    'i18n_mode' => 0,
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Management');
  t('Menu da PRPPG');
  t('Navegação PRPPG');
  t('Navegação PRPPG Inglês');
  t('Navegação em inglês');
  t('The <em>Management</em> menu contains links for administrative tasks.');


  return $menus;
}
