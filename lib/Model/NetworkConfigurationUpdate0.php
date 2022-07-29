<?php
/**
 * NetworkConfigurationUpdate0
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
 * NetworkConfigurationUpdate0 Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NetworkConfigurationUpdate0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'network_configuration_update_0';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hostname' => 'string',
        'domain' => 'string',
        'ipv4gateway' => 'string',
        'ipv6gateway' => 'string',
        'nameserver1' => 'string',
        'nameserver2' => 'string',
        'nameserver3' => 'string',
        'httpproxy' => 'string',
        'netwait_enabled' => 'bool',
        'netwait_ip' => 'string[]',
        'hosts' => 'string',
        'domains' => 'string[]',
        'service_announcement' => '\RMoore\Truenas\Model\ServiceAnnouncement',
        'activity' => '\RMoore\Truenas\Model\Activity',
        'hostname_b' => 'string',
        'hostname_virtual' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hostname' => null,
        'domain' => null,
        'ipv4gateway' => null,
        'ipv6gateway' => null,
        'nameserver1' => null,
        'nameserver2' => null,
        'nameserver3' => null,
        'httpproxy' => null,
        'netwait_enabled' => null,
        'netwait_ip' => null,
        'hosts' => null,
        'domains' => null,
        'service_announcement' => null,
        'activity' => null,
        'hostname_b' => null,
        'hostname_virtual' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'hostname' => false,
		'domain' => false,
		'ipv4gateway' => false,
		'ipv6gateway' => false,
		'nameserver1' => false,
		'nameserver2' => false,
		'nameserver3' => false,
		'httpproxy' => false,
		'netwait_enabled' => false,
		'netwait_ip' => false,
		'hosts' => false,
		'domains' => false,
		'service_announcement' => false,
		'activity' => false,
		'hostname_b' => true,
		'hostname_virtual' => true
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
        'hostname' => 'hostname',
        'domain' => 'domain',
        'ipv4gateway' => 'ipv4gateway',
        'ipv6gateway' => 'ipv6gateway',
        'nameserver1' => 'nameserver1',
        'nameserver2' => 'nameserver2',
        'nameserver3' => 'nameserver3',
        'httpproxy' => 'httpproxy',
        'netwait_enabled' => 'netwait_enabled',
        'netwait_ip' => 'netwait_ip',
        'hosts' => 'hosts',
        'domains' => 'domains',
        'service_announcement' => 'service_announcement',
        'activity' => 'activity',
        'hostname_b' => 'hostname_b',
        'hostname_virtual' => 'hostname_virtual'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hostname' => 'setHostname',
        'domain' => 'setDomain',
        'ipv4gateway' => 'setIpv4gateway',
        'ipv6gateway' => 'setIpv6gateway',
        'nameserver1' => 'setNameserver1',
        'nameserver2' => 'setNameserver2',
        'nameserver3' => 'setNameserver3',
        'httpproxy' => 'setHttpproxy',
        'netwait_enabled' => 'setNetwaitEnabled',
        'netwait_ip' => 'setNetwaitIp',
        'hosts' => 'setHosts',
        'domains' => 'setDomains',
        'service_announcement' => 'setServiceAnnouncement',
        'activity' => 'setActivity',
        'hostname_b' => 'setHostnameB',
        'hostname_virtual' => 'setHostnameVirtual'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hostname' => 'getHostname',
        'domain' => 'getDomain',
        'ipv4gateway' => 'getIpv4gateway',
        'ipv6gateway' => 'getIpv6gateway',
        'nameserver1' => 'getNameserver1',
        'nameserver2' => 'getNameserver2',
        'nameserver3' => 'getNameserver3',
        'httpproxy' => 'getHttpproxy',
        'netwait_enabled' => 'getNetwaitEnabled',
        'netwait_ip' => 'getNetwaitIp',
        'hosts' => 'getHosts',
        'domains' => 'getDomains',
        'service_announcement' => 'getServiceAnnouncement',
        'activity' => 'getActivity',
        'hostname_b' => 'getHostnameB',
        'hostname_virtual' => 'getHostnameVirtual'
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
        $this->setIfExists('hostname', $data ?? [], null);
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('ipv4gateway', $data ?? [], null);
        $this->setIfExists('ipv6gateway', $data ?? [], null);
        $this->setIfExists('nameserver1', $data ?? [], null);
        $this->setIfExists('nameserver2', $data ?? [], null);
        $this->setIfExists('nameserver3', $data ?? [], null);
        $this->setIfExists('httpproxy', $data ?? [], null);
        $this->setIfExists('netwait_enabled', $data ?? [], null);
        $this->setIfExists('netwait_ip', $data ?? [], null);
        $this->setIfExists('hosts', $data ?? [], null);
        $this->setIfExists('domains', $data ?? [], null);
        $this->setIfExists('service_announcement', $data ?? [], null);
        $this->setIfExists('activity', $data ?? [], null);
        $this->setIfExists('hostname_b', $data ?? [], null);
        $this->setIfExists('hostname_virtual', $data ?? [], null);
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
     * Gets hostname
     *
     * @return string|null
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string|null $hostname hostname
     *
     * @return self
     */
    public function setHostname($hostname)
    {

        if (is_null($hostname)) {
            throw new \InvalidArgumentException('non-nullable hostname cannot be null');
        }

        $this->container['hostname'] = $hostname;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain domain
     *
     * @return self
     */
    public function setDomain($domain)
    {

        if (is_null($domain)) {
            throw new \InvalidArgumentException('non-nullable domain cannot be null');
        }

        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets ipv4gateway
     *
     * @return string|null
     */
    public function getIpv4gateway()
    {
        return $this->container['ipv4gateway'];
    }

    /**
     * Sets ipv4gateway
     *
     * @param string|null $ipv4gateway `ipv4gateway` if set is used instead of the default gateway provided by DHCP.
     *
     * @return self
     */
    public function setIpv4gateway($ipv4gateway)
    {

        if (is_null($ipv4gateway)) {
            throw new \InvalidArgumentException('non-nullable ipv4gateway cannot be null');
        }

        $this->container['ipv4gateway'] = $ipv4gateway;

        return $this;
    }

    /**
     * Gets ipv6gateway
     *
     * @return string|null
     */
    public function getIpv6gateway()
    {
        return $this->container['ipv6gateway'];
    }

    /**
     * Sets ipv6gateway
     *
     * @param string|null $ipv6gateway ipv6gateway
     *
     * @return self
     */
    public function setIpv6gateway($ipv6gateway)
    {

        if (is_null($ipv6gateway)) {
            throw new \InvalidArgumentException('non-nullable ipv6gateway cannot be null');
        }

        $this->container['ipv6gateway'] = $ipv6gateway;

        return $this;
    }

    /**
     * Gets nameserver1
     *
     * @return string|null
     */
    public function getNameserver1()
    {
        return $this->container['nameserver1'];
    }

    /**
     * Sets nameserver1
     *
     * @param string|null $nameserver1 `nameserver1` is primary DNS server.
     *
     * @return self
     */
    public function setNameserver1($nameserver1)
    {

        if (is_null($nameserver1)) {
            throw new \InvalidArgumentException('non-nullable nameserver1 cannot be null');
        }

        $this->container['nameserver1'] = $nameserver1;

        return $this;
    }

    /**
     * Gets nameserver2
     *
     * @return string|null
     */
    public function getNameserver2()
    {
        return $this->container['nameserver2'];
    }

    /**
     * Sets nameserver2
     *
     * @param string|null $nameserver2 `nameserver2` is secondary DNS server.
     *
     * @return self
     */
    public function setNameserver2($nameserver2)
    {

        if (is_null($nameserver2)) {
            throw new \InvalidArgumentException('non-nullable nameserver2 cannot be null');
        }

        $this->container['nameserver2'] = $nameserver2;

        return $this;
    }

    /**
     * Gets nameserver3
     *
     * @return string|null
     */
    public function getNameserver3()
    {
        return $this->container['nameserver3'];
    }

    /**
     * Sets nameserver3
     *
     * @param string|null $nameserver3 `nameserver3` is tertiary DNS server.
     *
     * @return self
     */
    public function setNameserver3($nameserver3)
    {

        if (is_null($nameserver3)) {
            throw new \InvalidArgumentException('non-nullable nameserver3 cannot be null');
        }

        $this->container['nameserver3'] = $nameserver3;

        return $this;
    }

    /**
     * Gets httpproxy
     *
     * @return string|null
     */
    public function getHttpproxy()
    {
        return $this->container['httpproxy'];
    }

    /**
     * Sets httpproxy
     *
     * @param string|null $httpproxy `httpproxy` attribute must be provided if a proxy is to be used for network operations.
     *
     * @return self
     */
    public function setHttpproxy($httpproxy)
    {

        if (is_null($httpproxy)) {
            throw new \InvalidArgumentException('non-nullable httpproxy cannot be null');
        }

        $this->container['httpproxy'] = $httpproxy;

        return $this;
    }

    /**
     * Gets netwait_enabled
     *
     * @return bool|null
     */
    public function getNetwaitEnabled()
    {
        return $this->container['netwait_enabled'];
    }

    /**
     * Sets netwait_enabled
     *
     * @param bool|null $netwait_enabled `netwait_enabled` is a boolean attribute which when set indicates that network services will not start at boot unless they are able to ping the addresses listed in `netwait_ip` list.
     *
     * @return self
     */
    public function setNetwaitEnabled($netwait_enabled)
    {

        if (is_null($netwait_enabled)) {
            throw new \InvalidArgumentException('non-nullable netwait_enabled cannot be null');
        }

        $this->container['netwait_enabled'] = $netwait_enabled;

        return $this;
    }

    /**
     * Gets netwait_ip
     *
     * @return string[]|null
     */
    public function getNetwaitIp()
    {
        return $this->container['netwait_ip'];
    }

    /**
     * Sets netwait_ip
     *
     * @param string[]|null $netwait_ip `netwait_enabled` is a boolean attribute which when set indicates that network services will not start at boot unless they are able to ping the addresses listed in `netwait_ip` list.
     *
     * @return self
     */
    public function setNetwaitIp($netwait_ip)
    {

        if (is_null($netwait_ip)) {
            throw new \InvalidArgumentException('non-nullable netwait_ip cannot be null');
        }

        $this->container['netwait_ip'] = $netwait_ip;

        return $this;
    }

    /**
     * Gets hosts
     *
     * @return string|null
     */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
     * Sets hosts
     *
     * @param string|null $hosts hosts
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
     * Gets domains
     *
     * @return string[]|null
     */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
     * Sets domains
     *
     * @param string[]|null $domains domains
     *
     * @return self
     */
    public function setDomains($domains)
    {

        if (is_null($domains)) {
            throw new \InvalidArgumentException('non-nullable domains cannot be null');
        }

        $this->container['domains'] = $domains;

        return $this;
    }

    /**
     * Gets service_announcement
     *
     * @return \RMoore\Truenas\Model\ServiceAnnouncement|null
     */
    public function getServiceAnnouncement()
    {
        return $this->container['service_announcement'];
    }

    /**
     * Sets service_announcement
     *
     * @param \RMoore\Truenas\Model\ServiceAnnouncement|null $service_announcement service_announcement
     *
     * @return self
     */
    public function setServiceAnnouncement($service_announcement)
    {

        if (is_null($service_announcement)) {
            throw new \InvalidArgumentException('non-nullable service_announcement cannot be null');
        }

        $this->container['service_announcement'] = $service_announcement;

        return $this;
    }

    /**
     * Gets activity
     *
     * @return \RMoore\Truenas\Model\Activity|null
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param \RMoore\Truenas\Model\Activity|null $activity activity
     *
     * @return self
     */
    public function setActivity($activity)
    {

        if (is_null($activity)) {
            throw new \InvalidArgumentException('non-nullable activity cannot be null');
        }

        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets hostname_b
     *
     * @return string|null
     */
    public function getHostnameB()
    {
        return $this->container['hostname_b'];
    }

    /**
     * Sets hostname_b
     *
     * @param string|null $hostname_b hostname_b
     *
     * @return self
     */
    public function setHostnameB($hostname_b)
    {

        if (is_null($hostname_b)) {
            array_push($this->openAPINullablesSetToNull, 'hostname_b');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hostname_b', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['hostname_b'] = $hostname_b;

        return $this;
    }

    /**
     * Gets hostname_virtual
     *
     * @return string|null
     */
    public function getHostnameVirtual()
    {
        return $this->container['hostname_virtual'];
    }

    /**
     * Sets hostname_virtual
     *
     * @param string|null $hostname_virtual hostname_virtual
     *
     * @return self
     */
    public function setHostnameVirtual($hostname_virtual)
    {

        if (is_null($hostname_virtual)) {
            array_push($this->openAPINullablesSetToNull, 'hostname_virtual');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hostname_virtual', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['hostname_virtual'] = $hostname_virtual;

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


