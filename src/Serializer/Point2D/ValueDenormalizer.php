<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */

declare(strict_types=1);

namespace App\Serializer\Point2D;

use App\FieldType\Point2D\Value;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

final class ValueDenormalizer implements DenormalizerInterface
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['x']) && isset($data['y'])) {
            // Support for old format
            $data = [ $data['x'], $data['y'] ];
        }

        return new $class($data);
    }

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === Value::class;
    }
}