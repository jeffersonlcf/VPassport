<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Datatables;
use App\OrganisationType;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /** Return control panel view */
    public function controlPanel() {
        return view('pages.admin.control-panel');
    }

    /** Returns view for orgType manage */
    public function orgTypes() {
        return view('pages.admin.manage-orgtypes');
    }

    public function orgTypesData() {
        $org_types = OrganisationType::select(['id', 'title']);
        return Datatables::of($org_types)
            ->make(false);
    }
}
