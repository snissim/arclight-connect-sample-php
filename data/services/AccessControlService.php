<?php

include_once('SendUserName.php');
include_once('SendUserNameResponse.php');
include_once('ResetCredentials.php');
include_once('ResetCredentialsResponse.php');
include_once('SetCredentials.php');
include_once('SetCredentialsResponse.php');
include_once('ValidateUser.php');
include_once('ValidateUserResponse.php');
include_once('SendPasswordResetLink.php');
include_once('SendPasswordResetLinkResponse.php');
include_once('ChangePasswordByResetCode.php');
include_once('ChangePasswordByResetCodeResponse.php');
include_once('ChangePassword.php');
include_once('ChangePasswordResponse.php');
include_once('SendUserNameRequest.php');
include_once('ServiceRequest.php');
include_once('ResetCredentialsRequest.php');
include_once('SetCredentialsRequest.php');
include_once('ValidateUserRequest.php');
include_once('SendPasswordResetLinkRequest.php');
include_once('ChangePasswordByResetCodeRequest.php');
include_once('ChangePasswordRequest.php');
include_once('Authentication.php');
include_once('ResponseBase.php');

class AccessControlService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'SendUserName' => '\SendUserName',
      'SendUserNameResponse' => '\SendUserNameResponse',
      'ResetCredentials' => '\ResetCredentials',
      'ResetCredentialsResponse' => '\ResetCredentialsResponse',
      'SetCredentials' => '\SetCredentials',
      'SetCredentialsResponse' => '\SetCredentialsResponse',
      'ValidateUser' => '\ValidateUser',
      'ValidateUserResponse' => '\ValidateUserResponse',
      'SendPasswordResetLink' => '\SendPasswordResetLink',
      'SendPasswordResetLinkResponse' => '\SendPasswordResetLinkResponse',
      'ChangePasswordByResetCode' => '\ChangePasswordByResetCode',
      'ChangePasswordByResetCodeResponse' => '\ChangePasswordByResetCodeResponse',
      'ChangePassword' => '\ChangePassword',
      'ChangePasswordResponse' => '\ChangePasswordResponse',
      'SendUserNameRequest' => '\SendUserNameRequest',
      'ServiceRequest' => '\ServiceRequest',
      'ResetCredentialsRequest' => '\ResetCredentialsRequest',
      'SetCredentialsRequest' => '\SetCredentialsRequest',
      'ValidateUserRequest' => '\ValidateUserRequest',
      'SendPasswordResetLinkRequest' => '\SendPasswordResetLinkRequest',
      'ChangePasswordByResetCodeRequest' => '\ChangePasswordByResetCodeRequest',
      'ChangePasswordRequest' => '\ChangePasswordRequest',
      'Authentication' => '\Authentication',
      'ResponseBase' => '\ResponseBase');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://connect-pmilastage-arclight.arcww2.com/1.3/pmi/AccessControlService.svc?singleWsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      
      parent::__construct($wsdl, $options);
    }

    /**
     * @param SendUserName $parameters
     * @access public
     * @return SendUserNameResponse
     */
    public function SendUserName(SendUserName $parameters)
    {
      return $this->__soapCall('SendUserName', array($parameters));
    }

    /**
     * @param ResetCredentials $parameters
     * @access public
     * @return ResetCredentialsResponse
     */
    public function ResetCredentials(ResetCredentials $parameters)
    {
      return $this->__soapCall('ResetCredentials', array($parameters));
    }

    /**
     * @param SetCredentials $parameters
     * @access public
     * @return SetCredentialsResponse
     */
    public function SetCredentials(SetCredentials $parameters)
    {
      return $this->__soapCall('SetCredentials', array($parameters));
    }

    /**
     * @param ValidateUser $parameters
     * @access public
     * @return ValidateUserResponse
     */
    public function ValidateUser(ValidateUser $parameters)
    {
      return $this->__soapCall('ValidateUser', array($parameters));
    }

    /**
     * @param SendPasswordResetLink $parameters
     * @access public
     * @return SendPasswordResetLinkResponse
     */
    public function SendPasswordResetLink(SendPasswordResetLink $parameters)
    {
      return $this->__soapCall('SendPasswordResetLink', array($parameters));
    }

    /**
     * @param ChangePasswordByResetCode $parameters
     * @access public
     * @return ChangePasswordByResetCodeResponse
     */
    public function ChangePasswordByResetCode(ChangePasswordByResetCode $parameters)
    {
      return $this->__soapCall('ChangePasswordByResetCode', array($parameters));
    }

    /**
     * @param ChangePassword $parameters
     * @access public
     * @return ChangePasswordResponse
     */
    public function ChangePassword(ChangePassword $parameters)
    {
      return $this->__soapCall('ChangePassword', array($parameters));
    }

}
