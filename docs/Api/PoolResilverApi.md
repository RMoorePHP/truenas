# RMoore\Truenas\PoolResilverApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**poolResilverGet()**](PoolResilverApi.md#poolResilverGet) | **GET** /pool/resilver | 
[**poolResilverPut()**](PoolResilverApi.md#poolResilverPut) | **PUT** /pool/resilver | 


## `poolResilverGet()`

```php
poolResilverGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolResilverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->poolResilverGet();
} catch (Exception $e) {
    echo 'Exception when calling PoolResilverApi->poolResilverGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `poolResilverPut()`

```php
poolResilverPut($pool_resilver_update0)
```



Configure Pool Resilver Priority.  If `begin` time is greater than `end` time it means it will rollover the day, e.g. begin = \"19:00\", end = \"05:00\" will increase pool resilver priority from 19:00 of one day until 05:00 of the next day.  `weekday` follows crontab(5) values 0-7 (0 or 7 is Sun).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolResilverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_resilver_update0 = new \RMoore\Truenas\Model\PoolResilverUpdate0(); // \RMoore\Truenas\Model\PoolResilverUpdate0

try {
    $apiInstance->poolResilverPut($pool_resilver_update0);
} catch (Exception $e) {
    echo 'Exception when calling PoolResilverApi->poolResilverPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_resilver_update0** | [**\RMoore\Truenas\Model\PoolResilverUpdate0**](../Model/PoolResilverUpdate0.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
