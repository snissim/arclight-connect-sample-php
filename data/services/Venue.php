<?php

class Venue
{

    /**
     * @var boolean $AllowedForChallenge
     * @access public
     */
    public $AllowedForChallenge = null;

    /**
     * @var boolean $AllowedForCheckin
     * @access public
     */
    public $AllowedForCheckin = null;

    /**
     * @var boolean $AllowedForMing
     * @access public
     */
    public $AllowedForMing = null;

    /**
     * @var string $Code
     * @access public
     */
    public $Code = null;

    /**
     * @var int $CollectionCityId
     * @access public
     */
    public $CollectionCityId = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var boolean $DisplayOnExternalSystem
     * @access public
     */
    public $DisplayOnExternalSystem = null;

    /**
     * @var dateTime $LastEditDate
     * @access public
     */
    public $LastEditDate = null;

    /**
     * @var float $Latitude
     * @access public
     */
    public $Latitude = null;

    /**
     * @var string $LocalLanguageDescription
     * @access public
     */
    public $LocalLanguageDescription = null;

    /**
     * @var float $Longitude
     * @access public
     */
    public $Longitude = null;

    /**
     * @var string $StateCode
     * @access public
     */
    public $StateCode = null;

    /**
     * @var string $TypeCode
     * @access public
     */
    public $TypeCode = null;

    /**
     * @var string $TypeDescription
     * @access public
     */
    public $TypeDescription = null;

    /**
     * @var string $TypeLocalLanguageDescription
     * @access public
     */
    public $TypeLocalLanguageDescription = null;

    /**
     * @param boolean $AllowedForChallenge
     * @param boolean $AllowedForCheckin
     * @param boolean $AllowedForMing
     * @param int $CollectionCityId
     * @param boolean $DisplayOnExternalSystem
     * @param dateTime $LastEditDate
     * @access public
     */
    public function __construct($AllowedForChallenge, $AllowedForCheckin, $AllowedForMing, $CollectionCityId, $DisplayOnExternalSystem, $LastEditDate)
    {
      $this->AllowedForChallenge = $AllowedForChallenge;
      $this->AllowedForCheckin = $AllowedForCheckin;
      $this->AllowedForMing = $AllowedForMing;
      $this->CollectionCityId = $CollectionCityId;
      $this->DisplayOnExternalSystem = $DisplayOnExternalSystem;
      $this->LastEditDate = $LastEditDate;
    }

}
