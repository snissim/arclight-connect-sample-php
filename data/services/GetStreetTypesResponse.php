<?php

include_once('ResponseBase.php');

class GetStreetTypesResponse extends ResponseBase
{

    /**
     * @var StreetType[] $StreetTypes
     * @access public
     */
    public $StreetTypes = null;

    /**
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
