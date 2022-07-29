# RMoore\Truenas\SupportApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**supportAttachTicketMaxSizeGet()**](SupportApi.md#supportAttachTicketMaxSizeGet) | **GET** /support/attach_ticket_max_size | 
[**supportAttachTicketPost()**](SupportApi.md#supportAttachTicketPost) | **POST** /support/attach_ticket | 
[**supportFetchCategoriesPost()**](SupportApi.md#supportFetchCategoriesPost) | **POST** /support/fetch_categories | 
[**supportFieldsGet()**](SupportApi.md#supportFieldsGet) | **GET** /support/fields | 
[**supportGet()**](SupportApi.md#supportGet) | **GET** /support | 
[**supportIsAvailableAndEnabledGet()**](SupportApi.md#supportIsAvailableAndEnabledGet) | **GET** /support/is_available_and_enabled | 
[**supportIsAvailableGet()**](SupportApi.md#supportIsAvailableGet) | **GET** /support/is_available | 
[**supportNewTicketPost()**](SupportApi.md#supportNewTicketPost) | **POST** /support/new_ticket | 
[**supportPut()**](SupportApi.md#supportPut) | **PUT** /support | 


## `supportAttachTicketMaxSizeGet()`

```php
supportAttachTicketMaxSizeGet()
```



Returns maximum uploaded file size for `support.attach_ticket`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->supportAttachTicketMaxSizeGet();
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportAttachTicketMaxSizeGet: ', $e->getMessage(), PHP_EOL;
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

## `supportAttachTicketPost()`

```php
supportAttachTicketPost($support_attach_ticket0)
```



Method to attach a file to a existing ticket.  A file must be uploaded to this endpoint. To upload a file, please send a multipart request with two parts. The first, named `data`, should contain a JSON-encoded payload, and the second, named `file`, should contain an uploaded file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_attach_ticket0 = new \RMoore\Truenas\Model\SupportAttachTicket0(); // \RMoore\Truenas\Model\SupportAttachTicket0

try {
    $apiInstance->supportAttachTicketPost($support_attach_ticket0);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportAttachTicketPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **support_attach_ticket0** | [**\RMoore\Truenas\Model\SupportAttachTicket0**](../Model/SupportAttachTicket0.md)|  | [optional]

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

## `supportFetchCategoriesPost()`

```php
supportFetchCategoriesPost($body)
```



Fetch issue categories using access token `token`. Returns a dict with the category name as a key and id as value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->supportFetchCategoriesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportFetchCategoriesPost: ', $e->getMessage(), PHP_EOL;
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

## `supportFieldsGet()`

```php
supportFieldsGet()
```



Returns list of pairs of field names and field titles for Proactive Support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->supportFieldsGet();
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportFieldsGet: ', $e->getMessage(), PHP_EOL;
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

## `supportGet()`

```php
supportGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->supportGet();
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportGet: ', $e->getMessage(), PHP_EOL;
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

## `supportIsAvailableAndEnabledGet()`

```php
supportIsAvailableAndEnabledGet()
```



Returns whether Proactive Support is available and enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->supportIsAvailableAndEnabledGet();
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportIsAvailableAndEnabledGet: ', $e->getMessage(), PHP_EOL;
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

## `supportIsAvailableGet()`

```php
supportIsAvailableGet()
```



Returns whether Proactive Support is available for this product type and current license.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->supportIsAvailableGet();
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportIsAvailableGet: ', $e->getMessage(), PHP_EOL;
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

## `supportNewTicketPost()`

```php
supportNewTicketPost($support_new_ticket0)
```



Creates a new ticket for support. This is done using the support proxy API. For TrueNAS SCALE it will be created on JIRA and for TrueNAS SCALE Enterprise on Salesforce.  For SCALE `criticality`, `environment`, `phone`, `name` and `email` attributes are not required. For SCALE Enterprise `token` and `type` attributes are not required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_new_ticket0 = new \RMoore\Truenas\Model\SupportNewTicket0(); // \RMoore\Truenas\Model\SupportNewTicket0

try {
    $apiInstance->supportNewTicketPost($support_new_ticket0);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportNewTicketPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **support_new_ticket0** | [**\RMoore\Truenas\Model\SupportNewTicket0**](../Model/SupportNewTicket0.md)|  | [optional]

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

## `supportPut()`

```php
supportPut($support_update0)
```



Update Proactive Support settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$support_update0 = new \RMoore\Truenas\Model\SupportUpdate0(); // \RMoore\Truenas\Model\SupportUpdate0

try {
    $apiInstance->supportPut($support_update0);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **support_update0** | [**\RMoore\Truenas\Model\SupportUpdate0**](../Model/SupportUpdate0.md)|  | [optional]

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
