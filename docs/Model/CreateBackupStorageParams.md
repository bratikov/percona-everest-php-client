# # CreateBackupStorageParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A user defined string name of the storage in the DNS name format https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#dns-label-names |
**description** | **string** |  | [optional]
**type** | **string** |  |
**bucketName** | **string** | The cloud storage bucket/container name |
**accessKey** | **string** |  |
**secretKey** | **string** |  |
**url** | **string** |  | [optional]
**region** | **string** |  | [optional]
**allowedNamespaces** | **string[]** | List of namespaces allowed to use this backup storage |
**verifyTLS** | **bool** |  | [optional] [default to true]
**forcePathStyle** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
