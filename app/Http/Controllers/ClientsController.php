<?php namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests;
use App\Http\Requests\ClientRequest;

class ClientsController extends AdminController
{

    public function index()
    {
        $clients = Client::latest()->paginate(env('ITEM_PER_PAGE'));
        return view('admin.client.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.client.form');
    }

    public function store(ClientRequest $request)
    {
        $data = $request->all();
        $data['image'] =  ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image')) : '';
        Client::create($data);
        flash('Create client success!', 'success');
        return redirect('admin/clients');
    }


    /**
     * display form for edit category
     * @param $id
     * @return $this
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('admin.client.form', compact('client'));
    }

    /**
     * @param $id
     * @param ClientRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, ClientRequest $request)
    {
        $client = Client::find($id);

        $data = [
            'name' => $request->input('name'),
        ];

        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['image'] = $this->saveImage($request->file('image'));
        }

        $client->update($data);

        flash('Update client success!', 'success');
        return redirect('admin/clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);


        $client->delete();

        flash('Success deleted client!');
        return redirect('admin/clients');
    }



}
