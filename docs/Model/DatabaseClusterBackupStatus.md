# # DatabaseClusterBackupStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completed** | **\DateTime** | Completed is the time when the job was completed. | [optional]
**created** | **\DateTime** | Created is the timestamp of the upstream backup&#39;s creation. | [optional]
**destination** | **string** | Destination is the full path to the backup. | [optional]
**gaps** | **bool** | Gaps identifies if there are gaps detected in the PITR logs |
**state** | **string** | State is the DatabaseBackup state. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
