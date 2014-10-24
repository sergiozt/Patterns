<?php

/**
 * User: s.zheleznytskyi
 * Date: 10/22/14
 * Time: 6:53 PM
 */

/**
 * Fabric Interface.
 */
interface Fabric
{
    /**
     * Get Product Object.
     *
     * @return object Product.
     */
    public static function getProduct();
}

/**
 * Product Interface.
 */
interface Product
{
    /**
     * Get Product Type.
     *
     * @return string.
     */
    public function getType();
}

/**
 * Configurable Product Fabric.
 */
class ConfigurableFabric implements Fabric
{
    /**
     * Get Product Object.
     *
     * @return object Product. Fabric Method.
     */
    public static function getProduct()
    {
        return new ConfigurableProduct();
    }
}

/**
 * Bundle Product Fabric.
 */
class BundleFabric implements Fabric
{
    /**
     * Get Product Object. Fabric Method.
     *
     * @return object Product.
     */
    public static function getProduct()
    {
        return new BundleProduct();
    }
}

/**
 * Configurable Product.
 */
class ConfigurableProduct implements Product
{
    /**
     * Get Product Type.
     *
     * @return string.
     */
    public function getType()
    {
        return 'configurable';
    }
}

/**
 * Bundle Product.
 */
class BundleProduct implements Product
{
    /**
     * Get Product Type.
     *
     * @return string.
     */
    public function getType()
    {
        return 'bundle';
    }
}

$productConf = ConfigurableFabric::getProduct();
$productConf->getType();

$productBundle = BundleFabric::getProduct();
$productBundle->getType();
