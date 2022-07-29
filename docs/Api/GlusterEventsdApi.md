# RMoore\Truenas\GlusterEventsdApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**glusterEventsdCreatePost()**](GlusterEventsdApi.md#glusterEventsdCreatePost) | **POST** /gluster/eventsd/create | 
[**glusterEventsdDeletePost()**](GlusterEventsdApi.md#glusterEventsdDeletePost) | **POST** /gluster/eventsd/delete | 
[**glusterEventsdSyncGet()**](GlusterEventsdApi.md#glusterEventsdSyncGet) | **GET** /gluster/eventsd/sync | 
[**glusterEventsdWebhooksGet()**](GlusterEventsdApi.md#glusterEventsdWebhooksGet) | **GET** /gluster/eventsd/webhooks | 


## `glusterEventsdCreatePost()`

```php
glusterEventsdCreatePost($gluster_eventsd_create0)
```



Add `url` webhook that will be called with a JSON formatted POST request that will include the event that was triggered along with the relevant data.  `url` is a http address (i.e. http://192.168.1.50/endpoint) `bearer_token` is a bearer token `secret` secret to encode the JWT message  NOTE: This webhook will be synchronized to all peers in the trusted storage pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterEventsdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_eventsd_create0 = new \RMoore\Truenas\Model\GlusterEventsdCreate0(); // \RMoore\Truenas\Model\GlusterEventsdCreate0

try {
    $apiInstance->glusterEventsdCreatePost($gluster_eventsd_create0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterEventsdApi->glusterEventsdCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_eventsd_create0** | [**\RMoore\Truenas\Model\GlusterEventsdCreate0**](../Model/GlusterEventsdCreate0.md)|  | [optional]

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

## `glusterEventsdDeletePost()`

```php
glusterEventsdDeletePost($gluster_eventsd_delete0)
```



Delete `url` webhook  `url` is a http address (i.e. http://192.168.1.50/endpoint)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterEventsdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_eventsd_delete0 = new \RMoore\Truenas\Model\GlusterEventsdDelete0(); // \RMoore\Truenas\Model\GlusterEventsdDelete0

try {
    $apiInstance->glusterEventsdDeletePost($gluster_eventsd_delete0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterEventsdApi->glusterEventsdDeletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_eventsd_delete0** | [**\RMoore\Truenas\Model\GlusterEventsdDelete0**](../Model/GlusterEventsdDelete0.md)|  | [optional]

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

## `glusterEventsdSyncGet()`

```php
glusterEventsdSyncGet()
```



Sync the webhooks config file to all peers in the trusted storage pool

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterEventsdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->glusterEventsdSyncGet();
} catch (Exception $e) {
    echo 'Exception when calling GlusterEventsdApi->glusterEventsdSyncGet: ', $e->getMessage(), PHP_EOL;
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

## `glusterEventsdWebhooksGet()`

```php
glusterEventsdWebhooksGet()
```



List the current webhooks (if any)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterEventsdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->glusterEventsdWebhooksGet();
} catch (Exception $e) {
    echo 'Exception when calling GlusterEventsdApi->glusterEventsdWebhooksGet: ', $e->getMessage(), PHP_EOL;
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
