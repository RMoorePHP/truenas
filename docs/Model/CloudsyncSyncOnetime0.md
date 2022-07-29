# # CloudsyncSyncOnetime0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** |  | [optional] [default to '']
**direction** | **string** |  | [optional]
**transfer_mode** | **string** |  | [optional]
**path** | **string** |  | [optional]
**credentials** | **int** |  | [optional]
**encryption** | **bool** |  | [optional] [default to false]
**filename_encryption** | **bool** |  | [optional] [default to false]
**encryption_password** | **string** |  | [optional] [default to '']
**encryption_salt** | **string** |  | [optional] [default to '']
**schedule** | [**\RMoore\Truenas\Model\Schedule**](Schedule.md) |  | [optional]
**follow_symlinks** | **bool** |  | [optional] [default to false]
**transfers** | **int** |  | [optional]
**bwlimit** | [**\RMoore\Truenas\Model\CloudSyncBwlimit[]**](CloudSyncBwlimit.md) |  | [optional]
**include** | **string[]** |  | [optional]
**exclude** | **string[]** |  | [optional]
**attributes** | **array<string,mixed>** |  | [optional]
**snapshot** | **bool** |  | [optional] [default to false]
**pre_script** | **string** |  | [optional] [default to '']
**post_script** | **string** |  | [optional] [default to '']
**args** | **string** |  | [optional] [default to '']
**enabled** | **bool** |  | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
