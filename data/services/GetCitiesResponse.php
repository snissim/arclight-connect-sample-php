<?php

include_once('ResponseBase.php');

class GetCitiesResponse extends ResponseBase
{

    /**
     * @var State[] $States
     * @access public
     */
    public $States = null;

    /**
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
