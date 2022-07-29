# RMoore\Truenas\SystemdatasetApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemdatasetGet()**](SystemdatasetApi.md#systemdatasetGet) | **GET** /systemdataset | 
[**systemdatasetPoolChoicesGet()**](SystemdatasetApi.md#systemdatasetPoolChoicesGet) | **GET** /systemdataset/pool_choices | 
[**systemdatasetPut()**](SystemdatasetApi.md#systemdatasetPut) | **PUT** /systemdataset | 


## `systemdatasetGet()`

```php
systemdatasetGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemdatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemdatasetGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemdatasetApi->systemdatasetGet: ', $e->getMessage(), PHP_EOL;
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

## `systemdatasetPoolChoicesGet()`

```php
systemdatasetPoolChoicesGet()
```



Retrieve pool choices which can be used for configuring system dataset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemdatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemdatasetPoolChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemdatasetApi->systemdatasetPoolChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `systemdatasetPut()`

```php
systemdatasetPut($systemdataset_update0)
```



Update System Dataset Service Configuration.  `pool` is the name of a valid pool configured in the system which will be used to host the system dataset.  `pool_exclude` can be specified to make sure that we don't place the system dataset on that pool if `pool` is not provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemdatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$systemdataset_update0 = new \RMoore\Truenas\Model\SystemdatasetUpdate0(); // \RMoore\Truenas\Model\SystemdatasetUpdate0

try {
    $apiInstance->systemdatasetPut($systemdataset_update0);
} catch (Exception $e) {
    echo 'Exception when calling SystemdatasetApi->systemdatasetPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **systemdataset_update0** | [**\RMoore\Truenas\Model\SystemdatasetUpdate0**](../Model/SystemdatasetUpdate0.md)|  | [optional]

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
