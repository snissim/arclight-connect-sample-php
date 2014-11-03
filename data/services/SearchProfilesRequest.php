<?php

include_once('ServiceRequest.php');

class SearchProfilesRequest extends ServiceRequest
{

    /**
     * @var string $DateOfBirth
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
     * @var string $State
     * @access public
     */
    public $State = null;

    /**
     * @access public
     */
    public function __construct()
    {
      parent::__construct();
    }

}
