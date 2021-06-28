<?php
/**
 * ShopReceiptShipment
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
 * ShopReceiptShipment Class Doc Comment
 *
 * @category Class
 * @description The record of one shipment event for a ShopReceipt. A receipt may have many ShopReceiptShipment records.
 * @package  EtsyApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShopReceiptShipment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShopReceiptShipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'receipt_shipping_id' => 'int',
        'shipment_notification_timestamp' => 'int',
        'carrier_name' => 'string',
        'tracking_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'receipt_shipping_id' => null,
        'shipment_notification_timestamp' => null,
        'carrier_name' => null,
        'tracking_code' => null
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
        'receipt_shipping_id' => 'receipt_shipping_id',
        'shipment_notification_timestamp' => 'shipment_notification_timestamp',
        'carrier_name' => 'carrier_name',
        'tracking_code' => 'tracking_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'receipt_shipping_id' => 'setReceiptShippingId',
        'shipment_notification_timestamp' => 'setShipmentNotificationTimestamp',
        'carrier_name' => 'setCarrierName',
        'tracking_code' => 'setTrackingCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'receipt_shipping_id' => 'getReceiptShippingId',
        'shipment_notification_timestamp' => 'getShipmentNotificationTimestamp',
        'carrier_name' => 'getCarrierName',
        'tracking_code' => 'getTrackingCode'
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
        $this->container['receipt_shipping_id'] = $data['receipt_shipping_id'] ?? null;
        $this->container['shipment_notification_timestamp'] = $data['shipment_notification_timestamp'] ?? null;
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['tracking_code'] = $data['tracking_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['receipt_shipping_id'] === null) {
            $invalidProperties[] = "'receipt_shipping_id' can't be null";
        }
        if (($this->container['receipt_shipping_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'receipt_shipping_id', must be bigger than or equal to 1.";
        }

        if ($this->container['shipment_notification_timestamp'] === null) {
            $invalidProperties[] = "'shipment_notification_timestamp' can't be null";
        }
        if (($this->container['shipment_notification_timestamp'] < 946684800)) {
            $invalidProperties[] = "invalid value for 'shipment_notification_timestamp', must be bigger than or equal to 946684800.";
        }

        if ($this->container['carrier_name'] === null) {
            $invalidProperties[] = "'carrier_name' can't be null";
        }
        if ($this->container['tracking_code'] === null) {
            $invalidProperties[] = "'tracking_code' can't be null";
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
     * Gets receipt_shipping_id
     *
     * @return int
     */
    public function getReceiptShippingId()
    {
        return $this->container['receipt_shipping_id'];
    }

    /**
     * Sets receipt_shipping_id
     *
     * @param int $receipt_shipping_id The unique numeric ID of a Shop Receipt Shipment record.
     *
     * @return self
     */
    public function setReceiptShippingId($receipt_shipping_id)
    {

        if (($receipt_shipping_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $receipt_shipping_id when calling ShopReceiptShipment., must be bigger than or equal to 1.');
        }

        $this->container['receipt_shipping_id'] = $receipt_shipping_id;

        return $this;
    }

    /**
     * Gets shipment_notification_timestamp
     *
     * @return int
     */
    public function getShipmentNotificationTimestamp()
    {
        return $this->container['shipment_notification_timestamp'];
    }

    /**
     * Sets shipment_notification_timestamp
     *
     * @param int $shipment_notification_timestamp The time at which Etsy notified the buyer of the shipment event, in epoch seconds.
     *
     * @return self
     */
    public function setShipmentNotificationTimestamp($shipment_notification_timestamp)
    {

        if (($shipment_notification_timestamp < 946684800)) {
            throw new \InvalidArgumentException('invalid value for $shipment_notification_timestamp when calling ShopReceiptShipment., must be bigger than or equal to 946684800.');
        }

        $this->container['shipment_notification_timestamp'] = $shipment_notification_timestamp;

        return $this;
    }

    /**
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name The name string for the carrier/company responsible for delivering the shipment.
     *
     * @return self
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets tracking_code
     *
     * @return string
     */
    public function getTrackingCode()
    {
        return $this->container['tracking_code'];
    }

    /**
     * Sets tracking_code
     *
     * @param string $tracking_code The tracking code string provided by the carrier/company for the shipment.
     *
     * @return self
     */
    public function setTrackingCode($tracking_code)
    {
        $this->container['tracking_code'] = $tracking_code;

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


