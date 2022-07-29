# RMoore\Truenas\GlusterLocaleventsApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**glusterLocaleventsAddJwtSecretPost()**](GlusterLocaleventsApi.md#glusterLocaleventsAddJwtSecretPost) | **POST** /gluster/localevents/add_jwt_secret | 
[**glusterLocaleventsGetSetJwtSecretGet()**](GlusterLocaleventsApi.md#glusterLocaleventsGetSetJwtSecretGet) | **GET** /gluster/localevents/get_set_jwt_secret | 


## `glusterLocaleventsAddJwtSecretPost()`

```php
glusterLocaleventsAddJwtSecretPost($gluster_localevents_add_jwt_secret0)
```



Add a `secret` key used to encode/decode JWT messages for sending/receiving gluster events.  `secret` String representing the key to be used             to encode/decode JWT messages `force` Boolean if set to True, will forcefully             wipe any existing jwt key for this             peer. Note, if forcefully adding a             new key, the other peers in the TSP             will also need to be sent this key.  Note: this secret is only used for messages that are destined for the api endpoint at http://_*:6000/_clusterevents for each peer in the trusted storage pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterLocaleventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_localevents_add_jwt_secret0 = new \RMoore\Truenas\Model\GlusterLocaleventsAddJwtSecret0(); // \RMoore\Truenas\Model\GlusterLocaleventsAddJwtSecret0

try {
    $apiInstance->glusterLocaleventsAddJwtSecretPost($gluster_localevents_add_jwt_secret0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterLocaleventsApi->glusterLocaleventsAddJwtSecretPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_localevents_add_jwt_secret0** | [**\RMoore\Truenas\Model\GlusterLocaleventsAddJwtSecret0**](../Model/GlusterLocaleventsAddJwtSecret0.md)|  | [optional]

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

## `glusterLocaleventsGetSetJwtSecretGet()`

```php
glusterLocaleventsGetSetJwtSecretGet()
```



Return the secret key used to encode/decode JWT messages for sending/receiving gluster events.  Note: this secret is only used for messages that are destined for the api endpoint at http://_*:6000/_clusterevents for each peer in the trusted storage pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterLocaleventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->glusterLocaleventsGetSetJwtSecretGet();
} catch (Exception $e) {
    echo 'Exception when calling GlusterLocaleventsApi->glusterLocaleventsGetSetJwtSecretGet: ', $e->getMessage(), PHP_EOL;
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
