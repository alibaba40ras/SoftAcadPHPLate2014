<?php
class OrdersController extends CmsController {
    public function index() {

        $orders_collection = new OrdersCollection();
        $data = $orders_collection->get_all();

        $this->loadView('cms/orders', array(
            'data' => $data
        ));
    }

    public function completeorder() {
        $oc = new OrdersCollection();
        $o = $oc->get($_GET['id']);
        $o->setIsComplete($_GET['is_complete']);
        print_r($o);
        $oc->save($o);
    }

}