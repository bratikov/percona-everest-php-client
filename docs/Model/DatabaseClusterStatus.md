# # DatabaseClusterStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activeStorage** | **string** | ActiveStorage is the storage used in cluster (psmdb only) | [optional]
**crVersion** | **string** | CRVersion is the observed version of the CR used with the underlying operator. | [optional]
**details** | **string** | Details provides full status of the upstream cluster as a plain text. | [optional]
**hostname** | **string** | Hostname is the hostname where the cluster can be reached | [optional]
**message** | **string** | Message is extra information about the cluster | [optional]
**observedGeneration** | **int** | ObservedGeneration is the most recent generation observed for this DatabaseCluster. | [optional]
**port** | **int** | Port is the port where the cluster can be reached | [optional]
**ready** | **int** | Ready is the number of ready pods | [optional]
**recommendedCRVersion** | **string** | RecommendedCRVersion is the recommended version of the CR to use. If set, the CR needs to be updated to this version before upgrading the operator. If unset, the CR is already at the recommended version. | [optional]
**size** | **int** | Size is the total number of pods | [optional]
**status** | **string** | Status is the status of the cluster | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
