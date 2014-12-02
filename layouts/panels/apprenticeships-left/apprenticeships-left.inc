<?php

/**
 * @file
 * Defines a two-column layout, with one sidebar on the left.
 */

// Plugin definition.
$plugin = array(
  'title' => t('Australian Apprenticeships: Left Sidebar'),
  'category' => t('Australian Apprenticeships'),
  'icon' => 'apprenticeships-left.png',
  'theme' => 'apprenticeships-left',
  'regions' => array(
    'left-sidebar' => t('Left Sidebar (3 columns)'),
    'right-column' => t('Right Column (9 columns)'),
  ),
);
