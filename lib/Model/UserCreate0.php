<?php
/**
 * UserCreate0
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
 * UserCreate0 Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserCreate0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'user_create_0';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uid' => 'int',
        'username' => 'string',
        'group' => 'int',
        'group_create' => 'bool',
        'home' => 'string',
        'home_mode' => 'string',
        'shell' => 'string',
        'full_name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'password_disabled' => 'bool',
        'locked' => 'bool',
        'microsoft_account' => 'bool',
        'smb' => 'bool',
        'sudo' => 'bool',
        'sudo_nopasswd' => 'bool',
        'sudo_commands' => 'string[]',
        'sshpubkey' => 'string',
        'groups' => 'mixed[]',
        'attributes' => 'array<string,mixed>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uid' => null,
        'username' => null,
        'group' => null,
        'group_create' => null,
        'home' => null,
        'home_mode' => null,
        'shell' => null,
        'full_name' => null,
        'email' => null,
        'password' => null,
        'password_disabled' => null,
        'locked' => null,
        'microsoft_account' => null,
        'smb' => null,
        'sudo' => null,
        'sudo_nopasswd' => null,
        'sudo_commands' => null,
        'sshpubkey' => null,
        'groups' => null,
        'attributes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'uid' => false,
		'username' => false,
		'group' => false,
		'group_create' => false,
		'home' => false,
		'home_mode' => false,
		'shell' => false,
		'full_name' => false,
		'email' => true,
		'password' => false,
		'password_disabled' => false,
		'locked' => false,
		'microsoft_account' => false,
		'smb' => false,
		'sudo' => false,
		'sudo_nopasswd' => false,
		'sudo_commands' => false,
		'sshpubkey' => true,
		'groups' => false,
		'attributes' => false
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
        'uid' => 'uid',
        'username' => 'username',
        'group' => 'group',
        'group_create' => 'group_create',
        'home' => 'home',
        'home_mode' => 'home_mode',
        'shell' => 'shell',
        'full_name' => 'full_name',
        'email' => 'email',
        'password' => 'password',
        'password_disabled' => 'password_disabled',
        'locked' => 'locked',
        'microsoft_account' => 'microsoft_account',
        'smb' => 'smb',
        'sudo' => 'sudo',
        'sudo_nopasswd' => 'sudo_nopasswd',
        'sudo_commands' => 'sudo_commands',
        'sshpubkey' => 'sshpubkey',
        'groups' => 'groups',
        'attributes' => 'attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uid' => 'setUid',
        'username' => 'setUsername',
        'group' => 'setGroup',
        'group_create' => 'setGroupCreate',
        'home' => 'setHome',
        'home_mode' => 'setHomeMode',
        'shell' => 'setShell',
        'full_name' => 'setFullName',
        'email' => 'setEmail',
        'password' => 'setPassword',
        'password_disabled' => 'setPasswordDisabled',
        'locked' => 'setLocked',
        'microsoft_account' => 'setMicrosoftAccount',
        'smb' => 'setSmb',
        'sudo' => 'setSudo',
        'sudo_nopasswd' => 'setSudoNopasswd',
        'sudo_commands' => 'setSudoCommands',
        'sshpubkey' => 'setSshpubkey',
        'groups' => 'setGroups',
        'attributes' => 'setAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uid' => 'getUid',
        'username' => 'getUsername',
        'group' => 'getGroup',
        'group_create' => 'getGroupCreate',
        'home' => 'getHome',
        'home_mode' => 'getHomeMode',
        'shell' => 'getShell',
        'full_name' => 'getFullName',
        'email' => 'getEmail',
        'password' => 'getPassword',
        'password_disabled' => 'getPasswordDisabled',
        'locked' => 'getLocked',
        'microsoft_account' => 'getMicrosoftAccount',
        'smb' => 'getSmb',
        'sudo' => 'getSudo',
        'sudo_nopasswd' => 'getSudoNopasswd',
        'sudo_commands' => 'getSudoCommands',
        'sshpubkey' => 'getSshpubkey',
        'groups' => 'getGroups',
        'attributes' => 'getAttributes'
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
        $this->setIfExists('uid', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('group_create', $data ?? [], false);
        $this->setIfExists('home', $data ?? [], '/nonexistent');
        $this->setIfExists('home_mode', $data ?? [], '755');
        $this->setIfExists('shell', $data ?? [], '/usr/bin/zsh');
        $this->setIfExists('full_name', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('password_disabled', $data ?? [], false);
        $this->setIfExists('locked', $data ?? [], false);
        $this->setIfExists('microsoft_account', $data ?? [], false);
        $this->setIfExists('smb', $data ?? [], true);
        $this->setIfExists('sudo', $data ?? [], false);
        $this->setIfExists('sudo_nopasswd', $data ?? [], false);
        $this->setIfExists('sudo_commands', $data ?? [], null);
        $this->setIfExists('sshpubkey', $data ?? [], null);
        $this->setIfExists('groups', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
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
     * Gets uid
     *
     * @return int|null
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param int|null $uid If `uid` is not provided it is automatically filled with the next one available.
     *
     * @return self
     */
    public function setUid($uid)
    {

        if (is_null($uid)) {
            throw new \InvalidArgumentException('non-nullable uid cannot be null');
        }

        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username username
     *
     * @return self
     */
    public function setUsername($username)
    {

        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }

        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets group
     *
     * @return int|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param int|null $group `group` is required if `group_create` is false.
     *
     * @return self
     */
    public function setGroup($group)
    {

        if (is_null($group)) {
            throw new \InvalidArgumentException('non-nullable group cannot be null');
        }

        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets group_create
     *
     * @return bool|null
     */
    public function getGroupCreate()
    {
        return $this->container['group_create'];
    }

    /**
     * Sets group_create
     *
     * @param bool|null $group_create `group` is required if `group_create` is false.
     *
     * @return self
     */
    public function setGroupCreate($group_create)
    {

        if (is_null($group_create)) {
            throw new \InvalidArgumentException('non-nullable group_create cannot be null');
        }

        $this->container['group_create'] = $group_create;

        return $this;
    }

    /**
     * Gets home
     *
     * @return string|null
     */
    public function getHome()
    {
        return $this->container['home'];
    }

    /**
     * Sets home
     *
     * @param string|null $home home
     *
     * @return self
     */
    public function setHome($home)
    {

        if (is_null($home)) {
            throw new \InvalidArgumentException('non-nullable home cannot be null');
        }

        $this->container['home'] = $home;

        return $this;
    }

    /**
     * Gets home_mode
     *
     * @return string|null
     */
    public function getHomeMode()
    {
        return $this->container['home_mode'];
    }

    /**
     * Sets home_mode
     *
     * @param string|null $home_mode home_mode
     *
     * @return self
     */
    public function setHomeMode($home_mode)
    {

        if (is_null($home_mode)) {
            throw new \InvalidArgumentException('non-nullable home_mode cannot be null');
        }

        $this->container['home_mode'] = $home_mode;

        return $this;
    }

    /**
     * Gets shell
     *
     * @return string|null
     */
    public function getShell()
    {
        return $this->container['shell'];
    }

    /**
     * Sets shell
     *
     * @param string|null $shell Available choices for `shell` can be retrieved with `user.shell_choices`.
     *
     * @return self
     */
    public function setShell($shell)
    {

        if (is_null($shell)) {
            throw new \InvalidArgumentException('non-nullable shell cannot be null');
        }

        $this->container['shell'] = $shell;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string|null
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string|null $full_name full_name
     *
     * @return self
     */
    public function setFullName($full_name)
    {

        if (is_null($full_name)) {
            throw new \InvalidArgumentException('non-nullable full_name cannot be null');
        }

        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {

        if (is_null($email)) {
            array_push($this->openAPINullablesSetToNull, 'email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password `password` is required if `password_disabled` is false.
     *
     * @return self
     */
    public function setPassword($password)
    {

        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets password_disabled
     *
     * @return bool|null
     */
    public function getPasswordDisabled()
    {
        return $this->container['password_disabled'];
    }

    /**
     * Sets password_disabled
     *
     * @param bool|null $password_disabled `password` is required if `password_disabled` is false.
     *
     * @return self
     */
    public function setPasswordDisabled($password_disabled)
    {

        if (is_null($password_disabled)) {
            throw new \InvalidArgumentException('non-nullable password_disabled cannot be null');
        }

        $this->container['password_disabled'] = $password_disabled;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return bool|null
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param bool|null $locked locked
     *
     * @return self
     */
    public function setLocked($locked)
    {

        if (is_null($locked)) {
            throw new \InvalidArgumentException('non-nullable locked cannot be null');
        }

        $this->container['locked'] = $locked;

        return $this;
    }

    /**
     * Gets microsoft_account
     *
     * @return bool|null
     */
    public function getMicrosoftAccount()
    {
        return $this->container['microsoft_account'];
    }

    /**
     * Sets microsoft_account
     *
     * @param bool|null $microsoft_account microsoft_account
     *
     * @return self
     */
    public function setMicrosoftAccount($microsoft_account)
    {

        if (is_null($microsoft_account)) {
            throw new \InvalidArgumentException('non-nullable microsoft_account cannot be null');
        }

        $this->container['microsoft_account'] = $microsoft_account;

        return $this;
    }

    /**
     * Gets smb
     *
     * @return bool|null
     */
    public function getSmb()
    {
        return $this->container['smb'];
    }

    /**
     * Sets smb
     *
     * @param bool|null $smb smb
     *
     * @return self
     */
    public function setSmb($smb)
    {

        if (is_null($smb)) {
            throw new \InvalidArgumentException('non-nullable smb cannot be null');
        }

        $this->container['smb'] = $smb;

        return $this;
    }

    /**
     * Gets sudo
     *
     * @return bool|null
     */
    public function getSudo()
    {
        return $this->container['sudo'];
    }

    /**
     * Sets sudo
     *
     * @param bool|null $sudo sudo
     *
     * @return self
     */
    public function setSudo($sudo)
    {

        if (is_null($sudo)) {
            throw new \InvalidArgumentException('non-nullable sudo cannot be null');
        }

        $this->container['sudo'] = $sudo;

        return $this;
    }

    /**
     * Gets sudo_nopasswd
     *
     * @return bool|null
     */
    public function getSudoNopasswd()
    {
        return $this->container['sudo_nopasswd'];
    }

    /**
     * Sets sudo_nopasswd
     *
     * @param bool|null $sudo_nopasswd sudo_nopasswd
     *
     * @return self
     */
    public function setSudoNopasswd($sudo_nopasswd)
    {

        if (is_null($sudo_nopasswd)) {
            throw new \InvalidArgumentException('non-nullable sudo_nopasswd cannot be null');
        }

        $this->container['sudo_nopasswd'] = $sudo_nopasswd;

        return $this;
    }

    /**
     * Gets sudo_commands
     *
     * @return string[]|null
     */
    public function getSudoCommands()
    {
        return $this->container['sudo_commands'];
    }

    /**
     * Sets sudo_commands
     *
     * @param string[]|null $sudo_commands sudo_commands
     *
     * @return self
     */
    public function setSudoCommands($sudo_commands)
    {

        if (is_null($sudo_commands)) {
            throw new \InvalidArgumentException('non-nullable sudo_commands cannot be null');
        }

        $this->container['sudo_commands'] = $sudo_commands;

        return $this;
    }

    /**
     * Gets sshpubkey
     *
     * @return string|null
     */
    public function getSshpubkey()
    {
        return $this->container['sshpubkey'];
    }

    /**
     * Sets sshpubkey
     *
     * @param string|null $sshpubkey sshpubkey
     *
     * @return self
     */
    public function setSshpubkey($sshpubkey)
    {

        if (is_null($sshpubkey)) {
            array_push($this->openAPINullablesSetToNull, 'sshpubkey');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sshpubkey', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['sshpubkey'] = $sshpubkey;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return mixed[]|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param mixed[]|null $groups groups
     *
     * @return self
     */
    public function setGroups($groups)
    {

        if (is_null($groups)) {
            throw new \InvalidArgumentException('non-nullable groups cannot be null');
        }

        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return array<string,mixed>|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param array<string,mixed>|null $attributes `attributes` is a general-purpose object for storing arbitrary user information.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {

        if (is_null($attributes)) {
            throw new \InvalidArgumentException('non-nullable attributes cannot be null');
        }

        $this->container['attributes'] = $attributes;

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


