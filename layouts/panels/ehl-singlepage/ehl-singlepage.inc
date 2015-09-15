<?php

/**
 * @file
 * Defines a naked one-column layout.
 */

// Plugin definition.
$plugin = array(
  'title' => t('Ehl Single Page'),
  'category' => t('Ehl'),
  'icon' => 'logo.png',
  'theme' => 'ehl-singlepage',
  'regions' => array(
    'header' => t('header'),
    'content' => t('Main content'),
    'content-no-container' => t('Content without container'),
    'content-red' => t('Content on red'),
    'content-egg' => t('Content on egg'),
    'footer' => t('footer'),
  ),
);
