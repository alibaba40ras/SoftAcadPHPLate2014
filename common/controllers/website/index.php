<?php

class IndexController extends Controller {
    public function index() {

        $news_collection = new NewsCollection();
        //vzemi poslednite 3 novini
        $latest_news = $news_collection->get_latest(3);

        $products_collection = new ProductsCollection();
        $products = $products_collection->get_latest(4);

        $this->loadView('website/index', array(
            'latest_news' => $latest_news,
            'products' => $products
        ));
    }
}