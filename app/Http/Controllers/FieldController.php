<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index()
    {
        return view('admin.pages.fields.index', [
            'title' => 'Fields',
            'headingTitle' => 'Fields',
            'fields' => Field::all(),
        ]);
    }

    public function create()
    {
        return view('admin.pages.fields.create', [
            'title' => 'Create Fields',
            'headingTitle' => 'Create Fields'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price_per_hour' => 'required',
        ]);

        Field::create([
            'id' => (string) Str::uuid(),
            'name' => $request->name,
            'price_per_hour' => $request->price_per_hour
        ]);

        if ($data) {
            return redirect('/admin/fields')->with('success', 'Fields created successfully');
        } else {
            return redirect('/admin/fields')->with('error', 'Fields created failed');
        }
    }

    public function edit(Field $field)
    {
        return view('admin.pages.fields.edit', [
            'title' => 'Edit Fields',
            'headingTitle' => 'Edit Fields',
            'field' => $field
        ]);
    }

    public function update(Request $request, Field $field)
    {
        $data = $request->validate([
            'name' => 'required',
            'price_per_hour' => 'required',
        ]);

        Field::where('id', $field->id)->update([
            'id' => (string) Str::uuid(),
            'name' => $request->name,
            'price_per_hour' => $request->price_per_hour
        ]);

        if ($data) {
            return redirect('/admin/fields')->with('success', 'Fields updated successfully');
        } else {
            return redirect('/admin/fields')->with('error', 'Fields updated failed');
        }
    }

    public function destroy(Field $field)
    {
        Field::destroy('id', $field->id);

        if ($field) {
            return redirect('/admin/fields')->with('success', 'Fields deleted successfully');
        } else {
            return redirect('/admin/fields')->with('error', 'Fields deleted failed');
        }
    }
}
