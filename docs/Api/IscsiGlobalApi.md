# RMoore\Truenas\IscsiGlobalApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**iscsiGlobalAluaEnabledGet()**](IscsiGlobalApi.md#iscsiGlobalAluaEnabledGet) | **GET** /iscsi/global/alua_enabled | 
[**iscsiGlobalClientCountGet()**](IscsiGlobalApi.md#iscsiGlobalClientCountGet) | **GET** /iscsi/global/client_count | 
[**iscsiGlobalGet()**](IscsiGlobalApi.md#iscsiGlobalGet) | **GET** /iscsi/global | 
[**iscsiGlobalPut()**](IscsiGlobalApi.md#iscsiGlobalPut) | **PUT** /iscsi/global | 
[**iscsiGlobalSessionsGet()**](IscsiGlobalApi.md#iscsiGlobalSessionsGet) | **GET** /iscsi/global/sessions | 


## `iscsiGlobalAluaEnabledGet()`

```php
iscsiGlobalAluaEnabledGet()
```



Returns whether iSCSI ALUA is enabled or not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\IscsiGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->iscsiGlobalAluaEnabledGet();
} catch (Exception $e) {
    echo 'Exception when calling IscsiGlobalApi->iscsiGlobalAluaEnabledGet: ', $e->getMessage(), PHP_EOL;
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

## `iscsiGlobalClientCountGet()`

```php
iscsiGlobalClientCountGet()
```



Return currently connected clients count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\IscsiGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->iscsiGlobalClientCountGet();
} catch (Exception $e) {
    echo 'Exception when calling IscsiGlobalApi->iscsiGlobalClientCountGet: ', $e->getMessage(), PHP_EOL;
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

## `iscsiGlobalGet()`

```php
iscsiGlobalGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\IscsiGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->iscsiGlobalGet();
} catch (Exception $e) {
    echo 'Exception when calling IscsiGlobalApi->iscsiGlobalGet: ', $e->getMessage(), PHP_EOL;
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

## `iscsiGlobalPut()`

```php
iscsiGlobalPut($iscsi_global_update0)
```



`alua` is a no-op for FreeNAS.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\IscsiGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$iscsi_global_update0 = new \RMoore\Truenas\Model\IscsiGlobalUpdate0(); // \RMoore\Truenas\Model\IscsiGlobalUpdate0

try {
    $apiInstance->iscsiGlobalPut($iscsi_global_update0);
} catch (Exception $e) {
    echo 'Exception when calling IscsiGlobalApi->iscsiGlobalPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **iscsi_global_update0** | [**\RMoore\Truenas\Model\IscsiGlobalUpdate0**](../Model/IscsiGlobalUpdate0.md)|  | [optional]

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

## `iscsiGlobalSessionsGet()`

```php
iscsiGlobalSessionsGet($limit, $offset, $count, $sort)
```



Get a list of currently running iSCSI sessions. This includes initiator and target names and the unique connection IDs.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\IscsiGlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int
$offset = 56; // int
$count = True; // bool
$sort = 'sort_example'; // string

try {
    $apiInstance->iscsiGlobalSessionsGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling IscsiGlobalApi->iscsiGlobalSessionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **offset** | **int**|  | [optional]
 **count** | **bool**|  | [optional]
 **sort** | **string**|  | [optional]

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
