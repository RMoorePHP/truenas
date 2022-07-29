# RMoore\Truenas\IscsiInitiatorApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**iscsiInitiatorGet()**](IscsiInitiatorApi.md#iscsiInitiatorGet) | **GET** /iscsi/initiator | 
[**iscsiInitiatorIdIdDelete()**](IscsiInitiatorApi.md#iscsiInitiatorIdIdDelete) | **DELETE** /iscsi/initiator/id/{id} | 
[**iscsiInitiatorIdIdGet()**](IscsiInitiatorApi.md#iscsiInitiatorIdIdGet) | **GET** /iscsi/initiator/id/{id} | 
[**iscsiInitiatorIdIdPut()**](IscsiInitiatorApi.md#iscsiInitiatorIdIdPut) | **PUT** /iscsi/initiator/id/{id} | 
[**iscsiInitiatorPost()**](IscsiInitiatorApi.md#iscsiInitiatorPost) | **POST** /iscsi/initiator | 


## `iscsiInitiatorGet()`

```php
iscsiInitiatorGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\IscsiInitiatorApi(
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
    $apiInstance->iscsiInitiatorGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling IscsiInitiatorApi->iscsiInitiatorGet: ', $e->getMessage(), PHP_EOL;
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

## `iscsiInitiatorIdIdDelete()`

```php
iscsiInitiatorIdIdDelete($id)
```



Delete iSCSI initiator of `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\IscsiInitiatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->iscsiInitiatorIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling IscsiInitiatorApi->iscsiInitiatorIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `iscsiInitiatorIdIdGet()`

```php
iscsiInitiatorIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\IscsiInitiatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->iscsiInitiatorIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling IscsiInitiatorApi->iscsiInitiatorIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `iscsiInitiatorIdIdPut()`

```php
iscsiInitiatorIdIdPut($id)
```



Update iSCSI initiator of `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\IscsiInitiatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->iscsiInitiatorIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling IscsiInitiatorApi->iscsiInitiatorIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `iscsiInitiatorPost()`

```php
iscsiInitiatorPost($iscsi_initiator_create0)
```



Create an iSCSI Initiator.  `initiators` is a list of initiator hostnames which are authorized to access an iSCSI Target. To allow all possible initiators, `initiators` can be left empty.  `auth_network` is a list of IP/CIDR addresses which are allowed to use this initiator. If all networks are to be allowed, this field should be left empty.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\IscsiInitiatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$iscsi_initiator_create0 = new \RMoore\Truenas\Model\IscsiInitiatorCreate0(); // \RMoore\Truenas\Model\IscsiInitiatorCreate0

try {
    $apiInstance->iscsiInitiatorPost($iscsi_initiator_create0);
} catch (Exception $e) {
    echo 'Exception when calling IscsiInitiatorApi->iscsiInitiatorPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **iscsi_initiator_create0** | [**\RMoore\Truenas\Model\IscsiInitiatorCreate0**](../Model/IscsiInitiatorCreate0.md)|  | [optional]

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
