# # CertificateauthorityCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tos** | **bool** |  | [optional]
**csr_id** | **int** |  | [optional]
**signedby** | **int** |  | [optional]
**key_length** | **int** |  | [optional]
**renew_days** | **int** |  | [optional]
**type** | **int** |  | [optional]
**lifetime** | **int** |  | [optional]
**serial** | **int** |  | [optional]
**acme_directory_uri** | **string** |  | [optional]
**certificate** | **string** |  | [optional]
**city** | **string** |  | [optional]
**common** | **string** |  | [optional]
**country** | **string** |  | [optional]
**csr** | **string** |  | [optional]
**ec_curve** | **string** | Created certificate authorities use RSA keys by default. If an Elliptic Curve Key is desired, then it can be specified with the &#x60;key_type&#x60; attribute. If the &#x60;ec_curve&#x60; attribute is not specified for the Elliptic Curve Key, default to using \&quot;BrainpoolP384R1\&quot; curve. | [optional] [default to 'SECP384R1']
**email** | **string** |  | [optional]
**key_type** | **string** | Created certificate authorities use RSA keys by default. If an Elliptic Curve Key is desired, then it can be specified with the &#x60;key_type&#x60; attribute. If the &#x60;ec_curve&#x60; attribute is not specified for the Elliptic Curve Key, default to using \&quot;BrainpoolP384R1\&quot; curve. | [optional] [default to 'RSA']
**name** | **string** |  | [optional]
**organization** | **string** |  | [optional]
**organizational_unit** | **string** |  | [optional]
**passphrase** | **string** |  | [optional]
**privatekey** | **string** |  | [optional]
**state** | **string** |  | [optional]
**create_type** | **string** | Certificate Authorities are classified under following types with the necessary keywords to be passed for &#x60;create_type&#x60; attribute to create the respective type of certificate authority A type is selected by the Certificate Authority Service based on &#x60;create_type&#x60;. The rest of the values are validated accordingly and finally a certificate is made based on the selected type. | [optional]
**digest_algorithm** | **string** |  | [optional]
**san** | **string[]** |  | [optional]
**cert_extensions** | [**\RMoore\Truenas\Model\CertExtensions1**](CertExtensions1.md) |  | [optional]
**add_to_trusted_store** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
