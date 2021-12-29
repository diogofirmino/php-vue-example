<?php

namespace App\Http\Controllers;

use App\Repositories\CartRepositoryContract;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private CartRepositoryContract $repository;

    public function __construct(CartRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request) : JsonResponse
    {
        $sort = $request->get('sort') ?? 'ASC';

        $cart = $this->repository->getSortedItemsByPrice($sort);

        return response()->json([
            'meta' => ['sort' => $sort],
            'cart' => $cart->toArray(),
        ]);
    }
}
