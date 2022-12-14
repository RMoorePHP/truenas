<?php
/**
 * DiskTemperatures1
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
use \RMoore\Truenas\ObjectSerializer;

/**
 * DiskTemperatures1 Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DiskTemperatures1
{
    /**
     * Possible values of this enum
     */
    public const NEVER = 'NEVER';

    public const SLEEP = 'SLEEP';

    public const STANDBY = 'STANDBY';

    public const IDLE = 'IDLE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NEVER,
            self::SLEEP,
            self::STANDBY,
            self::IDLE
        ];
    }
}


