<?php

include_once('ServiceRequest.php');

class SubmitResponseRequest extends ServiceRequest
{

    /**
     * @var string $LayoutName
     * @access public
     */
    public $LayoutName = null;

    /**
     * @var ArrayOfNameValue[] $ResponseAttributes
     * @access public
     */
    public $ResponseAttributes = null;

    /**
     * @access public
     */
    public function __construct()
    {
      parent::__construct();
    }

}
