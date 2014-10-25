<?php
/**
 * Created by PhpStorm.
 * User: Sergii Zheleznytskyi 
 * Date: 25.10.14
 * Time: 12:41
 */


/**
 * Product.
 */
interface Product
{

    /**
     * Return Product Name.
     *
     * @return string
     */
    public function getName();
}

/**
 * Abstract Factory.
 */
abstract class AbstractFactory
{

    /**
     * Return Fabric.
     *
     * @param string $type. Fabric Type.
     *
     * @return AbstractFactory.
     *
     * @throws Exception
     */
    public static function getFactory($type)
    {
        switch ($type) {
            case 'simple':
                return new FirstFactory();
            case 'configurable':
                return new SecondFactory();
        }
        throw new Exception('Bad config');
    }

    /**
     * Return Product.
     *
     * @return Product
     */
    abstract public function getProduct();
}

/**
 * Factory.
 */
class FirstFactory extends AbstractFactory
{

    /**
     * Get Product Object.
     *
     * @return Product
     */
    public function getProduct()
    {
        return new SimpleProduct();
    }
}

/**
 * Product.
 */
class SimpleProduct implements Product
{

    /**
     * Return Product Name.
     *
     * @return string
     */
    public function getName()
    {
        return 'The product from the first factory';
    }
}



class SecondFactory extends AbstractFactory
{

    /**
     * Return Product Name.
     *
     * @return string
     */
    public function getProduct()
    {
        return new ConfigurableProduct();
    }
}

/**
 * Product.
 */
class ConfigurableProduct implements Product
{

    /**
     * Return Product Name.
     *
     * @return string
     */
    public function getName()
    {
        return 'The product from second factory';
    }
}

$firstProduct = AbstractFactory::getFactory('simple')->getProduct();
$secondProduct = AbstractFactory::getFactory('configurable')->getProduct();
