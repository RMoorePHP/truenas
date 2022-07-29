# RMoore\Truenas\KerberosRealmApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**kerberosRealmGet()**](KerberosRealmApi.md#kerberosRealmGet) | **GET** /kerberos/realm | 
[**kerberosRealmIdIdDelete()**](KerberosRealmApi.md#kerberosRealmIdIdDelete) | **DELETE** /kerberos/realm/id/{id} | 
[**kerberosRealmIdIdGet()**](KerberosRealmApi.md#kerberosRealmIdIdGet) | **GET** /kerberos/realm/id/{id} | 
[**kerberosRealmIdIdPut()**](KerberosRealmApi.md#kerberosRealmIdIdPut) | **PUT** /kerberos/realm/id/{id} | 
[**kerberosRealmPost()**](KerberosRealmApi.md#kerberosRealmPost) | **POST** /kerberos/realm | 


## `kerberosRealmGet()`

```php
kerberosRealmGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\KerberosRealmApi(
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
    $apiInstance->kerberosRealmGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling KerberosRealmApi->kerberosRealmGet: ', $e->getMessage(), PHP_EOL;
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

## `kerberosRealmIdIdDelete()`

```php
kerberosRealmIdIdDelete($id)
```



Delete a kerberos realm by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KerberosRealmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->kerberosRealmIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling KerberosRealmApi->kerberosRealmIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `kerberosRealmIdIdGet()`

```php
kerberosRealmIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\KerberosRealmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->kerberosRealmIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling KerberosRealmApi->kerberosRealmIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `kerberosRealmIdIdPut()`

```php
kerberosRealmIdIdPut($id)
```



Update a kerberos realm by id. This will be automatically populated during the domain join process in an Active Directory environment. Kerberos realm names are case-sensitive, but convention is to only use upper-case.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KerberosRealmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->kerberosRealmIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling KerberosRealmApi->kerberosRealmIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `kerberosRealmPost()`

```php
kerberosRealmPost($kerberos_realm_create0)
```



Create a new kerberos realm. This will be automatically populated during the domain join process in an Active Directory environment. Kerberos realm names are case-sensitive, but convention is to only use upper-case.  Entries for kdc, admin_server, and kpasswd_server are not required. If they are unpopulated, then kerberos will use DNS srv records to discover the correct servers. The option to hard-code them is provided due to AD site discovery. Kerberos has no concept of Active Directory sites. This means that middleware performs the site discovery and sets the kerberos configuration based on the AD site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KerberosRealmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kerberos_realm_create0 = new \RMoore\Truenas\Model\KerberosRealmCreate0(); // \RMoore\Truenas\Model\KerberosRealmCreate0

try {
    $apiInstance->kerberosRealmPost($kerberos_realm_create0);
} catch (Exception $e) {
    echo 'Exception when calling KerberosRealmApi->kerberosRealmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kerberos_realm_create0** | [**\RMoore\Truenas\Model\KerberosRealmCreate0**](../Model/KerberosRealmCreate0.md)|  | [optional]

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
