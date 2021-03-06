<?php
/**
 * Joomla! entity library.
 *
 * @copyright  Copyright (C) 2017 Roberto Segura López, Inc. All rights reserved.
 * @license    See COPYING.txt
 */

namespace Phproberto\Joomla\Entity\Tests\Unit\Validation\Rule;

use Phproberto\Joomla\Entity\Validation\Rule\IsNotNull;

/**
 * IsNotNull tests.
 *
 * @since   __DEPLOY_VERSION__
 */
class IsNotNullTest extends \TestCase
{
	/**
	 * passes returns correct value.
	 *
	 * @return  void
	 */
	public function testPassesReturnsCorrectValue()
	{
		$rule = new IsNotNull;

		$this->assertTrue($rule->passes(''));
		$this->assertTrue($rule->passes('#aa'));
		$this->assertTrue($rule->passes('null'));
		$this->assertTrue($rule->passes(0));
		$this->assertTrue($rule->passes(0.1));
		$this->assertTrue($rule->passes(1.1));
		$this->assertTrue($rule->passes('1.1'));
		$this->assertTrue($rule->passes('12,000'));

		$this->assertFalse($rule->passes(null));
	}
}
