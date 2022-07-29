<?php
/**
 * ReportingUpdate0
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
 * ReportingUpdate0 Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReportingUpdate0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'reporting_update_0';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cpu_in_percentage' => 'bool',
        'graphite' => 'string',
        'graphite_separateinstances' => 'bool',
        'graph_age' => 'int',
        'graph_points' => 'int',
        'confirm_rrd_destroy' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cpu_in_percentage' => null,
        'graphite' => null,
        'graphite_separateinstances' => null,
        'graph_age' => null,
        'graph_points' => null,
        'confirm_rrd_destroy' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cpu_in_percentage' => false,
		'graphite' => false,
		'graphite_separateinstances' => false,
		'graph_age' => false,
		'graph_points' => false,
		'confirm_rrd_destroy' => false
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
        'cpu_in_percentage' => 'cpu_in_percentage',
        'graphite' => 'graphite',
        'graphite_separateinstances' => 'graphite_separateinstances',
        'graph_age' => 'graph_age',
        'graph_points' => 'graph_points',
        'confirm_rrd_destroy' => 'confirm_rrd_destroy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cpu_in_percentage' => 'setCpuInPercentage',
        'graphite' => 'setGraphite',
        'graphite_separateinstances' => 'setGraphiteSeparateinstances',
        'graph_age' => 'setGraphAge',
        'graph_points' => 'setGraphPoints',
        'confirm_rrd_destroy' => 'setConfirmRrdDestroy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cpu_in_percentage' => 'getCpuInPercentage',
        'graphite' => 'getGraphite',
        'graphite_separateinstances' => 'getGraphiteSeparateinstances',
        'graph_age' => 'getGraphAge',
        'graph_points' => 'getGraphPoints',
        'confirm_rrd_destroy' => 'getConfirmRrdDestroy'
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
        $this->setIfExists('cpu_in_percentage', $data ?? [], null);
        $this->setIfExists('graphite', $data ?? [], null);
        $this->setIfExists('graphite_separateinstances', $data ?? [], null);
        $this->setIfExists('graph_age', $data ?? [], null);
        $this->setIfExists('graph_points', $data ?? [], null);
        $this->setIfExists('confirm_rrd_destroy', $data ?? [], null);
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
     * Gets cpu_in_percentage
     *
     * @return bool|null
     */
    public function getCpuInPercentage()
    {
        return $this->container['cpu_in_percentage'];
    }

    /**
     * Sets cpu_in_percentage
     *
     * @param bool|null $cpu_in_percentage If `cpu_in_percentage` is `true`, collectd reports CPU usage in percentage instead of \"jiffies\".
     *
     * @return self
     */
    public function setCpuInPercentage($cpu_in_percentage)
    {

        if (is_null($cpu_in_percentage)) {
            throw new \InvalidArgumentException('non-nullable cpu_in_percentage cannot be null');
        }

        $this->container['cpu_in_percentage'] = $cpu_in_percentage;

        return $this;
    }

    /**
     * Gets graphite
     *
     * @return string|null
     */
    public function getGraphite()
    {
        return $this->container['graphite'];
    }

    /**
     * Sets graphite
     *
     * @param string|null $graphite `graphite` specifies a destination hostname or IP for collectd data sent by the Graphite plugin..
     *
     * @return self
     */
    public function setGraphite($graphite)
    {

        if (is_null($graphite)) {
            throw new \InvalidArgumentException('non-nullable graphite cannot be null');
        }

        $this->container['graphite'] = $graphite;

        return $this;
    }

    /**
     * Gets graphite_separateinstances
     *
     * @return bool|null
     */
    public function getGraphiteSeparateinstances()
    {
        return $this->container['graphite_separateinstances'];
    }

    /**
     * Sets graphite_separateinstances
     *
     * @param bool|null $graphite_separateinstances `graphite_separateinstances` corresponds to collectd SeparateInstances option.
     *
     * @return self
     */
    public function setGraphiteSeparateinstances($graphite_separateinstances)
    {

        if (is_null($graphite_separateinstances)) {
            throw new \InvalidArgumentException('non-nullable graphite_separateinstances cannot be null');
        }

        $this->container['graphite_separateinstances'] = $graphite_separateinstances;

        return $this;
    }

    /**
     * Gets graph_age
     *
     * @return int|null
     */
    public function getGraphAge()
    {
        return $this->container['graph_age'];
    }

    /**
     * Sets graph_age
     *
     * @param int|null $graph_age `graph_age` specifies the maximum age of stored graphs in months. `graph_points` is the number of points for each hourly, daily, weekly, etc. graph. Changing these requires destroying the current reporting database, so when these fields are changed, an additional `confirm_rrd_destroy: true` flag must be present.
     *
     * @return self
     */
    public function setGraphAge($graph_age)
    {

        if (is_null($graph_age)) {
            throw new \InvalidArgumentException('non-nullable graph_age cannot be null');
        }

        $this->container['graph_age'] = $graph_age;

        return $this;
    }

    /**
     * Gets graph_points
     *
     * @return int|null
     */
    public function getGraphPoints()
    {
        return $this->container['graph_points'];
    }

    /**
     * Sets graph_points
     *
     * @param int|null $graph_points `graph_age` specifies the maximum age of stored graphs in months. `graph_points` is the number of points for each hourly, daily, weekly, etc. graph. Changing these requires destroying the current reporting database, so when these fields are changed, an additional `confirm_rrd_destroy: true` flag must be present.
     *
     * @return self
     */
    public function setGraphPoints($graph_points)
    {

        if (is_null($graph_points)) {
            throw new \InvalidArgumentException('non-nullable graph_points cannot be null');
        }

        $this->container['graph_points'] = $graph_points;

        return $this;
    }

    /**
     * Gets confirm_rrd_destroy
     *
     * @return bool|null
     */
    public function getConfirmRrdDestroy()
    {
        return $this->container['confirm_rrd_destroy'];
    }

    /**
     * Sets confirm_rrd_destroy
     *
     * @param bool|null $confirm_rrd_destroy confirm_rrd_destroy
     *
     * @return self
     */
    public function setConfirmRrdDestroy($confirm_rrd_destroy)
    {

        if (is_null($confirm_rrd_destroy)) {
            throw new \InvalidArgumentException('non-nullable confirm_rrd_destroy cannot be null');
        }

        $this->container['confirm_rrd_destroy'] = $confirm_rrd_destroy;

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


