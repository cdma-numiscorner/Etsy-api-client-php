<?php
/**
 * TransactionReview
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
 * TransactionReview Class Doc Comment
 *
 * @category Class
 * @description A transaction review record left by a User.
 * @package  EtsyApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TransactionReview implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionReview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shop_id' => 'int',
        'listing_id' => 'int',
        'receipt_id' => 'int',
        'transaction_id' => 'int',
        'buyer_user_id' => 'int',
        'rating' => 'int',
        'review' => 'string',
        'language' => 'string',
        'image_url_fullxfull' => 'string',
        'create_timestamp' => 'int',
        'update_timestamp' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shop_id' => null,
        'listing_id' => null,
        'receipt_id' => null,
        'transaction_id' => null,
        'buyer_user_id' => null,
        'rating' => null,
        'review' => null,
        'language' => null,
        'image_url_fullxfull' => null,
        'create_timestamp' => null,
        'update_timestamp' => null
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
        'shop_id' => 'shop_id',
        'listing_id' => 'listing_id',
        'receipt_id' => 'receipt_id',
        'transaction_id' => 'transaction_id',
        'buyer_user_id' => 'buyer_user_id',
        'rating' => 'rating',
        'review' => 'review',
        'language' => 'language',
        'image_url_fullxfull' => 'image_url_fullxfull',
        'create_timestamp' => 'create_timestamp',
        'update_timestamp' => 'update_timestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shop_id' => 'setShopId',
        'listing_id' => 'setListingId',
        'receipt_id' => 'setReceiptId',
        'transaction_id' => 'setTransactionId',
        'buyer_user_id' => 'setBuyerUserId',
        'rating' => 'setRating',
        'review' => 'setReview',
        'language' => 'setLanguage',
        'image_url_fullxfull' => 'setImageUrlFullxfull',
        'create_timestamp' => 'setCreateTimestamp',
        'update_timestamp' => 'setUpdateTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shop_id' => 'getShopId',
        'listing_id' => 'getListingId',
        'receipt_id' => 'getReceiptId',
        'transaction_id' => 'getTransactionId',
        'buyer_user_id' => 'getBuyerUserId',
        'rating' => 'getRating',
        'review' => 'getReview',
        'language' => 'getLanguage',
        'image_url_fullxfull' => 'getImageUrlFullxfull',
        'create_timestamp' => 'getCreateTimestamp',
        'update_timestamp' => 'getUpdateTimestamp'
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
        $this->container['shop_id'] = $data['shop_id'] ?? null;
        $this->container['listing_id'] = $data['listing_id'] ?? null;
        $this->container['receipt_id'] = $data['receipt_id'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['buyer_user_id'] = $data['buyer_user_id'] ?? null;
        $this->container['rating'] = $data['rating'] ?? null;
        $this->container['review'] = $data['review'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['image_url_fullxfull'] = $data['image_url_fullxfull'] ?? null;
        $this->container['create_timestamp'] = $data['create_timestamp'] ?? null;
        $this->container['update_timestamp'] = $data['update_timestamp'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shop_id'] === null) {
            $invalidProperties[] = "'shop_id' can't be null";
        }
        if (($this->container['shop_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'shop_id', must be bigger than or equal to 1.";
        }

        if ($this->container['listing_id'] === null) {
            $invalidProperties[] = "'listing_id' can't be null";
        }
        if (($this->container['listing_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'listing_id', must be bigger than or equal to 1.";
        }

        if ($this->container['receipt_id'] === null) {
            $invalidProperties[] = "'receipt_id' can't be null";
        }
        if (($this->container['receipt_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'receipt_id', must be bigger than or equal to 1.";
        }

        if ($this->container['transaction_id'] === null) {
            $invalidProperties[] = "'transaction_id' can't be null";
        }
        if (($this->container['transaction_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'transaction_id', must be bigger than or equal to 1.";
        }

        if ($this->container['buyer_user_id'] === null) {
            $invalidProperties[] = "'buyer_user_id' can't be null";
        }
        if (($this->container['buyer_user_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'buyer_user_id', must be bigger than or equal to 1.";
        }

        if ($this->container['rating'] === null) {
            $invalidProperties[] = "'rating' can't be null";
        }
        if (($this->container['rating'] < 0)) {
            $invalidProperties[] = "invalid value for 'rating', must be bigger than or equal to 0.";
        }

        if ($this->container['review'] === null) {
            $invalidProperties[] = "'review' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['image_url_fullxfull'] === null) {
            $invalidProperties[] = "'image_url_fullxfull' can't be null";
        }
        if ($this->container['create_timestamp'] === null) {
            $invalidProperties[] = "'create_timestamp' can't be null";
        }
        if (($this->container['create_timestamp'] < 946684800)) {
            $invalidProperties[] = "invalid value for 'create_timestamp', must be bigger than or equal to 946684800.";
        }

        if ($this->container['update_timestamp'] === null) {
            $invalidProperties[] = "'update_timestamp' can't be null";
        }
        if (($this->container['update_timestamp'] < 946684800)) {
            $invalidProperties[] = "invalid value for 'update_timestamp', must be bigger than or equal to 946684800.";
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
     * Gets shop_id
     *
     * @return int
     */
    public function getShopId()
    {
        return $this->container['shop_id'];
    }

    /**
     * Sets shop_id
     *
     * @param int $shop_id The shop's numeric ID.
     *
     * @return self
     */
    public function setShopId($shop_id)
    {

        if (($shop_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $shop_id when calling TransactionReview., must be bigger than or equal to 1.');
        }

        $this->container['shop_id'] = $shop_id;

        return $this;
    }

    /**
     * Gets listing_id
     *
     * @return int
     */
    public function getListingId()
    {
        return $this->container['listing_id'];
    }

    /**
     * Sets listing_id
     *
     * @param int $listing_id The ID of the ShopListing that the TransactionReview belongs to.
     *
     * @return self
     */
    public function setListingId($listing_id)
    {

        if (($listing_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $listing_id when calling TransactionReview., must be bigger than or equal to 1.');
        }

        $this->container['listing_id'] = $listing_id;

        return $this;
    }

    /**
     * Gets receipt_id
     *
     * @return int
     */
    public function getReceiptId()
    {
        return $this->container['receipt_id'];
    }

    /**
     * Sets receipt_id
     *
     * @param int $receipt_id The ID of the ShopReceipt that the TransactionReview belongs to.
     *
     * @return self
     */
    public function setReceiptId($receipt_id)
    {

        if (($receipt_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $receipt_id when calling TransactionReview., must be bigger than or equal to 1.');
        }

        $this->container['receipt_id'] = $receipt_id;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return int
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param int $transaction_id The ID of the ShopReceiptTransaction that the TransactionReview belongs to.
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {

        if (($transaction_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $transaction_id when calling TransactionReview., must be bigger than or equal to 1.');
        }

        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets buyer_user_id
     *
     * @return int
     */
    public function getBuyerUserId()
    {
        return $this->container['buyer_user_id'];
    }

    /**
     * Sets buyer_user_id
     *
     * @param int $buyer_user_id The numeric ID of the user who was the buyer in this transaction. Note: This field may be absent, depending on the buyer's privacy settings.
     *
     * @return self
     */
    public function setBuyerUserId($buyer_user_id)
    {

        if (($buyer_user_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $buyer_user_id when calling TransactionReview., must be bigger than or equal to 1.');
        }

        $this->container['buyer_user_id'] = $buyer_user_id;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param int $rating Rating value on scale from 1 to 5
     *
     * @return self
     */
    public function setRating($rating)
    {

        if (($rating < 0)) {
            throw new \InvalidArgumentException('invalid value for $rating when calling TransactionReview., must be bigger than or equal to 0.');
        }

        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets review
     *
     * @return string
     */
    public function getReview()
    {
        return $this->container['review'];
    }

    /**
     * Sets review
     *
     * @param string $review A message left by the author, explaining the feedback.
     *
     * @return self
     */
    public function setReview($review)
    {
        $this->container['review'] = $review;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language The language of the TransactionReview
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets image_url_fullxfull
     *
     * @return string
     */
    public function getImageUrlFullxfull()
    {
        return $this->container['image_url_fullxfull'];
    }

    /**
     * Sets image_url_fullxfull
     *
     * @param string $image_url_fullxfull The url to a photo provided with the feedback, dimensions fullxfull. Note: This field may be absent, depending on the buyer's privacy settings.
     *
     * @return self
     */
    public function setImageUrlFullxfull($image_url_fullxfull)
    {
        $this->container['image_url_fullxfull'] = $image_url_fullxfull;

        return $this;
    }

    /**
     * Gets create_timestamp
     *
     * @return int
     */
    public function getCreateTimestamp()
    {
        return $this->container['create_timestamp'];
    }

    /**
     * Sets create_timestamp
     *
     * @param int $create_timestamp The date and time the TransactionReview was created in epoch seconds.
     *
     * @return self
     */
    public function setCreateTimestamp($create_timestamp)
    {

        if (($create_timestamp < 946684800)) {
            throw new \InvalidArgumentException('invalid value for $create_timestamp when calling TransactionReview., must be bigger than or equal to 946684800.');
        }

        $this->container['create_timestamp'] = $create_timestamp;

        return $this;
    }

    /**
     * Gets update_timestamp
     *
     * @return int
     */
    public function getUpdateTimestamp()
    {
        return $this->container['update_timestamp'];
    }

    /**
     * Sets update_timestamp
     *
     * @param int $update_timestamp The date and time the TransactionReview was updated in epoch seconds.
     *
     * @return self
     */
    public function setUpdateTimestamp($update_timestamp)
    {

        if (($update_timestamp < 946684800)) {
            throw new \InvalidArgumentException('invalid value for $update_timestamp when calling TransactionReview., must be bigger than or equal to 946684800.');
        }

        $this->container['update_timestamp'] = $update_timestamp;

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


