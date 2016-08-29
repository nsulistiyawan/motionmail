# Motion Mail API Wrapper for the lazy one
Wrapper for [MotionMail API](http://motionmailapp.com/)

## Installation
`composer require nsulistiyawan/motionmail`
## Usage Example
```php
<?php
require_once __DIR__.'/vendor/autoload.php';

$motionmail = new Nsulistiyawan\MotionMail\MotionMail('YOUR-MOTIONMAIL-API-KEY','YOUR-MOTIONMAIL-SECRET-KEY');
echo $motionmail->generateDynamicDatetime(date('Y-m-dTH:i:s'));
```
