<?php

/**
 * @file
 * Defines a naked one-column layout.
 */

// Plugin definition.
$plugin = array(
  'title' => t('Ehl container width sidebar right'),
  'category' => t('Ehl'),
  'icon' => 'ehl-container-sidebar-right.png',
  'theme' => 'ehl-container-sidebar-right',
  'regions' => array(
    'header' => t('header'),
    'content' => t('Content'),
    'sidebar' => t('Sidebar'),
    'footer' => t('footer'),
  ),
);
