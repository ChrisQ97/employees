<?php
/* 
    Create instance of te PDO    
*/
include_once("model/employee.php");
include_once('connection.php');
DataBase::createInstance();
    class employeesController{
        public function home() {
            $employees = Employee::consult();
            
            include_once("view/employees/home.php");
        }
        public function create() {
            if($_POST){
                
                $name = $_POST['name'];
                $age = $_POST['age'];
                $position = $_POST['position'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                Employee::create($name,$age,$position,$phone,$email);
                header("Location:./?controller=employees&action=home");
            }
            include_once("view/employees/create.php");
        }
        public function edit(){
            if ($_POST){
                $id = $_GET['id'];
                $name = $_POST['name'];
                $age = $_POST['age'];
                $position = $_POST['position'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                Employee::update($id, $name, $age, $position, $phone, $email);
                header("Location:./?controller=employees&action=home");
            }
            $id = $_GET['id'];
            $employee = (Employee::search($id));
            include_once("view/employees/edit.php");
        }
        public function delete(){
            $id = $_GET['id'];
            Employee::delete($id);
            header("Location:./?controller=employees&action=home");
        }
    }
?>