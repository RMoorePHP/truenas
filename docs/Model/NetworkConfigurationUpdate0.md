# # NetworkConfigurationUpdate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hostname** | **string** |  | [optional]
**domain** | **string** |  | [optional]
**ipv4gateway** | **string** | &#x60;ipv4gateway&#x60; if set is used instead of the default gateway provided by DHCP. | [optional]
**ipv6gateway** | **string** |  | [optional]
**nameserver1** | **string** | &#x60;nameserver1&#x60; is primary DNS server. | [optional]
**nameserver2** | **string** | &#x60;nameserver2&#x60; is secondary DNS server. | [optional]
**nameserver3** | **string** | &#x60;nameserver3&#x60; is tertiary DNS server. | [optional]
**httpproxy** | **string** | &#x60;httpproxy&#x60; attribute must be provided if a proxy is to be used for network operations. | [optional]
**netwait_enabled** | **bool** | &#x60;netwait_enabled&#x60; is a boolean attribute which when set indicates that network services will not start at boot unless they are able to ping the addresses listed in &#x60;netwait_ip&#x60; list. | [optional]
**netwait_ip** | **string[]** | &#x60;netwait_enabled&#x60; is a boolean attribute which when set indicates that network services will not start at boot unless they are able to ping the addresses listed in &#x60;netwait_ip&#x60; list. | [optional]
**hosts** | **string** |  | [optional]
**domains** | **string[]** |  | [optional]
**service_announcement** | [**\RMoore\Truenas\Model\ServiceAnnouncement**](ServiceAnnouncement.md) |  | [optional]
**activity** | [**\RMoore\Truenas\Model\Activity**](Activity.md) |  | [optional]
**hostname_b** | **string** |  | [optional]
**hostname_virtual** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
