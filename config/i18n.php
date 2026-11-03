<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | I18N Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور i18n — همهٔ کلیدهای مستندشده در `docs/03-engines/i18n.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/i18n.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('I18N_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('I18N_PREFIX', 'i18n:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('I18N_LOG_CHANNEL', 'i18n'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Lang',
        'accessor' => 'translator',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];