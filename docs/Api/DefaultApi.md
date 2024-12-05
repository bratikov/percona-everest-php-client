# Everest\DefaultApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listNamespaces()**](DefaultApi.md#listNamespaces) | **GET** /namespaces | Get all namespaces managed by Everest |
| [**session()**](DefaultApi.md#session) | **POST** /session | Method issues a new JWT token for logging in from the Everest API |
| [**versionInfo()**](DefaultApi.md#versionInfo) | **GET** /version | Get Everest API Server version info |


## `listNamespaces()`

```php
listNamespaces(): string[]
```

Get all namespaces managed by Everest

Get all namespaces managed by Everest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listNamespaces();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listNamespaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `session()`

```php
session($tokenRequest): \Everest\Model\Token
```

Method issues a new JWT token for logging in from the Everest API

The provided user must have the login capability.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenRequest = new \Everest\Model\TokenRequest(); // \Everest\Model\TokenRequest | User credentials

try {
    $result = $apiInstance->session($tokenRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->session: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tokenRequest** | [**\Everest\Model\TokenRequest**](../Model/TokenRequest.md)| User credentials | |

### Return type

[**\Everest\Model\Token**](../Model/Token.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `versionInfo()`

```php
versionInfo(): \Everest\Model\Version
```

Get Everest API Server version info

Get Everest API Server version info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->versionInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->versionInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Everest\Model\Version**](../Model/Version.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
