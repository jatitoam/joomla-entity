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
 * Check that a string is present in another string.
 *
 * @since   __DEPLOY_VERSION__
 */
class SubstrCount extends Rule implements RuleContract
{
	/**
	 * String to search for.
	 *
	 * @var  string
	 */
	protected $substr;

	/**
	 * Constructor
	 *
	 * @param   string  $substr  String to search for
	 */
	public function __construct($substr)
	{
		$this->substr = $substr;
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
		return substr_count($value, $this->substr) > 0;
	}
}
