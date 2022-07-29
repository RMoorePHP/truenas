# RMoore\Truenas\GroupApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**groupGet()**](GroupApi.md#groupGet) | **GET** /group | 
[**groupGetGroupObjPost()**](GroupApi.md#groupGetGroupObjPost) | **POST** /group/get_group_obj | 
[**groupGetNextGidGet()**](GroupApi.md#groupGetNextGidGet) | **GET** /group/get_next_gid | 
[**groupIdIdDelete()**](GroupApi.md#groupIdIdDelete) | **DELETE** /group/id/{id} | 
[**groupIdIdGet()**](GroupApi.md#groupIdIdGet) | **GET** /group/id/{id} | 
[**groupIdIdPut()**](GroupApi.md#groupIdIdPut) | **PUT** /group/id/{id} | 
[**groupPost()**](GroupApi.md#groupPost) | **POST** /group | 


## `groupGet()`

```php
groupGet($limit, $offset, $count, $sort)
```



Query groups with `query-filters` and `query-options`. As a performance optimization, only local groups will be queried by default.  Expanded information may be requested by specifying the extra option `\"extra\": {\"additional_information\": []}`.  The following `additional_information` options are supported: `SMB` - include Windows SID and NT Name for group. If this option is not specified, then these     keys will have `null` value. `DS` - include groups from Directory Service (LDAP or Active Directory) in results  `\"extra\": {\"search_dscache\": true}` is a legacy method of querying for directory services groups.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GroupApi(
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
    $apiInstance->groupGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupGet: ', $e->getMessage(), PHP_EOL;
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

## `groupGetGroupObjPost()`

```php
groupGetGroupObjPost($group_get_group_obj0)
```



Returns dictionary containing information from struct grp for the group specified by either the groupname or gid. Bypasses group cache.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_get_group_obj0 = new \RMoore\Truenas\Model\GroupGetGroupObj0(); // \RMoore\Truenas\Model\GroupGetGroupObj0

try {
    $apiInstance->groupGetGroupObjPost($group_get_group_obj0);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupGetGroupObjPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_get_group_obj0** | [**\RMoore\Truenas\Model\GroupGetGroupObj0**](../Model/GroupGetGroupObj0.md)|  | [optional]

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

## `groupGetNextGidGet()`

```php
groupGetNextGidGet()
```



Get the next available/free gid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->groupGetNextGidGet();
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupGetNextGidGet: ', $e->getMessage(), PHP_EOL;
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

## `groupIdIdDelete()`

```php
groupIdIdDelete($id)
```



Delete group `id`.  The `delete_users` option deletes all users that have this group as their primary group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->groupIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupIdIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

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

## `groupIdIdGet()`

```php
groupIdIdGet($id)
```



Query groups with `query-filters` and `query-options`. As a performance optimization, only local groups will be queried by default.  Expanded information may be requested by specifying the extra option `\"extra\": {\"additional_information\": []}`.  The following `additional_information` options are supported: `SMB` - include Windows SID and NT Name for group. If this option is not specified, then these     keys will have `null` value. `DS` - include groups from Directory Service (LDAP or Active Directory) in results  `\"extra\": {\"search_dscache\": true}` is a legacy method of querying for directory services groups.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->groupIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

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

## `groupIdIdPut()`

```php
groupIdIdPut($id)
```



Update attributes of an existing group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->groupIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

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

## `groupPost()`

```php
groupPost($group_create0)
```



Create a new group.  If `gid` is not provided it is automatically filled with the next one available.  `allow_duplicate_gid` allows distinct group names to share the same gid.  `users` is a list of user ids (`id` attribute from `user.query`).  `smb` specifies whether the group should be mapped into an NT group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_create0 = new \RMoore\Truenas\Model\GroupCreate0(); // \RMoore\Truenas\Model\GroupCreate0

try {
    $apiInstance->groupPost($group_create0);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_create0** | [**\RMoore\Truenas\Model\GroupCreate0**](../Model/GroupCreate0.md)|  | [optional]

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
