<?php namespace App\Http\Controllers;


use App\City;
use App\Http\Requests;
use App\Http\Requests\UniversityRequest;
use App\University;


class UniversitiesController extends AdminController
{
    public $cities;

    public function __construct()
    {
        parent::__construct();
        $this->cities = array('' => 'Choose city') + City::lists('name', 'id')->all();
    }

    public function index()
    {
        $universities = University::latest()->paginate(env('ITEM_PER_PAGE'));
        return view('admin.university.index', compact('universities'));
    }

    public function create()
    {
        $cities = $this->cities;
        return view('admin.university.form', compact('cities'));
    }

    public function store(UniversityRequest $request)
    {
        University::create([
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
            'city_id' => ($request->input('city_id') == 0) ? null : $request->input('city_id'),
        ]);

        flash('Create university success!', 'success');
        return redirect('admin/universities');
    }


    /**
     * display form for edit category
     * @param $id
     * @return $this
     */
    public function edit($id)
    {
        $cities = $this->cities;

        $university = University::find($id);
        return view('admin.university.form', compact('cities', 'university'));
    }

    /**
     * @param $id
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, UniversityRequest $request)
    {
        $university = University::find($id);

        $data = [
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
            'city_id' => ($request->input('city_id') == 0) ? null : $request->input('city_id'),
        ];

        $university->update($data);

        flash('Update university success!', 'success');
        return redirect('admin/universities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $university = University::find($id);

        $university->delete();

        flash('Success deleted university!');
        return redirect('admin/universities');
    }



}
