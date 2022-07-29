<?php
/**
 * KubernetesUpdate0
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
 * KubernetesUpdate0 Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class KubernetesUpdate0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'kubernetes_update_0';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'servicelb' => 'bool',
        'configure_gpus' => 'bool',
        'pool' => 'string',
        'cluster_cidr' => 'string',
        'service_cidr' => 'string',
        'cluster_dns_ip' => 'string',
        'node_ip' => 'string',
        'route_v4_interface' => 'string',
        'route_v4_gateway' => 'string',
        'route_v6_interface' => 'string',
        'route_v6_gateway' => 'string',
        'migrate_applications' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'servicelb' => null,
        'configure_gpus' => null,
        'pool' => null,
        'cluster_cidr' => null,
        'service_cidr' => null,
        'cluster_dns_ip' => null,
        'node_ip' => null,
        'route_v4_interface' => null,
        'route_v4_gateway' => null,
        'route_v6_interface' => null,
        'route_v6_gateway' => null,
        'migrate_applications' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'servicelb' => false,
		'configure_gpus' => false,
		'pool' => true,
		'cluster_cidr' => false,
		'service_cidr' => false,
		'cluster_dns_ip' => false,
		'node_ip' => false,
		'route_v4_interface' => true,
		'route_v4_gateway' => true,
		'route_v6_interface' => true,
		'route_v6_gateway' => true,
		'migrate_applications' => false
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
        'servicelb' => 'servicelb',
        'configure_gpus' => 'configure_gpus',
        'pool' => 'pool',
        'cluster_cidr' => 'cluster_cidr',
        'service_cidr' => 'service_cidr',
        'cluster_dns_ip' => 'cluster_dns_ip',
        'node_ip' => 'node_ip',
        'route_v4_interface' => 'route_v4_interface',
        'route_v4_gateway' => 'route_v4_gateway',
        'route_v6_interface' => 'route_v6_interface',
        'route_v6_gateway' => 'route_v6_gateway',
        'migrate_applications' => 'migrate_applications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'servicelb' => 'setServicelb',
        'configure_gpus' => 'setConfigureGpus',
        'pool' => 'setPool',
        'cluster_cidr' => 'setClusterCidr',
        'service_cidr' => 'setServiceCidr',
        'cluster_dns_ip' => 'setClusterDnsIp',
        'node_ip' => 'setNodeIp',
        'route_v4_interface' => 'setRouteV4Interface',
        'route_v4_gateway' => 'setRouteV4Gateway',
        'route_v6_interface' => 'setRouteV6Interface',
        'route_v6_gateway' => 'setRouteV6Gateway',
        'migrate_applications' => 'setMigrateApplications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'servicelb' => 'getServicelb',
        'configure_gpus' => 'getConfigureGpus',
        'pool' => 'getPool',
        'cluster_cidr' => 'getClusterCidr',
        'service_cidr' => 'getServiceCidr',
        'cluster_dns_ip' => 'getClusterDnsIp',
        'node_ip' => 'getNodeIp',
        'route_v4_interface' => 'getRouteV4Interface',
        'route_v4_gateway' => 'getRouteV4Gateway',
        'route_v6_interface' => 'getRouteV6Interface',
        'route_v6_gateway' => 'getRouteV6Gateway',
        'migrate_applications' => 'getMigrateApplications'
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
        $this->setIfExists('servicelb', $data ?? [], null);
        $this->setIfExists('configure_gpus', $data ?? [], null);
        $this->setIfExists('pool', $data ?? [], null);
        $this->setIfExists('cluster_cidr', $data ?? [], null);
        $this->setIfExists('service_cidr', $data ?? [], null);
        $this->setIfExists('cluster_dns_ip', $data ?? [], null);
        $this->setIfExists('node_ip', $data ?? [], null);
        $this->setIfExists('route_v4_interface', $data ?? [], null);
        $this->setIfExists('route_v4_gateway', $data ?? [], null);
        $this->setIfExists('route_v6_interface', $data ?? [], null);
        $this->setIfExists('route_v6_gateway', $data ?? [], null);
        $this->setIfExists('migrate_applications', $data ?? [], null);
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
     * Gets servicelb
     *
     * @return bool|null
     */
    public function getServicelb()
    {
        return $this->container['servicelb'];
    }

    /**
     * Sets servicelb
     *
     * @param bool|null $servicelb `servicelb` is a boolean to enable or disable the integrated k3s Service Loadbalancer called \"Klipper\". This can be set to disabled to enable the user to run another LoadBalancer or no LoadBalancer at all.
     *
     * @return self
     */
    public function setServicelb($servicelb)
    {

        if (is_null($servicelb)) {
            throw new \InvalidArgumentException('non-nullable servicelb cannot be null');
        }

        $this->container['servicelb'] = $servicelb;

        return $this;
    }

    /**
     * Gets configure_gpus
     *
     * @return bool|null
     */
    public function getConfigureGpus()
    {
        return $this->container['configure_gpus'];
    }

    /**
     * Sets configure_gpus
     *
     * @param bool|null $configure_gpus `configure_gpus` is a boolean to enable or disable to prevent automatically loading any GPU Support into kubernetes. This includes not loading any daemonsets for Intel and NVIDIA support.
     *
     * @return self
     */
    public function setConfigureGpus($configure_gpus)
    {

        if (is_null($configure_gpus)) {
            throw new \InvalidArgumentException('non-nullable configure_gpus cannot be null');
        }

        $this->container['configure_gpus'] = $configure_gpus;

        return $this;
    }

    /**
     * Gets pool
     *
     * @return string|null
     */
    public function getPool()
    {
        return $this->container['pool'];
    }

    /**
     * Sets pool
     *
     * @param string|null $pool `pool` must be a valid ZFS pool configured in the system. Kubernetes service will initialise the pool by creating datasets under `pool_name/ix-applications`.
     *
     * @return self
     */
    public function setPool($pool)
    {

        if (is_null($pool)) {
            array_push($this->openAPINullablesSetToNull, 'pool');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pool', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['pool'] = $pool;

        return $this;
    }

    /**
     * Gets cluster_cidr
     *
     * @return string|null
     */
    public function getClusterCidr()
    {
        return $this->container['cluster_cidr'];
    }

    /**
     * Sets cluster_cidr
     *
     * @param string|null $cluster_cidr `cluster_cidr` is the CIDR to be used for default NAT network between workloads. Specifying values for `cluster_cidr`, `service_cidr` and `cluster_dns_ip` are permanent and a subsequent change requires re-initialisation of the applications. To clarify, system will destroy old `ix-applications` dataset and any data within it when any of the values for the above configuration change.
     *
     * @return self
     */
    public function setClusterCidr($cluster_cidr)
    {

        if (is_null($cluster_cidr)) {
            throw new \InvalidArgumentException('non-nullable cluster_cidr cannot be null');
        }

        $this->container['cluster_cidr'] = $cluster_cidr;

        return $this;
    }

    /**
     * Gets service_cidr
     *
     * @return string|null
     */
    public function getServiceCidr()
    {
        return $this->container['service_cidr'];
    }

    /**
     * Sets service_cidr
     *
     * @param string|null $service_cidr `service_cidr` is the CIDR to be used for kubernetes services which are an abstraction and refer to a logically set of kubernetes pods. `cluster_dns_ip` is the IP of the DNS server running for the kubernetes cluster. It must be in the range of `service_cidr`. Specifying values for `cluster_cidr`, `service_cidr` and `cluster_dns_ip` are permanent and a subsequent change requires re-initialisation of the applications. To clarify, system will destroy old `ix-applications` dataset and any data within it when any of the values for the above configuration change.
     *
     * @return self
     */
    public function setServiceCidr($service_cidr)
    {

        if (is_null($service_cidr)) {
            throw new \InvalidArgumentException('non-nullable service_cidr cannot be null');
        }

        $this->container['service_cidr'] = $service_cidr;

        return $this;
    }

    /**
     * Gets cluster_dns_ip
     *
     * @return string|null
     */
    public function getClusterDnsIp()
    {
        return $this->container['cluster_dns_ip'];
    }

    /**
     * Sets cluster_dns_ip
     *
     * @param string|null $cluster_dns_ip `cluster_dns_ip` is the IP of the DNS server running for the kubernetes cluster. It must be in the range of `service_cidr`. Specifying values for `cluster_cidr`, `service_cidr` and `cluster_dns_ip` are permanent and a subsequent change requires re-initialisation of the applications. To clarify, system will destroy old `ix-applications` dataset and any data within it when any of the values for the above configuration change.
     *
     * @return self
     */
    public function setClusterDnsIp($cluster_dns_ip)
    {

        if (is_null($cluster_dns_ip)) {
            throw new \InvalidArgumentException('non-nullable cluster_dns_ip cannot be null');
        }

        $this->container['cluster_dns_ip'] = $cluster_dns_ip;

        return $this;
    }

    /**
     * Gets node_ip
     *
     * @return string|null
     */
    public function getNodeIp()
    {
        return $this->container['node_ip'];
    }

    /**
     * Sets node_ip
     *
     * @param string|null $node_ip `node_ip` is the IP address which the kubernetes cluster will assign to the TrueNAS node. It defaults to 0.0.0.0 and the cluster in this case will automatically manage which IP address to use for managing traffic for default NAT network.
     *
     * @return self
     */
    public function setNodeIp($node_ip)
    {

        if (is_null($node_ip)) {
            throw new \InvalidArgumentException('non-nullable node_ip cannot be null');
        }

        $this->container['node_ip'] = $node_ip;

        return $this;
    }

    /**
     * Gets route_v4_interface
     *
     * @return string|null
     */
    public function getRouteV4Interface()
    {
        return $this->container['route_v4_interface'];
    }

    /**
     * Sets route_v4_interface
     *
     * @param string|null $route_v4_interface If users want to restrict traffic over a certain gateway / interface, they can specify a default route for the NAT traffic. `route_v4_interface` and `route_v4_gateway` will set a default route for the kubernetes cluster IPv4 traffic. Similarly `route_v6_interface` and 'route_v6_gateway` can be used to specify default route for IPv6 traffic.
     *
     * @return self
     */
    public function setRouteV4Interface($route_v4_interface)
    {

        if (is_null($route_v4_interface)) {
            array_push($this->openAPINullablesSetToNull, 'route_v4_interface');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('route_v4_interface', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['route_v4_interface'] = $route_v4_interface;

        return $this;
    }

    /**
     * Gets route_v4_gateway
     *
     * @return string|null
     */
    public function getRouteV4Gateway()
    {
        return $this->container['route_v4_gateway'];
    }

    /**
     * Sets route_v4_gateway
     *
     * @param string|null $route_v4_gateway If users want to restrict traffic over a certain gateway / interface, they can specify a default route for the NAT traffic. `route_v4_interface` and `route_v4_gateway` will set a default route for the kubernetes cluster IPv4 traffic. Similarly `route_v6_interface` and 'route_v6_gateway` can be used to specify default route for IPv6 traffic.
     *
     * @return self
     */
    public function setRouteV4Gateway($route_v4_gateway)
    {

        if (is_null($route_v4_gateway)) {
            array_push($this->openAPINullablesSetToNull, 'route_v4_gateway');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('route_v4_gateway', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['route_v4_gateway'] = $route_v4_gateway;

        return $this;
    }

    /**
     * Gets route_v6_interface
     *
     * @return string|null
     */
    public function getRouteV6Interface()
    {
        return $this->container['route_v6_interface'];
    }

    /**
     * Sets route_v6_interface
     *
     * @param string|null $route_v6_interface If users want to restrict traffic over a certain gateway / interface, they can specify a default route for the NAT traffic. `route_v4_interface` and `route_v4_gateway` will set a default route for the kubernetes cluster IPv4 traffic. Similarly `route_v6_interface` and 'route_v6_gateway` can be used to specify default route for IPv6 traffic.
     *
     * @return self
     */
    public function setRouteV6Interface($route_v6_interface)
    {

        if (is_null($route_v6_interface)) {
            array_push($this->openAPINullablesSetToNull, 'route_v6_interface');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('route_v6_interface', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['route_v6_interface'] = $route_v6_interface;

        return $this;
    }

    /**
     * Gets route_v6_gateway
     *
     * @return string|null
     */
    public function getRouteV6Gateway()
    {
        return $this->container['route_v6_gateway'];
    }

    /**
     * Sets route_v6_gateway
     *
     * @param string|null $route_v6_gateway route_v6_gateway
     *
     * @return self
     */
    public function setRouteV6Gateway($route_v6_gateway)
    {

        if (is_null($route_v6_gateway)) {
            array_push($this->openAPINullablesSetToNull, 'route_v6_gateway');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('route_v6_gateway', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['route_v6_gateway'] = $route_v6_gateway;

        return $this;
    }

    /**
     * Gets migrate_applications
     *
     * @return bool|null
     */
    public function getMigrateApplications()
    {
        return $this->container['migrate_applications'];
    }

    /**
     * Sets migrate_applications
     *
     * @param bool|null $migrate_applications migrate_applications
     *
     * @return self
     */
    public function setMigrateApplications($migrate_applications)
    {

        if (is_null($migrate_applications)) {
            throw new \InvalidArgumentException('non-nullable migrate_applications cannot be null');
        }

        $this->container['migrate_applications'] = $migrate_applications;

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


