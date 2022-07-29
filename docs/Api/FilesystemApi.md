# RMoore\Truenas\FilesystemApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**filesystemAclIsTrivialPost()**](FilesystemApi.md#filesystemAclIsTrivialPost) | **POST** /filesystem/acl_is_trivial | 
[**filesystemCanAccessAsUserPost()**](FilesystemApi.md#filesystemCanAccessAsUserPost) | **POST** /filesystem/can_access_as_user | 
[**filesystemChownPost()**](FilesystemApi.md#filesystemChownPost) | **POST** /filesystem/chown | 
[**filesystemDefaultAclChoicesPost()**](FilesystemApi.md#filesystemDefaultAclChoicesPost) | **POST** /filesystem/default_acl_choices | 
[**filesystemGetDefaultAclPost()**](FilesystemApi.md#filesystemGetDefaultAclPost) | **POST** /filesystem/get_default_acl | 
[**filesystemGetDosmodePost()**](FilesystemApi.md#filesystemGetDosmodePost) | **POST** /filesystem/get_dosmode | 
[**filesystemGetPost()**](FilesystemApi.md#filesystemGetPost) | **POST** /filesystem/get | 
[**filesystemGetaclPost()**](FilesystemApi.md#filesystemGetaclPost) | **POST** /filesystem/getacl | 
[**filesystemIsImmutablePost()**](FilesystemApi.md#filesystemIsImmutablePost) | **POST** /filesystem/is_immutable | 
[**filesystemListdirPost()**](FilesystemApi.md#filesystemListdirPost) | **POST** /filesystem/listdir | 
[**filesystemMkdirPost()**](FilesystemApi.md#filesystemMkdirPost) | **POST** /filesystem/mkdir | 
[**filesystemPutPost()**](FilesystemApi.md#filesystemPutPost) | **POST** /filesystem/put | 
[**filesystemSetDosmodePost()**](FilesystemApi.md#filesystemSetDosmodePost) | **POST** /filesystem/set_dosmode | 
[**filesystemSetImmutablePost()**](FilesystemApi.md#filesystemSetImmutablePost) | **POST** /filesystem/set_immutable | 
[**filesystemSetaclPost()**](FilesystemApi.md#filesystemSetaclPost) | **POST** /filesystem/setacl | 
[**filesystemSetpermPost()**](FilesystemApi.md#filesystemSetpermPost) | **POST** /filesystem/setperm | 
[**filesystemStatPost()**](FilesystemApi.md#filesystemStatPost) | **POST** /filesystem/stat | 
[**filesystemStatfsPost()**](FilesystemApi.md#filesystemStatfsPost) | **POST** /filesystem/statfs | 


## `filesystemAclIsTrivialPost()`

```php
filesystemAclIsTrivialPost($body)
```



Returns True if the ACL can be fully expressed as a file mode without losing any access rules.  Paths on clustered volumes may be specifed with the path prefix `CLUSTER:<volume name>`. For example, to list directories in the directory 'data' in the clustered volume `smb01`, the path should be specified as `CLUSTER:smb01/data`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->filesystemAclIsTrivialPost($body);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemAclIsTrivialPost: ', $e->getMessage(), PHP_EOL;
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

## `filesystemCanAccessAsUserPost()`

```php
filesystemCanAccessAsUserPost($filesystem_can_access_as_user)
```



Check if `username` is able to access `path` with specific `permissions`. At least one of `read/write/execute` permission must be specified for checking with each of these defaulting to `null`. `null` for `read/write/execute` represents that the permission should not be checked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filesystem_can_access_as_user = new \RMoore\Truenas\Model\FilesystemCanAccessAsUser(); // \RMoore\Truenas\Model\FilesystemCanAccessAsUser

try {
    $apiInstance->filesystemCanAccessAsUserPost($filesystem_can_access_as_user);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemCanAccessAsUserPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filesystem_can_access_as_user** | [**\RMoore\Truenas\Model\FilesystemCanAccessAsUser**](../Model/FilesystemCanAccessAsUser.md)|  | [optional]

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

## `filesystemChownPost()`

```php
filesystemChownPost($filesystem_chown0)
```



Change owner or group of file at `path`.  `uid` and `gid` specify new owner of the file. If either key is absent or None, then existing value on the file is not changed.  `recursive` performs action recursively, but does not traverse filesystem mount points.  If `traverse` and `recursive` are specified, then the chown operation will traverse filesystem mount points.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filesystem_chown0 = new \RMoore\Truenas\Model\FilesystemChown0(); // \RMoore\Truenas\Model\FilesystemChown0

try {
    $apiInstance->filesystemChownPost($filesystem_chown0);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemChownPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filesystem_chown0** | [**\RMoore\Truenas\Model\FilesystemChown0**](../Model/FilesystemChown0.md)|  | [optional]

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

## `filesystemDefaultAclChoicesPost()`

```php
filesystemDefaultAclChoicesPost($body)
```



`DEPRECATED` Returns list of names of ACL templates. Wrapper around filesystem.acltemplate.query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->filesystemDefaultAclChoicesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemDefaultAclChoicesPost: ', $e->getMessage(), PHP_EOL;
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

## `filesystemGetDefaultAclPost()`

```php
filesystemGetDefaultAclPost($filesystem_get_default_acl)
```



`DEPRECATED` Returns a default ACL depending on the usage specified by `acl_type`. If an admin group is defined, then an entry granting it full control will be placed at the top of the ACL. Optionally may pass `share_type` to argument to get share-specific template ACL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filesystem_get_default_acl = new \RMoore\Truenas\Model\FilesystemGetDefaultAcl(); // \RMoore\Truenas\Model\FilesystemGetDefaultAcl

try {
    $apiInstance->filesystemGetDefaultAclPost($filesystem_get_default_acl);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemGetDefaultAclPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filesystem_get_default_acl** | [**\RMoore\Truenas\Model\FilesystemGetDefaultAcl**](../Model/FilesystemGetDefaultAcl.md)|  | [optional]

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

## `filesystemGetDosmodePost()`

```php
filesystemGetDosmodePost($body)
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->filesystemGetDosmodePost($body);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemGetDosmodePost: ', $e->getMessage(), PHP_EOL;
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

## `filesystemGetPost()`

```php
filesystemGetPost($body)
```



Job to get contents of `path`.  A file will be downloaded from this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->filesystemGetPost($body);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemGetPost: ', $e->getMessage(), PHP_EOL;
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

## `filesystemGetaclPost()`

```php
filesystemGetaclPost($filesystem_getacl)
```



Return ACL of a given path. This may return a POSIX1e ACL or a NFSv4 ACL. The acl type is indicated by the `acltype` key.  `simplified` - effect of this depends on ACL type on underlying filesystem. In the case of NFSv4 ACLs simplified permissions and flags are returned for ACL entries where applicable. NFSv4 errata below. In the case of POSIX1E ACls, this setting has no impact on returned ACL.  `resolve_ids` - adds additional `who` key to each ACL entry, that converts the numeric id to a user name or group name. In the case of owner@ and group@ (NFSv4) or USER_OBJ and GROUP_OBJ (POSIX1E), st_uid or st_gid will be converted from stat() return for file. In the case of MASK (POSIX1E), OTHER (POSIX1E), everyone@ (NFSv4), key `who` will be included, but set to null. In case of failure to resolve the id to a name, `who` will be set to null. This option should only be used if resolving ids to names is required.  Errata about ACLType NFSv4:  `simplified` returns a shortened form of the ACL permset and flags where applicable. If permissions have been simplified, then the `perms` object will contain only a single `BASIC` key with a string describing the underlying permissions set.  `TRAVERSE` sufficient rights to traverse a directory, but not read contents.  `READ` sufficient rights to traverse a directory, and read file contents.  `MODIFIY` sufficient rights to traverse, read, write, and modify a file.  `FULL_CONTROL` all permissions.  If the permisssions do not fit within one of the pre-defined simplified permissions types, then the full ACL entry will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filesystem_getacl = new \RMoore\Truenas\Model\FilesystemGetacl(); // \RMoore\Truenas\Model\FilesystemGetacl

try {
    $apiInstance->filesystemGetaclPost($filesystem_getacl);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemGetaclPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filesystem_getacl** | [**\RMoore\Truenas\Model\FilesystemGetacl**](../Model/FilesystemGetacl.md)|  | [optional]

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

## `filesystemIsImmutablePost()`

```php
filesystemIsImmutablePost($body)
```



Retrieves boolean which is set when immutable flag is set on `path`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->filesystemIsImmutablePost($body);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemIsImmutablePost: ', $e->getMessage(), PHP_EOL;
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

## `filesystemListdirPost()`

```php
filesystemListdirPost($filesystem_listdir)
```



Get the contents of a directory.  Paths on clustered volumes may be specifed with the path prefix `CLUSTER:<volume name>`. For example, to list directories in the directory 'data' in the clustered volume `smb01`, the path should be specified as `CLUSTER:smb01/data`.  Each entry of the list consists of:   name(str): name of the file   path(str): absolute path of the entry   realpath(str): absolute real path of the entry (if SYMLINK)   type(str): DIRECTORY | FILE | SYMLINK | OTHER   size(int): size of the entry   mode(int): file mode/permission   uid(int): user id of entry owner   gid(int): group id of entry onwer   acl(bool): extended ACL is present on file   is_mountpoint(bool): path is a mountpoint   is_ctldir(bool): path is within special .zfs directory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filesystem_listdir = new \RMoore\Truenas\Model\FilesystemListdir(); // \RMoore\Truenas\Model\FilesystemListdir

try {
    $apiInstance->filesystemListdirPost($filesystem_listdir);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemListdirPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filesystem_listdir** | [**\RMoore\Truenas\Model\FilesystemListdir**](../Model/FilesystemListdir.md)|  | [optional]

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

## `filesystemMkdirPost()`

```php
filesystemMkdirPost($body)
```



Create a directory at the specified path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->filesystemMkdirPost($body);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemMkdirPost: ', $e->getMessage(), PHP_EOL;
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

## `filesystemPutPost()`

```php
filesystemPutPost($filesystem_put)
```



Job to put contents to `path`.  A file must be uploaded to this endpoint. To upload a file, please send a multipart request with two parts. The first, named `data`, should contain a JSON-encoded payload, and the second, named `file`, should contain an uploaded file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filesystem_put = new \RMoore\Truenas\Model\FilesystemPut(); // \RMoore\Truenas\Model\FilesystemPut

try {
    $apiInstance->filesystemPutPost($filesystem_put);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemPutPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filesystem_put** | [**\RMoore\Truenas\Model\FilesystemPut**](../Model/FilesystemPut.md)|  | [optional]

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

## `filesystemSetDosmodePost()`

```php
filesystemSetDosmodePost($filesystem_set_dosmode0)
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filesystem_set_dosmode0 = new \RMoore\Truenas\Model\FilesystemSetDosmode0(); // \RMoore\Truenas\Model\FilesystemSetDosmode0

try {
    $apiInstance->filesystemSetDosmodePost($filesystem_set_dosmode0);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemSetDosmodePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filesystem_set_dosmode0** | [**\RMoore\Truenas\Model\FilesystemSetDosmode0**](../Model/FilesystemSetDosmode0.md)|  | [optional]

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

## `filesystemSetImmutablePost()`

```php
filesystemSetImmutablePost($filesystem_set_immutable)
```



Set/Unset immutable flag at `path`.  `set_flag` when set will set immutable flag and when unset will unset immutable flag at `path`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filesystem_set_immutable = new \RMoore\Truenas\Model\FilesystemSetImmutable(); // \RMoore\Truenas\Model\FilesystemSetImmutable

try {
    $apiInstance->filesystemSetImmutablePost($filesystem_set_immutable);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemSetImmutablePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filesystem_set_immutable** | [**\RMoore\Truenas\Model\FilesystemSetImmutable**](../Model/FilesystemSetImmutable.md)|  | [optional]

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

## `filesystemSetaclPost()`

```php
filesystemSetaclPost($filesystem_setacl0)
```



Set ACL of a given path. Takes the following parameters: `path` full path to directory or file.  Paths on clustered volumes may be specifed with the path prefix `CLUSTER:<volume name>`. For example, to list directories in the directory 'data' in the clustered volume `smb01`, the path should be specified as `CLUSTER:smb01/data`.  `dacl` ACL entries. Formatting depends on the underlying `acltype`. NFS4ACL requires NFSv4 entries. POSIX1e requires POSIX1e entries.  `uid` the desired UID of the file user. If set to None (the default), then user is not changed.  `gid` the desired GID of the file group. If set to None (the default), then group is not changed.  `recursive` apply the ACL recursively  `traverse` traverse filestem boundaries (ZFS datasets)  `strip` convert ACL to trivial. ACL is trivial if it can be expressed as a file mode without losing any access rules.  `canonicalize` reorder ACL entries so that they are in concanical form as described in the Microsoft documentation MS-DTYP 2.4.5 (ACL). This only applies to NFSv4 ACLs.  For case of NFSv4 ACLs  USER_OBJ, GROUP_OBJ, and EVERYONE with owner@, group@, everyone@ for consistency with getfacl and setfacl. If one of aforementioned special tags is used, 'id' must be set to None.  An inheriting empty everyone@ ACE is appended to non-trivial ACLs in order to enforce Windows expectations regarding permissions inheritance. This entry is removed from NT ACL returned to SMB clients when 'ixnas' samba VFS module is enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filesystem_setacl0 = new \RMoore\Truenas\Model\FilesystemSetacl0(); // \RMoore\Truenas\Model\FilesystemSetacl0

try {
    $apiInstance->filesystemSetaclPost($filesystem_setacl0);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemSetaclPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filesystem_setacl0** | [**\RMoore\Truenas\Model\FilesystemSetacl0**](../Model/FilesystemSetacl0.md)|  | [optional]

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

## `filesystemSetpermPost()`

```php
filesystemSetpermPost($filesystem_setperm0)
```



Set unix permissions on given `path`.  Paths on clustered volumes may be specifed with the path prefix `CLUSTER:<volume name>`. For example, to list directories in the directory 'data' in the clustered volume `smb01`, the path should be specified as `CLUSTER:smb01/data`.  If `mode` is specified then the mode will be applied to the path and files and subdirectories depending on which `options` are selected. Mode should be formatted as string representation of octal permissions bits.  `uid` the desired UID of the file user. If set to None (the default), then user is not changed.  `gid` the desired GID of the file group. If set to None (the default), then group is not changed.  `stripacl` setperm will fail if an extended ACL is present on `path`, unless `stripacl` is set to True.  `recursive` remove ACLs recursively, but do not traverse dataset boundaries.  `traverse` remove ACLs from child datasets.  If no `mode` is set, and `stripacl` is True, then non-trivial ACLs will be converted to trivial ACLs. An ACL is trivial if it can be expressed as a file mode without losing any access rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filesystem_setperm0 = new \RMoore\Truenas\Model\FilesystemSetperm0(); // \RMoore\Truenas\Model\FilesystemSetperm0

try {
    $apiInstance->filesystemSetpermPost($filesystem_setperm0);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemSetpermPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filesystem_setperm0** | [**\RMoore\Truenas\Model\FilesystemSetperm0**](../Model/FilesystemSetperm0.md)|  | [optional]

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

## `filesystemStatPost()`

```php
filesystemStatPost($body)
```



Return the filesystem stat(2) for a given `path`.  Paths on clustered volumes may be specifed with the path prefix `CLUSTER:<volume name>`. For example, to list directories in the directory 'data' in the clustered volume `smb01`, the path should be specified as `CLUSTER:smb01/data`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->filesystemStatPost($body);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemStatPost: ', $e->getMessage(), PHP_EOL;
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

## `filesystemStatfsPost()`

```php
filesystemStatfsPost($body)
```



Return stats from the filesystem of a given path.  Paths on clustered volumes may be specifed with the path prefix `CLUSTER:<volume name>`. For example, to list directories in the directory 'data' in the clustered volume `smb01`, the path should be specified as `CLUSTER:smb01/data`.  Raises:     CallError(ENOENT) - Path not found

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FilesystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->filesystemStatfsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling FilesystemApi->filesystemStatfsPost: ', $e->getMessage(), PHP_EOL;
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
