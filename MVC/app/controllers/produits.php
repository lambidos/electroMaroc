<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


class Produits extends Controller
{
    public function old($id_category = 'all', $limit = 10, $offset = '0')
    {

        $data = [];
        $produit = new Produit('products_view_user');
        $categorie = new Categorie;
        $data['categories'] = $categorie->where(array('visibilite' => 1));
        $produit->setLimit($limit);
        $produit->setOffset($offset);
        if ($id_category == 'all') {
            $data['produits'] = $produit->where(
                array(
                    'product_vis' => 1,
                    'categorie_vis' => 1
                )
            );
        } else {
            $data['produits'] = $produit->where(
                array(
                    'id_categorie' => $id_category,
                    'product_vis' => 1,
                    'categorie_vis' => 1
                )
            );
        }
        //showd($produit->status);
        $this->view('produits', $data, 'products-container');
    }

    public function getproductsByCategory($id_category = 'all', $limit = 10, $offset = '0')
    {

        $data = [];
        $produit = new Produit('products_view_user');
        $categorie = new Categorie;
        $data['categories'] = $categorie->where(array('visibilite' => 1));
        $produit->setLimit($limit);
        $produit->setOffset($offset);
        if ($id_category == 'all') {
            $data['produits'] = $produit->where(
                array(
                    'product_vis' => 1,
                    'categorie_vis' => 1
                )
            );
        } else {
            $data['produits'] = $produit->where(
                array(
                    'id_categorie' => $id_category,
                    'product_vis' => 1,
                    'categorie_vis' => 1
                )
            );
        }
        if (!empty($data['produits'])) foreach ($data['produits'] as $key => $value) {

            $data['produits'][$key]['photo'] = base64_encode($value['photo']);
        }

        if (!empty($data['categories'])) foreach ($data['categories'] as $key => $value) {
            $data['categories'][$key]['photo'] = base64_encode($value['photo']);
        }

        echo json_encode($data);
        die();
        return $data;
    }

    public function index($id_category = 'all', $limit = 10, $offset = '0')
    {

        $data = [];

        $this->view('produits_ajax', $data, 'products-container_ajax');
    }
}
