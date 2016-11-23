<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * kelly theme.
 */
function kelly_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<span class="element-invisible">' . t('Primary tabs') . '</span>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary tabs--primary  links--inline">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<span class="element-invisible">' . t('Secondary tabs') . '</span>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary tabs--secondary links--inline">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;
}