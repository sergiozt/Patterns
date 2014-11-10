<?php

/**
 * User: s.zheleznytskyi
 * Date: 10/22/14
 * Time: 6:53 PM
 */
class FormManager
{
    /**
     * Form register type.
     */
    const REGISTER_FROM     = 'register';

    /**
     * Form post type.
     */
    const POST_FROM         = 'post';

    /**
     * Get Form Object.
     *
     * @param string $type. form type.
     *
     * @return object|bool.
     */
    public static function getForm($type)
    {
        switch ($type) {
            case self::REGISTER_FROM:
                return new RegisterForm();
                break;
            case self::POST_FROM:
                return new PostForm();
                break;
        }

        return false;
    }
}

abstract class Form
{
    /**
     * Generate form name.
     *
     * @return string.
     */
    abstract public function generateName();
}

class RegisterForm extends Form
{
    /**
     * Generate form name.
     *
     * @return string.
     */
    public function generateName()
    {
        return "registration form";
    }
}

class PostForm extends Form
{
    /**
     * Generate form name.
     *
     * @return string.
     */
    public function generateName()
    {
        return "posting form!";
    }
}

$form = FormManager::getForm('register');
$form->generateName();