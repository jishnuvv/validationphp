<?php
class Signup extends CI_controller
{
	public function validation()
	{
		$user['fname']=$this->input->get_post('fname');
		$user['sname']=$this->input->get_post('sname');
		$email=$user['email']=$this->input->get_post('email');
		$reemail=$reemail['re_enter_email']=$this->input->get_post('reemail');

		$user['password']=$this->input->get_post('password');
		$file['file']=$this->input->get_post('file');
		$user['filename']=$this->input->get_post('filename');
		$date2=$user['dob']=$this->input->get_post('dob');
		$user['gender']=$this->input->get_post('gender');
		//print_r($user);
/*if(strlen($user['fname'])<3)
	{
echo "the firest name should have 3 charecter<br>";
	}
	
	else
	{

	}
		*/


$date1 =date("Y/m/d") ;
//echo $date1;


$diff = abs(strtotime($date2) - strtotime($date1));

 $years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
//echo $diff;
/*echo $years;
if($years<13)
{
	echo "less than 13 ";
}
else
{
	echo "jishnu";
}

$user['password'];
    if( 
        
         strlen($user['password'])>8  
        && preg_match('`[A-Z]`',$user['password'])
        && preg_match('`[0-9]`',$user['password']) 
        && preg_match('`[\'^£$%&*()}{@#~?><>,|=_+!-]`',$user['password'])
        )
    { 
    	echo "validd";
    }
    	else
    	{
    		echo "not valid";
    	}
    
if($email!=$reemail)
{
	echo "not match";

}
else
{
	echo "match";
}
if($user['file']>5000)
{
	echo" not success";
}
else
{
	echo"success";
}*/

	if (strlen($user['fname'])<3) 
	{
		$respons= array('ResponseCode' =>101,'message'=>'first name should have greater than 3 letters' );
		echo json_encode($respons);
	}
	else
			{ 
				//echo $file['file'];
				if(empty($user['sname']))
				{
					$respons= array('ResponseCode' =>150,'message'=>'enter your last name' );
					echo json_encode($respons);
				}
			else
			{ 
				//echo $file['file'];
				if(empty($email))
				{
					$respons= array('ResponseCode' =>170,'message'=>'enter your email' );
					echo json_encode($respons);
				}
				

	else
	{

	if($email!==$reemail)
			
			{
				$respons= array('ResponseCode' =>102,'message'=>'email and reenter email are not match' );
			echo json_encode($respons);

			}
			else 
		{
			 if( !(
			 strlen($user['password'])>8 
	         && preg_match('`[A-Z]`',$user['password'])
	         && preg_match('`[0-9]`',$user['password']) 
	         && preg_match('`[\^£$%&*()}{@#~?><>,|=_+!-]`',$user['password'])
	         //&& preg_match('/^[A-Z]{2,5}$/', $user['password'])
	        ))
			 {
				$respons= array('ResponseCode' =>103,'message'=>'not valid' );
			echo json_encode($respons);
			}
			else
			{ 
				//echo $file['file'];
				if(empty($user['filename']))
				{
					$respons= array('ResponseCode' =>107,'message'=>'choose profile pic' );
					echo json_encode($respons);
				}
				else
			{ 
				echo $file['file'];
				if($file['file']>5000 &&empty($file['filename']) )
				{
					$respons= array('ResponseCode' =>104,'message'=>'maximum size of the profile pic is 5mb' );
					echo json_encode($respons);
				}
				else
				{
					if($years<13)
					{
						$respons= array('ResponseCode' =>105,'message'=>'the minimum age for joining facebook is 13 years' );
						echo json_encode($respons);
					}
					else
				{
					if($date2==0000-00-00)
					{
						$respons= array('ResponseCode' =>106,'message'=>'choose date of birth');
						echo json_encode($respons);
					}
					else
			{ 
				//echo $file['file'];
				if(empty($user['gender']))
				{
					$respons= array('ResponseCode' =>171,'message'=>'select your gender' );
					echo json_encode($respons);
				}
					
						
					
							else
							{
								$this->load->model('Signupm');
								if($this->Signupm->signm($user))
								{
								

								}


							}
						}

				}	
		

		}
}
}
}
}
}
}


	
	


	

	

/*echo $years;
echo $months;
echo $days;*/
}
}

?>