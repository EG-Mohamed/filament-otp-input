<?php
namespace HasanAhani\FilamentOtpInput;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentOtpInputServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-otp-input')->hasViews();
    }

}
