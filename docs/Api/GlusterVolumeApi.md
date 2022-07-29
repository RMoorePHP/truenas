# RMoore\Truenas\GlusterVolumeApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**glusterVolumeAddbrickPost()**](GlusterVolumeApi.md#glusterVolumeAddbrickPost) | **POST** /gluster/volume/addbrick | 
[**glusterVolumeGet()**](GlusterVolumeApi.md#glusterVolumeGet) | **GET** /gluster/volume | 
[**glusterVolumeIdIdDelete()**](GlusterVolumeApi.md#glusterVolumeIdIdDelete) | **DELETE** /gluster/volume/id/{id} | 
[**glusterVolumeIdIdGet()**](GlusterVolumeApi.md#glusterVolumeIdIdGet) | **GET** /gluster/volume/id/{id} | 
[**glusterVolumeInfoPost()**](GlusterVolumeApi.md#glusterVolumeInfoPost) | **POST** /gluster/volume/info | 
[**glusterVolumeListGet()**](GlusterVolumeApi.md#glusterVolumeListGet) | **GET** /gluster/volume/list | 
[**glusterVolumeOptresetPost()**](GlusterVolumeApi.md#glusterVolumeOptresetPost) | **POST** /gluster/volume/optreset | 
[**glusterVolumeOptsetPost()**](GlusterVolumeApi.md#glusterVolumeOptsetPost) | **POST** /gluster/volume/optset | 
[**glusterVolumePost()**](GlusterVolumeApi.md#glusterVolumePost) | **POST** /gluster/volume | 
[**glusterVolumeQuotaPost()**](GlusterVolumeApi.md#glusterVolumeQuotaPost) | **POST** /gluster/volume/quota | 
[**glusterVolumeRemovebrickPost()**](GlusterVolumeApi.md#glusterVolumeRemovebrickPost) | **POST** /gluster/volume/removebrick | 
[**glusterVolumeReplacebrickPost()**](GlusterVolumeApi.md#glusterVolumeReplacebrickPost) | **POST** /gluster/volume/replacebrick | 
[**glusterVolumeRestartPost()**](GlusterVolumeApi.md#glusterVolumeRestartPost) | **POST** /gluster/volume/restart | 
[**glusterVolumeStartPost()**](GlusterVolumeApi.md#glusterVolumeStartPost) | **POST** /gluster/volume/start | 
[**glusterVolumeStatusPost()**](GlusterVolumeApi.md#glusterVolumeStatusPost) | **POST** /gluster/volume/status | 
[**glusterVolumeStopPost()**](GlusterVolumeApi.md#glusterVolumeStopPost) | **POST** /gluster/volume/stop | 


## `glusterVolumeAddbrickPost()`

```php
glusterVolumeAddbrickPost($gluster_volume_addbrick0)
```



Add bricks to a gluster volume.  `name` String representing name of gluster volume `bricks` List representing the brick paths     `peer_name` String representing IP or DNS name of the peer     `peer_path` String representing the full path of the brick `replica` Integer replicating replica count `arbiter` Integer replicating arbiter count `force` Boolean, if True, forcefully add brick(s)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_volume_addbrick0 = new \RMoore\Truenas\Model\GlusterVolumeAddbrick0(); // \RMoore\Truenas\Model\GlusterVolumeAddbrick0

try {
    $apiInstance->glusterVolumeAddbrickPost($gluster_volume_addbrick0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterVolumeApi->glusterVolumeAddbrickPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_volume_addbrick0** | [**\RMoore\Truenas\Model\GlusterVolumeAddbrick0**](../Model/GlusterVolumeAddbrick0.md)|  | [optional]

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

## `glusterVolumeGet()`

```php
glusterVolumeGet($limit, $offset, $count, $sort)
```



`query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterVolumeApi(
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
    $apiInstance->glusterVolumeGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling GlusterVolumeApi->glusterVolumeGet: ', $e->getMessage(), PHP_EOL;
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

## `glusterVolumeIdIdDelete()`

```php
glusterVolumeIdIdDelete($id)
```



Delete a gluster volume.  `id` String representing name of gluster volume         to be deleted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->glusterVolumeIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling GlusterVolumeApi->glusterVolumeIdIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

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

## `glusterVolumeIdIdGet()`

```php
glusterVolumeIdIdGet($id)
```



`query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->glusterVolumeIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling GlusterVolumeApi->glusterVolumeIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

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

## `glusterVolumeInfoPost()`

```php
glusterVolumeInfoPost($gluster_volume_info0)
```



Return information about gluster volume(s).  `name` String representing name of gluster volume

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_volume_info0 = new \RMoore\Truenas\Model\GlusterVolumeInfo0(); // \RMoore\Truenas\Model\GlusterVolumeInfo0

try {
    $apiInstance->glusterVolumeInfoPost($gluster_volume_info0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterVolumeApi->glusterVolumeInfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_volume_info0** | [**\RMoore\Truenas\Model\GlusterVolumeInfo0**](../Model/GlusterVolumeInfo0.md)|  | [optional]

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

## `glusterVolumeListGet()`

```php
glusterVolumeListGet()
```



Return list of gluster volumes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->glusterVolumeListGet();
} catch (Exception $e) {
    echo 'Exception when calling GlusterVolumeApi->glusterVolumeListGet: ', $e->getMessage(), PHP_EOL;
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

## `glusterVolumeOptresetPost()`

```php
glusterVolumeOptresetPost($gluster_volume_optreset0)
```



Reset volumes options.     If `opt` is not provided, then all options     will be reset.  `name` String representing name of gluster volume `opt` String representing name of the option to reset `force` Boolean, if True forcefully reset option(s)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_volume_optreset0 = new \RMoore\Truenas\Model\GlusterVolumeOptreset0(); // \RMoore\Truenas\Model\GlusterVolumeOptreset0

try {
    $apiInstance->glusterVolumeOptresetPost($gluster_volume_optreset0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterVolumeApi->glusterVolumeOptresetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_volume_optreset0** | [**\RMoore\Truenas\Model\GlusterVolumeOptreset0**](../Model/GlusterVolumeOptreset0.md)|  | [optional]

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

## `glusterVolumeOptsetPost()`

```php
glusterVolumeOptsetPost($gluster_volume_optset0)
```



Set gluster volume options.  `name` String representing name of gluster volume `opts` Dict where     --key-- is the name of the option     --value-- is the value to be given to the option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_volume_optset0 = new \RMoore\Truenas\Model\GlusterVolumeOptset0(); // \RMoore\Truenas\Model\GlusterVolumeOptset0

try {
    $apiInstance->glusterVolumeOptsetPost($gluster_volume_optset0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterVolumeApi->glusterVolumeOptsetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_volume_optset0** | [**\RMoore\Truenas\Model\GlusterVolumeOptset0**](../Model/GlusterVolumeOptset0.md)|  | [optional]

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

## `glusterVolumePost()`

```php
glusterVolumePost($gluster_volume_create0)
```



Create a gluster volume.  `name` String representing name to be given to the volume `bricks` List representing the brick paths     `peer_name` String representing IP or DNS name of the peer     `peer_path` String representing the full path of the brick  `replica` Integer representing number of replica bricks `arbiter` Integer representing number of arbiter bricks `disperse` Integer representing number of disperse bricks `disperse_data` Integer representing number of disperse data bricks `redundancy` Integer representing number of redundancy bricks `force` Boolean, if True ignore potential warnings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_volume_create0 = new \RMoore\Truenas\Model\GlusterVolumeCreate0(); // \RMoore\Truenas\Model\GlusterVolumeCreate0

try {
    $apiInstance->glusterVolumePost($gluster_volume_create0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterVolumeApi->glusterVolumePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_volume_create0** | [**\RMoore\Truenas\Model\GlusterVolumeCreate0**](../Model/GlusterVolumeCreate0.md)|  | [optional]

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

## `glusterVolumeQuotaPost()`

```php
glusterVolumeQuotaPost($gluster_volume_quota0)
```



Enable/Disable the quota for a given gluster volume.  `name` String representing name of gluster volume `enable` Boolean, if True enable quota else disable it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_volume_quota0 = new \RMoore\Truenas\Model\GlusterVolumeQuota0(); // \RMoore\Truenas\Model\GlusterVolumeQuota0

try {
    $apiInstance->glusterVolumeQuotaPost($gluster_volume_quota0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterVolumeApi->glusterVolumeQuotaPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_volume_quota0** | [**\RMoore\Truenas\Model\GlusterVolumeQuota0**](../Model/GlusterVolumeQuota0.md)|  | [optional]

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

## `glusterVolumeRemovebrickPost()`

```php
glusterVolumeRemovebrickPost($gluster_volume_removebrick0)
```



Perform a remove operation on the brick(s) in the gluster volume.  `name` String representing name of gluster volume `bricks` List representing the brick paths     `peer_name` String representing IP or DNS name of the peer     `peer_path` String representing the full path of the brick `operation` String representing the operation to be performed     `START` Start the removal of the brick(s)     `STOP` Stop the removal of the brick(s)     `COMMIT` Commit the removal of the brick(s)     `STATUS` Display status of the removal of the brick(s)     `FORCE` Force the removal of the brick(s) `replica` Integer representing replica count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_volume_removebrick0 = new \RMoore\Truenas\Model\GlusterVolumeRemovebrick0(); // \RMoore\Truenas\Model\GlusterVolumeRemovebrick0

try {
    $apiInstance->glusterVolumeRemovebrickPost($gluster_volume_removebrick0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterVolumeApi->glusterVolumeRemovebrickPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_volume_removebrick0** | [**\RMoore\Truenas\Model\GlusterVolumeRemovebrick0**](../Model/GlusterVolumeRemovebrick0.md)|  | [optional]

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

## `glusterVolumeReplacebrickPost()`

```php
glusterVolumeReplacebrickPost($gluster_volume_replacebrick0)
```



Commit the replacement of a brick.  `name` String representing name of gluster volume `src_brick` Dict where     `peer_name` key is a string representing IP or DNS name of the peer     `peer_path` key is a string representing the full path of the brick `new_brick` Dict where     `peer_name` key is a string representing IP or DNS name of the peer     `peer_path` key is a string representing the full path of the brick

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_volume_replacebrick0 = new \RMoore\Truenas\Model\GlusterVolumeReplacebrick0(); // \RMoore\Truenas\Model\GlusterVolumeReplacebrick0

try {
    $apiInstance->glusterVolumeReplacebrickPost($gluster_volume_replacebrick0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterVolumeApi->glusterVolumeReplacebrickPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_volume_replacebrick0** | [**\RMoore\Truenas\Model\GlusterVolumeReplacebrick0**](../Model/GlusterVolumeReplacebrick0.md)|  | [optional]

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

## `glusterVolumeRestartPost()`

```php
glusterVolumeRestartPost($gluster_volume_restart0)
```



Restart a gluster volume.  `name` String representing name of gluster volume `force` Boolean, if True forcefully restart the gluster volume

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_volume_restart0 = new \RMoore\Truenas\Model\GlusterVolumeRestart0(); // \RMoore\Truenas\Model\GlusterVolumeRestart0

try {
    $apiInstance->glusterVolumeRestartPost($gluster_volume_restart0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterVolumeApi->glusterVolumeRestartPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_volume_restart0** | [**\RMoore\Truenas\Model\GlusterVolumeRestart0**](../Model/GlusterVolumeRestart0.md)|  | [optional]

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

## `glusterVolumeStartPost()`

```php
glusterVolumeStartPost($gluster_volume_start0)
```



Start a gluster volume.  `name` String representing name of gluster volume `force` Boolean, if True forcefully start the gluster volume

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_volume_start0 = new \RMoore\Truenas\Model\GlusterVolumeStart0(); // \RMoore\Truenas\Model\GlusterVolumeStart0

try {
    $apiInstance->glusterVolumeStartPost($gluster_volume_start0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterVolumeApi->glusterVolumeStartPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_volume_start0** | [**\RMoore\Truenas\Model\GlusterVolumeStart0**](../Model/GlusterVolumeStart0.md)|  | [optional]

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

## `glusterVolumeStatusPost()`

```php
glusterVolumeStatusPost($gluster_volume_status0)
```



Return detailed information about gluster volume.  `name` String representing name of gluster volume `verbose` Boolean, If False, only return brick information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_volume_status0 = new \RMoore\Truenas\Model\GlusterVolumeStatus0(); // \RMoore\Truenas\Model\GlusterVolumeStatus0

try {
    $apiInstance->glusterVolumeStatusPost($gluster_volume_status0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterVolumeApi->glusterVolumeStatusPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_volume_status0** | [**\RMoore\Truenas\Model\GlusterVolumeStatus0**](../Model/GlusterVolumeStatus0.md)|  | [optional]

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

## `glusterVolumeStopPost()`

```php
glusterVolumeStopPost($gluster_volume_stop0)
```



Stop a gluster volume.  `name` String representing name of gluster volume `force` Boolean, if True forcefully stop the gluster volume

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_volume_stop0 = new \RMoore\Truenas\Model\GlusterVolumeStop0(); // \RMoore\Truenas\Model\GlusterVolumeStop0

try {
    $apiInstance->glusterVolumeStopPost($gluster_volume_stop0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterVolumeApi->glusterVolumeStopPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_volume_stop0** | [**\RMoore\Truenas\Model\GlusterVolumeStop0**](../Model/GlusterVolumeStop0.md)|  | [optional]

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
