# RMoore\Truenas\ReplicationApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**replicationCountEligibleManualSnapshotsPost()**](ReplicationApi.md#replicationCountEligibleManualSnapshotsPost) | **POST** /replication/count_eligible_manual_snapshots | 
[**replicationCreateDatasetPost()**](ReplicationApi.md#replicationCreateDatasetPost) | **POST** /replication/create_dataset | 
[**replicationGet()**](ReplicationApi.md#replicationGet) | **GET** /replication | 
[**replicationIdIdDelete()**](ReplicationApi.md#replicationIdIdDelete) | **DELETE** /replication/id/{id} | 
[**replicationIdIdGet()**](ReplicationApi.md#replicationIdIdGet) | **GET** /replication/id/{id} | 
[**replicationIdIdPut()**](ReplicationApi.md#replicationIdIdPut) | **PUT** /replication/id/{id} | 
[**replicationIdIdRestorePost()**](ReplicationApi.md#replicationIdIdRestorePost) | **POST** /replication/id/{id}/restore | 
[**replicationIdIdRunPost()**](ReplicationApi.md#replicationIdIdRunPost) | **POST** /replication/id/{id}/run | 
[**replicationListDatasetsPost()**](ReplicationApi.md#replicationListDatasetsPost) | **POST** /replication/list_datasets | 
[**replicationListNamingSchemasGet()**](ReplicationApi.md#replicationListNamingSchemasGet) | **GET** /replication/list_naming_schemas | 
[**replicationPost()**](ReplicationApi.md#replicationPost) | **POST** /replication | 
[**replicationRunOnetimePost()**](ReplicationApi.md#replicationRunOnetimePost) | **POST** /replication/run_onetime | 
[**replicationTargetUnmatchedSnapshotsPost()**](ReplicationApi.md#replicationTargetUnmatchedSnapshotsPost) | **POST** /replication/target_unmatched_snapshots | 


## `replicationCountEligibleManualSnapshotsPost()`

```php
replicationCountEligibleManualSnapshotsPost($replication_count_eligible_manual_snapshots0)
```



Count how many existing snapshots of `dataset` match `naming_schema`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replication_count_eligible_manual_snapshots0 = new \RMoore\Truenas\Model\ReplicationCountEligibleManualSnapshots0(); // \RMoore\Truenas\Model\ReplicationCountEligibleManualSnapshots0

try {
    $apiInstance->replicationCountEligibleManualSnapshotsPost($replication_count_eligible_manual_snapshots0);
} catch (Exception $e) {
    echo 'Exception when calling ReplicationApi->replicationCountEligibleManualSnapshotsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replication_count_eligible_manual_snapshots0** | [**\RMoore\Truenas\Model\ReplicationCountEligibleManualSnapshots0**](../Model/ReplicationCountEligibleManualSnapshots0.md)|  | [optional]

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

## `replicationCreateDatasetPost()`

```php
replicationCreateDatasetPost($replication_create_dataset)
```



Creates dataset on remote side  Accepts `dataset` name, `transport` and SSH credentials ID (for non-local transport)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replication_create_dataset = new \RMoore\Truenas\Model\ReplicationCreateDataset(); // \RMoore\Truenas\Model\ReplicationCreateDataset

try {
    $apiInstance->replicationCreateDatasetPost($replication_create_dataset);
} catch (Exception $e) {
    echo 'Exception when calling ReplicationApi->replicationCreateDatasetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replication_create_dataset** | [**\RMoore\Truenas\Model\ReplicationCreateDataset**](../Model/ReplicationCreateDataset.md)|  | [optional]

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

## `replicationGet()`

```php
replicationGet($limit, $offset, $count, $sort)
```



`query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReplicationApi(
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
    $apiInstance->replicationGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling ReplicationApi->replicationGet: ', $e->getMessage(), PHP_EOL;
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

## `replicationIdIdDelete()`

```php
replicationIdIdDelete($id)
```



Delete a Replication Task with specific `id`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->replicationIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ReplicationApi->replicationIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `replicationIdIdGet()`

```php
replicationIdIdGet($id)
```



`query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->replicationIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling ReplicationApi->replicationIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `replicationIdIdPut()`

```php
replicationIdIdPut($id)
```



Update a Replication Task with specific `id`  See the documentation for `create` method for information on payload contents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->replicationIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling ReplicationApi->replicationIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `replicationIdIdRestorePost()`

```php
replicationIdIdRestorePost($id)
```



Create the opposite of replication task `id` (PULL if it was PUSH and vice versa).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->replicationIdIdRestorePost($id);
} catch (Exception $e) {
    echo 'Exception when calling ReplicationApi->replicationIdIdRestorePost: ', $e->getMessage(), PHP_EOL;
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

## `replicationIdIdRunPost()`

```php
replicationIdIdRunPost($id)
```



Run Replication Task of `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->replicationIdIdRunPost($id);
} catch (Exception $e) {
    echo 'Exception when calling ReplicationApi->replicationIdIdRunPost: ', $e->getMessage(), PHP_EOL;
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

## `replicationListDatasetsPost()`

```php
replicationListDatasetsPost($replication_list_datasets)
```



List datasets on remote side  Accepts `transport` and SSH credentials ID (for non-local transport)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replication_list_datasets = new \RMoore\Truenas\Model\ReplicationListDatasets(); // \RMoore\Truenas\Model\ReplicationListDatasets

try {
    $apiInstance->replicationListDatasetsPost($replication_list_datasets);
} catch (Exception $e) {
    echo 'Exception when calling ReplicationApi->replicationListDatasetsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replication_list_datasets** | [**\RMoore\Truenas\Model\ReplicationListDatasets**](../Model/ReplicationListDatasets.md)|  | [optional]

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

## `replicationListNamingSchemasGet()`

```php
replicationListNamingSchemasGet()
```



List all naming schemas used in periodic snapshot and replication tasks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->replicationListNamingSchemasGet();
} catch (Exception $e) {
    echo 'Exception when calling ReplicationApi->replicationListNamingSchemasGet: ', $e->getMessage(), PHP_EOL;
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

## `replicationPost()`

```php
replicationPost($replication_create0)
```



Create a Replication Task  Create a Replication Task that will push or pull ZFS snapshots to or from remote host..  * `name` specifies a name for replication task * `direction` specifies whether task will `PUSH` or `PULL` snapshots * `transport` is a method of snapshots transfer:   * `SSH` transfers snapshots via SSH connection. This method is supported everywhere but does not achieve     great performance     `ssh_credentials` is a required field for this transport (Keychain Credential ID of type `SSH_CREDENTIALS`)   * `SSH+NETCAT` uses unencrypted connection for data transfer. This can only be used in trusted networks     and requires a port (specified by range from `netcat_active_side_port_min` to `netcat_active_side_port_max`)     to be open on `netcat_active_side`     `ssh_credentials` is also required for control connection   * `LOCAL` replicates to or from localhost * `source_datasets` is a non-empty list of datasets to replicate snapshots from * `target_dataset` is a dataset to put snapshots into. It must exist on target side * `recursive` and `exclude` have the same meaning as for Periodic Snapshot Task * `properties` control whether we should send dataset properties along with snapshots * `periodic_snapshot_tasks` is a list of periodic snapshot task IDs that are sources of snapshots for this   replication task. Only push replication tasks can be bound to periodic snapshot tasks. * `naming_schema` is a list of naming schemas for pull replication * `also_include_naming_schema` is a list of naming schemas for push replication * `name_regex` will replicate all snapshots which names match specified regular expression * `auto` allows replication to run automatically on schedule or after bound periodic snapshot task * `schedule` is a schedule to run replication task. Only `auto` replication tasks without bound periodic   snapshot tasks can have a schedule * `restrict_schedule` restricts when replication task with bound periodic snapshot tasks runs. For example,   you can have periodic snapshot tasks that run every 15 minutes, but only run replication task every hour. * Enabling `only_matching_schedule` will only replicate snapshots that match `schedule` or   `restrict_schedule` * `allow_from_scratch` will destroy all snapshots on target side and replicate everything from scratch if none   of the snapshots on target side matches source snapshots * `readonly` controls destination datasets readonly property:   * `SET` will set all destination datasets to readonly=on after finishing the replication   * `REQUIRE` will require all existing destination datasets to have readonly=on property   * `IGNORE` will avoid this kind of behavior * `hold_pending_snapshots` will prevent source snapshots from being deleted by retention of replication fails   for some reason * `retention_policy` specifies how to delete old snapshots on target side:   * `SOURCE` deletes snapshots that are absent on source side   * `CUSTOM` deletes snapshots that are older than `lifetime_value` and `lifetime_unit`   * `NONE` does not delete any snapshots * `compression` compresses SSH stream. Available only for SSH transport * `speed_limit` limits speed of SSH stream. Available only for SSH transport * `large_block`, `embed` and `compressed` are various ZFS stream flag documented in `man zfs send` * `retries` specifies number of retries before considering replication failed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replication_create0 = new \RMoore\Truenas\Model\ReplicationCreate0(); // \RMoore\Truenas\Model\ReplicationCreate0

try {
    $apiInstance->replicationPost($replication_create0);
} catch (Exception $e) {
    echo 'Exception when calling ReplicationApi->replicationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replication_create0** | [**\RMoore\Truenas\Model\ReplicationCreate0**](../Model/ReplicationCreate0.md)|  | [optional]

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

## `replicationRunOnetimePost()`

```php
replicationRunOnetimePost($replication_run_onetime0)
```



Run replication task without creating it.  If `only_from_scratch` is `true` then replication will fail if target dataset already exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replication_run_onetime0 = new \RMoore\Truenas\Model\ReplicationRunOnetime0(); // \RMoore\Truenas\Model\ReplicationRunOnetime0

try {
    $apiInstance->replicationRunOnetimePost($replication_run_onetime0);
} catch (Exception $e) {
    echo 'Exception when calling ReplicationApi->replicationRunOnetimePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replication_run_onetime0** | [**\RMoore\Truenas\Model\ReplicationRunOnetime0**](../Model/ReplicationRunOnetime0.md)|  | [optional]

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

## `replicationTargetUnmatchedSnapshotsPost()`

```php
replicationTargetUnmatchedSnapshotsPost($replication_target_unmatched_snapshots)
```



Check if target has any snapshots that do not exist on source. Returns these snapshots grouped by dataset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replication_target_unmatched_snapshots = new \RMoore\Truenas\Model\ReplicationTargetUnmatchedSnapshots(); // \RMoore\Truenas\Model\ReplicationTargetUnmatchedSnapshots

try {
    $apiInstance->replicationTargetUnmatchedSnapshotsPost($replication_target_unmatched_snapshots);
} catch (Exception $e) {
    echo 'Exception when calling ReplicationApi->replicationTargetUnmatchedSnapshotsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replication_target_unmatched_snapshots** | [**\RMoore\Truenas\Model\ReplicationTargetUnmatchedSnapshots**](../Model/ReplicationTargetUnmatchedSnapshots.md)|  | [optional]

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
