# RMoore\Truenas\KerberosKeytabApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**kerberosKeytabGet()**](KerberosKeytabApi.md#kerberosKeytabGet) | **GET** /kerberos/keytab | 
[**kerberosKeytabIdIdDelete()**](KerberosKeytabApi.md#kerberosKeytabIdIdDelete) | **DELETE** /kerberos/keytab/id/{id} | 
[**kerberosKeytabIdIdGet()**](KerberosKeytabApi.md#kerberosKeytabIdIdGet) | **GET** /kerberos/keytab/id/{id} | 
[**kerberosKeytabIdIdPut()**](KerberosKeytabApi.md#kerberosKeytabIdIdPut) | **PUT** /kerberos/keytab/id/{id} | 
[**kerberosKeytabPost()**](KerberosKeytabApi.md#kerberosKeytabPost) | **POST** /kerberos/keytab | 
[**kerberosKeytabSystemKeytabListGet()**](KerberosKeytabApi.md#kerberosKeytabSystemKeytabListGet) | **GET** /kerberos/keytab/system_keytab_list | 
[**kerberosKeytabUploadKeytabPost()**](KerberosKeytabApi.md#kerberosKeytabUploadKeytabPost) | **POST** /kerberos/keytab/upload_keytab | 


## `kerberosKeytabGet()`

```php
kerberosKeytabGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\KerberosKeytabApi(
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
    $apiInstance->kerberosKeytabGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling KerberosKeytabApi->kerberosKeytabGet: ', $e->getMessage(), PHP_EOL;
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

## `kerberosKeytabIdIdDelete()`

```php
kerberosKeytabIdIdDelete($id)
```



Delete kerberos keytab by id, and force regeneration of system keytab.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KerberosKeytabApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->kerberosKeytabIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling KerberosKeytabApi->kerberosKeytabIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `kerberosKeytabIdIdGet()`

```php
kerberosKeytabIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\KerberosKeytabApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->kerberosKeytabIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling KerberosKeytabApi->kerberosKeytabIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `kerberosKeytabIdIdPut()`

```php
kerberosKeytabIdIdPut($id)
```



Update kerberos keytab by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KerberosKeytabApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->kerberosKeytabIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling KerberosKeytabApi->kerberosKeytabIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `kerberosKeytabPost()`

```php
kerberosKeytabPost($kerberos_keytab_create0)
```



Create a kerberos keytab. Uploaded keytab files will be merged with the system keytab under /etc/krb5.keytab.  `file` b64encoded kerberos keytab `name` name for kerberos keytab

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KerberosKeytabApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kerberos_keytab_create0 = new \RMoore\Truenas\Model\KerberosKeytabCreate0(); // \RMoore\Truenas\Model\KerberosKeytabCreate0

try {
    $apiInstance->kerberosKeytabPost($kerberos_keytab_create0);
} catch (Exception $e) {
    echo 'Exception when calling KerberosKeytabApi->kerberosKeytabPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kerberos_keytab_create0** | [**\RMoore\Truenas\Model\KerberosKeytabCreate0**](../Model/KerberosKeytabCreate0.md)|  | [optional]

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

## `kerberosKeytabSystemKeytabListGet()`

```php
kerberosKeytabSystemKeytabListGet()
```



Returns content of system keytab (/etc/krb5.keytab).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KerberosKeytabApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->kerberosKeytabSystemKeytabListGet();
} catch (Exception $e) {
    echo 'Exception when calling KerberosKeytabApi->kerberosKeytabSystemKeytabListGet: ', $e->getMessage(), PHP_EOL;
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

## `kerberosKeytabUploadKeytabPost()`

```php
kerberosKeytabUploadKeytabPost($kerberos_keytab_upload_keytab0)
```



Upload a keytab file. This method expects the keytab file to be uploaded using the /_upload/ endpoint.  A file must be uploaded to this endpoint. To upload a file, please send a multipart request with two parts. The first, named `data`, should contain a JSON-encoded payload, and the second, named `file`, should contain an uploaded file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KerberosKeytabApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kerberos_keytab_upload_keytab0 = new \RMoore\Truenas\Model\KerberosKeytabUploadKeytab0(); // \RMoore\Truenas\Model\KerberosKeytabUploadKeytab0

try {
    $apiInstance->kerberosKeytabUploadKeytabPost($kerberos_keytab_upload_keytab0);
} catch (Exception $e) {
    echo 'Exception when calling KerberosKeytabApi->kerberosKeytabUploadKeytabPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kerberos_keytab_upload_keytab0** | [**\RMoore\Truenas\Model\KerberosKeytabUploadKeytab0**](../Model/KerberosKeytabUploadKeytab0.md)|  | [optional]

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
