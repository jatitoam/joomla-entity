<?php
/**
 * Joomla! entity library.
 *
 * @copyright  Copyright (C) 2017 Roberto Segura López, Inc. All rights reserved.
 * @license    See COPYING.txt
 */

namespace Phproberto\Joomla\Entity\Tests\Unit\Acl\Stubs;

use Phproberto\Joomla\Entity\ComponentEntity;
use Phproberto\Joomla\Entity\Acl\Traits\HasAcl;
use Phproberto\Joomla\Entity\Acl\Contracts\Aclable;

/**
 * Entity to test Acl decorator.
 *
 * @since  __DEPLOY_VERSION__
 */
class EntityWithAcl extends ComponentEntity implements Aclable
{
	use HasAcl;
}
