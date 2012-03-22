<?php
/**
 * Add theme call to define the contact form template and path
 */
/* Add theme call to define the contact form template and path
 */
/*function echatluongcao_theme() {
	return array(
		'contact_site_form' => array(
			'render element' => 'form',
			'template' => 'contact-site-form',
			'path' => drupal_get_path('theme', 'echatluongcao').'/templates',
		),
	);
}

/**
 * Preproccess call to process the site contact form
 *
function echatluongcao_preprocess_contact_site_form(&$variables)
{  
//	dpm($variables, )
	//an example of setting up an extra variable, you can also put this directly in the template
	$variables['info'] = 'Please fill in the fields below to contact us';
	//this is the contents of the form
	$variables['contact'] = drupal_render_children($variables['form']);
    dpm($variables, 'variables');
}*/

function theme_preprocess_page(&$vars) {
dpm($vars, 'vars'); 
    $vars['theme_hook_suggestions'][] = 'page__contact';
    $vars['info'] = 'Please fill in the fields below to contact us';
    $vars['contact'] = drupal_render_children($vars['form']);
dpm($vars, 'after');
}

