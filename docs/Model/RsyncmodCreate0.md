# # RsyncmodCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** |  | [optional] [default to true]
**name** | **string** |  | [optional]
**comment** | **string** |  | [optional]
**path** | **string** | &#x60;path&#x60; represents the path to a dataset. Path length is limited to 1023 characters maximum as per the limit enforced by FreeBSD. It is possible that we reach this max length recursively while transferring data. In that case, the user must ensure the maximum path will not be too long or modify the recursed path to shorter than the limit. | [optional]
**mode** | **string** |  | [optional]
**maxconn** | **int** | &#x60;maxconn&#x60; is an integer value representing the maximum number of simultaneous connections. Zero represents unlimited. | [optional]
**user** | **string** |  | [optional] [default to 'nobody']
**group** | **string** |  | [optional] [default to 'nobody']
**hostsallow** | **string[]** | &#x60;hostsallow&#x60; is a list of patterns to match hostname/ip address of a connecting client. If list is empty, all hosts are allowed. | [optional]
**hostsdeny** | **string[]** | &#x60;hostsdeny&#x60; is a list of patterns to match hostname/ip address of a connecting client. If the pattern is matched, access is denied to the client. If no client should be denied, this should be left empty. | [optional]
**auxiliary** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
