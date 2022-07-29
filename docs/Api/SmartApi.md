# RMoore\Truenas\SmartApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**smartGet()**](SmartApi.md#smartGet) | **GET** /smart | 
[**smartPut()**](SmartApi.md#smartPut) | **PUT** /smart | 


## `smartGet()`

```php
smartGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->smartGet();
} catch (Exception $e) {
    echo 'Exception when calling SmartApi->smartGet: ', $e->getMessage(), PHP_EOL;
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

## `smartPut()`

```php
smartPut($smart_update0)
```



Update SMART Service Configuration.  `interval` is an integer value in minutes which defines how often smartd activates to check if any tests are configured to run.  `critical`, `informational` and `difference` are integer values on which alerts for SMART are configured if the disks temperature crosses the assigned threshold for each respective attribute. They default to 0 which indicates they are disabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_update0 = new \RMoore\Truenas\Model\SmartUpdate0(); // \RMoore\Truenas\Model\SmartUpdate0

try {
    $apiInstance->smartPut($smart_update0);
} catch (Exception $e) {
    echo 'Exception when calling SmartApi->smartPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_update0** | [**\RMoore\Truenas\Model\SmartUpdate0**](../Model/SmartUpdate0.md)|  | [optional]

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
