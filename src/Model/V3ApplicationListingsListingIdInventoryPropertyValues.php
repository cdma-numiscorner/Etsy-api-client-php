<?php
/**
 * V3ApplicationListingsListingIdInventoryPropertyValues
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
 * V3ApplicationListingsListingIdInventoryPropertyValues Class Doc Comment
 *
 * @category Class
 * @package  EtsyApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class V3ApplicationListingsListingIdInventoryPropertyValues implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_v3_application_listings__listing_id__inventory_property_values';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'property_id' => 'int',
        'value_ids' => 'int[]',
        'scale_id' => 'int',
        'property_name' => 'string',
        'values' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'property_id' => null,
        'value_ids' => null,
        'scale_id' => null,
        'property_name' => null,
        'values' => null
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
        'property_id' => 'property_id',
        'value_ids' => 'value_ids',
        'scale_id' => 'scale_id',
        'property_name' => 'property_name',
        'values' => 'values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'property_id' => 'setPropertyId',
        'value_ids' => 'setValueIds',
        'scale_id' => 'setScaleId',
        'property_name' => 'setPropertyName',
        'values' => 'setValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'property_id' => 'getPropertyId',
        'value_ids' => 'getValueIds',
        'scale_id' => 'getScaleId',
        'property_name' => 'getPropertyName',
        'values' => 'getValues'
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
        $this->container['property_id'] = $data['property_id'] ?? null;
        $this->container['value_ids'] = $data['value_ids'] ?? null;
        $this->container['scale_id'] = $data['scale_id'] ?? null;
        $this->container['property_name'] = $data['property_name'] ?? null;
        $this->container['values'] = $data['values'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['property_id']) && ($this->container['property_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'property_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['scale_id']) && ($this->container['scale_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'scale_id', must be bigger than or equal to 1.";
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
     * Gets property_id
     *
     * @return int|null
     */
    public function getPropertyId()
    {
        return $this->container['property_id'];
    }

    /**
     * Sets property_id
     *
     * @param int|null $property_id property_id
     *
     * @return self
     */
    public function setPropertyId($property_id)
    {

        if (!is_null($property_id) && ($property_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $property_id when calling V3ApplicationListingsListingIdInventoryPropertyValues., must be bigger than or equal to 1.');
        }

        $this->container['property_id'] = $property_id;

        return $this;
    }

    /**
     * Gets value_ids
     *
     * @return int[]|null
     */
    public function getValueIds()
    {
        return $this->container['value_ids'];
    }

    /**
     * Sets value_ids
     *
     * @param int[]|null $value_ids value_ids
     *
     * @return self
     */
    public function setValueIds($value_ids)
    {
        $this->container['value_ids'] = $value_ids;

        return $this;
    }

    /**
     * Gets scale_id
     *
     * @return int|null
     */
    public function getScaleId()
    {
        return $this->container['scale_id'];
    }

    /**
     * Sets scale_id
     *
     * @param int|null $scale_id scale_id
     *
     * @return self
     */
    public function setScaleId($scale_id)
    {

        if (!is_null($scale_id) && ($scale_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $scale_id when calling V3ApplicationListingsListingIdInventoryPropertyValues., must be bigger than or equal to 1.');
        }

        $this->container['scale_id'] = $scale_id;

        return $this;
    }

    /**
     * Gets property_name
     *
     * @return string|null
     */
    public function getPropertyName()
    {
        return $this->container['property_name'];
    }

    /**
     * Sets property_name
     *
     * @param string|null $property_name property_name
     *
     * @return self
     */
    public function setPropertyName($property_name)
    {
        $this->container['property_name'] = $property_name;

        return $this;
    }

    /**
     * Gets values
     *
     * @return string[]|null
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param string[]|null $values values
     *
     * @return self
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

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


