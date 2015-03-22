<?php
class ContactsController extends CmsController {
    public function index() {

        $contact_collection = new ContactCollection();
        $data = $contact_collection->get_all();

        $this->loadView('cms/contacts', array(
            'data' => $data
        ));
    }

    public function delete() {
        $contact_collection = new ContactCollection();
        $contact_collection->delete($_GET['id']);

        header('Location: index.php?c=contact');
    }

}