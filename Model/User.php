<?php

namespace Model;

class User
{

    protected string $firstname;
    protected string $username;
    protected string $email;
    protected string $avatar;
    protected string $date_created;
    protected string $password;
    protected string $status;
    protected int    $loan_id;

    /**
     * @param string $firstname
     * @param string $username
     * @param string $email
     * @param string $avatar
     * @param string $date_created
     * @param string $password
     * @param string $status
     * @param int $loan_id
     */
    public function __construct(string $firstname, string $username, string $email, string $avatar, string $date_created, string $password, string $status, int $loan_id)
    {
        $this->firstname = $firstname;
        $this->username = $username;
        $this->email = $email;
        $this->avatar = $avatar;
        $this->date_created = $date_created;
        $this->password = $password;
        $this->status = $status;
        $this->loan_id = $loan_id;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getAvatar(): string
    {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     */
    public function setAvatar(string $avatar): void
    {
        $this->avatar = $avatar;
    }

    /**
     * @return string
     */
    public function getDateCreated(): string
    {
        return $this->date_created;
    }

    /**
     * @param string $date_created
     */
    public function setDateCreated(string $date_created): void
    {
        $this->date_created = $date_created;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getLoanId(): int
    {
        return $this->loan_id;
    }

    /**
     * @param int $loan_id
     */
    public function setLoanId(int $loan_id): void
    {
        $this->loan_id = $loan_id;
    }


}