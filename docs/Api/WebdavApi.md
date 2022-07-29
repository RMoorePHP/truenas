# RMoore\Truenas\WebdavApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**webdavCertChoicesGet()**](WebdavApi.md#webdavCertChoicesGet) | **GET** /webdav/cert_choices | 
[**webdavGet()**](WebdavApi.md#webdavGet) | **GET** /webdav | 
[**webdavPut()**](WebdavApi.md#webdavPut) | **PUT** /webdav | 


## `webdavCertChoicesGet()`

```php
webdavCertChoicesGet()
```



Permitted certificate choices for webdav service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\WebdavApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->webdavCertChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling WebdavApi->webdavCertChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `webdavGet()`

```php
webdavGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\WebdavApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->webdavGet();
} catch (Exception $e) {
    echo 'Exception when calling WebdavApi->webdavGet: ', $e->getMessage(), PHP_EOL;
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

## `webdavPut()`

```php
webdavPut($webdav_update0)
```



Update Webdav Service Configuration.  `protocol` specifies which protocol should be used for connecting to Webdav Serivce. Value of \"HTTPHTTPS\" allows both HTTP and HTTPS connections to the share.  `certssl` is a valid id of a certificate configured in the system. This is required if HTTPS connection is desired with Webdave Service.  There are 3 types of Authentication supported with Webdav: 1) NONE      -   No authentication is required 2) BASIC     -   Password is sent over the network as plaintext 3) DIGEST    -   Hash of the password is sent over the network  `htauth` should be one of the valid types described above.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\WebdavApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webdav_update0 = new \RMoore\Truenas\Model\WebdavUpdate0(); // \RMoore\Truenas\Model\WebdavUpdate0

try {
    $apiInstance->webdavPut($webdav_update0);
} catch (Exception $e) {
    echo 'Exception when calling WebdavApi->webdavPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webdav_update0** | [**\RMoore\Truenas\Model\WebdavUpdate0**](../Model/WebdavUpdate0.md)|  | [optional]

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
