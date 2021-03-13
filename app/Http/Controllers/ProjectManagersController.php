<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\ProjectManager;
// use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class ProjectManagersController extends BaseController
{
	public function index(){
		return ProjectManager::all();

	}

	public function read($id){
        try {            
            return ProjectManager::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 
            ['message' => 'Project Manager not found']], 404);
        }
	}
}