<?php

include_once('ServiceRequest.php');

class CalculateBeFirstReadyRequest extends ServiceRequest
{

    /**
     * @var string $LayoutName
     * @access public
     */
    public $LayoutName = null;

    /**
     * @var NameValue[] $ResponseAttributes
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
