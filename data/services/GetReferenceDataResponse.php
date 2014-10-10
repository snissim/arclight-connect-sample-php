<?php

include_once('ResponseBase.php');

class GetReferenceDataResponse extends ResponseBase
{

    /**
     * @var ReferenceData $ReferenceData
     * @access public
     */
    public $ReferenceData = null;

    /**
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
