<?php
/**
 * User: Sergii Zheleznytskyi
 * Date: 25.10.14
 * Time: 15:13
 */

/**
 * Document Prototype.
 */
class DocumentPrototype
{
    protected $_paragraph;
    protected $_header;
    protected $_list;

    /**
     * Assign Object To Protected Properties.
     *
     * @param Paragraph $paragraph .
     * @param Header $header .
     * @param Lists $list .
     */
    public function __construct(Paragraph $paragraph, Header $header, Lists $list)
    {
        $this->_paragraph = $paragraph;
        $this->_header = $header;
        $this->_list = $list;
    }

    /**
     * @return Paragraph
     */
    public function getParagraph()
    {
        return clone $this->_paragraph;
    }

    /**
     * @return Header
     */
    public function getHeader()
    {
        return clone $this->_header;
    }

    /**
     * @return Lists
     */
    public function getLists()
    {
        return clone $this->_list;
    }
}

/**
 * Paragraph Class. Format Text.
 */
class Paragraph
{
    /**
     * Return Format Information.
     *
     * @return string
     */
    public function formatInfo()
    {
        return 'Format Info';
    }
}

/**
 * Header Class. Generate Header Info.
 */
class Header
{
    /**
     * Return Generated Header.
     *
     * @return string
     */
    public function generateHeader()
    {
        return 'Generated Header';
    }
}

/**
 * Header Class. Generate Lists.
 */
class Lists
{
    /**
     * Return Generated List.
     *
     * @return string
     */
    public function generateList()
    {
        return 'Generated List';
    }
}

$prototype = new DocumentPrototype(new Paragraph(), new Header(), New Lists());

$prototype->getParagraph();
$prototype->getHeader();
$prototype->getLists();
