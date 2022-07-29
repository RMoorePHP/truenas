# RMoore\Truenas\SystemGeneralApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemGeneralCountryChoicesGet()**](SystemGeneralApi.md#systemGeneralCountryChoicesGet) | **GET** /system/general/country_choices | 
[**systemGeneralGet()**](SystemGeneralApi.md#systemGeneralGet) | **GET** /system/general | 
[**systemGeneralKbdmapChoicesGet()**](SystemGeneralApi.md#systemGeneralKbdmapChoicesGet) | **GET** /system/general/kbdmap_choices | 
[**systemGeneralLanguageChoicesGet()**](SystemGeneralApi.md#systemGeneralLanguageChoicesGet) | **GET** /system/general/language_choices | 
[**systemGeneralLocalUrlGet()**](SystemGeneralApi.md#systemGeneralLocalUrlGet) | **GET** /system/general/local_url | 
[**systemGeneralPut()**](SystemGeneralApi.md#systemGeneralPut) | **PUT** /system/general | 
[**systemGeneralTimezoneChoicesGet()**](SystemGeneralApi.md#systemGeneralTimezoneChoicesGet) | **GET** /system/general/timezone_choices | 
[**systemGeneralUiAddressChoicesGet()**](SystemGeneralApi.md#systemGeneralUiAddressChoicesGet) | **GET** /system/general/ui_address_choices | 
[**systemGeneralUiCertificateChoicesGet()**](SystemGeneralApi.md#systemGeneralUiCertificateChoicesGet) | **GET** /system/general/ui_certificate_choices | 
[**systemGeneralUiHttpsprotocolsChoicesGet()**](SystemGeneralApi.md#systemGeneralUiHttpsprotocolsChoicesGet) | **GET** /system/general/ui_httpsprotocols_choices | 
[**systemGeneralUiRestartGet()**](SystemGeneralApi.md#systemGeneralUiRestartGet) | **GET** /system/general/ui_restart | 
[**systemGeneralUiRestartPost()**](SystemGeneralApi.md#systemGeneralUiRestartPost) | **POST** /system/general/ui_restart | 
[**systemGeneralUiV6addressChoicesGet()**](SystemGeneralApi.md#systemGeneralUiV6addressChoicesGet) | **GET** /system/general/ui_v6address_choices | 


## `systemGeneralCountryChoicesGet()`

```php
systemGeneralCountryChoicesGet()
```



Returns country choices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemGeneralCountryChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemGeneralApi->systemGeneralCountryChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `systemGeneralGet()`

```php
systemGeneralGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemGeneralGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemGeneralApi->systemGeneralGet: ', $e->getMessage(), PHP_EOL;
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

## `systemGeneralKbdmapChoicesGet()`

```php
systemGeneralKbdmapChoicesGet()
```



Returns kbdmap choices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemGeneralKbdmapChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemGeneralApi->systemGeneralKbdmapChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `systemGeneralLanguageChoicesGet()`

```php
systemGeneralLanguageChoicesGet()
```



Returns language choices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemGeneralLanguageChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemGeneralApi->systemGeneralLanguageChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `systemGeneralLocalUrlGet()`

```php
systemGeneralLocalUrlGet()
```



Returns configured local url in the format of protocol://host:port

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemGeneralLocalUrlGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemGeneralApi->systemGeneralLocalUrlGet: ', $e->getMessage(), PHP_EOL;
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

## `systemGeneralPut()`

```php
systemGeneralPut($system_general_update0)
```



Update System General Service Configuration.  `ui_certificate` is used to enable HTTPS access to the system. If `ui_certificate` is not configured on boot, it is automatically created by the system.  `ui_httpsredirect` when set, makes sure that all HTTP requests are converted to HTTPS requests to better enhance security.  `ui_address` and `ui_v6address` are a list of valid ipv4/ipv6 addresses respectively which the system will listen on.  `syslogserver` and `sysloglevel` are deprecated fields as of 11.3 and will be permanently moved to system.advanced.update for 12.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_general_update0 = new \RMoore\Truenas\Model\SystemGeneralUpdate0(); // \RMoore\Truenas\Model\SystemGeneralUpdate0

try {
    $apiInstance->systemGeneralPut($system_general_update0);
} catch (Exception $e) {
    echo 'Exception when calling SystemGeneralApi->systemGeneralPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_general_update0** | [**\RMoore\Truenas\Model\SystemGeneralUpdate0**](../Model/SystemGeneralUpdate0.md)|  | [optional]

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

## `systemGeneralTimezoneChoicesGet()`

```php
systemGeneralTimezoneChoicesGet()
```



Returns time zone choices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemGeneralTimezoneChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemGeneralApi->systemGeneralTimezoneChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `systemGeneralUiAddressChoicesGet()`

```php
systemGeneralUiAddressChoicesGet()
```



Returns UI ipv4 address choices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemGeneralUiAddressChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemGeneralApi->systemGeneralUiAddressChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `systemGeneralUiCertificateChoicesGet()`

```php
systemGeneralUiCertificateChoicesGet()
```



Return choices of certificates which can be used for `ui_certificate`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemGeneralUiCertificateChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemGeneralApi->systemGeneralUiCertificateChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `systemGeneralUiHttpsprotocolsChoicesGet()`

```php
systemGeneralUiHttpsprotocolsChoicesGet()
```



Returns available HTTPS protocols.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemGeneralUiHttpsprotocolsChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemGeneralApi->systemGeneralUiHttpsprotocolsChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `systemGeneralUiRestartGet()`

```php
systemGeneralUiRestartGet($body)
```



Restart HTTP server to use latest UI settings.  HTTP server will be restarted after `delay` seconds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 56; // int

try {
    $apiInstance->systemGeneralUiRestartGet($body);
} catch (Exception $e) {
    echo 'Exception when calling SystemGeneralApi->systemGeneralUiRestartGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **int**|  | [optional]

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

## `systemGeneralUiRestartPost()`

```php
systemGeneralUiRestartPost($body)
```



Restart HTTP server to use latest UI settings.  HTTP server will be restarted after `delay` seconds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 56; // int

try {
    $apiInstance->systemGeneralUiRestartPost($body);
} catch (Exception $e) {
    echo 'Exception when calling SystemGeneralApi->systemGeneralUiRestartPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **int**|  | [optional]

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

## `systemGeneralUiV6addressChoicesGet()`

```php
systemGeneralUiV6addressChoicesGet()
```



Returns UI ipv6 address choices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SystemGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->systemGeneralUiV6addressChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling SystemGeneralApi->systemGeneralUiV6addressChoicesGet: ', $e->getMessage(), PHP_EOL;
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
