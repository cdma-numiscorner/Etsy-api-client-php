<?php
/**
 * ShopListingFile
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
 * ShopListingFile Class Doc Comment
 *
 * @category Class
 * @description A file associated with a digital listing.
 * @package  EtsyApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShopListingFile implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShopListingFile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'listing_file_id' => 'int',
        'listing_id' => 'int',
        'rank' => 'int',
        'filename' => 'string',
        'filesize' => 'string',
        'size_bytes' => 'int',
        'filetype' => 'string',
        'create_timestamp' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'listing_file_id' => null,
        'listing_id' => null,
        'rank' => null,
        'filename' => null,
        'filesize' => null,
        'size_bytes' => null,
        'filetype' => null,
        'create_timestamp' => null
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
        'listing_file_id' => 'listing_file_id',
        'listing_id' => 'listing_id',
        'rank' => 'rank',
        'filename' => 'filename',
        'filesize' => 'filesize',
        'size_bytes' => 'size_bytes',
        'filetype' => 'filetype',
        'create_timestamp' => 'create_timestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'listing_file_id' => 'setListingFileId',
        'listing_id' => 'setListingId',
        'rank' => 'setRank',
        'filename' => 'setFilename',
        'filesize' => 'setFilesize',
        'size_bytes' => 'setSizeBytes',
        'filetype' => 'setFiletype',
        'create_timestamp' => 'setCreateTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'listing_file_id' => 'getListingFileId',
        'listing_id' => 'getListingId',
        'rank' => 'getRank',
        'filename' => 'getFilename',
        'filesize' => 'getFilesize',
        'size_bytes' => 'getSizeBytes',
        'filetype' => 'getFiletype',
        'create_timestamp' => 'getCreateTimestamp'
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
        $this->container['listing_file_id'] = $data['listing_file_id'] ?? null;
        $this->container['listing_id'] = $data['listing_id'] ?? null;
        $this->container['rank'] = $data['rank'] ?? null;
        $this->container['filename'] = $data['filename'] ?? null;
        $this->container['filesize'] = $data['filesize'] ?? null;
        $this->container['size_bytes'] = $data['size_bytes'] ?? null;
        $this->container['filetype'] = $data['filetype'] ?? null;
        $this->container['create_timestamp'] = $data['create_timestamp'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['listing_file_id'] === null) {
            $invalidProperties[] = "'listing_file_id' can't be null";
        }
        if (($this->container['listing_file_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'listing_file_id', must be bigger than or equal to 1.";
        }

        if ($this->container['listing_id'] === null) {
            $invalidProperties[] = "'listing_id' can't be null";
        }
        if (($this->container['listing_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'listing_id', must be bigger than or equal to 1.";
        }

        if ($this->container['rank'] === null) {
            $invalidProperties[] = "'rank' can't be null";
        }
        if (($this->container['rank'] < 0)) {
            $invalidProperties[] = "invalid value for 'rank', must be bigger than or equal to 0.";
        }

        if ($this->container['filename'] === null) {
            $invalidProperties[] = "'filename' can't be null";
        }
        if ($this->container['filesize'] === null) {
            $invalidProperties[] = "'filesize' can't be null";
        }
        if ($this->container['size_bytes'] === null) {
            $invalidProperties[] = "'size_bytes' can't be null";
        }
        if (($this->container['size_bytes'] < 0)) {
            $invalidProperties[] = "invalid value for 'size_bytes', must be bigger than or equal to 0.";
        }

        if ($this->container['filetype'] === null) {
            $invalidProperties[] = "'filetype' can't be null";
        }
        if ($this->container['create_timestamp'] === null) {
            $invalidProperties[] = "'create_timestamp' can't be null";
        }
        if (($this->container['create_timestamp'] < 946684800)) {
            $invalidProperties[] = "invalid value for 'create_timestamp', must be bigger than or equal to 946684800.";
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
     * Gets listing_file_id
     *
     * @return int
     */
    public function getListingFileId()
    {
        return $this->container['listing_file_id'];
    }

    /**
     * Sets listing_file_id
     *
     * @param int $listing_file_id The unique numeric ID of a file associated with a digital listing.
     *
     * @return self
     */
    public function setListingFileId($listing_file_id)
    {

        if (($listing_file_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $listing_file_id when calling ShopListingFile., must be bigger than or equal to 1.');
        }

        $this->container['listing_file_id'] = $listing_file_id;

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
     * @param int $listing_id The unique numeric ID for a listing in a specific [shop](/documentation/reference#tag/Shop).
     *
     * @return self
     */
    public function setListingId($listing_id)
    {

        if (($listing_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $listing_id when calling ShopListingFile., must be bigger than or equal to 1.');
        }

        $this->container['listing_id'] = $listing_id;

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
     * @param int $rank The numeric index of the display order position of this file in the listing, starting at 1.
     *
     * @return self
     */
    public function setRank($rank)
    {

        if (($rank < 0)) {
            throw new \InvalidArgumentException('invalid value for $rank when calling ShopListingFile., must be bigger than or equal to 0.');
        }

        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string $filename The file name string for a file associated with a digital listing.
     *
     * @return self
     */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets filesize
     *
     * @return string
     */
    public function getFilesize()
    {
        return $this->container['filesize'];
    }

    /**
     * Sets filesize
     *
     * @param string $filesize A human-readable format size string for the size of a file.
     *
     * @return self
     */
    public function setFilesize($filesize)
    {
        $this->container['filesize'] = $filesize;

        return $this;
    }

    /**
     * Gets size_bytes
     *
     * @return int
     */
    public function getSizeBytes()
    {
        return $this->container['size_bytes'];
    }

    /**
     * Sets size_bytes
     *
     * @param int $size_bytes A number indicating the size of a file, measured in bytes.
     *
     * @return self
     */
    public function setSizeBytes($size_bytes)
    {

        if (($size_bytes < 0)) {
            throw new \InvalidArgumentException('invalid value for $size_bytes when calling ShopListingFile., must be bigger than or equal to 0.');
        }

        $this->container['size_bytes'] = $size_bytes;

        return $this;
    }

    /**
     * Gets filetype
     *
     * @return string
     */
    public function getFiletype()
    {
        return $this->container['filetype'];
    }

    /**
     * Sets filetype
     *
     * @param string $filetype A type string indicating a file's MIME type.
     *
     * @return self
     */
    public function setFiletype($filetype)
    {
        $this->container['filetype'] = $filetype;

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
     * @param int $create_timestamp The unique numeric ID of a file associated with a digital listing.
     *
     * @return self
     */
    public function setCreateTimestamp($create_timestamp)
    {

        if (($create_timestamp < 946684800)) {
            throw new \InvalidArgumentException('invalid value for $create_timestamp when calling ShopListingFile., must be bigger than or equal to 946684800.');
        }

        $this->container['create_timestamp'] = $create_timestamp;

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


