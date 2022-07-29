# # SharingNfsCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paths** | **string[]** | &#x60;paths&#x60; is a list of valid paths which are configured to be shared on this share. | [optional]
**aliases** | **string[]** | &#x60;aliases&#x60; IGNORED, for now. | [optional]
**comment** | **string** |  | [optional] [default to '']
**networks** | **string[]** | &#x60;networks&#x60; is a list of authorized networks that are allowed to access the share having format \&quot;network/mask\&quot; CIDR notation. If empty, all networks are allowed. | [optional]
**hosts** | **string[]** | &#x60;hosts&#x60; is a list of IP&#39;s/hostnames which are allowed to access the share. If empty, all IP&#39;s/hostnames are allowed. | [optional]
**alldirs** | **bool** |  | [optional] [default to false]
**ro** | **bool** |  | [optional] [default to false]
**quiet** | **bool** |  | [optional] [default to false]
**maproot_user** | **string** |  | [optional]
**maproot_group** | **string** |  | [optional]
**mapall_user** | **string** |  | [optional]
**mapall_group** | **string** |  | [optional]
**security** | **string[]** |  | [optional]
**enabled** | **bool** |  | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
