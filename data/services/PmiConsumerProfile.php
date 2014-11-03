<?php

include_once('ConsumerProfile.php');

class PmiConsumerProfile extends ConsumerProfile
{

    /**
     * @var string $AgeVerificationCategoryTypeCode
     * @access public
     */
    public $AgeVerificationCategoryTypeCode = null;

    /**
     * @var string $AgeVerificationCategoryTypeName
     * @access public
     */
    public $AgeVerificationCategoryTypeName = null;

    /**
     * @var string $AgeVerificationValidationType
     * @access public
     */
    public $AgeVerificationValidationType = null;

    /**
     * @var string $AgeVerificationValidationTypeName
     * @access public
     */
    public $AgeVerificationValidationTypeName = null;

    /**
     * @var string $BlockingStatus
     * @access public
     */
    public $BlockingStatus = null;

    /**
     * @var string $DirectMailDeliveryStatusCode
     * @access public
     */
    public $DirectMailDeliveryStatusCode = null;

    /**
     * @var string $DirectMailFloor
     * @access public
     */
    public $DirectMailFloor = null;

    /**
     * @var string $DirectMailOptValue
     * @access public
     */
    public $DirectMailOptValue = null;

    /**
     * @var string $DirectMailStreetType
     * @access public
     */
    public $DirectMailStreetType = null;

    /**
     * @var string $EmailDeliveryStatusCode
     * @access public
     */
    public $EmailDeliveryStatusCode = null;

    /**
     * @var string $EmailOptValue
     * @access public
     */
    public $EmailOptValue = null;

    /**
     * @var string $EventDate
     * @access public
     */
    public $EventDate = null;

    /**
     * @var string $FirstBrandAffinityCode
     * @access public
     */
    public $FirstBrandAffinityCode = null;

    /**
     * @var string $FirstBrandCode
     * @access public
     */
    public $FirstBrandCode = null;

    /**
     * @var string $FirstBrandFlavorAffinity
     * @access public
     */
    public $FirstBrandFlavorAffinity = null;

    /**
     * @var string $FirstBrandImageAffinity
     * @access public
     */
    public $FirstBrandImageAffinity = null;

    /**
     * @var string $FirstBrandInnovationAffinity
     * @access public
     */
    public $FirstBrandInnovationAffinity = null;

    /**
     * @var string $FirstBrandName
     * @access public
     */
    public $FirstBrandName = null;

    /**
     * @var string $FirstBrandPriceAffinity
     * @access public
     */
    public $FirstBrandPriceAffinity = null;

    /**
     * @var string $FirstBrandProfileCode
     * @access public
     */
    public $FirstBrandProfileCode = null;

    /**
     * @var string $FirstBrandProfileName
     * @access public
     */
    public $FirstBrandProfileName = null;

    /**
     * @var string $FirstSubbrandCode
     * @access public
     */
    public $FirstSubbrandCode = null;

    /**
     * @var string $FirstSubbrandName
     * @access public
     */
    public $FirstSubbrandName = null;

    /**
     * @var string $GatedCommunity
     * @access public
     */
    public $GatedCommunity = null;

    /**
     * @var string $GiidType1Code
     * @access public
     */
    public $GiidType1Code = null;

    /**
     * @var string $GiidType1Name
     * @access public
     */
    public $GiidType1Name = null;

    /**
     * @var string $HasAcceptedLegalTermsCode
     * @access public
     */
    public $HasAcceptedLegalTermsCode = null;

    /**
     * @var string $HasAcceptedSNUS
     * @access public
     */
    public $HasAcceptedSNUS = null;

    /**
     * @var string $HomePhoneAreaCode
     * @access public
     */
    public $HomePhoneAreaCode = null;

    /**
     * @var string $HomePhoneDeliveryStatusCode
     * @access public
     */
    public $HomePhoneDeliveryStatusCode = null;

    /**
     * @var string $HomePhoneOptValue
     * @access public
     */
    public $HomePhoneOptValue = null;

    /**
     * @var string $HostessUsername
     * @access public
     */
    public $HostessUsername = null;

    /**
     * @var boolean $IsBeFirstReady
     * @access public
     */
    public $IsBeFirstReady = null;

    /**
     * @var string $IsSmoker
     * @access public
     */
    public $IsSmoker = null;

    /**
     * @var string $LotNumber
     * @access public
     */
    public $LotNumber = null;

    /**
     * @var string $MatchMismatchProfile
     * @access public
     */
    public $MatchMismatchProfile = null;

    /**
     * @var string $MaternalLastName
     * @access public
     */
    public $MaternalLastName = null;

    /**
     * @var string $MediaCategoryCode
     * @access public
     */
    public $MediaCategoryCode = null;

    /**
     * @var string $MiddleEastConsumerTypeCode
     * @access public
     */
    public $MiddleEastConsumerTypeCode = null;

    /**
     * @var string $MiddleName
     * @access public
     */
    public $MiddleName = null;

    /**
     * @var string $MobileAreaCode
     * @access public
     */
    public $MobileAreaCode = null;

    /**
     * @var string $MobileDeliveryStatusCode
     * @access public
     */
    public $MobileDeliveryStatusCode = null;

    /**
     * @var string $MobileMessageTypeCode
     * @access public
     */
    public $MobileMessageTypeCode = null;

    /**
     * @var string $MobileOptValue
     * @access public
     */
    public $MobileOptValue = null;

    /**
     * @var string $MobileProviderName
     * @access public
     */
    public $MobileProviderName = null;

    /**
     * @var string $OfferCode
     * @access public
     */
    public $OfferCode = null;

    /**
     * @var string $PhaseCode
     * @access public
     */
    public $PhaseCode = null;

    /**
     * @var string $PlaceofResidence1Code
     * @access public
     */
    public $PlaceofResidence1Code = null;

    /**
     * @var string $PlaceofResidence1Name
     * @access public
     */
    public $PlaceofResidence1Name = null;

    /**
     * @var string $PlaceofResidence2Code
     * @access public
     */
    public $PlaceofResidence2Code = null;

    /**
     * @var string $PlaceofResidence2Name
     * @access public
     */
    public $PlaceofResidence2Name = null;

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
     * @var string $PrimaryAllocationBrandCode
     * @access public
     */
    public $PrimaryAllocationBrandCode = null;

    /**
     * @var string $PrimaryAllocationBrandName
     * @access public
     */
    public $PrimaryAllocationBrandName = null;

    /**
     * @var string $ReceiveInfo
     * @access public
     */
    public $ReceiveInfo = null;

    /**
     * @var string $RegistrationMarketCode
     * @access public
     */
    public $RegistrationMarketCode = null;

    /**
     * @var string $RepresentativeSignatureTypeCode
     * @access public
     */
    public $RepresentativeSignatureTypeCode = null;

    /**
     * @var string $SecondBrandAffinity
     * @access public
     */
    public $SecondBrandAffinity = null;

    /**
     * @var string $SecondBrandCode
     * @access public
     */
    public $SecondBrandCode = null;

    /**
     * @var string $SecondBrandFlavorAffinity
     * @access public
     */
    public $SecondBrandFlavorAffinity = null;

    /**
     * @var string $SecondBrandImageAffinity
     * @access public
     */
    public $SecondBrandImageAffinity = null;

    /**
     * @var string $SecondBrandInnovationAffinity
     * @access public
     */
    public $SecondBrandInnovationAffinity = null;

    /**
     * @var string $SecondBrandName
     * @access public
     */
    public $SecondBrandName = null;

    /**
     * @var string $SecondBrandPriceAffinity
     * @access public
     */
    public $SecondBrandPriceAffinity = null;

    /**
     * @var string $SecondSubbrandCode
     * @access public
     */
    public $SecondSubbrandCode = null;

    /**
     * @var string $SecondSubbrandName
     * @access public
     */
    public $SecondSubbrandName = null;

    /**
     * @var string $SecondaryAllocationBrandCode
     * @access public
     */
    public $SecondaryAllocationBrandCode = null;

    /**
     * @var string $SecondaryAllocationBrandName
     * @access public
     */
    public $SecondaryAllocationBrandName = null;

    /**
     * @var string $SecondaryBrandProfileCode
     * @access public
     */
    public $SecondaryBrandProfileCode = null;

    /**
     * @var string $SecondaryBrandProfileName
     * @access public
     */
    public $SecondaryBrandProfileName = null;

    /**
     * @var dateTime $SourceDate
     * @access public
     */
    public $SourceDate = null;

    /**
     * @var string $StreetNumber
     * @access public
     */
    public $StreetNumber = null;

    /**
     * @var boolean $Talkability
     * @access public
     */
    public $Talkability = null;

    /**
     * @var string $Tower
     * @access public
     */
    public $Tower = null;

    /**
     * @var string $TwitterName
     * @access public
     */
    public $TwitterName = null;

    /**
     * @var string $Urbanization
     * @access public
     */
    public $Urbanization = null;

    /**
     * @var string $VenueCode
     * @access public
     */
    public $VenueCode = null;

    /**
     * @var string $VenueName
     * @access public
     */
    public $VenueName = null;

    /**
     * @param int $ConsumerId
     * @param dateTime $DateOfBirth
     * @param boolean $IsBeFirstReady
     * @param dateTime $SourceDate
     * @param boolean $Talkability
     * @access public
     */
    public function __construct($ConsumerId, $DateOfBirth, $IsBeFirstReady, $SourceDate, $Talkability)
    {
      parent::__construct($ConsumerId, $DateOfBirth);
      $this->IsBeFirstReady = $IsBeFirstReady;
      $this->SourceDate = $SourceDate;
      $this->Talkability = $Talkability;
    }

}
