yii-afterworks
==============

Yii component helping to schedule work after the request has ended

The component makes most sense if you are using PHP FPM (http://php.net/manual/en/install.fpm.php) as all scheduled jobs will then be run after closing the current request (user won't have to wait) which makes it perfect for heavy workload such as sending of emails or manipulating images.
