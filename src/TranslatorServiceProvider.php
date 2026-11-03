<?php

declare(strict_types=1);

namespace Tavaan\Engine\I18n;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\I18n\Contracts\TranslatorInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * TranslatorServiceProvider — ثبت سرویس‌های موتور Translator.
 */
final class TranslatorServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(TranslatorInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Translator($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('translator', $this->app->get(TranslatorInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\I18n\Console\Lang_checkCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            TranslatorInterface::class,
            'translator',
        ];
    }
}