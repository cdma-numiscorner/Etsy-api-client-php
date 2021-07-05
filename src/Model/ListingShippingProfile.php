<?php
/**
 * ListingShippingProfile
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
 * ListingShippingProfile Class Doc Comment
 *
 * @category Class
 * @description Represents a profile used to set a listing&#39;s shipping information. Please note that it&#39;s not possible to create calculated shipping templates via the API. However, you can associate calculated shipping profiles created from Shop Manager with listings using the API.
 * @package  EtsyApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ListingShippingProfile implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListingShippingProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipping_profile_id' => 'int',
        'title' => 'string',
        'user_id' => 'int',
        'min_processing_days' => 'int',
        'max_processing_days' => 'int',
        'processing_days_display_label' => 'string',
        'origin_country_iso' => 'string',
        'is_deleted' => 'bool',
        'shipping_profile_destinations' => 'ListingShippingProfileDestination[]',
        'shipping_profile_upgrades' => 'ListingShippingProfileUpgrade[]',
        'origin_postal_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipping_profile_id' => null,
        'title' => null,
        'user_id' => null,
        'min_processing_days' => null,
        'max_processing_days' => null,
        'processing_days_display_label' => null,
        'origin_country_iso' => 'ISO 3166-1 alpha-2',
        'is_deleted' => null,
        'shipping_profile_destinations' => null,
        'shipping_profile_upgrades' => null,
        'origin_postal_code' => null
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
        'shipping_profile_id' => 'shipping_profile_id',
        'title' => 'title',
        'user_id' => 'user_id',
        'min_processing_days' => 'min_processing_days',
        'max_processing_days' => 'max_processing_days',
        'processing_days_display_label' => 'processing_days_display_label',
        'origin_country_iso' => 'origin_country_iso',
        'is_deleted' => 'is_deleted',
        'shipping_profile_destinations' => 'shipping_profile_destinations',
        'shipping_profile_upgrades' => 'shipping_profile_upgrades',
        'origin_postal_code' => 'origin_postal_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_profile_id' => 'setShippingProfileId',
        'title' => 'setTitle',
        'user_id' => 'setUserId',
        'min_processing_days' => 'setMinProcessingDays',
        'max_processing_days' => 'setMaxProcessingDays',
        'processing_days_display_label' => 'setProcessingDaysDisplayLabel',
        'origin_country_iso' => 'setOriginCountryIso',
        'is_deleted' => 'setIsDeleted',
        'shipping_profile_destinations' => 'setShippingProfileDestinations',
        'shipping_profile_upgrades' => 'setShippingProfileUpgrades',
        'origin_postal_code' => 'setOriginPostalCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_profile_id' => 'getShippingProfileId',
        'title' => 'getTitle',
        'user_id' => 'getUserId',
        'min_processing_days' => 'getMinProcessingDays',
        'max_processing_days' => 'getMaxProcessingDays',
        'processing_days_display_label' => 'getProcessingDaysDisplayLabel',
        'origin_country_iso' => 'getOriginCountryIso',
        'is_deleted' => 'getIsDeleted',
        'shipping_profile_destinations' => 'getShippingProfileDestinations',
        'shipping_profile_upgrades' => 'getShippingProfileUpgrades',
        'origin_postal_code' => 'getOriginPostalCode'
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
        $this->container['shipping_profile_id'] = $data['shipping_profile_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['min_processing_days'] = $data['min_processing_days'] ?? null;
        $this->container['max_processing_days'] = $data['max_processing_days'] ?? null;
        $this->container['processing_days_display_label'] = $data['processing_days_display_label'] ?? null;
        $this->container['origin_country_iso'] = $data['origin_country_iso'] ?? null;
        $this->container['is_deleted'] = $data['is_deleted'] ?? null;
        $this->container['shipping_profile_destinations'] = $data['shipping_profile_destinations'] ?? null;
        $this->container['shipping_profile_upgrades'] = $data['shipping_profile_upgrades'] ?? null;
        $this->container['origin_postal_code'] = $data['origin_postal_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipping_profile_id'] === null) {
            $invalidProperties[] = "'shipping_profile_id' can't be null";
        }
        if (($this->container['shipping_profile_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'shipping_profile_id', must be bigger than or equal to 1.";
        }

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if (($this->container['user_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'user_id', must be bigger than or equal to 1.";
        }

        if ($this->container['min_processing_days'] === null) {
            $invalidProperties[] = "'min_processing_days' can't be null";
        }
        if (($this->container['min_processing_days'] < 0)) {
            $invalidProperties[] = "invalid value for 'min_processing_days', must be bigger than or equal to 0.";
        }

        if ($this->container['max_processing_days'] === null) {
            $invalidProperties[] = "'max_processing_days' can't be null";
        }
        if (($this->container['max_processing_days'] < 0)) {
            $invalidProperties[] = "invalid value for 'max_processing_days', must be bigger than or equal to 0.";
        }

        if ($this->container['processing_days_display_label'] === null) {
            $invalidProperties[] = "'processing_days_display_label' can't be null";
        }
        if ($this->container['origin_country_iso'] === null) {
            $invalidProperties[] = "'origin_country_iso' can't be null";
        }
        if ($this->container['is_deleted'] === null) {
            $invalidProperties[] = "'is_deleted' can't be null";
        }
        if ($this->container['shipping_profile_destinations'] === null) {
            $invalidProperties[] = "'shipping_profile_destinations' can't be null";
        }
        if ($this->container['shipping_profile_upgrades'] === null) {
            $invalidProperties[] = "'shipping_profile_upgrades' can't be null";
        }
        if ($this->container['origin_postal_code'] === null) {
            $invalidProperties[] = "'origin_postal_code' can't be null";
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
     * @param int $shipping_profile_id The numeric ID of the shipping profile.
     *
     * @return self
     */
    public function setShippingProfileId($shipping_profile_id)
    {

        if (($shipping_profile_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $shipping_profile_id when calling ListingShippingProfile., must be bigger than or equal to 1.');
        }

        $this->container['shipping_profile_id'] = $shipping_profile_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The name string of this shipping profile.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param int $user_id The numeric ID for the [user](/documentation/reference#tag/User) who owns the shipping profile.
     *
     * @return self
     */
    public function setUserId($user_id)
    {

        if (($user_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $user_id when calling ListingShippingProfile., must be bigger than or equal to 1.');
        }

        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets min_processing_days
     *
     * @return int
     */
    public function getMinProcessingDays()
    {
        return $this->container['min_processing_days'];
    }

    /**
     * Sets min_processing_days
     *
     * @param int $min_processing_days The minimum number of days for processing the listing.
     *
     * @return self
     */
    public function setMinProcessingDays($min_processing_days)
    {

        if (($min_processing_days < 0)) {
            throw new \InvalidArgumentException('invalid value for $min_processing_days when calling ListingShippingProfile., must be bigger than or equal to 0.');
        }

        $this->container['min_processing_days'] = $min_processing_days;

        return $this;
    }

    /**
     * Gets max_processing_days
     *
     * @return int
     */
    public function getMaxProcessingDays()
    {
        return $this->container['max_processing_days'];
    }

    /**
     * Sets max_processing_days
     *
     * @param int $max_processing_days The maximum number of days for processing the listing.
     *
     * @return self
     */
    public function setMaxProcessingDays($max_processing_days)
    {

        if (($max_processing_days < 0)) {
            throw new \InvalidArgumentException('invalid value for $max_processing_days when calling ListingShippingProfile., must be bigger than or equal to 0.');
        }

        $this->container['max_processing_days'] = $max_processing_days;

        return $this;
    }

    /**
     * Gets processing_days_display_label
     *
     * @return string
     */
    public function getProcessingDaysDisplayLabel()
    {
        return $this->container['processing_days_display_label'];
    }

    /**
     * Sets processing_days_display_label
     *
     * @param string $processing_days_display_label Translated display label string for processing days.
     *
     * @return self
     */
    public function setProcessingDaysDisplayLabel($processing_days_display_label)
    {
        $this->container['processing_days_display_label'] = $processing_days_display_label;

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
     * Gets is_deleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool $is_deleted When true, someone deleted this shipping profile.
     *
     * @return self
     */
    public function setIsDeleted($is_deleted)
    {
        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }

    /**
     * Gets shipping_profile_destinations
     *
     * @return ListingShippingProfileDestination[]
     */
    public function getShippingProfileDestinations()
    {
        return $this->container['shipping_profile_destinations'];
    }

    /**
     * Sets shipping_profile_destinations
     *
     * @param ListingShippingProfileDestination[] $shipping_profile_destinations A list of [shipping profile destinations](/documentation/reference#operation/createListingShippingProfileDestination) available for this shipping profile.
     *
     * @return self
     */
    public function setShippingProfileDestinations($shipping_profile_destinations)
    {
        $this->container['shipping_profile_destinations'] = $shipping_profile_destinations;

        return $this;
    }

    /**
     * Gets shipping_profile_upgrades
     *
     * @return ListingShippingProfileUpgrade[]
     */
    public function getShippingProfileUpgrades()
    {
        return $this->container['shipping_profile_upgrades'];
    }

    /**
     * Sets shipping_profile_upgrades
     *
     * @param ListingShippingProfileUpgrade[] $shipping_profile_upgrades A list of [shipping profile upgrades](/documentation/reference#operation/createListingShippingProfileUpgrade) available for this shipping profile.
     *
     * @return self
     */
    public function setShippingProfileUpgrades($shipping_profile_upgrades)
    {
        $this->container['shipping_profile_upgrades'] = $shipping_profile_upgrades;

        return $this;
    }

    /**
     * Gets origin_postal_code
     *
     * @return string
     */
    public function getOriginPostalCode()
    {
        return $this->container['origin_postal_code'];
    }

    /**
     * Sets origin_postal_code
     *
     * @param string $origin_postal_code The postal code string (not necessarily a number) for the location from which the listing ships.
     *
     * @return self
     */
    public function setOriginPostalCode($origin_postal_code)
    {
        $this->container['origin_postal_code'] = $origin_postal_code;

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

