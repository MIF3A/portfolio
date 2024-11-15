<?php

namespace App\Http\Controllers;

    use App\Models\Skill;
    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use Illuminate\Foundation\Bus\DispatchesJobs;
    use Illuminate\Foundation\Validation\ValidatesRequests;
    use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests,DispatchesJobs,ValidatesRequests;


    public function index ()
    {
        $skills=skill::inRandomOrder()->limit(5)->get(['id','name','percentage']);
    return view('dashboard', compact('skills'));
    }
}
