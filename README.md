# Json Bucket

**JsonBucket** is a simple, elegant Laravel 5.7+ package to Query over any type of JSON Data. It'll make your life easier by giving the flavour of an ORM-like query on your JSON.
  
## Installation

```
composer require sathishfreaks5/databucket
```

use sathishfreaks5/Databucket/Databucket;
$ObjDBuck->json('{"id": 1, "name": "sathish kumar"}');
``` 

You can start Query your data using the various query methods such as **find**, **where**, **orWhere**, **whereIn**, **whereStartsWith**, **whereEndsWith**, **whereContains** and so on. Also you can aggregate your data after query using **sum**, **count**, **groupBy**, **max**, **min** etc.
 
