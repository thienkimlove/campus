<?php namespace App\Http\Controllers;

use App\City;
use App\Http\Requests;
use App\Http\Requests\CityRequest;


class CitiesController extends AdminController
{

    public function index()
    {
        $cities = City::latest()->paginate(env('ITEM_PER_PAGE'));
        return view('admin.city.index', compact('cities'));
    }

    public function create()
    {
        return view('admin.city.form');
    }

    public function store(CityRequest $request)
    {
        City::create([
            'name' => $request->input('name'),
        ]);

        flash('Create city success!', 'success');
        return redirect('admin/cities');
    }


    /**
     * display form for edit category
     * @param $id
     * @return $this
     */
    public function edit($id)
    {
        $city = City::find($id);
        return view('admin.city.form', compact('city'));
    }

    /**
     * @param $id
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, CityRequest $request)
    {
        $city = City::find($id);

        $data = [
            'name' => $request->input('name'),
        ];

        $city->update($data);

        flash('Update city success!', 'success');
        return redirect('admin/cities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $city = City::find($id);

        $city->delete();

        flash('Success deleted city!');
        return redirect('admin/cities');
    }



}
