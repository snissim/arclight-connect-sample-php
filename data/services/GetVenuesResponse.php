<?php

include_once('ResponseBase.php');

class GetVenuesResponse extends ResponseBase
{

    /**
     * @var CollectionCity[] $CollectionCityVenues
     * @access public
     */
    public $CollectionCityVenues = null;

    /**
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
