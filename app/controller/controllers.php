<?php

function AddstudentsController() {

    load_view('addstudents');
}

function DeleteController() {
    $id = $_GET['id'];
    _db_DeleteById('students', $id);
    HomeController();
}

function AddController() {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $data = [

        'name' => $name,
        'address' => $address
    ];
    _db_insert('students', $data);
    AddstudentsController();
}

function SelectidController() {
    $id = $_GET['id'];
    _db_get_byId('students', $id);
    $data = [
        'info' => _db_get_byId('students', $id)
    ];
    load_view('info',$data);
}

function EditController() {
    $id = $_GET['id'];
    $data = _db_get_byId('students', $id);
    load_view('editstudent', $data);
}

function UpdateController() {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $data = [
        'name' => $name,
        'address' => $address
    ];
    _db_update('students', $id, $data);
    HomeController();
}

function HomeController() {
    $data = [
        'students' =>  _db_get_all('students'),
        'info' => [
            'id' => "-",
            'name' => '-',
            'address' => '-'
        ]
    ];
    load_view('home',$data);
}

?>