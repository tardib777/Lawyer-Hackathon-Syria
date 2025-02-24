<?php
use Illuminate\Support\Facades\Route;

app('router')->localizedGroup(function () {
    app('router')->get('foo/{bar}', function (string $bar) {
        return response()->json([
            $bar => __('Foo'),
        ]);
    });
});

Route::localizedGroup(function () {
    app('router')->get('foo/{bar}', function (string $bar) {
        return response()->json([
            $bar => __('Foo'),
        ]);
    });
});
config(['localization.models.filter.enabled' => false]);
