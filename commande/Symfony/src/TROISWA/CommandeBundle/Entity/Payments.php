<?php

namespace TROISWA\CommandeBundle\Entity;

/**
 * Payments
 */
class Payments
{
    /**
     * @var \DateTime
     */
    private $paymentdate;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $checknumber;

    /**
     * @var \TROISWA\CommandeBundle\Entity\Customers
     */
    private $customernumber;


    /**
     * Set paymentdate
     *
     * @param \DateTime $paymentdate
     *
     * @return Payments
     */
    public function setPaymentdate($paymentdate)
    {
        $this->paymentdate = $paymentdate;

        return $this;
    }

    /**
     * Get paymentdate
     *
     * @return \DateTime
     */
    public function getPaymentdate()
    {
        return $this->paymentdate;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return Payments
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set checknumber
     *
     * @param string $checknumber
     *
     * @return Payments
     */
    public function setChecknumber($checknumber)
    {
        $this->checknumber = $checknumber;

        return $this;
    }

    /**
     * Get checknumber
     *
     * @return string
     */
    public function getChecknumber()
    {
        return $this->checknumber;
    }

    /**
     * Set customernumber
     *
     * @param \TROISWA\CommandeBundle\Entity\Customers $customernumber
     *
     * @return Payments
     */
    public function setCustomernumber(\TROISWA\CommandeBundle\Entity\Customers $customernumber)
    {
        $this->customernumber = $customernumber;

        return $this;
    }

    /**
     * Get customernumber
     *
     * @return \TROISWA\CommandeBundle\Entity\Customers
     */
    public function getCustomernumber()
    {
        return $this->customernumber;
    }
}
