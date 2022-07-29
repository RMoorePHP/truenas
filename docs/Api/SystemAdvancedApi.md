# RMoore\Truenas\SystemAdvancedApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemAdvancedGet()**](SystemAdvancedApi.md#systemAdvancedGet) | **GET** /system/advanced | 
[**systemAdvancedPut()**](SystemAdvancedApi.md#systemAdvancedPut) | **PUT** /system/advanced | 
[**systemAdvancedSedGlobalPasswordGet()**](SystemAdvancedApi.md#systemAdvancedSedGlobalPasswordGet) | **GET** /system/advanced/sed_global_password | 
[**systemAdvancedSerialPortChoicesGet()**](SystemAdvancedApi.md#systemAdvancedSerialPortChoicesGet) | **GET** /system/advanced/serial_port_choices | 
[**systemAdvancedSyslogCertificateAuthorityChoicesGet()**](SystemAdvancedApi.md#systemAdvancedSyslogCertificateAuthorityChoicesGet) | **GET** /system/advanced/syslog_certificate_authority_choices | 
[**systemAdvancedSyslogCertificateChoicesGet()**](SystemAdvancedApi.md#systemAdvancedSyslogCertificateChoicesGet) | **GET** /system/advanced/syslog_certificate_choices | 


## `systemAdvancedGet()`

```php
systemAdvancedGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemAdvancedGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemAdvancedApi->systemAdvancedGet: ', $e->getMessage(), PHP_EOL;
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

## `systemAdvancedPut()`

```php
systemAdvancedPut($system_advanced_update0)
```



Update System Advanced Service Configuration.  `consolemenu` should be disabled if the menu at console is not desired. It will default to standard login in the console if disabled.  `autotune` when enabled executes autotune script which attempts to optimize the system based on the installed hardware.  When `syslogserver` is defined, logs of `sysloglevel` or above are sent.  `consolemsg` is a deprecated attribute and will be removed in further releases. Please, use `consolemsg` attribute in the `system.general` plugin.  `isolated_gpu_pci_ids` is a list of PCI ids which are isolated from host system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_advanced_update0 = new \RMoore\Truenas\Model\SystemAdvancedUpdate0(); // \RMoore\Truenas\Model\SystemAdvancedUpdate0

try {
    $apiInstance->systemAdvancedPut($system_advanced_update0);
} catch (Exception $e) {
    echo 'Exception when calling SystemAdvancedApi->systemAdvancedPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_advanced_update0** | [**\RMoore\Truenas\Model\SystemAdvancedUpdate0**](../Model/SystemAdvancedUpdate0.md)|  | [optional]

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

## `systemAdvancedSedGlobalPasswordGet()`

```php
systemAdvancedSedGlobalPasswordGet()
```



Returns configured global SED password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemAdvancedSedGlobalPasswordGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemAdvancedApi->systemAdvancedSedGlobalPasswordGet: ', $e->getMessage(), PHP_EOL;
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

## `systemAdvancedSerialPortChoicesGet()`

```php
systemAdvancedSerialPortChoicesGet()
```



Get available choices for `serialport`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemAdvancedSerialPortChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemAdvancedApi->systemAdvancedSerialPortChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `systemAdvancedSyslogCertificateAuthorityChoicesGet()`

```php
systemAdvancedSyslogCertificateAuthorityChoicesGet()
```



Return choices of certificate authorities which can be used for `syslog_tls_certificate_authority`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemAdvancedSyslogCertificateAuthorityChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemAdvancedApi->systemAdvancedSyslogCertificateAuthorityChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `systemAdvancedSyslogCertificateChoicesGet()`

```php
systemAdvancedSyslogCertificateChoicesGet()
```



Return choices of certificates which can be used for `syslog_tls_certificate`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemAdvancedSyslogCertificateChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemAdvancedApi->systemAdvancedSyslogCertificateChoicesGet: ', $e->getMessage(), PHP_EOL;
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
