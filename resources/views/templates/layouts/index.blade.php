<?php $layout_template = (isset($settings_data['app_template']) && !empty($settings_data['app_template'])) ? "templates.apps.{$settings_data['app_template']}" : 'templates.apps.default'; ?>
@extends($layout_template)
