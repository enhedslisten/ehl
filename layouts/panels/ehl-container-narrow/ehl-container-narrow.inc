<?php

/**
 * @file
 * Defines a naked one-column layout.
 */

// Plugin definition.
$plugin = array(
  'title' => t('Ehl container narrow'),
  'category' => t('Ehl'),
  'icon' => 'ehl-container.png',
  'theme' => 'ehl-container-narrow',
  'regions' => array(
    'header' => t('header'),
    'content' => t('Content'),
    'footer' => t('footer'),
  ),
);
