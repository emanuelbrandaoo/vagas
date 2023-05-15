<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Company;

class CategoryController extends Controller
{
    public function index() {

        $categories = Category::all();

        return view('category.dashboard', [
            'categories' => $categories
        ]);
    }

    public function create() {

        $categories = Category::all();

        return view('category.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request) {

        $category = new Category;

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $category->id = $request->id;
        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();

        return redirect('category/dashboard')->with('msg', 'Categoria criada com sucesso.');
    }

    public function show($id) {

        $category = Category::findOrFail($id);

        return view('category.show', [
            'category' => $category
        ]);

    }

    public function destroy($id) {

        Category::findOrFail($id)->delete();

        return redirect('category/dashboard')->with('msg', 'Categoria deletada com sucesso.');
    }

    public function clearTable() {

        Category::whereNotNull('id')->delete();

        return redirect('category/dashboard')->with('msg', 'Categorias deletadas com sucesso.');
    }

    public function edit($id) {

        $category = Category::findOrFail($id);

        return view('category.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request) {

        Category::findOrFail($request->id)->update($request->all());

        return redirect('category/dashboard')->with('msg', 'Categoria atualizada com sucesso.');
    }
}
