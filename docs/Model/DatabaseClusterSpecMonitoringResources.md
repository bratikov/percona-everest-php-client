# # DatabaseClusterSpecMonitoringResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**claims** | [**\Everest\Model\DatabaseClusterSpecMonitoringResourcesClaimsInner[]**](DatabaseClusterSpecMonitoringResourcesClaimsInner.md) | Claims lists the names of resources, defined in spec.resourceClaims, that are used by this container.   This is an alpha field and requires enabling the DynamicResourceAllocation feature gate.   This field is immutable. It can only be set for containers. | [optional]
**limits** | [**array<string,\Everest\Model\DatabaseClusterSpecMonitoringResourcesLimitsValue>**](DatabaseClusterSpecMonitoringResourcesLimitsValue.md) | Limits describes the maximum amount of compute resources allowed. More info: https://kubernetes.io/docs/concepts/configuration/manage-resources-containers/ | [optional]
**requests** | [**array<string,\Everest\Model\DatabaseClusterSpecMonitoringResourcesLimitsValue>**](DatabaseClusterSpecMonitoringResourcesLimitsValue.md) | Requests describes the minimum amount of compute resources required. If Requests is omitted for a container, it defaults to Limits if that is explicitly specified, otherwise to an implementation-defined value. Requests cannot exceed Limits. More info: https://kubernetes.io/docs/concepts/configuration/manage-resources-containers/ | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
