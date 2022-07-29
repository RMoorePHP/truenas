# RMoore\Truenas\SharingSmbApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sharingSmbGet()**](SharingSmbApi.md#sharingSmbGet) | **GET** /sharing/smb | 
[**sharingSmbIdIdDelete()**](SharingSmbApi.md#sharingSmbIdIdDelete) | **DELETE** /sharing/smb/id/{id} | 
[**sharingSmbIdIdGet()**](SharingSmbApi.md#sharingSmbIdIdGet) | **GET** /sharing/smb/id/{id} | 
[**sharingSmbIdIdPut()**](SharingSmbApi.md#sharingSmbIdIdPut) | **PUT** /sharing/smb/id/{id} | 
[**sharingSmbPost()**](SharingSmbApi.md#sharingSmbPost) | **POST** /sharing/smb | 
[**sharingSmbPresetsGet()**](SharingSmbApi.md#sharingSmbPresetsGet) | **GET** /sharing/smb/presets | 


## `sharingSmbGet()`

```php
sharingSmbGet($limit, $offset, $count, $sort)
```



Query shares with filters. In clustered environments, local datastore query is bypassed in favor of clustered registry.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SharingSmbApi(
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
    $apiInstance->sharingSmbGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling SharingSmbApi->sharingSmbGet: ', $e->getMessage(), PHP_EOL;
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

## `sharingSmbIdIdDelete()`

```php
sharingSmbIdIdDelete($id)
```



Delete SMB Share of `id`. This will forcibly disconnect SMB clients that are accessing the share.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SharingSmbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->sharingSmbIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SharingSmbApi->sharingSmbIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `sharingSmbIdIdGet()`

```php
sharingSmbIdIdGet($id)
```



Query shares with filters. In clustered environments, local datastore query is bypassed in favor of clustered registry.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SharingSmbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->sharingSmbIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling SharingSmbApi->sharingSmbIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `sharingSmbIdIdPut()`

```php
sharingSmbIdIdPut($id)
```



Update SMB Share of `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SharingSmbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->sharingSmbIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling SharingSmbApi->sharingSmbIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `sharingSmbPost()`

```php
sharingSmbPost($sharing_smb_create0)
```



Create a SMB Share.  `purpose` applies common configuration presets depending on intended purpose.  `path` path to export over the SMB protocol. If server is clustered, then this path will be relative to the `cluster_volname`.  `timemachine` when set, enables Time Machine backups for this share.  `ro` when enabled, prohibits write access to the share.  `guestok` when enabled, allows access to this share without a password.  `hostsallow` is a list of hostnames / IP addresses which have access to this share.  `hostsdeny` is a list of hostnames / IP addresses which are not allowed access to this share. If a handful of hostnames are to be only allowed access, `hostsdeny` can be passed \"ALL\" which means that it will deny access to ALL hostnames except for the ones which have been listed in `hostsallow`.  `acl` enables support for storing the SMB Security Descriptor as a Filesystem ACL.  `streams` enables support for storing alternate datastreams as filesystem extended attributes.  `fsrvp` enables support for the filesystem remote VSS protocol. This allows clients to create ZFS snapshots through RPC.  `shadowcopy` enables support for the volume shadow copy service.  `auxsmbconf` is a string of additional smb4.conf parameters not covered by the system's API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SharingSmbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharing_smb_create0 = new \RMoore\Truenas\Model\SharingSmbCreate0(); // \RMoore\Truenas\Model\SharingSmbCreate0

try {
    $apiInstance->sharingSmbPost($sharing_smb_create0);
} catch (Exception $e) {
    echo 'Exception when calling SharingSmbApi->sharingSmbPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharing_smb_create0** | [**\RMoore\Truenas\Model\SharingSmbCreate0**](../Model/SharingSmbCreate0.md)|  | [optional]

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

## `sharingSmbPresetsGet()`

```php
sharingSmbPresetsGet()
```



Retrieve pre-defined configuration sets for specific use-cases. These parameter combinations are often non-obvious, but beneficial in these scenarios.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SharingSmbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->sharingSmbPresetsGet();
} catch (Exception $e) {
    echo 'Exception when calling SharingSmbApi->sharingSmbPresetsGet: ', $e->getMessage(), PHP_EOL;
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
