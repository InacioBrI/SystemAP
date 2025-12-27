<?php

namespace App\Http\Controllers\Operators;

use App\Http\Controllers\Controller;
use App\Services\Operators\Operators;
use Illuminate\Http\Request;

class OperatorsController extends Controller
{
    protected Operators $operators;

    public function __construct(Operators $operators)
    {
        parent::__construct(); // 👈 adiciona isso

        $this->middleware(['auth', 'admin']);
        $this->operators = $operators;
    }

    public function index()
    {
        return $this->operators->index();
    }

    public function create()
    {
        return $this->operators->create();
    }

    public function store(Request $request)
    {
        return $this->operators->store($request);
    }

    public function edit(int $id)
    {
        return $this->operators->edit($id);
    }

    public function update(Request $request, int $id)
    {
        return $this->operators->update($request, $id);
    }

    public function destroy(int $id)
    {
        return $this->operators->destroy($id);
    }
}
