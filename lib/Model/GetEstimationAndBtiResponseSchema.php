<?php
/**
 * GetEstimationAndBtiResponseSchema
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ЦИАН АПИ
 *
 * <a href=\"https://www.cian.ru/help/about/37970/\">Условия использования</a>  ## Описание  ### Авторизация Для работы с API необходимо получить ключ авторизации. Для получения ключа нужно написать письмо на import@cian.ru с темой \"ACCESS KEY\" и названием агентства, которое вы представляете. Менеджер уточнит подробности и пришлет ACCESS KEY. Для каждой учетной записи на ЦИАН выдается отдельный ключ авторизации.  Далее все запросы выполняются с заголовком: `Authorization: Bearer <ACCESS KEY>`.  ### Дата и время Формат данных для времени (date-time): `2020-07-18 04:52:33.051204` и для даты (date): `2020-07-18`   Во всех запросах дата и время передаются и возвращаются в таймзоне `Europe/Moscow`.
 *
 * OpenAPI spec version: 1.0
 * Contact: import@cian.ru
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * GetEstimationAndBtiResponseSchema Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetEstimationAndBtiResponseSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetEstimationAndBtiResponseSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bti_data' => '\Swagger\Client\Model\BtiDataSchema',
        'estimation_by_room' => '\Swagger\Client\Model\EstimationByRoomSchema'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bti_data' => null,
        'estimation_by_room' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bti_data' => 'btiData',
        'estimation_by_room' => 'estimationByRoom'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bti_data' => 'setBtiData',
        'estimation_by_room' => 'setEstimationByRoom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bti_data' => 'getBtiData',
        'estimation_by_room' => 'getEstimationByRoom'
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
        return self::$swaggerModelName;
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
        $this->container['bti_data'] = isset($data['bti_data']) ? $data['bti_data'] : null;
        $this->container['estimation_by_room'] = isset($data['estimation_by_room']) ? $data['estimation_by_room'] : null;
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
     * Gets bti_data
     *
     * @return \Swagger\Client\Model\BtiDataSchema
     */
    public function getBtiData()
    {
        return $this->container['bti_data'];
    }

    /**
     * Sets bti_data
     *
     * @param \Swagger\Client\Model\BtiDataSchema $bti_data Данные БТИ
     *
     * @return $this
     */
    public function setBtiData($bti_data)
    {
        $this->container['bti_data'] = $bti_data;

        return $this;
    }

    /**
     * Gets estimation_by_room
     *
     * @return \Swagger\Client\Model\EstimationByRoomSchema
     */
    public function getEstimationByRoom()
    {
        return $this->container['estimation_by_room'];
    }

    /**
     * Sets estimation_by_room
     *
     * @param \Swagger\Client\Model\EstimationByRoomSchema $estimation_by_room Оценка в разрезе комнатности
     *
     * @return $this
     */
    public function setEstimationByRoom($estimation_by_room)
    {
        $this->container['estimation_by_room'] = $estimation_by_room;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


