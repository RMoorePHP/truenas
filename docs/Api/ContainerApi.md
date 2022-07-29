# RMoore\Truenas\ContainerApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**containerGet()**](ContainerApi.md#containerGet) | **GET** /container | 
[**containerPrunePost()**](ContainerApi.md#containerPrunePost) | **POST** /container/prune | 
[**containerPut()**](ContainerApi.md#containerPut) | **PUT** /container | 


## `containerGet()`

```php
containerGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ContainerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->containerGet();
} catch (Exception $e) {
    echo 'Exception when calling ContainerApi->containerGet: ', $e->getMessage(), PHP_EOL;
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

## `containerPrunePost()`

```php
containerPrunePost($container_prune0)
```



Prune unused images/containers. This will by default remove any dangling images.  `prune_options.remove_unused_images` when set will remove any docker image which is not being used by any container.  `prune_options.remove_stopped_containers` when set will remove any containers which are stopped.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ContainerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_prune0 = new \RMoore\Truenas\Model\ContainerPrune0(); // \RMoore\Truenas\Model\ContainerPrune0

try {
    $apiInstance->containerPrunePost($container_prune0);
} catch (Exception $e) {
    echo 'Exception when calling ContainerApi->containerPrunePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_prune0** | [**\RMoore\Truenas\Model\ContainerPrune0**](../Model/ContainerPrune0.md)|  | [optional]

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

## `containerPut()`

```php
containerPut($container_update0)
```



When `enable_image_updates` is set, system will check if existing container images need to be updated. System will basically check if we have an updated image hash available for the same tag available and if we do, user is alerted to update the image. A use case for unsetting this variable can be rate limits for docker registries, as each time we check if a single image needs update, we consume the rate limit and eventually it can hinder operations if the number of images to be checked is a lot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ContainerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_update0 = new \RMoore\Truenas\Model\ContainerUpdate0(); // \RMoore\Truenas\Model\ContainerUpdate0

try {
    $apiInstance->containerPut($container_update0);
} catch (Exception $e) {
    echo 'Exception when calling ContainerApi->containerPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_update0** | [**\RMoore\Truenas\Model\ContainerUpdate0**](../Model/ContainerUpdate0.md)|  | [optional]

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
