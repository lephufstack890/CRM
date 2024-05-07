<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('kenh-tan-hung-list', 'App\Policies\KenhTanHungPolicy@view');
        Gate::define('kenh-tan-hung-create', 'App\Policies\KenhTanHungPolicy@create');
        Gate::define('kenh-tan-hung-update', 'App\Policies\KenhTanHungPolicy@update');
        Gate::define('kenh-tan-hung-excel', 'App\Policies\KenhTanHungPolicy@excel');

        Gate::define('kenh-dong-list', 'App\Policies\KenhDongPolicy@view');
        Gate::define('kenh-dong-create', 'App\Policies\KenhDongPolicy@create');
        Gate::define('kenh-dong-update', 'App\Policies\KenhDongPolicy@update');
        Gate::define('kenh-dong-excel', 'App\Policies\KenhDongPolicy@excel');

        Gate::define('kenh-tay-list', 'App\Policies\KenhTayPolicy@view');
        Gate::define('kenh-tay-create', 'App\Policies\KenhTayPolicy@create');
        Gate::define('kenh-tay-update', 'App\Policies\KenhTayPolicy@update');
        Gate::define('kenh-tay-excel', 'App\Policies\KenhTayPolicy@excel');

        Gate::define('kenh-phuoc-hoa-list', 'App\Policies\KenhPhuocHoaPolicy@view');
        Gate::define('kenh-phuoc-hoa-create', 'App\Policies\KenhPhuocHoaPolicy@create');
        Gate::define('kenh-phuoc-hoa-update', 'App\Policies\KenhPhuocHoaPolicy@update');
        Gate::define('kenh-phuoc-hoa-excel', 'App\Policies\KenhPhuocHoaPolicy@excel');

        Gate::define('kenh-duc-hoa-list', 'App\Policies\KenhDucHoaPolicy@view');
        Gate::define('kenh-duc-hoa-create', 'App\Policies\KenhDucHoaPolicy@create');
        Gate::define('kenh-duc-hoa-update', 'App\Policies\KenhDucHoaPolicy@update');
        Gate::define('kenh-duc-hoa-excel', 'App\Policies\KenhDucHoaPolicy@excel');

        Gate::define('mau-dieu-tiet-list', 'App\Policies\MauDieuTietPolicy@view');
        Gate::define('mau-dieu-tiet-create', 'App\Policies\MauDieuTietPolicy@create');
        Gate::define('mau-dieu-tiet-update', 'App\Policies\MauDieuTietPolicy@update');
        Gate::define('mau-dieu-tiet-excel', 'App\Policies\MauDieuTietPolicy@excel');

        Gate::define('mau-nhap-so-list', 'App\Policies\MauNhapSoPolicy@view');
        Gate::define('mau-nhap-so-create', 'App\Policies\MauNhapSoPolicy@create');
        Gate::define('mau-nhap-so-update', 'App\Policies\MauNhapSoPolicy@update');
        Gate::define('mau-nhap-so-excel', 'App\Policies\MauNhapSoPolicy@excel');

    }
}
