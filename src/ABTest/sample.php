<?php

use PhpFeatureFlagSample\ABTest\FeatureFlag;
use PhpFeatureFlagSample\ABTest\TestType;

match (FeatureFlag::FeatureA->testType()) {
    TestType::A => 'Test type is A',
    TestType::B => 'Test type is B',
    default => 'Unknown',
};

match (FeatureFlag::FeatureB->testType()) {
    TestType::A => 'Test type is A',
    TestType::B => 'Test type is B',
    default => 'Unknown',
};

match (FeatureFlag::FeatureC->testType()) {
    TestType::A => 'Test type is A',
    TestType::B => 'Test type is B',
    default => 'Unknown',
};
