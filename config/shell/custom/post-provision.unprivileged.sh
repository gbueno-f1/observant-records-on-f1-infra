#!/bin/bash

# Post provision actions that do not require root access.
# This version of the file contains common post-provision steps for Wordpress sites.

# Just rename this file to "post-provision.unprivileged.sh" to make it active.

VAGRANT_CORE_FOLDER="/vagrant"
DOCROOT="/vagrant/web"

if [[ -f "${DOCROOT}/wp-config.vm.php" ]]; then
  if [[ ! -f "${DOCROOT}/wp-config.php" || -w "${DOCROOT}/wp-config.php" ]]; then
    echo 'Copying wp-config file'
    cd ${DOCROOT} && cp wp-config.vm.php wp-config.php
  fi
fi

if [[ -f "${VAGRANT_CORE_FOLDER}/.env.vm" ]]; then
  if [[ ! -f "${VAGRANT_CORE_FOLDER}/.env" || -w "${VAGRANT_CORE_FOLDER}/.env" ]]; then
    echo 'Copying dotEnv file'
    cd ${VAGRANT_CORE_FOLDER} && cp .env.vm .env
  fi
fi

if [[ -f "${DOCROOT}/htaccess.dev" ]]; then
  echo 'Copying .htaccess'
  cd ${DOCROOT} && cp htaccess.dev .htaccess
fi
