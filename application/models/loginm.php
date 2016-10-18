<?php
class Loginm extends CI_model
{
	public function loginmService($user)
	{
	//print_r($user);
		$query=$this->db->select('*')
						->from('user1')
						->where($user)
						->get();
		$result=$query->result_array();
		//print_r($result);
		//echo $result[0]['file'];
		if($query->num_rows()==1)
		{
			$response = array('ResponseCode' =>200,'message'=>'suceess','profile'=>$result[0]['file'],'fname'=>$result[0]['firstname'],'lname'=>$result[0]['lastname'],'id'=>$result[0]['id']);
 			echo json_encode($response);

		}
		else
		{
	$query=$this->db->select('*')
						->from('user1')
						->where('mobileno',$user['mobileno'])
						->get();
		$result=$query->result_array();
		#print_r($result);
		if($query->num_rows()==1)
		{
			$response= array('ResponseCode' =>500,'message'=>'password error','profile'=>$result[0]['file'],'fname'=>$result[0]['firstname'],'lname'=>$result[0]['lastname'],'id'=>$result[0]['id']);
		echo json_encode($response);
	}
	else
	{

		$response= array('ResponseCode' =>404,'message'=>'user name and password eror' );
		echo json_encode($response);
	}
}

				
	}
}
?>