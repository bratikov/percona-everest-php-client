# Everest\OperatorsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**approveUpgradePlan()**](OperatorsApi.md#approveUpgradePlan) | **POST** /namespaces/{namespace}/database-engines/upgrade-plan/approval | Upgrade database engine operators |
| [**getUpgradePlan()**](OperatorsApi.md#getUpgradePlan) | **GET** /namespaces/{namespace}/database-engines/upgrade-plan | Get upgrade plan |


## `approveUpgradePlan()`

```php
approveUpgradePlan($namespace, $body)
```

Upgrade database engine operators

This API upgrades all database engine operators in the specified namespace.  Added in v1.1.0, it is recommended to use this API for operator upgrades. The older upgrade APIs are deprecated and will be removed in v1.2.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\OperatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$body = array('key' => new \stdClass); // object | Request for upgrading the database engine operators

try {
    $apiInstance->approveUpgradePlan($namespace, $body);
} catch (Exception $e) {
    echo 'Exception when calling OperatorsApi->approveUpgradePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **body** | **object**| Request for upgrading the database engine operators | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUpgradePlan()`

```php
getUpgradePlan($namespace): \Everest\Model\UpgradePlan
```

Get upgrade plan

This API lists pending operator upgrades in the given namespace.  Additionally, it also returns a list of pending action items that need to be performed  before and after upgrading a database operator.  Added in v1.1.0, it is recommended to use this API for operator upgrades. The older upgrade APIs are deprecated and will be removed in v1.2.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\OperatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace

try {
    $result = $apiInstance->getUpgradePlan($namespace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorsApi->getUpgradePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |

### Return type

[**\Everest\Model\UpgradePlan**](../Model/UpgradePlan.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
