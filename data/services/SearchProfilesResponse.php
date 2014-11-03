<?php

include_once('ResponseBase.php');

class SearchProfilesResponse extends ResponseBase
{

    /**
     * @var anyType $SearchProfilesResult
     * @access public
     */
    public $SearchProfilesResult = null;

    /**
     * @param int $ErrorCode
     * @param anyType $SearchProfilesResult
     * @access public
     */
    public function __construct($ErrorCode, $SearchProfilesResult)
    {
      parent::__construct($ErrorCode);
      $this->SearchProfilesResult = $SearchProfilesResult;
    }

}
