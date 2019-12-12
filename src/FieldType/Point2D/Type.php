<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */

declare(strict_types=1);

namespace App\FieldType\Point2D;

use eZ\Publish\SPI\FieldType\Generic\Type as GenericType;

final class Type extends GenericType
{
    public function getFieldTypeIdentifier(): string
    {
        return 'point2d';
    }
}