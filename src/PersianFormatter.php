<?php

declare(strict_types=1);

namespace Tavaan\Engine\I18n;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * PersianFormatter — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\I18n\Contracts\PersianFormatterInterface
 */
final class PersianFormatter implements Contracts\PersianFormatterInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function digits(/* ... */): mixed
    {
        // TODO: پیاده‌سازی digits مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function number(/* ... */): mixed
    {
        // TODO: پیاده‌سازی number مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function currency(/* ... */): mixed
    {
        // TODO: پیاده‌سازی currency مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function date(/* ... */): mixed
    {
        // TODO: پیاده‌سازی date مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function toLatinDigits(/* ... */): mixed
    {
        // TODO: پیاده‌سازی toLatinDigits مطابق مستندات (سند §3 API).
        return null;
    }
}