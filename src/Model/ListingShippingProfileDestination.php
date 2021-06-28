<?php
/**
 * ListingShippingProfileDestination
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
 * ListingShippingProfileDestination Class Doc Comment
 *
 * @category Class
 * @description A ShippingProfileDestination represents a destination corresponding to its ShippingProfile
 * @package  EtsyApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ListingShippingProfileDestination implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListingShippingProfileDestination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipping_profile_destination_id' => 'int',
        'shipping_profile_id' => 'int',
        'origin_country_iso' => 'string',
        'destination_country_iso' => 'string',
        'destination_region' => 'string',
        'primary_cost' => 'Money',
        'secondary_cost' => 'Money',
        'shipping_carrier_id' => 'int',
        'mail_class' => 'string',
        'min_delivery_days' => 'int',
        'max_delivery_days' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipping_profile_destination_id' => null,
        'shipping_profile_id' => null,
        'origin_country_iso' => 'ISO 3166-1 alpha-2',
        'destination_country_iso' => null,
        'destination_region' => null,
        'primary_cost' => null,
        'secondary_cost' => null,
        'shipping_carrier_id' => null,
        'mail_class' => null,
        'min_delivery_days' => null,
        'max_delivery_days' => null
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
        'shipping_profile_destination_id' => 'shipping_profile_destination_id',
        'shipping_profile_id' => 'shipping_profile_id',
        'origin_country_iso' => 'origin_country_iso',
        'destination_country_iso' => 'destination_country_iso',
        'destination_region' => 'destination_region',
        'primary_cost' => 'primary_cost',
        'secondary_cost' => 'secondary_cost',
        'shipping_carrier_id' => 'shipping_carrier_id',
        'mail_class' => 'mail_class',
        'min_delivery_days' => 'min_delivery_days',
        'max_delivery_days' => 'max_delivery_days'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_profile_destination_id' => 'setShippingProfileDestinationId',
        'shipping_profile_id' => 'setShippingProfileId',
        'origin_country_iso' => 'setOriginCountryIso',
        'destination_country_iso' => 'setDestinationCountryIso',
        'destination_region' => 'setDestinationRegion',
        'primary_cost' => 'setPrimaryCost',
        'secondary_cost' => 'setSecondaryCost',
        'shipping_carrier_id' => 'setShippingCarrierId',
        'mail_class' => 'setMailClass',
        'min_delivery_days' => 'setMinDeliveryDays',
        'max_delivery_days' => 'setMaxDeliveryDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_profile_destination_id' => 'getShippingProfileDestinationId',
        'shipping_profile_id' => 'getShippingProfileId',
        'origin_country_iso' => 'getOriginCountryIso',
        'destination_country_iso' => 'getDestinationCountryIso',
        'destination_region' => 'getDestinationRegion',
        'primary_cost' => 'getPrimaryCost',
        'secondary_cost' => 'getSecondaryCost',
        'shipping_carrier_id' => 'getShippingCarrierId',
        'mail_class' => 'getMailClass',
        'min_delivery_days' => 'getMinDeliveryDays',
        'max_delivery_days' => 'getMaxDeliveryDays'
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

    const DESTINATION_REGION_EU = 'eu';
    const DESTINATION_REGION_NON_EU = 'non_eu';
    const DESTINATION_REGION_NONE = 'none';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDestinationRegionAllowableValues()
    {
        return [
            self::DESTINATION_REGION_EU,
            self::DESTINATION_REGION_NON_EU,
            self::DESTINATION_REGION_NONE,
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
        $this->container['shipping_profile_destination_id'] = $data['shipping_profile_destination_id'] ?? null;
        $this->container['shipping_profile_id'] = $data['shipping_profile_id'] ?? null;
        $this->container['origin_country_iso'] = $data['origin_country_iso'] ?? null;
        $this->container['destination_country_iso'] = $data['destination_country_iso'] ?? null;
        $this->container['destination_region'] = $data['destination_region'] ?? null;
        $this->container['primary_cost'] = $data['primary_cost'] ?? null;
        $this->container['secondary_cost'] = $data['secondary_cost'] ?? null;
        $this->container['shipping_carrier_id'] = $data['shipping_carrier_id'] ?? null;
        $this->container['mail_class'] = $data['mail_class'] ?? null;
        $this->container['min_delivery_days'] = $data['min_delivery_days'] ?? null;
        $this->container['max_delivery_days'] = $data['max_delivery_days'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipping_profile_destination_id'] === null) {
            $invalidProperties[] = "'shipping_profile_destination_id' can't be null";
        }
        if (($this->container['shipping_profile_destination_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'shipping_profile_destination_id', must be bigger than or equal to 1.";
        }

        if ($this->container['shipping_profile_id'] === null) {
            $invalidProperties[] = "'shipping_profile_id' can't be null";
        }
        if (($this->container['shipping_profile_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'shipping_profile_id', must be bigger than or equal to 1.";
        }

        if ($this->container['origin_country_iso'] === null) {
            $invalidProperties[] = "'origin_country_iso' can't be null";
        }
        if ($this->container['destination_country_iso'] === null) {
            $invalidProperties[] = "'destination_country_iso' can't be null";
        }
        if ($this->container['destination_region'] === null) {
            $invalidProperties[] = "'destination_region' can't be null";
        }
        $allowedValues = $this->getDestinationRegionAllowableValues();
        if (!is_null($this->container['destination_region']) && !in_array($this->container['destination_region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'destination_region', must be one of '%s'",
                $this->container['destination_region'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['primary_cost'] === null) {
            $invalidProperties[] = "'primary_cost' can't be null";
        }
        if ($this->container['secondary_cost'] === null) {
            $invalidProperties[] = "'secondary_cost' can't be null";
        }
        if ($this->container['shipping_carrier_id'] === null) {
            $invalidProperties[] = "'shipping_carrier_id' can't be null";
        }
        if ($this->container['mail_class'] === null) {
            $invalidProperties[] = "'mail_class' can't be null";
        }
        if ($this->container['min_delivery_days'] === null) {
            $invalidProperties[] = "'min_delivery_days' can't be null";
        }
        if (($this->container['min_delivery_days'] > 45)) {
            $invalidProperties[] = "invalid value for 'min_delivery_days', must be smaller than or equal to 45.";
        }

        if (($this->container['min_delivery_days'] < 1)) {
            $invalidProperties[] = "invalid value for 'min_delivery_days', must be bigger than or equal to 1.";
        }

        if ($this->container['max_delivery_days'] === null) {
            $invalidProperties[] = "'max_delivery_days' can't be null";
        }
        if (($this->container['max_delivery_days'] > 45)) {
            $invalidProperties[] = "invalid value for 'max_delivery_days', must be smaller than or equal to 45.";
        }

        if (($this->container['max_delivery_days'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_delivery_days', must be bigger than or equal to 1.";
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
     * Gets shipping_profile_destination_id
     *
     * @return int
     */
    public function getShippingProfileDestinationId()
    {
        return $this->container['shipping_profile_destination_id'];
    }

    /**
     * Sets shipping_profile_destination_id
     *
     * @param int $shipping_profile_destination_id The numeric ID of this shipping profile destination.
     *
     * @return self
     */
    public function setShippingProfileDestinationId($shipping_profile_destination_id)
    {

        if (($shipping_profile_destination_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $shipping_profile_destination_id when calling ListingShippingProfileDestination., must be bigger than or equal to 1.');
        }

        $this->container['shipping_profile_destination_id'] = $shipping_profile_destination_id;

        return $this;
    }

    /**
     * Gets shipping_profile_id
     *
     * @return int
     */
    public function getShippingProfileId()
    {
        return $this->container['shipping_profile_id'];
    }

    /**
     * Sets shipping_profile_id
     *
     * @param int $shipping_profile_id The numeric ID of the profile this destination belongs to.
     *
     * @return self
     */
    public function setShippingProfileId($shipping_profile_id)
    {

        if (($shipping_profile_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $shipping_profile_id when calling ListingShippingProfileDestination., must be bigger than or equal to 1.');
        }

        $this->container['shipping_profile_id'] = $shipping_profile_id;

        return $this;
    }

    /**
     * Gets origin_country_iso
     *
     * @return string
     */
    public function getOriginCountryIso()
    {
        return $this->container['origin_country_iso'];
    }

    /**
     * Sets origin_country_iso
     *
     * @param string $origin_country_iso The ISO code of the country from which the listing ships.
     *
     * @return self
     */
    public function setOriginCountryIso($origin_country_iso)
    {
        $this->container['origin_country_iso'] = $origin_country_iso;

        return $this;
    }

    /**
     * Gets destination_country_iso
     *
     * @return string
     */
    public function getDestinationCountryIso()
    {
        return $this->container['destination_country_iso'];
    }

    /**
     * Sets destination_country_iso
     *
     * @param string $destination_country_iso The ISO code of the country to which the listing ships (optional). If missing, these fees apply to all destinations.
     *
     * @return self
     */
    public function setDestinationCountryIso($destination_country_iso)
    {
        $this->container['destination_country_iso'] = $destination_country_iso;

        return $this;
    }

    /**
     * Gets destination_region
     *
     * @return string
     */
    public function getDestinationRegion()
    {
        return $this->container['destination_region'];
    }

    /**
     * Sets destination_region
     *
     * @param string $destination_region The code of the region to which the listing ships. A region represents a set of countries.
     *
     * @return self
     */
    public function setDestinationRegion($destination_region)
    {
        $allowedValues = $this->getDestinationRegionAllowableValues();
        if (!in_array($destination_region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'destination_region', must be one of '%s'",
                    $destination_region,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['destination_region'] = $destination_region;

        return $this;
    }

    /**
     * Gets primary_cost
     *
     * @return Money
     */
    public function getPrimaryCost()
    {
        return $this->container['primary_cost'];
    }

    /**
     * Sets primary_cost
     *
     * @param Money $primary_cost The shipping fee for this item, if shipped alone.
     *
     * @return self
     */
    public function setPrimaryCost($primary_cost)
    {
        $this->container['primary_cost'] = $primary_cost;

        return $this;
    }

    /**
     * Gets secondary_cost
     *
     * @return Money
     */
    public function getSecondaryCost()
    {
        return $this->container['secondary_cost'];
    }

    /**
     * Sets secondary_cost
     *
     * @param Money $secondary_cost The shipping fee for this item, if shipped with another item.
     *
     * @return self
     */
    public function setSecondaryCost($secondary_cost)
    {
        $this->container['secondary_cost'] = $secondary_cost;

        return $this;
    }

    /**
     * Gets shipping_carrier_id
     *
     * @return int
     */
    public function getShippingCarrierId()
    {
        return $this->container['shipping_carrier_id'];
    }

    /**
     * Sets shipping_carrier_id
     *
     * @param int $shipping_carrier_id The shipping carrier id used for this shipping profile destination.
     *
     * @return self
     */
    public function setShippingCarrierId($shipping_carrier_id)
    {
        $this->container['shipping_carrier_id'] = $shipping_carrier_id;

        return $this;
    }

    /**
     * Gets mail_class
     *
     * @return string
     */
    public function getMailClass()
    {
        return $this->container['mail_class'];
    }

    /**
     * Sets mail_class
     *
     * @param string $mail_class The shipping carrier's mail class used for this shipping profile destination.
     *
     * @return self
     */
    public function setMailClass($mail_class)
    {
        $this->container['mail_class'] = $mail_class;

        return $this;
    }

    /**
     * Gets min_delivery_days
     *
     * @return int
     */
    public function getMinDeliveryDays()
    {
        return $this->container['min_delivery_days'];
    }

    /**
     * Sets min_delivery_days
     *
     * @param int $min_delivery_days The minimum transit time set for this shipping profile destination.
     *
     * @return self
     */
    public function setMinDeliveryDays($min_delivery_days)
    {

        if (($min_delivery_days > 45)) {
            throw new \InvalidArgumentException('invalid value for $min_delivery_days when calling ListingShippingProfileDestination., must be smaller than or equal to 45.');
        }
        if (($min_delivery_days < 1)) {
            throw new \InvalidArgumentException('invalid value for $min_delivery_days when calling ListingShippingProfileDestination., must be bigger than or equal to 1.');
        }

        $this->container['min_delivery_days'] = $min_delivery_days;

        return $this;
    }

    /**
     * Gets max_delivery_days
     *
     * @return int
     */
    public function getMaxDeliveryDays()
    {
        return $this->container['max_delivery_days'];
    }

    /**
     * Sets max_delivery_days
     *
     * @param int $max_delivery_days The minimum transit time set for this shipping profile destination.
     *
     * @return self
     */
    public function setMaxDeliveryDays($max_delivery_days)
    {

        if (($max_delivery_days > 45)) {
            throw new \InvalidArgumentException('invalid value for $max_delivery_days when calling ListingShippingProfileDestination., must be smaller than or equal to 45.');
        }
        if (($max_delivery_days < 1)) {
            throw new \InvalidArgumentException('invalid value for $max_delivery_days when calling ListingShippingProfileDestination., must be bigger than or equal to 1.');
        }

        $this->container['max_delivery_days'] = $max_delivery_days;

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


