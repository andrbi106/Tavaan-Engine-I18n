<?php

declare(strict_types=1);

namespace Tavaan\Engine\I18n\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * lang:check command.
 */
final class LangCheckCommand implements CommandInterface
{
    public function name(): string
    {
        return 'lang:check';
    }

    public function description(): string
    {
        return 'Run lang:check (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
