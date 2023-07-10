<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    public function index(): View
    {
        $this->authorize(ability: 'index', arguments: Category::class);

        $categories = Category::query()->get();

        return view('admin.categories.index', compact('categories'));
    }

    public function create(): View
    {
        $this->authorize(ability: 'create', arguments: Category::class);

        return view('admin.categories.create');
    }

    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        $this->authorize(ability: 'create', arguments: Category::class);

        Category::create($request->validated());

        return redirect()->route(route: 'admin.category.index')
            ->with('message', 'Category created successfully.');
    }

    public function show(Category $category): View
    {
        $this->authorize(ability: 'view', arguments: Category::class);

        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category): View
    {
        $this->authorize(ability: 'edit', arguments: Category::class);

        return view('admin.categories.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category): RedirectResponse
    {
        $this->authorize(ability: 'edit', arguments: Category::class);

        $category->update($request->validated());

        return redirect()->route(route: 'admin.category.index')
            ->with('message', 'Category updated successfully.');
    }

    public function destroy(Category $category): RedirectResponse
    {
        $this->authorize(ability: 'delete', arguments: Category::class);

        $category->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        Category::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
