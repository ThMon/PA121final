<?php

namespace TROISWA\CommandeBundle\Entity;

/**
 * Products
 */
class Products
{
    /**
     * @var string
     */
    private $productname;

    /**
     * @var string
     */
    private $productscale;

    /**
     * @var string
     */
    private $productvendor;

    /**
     * @var string
     */
    private $productdescription;

    /**
     * @var integer
     */
    private $quantityinstock;

    /**
     * @var float
     */
    private $buyprice;

    /**
     * @var float
     */
    private $msrp;

    /**
     * @var string
     */
    private $productcode;

    /**
     * @var \TROISWA\CommandeBundle\Entity\Productlines
     */
    private $productline;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ordernumber;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ordernumber = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set productname
     *
     * @param string $productname
     *
     * @return Products
     */
    public function setProductname($productname)
    {
        $this->productname = $productname;

        return $this;
    }

    /**
     * Get productname
     *
     * @return string
     */
    public function getProductname()
    {
        return $this->productname;
    }

    /**
     * Set productscale
     *
     * @param string $productscale
     *
     * @return Products
     */
    public function setProductscale($productscale)
    {
        $this->productscale = $productscale;

        return $this;
    }

    /**
     * Get productscale
     *
     * @return string
     */
    public function getProductscale()
    {
        return $this->productscale;
    }

    /**
     * Set productvendor
     *
     * @param string $productvendor
     *
     * @return Products
     */
    public function setProductvendor($productvendor)
    {
        $this->productvendor = $productvendor;

        return $this;
    }

    /**
     * Get productvendor
     *
     * @return string
     */
    public function getProductvendor()
    {
        return $this->productvendor;
    }

    /**
     * Set productdescription
     *
     * @param string $productdescription
     *
     * @return Products
     */
    public function setProductdescription($productdescription)
    {
        $this->productdescription = $productdescription;

        return $this;
    }

    /**
     * Get productdescription
     *
     * @return string
     */
    public function getProductdescription()
    {
        return $this->productdescription;
    }

    /**
     * Set quantityinstock
     *
     * @param integer $quantityinstock
     *
     * @return Products
     */
    public function setQuantityinstock($quantityinstock)
    {
        $this->quantityinstock = $quantityinstock;

        return $this;
    }

    /**
     * Get quantityinstock
     *
     * @return integer
     */
    public function getQuantityinstock()
    {
        return $this->quantityinstock;
    }

    /**
     * Set buyprice
     *
     * @param float $buyprice
     *
     * @return Products
     */
    public function setBuyprice($buyprice)
    {
        $this->buyprice = $buyprice;

        return $this;
    }

    /**
     * Get buyprice
     *
     * @return float
     */
    public function getBuyprice()
    {
        return $this->buyprice;
    }

    /**
     * Set msrp
     *
     * @param float $msrp
     *
     * @return Products
     */
    public function setMsrp($msrp)
    {
        $this->msrp = $msrp;

        return $this;
    }

    /**
     * Get msrp
     *
     * @return float
     */
    public function getMsrp()
    {
        return $this->msrp;
    }

    /**
     * Get productcode
     *
     * @return string
     */
    public function getProductcode()
    {
        return $this->productcode;
    }

    /**
     * Set productline
     *
     * @param \TROISWA\CommandeBundle\Entity\Productlines $productline
     *
     * @return Products
     */
    public function setProductline(\TROISWA\CommandeBundle\Entity\Productlines $productline = null)
    {
        $this->productline = $productline;

        return $this;
    }

    /**
     * Get productline
     *
     * @return \TROISWA\CommandeBundle\Entity\Productlines
     */
    public function getProductline()
    {
        return $this->productline;
    }

    /**
     * Add ordernumber
     *
     * @param \TROISWA\CommandeBundle\Entity\Orders $ordernumber
     *
     * @return Products
     */
    public function addOrdernumber(\TROISWA\CommandeBundle\Entity\Orders $ordernumber)
    {
        $this->ordernumber[] = $ordernumber;

        return $this;
    }

    /**
     * Remove ordernumber
     *
     * @param \TROISWA\CommandeBundle\Entity\Orders $ordernumber
     */
    public function removeOrdernumber(\TROISWA\CommandeBundle\Entity\Orders $ordernumber)
    {
        $this->ordernumber->removeElement($ordernumber);
    }

    /**
     * Get ordernumber
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrdernumber()
    {
        return $this->ordernumber;
    }
}
