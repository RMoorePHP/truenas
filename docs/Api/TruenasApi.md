# RMoore\Truenas\TruenasApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**truenasAcceptEulaGet()**](TruenasApi.md#truenasAcceptEulaGet) | **GET** /truenas/accept_eula | 
[**truenasGetChassisHardwareGet()**](TruenasApi.md#truenasGetChassisHardwareGet) | **GET** /truenas/get_chassis_hardware | 
[**truenasGetCustomerInformationGet()**](TruenasApi.md#truenasGetCustomerInformationGet) | **GET** /truenas/get_customer_information | 
[**truenasGetEulaGet()**](TruenasApi.md#truenasGetEulaGet) | **GET** /truenas/get_eula | 
[**truenasIsEulaAcceptedGet()**](TruenasApi.md#truenasIsEulaAcceptedGet) | **GET** /truenas/is_eula_accepted | 
[**truenasIsProductionGet()**](TruenasApi.md#truenasIsProductionGet) | **GET** /truenas/is_production | 
[**truenasSetProductionPost()**](TruenasApi.md#truenasSetProductionPost) | **POST** /truenas/set_production | 
[**truenasUpdateCustomerInformationPost()**](TruenasApi.md#truenasUpdateCustomerInformationPost) | **POST** /truenas/update_customer_information | 


## `truenasAcceptEulaGet()`

```php
truenasAcceptEulaGet()
```



Accept TrueNAS EULA.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\TruenasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->truenasAcceptEulaGet();
} catch (Exception $e) {
    echo 'Exception when calling TruenasApi->truenasAcceptEulaGet: ', $e->getMessage(), PHP_EOL;
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

## `truenasGetChassisHardwareGet()`

```php
truenasGetChassisHardwareGet()
```



Returns what type of hardware this is, detected from dmidecode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\TruenasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->truenasGetChassisHardwareGet();
} catch (Exception $e) {
    echo 'Exception when calling TruenasApi->truenasGetChassisHardwareGet: ', $e->getMessage(), PHP_EOL;
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

## `truenasGetCustomerInformationGet()`

```php
truenasGetCustomerInformationGet()
```



Returns stored customer information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\TruenasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->truenasGetCustomerInformationGet();
} catch (Exception $e) {
    echo 'Exception when calling TruenasApi->truenasGetCustomerInformationGet: ', $e->getMessage(), PHP_EOL;
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

## `truenasGetEulaGet()`

```php
truenasGetEulaGet()
```



Returns the TrueNAS End-User License Agreement (EULA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\TruenasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->truenasGetEulaGet();
} catch (Exception $e) {
    echo 'Exception when calling TruenasApi->truenasGetEulaGet: ', $e->getMessage(), PHP_EOL;
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

## `truenasIsEulaAcceptedGet()`

```php
truenasIsEulaAcceptedGet()
```



Returns whether the EULA is accepted or not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\TruenasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->truenasIsEulaAcceptedGet();
} catch (Exception $e) {
    echo 'Exception when calling TruenasApi->truenasIsEulaAcceptedGet: ', $e->getMessage(), PHP_EOL;
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

## `truenasIsProductionGet()`

```php
truenasIsProductionGet()
```



Returns if system is marked as production.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\TruenasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->truenasIsProductionGet();
} catch (Exception $e) {
    echo 'Exception when calling TruenasApi->truenasIsProductionGet: ', $e->getMessage(), PHP_EOL;
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

## `truenasSetProductionPost()`

```php
truenasSetProductionPost($truenas_set_production)
```



Sets system production state and optionally sends initial debug.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\TruenasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$truenas_set_production = new \RMoore\Truenas\Model\TruenasSetProduction(); // \RMoore\Truenas\Model\TruenasSetProduction

try {
    $apiInstance->truenasSetProductionPost($truenas_set_production);
} catch (Exception $e) {
    echo 'Exception when calling TruenasApi->truenasSetProductionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **truenas_set_production** | [**\RMoore\Truenas\Model\TruenasSetProduction**](../Model/TruenasSetProduction.md)|  | [optional]

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

## `truenasUpdateCustomerInformationPost()`

```php
truenasUpdateCustomerInformationPost($truenas_update_customer_information0)
```



Updates customer information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\TruenasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$truenas_update_customer_information0 = new \RMoore\Truenas\Model\TruenasUpdateCustomerInformation0(); // \RMoore\Truenas\Model\TruenasUpdateCustomerInformation0

try {
    $apiInstance->truenasUpdateCustomerInformationPost($truenas_update_customer_information0);
} catch (Exception $e) {
    echo 'Exception when calling TruenasApi->truenasUpdateCustomerInformationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **truenas_update_customer_information0** | [**\RMoore\Truenas\Model\TruenasUpdateCustomerInformation0**](../Model/TruenasUpdateCustomerInformation0.md)|  | [optional]

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
