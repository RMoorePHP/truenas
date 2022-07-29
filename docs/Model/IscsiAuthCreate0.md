# # IscsiAuthCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tag** | **int** | &#x60;tag&#x60; should be unique among all configured iSCSI Authorized Accesses. | [optional]
**user** | **string** |  | [optional]
**secret** | **string** | &#x60;secret&#x60; and &#x60;peersecret&#x60; should have length between 12-16 letters inclusive. | [optional]
**peeruser** | **string** |  | [optional] [default to '']
**peersecret** | **string** | &#x60;secret&#x60; and &#x60;peersecret&#x60; should have length between 12-16 letters inclusive. | [optional] [default to '']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
