<?php

class SendPasswordResetLink
{

    /**
     * @var SendPasswordResetLinkRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param SendPasswordResetLinkRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
