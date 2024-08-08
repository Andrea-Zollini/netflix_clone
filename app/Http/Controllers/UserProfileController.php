<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserProfileController extends Controller
{
    public function index()
    {
        return Inertia::render('Profiles/Index');
    }

    public function create()
    {
        return Inertia::render('Profiles/Create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        return Inertia::render('Profiles/Edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
