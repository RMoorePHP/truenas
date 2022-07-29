# RMoore\Truenas\WebuiImageApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**webuiImageGet()**](WebuiImageApi.md#webuiImageGet) | **GET** /webui/image | 
[**webuiImageIdIdDelete()**](WebuiImageApi.md#webuiImageIdIdDelete) | **DELETE** /webui/image/id/{id} | 
[**webuiImageIdIdGet()**](WebuiImageApi.md#webuiImageIdIdGet) | **GET** /webui/image/id/{id} | 
[**webuiImagePost()**](WebuiImageApi.md#webuiImagePost) | **POST** /webui/image | 


## `webuiImageGet()`

```php
webuiImageGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\WebuiImageApi(
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
    $apiInstance->webuiImageGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling WebuiImageApi->webuiImageGet: ', $e->getMessage(), PHP_EOL;
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

## `webuiImageIdIdDelete()`

```php
webuiImageIdIdDelete($id)
```



Remove the database entry, and then the item if it exists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\WebuiImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->webuiImageIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling WebuiImageApi->webuiImageIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `webuiImageIdIdGet()`

```php
webuiImageIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\WebuiImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->webuiImageIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling WebuiImageApi->webuiImageIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `webuiImagePost()`

```php
webuiImagePost($webui_image_create0)
```



Create a new database entry with identifier as the tag, all entries are lowercased  Then puts the file in the /var/db/system/webui/images directory  A file must be uploaded to this endpoint. To upload a file, please send a multipart request with two parts. The first, named `data`, should contain a JSON-encoded payload, and the second, named `file`, should contain an uploaded file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\WebuiImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webui_image_create0 = new \RMoore\Truenas\Model\WebuiImageCreate0(); // \RMoore\Truenas\Model\WebuiImageCreate0

try {
    $apiInstance->webuiImagePost($webui_image_create0);
} catch (Exception $e) {
    echo 'Exception when calling WebuiImageApi->webuiImagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webui_image_create0** | [**\RMoore\Truenas\Model\WebuiImageCreate0**](../Model/WebuiImageCreate0.md)|  | [optional]

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
