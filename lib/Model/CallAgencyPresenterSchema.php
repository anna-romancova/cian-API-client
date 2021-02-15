<?php
/**
 * CallAgencyPresenterSchema
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
 * CallAgencyPresenterSchema Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallAgencyPresenterSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallAgencyPresenterSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'call_id' => 'int',
        'calltracking_phone' => 'string',
        'date' => '\DateTime',
        'datetime' => '\DateTime',
        'destination_phone' => 'string',
        'duration' => 'int',
        'employer_id' => 'int',
        'source_phone' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'call_id' => 'int64',
        'calltracking_phone' => null,
        'date' => 'date',
        'datetime' => 'date-time',
        'destination_phone' => null,
        'duration' => 'int64',
        'employer_id' => 'int64',
        'source_phone' => null,
        'status' => null
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
        'call_id' => 'callId',
        'calltracking_phone' => 'calltrackingPhone',
        'date' => 'date',
        'datetime' => 'datetime',
        'destination_phone' => 'destinationPhone',
        'duration' => 'duration',
        'employer_id' => 'employerId',
        'source_phone' => 'sourcePhone',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'call_id' => 'setCallId',
        'calltracking_phone' => 'setCalltrackingPhone',
        'date' => 'setDate',
        'datetime' => 'setDatetime',
        'destination_phone' => 'setDestinationPhone',
        'duration' => 'setDuration',
        'employer_id' => 'setEmployerId',
        'source_phone' => 'setSourcePhone',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'call_id' => 'getCallId',
        'calltracking_phone' => 'getCalltrackingPhone',
        'date' => 'getDate',
        'datetime' => 'getDatetime',
        'destination_phone' => 'getDestinationPhone',
        'duration' => 'getDuration',
        'employer_id' => 'getEmployerId',
        'source_phone' => 'getSourcePhone',
        'status' => 'getStatus'
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

    const STATUS_BUSY = 'busy';
    const STATUS_HGUP = 'hgup';
    const STATUS_NO_ANSWER = 'noAnswer';
    const STATUS_SUCCESS = 'success';
    const STATUS_TECH_PROBLEM = 'techProblem';
    const STATUS_TURNED_OFF = 'turnedOff';
    const STATUS_UNKNOWN = 'unknown';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_BUSY,
            self::STATUS_HGUP,
            self::STATUS_NO_ANSWER,
            self::STATUS_SUCCESS,
            self::STATUS_TECH_PROBLEM,
            self::STATUS_TURNED_OFF,
            self::STATUS_UNKNOWN,
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
        $this->container['call_id'] = isset($data['call_id']) ? $data['call_id'] : null;
        $this->container['calltracking_phone'] = isset($data['calltracking_phone']) ? $data['calltracking_phone'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['datetime'] = isset($data['datetime']) ? $data['datetime'] : null;
        $this->container['destination_phone'] = isset($data['destination_phone']) ? $data['destination_phone'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['employer_id'] = isset($data['employer_id']) ? $data['employer_id'] : null;
        $this->container['source_phone'] = isset($data['source_phone']) ? $data['source_phone'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['calltracking_phone'] === null) {
            $invalidProperties[] = "'calltracking_phone' can't be null";
        }
        if ($this->container['destination_phone'] === null) {
            $invalidProperties[] = "'destination_phone' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['source_phone'] === null) {
            $invalidProperties[] = "'source_phone' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets call_id
     *
     * @return int
     */
    public function getCallId()
    {
        return $this->container['call_id'];
    }

    /**
     * Sets call_id
     *
     * @param int $call_id ID звонка
     *
     * @return $this
     */
    public function setCallId($call_id)
    {
        $this->container['call_id'] = $call_id;

        return $this;
    }

    /**
     * Gets calltracking_phone
     *
     * @return string
     */
    public function getCalltrackingPhone()
    {
        return $this->container['calltracking_phone'];
    }

    /**
     * Sets calltracking_phone
     *
     * @param string $calltracking_phone Подменный номер
     *
     * @return $this
     */
    public function setCalltrackingPhone($calltracking_phone)
    {
        $this->container['calltracking_phone'] = $calltracking_phone;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Дата звонка
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets datetime
     *
     * @return \DateTime
     */
    public function getDatetime()
    {
        return $this->container['datetime'];
    }

    /**
     * Sets datetime
     *
     * @param \DateTime $datetime Дата и время звонка
     *
     * @return $this
     */
    public function setDatetime($datetime)
    {
        $this->container['datetime'] = $datetime;

        return $this;
    }

    /**
     * Gets destination_phone
     *
     * @return string
     */
    public function getDestinationPhone()
    {
        return $this->container['destination_phone'];
    }

    /**
     * Sets destination_phone
     *
     * @param string $destination_phone Входящий номер
     *
     * @return $this
     */
    public function setDestinationPhone($destination_phone)
    {
        $this->container['destination_phone'] = $destination_phone;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration Продолжительность в секундах
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets employer_id
     *
     * @return int
     */
    public function getEmployerId()
    {
        return $this->container['employer_id'];
    }

    /**
     * Sets employer_id
     *
     * @param int $employer_id ID сотрудника
     *
     * @return $this
     */
    public function setEmployerId($employer_id)
    {
        $this->container['employer_id'] = $employer_id;

        return $this;
    }

    /**
     * Gets source_phone
     *
     * @return string
     */
    public function getSourcePhone()
    {
        return $this->container['source_phone'];
    }

    /**
     * Sets source_phone
     *
     * @param string $source_phone Исходящий номер
     *
     * @return $this
     */
    public function setSourcePhone($source_phone)
    {
        $this->container['source_phone'] = $source_phone;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status `busy`: Занято   `hgup`: Сбросили   `noAnswer`: Без ответа   `success`: Успешный   `techProblem`: Техническая ошибка   `turnedOff`: Выключен   `unknown`: Неизвестно
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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


