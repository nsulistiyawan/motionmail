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

//example usage on html image, example template image http://s.mmgo.io/t/bPc
//<img src="http://s.mmgo.io/t/bPc?endDateTimeToken=<?php echo $motionmail->generateDynamicDatetime(date('Y-m-dTH:i:s')); ?>"> <img>

```
## Preview

![MotionMail](http://s.mmgo.io/t/bPc "Motion Mail")
