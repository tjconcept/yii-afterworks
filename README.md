yii-afterworks
==============

Yii component helping to schedule work after the request has ended

The component makes most sense if you are using PHP FPM (http://php.net/manual/en/install.fpm.php) as all scheduled jobs will then be run after closing the current request (user won't have to wait) which makes it perfect for heavy workload such as sending emails or manipulating images.


This component was originally written to accompany https://github.com/tjconcept/yii-serverAnalytics

Usage:
======

1. Clone repository to extensions folder
2. Add the following to config file:

```
  'components' => array(
    ...
    'afterworks' => array(
      'class' => 'ext.yii-afterworks.AfterworksApplicationComponent'
    ),
    ...
  )
```
