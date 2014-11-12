<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Australian Apprenticeships theme.
 */

/**
* Implements template_process_html().
*/

// Remove Query Strings from CSS and js filenames (CacheBuster)
function australian_apprenticeships_process_html(&$variables) {
  $variables['styles'] = preg_replace('/\.css\?.*"/','.css"', $variables['styles']);
  $variables['scripts'] = preg_replace('/\.js\?.*"/','.js"', $variables['scripts']);
}

/**
 * Implements theme_form_alter()
 */

function australian_apprenticeships_form_alter( &$form, &$form_state, $form_id ) {
   if ($form_id == 'search_block_form') { $form['search_block_form']['#attributes']['placeholder'] = t('Search');
 	}
}