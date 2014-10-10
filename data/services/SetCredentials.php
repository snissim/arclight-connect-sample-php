<?php

class SetCredentials
{

    /**
     * @var SetCredentialsRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param SetCredentialsRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
