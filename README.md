# leadbi-wordpress-sdk
LeadBI WordPress SDK for server side integration.

## Get started
1. Install the leadbi-wordpress-sdk plugin in your wordpress website -[https://www.leadbi.com/leadbi_wordpress_sdk.v1.0.zip](https://www.leadbi.com/leadbi_wordpress_sdk.v1.0.zip)
2. Start using the PHP API

## Docs
The documentation can be found in /docs 

## Example 
```
// create new form api object 
$formApi = new LeadBIFormAPI();
$form_id= '3638a022-2823-4541-b31c-1856f1a72916';

// send form data to leadbi
$formApi->sendForm($form_id, array(
    'first_name' => 'John', // optional
    'last_name' => 'Doe', // optional
    'email' => 'jd@example.com', // requred
    'company' => 'Example, Inc.', // optional
    'role' => 'CMO', // optional
    'phone' => '+1-541-754-3010', // optional
    'website' => 'http://example.com'
));

```

More examples available in /examples