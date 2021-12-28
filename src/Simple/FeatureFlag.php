<?php
declare(strict_types=1);

namespace PhpFeatureFlagSample\Simple;

enum FeatureFlag
{
    case FeatureA;
    case FeatureB;
    case FeatureC;

    public function isEnabled(): bool
    {
        return match ($this) {
            self::FeatureA => $this->isEnabledFeatureA(),
            self::FeatureB => $this->isEnabledFeatureB(),
            self::FeatureC => $this->isEnabledFeatureC(),
        };
    }

    private function isEnabledFeatureA(): bool
    {
        // TODO: Implement isEnabledFeatureA() method.
    }

    private function isEnabledFeatureB(): bool
    {
        // TODO: Implement isEnabledFeatureB() method.
    }

    private function isEnabledFeatureC(): bool
    {
        // TODO: Implement isEnabledFeatureC() method.
    }
}
