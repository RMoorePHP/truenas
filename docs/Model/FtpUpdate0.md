# # FtpUpdate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**port** | **int** |  | [optional]
**clients** | **int** | &#x60;clients&#x60; is an integer value which sets the maximum number of simultaneous clients allowed. It defaults to 32. | [optional]
**ipconnections** | **int** | &#x60;ipconnections&#x60; is an integer value which shows the maximum number of connections per IP address. It defaults to 0 which equals to unlimited. | [optional]
**loginattempt** | **int** |  | [optional]
**timeout** | **int** | &#x60;timeout&#x60; is the maximum number of seconds that proftpd will allow clients to stay connected without receiving any data on either the control or data connection. | [optional]
**timeout_notransfer** | **int** | &#x60;timeout_notransfer&#x60; is the maximum number of seconds a client is allowed to spend connected, after authentication, without issuing a command which results in creating an active or passive data connection (i.e. sending/receiving a file, or receiving a directory listing). | [optional]
**rootlogin** | **bool** | &#x60;rootlogin&#x60; is a boolean value which when configured to true enables login as root. This is generally discouraged because of the security risks. | [optional]
**onlyanonymous** | **bool** | &#x60;onlyanonymous&#x60; allows anonymous FTP logins with access to the directory specified by &#x60;anonpath&#x60;. | [optional]
**anonpath** | **string** | &#x60;onlyanonymous&#x60; allows anonymous FTP logins with access to the directory specified by &#x60;anonpath&#x60;. | [optional]
**onlylocal** | **bool** |  | [optional]
**banner** | **string** | &#x60;banner&#x60; is a message displayed to local login users after they successfully authenticate. It is not displayed to anonymous login users. | [optional]
**filemask** | **string** | &#x60;filemask&#x60; sets the default permissions for newly created files which by default are 077. | [optional]
**dirmask** | **string** | &#x60;dirmask&#x60; sets the default permissions for newly created directories which by default are 077. | [optional]
**fxp** | **bool** | &#x60;fxp&#x60; if set to true indicates that File eXchange Protocol is enabled. Generally it is discouraged as it makes the server vulnerable to FTP bounce attacks. | [optional]
**resume** | **bool** | &#x60;resume&#x60; if set allows FTP clients to resume interrupted transfers. | [optional]
**defaultroot** | **bool** | &#x60;defaultroot&#x60; when set ensures that for local users, home directory access is only granted if the user is a member of group wheel. | [optional]
**ident** | **bool** | &#x60;ident&#x60; is a boolean value which when set to true indicates that IDENT authentication is required. If identd is not running on the client, this can result in timeouts. | [optional]
**reversedns** | **bool** |  | [optional]
**masqaddress** | **string** | &#x60;masqaddress&#x60; is the public IP address or hostname which is set if FTP clients cannot connect through a NAT device. | [optional]
**passiveportsmin** | **int** |  | [optional]
**passiveportsmax** | **int** |  | [optional]
**localuserbw** | **int** | &#x60;localuserbw&#x60; is a positive integer value which indicates maximum upload bandwidth in KB/s for local user. Default of zero indicates unlimited upload bandwidth ( from the FTP server configuration ). | [optional]
**localuserdlbw** | **int** | &#x60;localuserdlbw&#x60; is a positive integer value which indicates maximum download bandwidth in KB/s for local user. Default of zero indicates unlimited download bandwidth ( from the FTP server configuration ). | [optional]
**anonuserbw** | **int** | &#x60;anonuserbw&#x60; is a positive integer value which indicates maximum upload bandwidth in KB/s for anonymous user. Default of zero indicates unlimited upload bandwidth ( from the FTP server configuration ). | [optional]
**anonuserdlbw** | **int** | &#x60;anonuserdlbw&#x60; is a positive integer value which indicates maximum download bandwidth in KB/s for anonymous user. Default of zero indicates unlimited download bandwidth ( from the FTP server configuration ). | [optional]
**tls** | **bool** | &#x60;tls&#x60; is a boolean value which when set indicates that encrypted connections are enabled. This requires a certificate to be configured first with the certificate service and the id of certificate is passed on in | [optional]
**tls_policy** | **string** | &#x60;tls_policy&#x60; defines whether the control channel, data channel, both channels, or neither channel of an FTP session must occur over SSL/TLS. | [optional]
**tls_opt_allow_client_renegotiations** | **bool** |  | [optional]
**tls_opt_allow_dot_login** | **bool** |  | [optional]
**tls_opt_allow_per_user** | **bool** |  | [optional]
**tls_opt_common_name_required** | **bool** |  | [optional]
**tls_opt_enable_diags** | **bool** | &#x60;tls_opt_enable_diags&#x60; is a boolean value when set, logs verbosely. This is helpful when troubleshooting a connection. | [optional]
**tls_opt_export_cert_data** | **bool** |  | [optional]
**tls_opt_no_cert_request** | **bool** |  | [optional]
**tls_opt_no_empty_fragments** | **bool** |  | [optional]
**tls_opt_no_session_reuse_required** | **bool** |  | [optional]
**tls_opt_stdenvvars** | **bool** |  | [optional]
**tls_opt_dns_name_required** | **bool** |  | [optional]
**tls_opt_ip_address_required** | **bool** |  | [optional]
**ssltls_certificate** | **int** | &#x60;ssltls_certificate&#x60;. | [optional]
**options** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)