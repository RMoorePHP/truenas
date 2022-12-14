<?php
/**
 * SharingNfsCreate0
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
 * SharingNfsCreate0 Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SharingNfsCreate0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'sharing_nfs_create_0';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'paths' => 'string[]',
        'aliases' => 'string[]',
        'comment' => 'string',
        'networks' => 'string[]',
        'hosts' => 'string[]',
        'alldirs' => 'bool',
        'ro' => 'bool',
        'quiet' => 'bool',
        'maproot_user' => 'string',
        'maproot_group' => 'string',
        'mapall_user' => 'string',
        'mapall_group' => 'string',
        'security' => 'string[]',
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
        'paths' => null,
        'aliases' => null,
        'comment' => null,
        'networks' => null,
        'hosts' => null,
        'alldirs' => null,
        'ro' => null,
        'quiet' => null,
        'maproot_user' => null,
        'maproot_group' => null,
        'mapall_user' => null,
        'mapall_group' => null,
        'security' => null,
        'enabled' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'paths' => false,
		'aliases' => false,
		'comment' => false,
		'networks' => false,
		'hosts' => false,
		'alldirs' => false,
		'ro' => false,
		'quiet' => false,
		'maproot_user' => true,
		'maproot_group' => true,
		'mapall_user' => true,
		'mapall_group' => true,
		'security' => false,
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
        'paths' => 'paths',
        'aliases' => 'aliases',
        'comment' => 'comment',
        'networks' => 'networks',
        'hosts' => 'hosts',
        'alldirs' => 'alldirs',
        'ro' => 'ro',
        'quiet' => 'quiet',
        'maproot_user' => 'maproot_user',
        'maproot_group' => 'maproot_group',
        'mapall_user' => 'mapall_user',
        'mapall_group' => 'mapall_group',
        'security' => 'security',
        'enabled' => 'enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'paths' => 'setPaths',
        'aliases' => 'setAliases',
        'comment' => 'setComment',
        'networks' => 'setNetworks',
        'hosts' => 'setHosts',
        'alldirs' => 'setAlldirs',
        'ro' => 'setRo',
        'quiet' => 'setQuiet',
        'maproot_user' => 'setMaprootUser',
        'maproot_group' => 'setMaprootGroup',
        'mapall_user' => 'setMapallUser',
        'mapall_group' => 'setMapallGroup',
        'security' => 'setSecurity',
        'enabled' => 'setEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'paths' => 'getPaths',
        'aliases' => 'getAliases',
        'comment' => 'getComment',
        'networks' => 'getNetworks',
        'hosts' => 'getHosts',
        'alldirs' => 'getAlldirs',
        'ro' => 'getRo',
        'quiet' => 'getQuiet',
        'maproot_user' => 'getMaprootUser',
        'maproot_group' => 'getMaprootGroup',
        'mapall_user' => 'getMapallUser',
        'mapall_group' => 'getMapallGroup',
        'security' => 'getSecurity',
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

    public const SECURITY_SYS = 'SYS';
    public const SECURITY_KRB5 = 'KRB5';
    public const SECURITY_KRB5_I = 'KRB5I';
    public const SECURITY_KRB5_P = 'KRB5P';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSecurityAllowableValues()
    {
        return [
            self::SECURITY_SYS,
            self::SECURITY_KRB5,
            self::SECURITY_KRB5_I,
            self::SECURITY_KRB5_P,
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
        $this->setIfExists('paths', $data ?? [], null);
        $this->setIfExists('aliases', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], '');
        $this->setIfExists('networks', $data ?? [], null);
        $this->setIfExists('hosts', $data ?? [], null);
        $this->setIfExists('alldirs', $data ?? [], false);
        $this->setIfExists('ro', $data ?? [], false);
        $this->setIfExists('quiet', $data ?? [], false);
        $this->setIfExists('maproot_user', $data ?? [], null);
        $this->setIfExists('maproot_group', $data ?? [], null);
        $this->setIfExists('mapall_user', $data ?? [], null);
        $this->setIfExists('mapall_group', $data ?? [], null);
        $this->setIfExists('security', $data ?? [], null);
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
     * Gets paths
     *
     * @return string[]|null
     */
    public function getPaths()
    {
        return $this->container['paths'];
    }

    /**
     * Sets paths
     *
     * @param string[]|null $paths `paths` is a list of valid paths which are configured to be shared on this share.
     *
     * @return self
     */
    public function setPaths($paths)
    {

        if (is_null($paths)) {
            throw new \InvalidArgumentException('non-nullable paths cannot be null');
        }

        $this->container['paths'] = $paths;

        return $this;
    }

    /**
     * Gets aliases
     *
     * @return string[]|null
     */
    public function getAliases()
    {
        return $this->container['aliases'];
    }

    /**
     * Sets aliases
     *
     * @param string[]|null $aliases `aliases` IGNORED, for now.
     *
     * @return self
     */
    public function setAliases($aliases)
    {

        if (is_null($aliases)) {
            throw new \InvalidArgumentException('non-nullable aliases cannot be null');
        }

        $this->container['aliases'] = $aliases;

        return $this;
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
     * Gets networks
     *
     * @return string[]|null
     */
    public function getNetworks()
    {
        return $this->container['networks'];
    }

    /**
     * Sets networks
     *
     * @param string[]|null $networks `networks` is a list of authorized networks that are allowed to access the share having format \"network/mask\" CIDR notation. If empty, all networks are allowed.
     *
     * @return self
     */
    public function setNetworks($networks)
    {

        if (is_null($networks)) {
            throw new \InvalidArgumentException('non-nullable networks cannot be null');
        }

        $this->container['networks'] = $networks;

        return $this;
    }

    /**
     * Gets hosts
     *
     * @return string[]|null
     */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
     * Sets hosts
     *
     * @param string[]|null $hosts `hosts` is a list of IP's/hostnames which are allowed to access the share. If empty, all IP's/hostnames are allowed.
     *
     * @return self
     */
    public function setHosts($hosts)
    {

        if (is_null($hosts)) {
            throw new \InvalidArgumentException('non-nullable hosts cannot be null');
        }

        $this->container['hosts'] = $hosts;

        return $this;
    }

    /**
     * Gets alldirs
     *
     * @return bool|null
     */
    public function getAlldirs()
    {
        return $this->container['alldirs'];
    }

    /**
     * Sets alldirs
     *
     * @param bool|null $alldirs alldirs
     *
     * @return self
     */
    public function setAlldirs($alldirs)
    {

        if (is_null($alldirs)) {
            throw new \InvalidArgumentException('non-nullable alldirs cannot be null');
        }

        $this->container['alldirs'] = $alldirs;

        return $this;
    }

    /**
     * Gets ro
     *
     * @return bool|null
     */
    public function getRo()
    {
        return $this->container['ro'];
    }

    /**
     * Sets ro
     *
     * @param bool|null $ro ro
     *
     * @return self
     */
    public function setRo($ro)
    {

        if (is_null($ro)) {
            throw new \InvalidArgumentException('non-nullable ro cannot be null');
        }

        $this->container['ro'] = $ro;

        return $this;
    }

    /**
     * Gets quiet
     *
     * @return bool|null
     */
    public function getQuiet()
    {
        return $this->container['quiet'];
    }

    /**
     * Sets quiet
     *
     * @param bool|null $quiet quiet
     *
     * @return self
     */
    public function setQuiet($quiet)
    {

        if (is_null($quiet)) {
            throw new \InvalidArgumentException('non-nullable quiet cannot be null');
        }

        $this->container['quiet'] = $quiet;

        return $this;
    }

    /**
     * Gets maproot_user
     *
     * @return string|null
     */
    public function getMaprootUser()
    {
        return $this->container['maproot_user'];
    }

    /**
     * Sets maproot_user
     *
     * @param string|null $maproot_user maproot_user
     *
     * @return self
     */
    public function setMaprootUser($maproot_user)
    {

        if (is_null($maproot_user)) {
            array_push($this->openAPINullablesSetToNull, 'maproot_user');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('maproot_user', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['maproot_user'] = $maproot_user;

        return $this;
    }

    /**
     * Gets maproot_group
     *
     * @return string|null
     */
    public function getMaprootGroup()
    {
        return $this->container['maproot_group'];
    }

    /**
     * Sets maproot_group
     *
     * @param string|null $maproot_group maproot_group
     *
     * @return self
     */
    public function setMaprootGroup($maproot_group)
    {

        if (is_null($maproot_group)) {
            array_push($this->openAPINullablesSetToNull, 'maproot_group');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('maproot_group', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['maproot_group'] = $maproot_group;

        return $this;
    }

    /**
     * Gets mapall_user
     *
     * @return string|null
     */
    public function getMapallUser()
    {
        return $this->container['mapall_user'];
    }

    /**
     * Sets mapall_user
     *
     * @param string|null $mapall_user mapall_user
     *
     * @return self
     */
    public function setMapallUser($mapall_user)
    {

        if (is_null($mapall_user)) {
            array_push($this->openAPINullablesSetToNull, 'mapall_user');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mapall_user', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['mapall_user'] = $mapall_user;

        return $this;
    }

    /**
     * Gets mapall_group
     *
     * @return string|null
     */
    public function getMapallGroup()
    {
        return $this->container['mapall_group'];
    }

    /**
     * Sets mapall_group
     *
     * @param string|null $mapall_group mapall_group
     *
     * @return self
     */
    public function setMapallGroup($mapall_group)
    {

        if (is_null($mapall_group)) {
            array_push($this->openAPINullablesSetToNull, 'mapall_group');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mapall_group', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['mapall_group'] = $mapall_group;

        return $this;
    }

    /**
     * Gets security
     *
     * @return string[]|null
     */
    public function getSecurity()
    {
        return $this->container['security'];
    }

    /**
     * Sets security
     *
     * @param string[]|null $security security
     *
     * @return self
     */
    public function setSecurity($security)
    {
        $allowedValues = $this->getSecurityAllowableValues();
        if (!is_null($security) && array_diff($security, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'security', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($security)) {
            throw new \InvalidArgumentException('non-nullable security cannot be null');
        }

        $this->container['security'] = $security;

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


