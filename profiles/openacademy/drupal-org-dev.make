api = 2
core = 7.x


; ----------------------------------------------------------------------------
; OPEN ACADEMY's DEPENDENCIES
;
; Open Academy - Contrib

projects[conditional_styles][version] = 2.1
projects[conditional_styles][type] = module
projects[conditional_styles][subdir] = contrib

projects[adminimal_theme][download][type] = git
projects[adminimal_theme][download][url] = http://git.drupal.org/project/adminimal_theme.git
projects[adminimal_theme][download][branch] = 7.x-1.x
projects[adminimal_theme][download][revision] = 8970aaa

projects[unary][type] = theme
projects[unary][download][type] = git
projects[unary][download][url] = http://git.drupal.org/project/unary.git
projects[unary][download][branch] = 7.x-1.x


; ----------------------------------------------------------------------------
; OPEN ACADEMY's APPS
;
; Open Academy default apps (for use with local apps server)

projects[openacademy_core][download][type] = git
projects[openacademy_core][subdir] = openacademy
projects[openacademy_core][download][url] = http://git.drupal.org/project/openacademy_core.git
projects[openacademy_core][download][branch] = 7.x-1.x

projects[openacademy_courses][download][type] = git
projects[openacademy_courses][subdir] = openacademy
projects[openacademy_courses][download][url] = http://git.drupal.org/project/openacademy_courses.git
projects[openacademy_courses][download][branch] = 7.x-1.x

projects[openacademy_people][download][type] = git
projects[openacademy_people][subdir] = openacademy
projects[openacademy_people][download][url] = http://git.drupal.org/project/openacademy_people.git
projects[openacademy_people][download][branch] = 7.x-1.x

projects[openacademy_events][download][type] = git
projects[openacademy_events][subdir] = openacademy
projects[openacademy_events][download][url] = http://git.drupal.org/project/openacademy_events.git
projects[openacademy_events][download][branch] = 7.x-1.x

projects[openacademy_news][download][type] = git
projects[openacademy_news][subdir] = openacademy
projects[openacademy_news][download][url] = http://git.drupal.org/project/openacademy_news.git
projects[openacademy_news][download][branch] = 7.x-1.x

projects[openacademy_publications][download][type] = git
projects[openacademy_publications][subdir] = openacademy
projects[openacademy_publications][download][url] = http://git.drupal.org/project/openacademy_publications.git
projects[openacademy_publications][download][branch] = 7.x-1.x


; ----------------------------------------------------------------------------
; OPEN ACADEMY's MODULES/THEMES (TODO)
;
; (Modules/Themes in distro, not yet their own separate projects)

; ##### openacademy_analytics #####
; Google Analytics
projects[google_analytics][subdir] = contrib
projects[google_analytics][version] = 1.3

; ##### openacademy_devel #####
; Devel
projects[devel][type] = module
projects[devel][download][type] = git
projects[devel][download][url] = http://git.drupal.org/project/devel.git
projects[devel][download][branch] = 7.x-1.x
projects[devel][subdir] = contrib

; Coder
projects[coder][type] = module
projects[coder][download][type] = git
projects[coder][download][url] = http://git.drupal.org/project/coder.git
projects[coder][download][branch] = 7.x-2.x
projects[coder][subdir] = contrib

; ##### openacademy_radix #####
; Radix
projects[radix][download][type] = git
projects[radix][download][url] = http://git.drupal.org/project/radix.git
projects[radix][download][branch] = 7.x-2.x
projects[radix][download][revision] = d5d0d1f


; ----------------------------------------------------------------------------
; PANOPOLY
;
; The Panopoly core framework.

; Note that makefiles are parsed bottom-up, and that in Drush concurrency might
; interfere with recursion.
; Therefore PANOPOLY needs to be listed AT THE BOTTOM of this makefile,
; so we can patch or update certain projects fetched by Panopoly's makefiles.

; Someday maybe we can turn this on to just inherit Panopoly
;projects[panopoly][type] = profile
;projects[panopoly][version] = 1.x-dev
; but, Drupal.org does not support recursive profiles
; and also does not support include[]
; so we need to copy the panopoly.make file here

; The Panopoly Foundation

projects[panopoly_core][version] = 1.x-dev
projects[panopoly_core][subdir] = panopoly

projects[panopoly_images][version] = 1.x-dev
projects[panopoly_images][subdir] = panopoly

projects[panopoly_theme][version] = 1.x-dev
projects[panopoly_theme][subdir] = panopoly

projects[panopoly_magic][version] = 1.x-dev
projects[panopoly_magic][subdir] = panopoly
projects[panopoly_magic][patch][2016527] = http://drupal.org/files/2016643_panopoly_magic_screw_pre_render_with_2016527-5.patch
projects[panopoly_magic][patch][2017159] = http://drupal.org/files/2017159_panopoly_magic_preview_post_render-16.patch

projects[panopoly_widgets][version] = 1.x-dev
projects[panopoly_widgets][subdir] = panopoly

projects[panopoly_admin][version] = 1.x-dev
projects[panopoly_admin][subdir] = panopoly
projects[panopoly_admin][patch][2071133] = http://drupal.org/files/panopoly_admin-2071133-3.patch

projects[panopoly_users][version] = 1.x-dev
projects[panopoly_users][subdir] = panopoly

; The Panopoly Toolset

projects[panopoly_pages][version] = 1.x-dev
projects[panopoly_pages][subdir] = panopoly
projects[panopoly_pages][patch][2008762] = http://drupal.org/files/2008762-panopoly_pages-missing-depedency-1.patch

projects[panopoly_wysiwyg][version] = 1.x-dev
projects[panopoly_wysiwyg][subdir] = panopoly

projects[panopoly_search][version] = 1.x-dev
projects[panopoly_search][subdir] = panopoly
