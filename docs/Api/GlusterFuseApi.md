# RMoore\Truenas\GlusterFuseApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**glusterFuseIsMountedPost()**](GlusterFuseApi.md#glusterFuseIsMountedPost) | **POST** /gluster/fuse/is_mounted | 
[**glusterFuseMountPost()**](GlusterFuseApi.md#glusterFuseMountPost) | **POST** /gluster/fuse/mount | 
[**glusterFuseUmountPost()**](GlusterFuseApi.md#glusterFuseUmountPost) | **POST** /gluster/fuse/umount | 


## `glusterFuseIsMountedPost()`

```php
glusterFuseIsMountedPost($gluster_fuse_is_mounted0)
```



Check if gluster volume is FUSE mounted locally.  `name` String representing name of the gluster volume

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterFuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_fuse_is_mounted0 = new \RMoore\Truenas\Model\GlusterFuseIsMounted0(); // \RMoore\Truenas\Model\GlusterFuseIsMounted0

try {
    $apiInstance->glusterFuseIsMountedPost($gluster_fuse_is_mounted0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterFuseApi->glusterFuseIsMountedPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_fuse_is_mounted0** | [**\RMoore\Truenas\Model\GlusterFuseIsMounted0**](../Model/GlusterFuseIsMounted0.md)|  | [optional]

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

## `glusterFuseMountPost()`

```php
glusterFuseMountPost($gluster_fuse_mount0)
```



Mount a gluster volume using the gluster FUSE client.  `name` String representing the name of the gluster volume `all` Boolean if True locally FUSE mount all detected         gluster volumes `raise` Boolean if True raise a CallError if the FUSE mount         fails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterFuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_fuse_mount0 = new \RMoore\Truenas\Model\GlusterFuseMount0(); // \RMoore\Truenas\Model\GlusterFuseMount0

try {
    $apiInstance->glusterFuseMountPost($gluster_fuse_mount0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterFuseApi->glusterFuseMountPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_fuse_mount0** | [**\RMoore\Truenas\Model\GlusterFuseMount0**](../Model/GlusterFuseMount0.md)|  | [optional]

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

## `glusterFuseUmountPost()`

```php
glusterFuseUmountPost($gluster_fuse_umount0)
```



Unmount a locally FUSE mounted gluster volume.  `name` String representing the name of the gluster volume `all` Boolean if True umount all locally detected FUSE         mounted gluster volumes `raise` Boolean if True raise a CallError if the FUSE mount         fails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterFuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_fuse_umount0 = new \RMoore\Truenas\Model\GlusterFuseUmount0(); // \RMoore\Truenas\Model\GlusterFuseUmount0

try {
    $apiInstance->glusterFuseUmountPost($gluster_fuse_umount0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterFuseApi->glusterFuseUmountPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_fuse_umount0** | [**\RMoore\Truenas\Model\GlusterFuseUmount0**](../Model/GlusterFuseUmount0.md)|  | [optional]

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
