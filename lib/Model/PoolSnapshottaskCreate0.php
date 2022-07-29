<?php
/**
 * PoolSnapshottaskCreate0
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TrueNAS RESTful API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v2.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace RMoore\Truenas\Model;

use \ArrayAccess;
use \RMoore\Truenas\ObjectSerializer;

/**
 * PoolSnapshottaskCreate0 Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PoolSnapshottaskCreate0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'pool_snapshottask_create_0';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dataset' => 'string',
        'recursive' => 'bool',
        'exclude' => 'string[]',
        'lifetime_value' => 'int',
        'lifetime_unit' => 'string',
        'naming_schema' => 'string',
        'schedule' => '\RMoore\Truenas\Model\Schedule2',
        'allow_empty' => 'bool',
        'enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dataset' => null,
        'recursive' => null,
        'exclude' => null,
        'lifetime_value' => null,
        'lifetime_unit' => null,
        'naming_schema' => null,
        'schedule' => null,
        'allow_empty' => null,
        'enabled' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dataset' => false,
		'recursive' => false,
		'exclude' => false,
		'lifetime_value' => false,
		'lifetime_unit' => false,
		'naming_schema' => false,
		'schedule' => false,
		'allow_empty' => false,
		'enabled' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'dataset' => 'dataset',
        'recursive' => 'recursive',
        'exclude' => 'exclude',
        'lifetime_value' => 'lifetime_value',
        'lifetime_unit' => 'lifetime_unit',
        'naming_schema' => 'naming_schema',
        'schedule' => 'schedule',
        'allow_empty' => 'allow_empty',
        'enabled' => 'enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dataset' => 'setDataset',
        'recursive' => 'setRecursive',
        'exclude' => 'setExclude',
        'lifetime_value' => 'setLifetimeValue',
        'lifetime_unit' => 'setLifetimeUnit',
        'naming_schema' => 'setNamingSchema',
        'schedule' => 'setSchedule',
        'allow_empty' => 'setAllowEmpty',
        'enabled' => 'setEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dataset' => 'getDataset',
        'recursive' => 'getRecursive',
        'exclude' => 'getExclude',
        'lifetime_value' => 'getLifetimeValue',
        'lifetime_unit' => 'getLifetimeUnit',
        'naming_schema' => 'getNamingSchema',
        'schedule' => 'getSchedule',
        'allow_empty' => 'getAllowEmpty',
        'enabled' => 'getEnabled'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const LIFETIME_UNIT_HOUR = 'HOUR';
    public const LIFETIME_UNIT_DAY = 'DAY';
    public const LIFETIME_UNIT_WEEK = 'WEEK';
    public const LIFETIME_UNIT_MONTH = 'MONTH';
    public const LIFETIME_UNIT_YEAR = 'YEAR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLifetimeUnitAllowableValues()
    {
        return [
            self::LIFETIME_UNIT_HOUR,
            self::LIFETIME_UNIT_DAY,
            self::LIFETIME_UNIT_WEEK,
            self::LIFETIME_UNIT_MONTH,
            self::LIFETIME_UNIT_YEAR,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('dataset', $data ?? [], null);
        $this->setIfExists('recursive', $data ?? [], null);
        $this->setIfExists('exclude', $data ?? [], null);
        $this->setIfExists('lifetime_value', $data ?? [], null);
        $this->setIfExists('lifetime_unit', $data ?? [], null);
        $this->setIfExists('naming_schema', $data ?? [], null);
        $this->setIfExists('schedule', $data ?? [], null);
        $this->setIfExists('allow_empty', $data ?? [], true);
        $this->setIfExists('enabled', $data ?? [], true);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getLifetimeUnitAllowableValues();
        if (!is_null($this->container['lifetime_unit']) && !in_array($this->container['lifetime_unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'lifetime_unit', must be one of '%s'",
                $this->container['lifetime_unit'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets dataset
     *
     * @return string|null
     */
    public function getDataset()
    {
        return $this->container['dataset'];
    }

    /**
     * Sets dataset
     *
     * @param string|null $dataset Create a Periodic Snapshot Task that will take snapshots of specified `dataset` at specified `schedule`.
     *
     * @return self
     */
    public function setDataset($dataset)
    {

        if (is_null($dataset)) {
            throw new \InvalidArgumentException('non-nullable dataset cannot be null');
        }

        $this->container['dataset'] = $dataset;

        return $this;
    }

    /**
     * Gets recursive
     *
     * @return bool|null
     */
    public function getRecursive()
    {
        return $this->container['recursive'];
    }

    /**
     * Sets recursive
     *
     * @param bool|null $recursive Recursive snapshots can be created if `recursive` flag is enabled. You can `exclude` specific child datasets or zvols from the snapshot. Snapshots will be automatically destroyed after a certain amount of time, specified by
     *
     * @return self
     */
    public function setRecursive($recursive)
    {

        if (is_null($recursive)) {
            throw new \InvalidArgumentException('non-nullable recursive cannot be null');
        }

        $this->container['recursive'] = $recursive;

        return $this;
    }

    /**
     * Gets exclude
     *
     * @return string[]|null
     */
    public function getExclude()
    {
        return $this->container['exclude'];
    }

    /**
     * Sets exclude
     *
     * @param string[]|null $exclude Recursive snapshots can be created if `recursive` flag is enabled. You can `exclude` specific child datasets or zvols from the snapshot. Snapshots will be automatically destroyed after a certain amount of time, specified by
     *
     * @return self
     */
    public function setExclude($exclude)
    {

        if (is_null($exclude)) {
            throw new \InvalidArgumentException('non-nullable exclude cannot be null');
        }

        $this->container['exclude'] = $exclude;

        return $this;
    }

    /**
     * Gets lifetime_value
     *
     * @return int|null
     */
    public function getLifetimeValue()
    {
        return $this->container['lifetime_value'];
    }

    /**
     * Sets lifetime_value
     *
     * @param int|null $lifetime_value `lifetime_value` and `lifetime_unit`. If multiple periodic tasks create snapshots at the same time (for example hourly and daily at 00:00) the snapshot will be kept until the last of these tasks reaches its expiry time.
     *
     * @return self
     */
    public function setLifetimeValue($lifetime_value)
    {

        if (is_null($lifetime_value)) {
            throw new \InvalidArgumentException('non-nullable lifetime_value cannot be null');
        }

        $this->container['lifetime_value'] = $lifetime_value;

        return $this;
    }

    /**
     * Gets lifetime_unit
     *
     * @return string|null
     */
    public function getLifetimeUnit()
    {
        return $this->container['lifetime_unit'];
    }

    /**
     * Sets lifetime_unit
     *
     * @param string|null $lifetime_unit `lifetime_value` and `lifetime_unit`. If multiple periodic tasks create snapshots at the same time (for example hourly and daily at 00:00) the snapshot will be kept until the last of these tasks reaches its expiry time.
     *
     * @return self
     */
    public function setLifetimeUnit($lifetime_unit)
    {
        $allowedValues = $this->getLifetimeUnitAllowableValues();
        if (!is_null($lifetime_unit) && !in_array($lifetime_unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'lifetime_unit', must be one of '%s'",
                    $lifetime_unit,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($lifetime_unit)) {
            throw new \InvalidArgumentException('non-nullable lifetime_unit cannot be null');
        }

        $this->container['lifetime_unit'] = $lifetime_unit;

        return $this;
    }

    /**
     * Gets naming_schema
     *
     * @return string|null
     */
    public function getNamingSchema()
    {
        return $this->container['naming_schema'];
    }

    /**
     * Sets naming_schema
     *
     * @param string|null $naming_schema Snapshots will be named according to `naming_schema` which is a `strftime`-like template for snapshot name and must contain `%Y`, `%m`, `%d`, `%H` and `%M`.
     *
     * @return self
     */
    public function setNamingSchema($naming_schema)
    {

        if (is_null($naming_schema)) {
            throw new \InvalidArgumentException('non-nullable naming_schema cannot be null');
        }

        $this->container['naming_schema'] = $naming_schema;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return \RMoore\Truenas\Model\Schedule2|null
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param \RMoore\Truenas\Model\Schedule2|null $schedule schedule
     *
     * @return self
     */
    public function setSchedule($schedule)
    {

        if (is_null($schedule)) {
            throw new \InvalidArgumentException('non-nullable schedule cannot be null');
        }

        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets allow_empty
     *
     * @return bool|null
     */
    public function getAllowEmpty()
    {
        return $this->container['allow_empty'];
    }

    /**
     * Sets allow_empty
     *
     * @param bool|null $allow_empty allow_empty
     *
     * @return self
     */
    public function setAllowEmpty($allow_empty)
    {

        if (is_null($allow_empty)) {
            throw new \InvalidArgumentException('non-nullable allow_empty cannot be null');
        }

        $this->container['allow_empty'] = $allow_empty;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {

        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }

        $this->container['enabled'] = $enabled;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


