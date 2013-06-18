<?php

/**
 * This file is part of the pantarei/oauth2 package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\OAuth2\Tests\TokenType;

use Pantarei\OAuth2\Model\ModelManagerFactory;
use Pantarei\OAuth2\Tests\WebTestCase;
use Pantarei\OAuth2\TokenType\MacTokenTypeHandler;
use Symfony\Component\HttpFoundation\Request;

class MacTokenTypeHandlerTest extends WebTestCase
{
    /**
     * @expectedException \Pantarei\OAuth2\Exception\TemporarilyUnavailableException
     */
    public function testExceptionGetAccessToken()
    {
        $request = new Request();
        $handler = new MacTokenTypeHandler();
        $handler->getAccessToken($request);
    }

    /**
     * @expectedException \Pantarei\OAuth2\Exception\TemporarilyUnavailableException
     */
    public function testExceptionCreateAccessToken()
    {
        $modelManagerFactory = new ModelManagerFactory();
        $handler = new MacTokenTypeHandler();
        $handler->createAccessToken($modelManagerFactory, 'foo');
    }
}
