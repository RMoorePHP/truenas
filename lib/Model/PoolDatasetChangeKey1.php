<?php
/**
 * PoolDatasetChangeKey1
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
 * PoolDatasetChangeKey1 Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PoolDatasetChangeKey1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'pool_dataset_change_key_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'generate_key' => 'bool',
        'key_file' => 'bool',
        'pbkdf2iters' => 'int',
        'passphrase' => 'string',
        'key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'generate_key' => null,
        'key_file' => null,
        'pbkdf2iters' => null,
        'passphrase' => null,
        'key' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'generate_key' => false,
		'key_file' => false,
		'pbkdf2iters' => false,
		'passphrase' => true,
		'key' => true
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
        'generate_key' => 'generate_key',
        'key_file' => 'key_file',
        'pbkdf2iters' => 'pbkdf2iters',
        'passphrase' => 'passphrase',
        'key' => 'key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'generate_key' => 'setGenerateKey',
        'key_file' => 'setKeyFile',
        'pbkdf2iters' => 'setPbkdf2iters',
        'passphrase' => 'setPassphrase',
        'key' => 'setKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'generate_key' => 'getGenerateKey',
        'key_file' => 'getKeyFile',
        'pbkdf2iters' => 'getPbkdf2iters',
        'passphrase' => 'getPassphrase',
        'key' => 'getKey'
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
        $this->setIfExists('generate_key', $data ?? [], false);
        $this->setIfExists('key_file', $data ?? [], false);
        $this->setIfExists('pbkdf2iters', $data ?? [], 350000);
        $this->setIfExists('passphrase', $data ?? [], null);
        $this->setIfExists('key', $data ?? [], null);
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
     * Gets generate_key
     *
     * @return bool|null
     */
    public function getGenerateKey()
    {
        return $this->container['generate_key'];
    }

    /**
     * Sets generate_key
     *
     * @param bool|null $generate_key generate_key
     *
     * @return self
     */
    public function setGenerateKey($generate_key)
    {

        if (is_null($generate_key)) {
            throw new \InvalidArgumentException('non-nullable generate_key cannot be null');
        }

        $this->container['generate_key'] = $generate_key;

        return $this;
    }

    /**
     * Gets key_file
     *
     * @return bool|null
     */
    public function getKeyFile()
    {
        return $this->container['key_file'];
    }

    /**
     * Sets key_file
     *
     * @param bool|null $key_file key_file
     *
     * @return self
     */
    public function setKeyFile($key_file)
    {

        if (is_null($key_file)) {
            throw new \InvalidArgumentException('non-nullable key_file cannot be null');
        }

        $this->container['key_file'] = $key_file;

        return $this;
    }

    /**
     * Gets pbkdf2iters
     *
     * @return int|null
     */
    public function getPbkdf2iters()
    {
        return $this->container['pbkdf2iters'];
    }

    /**
     * Sets pbkdf2iters
     *
     * @param int|null $pbkdf2iters pbkdf2iters
     *
     * @return self
     */
    public function setPbkdf2iters($pbkdf2iters)
    {

        if (is_null($pbkdf2iters)) {
            throw new \InvalidArgumentException('non-nullable pbkdf2iters cannot be null');
        }

        $this->container['pbkdf2iters'] = $pbkdf2iters;

        return $this;
    }

    /**
     * Gets passphrase
     *
     * @return string|null
     */
    public function getPassphrase()
    {
        return $this->container['passphrase'];
    }

    /**
     * Sets passphrase
     *
     * @param string|null $passphrase passphrase
     *
     * @return self
     */
    public function setPassphrase($passphrase)
    {

        if (is_null($passphrase)) {
            array_push($this->openAPINullablesSetToNull, 'passphrase');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('passphrase', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['passphrase'] = $passphrase;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key key
     *
     * @return self
     */
    public function setKey($key)
    {

        if (is_null($key)) {
            array_push($this->openAPINullablesSetToNull, 'key');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('key', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['key'] = $key;

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


