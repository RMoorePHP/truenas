<?php
/**
 * InterfaceCreate0
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
 * InterfaceCreate0 Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InterfaceCreate0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'interface_create_0';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'description' => 'string',
        'type' => 'string',
        'ipv4_dhcp' => 'bool',
        'ipv6_auto' => 'bool',
        'aliases' => '\RMoore\Truenas\Model\InterfaceAlias[]',
        'failover_critical' => 'bool',
        'failover_group' => 'int',
        'failover_vhid' => 'int',
        'failover_aliases' => '\RMoore\Truenas\Model\InterfaceFailoverAlias[]',
        'failover_virtual_aliases' => '\RMoore\Truenas\Model\InterfaceVirtualAlias[]',
        'bridge_members' => 'mixed[]',
        'stp' => 'bool',
        'lag_protocol' => 'string',
        'xmit_hash_policy' => 'string',
        'lacpdu_rate' => 'string',
        'lag_ports' => 'string[]',
        'vlan_parent_interface' => 'string',
        'vlan_tag' => 'int',
        'vlan_pcp' => 'int',
        'mtu' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'type' => null,
        'ipv4_dhcp' => null,
        'ipv6_auto' => null,
        'aliases' => null,
        'failover_critical' => null,
        'failover_group' => null,
        'failover_vhid' => null,
        'failover_aliases' => null,
        'failover_virtual_aliases' => null,
        'bridge_members' => null,
        'stp' => null,
        'lag_protocol' => null,
        'xmit_hash_policy' => null,
        'lacpdu_rate' => null,
        'lag_ports' => null,
        'vlan_parent_interface' => null,
        'vlan_tag' => null,
        'vlan_pcp' => null,
        'mtu' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'description' => false,
		'type' => false,
		'ipv4_dhcp' => false,
		'ipv6_auto' => false,
		'aliases' => false,
		'failover_critical' => false,
		'failover_group' => true,
		'failover_vhid' => true,
		'failover_aliases' => false,
		'failover_virtual_aliases' => false,
		'bridge_members' => false,
		'stp' => false,
		'lag_protocol' => false,
		'xmit_hash_policy' => true,
		'lacpdu_rate' => true,
		'lag_ports' => false,
		'vlan_parent_interface' => false,
		'vlan_tag' => false,
		'vlan_pcp' => true,
		'mtu' => true
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
        'name' => 'name',
        'description' => 'description',
        'type' => 'type',
        'ipv4_dhcp' => 'ipv4_dhcp',
        'ipv6_auto' => 'ipv6_auto',
        'aliases' => 'aliases',
        'failover_critical' => 'failover_critical',
        'failover_group' => 'failover_group',
        'failover_vhid' => 'failover_vhid',
        'failover_aliases' => 'failover_aliases',
        'failover_virtual_aliases' => 'failover_virtual_aliases',
        'bridge_members' => 'bridge_members',
        'stp' => 'stp',
        'lag_protocol' => 'lag_protocol',
        'xmit_hash_policy' => 'xmit_hash_policy',
        'lacpdu_rate' => 'lacpdu_rate',
        'lag_ports' => 'lag_ports',
        'vlan_parent_interface' => 'vlan_parent_interface',
        'vlan_tag' => 'vlan_tag',
        'vlan_pcp' => 'vlan_pcp',
        'mtu' => 'mtu'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'type' => 'setType',
        'ipv4_dhcp' => 'setIpv4Dhcp',
        'ipv6_auto' => 'setIpv6Auto',
        'aliases' => 'setAliases',
        'failover_critical' => 'setFailoverCritical',
        'failover_group' => 'setFailoverGroup',
        'failover_vhid' => 'setFailoverVhid',
        'failover_aliases' => 'setFailoverAliases',
        'failover_virtual_aliases' => 'setFailoverVirtualAliases',
        'bridge_members' => 'setBridgeMembers',
        'stp' => 'setStp',
        'lag_protocol' => 'setLagProtocol',
        'xmit_hash_policy' => 'setXmitHashPolicy',
        'lacpdu_rate' => 'setLacpduRate',
        'lag_ports' => 'setLagPorts',
        'vlan_parent_interface' => 'setVlanParentInterface',
        'vlan_tag' => 'setVlanTag',
        'vlan_pcp' => 'setVlanPcp',
        'mtu' => 'setMtu'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'type' => 'getType',
        'ipv4_dhcp' => 'getIpv4Dhcp',
        'ipv6_auto' => 'getIpv6Auto',
        'aliases' => 'getAliases',
        'failover_critical' => 'getFailoverCritical',
        'failover_group' => 'getFailoverGroup',
        'failover_vhid' => 'getFailoverVhid',
        'failover_aliases' => 'getFailoverAliases',
        'failover_virtual_aliases' => 'getFailoverVirtualAliases',
        'bridge_members' => 'getBridgeMembers',
        'stp' => 'getStp',
        'lag_protocol' => 'getLagProtocol',
        'xmit_hash_policy' => 'getXmitHashPolicy',
        'lacpdu_rate' => 'getLacpduRate',
        'lag_ports' => 'getLagPorts',
        'vlan_parent_interface' => 'getVlanParentInterface',
        'vlan_tag' => 'getVlanTag',
        'vlan_pcp' => 'getVlanPcp',
        'mtu' => 'getMtu'
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

    public const TYPE_BRIDGE = 'BRIDGE';
    public const TYPE_LINK_AGGREGATION = 'LINK_AGGREGATION';
    public const TYPE_VLAN = 'VLAN';
    public const LAG_PROTOCOL_LACP = 'LACP';
    public const LAG_PROTOCOL_FAILOVER = 'FAILOVER';
    public const LAG_PROTOCOL_LOADBALANCE = 'LOADBALANCE';
    public const LAG_PROTOCOL_ROUNDROBIN = 'ROUNDROBIN';
    public const LAG_PROTOCOL_NONE = 'NONE';
    public const XMIT_HASH_POLICY_LAYER2 = 'LAYER2';
    public const XMIT_HASH_POLICY_LAYER23 = 'LAYER2+3';
    public const XMIT_HASH_POLICY_LAYER34 = 'LAYER3+4';
    public const LACPDU_RATE_SLOW = 'SLOW';
    public const LACPDU_RATE_FAST = 'FAST';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BRIDGE,
            self::TYPE_LINK_AGGREGATION,
            self::TYPE_VLAN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLagProtocolAllowableValues()
    {
        return [
            self::LAG_PROTOCOL_LACP,
            self::LAG_PROTOCOL_FAILOVER,
            self::LAG_PROTOCOL_LOADBALANCE,
            self::LAG_PROTOCOL_ROUNDROBIN,
            self::LAG_PROTOCOL_NONE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getXmitHashPolicyAllowableValues()
    {
        return [
            self::XMIT_HASH_POLICY_LAYER2,
            self::XMIT_HASH_POLICY_LAYER23,
            self::XMIT_HASH_POLICY_LAYER34,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLacpduRateAllowableValues()
    {
        return [
            self::LACPDU_RATE_SLOW,
            self::LACPDU_RATE_FAST,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], '');
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('ipv4_dhcp', $data ?? [], false);
        $this->setIfExists('ipv6_auto', $data ?? [], false);
        $this->setIfExists('aliases', $data ?? [], null);
        $this->setIfExists('failover_critical', $data ?? [], false);
        $this->setIfExists('failover_group', $data ?? [], null);
        $this->setIfExists('failover_vhid', $data ?? [], null);
        $this->setIfExists('failover_aliases', $data ?? [], null);
        $this->setIfExists('failover_virtual_aliases', $data ?? [], null);
        $this->setIfExists('bridge_members', $data ?? [], null);
        $this->setIfExists('stp', $data ?? [], true);
        $this->setIfExists('lag_protocol', $data ?? [], null);
        $this->setIfExists('xmit_hash_policy', $data ?? [], null);
        $this->setIfExists('lacpdu_rate', $data ?? [], null);
        $this->setIfExists('lag_ports', $data ?? [], null);
        $this->setIfExists('vlan_parent_interface', $data ?? [], null);
        $this->setIfExists('vlan_tag', $data ?? [], null);
        $this->setIfExists('vlan_pcp', $data ?? [], null);
        $this->setIfExists('mtu', $data ?? [], null);
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLagProtocolAllowableValues();
        if (!is_null($this->container['lag_protocol']) && !in_array($this->container['lag_protocol'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'lag_protocol', must be one of '%s'",
                $this->container['lag_protocol'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getXmitHashPolicyAllowableValues();
        if (!is_null($this->container['xmit_hash_policy']) && !in_array($this->container['xmit_hash_policy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'xmit_hash_policy', must be one of '%s'",
                $this->container['xmit_hash_policy'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLacpduRateAllowableValues();
        if (!is_null($this->container['lacpdu_rate']) && !in_array($this->container['lacpdu_rate'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'lacpdu_rate', must be one of '%s'",
                $this->container['lacpdu_rate'],
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {

        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type For BRIDGE `type` the following attribute is required: bridge_members. For LINK_AGGREGATION `type` the following attributes are required: lag_ports, lag_protocol. For VLAN `type` the following attributes are required: vlan_parent_interface, vlan_tag and vlan_pcp.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets ipv4_dhcp
     *
     * @return bool|null
     */
    public function getIpv4Dhcp()
    {
        return $this->container['ipv4_dhcp'];
    }

    /**
     * Sets ipv4_dhcp
     *
     * @param bool|null $ipv4_dhcp ipv4_dhcp
     *
     * @return self
     */
    public function setIpv4Dhcp($ipv4_dhcp)
    {

        if (is_null($ipv4_dhcp)) {
            throw new \InvalidArgumentException('non-nullable ipv4_dhcp cannot be null');
        }

        $this->container['ipv4_dhcp'] = $ipv4_dhcp;

        return $this;
    }

    /**
     * Gets ipv6_auto
     *
     * @return bool|null
     */
    public function getIpv6Auto()
    {
        return $this->container['ipv6_auto'];
    }

    /**
     * Sets ipv6_auto
     *
     * @param bool|null $ipv6_auto ipv6_auto
     *
     * @return self
     */
    public function setIpv6Auto($ipv6_auto)
    {

        if (is_null($ipv6_auto)) {
            throw new \InvalidArgumentException('non-nullable ipv6_auto cannot be null');
        }

        $this->container['ipv6_auto'] = $ipv6_auto;

        return $this;
    }

    /**
     * Gets aliases
     *
     * @return \RMoore\Truenas\Model\InterfaceAlias[]|null
     */
    public function getAliases()
    {
        return $this->container['aliases'];
    }

    /**
     * Sets aliases
     *
     * @param \RMoore\Truenas\Model\InterfaceAlias[]|null $aliases aliases
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
     * Gets failover_critical
     *
     * @return bool|null
     */
    public function getFailoverCritical()
    {
        return $this->container['failover_critical'];
    }

    /**
     * Sets failover_critical
     *
     * @param bool|null $failover_critical failover_critical
     *
     * @return self
     */
    public function setFailoverCritical($failover_critical)
    {

        if (is_null($failover_critical)) {
            throw new \InvalidArgumentException('non-nullable failover_critical cannot be null');
        }

        $this->container['failover_critical'] = $failover_critical;

        return $this;
    }

    /**
     * Gets failover_group
     *
     * @return int|null
     */
    public function getFailoverGroup()
    {
        return $this->container['failover_group'];
    }

    /**
     * Sets failover_group
     *
     * @param int|null $failover_group failover_group
     *
     * @return self
     */
    public function setFailoverGroup($failover_group)
    {

        if (is_null($failover_group)) {
            array_push($this->openAPINullablesSetToNull, 'failover_group');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('failover_group', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['failover_group'] = $failover_group;

        return $this;
    }

    /**
     * Gets failover_vhid
     *
     * @return int|null
     */
    public function getFailoverVhid()
    {
        return $this->container['failover_vhid'];
    }

    /**
     * Sets failover_vhid
     *
     * @param int|null $failover_vhid failover_vhid
     *
     * @return self
     */
    public function setFailoverVhid($failover_vhid)
    {

        if (is_null($failover_vhid)) {
            array_push($this->openAPINullablesSetToNull, 'failover_vhid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('failover_vhid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['failover_vhid'] = $failover_vhid;

        return $this;
    }

    /**
     * Gets failover_aliases
     *
     * @return \RMoore\Truenas\Model\InterfaceFailoverAlias[]|null
     */
    public function getFailoverAliases()
    {
        return $this->container['failover_aliases'];
    }

    /**
     * Sets failover_aliases
     *
     * @param \RMoore\Truenas\Model\InterfaceFailoverAlias[]|null $failover_aliases failover_aliases
     *
     * @return self
     */
    public function setFailoverAliases($failover_aliases)
    {

        if (is_null($failover_aliases)) {
            throw new \InvalidArgumentException('non-nullable failover_aliases cannot be null');
        }

        $this->container['failover_aliases'] = $failover_aliases;

        return $this;
    }

    /**
     * Gets failover_virtual_aliases
     *
     * @return \RMoore\Truenas\Model\InterfaceVirtualAlias[]|null
     */
    public function getFailoverVirtualAliases()
    {
        return $this->container['failover_virtual_aliases'];
    }

    /**
     * Sets failover_virtual_aliases
     *
     * @param \RMoore\Truenas\Model\InterfaceVirtualAlias[]|null $failover_virtual_aliases failover_virtual_aliases
     *
     * @return self
     */
    public function setFailoverVirtualAliases($failover_virtual_aliases)
    {

        if (is_null($failover_virtual_aliases)) {
            throw new \InvalidArgumentException('non-nullable failover_virtual_aliases cannot be null');
        }

        $this->container['failover_virtual_aliases'] = $failover_virtual_aliases;

        return $this;
    }

    /**
     * Gets bridge_members
     *
     * @return mixed[]|null
     */
    public function getBridgeMembers()
    {
        return $this->container['bridge_members'];
    }

    /**
     * Sets bridge_members
     *
     * @param mixed[]|null $bridge_members bridge_members
     *
     * @return self
     */
    public function setBridgeMembers($bridge_members)
    {

        if (is_null($bridge_members)) {
            throw new \InvalidArgumentException('non-nullable bridge_members cannot be null');
        }

        $this->container['bridge_members'] = $bridge_members;

        return $this;
    }

    /**
     * Gets stp
     *
     * @return bool|null
     */
    public function getStp()
    {
        return $this->container['stp'];
    }

    /**
     * Sets stp
     *
     * @param bool|null $stp stp
     *
     * @return self
     */
    public function setStp($stp)
    {

        if (is_null($stp)) {
            throw new \InvalidArgumentException('non-nullable stp cannot be null');
        }

        $this->container['stp'] = $stp;

        return $this;
    }

    /**
     * Gets lag_protocol
     *
     * @return string|null
     */
    public function getLagProtocol()
    {
        return $this->container['lag_protocol'];
    }

    /**
     * Sets lag_protocol
     *
     * @param string|null $lag_protocol lag_protocol
     *
     * @return self
     */
    public function setLagProtocol($lag_protocol)
    {
        $allowedValues = $this->getLagProtocolAllowableValues();
        if (!is_null($lag_protocol) && !in_array($lag_protocol, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'lag_protocol', must be one of '%s'",
                    $lag_protocol,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($lag_protocol)) {
            throw new \InvalidArgumentException('non-nullable lag_protocol cannot be null');
        }

        $this->container['lag_protocol'] = $lag_protocol;

        return $this;
    }

    /**
     * Gets xmit_hash_policy
     *
     * @return string|null
     */
    public function getXmitHashPolicy()
    {
        return $this->container['xmit_hash_policy'];
    }

    /**
     * Sets xmit_hash_policy
     *
     * @param string|null $xmit_hash_policy xmit_hash_policy
     *
     * @return self
     */
    public function setXmitHashPolicy($xmit_hash_policy)
    {
        $allowedValues = $this->getXmitHashPolicyAllowableValues();
        if (!is_null($xmit_hash_policy) && !in_array($xmit_hash_policy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'xmit_hash_policy', must be one of '%s'",
                    $xmit_hash_policy,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($xmit_hash_policy)) {
            array_push($this->openAPINullablesSetToNull, 'xmit_hash_policy');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('xmit_hash_policy', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['xmit_hash_policy'] = $xmit_hash_policy;

        return $this;
    }

    /**
     * Gets lacpdu_rate
     *
     * @return string|null
     */
    public function getLacpduRate()
    {
        return $this->container['lacpdu_rate'];
    }

    /**
     * Sets lacpdu_rate
     *
     * @param string|null $lacpdu_rate lacpdu_rate
     *
     * @return self
     */
    public function setLacpduRate($lacpdu_rate)
    {
        $allowedValues = $this->getLacpduRateAllowableValues();
        if (!is_null($lacpdu_rate) && !in_array($lacpdu_rate, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'lacpdu_rate', must be one of '%s'",
                    $lacpdu_rate,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($lacpdu_rate)) {
            array_push($this->openAPINullablesSetToNull, 'lacpdu_rate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lacpdu_rate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['lacpdu_rate'] = $lacpdu_rate;

        return $this;
    }

    /**
     * Gets lag_ports
     *
     * @return string[]|null
     */
    public function getLagPorts()
    {
        return $this->container['lag_ports'];
    }

    /**
     * Sets lag_ports
     *
     * @param string[]|null $lag_ports lag_ports
     *
     * @return self
     */
    public function setLagPorts($lag_ports)
    {

        if (is_null($lag_ports)) {
            throw new \InvalidArgumentException('non-nullable lag_ports cannot be null');
        }

        $this->container['lag_ports'] = $lag_ports;

        return $this;
    }

    /**
     * Gets vlan_parent_interface
     *
     * @return string|null
     */
    public function getVlanParentInterface()
    {
        return $this->container['vlan_parent_interface'];
    }

    /**
     * Sets vlan_parent_interface
     *
     * @param string|null $vlan_parent_interface vlan_parent_interface
     *
     * @return self
     */
    public function setVlanParentInterface($vlan_parent_interface)
    {

        if (is_null($vlan_parent_interface)) {
            throw new \InvalidArgumentException('non-nullable vlan_parent_interface cannot be null');
        }

        $this->container['vlan_parent_interface'] = $vlan_parent_interface;

        return $this;
    }

    /**
     * Gets vlan_tag
     *
     * @return int|null
     */
    public function getVlanTag()
    {
        return $this->container['vlan_tag'];
    }

    /**
     * Sets vlan_tag
     *
     * @param int|null $vlan_tag vlan_tag
     *
     * @return self
     */
    public function setVlanTag($vlan_tag)
    {

        if (is_null($vlan_tag)) {
            throw new \InvalidArgumentException('non-nullable vlan_tag cannot be null');
        }

        $this->container['vlan_tag'] = $vlan_tag;

        return $this;
    }

    /**
     * Gets vlan_pcp
     *
     * @return int|null
     */
    public function getVlanPcp()
    {
        return $this->container['vlan_pcp'];
    }

    /**
     * Sets vlan_pcp
     *
     * @param int|null $vlan_pcp vlan_pcp
     *
     * @return self
     */
    public function setVlanPcp($vlan_pcp)
    {

        if (is_null($vlan_pcp)) {
            array_push($this->openAPINullablesSetToNull, 'vlan_pcp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vlan_pcp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['vlan_pcp'] = $vlan_pcp;

        return $this;
    }

    /**
     * Gets mtu
     *
     * @return int|null
     */
    public function getMtu()
    {
        return $this->container['mtu'];
    }

    /**
     * Sets mtu
     *
     * @param int|null $mtu mtu
     *
     * @return self
     */
    public function setMtu($mtu)
    {

        if (is_null($mtu)) {
            array_push($this->openAPINullablesSetToNull, 'mtu');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mtu', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['mtu'] = $mtu;

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


