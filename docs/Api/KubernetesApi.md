# Everest\KubernetesApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getKubernetesClusterInfo()**](KubernetesApi.md#getKubernetesClusterInfo) | **GET** /cluster-info | Cluster info |
| [**getKubernetesClusterResources()**](KubernetesApi.md#getKubernetesClusterResources) | **GET** /resources | Cluster resources |


## `getKubernetesClusterInfo()`

```php
getKubernetesClusterInfo(): \Everest\Model\KubernetesClusterInfo
```

Cluster info

This API gets the cluster type and the storage classes available in the cluster.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getKubernetesClusterInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->getKubernetesClusterInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Everest\Model\KubernetesClusterInfo**](../Model/KubernetesClusterInfo.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

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

Cluster resources

This API gets the capacity and available resources of the Kubernetes cluster.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getKubernetesClusterResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->getKubernetesClusterResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Everest\Model\KubernetesClusterResources**](../Model/KubernetesClusterResources.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
