# # PoolCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | &#x60;encryption&#x60; when enabled will create an ZFS encrypted root dataset for &#x60;name&#x60; pool. &#x60;encryption_options&#x60; specifies configuration for encryption of root dataset for &#x60;name&#x60; pool. &#x60;encryption_options.passphrase&#x60; must be specified if encryption for root dataset is desired with a passphrase as a key. Otherwise a hex encoded key can be specified by providing &#x60;encryption_options.key&#x60;. &#x60;encryption_options.generate_key&#x60; when enabled automatically generates the key to be used for dataset encryption. | [optional]
**encryption** | **bool** | &#x60;encryption&#x60; when enabled will create an ZFS encrypted root dataset for &#x60;name&#x60; pool. | [optional] [default to false]
**deduplication** | **string** | &#x60;deduplication&#x60; when set to ON or VERIFY makes sure that no block of data is duplicated in the pool. When VERIFY is specified, if two blocks have similar signatures, byte to byte comparison is performed to ensure that the blocks are identical. This should be used in special circumstances as it carries a significant overhead. | [optional]
**checksum** | **string** |  | [optional]
**encryption_options** | [**\RMoore\Truenas\Model\EncryptionOptions**](EncryptionOptions.md) |  | [optional]
**topology** | [**\RMoore\Truenas\Model\Topology**](Topology.md) |  | [optional]
**allow_duplicate_serials** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
