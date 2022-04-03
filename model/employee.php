<?php

    class Employee{
        private $id;
        private $name;
        private $age;
        private $position;
        private $phone;
        private $email;

        private function __construct($id, $name,$age,$position,$phone,$email)
        {
            $this->id = $id;
            $this->name = $name;
            $this->age = $age;
            $this->position = $position;
            $this->phone = $phone;
            $this->email = $email;
        }
        public static function consult(){
            $listEmployees=[];
            $dbConnection = DataBase::createInstance();
            $sql = $dbConnection->query("SELECT * FROM infoEmployees");
            foreach($sql->fetchAll() as $employee){
                $listEmployees[] = new Employee($employee['id'],$employee['name'],$employee['age'],$employee['position'],$employee['phone'],$employee['email']);
            }
            return $listEmployees;

        }
        public static function create($n,$a,$p,$ph,$e){
            $con = DataBase::createInstance();
            $sql = $con->prepare("INSERT INTO infoEmployees(name,age,position,phone,email) VALUES(?,?,?,?,?)");
            $sql->execute(array($n,$a,$p,$ph,$e));
        }
        public function getId(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
        public function getAge(){
            return $this->age;
        }
        public function getPosition(){
            return $this->position;
        }
        public function getPhone(){
            return $this->phone;
        }
        public function getEmail(){
            return $this->email;
        }

        public static function delete($id) {
            $con = DataBase::createInstance();
            $sql = $con->prepare("DELETE FROM infoEmployees WHERE id=?");
            $sql->execute(array($id));
        }

        public static function search($id) {
            $con = DataBase::createInstance();
            $sql = $con->prepare("SELECT * FROM infoEmployees WHERE id=?");
            $sql->execute(array($id));
            $employee = $sql->fetch();
            return new Employee($employee['id'],$employee['name'],$employee['age'],$employee['position'],$employee['phone'],$employee['email']);
        }

        public static function update($id, $n,$a,$p,$ph,$e) {
            $con = DataBase::createInstance();
            $sql = $con->prepare("UPDATE infoEmployees SET name=?, age=?, position=?, phone=?, email=? WHERE id=?");
            $sql->execute(array($n,$a,$p,$ph,$e, $id));
        }

    }
?>
