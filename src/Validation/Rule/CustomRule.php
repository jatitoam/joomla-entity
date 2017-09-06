<?php
/**
 * Joomla! entity library.
 *
 * @copyright  Copyright (C) 2017 Roberto Segura López, Inc. All rights reserved.
 * @license    See COPYING.txt
 */

namespace Phproberto\Joomla\Entity\Validation\Rule;

use Phproberto\Joomla\Entity\Validation\Rule;
use Phproberto\Joomla\Entity\Validation\Contracts\Rule as RuleContract;

/**
 * Custom validation rule.
 *
 * @since   __DEPLOY_VERSION__
 */
class CustomRule extends Rule implements RuleContract
{
	/**
	 * String to search for.
	 *
	 * @var  \Closure
	 */
	protected $validator;

	/**
	 * Constructor
	 *
	 * @param   callable  $validator  Closure to execute
	 */
	public function __construct(callable $validator)
	{
		$this->validator = $validator;
	}

	/**
	 * Check if a value is valid.
	 *
	 * @param   mixed  $value  Value to check
	 *
	 * @return  boolean
	 */
	public function passes($value)
	{
		return call_user_func_array($this->validator, array($value));
	}
}