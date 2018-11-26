<?php

namespace TROISWA\CommandeBundle\Entity;

/**
 * Employees
 */
class Employees
{
    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $extension;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $jobtitle;

    /**
     * @var integer
     */
    private $employeenumber;

    /**
     * @var \TROISWA\CommandeBundle\Entity\Employees
     */
    private $reportsto;

    /**
     * @var \TROISWA\CommandeBundle\Entity\Offices
     */
    private $officecode;


    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Employees
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Employees
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set extension
     *
     * @param string $extension
     *
     * @return Employees
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Employees
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set jobtitle
     *
     * @param string $jobtitle
     *
     * @return Employees
     */
    public function setJobtitle($jobtitle)
    {
        $this->jobtitle = $jobtitle;

        return $this;
    }

    /**
     * Get jobtitle
     *
     * @return string
     */
    public function getJobtitle()
    {
        return $this->jobtitle;
    }

    /**
     * Get employeenumber
     *
     * @return integer
     */
    public function getEmployeenumber()
    {
        return $this->employeenumber;
    }

    /**
     * Set reportsto
     *
     * @param \TROISWA\CommandeBundle\Entity\Employees $reportsto
     *
     * @return Employees
     */
    public function setReportsto(\TROISWA\CommandeBundle\Entity\Employees $reportsto = null)
    {
        $this->reportsto = $reportsto;

        return $this;
    }

    /**
     * Get reportsto
     *
     * @return \TROISWA\CommandeBundle\Entity\Employees
     */
    public function getReportsto()
    {
        return $this->reportsto;
    }

    /**
     * Set officecode
     *
     * @param \TROISWA\CommandeBundle\Entity\Offices $officecode
     *
     * @return Employees
     */
    public function setOfficecode(\TROISWA\CommandeBundle\Entity\Offices $officecode = null)
    {
        $this->officecode = $officecode;

        return $this;
    }

    /**
     * Get officecode
     *
     * @return \TROISWA\CommandeBundle\Entity\Offices
     */
    public function getOfficecode()
    {
        return $this->officecode;
    }
}
