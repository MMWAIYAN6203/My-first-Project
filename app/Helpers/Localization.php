<?php

namespace App\Helpers;

class Localization
{
    public static function setLocale(string $locale)
    {
        if (!$locale) abort(400);
        $locale = strtolower($locale);
        if (!in_array($locale, ['en', 'thai', 'mm'])) {
            abort(400);
        }
        app()->setLocale($locale);
        session()->put('locale', $locale);
    }
}
