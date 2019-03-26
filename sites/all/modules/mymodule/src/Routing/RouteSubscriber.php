<?php 
namespace Drupal\mymodule\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * This routes to customized extendedSiteInformationForm page
   *
   * @param      \Symfony\Component\Routing\RouteCollection  $collection  The collection
   */
  protected function alterRoutes(RouteCollection $collection) {
    if ($route = $collection->get('system.site_information_settings')) 
      $route->setDefault('_form', 'Drupal\mymodule\Form\ExtendedSiteInformation');
  }

}
