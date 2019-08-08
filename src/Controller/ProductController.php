<?php


namespace Src\Controller;


use Src\Model\Category;
use Src\Model\Product;

class ProductController extends BaseController
{
    public function index($request, $response)
    {
        $categories = Category::find_many();
        $products = Product::find_many();
        return $this->container->view->render($response, 'products.twig', compact('categories','products'));
    }

    public function getByCategory($request, $response)
    {
        $categories = Category::find_many();
        $products = Product::where('category_id',$request->getParam('category_id'))->findMany();
        return $this->container->view->render($response, 'products.twig', compact('categories'));
    }
}