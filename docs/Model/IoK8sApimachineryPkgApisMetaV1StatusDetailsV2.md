# # IoK8sApimachineryPkgApisMetaV1StatusDetailsV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**causes** | [**\Everest\Model\IoK8sApimachineryPkgApisMetaV1StatusCause[]**](IoK8sApimachineryPkgApisMetaV1StatusCause.md) | The Causes array includes more details associated with the StatusReason failure. Not all StatusReasons may provide detailed causes. | [optional]
**group** | **string** | The group attribute of the resource associated with the status StatusReason. | [optional]
**kind** | **string** | The kind attribute of the resource associated with the status StatusReason. On some operations may differ from the requested resource Kind. More info: https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds | [optional]
**name** | **string** | The name attribute of the resource associated with the status StatusReason (when there is a single name which can be described). | [optional]
**retryAfterSeconds** | **int** | If specified, the time in seconds before the operation should be retried. Some errors may indicate the client must take an alternate action - for those errors this field may indicate how long to wait before taking the alternate action. | [optional]
**uid** | **string** | UID of the resource. (when there is a single resource which can be described). More info: http://kubernetes.io/docs/user-guide/identifiers#uids | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
