<?php

class BrandAmbassador
{

    /**
     * @var int $ConsumerId
     * @access public
     */
    public $ConsumerId = null;

    /**
     * @var string $Email
     * @access public
     */
    public $Email = null;

    /**
     * @var string $FirstName
     * @access public
     */
    public $FirstName = null;

    /**
     * @var string $GIIDNumber
     * @access public
     */
    public $GIIDNumber = null;

    /**
     * @var dateTime $LastEditDate
     * @access public
     */
    public $LastEditDate = null;

    /**
     * @var string $LastName
     * @access public
     */
    public $LastName = null;

    /**
     * @var string $Password
     * @access public
     */
    public $Password = null;

    /**
     * @var string $UserName
     * @access public
     */
    public $UserName = null;

    /**
     * @param int $ConsumerId
     * @param dateTime $LastEditDate
     * @access public
     */
    public function __construct($ConsumerId, $LastEditDate)
    {
      $this->ConsumerId = $ConsumerId;
      $this->LastEditDate = $LastEditDate;
    }

}
