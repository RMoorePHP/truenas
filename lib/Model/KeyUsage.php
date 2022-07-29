<?php
/**
 * KeyUsage
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
 * KeyUsage Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class KeyUsage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'KeyUsage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enabled' => 'bool',
        'digital_signature' => 'bool',
        'content_commitment' => 'bool',
        'key_encipherment' => 'bool',
        'data_encipherment' => 'bool',
        'key_agreement' => 'bool',
        'key_cert_sign' => 'bool',
        'crl_sign' => 'bool',
        'encipher_only' => 'bool',
        'decipher_only' => 'bool',
        'extension_critical' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enabled' => null,
        'digital_signature' => null,
        'content_commitment' => null,
        'key_encipherment' => null,
        'data_encipherment' => null,
        'key_agreement' => null,
        'key_cert_sign' => null,
        'crl_sign' => null,
        'encipher_only' => null,
        'decipher_only' => null,
        'extension_critical' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enabled' => false,
		'digital_signature' => false,
		'content_commitment' => false,
		'key_encipherment' => false,
		'data_encipherment' => false,
		'key_agreement' => false,
		'key_cert_sign' => false,
		'crl_sign' => false,
		'encipher_only' => false,
		'decipher_only' => false,
		'extension_critical' => false
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
        'enabled' => 'enabled',
        'digital_signature' => 'digital_signature',
        'content_commitment' => 'content_commitment',
        'key_encipherment' => 'key_encipherment',
        'data_encipherment' => 'data_encipherment',
        'key_agreement' => 'key_agreement',
        'key_cert_sign' => 'key_cert_sign',
        'crl_sign' => 'crl_sign',
        'encipher_only' => 'encipher_only',
        'decipher_only' => 'decipher_only',
        'extension_critical' => 'extension_critical'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'digital_signature' => 'setDigitalSignature',
        'content_commitment' => 'setContentCommitment',
        'key_encipherment' => 'setKeyEncipherment',
        'data_encipherment' => 'setDataEncipherment',
        'key_agreement' => 'setKeyAgreement',
        'key_cert_sign' => 'setKeyCertSign',
        'crl_sign' => 'setCrlSign',
        'encipher_only' => 'setEncipherOnly',
        'decipher_only' => 'setDecipherOnly',
        'extension_critical' => 'setExtensionCritical'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'digital_signature' => 'getDigitalSignature',
        'content_commitment' => 'getContentCommitment',
        'key_encipherment' => 'getKeyEncipherment',
        'data_encipherment' => 'getDataEncipherment',
        'key_agreement' => 'getKeyAgreement',
        'key_cert_sign' => 'getKeyCertSign',
        'crl_sign' => 'getCrlSign',
        'encipher_only' => 'getEncipherOnly',
        'decipher_only' => 'getDecipherOnly',
        'extension_critical' => 'getExtensionCritical'
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
        $this->setIfExists('enabled', $data ?? [], false);
        $this->setIfExists('digital_signature', $data ?? [], false);
        $this->setIfExists('content_commitment', $data ?? [], false);
        $this->setIfExists('key_encipherment', $data ?? [], false);
        $this->setIfExists('data_encipherment', $data ?? [], false);
        $this->setIfExists('key_agreement', $data ?? [], false);
        $this->setIfExists('key_cert_sign', $data ?? [], false);
        $this->setIfExists('crl_sign', $data ?? [], false);
        $this->setIfExists('encipher_only', $data ?? [], false);
        $this->setIfExists('decipher_only', $data ?? [], false);
        $this->setIfExists('extension_critical', $data ?? [], false);
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
     * Gets digital_signature
     *
     * @return bool|null
     */
    public function getDigitalSignature()
    {
        return $this->container['digital_signature'];
    }

    /**
     * Sets digital_signature
     *
     * @param bool|null $digital_signature digital_signature
     *
     * @return self
     */
    public function setDigitalSignature($digital_signature)
    {

        if (is_null($digital_signature)) {
            throw new \InvalidArgumentException('non-nullable digital_signature cannot be null');
        }

        $this->container['digital_signature'] = $digital_signature;

        return $this;
    }

    /**
     * Gets content_commitment
     *
     * @return bool|null
     */
    public function getContentCommitment()
    {
        return $this->container['content_commitment'];
    }

    /**
     * Sets content_commitment
     *
     * @param bool|null $content_commitment content_commitment
     *
     * @return self
     */
    public function setContentCommitment($content_commitment)
    {

        if (is_null($content_commitment)) {
            throw new \InvalidArgumentException('non-nullable content_commitment cannot be null');
        }

        $this->container['content_commitment'] = $content_commitment;

        return $this;
    }

    /**
     * Gets key_encipherment
     *
     * @return bool|null
     */
    public function getKeyEncipherment()
    {
        return $this->container['key_encipherment'];
    }

    /**
     * Sets key_encipherment
     *
     * @param bool|null $key_encipherment key_encipherment
     *
     * @return self
     */
    public function setKeyEncipherment($key_encipherment)
    {

        if (is_null($key_encipherment)) {
            throw new \InvalidArgumentException('non-nullable key_encipherment cannot be null');
        }

        $this->container['key_encipherment'] = $key_encipherment;

        return $this;
    }

    /**
     * Gets data_encipherment
     *
     * @return bool|null
     */
    public function getDataEncipherment()
    {
        return $this->container['data_encipherment'];
    }

    /**
     * Sets data_encipherment
     *
     * @param bool|null $data_encipherment data_encipherment
     *
     * @return self
     */
    public function setDataEncipherment($data_encipherment)
    {

        if (is_null($data_encipherment)) {
            throw new \InvalidArgumentException('non-nullable data_encipherment cannot be null');
        }

        $this->container['data_encipherment'] = $data_encipherment;

        return $this;
    }

    /**
     * Gets key_agreement
     *
     * @return bool|null
     */
    public function getKeyAgreement()
    {
        return $this->container['key_agreement'];
    }

    /**
     * Sets key_agreement
     *
     * @param bool|null $key_agreement key_agreement
     *
     * @return self
     */
    public function setKeyAgreement($key_agreement)
    {

        if (is_null($key_agreement)) {
            throw new \InvalidArgumentException('non-nullable key_agreement cannot be null');
        }

        $this->container['key_agreement'] = $key_agreement;

        return $this;
    }

    /**
     * Gets key_cert_sign
     *
     * @return bool|null
     */
    public function getKeyCertSign()
    {
        return $this->container['key_cert_sign'];
    }

    /**
     * Sets key_cert_sign
     *
     * @param bool|null $key_cert_sign key_cert_sign
     *
     * @return self
     */
    public function setKeyCertSign($key_cert_sign)
    {

        if (is_null($key_cert_sign)) {
            throw new \InvalidArgumentException('non-nullable key_cert_sign cannot be null');
        }

        $this->container['key_cert_sign'] = $key_cert_sign;

        return $this;
    }

    /**
     * Gets crl_sign
     *
     * @return bool|null
     */
    public function getCrlSign()
    {
        return $this->container['crl_sign'];
    }

    /**
     * Sets crl_sign
     *
     * @param bool|null $crl_sign crl_sign
     *
     * @return self
     */
    public function setCrlSign($crl_sign)
    {

        if (is_null($crl_sign)) {
            throw new \InvalidArgumentException('non-nullable crl_sign cannot be null');
        }

        $this->container['crl_sign'] = $crl_sign;

        return $this;
    }

    /**
     * Gets encipher_only
     *
     * @return bool|null
     */
    public function getEncipherOnly()
    {
        return $this->container['encipher_only'];
    }

    /**
     * Sets encipher_only
     *
     * @param bool|null $encipher_only encipher_only
     *
     * @return self
     */
    public function setEncipherOnly($encipher_only)
    {

        if (is_null($encipher_only)) {
            throw new \InvalidArgumentException('non-nullable encipher_only cannot be null');
        }

        $this->container['encipher_only'] = $encipher_only;

        return $this;
    }

    /**
     * Gets decipher_only
     *
     * @return bool|null
     */
    public function getDecipherOnly()
    {
        return $this->container['decipher_only'];
    }

    /**
     * Sets decipher_only
     *
     * @param bool|null $decipher_only decipher_only
     *
     * @return self
     */
    public function setDecipherOnly($decipher_only)
    {

        if (is_null($decipher_only)) {
            throw new \InvalidArgumentException('non-nullable decipher_only cannot be null');
        }

        $this->container['decipher_only'] = $decipher_only;

        return $this;
    }

    /**
     * Gets extension_critical
     *
     * @return bool|null
     */
    public function getExtensionCritical()
    {
        return $this->container['extension_critical'];
    }

    /**
     * Sets extension_critical
     *
     * @param bool|null $extension_critical extension_critical
     *
     * @return self
     */
    public function setExtensionCritical($extension_critical)
    {

        if (is_null($extension_critical)) {
            throw new \InvalidArgumentException('non-nullable extension_critical cannot be null');
        }

        $this->container['extension_critical'] = $extension_critical;

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

