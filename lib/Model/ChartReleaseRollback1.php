<?php
/**
 * ChartReleaseRollback1
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
 * ChartReleaseRollback1 Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ChartReleaseRollback1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'chart_release_rollback_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'force_rollback' => 'bool',
        'recreate_resources' => 'bool',
        'rollback_snapshot' => 'bool',
        'item_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'force_rollback' => null,
        'recreate_resources' => null,
        'rollback_snapshot' => null,
        'item_version' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'force_rollback' => false,
		'recreate_resources' => false,
		'rollback_snapshot' => false,
		'item_version' => false
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
        'force_rollback' => 'force_rollback',
        'recreate_resources' => 'recreate_resources',
        'rollback_snapshot' => 'rollback_snapshot',
        'item_version' => 'item_version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'force_rollback' => 'setForceRollback',
        'recreate_resources' => 'setRecreateResources',
        'rollback_snapshot' => 'setRollbackSnapshot',
        'item_version' => 'setItemVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'force_rollback' => 'getForceRollback',
        'recreate_resources' => 'getRecreateResources',
        'rollback_snapshot' => 'getRollbackSnapshot',
        'item_version' => 'getItemVersion'
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
        $this->setIfExists('force_rollback', $data ?? [], false);
        $this->setIfExists('recreate_resources', $data ?? [], false);
        $this->setIfExists('rollback_snapshot', $data ?? [], true);
        $this->setIfExists('item_version', $data ?? [], null);
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
     * Gets force_rollback
     *
     * @return bool|null
     */
    public function getForceRollback()
    {
        return $this->container['force_rollback'];
    }

    /**
     * Sets force_rollback
     *
     * @param bool|null $force_rollback `force_rollback` is a boolean which when set will force rollback operation to move forward even if no snapshots are found. This is only useful when `rollback_snapshot` is set.
     *
     * @return self
     */
    public function setForceRollback($force_rollback)
    {

        if (is_null($force_rollback)) {
            throw new \InvalidArgumentException('non-nullable force_rollback cannot be null');
        }

        $this->container['force_rollback'] = $force_rollback;

        return $this;
    }

    /**
     * Gets recreate_resources
     *
     * @return bool|null
     */
    public function getRecreateResources()
    {
        return $this->container['recreate_resources'];
    }

    /**
     * Sets recreate_resources
     *
     * @param bool|null $recreate_resources `recreate_resources` is a boolean which will delete and then create the kubernetes resources on rollback of chart release. This should be used with caution as if chart release is consuming immutable objects like a PVC, the rollback operation can't be performed and will fail as helm tries to do a 3 way patch for rollback.
     *
     * @return self
     */
    public function setRecreateResources($recreate_resources)
    {

        if (is_null($recreate_resources)) {
            throw new \InvalidArgumentException('non-nullable recreate_resources cannot be null');
        }

        $this->container['recreate_resources'] = $recreate_resources;

        return $this;
    }

    /**
     * Gets rollback_snapshot
     *
     * @return bool|null
     */
    public function getRollbackSnapshot()
    {
        return $this->container['rollback_snapshot'];
    }

    /**
     * Sets rollback_snapshot
     *
     * @param bool|null $rollback_snapshot `rollback_snapshot` is a boolean value which when set will rollback snapshots of any PVC's or ix volumes being consumed by the chart release. `force_rollback` is a boolean which when set will force rollback operation to move forward even if no snapshots are found. This is only useful when `rollback_snapshot` is set.
     *
     * @return self
     */
    public function setRollbackSnapshot($rollback_snapshot)
    {

        if (is_null($rollback_snapshot)) {
            throw new \InvalidArgumentException('non-nullable rollback_snapshot cannot be null');
        }

        $this->container['rollback_snapshot'] = $rollback_snapshot;

        return $this;
    }

    /**
     * Gets item_version
     *
     * @return string|null
     */
    public function getItemVersion()
    {
        return $this->container['item_version'];
    }

    /**
     * Sets item_version
     *
     * @param string|null $item_version `item_version` is version which we want to rollback a chart release to.
     *
     * @return self
     */
    public function setItemVersion($item_version)
    {

        if (is_null($item_version)) {
            throw new \InvalidArgumentException('non-nullable item_version cannot be null');
        }

        $this->container['item_version'] = $item_version;

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


