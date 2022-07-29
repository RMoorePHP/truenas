# RMoore\Truenas\InterfaceCapabilitiesApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**interfaceCapabilitiesGetPost()**](InterfaceCapabilitiesApi.md#interfaceCapabilitiesGetPost) | **POST** /interface/capabilities/get | 
[**interfaceCapabilitiesSetPost()**](InterfaceCapabilitiesApi.md#interfaceCapabilitiesSetPost) | **POST** /interface/capabilities/set | 


## `interfaceCapabilitiesGetPost()`

```php
interfaceCapabilitiesGetPost($body)
```



Return enabled, disabled and supported capabilities (also known as features) on a given interface.  `name` String representing name of the interface

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceCapabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->interfaceCapabilitiesGetPost($body);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceCapabilitiesApi->interfaceCapabilitiesGetPost: ', $e->getMessage(), PHP_EOL;
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

## `interfaceCapabilitiesSetPost()`

```php
interfaceCapabilitiesSetPost($interface_capabilities_set0)
```



Enable or Disable capabilties (also known as features) on a given interface.  `name` String representing name of the interface `capabilities` List representing capabilities to be acted upon `action` String when set to 'ENABLE' will enable `capabilities` else if set             to `DISABLE` will disable `capabilities`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceCapabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$interface_capabilities_set0 = new \RMoore\Truenas\Model\InterfaceCapabilitiesSet0(); // \RMoore\Truenas\Model\InterfaceCapabilitiesSet0

try {
    $apiInstance->interfaceCapabilitiesSetPost($interface_capabilities_set0);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceCapabilitiesApi->interfaceCapabilitiesSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **interface_capabilities_set0** | [**\RMoore\Truenas\Model\InterfaceCapabilitiesSet0**](../Model/InterfaceCapabilitiesSet0.md)|  | [optional]

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
