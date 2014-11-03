<?php

class ConsumerProfile
{

    /**
     * @var AddressInfo $Address
     * @access public
     */
    public $Address = null;

    /**
     * @var string $AgeVerificationCode
     * @access public
     */
    public $AgeVerificationCode = null;

    /**
     * @var string $AgeVerificationName
     * @access public
     */
    public $AgeVerificationName = null;

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
     * @var string $EmailAddress
     * @access public
     */
    public $EmailAddress = null;

    /**
     * @var string $FirstName
     * @access public
     */
    public $FirstName = null;

    /**
     * @var string $GenderCode
     * @access public
     */
    public $GenderCode = null;

    /**
     * @var string $GiidNumber1
     * @access public
     */
    public $GiidNumber1 = null;

    /**
     * @var string $HomePhoneHomePhone
     * @access public
     */
    public $HomePhoneHomePhone = null;

    /**
     * @var string $LastName
     * @access public
     */
    public $LastName = null;

    /**
     * @var string $MobilePhoneMobilePhone
     * @access public
     */
    public $MobilePhoneMobilePhone = null;

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
