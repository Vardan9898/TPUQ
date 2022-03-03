<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Tenancy;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TenancyController extends Controller
{
    public function index() // TODO pass the variable for showing all tnancies
    {
        return view('tenancies.index');
    }

    public function create(Property $property)
    {
        return view('tenancies.create', [
            'property' => $property,
            'tenants' => Tenant::latest()->get()->all()
        ]);
    }

    public function store(Tenant $tenant, Property $property)
    {
        $attributes = request()->validate([
            'property_id'       => $property,
            'tenant_id'   => $tenant,
        ]);

//        $attributes['user_id'] = auth()->user()->id;

        $tenancy = Tenancy::create($attributes);

        return redirect('tenancies')->with('success', 'Tenancy created');
    }
}
