# # SmbUpdate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**netbiosname** | **string** | &#x60;netbiosname&#x60; defaults to the original hostname of the system. &#x60;workgroup&#x60; specifies the NetBIOS workgroup to which the TrueNAS server belongs. This will be automatically set to the correct value during the process of joining an AD domain. &#x60;workgroup&#x60; and &#x60;netbiosname&#x60; should have different values. | [optional]
**netbiosname_b** | **string** |  | [optional]
**netbiosalias** | **string[]** | &#x60;netbiosalias&#x60; a list of netbios aliases. If Server is joined to an AD domain, additional Kerberos Service Principal Names will be generated for these aliases. | [optional]
**workgroup** | **string** | &#x60;workgroup&#x60; specifies the NetBIOS workgroup to which the TrueNAS server belongs. This will be automatically set to the correct value during the process of joining an AD domain. &#x60;workgroup&#x60; and &#x60;netbiosname&#x60; should have different values. | [optional]
**description** | **string** |  | [optional]
**enable_smb1** | **bool** | &#x60;enable_smb1&#x60; allows legacy SMB clients to connect to the server when enabled. | [optional]
**unixcharset** | **string** |  | [optional]
**loglevel** | **string** |  | [optional]
**syslog** | **bool** |  | [optional]
**aapl_extensions** | **bool** | &#x60;aapl_extensions&#x60; enables support for SMB2 protocol extensions for MacOS clients. This is not a requirement for MacOS support, but is currently a requirement for time machine support. | [optional]
**localmaster** | **bool** | &#x60;localmaster&#x60; when set, determines if the system participates in a browser election. | [optional]
**guest** | **string** | &#x60;guest&#x60; attribute is specified to select the account to be used for guest access. It defaults to \&quot;nobody\&quot;. | [optional]
**admin_group** | **string** | The group specified as the SMB &#x60;admin_group&#x60; will be automatically added as a foreign group member of S-1-5-32-544 (builtindmins). This will afford the group all privileges granted to a local admin. Any SMB group may be selected (including AD groups). | [optional]
**filemask** | **string** |  | [optional]
**dirmask** | **string** |  | [optional]
**ntlmv1_auth** | **bool** | &#x60;ntlmv1_auth&#x60; enables a legacy and insecure authentication method, which may be required for legacy or poorly-implemented SMB clients. | [optional]
**multichannel** | **bool** |  | [optional] [default to false]
**bindip** | **string[]** |  | [optional]
**smb_options** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
