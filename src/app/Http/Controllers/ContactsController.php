<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function index(){
        $categories = Category::all();
        $contacts = Contacts::with('category')->get();
        return view('index', compact('categories','contacts'));
    }
    public function confirm(Request $request){
        $contact = $request->only([
            'category_id',
            'first_name',
            'last_name',
            'gender',
            'email',
            'tel',
            'address',
            'building',
            'detail'
        ]);
        return view('confirm', ['contact' => $contact]);
    }
    public function store(Request $request){
        $contact = $request->only([
            'category_id',
            'first_name',
            'last_name',
            'gender',
            'email',
            'tel',
            'address',
            'building',
            'detail'
        ]);
        Contacts::create($contact);
        return view('thanks');
    }
}
