#!/bin/sh
# Script to build Open Academy 1.x
# Make sure the correct number of args was passed from the command line
if [ $# -eq 0 ]; then
  echo "Usage $0 target_build_dir"
  exit 1
fi
DRUSH_OPTS='--working-copy --no-gitinfofile --no-cache'
MAKEFILE='build-openacademy.make'
TARGET=$1
# Make sure we have a target directory
if [ -z "$TARGET" ]; then
  echo "Usage $0 target_build_diri"
  exit 2
fi
CALLPATH=`dirname "$0"`
ABS_CALLPATH=`cd "$CALLPATH"; pwd -P`
BASE_PATH=`cd ..; pwd`

echo '     _______'
echo '     \ ___ /'
echo '       | | '
echo '       | |'
echo '       |_|'
echo '     /_____\'
echo '   OpenAcademy'
echo '================='

# Temp move settings
echo 'Backing up settings.php...'
mv "$TARGET/sites/default/settings.php" settings.php
set -e
echo 'Verifying make...'
drush verify-makefile
# Remove current drupal dir
echo 'Wiping Drupal directory...'
rm -rf "$TARGET"
# Do the build
echo 'Running drush make...'
drush make $DRUSH_OPTS "$ABS_CALLPATH/$MAKEFILE" "$TARGET"
set +e
# Build Symlinks
echo 'Setting up symlinks...'
DRUPAL=`cd "$TARGET"; pwd -P`
# openacademy profile now fully included in distro, so no link is needed
# ln -s "$ABS_CALLPATH" "$DRUPAL/profiles/openacademy"
ln -s /opt/files/openacademy "$DRUPAL/sites/default/files"
# Restore settings
echo 'Restoring settings...'
mv "$BASE_PATH/settings.php" "$DRUPAL/sites/default/settings.php"

# Move libraries from profile into site libraries
# Modules properly using Library API don't need this, but many modules
# don't support libraries in the profile (like WYSIWYG)
###mv $DRUPAL/profiles/openacademy/libraries $DRUPAL/sites/all/libraries

# Clear caches and Run updates
cd "$DRUPAL"
echo 'Clearing caches...'
drush cc all; drush cc all;
echo 'Running updates...'
drush updb -y;
# @TODO Figure out why this cc all is needed
drush cc drush;
echo 'Reverting all features...'
drush fra -y;
drush cc all;
echo 'Build complete.'
