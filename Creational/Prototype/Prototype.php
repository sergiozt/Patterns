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
     * Assign abject protected properties.
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
 * Paragraph class. Format text.
 */
class Paragraph
{
    /**
     * Return format information.
     *
     * @return string
     */
    public function formatInfo()
    {
        return 'Format Info';
    }
}

/**
 * Header class. Generate header info.
 */
class Header
{
    /**
     * Return generated header.
     *
     * @return string
     */
    public function generateHeader()
    {
        return 'Generated Header';
    }
}

/**
 * Header class. Generate lists.
 */
class Lists
{
    /**
     * Return generated list.
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
