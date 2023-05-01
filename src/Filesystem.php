<?php declare(strict_types=1);
/**
 * 📁 PHP library for file and directory management. Provides basic methods for the filesystem.
 *
 * @author belomaxorka
 * @license MIT (https://github.com/belomaxorka/filesystem/blob/main/LICENSE)
 * @link https://github.com/belomaxorka/filesystem
 */

namespace belomaxorka\Filesystem;

use belomaxorka\Filesystem\Exceptions\FileNotFoundException;
use belomaxorka\Filesystem\Exceptions\FolderNotFoundException;

/**
 * Class Filesystem
 *
 * @package belomaxorka\Filesystem
 * @since v0.0.1
 */
final class Filesystem
{
	/**
	 * Checks whether a file or directory exists.
	 *
	 * @param string $path Path to target file or folder.
	 * @return bool
	 * @since v0.0.1
	 */
	public static function exists(string $path): bool
	{
		clearstatcache();

		return file_exists($path);
	}

	/**
	 * Tells whether the filename is a regular file.
	 *
	 * @param string $path Path to target file.
	 * @return bool
	 * @throws FileNotFoundException
	 * @since v0.0.1
	 */
	public static function isFile(string $path): bool
	{
		if (!self::exists($path)) {
			throw new FileNotFoundException($path);
		}

		return is_file($path);
	}

	/**
	 * Tells whether the filename is a directory.
	 *
	 * @param string $path Path to target folder.
	 * @return bool
	 * @throws FolderNotFoundException
	 * @since v0.0.1
	 */
	public static function isDir(string $path): bool
	{
		if (!self::exists($path)) {
			throw new FolderNotFoundException($path);
		}

		return is_dir($path);
	}

	/**
	 * Tells whether a file or a directory exists and is readable.
	 *
	 * @param string $path Path to target file or folder.
	 * @return bool
	 * @since v0.0.2
	 */
	public static function isReadable(string $path): bool
	{
		clearstatcache();

		return is_readable($path);
	}

	/**
	 * Tells whether the filename is writable.
	 *
	 * @param string $path Path to target file or folder.
	 * @return bool
	 * @since v0.0.2
	 */
	public static function isWritable(string $path): bool
	{
		clearstatcache();

		return is_writable($path);
	}
}
