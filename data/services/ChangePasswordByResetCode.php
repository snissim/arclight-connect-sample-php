<?php

class ChangePasswordByResetCode
{

    /**
     * @var ChangePasswordByResetCodeRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param ChangePasswordByResetCodeRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
