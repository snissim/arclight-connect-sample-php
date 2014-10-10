<?php

include_once('ConsumerProfile.php');

class PmiConsumerProfile extends ConsumerProfile
{

    /**
     * @var string $GiidTypeCode
     * @access public
     */
    public $GiidTypeCode = null;

    /**
     * @var boolean $IsBeFirstReady
     * @access public
     */
    public $IsBeFirstReady = null;

    /**
     * @var string $MatchMismatchProfile
     * @access public
     */
    public $MatchMismatchProfile = null;

    /**
     * @var string $MiddleEastConsumerTypeCode
     * @access public
     */
    public $MiddleEastConsumerTypeCode = null;

    /**
     * @var string $MobileMessageTypeCode
     * @access public
     */
    public $MobileMessageTypeCode = null;

    /**
     * @var string $PreferredLanguage
     * @access public
     */
    public $PreferredLanguage = null;

    /**
     * @var string $PreferredLanguageCode
     * @access public
     */
    public $PreferredLanguageCode = null;

    /**
     * @var string $PremiumBlackId
     * @access public
     */
    public $PremiumBlackId = null;

    /**
     * @param int $ConsumerId
     * @param dateTime $DateOfBirth
     * @param boolean $IsBeFirstReady
     * @access public
     */
    public function __construct($ConsumerId, $DateOfBirth, $IsBeFirstReady)
    {
      parent::__construct($ConsumerId, $DateOfBirth);
      $this->IsBeFirstReady = $IsBeFirstReady;
    }

}
