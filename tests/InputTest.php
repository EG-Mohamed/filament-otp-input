<?php

use Filament\Schemas\Schema;
use HasanAhani\FilamentOtpInput\Components\OtpInput;
use HasanAhani\FilamentOtpInput\Tests\Fixtures\Livewire;
use Illuminate\Support\Str;

it('can be rendered', function () {
    $field = (new OtpInput($name = Str::random()))
        ->numberInput($number = 5)
        ->container(Schema::make(Livewire::make()));

    expect($field)
        ->getStatePath()->toBe($name);

    expect($field)->getNumberInput()->toBe($number);
});

