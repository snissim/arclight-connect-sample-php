<?php

class SearchProfiles
{

    /**
     * @var SearchProfilesRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param SearchProfilesRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
