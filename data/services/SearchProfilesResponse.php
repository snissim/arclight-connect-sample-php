<?php

include_once('ResponseBase.php');

class SearchProfilesResponse extends ResponseBase
{

    /**
     * @var ConsumerSearchResult[] $SearchResults
     * @access public
     */
    public $SearchResults = null;

    /**
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
