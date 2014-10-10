<?php

class ValidateUser
{

    /**
     * @var ValidateUserRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param ValidateUserRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
