<?php

namespace App\Http\Controllers\Admin\Ad;

use App\Models\Ad;
use App\Models\Category;
use App\Exports\AdsExport;
use App\Filters\AdFilters;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class AdMonthOrDayController extends Controller
{
    public function index(Request $request)
    {
        $query = Ad::with(['category', 'user'])->where('per_day_or_month', 1);

        $filters = new AdFilters($request);
        $query = $filters->apply($query);

        $perPage = $request->get('per_page') ?? config('general.admin_per_page');

        $items = $query->latest('published_at')->paginate($perPage);

        $categories = Category::where('per_day_or_month', 1)->get();

        $basicFilterWhenExport = ['per_day_or_month' => 1];

        $routeName = 'admin.ads-month-or-day.index';

        $title =  __('dashboard.ads for rent');

        // Table headers
        $tableHeaders = $this->tableHeaders();

        // Table items formatted as an associative array
        $tableItems = $items->map(function ($item) {
            return [
                'id' => $item->id,
                'category' => $item->category->name ?? '',
                'user_info' => $item->user->name . "<br>" . $item->user->phone,
                'price' => number_format($item->price),
                'area' => $item->area,
                'status' => view('admin.ads.partials.status-badge', ['status' => $item->status])->render(),
                'published_at' => $item->published_at,
                'actions' => view('admin.ads.partials.actions', ['item' => $item])->render(),
            ];
        });

        return view('admin.ads.index', compact('items', 'categories', 'routeName', 'title', 'tableHeaders', 'tableItems', 'basicFilterWhenExport'));
    }


    public function tableHeaders()
    {
        return  [
            'id' => __('dashboard.ad id'),
            'category' => __('dashboard.category'),
            'user_info' => __('dashboard.user info'),
            'price' => __('dashboard.price'),
            'area' => __('dashboard.area'),
            'status' => __('dashboard.status'),
            'published_at' => __('dashboard.published at'),
            'actions' => __('dashboard.actions')
        ];
    }

    public function export(Request $request)
    {
        return Excel::download(new AdsExport($request), 'ads.xlsx');
    }

}
