# # SmartTestCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schedule** | [**\RMoore\Truenas\Model\Schedule6**](Schedule6.md) |  | [optional]
**desc** | **string** |  | [optional]
**all_disks** | **bool** | &#x60;all_disks&#x60; when enabled sets the task to cover all disks in which case &#x60;disks&#x60; is not required. | [optional] [default to false]
**disks** | **string[]** | &#x60;disks&#x60; is a list of valid disks which should be monitored in this task. &#x60;all_disks&#x60; when enabled sets the task to cover all disks in which case &#x60;disks&#x60; is not required. | [optional]
**type** | **string** | &#x60;type&#x60; is specified to represent the type of SMART test to be executed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
