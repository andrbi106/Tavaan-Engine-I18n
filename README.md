# Tavaan Engine — I18n

> **بین‌المللی‌سازی** — موتور I18n در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.i18n` |
| نام | `I18n` |
| عنوان فارسی | بین‌المللی‌سازی |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\I18n` |
| نوع | `engine` |
| Facade | `Lang` (accessor: `translator`) |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\I18n\Contracts\TranslatorInterface`

## Facadeها

- `Tavaan\Engine\I18n\Facades\Lang`

## کلاس‌های اصلی

- `src/I18nServiceProvider.php`
- `src/Jalali/Jalali.php`
- `src/Jalali/JalaliDate.php`
- `src/NumberFormatter.php`
- `src/PersianFormatter.php`
- `src/PluralRules.php`
- `src/Translator.php`
- `src/helpers.php`

## Service Providerها

- `Tavaan\Engine\I18n\I18nServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`

## پیکربندی

- فایل پیکربندی: `config/i18n.php`
- کلید: `i18n`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-I18n.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-I18n`** (این مخزن) | موتور I18n |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
