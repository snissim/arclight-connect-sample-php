<?php

class ConsumerProfile
{

    /**
     * @var AddressInfo $Address
     * @access public
     */
    public $Address = null;

    /**
     * @var string $AgeVerificationType
     * @access public
     */
    public $AgeVerificationType = null;

    /**
     * @var string $AgeVerificationTypeCode
     * @access public
     */
    public $AgeVerificationTypeCode = null;

    /**
     * @var string $AvailabilityReason
     * @access public
     */
    public $AvailabilityReason = null;

    /**
     * @var string $AvailabilityReasonCode
     * @access public
     */
    public $AvailabilityReasonCode = null;

    /**
     * @var ConsumerBrandProfile $ConsumerBrandProfile
     * @access public
     */
    public $ConsumerBrandProfile = null;

    /**
     * @var int $ConsumerId
     * @access public
     */
    public $ConsumerId = null;

    /**
     * @var dateTime $DateOfBirth
     * @access public
     */
    public $DateOfBirth = null;

    /**
     * @var string $Email
     * @access public
     */
    public $Email = null;

    /**
     * @var string $FirstName
     * @access public
     */
    public $FirstName = null;

    /**
     * @var string $Gender
     * @access public
     */
    public $Gender = null;

    /**
     * @var string $GiidNumber
     * @access public
     */
    public $GiidNumber = null;

    /**
     * @var string $HomePhoneNumber
     * @access public
     */
    public $HomePhoneNumber = null;

    /**
     * @var string $LastName
     * @access public
     */
    public $LastName = null;

    /**
     * @var string $MobileNumber
     * @access public
     */
    public $MobileNumber = null;

    /**
     * @param int $ConsumerId
     * @param dateTime $DateOfBirth
     * @access public
     */
    public function __construct($ConsumerId, $DateOfBirth)
    {
      $this->ConsumerId = $ConsumerId;
      $this->DateOfBirth = $DateOfBirth;
    }

}
