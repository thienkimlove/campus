<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\LinkRequest;
use App\Link;


class LinksController extends AdminController
{    

    public function index()
    {
        $links = Link::latest()->paginate(env('ITEM_PER_PAGE'));
        return view('admin.link.index', compact('links'));
    }

    public function create()
    {       
        return view('admin.link.form');
    }

    public function store(LinkRequest $request)
    {
        Link::create([
            'name' => $request->input('name'),
            'url' => $request->input('url')
        ]);

        flash('Create link success!', 'success');
        return redirect('admin/links');
    }


    /**
     * display form for edit category
     * @param $id
     * @return $this
     */
    public function edit($id)
    {
        $link = Link::find($id);
        return view('admin.link.form', compact('link'));
    }

    /**
     * @param $id
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, LinkRequest $request)
    {
        $link = Link::find($id);

        $data = [
            'name' => $request->input('name'),
            'url' => $request->input('url')
        ];


        $link->update($data);

        flash('Update link success!', 'success');
        return redirect('admin/links');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $link = Link::find($id);

        $link->delete();

        flash('Success deleted link!');
        return redirect('admin/links');
    }



}
