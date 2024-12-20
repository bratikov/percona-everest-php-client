# # DatabaseClusterSpecEngine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**affinity** | [**\Everest\Model\DatabaseClusterSpecEngineAffinity**](DatabaseClusterSpecEngineAffinity.md) |  | [optional]
**config** | **string** | Config is the engine configuration | [optional]
**crVersion** | **string** | CRVersion is the desired version of the CR to use with the underlying operator. If unspecified, everest-operator will use the same version as the operator.  NOTE: Updating this property post installation may lead to a restart of the cluster. | [optional]
**replicas** | **int** | Replicas is the number of engine replicas | [optional]
**resources** | [**\Everest\Model\DatabaseClusterSpecEngineResources**](DatabaseClusterSpecEngineResources.md) |  | [optional]
**storage** | [**\Everest\Model\DatabaseClusterSpecEngineStorage**](DatabaseClusterSpecEngineStorage.md) |  |
**type** | **string** | Type is the engine type |
**userSecretsName** | **string** | UserSecretsName is the name of the secret containing the user secrets | [optional]
**version** | **string** | Version is the engine version | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
