<?php
/**
 * PoolAttach1
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
 * PoolAttach1 Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PoolAttach1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'pool_attach_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'target_vdev' => 'string',
        'new_disk' => 'string',
        'passphrase' => 'string',
        'allow_duplicate_serials' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'target_vdev' => null,
        'new_disk' => null,
        'passphrase' => null,
        'allow_duplicate_serials' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'target_vdev' => false,
		'new_disk' => false,
		'passphrase' => false,
		'allow_duplicate_serials' => false
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
        'target_vdev' => 'target_vdev',
        'new_disk' => 'new_disk',
        'passphrase' => 'passphrase',
        'allow_duplicate_serials' => 'allow_duplicate_serials'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'target_vdev' => 'setTargetVdev',
        'new_disk' => 'setNewDisk',
        'passphrase' => 'setPassphrase',
        'allow_duplicate_serials' => 'setAllowDuplicateSerials'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'target_vdev' => 'getTargetVdev',
        'new_disk' => 'getNewDisk',
        'passphrase' => 'getPassphrase',
        'allow_duplicate_serials' => 'getAllowDuplicateSerials'
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
        $this->setIfExists('target_vdev', $data ?? [], null);
        $this->setIfExists('new_disk', $data ?? [], null);
        $this->setIfExists('passphrase', $data ?? [], null);
        $this->setIfExists('allow_duplicate_serials', $data ?? [], false);
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
     * Gets target_vdev
     *
     * @return string|null
     */
    public function getTargetVdev()
    {
        return $this->container['target_vdev'];
    }

    /**
     * Sets target_vdev
     *
     * @param string|null $target_vdev target_vdev
     *
     * @return self
     */
    public function setTargetVdev($target_vdev)
    {

        if (is_null($target_vdev)) {
            throw new \InvalidArgumentException('non-nullable target_vdev cannot be null');
        }

        $this->container['target_vdev'] = $target_vdev;

        return $this;
    }

    /**
     * Gets new_disk
     *
     * @return string|null
     */
    public function getNewDisk()
    {
        return $this->container['new_disk'];
    }

    /**
     * Sets new_disk
     *
     * @param string|null $new_disk new_disk
     *
     * @return self
     */
    public function setNewDisk($new_disk)
    {

        if (is_null($new_disk)) {
            throw new \InvalidArgumentException('non-nullable new_disk cannot be null');
        }

        $this->container['new_disk'] = $new_disk;

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
     * @param string|null $passphrase For TrueNAS Core/Enterprise platform, if the `oid` pool is passphrase GELI encrypted, `passphrase` must be specified for this operation to succeed.
     *
     * @return self
     */
    public function setPassphrase($passphrase)
    {

        if (is_null($passphrase)) {
            throw new \InvalidArgumentException('non-nullable passphrase cannot be null');
        }

        $this->container['passphrase'] = $passphrase;

        return $this;
    }

    /**
     * Gets allow_duplicate_serials
     *
     * @return bool|null
     */
    public function getAllowDuplicateSerials()
    {
        return $this->container['allow_duplicate_serials'];
    }

    /**
     * Sets allow_duplicate_serials
     *
     * @param bool|null $allow_duplicate_serials allow_duplicate_serials
     *
     * @return self
     */
    public function setAllowDuplicateSerials($allow_duplicate_serials)
    {

        if (is_null($allow_duplicate_serials)) {
            throw new \InvalidArgumentException('non-nullable allow_duplicate_serials cannot be null');
        }

        $this->container['allow_duplicate_serials'] = $allow_duplicate_serials;

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

