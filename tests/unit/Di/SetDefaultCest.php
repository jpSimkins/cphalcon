<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Di;

use Phalcon\Di;
use UnitTester;

class SetDefaultCest
{
    /**
     * Unit Tests Phalcon\Di :: setDefault()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-06-13
     */
    public function diSetDefault(UnitTester $I)
    {
        $I->wantToTest('Di - setDefault()');

        // there is a DI container
        $I->assertInstanceOf(Di::class, Di::getDefault());

        $di = Di::getDefault();

        // delete it
        Di::reset();

        $I->assertNull(Di::getDefault());

        // set it again
        Di::setDefault($di);

        $I->assertInstanceOf(Di::class, Di::getDefault());
    }
}
