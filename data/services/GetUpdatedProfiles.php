<?php

class GetUpdatedProfiles
{

    /**
     * @var GetUpdatedProfilesRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param GetUpdatedProfilesRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
