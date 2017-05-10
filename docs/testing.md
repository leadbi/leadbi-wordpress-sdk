# Testing SDK

The sdk can be used without wordpress by including the classes from includes.

```
require('./../leadbi_wordpress_sdk/includes/LeadBIUTMInfo.php');
require('./../leadbi_wordpress_sdk/includes/LeadBIPageInfo.php');
require('./../leadbi_wordpress_sdk/includes/LeadBIIdentity.php');
require('./../leadbi_wordpress_sdk/includes/LeadBIFormAPI.php');

define('LEADBI_TRACKING_ENDPOINT', 'https://b.leadbi.com');

// your code
```
