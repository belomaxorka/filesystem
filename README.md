<h1 align="center">Filesystem</h1>
<p align="center">📁 PHP library for file and directory management. Provides basic methods for the filesystem.</p>

<p align="center">
  <a href="https://github.com/belomaxorka/filesystem/blob/main/LICENSE"><img src="https://img.shields.io/github/license/belomaxorka/filesystem" alt="License"></a>
  <a href="https://packagist.org/packages/belomaxorka/filesystem"><img src="https://img.shields.io/packagist/stars/belomaxorka/filesystem" alt="Stars"></a>
  <a href="https://packagist.org/packages/belomaxorka/filesystem"><img src="https://img.shields.io/packagist/dt/belomaxorka/filesystem" alt="Downloads"></a>
  <a href="https://packagist.org/packages/belomaxorka/filesystem"><img src="https://img.shields.io/packagist/v/belomaxorka/filesystem" alt="Version"></a>
  <a href="https://github.com/belomaxorka/filesystem/releases"><img src="https://img.shields.io/github/release-date/belomaxorka/filesystem" alt="Last release"></a>
  <img src="https://img.shields.io/github/repo-size/belomaxorka/filesystem" alt="Size">
</p>

---

- [Requirements](#-requirements)
- [Installation](#-installation)
- [Methods](#-methods)
- [Quick Start](#-quick-start)
- [Contributors](#-contributors)
- [License](#-license)

---

## 🔧 Requirements

* PHP 7.4 or above
* [Composer](https://getcomposer.org) is required for installation

## 💾 Installation

	composer require belomaxorka/filesystem

## 🎲 Methods

### Checks whether a file or directory exists.

```php
Filesystem::exists($path);
```

| Attribute | Description                    | Type   | Required | Default |
|-----------|--------------------------------|--------|----------|---------|
| $path     | Path to target file or folder. | string | Yes      |         |

### Tells whether the filename is a regular file.

```php
Filesystem::isFile($path);
```

| Attribute | Description          | Type   | Required | Default |
|-----------|----------------------|--------|----------|---------|
| $path     | Path to target file. | string | Yes      |         |

### Tells whether the filename is a directory.

```php
Filesystem::isDir($path);
```

| Attribute | Description            | Type   | Required | Default |
|-----------|------------------------|--------|----------|---------|
| $path     | Path to target folder. | string | Yes      |         |

### Tells whether a file or a directory exists and is readable.

```php
Filesystem::isReadable($path);
```

| Attribute | Description                    | Type   | Required | Default |
|-----------|--------------------------------|--------|----------|---------|
| $path     | Path to target file or folder. | string | Yes      |         |

### Tells whether the filename is writable.

```php
Filesystem::isWritable($path);
```

| Attribute | Description                    | Type   | Required | Default |
|-----------|--------------------------------|--------|----------|---------|
| $path     | Path to target file or folder. | string | Yes      |         |

### Convert bytes to be human-readable format.

```php
Filesystem::humanFormatSize($bytes, $precision);
```

| Attribute  | Description                 | Type | Required | Default |
|------------|-----------------------------|------|----------|---------|
| $bytes     | Size in bytes.              | int  | Yes      |         |
| $precision | Precision of rounding size. | int  | No       | null    |

### Deletes a file.

```php
Filesystem::removeFile($path);
```

| Attribute | Description          | Type   | Required | Default |
|-----------|----------------------|--------|----------|---------|
| $path     | Path to target file. | string | Yes      |         |

### Tells whether the directory is empty.

```php
Filesystem::isDirEmpty($path);
```

| Attribute | Description            | Type   | Required | Default |
|-----------|------------------------|--------|----------|---------|
| $path     | Path to target folder. | string | Yes      |         |

## 📦 Quick Start

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use belomaxorka\Filesystem\Filesystem;
```

## 💚 Contributors

<a href="https://github.com/belomaxorka/filesystem/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=belomaxorka/filesystem"  alt=""/>
</a>

Made with [contrib.rocks](https://contrib.rocks).

## 📖 License

This repository is licensed under the [MIT License](LICENSE).

Copyright © 2023, [belomaxorka](https://github.com/belomaxorka)

