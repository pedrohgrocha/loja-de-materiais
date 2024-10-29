<?php
class UserController {
    public function index() {
        $users = User::all();
        include '../app/views/users/index.php';
    }

    public function create() {
        if ($_POST) {
            User::create($_POST);
            header('Location: /users');
        }
        include '../app/views/users/create.php';
    }

    public function edit($id) {
        $user = User::find($id);
        if ($_POST) {
            User::update($id, $_POST);
            header('Location: /users');
        }
        include '../app/views/users/edit.php';
    }

    public function delete($id) {
        User::delete($id);
        header('Location: /users');
    }
}
?>
