<?php

/**
 * User: s.zheleznytskyi
 * Date: 10/22/14
 * Time: 6:53 PM
 */
class FormManager
{
    /**
     * Form Register Type.
     */
    const REGISTER_FROM     = 'register';

    /**
     * Form Post Type.
     */
    const POST_FROM         = 'post';

    /**
     * Get Form Object.
     *
     * @param string $type . Form Type.
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
     * Generate Form Name.
     *
     * @return string.
     */
    abstract public function generateName();
}

class RegisterForm extends Form
{
    /**
     * Generate Form Name.
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
     * Generate Form Name.
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