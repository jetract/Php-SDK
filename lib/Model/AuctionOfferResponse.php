<?php
/**
 * AuctionOfferResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * JETRACT
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.9.8
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
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
 * AuctionOfferResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuctionOfferResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuctionOfferResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'offer_price' => 'float',
        'offer_discount' => 'float',
        'note' => 'string',
        'offered_date' => 'string',
        'transport_type' => 'string',
        'payment_type' => 'object',
        'delivery_date' => 'string',
        'valid_until_date' => 'string',
        'deleted_offer' => 'object',
        'bidder' => 'object',
        'offer_items' => '\Swagger\Client\Model\AuctionOfferItemResponse[]',
        'offer_vat_price' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'offer_price' => null,
        'offer_discount' => null,
        'note' => null,
        'offered_date' => null,
        'transport_type' => null,
        'payment_type' => null,
        'delivery_date' => null,
        'valid_until_date' => null,
        'deleted_offer' => null,
        'bidder' => null,
        'offer_items' => null,
        'offer_vat_price' => null
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
        'id' => 'ID',
        'offer_price' => 'offerPrice',
        'offer_discount' => 'offerDiscount',
        'note' => 'note',
        'offered_date' => 'offeredDate',
        'transport_type' => 'transportType',
        'payment_type' => 'paymentType',
        'delivery_date' => 'deliveryDate',
        'valid_until_date' => 'validUntilDate',
        'deleted_offer' => 'deletedOffer',
        'bidder' => 'bidder',
        'offer_items' => 'offerItems',
        'offer_vat_price' => 'offerVatPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'offer_price' => 'setOfferPrice',
        'offer_discount' => 'setOfferDiscount',
        'note' => 'setNote',
        'offered_date' => 'setOfferedDate',
        'transport_type' => 'setTransportType',
        'payment_type' => 'setPaymentType',
        'delivery_date' => 'setDeliveryDate',
        'valid_until_date' => 'setValidUntilDate',
        'deleted_offer' => 'setDeletedOffer',
        'bidder' => 'setBidder',
        'offer_items' => 'setOfferItems',
        'offer_vat_price' => 'setOfferVatPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'offer_price' => 'getOfferPrice',
        'offer_discount' => 'getOfferDiscount',
        'note' => 'getNote',
        'offered_date' => 'getOfferedDate',
        'transport_type' => 'getTransportType',
        'payment_type' => 'getPaymentType',
        'delivery_date' => 'getDeliveryDate',
        'valid_until_date' => 'getValidUntilDate',
        'deleted_offer' => 'getDeletedOffer',
        'bidder' => 'getBidder',
        'offer_items' => 'getOfferItems',
        'offer_vat_price' => 'getOfferVatPrice'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['offer_price'] = isset($data['offer_price']) ? $data['offer_price'] : null;
        $this->container['offer_discount'] = isset($data['offer_discount']) ? $data['offer_discount'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['offered_date'] = isset($data['offered_date']) ? $data['offered_date'] : null;
        $this->container['transport_type'] = isset($data['transport_type']) ? $data['transport_type'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['delivery_date'] = isset($data['delivery_date']) ? $data['delivery_date'] : null;
        $this->container['valid_until_date'] = isset($data['valid_until_date']) ? $data['valid_until_date'] : null;
        $this->container['deleted_offer'] = isset($data['deleted_offer']) ? $data['deleted_offer'] : null;
        $this->container['bidder'] = isset($data['bidder']) ? $data['bidder'] : null;
        $this->container['offer_items'] = isset($data['offer_items']) ? $data['offer_items'] : null;
        $this->container['offer_vat_price'] = isset($data['offer_vat_price']) ? $data['offer_vat_price'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id ID of the offer.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets offer_price
     *
     * @return float
     */
    public function getOfferPrice()
    {
        return $this->container['offer_price'];
    }

    /**
     * Sets offer_price
     *
     * @param float $offer_price Total price given to auction items.
     *
     * @return $this
     */
    public function setOfferPrice($offer_price)
    {
        $this->container['offer_price'] = $offer_price;

        return $this;
    }

    /**
     * Gets offer_discount
     *
     * @return float
     */
    public function getOfferDiscount()
    {
        return $this->container['offer_discount'];
    }

    /**
     * Sets offer_discount
     *
     * @param float $offer_discount Total discount given to offer price.
     *
     * @return $this
     */
    public function setOfferDiscount($offer_discount)
    {
        $this->container['offer_discount'] = $offer_discount;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note Note of the offer.
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets offered_date
     *
     * @return string
     */
    public function getOfferedDate()
    {
        return $this->container['offered_date'];
    }

    /**
     * Sets offered_date
     *
     * @param string $offered_date The date the offer was given. YYYY-MM-DD HH:MM:SS format.
     *
     * @return $this
     */
    public function setOfferedDate($offered_date)
    {
        $this->container['offered_date'] = $offered_date;

        return $this;
    }

    /**
     * Gets transport_type
     *
     * @return string
     */
    public function getTransportType()
    {
        return $this->container['transport_type'];
    }

    /**
     * Sets transport_type
     *
     * @param string $transport_type Transport type the bidder chooses.
     *
     * @return $this
     */
    public function setTransportType($transport_type)
    {
        $this->container['transport_type'] = $transport_type;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return object
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param object $payment_type Payment type the bidder chooses.
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param string $delivery_date Delivery date the bidder chooses of YYYY-MM-DD HH:MM:SS format.
     *
     * @return $this
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets valid_until_date
     *
     * @return string
     */
    public function getValidUntilDate()
    {
        return $this->container['valid_until_date'];
    }

    /**
     * Sets valid_until_date
     *
     * @param string $valid_until_date Valid until date the bidder chooses of YYYY-MM-DD HH:MM:SS format.
     *
     * @return $this
     */
    public function setValidUntilDate($valid_until_date)
    {
        $this->container['valid_until_date'] = $valid_until_date;

        return $this;
    }

    /**
     * Gets deleted_offer
     *
     * @return object
     */
    public function getDeletedOffer()
    {
        return $this->container['deleted_offer'];
    }

    /**
     * Sets deleted_offer
     *
     * @param object $deleted_offer The deletion status of the offer.
     *
     * @return $this
     */
    public function setDeletedOffer($deleted_offer)
    {
        $this->container['deleted_offer'] = $deleted_offer;

        return $this;
    }

    /**
     * Gets bidder
     *
     * @return object
     */
    public function getBidder()
    {
        return $this->container['bidder'];
    }

    /**
     * Sets bidder
     *
     * @param object $bidder Bidder information of the offered bidder.
     *
     * @return $this
     */
    public function setBidder($bidder)
    {
        $this->container['bidder'] = $bidder;

        return $this;
    }

    /**
     * Gets offer_items
     *
     * @return \Swagger\Client\Model\AuctionOfferItemResponse[]
     */
    public function getOfferItems()
    {
        return $this->container['offer_items'];
    }

    /**
     * Sets offer_items
     *
     * @param \Swagger\Client\Model\AuctionOfferItemResponse[] $offer_items offer_items
     *
     * @return $this
     */
    public function setOfferItems($offer_items)
    {
        $this->container['offer_items'] = $offer_items;

        return $this;
    }

    /**
     * Gets offer_vat_price
     *
     * @return float
     */
    public function getOfferVatPrice()
    {
        return $this->container['offer_vat_price'];
    }

    /**
     * Sets offer_vat_price
     *
     * @param float $offer_vat_price Total vat price given to bid.
     *
     * @return $this
     */
    public function setOfferVatPrice($offer_vat_price)
    {
        $this->container['offer_vat_price'] = $offer_vat_price;

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


