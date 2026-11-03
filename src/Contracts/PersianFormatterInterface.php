<?php

declare(strict_types=1);

namespace Tavaan\Engine\I18n\Contracts;

/**
 * قرارداد PersianFormatter.
 *
 * @see \Tavaan\Engine\I18n\PersianFormatter
 * @api 1.0
 */
interface PersianFormatterInterface
{
    /**
     * متد digits.
     *
     * @return mixed
     */
    public function digits(/* ... */): mixed;

    /**
     * متد number.
     *
     * @return mixed
     */
    public function number(/* ... */): mixed;

    /**
     * متد currency.
     *
     * @return mixed
     */
    public function currency(/* ... */): mixed;

    /**
     * متد date.
     *
     * @return mixed
     */
    public function date(/* ... */): mixed;

    /**
     * متد toLatinDigits.
     *
     * @return mixed
     */
    public function toLatinDigits(/* ... */): mixed;
}