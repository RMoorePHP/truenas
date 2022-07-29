# # KmipUpdate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | &#x60;enabled&#x60; if true, cannot be set to disabled if there are existing keys pending to be synced. However users can still perform this action by enabling &#x60;force_clear&#x60;. | [optional]
**manage_sed_disks** | **bool** | &#x60;manage_zfs_keys&#x60;/&#x60;manage_sed_disks&#x60; when enabled will sync keys from local database to remote KMIP server. When disabled, if there are any keys left to be retrieved from the KMIP server, it will sync them back to local database. | [optional]
**manage_zfs_keys** | **bool** | &#x60;manage_zfs_keys&#x60;/&#x60;manage_sed_disks&#x60; when enabled will sync keys from local database to remote KMIP server. When disabled, if there are any keys left to be retrieved from the KMIP server, it will sync them back to local database. | [optional]
**certificate** | **int** | System currently authenticates connection with remote KMIP Server with a TLS handshake. &#x60;certificate&#x60; and | [optional]
**certificate_authority** | **int** | &#x60;certificate_authority&#x60; determine the certs which will be used to initiate the TLS handshake with &#x60;server&#x60;. | [optional]
**port** | **int** |  | [optional]
**server** | **string** | &#x60;certificate_authority&#x60; determine the certs which will be used to initiate the TLS handshake with &#x60;server&#x60;. &#x60;validate&#x60; is enabled by default. When enabled, system will test connection to &#x60;server&#x60; making sure it&#39;s reachable. | [optional]
**ssl_version** | **string** | &#x60;ssl_version&#x60; can be specified to match the ssl configuration being used by KMIP server. | [optional]
**force_clear** | **bool** | &#x60;enabled&#x60; if true, cannot be set to disabled if there are existing keys pending to be synced. However users can still perform this action by enabling &#x60;force_clear&#x60;. &#x60;change_server&#x60; is a boolean field which allows users to migrate data between two KMIP servers. System will first migrate keys from old KMIP server to local database and then migrate the keys from local database to new KMIP server. If it is unable to retrieve all the keys from old server, this will fail. Users can bypass this by enabling &#x60;force_clear&#x60;. | [optional]
**change_server** | **bool** | &#x60;change_server&#x60; is a boolean field which allows users to migrate data between two KMIP servers. System will first migrate keys from old KMIP server to local database and then migrate the keys from local database to new KMIP server. If it is unable to retrieve all the keys from old server, this will fail. Users can bypass this by enabling &#x60;force_clear&#x60;. | [optional]
**validate** | **bool** | &#x60;validate&#x60; is enabled by default. When enabled, system will test connection to &#x60;server&#x60; making sure it&#39;s reachable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
