# # ContainerImagePull0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**docker_authentication** | [**\RMoore\Truenas\Model\DockerAuthentication**](DockerAuthentication.md) |  | [optional]
**from_image** | **string** | &#x60;from_image&#x60; is the name of the image to pull. Format for the name is \&quot;registry/repo/image\&quot; where registry may be omitted and it will default to docker registry in this case. | [optional]
**tag** | **string** | &#x60;tag&#x60; specifies tag of the image and defaults to &#x60;null&#x60;. In case of &#x60;null&#x60; it will retrieve all the tags of the image. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
