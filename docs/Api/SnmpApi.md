# RMoore\Truenas\SnmpApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**snmpGet()**](SnmpApi.md#snmpGet) | **GET** /snmp | 
[**snmpPut()**](SnmpApi.md#snmpPut) | **PUT** /snmp | 


## `snmpGet()`

```php
snmpGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SnmpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->snmpGet();
} catch (Exception $e) {
    echo 'Exception when calling SnmpApi->snmpGet: ', $e->getMessage(), PHP_EOL;
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

## `snmpPut()`

```php
snmpPut($snmp_update0)
```



Update SNMP Service Configuration.  `v3` when set enables SNMP version 3.  `v3_username`, `v3_authtype`, `v3_password`, `v3_privproto` and `v3_privpassphrase` are only used when `v3` is enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SnmpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$snmp_update0 = new \RMoore\Truenas\Model\SnmpUpdate0(); // \RMoore\Truenas\Model\SnmpUpdate0

try {
    $apiInstance->snmpPut($snmp_update0);
} catch (Exception $e) {
    echo 'Exception when calling SnmpApi->snmpPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **snmp_update0** | [**\RMoore\Truenas\Model\SnmpUpdate0**](../Model/SnmpUpdate0.md)|  | [optional]

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
