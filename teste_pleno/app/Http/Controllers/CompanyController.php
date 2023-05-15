<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;
use App\Models\User;
use App\Models\Category;

class CompanyController extends Controller
{
    public function index() {

        $search = request('search');
        
        if($search) {
            $companies = Company::where([
                ['name', 'like', '%'.$search.'%']
            ])->orwhat(
                ['city', 'like', '%'.$search.'%']
            )->get();
        } else {
            $companies = Company::all();
        }

        return view('company.dashboard', [
            'companies' => $companies,
            'search' => $search
        ]);
    }

    public function create() {

        $companies = Company::all();
        $categories = Category::all();

        return view('company.create', [
            'companies' => $companies,
            'categories' => $categories
        ]);
    }

    public function store(Request $request) {

        $user = auth()->user(); 

        $company = new Company;

        $request->validate([
            'name' => 'required',
            'city' => 'required'
        ]);

        $company->user_id = $user->id;
        $company->id = $request->id;
        $company->name = $request->name;
        $company->city = $request->city;

        $company->save();

        return redirect('company/dashboard')->with('msg', 'Empresa cadastrada com sucesso.');
    }

    public function show($id) {

        $company = Company::findOrFail($id);

        $companyOwner = User::where('id', $company->user_id)->first()->toArray();

        return view('company.show', [
            'company' => $company,
            'companyOwner' => $companyOwner
        ]);

    }

    public function destroy($id) {

        Company::findOrFail($id)->delete();

        return redirect('company/dashboard')->with('msg', 'Empresa deletada com sucesso.');
    }

    public function clearTable() {

        Company::whereNotNull('id')->delete();

        return redirect('company/dashboard')->with('msg', 'Empresas deletadas com sucesso.');
    }

    public function edit($id) {

        $company = Company::findOrFail($id);

        return view('company.edit', [
            'company' => $company
        ]);
    }

    public function update(Request $request) {

        Company::findOrFail($request->id)->update($request->all());

        return redirect('company/dashboard')->with('msg', 'Empresa atualizada com sucesso.');
    }

    public function addCategory($id) {
        $companies = Company::find($id);
        $companies->categories()->attach();
    }
}
