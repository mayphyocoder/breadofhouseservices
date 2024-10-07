<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::all();
        view()->share('categories', $categories);

        // $countries = Country::all();
        $countries = Country::withCount('job')->get();
        view()->share('countries', $countries);
        
        
        $today = Carbon::today();
        $todayCount = Visitor::whereDate('created_at', $today)->count();
        view()->share('todayCount', $todayCount);

        $startDate = Carbon::now()->startOfWeek(); // Start of the current week (Sunday by default)
        $endDate = Carbon::now()->endOfWeek();     // End of the current week (Saturday by default)
        $ThisWeek = Visitor::whereBetween('created_at', [$startDate, $endDate])->count();
        view()->share('ThisWeek', $ThisWeek);


        $currentMonth = Carbon::now()->format('m'); // Get the current month as a two-digit string
        $currentMonthCount = Visitor::whereMonth('created_at', $currentMonth)->count();
        view()->share('currentMonthCount', $currentMonthCount);


        $currentYear = Carbon::now()->year; // Get the current year
        $currentYearCount = Visitor::whereYear('created_at', $currentYear)->count();
        view()->share('currentYearCount', $currentYearCount);


        $totalCount = Visitor::count();
        view()->share('totalCount', $totalCount);
    }
}
