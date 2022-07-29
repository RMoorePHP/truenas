<?php
/**
 * SnmpUpdate0
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
 * SnmpUpdate0 Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SnmpUpdate0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'snmp_update_0';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'location' => 'string',
        'contact' => 'string',
        'traps' => 'bool',
        'v3' => 'bool',
        'community' => 'string',
        'v3_username' => 'string',
        'v3_authtype' => 'string',
        'v3_password' => 'string',
        'v3_privproto' => 'string',
        'v3_privpassphrase' => 'string',
        'loglevel' => 'int',
        'options' => 'string',
        'zilstat' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'location' => null,
        'contact' => null,
        'traps' => null,
        'v3' => null,
        'community' => null,
        'v3_username' => null,
        'v3_authtype' => null,
        'v3_password' => null,
        'v3_privproto' => null,
        'v3_privpassphrase' => null,
        'loglevel' => null,
        'options' => null,
        'zilstat' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'location' => false,
		'contact' => false,
		'traps' => false,
		'v3' => false,
		'community' => false,
		'v3_username' => false,
		'v3_authtype' => false,
		'v3_password' => false,
		'v3_privproto' => true,
		'v3_privpassphrase' => true,
		'loglevel' => false,
		'options' => false,
		'zilstat' => false
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
        'location' => 'location',
        'contact' => 'contact',
        'traps' => 'traps',
        'v3' => 'v3',
        'community' => 'community',
        'v3_username' => 'v3_username',
        'v3_authtype' => 'v3_authtype',
        'v3_password' => 'v3_password',
        'v3_privproto' => 'v3_privproto',
        'v3_privpassphrase' => 'v3_privpassphrase',
        'loglevel' => 'loglevel',
        'options' => 'options',
        'zilstat' => 'zilstat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location' => 'setLocation',
        'contact' => 'setContact',
        'traps' => 'setTraps',
        'v3' => 'setV3',
        'community' => 'setCommunity',
        'v3_username' => 'setV3Username',
        'v3_authtype' => 'setV3Authtype',
        'v3_password' => 'setV3Password',
        'v3_privproto' => 'setV3Privproto',
        'v3_privpassphrase' => 'setV3Privpassphrase',
        'loglevel' => 'setLoglevel',
        'options' => 'setOptions',
        'zilstat' => 'setZilstat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location' => 'getLocation',
        'contact' => 'getContact',
        'traps' => 'getTraps',
        'v3' => 'getV3',
        'community' => 'getCommunity',
        'v3_username' => 'getV3Username',
        'v3_authtype' => 'getV3Authtype',
        'v3_password' => 'getV3Password',
        'v3_privproto' => 'getV3Privproto',
        'v3_privpassphrase' => 'getV3Privpassphrase',
        'loglevel' => 'getLoglevel',
        'options' => 'getOptions',
        'zilstat' => 'getZilstat'
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

    public const V3_AUTHTYPE_EMPTY = '';
    public const V3_AUTHTYPE_MD5 = 'MD5';
    public const V3_AUTHTYPE_SHA = 'SHA';
    public const V3_PRIVPROTO_NULL = 'null';
    public const V3_PRIVPROTO_AES = 'AES';
    public const V3_PRIVPROTO_DES = 'DES';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getV3AuthtypeAllowableValues()
    {
        return [
            self::V3_AUTHTYPE_EMPTY,
            self::V3_AUTHTYPE_MD5,
            self::V3_AUTHTYPE_SHA,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getV3PrivprotoAllowableValues()
    {
        return [
            self::V3_PRIVPROTO_NULL,
            self::V3_PRIVPROTO_AES,
            self::V3_PRIVPROTO_DES,
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
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('traps', $data ?? [], null);
        $this->setIfExists('v3', $data ?? [], null);
        $this->setIfExists('community', $data ?? [], 'public');
        $this->setIfExists('v3_username', $data ?? [], null);
        $this->setIfExists('v3_authtype', $data ?? [], null);
        $this->setIfExists('v3_password', $data ?? [], null);
        $this->setIfExists('v3_privproto', $data ?? [], null);
        $this->setIfExists('v3_privpassphrase', $data ?? [], null);
        $this->setIfExists('loglevel', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('zilstat', $data ?? [], null);
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

        $allowedValues = $this->getV3AuthtypeAllowableValues();
        if (!is_null($this->container['v3_authtype']) && !in_array($this->container['v3_authtype'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'v3_authtype', must be one of '%s'",
                $this->container['v3_authtype'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getV3PrivprotoAllowableValues();
        if (!is_null($this->container['v3_privproto']) && !in_array($this->container['v3_privproto'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'v3_privproto', must be one of '%s'",
                $this->container['v3_privproto'],
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
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {

        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }

        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return string|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param string|null $contact contact
     *
     * @return self
     */
    public function setContact($contact)
    {

        if (is_null($contact)) {
            throw new \InvalidArgumentException('non-nullable contact cannot be null');
        }

        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets traps
     *
     * @return bool|null
     */
    public function getTraps()
    {
        return $this->container['traps'];
    }

    /**
     * Sets traps
     *
     * @param bool|null $traps traps
     *
     * @return self
     */
    public function setTraps($traps)
    {

        if (is_null($traps)) {
            throw new \InvalidArgumentException('non-nullable traps cannot be null');
        }

        $this->container['traps'] = $traps;

        return $this;
    }

    /**
     * Gets v3
     *
     * @return bool|null
     */
    public function getV3()
    {
        return $this->container['v3'];
    }

    /**
     * Sets v3
     *
     * @param bool|null $v3 `v3` when set enables SNMP version 3.
     *
     * @return self
     */
    public function setV3($v3)
    {

        if (is_null($v3)) {
            throw new \InvalidArgumentException('non-nullable v3 cannot be null');
        }

        $this->container['v3'] = $v3;

        return $this;
    }

    /**
     * Gets community
     *
     * @return string|null
     */
    public function getCommunity()
    {
        return $this->container['community'];
    }

    /**
     * Sets community
     *
     * @param string|null $community community
     *
     * @return self
     */
    public function setCommunity($community)
    {

        if (is_null($community)) {
            throw new \InvalidArgumentException('non-nullable community cannot be null');
        }

        $this->container['community'] = $community;

        return $this;
    }

    /**
     * Gets v3_username
     *
     * @return string|null
     */
    public function getV3Username()
    {
        return $this->container['v3_username'];
    }

    /**
     * Sets v3_username
     *
     * @param string|null $v3_username v3_username
     *
     * @return self
     */
    public function setV3Username($v3_username)
    {

        if (is_null($v3_username)) {
            throw new \InvalidArgumentException('non-nullable v3_username cannot be null');
        }

        $this->container['v3_username'] = $v3_username;

        return $this;
    }

    /**
     * Gets v3_authtype
     *
     * @return string|null
     */
    public function getV3Authtype()
    {
        return $this->container['v3_authtype'];
    }

    /**
     * Sets v3_authtype
     *
     * @param string|null $v3_authtype v3_authtype
     *
     * @return self
     */
    public function setV3Authtype($v3_authtype)
    {
        $allowedValues = $this->getV3AuthtypeAllowableValues();
        if (!is_null($v3_authtype) && !in_array($v3_authtype, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'v3_authtype', must be one of '%s'",
                    $v3_authtype,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($v3_authtype)) {
            throw new \InvalidArgumentException('non-nullable v3_authtype cannot be null');
        }

        $this->container['v3_authtype'] = $v3_authtype;

        return $this;
    }

    /**
     * Gets v3_password
     *
     * @return string|null
     */
    public function getV3Password()
    {
        return $this->container['v3_password'];
    }

    /**
     * Sets v3_password
     *
     * @param string|null $v3_password v3_password
     *
     * @return self
     */
    public function setV3Password($v3_password)
    {

        if (is_null($v3_password)) {
            throw new \InvalidArgumentException('non-nullable v3_password cannot be null');
        }

        $this->container['v3_password'] = $v3_password;

        return $this;
    }

    /**
     * Gets v3_privproto
     *
     * @return string|null
     */
    public function getV3Privproto()
    {
        return $this->container['v3_privproto'];
    }

    /**
     * Sets v3_privproto
     *
     * @param string|null $v3_privproto v3_privproto
     *
     * @return self
     */
    public function setV3Privproto($v3_privproto)
    {
        $allowedValues = $this->getV3PrivprotoAllowableValues();
        if (!is_null($v3_privproto) && !in_array($v3_privproto, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'v3_privproto', must be one of '%s'",
                    $v3_privproto,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($v3_privproto)) {
            array_push($this->openAPINullablesSetToNull, 'v3_privproto');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v3_privproto', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['v3_privproto'] = $v3_privproto;

        return $this;
    }

    /**
     * Gets v3_privpassphrase
     *
     * @return string|null
     */
    public function getV3Privpassphrase()
    {
        return $this->container['v3_privpassphrase'];
    }

    /**
     * Sets v3_privpassphrase
     *
     * @param string|null $v3_privpassphrase v3_privpassphrase
     *
     * @return self
     */
    public function setV3Privpassphrase($v3_privpassphrase)
    {

        if (is_null($v3_privpassphrase)) {
            array_push($this->openAPINullablesSetToNull, 'v3_privpassphrase');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v3_privpassphrase', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['v3_privpassphrase'] = $v3_privpassphrase;

        return $this;
    }

    /**
     * Gets loglevel
     *
     * @return int|null
     */
    public function getLoglevel()
    {
        return $this->container['loglevel'];
    }

    /**
     * Sets loglevel
     *
     * @param int|null $loglevel loglevel
     *
     * @return self
     */
    public function setLoglevel($loglevel)
    {

        if (is_null($loglevel)) {
            throw new \InvalidArgumentException('non-nullable loglevel cannot be null');
        }

        $this->container['loglevel'] = $loglevel;

        return $this;
    }

    /**
     * Gets options
     *
     * @return string|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param string|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {

        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }

        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets zilstat
     *
     * @return bool|null
     */
    public function getZilstat()
    {
        return $this->container['zilstat'];
    }

    /**
     * Sets zilstat
     *
     * @param bool|null $zilstat zilstat
     *
     * @return self
     */
    public function setZilstat($zilstat)
    {

        if (is_null($zilstat)) {
            throw new \InvalidArgumentException('non-nullable zilstat cannot be null');
        }

        $this->container['zilstat'] = $zilstat;

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


