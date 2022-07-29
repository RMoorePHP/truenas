# # NfsUpdate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**servers** | **int** | &#x60;servers&#x60; represents number of servers to create. | [optional]
**udp** | **bool** |  | [optional]
**allow_nonroot** | **bool** | When &#x60;allow_nonroot&#x60; is set, it allows non-root mount requests to be served. | [optional]
**v4** | **bool** | &#x60;v4&#x60; when set means that we switch from NFSv3 to NFSv4. | [optional]
**v4_v3owner** | **bool** | &#x60;v4_v3owner&#x60; when set means that system will use NFSv3 ownership model for NFSv4. | [optional]
**v4_krb** | **bool** | &#x60;v4_krb&#x60; will force NFS shares to fail if the Kerberos ticket is unavailable. | [optional]
**v4_domain** | **string** | &#x60;v4_domain&#x60; overrides the default DNS domain name for NFSv4. | [optional]
**bindip** | **string[]** | &#x60;bindip&#x60; is a list of IP&#39;s on which NFS will listen for requests. When it is unset/empty, NFS listens on all available addresses. | [optional]
**mountd_port** | **int** | &#x60;mountd_port&#x60; specifies the port mountd(8) binds to. | [optional]
**rpcstatd_port** | **int** | &#x60;rpcstatd_port&#x60; specifies the port rpc.statd(8) binds to. | [optional]
**rpclockd_port** | **int** | &#x60;rpclockd_port&#x60; specifies the port rpclockd_port(8) binds to. | [optional]
**mountd_log** | **bool** |  | [optional]
**statd_lockd_log** | **bool** |  | [optional]
**userd_manage_gids** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
