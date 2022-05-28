<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Car;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;

class AdminCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        //
        $data = Car::all();
        return view('admin.car.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        //
        $data = Category::all();
        return view('admin.car.create', [
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request): Redirector|RedirectResponse|Application
    {
        //
        $data = new Car();
        $data->price = $request->price;
        $data->region = $request->region;
        $data->category_id = $request->category_id;
        $data->user_id = 0; // $request->user_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->notice_no = $request->notice_no;
        $data->notice_date = $request->notice_date;
        $data->brand_id = $request->brand_id;
        $data->series = $request->series;
        $data->model = $request->model;
        $data->product_year = $request->product_year;
        $data->fuel_type = $request->fuel_type;
        $data->gear = $request->gear;
        $data->kilometer = $request->kilometer;
        $data->body_type = $request->body_type;
        $data->engine_power = $request->engine_power;
        $data->engine_capacity = $request->engine_capacity;
        $data->traction = $request->traction;
        $data->door_count = $request->door_count;
        $data->color = $request->color;
        $data->guarantee = $request->guarantee;
        $data->plate_from = $request->plate_from;
        $data->seller = $request->seller;
        $data->swap = $request->swap;
        $data->use_case = $request->use_case;
        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/car');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Car $car, $id): View|Factory|Application
    {
        //
        $data = Car::find($id);
        return view('admin.car.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Car $car, $id): View|Factory|Application
    {
        //
        $data = Car::find($id);
        $datalist = Category::all();
        return view('admin.car.edit', [
            'data' => $data,
            'datalist' => $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Car $car, $id): Redirector|RedirectResponse|Application
    {
        //
        $data = Car::find($id);
        $data->price = $request->price;
        $data->region = $request->region;
        $data->category_id = $request->category_id;
        $data->user_id = 0; // $request->user_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->notice_no = $request->notice_no;
        $data->notice_date = $request->notice_date;
        $data->brand_id = $request->brand_id;
        $data->series = $request->series;
        $data->model = $request->model;
        $data->product_year = $request->product_year;
        $data->fuel_type = $request->fuel_type;
        $data->gear = $request->gear;
        $data->kilometer = $request->kilometer;
        $data->body_type = $request->body_type;
        $data->engine_power = $request->engine_power;
        $data->engine_capacity = $request->engine_capacity;
        $data->traction = $request->traction;
        $data->door_count = $request->door_count;
        $data->color = $request->color;
        $data->guarantee = $request->guarantee;
        $data->plate_from = $request->plate_from;
        $data->seller = $request->seller;
        $data->swap = $request->swap;
        $data->use_case = $request->use_case;
        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/car');

    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Car $car, $id): Redirector|RedirectResponse|Application
    {
        //
        $data = Car::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect('admin/car');
    }
}
