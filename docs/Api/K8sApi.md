# Everest\K8sApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getKubernetesClusterInfo()**](K8sApi.md#getKubernetesClusterInfo) | **GET** /cluster-info | Get the cluster type and storage classes of a kubernetes cluster |
| [**getKubernetesClusterResources()**](K8sApi.md#getKubernetesClusterResources) | **GET** /resources | Get the capacity and available resources of a kubernetes cluster |


## `getKubernetesClusterInfo()`

```php
getKubernetesClusterInfo(): \Everest\Model\KubernetesClusterInfo
```

Get the cluster type and storage classes of a kubernetes cluster

Get the cluster type and storage classes of a kubernetes cluster

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\K8sApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getKubernetesClusterInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling K8sApi->getKubernetesClusterInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Everest\Model\KubernetesClusterInfo**](../Model/KubernetesClusterInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKubernetesClusterResources()`

```php
getKubernetesClusterResources(): \Everest\Model\KubernetesClusterResources
```

Get the capacity and available resources of a kubernetes cluster

Get the capacity and available resources of a kubernetes cluster

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\K8sApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getKubernetesClusterResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling K8sApi->getKubernetesClusterResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Everest\Model\KubernetesClusterResources**](../Model/KubernetesClusterResources.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
