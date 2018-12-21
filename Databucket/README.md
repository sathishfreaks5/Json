# Json Bucket

**JsonBucket** is a simple, elegant PHP package to Query over any type of JSON Data. It'll make your life easier by giving the flavour of an ORM-like query on your JSON.
  
## Installation

```
composer require sathishfreaks5/databucket
```

## Usage

You can start using this package right away by importing your JSON data from a file:

```php
Coming soon
```

Or from a JSON String:

```php
use sathishfreaks5/Databucket/Databucket;
$ObjDBuck->json('{"id": 1, "name": "sathish kumar"}');
``` 

You can start Query your data using the various query methods such as **find**, **where**, **orWhere**, **whereIn**, **whereStartsWith**, **whereEndsWith**, **whereContains** and so on. Also you can aggregate your data after query using **sum**, **count**, **groupBy**, **max**, **min** etc.
 
```php
use sathishfreaks5/Databucket/Databucket;

$q = new Databucket('"attributes":[{"id": 1, "name": "sathish kumar"}]');
$res = $q->from('attributes')
    ->where('id', '=', 1)
    ->get();
dump($res);
 
```

Let's say we want to get the Summation of _price_ of the Queried result. We can do it easily by calling the **sum()** method instead of **get()**:

```php
$result = $json->from('products')
        ->where('cat', '=', 2)
        ->sum('price');
dump($result); 
```
  
## Bugs and Issues

If you encounter any bugs or issues, feel free to [open an issue at
github](https://github.com/sathishfreaks5/issues).

Also, you can shoot me an email to
<mailto:sathishfreaks5@gmail.com> for hugs or bugs. 
   