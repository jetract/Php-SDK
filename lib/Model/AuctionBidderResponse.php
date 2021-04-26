<?php
/**
 * AuctionBidderResponse
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
 * AuctionBidderResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuctionBidderResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuctionBidderResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'email' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'company' => 'object',
        'files' => 'object[]',
        'ip_address' => 'string',
        'offer_counter' => 'float',
        'agreement_approve' => 'float',
        'agreement_reject_description' => 'string',
        'can_bid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'email' => 'email',
        'firstname' => null,
        'lastname' => null,
        'company' => null,
        'files' => null,
        'ip_address' => 'ipv4',
        'offer_counter' => null,
        'agreement_approve' => null,
        'agreement_reject_description' => null,
        'can_bid' => null
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
        'email' => 'email',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'company' => 'company',
        'files' => 'files',
        'ip_address' => 'IPAddress',
        'offer_counter' => 'offerCounter',
        'agreement_approve' => 'agreementApprove',
        'agreement_reject_description' => 'agreementRejectDescription',
        'can_bid' => 'canBid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'email' => 'setEmail',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'company' => 'setCompany',
        'files' => 'setFiles',
        'ip_address' => 'setIpAddress',
        'offer_counter' => 'setOfferCounter',
        'agreement_approve' => 'setAgreementApprove',
        'agreement_reject_description' => 'setAgreementRejectDescription',
        'can_bid' => 'setCanBid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'email' => 'getEmail',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'company' => 'getCompany',
        'files' => 'getFiles',
        'ip_address' => 'getIpAddress',
        'offer_counter' => 'getOfferCounter',
        'agreement_approve' => 'getAgreementApprove',
        'agreement_reject_description' => 'getAgreementRejectDescription',
        'can_bid' => 'getCanBid'
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['offer_counter'] = isset($data['offer_counter']) ? $data['offer_counter'] : null;
        $this->container['agreement_approve'] = isset($data['agreement_approve']) ? $data['agreement_approve'] : null;
        $this->container['agreement_reject_description'] = isset($data['agreement_reject_description']) ? $data['agreement_reject_description'] : null;
        $this->container['can_bid'] = isset($data['can_bid']) ? $data['can_bid'] : null;
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
     * @param string $id ID of the bidder.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email of the bidder.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string $firstname Firstname of the bidder.
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname Lastname of the bidder.
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets company
     *
     * @return object
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param object $company Company information of the bidder.
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets files
     *
     * @return object[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param object[] $files Files which this bidder uploaded.
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string $ip_address Connection IP Address of the bidder.
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets offer_counter
     *
     * @return float
     */
    public function getOfferCounter()
    {
        return $this->container['offer_counter'];
    }

    /**
     * Sets offer_counter
     *
     * @param float $offer_counter The number of offers in this auction of this bidder.
     *
     * @return $this
     */
    public function setOfferCounter($offer_counter)
    {
        $this->container['offer_counter'] = $offer_counter;

        return $this;
    }

    /**
     * Gets agreement_approve
     *
     * @return float
     */
    public function getAgreementApprove()
    {
        return $this->container['agreement_approve'];
    }

    /**
     * Sets agreement_approve
     *
     * @param float $agreement_approve Approval status of the agreement.<br>0: Not yet approved. <br>1: Is approved. <br> 2: Is rejected.
     *
     * @return $this
     */
    public function setAgreementApprove($agreement_approve)
    {
        $this->container['agreement_approve'] = $agreement_approve;

        return $this;
    }

    /**
     * Gets agreement_reject_description
     *
     * @return string
     */
    public function getAgreementRejectDescription()
    {
        return $this->container['agreement_reject_description'];
    }

    /**
     * Sets agreement_reject_description
     *
     * @param string $agreement_reject_description Description when rejected of the agreement.
     *
     * @return $this
     */
    public function setAgreementRejectDescription($agreement_reject_description)
    {
        $this->container['agreement_reject_description'] = $agreement_reject_description;

        return $this;
    }

    /**
     * Gets can_bid
     *
     * @return string
     */
    public function getCanBid()
    {
        return $this->container['can_bid'];
    }

    /**
     * Sets can_bid
     *
     * @param string $can_bid Type of The Bidding Permission. <br>1: Can Bid. <br>2: Cannot Bid.
     *
     * @return $this
     */
    public function setCanBid($can_bid)
    {
        $this->container['can_bid'] = $can_bid;

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


