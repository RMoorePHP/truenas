# RMoore\Truenas\KerberosApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**kerberosGet()**](KerberosApi.md#kerberosGet) | **GET** /kerberos | 
[**kerberosPut()**](KerberosApi.md#kerberosPut) | **PUT** /kerberos | 


## `kerberosGet()`

```php
kerberosGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KerberosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->kerberosGet();
} catch (Exception $e) {
    echo 'Exception when calling KerberosApi->kerberosGet: ', $e->getMessage(), PHP_EOL;
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

## `kerberosPut()`

```php
kerberosPut($kerberos_update0)
```



`appdefaults_aux` add parameters to \"appdefaults\" section of the krb5.conf file.  `libdefaults_aux` add parameters to \"libdefaults\" section of the krb5.conf file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KerberosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kerberos_update0 = new \RMoore\Truenas\Model\KerberosUpdate0(); // \RMoore\Truenas\Model\KerberosUpdate0

try {
    $apiInstance->kerberosPut($kerberos_update0);
} catch (Exception $e) {
    echo 'Exception when calling KerberosApi->kerberosPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kerberos_update0** | [**\RMoore\Truenas\Model\KerberosUpdate0**](../Model/KerberosUpdate0.md)|  | [optional]

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
