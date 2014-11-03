<?php

include_once('ResponseBase.php');

class GetUpdatedProfilesResponse extends ResponseBase
{

    /**
     * @var anyType $GetUpdatedProfilesResult
     * @access public
     */
    public $GetUpdatedProfilesResult = null;

    /**
     * @param int $ErrorCode
     * @param anyType $GetUpdatedProfilesResult
     * @access public
     */
    public function __construct($ErrorCode, $GetUpdatedProfilesResult)
    {
      parent::__construct($ErrorCode);
      $this->GetUpdatedProfilesResult = $GetUpdatedProfilesResult;
    }

}
