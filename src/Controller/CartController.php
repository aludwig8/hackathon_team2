<?php


namespace Src\Controller;


use Respect\Validation\Validator as v;
use Src\Model\Product;

class CartController extends BaseController
{
    public function index($request, $response)
    {
        $products = $_SESSION['products'];
        if (!empty($products))
            $products = Product::whereIn('id', $products)->find_many();
        return $this->view->render($response, 'cart.twig', compact('products'));
    }

    public function store($request, $response)
    {
        $validation = $this->validator->validate($request, [
            'product' => v::notEmpty()
        ]);

        if ($validation->failed())
            if ($validation->failed()) {
                $errors = $_SESSION['errors'];
                return $this->view->render($response, 'cart.twig', compact('errors'));
            }

        $products = [];

        if (isset($_SESSION['products']))
            $products = $_SESSION['products'];

        array_push($products, $request->getParam('product'));
        $products = array_unique($products);
        $_SESSION['products'] = $products;

        return $response->withRedirect($this->router->pathFor('cart.index'));
    }

    public function destroy($request, $response)
    {
        $validation = $this->validator->validate($request, [
            'product' => v::notEmpty()
        ]);

        if ($validation->failed())
            if ($validation->failed()) {
                $errors = $_SESSION['errors'];
                return $this->view->render($response, 'cart.twig', compact('errors'));
            }

        $products = $_SESSION['products'];
        $index = array_search($request->getParam('product'), $products);
        unset($products[$index]);
        $_SESSION['products'] = $products;
        return $response->withRedirect($this->router->pathFor('cart.index'));
    }
}