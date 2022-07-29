# RMoore\Truenas\ContainerImageApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**containerImageGet()**](ContainerImageApi.md#containerImageGet) | **GET** /container/image | 
[**containerImageIdIdDelete()**](ContainerImageApi.md#containerImageIdIdDelete) | **DELETE** /container/image/id/{id} | 
[**containerImageIdIdGet()**](ContainerImageApi.md#containerImageIdIdGet) | **GET** /container/image/id/{id} | 
[**containerImagePullPost()**](ContainerImageApi.md#containerImagePullPost) | **POST** /container/image/pull | 


## `containerImageGet()`

```php
containerImageGet($limit, $offset, $count, $sort)
```



Retrieve container images present in the system.  `query-options.extra.parse_tags` is a boolean which when set will have normalized tags to be retrieved for container images.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ContainerImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int
$offset = 56; // int
$count = True; // bool
$sort = 'sort_example'; // string

try {
    $apiInstance->containerImageGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling ContainerImageApi->containerImageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **offset** | **int**|  | [optional]
 **count** | **bool**|  | [optional]
 **sort** | **string**|  | [optional]

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

## `containerImageIdIdDelete()`

```php
containerImageIdIdDelete($id)
```



`options.force` should be used to force delete an image even if it's in use by a stopped container.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ContainerImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->containerImageIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ContainerImageApi->containerImageIdIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

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

## `containerImageIdIdGet()`

```php
containerImageIdIdGet($id)
```



Retrieve container images present in the system.  `query-options.extra.parse_tags` is a boolean which when set will have normalized tags to be retrieved for container images.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ContainerImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->containerImageIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling ContainerImageApi->containerImageIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

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

## `containerImagePullPost()`

```php
containerImagePullPost($container_image_pull0)
```



`from_image` is the name of the image to pull. Format for the name is \"registry/repo/image\" where registry may be omitted and it will default to docker registry in this case.  `tag` specifies tag of the image and defaults to `null`. In case of `null` it will retrieve all the tags of the image.  `docker_authentication` should be specified if image to be retrieved is under a private repository.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ContainerImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_image_pull0 = new \RMoore\Truenas\Model\ContainerImagePull0(); // \RMoore\Truenas\Model\ContainerImagePull0

try {
    $apiInstance->containerImagePullPost($container_image_pull0);
} catch (Exception $e) {
    echo 'Exception when calling ContainerImageApi->containerImagePullPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_image_pull0** | [**\RMoore\Truenas\Model\ContainerImagePull0**](../Model/ContainerImagePull0.md)|  | [optional]

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
