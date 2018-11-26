<?php

namespace TROISWA\CommandeBundle\Entity;

/**
 * Productlines
 */
class Productlines
{
    /**
     * @var string
     */
    private $textdescription;

    /**
     * @var string
     */
    private $htmldescription;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $productline;


    /**
     * Set textdescription
     *
     * @param string $textdescription
     *
     * @return Productlines
     */
    public function setTextdescription($textdescription)
    {
        $this->textdescription = $textdescription;

        return $this;
    }

    /**
     * Get textdescription
     *
     * @return string
     */
    public function getTextdescription()
    {
        return $this->textdescription;
    }

    /**
     * Set htmldescription
     *
     * @param string $htmldescription
     *
     * @return Productlines
     */
    public function setHtmldescription($htmldescription)
    {
        $this->htmldescription = $htmldescription;

        return $this;
    }

    /**
     * Get htmldescription
     *
     * @return string
     */
    public function getHtmldescription()
    {
        return $this->htmldescription;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Productlines
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Get productline
     *
     * @return string
     */
    public function getProductline()
    {
        return $this->productline;
    }
}
