<?php
/**
 * EstimationByRoomSchema
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
 * EstimationByRoomSchema Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EstimationByRoomSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EstimationByRoomSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accuracy' => 'int',
        'rooms_stats' => '\Swagger\Client\Model\SaleRoomsStatSchema[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accuracy' => 'int64',
        'rooms_stats' => null
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
        'accuracy' => 'accuracy',
        'rooms_stats' => 'roomsStats'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accuracy' => 'setAccuracy',
        'rooms_stats' => 'setRoomsStats'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accuracy' => 'getAccuracy',
        'rooms_stats' => 'getRoomsStats'
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
        $this->container['accuracy'] = isset($data['accuracy']) ? $data['accuracy'] : null;
        $this->container['rooms_stats'] = isset($data['rooms_stats']) ? $data['rooms_stats'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['rooms_stats'] === null) {
            $invalidProperties[] = "'rooms_stats' can't be null";
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
     * Gets accuracy
     *
     * @return int
     */
    public function getAccuracy()
    {
        return $this->container['accuracy'];
    }

    /**
     * Sets accuracy
     *
     * @param int $accuracy Точность
     *
     * @return $this
     */
    public function setAccuracy($accuracy)
    {
        $this->container['accuracy'] = $accuracy;

        return $this;
    }

    /**
     * Gets rooms_stats
     *
     * @return \Swagger\Client\Model\SaleRoomsStatSchema[]
     */
    public function getRoomsStats()
    {
        return $this->container['rooms_stats'];
    }

    /**
     * Sets rooms_stats
     *
     * @param \Swagger\Client\Model\SaleRoomsStatSchema[] $rooms_stats Массив статистических данных для квартир в соответствии с их комнатностью
     *
     * @return $this
     */
    public function setRoomsStats($rooms_stats)
    {
        $this->container['rooms_stats'] = $rooms_stats;

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


