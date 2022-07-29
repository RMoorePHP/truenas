# # ActivedirectoryUpdate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domainname** | **string** | &#x60;domainname&#x60; full DNS domain name of the Active Directory domain. | [optional]
**bindname** | **string** | &#x60;bindname&#x60; username used to perform the intial domain join. | [optional]
**bindpw** | **string** | &#x60;bindpw&#x60; password used to perform the initial domain join. User- provided credentials are used to obtain a kerberos ticket, which is used to perform the actual domain join. | [optional]
**verbose_logging** | **bool** | &#x60;verbose_logging&#x60; increase logging during the domain join process. | [optional]
**use_default_domain** | **bool** | &#x60;use_default_domain&#x60; controls whether domain users and groups have the pre-windows 2000 domain name prepended to the user account. When enabled, the user appears as \&quot;administrator\&quot; rather than \&quot;EXAMPLEdministrator\&quot; | [optional]
**allow_trusted_doms** | **bool** | &#x60;allow_trusted_doms&#x60; enable support for trusted domains. If this parameter is enabled, then separate idmap backends _must_ be configured for each trusted domain, and the idmap cache should be cleared. | [optional]
**allow_dns_updates** | **bool** | &#x60;allow_dns_updates&#x60; during the domain join process, automatically generate DNS entries in the AD domain for the NAS. If this is disabled, then a domain administrator must manually add appropriate DNS entries for the NAS. This parameter is recommended for TrueNAS HA servers. | [optional]
**disable_freenas_cache** | **bool** | &#x60;disable_freenas_cache&#x60; disables active caching of AD users and groups. When disabled, only users cached in winbind&#39;s internal cache are visible in GUI dropdowns. Disabling active caching is recommended in environments with a large amount of users. | [optional]
**restrict_pam** | **bool** |  | [optional] [default to false]
**site** | **string** | &#x60;site&#x60; AD site of which the NAS is a member. This parameter is auto- detected during the domain join process. If no AD site is configured for the subnet in which the NAS is configured, then this parameter appears as &#39;Default-First-Site-Name&#39;. Auto-detection is only performed during the initial domain join. | [optional]
**kerberos_realm** | **int** | &#x60;kerberos_realm&#x60; in which the server is located. This parameter is automatically populated during the initial domain join. If the NAS has an AD site configured and that site has multiple kerberos servers, then the kerberos realm is automatically updated with a site-specific configuration to use those servers. Auto-detection is only performed during initial domain join. | [optional]
**kerberos_principal** | **string** | &#x60;kerberos_principal&#x60; kerberos principal to use for AD-related operations outside of Samba. After intial domain join, this field is updated with the kerberos principal associated with the AD machine account for the NAS. | [optional]
**timeout** | **int** | &#x60;timeout&#x60; timeout value for winbind-related operations. This value may need to be increased in  environments with high latencies for communications with domain controllers or a large number of domain controllers. Lowering the value may cause status checks to fail. | [optional] [default to 60]
**dns_timeout** | **int** | &#x60;dns_timeout&#x60; timeout value for DNS queries during the initial domain join. This value is also set as the NETWORK_TIMEOUT in the ldap config file. | [optional] [default to 10]
**nss_info** | **string** | &#x60;nss_info&#x60; controls how Winbind retrieves Name Service Information to construct a user&#39;s home directory and login shell. This parameter is only effective if the Active Directory Domain Controller supports the Microsoft Services for Unix (SFU) LDAP schema. | [optional] [default to '']
**createcomputer** | **string** | &#x60;createcomputer&#x60; Active Directory Organizational Unit in which new computer accounts are created. | [optional]
**netbiosname** | **string** |  | [optional]
**netbiosname_b** | **string** |  | [optional]
**netbiosalias** | **mixed[]** |  | [optional]
**enable** | **bool** | The Active Directory service is started after a configuration update if the service was initially disabled, and the updated configuration sets &#x60;enable&#x60; to &#x60;True&#x60;. The Active Directory service is stopped if &#x60;enable&#x60; is changed to &#x60;False&#x60;. If the configuration is updated, but the initial &#x60;enable&#x60; state is &#x60;True&#x60;, and remains unchanged, then the samba server is only restarted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
