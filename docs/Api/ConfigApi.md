# RMoore\Truenas\ConfigApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**configResetPost()**](ConfigApi.md#configResetPost) | **POST** /config/reset | 
[**configSavePost()**](ConfigApi.md#configSavePost) | **POST** /config/save | 
[**configUploadPost()**](ConfigApi.md#configUploadPost) | **POST** /config/upload | 


## `configResetPost()`

```php
configResetPost($config_reset0)
```



Reset database to configuration defaults.  If `reboot` is true this job will reboot the system after its completed with a delay of 10 seconds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_reset0 = new \RMoore\Truenas\Model\ConfigReset0(); // \RMoore\Truenas\Model\ConfigReset0

try {
    $apiInstance->configResetPost($config_reset0);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configResetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **config_reset0** | [**\RMoore\Truenas\Model\ConfigReset0**](../Model/ConfigReset0.md)|  | [optional]

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

## `configSavePost()`

```php
configSavePost($config_save0)
```



Create a bundle of security-sensitive information. These options select which information is included in the bundle:  `secretseed`: include password secret seed.  `pool_keys`: include GELI encryption keys.  `root_authorized_keys`: include \"authorized_keys\" file for the root user.  If none of these options are set, the bundle is not generated and the database file is provided.  A file will be downloaded from this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_save0 = new \RMoore\Truenas\Model\ConfigSave0(); // \RMoore\Truenas\Model\ConfigSave0

try {
    $apiInstance->configSavePost($config_save0);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configSavePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **config_save0** | [**\RMoore\Truenas\Model\ConfigSave0**](../Model/ConfigSave0.md)|  | [optional]

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

## `configUploadPost()`

```php
configUploadPost()
```



Accepts a configuration file via job pipe.  A file must be uploaded to this endpoint. To upload a file, please send a multipart request with two parts. The first, named `data`, should contain a JSON-encoded payload, and the second, named `file`, should contain an uploaded file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->configUploadPost();
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configUploadPost: ', $e->getMessage(), PHP_EOL;
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
