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
 * OperatorUpgrade contains the status of the operator upgrade. This is set only if the &#x60;everest.percona.com/upgrade-operator-to&#x60; annotation is present.
 *
 * @implements \ArrayAccess<string, mixed>
 */
class DatabaseEngineStatusOperatorUpgrade implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      */
    protected static string $openAPIModelName = 'DatabaseEngine_status_operatorUpgrade';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'installPlanRef' => '\Everest\Model\DatabaseEngineStatusOperatorUpgradeInstallPlanRef',
        'message' => 'string',
        'phase' => 'string',
        'startedAt' => '\DateTime',
        'targetVersion' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, null|string>
      */
    protected static array $openAPIFormats = [
        'installPlanRef' => null,
        'message' => null,
        'phase' => null,
        'startedAt' => 'date-time',
        'targetVersion' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'installPlanRef' => false,
        'message' => false,
        'phase' => false,
        'startedAt' => false,
        'targetVersion' => false,
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
        'installPlanRef' => 'installPlanRef',
        'message' => 'message',
        'phase' => 'phase',
        'startedAt' => 'startedAt',
        'targetVersion' => 'targetVersion',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'installPlanRef' => 'setInstallPlanRef',
        'message' => 'setMessage',
        'phase' => 'setPhase',
        'startedAt' => 'setStartedAt',
        'targetVersion' => 'setTargetVersion',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'installPlanRef' => 'getInstallPlanRef',
        'message' => 'getMessage',
        'phase' => 'getPhase',
        'startedAt' => 'getStartedAt',
        'targetVersion' => 'getTargetVersion',
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
        $this->setIfExists('installPlanRef', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('phase', $data ?? [], null);
        $this->setIfExists('startedAt', $data ?? [], null);
        $this->setIfExists('targetVersion', $data ?? [], null);
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
     * Gets installPlanRef
     *
     * @return null|\Everest\Model\DatabaseEngineStatusOperatorUpgradeInstallPlanRef
     */
    public function getInstallPlanRef(): mixed
    {
        return $this->container['installPlanRef'];
    }

    /**
     * Sets installPlanRef
     *
     * @param null|\Everest\Model\DatabaseEngineStatusOperatorUpgradeInstallPlanRef $installPlanRef installPlanRef
     */
    public function setInstallPlanRef(mixed $installPlanRef): static
    {
        if (is_null($installPlanRef)) {
            throw new \InvalidArgumentException('non-nullable installPlanRef cannot be null');
        }
        $this->container['installPlanRef'] = $installPlanRef;

        return $this;
    }

    /**
     * Gets message
     *
     * @return null|string
     */
    public function getMessage(): mixed
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param null|string $message message
     */
    public function setMessage(mixed $message): static
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets phase
     *
     * @return null|string
     */
    public function getPhase(): mixed
    {
        return $this->container['phase'];
    }

    /**
     * Sets phase
     *
     * @param null|string $phase UpgradePhase represents the phase of the operator upgrade.
     */
    public function setPhase(mixed $phase): static
    {
        if (is_null($phase)) {
            throw new \InvalidArgumentException('non-nullable phase cannot be null');
        }
        $this->container['phase'] = $phase;

        return $this;
    }

    /**
     * Gets startedAt
     *
     * @return null|\DateTime
     */
    public function getStartedAt(): mixed
    {
        return $this->container['startedAt'];
    }

    /**
     * Sets startedAt
     *
     * @param null|\DateTime $startedAt startedAt
     */
    public function setStartedAt(mixed $startedAt): static
    {
        if (is_null($startedAt)) {
            throw new \InvalidArgumentException('non-nullable startedAt cannot be null');
        }
        $this->container['startedAt'] = $startedAt;

        return $this;
    }

    /**
     * Gets targetVersion
     *
     * @return null|string
     */
    public function getTargetVersion(): mixed
    {
        return $this->container['targetVersion'];
    }

    /**
     * Sets targetVersion
     *
     * @param null|string $targetVersion TargetVersion is the version to which the operator should be upgraded.
     */
    public function setTargetVersion(mixed $targetVersion): static
    {
        if (is_null($targetVersion)) {
            throw new \InvalidArgumentException('non-nullable targetVersion cannot be null');
        }
        $this->container['targetVersion'] = $targetVersion;

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


