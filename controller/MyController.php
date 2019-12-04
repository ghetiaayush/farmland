<?php
 session_start();
  include 'model/MyModel.php';
 // echo "hiii";
 //exit;
  
  class MyController extends MyModel
  {
  	
  	function __construct()
  	{

      //echo "hhh";
  		parent::__construct();
      
  		// echo "<pre>";
  		// print_r($_SERVER);
  		// exit;
      if(isset($_SERVER['PATH_INFO'])){
  		
        		switch ($_SERVER['PATH_INFO']) 
        		{
        			case '/home':
                        
                        include 'views/main.php';
                        include 'views/footer.php';
                   exit;
         				break;
        
                   case '/services':
                   //echo "services";

                      include 'views/services.php';
                      exit;
                   break;			

                    case '/gallery':

                      include 'views/gallery.php';
                      exit;
                    break;

                    case '/contactus':
                       
                       if(isset($_POST['contact'])){

                          $contactData = array("name"=>$_POST['name'],"email"=>$_POST['email'],"mobile"=>$_POST['mobile'],'message'=>$_POST['message']);

                          //print_r($contactData);

                          $contctInsert = $this->InsertData('contact',$contactData);

                          if($contctInsert){
                            ?>
                            <script>
                              alert('your message is sent successfully');
                            </script>
                            <?php
                          }
                          else{
                             ?>
                            <script>
                              alert('please enter again');
                            </script>
                            <?php
                          }
                        
                       }
                       include 'views/contactus.php';
                       exit;
                    break;

                    case '/login':

                       if(isset($_POST['login'])){

                           $data= $_POST;
                          array_pop($data);

                           // print_r($data);
                           // exit;
                         $loginResp = $this->SelectData('user',$data);
                          // print_r($loginResp[0]['photo']);
                          //  exit;
                          if($loginResp){

                            $_SESSION['username'] = $data['email'];
                            $_SESSION['userid'] = $loginResp[0]['id'];
                            $_SESSION['photo'] = $loginResp[0]['photo'];

                            // echo $_SESSION['username'];
                            //echo $_SESSION['userid'];
                           //exit;
                            ?>
                          <script type="text/javascript">
                              alert('You are logged in successfully');
                              document.location.href = 'orders';
                          </script>
                            <?php
                          }
                          else{
                            ?>
                            <script >
                               alert('Please enter right details');
                            </script>
                            <?php
                          }
                       }
                       
                       include 'views/login.php';
                       exit;
                    break;
                    
                    case '/viewProfile':

                      $sessionId = array('id'=>$_SESSION['userid']);
                      $userAllData = $this->AllSelectData('user',$sessionId);

                      $sid =$_SESSION['userid'];

                       if(isset($_POST['updateData'])){

                          if(!empty($_FILES['photo']['name'])){
                           
                            $target = "uploads/";

                            $targetfile = $target . basename($_FILES['photo']['name']);

                            move_uploaded_file($_FILES['photo']['tmp_name'],$targetfile);
                           $updatedata = array('fullname'=>$_POST['fullname'],'gender'=>$_POST['gender'],'email'=>$_POST['email'],'password'=>$_POST['password'],'mobile'=>$_POST['mobile'],'photo'=>$targetfile,
                            'address'=>$_POST['address']);

                           //print_r($updatedata);
                          
                         }

                         else{

                            $updatedata = array('fullname'=>$_POST['fullname'],'gender'=>$_POST['gender'],'email'=>$_POST['email'],'password'=>$_POST['password'],'mobile'=>$_POST['mobile'],'address'=>$_POST['address']);
                              //print_r($updatedata);
                         }

                         $updateUSERData = $this->updateUserData('user',$updatedata,$sid);
                          
                          if($updateUSERData){

                            ?>
                              <script type="text/javascript">
                                alert('Your profile updated successfully');
                                document.location.href = 'viewProfile';
                              </script>
                            <?php
                          }                        
                          else{
                            ?>
                            <script type="text/javascript">
                              alert('Try again for update');
                            </script>
                            <?php
                          }
                         
                       }
                      include 'views/updateProfile.php';
                    exit;
                    break;

                    case '/register':

                       if(isset($_REQUEST['register'])){

                          $target = "uploads/";

                          $targetfile = $target.basename($_FILES['photo']['name']);

                          move_uploaded_file($_FILES['photo']['tmp_name'], $targetfile);

                          $data = array("fullname"=>$_POST['fullname'],
                          "gender"=>$_POST['gender'],"email"=>$_POST['email'],
                           "password"=>md5($_POST['password']),"mobile"=>$_POST['mobile'],"photo"=>$targetfile,"address"=>$_POST['address']);

                           $insertResult = $this->InsertData('user',$data);
                        
                          if($insertResult){
                            ?>
                            <script type="text/javascript">
                              alert('You are registered successfully');
                              document.location.href = 'login';
                            </script>
                            <?php
                          }
                          else{
                            ?>
                            <script type="text/javascript">
                              alert('Please try again for register');
                              
                            </script>
                            <?php
                          }
                       }
                       
                       include 'views/register.php';
                       exit;
                    break;

                    case '/orders':

                       $where = array('id'=>$_SESSION['userid']);
                       $userData = $this->AllSelectData('user',$where);

                       if(isset($_POST['order'])){

                          // $data = $_POST;
                          // array_pop($data);
                        $uid = $_SESSION['userid'];

                        $data = array("location"=>$_POST['location'],
                                   "userid"=>$uid,"date"=>$_POST['date'],
                                   "time"=>$_POST['time'],"quantity"=>$_POST['quantity'],
                                   "address"=>$_POST['address'],"status"=>"pending");
                          // print_r($data);
                          // exit;

                          $orderResp = $this->InsertData('order_water',$data);
                          //exit;
                          if($orderResp){
                            ?>
                            <script type="text/javascript">
                              alert('order water successfully');
                              document.location.href = 'yourOrder';
                            </script>

                            <?php
                          }
                          else{
                            ?>
                            <script type="text/javascript">
                              alert('please fill details again');
                            </script>

                            <?php
                          }
                       }

                        include 'views/order.php';
                          exit;

                    break;

                    case '/yourOrder':

                       $where = array('id'=>$_SESSION['userid']);
                       $userData = $this->AllSelectData('user',$where);
                       $id = array('userid'=>$_SESSION['userid']);
                       $orderData = $this->AllSelectData('order_water',$id);
                         // print_r($orderData);
                         // exit;
                       if(isset($_GET['did'])){

                            $did = $_GET['did'];
                           // echo  $did;
                           $exDelete = $this->DeleteData("order_water","id",$did);
                            if($exDelete){
                              ?>
                              <script type="text/javascript">
                                 alert('Order deleted successfully');
                                 document.location.href = 'yourOrder';
                              </script>
                              <?php
                            }
                            else{
                              ?>
                              <script type="text/javascript">
                                 alert('Please try again for delete record');
                              </script>
                              <?php
                            }
                            //exit;
                        }
                       include 'views/yourOrders.php';
                    exit;
                    break;

                    case '/updateOrder':
                      
                        $where = array('id'=>$_SESSION['userid']);
                       $userData = $this->AllSelectData('user',$where);

                       if(isset($_GET['uid'])){

                          $uid = $_GET['uid'];

                          $which = array('id'=>$uid);
                          $orderUData = $this->AllSelectData('order_water',$which); 
                       }

                       if(isset($_REQUEST['updateOrder'])){

                         $upid = $_GET['uid'];  
                          $updateData = array("location"=>$_POST['location'],
                            "date"=>$_POST['date'],"time"=>$_POST['time'],
                            "quantity"=>$_POST['quantity'],"address"=>$_POST['address']);
                          //print_r($updateData);

                          $exUpdateData = $this->updateOrderData('order_water',$updateData,$upid);

                          if($exUpdateData){
                            ?>
                            <script type="text/javascript">
                              alert("order updated successfully");
                              document.location.href = 'yourOrder';
                            </script>
                            <?php
                          }

                          else{
                            ?>
                            <script type="text/javascript">
                              alert("Please try again for update order");
                            </script>
                            <?php
                          }
                       }
                      include 'views/updateOrders.php';
                    exit;
                    break;

                    case '/yourBill':

                    $where = array('id'=>$_SESSION['userid']);
                       $userData = $this->AllSelectData('user',$where);

                      include 'views/totalBill.php';
                    exit;
                    break;

                    case '/forgotPassword':

                       if(isset($_POST['forgot'])){

                          $checkEmail = $_POST['email'];
                          $emailArr = array('email'=>$checkEmail);
                          $newPassword = $_POST['newpassword'];
                          $confirmPassword = $_POST['confirmpassword'];

                         $checkEmailData = $this->AllSelectData('user',$emailArr);

                          if($checkEmailData)
                          {
                              if($newPassword == $confirmPassword){

                                $updatePassword = $this->updatePassword('user',$checkEmail,md5($confirmPassword));
                                 
                                  if($updatePassword){
                                    ?>
                                    <script type="text/javascript">
                                      alert("New password is set successfully");
                                      document.location.href = 'login';
                                    </script>
                                    <?php
                                  }
                                  else{
                                    ?>
                                    <script type="text/javascript">
                                        alert('Please try again');
                                    </script>
                                    <?php
                                  }                               
                                  
                              }
                              else{
                                  ?>
                                  <script type="text/javascript">
                                      alert('Please enter both passwords same');
                                  </script>
                                  <?php
                              }
                        }

                        else{
                            ?>
                                <script type="text/javascript">
                                    alert('Please enter right email');
                                </script>
                                <?php
                          
                            }
                        }

                      include 'views/forgot_password.php';
                      exit;
                    break;

                    case '/logout' :
                      
                        session_unset();
                        session_destroy();

                        ?>
                        <script type="text/javascript">
                            alert('you are logged out');
                            document.location.href = 'login';
                        </script>
                        <?php
                        exit;
                    break;

            			default:
            				# code...
            				break;
            		}
          }
          // else{

          //     include 'index.php';
          // }
  	}
  }

  $obj = new MyController;

?>