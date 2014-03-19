api = 2
core = 7.x
projects[drupal][type] = core
projects[drupal][version] = 7.23


; ----------------------------------------------------------------------------
; CORE PATCHES

; Patch for handling inherited profiles
projects[drupal][patch][1356276] = http://drupal.org/files/1356276-make-D7-21.patch

; Patch for fixing node_access across non-required Views relationships
; NOTE: This patch is not fully reviewed/accepted yet, so review the latest status
projects[drupal][patch][1349080] = http://drupal.org/files/d7_move_access_to_join_condition-1349080-89.patch

; Patch for simpletest
projects[drupal][patch][911354] = http://drupal.org/files/911354-drupal-profile-85.patch

; Patch to allow install profile enabling to enable dependencies correctly.
projects[drupal][patch][1093420] = http://drupal.org/files/1093420-22.patch

; Patch to prevent empty titles when menu_check_access called more than once
projects[drupal][patch][1697570] = http://drupal.org/files/drupal-menu_always_load_objects-1697570-5.patch

; Fix for Undefined index: default_image in image_field_update_instance() - during reconfigure
projects[drupal][patch][1559696] = http://drupal.org/files/default_image_index-1559696-27.patch


; ----------------------------------------------------------------------------
; OLD PATCHES

; Lets try without this. Not sure why it was needed, but the issue was marked
; as works as designed.
;; projects[drupal][patch][985814] = http://drupal.org/files/drupal-actions-985814-11-D7.patch