<?php declare(strict_types=1);
/**
 * 📁 PHP library for file and directory management. Provides basic methods for the filesystem.
 *
 * @author belomaxorka
 * @license MIT (https://github.com/belomaxorka/filesystem/blob/main/LICENSE)
 * @link https://github.com/belomaxorka/filesystem
 */

namespace belomaxorka\Filesystem\Exceptions;

use Exception;

/**
 * Class GenericNotFoundException
 *
 * @package belomaxorka\Filesystem\Exceptions
 * @since v0.0.4
 */
class GenericNotFoundException extends Exception
{
	/**
	 * GenericNotFoundException constructor.
	 *
	 * @param string $path Include path to folder or file in error message.
	 * @since v0.0.4
	 */
	public function __construct(string $path)
	{
		parent::__construct(sprintf('Folder / File (%s) could not be found.', $path));
	}
}
