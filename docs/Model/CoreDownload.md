# # CoreDownload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** |  | [optional]
**args** | **mixed[]** |  | [optional]
**filename** | **string** |  | [optional]
**buffered** | **bool** | Non-&#x60;buffered&#x60; downloads will allow job to write to pipe as soon as download URL is requested, job will stay blocked meanwhile. &#x60;buffered&#x60; downloads must wait for job to complete before requesting download URL, job&#39;s pipe output will be buffered to ramfs. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
