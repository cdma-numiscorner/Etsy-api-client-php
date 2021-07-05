<?php
/**
 * ShopSection
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
 * ShopSection Class Doc Comment
 *
 * @category Class
 * @description A section within a user&#39;s shop.
 * @package  EtsyApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShopSection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShopSection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shop_section_id' => 'int',
        'title' => 'string',
        'rank' => 'int',
        'user_id' => 'int',
        'active_listing_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shop_section_id' => null,
        'title' => null,
        'rank' => null,
        'user_id' => null,
        'active_listing_count' => null
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
        'shop_section_id' => 'shop_section_id',
        'title' => 'title',
        'rank' => 'rank',
        'user_id' => 'user_id',
        'active_listing_count' => 'active_listing_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shop_section_id' => 'setShopSectionId',
        'title' => 'setTitle',
        'rank' => 'setRank',
        'user_id' => 'setUserId',
        'active_listing_count' => 'setActiveListingCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shop_section_id' => 'getShopSectionId',
        'title' => 'getTitle',
        'rank' => 'getRank',
        'user_id' => 'getUserId',
        'active_listing_count' => 'getActiveListingCount'
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
        $this->container['shop_section_id'] = $data['shop_section_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['rank'] = $data['rank'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['active_listing_count'] = $data['active_listing_count'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shop_section_id'] === null) {
            $invalidProperties[] = "'shop_section_id' can't be null";
        }
        if (($this->container['shop_section_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'shop_section_id', must be bigger than or equal to 1.";
        }

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['rank'] === null) {
            $invalidProperties[] = "'rank' can't be null";
        }
        if (($this->container['rank'] < 0)) {
            $invalidProperties[] = "invalid value for 'rank', must be bigger than or equal to 0.";
        }

        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if (($this->container['user_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'user_id', must be bigger than or equal to 1.";
        }

        if ($this->container['active_listing_count'] === null) {
            $invalidProperties[] = "'active_listing_count' can't be null";
        }
        if (($this->container['active_listing_count'] < 0)) {
            $invalidProperties[] = "invalid value for 'active_listing_count', must be bigger than or equal to 0.";
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
     * Gets shop_section_id
     *
     * @return int
     */
    public function getShopSectionId()
    {
        return $this->container['shop_section_id'];
    }

    /**
     * Sets shop_section_id
     *
     * @param int $shop_section_id The numeric ID of a section in a specific Etsy shop.
     *
     * @return self
     */
    public function setShopSectionId($shop_section_id)
    {

        if (($shop_section_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $shop_section_id when calling ShopSection., must be bigger than or equal to 1.');
        }

        $this->container['shop_section_id'] = $shop_section_id;

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
     * @param string $title The title string for a shop section.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return int
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int $rank The positive non-zero numeric position of this section in the section display order for a shop, with rank 1 sections appearing first.
     *
     * @return self
     */
    public function setRank($rank)
    {

        if (($rank < 0)) {
            throw new \InvalidArgumentException('invalid value for $rank when calling ShopSection., must be bigger than or equal to 0.');
        }

        $this->container['rank'] = $rank;

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
     * @param int $user_id The numeric ID of the [user](/documentation/reference#tag/User) who owns this shop section.
     *
     * @return self
     */
    public function setUserId($user_id)
    {

        if (($user_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $user_id when calling ShopSection., must be bigger than or equal to 1.');
        }

        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets active_listing_count
     *
     * @return int
     */
    public function getActiveListingCount()
    {
        return $this->container['active_listing_count'];
    }

    /**
     * Sets active_listing_count
     *
     * @param int $active_listing_count The number of active listings in one section of a specific Etsy shop.
     *
     * @return self
     */
    public function setActiveListingCount($active_listing_count)
    {

        if (($active_listing_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $active_listing_count when calling ShopSection., must be bigger than or equal to 0.');
        }

        $this->container['active_listing_count'] = $active_listing_count;

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

