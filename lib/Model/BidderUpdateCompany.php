<?php
/**
 * BidderUpdateCompany
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
 * JETRACT MAIN API
 *
 * OpenAPI spec version: 0.9.7
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
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
 * BidderUpdateCompany Class Doc Comment
 *
 * @category Class
 * @description Company information of this bidder.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BidderUpdateCompany implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BidderUpdate_company';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country_id' => 'string',
        'city_id' => 'string',
        'name' => 'string',
        'tax_office' => 'string',
        'tax_number' => 'float',
        'number_of_workers' => 'float',
        'phone' => '\Swagger\Client\Model\BidderUpdateCompanyPhone',
        'foundation_year' => 'float',
        'address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country_id' => null,
        'city_id' => null,
        'name' => null,
        'tax_office' => null,
        'tax_number' => null,
        'number_of_workers' => null,
        'phone' => null,
        'foundation_year' => null,
        'address' => null
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
        'country_id' => 'countryID',
        'city_id' => 'cityID',
        'name' => 'name',
        'tax_office' => 'taxOffice',
        'tax_number' => 'taxNumber',
        'number_of_workers' => 'numberOfWorkers',
        'phone' => 'phone',
        'foundation_year' => 'foundationYear',
        'address' => 'address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_id' => 'setCountryId',
        'city_id' => 'setCityId',
        'name' => 'setName',
        'tax_office' => 'setTaxOffice',
        'tax_number' => 'setTaxNumber',
        'number_of_workers' => 'setNumberOfWorkers',
        'phone' => 'setPhone',
        'foundation_year' => 'setFoundationYear',
        'address' => 'setAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_id' => 'getCountryId',
        'city_id' => 'getCityId',
        'name' => 'getName',
        'tax_office' => 'getTaxOffice',
        'tax_number' => 'getTaxNumber',
        'number_of_workers' => 'getNumberOfWorkers',
        'phone' => 'getPhone',
        'foundation_year' => 'getFoundationYear',
        'address' => 'getAddress'
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
        $this->container['country_id'] = isset($data['country_id']) ? $data['country_id'] : null;
        $this->container['city_id'] = isset($data['city_id']) ? $data['city_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tax_office'] = isset($data['tax_office']) ? $data['tax_office'] : null;
        $this->container['tax_number'] = isset($data['tax_number']) ? $data['tax_number'] : null;
        $this->container['number_of_workers'] = isset($data['number_of_workers']) ? $data['number_of_workers'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['foundation_year'] = isset($data['foundation_year']) ? $data['foundation_year'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['country_id']) && !preg_match("/^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-4[0-9a-fA-F]{3}-[89abAB][0-9a-fA-F]{3}-[0-9a-fA-F]{12}$/", $this->container['country_id'])) {
            $invalidProperties[] = "invalid value for 'country_id', must be conform to the pattern /^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-4[0-9a-fA-F]{3}-[89abAB][0-9a-fA-F]{3}-[0-9a-fA-F]{12}$/.";
        }

        if (!is_null($this->container['city_id']) && !preg_match("/^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-4[0-9a-fA-F]{3}-[89abAB][0-9a-fA-F]{3}-[0-9a-fA-F]{12}$/", $this->container['city_id'])) {
            $invalidProperties[] = "invalid value for 'city_id', must be conform to the pattern /^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-4[0-9a-fA-F]{3}-[89abAB][0-9a-fA-F]{3}-[0-9a-fA-F]{12}$/.";
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
     * Gets country_id
     *
     * @return string
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param string $country_id Country ID of the Bidder Company.
     *
     * @return $this
     */
    public function setCountryId($country_id)
    {

        if (!is_null($country_id) && (!preg_match("/^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-4[0-9a-fA-F]{3}-[89abAB][0-9a-fA-F]{3}-[0-9a-fA-F]{12}$/", $country_id))) {
            throw new \InvalidArgumentException("invalid value for $country_id when calling BidderUpdateCompany., must conform to the pattern /^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-4[0-9a-fA-F]{3}-[89abAB][0-9a-fA-F]{3}-[0-9a-fA-F]{12}$/.");
        }

        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets city_id
     *
     * @return string
     */
    public function getCityId()
    {
        return $this->container['city_id'];
    }

    /**
     * Sets city_id
     *
     * @param string $city_id City ID of the Bidder company.
     *
     * @return $this
     */
    public function setCityId($city_id)
    {

        if (!is_null($city_id) && (!preg_match("/^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-4[0-9a-fA-F]{3}-[89abAB][0-9a-fA-F]{3}-[0-9a-fA-F]{12}$/", $city_id))) {
            throw new \InvalidArgumentException("invalid value for $city_id when calling BidderUpdateCompany., must conform to the pattern /^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-4[0-9a-fA-F]{3}-[89abAB][0-9a-fA-F]{3}-[0-9a-fA-F]{12}$/.");
        }

        $this->container['city_id'] = $city_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the company.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets tax_office
     *
     * @return string
     */
    public function getTaxOffice()
    {
        return $this->container['tax_office'];
    }

    /**
     * Sets tax_office
     *
     * @param string $tax_office Tax Office of the company.
     *
     * @return $this
     */
    public function setTaxOffice($tax_office)
    {
        $this->container['tax_office'] = $tax_office;

        return $this;
    }

    /**
     * Gets tax_number
     *
     * @return float
     */
    public function getTaxNumber()
    {
        return $this->container['tax_number'];
    }

    /**
     * Sets tax_number
     *
     * @param float $tax_number Tax Number of the company.
     *
     * @return $this
     */
    public function setTaxNumber($tax_number)
    {
        $this->container['tax_number'] = $tax_number;

        return $this;
    }

    /**
     * Gets number_of_workers
     *
     * @return float
     */
    public function getNumberOfWorkers()
    {
        return $this->container['number_of_workers'];
    }

    /**
     * Sets number_of_workers
     *
     * @param float $number_of_workers Number of workers in this company.
     *
     * @return $this
     */
    public function setNumberOfWorkers($number_of_workers)
    {
        $this->container['number_of_workers'] = $number_of_workers;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \Swagger\Client\Model\BidderUpdateCompanyPhone
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \Swagger\Client\Model\BidderUpdateCompanyPhone $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets foundation_year
     *
     * @return float
     */
    public function getFoundationYear()
    {
        return $this->container['foundation_year'];
    }

    /**
     * Sets foundation_year
     *
     * @param float $foundation_year Year when this company was founded.
     *
     * @return $this
     */
    public function setFoundationYear($foundation_year)
    {
        $this->container['foundation_year'] = $foundation_year;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Address of the company.
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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


