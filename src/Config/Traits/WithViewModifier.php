<?php

namespace Conquer\Auth\Config\Traits;

use Conquer\Auth\Config\Traits\Configuration\WithViewModifierAliasConfiguration;
use Conquer\Auth\Config\Traits\Configuration\WithViewModifierConfiguration;
use Conquer\Auth\Config\Traits\Helpers\WithViewModifierAliasHelper;
use Conquer\Auth\Config\Traits\Helpers\WithViewModifierHelper;

/**
 * Help you to handle the view's configuration.
 */
trait WithViewModifier
{
    use WithViewModifierConfiguration;
    use WithViewModifierAliasConfiguration;
    use WithViewModifierHelper;
    use WithViewModifierAliasHelper;
}
