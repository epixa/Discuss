<?php
/**
 * Epixa - Discuss
 */

namespace User\Model\Auth;

/**
 * @category   Module
 * @package    User
 * @subpackage Model
 * @copyright  2010 epixa.com - Court Ewing
 * @license    http://github.com/epixa/Discuss/blob/master/LICENSE New BSD
 * @author     Court Ewing (court@epixa.com)
 *
 * @Entity
 *
 * @property-write string $password
 */
class StandardAuthAdapter extends AbstractAuthAdapter
{
    /**
     * @Column(name="pass_hash" type="string" length="512")
     */
    protected $_passHash;


    /**
     * Hash the provided password and set it as the pass hash
     * 
     * @param  string $password
     * @return StandardAuthAdapter *Provides fluid interface*
     */
    public function setPassword($password)
    {
        $passwordValidator = new \User\Validator\SecurePasswordValidator();
        if (!$passwordValidator->isValid($password)) {
            throw new \InvalidArgumentException('Password is invalid');
        }

        $this->_passHash = $this->_createPassHash($password);
        
        return $this;
    }

    /**
     * Is the given value, after being hashed, identical to the password hash?
     *
     * @param  string $value
     * @return boolean
     */
    public function compareToPassword($value)
    {
        if (!$this->_passHash) {
            throw new \LogicException('No password exists to compare against');
        }

        if ($this->_createPassHash($value) !== $this->_passHash) {
            return false;
        }
        
        return true;
    }


    /**
     * Run the given password through a hashing algorithm and return the result
     *
     * @param  string $password
     * @return string
     */
    protected function _createPassHash($password)
    {
        if (!$this->user->email) {
            throw new \LogicException('Cannot create a hash without');
        }

        return $password;
    }
}