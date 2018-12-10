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

namespace Phalcon\Test\Unit\Application;

use UnitTester;

/**
 * Class GetDefaultModuleCest
 *
 * @package Phalcon\Test\Unit\Application
 */
class GetDefaultModuleCest
{
    /**
     * Tests Phalcon\Application :: getDefaultModule()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function applicationGetDefaultModule(UnitTester $I)
    {
        $I->wantToTest("Application - getDefaultModule()");
        $I->skipTest("Need implementation");
    }
}