<?php

  
  class MyModel
  {
  	 public $connection = '';
  	function __construct()
  	{
  		$this->connection = new mysqli("localhost","root","","farmland");
  	}

  	public function InsertData($tbl,$data){

  		 $clms = implode(",", array_keys($data));
  		 $values = implode("','",$data);

  	 $insertSQL = "INSERT INTO $tbl($clms) VALUES('$values')";

  		 $insertResp = $this->connection->query($insertSQL);

  		 return $insertResp;
  	}

    public function SelectData($tble,$data){

      $password =  md5($data['password']);

       $loginSQL = "SELECT * FROM $tble WHERE (email = '$data[email]' OR mobile = '$data[email]') AND password = '$password' ";

       $loginResp = $this->connection->query($loginSQL);

       if($loginResp->num_rows > 0){
                $FetchData = $loginResp->fetch_assoc(); 
                $ResData[] = $FetchData;
       }
       else{
          $ResData = null;
       }
       return $ResData;
    }

    public function AllSelectData($tabl,$data){

       $selectSQL = "SELECT * FROM $tabl WHERE";

        foreach ($data as $key => $value) {
             $selectSQL .= " $key = '$value' AND";
        }
        $trimSQL = rtrim($selectSQL,"AND");
       //echo $trimSQL;
        $ExSelectSQL = $this->connection->query($trimSQL);

        if($ExSelectSQL->num_rows > 0){

           while($rowdata = $ExSelectSQL->fetch_assoc()){

                $getData[] = $rowdata; 
           }
        }
        else{

           $getData = null;
        }
        return $getData;
    }

    public function DeleteData($table,$clm,$val){

      $deleteSQL = "DELETE FROM $table WHERE $clm = '$val' ";

       $exDeleteSQL = $this->connection->query($deleteSQL);

       return $exDeleteSQL;

    }

    public function updateOrderData($tb,$data,$uid){

      $updateSQL = "UPDATE $tb SET location = '$data[location]',date = '$data[date]',
       time = '$data[time]',quantity = '$data[quantity]',address = '$data[address]' WHERE id = 
       '$uid' ";

       $exUpdateSQL = $this->connection->query($updateSQL);

       return $exUpdateSQL;
    }

    public function updateUserData($tabe,$data,$id){

      if(!($data['photo'])){

         $updateUserSQL = "UPDATE $tabe SET fullname = '$data[fullname]',gender = '$data[gender]',email = '$data[email]',mobile = '$data[mobile]',password = '$data[password]',
          address = '$data[address]' WHERE id = '$id' ";

      }
      else{
       
       $updateUserSQL = "UPDATE $tabe SET fullname = '$data[fullname]',gender = '$data[gender]',email = '$data[email]',mobile = '$data[mobile]',password = '$data[password]',photo='$data[photo]',address = '$data[address]' WHERE id = '$id' ";
     }
        
       $exUpdateUserSQL = $this->connection->query($updateUserSQL);

       return $exUpdateUserSQL;
    }

    public function updatePassword($tbll,$email,$updateData){

     $updatePassSQL = "UPDATE $tbll SET password = '$updateData' WHERE email = '$email'";

        $exUpdatePassSQL = $this->connection->query($updatePassSQL);

        return $exUpdatePassSQL;
    }


  }


?>