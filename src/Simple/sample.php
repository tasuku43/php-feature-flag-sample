<?php

use PhpFeatureFlagSample\Simple\FeatureFlag;

if (FeatureFlag::FeatureA->isEnabled()) {
    echo 'FeatureA is enabled';
}

if (FeatureFlag::FeatureB->isEnabled()) {
    echo 'FeatureB is enabled';
}

if (FeatureFlag::FeatureC->isEnabled()) {
    echo 'FeatureC is enabled';
}
