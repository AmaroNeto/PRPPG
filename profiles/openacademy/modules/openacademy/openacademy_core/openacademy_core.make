; Open Academy Core Makefile

api = 2
core = 7.x

; ----------------------------------------------------------------------------
; PANOPOLY OVERRIDES
;
; Note that makefiles are parsed bottom-up and that in Drush concurrency might
; interfere with recursion.
; Therefore PANOPOLY OVERRIDES need to be listed AT THE TOP of this makefile,
; so we can patch or update certain projects fetched by Panopoly's makefiles.

; Override panopoly_core.make: 1.0
; Update Entity Reference to work with Devel Generate (#1852112)
projects[entityreference][type] = module
projects[entityreference][subdir] = contrib
projects[entityreference][download][type] = git
projects[entityreference][download][url] = http://git.drupal.org/project/entityreference.git
projects[entityreference][download][branch] = 7.x-1.x
projects[entityreference][download][revision] = 3cbeb1b
projects[entityreference][patch][1852112] = http://drupal.org/files/entityreference-devel_generate_fix-1852112-18.patch

; Override panopoly_core.make
; Update Apps module to support offline mode (#1790902).
projects[apps][type] = module
projects[apps][subdir] = contrib
projects[apps][download][type] = git
projects[apps][download][url] = http://git.drupal.org/project/apps.git
projects[apps][download][branch] = 7.x-1.x
projects[apps][download][revision] = b9d82b7
; projects[apps][patch][1790902] = http://drupal.org/files/1790902-check-last-modified-existing.patch

; Introduce UUIDs onto panes & displays for
; better exportability & features compatibility
; (ctools patch from panels queue)
; https://drupal.org/node/1277908#comment-7216356
projects[ctools][version] = 1.3
projects[ctools][subdir] = contrib
projects[ctools][patch][1925018] = http://drupal.org/files/ctools-1925018-61.patch
projects[ctools][patch][1277908] = http://drupal.org/files/ctools-uuids_for_exported_objects-1277908-118.patch

; Introduce UUIDs onto panes & displays for better
; exportability & features compatibility
; https://drupal.org/node/1277908#comment-6771122
projects[panels][version] = 3.x-dev
projects[panels][subdir] = contrib
projects[panels][download][type] = git
projects[panels][download][revision] = 2bb470e
projects[panels][download][branch] = 7.x-3.x
projects[panels][patch][1179034_1277908] = http://drupal.org/files/panels-1179034-41_____panels-uuids-127790-100__-80.patch


; ----------------------------------------------------------------------------
; OPEN ACADEMY CORE MODULES

projects[ds][version] = 1.5
projects[ds][type] = module
projects[ds][subdir] = contrib

projects[email][version] = 1.2
projects[email][type] = module
projects[email][subdir] = contrib

projects[phone][version] = 1.x-dev
projects[phone][type] = module
projects[phone][subdir] = contrib
projects[phone][download][type] = git
projects[phone][download][revision] = 173dd71
projects[phone][download][branch] = 7.x-1.x

projects[fontyourface][version] = 2.8
projects[fontyourface][subdir] = contrib
projects[fontyourface][patch][1913976] = http://drupal.org/files/fontyourface-Missing_font_preview_potentially_confusing-1913976-1.patch

projects[office_hours][version] = 1.3
projects[office_hours][type] = module
projects[office_hours][subdir] = contrib

projects[taxonomy_menu][version] = 1.2
projects[taxonomy_menu][subdir] = contrib
projects[taxonomy_menu][type] = module
projects[taxonomy_menu][patch][1486510] = http://drupal.org/files/taxonomy-menu-no-vid-checking.patch