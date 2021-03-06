<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Tests\Model\Folder;

use Zibios\WrikePhpJmsserializer\Model\Folder\FolderResponseModel;
use Zibios\WrikePhpJmsserializer\Tests\Model\ResponseModelTestCase;

/**
 * Folder Response Model Test.
 */
class FolderResponseModelTest extends ResponseModelTestCase
{
    /**
     * @var string
     */
    protected $sourceClass = FolderResponseModel::class;
}
