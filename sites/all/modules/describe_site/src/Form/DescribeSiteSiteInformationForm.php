<?php
<span class="co1">// Classes referenced in this class:
// This is the form we are extending
/**
 * Configure site information settings for this site.
 *//**
	 * {@inheritdoc}
	 */// Retrieve the system.site configuration
('system.site');
 
		// Get the original form from the class we are extending
// Add a textarea to the site information section of the form for our
		// description
['site_information']['site_description'] = [
		  '#type' => 'textarea',
		  '#title' => t('Site description'),
		  // The default value is the new value we added to our configuration
		  // in step 1
		  '#default_value''description'),
		  '#description' => $this->t('The description of the site')/**
	 * {@inheritdoc}
	 */// Now we need to save the new description to the
		// system.site.description configuration.
		$this->config('system.site')
			// The site_description is retrieved from the submitted form values
			// and saved to the 'description' element of the system.site configuration
			->set('description''site_description'))
			// Make sure to save the configuration
			->save();
 
		// Pass the remaining values off to the original form that we have extended,
		// so that they are also saved



http://www.jaypan.com/tutorial/drupal-8-extending-core-configuration-extending-core-forms-and-overriding-core-routes
