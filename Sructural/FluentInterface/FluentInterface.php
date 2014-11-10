<?php
/**
 * User: Sergii Zheleznytskyi 
 * Date: 10.11.14
 * Time: 17:32
 */

/**
 * Class User. Fluent interface.
 */
class User
{
    protected $_name;
    protected $_email;
    protected $_gender;

    /**
     * Set user name.
     *
     * @param string $name. User name.
     * @return $this
     */
    public function setName($name)
    {
        $this->_name = $name;

        return $this;
    }

    /**
     * Set user email.
     *
     * @param string $email. User e-mail.
     * @return $this
     */
    public function setEmail($email)
    {
        $this->_email = $email;

        return $this;
    }

    /**
     * Set user gender.
     *
     * @param string $gender. User gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->_gender = $gender;

        return $this;
    }
}

$user = new User();
$user->setName('testName')
    ->setGender('male')
    ->setEmail('example@gmail.com');