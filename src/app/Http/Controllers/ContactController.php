<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('contact.index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only([
            'first_name',
            'last_name',
            'gender',
            'email',
            'tel1',
            'tel2',
            'tel3',
            'address',
            'building',
            'category_id',
            'detail',
        ]);

        $contact['tel'] = $contact['tel1'] . $contact['tel2'] . $contact['tel3'];

        $category = Category::find($contact['category_id']);

        $genders = [
            1 => '男性',
            2 => '女性',
            3 => 'その他',
        ];
        $genderLabel = $genders[$contact['gender']] ?? '';

        return view('contact.confirm', compact('contact', 'category', 'genderLabel'));
    }

    public function store(Request $request)
    {
        $contact = $request->only([
            'first_name',
            'last_name',
            'gender',
            'email',
            'address',
            'building',
            'category_id',
            'detail',
        ]);

        $contact['tel'] = $request->tel1 . $request->tel2 . $request->tel3;

        Contact::create($contact);

        return redirect()->route('contact.thanks');
    }

    public function thanks()
    {
        return view('contact.thanks');
    }
}
