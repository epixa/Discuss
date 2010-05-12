<?php

namespace User\Model;

use Epixa\Model\AbstractModel;

/**
 * @Entity(table="user_user")
 */
class User extends AbstractModel
{
    /**
     * @Id
     * @Column(type="integer", name="id")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string", name="email")
     */
    protected $email;

    /**
     * @Column(type="string", name="first_name")
     */
    protected $firstName;

    /**
     * @Column(type="string", name="last_name")
     */
    protected $lastName;

    /**
     * @JoinColumn()
     */
    protected $auth;
}