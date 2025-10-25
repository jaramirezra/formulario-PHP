<?php
require_once 'Models/form.php';

class FormController
{
    public function index()
    {
        // Carga la vista del formulario
        require_once 'views/formView.php';
    }

    public function save()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $model = new Form();

            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'confirmation' => $_POST['confirmation'],
                'created_at' => date('Y-m-d H:i:s')
            ];

            $result = $model->insert('information', $data);

            if ($result === true) {
                require_once 'views/successView.php';
            } else {
                echo "Error: $result";
            }
        }
    }
}
