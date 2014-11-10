<?php
/**
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
     * Return product name.
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
     * @param string $type. Fabric type.
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
     * Return product.
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
     * Get Product object.
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
     * Return product name.
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
     * Return product name.
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
     * Return product name.
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
