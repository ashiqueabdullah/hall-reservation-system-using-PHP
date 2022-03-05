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

        $addpro="INSERT INTO `provost`(`Prov_Name`, `Designation`, `Mobile` , `Department`, `Email`) VALUES ('$name','$designation','$phone','$depertment','$email')";


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
        $email=$data['email'];

        $sql="INSERT INTO `staff`(`Staff_Name`, `Designation`, `Mobile`, `depertment`, `email`) VALUES ('$name','$designation','$number','$department','$email')";

        if ($name!="") {
          $res=$this->db->insert($sql);
        }
      }

      function getStaff(){
        $sql="SELECT * FROM `staff`";
        $getresult=$this->db->select($sql);
        return $getresult;
      }

      function studentAdd($data){
       $name=$data['name'];
       $roll=$data['roll'];
       $Department=$data['Department'];
       $room_number=$data['room_number'];
       $phone_number=$data['phone_number'];
       $email=$data['email'];
       $password=$data['password'];
       $city=$data['city'];

       $sql="INSERT INTO `student`(`St_Name`, `St_Rag`, `Dept_ID`, `Room_No`, `Mobile`, `email`, `password`, `city`) VALUES ('$name',' $roll','$Department','$room_number','$phone_number','$email','$password','[$city')";


       $res= $this->db->insert($sql);
       

      }
}

  ?>