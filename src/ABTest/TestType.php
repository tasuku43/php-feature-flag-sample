<?php
declare(strict_types=1);

namespace PhpFeatureFlagSample\ABTest;

enum TestType
{
    case A;
    case B;
    case Unknown;
}
