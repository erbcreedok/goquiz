<?php

namespace App\Http\Controllers\Admin;

use App\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();

        return view('admin.partners.index', compact('partners'));
    }

    public function add()
    {
        return view('admin.partners.add');
    }

    public function postAdd(Request $request)
    {
        $partner = new Partner();
        $partner->title = $request->input('title');
        $partner->description = $request->input('description');

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $path = public_path() . '/uploads/logos';
            $filename = time() . '.' . $file->getClientOriginalExtension();

            if ($file->move($path, $filename)) {
                $partner->logo = '/uploads/logos/' . $filename;
            }
        }

        $partner->save();

        return redirect(route('admin::partners::index'));
    }
}
