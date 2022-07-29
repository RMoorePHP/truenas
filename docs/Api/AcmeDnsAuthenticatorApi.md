# RMoore\Truenas\AcmeDnsAuthenticatorApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**acmeDnsAuthenticatorAuthenticatorSchemasGet()**](AcmeDnsAuthenticatorApi.md#acmeDnsAuthenticatorAuthenticatorSchemasGet) | **GET** /acme/dns/authenticator/authenticator_schemas | 
[**acmeDnsAuthenticatorGet()**](AcmeDnsAuthenticatorApi.md#acmeDnsAuthenticatorGet) | **GET** /acme/dns/authenticator | 
[**acmeDnsAuthenticatorIdIdDelete()**](AcmeDnsAuthenticatorApi.md#acmeDnsAuthenticatorIdIdDelete) | **DELETE** /acme/dns/authenticator/id/{id} | 
[**acmeDnsAuthenticatorIdIdGet()**](AcmeDnsAuthenticatorApi.md#acmeDnsAuthenticatorIdIdGet) | **GET** /acme/dns/authenticator/id/{id} | 
[**acmeDnsAuthenticatorIdIdPut()**](AcmeDnsAuthenticatorApi.md#acmeDnsAuthenticatorIdIdPut) | **PUT** /acme/dns/authenticator/id/{id} | 
[**acmeDnsAuthenticatorPost()**](AcmeDnsAuthenticatorApi.md#acmeDnsAuthenticatorPost) | **POST** /acme/dns/authenticator | 


## `acmeDnsAuthenticatorAuthenticatorSchemasGet()`

```php
acmeDnsAuthenticatorAuthenticatorSchemasGet()
```



Get the schemas for all DNS providers we support for ACME DNS Challenge and the respective attributes required for connecting to them while validating a DNS Challenge

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\AcmeDnsAuthenticatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->acmeDnsAuthenticatorAuthenticatorSchemasGet();
} catch (Exception $e) {
    echo 'Exception when calling AcmeDnsAuthenticatorApi->acmeDnsAuthenticatorAuthenticatorSchemasGet: ', $e->getMessage(), PHP_EOL;
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

## `acmeDnsAuthenticatorGet()`

```php
acmeDnsAuthenticatorGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\AcmeDnsAuthenticatorApi(
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
    $apiInstance->acmeDnsAuthenticatorGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling AcmeDnsAuthenticatorApi->acmeDnsAuthenticatorGet: ', $e->getMessage(), PHP_EOL;
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

## `acmeDnsAuthenticatorIdIdDelete()`

```php
acmeDnsAuthenticatorIdIdDelete($id)
```



Delete DNS Authenticator of `id`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\AcmeDnsAuthenticatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->acmeDnsAuthenticatorIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AcmeDnsAuthenticatorApi->acmeDnsAuthenticatorIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `acmeDnsAuthenticatorIdIdGet()`

```php
acmeDnsAuthenticatorIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\AcmeDnsAuthenticatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->acmeDnsAuthenticatorIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling AcmeDnsAuthenticatorApi->acmeDnsAuthenticatorIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `acmeDnsAuthenticatorIdIdPut()`

```php
acmeDnsAuthenticatorIdIdPut($id)
```



Update DNS Authenticator of `id`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\AcmeDnsAuthenticatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->acmeDnsAuthenticatorIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling AcmeDnsAuthenticatorApi->acmeDnsAuthenticatorIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `acmeDnsAuthenticatorPost()`

```php
acmeDnsAuthenticatorPost($acme_dns_authenticator_create0)
```



Create a DNS Authenticator  Create a specific DNS Authenticator containing required authentication details for the said provider to successfully connect with it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\AcmeDnsAuthenticatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$acme_dns_authenticator_create0 = new \RMoore\Truenas\Model\AcmeDnsAuthenticatorCreate0(); // \RMoore\Truenas\Model\AcmeDnsAuthenticatorCreate0

try {
    $apiInstance->acmeDnsAuthenticatorPost($acme_dns_authenticator_create0);
} catch (Exception $e) {
    echo 'Exception when calling AcmeDnsAuthenticatorApi->acmeDnsAuthenticatorPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acme_dns_authenticator_create0** | [**\RMoore\Truenas\Model\AcmeDnsAuthenticatorCreate0**](../Model/AcmeDnsAuthenticatorCreate0.md)|  | [optional]

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
