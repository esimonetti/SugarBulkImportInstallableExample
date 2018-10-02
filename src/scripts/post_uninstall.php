<?php

// Enrico Simonetti
// 2018-10-02
// enricosimonetti.com

// post uninstall actions

require_once 'modules/Configurator/Configurator.php';

$configuratorObj = new Configurator();
$configuratorObj->loadConfig();

$new_config_options = [];
$new_config_options['search_engine']['force_async_index'] = false;
$new_config_options['bulk_import_settings'] = false;

$configuratorObj->config['search_engine'] = $new_config_options['search_engine'];
$configuratorObj->config['bulk_import_settings'] = $new_config_options['bulk_import_settings'];

$configuratorObj->saveConfig();
