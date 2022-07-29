# # CloudsyncListDirectory0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**credentials** | **int** |  | [optional]
**encryption** | **bool** |  | [optional] [default to false]
**filename_encryption** | **bool** |  | [optional] [default to false]
**encryption_password** | **string** |  | [optional] [default to '']
**encryption_salt** | **string** |  | [optional] [default to '']
**attributes** | **array<string,mixed>** | If remote supports buckets, path is constructed by two keys \&quot;bucket\&quot;/\&quot;folder\&quot; in &#x60;attributes&#x60;. If remote does not support buckets, path is constructed using \&quot;folder\&quot; key only in &#x60;attributes&#x60;. \&quot;folder\&quot; is directory name and \&quot;bucket\&quot; is bucket name for remote. | [optional]
**args** | **string** |  | [optional] [default to '']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
