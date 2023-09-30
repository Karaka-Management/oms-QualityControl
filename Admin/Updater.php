<?php
/**
 * Jingga
 *
 * PHP Version 8.1
 *
 * @package   Modules\QualityControl\Admin
 * @copyright Dennis Eichhorn
 * @license   OMS License 2.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\QualityControl\Admin;

use phpOMS\Module\UpdaterAbstract;

/**
 * Updater class.
 *
 * @package Modules\QualityControl\Admin
 * @license OMS License 2.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
final class Updater extends UpdaterAbstract
{
    /**
     * Path of the file
     *
     * @var string
     * @since 1.0.0
     */
    public const PATH = __DIR__;
}
