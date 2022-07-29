# RMoore\Truenas\OpenvpnClientApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**openvpnClientAuthenticationAlgorithmChoicesGet()**](OpenvpnClientApi.md#openvpnClientAuthenticationAlgorithmChoicesGet) | **GET** /openvpn/client/authentication_algorithm_choices | 
[**openvpnClientCipherChoicesGet()**](OpenvpnClientApi.md#openvpnClientCipherChoicesGet) | **GET** /openvpn/client/cipher_choices | 
[**openvpnClientGet()**](OpenvpnClientApi.md#openvpnClientGet) | **GET** /openvpn/client | 
[**openvpnClientPut()**](OpenvpnClientApi.md#openvpnClientPut) | **PUT** /openvpn/client | 


## `openvpnClientAuthenticationAlgorithmChoicesGet()`

```php
openvpnClientAuthenticationAlgorithmChoicesGet()
```



Returns a dictionary of valid authentication algorithms which can be used with OpenVPN server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\OpenvpnClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->openvpnClientAuthenticationAlgorithmChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling OpenvpnClientApi->openvpnClientAuthenticationAlgorithmChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `openvpnClientCipherChoicesGet()`

```php
openvpnClientCipherChoicesGet()
```



Returns a dictionary of valid ciphers which can be used with OpenVPN server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\OpenvpnClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->openvpnClientCipherChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling OpenvpnClientApi->openvpnClientCipherChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `openvpnClientGet()`

```php
openvpnClientGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\OpenvpnClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->openvpnClientGet();
} catch (Exception $e) {
    echo 'Exception when calling OpenvpnClientApi->openvpnClientGet: ', $e->getMessage(), PHP_EOL;
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

## `openvpnClientPut()`

```php
openvpnClientPut($openvpn_client_update0)
```



Update OpenVPN Client configuration.  `remote` can be a valid ip address / domain which openvpn will try to connect to.  `nobind` must be enabled if OpenVPN client / server are to run concurrently.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\OpenvpnClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$openvpn_client_update0 = new \RMoore\Truenas\Model\OpenvpnClientUpdate0(); // \RMoore\Truenas\Model\OpenvpnClientUpdate0

try {
    $apiInstance->openvpnClientPut($openvpn_client_update0);
} catch (Exception $e) {
    echo 'Exception when calling OpenvpnClientApi->openvpnClientPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **openvpn_client_update0** | [**\RMoore\Truenas\Model\OpenvpnClientUpdate0**](../Model/OpenvpnClientUpdate0.md)|  | [optional]

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
