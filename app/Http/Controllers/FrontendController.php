<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Post;
use App\Models\Product;
use App\Models\SiteSetting;

class FrontendController extends Controller
{
    public function home()
    {
        $setting = SiteSetting::first();

        $portfolios = Portfolio::query()
            ->latest('id')
            ->take(6)
            ->get();

        $posts = Post::query()
            ->published()
            ->latest('published_at')
            ->take(6)
            ->get();

        return view('frontend.home', compact('setting', 'portfolios', 'posts'));
    }

    public function blog()
    {
        $setting = SiteSetting::first();

        $posts = Post::query()
            ->published()
            ->latest('published_at')
            ->paginate(9);

        return view('frontend.blog', compact('setting', 'posts'));
    }

    public function portfolio()
    {
        $setting = SiteSetting::first();

        $portfolios = Portfolio::query()
            ->latest('id')
            ->paginate(9);

        return view('frontend.portfolio', compact('setting', 'portfolios'));
    }
    
    public function marketplace()
    {
        $products = Product::query()
            ->with('category')
            ->latest('id')
            ->get()
            ->map(function (Product $product) {
                $parts = preg_split("/\R\R/", (string) $product->description, 2);
                $summary = trim($parts[0] ?? '');
                $specLines = preg_split("/\R/", trim($parts[1] ?? '')) ?: [];

                $specs = [];

                foreach ($specLines as $line) {
                    if (! str_contains($line, ':')) {
                        continue;
                    }

                    [$key, $value] = array_map('trim', explode(':', $line, 2));
                    $specs[$key] = $value;
                }

                $stock = (int) $product->stock;
                $status = (string) $product->status;

                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'cat' => $product->category?->slug ?? 'other',
                    'catLabel' => $product->category?->name ?? 'Lainnya',
                    'price' => (int) $product->price,
                    'status' => $status,
                    'date' => $product->id,
                    'desc' => $summary,
                    'specs' => $specs,
                    'brand' => $product->brand,
                    'stock' => $stock,
                    'image' => $product->image_url ?: asset('images/placeholder.png'),
                ];
            })
            ->values();

        return view('frontend.marketplace', compact('products'));
    }
}