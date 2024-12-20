# Everest\AuthenticationAuthorizationApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSession()**](AuthenticationAuthorizationApi.md#createSession) | **POST** /session | Everest UI Login |
| [**getUserPermissions()**](AuthenticationAuthorizationApi.md#getUserPermissions) | **GET** /permissions | Get user permissions |


## `createSession()`

```php
createSession($userCredentials): \Everest\Model\CreateSession200Response
```

Everest UI Login

This API issues a new JWT token for logging in from the Everest API. The provided user must have the `login` capability.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\AuthenticationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userCredentials = new \Everest\Model\UserCredentials(); // \Everest\Model\UserCredentials | The user credentials

try {
    $result = $apiInstance->createSession($userCredentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationAuthorizationApi->createSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userCredentials** | [**\Everest\Model\UserCredentials**](../Model/UserCredentials.md)| The user credentials | |

### Return type

[**\Everest\Model\CreateSession200Response**](../Model/CreateSession200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserPermissions()`

```php
getUserPermissions(): \Everest\Model\UserPermissions
```

Get user permissions

This API returns a list of permissions for the user that is currently logged in.  *Example:* Assume the following RBAC policy, and users `alice` and `bob`: ``` p, role:dev, namespaces, read, * p, role:dev, database-engines, *, *_/_* p, role:dev, database-clusters, *, *_/_* p, bob, database-clusters, *, *_/_* g, alice, role:dev ``` The API will return the following permissions for `alice`: ``` {   \"permissions\": [     [         \"alice\",         \"namespaces\",         \"read\",         \"*\"     ],     [         \"alice\",         \"database-engines\",         \"*\",         \"*_/_*\"     ],     [         \"alice\",         \"database-clusters\",         \"*\",         \"*_/_*\"     ]   ] } ``` And the following permissions for `bob`: ``` {   \"permissions\": [     [         \"bob\",         \"database-clusters\",         \"*\",         \"*_/_*\"     ]   ] } ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\AuthenticationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationAuthorizationApi->getUserPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Everest\Model\UserPermissions**](../Model/UserPermissions.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
