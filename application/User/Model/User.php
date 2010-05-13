<?php
/**
 * Epixa - Discuss
 */

namespace User\Model;

use Epixa\Model\AbstractModel;

/**
 * @category   Module
 * @package    User
 * @subpackage Model
 * @copyright  2010 epixa.com - Court Ewing
 * @license    http://github.com/epixa/Discuss/blob/master/LICENSE New BSD
 * @author     Court Ewing (court@epixa.com)
 *
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
     * @OneToMany(targetEntity="User\Model\UserAuth\AbstractAuth", mappedBy="user")
     */
    protected $auths;
}