# Create a custom Drupal 8 module

## Background Information

When logged in as the administrator, the "Site Information" form can be found at the path /admin/config/system/site-information.

## Requirements

This module needs to alter the existing Drupal "Site Information" form. Specifics:

* A new form text field named "Site API Key" needs to be added to the "Site Information" form with the default value of “No API Key yet”.
* When this form is submitted, the value that the user entered for this field should be saved as the system variable named "siteapikey".
* A Drupal message should inform the user that the Site API Key has been saved with that value.
* When this form is visited after the "Site API Key" is saved, the field should be populated with the correct value.
* The text of the "Save configuration" button should change to "Update Configuration".
* This module also provides a URL that responds with a JSON representation of a given node with the content type "page" only if the previously submitted API Key and a node id (nid) of an appropriate node are present, otherwise it will respond with "access denied".

## Example URL

http://localhost/page_json/FOOBAR12345/17


# Reference Taken from

### Downloaded Drupal 8
* [https://www.drupal.org/download]


### Custom module creation drupal 8 working
* [https://befused.com/drupal/drupal8-admin-form-guide]



### system site information modifcations
* [https://www.drupal.org/forum/support/post-installation/2019-02-06/add-a-new-custom-field-to-site-infomation-form-in-drupal8]

### Button Text Change
* [https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Form%21form.api.php/function/hook_form_alter/8.2.x]
* [https://drupal.stackexchange.com/questions/198966/how-do-i-change-text-on-the-submission-button-in-the-node-form]


### To Add Controller
* [https://www.drupal.org/docs/8/creating-custom-modules/adding-a-basic-controller]

### Randomly entered the given URL in the questionnaire given (http://localhost/page_json/FOOBAR12345/17)
* [https://github.com/coderJK/extend_site_setting/blob/master/extend_site_setting.module]

### Total Time to complete task
* ~35 hrs 

(Thankyou for introducing me to DRUPAL 8) :)
* Drupal 8 setup with approprite DataBase MySQL with all prerequisites ~6 hrs
* Understanding the structure of the folder ~4hrs
* Creating custome module (welcome), testing , verifying ~4hrs
* Creating mymodule as required in the assigment or test ~6hrs
* hook_alter for button text change ~4hrs
* JSON URL creation ~4hrs
* git hub account ~2hrs
* Code Reviewing ~1hr



## To execute use the url:
* http://localhost/testProject/admin/config/system/site-information
* Install module MyModule
* (Add mysiteApiKey) as ApiKey
* http://localhost/testProject/page_json/mysiteApiKey/2 (Ensure node page is added, only if ApiKey given doesn't page then access denied is shown else for node it is page not found )
