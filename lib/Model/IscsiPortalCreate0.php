<?php
/**
 * IscsiPortalCreate0
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
 * IscsiPortalCreate0 Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IscsiPortalCreate0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'iscsi_portal_create_0';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'comment' => 'string',
        'discovery_authmethod' => 'string',
        'discovery_authgroup' => 'int',
        'listen' => '\RMoore\Truenas\Model\Listen[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'comment' => null,
        'discovery_authmethod' => null,
        'discovery_authgroup' => null,
        'listen' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'comment' => false,
		'discovery_authmethod' => false,
		'discovery_authgroup' => true,
		'listen' => false
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
        'comment' => 'comment',
        'discovery_authmethod' => 'discovery_authmethod',
        'discovery_authgroup' => 'discovery_authgroup',
        'listen' => 'listen'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment' => 'setComment',
        'discovery_authmethod' => 'setDiscoveryAuthmethod',
        'discovery_authgroup' => 'setDiscoveryAuthgroup',
        'listen' => 'setListen'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment' => 'getComment',
        'discovery_authmethod' => 'getDiscoveryAuthmethod',
        'discovery_authgroup' => 'getDiscoveryAuthgroup',
        'listen' => 'getListen'
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

    public const DISCOVERY_AUTHMETHOD_NONE = 'NONE';
    public const DISCOVERY_AUTHMETHOD_CHAP = 'CHAP';
    public const DISCOVERY_AUTHMETHOD_CHAP_MUTUAL = 'CHAP_MUTUAL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDiscoveryAuthmethodAllowableValues()
    {
        return [
            self::DISCOVERY_AUTHMETHOD_NONE,
            self::DISCOVERY_AUTHMETHOD_CHAP,
            self::DISCOVERY_AUTHMETHOD_CHAP_MUTUAL,
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
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('discovery_authmethod', $data ?? [], 'NONE');
        $this->setIfExists('discovery_authgroup', $data ?? [], null);
        $this->setIfExists('listen', $data ?? [], null);
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

        $allowedValues = $this->getDiscoveryAuthmethodAllowableValues();
        if (!is_null($this->container['discovery_authmethod']) && !in_array($this->container['discovery_authmethod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'discovery_authmethod', must be one of '%s'",
                $this->container['discovery_authmethod'],
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
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {

        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }

        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets discovery_authmethod
     *
     * @return string|null
     */
    public function getDiscoveryAuthmethod()
    {
        return $this->container['discovery_authmethod'];
    }

    /**
     * Sets discovery_authmethod
     *
     * @param string|null $discovery_authmethod discovery_authmethod
     *
     * @return self
     */
    public function setDiscoveryAuthmethod($discovery_authmethod)
    {
        $allowedValues = $this->getDiscoveryAuthmethodAllowableValues();
        if (!is_null($discovery_authmethod) && !in_array($discovery_authmethod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'discovery_authmethod', must be one of '%s'",
                    $discovery_authmethod,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($discovery_authmethod)) {
            throw new \InvalidArgumentException('non-nullable discovery_authmethod cannot be null');
        }

        $this->container['discovery_authmethod'] = $discovery_authmethod;

        return $this;
    }

    /**
     * Gets discovery_authgroup
     *
     * @return int|null
     */
    public function getDiscoveryAuthgroup()
    {
        return $this->container['discovery_authgroup'];
    }

    /**
     * Sets discovery_authgroup
     *
     * @param int|null $discovery_authgroup discovery_authgroup
     *
     * @return self
     */
    public function setDiscoveryAuthgroup($discovery_authgroup)
    {

        if (is_null($discovery_authgroup)) {
            array_push($this->openAPINullablesSetToNull, 'discovery_authgroup');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discovery_authgroup', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['discovery_authgroup'] = $discovery_authgroup;

        return $this;
    }

    /**
     * Gets listen
     *
     * @return \RMoore\Truenas\Model\Listen[]|null
     */
    public function getListen()
    {
        return $this->container['listen'];
    }

    /**
     * Sets listen
     *
     * @param \RMoore\Truenas\Model\Listen[]|null $listen listen
     *
     * @return self
     */
    public function setListen($listen)
    {

        if (is_null($listen)) {
            throw new \InvalidArgumentException('non-nullable listen cannot be null');
        }

        $this->container['listen'] = $listen;

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

