# # IscsiExtentCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**type** | **string** | When &#x60;type&#x60; is set to FILE, attribute &#x60;filesize&#x60; is used and it represents number of bytes. &#x60;filesize&#x60; if not zero should be a multiple of &#x60;blocksize&#x60;. &#x60;path&#x60; is a required attribute with &#x60;type&#x60; set as FILE. With &#x60;type&#x60; being set to DISK, a valid ZFS volume is required. | [optional] [default to 'DISK']
**disk** | **string** |  | [optional]
**serial** | **string** |  | [optional]
**path** | **string** | When &#x60;type&#x60; is set to FILE, attribute &#x60;filesize&#x60; is used and it represents number of bytes. &#x60;filesize&#x60; if not zero should be a multiple of &#x60;blocksize&#x60;. &#x60;path&#x60; is a required attribute with &#x60;type&#x60; set as FILE. | [optional]
**filesize** | **int** | When &#x60;type&#x60; is set to FILE, attribute &#x60;filesize&#x60; is used and it represents number of bytes. &#x60;filesize&#x60; if not zero should be a multiple of &#x60;blocksize&#x60;. &#x60;path&#x60; is a required attribute with &#x60;type&#x60; set as FILE. | [optional] [default to 0]
**blocksize** | **int** | When &#x60;type&#x60; is set to FILE, attribute &#x60;filesize&#x60; is used and it represents number of bytes. &#x60;filesize&#x60; if not zero should be a multiple of &#x60;blocksize&#x60;. &#x60;path&#x60; is a required attribute with &#x60;type&#x60; set as FILE. | [optional] [default to 512]
**pblocksize** | **bool** |  | [optional]
**avail_threshold** | **int** |  | [optional]
**comment** | **string** |  | [optional]
**insecure_tpc** | **bool** | &#x60;insecure_tpc&#x60; when enabled allows an initiator to bypass normal access control and access any scannable target. This allows xcopy operations otherwise blocked by access control. | [optional] [default to true]
**xen** | **bool** | &#x60;xen&#x60; is a boolean value which is set to true if Xen is being used as the iSCSI initiator. | [optional]
**rpm** | **string** |  | [optional] [default to 'SSD']
**ro** | **bool** |  | [optional]
**enabled** | **bool** |  | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
