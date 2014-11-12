<?php
/**
 * User: Sergii Zheleznytskyi 
 * Date: 12.11.14
 * Time: 16:14
 */

class ObjectCollection
{
    /**
     * @var SortInterface.
     */
    protected $_sortAlgorithm;

    /**
     * @param array $data. Choose algorithm and call sort method.
     * @return bool
     */
    public function sort(array &$data)
    {
        if(!$this->_sortAlgorithm){
            return false;
        }

        return $this->_sortAlgorithm->sort($data);
    }

    /**
     *  Set sort algorithm.
     *
     * @param SortInterface $sortAlgorithm.
     */
    public function setSortAlgorithm(SortInterface $sortAlgorithm)
    {
        $this->_sortAlgorithm = $sortAlgorithm;
    }
}