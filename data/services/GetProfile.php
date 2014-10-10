<?php

class GetProfile
{

    /**
     * @var GetProfileRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param GetProfileRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
