<?php

/**
 * This file is part of the pantarei/oauth2 package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\OAuth2\Tests\Entity;

use Pantarei\OAuth2\Model\AuthorizeManagerInterface;

/**
 * AuthorizeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AuthorizeRepository extends AbstractModelManager implements AuthorizeManagerInterface
{
    public function findAuthorizeByClientIdUsername($client_id, $username)
    {
        return $this->findOneBy(array(
            'client_id' => $client_id,
            'username' => $username,
        ));
    }
}
