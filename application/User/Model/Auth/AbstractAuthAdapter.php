<?php
/**
 * Epixa - Discuss
 */

namespace User\Model\Auth;

use Epixa\Model\AbstractModel;

/**
 * @category   Module
 * @package    User
 * @subpackage Model
 * @copyright  2010 epixa.com - Court Ewing
 * @license    http://github.com/epixa/Discuss/blob/master/LICENSE New BSD
 * @author     Court Ewing (court@epixa.com)
 *
 * @Entity(table="user_auth")
 * @InheritanceType="SINGLE_TABLE")
 * @DiscriminatorColumn(name="discriminator", type="string")
 * @DiscriminatorMap({
 *   "User\Model\Auth\StandardAuthAdapter" = "User\Model\Auth\StandardAuthAdapter",
 *   "User\Model\Auth\FacebookAuthAdapter" = "User\Model\Auth\FacebookAuthAdapter",
 *   "User\Model\Auth\GoogleAuthAdapter"   = "User\Model\Auth\GoogleAuthAdapter",
 *   "User\Model\Auth\TwitterAuthAdapter"  = "User\Model\Auth\TwitterAuthAdapter"
 * })
 *
 * @property integer         $id
 * @property User\Model\User $user
 * @property DateTime        $dateAdded
 */
abstract class AbstractAuthAdapter extends AbstractModel
{
    /**
     * @Id
     * @Column(type="integer", name="id")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @ManyToOne(targetEntity="User\Model\User", inversedBy="")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @Column(name="date_added", type="datetime")
     */
    protected $dateAdded;
}