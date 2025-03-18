<?php
class MyModuleHelloModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $cart = $this->context->cart;

        $productIds= [];

        // Check if cart exists and has products
        if ($cart && $cart->id) {
            $products = $cart->getProducts();
            foreach ($products as $product) {
                $productIds[] = [
                    'id' => $product['id_product'],
                    'name' => $product['name'],
                ];
            }
        }

        // Return JSON response with product names
        echo json_encode($productIds);
        exit;
    }
}
