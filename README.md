# OpenAPIClient-php

# Authentication
All requests to Everest API require `Authorization: Bearer <token>` header with a valid token in plain-text.

The token can be obtained by using `everestctl token reset` which resets the token and prints it to the screen.



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/bratikov/percona-everest-php-client.git"
    }
  ],
  "require": {
    "percona/everest": "latest"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to */v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationAuthorizationApi* | [**createSession**](docs/Api/AuthenticationAuthorizationApi.md#createsession) | **POST** /session | Everest UI Login
*AuthenticationAuthorizationApi* | [**getUserPermissions**](docs/Api/AuthenticationAuthorizationApi.md#getuserpermissions) | **GET** /permissions | Get user permissions
*BackupApi* | [**createDatabaseClusterBackup**](docs/Api/BackupApi.md#createdatabaseclusterbackup) | **POST** /namespaces/{namespace}/database-cluster-backups | Create database cluster backup
*BackupApi* | [**deleteDatabaseClusterBackup**](docs/Api/BackupApi.md#deletedatabaseclusterbackup) | **DELETE** /namespaces/{namespace}/database-cluster-backups/{name} | Delete database cluster backup
*BackupApi* | [**getDatabaseClusterBackup**](docs/Api/BackupApi.md#getdatabaseclusterbackup) | **GET** /namespaces/{namespace}/database-cluster-backups/{name} | Get database cluster backup
*BackupApi* | [**listDatabaseClusterBackups**](docs/Api/BackupApi.md#listdatabaseclusterbackups) | **GET** /namespaces/{namespace}/database-clusters/{cluster-name}/backups | List database cluster backups
*BackupStorageApi* | [**createBackupStorage**](docs/Api/BackupStorageApi.md#createbackupstorage) | **POST** /namespaces/{namespace}/backup-storages | Create backup storage
*BackupStorageApi* | [**deleteBackupStorage**](docs/Api/BackupStorageApi.md#deletebackupstorage) | **DELETE** /namespaces/{namespace}/backup-storages/{name} | Delete backup storage
*BackupStorageApi* | [**getBackupStorage**](docs/Api/BackupStorageApi.md#getbackupstorage) | **GET** /namespaces/{namespace}/backup-storages/{name} | Get backup storage
*BackupStorageApi* | [**listBackupStorages**](docs/Api/BackupStorageApi.md#listbackupstorages) | **GET** /namespaces/{namespace}/backup-storages | List backup storages
*BackupStorageApi* | [**updateBackupStorage**](docs/Api/BackupStorageApi.md#updatebackupstorage) | **PATCH** /namespaces/{namespace}/backup-storages/{name} | Update backup storage
*DatabaseClusterApi* | [**createDatabaseCluster**](docs/Api/DatabaseClusterApi.md#createdatabasecluster) | **POST** /namespaces/{namespace}/database-clusters | Create database cluster
*DatabaseClusterApi* | [**deleteDatabaseCluster**](docs/Api/DatabaseClusterApi.md#deletedatabasecluster) | **DELETE** /namespaces/{namespace}/database-clusters/{name} | Delete database cluster
*DatabaseClusterApi* | [**getDatabaseCluster**](docs/Api/DatabaseClusterApi.md#getdatabasecluster) | **GET** /namespaces/{namespace}/database-clusters/{name} | Get database cluster
*DatabaseClusterApi* | [**getDatabaseClusterComponents**](docs/Api/DatabaseClusterApi.md#getdatabaseclustercomponents) | **GET** /namespaces/{namespace}/database-clusters/{name}/components | Get database cluster components
*DatabaseClusterApi* | [**getDatabaseClusterCredentials**](docs/Api/DatabaseClusterApi.md#getdatabaseclustercredentials) | **GET** /namespaces/{namespace}/database-clusters/{name}/credentials | Get database cluster credentials
*DatabaseClusterApi* | [**getDatabaseClusterPitr**](docs/Api/DatabaseClusterApi.md#getdatabaseclusterpitr) | **GET** /namespaces/{namespace}/database-clusters/{name}/pitr | Get the Point-in-Time recovery info
*DatabaseClusterApi* | [**listDatabaseClusters**](docs/Api/DatabaseClusterApi.md#listdatabaseclusters) | **GET** /namespaces/{namespace}/database-clusters | List database clusters
*DatabaseClusterApi* | [**updateDatabaseCluster**](docs/Api/DatabaseClusterApi.md#updatedatabasecluster) | **PUT** /namespaces/{namespace}/database-clusters/{name} | Update database cluster
*DatabaseEngineApi* | [**getDatabaseEngine**](docs/Api/DatabaseEngineApi.md#getdatabaseengine) | **GET** /namespaces/{namespace}/database-engines/{name} | Get database engine
*DatabaseEngineApi* | [**listDatabaseEngines**](docs/Api/DatabaseEngineApi.md#listdatabaseengines) | **GET** /namespaces/{namespace}/database-engines | List database engines
*DatabaseEngineApi* | [**updateDatabaseEngine**](docs/Api/DatabaseEngineApi.md#updatedatabaseengine) | **PUT** /namespaces/{namespace}/database-engines/{name} | Update database engine
*GeneralInfoApi* | [**getSettings**](docs/Api/GeneralInfoApi.md#getsettings) | **GET** /settings | Settings
*GeneralInfoApi* | [**listNamespaces**](docs/Api/GeneralInfoApi.md#listnamespaces) | **GET** /namespaces | Managed namespaces
*GeneralInfoApi* | [**versionInfo**](docs/Api/GeneralInfoApi.md#versioninfo) | **GET** /version | Version
*KubernetesApi* | [**getKubernetesClusterInfo**](docs/Api/KubernetesApi.md#getkubernetesclusterinfo) | **GET** /cluster-info | Cluster info
*KubernetesApi* | [**getKubernetesClusterResources**](docs/Api/KubernetesApi.md#getkubernetesclusterresources) | **GET** /resources | Cluster resources
*MonitoringApi* | [**createMonitoringInstance**](docs/Api/MonitoringApi.md#createmonitoringinstance) | **POST** /namespaces/{namespace}/monitoring-instances | Create monitoring instance
*MonitoringApi* | [**deleteMonitoringInstance**](docs/Api/MonitoringApi.md#deletemonitoringinstance) | **DELETE** /namespaces/{namespace}/monitoring-instances/{name} | Delete monitoring instnace
*MonitoringApi* | [**getMonitoringInstance**](docs/Api/MonitoringApi.md#getmonitoringinstance) | **GET** /namespaces/{namespace}/monitoring-instances/{name} | Get monitoring instance
*MonitoringApi* | [**listMonitoringInstances**](docs/Api/MonitoringApi.md#listmonitoringinstances) | **GET** /namespaces/{namespace}/monitoring-instances | List monitoring instances
*MonitoringApi* | [**updateMonitoringInstance**](docs/Api/MonitoringApi.md#updatemonitoringinstance) | **PATCH** /namespaces/{namespace}/monitoring-instances/{name} | Update monitoring instance
*OperatorsApi* | [**approveUpgradePlan**](docs/Api/OperatorsApi.md#approveupgradeplan) | **POST** /namespaces/{namespace}/database-engines/upgrade-plan/approval | Upgrade database engine operators
*OperatorsApi* | [**getUpgradePlan**](docs/Api/OperatorsApi.md#getupgradeplan) | **GET** /namespaces/{namespace}/database-engines/upgrade-plan | Get upgrade plan
*RestoreApi* | [**createDatabaseClusterRestore**](docs/Api/RestoreApi.md#createdatabaseclusterrestore) | **POST** /namespaces/{namespace}/database-cluster-restores | Create database cluster restore
*RestoreApi* | [**deleteDatabaseClusterRestore**](docs/Api/RestoreApi.md#deletedatabaseclusterrestore) | **DELETE** /namespaces/{namespace}/database-cluster-restores/{name} | Delete database cluster restore
*RestoreApi* | [**getDatabaseClusterRestore**](docs/Api/RestoreApi.md#getdatabaseclusterrestore) | **GET** /namespaces/{namespace}/database-cluster-restores/{name} | Get database cluster restore
*RestoreApi* | [**listDatabaseClusterRestores**](docs/Api/RestoreApi.md#listdatabaseclusterrestores) | **GET** /namespaces/{namespace}/database-clusters/{cluster-name}/restores | List database cluster restores
*RestoreApi* | [**updateDatabaseClusterRestore**](docs/Api/RestoreApi.md#updatedatabaseclusterrestore) | **PUT** /namespaces/{namespace}/database-cluster-restores/{name} | Update database cluster restore

## Models

- [BackupStorage](docs/Model/BackupStorage.md)
- [CreateBackupStorageParams](docs/Model/CreateBackupStorageParams.md)
- [CreateSession200Response](docs/Model/CreateSession200Response.md)
- [DatabaseCluster](docs/Model/DatabaseCluster.md)
- [DatabaseClusterBackup](docs/Model/DatabaseClusterBackup.md)
- [DatabaseClusterBackupList](docs/Model/DatabaseClusterBackupList.md)
- [DatabaseClusterBackupSpec](docs/Model/DatabaseClusterBackupSpec.md)
- [DatabaseClusterBackupStatus](docs/Model/DatabaseClusterBackupStatus.md)
- [DatabaseClusterComponentContainer](docs/Model/DatabaseClusterComponentContainer.md)
- [DatabaseClusterComponentsInner](docs/Model/DatabaseClusterComponentsInner.md)
- [DatabaseClusterCredential](docs/Model/DatabaseClusterCredential.md)
- [DatabaseClusterList](docs/Model/DatabaseClusterList.md)
- [DatabaseClusterPitr](docs/Model/DatabaseClusterPitr.md)
- [DatabaseClusterRestore](docs/Model/DatabaseClusterRestore.md)
- [DatabaseClusterRestoreList](docs/Model/DatabaseClusterRestoreList.md)
- [DatabaseClusterRestoreSpec](docs/Model/DatabaseClusterRestoreSpec.md)
- [DatabaseClusterRestoreSpecDataSource](docs/Model/DatabaseClusterRestoreSpecDataSource.md)
- [DatabaseClusterRestoreSpecDataSourceBackupSource](docs/Model/DatabaseClusterRestoreSpecDataSourceBackupSource.md)
- [DatabaseClusterRestoreStatus](docs/Model/DatabaseClusterRestoreStatus.md)
- [DatabaseClusterSpec](docs/Model/DatabaseClusterSpec.md)
- [DatabaseClusterSpecBackup](docs/Model/DatabaseClusterSpecBackup.md)
- [DatabaseClusterSpecBackupPitr](docs/Model/DatabaseClusterSpecBackupPitr.md)
- [DatabaseClusterSpecBackupSchedulesInner](docs/Model/DatabaseClusterSpecBackupSchedulesInner.md)
- [DatabaseClusterSpecDataSource](docs/Model/DatabaseClusterSpecDataSource.md)
- [DatabaseClusterSpecDataSourceBackupSource](docs/Model/DatabaseClusterSpecDataSourceBackupSource.md)
- [DatabaseClusterSpecDataSourcePitr](docs/Model/DatabaseClusterSpecDataSourcePitr.md)
- [DatabaseClusterSpecEngine](docs/Model/DatabaseClusterSpecEngine.md)
- [DatabaseClusterSpecEngineAffinity](docs/Model/DatabaseClusterSpecEngineAffinity.md)
- [DatabaseClusterSpecEngineAffinityNodeAffinity](docs/Model/DatabaseClusterSpecEngineAffinityNodeAffinity.md)
- [DatabaseClusterSpecEngineAffinityNodeAffinityPreferredDuringSchedulingIgnoredDuringExecutionInner](docs/Model/DatabaseClusterSpecEngineAffinityNodeAffinityPreferredDuringSchedulingIgnoredDuringExecutionInner.md)
- [DatabaseClusterSpecEngineAffinityNodeAffinityPreferredDuringSchedulingIgnoredDuringExecutionInnerPreference](docs/Model/DatabaseClusterSpecEngineAffinityNodeAffinityPreferredDuringSchedulingIgnoredDuringExecutionInnerPreference.md)
- [DatabaseClusterSpecEngineAffinityNodeAffinityPreferredDuringSchedulingIgnoredDuringExecutionInnerPreferenceMatchExpressionsInner](docs/Model/DatabaseClusterSpecEngineAffinityNodeAffinityPreferredDuringSchedulingIgnoredDuringExecutionInnerPreferenceMatchExpressionsInner.md)
- [DatabaseClusterSpecEngineAffinityNodeAffinityRequiredDuringSchedulingIgnoredDuringExecution](docs/Model/DatabaseClusterSpecEngineAffinityNodeAffinityRequiredDuringSchedulingIgnoredDuringExecution.md)
- [DatabaseClusterSpecEngineAffinityNodeAffinityRequiredDuringSchedulingIgnoredDuringExecutionNodeSelectorTermsInner](docs/Model/DatabaseClusterSpecEngineAffinityNodeAffinityRequiredDuringSchedulingIgnoredDuringExecutionNodeSelectorTermsInner.md)
- [DatabaseClusterSpecEngineAffinityPodAffinity](docs/Model/DatabaseClusterSpecEngineAffinityPodAffinity.md)
- [DatabaseClusterSpecEngineAffinityPodAffinityPreferredDuringSchedulingIgnoredDuringExecutionInner](docs/Model/DatabaseClusterSpecEngineAffinityPodAffinityPreferredDuringSchedulingIgnoredDuringExecutionInner.md)
- [DatabaseClusterSpecEngineAffinityPodAffinityPreferredDuringSchedulingIgnoredDuringExecutionInnerPodAffinityTerm](docs/Model/DatabaseClusterSpecEngineAffinityPodAffinityPreferredDuringSchedulingIgnoredDuringExecutionInnerPodAffinityTerm.md)
- [DatabaseClusterSpecEngineAffinityPodAffinityPreferredDuringSchedulingIgnoredDuringExecutionInnerPodAffinityTermLabelSelector](docs/Model/DatabaseClusterSpecEngineAffinityPodAffinityPreferredDuringSchedulingIgnoredDuringExecutionInnerPodAffinityTermLabelSelector.md)
- [DatabaseClusterSpecEngineAffinityPodAffinityPreferredDuringSchedulingIgnoredDuringExecutionInnerPodAffinityTermLabelSelectorMatchExpressionsInner](docs/Model/DatabaseClusterSpecEngineAffinityPodAffinityPreferredDuringSchedulingIgnoredDuringExecutionInnerPodAffinityTermLabelSelectorMatchExpressionsInner.md)
- [DatabaseClusterSpecEngineAffinityPodAffinityPreferredDuringSchedulingIgnoredDuringExecutionInnerPodAffinityTermNamespaceSelector](docs/Model/DatabaseClusterSpecEngineAffinityPodAffinityPreferredDuringSchedulingIgnoredDuringExecutionInnerPodAffinityTermNamespaceSelector.md)
- [DatabaseClusterSpecEngineAffinityPodAffinityRequiredDuringSchedulingIgnoredDuringExecutionInner](docs/Model/DatabaseClusterSpecEngineAffinityPodAffinityRequiredDuringSchedulingIgnoredDuringExecutionInner.md)
- [DatabaseClusterSpecEngineAffinityPodAntiAffinity](docs/Model/DatabaseClusterSpecEngineAffinityPodAntiAffinity.md)
- [DatabaseClusterSpecEngineResources](docs/Model/DatabaseClusterSpecEngineResources.md)
- [DatabaseClusterSpecEngineResourcesCpu](docs/Model/DatabaseClusterSpecEngineResourcesCpu.md)
- [DatabaseClusterSpecEngineResourcesMemory](docs/Model/DatabaseClusterSpecEngineResourcesMemory.md)
- [DatabaseClusterSpecEngineStorage](docs/Model/DatabaseClusterSpecEngineStorage.md)
- [DatabaseClusterSpecEngineStorageSize](docs/Model/DatabaseClusterSpecEngineStorageSize.md)
- [DatabaseClusterSpecMonitoring](docs/Model/DatabaseClusterSpecMonitoring.md)
- [DatabaseClusterSpecMonitoringResources](docs/Model/DatabaseClusterSpecMonitoringResources.md)
- [DatabaseClusterSpecMonitoringResourcesClaimsInner](docs/Model/DatabaseClusterSpecMonitoringResourcesClaimsInner.md)
- [DatabaseClusterSpecMonitoringResourcesLimitsValue](docs/Model/DatabaseClusterSpecMonitoringResourcesLimitsValue.md)
- [DatabaseClusterSpecProxy](docs/Model/DatabaseClusterSpecProxy.md)
- [DatabaseClusterSpecProxyExpose](docs/Model/DatabaseClusterSpecProxyExpose.md)
- [DatabaseClusterSpecProxyResources](docs/Model/DatabaseClusterSpecProxyResources.md)
- [DatabaseClusterSpecSharding](docs/Model/DatabaseClusterSpecSharding.md)
- [DatabaseClusterSpecShardingConfigServer](docs/Model/DatabaseClusterSpecShardingConfigServer.md)
- [DatabaseClusterStatus](docs/Model/DatabaseClusterStatus.md)
- [DatabaseEngine](docs/Model/DatabaseEngine.md)
- [DatabaseEngineList](docs/Model/DatabaseEngineList.md)
- [DatabaseEngineOperatorUpgradeParams](docs/Model/DatabaseEngineOperatorUpgradeParams.md)
- [DatabaseEngineSpec](docs/Model/DatabaseEngineSpec.md)
- [DatabaseEngineStatus](docs/Model/DatabaseEngineStatus.md)
- [DatabaseEngineStatusAvailableVersions](docs/Model/DatabaseEngineStatusAvailableVersions.md)
- [DatabaseEngineStatusAvailableVersionsBackupValue](docs/Model/DatabaseEngineStatusAvailableVersionsBackupValue.md)
- [DatabaseEngineStatusOperatorUpgrade](docs/Model/DatabaseEngineStatusOperatorUpgrade.md)
- [DatabaseEngineStatusOperatorUpgradeInstallPlanRef](docs/Model/DatabaseEngineStatusOperatorUpgradeInstallPlanRef.md)
- [DatabaseEngineStatusPendingOperatorUpgradesInner](docs/Model/DatabaseEngineStatusPendingOperatorUpgradesInner.md)
- [Error](docs/Model/Error.md)
- [IoK8sApimachineryPkgApisMetaV1ListMeta](docs/Model/IoK8sApimachineryPkgApisMetaV1ListMeta.md)
- [IoK8sApimachineryPkgApisMetaV1StatusCause](docs/Model/IoK8sApimachineryPkgApisMetaV1StatusCause.md)
- [IoK8sApimachineryPkgApisMetaV1StatusDetailsV2](docs/Model/IoK8sApimachineryPkgApisMetaV1StatusDetailsV2.md)
- [IoK8sApimachineryPkgApisMetaV1StatusV2](docs/Model/IoK8sApimachineryPkgApisMetaV1StatusV2.md)
- [KubernetesClusterInfo](docs/Model/KubernetesClusterInfo.md)
- [KubernetesClusterResources](docs/Model/KubernetesClusterResources.md)
- [KubernetesClusterResourcesAvailable](docs/Model/KubernetesClusterResourcesAvailable.md)
- [KubernetesClusterResourcesCapacity](docs/Model/KubernetesClusterResourcesCapacity.md)
- [MonitoringInstance](docs/Model/MonitoringInstance.md)
- [MonitoringInstanceBase](docs/Model/MonitoringInstanceBase.md)
- [MonitoringInstanceBaseWithName](docs/Model/MonitoringInstanceBaseWithName.md)
- [MonitoringInstanceCreateParams](docs/Model/MonitoringInstanceCreateParams.md)
- [MonitoringInstancePMM](docs/Model/MonitoringInstancePMM.md)
- [MonitoringInstancePMMPmm](docs/Model/MonitoringInstancePMMPmm.md)
- [MonitoringInstanceUpdateParams](docs/Model/MonitoringInstanceUpdateParams.md)
- [OIDCConfig](docs/Model/OIDCConfig.md)
- [OperatorUpgradePreflight](docs/Model/OperatorUpgradePreflight.md)
- [OperatorUpgradePreflightForDatabase](docs/Model/OperatorUpgradePreflightForDatabase.md)
- [OperatorVersion](docs/Model/OperatorVersion.md)
- [OperatorVersionCheckForDatabase](docs/Model/OperatorVersionCheckForDatabase.md)
- [Settings](docs/Model/Settings.md)
- [SizeLimit](docs/Model/SizeLimit.md)
- [UpdateBackupStorageParams](docs/Model/UpdateBackupStorageParams.md)
- [Upgrade](docs/Model/Upgrade.md)
- [UpgradePlan](docs/Model/UpgradePlan.md)
- [UpgradeTask](docs/Model/UpgradeTask.md)
- [UserCredentials](docs/Model/UserCredentials.md)
- [UserPermissions](docs/Model/UserPermissions.md)
- [Version](docs/Model/Version.md)

## Authorization

Authentication schemes defined for the API:
### BearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `1.3.0`
    - Generator version: `7.10.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
