<?php

/**
 * User: Sergii Zheleznytskyi
 * Date: 10.11.14
 * Time: 19:34
 */
class UserMapper
{
    /**
     * @var DBAL
     */
    protected $_adapter;

    /**
     * @param DBAL $dbLayer
     */
    public function __construct(DBAL $dbLayer)
    {
        $this->_adapter = $dbLayer;
    }

    /**
     * Saves a user object from memory to Database.
     *
     * @param User $user
     *
     * @return boolean
     */
    public function save(User $user)
    {
        $data = array(
            'entity_id' => $user->getId(),
            'name' => $user->getName(),
            'email' => $user->getEmail(),
        );

        if (null === $user->getId()) {
            unset($data['entity_id']);
            $this->_adapter->insert($data);

            return true;
        } else {
            $this->_adapter->update($data);

            return true;
        }
    }

    /**
     * Get a user from Database based on ID and returns a User object.
     *
     * @param int $id
     *
     * @return bool|User
     */
    public function loadById($id)
    {
        $result = $this->_adapter->load('entity_id', $id);

        if (!count($result)) {
            return null;
        }

        $row = $result->current();

        return $this->_mapObject($row);
    }

    /**
     * Maps a table row to an object.
     *
     * @param array $row
     *
     * @return User
     */
    protected function _mapObject(array $row)
    {
        $user = new User;;
        $user->setId($row['entity_id'])
            ->setName($row['name'])
            ->setEmail($row['email']);

        return $user;
    }

    /**
     * Fetches an array from Database and returns an array of User objects.
     *
     * @return array
     */
    public function getCollection()
    {
        $rows = $this->_adapter->fetchAll();

        $collection = array();

        foreach ($rows as $row) {
            $collection[] = $this->_mapObject($row);
        }

        return $collection;
    }
}