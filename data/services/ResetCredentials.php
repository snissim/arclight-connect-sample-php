<?php

class ResetCredentials
{

    /**
     * @var ResetCredentialsRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param ResetCredentialsRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
