<?php

declare(strict_types=1);

/**
 * Percona Everest schema
 *
 * # Authentication All requests to Everest API require `Authorization: Bearer <token>` header with a valid token in plain-text.  The token can be obtained by using `everestctl token reset` which resets the token and prints it to the screen.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Everest\Model;

use Everest\ObjectSerializer;

/**
 * DataSource defines a data source for restoration.
 *
 * @implements \ArrayAccess<string, mixed>
 */
class DatabaseClusterRestoreSpecDataSource implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      */
    protected static string $openAPIModelName = 'DatabaseClusterRestore_spec_dataSource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'backupSource' => '\Everest\Model\DatabaseClusterSpecDataSourceBackupSource',
        'dbClusterBackupName' => 'string',
        'pitr' => '\Everest\Model\DatabaseClusterSpecDataSourcePitr',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, null|string>
      */
    protected static array $openAPIFormats = [
        'backupSource' => null,
        'dbClusterBackupName' => null,
        'pitr' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'backupSource' => false,
        'dbClusterBackupName' => false,
        'pitr' => false,
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, null|string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'backupSource' => 'backupSource',
        'dbClusterBackupName' => 'dbClusterBackupName',
        'pitr' => 'pitr',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'backupSource' => 'setBackupSource',
        'dbClusterBackupName' => 'setDbClusterBackupName',
        'pitr' => 'setPitr',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'backupSource' => 'getBackupSource',
        'dbClusterBackupName' => 'getDbClusterBackupName',
        'pitr' => 'getPitr',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @phpstan-var array<string, mixed>
     * @psalm-var array<string, mixed>
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array<string, mixed> $data Associated array of property values
     *                                   initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('backupSource', $data ?? [], null);
        $this->setIfExists('dbClusterBackupName', $data ?? [], null);
        $this->setIfExists('pitr', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param array<string, mixed> $fields
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return list<string> invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets backupSource
     *
     * @return null|\Everest\Model\DatabaseClusterSpecDataSourceBackupSource
     */
    public function getBackupSource(): mixed
    {
        return $this->container['backupSource'];
    }

    /**
     * Sets backupSource
     *
     * @param null|\Everest\Model\DatabaseClusterSpecDataSourceBackupSource $backupSource backupSource
     */
    public function setBackupSource(mixed $backupSource): static
    {
        if (is_null($backupSource)) {
            throw new \InvalidArgumentException('non-nullable backupSource cannot be null');
        }
        $this->container['backupSource'] = $backupSource;

        return $this;
    }

    /**
     * Gets dbClusterBackupName
     *
     * @return null|string
     */
    public function getDbClusterBackupName(): mixed
    {
        return $this->container['dbClusterBackupName'];
    }

    /**
     * Sets dbClusterBackupName
     *
     * @param null|string $dbClusterBackupName DBClusterBackupName is the name of the DB cluster backup to restore from
     */
    public function setDbClusterBackupName(mixed $dbClusterBackupName): static
    {
        if (is_null($dbClusterBackupName)) {
            throw new \InvalidArgumentException('non-nullable dbClusterBackupName cannot be null');
        }
        $this->container['dbClusterBackupName'] = $dbClusterBackupName;

        return $this;
    }

    /**
     * Gets pitr
     *
     * @return null|\Everest\Model\DatabaseClusterSpecDataSourcePitr
     */
    public function getPitr(): mixed
    {
        return $this->container['pitr'];
    }

    /**
     * Sets pitr
     *
     * @param null|\Everest\Model\DatabaseClusterSpecDataSourcePitr $pitr pitr
     */
    public function setPitr(mixed $pitr): static
    {
        if (is_null($pitr)) {
            throw new \InvalidArgumentException('non-nullable pitr cannot be null');
        }
        $this->container['pitr'] = $pitr;

        return $this;
    }
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT,
        );
    }

    /**
     * Gets a header-safe presentation of the object
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


