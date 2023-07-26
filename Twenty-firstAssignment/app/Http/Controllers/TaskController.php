<?php

namespace App\Http\Controllers;

use App\Models\Todotask;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $allData= Todotask::all();
    }

    /**
     * Create the form for creating a new resource.
     */
    public function createTask(Request $request)
    {
        //
    }

    /**
     * Update a newly created resource in storage.
     */
    public function updateTask(Request $request)
    {
        //
    }

    
    public function deleteTask(string $id)
    {
        //
    }

}
