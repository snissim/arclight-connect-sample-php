<?php

class ChangePassword
{

    /**
     * @var ChangePasswordRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param ChangePasswordRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
