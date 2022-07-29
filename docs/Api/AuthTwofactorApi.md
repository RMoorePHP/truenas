# RMoore\Truenas\AuthTwofactorApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authTwofactorGet()**](AuthTwofactorApi.md#authTwofactorGet) | **GET** /auth/twofactor | 
[**authTwofactorProvisioningUriGet()**](AuthTwofactorApi.md#authTwofactorProvisioningUriGet) | **GET** /auth/twofactor/provisioning_uri | 
[**authTwofactorPut()**](AuthTwofactorApi.md#authTwofactorPut) | **PUT** /auth/twofactor | 
[**authTwofactorRenewSecretGet()**](AuthTwofactorApi.md#authTwofactorRenewSecretGet) | **GET** /auth/twofactor/renew_secret | 
[**authTwofactorVerifyPost()**](AuthTwofactorApi.md#authTwofactorVerifyPost) | **POST** /auth/twofactor/verify | 


## `authTwofactorGet()`

```php
authTwofactorGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\AuthTwofactorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->authTwofactorGet();
} catch (Exception $e) {
    echo 'Exception when calling AuthTwofactorApi->authTwofactorGet: ', $e->getMessage(), PHP_EOL;
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

## `authTwofactorProvisioningUriGet()`

```php
authTwofactorProvisioningUriGet()
```



Returns the provisioning URI for the OTP. This can then be encoded in a QR Code and used to provision an OTP app like Google Authenticator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\AuthTwofactorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->authTwofactorProvisioningUriGet();
} catch (Exception $e) {
    echo 'Exception when calling AuthTwofactorApi->authTwofactorProvisioningUriGet: ', $e->getMessage(), PHP_EOL;
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

## `authTwofactorPut()`

```php
authTwofactorPut($auth_twofactor_update0)
```



`otp_digits` represents number of allowed digits in the OTP.  `window` extends the validity to `window` many counter ticks before and after the current one.  `interval` is time duration in seconds specifying OTP expiration time from it's creation time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\AuthTwofactorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_twofactor_update0 = new \RMoore\Truenas\Model\AuthTwofactorUpdate0(); // \RMoore\Truenas\Model\AuthTwofactorUpdate0

try {
    $apiInstance->authTwofactorPut($auth_twofactor_update0);
} catch (Exception $e) {
    echo 'Exception when calling AuthTwofactorApi->authTwofactorPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_twofactor_update0** | [**\RMoore\Truenas\Model\AuthTwofactorUpdate0**](../Model/AuthTwofactorUpdate0.md)|  | [optional]

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

## `authTwofactorRenewSecretGet()`

```php
authTwofactorRenewSecretGet()
```



Generates a new secret for Two Factor Authentication. Returns boolean true on success.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\AuthTwofactorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->authTwofactorRenewSecretGet();
} catch (Exception $e) {
    echo 'Exception when calling AuthTwofactorApi->authTwofactorRenewSecretGet: ', $e->getMessage(), PHP_EOL;
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

## `authTwofactorVerifyPost()`

```php
authTwofactorVerifyPost($body)
```



Returns boolean true if provided `token` is successfully authenticated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\AuthTwofactorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->authTwofactorVerifyPost($body);
} catch (Exception $e) {
    echo 'Exception when calling AuthTwofactorApi->authTwofactorVerifyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**|  | [optional]

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
