# # SmbSharesecGetacl

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**share_name** | **string** | View the ACL information for &#x60;share_name&#x60;. The share ACL is distinct from filesystem ACLs which can be viewed by calling &#x60;filesystem.getacl&#x60;. &#x60;ae_who_name&#x60; will appear as &#x60;None&#x60; if the SMB service is stopped or if winbind is unable  to resolve the SID to a name. | [optional]
**options** | [**\RMoore\Truenas\Model\SmbSharesecGetacl1**](SmbSharesecGetacl1.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
