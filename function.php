<?php
   include_once 'database.php';
   include_once 'session.php';
   
   
   /**
    * 
    */
   class phpclass
   {
     	private $db;
     	function __construct()
     	{
     		$this->db = new Database();
     	}

      function addProvost($data){
        $name=$data['name'];
        $designation=$data['designation'];
        $phone=$data['number'];
        $depertment=$data['department'];
        $email=$data['email'];

        $addpro="INSERT INTO `provost`(`Prov_Name`, `Academic_Designation`, `Email`, `Mobile`, `dept`) VALUES ('$name','$designation','$email','$phone','$depertment')";

        $res=$this->db->insert($addpro);
      }

      function addRoom($data){
        $room_number= $data['room_number'];

        if($room_number!=""){
          $sql="INSERT INTO `room`(`room_number`) VALUES ('$room_number')";
          $res=$this->db->insert($sql);
        }

        $room_number="";
      }


      function addDpt($data){
        $dpt_name= $data['dpt_nam'];

        if($dpt_name!=""){
          $sql="INSERT INTO `depertment`( `depert_name`) VALUES ('$dpt_name')";
          $res=$this->db->insert($sql);
        }

       $add_dpt="";
      }

      function showDept(){
        $sql="SELECT * FROM `depertment` ";
        $getresult=$this->db->select($sql);
        return $getresult;
      }

      function showRoom(){
        $sql="SELECT * FROM `room` ";
        $getresult=$this->db->select($sql);
        return $getresult;
      }

      function showProvost(){
        $sql="SELECT * FROM `provost`";
        $getresult=$this->db->select($sql);
        return $getresult;
      }

      function addStaff($data){
        $name=$data['name'];
        $designation=$data['designation'];
        $number=$data['number'];
        $department=$data['department'];
        $emai=$data['email'];

        $sql="INSERT INTO `staff`(`Staff_Name`, `Designation`, `Mobile`, `depertment`, `email`) VALUES ('$name','$designation','$number','$department','$email')";

        if ($name!="") {
          $res=$this->db->insert($sql);
        }
      }
}

  ?>