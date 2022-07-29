# RMoore\Truenas\FilesystemAcltemplateApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**filesystemAcltemplateByPathPost()**](FilesystemAcltemplateApi.md#filesystemAcltemplateByPathPost) | **POST** /filesystem/acltemplate/by_path | 
[**filesystemAcltemplateGet()**](FilesystemAcltemplateApi.md#filesystemAcltemplateGet) | **GET** /filesystem/acltemplate | 
[**filesystemAcltemplateIdIdDelete()**](FilesystemAcltemplateApi.md#filesystemAcltemplateIdIdDelete) | **DELETE** /filesystem/acltemplate/id/{id} | 
[**filesystemAcltemplateIdIdGet()**](FilesystemAcltemplateApi.md#filesystemAcltemplateIdIdGet) | **GET** /filesystem/acltemplate/id/{id} | 
[**filesystemAcltemplateIdIdPut()**](FilesystemAcltemplateApi.md#filesystemAcltemplateIdIdPut) | **PUT** /filesystem/acltemplate/id/{id} | 
[**filesystemAcltemplatePost()**](FilesystemAcltemplateApi.md#filesystemAcltemplatePost) | **POST** /filesystem/acltemplate | 


## `filesystemAcltemplateByPathPost()`

```php
filesystemAcltemplateByPathPost($filesystem_acltemplate_by_path0)
```



Retrieve list of available ACL templates for a given `path`.  Supports `query-filters` and `query-options`. `format-options` gives additional options to alter the results of the template query:  `canonicalize` - place ACL entries for NFSv4 ACLs in Microsoft canonical order. `ensure_builtins` - ensure all results contain entries for `builtin_users` and `builtin_administrators` groups. `resolve_names` - convert ids in ACL entries into names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemAcltemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filesystem_acltemplate_by_path0 = new \RMoore\Truenas\Model\FilesystemAcltemplateByPath0(); // \RMoore\Truenas\Model\FilesystemAcltemplateByPath0

try {
    $apiInstance->filesystemAcltemplateByPathPost($filesystem_acltemplate_by_path0);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemAcltemplateApi->filesystemAcltemplateByPathPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filesystem_acltemplate_by_path0** | [**\RMoore\Truenas\Model\FilesystemAcltemplateByPath0**](../Model/FilesystemAcltemplateByPath0.md)|  | [optional]

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

## `filesystemAcltemplateGet()`

```php
filesystemAcltemplateGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\FilesystemAcltemplateApi(
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
    $apiInstance->filesystemAcltemplateGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemAcltemplateApi->filesystemAcltemplateGet: ', $e->getMessage(), PHP_EOL;
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

## `filesystemAcltemplateIdIdDelete()`

```php
filesystemAcltemplateIdIdDelete($id)
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemAcltemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->filesystemAcltemplateIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemAcltemplateApi->filesystemAcltemplateIdIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

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

## `filesystemAcltemplateIdIdGet()`

```php
filesystemAcltemplateIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\FilesystemAcltemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->filesystemAcltemplateIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemAcltemplateApi->filesystemAcltemplateIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

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

## `filesystemAcltemplateIdIdPut()`

```php
filesystemAcltemplateIdIdPut($id)
```



update filesystem ACL template with `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemAcltemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->filesystemAcltemplateIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemAcltemplateApi->filesystemAcltemplateIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

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

## `filesystemAcltemplatePost()`

```php
filesystemAcltemplatePost($filesystem_acltemplate_create0)
```



Create a new filesystem ACL template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemAcltemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filesystem_acltemplate_create0 = new \RMoore\Truenas\Model\FilesystemAcltemplateCreate0(); // \RMoore\Truenas\Model\FilesystemAcltemplateCreate0

try {
    $apiInstance->filesystemAcltemplatePost($filesystem_acltemplate_create0);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemAcltemplateApi->filesystemAcltemplatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filesystem_acltemplate_create0** | [**\RMoore\Truenas\Model\FilesystemAcltemplateCreate0**](../Model/FilesystemAcltemplateCreate0.md)|  | [optional]

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
