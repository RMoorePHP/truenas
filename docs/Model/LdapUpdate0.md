# # LdapUpdate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hostname** | **mixed[]** | &#x60;hostname&#x60; list of ip addresses or hostnames of LDAP servers with which to communicate in order of preference. Failover only occurs if the current LDAP server is unresponsive. | [optional]
**basedn** | **string** | &#x60;basedn&#x60; specifies the default base DN to use when performing ldap operations. The base must be specified as a Distinguished Name in LDAP format. | [optional]
**binddn** | **string** | &#x60;binddn&#x60; specifies the default bind DN to use when performing ldap operations. The bind DN must be specified as a Distinguished Name in LDAP format. &#x60;kerberos_principal&#x60; kerberos principal to use for SASL GSSAPI authentication to the remote server. If &#x60;kerberos_realm&#x60; is specified without a keytab, then the &#x60;binddn&#x60; and &#x60;bindpw&#x60; are used to perform to obtain the ticket necessary for GSSAPI authentication. | [optional]
**bindpw** | **string** | &#x60;kerberos_principal&#x60; kerberos principal to use for SASL GSSAPI authentication to the remote server. If &#x60;kerberos_realm&#x60; is specified without a keytab, then the &#x60;binddn&#x60; and &#x60;bindpw&#x60; are used to perform to obtain the ticket necessary for GSSAPI authentication. | [optional]
**anonbind** | **bool** | &#x60;anonbind&#x60; use anonymous authentication. | [optional] [default to false]
**ssl** | **string** | &#x60;ssl&#x60; establish SSL/TLS-protected connections to the LDAP server(s). GSSAPI signing is disabled on SSL/TLS-protected connections if kerberos authentication is used. | [optional] [default to 'ON']
**certificate** | **int** | &#x60;certificate&#x60; LDAPs client certificate to be used for certificate- based authentication. | [optional]
**validate_certificates** | **bool** | &#x60;validate_certificates&#x60; specifies whether to perform checks on server certificates in a TLS session. If enabled, TLS_REQCERT demand is set. The server certificate is requested. If no certificate is provided or if a bad certificate is provided, the session is immediately terminated. If disabled, TLS_REQCERT allow is set. The server certificate is requested, but all errors are ignored. | [optional] [default to true]
**disable_freenas_cache** | **bool** |  | [optional]
**timeout** | **int** | &#x60;timeout&#x60; specifies  a  timeout  (in  seconds) after which calls to synchronous LDAP APIs will abort if no response is received. | [optional] [default to 30]
**dns_timeout** | **int** | &#x60;dns_timeout&#x60; specifies the timeout (in seconds) after which the poll(2)/select(2) following a connect(2) returns in case of no activity for openldap. For nslcd this specifies the time limit (in seconds) to use when connecting to the directory server. This directly impacts the length of time that the LDAP service tries before failing over to a secondary LDAP URI. | [optional] [default to 5]
**kerberos_realm** | **int** | &#x60;kerberos_realm&#x60; in which the server is located. This parameter is only required for SASL GSSAPI authentication to the remote LDAP server. &#x60;kerberos_principal&#x60; kerberos principal to use for SASL GSSAPI authentication to the remote server. If &#x60;kerberos_realm&#x60; is specified without a keytab, then the &#x60;binddn&#x60; and &#x60;bindpw&#x60; are used to perform to obtain the ticket necessary for GSSAPI authentication. | [optional]
**kerberos_principal** | **string** | &#x60;kerberos_principal&#x60; kerberos principal to use for SASL GSSAPI authentication to the remote server. If &#x60;kerberos_realm&#x60; is specified without a keytab, then the &#x60;binddn&#x60; and &#x60;bindpw&#x60; are used to perform to obtain the ticket necessary for GSSAPI authentication. | [optional]
**has_samba_schema** | **bool** |  | [optional] [default to false]
**auxiliary_parameters** | **string** |  | [optional] [default to 'false']
**schema** | **string** |  | [optional] [default to 'RFC2307']
**enable** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
