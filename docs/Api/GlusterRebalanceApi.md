# RMoore\Truenas\GlusterRebalanceApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**glusterRebalanceFixLayoutPost()**](GlusterRebalanceApi.md#glusterRebalanceFixLayoutPost) | **POST** /gluster/rebalance/fix_layout | 
[**glusterRebalanceStartPost()**](GlusterRebalanceApi.md#glusterRebalanceStartPost) | **POST** /gluster/rebalance/start | 
[**glusterRebalanceStatusPost()**](GlusterRebalanceApi.md#glusterRebalanceStatusPost) | **POST** /gluster/rebalance/status | 
[**glusterRebalanceStopPost()**](GlusterRebalanceApi.md#glusterRebalanceStopPost) | **POST** /gluster/rebalance/stop | 


## `glusterRebalanceFixLayoutPost()`

```php
glusterRebalanceFixLayoutPost($gluster_rebalance_fix_layout0)
```



Start a fix-layout operation for a given gluster volume.  `name` String representing the gluster volume.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterRebalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_rebalance_fix_layout0 = new \RMoore\Truenas\Model\GlusterRebalanceFixLayout0(); // \RMoore\Truenas\Model\GlusterRebalanceFixLayout0

try {
    $apiInstance->glusterRebalanceFixLayoutPost($gluster_rebalance_fix_layout0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterRebalanceApi->glusterRebalanceFixLayoutPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_rebalance_fix_layout0** | [**\RMoore\Truenas\Model\GlusterRebalanceFixLayout0**](../Model/GlusterRebalanceFixLayout0.md)|  | [optional]

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

## `glusterRebalanceStartPost()`

```php
glusterRebalanceStartPost($gluster_rebalance_start0)
```



Start a rebalance operation for a given gluster volume.  `name` String representing the gluster volume. `force` Boolean, when True will forcefully         start the rebalance operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterRebalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_rebalance_start0 = new \RMoore\Truenas\Model\GlusterRebalanceStart0(); // \RMoore\Truenas\Model\GlusterRebalanceStart0

try {
    $apiInstance->glusterRebalanceStartPost($gluster_rebalance_start0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterRebalanceApi->glusterRebalanceStartPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_rebalance_start0** | [**\RMoore\Truenas\Model\GlusterRebalanceStart0**](../Model/GlusterRebalanceStart0.md)|  | [optional]

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

## `glusterRebalanceStatusPost()`

```php
glusterRebalanceStatusPost($gluster_rebalance_status0)
```



Return the status of a rebalance operation for a given gluster volume.  `name` String representing the gluster volume.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterRebalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_rebalance_status0 = new \RMoore\Truenas\Model\GlusterRebalanceStatus0(); // \RMoore\Truenas\Model\GlusterRebalanceStatus0

try {
    $apiInstance->glusterRebalanceStatusPost($gluster_rebalance_status0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterRebalanceApi->glusterRebalanceStatusPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_rebalance_status0** | [**\RMoore\Truenas\Model\GlusterRebalanceStatus0**](../Model/GlusterRebalanceStatus0.md)|  | [optional]

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

## `glusterRebalanceStopPost()`

```php
glusterRebalanceStopPost($gluster_rebalance_stop0)
```



Stop a rebalance operation for a given gluster volume.  `name` String representing the gluster volume.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterRebalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_rebalance_stop0 = new \RMoore\Truenas\Model\GlusterRebalanceStop0(); // \RMoore\Truenas\Model\GlusterRebalanceStop0

try {
    $apiInstance->glusterRebalanceStopPost($gluster_rebalance_stop0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterRebalanceApi->glusterRebalanceStopPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_rebalance_stop0** | [**\RMoore\Truenas\Model\GlusterRebalanceStop0**](../Model/GlusterRebalanceStop0.md)|  | [optional]

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
