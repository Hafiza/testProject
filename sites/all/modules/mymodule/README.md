# Reference Taken from

###Downloaded Drupal 8
* [https://www.drupal.org/download]


###Custom module creation drupal 8 working
* [https://befused.com/drupal/drupal8-admin-form-guide]



###system site information modifcations
* [https://www.drupal.org/forum/support/post-installation/2019-02-06/add-a-new-custom-field-to-site-infomation-form-in-drupal8]

###Button Text Change
* [https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Form%21form.api.php/function/hook_form_alter/8.2.x]
* [https://drupal.stackexchange.com/questions/198966/how-do-i-change-text-on-the-submission-button-in-the-node-form]


###To Add Controller
* [https://www.drupal.org/docs/8/creating-custom-modules/adding-a-basic-controller]

###Randomly entered the given URL in the questionnaire given (http://localhost/page_json/FOOBAR12345/17)
* [https://github.com/coderJK/extend_site_setting/blob/master/extend_site_setting.module]

## To execute use the url:
* http://localhost/testProject/admin/config/system/site-information
* Install module MyModule
* (Add mysiteApiKey) as ApiKey
* http://localhost/testProject/page_json/mysiteApiKey/2 (Ensure node page is added, only if ApiKey given doesn't page then access denied is shown else for node it is page not found )
