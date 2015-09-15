<?php

/**
 * @file
 * Defines a naked one-column layout.
 */

// Plugin definition.
$plugin = array(
  'title' => t('Ehl container'),
  'category' => t('Ehl'),
  'icon' => 'ehl-container.png',
  'theme' => 'ehl-container',
  'regions' => array(
    'header' => t('header'),
    'content' => t('Content'),
    'footer' => t('footer'),
  ),
);
