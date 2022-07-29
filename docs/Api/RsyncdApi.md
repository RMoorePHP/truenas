# RMoore\Truenas\RsyncdApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**rsyncdGet()**](RsyncdApi.md#rsyncdGet) | **GET** /rsyncd | 
[**rsyncdPut()**](RsyncdApi.md#rsyncdPut) | **PUT** /rsyncd | 


## `rsyncdGet()`

```php
rsyncdGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\RsyncdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->rsyncdGet();
} catch (Exception $e) {
    echo 'Exception when calling RsyncdApi->rsyncdGet: ', $e->getMessage(), PHP_EOL;
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

## `rsyncdPut()`

```php
rsyncdPut($rsyncd_update0)
```



Update Rsyncd Service Configuration.  `auxiliary` attribute can be used to pass on any additional parameters from rsyncd.conf(5).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\RsyncdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rsyncd_update0 = new \RMoore\Truenas\Model\RsyncdUpdate0(); // \RMoore\Truenas\Model\RsyncdUpdate0

try {
    $apiInstance->rsyncdPut($rsyncd_update0);
} catch (Exception $e) {
    echo 'Exception when calling RsyncdApi->rsyncdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rsyncd_update0** | [**\RMoore\Truenas\Model\RsyncdUpdate0**](../Model/RsyncdUpdate0.md)|  | [optional]

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
