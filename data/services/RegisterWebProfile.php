<?php

class RegisterWebProfile
{

    /**
     * @var anyType $request
     * @access public
     */
    public $request = null;

    /**
     * @param anyType $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
