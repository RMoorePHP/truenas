# RMoore\Truenas\CertificateApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**certificateAcmeServerChoicesGet()**](CertificateApi.md#certificateAcmeServerChoicesGet) | **GET** /certificate/acme_server_choices | 
[**certificateCertificateSigningRequestsProfilesGet()**](CertificateApi.md#certificateCertificateSigningRequestsProfilesGet) | **GET** /certificate/certificate_signing_requests_profiles | 
[**certificateCountryChoicesGet()**](CertificateApi.md#certificateCountryChoicesGet) | **GET** /certificate/country_choices | 
[**certificateEcCurveChoicesGet()**](CertificateApi.md#certificateEcCurveChoicesGet) | **GET** /certificate/ec_curve_choices | 
[**certificateExtendedKeyUsageChoicesGet()**](CertificateApi.md#certificateExtendedKeyUsageChoicesGet) | **GET** /certificate/extended_key_usage_choices | 
[**certificateGet()**](CertificateApi.md#certificateGet) | **GET** /certificate | 
[**certificateIdIdDelete()**](CertificateApi.md#certificateIdIdDelete) | **DELETE** /certificate/id/{id} | 
[**certificateIdIdGet()**](CertificateApi.md#certificateIdIdGet) | **GET** /certificate/id/{id} | 
[**certificateIdIdPut()**](CertificateApi.md#certificateIdIdPut) | **PUT** /certificate/id/{id} | 
[**certificateKeyTypeChoicesGet()**](CertificateApi.md#certificateKeyTypeChoicesGet) | **GET** /certificate/key_type_choices | 
[**certificatePost()**](CertificateApi.md#certificatePost) | **POST** /certificate | 
[**certificateProfilesGet()**](CertificateApi.md#certificateProfilesGet) | **GET** /certificate/profiles | 


## `certificateAcmeServerChoicesGet()`

```php
certificateAcmeServerChoicesGet()
```



Dictionary of popular ACME Servers with their directory URI endpoints which we display automatically in UI

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->certificateAcmeServerChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling CertificateApi->certificateAcmeServerChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `certificateCertificateSigningRequestsProfilesGet()`

```php
certificateCertificateSigningRequestsProfilesGet()
```



Returns a dictionary of predefined options for specific use cases i.e openvpn client/server configurations which can be used for creating certificate signing requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->certificateCertificateSigningRequestsProfilesGet();
} catch (Exception $e) {
    echo 'Exception when calling CertificateApi->certificateCertificateSigningRequestsProfilesGet: ', $e->getMessage(), PHP_EOL;
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

## `certificateCountryChoicesGet()`

```php
certificateCountryChoicesGet()
```



Returns country choices for creating a certificate/csr.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->certificateCountryChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling CertificateApi->certificateCountryChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `certificateEcCurveChoicesGet()`

```php
certificateEcCurveChoicesGet()
```



Dictionary of supported EC curves.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->certificateEcCurveChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling CertificateApi->certificateEcCurveChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `certificateExtendedKeyUsageChoicesGet()`

```php
certificateExtendedKeyUsageChoicesGet()
```



Dictionary of choices for `ExtendedKeyUsage` extension which can be passed over to `usages` attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->certificateExtendedKeyUsageChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling CertificateApi->certificateExtendedKeyUsageChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `certificateGet()`

```php
certificateGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\CertificateApi(
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
    $apiInstance->certificateGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling CertificateApi->certificateGet: ', $e->getMessage(), PHP_EOL;
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

## `certificateIdIdDelete()`

```php
certificateIdIdDelete($id)
```



Delete certificate of `id`.  If the certificate is an ACME based certificate, certificate service will try to revoke the certificate by updating it's status with the ACME server, if it fails an exception is raised and the certificate is not deleted from the system. However, if `force` is set to True, certificate is deleted from the system even if some error occurred while revoking the certificate with the ACME Server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->certificateIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CertificateApi->certificateIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `certificateIdIdGet()`

```php
certificateIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\CertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->certificateIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling CertificateApi->certificateIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `certificateIdIdPut()`

```php
certificateIdIdPut($id)
```



Update certificate of `id`  Only name and revoked attribute can be updated.  When `revoked` is enabled, the specified cert `id` is revoked and if it belongs to a CA chain which exists on this system, its serial number is added to the CA's certificate revocation list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->certificateIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling CertificateApi->certificateIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `certificateKeyTypeChoicesGet()`

```php
certificateKeyTypeChoicesGet()
```



Dictionary of supported key types for certificates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->certificateKeyTypeChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling CertificateApi->certificateKeyTypeChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `certificatePost()`

```php
certificatePost($certificate_create0)
```



Create a new Certificate  Certificates are classified under following types and the necessary keywords to be passed for `create_type` attribute to create the respective type of certificate  1) Internal Certificate                 -  CERTIFICATE_CREATE_INTERNAL  2) Imported Certificate                 -  CERTIFICATE_CREATE_IMPORTED  3) Certificate Signing Request          -  CERTIFICATE_CREATE_CSR  4) Imported Certificate Signing Request -  CERTIFICATE_CREATE_IMPORTED_CSR  5) ACME Certificate                     -  CERTIFICATE_CREATE_ACME  By default, created certs use RSA keys. If an Elliptic Curve Key is desired, it can be specified with the `key_type` attribute. If the `ec_curve` attribute is not specified for the Elliptic Curve Key, then default to using \"BrainpoolP384R1\" curve.  A type is selected by the Certificate Service based on `create_type`. The rest of the values in `data` are validated accordingly and finally a certificate is made based on the selected type.  `cert_extensions` can be specified to set X509v3 extensions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$certificate_create0 = new \RMoore\Truenas\Model\CertificateCreate0(); // \RMoore\Truenas\Model\CertificateCreate0

try {
    $apiInstance->certificatePost($certificate_create0);
} catch (Exception $e) {
    echo 'Exception when calling CertificateApi->certificatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificate_create0** | [**\RMoore\Truenas\Model\CertificateCreate0**](../Model/CertificateCreate0.md)|  | [optional]

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

## `certificateProfilesGet()`

```php
certificateProfilesGet()
```



Returns a dictionary of predefined options for specific use cases i.e openvpn client/server configurations which can be used for creating certificates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->certificateProfilesGet();
} catch (Exception $e) {
    echo 'Exception when calling CertificateApi->certificateProfilesGet: ', $e->getMessage(), PHP_EOL;
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
