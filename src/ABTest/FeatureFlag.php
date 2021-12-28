<?php
declare(strict_types=1);

namespace PhpFeatureFlagSample\ABTest;

enum FeatureFlag
{
    case FeatureA;
    case FeatureB;
    case FeatureC;

    public function testType(): TestType
    {
        return match ($this) {
            self::FeatureA => $this->testTypeFeatureA(),
            self::FeatureB => $this->testTypeFeatureB(),
            self::FeatureC => $this->testTypeFeatureC(),
        };
    }

    private function testTypeFeatureA(): TestType
    {
        // TODO: Implement isEnabledFeatureA() method.
    }

    private function testTypeFeatureB(): TestType
    {
        // TODO: Implement isEnabledFeatureB() method.
    }

    private function testTypeFeatureC(): TestType
    {
        // TODO: Implement isEnabledFeatureC() method.
    }
}
