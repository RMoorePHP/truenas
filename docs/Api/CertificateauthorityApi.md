# RMoore\Truenas\CertificateauthorityApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**certificateauthorityCaSignCsrPost()**](CertificateauthorityApi.md#certificateauthorityCaSignCsrPost) | **POST** /certificateauthority/ca_sign_csr | 
[**certificateauthorityGet()**](CertificateauthorityApi.md#certificateauthorityGet) | **GET** /certificateauthority | 
[**certificateauthorityIdIdDelete()**](CertificateauthorityApi.md#certificateauthorityIdIdDelete) | **DELETE** /certificateauthority/id/{id} | 
[**certificateauthorityIdIdGet()**](CertificateauthorityApi.md#certificateauthorityIdIdGet) | **GET** /certificateauthority/id/{id} | 
[**certificateauthorityIdIdPut()**](CertificateauthorityApi.md#certificateauthorityIdIdPut) | **PUT** /certificateauthority/id/{id} | 
[**certificateauthorityPost()**](CertificateauthorityApi.md#certificateauthorityPost) | **POST** /certificateauthority | 
[**certificateauthorityProfilesGet()**](CertificateauthorityApi.md#certificateauthorityProfilesGet) | **GET** /certificateauthority/profiles | 


## `certificateauthorityCaSignCsrPost()`

```php
certificateauthorityCaSignCsrPost($certificateauthority_ca_sign_csr0)
```



Sign CSR by Certificate Authority of `ca_id`  Sign CSR's and generate a certificate from it. `ca_id` provides which CA is to be used for signing a CSR of `csr_cert_id` which exists in the system  `cert_extensions` can be specified if specific extensions are to be set in the newly signed certificate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CertificateauthorityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$certificateauthority_ca_sign_csr0 = new \RMoore\Truenas\Model\CertificateauthorityCaSignCsr0(); // \RMoore\Truenas\Model\CertificateauthorityCaSignCsr0

try {
    $apiInstance->certificateauthorityCaSignCsrPost($certificateauthority_ca_sign_csr0);
} catch (Exception $e) {
    echo 'Exception when calling CertificateauthorityApi->certificateauthorityCaSignCsrPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificateauthority_ca_sign_csr0** | [**\RMoore\Truenas\Model\CertificateauthorityCaSignCsr0**](../Model/CertificateauthorityCaSignCsr0.md)|  | [optional]

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

## `certificateauthorityGet()`

```php
certificateauthorityGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\CertificateauthorityApi(
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
    $apiInstance->certificateauthorityGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling CertificateauthorityApi->certificateauthorityGet: ', $e->getMessage(), PHP_EOL;
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

## `certificateauthorityIdIdDelete()`

```php
certificateauthorityIdIdDelete($id)
```



Delete a Certificate Authority of `id`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CertificateauthorityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->certificateauthorityIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CertificateauthorityApi->certificateauthorityIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `certificateauthorityIdIdGet()`

```php
certificateauthorityIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\CertificateauthorityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->certificateauthorityIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling CertificateauthorityApi->certificateauthorityIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `certificateauthorityIdIdPut()`

```php
certificateauthorityIdIdPut($id)
```



Update Certificate Authority of `id`  Only `name` and `revoked` attribute can be updated.  If `revoked` is enabled, the CA and its complete chain is marked as revoked and added to the CA's certificate revocation list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CertificateauthorityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->certificateauthorityIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling CertificateauthorityApi->certificateauthorityIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `certificateauthorityPost()`

```php
certificateauthorityPost($certificateauthority_create0)
```



Create a new Certificate Authority  Certificate Authorities are classified under following types with the necessary keywords to be passed for `create_type` attribute to create the respective type of certificate authority  1) Internal Certificate Authority       -  CA_CREATE_INTERNAL  2) Imported Certificate Authority       -  CA_CREATE_IMPORTED  3) Intermediate Certificate Authority   -  CA_CREATE_INTERMEDIATE  Created certificate authorities use RSA keys by default. If an Elliptic Curve Key is desired, then it can be specified with the `key_type` attribute. If the `ec_curve` attribute is not specified for the Elliptic Curve Key, default to using \"BrainpoolP384R1\" curve.  A type is selected by the Certificate Authority Service based on `create_type`. The rest of the values are validated accordingly and finally a certificate is made based on the selected type.  `cert_extensions` can be specified to set X509v3 extensions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CertificateauthorityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$certificateauthority_create0 = new \RMoore\Truenas\Model\CertificateauthorityCreate0(); // \RMoore\Truenas\Model\CertificateauthorityCreate0

try {
    $apiInstance->certificateauthorityPost($certificateauthority_create0);
} catch (Exception $e) {
    echo 'Exception when calling CertificateauthorityApi->certificateauthorityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificateauthority_create0** | [**\RMoore\Truenas\Model\CertificateauthorityCreate0**](../Model/CertificateauthorityCreate0.md)|  | [optional]

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

## `certificateauthorityProfilesGet()`

```php
certificateauthorityProfilesGet()
```



Returns a dictionary of predefined options for specific use cases i.e OpenVPN certificate authority configurations which can be used for creating certificate authorities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CertificateauthorityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->certificateauthorityProfilesGet();
} catch (Exception $e) {
    echo 'Exception when calling CertificateauthorityApi->certificateauthorityProfilesGet: ', $e->getMessage(), PHP_EOL;
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
