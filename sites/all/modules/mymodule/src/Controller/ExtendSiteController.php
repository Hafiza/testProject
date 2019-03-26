<?php
namespace Drupal\mymodule\Controller;
use Drupal\node\NodeInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class ExtendSiteController {
  
  /**
   * This function reads the recent siteapikey saved and check if it is available with
   * the combination of node type page, 
   * if available then responds in json format
   * else access denied is shown.
   *
   * @param      <type>                      $site_api_key  The site api key
   * @param      \Drupal\node\NodeInterface  $node          The node
   *
   * @return     JsonResponse                ( description_of_the_return_value )
   */
  public function content($site_api_key, NodeInterface $node) {

    // Fetching the added Site API Key from configuration.
    $site_api_key_value = \Drupal::config('system.site')->get('siteapikey');      

    // JSON respnse for node using Site API Key.
    if ($node->getType() == 'page' && $site_api_key_value != 'No API Key yet' && $site_api_key_value == $site_api_key) {

      // JSON response of node.
      return new JsonResponse($node->toArray(), 200, ['Content-Type' => 'application/json']);
  
    }
    else {
  
      // Access Denied.
      return new JsonResponse(["error" => "access denied"], 401, ['Content-Type' => 'application/json']);
  
    }
  }
}