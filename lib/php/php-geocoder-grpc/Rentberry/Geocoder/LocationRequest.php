<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: geocoder.proto

namespace Rentberry\Geocoder;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LocationRequest</code>
 */
class LocationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string provider = 1;</code>
     */
    protected $provider = '';
    /**
     * Generated from protobuf field <code>string address = 2;</code>
     */
    protected $address = '';
    /**
     * Generated from protobuf field <code>.LatLng latlng = 3;</code>
     */
    protected $latlng = null;
    /**
     * Generated from protobuf field <code>map<string, string> query = 4;</code>
     */
    private $query;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $provider
     *     @type string $address
     *     @type \Rentberry\Geocoder\LatLng $latlng
     *     @type array|\Google\Protobuf\Internal\MapField $query
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Geocoder::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string provider = 1;</code>
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Generated from protobuf field <code>string provider = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProvider($var)
    {
        GPBUtil::checkString($var, True);
        $this->provider = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string address = 2;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Generated from protobuf field <code>string address = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.LatLng latlng = 3;</code>
     * @return \Rentberry\Geocoder\LatLng
     */
    public function getLatlng()
    {
        return isset($this->latlng) ? $this->latlng : null;
    }

    public function hasLatlng()
    {
        return isset($this->latlng);
    }

    public function clearLatlng()
    {
        unset($this->latlng);
    }

    /**
     * Generated from protobuf field <code>.LatLng latlng = 3;</code>
     * @param \Rentberry\Geocoder\LatLng $var
     * @return $this
     */
    public function setLatlng($var)
    {
        GPBUtil::checkMessage($var, \Rentberry\Geocoder\LatLng::class);
        $this->latlng = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> query = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Generated from protobuf field <code>map<string, string> query = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setQuery($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->query = $arr;

        return $this;
    }

}

