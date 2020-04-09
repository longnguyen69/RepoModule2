<?php


class Manager
{
    public $listStudent = [];
    public $pathFile;

    public function __construct($pathFile) // file json truyen vao de refesh data
    {
        $this->pathFile = $pathFile;
    }

    public function getJson()
    { // tao ham chuyen data json thanh mang de co the push hoc sinh vao
        $dataJson = file_get_contents($this->pathFile);
        return json_decode($dataJson); // mang data tu file json
    }

    public function updateStudents($arrStudent)
    { // them hoc sinh vao json, doi tuong $arrStudent co cac thuoc tinh name age add
        $data = [
            'name' => $arrStudent->getName(),
            'age' => $arrStudent->getAge(),
            'address' => $arrStudent->getAddress()
        ];
        $students = $this->getJson(); // tao biến hứng mảng từ file json
        array_push($students, $data); // thêm hoc sinh từ input vào mảng json
        $this->saveJson($students);//lưu vào json
    }

    public function saveJson($data)
    { // tao ham chuyen mang thanh json(ohject)
        $fileJson = json_encode($data); // chuyen mang thanh json
        file_put_contents($this->pathFile, $fileJson);
    }

    public function getListStudent()
    { // tạo ra list hoc sinh để show lên
        $data = $this->getJson(); // tạo mảng hứng file json để show ra man hinh
        foreach ($data as $obj=>$value){
            $student = new Students($obj->name,$obj->age,$obj->address);
            array_push($this->listStudent,$student);
        }
        return $this->listStudent;
    }
}