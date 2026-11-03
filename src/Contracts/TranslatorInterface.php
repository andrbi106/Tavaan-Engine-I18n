<?php

declare(strict_types=1);

namespace Tavaan\Engine\I18n\Contracts;

/**
 * قرارداد Translator.
 *
 * @see \Tavaan\Engine\I18n\Translator
 * @api 1.0
 */
interface TranslatorInterface
{
    /**
     * متد get.
     *
     * @return mixed
     */
    public function get(/* ... */): mixed;

    /**
     * متد has.
     *
     * @return mixed
     */
    public function has(/* ... */): mixed;

    /**
     * متد choice.
     *
     * @return mixed
     */
    public function choice(/* ... */): mixed;

    /**
     * متد setLocale.
     *
     * @return mixed
     */
    public function setLocale(/* ... */): mixed;

    /**
     * متد getLocale.
     *
     * @return mixed
     */
    public function getLocale(/* ... */): mixed;

    /**
     * متد namespace.
     *
     * @return mixed
     */
    public function namespace(/* ... */): mixed;

    /**
     * متد addNamespace.
     *
     * @return mixed
     */
    public function addNamespace(/* ... */): mixed;
}