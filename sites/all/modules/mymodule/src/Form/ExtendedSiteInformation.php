<?php

namespace Drupal\mymodule\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\system\Form\SiteInformationForm;

/**
 * Class for extended site information.
 */
class ExtendedSiteInformation extends SiteInformationForm {
 
   /**
   * {@inheritdoc}
   */
	  public function buildForm(array $form, FormStateInterface $form_state) {

		$site_config = $this->config('system.site');
		$form =  parent::buildForm($form, $form_state);
		$form['site_information']['siteapikey'] = [
			'#type' => 'textfield',
			'#title' => t('Site API Key'),
			'#default_value' => $site_config->get('siteapikey') ?: 'No API Key yet',
			'#description' => t("Custom field to set the API Key"),
		];

		return $form;
	}
	
	/**
	 * This function saves the new key entered in the basic site setting form
	 * and inform the user as well
	 *
	 * @param      array                                 $form        The form
	 * @param      \Drupal\Core\Form\FormStateInterface  $form_state  The form state
	 */
	
	  public function submitForm(array &$form, FormStateInterface $form_state) {
		$this->config('system.site')
		  ->set('siteapikey', $form_state->getValue('siteapikey'))
		  ->save();
		parent::submitForm($form, $form_state);
	
		// Retrieving the submitted siteapikey and informing user 
		$site_api_key_value = \Drupal::config('system.site')->get('siteapikey');    
 		drupal_set_message(t('"@site_apikey" ,Your setting is being submitted with site api key!', ['@site_apikey' => $site_api_key_value]));
	  }



}