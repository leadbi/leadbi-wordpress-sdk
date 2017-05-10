# LeadBIFormAPI
This class allows you to send form data to leadbi.

## sendForm($formId, array $form, $page_info = null) -> boolean
Send form data to leadbi.

### Example

```
// create new form api object 
$formApi = new LeadBIFormAPI();
$form_id= '3638a022-2823-4541-b31c-1856f6a72916';

// send form data to leadbi
$formApi->sendForm($form_id, array(
    'first_name' => 'John', // optional
    'last_name' => 'Doe', // optional
    'email' => 'jd@example.com', // required
    'company' => 'Example, Inc.', // optional
    'role' => 'CMO', // optional
    'phone' => '+1-541-754-3010', // optional
    'website' => 'http://example.com'
));
```


