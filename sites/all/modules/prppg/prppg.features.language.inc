<?php
/**
 * @file
 * prppg.features.language.inc
 */

/**
 * Implements hook_locale_default_languages().
 */
function prppg_locale_default_languages() {
  $languages = array();

  // Exported language: en.
  $languages['en'] = array(
    'language' => 'en',
    'name' => 'English',
    'native' => 'English',
    'direction' => 0,
    'enabled' => 1,
    'plurals' => 0,
    'formula' => '',
    'domain' => '',
    'prefix' => 'en',
    'weight' => 0,
  );
  // Exported language: pt-br.
  $languages['pt-br'] = array(
    'language' => 'pt-br',
    'name' => 'Portuguese, Brazil',
    'native' => 'Português',
    'direction' => 0,
    'enabled' => 1,
    'plurals' => 2,
    'formula' => '($n!=1)',
    'domain' => '',
    'prefix' => 'br',
    'weight' => 0,
  );
  return $languages;
}
