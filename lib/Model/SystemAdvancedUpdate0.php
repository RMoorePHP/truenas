<?php
/**
 * SystemAdvancedUpdate0
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
 * SystemAdvancedUpdate0 Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SystemAdvancedUpdate0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'system_advanced_update_0';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'advancedmode' => 'bool',
        'autotune' => 'bool',
        'kdump_enabled' => 'bool',
        'boot_scrub' => 'int',
        'consolemenu' => 'bool',
        'consolemsg' => 'bool',
        'debugkernel' => 'bool',
        'fqdn_syslog' => 'bool',
        'motd' => 'string',
        'powerdaemon' => 'bool',
        'serialconsole' => 'bool',
        'serialport' => 'string',
        'serialspeed' => 'string',
        'swapondrive' => 'int',
        'overprovision' => 'int',
        'traceback' => 'bool',
        'uploadcrash' => 'bool',
        'anonstats' => 'bool',
        'sed_user' => 'string',
        'sysloglevel' => 'string',
        'syslogserver' => 'string',
        'syslog_transport' => 'string',
        'syslog_tls_certificate' => 'int',
        'syslog_tls_certificate_authority' => 'int',
        'isolated_gpu_pci_ids' => 'string[]',
        'kernel_extra_options' => 'string',
        'sed_passwd' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'advancedmode' => null,
        'autotune' => null,
        'kdump_enabled' => null,
        'boot_scrub' => null,
        'consolemenu' => null,
        'consolemsg' => null,
        'debugkernel' => null,
        'fqdn_syslog' => null,
        'motd' => null,
        'powerdaemon' => null,
        'serialconsole' => null,
        'serialport' => null,
        'serialspeed' => null,
        'swapondrive' => null,
        'overprovision' => null,
        'traceback' => null,
        'uploadcrash' => null,
        'anonstats' => null,
        'sed_user' => null,
        'sysloglevel' => null,
        'syslogserver' => null,
        'syslog_transport' => null,
        'syslog_tls_certificate' => null,
        'syslog_tls_certificate_authority' => null,
        'isolated_gpu_pci_ids' => null,
        'kernel_extra_options' => null,
        'sed_passwd' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'advancedmode' => false,
		'autotune' => false,
		'kdump_enabled' => false,
		'boot_scrub' => false,
		'consolemenu' => false,
		'consolemsg' => false,
		'debugkernel' => false,
		'fqdn_syslog' => false,
		'motd' => false,
		'powerdaemon' => false,
		'serialconsole' => false,
		'serialport' => false,
		'serialspeed' => false,
		'swapondrive' => false,
		'overprovision' => true,
		'traceback' => false,
		'uploadcrash' => false,
		'anonstats' => false,
		'sed_user' => false,
		'sysloglevel' => false,
		'syslogserver' => false,
		'syslog_transport' => false,
		'syslog_tls_certificate' => true,
		'syslog_tls_certificate_authority' => true,
		'isolated_gpu_pci_ids' => false,
		'kernel_extra_options' => false,
		'sed_passwd' => false
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
        'advancedmode' => 'advancedmode',
        'autotune' => 'autotune',
        'kdump_enabled' => 'kdump_enabled',
        'boot_scrub' => 'boot_scrub',
        'consolemenu' => 'consolemenu',
        'consolemsg' => 'consolemsg',
        'debugkernel' => 'debugkernel',
        'fqdn_syslog' => 'fqdn_syslog',
        'motd' => 'motd',
        'powerdaemon' => 'powerdaemon',
        'serialconsole' => 'serialconsole',
        'serialport' => 'serialport',
        'serialspeed' => 'serialspeed',
        'swapondrive' => 'swapondrive',
        'overprovision' => 'overprovision',
        'traceback' => 'traceback',
        'uploadcrash' => 'uploadcrash',
        'anonstats' => 'anonstats',
        'sed_user' => 'sed_user',
        'sysloglevel' => 'sysloglevel',
        'syslogserver' => 'syslogserver',
        'syslog_transport' => 'syslog_transport',
        'syslog_tls_certificate' => 'syslog_tls_certificate',
        'syslog_tls_certificate_authority' => 'syslog_tls_certificate_authority',
        'isolated_gpu_pci_ids' => 'isolated_gpu_pci_ids',
        'kernel_extra_options' => 'kernel_extra_options',
        'sed_passwd' => 'sed_passwd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advancedmode' => 'setAdvancedmode',
        'autotune' => 'setAutotune',
        'kdump_enabled' => 'setKdumpEnabled',
        'boot_scrub' => 'setBootScrub',
        'consolemenu' => 'setConsolemenu',
        'consolemsg' => 'setConsolemsg',
        'debugkernel' => 'setDebugkernel',
        'fqdn_syslog' => 'setFqdnSyslog',
        'motd' => 'setMotd',
        'powerdaemon' => 'setPowerdaemon',
        'serialconsole' => 'setSerialconsole',
        'serialport' => 'setSerialport',
        'serialspeed' => 'setSerialspeed',
        'swapondrive' => 'setSwapondrive',
        'overprovision' => 'setOverprovision',
        'traceback' => 'setTraceback',
        'uploadcrash' => 'setUploadcrash',
        'anonstats' => 'setAnonstats',
        'sed_user' => 'setSedUser',
        'sysloglevel' => 'setSysloglevel',
        'syslogserver' => 'setSyslogserver',
        'syslog_transport' => 'setSyslogTransport',
        'syslog_tls_certificate' => 'setSyslogTlsCertificate',
        'syslog_tls_certificate_authority' => 'setSyslogTlsCertificateAuthority',
        'isolated_gpu_pci_ids' => 'setIsolatedGpuPciIds',
        'kernel_extra_options' => 'setKernelExtraOptions',
        'sed_passwd' => 'setSedPasswd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advancedmode' => 'getAdvancedmode',
        'autotune' => 'getAutotune',
        'kdump_enabled' => 'getKdumpEnabled',
        'boot_scrub' => 'getBootScrub',
        'consolemenu' => 'getConsolemenu',
        'consolemsg' => 'getConsolemsg',
        'debugkernel' => 'getDebugkernel',
        'fqdn_syslog' => 'getFqdnSyslog',
        'motd' => 'getMotd',
        'powerdaemon' => 'getPowerdaemon',
        'serialconsole' => 'getSerialconsole',
        'serialport' => 'getSerialport',
        'serialspeed' => 'getSerialspeed',
        'swapondrive' => 'getSwapondrive',
        'overprovision' => 'getOverprovision',
        'traceback' => 'getTraceback',
        'uploadcrash' => 'getUploadcrash',
        'anonstats' => 'getAnonstats',
        'sed_user' => 'getSedUser',
        'sysloglevel' => 'getSysloglevel',
        'syslogserver' => 'getSyslogserver',
        'syslog_transport' => 'getSyslogTransport',
        'syslog_tls_certificate' => 'getSyslogTlsCertificate',
        'syslog_tls_certificate_authority' => 'getSyslogTlsCertificateAuthority',
        'isolated_gpu_pci_ids' => 'getIsolatedGpuPciIds',
        'kernel_extra_options' => 'getKernelExtraOptions',
        'sed_passwd' => 'getSedPasswd'
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

    public const SERIALSPEED__9600 = '9600';
    public const SERIALSPEED__19200 = '19200';
    public const SERIALSPEED__38400 = '38400';
    public const SERIALSPEED__57600 = '57600';
    public const SERIALSPEED__115200 = '115200';
    public const SED_USER_USER = 'USER';
    public const SED_USER_MASTER = 'MASTER';
    public const SYSLOGLEVEL_EMERG = 'F_EMERG';
    public const SYSLOGLEVEL_ALERT = 'F_ALERT';
    public const SYSLOGLEVEL_CRIT = 'F_CRIT';
    public const SYSLOGLEVEL_ERR = 'F_ERR';
    public const SYSLOGLEVEL_WARNING = 'F_WARNING';
    public const SYSLOGLEVEL_NOTICE = 'F_NOTICE';
    public const SYSLOGLEVEL_INFO = 'F_INFO';
    public const SYSLOGLEVEL_DEBUG = 'F_DEBUG';
    public const SYSLOG_TRANSPORT_UDP = 'UDP';
    public const SYSLOG_TRANSPORT_TCP = 'TCP';
    public const SYSLOG_TRANSPORT_TLS = 'TLS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSerialspeedAllowableValues()
    {
        return [
            self::SERIALSPEED__9600,
            self::SERIALSPEED__19200,
            self::SERIALSPEED__38400,
            self::SERIALSPEED__57600,
            self::SERIALSPEED__115200,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSedUserAllowableValues()
    {
        return [
            self::SED_USER_USER,
            self::SED_USER_MASTER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSysloglevelAllowableValues()
    {
        return [
            self::SYSLOGLEVEL_EMERG,
            self::SYSLOGLEVEL_ALERT,
            self::SYSLOGLEVEL_CRIT,
            self::SYSLOGLEVEL_ERR,
            self::SYSLOGLEVEL_WARNING,
            self::SYSLOGLEVEL_NOTICE,
            self::SYSLOGLEVEL_INFO,
            self::SYSLOGLEVEL_DEBUG,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSyslogTransportAllowableValues()
    {
        return [
            self::SYSLOG_TRANSPORT_UDP,
            self::SYSLOG_TRANSPORT_TCP,
            self::SYSLOG_TRANSPORT_TLS,
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
        $this->setIfExists('advancedmode', $data ?? [], null);
        $this->setIfExists('autotune', $data ?? [], null);
        $this->setIfExists('kdump_enabled', $data ?? [], null);
        $this->setIfExists('boot_scrub', $data ?? [], null);
        $this->setIfExists('consolemenu', $data ?? [], null);
        $this->setIfExists('consolemsg', $data ?? [], null);
        $this->setIfExists('debugkernel', $data ?? [], null);
        $this->setIfExists('fqdn_syslog', $data ?? [], null);
        $this->setIfExists('motd', $data ?? [], null);
        $this->setIfExists('powerdaemon', $data ?? [], null);
        $this->setIfExists('serialconsole', $data ?? [], null);
        $this->setIfExists('serialport', $data ?? [], null);
        $this->setIfExists('serialspeed', $data ?? [], null);
        $this->setIfExists('swapondrive', $data ?? [], null);
        $this->setIfExists('overprovision', $data ?? [], null);
        $this->setIfExists('traceback', $data ?? [], null);
        $this->setIfExists('uploadcrash', $data ?? [], null);
        $this->setIfExists('anonstats', $data ?? [], null);
        $this->setIfExists('sed_user', $data ?? [], null);
        $this->setIfExists('sysloglevel', $data ?? [], null);
        $this->setIfExists('syslogserver', $data ?? [], null);
        $this->setIfExists('syslog_transport', $data ?? [], null);
        $this->setIfExists('syslog_tls_certificate', $data ?? [], null);
        $this->setIfExists('syslog_tls_certificate_authority', $data ?? [], null);
        $this->setIfExists('isolated_gpu_pci_ids', $data ?? [], null);
        $this->setIfExists('kernel_extra_options', $data ?? [], null);
        $this->setIfExists('sed_passwd', $data ?? [], null);
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

        $allowedValues = $this->getSerialspeedAllowableValues();
        if (!is_null($this->container['serialspeed']) && !in_array($this->container['serialspeed'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'serialspeed', must be one of '%s'",
                $this->container['serialspeed'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSedUserAllowableValues();
        if (!is_null($this->container['sed_user']) && !in_array($this->container['sed_user'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sed_user', must be one of '%s'",
                $this->container['sed_user'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSysloglevelAllowableValues();
        if (!is_null($this->container['sysloglevel']) && !in_array($this->container['sysloglevel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sysloglevel', must be one of '%s'",
                $this->container['sysloglevel'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSyslogTransportAllowableValues();
        if (!is_null($this->container['syslog_transport']) && !in_array($this->container['syslog_transport'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'syslog_transport', must be one of '%s'",
                $this->container['syslog_transport'],
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
     * Gets advancedmode
     *
     * @return bool|null
     */
    public function getAdvancedmode()
    {
        return $this->container['advancedmode'];
    }

    /**
     * Sets advancedmode
     *
     * @param bool|null $advancedmode advancedmode
     *
     * @return self
     */
    public function setAdvancedmode($advancedmode)
    {

        if (is_null($advancedmode)) {
            throw new \InvalidArgumentException('non-nullable advancedmode cannot be null');
        }

        $this->container['advancedmode'] = $advancedmode;

        return $this;
    }

    /**
     * Gets autotune
     *
     * @return bool|null
     */
    public function getAutotune()
    {
        return $this->container['autotune'];
    }

    /**
     * Sets autotune
     *
     * @param bool|null $autotune `autotune` when enabled executes autotune script which attempts to optimize the system based on the installed hardware.
     *
     * @return self
     */
    public function setAutotune($autotune)
    {

        if (is_null($autotune)) {
            throw new \InvalidArgumentException('non-nullable autotune cannot be null');
        }

        $this->container['autotune'] = $autotune;

        return $this;
    }

    /**
     * Gets kdump_enabled
     *
     * @return bool|null
     */
    public function getKdumpEnabled()
    {
        return $this->container['kdump_enabled'];
    }

    /**
     * Sets kdump_enabled
     *
     * @param bool|null $kdump_enabled kdump_enabled
     *
     * @return self
     */
    public function setKdumpEnabled($kdump_enabled)
    {

        if (is_null($kdump_enabled)) {
            throw new \InvalidArgumentException('non-nullable kdump_enabled cannot be null');
        }

        $this->container['kdump_enabled'] = $kdump_enabled;

        return $this;
    }

    /**
     * Gets boot_scrub
     *
     * @return int|null
     */
    public function getBootScrub()
    {
        return $this->container['boot_scrub'];
    }

    /**
     * Sets boot_scrub
     *
     * @param int|null $boot_scrub boot_scrub
     *
     * @return self
     */
    public function setBootScrub($boot_scrub)
    {

        if (is_null($boot_scrub)) {
            throw new \InvalidArgumentException('non-nullable boot_scrub cannot be null');
        }

        $this->container['boot_scrub'] = $boot_scrub;

        return $this;
    }

    /**
     * Gets consolemenu
     *
     * @return bool|null
     */
    public function getConsolemenu()
    {
        return $this->container['consolemenu'];
    }

    /**
     * Sets consolemenu
     *
     * @param bool|null $consolemenu `consolemenu` should be disabled if the menu at console is not desired. It will default to standard login in the console if disabled.
     *
     * @return self
     */
    public function setConsolemenu($consolemenu)
    {

        if (is_null($consolemenu)) {
            throw new \InvalidArgumentException('non-nullable consolemenu cannot be null');
        }

        $this->container['consolemenu'] = $consolemenu;

        return $this;
    }

    /**
     * Gets consolemsg
     *
     * @return bool|null
     */
    public function getConsolemsg()
    {
        return $this->container['consolemsg'];
    }

    /**
     * Sets consolemsg
     *
     * @param bool|null $consolemsg `consolemsg` is a deprecated attribute and will be removed in further releases. Please, use `consolemsg` attribute in the `system.general` plugin.
     *
     * @return self
     */
    public function setConsolemsg($consolemsg)
    {

        if (is_null($consolemsg)) {
            throw new \InvalidArgumentException('non-nullable consolemsg cannot be null');
        }

        $this->container['consolemsg'] = $consolemsg;

        return $this;
    }

    /**
     * Gets debugkernel
     *
     * @return bool|null
     */
    public function getDebugkernel()
    {
        return $this->container['debugkernel'];
    }

    /**
     * Sets debugkernel
     *
     * @param bool|null $debugkernel debugkernel
     *
     * @return self
     */
    public function setDebugkernel($debugkernel)
    {

        if (is_null($debugkernel)) {
            throw new \InvalidArgumentException('non-nullable debugkernel cannot be null');
        }

        $this->container['debugkernel'] = $debugkernel;

        return $this;
    }

    /**
     * Gets fqdn_syslog
     *
     * @return bool|null
     */
    public function getFqdnSyslog()
    {
        return $this->container['fqdn_syslog'];
    }

    /**
     * Sets fqdn_syslog
     *
     * @param bool|null $fqdn_syslog fqdn_syslog
     *
     * @return self
     */
    public function setFqdnSyslog($fqdn_syslog)
    {

        if (is_null($fqdn_syslog)) {
            throw new \InvalidArgumentException('non-nullable fqdn_syslog cannot be null');
        }

        $this->container['fqdn_syslog'] = $fqdn_syslog;

        return $this;
    }

    /**
     * Gets motd
     *
     * @return string|null
     */
    public function getMotd()
    {
        return $this->container['motd'];
    }

    /**
     * Sets motd
     *
     * @param string|null $motd motd
     *
     * @return self
     */
    public function setMotd($motd)
    {

        if (is_null($motd)) {
            throw new \InvalidArgumentException('non-nullable motd cannot be null');
        }

        $this->container['motd'] = $motd;

        return $this;
    }

    /**
     * Gets powerdaemon
     *
     * @return bool|null
     */
    public function getPowerdaemon()
    {
        return $this->container['powerdaemon'];
    }

    /**
     * Sets powerdaemon
     *
     * @param bool|null $powerdaemon powerdaemon
     *
     * @return self
     */
    public function setPowerdaemon($powerdaemon)
    {

        if (is_null($powerdaemon)) {
            throw new \InvalidArgumentException('non-nullable powerdaemon cannot be null');
        }

        $this->container['powerdaemon'] = $powerdaemon;

        return $this;
    }

    /**
     * Gets serialconsole
     *
     * @return bool|null
     */
    public function getSerialconsole()
    {
        return $this->container['serialconsole'];
    }

    /**
     * Sets serialconsole
     *
     * @param bool|null $serialconsole serialconsole
     *
     * @return self
     */
    public function setSerialconsole($serialconsole)
    {

        if (is_null($serialconsole)) {
            throw new \InvalidArgumentException('non-nullable serialconsole cannot be null');
        }

        $this->container['serialconsole'] = $serialconsole;

        return $this;
    }

    /**
     * Gets serialport
     *
     * @return string|null
     */
    public function getSerialport()
    {
        return $this->container['serialport'];
    }

    /**
     * Sets serialport
     *
     * @param string|null $serialport serialport
     *
     * @return self
     */
    public function setSerialport($serialport)
    {

        if (is_null($serialport)) {
            throw new \InvalidArgumentException('non-nullable serialport cannot be null');
        }

        $this->container['serialport'] = $serialport;

        return $this;
    }

    /**
     * Gets serialspeed
     *
     * @return string|null
     */
    public function getSerialspeed()
    {
        return $this->container['serialspeed'];
    }

    /**
     * Sets serialspeed
     *
     * @param string|null $serialspeed serialspeed
     *
     * @return self
     */
    public function setSerialspeed($serialspeed)
    {
        $allowedValues = $this->getSerialspeedAllowableValues();
        if (!is_null($serialspeed) && !in_array($serialspeed, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'serialspeed', must be one of '%s'",
                    $serialspeed,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($serialspeed)) {
            throw new \InvalidArgumentException('non-nullable serialspeed cannot be null');
        }

        $this->container['serialspeed'] = $serialspeed;

        return $this;
    }

    /**
     * Gets swapondrive
     *
     * @return int|null
     */
    public function getSwapondrive()
    {
        return $this->container['swapondrive'];
    }

    /**
     * Sets swapondrive
     *
     * @param int|null $swapondrive swapondrive
     *
     * @return self
     */
    public function setSwapondrive($swapondrive)
    {

        if (is_null($swapondrive)) {
            throw new \InvalidArgumentException('non-nullable swapondrive cannot be null');
        }

        $this->container['swapondrive'] = $swapondrive;

        return $this;
    }

    /**
     * Gets overprovision
     *
     * @return int|null
     */
    public function getOverprovision()
    {
        return $this->container['overprovision'];
    }

    /**
     * Sets overprovision
     *
     * @param int|null $overprovision overprovision
     *
     * @return self
     */
    public function setOverprovision($overprovision)
    {

        if (is_null($overprovision)) {
            array_push($this->openAPINullablesSetToNull, 'overprovision');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('overprovision', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['overprovision'] = $overprovision;

        return $this;
    }

    /**
     * Gets traceback
     *
     * @return bool|null
     */
    public function getTraceback()
    {
        return $this->container['traceback'];
    }

    /**
     * Sets traceback
     *
     * @param bool|null $traceback traceback
     *
     * @return self
     */
    public function setTraceback($traceback)
    {

        if (is_null($traceback)) {
            throw new \InvalidArgumentException('non-nullable traceback cannot be null');
        }

        $this->container['traceback'] = $traceback;

        return $this;
    }

    /**
     * Gets uploadcrash
     *
     * @return bool|null
     */
    public function getUploadcrash()
    {
        return $this->container['uploadcrash'];
    }

    /**
     * Sets uploadcrash
     *
     * @param bool|null $uploadcrash uploadcrash
     *
     * @return self
     */
    public function setUploadcrash($uploadcrash)
    {

        if (is_null($uploadcrash)) {
            throw new \InvalidArgumentException('non-nullable uploadcrash cannot be null');
        }

        $this->container['uploadcrash'] = $uploadcrash;

        return $this;
    }

    /**
     * Gets anonstats
     *
     * @return bool|null
     */
    public function getAnonstats()
    {
        return $this->container['anonstats'];
    }

    /**
     * Sets anonstats
     *
     * @param bool|null $anonstats anonstats
     *
     * @return self
     */
    public function setAnonstats($anonstats)
    {

        if (is_null($anonstats)) {
            throw new \InvalidArgumentException('non-nullable anonstats cannot be null');
        }

        $this->container['anonstats'] = $anonstats;

        return $this;
    }

    /**
     * Gets sed_user
     *
     * @return string|null
     */
    public function getSedUser()
    {
        return $this->container['sed_user'];
    }

    /**
     * Sets sed_user
     *
     * @param string|null $sed_user sed_user
     *
     * @return self
     */
    public function setSedUser($sed_user)
    {
        $allowedValues = $this->getSedUserAllowableValues();
        if (!is_null($sed_user) && !in_array($sed_user, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sed_user', must be one of '%s'",
                    $sed_user,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($sed_user)) {
            throw new \InvalidArgumentException('non-nullable sed_user cannot be null');
        }

        $this->container['sed_user'] = $sed_user;

        return $this;
    }

    /**
     * Gets sysloglevel
     *
     * @return string|null
     */
    public function getSysloglevel()
    {
        return $this->container['sysloglevel'];
    }

    /**
     * Sets sysloglevel
     *
     * @param string|null $sysloglevel When `syslogserver` is defined, logs of `sysloglevel` or above are sent.
     *
     * @return self
     */
    public function setSysloglevel($sysloglevel)
    {
        $allowedValues = $this->getSysloglevelAllowableValues();
        if (!is_null($sysloglevel) && !in_array($sysloglevel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sysloglevel', must be one of '%s'",
                    $sysloglevel,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($sysloglevel)) {
            throw new \InvalidArgumentException('non-nullable sysloglevel cannot be null');
        }

        $this->container['sysloglevel'] = $sysloglevel;

        return $this;
    }

    /**
     * Gets syslogserver
     *
     * @return string|null
     */
    public function getSyslogserver()
    {
        return $this->container['syslogserver'];
    }

    /**
     * Sets syslogserver
     *
     * @param string|null $syslogserver When `syslogserver` is defined, logs of `sysloglevel` or above are sent.
     *
     * @return self
     */
    public function setSyslogserver($syslogserver)
    {

        if (is_null($syslogserver)) {
            throw new \InvalidArgumentException('non-nullable syslogserver cannot be null');
        }

        $this->container['syslogserver'] = $syslogserver;

        return $this;
    }

    /**
     * Gets syslog_transport
     *
     * @return string|null
     */
    public function getSyslogTransport()
    {
        return $this->container['syslog_transport'];
    }

    /**
     * Sets syslog_transport
     *
     * @param string|null $syslog_transport syslog_transport
     *
     * @return self
     */
    public function setSyslogTransport($syslog_transport)
    {
        $allowedValues = $this->getSyslogTransportAllowableValues();
        if (!is_null($syslog_transport) && !in_array($syslog_transport, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'syslog_transport', must be one of '%s'",
                    $syslog_transport,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($syslog_transport)) {
            throw new \InvalidArgumentException('non-nullable syslog_transport cannot be null');
        }

        $this->container['syslog_transport'] = $syslog_transport;

        return $this;
    }

    /**
     * Gets syslog_tls_certificate
     *
     * @return int|null
     */
    public function getSyslogTlsCertificate()
    {
        return $this->container['syslog_tls_certificate'];
    }

    /**
     * Sets syslog_tls_certificate
     *
     * @param int|null $syslog_tls_certificate syslog_tls_certificate
     *
     * @return self
     */
    public function setSyslogTlsCertificate($syslog_tls_certificate)
    {

        if (is_null($syslog_tls_certificate)) {
            array_push($this->openAPINullablesSetToNull, 'syslog_tls_certificate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('syslog_tls_certificate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['syslog_tls_certificate'] = $syslog_tls_certificate;

        return $this;
    }

    /**
     * Gets syslog_tls_certificate_authority
     *
     * @return int|null
     */
    public function getSyslogTlsCertificateAuthority()
    {
        return $this->container['syslog_tls_certificate_authority'];
    }

    /**
     * Sets syslog_tls_certificate_authority
     *
     * @param int|null $syslog_tls_certificate_authority syslog_tls_certificate_authority
     *
     * @return self
     */
    public function setSyslogTlsCertificateAuthority($syslog_tls_certificate_authority)
    {

        if (is_null($syslog_tls_certificate_authority)) {
            array_push($this->openAPINullablesSetToNull, 'syslog_tls_certificate_authority');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('syslog_tls_certificate_authority', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['syslog_tls_certificate_authority'] = $syslog_tls_certificate_authority;

        return $this;
    }

    /**
     * Gets isolated_gpu_pci_ids
     *
     * @return string[]|null
     */
    public function getIsolatedGpuPciIds()
    {
        return $this->container['isolated_gpu_pci_ids'];
    }

    /**
     * Sets isolated_gpu_pci_ids
     *
     * @param string[]|null $isolated_gpu_pci_ids isolated_gpu_pci_ids
     *
     * @return self
     */
    public function setIsolatedGpuPciIds($isolated_gpu_pci_ids)
    {

        if (is_null($isolated_gpu_pci_ids)) {
            throw new \InvalidArgumentException('non-nullable isolated_gpu_pci_ids cannot be null');
        }

        $this->container['isolated_gpu_pci_ids'] = $isolated_gpu_pci_ids;

        return $this;
    }

    /**
     * Gets kernel_extra_options
     *
     * @return string|null
     */
    public function getKernelExtraOptions()
    {
        return $this->container['kernel_extra_options'];
    }

    /**
     * Sets kernel_extra_options
     *
     * @param string|null $kernel_extra_options kernel_extra_options
     *
     * @return self
     */
    public function setKernelExtraOptions($kernel_extra_options)
    {

        if (is_null($kernel_extra_options)) {
            throw new \InvalidArgumentException('non-nullable kernel_extra_options cannot be null');
        }

        $this->container['kernel_extra_options'] = $kernel_extra_options;

        return $this;
    }

    /**
     * Gets sed_passwd
     *
     * @return string|null
     */
    public function getSedPasswd()
    {
        return $this->container['sed_passwd'];
    }

    /**
     * Sets sed_passwd
     *
     * @param string|null $sed_passwd sed_passwd
     *
     * @return self
     */
    public function setSedPasswd($sed_passwd)
    {

        if (is_null($sed_passwd)) {
            throw new \InvalidArgumentException('non-nullable sed_passwd cannot be null');
        }

        $this->container['sed_passwd'] = $sed_passwd;

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


