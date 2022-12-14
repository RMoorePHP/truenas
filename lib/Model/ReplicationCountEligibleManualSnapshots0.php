<?php
/**
 * ReplicationCountEligibleManualSnapshots0
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
 * ReplicationCountEligibleManualSnapshots0 Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReplicationCountEligibleManualSnapshots0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'replication_count_eligible_manual_snapshots_0';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'datasets' => 'string[]',
        'naming_schema' => 'string[]',
        'name_regex' => 'string',
        'transport' => 'string',
        'ssh_credentials' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'datasets' => null,
        'naming_schema' => null,
        'name_regex' => null,
        'transport' => null,
        'ssh_credentials' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'datasets' => false,
		'naming_schema' => false,
		'name_regex' => true,
		'transport' => false,
		'ssh_credentials' => true
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
        'datasets' => 'datasets',
        'naming_schema' => 'naming_schema',
        'name_regex' => 'name_regex',
        'transport' => 'transport',
        'ssh_credentials' => 'ssh_credentials'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'datasets' => 'setDatasets',
        'naming_schema' => 'setNamingSchema',
        'name_regex' => 'setNameRegex',
        'transport' => 'setTransport',
        'ssh_credentials' => 'setSshCredentials'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'datasets' => 'getDatasets',
        'naming_schema' => 'getNamingSchema',
        'name_regex' => 'getNameRegex',
        'transport' => 'getTransport',
        'ssh_credentials' => 'getSshCredentials'
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

    public const TRANSPORT_SSH = 'SSH';
    public const TRANSPORT_SSHNETCAT = 'SSH+NETCAT';
    public const TRANSPORT_LOCAL = 'LOCAL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransportAllowableValues()
    {
        return [
            self::TRANSPORT_SSH,
            self::TRANSPORT_SSHNETCAT,
            self::TRANSPORT_LOCAL,
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
        $this->setIfExists('datasets', $data ?? [], null);
        $this->setIfExists('naming_schema', $data ?? [], null);
        $this->setIfExists('name_regex', $data ?? [], null);
        $this->setIfExists('transport', $data ?? [], null);
        $this->setIfExists('ssh_credentials', $data ?? [], null);
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

        $allowedValues = $this->getTransportAllowableValues();
        if (!is_null($this->container['transport']) && !in_array($this->container['transport'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transport', must be one of '%s'",
                $this->container['transport'],
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
     * Gets datasets
     *
     * @return string[]|null
     */
    public function getDatasets()
    {
        return $this->container['datasets'];
    }

    /**
     * Sets datasets
     *
     * @param string[]|null $datasets datasets
     *
     * @return self
     */
    public function setDatasets($datasets)
    {

        if (is_null($datasets)) {
            throw new \InvalidArgumentException('non-nullable datasets cannot be null');
        }

        $this->container['datasets'] = $datasets;

        return $this;
    }

    /**
     * Gets naming_schema
     *
     * @return string[]|null
     */
    public function getNamingSchema()
    {
        return $this->container['naming_schema'];
    }

    /**
     * Sets naming_schema
     *
     * @param string[]|null $naming_schema Count how many existing snapshots of `dataset` match `naming_schema`.
     *
     * @return self
     */
    public function setNamingSchema($naming_schema)
    {

        if (is_null($naming_schema)) {
            throw new \InvalidArgumentException('non-nullable naming_schema cannot be null');
        }

        $this->container['naming_schema'] = $naming_schema;

        return $this;
    }

    /**
     * Gets name_regex
     *
     * @return string|null
     */
    public function getNameRegex()
    {
        return $this->container['name_regex'];
    }

    /**
     * Sets name_regex
     *
     * @param string|null $name_regex name_regex
     *
     * @return self
     */
    public function setNameRegex($name_regex)
    {

        if (is_null($name_regex)) {
            array_push($this->openAPINullablesSetToNull, 'name_regex');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name_regex', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['name_regex'] = $name_regex;

        return $this;
    }

    /**
     * Gets transport
     *
     * @return string|null
     */
    public function getTransport()
    {
        return $this->container['transport'];
    }

    /**
     * Sets transport
     *
     * @param string|null $transport transport
     *
     * @return self
     */
    public function setTransport($transport)
    {
        $allowedValues = $this->getTransportAllowableValues();
        if (!is_null($transport) && !in_array($transport, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transport', must be one of '%s'",
                    $transport,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($transport)) {
            throw new \InvalidArgumentException('non-nullable transport cannot be null');
        }

        $this->container['transport'] = $transport;

        return $this;
    }

    /**
     * Gets ssh_credentials
     *
     * @return int|null
     */
    public function getSshCredentials()
    {
        return $this->container['ssh_credentials'];
    }

    /**
     * Sets ssh_credentials
     *
     * @param int|null $ssh_credentials ssh_credentials
     *
     * @return self
     */
    public function setSshCredentials($ssh_credentials)
    {

        if (is_null($ssh_credentials)) {
            array_push($this->openAPINullablesSetToNull, 'ssh_credentials');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ssh_credentials', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['ssh_credentials'] = $ssh_credentials;

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


