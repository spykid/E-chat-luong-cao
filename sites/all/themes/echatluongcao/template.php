<?php /**
 * Add theme call to define the contact form template and path
 */
function echatluongcao_theme() {
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
 */
function echatluongcao_preprocess_contact_site_form(&$variables)
{
	//an example of setting up an extra variable, you can also put this directly in the template
	$variables['info'] = 'Please fill in the fields below to contact us';
	//this is the contents of the form
	$variables['contact'] = drupal_render_children($variables['form']);
   
}

function echatluongcao_preprocess_page(&$variables) {
	global $users;
	dpm($variables, 'variables');
$vars['primary_local_tasks'] = $vars['tabs'];	
 if (isset($variables['title'])) {
 	die;
 	$variables['123'] = $variables['title'];
 	unset($variables['title']); 	
 }

}
?>