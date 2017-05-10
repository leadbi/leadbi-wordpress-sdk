# LeadBIIdentity Class
This class allows you to check if the user has been identified.

## Example
```
$identity = new LeadBIIdentity();

if($identity->hasIdentity()){
   echo $identity->getUserId();
}
```

## hasIdentity() -> bool
Returns true if the user is identified by leadbi.

## getUserId() -> uuid (string)
Returns the unique user id string.

## getSessionId() -> uuid (string)
Returns the unique session id string.