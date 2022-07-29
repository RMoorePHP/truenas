# # KeychaincredentialSetupSshConnection0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**private_key** | [**\RMoore\Truenas\Model\PrivateKey**](PrivateKey.md) |  | [optional]
**connection_name** | **string** |  | [optional]
**setup_type** | **string** | 1) Generating SSH Key Pair if required 2) Setting up SSH Credentials based on &#x60;setup_type&#x60; | [optional] [default to 'MANUAL']
**semi_automatic_setup** | [**\RMoore\Truenas\Model\KeychainRemoteSshSemiautomaticSetup**](KeychainRemoteSshSemiautomaticSetup.md) |  | [optional]
**manual_setup** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
