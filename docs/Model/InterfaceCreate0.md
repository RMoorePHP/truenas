# # InterfaceCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**description** | **string** |  | [optional] [default to '']
**type** | **string** | For BRIDGE &#x60;type&#x60; the following attribute is required: bridge_members. For LINK_AGGREGATION &#x60;type&#x60; the following attributes are required: lag_ports, lag_protocol. For VLAN &#x60;type&#x60; the following attributes are required: vlan_parent_interface, vlan_tag and vlan_pcp. | [optional]
**ipv4_dhcp** | **bool** |  | [optional] [default to false]
**ipv6_auto** | **bool** |  | [optional] [default to false]
**aliases** | [**\RMoore\Truenas\Model\InterfaceAlias[]**](InterfaceAlias.md) |  | [optional]
**failover_critical** | **bool** |  | [optional] [default to false]
**failover_group** | **int** |  | [optional]
**failover_vhid** | **int** |  | [optional]
**failover_aliases** | [**\RMoore\Truenas\Model\InterfaceFailoverAlias[]**](InterfaceFailoverAlias.md) |  | [optional]
**failover_virtual_aliases** | [**\RMoore\Truenas\Model\InterfaceVirtualAlias[]**](InterfaceVirtualAlias.md) |  | [optional]
**bridge_members** | **mixed[]** |  | [optional]
**stp** | **bool** |  | [optional] [default to true]
**lag_protocol** | **string** |  | [optional]
**xmit_hash_policy** | **string** |  | [optional]
**lacpdu_rate** | **string** |  | [optional]
**lag_ports** | **string[]** |  | [optional]
**vlan_parent_interface** | **string** |  | [optional]
**vlan_tag** | **int** |  | [optional]
**vlan_pcp** | **int** |  | [optional]
**mtu** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
