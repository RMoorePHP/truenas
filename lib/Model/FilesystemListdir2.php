<?php
/**
 * FilesystemListdir2
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
 * FilesystemListdir2 Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FilesystemListdir2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'filesystem_listdir_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'relationships' => 'bool',
        'extend' => 'string',
        'extend_context' => 'string',
        'prefix' => 'string',
        'extra' => 'array<string,mixed>',
        'order_by' => 'mixed[]',
        'select' => 'mixed[]',
        'count' => 'bool',
        'get' => 'bool',
        'offset' => 'int',
        'limit' => 'int',
        'force_sql_filters' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'relationships' => null,
        'extend' => null,
        'extend_context' => null,
        'prefix' => null,
        'extra' => null,
        'order_by' => null,
        'select' => null,
        'count' => null,
        'get' => null,
        'offset' => null,
        'limit' => null,
        'force_sql_filters' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'relationships' => false,
		'extend' => true,
		'extend_context' => true,
		'prefix' => true,
		'extra' => false,
		'order_by' => false,
		'select' => false,
		'count' => false,
		'get' => false,
		'offset' => false,
		'limit' => false,
		'force_sql_filters' => false
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
        'relationships' => 'relationships',
        'extend' => 'extend',
        'extend_context' => 'extend_context',
        'prefix' => 'prefix',
        'extra' => 'extra',
        'order_by' => 'order_by',
        'select' => 'select',
        'count' => 'count',
        'get' => 'get',
        'offset' => 'offset',
        'limit' => 'limit',
        'force_sql_filters' => 'force_sql_filters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'relationships' => 'setRelationships',
        'extend' => 'setExtend',
        'extend_context' => 'setExtendContext',
        'prefix' => 'setPrefix',
        'extra' => 'setExtra',
        'order_by' => 'setOrderBy',
        'select' => 'setSelect',
        'count' => 'setCount',
        'get' => 'setGet',
        'offset' => 'setOffset',
        'limit' => 'setLimit',
        'force_sql_filters' => 'setForceSqlFilters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'relationships' => 'getRelationships',
        'extend' => 'getExtend',
        'extend_context' => 'getExtendContext',
        'prefix' => 'getPrefix',
        'extra' => 'getExtra',
        'order_by' => 'getOrderBy',
        'select' => 'getSelect',
        'count' => 'getCount',
        'get' => 'getGet',
        'offset' => 'getOffset',
        'limit' => 'getLimit',
        'force_sql_filters' => 'getForceSqlFilters'
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
        $this->setIfExists('relationships', $data ?? [], true);
        $this->setIfExists('extend', $data ?? [], null);
        $this->setIfExists('extend_context', $data ?? [], null);
        $this->setIfExists('prefix', $data ?? [], null);
        $this->setIfExists('extra', $data ?? [], null);
        $this->setIfExists('order_by', $data ?? [], null);
        $this->setIfExists('select', $data ?? [], null);
        $this->setIfExists('count', $data ?? [], false);
        $this->setIfExists('get', $data ?? [], false);
        $this->setIfExists('offset', $data ?? [], 0);
        $this->setIfExists('limit', $data ?? [], 0);
        $this->setIfExists('force_sql_filters', $data ?? [], false);
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
     * Gets relationships
     *
     * @return bool|null
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param bool|null $relationships relationships
     *
     * @return self
     */
    public function setRelationships($relationships)
    {

        if (is_null($relationships)) {
            throw new \InvalidArgumentException('non-nullable relationships cannot be null');
        }

        $this->container['relationships'] = $relationships;

        return $this;
    }

    /**
     * Gets extend
     *
     * @return string|null
     */
    public function getExtend()
    {
        return $this->container['extend'];
    }

    /**
     * Sets extend
     *
     * @param string|null $extend extend
     *
     * @return self
     */
    public function setExtend($extend)
    {

        if (is_null($extend)) {
            array_push($this->openAPINullablesSetToNull, 'extend');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extend', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['extend'] = $extend;

        return $this;
    }

    /**
     * Gets extend_context
     *
     * @return string|null
     */
    public function getExtendContext()
    {
        return $this->container['extend_context'];
    }

    /**
     * Sets extend_context
     *
     * @param string|null $extend_context extend_context
     *
     * @return self
     */
    public function setExtendContext($extend_context)
    {

        if (is_null($extend_context)) {
            array_push($this->openAPINullablesSetToNull, 'extend_context');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extend_context', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['extend_context'] = $extend_context;

        return $this;
    }

    /**
     * Gets prefix
     *
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param string|null $prefix prefix
     *
     * @return self
     */
    public function setPrefix($prefix)
    {

        if (is_null($prefix)) {
            array_push($this->openAPINullablesSetToNull, 'prefix');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prefix', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets extra
     *
     * @return array<string,mixed>|null
     */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
     * Sets extra
     *
     * @param array<string,mixed>|null $extra extra
     *
     * @return self
     */
    public function setExtra($extra)
    {

        if (is_null($extra)) {
            throw new \InvalidArgumentException('non-nullable extra cannot be null');
        }

        $this->container['extra'] = $extra;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return mixed[]|null
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param mixed[]|null $order_by order_by
     *
     * @return self
     */
    public function setOrderBy($order_by)
    {

        if (is_null($order_by)) {
            throw new \InvalidArgumentException('non-nullable order_by cannot be null');
        }

        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets select
     *
     * @return mixed[]|null
     */
    public function getSelect()
    {
        return $this->container['select'];
    }

    /**
     * Sets select
     *
     * @param mixed[]|null $select select
     *
     * @return self
     */
    public function setSelect($select)
    {

        if (is_null($select)) {
            throw new \InvalidArgumentException('non-nullable select cannot be null');
        }

        $this->container['select'] = $select;

        return $this;
    }

    /**
     * Gets count
     *
     * @return bool|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param bool|null $count count
     *
     * @return self
     */
    public function setCount($count)
    {

        if (is_null($count)) {
            throw new \InvalidArgumentException('non-nullable count cannot be null');
        }

        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets get
     *
     * @return bool|null
     */
    public function getGet()
    {
        return $this->container['get'];
    }

    /**
     * Sets get
     *
     * @param bool|null $get get
     *
     * @return self
     */
    public function setGet($get)
    {

        if (is_null($get)) {
            throw new \InvalidArgumentException('non-nullable get cannot be null');
        }

        $this->container['get'] = $get;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int|null $offset offset
     *
     * @return self
     */
    public function setOffset($offset)
    {

        if (is_null($offset)) {
            throw new \InvalidArgumentException('non-nullable offset cannot be null');
        }

        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit limit
     *
     * @return self
     */
    public function setLimit($limit)
    {

        if (is_null($limit)) {
            throw new \InvalidArgumentException('non-nullable limit cannot be null');
        }

        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets force_sql_filters
     *
     * @return bool|null
     */
    public function getForceSqlFilters()
    {
        return $this->container['force_sql_filters'];
    }

    /**
     * Sets force_sql_filters
     *
     * @param bool|null $force_sql_filters force_sql_filters
     *
     * @return self
     */
    public function setForceSqlFilters($force_sql_filters)
    {

        if (is_null($force_sql_filters)) {
            throw new \InvalidArgumentException('non-nullable force_sql_filters cannot be null');
        }

        $this->container['force_sql_filters'] = $force_sql_filters;

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


