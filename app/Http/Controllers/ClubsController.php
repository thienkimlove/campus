<?php namespace App\Http\Controllers;

use App\Club;
use App\Http\Requests;
use App\Http\Requests\ClubRequest;
use App\University;
use App\User;


class ClubsController extends AdminController
{
    public $universities;
    public $users;

    public function __construct()
    {
        parent::__construct();
        $this->universities = array('' => 'Choose University') + University::lists('name', 'id')->all();
        $this->users = array('' => 'Choose Owner') + User::lists('name', 'id')->all();
    }

    public function index()
    {
        $clubs = Club::latest()->paginate(env('ITEM_PER_PAGE'));
        return view('admin.club.index', compact('clubs'));
    }

    public function create()
    {
        $universities = $this->universities;
        $users = $this->users;
        return view('admin.club.form', compact('universities', 'users'));
    }

    public function store(ClubRequest $request)
    {
        Club::create([
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
            'university_id' => ($request->input('university_id') == 0) ? null : $request->input('university_id'),
            'user_id' => ($request->input('user_id') == 0) ? null : $request->input('user_id'),
            'status' => ($request->input('status') == 'on') ? true : false,
            'image' =>  ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image')) : ''
        ]);

        flash('Create club success!', 'success');
        return redirect('admin/clubs');
    }


    /**
     * display form for edit category
     * @param $id
     * @return $this
     */
    public function edit($id)
    {
        $universities = $this->universities;
        $users = $this->users;

        $club = Club::find($id);
        return view('admin.club.form', compact('universities', 'users', 'club'));
    }

    /**
     * @param $id
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, ClubRequest $request)
    {
        $club = Club::find($id);

        $data = [
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
            'university_id' => ($request->input('university_id') == 0) ? null : $request->input('university_id'),
            'user_id' => ($request->input('user_id') == 0) ? null : $request->input('user_id'),
            'status' => ($request->input('status') == 'on') ? true : false,
        ];

        if  ($request->file('image') && $request->file('image')->isValid()) {
            $data['image'] = $this->saveImage($request->file('image'));
        }

        $club->update($data);

        flash('Update club success!', 'success');
        return redirect('admin/clubs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $club = Club::find($id);

        $club->delete();

        flash('Success deleted club!');
        return redirect('admin/clubs');
    }



}
