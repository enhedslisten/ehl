<?php

/**
 * @file
 * Defines a naked one-column layout.
 */

// Plugin definition.
$plugin = array(
  'title' => t('Ehl container width split'),
  'category' => t('Ehl'),
  'icon' => 'ehl-container-split.png',
  'theme' => 'ehl-container-split',
  'regions' => array(
    'header' => t('header'),
    'leftcol' => t('Left'),
    'rightcol' => t('Right'),
    'footer' => t('footer')
  ),
);
