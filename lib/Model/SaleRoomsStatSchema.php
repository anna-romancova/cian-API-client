<?php
/**
 * SaleRoomsStatSchema
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
 * SaleRoomsStatSchema Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SaleRoomsStatSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SaleRoomsStatSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'price_sqm' => 'double',
        'price_sqm_max' => 'double',
        'price_sqm_min' => 'double',
        'rooms_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'price_sqm' => 'double',
        'price_sqm_max' => 'double',
        'price_sqm_min' => 'double',
        'rooms_count' => 'int64'
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
        'price_sqm' => 'priceSqm',
        'price_sqm_max' => 'priceSqmMax',
        'price_sqm_min' => 'priceSqmMin',
        'rooms_count' => 'roomsCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'price_sqm' => 'setPriceSqm',
        'price_sqm_max' => 'setPriceSqmMax',
        'price_sqm_min' => 'setPriceSqmMin',
        'rooms_count' => 'setRoomsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'price_sqm' => 'getPriceSqm',
        'price_sqm_max' => 'getPriceSqmMax',
        'price_sqm_min' => 'getPriceSqmMin',
        'rooms_count' => 'getRoomsCount'
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
        $this->container['price_sqm'] = isset($data['price_sqm']) ? $data['price_sqm'] : null;
        $this->container['price_sqm_max'] = isset($data['price_sqm_max']) ? $data['price_sqm_max'] : null;
        $this->container['price_sqm_min'] = isset($data['price_sqm_min']) ? $data['price_sqm_min'] : null;
        $this->container['rooms_count'] = isset($data['rooms_count']) ? $data['rooms_count'] : null;
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
     * Gets price_sqm
     *
     * @return double
     */
    public function getPriceSqm()
    {
        return $this->container['price_sqm'];
    }

    /**
     * Sets price_sqm
     *
     * @param double $price_sqm Прогнозируемая цена кв. м. (средняя)
     *
     * @return $this
     */
    public function setPriceSqm($price_sqm)
    {
        $this->container['price_sqm'] = $price_sqm;

        return $this;
    }

    /**
     * Gets price_sqm_max
     *
     * @return double
     */
    public function getPriceSqmMax()
    {
        return $this->container['price_sqm_max'];
    }

    /**
     * Sets price_sqm_max
     *
     * @param double $price_sqm_max Прогнозируемая цена кв. м. (максимальная)
     *
     * @return $this
     */
    public function setPriceSqmMax($price_sqm_max)
    {
        $this->container['price_sqm_max'] = $price_sqm_max;

        return $this;
    }

    /**
     * Gets price_sqm_min
     *
     * @return double
     */
    public function getPriceSqmMin()
    {
        return $this->container['price_sqm_min'];
    }

    /**
     * Sets price_sqm_min
     *
     * @param double $price_sqm_min Прогнозируемая цена кв. м. (минимальная)
     *
     * @return $this
     */
    public function setPriceSqmMin($price_sqm_min)
    {
        $this->container['price_sqm_min'] = $price_sqm_min;

        return $this;
    }

    /**
     * Gets rooms_count
     *
     * @return int
     */
    public function getRoomsCount()
    {
        return $this->container['rooms_count'];
    }

    /**
     * Sets rooms_count
     *
     * @param int $rooms_count Количество комнат
     *
     * @return $this
     */
    public function setRoomsCount($rooms_count)
    {
        $this->container['rooms_count'] = $rooms_count;

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

