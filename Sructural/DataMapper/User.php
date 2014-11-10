<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 10.11.14
 * Time: 19:34
 */

/**
 * DataMapper pattern
 *
 * This is the representation of a DataBase record in the memory (Entity).
 */
class User
{
    /**
     * @var int
     */
    protected $_id;

    /**
     * @var string
     */
    protected $_name;

    /**
     * @var string
     */
    protected $_email;

    /**
     * @param null $id
     * @param null $name
     * @param null $email
     */
    public function __construct($id = null, $name = null, $email = null)
    {
        $this->_id = $id;
        $this->_name = $name;
        $this->_email = $email;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->_id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->_name = $name;

        return $this;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->_email = $email;

        return $this;
    }

    /**
     * @return int
     *
     * @return $this
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->_email;
    }
}
