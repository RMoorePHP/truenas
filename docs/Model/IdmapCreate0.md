# # IdmapCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | &#x60;name&#x60; the pre-windows 2000 domain name. | [optional]
**dns_domain_name** | **string** |  | [optional]
**range_low** | **int** | &#x60;range_low&#x60; and &#x60;range_high&#x60; specify the UID and GID range for which this backend is authoritative. &#x60;range_low&#x60; and &#x60;range_high&#x60; specify the UID and GID range for which this backend is authoritative. | [optional]
**range_high** | **int** | &#x60;range_low&#x60; and &#x60;range_high&#x60; specify the UID and GID range for which this backend is authoritative. &#x60;range_low&#x60; and &#x60;range_high&#x60; specify the UID and GID range for which this backend is authoritative. | [optional]
**idmap_backend** | **string** | &#x60;idmap_backend&#x60; provides a plugin interface for Winbind to use varying backends to store SID/uid/gid mapping tables. The correct setting depends on the environment in which the NAS is deployed. | [optional]
**certificate** | **int** |  | [optional]
**options** | [**\RMoore\Truenas\Model\IdmapCreate0Options**](IdmapCreate0Options.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
