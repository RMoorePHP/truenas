# RMoore\Truenas\DyndnsApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dyndnsGet()**](DyndnsApi.md#dyndnsGet) | **GET** /dyndns | 
[**dyndnsProviderChoicesGet()**](DyndnsApi.md#dyndnsProviderChoicesGet) | **GET** /dyndns/provider_choices | 
[**dyndnsPut()**](DyndnsApi.md#dyndnsPut) | **PUT** /dyndns | 


## `dyndnsGet()`

```php
dyndnsGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\DyndnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->dyndnsGet();
} catch (Exception $e) {
    echo 'Exception when calling DyndnsApi->dyndnsGet: ', $e->getMessage(), PHP_EOL;
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

## `dyndnsProviderChoicesGet()`

```php
dyndnsProviderChoicesGet()
```



List supported Dynamic DNS Service Providers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\DyndnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->dyndnsProviderChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling DyndnsApi->dyndnsProviderChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `dyndnsPut()`

```php
dyndnsPut($dyndns_update0)
```



Update dynamic dns service configuration.  `period` indicates how often the IP is checked in seconds.  `ssl` if set to true, makes sure that HTTPS is used for the connection to the server which updates the DNS record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\DyndnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dyndns_update0 = new \RMoore\Truenas\Model\DyndnsUpdate0(); // \RMoore\Truenas\Model\DyndnsUpdate0

try {
    $apiInstance->dyndnsPut($dyndns_update0);
} catch (Exception $e) {
    echo 'Exception when calling DyndnsApi->dyndnsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dyndns_update0** | [**\RMoore\Truenas\Model\DyndnsUpdate0**](../Model/DyndnsUpdate0.md)|  | [optional]

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
