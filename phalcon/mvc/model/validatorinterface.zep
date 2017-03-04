
/*
 +------------------------------------------------------------------------+
 | Phalcon Framework                                                      |
 +------------------------------------------------------------------------+
 | Copyright (c) 2011-2017 Phalcon Team (https://phalconphp.com)          |
 +------------------------------------------------------------------------+
 | This source file is subject to the New BSD License that is bundled     |
 | with this package in the file docs/LICENSE.txt.                        |
 |                                                                        |
 | If you did not receive a copy of the license and are unable to         |
 | obtain it through the world-wide-web, please send an email             |
 | to license@phalconphp.com so we can send you a copy immediately.       |
 +------------------------------------------------------------------------+
 | Authors: Andres Gutierrez <andres@phalconphp.com>                      |
 |          Eduar Carvajal <eduar@phalconphp.com>                         |
 +------------------------------------------------------------------------+
 */

namespace Phalcon\Mvc\Model;

use Phalcon\Mvc\EntityInterface;

/**
 * Phalcon\Mvc\Model\ValidatorInterface
 *
 * Interface for Phalcon\Mvc\Model validators
 *
 * @deprecated 3.1.0
 * @see Phalcon\Validation\ValidatorInterface
 */
interface ValidatorInterface
{

	/**
	 * Returns messages generated by the validator
	 *
	 * @return array
	 */
	public function getMessages();

	/**
	 * Executes the validator
	 *
	 * @param \Phalcon\Mvc\ModelInterface record
	 * @return boolean
	 */
	public function validate(<EntityInterface> record) -> boolean;
}
