<?php

class ConsumerSearchResult
{

    /**
     * @var int $ConsumerId
     * @access public
     */
    public $ConsumerId = null;

    /**
     * @var dateTime $DateOfBirth
     * @access public
     */
    public $DateOfBirth = null;

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
     * @var string $LastName
     * @access public
     */
    public $LastName = null;

    /**
     * @var string $MaternalLastName
     * @access public
     */
    public $MaternalLastName = null;

    /**
     * @var string $MiddleName
     * @access public
     */
    public $MiddleName = null;

    /**
     * @param int $ConsumerId
     * @param dateTime $DateOfBirth
     * @access public
     */
    public function __construct($ConsumerId, $DateOfBirth)
    {
      $this->ConsumerId = $ConsumerId;
      $this->DateOfBirth = $DateOfBirth;
    }

}
