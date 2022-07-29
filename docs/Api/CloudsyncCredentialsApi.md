# RMoore\Truenas\CloudsyncCredentialsApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloudsyncCredentialsGet()**](CloudsyncCredentialsApi.md#cloudsyncCredentialsGet) | **GET** /cloudsync/credentials | 
[**cloudsyncCredentialsIdIdDelete()**](CloudsyncCredentialsApi.md#cloudsyncCredentialsIdIdDelete) | **DELETE** /cloudsync/credentials/id/{id} | 
[**cloudsyncCredentialsIdIdGet()**](CloudsyncCredentialsApi.md#cloudsyncCredentialsIdIdGet) | **GET** /cloudsync/credentials/id/{id} | 
[**cloudsyncCredentialsIdIdPut()**](CloudsyncCredentialsApi.md#cloudsyncCredentialsIdIdPut) | **PUT** /cloudsync/credentials/id/{id} | 
[**cloudsyncCredentialsPost()**](CloudsyncCredentialsApi.md#cloudsyncCredentialsPost) | **POST** /cloudsync/credentials | 
[**cloudsyncCredentialsVerifyPost()**](CloudsyncCredentialsApi.md#cloudsyncCredentialsVerifyPost) | **POST** /cloudsync/credentials/verify | 


## `cloudsyncCredentialsGet()`

```php
cloudsyncCredentialsGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\CloudsyncCredentialsApi(
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
    $apiInstance->cloudsyncCredentialsGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncCredentialsApi->cloudsyncCredentialsGet: ', $e->getMessage(), PHP_EOL;
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

## `cloudsyncCredentialsIdIdDelete()`

```php
cloudsyncCredentialsIdIdDelete($id)
```



Delete Cloud Sync Credentials of `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncCredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->cloudsyncCredentialsIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncCredentialsApi->cloudsyncCredentialsIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `cloudsyncCredentialsIdIdGet()`

```php
cloudsyncCredentialsIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\CloudsyncCredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->cloudsyncCredentialsIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncCredentialsApi->cloudsyncCredentialsIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `cloudsyncCredentialsIdIdPut()`

```php
cloudsyncCredentialsIdIdPut($id)
```



Update Cloud Sync Credentials of `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncCredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->cloudsyncCredentialsIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncCredentialsApi->cloudsyncCredentialsIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `cloudsyncCredentialsPost()`

```php
cloudsyncCredentialsPost($cloudsync_credentials_create0)
```



Create Cloud Sync Credentials.  `attributes` is a dictionary of valid values which will be used to authorize with the `provider`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncCredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloudsync_credentials_create0 = new \RMoore\Truenas\Model\CloudsyncCredentialsCreate0(); // \RMoore\Truenas\Model\CloudsyncCredentialsCreate0

try {
    $apiInstance->cloudsyncCredentialsPost($cloudsync_credentials_create0);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncCredentialsApi->cloudsyncCredentialsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudsync_credentials_create0** | [**\RMoore\Truenas\Model\CloudsyncCredentialsCreate0**](../Model/CloudsyncCredentialsCreate0.md)|  | [optional]

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

## `cloudsyncCredentialsVerifyPost()`

```php
cloudsyncCredentialsVerifyPost($cloudsync_credentials_verify0)
```



Verify if `attributes` provided for `provider` are authorized by the `provider`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncCredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloudsync_credentials_verify0 = new \RMoore\Truenas\Model\CloudsyncCredentialsVerify0(); // \RMoore\Truenas\Model\CloudsyncCredentialsVerify0

try {
    $apiInstance->cloudsyncCredentialsVerifyPost($cloudsync_credentials_verify0);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncCredentialsApi->cloudsyncCredentialsVerifyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudsync_credentials_verify0** | [**\RMoore\Truenas\Model\CloudsyncCredentialsVerify0**](../Model/CloudsyncCredentialsVerify0.md)|  | [optional]

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
