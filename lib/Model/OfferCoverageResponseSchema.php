<?php
/**
 * OfferCoverageResponseSchema
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
 * OfferCoverageResponseSchema Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OfferCoverageResponseSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OfferCoverageResponseSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'coverage' => 'int',
        'offer_id' => 'int',
        'searches_count' => 'int',
        'shows_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'coverage' => 'int64',
        'offer_id' => 'int64',
        'searches_count' => 'int64',
        'shows_count' => 'int64'
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
        'coverage' => 'coverage',
        'offer_id' => 'offerId',
        'searches_count' => 'searchesCount',
        'shows_count' => 'showsCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'coverage' => 'setCoverage',
        'offer_id' => 'setOfferId',
        'searches_count' => 'setSearchesCount',
        'shows_count' => 'setShowsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'coverage' => 'getCoverage',
        'offer_id' => 'getOfferId',
        'searches_count' => 'getSearchesCount',
        'shows_count' => 'getShowsCount'
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
        $this->container['coverage'] = isset($data['coverage']) ? $data['coverage'] : null;
        $this->container['offer_id'] = isset($data['offer_id']) ? $data['offer_id'] : null;
        $this->container['searches_count'] = isset($data['searches_count']) ? $data['searches_count'] : null;
        $this->container['shows_count'] = isset($data['shows_count']) ? $data['shows_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['coverage'] === null) {
            $invalidProperties[] = "'coverage' can't be null";
        }
        if ($this->container['offer_id'] === null) {
            $invalidProperties[] = "'offer_id' can't be null";
        }
        if ($this->container['searches_count'] === null) {
            $invalidProperties[] = "'searches_count' can't be null";
        }
        if ($this->container['shows_count'] === null) {
            $invalidProperties[] = "'shows_count' can't be null";
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
     * Gets coverage
     *
     * @return int
     */
    public function getCoverage()
    {
        return $this->container['coverage'];
    }

    /**
     * Sets coverage
     *
     * @param int $coverage Охват в процентах
     *
     * @return $this
     */
    public function setCoverage($coverage)
    {
        $this->container['coverage'] = $coverage;

        return $this;
    }

    /**
     * Gets offer_id
     *
     * @return int
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     *
     * @param int $offer_id ID объявления в ЦИАН
     *
     * @return $this
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets searches_count
     *
     * @return int
     */
    public function getSearchesCount()
    {
        return $this->container['searches_count'];
    }

    /**
     * Sets searches_count
     *
     * @param int $searches_count Количество поисков
     *
     * @return $this
     */
    public function setSearchesCount($searches_count)
    {
        $this->container['searches_count'] = $searches_count;

        return $this;
    }

    /**
     * Gets shows_count
     *
     * @return int
     */
    public function getShowsCount()
    {
        return $this->container['shows_count'];
    }

    /**
     * Sets shows_count
     *
     * @param int $shows_count Количество показов
     *
     * @return $this
     */
    public function setShowsCount($shows_count)
    {
        $this->container['shows_count'] = $shows_count;

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

