<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Datatables;

class ContactController extends Controller
{

    public function index()
    {
        $contact = Contact::all();
        return view('admin.contact.index' , compact('contact'));
    }


    public function store(ContactRequest $request )
    {
        $contact = Contact::create($request->all());
        //dd($request);
        return  Redirect::back()->withFlashMessage('Sent Your Message For Us Successfully');
    }


    public function edit($id)
    {
        $contact = Contact::find($id);
            // update type of message to read or not
        //$contact->fill(['view' => 1])->save();
        $contact->update(['view' => 1]);

        return view('admin.contact.edit' , compact('contact'));
    }




    public function update($id , ContactRequest $request)
    {
        $contact = Contact::find($id);
       // $contact->fill($request->all())->save();
        $contact->update($request->all());
        $contact->save();
        return  Redirect::back()->withFlashMessage('Updated Message Successfully');
    }

    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/adminpanel/contact')->withFlashMessage('Message Deleted Successfully');
    }


    public function newMessage()
    {
        $contact = Contact::where('view' , 0)->get();
            return view('admin.contact.new_messages' , compact('contact'));
    }

    public function anyData(Contact $contact)
    {

        $contact = $contact->all();

        return Datatables::of($contact)

            ->editColumn('contact_name', function ($model) {
                return '<a href="'.url('/adminpanel/contact/' . $model->id . '/edit').'">'.$model->contact_name.'</a>';
            })

            ->editColumn('contact_type', function ($model) {
                return '<span class="badge badge-warning">' .contact()[$model->contact_type]. '</span>';
            })

            ->editColumn('view', function ($model) {
                return $model->view == 0 ? '<span class="badge badge-info">' . 'New Message' . '</span>' : '<span class="badge badge-warning">' . 'Old Message' . '</span>';
            })



            ->editColumn('bu_type', function ($model) {
                return '<a href="'.url('/adminpanel/contact/' . $model->id).'"> <span class="btn btn-danger btn-circle"> <i class="fa fa-link"></i> </span> </a>';
            })

            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/adminpanel/contact/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';

                $all .= '<a href="' . url('/adminpanel/contact/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';

                return $all;
            })
            ->make(true);

    }

}
