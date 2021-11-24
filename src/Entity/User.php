<?php

namespace Model;

use App\Entity\Entity;
use DateTime;

class User extends Entity
{

    

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->getDataWithKey('firstname');
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname)
    {
        $this->setDataWithKey('firstname', $firstname);
        return $this;
    }

      
    /**
     * getLastname
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->getDataWithKey('lastname');
    }

        
    /**
     * setLastname
     *
     * @param  mixed $lastname
     * @return void
     */
    public function setLastname(string $lastname)
    {
        $this->setDataWithKey('lastname', $lastname);
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->getDataWithKey('email');
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->setDataWithKey('email', $email);
        return $this;
    }

    /**
     * @return string
     */
    public function getAvatar(): string
    {
        return $this->getDataWithKey('avatar');
    }

    /**
     * @param string $avatar
     */
    public function setAvatar(string $avatar)
    {
        $this->setDataWithKey('avatar', $avatar);
        return $this;
    }

    /**
     * @return string
     */
    public function getDateCreated(): DateTime
    {
        return $this->getDataWithKey('dateCreated');
    }

    /**
     * @param string $date_created
     */
    public function setDateCreated(string $date_created)
    {
        $this->setDataWithKey('dateCreated', $date_created);
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->getDataWithKey('password');
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->setDataWithKey('password', $password);
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->getDataWithKey('status');
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->setDataWithKey('status', $status);
        return $this;
    }

    /**
     * @return int
     */
    public function getLoanId(): int
    {
        return $this->getDataWithKey('loanId');
    }

    /**
     * @param int $loan_id
     */
    public function setLoanId(int $loan_id)
    {
        $this->setDataWithKey('loanId', $loan_id);
        return $this;
    }


}