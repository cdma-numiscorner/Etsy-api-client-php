<?php
/**
 * UserAddress
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  EtsyApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Etsy OpenAPI
 *
 * <div class=\"wt-text-body-01\"><p class=\"wt-pt-xs-2 wt-pb-xs-2\">Etsy's Open API provides a simple RESTful interface for various Etsy.com features. The API reference documents endpoints are meant to replace <a target=\"_blank\" class=\"wt-text-link wt-p-xs-0\" href=\"https://www.etsy.com/developers/documentation\">Etsy's current Open API</a> this year. Use of the API is subject to the <a target=\"_blank\" class=\"wt-text-link wt-p-xs-0\" href=\"https://www.etsy.com/legal/api\">API Terms of Use</a>.</p><p class=\"wt-pb-xs-5 wt-text-title-01\">If you would like to make requests to the Open API v3 endpoints, please fill out <a target=\"_blank\" class=\"wt-text-link wt-p-xs-0\" href=\"https://docs.google.com/forms/d/e/1FAIpQLSc4qzVlgjkzEkaQvpgX00xvJLjlomRoS-60G9ob_FqCfmbCrA/viewform\">the intake form</a>.</p><p class=\"wt-pb-xs-2\">The API is currently in an experimental, alpha phase meant to validate feature and functionality requirements. During this phase, endpoints may have significant design changes but developers will have an opportunity to preview endpoints and provide feedback that will help shape Etsy's Open API functionality. The alpha API design is not stable and will likely change in response to feedback but we'll communicate changes as they are made.</p><p class=\"wt-pb-xs-2\">All of the endpoints are callable, but many endpoints are currently interface stubs and will return a \"501 Not Implemented\" response code when called; the documentation for each of these stub endpoints includes an alert calling this out.</p><p class=\"wt-pb-xs-2\">If you'd like to report an issue or provide feedback on the API design, <a target=\"_blank\" class=\"wt-text-link wt-p-xs-0\" href=\"https://github.com/etsy/open-api/issues/new/choose\">please add an issue in Github</a>. You grant us a license to use your feedback as described in Etsy's primary <a target=\"_blank\" class=\"wt-text-link wt-p-xs-0\" href=\"https://www.etsy.com/legal/terms-of-use\">Terms of Use.</a></p></div>&copy; 2021 Etsy, Inc. All Rights Reserved. Use of this code is subject to Etsy's <a class='wt-text-link wt-p-xs-0' target='_blank' href='https://www.etsy.com/legal/api'>API Developer Terms of Use</a>.
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: developers@etsy.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EtsyApi\Model;

use \ArrayAccess;
use \EtsyApi\ObjectSerializer;

/**
 * UserAddress Class Doc Comment
 *
 * @category Class
 * @description Represents a user&#39;s address.
 * @package  EtsyApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class UserAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_address_id' => 'int',
        'user_id' => 'int',
        'name' => 'string',
        'first_line' => 'string',
        'second_line' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'iso_country_code' => 'string',
        'country_name' => 'string',
        'is_default_shipping_address' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'user_address_id' => null,
        'user_id' => null,
        'name' => null,
        'first_line' => null,
        'second_line' => null,
        'city' => null,
        'state' => null,
        'zip' => null,
        'iso_country_code' => null,
        'country_name' => null,
        'is_default_shipping_address' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'user_address_id' => 'user_address_id',
        'user_id' => 'user_id',
        'name' => 'name',
        'first_line' => 'first_line',
        'second_line' => 'second_line',
        'city' => 'city',
        'state' => 'state',
        'zip' => 'zip',
        'iso_country_code' => 'iso_country_code',
        'country_name' => 'country_name',
        'is_default_shipping_address' => 'is_default_shipping_address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_address_id' => 'setUserAddressId',
        'user_id' => 'setUserId',
        'name' => 'setName',
        'first_line' => 'setFirstLine',
        'second_line' => 'setSecondLine',
        'city' => 'setCity',
        'state' => 'setState',
        'zip' => 'setZip',
        'iso_country_code' => 'setIsoCountryCode',
        'country_name' => 'setCountryName',
        'is_default_shipping_address' => 'setIsDefaultShippingAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_address_id' => 'getUserAddressId',
        'user_id' => 'getUserId',
        'name' => 'getName',
        'first_line' => 'getFirstLine',
        'second_line' => 'getSecondLine',
        'city' => 'getCity',
        'state' => 'getState',
        'zip' => 'getZip',
        'iso_country_code' => 'getIsoCountryCode',
        'country_name' => 'getCountryName',
        'is_default_shipping_address' => 'getIsDefaultShippingAddress'
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
        $this->container['user_address_id'] = $data['user_address_id'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['first_line'] = $data['first_line'] ?? null;
        $this->container['second_line'] = $data['second_line'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['zip'] = $data['zip'] ?? null;
        $this->container['iso_country_code'] = $data['iso_country_code'] ?? null;
        $this->container['country_name'] = $data['country_name'] ?? null;
        $this->container['is_default_shipping_address'] = $data['is_default_shipping_address'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['user_address_id'] === null) {
            $invalidProperties[] = "'user_address_id' can't be null";
        }
        if (($this->container['user_address_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'user_address_id', must be bigger than or equal to 1.";
        }

        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if (($this->container['user_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'user_id', must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['first_line'] === null) {
            $invalidProperties[] = "'first_line' can't be null";
        }
        if ($this->container['second_line'] === null) {
            $invalidProperties[] = "'second_line' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['zip'] === null) {
            $invalidProperties[] = "'zip' can't be null";
        }
        if ($this->container['iso_country_code'] === null) {
            $invalidProperties[] = "'iso_country_code' can't be null";
        }
        if ($this->container['country_name'] === null) {
            $invalidProperties[] = "'country_name' can't be null";
        }
        if ($this->container['is_default_shipping_address'] === null) {
            $invalidProperties[] = "'is_default_shipping_address' can't be null";
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
     * Gets user_address_id
     *
     * @return int
     */
    public function getUserAddressId()
    {
        return $this->container['user_address_id'];
    }

    /**
     * Sets user_address_id
     *
     * @param int $user_address_id The numeric ID of the user's address.
     *
     * @return self
     */
    public function setUserAddressId($user_address_id)
    {

        if (($user_address_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $user_address_id when calling UserAddress., must be bigger than or equal to 1.');
        }

        $this->container['user_address_id'] = $user_address_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id The user's numeric ID.
     *
     * @return self
     */
    public function setUserId($user_id)
    {

        if (($user_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $user_id when calling UserAddress., must be bigger than or equal to 1.');
        }

        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The user's name for this address.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets first_line
     *
     * @return string
     */
    public function getFirstLine()
    {
        return $this->container['first_line'];
    }

    /**
     * Sets first_line
     *
     * @param string $first_line The first line of the user's address.
     *
     * @return self
     */
    public function setFirstLine($first_line)
    {
        $this->container['first_line'] = $first_line;

        return $this;
    }

    /**
     * Gets second_line
     *
     * @return string
     */
    public function getSecondLine()
    {
        return $this->container['second_line'];
    }

    /**
     * Sets second_line
     *
     * @param string $second_line The second line of the user's address.
     *
     * @return self
     */
    public function setSecondLine($second_line)
    {
        $this->container['second_line'] = $second_line;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The city field of the user's address.
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The state field of the user's address.
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip The zip code field of the user's address.
     *
     * @return self
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets iso_country_code
     *
     * @return string
     */
    public function getIsoCountryCode()
    {
        return $this->container['iso_country_code'];
    }

    /**
     * Sets iso_country_code
     *
     * @param string $iso_country_code The ISO code of the country in this address.
     *
     * @return self
     */
    public function setIsoCountryCode($iso_country_code)
    {
        $this->container['iso_country_code'] = $iso_country_code;

        return $this;
    }

    /**
     * Gets country_name
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->container['country_name'];
    }

    /**
     * Sets country_name
     *
     * @param string $country_name The name of the user's country.
     *
     * @return self
     */
    public function setCountryName($country_name)
    {
        $this->container['country_name'] = $country_name;

        return $this;
    }

    /**
     * Gets is_default_shipping_address
     *
     * @return bool
     */
    public function getIsDefaultShippingAddress()
    {
        return $this->container['is_default_shipping_address'];
    }

    /**
     * Sets is_default_shipping_address
     *
     * @param bool $is_default_shipping_address Is this the user's default shipping address.
     *
     * @return self
     */
    public function setIsDefaultShippingAddress($is_default_shipping_address)
    {
        $this->container['is_default_shipping_address'] = $is_default_shipping_address;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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

