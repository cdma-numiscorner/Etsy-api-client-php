<?php
/**
 * ShopReceiptTransaction
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
 * ShopReceiptTransaction Class Doc Comment
 *
 * @category Class
 * @description ShopReceiptTransaction objects associated to a ShopReceipt. One ShopReceiptTransaction per listing purchased in a ShopReceipt order.
 * @package  EtsyApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShopReceiptTransaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShopReceiptTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction_id' => 'int',
        'title' => 'string',
        'description' => 'string',
        'seller_user_id' => 'int',
        'buyer_user_id' => 'int',
        'create_timestamp' => 'int',
        'paid_timestamp' => 'int',
        'shipped_timestamp' => 'int',
        'quantity' => 'int',
        'listing_image_id' => 'int',
        'receipt_id' => 'int',
        'is_digital' => 'bool',
        'file_data' => 'string',
        'listing_id' => 'int',
        'transaction_type' => 'string',
        'product_id' => 'int',
        'price' => 'Money',
        'shipping_cost' => 'Money'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transaction_id' => null,
        'title' => null,
        'description' => null,
        'seller_user_id' => null,
        'buyer_user_id' => null,
        'create_timestamp' => null,
        'paid_timestamp' => null,
        'shipped_timestamp' => null,
        'quantity' => null,
        'listing_image_id' => null,
        'receipt_id' => null,
        'is_digital' => null,
        'file_data' => null,
        'listing_id' => null,
        'transaction_type' => null,
        'product_id' => null,
        'price' => null,
        'shipping_cost' => null
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
        'transaction_id' => 'transaction_id',
        'title' => 'title',
        'description' => 'description',
        'seller_user_id' => 'seller_user_id',
        'buyer_user_id' => 'buyer_user_id',
        'create_timestamp' => 'create_timestamp',
        'paid_timestamp' => 'paid_timestamp',
        'shipped_timestamp' => 'shipped_timestamp',
        'quantity' => 'quantity',
        'listing_image_id' => 'listing_image_id',
        'receipt_id' => 'receipt_id',
        'is_digital' => 'is_digital',
        'file_data' => 'file_data',
        'listing_id' => 'listing_id',
        'transaction_type' => 'transaction_type',
        'product_id' => 'product_id',
        'price' => 'price',
        'shipping_cost' => 'shipping_cost'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_id' => 'setTransactionId',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'seller_user_id' => 'setSellerUserId',
        'buyer_user_id' => 'setBuyerUserId',
        'create_timestamp' => 'setCreateTimestamp',
        'paid_timestamp' => 'setPaidTimestamp',
        'shipped_timestamp' => 'setShippedTimestamp',
        'quantity' => 'setQuantity',
        'listing_image_id' => 'setListingImageId',
        'receipt_id' => 'setReceiptId',
        'is_digital' => 'setIsDigital',
        'file_data' => 'setFileData',
        'listing_id' => 'setListingId',
        'transaction_type' => 'setTransactionType',
        'product_id' => 'setProductId',
        'price' => 'setPrice',
        'shipping_cost' => 'setShippingCost'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_id' => 'getTransactionId',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'seller_user_id' => 'getSellerUserId',
        'buyer_user_id' => 'getBuyerUserId',
        'create_timestamp' => 'getCreateTimestamp',
        'paid_timestamp' => 'getPaidTimestamp',
        'shipped_timestamp' => 'getShippedTimestamp',
        'quantity' => 'getQuantity',
        'listing_image_id' => 'getListingImageId',
        'receipt_id' => 'getReceiptId',
        'is_digital' => 'getIsDigital',
        'file_data' => 'getFileData',
        'listing_id' => 'getListingId',
        'transaction_type' => 'getTransactionType',
        'product_id' => 'getProductId',
        'price' => 'getPrice',
        'shipping_cost' => 'getShippingCost'
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
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['seller_user_id'] = $data['seller_user_id'] ?? null;
        $this->container['buyer_user_id'] = $data['buyer_user_id'] ?? null;
        $this->container['create_timestamp'] = $data['create_timestamp'] ?? null;
        $this->container['paid_timestamp'] = $data['paid_timestamp'] ?? null;
        $this->container['shipped_timestamp'] = $data['shipped_timestamp'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['listing_image_id'] = $data['listing_image_id'] ?? null;
        $this->container['receipt_id'] = $data['receipt_id'] ?? null;
        $this->container['is_digital'] = $data['is_digital'] ?? null;
        $this->container['file_data'] = $data['file_data'] ?? null;
        $this->container['listing_id'] = $data['listing_id'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['product_id'] = $data['product_id'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['shipping_cost'] = $data['shipping_cost'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transaction_id'] === null) {
            $invalidProperties[] = "'transaction_id' can't be null";
        }
        if (($this->container['transaction_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'transaction_id', must be bigger than or equal to 1.";
        }

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['seller_user_id'] === null) {
            $invalidProperties[] = "'seller_user_id' can't be null";
        }
        if (($this->container['seller_user_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'seller_user_id', must be bigger than or equal to 1.";
        }

        if ($this->container['buyer_user_id'] === null) {
            $invalidProperties[] = "'buyer_user_id' can't be null";
        }
        if (($this->container['buyer_user_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'buyer_user_id', must be bigger than or equal to 1.";
        }

        if ($this->container['create_timestamp'] === null) {
            $invalidProperties[] = "'create_timestamp' can't be null";
        }
        if (($this->container['create_timestamp'] < 946684800)) {
            $invalidProperties[] = "invalid value for 'create_timestamp', must be bigger than or equal to 946684800.";
        }

        if ($this->container['paid_timestamp'] === null) {
            $invalidProperties[] = "'paid_timestamp' can't be null";
        }
        if (($this->container['paid_timestamp'] < 946684800)) {
            $invalidProperties[] = "invalid value for 'paid_timestamp', must be bigger than or equal to 946684800.";
        }

        if ($this->container['shipped_timestamp'] === null) {
            $invalidProperties[] = "'shipped_timestamp' can't be null";
        }
        if (($this->container['shipped_timestamp'] < 946684800)) {
            $invalidProperties[] = "invalid value for 'shipped_timestamp', must be bigger than or equal to 946684800.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (($this->container['quantity'] < 0)) {
            $invalidProperties[] = "invalid value for 'quantity', must be bigger than or equal to 0.";
        }

        if ($this->container['listing_image_id'] === null) {
            $invalidProperties[] = "'listing_image_id' can't be null";
        }
        if (($this->container['listing_image_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'listing_image_id', must be bigger than or equal to 1.";
        }

        if ($this->container['receipt_id'] === null) {
            $invalidProperties[] = "'receipt_id' can't be null";
        }
        if (($this->container['receipt_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'receipt_id', must be bigger than or equal to 1.";
        }

        if ($this->container['is_digital'] === null) {
            $invalidProperties[] = "'is_digital' can't be null";
        }
        if ($this->container['file_data'] === null) {
            $invalidProperties[] = "'file_data' can't be null";
        }
        if ($this->container['listing_id'] === null) {
            $invalidProperties[] = "'listing_id' can't be null";
        }
        if (($this->container['listing_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'listing_id', must be bigger than or equal to 1.";
        }

        if ($this->container['transaction_type'] === null) {
            $invalidProperties[] = "'transaction_type' can't be null";
        }
        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if (($this->container['product_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'product_id', must be bigger than or equal to 1.";
        }

        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['shipping_cost'] === null) {
            $invalidProperties[] = "'shipping_cost' can't be null";
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
     * @param int $transaction_id The numeric ID for this transaction.
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {

        if (($transaction_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $transaction_id when calling ShopReceiptTransaction., must be bigger than or equal to 1.');
        }

        $this->container['transaction_id'] = $transaction_id;

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
     * @param string $title The title of the listing for this transaction.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description of the listing for this transaction.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets seller_user_id
     *
     * @return int
     */
    public function getSellerUserId()
    {
        return $this->container['seller_user_id'];
    }

    /**
     * Sets seller_user_id
     *
     * @param int $seller_user_id The numeric ID for the seller of this transaction.
     *
     * @return self
     */
    public function setSellerUserId($seller_user_id)
    {

        if (($seller_user_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $seller_user_id when calling ShopReceiptTransaction., must be bigger than or equal to 1.');
        }

        $this->container['seller_user_id'] = $seller_user_id;

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
     * @param int $buyer_user_id The numeric ID for the buyer of this transaction.
     *
     * @return self
     */
    public function setBuyerUserId($buyer_user_id)
    {

        if (($buyer_user_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $buyer_user_id when calling ShopReceiptTransaction., must be bigger than or equal to 1.');
        }

        $this->container['buyer_user_id'] = $buyer_user_id;

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
     * @param int $create_timestamp The date and time the transaction was created, in epoch seconds.
     *
     * @return self
     */
    public function setCreateTimestamp($create_timestamp)
    {

        if (($create_timestamp < 946684800)) {
            throw new \InvalidArgumentException('invalid value for $create_timestamp when calling ShopReceiptTransaction., must be bigger than or equal to 946684800.');
        }

        $this->container['create_timestamp'] = $create_timestamp;

        return $this;
    }

    /**
     * Gets paid_timestamp
     *
     * @return int
     */
    public function getPaidTimestamp()
    {
        return $this->container['paid_timestamp'];
    }

    /**
     * Sets paid_timestamp
     *
     * @param int $paid_timestamp The date and time the transaction was paid, in epoch seconds.
     *
     * @return self
     */
    public function setPaidTimestamp($paid_timestamp)
    {

        if (($paid_timestamp < 946684800)) {
            throw new \InvalidArgumentException('invalid value for $paid_timestamp when calling ShopReceiptTransaction., must be bigger than or equal to 946684800.');
        }

        $this->container['paid_timestamp'] = $paid_timestamp;

        return $this;
    }

    /**
     * Gets shipped_timestamp
     *
     * @return int
     */
    public function getShippedTimestamp()
    {
        return $this->container['shipped_timestamp'];
    }

    /**
     * Sets shipped_timestamp
     *
     * @param int $shipped_timestamp The date and time the transaction was shipped, in epoch seconds.
     *
     * @return self
     */
    public function setShippedTimestamp($shipped_timestamp)
    {

        if (($shipped_timestamp < 946684800)) {
            throw new \InvalidArgumentException('invalid value for $shipped_timestamp when calling ShopReceiptTransaction., must be bigger than or equal to 946684800.');
        }

        $this->container['shipped_timestamp'] = $shipped_timestamp;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity The quantity of items in this transaction.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {

        if (($quantity < 0)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling ShopReceiptTransaction., must be bigger than or equal to 0.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets listing_image_id
     *
     * @return int
     */
    public function getListingImageId()
    {
        return $this->container['listing_image_id'];
    }

    /**
     * Sets listing_image_id
     *
     * @param int $listing_image_id The numeric ID of the primary listing image for this transaction.
     *
     * @return self
     */
    public function setListingImageId($listing_image_id)
    {

        if (($listing_image_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $listing_image_id when calling ShopReceiptTransaction., must be bigger than or equal to 1.');
        }

        $this->container['listing_image_id'] = $listing_image_id;

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
     * @param int $receipt_id The numeric ID for the receipt associated to this transaction.
     *
     * @return self
     */
    public function setReceiptId($receipt_id)
    {

        if (($receipt_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $receipt_id when calling ShopReceiptTransaction., must be bigger than or equal to 1.');
        }

        $this->container['receipt_id'] = $receipt_id;

        return $this;
    }

    /**
     * Gets is_digital
     *
     * @return bool
     */
    public function getIsDigital()
    {
        return $this->container['is_digital'];
    }

    /**
     * Sets is_digital
     *
     * @param bool $is_digital True if this listing is for a digital download.
     *
     * @return self
     */
    public function setIsDigital($is_digital)
    {
        $this->container['is_digital'] = $is_digital;

        return $this;
    }

    /**
     * Gets file_data
     *
     * @return string
     */
    public function getFileData()
    {
        return $this->container['file_data'];
    }

    /**
     * Sets file_data
     *
     * @param string $file_data Written description of the files attached to this digital listing.
     *
     * @return self
     */
    public function setFileData($file_data)
    {
        $this->container['file_data'] = $file_data;

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
     * @param int $listing_id The numeric ID for this listing associated to this transaction.
     *
     * @return self
     */
    public function setListingId($listing_id)
    {

        if (($listing_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $listing_id when calling ShopReceiptTransaction., must be bigger than or equal to 1.');
        }

        $this->container['listing_id'] = $listing_id;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string $transaction_type The type of transaction, usually \"listing\"
     *
     * @return self
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int $product_id The numeric ID for the purchased ListingProduct
     *
     * @return self
     */
    public function setProductId($product_id)
    {

        if (($product_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $product_id when calling ShopReceiptTransaction., must be bigger than or equal to 1.');
        }

        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return Money
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param Money $price The price of the transaction.
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets shipping_cost
     *
     * @return Money
     */
    public function getShippingCost()
    {
        return $this->container['shipping_cost'];
    }

    /**
     * Sets shipping_cost
     *
     * @param Money $shipping_cost The shipping cost for this transaction.
     *
     * @return self
     */
    public function setShippingCost($shipping_cost)
    {
        $this->container['shipping_cost'] = $shipping_cost;

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


