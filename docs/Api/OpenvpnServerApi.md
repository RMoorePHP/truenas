# RMoore\Truenas\OpenvpnServerApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**openvpnServerAuthenticationAlgorithmChoicesGet()**](OpenvpnServerApi.md#openvpnServerAuthenticationAlgorithmChoicesGet) | **GET** /openvpn/server/authentication_algorithm_choices | 
[**openvpnServerCipherChoicesGet()**](OpenvpnServerApi.md#openvpnServerCipherChoicesGet) | **GET** /openvpn/server/cipher_choices | 
[**openvpnServerClientConfigurationGenerationPost()**](OpenvpnServerApi.md#openvpnServerClientConfigurationGenerationPost) | **POST** /openvpn/server/client_configuration_generation | 
[**openvpnServerGet()**](OpenvpnServerApi.md#openvpnServerGet) | **GET** /openvpn/server | 
[**openvpnServerPut()**](OpenvpnServerApi.md#openvpnServerPut) | **PUT** /openvpn/server | 
[**openvpnServerRenewStaticKeyGet()**](OpenvpnServerApi.md#openvpnServerRenewStaticKeyGet) | **GET** /openvpn/server/renew_static_key | 


## `openvpnServerAuthenticationAlgorithmChoicesGet()`

```php
openvpnServerAuthenticationAlgorithmChoicesGet()
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


$apiInstance = new RMoore\Truenas\Api\OpenvpnServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->openvpnServerAuthenticationAlgorithmChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling OpenvpnServerApi->openvpnServerAuthenticationAlgorithmChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `openvpnServerCipherChoicesGet()`

```php
openvpnServerCipherChoicesGet()
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


$apiInstance = new RMoore\Truenas\Api\OpenvpnServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->openvpnServerCipherChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling OpenvpnServerApi->openvpnServerCipherChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `openvpnServerClientConfigurationGenerationPost()`

```php
openvpnServerClientConfigurationGenerationPost($openvpn_server_client_configuration_generation)
```



Returns a configuration for OpenVPN client which can be used with any client to connect to FN/TN OpenVPN server.  `client_certificate_id` should be a valid certificate issued for use with OpenVPN client service.  `server_address` if specified auto-fills the remote directive in the OpenVPN configuration enabling the end user to use the file without making any edits to connect to OpenVPN server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\OpenvpnServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$openvpn_server_client_configuration_generation = new \RMoore\Truenas\Model\OpenvpnServerClientConfigurationGeneration(); // \RMoore\Truenas\Model\OpenvpnServerClientConfigurationGeneration

try {
    $apiInstance->openvpnServerClientConfigurationGenerationPost($openvpn_server_client_configuration_generation);
} catch (Exception $e) {
    echo 'Exception when calling OpenvpnServerApi->openvpnServerClientConfigurationGenerationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **openvpn_server_client_configuration_generation** | [**\RMoore\Truenas\Model\OpenvpnServerClientConfigurationGeneration**](../Model/OpenvpnServerClientConfigurationGeneration.md)|  | [optional]

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

## `openvpnServerGet()`

```php
openvpnServerGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\OpenvpnServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->openvpnServerGet();
} catch (Exception $e) {
    echo 'Exception when calling OpenvpnServerApi->openvpnServerGet: ', $e->getMessage(), PHP_EOL;
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

## `openvpnServerPut()`

```php
openvpnServerPut($openvpn_server_update0)
```



Update OpenVPN Server configuration.  When `tls_crypt_auth_enabled` is enabled and `tls_crypt_auth` not provided, a static key is automatically generated to be used with OpenVPN server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\OpenvpnServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$openvpn_server_update0 = new \RMoore\Truenas\Model\OpenvpnServerUpdate0(); // \RMoore\Truenas\Model\OpenvpnServerUpdate0

try {
    $apiInstance->openvpnServerPut($openvpn_server_update0);
} catch (Exception $e) {
    echo 'Exception when calling OpenvpnServerApi->openvpnServerPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **openvpn_server_update0** | [**\RMoore\Truenas\Model\OpenvpnServerUpdate0**](../Model/OpenvpnServerUpdate0.md)|  | [optional]

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

## `openvpnServerRenewStaticKeyGet()`

```php
openvpnServerRenewStaticKeyGet()
```



Reset OpenVPN server's TLS static key which will be used to encrypt/authenticate control channel packets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\OpenvpnServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->openvpnServerRenewStaticKeyGet();
} catch (Exception $e) {
    echo 'Exception when calling OpenvpnServerApi->openvpnServerRenewStaticKeyGet: ', $e->getMessage(), PHP_EOL;
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
