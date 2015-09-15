<?php

/**
 * @file
 * Defines a naked one-column layout.
 */

// Plugin definition.
$plugin = array(
  'title' => t('Ehl container width sidebar left'),
  'category' => t('Ehl'),
  'icon' => 'ehl-container-sidebar-left.png',
  'theme' => 'ehl-container-sidebar-left',
  'regions' => array(
    'header' => t('header'),
    'content' => t('Content'),
    'sidebar' => t('Sidebar'),
    'footer' => t('Footer'),
  ),
);
