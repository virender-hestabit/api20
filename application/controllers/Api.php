<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MY_Controller {

	
	// public function index()
	// {
	// 	$this->login();
	// }

################################################################################################################################################
//login module start    
public function login()
{
	if(!isset($this->session->username))
	{   
		//$this->session->set_userdata('parent_id',$parent_id);
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$project_id=$this->input->post('project_id');
		$company_id=$this->input->post('company_id');
		$user_type=$this->input->post('radio');
		//print_r($_SESSION);
		if(isset($username)&&isset($password)&&isset($user_type))
		{//print_r($_SESSION);
		//exit();
			if($user_type=="Admin")
			{
                  $condition =array(
                 'username'   => $username,
                 'password'   => $password,
                 'user_type'  => 'Admin'
                );
		
				$check=$this->Database_conn->check_login($condition);
				if(sizeof($check)>0)
				{   
					$company_id = $this->Common->getDataSingle('users','company_id',$condition);
					$this->session->set_userdata('company_id',$company_id);
				}
		
			}
			else if($user_type=="Superadmin")
			{
                  $condition =array(
                 'username'   => $username,
                 'password'   => $password,
                 'user_type'  => 'Superadmin'
                );
		
				$check=$this->Database_conn->check_login($condition);
				if(sizeof($check)>0)
				{
					$this->session->set_userdata('company_id',$company_id);
				}
		
			}
			else
			{
                
                $condition =array(
                 'username'   => $username,
                 'password'   => $password,
                 'project_id' => $project_id,
                );
                
		
				$check=$this->Database_conn->check_login($condition);
				if(sizeof($check)>0)
				{
					$company_id = $this->Common->getDataSingle('users','company_id',$condition);
					$this->session->set_userdata('company_id',$company_id); 
					$this->session->set_userdata('project_id',$project_id);
				}
			}
				// echo "<pre>";
				// print_r($check);
				if(isset($check)&&sizeof($check)>0)
				{   
					
					$username = $check->username;
					$id = $check->id;
					$user_type = $check->user_type;
		             $this->session->set_userdata('username',$username);
					 $this->session->set_userdata('user_id',$id);
					 $this->session->set_userdata('user_type',$user_type);
					 // echo "<pre>";print_r($_SESSION);exit();

					 if($user_type=='Admin')
					 {
					 	if($this->session->parent_id)
					 	{      
					 		redirect('da_projects/create_folder');
					 	}
					 	else
					 	{
		                    redirect('da_projects/project_list');
					 	}
		             }
		             else if($user_type=='Superadmin')
					 {
					 	if($this->session->parent_id)
					 	{      
					 		redirect('da_projects/create_folder');
					 	}
					 	else
					 	{
		                   redirect('da_projects/project_list');
					 	}
		             }
		             else
		             {
		             	if($this->session->parent_id)
		             	{
		             		redirect('da_projects/create_folder');
		             	}
		             	else
		             	{
		             	    $this->dashboard();
		             	}
		             }
				}
				else
				{ 
					$data['msg']="Invalid login credential.";
					$this->load->view('login',$data);
				}
		}
		else
		{
		   $this->load->view('login');	
		}
	}
	else
	{
      $this->dashboard();
	}
}
######################################################################################################################################
//dashboard start here 

	public function dashboard()
	{
		if(isset($this->session->user_id))
		{
            $this->load->view('dashboard');
		}
		else
		{
			redirect('da_projects/login');
		}
		
	}


######################################################################################################################################
//wbs add category and fetch category 


	public function wbs_category()
	{   	
		if(isset($this->session->username))
		{
	        $this->load->model('Database_conn');
			$add_wbs=$this->input->post('wbs');
			if(isset($add_wbs))
			{
				$check=$this->Database_conn->add_wbs_category($add_wbs);
				if($check)
				{
					$all_wbs['msg']='Successfully Added';
	                $all_wbs['dataArr']=$this->Database_conn->get_wbs_category();
					$this->load->view('add_wbs_category',$all_wbs);
				}
				else
				{
					$all_wbs['msg']="Unable to Add";
	                $all_wbs['dataArr']=$this->Database_conn->get_wbs_category();
					$this->load->view('add_wbs_category',$all_wbs);
				}
			}
			else
			{ 
	          $all_wbs['dataArr']=$this->Database_conn->get_wbs_category();	
			  $this->load->view('add_wbs_category',$all_wbs);	
			}
		}
		else
		{
			$this->login();
		}
	}


######################################################################################################################################
//create   wbs sub category
        public function wbs_sub_category()
        {
        	if(isset($this->session->username))
        	{
        		$btn  = $this->input->post('submit');
        		$btn1 = $this->input->post('submit1');
        		$btn2 = $this->input->post('submit2');
        		$btn3 = $this->input->post('submit3');
        		$btn4 = $this->input->post('submit4');
        		$btn5 = $this->input->post('submit5');


                $cat = $this->input->post('wbss1');  
                $sub1 = $this->input->post('wbss2');  
                $sub2 = $this->input->post('wbss3');  
                $sub3 = $this->input->post('wbss4');  
                $sub4 = $this->input->post('wbss5');  
                
                $cat_name  = $this->input->post('wbs');
                $sub1_name = $this->input->post('wbs1');  
                $sub2_name = $this->input->post('wbs2');  
                $sub3_name = $this->input->post('wbs3');  
                $sub4_name = $this->input->post('wbs4');  
                $sub5_name = $this->input->post('wbs5');  
                
                 if(isset($btn))
                 {  
                 	$array=array(
                    'category_name' => $cat_name,
                    'created_by'    => $this->session->user_id,
                    'created_on'    => date("Y-m-d H:i:s")
                 	);
                   	$insert = $this->Database_conn->insert_data('wbs_category',$array);
                   	$data['msg'] = (isset($insert))?" Category Inserted Successfully.":"Unable To insert Category.";
                 }




                 if(isset($btn1))
                 { 
                 	$array=array(
                    'sub_category_name1' => $sub1_name,
                    'category_id'   => $cat,
                    'created_by'    => $this->session->user_id,
                    'created_on'    => date("Y-m-d H:i:s")
                 	);

                   	$insert = $this->Database_conn->insert_data('wbs_sub_category1',$array);
                   	$data['msg'] = (isset($insert))?" Subcategory1 Inserted Successfully.":"Unable To insert Subcategory1.";
                 }




                 if(isset($btn2))
                 { 
                     $condition=array(
                     'id' => $sub1
                     );
                     $dataArr = $this->Database_conn2->fetch_data_id('wbs_sub_category1',$condition);
                     //echo "<pre>";print_r($dataArr);
                 	$array=array(
                    'sub_category_name2' => $sub2_name,
                    'category_id'   => $dataArr['0']['category_id'],
                    'subcat_id1'    => $sub1,
                    'created_by'    => $this->session->user_id,
                    'created_on'    => date("Y-m-d H:i:s")
                 	);
                 	//echo "<pre>";print_r($array);exit();
                   	$insert = $this->Database_conn->insert_data('wbs_sub_category2',$array);
                   	$data['msg'] = (isset($insert))?" Subcategory2 Inserted Successfully.":"Unable To insert Subcategory2.";
                 }




                 if(isset($btn3))
                 { 
                 	$condition=array(
                     'id' => $sub2
                     );
                     $dataArr = $this->Database_conn2->fetch_data_id('wbs_sub_category2',$condition);

                 	$array=array(
                    'sub_category_name3' => $sub3_name,
                    'category_id'   => $dataArr['0']['category_id'],
                    'subcat_id1'    => $dataArr['0']['subcat_id1'],
                    'subcat_id2'    => $sub2,
                    'created_by'    => $this->session->user_id,
                    'created_on'    => date("Y-m-d H:i:s")
                 	);
                   	$insert = $this->Database_conn->insert_data('wbs_sub_category3',$array);
                   	$data['msg'] = (isset($insert))?" Subcategory3 Inserted Successfully.":"Unable To insert Subcategory3.";
                 }




                 if(isset($btn4))
                 { 
                 	$condition=array(
                     'id' => $sub3
                     );
                     $dataArr = $this->Database_conn2->fetch_data_id('wbs_sub_category3',$condition);

                 	$array=array(
                    'sub_category_name4' => $sub4_name,
                    'category_id'   => $dataArr['0']['category_id'],
                    'subcat_id1'    => $dataArr['0']['subcat_id1'],
                    'subcat_id2'    => $dataArr['0']['subcat_id2'],
                    'subcat_id3'    => $sub3,
                    'created_by'    => $this->session->user_id,
                    'created_on'    => date("Y-m-d H:i:s")
                 	);
                   	$insert = $this->Database_conn->insert_data('wbs_sub_category4',$array);
                   	$data['msg'] = (isset($insert))?" Subcategory4 Inserted Successfully.":"Unable To insert Subcategory4.";
                 }




                 if(isset($btn5))
                 { 
                 	 $condition=array(
                     'id' => $sub4
                     );
                     $dataArr = $this->Database_conn2->fetch_data_id('wbs_sub_category4',$condition);

                 	$array=array(
                    'sub_category_name5' => $sub5_name,
                    'category_id'   => $dataArr['0']['category_id'],
                    'subcat_id1'    => $dataArr['0']['subcat_id1'],
                    'subcat_id2'    => $dataArr['0']['subcat_id2'],
                    'subcat_id3'    => $dataArr['0']['subcat_id3'],
                    'subcat_id4'    => $sub4,
                    'created_by'    => $this->session->user_id,
                    'created_on'    => date("Y-m-d H:i:s")
                 	);
                 	//echo "<pre>";print_r($array);exit();
                   	$insert = $this->Database_conn->insert_data('wbs_sub_category5',$array);
                   	$data['msg'] = (isset($insert))?" Subcategory5 Inserted Successfully.":"Unable To insert Subcategory5.";
                 }


		        	$data['category'] = $this->Database_conn->fetch_category('wbs_category','category_name');
		        	$data['subcategory1'] = $this->Database_conn->fetch_category('wbs_sub_category1','sub_category_name1');
		        	$data['subcategory2'] = $this->Database_conn->fetch_category('wbs_sub_category2','sub_category_name2');
		        	$data['subcategory3'] = $this->Database_conn->fetch_category('wbs_sub_category3','sub_category_name3');
		        	$data['subcategory4'] = $this->Database_conn->fetch_category('wbs_sub_category4','sub_category_name4');
		        	$data['dataArr'] = $this->Database_conn->fetch_catandsubcat();
		        	//echo "<pre>";print_r($data);exit();
		        	$this->load->view('add_wbs_subcat',$data);
            }
            else
            {
            	$this->login();
            }
        } 

######################################################################################################################################
//         add wbs project and fetch wbs function
              public function add_wbs()
              {
                 if($this->session->username)
                 {
						    $set_submit = $this->input->post("select_category");
						if(isset($set_submit))
						{
							$cat_string = $this->input->post('cat');
							$data['cat_array'] = explode("-", $cat_string['0']);
						}
						else
						{
						    $data['cat_array'] =array();
						}
						//print_r($data['cat_array']);
                 	$save = $this->input->post('save');
                 	$update = $this->input->post('update');
                 	$master_id = "";
                      if(isset($save)||isset($update))
                      {   
                      	        
				         	

				         	if(isset($save))
				         	{
				         		$project = array(
                                  'project_id' => $this->input->post('project1')
                      	        );
                                

                                
                                 	$project1 = array(
                                     'project_id' => $this->input->post('project1'),
                                     'created_by' => $this->session->user_id ,
								     'created_on' => date("Y-m-d H:i:s"),
								     'remark'     => $this->input->post('remark'),
								     'last_updated'=> date("Y-m-d H:i:s")
                                 	);
                                    
                                    $already_exist =  $this->Database_conn->getsubcat('wbs_master',$project);

                                    if(sizeof($already_exist)>0)
                                    {
                                        $master_id = $already_exist['0']['id'];
                                    }
                                    else
                                    {
                                    	$insert = $this->Database_conn->insert('wbs_master',$project1);
	                                 	$fetch_id = $this->Database_conn->getsubcat('wbs_master',$project);
	                                 	$master_id = $fetch_id['0']['id'];
                                    }

                                 	
                                 

								$inserDataArr = array(
								'master_id'         => $master_id ,
								'category_id'       => $this->input->post('wbs') ,
								'subcat_id1'        => ($this->input->post('wbssub1'))?($this->input->post('wbssub1')):'0' ,
								'subcat_id2'        => ($this->input->post('wbssub2'))?($this->input->post('wbssub2')):'0' ,
								'subcat_id3'        => ($this->input->post('wbssub3'))?($this->input->post('wbssub3')):'0' ,
								'subcat_id4'        => ($this->input->post('wbssub4'))?($this->input->post('wbssub4')):'0' ,
								'subcat_id5'        => ($this->input->post('wbssub5'))?($this->input->post('wbssub5')):'0' ,
								'project_id'        => $this->input->post('project1') ,
								'vendor_name'       => $this->input->post('person_name') ,
								'estimated_cost'    => ($this->input->post('cost'))?($this->input->post('cost')):'0' ,
								'cost_unit'         => $this->input->post('cost') ,
								'remark'            => $this->input->post('remark'),
								// 'temp_data'      => '1' ,
								'created_by'        => $this->session->user_id ,
								'company_id'        => $this->session->company_id ,
								'created_on'        => date("Y-m-d H:i:s") ,
								'mode_of_purchase'  => ''
								);

								$insert=$this->Database_conn->insert('wbs_transaction',$inserDataArr);
								$data['dataArr'] = $this->Database_conn->fetch_wbs_trn();
								$data['category'] = $this->Database_conn->fetch_category('wbs_category','category_name');
								$data['trans'] = $this->Database_conn->fetch_Data('projects');	
									if($insert)
									{
									$data['msg']="Save Successfully ";
									}
									else
									{
									$data['msg']="Could not Save";
									}

								$this->load->view('wbs',$data);
							}
							else 
							{
									$inserDataArr = array(
									'category_id'       => $this->input->post('wbs') ,
									'subcat_id1'        => ($this->input->post('wbssub1'))?($this->input->post('wbssub1')):'0' ,
									'subcat_id2'        => ($this->input->post('wbssub2'))?($this->input->post('wbssub2')):'0' ,
									'subcat_id3'        => ($this->input->post('wbssub3'))?($this->input->post('wbssub3')):'0' ,
									'subcat_id4'        => ($this->input->post('wbssub4'))?($this->input->post('wbssub4')):'0' ,
									'subcat_id5'        => ($this->input->post('wbssub5'))?($this->input->post('wbssub5')):'0' ,
									'project_id'        => $this->input->post('project1') ,
									'vendor_name'       => $this->input->post('person_name') ,
									'estimated_cost'    => ($this->input->post('cost'))?($this->input->post('cost')):'0' ,
									'cost_unit'         => $this->input->post('cost') ,
									// 'temp_data'      => '1' ,
									'created_by'        => $this->session->user_id ,
									'created_on'        => date("Y-m-d H:i:s") ,
									'mode_of_purchase'  => '',
									'last_updated'      => date("Y-m-d H:i:s") 
									);

									$date_update = array(
                                   'last_updated' => date("Y-m-d H:i:s") 
									);

									$update_id        = $this->input->post('update_id');
									$master_id        = $this->Database_conn2->getSingleData('wbs_transaction','master_id',array('id' => $update_id));
                                    //print_r($master_id);exit();
									$update_master    = $this->Database_conn->update('wbs_master',$date_update,'id',$master_id['0']['master_id']);
									$update_data      = $this->Database_conn->update('wbs_transaction',$inserDataArr,'id',$update_id);
									$data['dataArr']  = $this->Database_conn->fetch_wbs_trn();
								    $data['category'] = $this->Database_conn->fetch_category('wbs_category','category_name');
									$data['trans']    = $this->Database_conn->fetch_Data('projects');
										if($update_data)
										{
										$data['msg']="Update Successfully ";
										}
										else
										{
										$data['msg']="Could not Update";
										}

									$this->load->view('wbs',$data);
							}
				     }
					else
					{
						
						$project_id           = $this->session->project_id;
						$data['dataArr']      = $this->Database_conn->fetch_wbs_trn();
						$data['category']     = $this->Database_conn->fetch_category('wbs_category','category_name');
						$data['trans']        = $this->Database_conn->fetch_Data('projects');
						

						
                                 // $data['cat_array']=array(
								// '0' =>$data['dataArr']['0']['category_id'], 
								// '1' =>$data['dataArr']['0']['subcat_id1'] ,
								// '2' =>$data['dataArr']['0']['subcat_id2'] ,
								// '3' =>$data['dataArr']['0']['subcat_id3'] ,
								// '4' =>$data['dataArr']['0']['subcat_id4'] ,
								// '5' =>$data['dataArr']['0']['subcat_id5'] 
								// );
						

							//echo "<pre>";print_r($data);exit();
						$this->load->view('wbs',$data);
					}
                 }
                 else
                 {
                 	$this->login();
                 }
              }



#####################################################################################################################################
     //  edit  project 
       

        public function edit_wbs($edit_id1 = '')
        {
	        if(isset($this->session->username))
		    {	
	        	$data['dataArr']=$this->Database_conn->fetch_wbs_trn();

	        	$edit_id=$edit_id1;

	        	if($edit_id)
	        	{
	        	$data['edit_data']=$this->Database_conn->edit_wbs_trn($edit_id);
	        	$data['updateFlag']=1;
	        	$data['trans'] = $this->Database_conn->fetch_Data('projects');
	        	$data['category'] = $this->Database_conn->fetch_category('wbs_category','category_name');
	        	$data['subcat1'] = $this->Database_conn->fetch_category('wbs_sub_category1','sub_category_name1');
	        	$data['subcat2'] = $this->Database_conn->fetch_category('wbs_sub_category2','sub_category_name2');
	        	$data['subcat3'] = $this->Database_conn->fetch_category('wbs_sub_category3','sub_category_name3');
	        	$data['subcat4'] = $this->Database_conn->fetch_category('wbs_sub_category4','sub_category_name4');
	        	$data['subcat5'] = $this->Database_conn->fetch_category('wbs_sub_category5','sub_category_name5');
              
				$set_submit = $this->input->post("select_category");
				if(isset($set_submit))
				{
				$cat_string = $this->input->post('cat');
				$data['cat_array'] = explode("-", $cat_string['0']);
				}
				else
				{ 
		        	$data['cat_array']=array(
					'0' =>$data['edit_data']['0']['category_id'], 
					'1' =>$data['edit_data']['0']['subcat_id1'] ,
					'2' =>$data['edit_data']['0']['subcat_id2'] ,
					'3' =>$data['edit_data']['0']['subcat_id3'] ,
					'4' =>$data['edit_data']['0']['subcat_id4'] ,
					'5' =>$data['edit_data']['0']['subcat_id5'] 
					);
		        }
	        	
	            }
	            // echo "<pre>";
	            // print_r($data);
	            // exit();
	        	$this->load->view('wbs',$data);
	        }
	        else
	        {
	        	$this->login();
	        }
        } 




######################################################################################################################################
     //    project charter 

        public function project_charter()
        {
        	 if(isset($this->session->username))
		    {
		      	// extract($_POST);
		      	$data_insert=array(
		      	'project_id'                 =>  $this->input->post('project'),
				'tentative_project_cost'     =>  $this->input->post('proj_cost'),
				'tentative_project_timeline' =>  $this->input->post('timeline'),
				'buildup_area'               =>  $this->input->post('buildup_area'),
				'project_brief'              =>  $this->input->post('brief_requirement'),
				'architects'                 =>  $this->input->post('architect'),
				'consultants1'                =>  $this->input->post('consultant1'),
				'consultants2'                =>  $this->input->post('consultant2'),
				'consultants3'                =>  $this->input->post('consultant3'),
				'consultants4'                =>  $this->input->post('consultant4'),
				'consultants5'                =>  $this->input->post('consultant5'),
				'consultants6'                =>  $this->input->post('consultant6'),
				'consultants7'                =>  $this->input->post('consultant7'),
				'major_constraints'          =>  $this->input->post('major_constraints'),
				'created_by'                 =>  $this->session->user_id,
				'company_id'                 =>  $this->session->company_id,
				'created_on'                 =>  date("Y-m-d") 
		      	);
		      
		      	$check=$this->input->post('save');
		      	$update=$this->input->post('update');

		        if(isset($check))
		        { 
		          $already_exit = $this->Common->getData('project_charter',array('company_id'=>$this->session->company_id,'project_id'=>$this->input->post('project')));
		          if(!$already_exit)
		          { 
				          $insert=$this->Database_conn->insert('project_charter',$data_insert);
				          
				          if($insert)
				          {
				          	$data['msg']="Save Successfully ";
				          }
				          else
				          {
				          	$data['msg']="Could not Save";
				          }
				   }
				   else
				   {
                          $data['msg']="Project Charter is Already Exist ";				   	
				   }
				  $data['project_charter_show']="none"; 
		          $this->load->view('project_charter',$data);
		        }
		        else if(isset($update))
		        {   
		          $update_id=$this->input->post('update_id');
		          $update_data=$this->Database_conn->update('project_charter',$data_insert,'id',$update_id);
		          
		          if($update_data)
		          {
		          	$data['msg']="Update Successfully ";
		          }
		          else
		          {
		          	$data['msg']="Could not Update";
		          }
		          $data['project_charter_show']="none";
		          $this->load->view('project_charter',$data);
		        }
		        else
		        {  
		           $data['project_charter_show']="none"; 
		           $this->load->view('project_charter',$data);
		        }
		    }
		    else
		    {
		    	$this->login();
		    }
	    }

######################################################################################################################################
     //  edit  project 
        public function edit_project_charter()
        {
	        if(isset($this->session->username))
		    {	
	        	$data['dataArr']=$this->Database_conn->fetch_Data('project_charter');

                $data['project_charter_show']="none";
	        	$edit_id=$this->input->post('edit_id');
	        	if($edit_id)
	        	{
	        	$data['edit_data']=$this->Database_conn->fetch_edit('project_charter',$edit_id);
	        	$data['updateFlag']=1;
	        	// echo "<pre>";
	           // print_r($data);
	        	$data['project_charter_show']="block";
	            }
	        	$this->load->view('project_charter',$data);
	        }
	        else
	        {
	        	$this->login();
	        }
        } 
######################################################################################################################################
 // work order entry data fetch and submit

        public function work_order()
        {
        	 if(isset($this->session->username))
		    {
		      	// extract($_POST);
		      	$data_insert=array(
					'project_name'           =>  $this->input->post('proj_name'),
					'project_id'             =>  $this->session->project_id,
					'budget_heads'           =>  $this->input->post('budgt_heads'),
					'wo_number'              =>  $this->input->post('wo_number'),
					'wo_title'               =>  $this->input->post('wo_title'),
					'contact_person_name'    =>  $this->input->post('contact_pname'),
					'contact_person_email'   =>  $this->input->post('contact_email'),
					'contact_person_phone'   =>  $this->input->post('contact_no'),
					'contractor_name'        =>  $this->input->post('contractor_name'),
					'contractor_address'     =>  $this->input->post('contractor_address'),
					'payment_term'           =>  $this->input->post('payment_terms'),
					'late_delivery_clause'   =>  $this->input->post('late_delivery_clause'),
					'enclosure'              =>  $this->input->post('enclosure'),
					'defect_liability_period'=>  $this->input->post('defect_liability_period'),
					'liquidated_damages'     =>  $this->input->post('liq_damages'),
					'special_condition'      =>  $this->input->post('spl_cond'),
					'completion_date'        =>  $this->input->post('completion_date'),
					'created_by'             =>  $this->session->user_id,
					'contract_value'         =>  $this->input->post('contract_value'),  
					'wo_issue_date'          =>  $this->input->post('wo_issue_date'),
		      	);
		      
		      	$check=$this->input->post('save');
		      	$update=$this->input->post('update');

		        if(isset($check))
		        {
		          $insert=$this->Database_conn->insert('wo_master',$data_insert);
		          $data['dataArr']=$this->Database_conn->fetch_Data('wo_master');
		          if($insert)
		          {
		          	$data['msg']="Save Successfully ";
		          }
		          else
		          {
		          	$data['msg']="Could not Save";
		          }
		          $this->load->view('work_order_entry',$data);
		        }
		        else if(isset($update))
		        {   
		          $update_id=$this->input->post('project_id');
		          $update_data=$this->Database_conn->update('wo_master',$data_insert,'project_id',$update_id);
		          $data['dataArr']=$this->Database_conn->fetch_Data('wo_master');
		          if($update_data)
		          {
		          	$data['msg']="Update Successfully ";
		          }
		          else
		          {
		          	$data['msg']="Could not Update";
		          }
		          $this->load->view('work_order_entry',$data);
		        }
		        else
		        {  
		           $data['dataArr']=$this->Database_conn->fetch_Data('wo_master');
		           $this->load->view('work_order_entry',$data);
		        }
		    }
		    else
		    {
		    	$this->login();
		    }
	    }


######################################################################################################################################
     //  edit  project 
        public function edit_work_order()
        {
	        if(isset($this->session->username))
		    {	
	        	$data['dataArr']=$this->Database_conn->fetch_Data('wo_master');

	        	$edit_id=$this->input->post('edit_id');
	        	if($edit_id)
	        	{
	        	$data['edit_data']=$this->Database_conn->fetch_edit('wo_master',$edit_id);
	        	$data['updateFlag']=1;
	        	// echo "<pre>";
	         //    print_r($data);
	            }
	        	$this->load->view('work_order_entry',$data);
	        }
	        else
	        {
	        	$this->login();
	        }
        } 

######################################################################################################################################
 // work order entry data fetch and submit

        public function po_entry()
        {
        	 if(isset($this->session->username))
		    {
		    	           $set_submit = $this->input->post("select_category");
				           if(isset($set_submit))
				           {
				           	$cat_string = $this->input->post('cat');
				           	$data['cat_array'] = explode("-", $cat_string['0']);
				           }
				           else
				           {
				           	$data['cat_array'] =array();
				           }
				           
		      	 //extract($_POST);
		      	$data_insert=array(
					'project_id'            => $this->session->project_id,
					'company_id'            => $this->session->company_id,
					'project_name'          => $this->input->post('proj_name'),
					'po_number'             => $this->input->post('po_number'),
					'budget_heads'          => $this->input->post('budget_heads'),
					'po_title'              => $this->input->post('po_title'),
					'contact_person_name'   => $this->input->post('contact_pname'),
					'contact_person_email'  => $this->input->post('contact_email'),
					'contact_person_phone'  => $this->input->post('contact_no'),
					'supplier_name'         => $this->input->post('supp_name'),
					'supplier_address'      => $this->input->post('supp_address'),
					'payment_term'          => $this->input->post('payment_term'),
					'billing_address'       => $this->input->post('billing_addr'),
					'delivery_address'      => $this->input->post('delivery_addr'),
					'late_delivery_clause'  => $this->input->post('late_delivery_clause'),
					'enclosure'             => $this->input->post('enclosure'),
					'warranty_guarantee'    => $this->input->post('warranty_guarantee'),
					'liquidated_damages'    => $this->input->post('liq_damages'),
					'special_condition'     => $this->input->post('spl_cond'),
					'po_date'               => $this->input->post('issue_date'),
					'delivery_date'         => $this->input->post('delivery_date'),
					'insurance'             => $this->input->post('insurance'),
					'freight'               => $this->input->post('freight'),
					'loading_type'          => $this->input->post('loading_type'),
					'packing'               => $this->input->post('packing'),
					'category_id'           => $this->input->post('wbs') ,
					'subcat_id1'            => ($this->input->post('wbssub1'))?($this->input->post('wbssub1')):'0' ,
					'subcat_id2'            => ($this->input->post('wbssub2'))?($this->input->post('wbssub2')):'0' ,
					'subcat_id3'            => ($this->input->post('wbssub3'))?($this->input->post('wbssub3')):'0' ,
					'subcat_id4'            => ($this->input->post('wbssub4'))?($this->input->post('wbssub4')):'0' ,
					'subcat_id5'            => ($this->input->post('wbssub5'))?($this->input->post('wbssub5')):'0' 
		      	);
                 //echo "<pre>";print_r($data_insert);
		         $amount_sum = ($this->input->post('insurance') + $this->input->post('freight') + $this->input->post('loading_type') +$this->input->post('packing') );
		      	$check=$this->input->post('save');
		      	$update=$this->input->post('update');

		        if(isset($check))
		        {         
		        	      $data_insert1 = array(
		        	      'created_by'=> $this->session->user_id,
					      'created_on'=> date("Y-m-d"),
                          'contract_value'=>$amount_sum
					       );
					      $data_insert2 = array_merge($data_insert1,$data_insert);
				          $insert=$this->Database_conn->insert('po_master',$data_insert2);
				          $prefix = date('y');
                          $invoice_id = $this->Database_conn->autoGenerateNextSerialNumber($prefix,'po_number','8',true);
				          $this->Database_conn->updateNextSerialNumber('po_number',true);
				          $data['dataArr']=$this->Database_conn->getData('po_master');
				          if($insert)
				          {
				          	$data['msg']="Save Successfully ";
				          }
				          else
				          {
				          	$data['msg']="Could not Save";
				          }
							$data['po_list'] = 'block';
							$data['show_transaction'] = 'none';
							$data['category']     = $this->Database_conn->fetch_category('wbs_category','category_name');
		        }
		        else if(isset($update))
		        {   
				          $update_id=$this->input->post('id');
						  $data_insert = array_merge($data_insert,array('contract_value'=>$amount_sum));
		        	      $update_data=$this->Database_conn->update('po_master',$data_insert,'id',$update_id);
				          $data['dataArr']=$this->Database_conn->getData('po_master');
				          if($update_data)
				          {
				          	$data['msg']="Update Successfully ";
				          }
				          else
				          {
				          	$data['msg']="Could not Update";
				          }
				          $data['po_list'] = 'block';
						  $data['show_transaction'] = 'none';
						  $data['category'] = $this->Database_conn->fetch_category('wbs_category','category_name');
		        }
		        else
		        {  
				           $data['dataArr']=$this->Common->getData('po_master',array('project_id'=>$this->session->project_id));
				           $data['po_list'] = 'block';
				           $data['show_transaction'] = 'none';
				           $data['category']     = $this->Database_conn->fetch_category('wbs_category','category_name');
		        }

		                  $this->load->view('po_entry',$data);
		    }
		    else
		    {
		    	$this->login();
		    }
	    }


######################################################################################################################################
     //  edit  project 
        public function edit_po_entry($row_id)
        {
	        if(isset($this->session->username))
		    {	
		    	$edit_id = $row_id;
	        	$data['dataArr']=$this->Common->getData('po_master',array('id'=>$row_id,'project_id'=>$this->session->project_id));
	        	$po_number = $data['dataArr']['0']['po_number'];
	        	$data['po_transaction'] = $this->Database_conn2->fetch_po_transaction('po_transaction' , $po_number);
                $data['po_list'] = 'none';
                $data['show_transaction'] = 'block';
                $set_submit = $this->input->post("select_category");
				           if(isset($set_submit))
				           {
				           	$cat_string = $this->input->post('cat');
				           	$data['cat_array'] = explode("-", $cat_string['0']);
				           }
				           else
				           {
				           	$data['cat_array']=array(
								'0' =>$data['dataArr']['0']['category_id'], 
								'1' =>$data['dataArr']['0']['subcat_id1'] ,
								'2' =>$data['dataArr']['0']['subcat_id2'] ,
								'3' =>$data['dataArr']['0']['subcat_id3'] ,
								'4' =>$data['dataArr']['0']['subcat_id4'] ,
								'5' =>$data['dataArr']['0']['subcat_id5'] 
								);
				           }
	        	
	        	if($edit_id)
	        	{
	        	$data['edit_data']=$this->Database_conn->fetch_edit('po_master',$edit_id);
	        	$data['updateFlag']=1;
	        	}
	            
	        	$this->load->view('po_entry',$data);
	        }
	        else
	        {
	        	$this->login();
	        }
        } 

######################################################################################################################################


        public function backend_search()
        {
        	if($this->session->user_id)
        	{
					if(isset($_REQUEST['name_id']))
					{
							$output = '';
							$name_id = $_REQUEST['name_id'];
							
							$vendor_list = $this->Database_conn->getData_ajaxNew('vendor_detail' , 'vendor_name' , $name_id);

							if(sizeof($vendor_list)>0)
							{
								foreach ($vendor_list as $data) 
								{  //$add = $data['vendor_add'];
							        if($data['Preferred_contact_person']=='1')
							        {
								        $name=$data['contact_name1'];
								        $email = $data['contact_email1'];
								        $number = $data['contact_mobile1'];
								        $supp_id = $data['id'];
								    }
								    else if($data['Preferred_contact_person']=='2')
								    {
								    	$name=$data['contact_name2'];
								        $email = $data['contact_email2'];
								        $number = $data['contact_mobile2'];
								        $supp_id = $data['id'];
								    }
								    else if($data['Preferred_contact_person']=='3')
								    {
								    	$name=$data['contact_name3'];
								        $email = $data['contact_email3'];
								        $number = $data['contact_mobile3'];
								        $supp_id = $data['id'];
								    }

							        $params = 'this.title,"'.$name.'","'.$number.'","'.$email.'" ,"'.$supp_id.'"';
								    $output .= "<p class='change' id='".$data['id']."' title='".$data['vendor_add']."' onclick='get_vendor_id($params)'><span style='padding-left: 20px'>" . $data['vendor_name'] . "</span></p>";
								}
							} 
							
					   echo $output;
					}

        	}
        	else
        	{
        		$this->login();
        	}
        }

#######################################################################################################################################

        public function po_transaction($row_id='')
        {
        	if(isset($this->session->user_id))
        	{

					$set_submit = $this->input->post("select_category");
					if(isset($set_submit))
					{
					$cat_string = $this->input->post('cat');
					$data['cat_array'] = explode("-", $cat_string['0']);
					}
					else
					{
					$data['cat_array'] =array();
					}


		        	$po_number = $this->Database_conn2->get_ponumber('po_master',$row_id);

		        	$add_btn      = $this->input->post('add_transaction');
		        	$update_btn   = $this->input->post('edit_transaction');
		        	$desc         = $this->input->post('item_id');
		        	$cgst         = $this->input->post('cgst');
		        	$sgst         = $this->input->post('sgst');
		        	$igst         = $this->input->post('igst');
		        	$item_rate    = $this->input->post('price');
		        	$quant        = $this->input->post('quantity');
		        	$unit         = $this->input->post('unit');
		        	$item_total   = $item_rate * $quant;
		        	
		        	if(isset($cgst)&&$cgst!='')
		        	{
		        	   $cgst_total    = $item_total/100*$cgst;
		        	}
		        	else
		        	{
		        		$cgst_total = 0;
		        	}

		        	if(isset($sgst)&&$sgst!='')
		        	{
		        	   $sgst_total    = $item_total/100*$sgst;
		        	}
		        	else
		        	{
		        		$sgst_total = 0;
		        	}

		        	if(isset($igst)&&$igst!='')
		        	{
		        	   $igst_total    = $item_total/100*$igst;
		        	}
		        	else
		        	{
		        		$igst_total = 0;
		        	}


		        	$grand_total  = $item_total + $cgst_total + $sgst_total + $igst_total;
		        	


		        	     $insert_value = array(
		                 'po_number'         => $po_number,
		                 'item_id'           => $desc,
		                 'cgst'              => $cgst, 
		                 'sgst'              => $sgst, 
		                 'igst'              => $igst, 
		                 'quantity'          => $quant,
		                 'item_total'        => $item_total,
		                 'grand_total'       => $grand_total,
		                 'cgst_total'        => $cgst_total,
		                 'sgst_total'        => $sgst_total,
		                 'igst_total'        => $igst_total,
		                 'item_rate'         => $item_rate,
		                 'unit'              => $unit,
		                 'company_id'        => $this->session->company_id,
		                 'project_id'        => $this->session->project_id
		        		);

		        	if(isset($add_btn))
		        	{
		        		$alreadyExit = $this->Common->getDataSingle('po_transaction','count(*)',array('po_number'=>$po_number,'company_id'=>$this->session->company_id,'project_id'=>$this->session->project_id,'item_id'=>$desc));
		        		if(!$alreadyExit)
		        		{
			        	    $get_master = $this->Database_conn->getData('po_master',array('id'=>$row_id));	
			        	    $change_array = array(
	                        'contract_value'=>($item_total + $get_master['0']['contract_value']),
	                        'contract_value_gst'=>($cgst_total + $sgst_total + $igst_total + $get_master['0']['contract_value_gst'])
			        	    );
			        	    $upd_mstr = $this->Database_conn->update('po_master',$change_array,'id',$row_id);

			        		$insert  =  $this->Database_conn->insert_data('po_transaction' , $insert_value);

			        		if($insert)
			        		{
			        			$data['msg'] = "Saved Successfully";
			        		}
			        		else
			        		{
			        			$data['msg'] = " Unable To Save";
			        		}
			        	}
			        	else
			        	{
			        		$data['msg'] = " Item Already Exist";
			        	}
		        	}
		        	else if(isset($update_btn))
		        	{
		        		$update_id  = $this->input->post('update_id');
		        		$get_master = $this->Database_conn->getData('po_master',array('id'=>$row_id));	
		        	    $get_trn_id = $this->Common->getData('po_transaction', array('id'=>$update_id));
		        	    
		        	    $val1 = (float)$get_master['0']['contract_value'];
		        	    $val2 = (float)$get_trn_id['0']['item_total'];
		        	    $val3 = (float)$item_total;
		        		$change_array = array(
                        'contract_value'=>($val1 + $val3 - $val2),
                        'contract_value_gst'=>($cgst_total + $sgst_total + $igst_total + $get_master['0']['contract_value_gst'] - $get_trn_id['0']['cgst_total'] - $get_trn_id['0']['sgst_total'] - $get_trn_id['0']['igst_total'])
		        	    );
		        	    $upd_mstr = $this->Database_conn->update('po_master',$change_array,'id',$row_id);


		        		$update  =  $this->Database_conn->update('po_transaction',$insert_value,'id',$update_id);

		        		if($update)
		        		{
		        			$data['msg'] = "Update Successfully";
		        		}
		        		else
		        		{
		        			$data['msg'] = " Unable To Update";
		        		}
		        	}

						$edit_id = $row_id;
						$data['dataArr']=$this->Database_conn->getData('po_master',array('id'=>$row_id,'project_id'=>$this->session->project_id));
						$data['cat_array']=array(
								'0' =>$data['dataArr']['0']['category_id'], 
								'1' =>$data['dataArr']['0']['subcat_id1'] ,
								'2' =>$data['dataArr']['0']['subcat_id2'] ,
								'3' =>$data['dataArr']['0']['subcat_id3'] ,
								'4' =>$data['dataArr']['0']['subcat_id4'] ,
								'5' =>$data['dataArr']['0']['subcat_id5'] 
								);
				           

						//echo "<pre>";print_r($data);exit();
						$po_number = $data['dataArr']['0']['po_number'];
						$data['po_transaction'] = $this->Database_conn2->fetch_po_transaction('po_transaction' , $po_number);
						$data['po_list'] = 'none';
						$data['show_transaction'] = 'block';

						if($edit_id)
						{
						   $data['edit_data']=$this->Database_conn->fetch_edit('po_master',$edit_id);
						   $data['updateFlag']=1;
						}
						$this->load->view('po_entry',$data);
                


		    }
		    else
		    {
		    	$this->login();
		    }



        }
#####################################################################################################################################
                 

                 public function edit_po_transaction($row_id='')
                 {
                 	if($this->session->user_id)
                 	{
                       $edit  = $this->input->post('edit');
                       if(isset($edit))
                       {  
                       	   $cond  = array(
                           'po_transaction.id' => $row_id
                       	   );
                           $data['update_transaction'] = $this->Common->getPoDataSelect('po_transaction',$cond);
                           $po_number = $data['update_transaction']['0']['po_number'];
                           $condition = array(
                            'po_number' =>$po_number,
                            'project_id'=>$this->session->project_id
                           );
                           $data['updateFlag'] = '1';
                           $data['edit_data'] = $this->Common->getData('po_master',$condition);
                           

                           $data['po_transaction'] = $this->Common->getPoData('po_transaction' ,array('po_transaction.po_number'=>$po_number));
                           $data['po_list'] = 'none';
						   $data['show_transaction'] = 'block';
						   $data['dataArr']=$this->Common->getData('po_master',array('project_id'=>$this->session->project_id,'po_number'=>$po_number));
						   $data['cat_array']=array(
								'0' =>$data['dataArr']['0']['category_id'], 
								'1' =>$data['dataArr']['0']['subcat_id1'] ,
								'2' =>$data['dataArr']['0']['subcat_id2'] ,
								'3' =>$data['dataArr']['0']['subcat_id3'] ,
								'4' =>$data['dataArr']['0']['subcat_id4'] ,
								'5' =>$data['dataArr']['0']['subcat_id5'] 
								);
						   $this->load->view('po_entry',$data);

                       }
                       else
                       {
                       	$this->po_entry();
                       }
                 	}
                 	else
                 	{
                 		$this->login();
                 	}
                 }






#####################################################################################################################################



        public function final_submit($row_id='')
        {

        	  $draft  = $this->input->post('draft');
        	  $close  = $this->input->post('close');
              
              if(isset($draft))
              {
              	redirect('da_projects/po_entry');
              }
              else if(isset($close))
              {
                 $update_data = array(
                 'temp_data' => '0'
                 );

                 $update = $this->Database_conn->update('po_master' , $update_data , 'id' , $row_id);

                 if($update)
                 {
                 	redirect('da_projects/po_entry');
                 }
                 else
                 {
                 	$data['msg'] = " Unable to Update";
                 	$edit_id = $row_id;
						$data['dataArr']=$this->Database_conn->fetch_Data('po_master');
						//echo "<pre>";print_r($data);exit();
						$po_number = $data['dataArr']['0']['po_number'];
						$data['po_transaction'] = $this->Database_conn2->fetch_po_transaction('po_transaction' , $po_number);
						$data['po_list'] = 'none';
						$data['show_transaction'] = 'block';

						if($edit_id)
						{
						$data['edit_data']=$this->Database_conn->fetch_edit('po_master',$edit_id);
						$data['updateFlag']=1;
						// echo "<pre>";
						//    print_r($data);
						}
						$this->load->view('po_entry',$data);
                 }
              }

        }









######################################################################################################################################
 // work order entry data fetch and submit

        public function cop_entry()
        {
        	 if(isset($this->session->username))
		    {
		      	 //extract($_POST);
		      	$data_insert=array(
						'project_id'               => $this->input->post('project_id'),
						'project_name'             => $this->input->post('proj_name'),
						'cop_number'               => $this->input->post('cop_number'),
						'cop_title'                => $this->input->post('cop_title'),
						'contact_person_name'      => $this->input->post('contact_pname'),
						'contact_person_email'     => $this->input->post('contact_email'),
						'budget_heads'             => $this->input->post('budget_heads'),
						'contact_person_phone'     => $this->input->post('contact_no'),
						'contractor_name'          => $this->input->post('contractor_name'),
						'contractor_address'       => $this->input->post('contractor_address'),
						'payment_term'             => $this->input->post('payment_terms'), 
						'enclosure'                => $this->input->post('enclosure'),
						'contract_value'           => $this->input->post('contract_value'),
						'defect_liability_period'  => $this->input->post('defect_liability_period'),
						'liquidated_damages'       => $this->input->post('liq_damages'),
						'special_condition'        => $this->input->post('spl_cond'),
						'completion_date'          => $this->input->post('completion_date'),
						'cop_issue_date'           => $this->input->post('cop_issue_date'),
						'created_by'               => $this->session->user_id,
						'temp_data'                =>'1'
		      	);
		      
		      	$check=$this->input->post('save');
		      	$update=$this->input->post('update');

		        if(isset($check))
		        {
		          $insert=$this->Database_conn->insert('cop_master',$data_insert);
		          $data['dataArr']=$this->Database_conn->fetch_Data('cop_master');
		          if($insert)
		          {
		          	$data['msg']="Save Successfully ";
		          }
		          else
		          {
		          	$data['msg']="Could not Save";
		          }
		          $this->load->view('cop_entry',$data);
		        }
		        else if(isset($update))
		        {   
		          $update_id=$this->input->post('project_id');
		          $update_data=$this->Database_conn->update('cop_master',$data_insert,'project_id',$update_id);
		          $data['dataArr']=$this->Database_conn->fetch_Data('cop_master');
		          if($update_data)
		          {
		          	$data['msg']="Update Successfully ";
		          }
		          else
		          {
		          	$data['msg']="Could not Update";
		          }
		          $this->load->view('cop_entry',$data);
		        }
		        else
		        {  
		           $data['dataArr']=$this->Database_conn->fetch_Data('cop_master');
		           $this->load->view('cop_entry',$data);
		        }
		    }
		    else
		    {
		    	$this->login();
		    }
	    }


######################################################################################################################################
     //  edit  project 
        public function edit_cop_entry()
        {
	        if(isset($this->session->username))
		    {	
	        	$data['dataArr']=$this->Database_conn->fetch_Data('cop_master');

	        	$edit_id=$this->input->post('edit_id');
	        	if($edit_id)
	        	{
	        	$data['edit_data']=$this->Database_conn->fetch_edit('cop_master',$edit_id);
	        	$data['updateFlag']=1;
	        	// echo "<pre>";
	         //    print_r($data);
	            }
	        	$this->load->view('cop_entry',$data);
	        }
	        else
	        {
	        	$this->login();
	        }
        } 



######################################################################################################################################
 // ajax function for add wbs page 


      public function ajax()
      {
			if(isset($_POST['category']))
			{
			   $category = $this->input->post('category');
			   $array  = array(
                 'category_id' => $category
			   );
			$dataArr  = $this->Database_conn->fetch_data_id_ajax('wbs_sub_category1',$array);
			$output =  "<option value=''>Select Sub Category 1</option>";
			if(sizeof($dataArr)>0)
			{
				foreach ($dataArr as $cat ) 
				{
					$output .= "<option value='".$cat['id']."' >".$cat['sub_category_name1']."</option>";
				}
			  	
			}
			
             }



             if(isset($_POST['sub1']))
			{
			   $sub1 = $this->input->post('sub1');
			   $array  = array(
                 'subcat_id1' => $sub1
			   );
			$dataArr  = $this->Database_conn->fetch_data_id_ajax('wbs_sub_category2',$array);
			$output =  "<option value=''>Select Sub Category 2</option>";
			if(sizeof($dataArr)>0)
			{
				foreach ($dataArr as $cat ) 
				{
					$output .= "<option value='".$cat['id']."' >".$cat['sub_category_name2']."</option>";
				}
			  	
			}
			
             }


             if(isset($_POST['sub2']))
			{
			   $sub = $this->input->post('sub2');
			   $array  = array(
                 'subcat_id2' => $sub
			   );
			$dataArr  = $this->Database_conn->fetch_data_id_ajax('wbs_sub_category3',$array);
			$output =  "<option value=''>Select Sub Category 3</option>";
			if(sizeof($dataArr)>0)
			{
				foreach ($dataArr as $cat ) 
				{
					$output .= "<option value='".$cat['id']."' >".$cat['sub_category_name3']."</option>";
				}
			  	
			}
			
             }

             if(isset($_POST['sub3']))
			{
			   $sub = $this->input->post('sub3');
			   $array  = array(
                 'subcat_id3' => $sub
			   );
			$dataArr  = $this->Database_conn->fetch_data_id_ajax('wbs_sub_category4',$array);
			$output =  "<option value=''>Select Sub Category 4</option>";
			if(sizeof($dataArr)>0)
			{
				foreach ($dataArr as $cat ) 
				{
					$output .= "<option value='".$cat['id']."' >".$cat['sub_category_name4']."</option>";
				}
			  	
			}
			
             }

             if(isset($_POST['sub4']))
			{
			   $sub = $this->input->post('sub4');
			   $array  = array(
                 'subcat_id4' => $sub
			   );
			$dataArr  = $this->Database_conn->fetch_data_id_ajax('wbs_sub_category5',$array);
			$output =  "<option value=''>Select Sub Category 5</option>";
			if(sizeof($dataArr)>0)
			{
				foreach ($dataArr as $cat ) 
				{
					$output .= "<option value='".$cat['id']."' >".$cat['sub_category_name5']."</option>";
				}
			  	
			}
			
             }


			echo $output;
			

      }  


######################################################################################################################################


     public function create_folder($parent='')
     {
         
     	if($this->session->username)
     	{
     		
     			$parent_id = $this->input->post('id');
     			$back = $this->input->post('go_back');

     		     		
     		
            if(isset($back))
            {    
            	if($this->session->parent_id)
            	{     
				     $condition = array(
				      'directory.id' =>$this->session->parent_id,
	                  'directory.project_id'=>$this->session->project_id
				     );
				     $back = $this->Database_conn->fetch_data_id('directory',$condition,'name','asc');
				     $parent_id = $back['0']['parent_id'];
				     $this->session->set_userdata('parent_id',$parent_id);
                 }

		             $parent_id = $this->session->parent_id; 
		             $condition1 = array(
		              'parent_id' =>$parent_id,
		              'type'      =>'dir',
	                  'directory.project_id'=>$this->session->project_id
		             );
                       
                      $condition2 = array(
		              'parent_id' =>$parent_id,
		              'type'      =>'file',
	                  'directory.project_id'=>$this->session->project_id
		               );

		             $data['dataArrfolder'] = $this->Database_conn->fetch_data_id('directory',$condition1,'name','asc');
		             $data['dataArrfile'] = $this->Database_conn->fetch_data_id('directory',$condition2,'name','asc');
		             $this->load->view('create_folder',$data);

            }
            else
            {

                 
	     		if(!$parent_id)
	     		{

	     			if($this->session->parent_id && $parent != 'root')
	     			{

	     				$parent_id = $this->session->parent_id;
	     			}
	     			else
	     			{	

	     			    $parent_id = 0;
	     			}
	     		}
	     		//var_dump($parent_id);var_dump($this->session->parent_id);
	     		$condition_array1 = array(
	             'parent_id' =>$parent_id,
	             'type'      =>'dir',
	             'directory.project_id'=>$this->session->project_id
	     		);

	     		$condition_array2 = array(
	             'parent_id' =>$parent_id,
	             'type'      =>'file',
	             'directory.project_id'=>$this->session->project_id
	     		);

                 
	     		$this->session->set_userdata('parent_id',$parent_id);
	     		//print_r($parent_id);//exit();
	     		$data['dataArrfile'] = $this->Database_conn->fetch_data_id('directory',$condition_array2,'name','asc');
	     		$data['dataArrfolder'] = $this->Database_conn->fetch_data_id('directory',$condition_array1,'name','asc');
	            $this->load->view('create_folder',$data);
     	   }
        }
     	else
     	{
     		$this->login();
     	}
     }








######################################################################################################################################
                //function for displaying link and sent to that location which is mention in the link




          public function access_folder($parent_id2='' , $user_name = '' , $password = '' , $project = '' , $usertype = '' )
          {
          	     if($user_name!=''&&$password!=''&&$project!=''&&$usertype!='')
          	     {
						$this->session->unset_userdata('username');
						$this->session->unset_userdata('user_id');
						$this->session->unset_userdata('parent_id');
						$this->session->unset_userdata('parent_id2');
						$this->session->unset_userdata('project_id');
						$this->session->unset_userdata('user_type');
						$this->session->unset_userdata('comment_file_link');

						$username = $this->url_decrypt($user_name);
						$pass = $this->url_decrypt($password);
						$project_id = $this->url_decrypt($project);
						$user_type = $this->url_decrypt($usertype);



						$condition =array(
						'username'   => $username,
						'password'   => $pass,
						'project_id' => $project_id,
						'user_type'  => $user_type
						);

						$check=$this->Database_conn->check_login($condition);
						if(sizeof($check)>0)
						{   
						//print_r($check);
						$id = $check->id;
						$username = $check->username;
						$project_id = $check->project_id;
						$user_type = $check->user_type;
						$this->session->set_userdata('project_id',$project_id);
						$this->session->set_userdata('username',$username);
						$this->session->set_userdata('user_id',$id);
						$this->session->set_userdata('user_type',$user_type);

          	    }
          	     }

          	if($this->session->username)
          	{
          		$this->session->set_userdata('parent_id',$parent_id2);
          		redirect('da_projects/create_folder');
          	}
          	else
          	{
          		$this->session->set_userdata('parent_id',$parent_id2);
          		//var_dump($parent_id2);var_dump($this->session->parent_id);
          		redirect('da_projects/login');
          	}
          }










######################################################################################################################################
//function for creating folder
       
       public function folder()
       {
       	$p =  $this->input->post('dir');//$path = $_POST['path'];
       	$submit =  $this->input->post('submit');
       	if(isset($submit))
       	{
       		if($this->session->parent_id)
       		{
       			   $edit = $this->session->parent_id;
       			do {
		       			
		       			$name = $this->Database_conn->fetch_edit('directory', $edit);
		       			$p = $name['0']['name']."/".$p;
		       			$edit = $name['0']['parent_id'];
       		       } while($name['0']['parent_id']!=0);
       		}
       		$p = "application/upload/".$this->session->project_id.$p;

       		if(mkdir($p, null, true))
       		{
       			$array = array(
                 'name' => $this->input->post('dir'),
                 'parent_id'  => $this->session->parent_id,
                 'type'       => 'dir',
                 'company_id' => $this->session->company_id,
                 'project_id' => $this->session->project_id,
                 'description'=> $this->input->post('description'),
                 'created_by' => $this->session->user_id
       			);
       			$insert = $this->Database_conn->insert_data('directory',$array);
	       			if($insert)
	       			{
	       			    $data['msg'] = " Folder Created ";
	       	     	}
	       	     	else
	       	     	{
	       	     		$data['msg'] = " Unable to Create Folder ";
	       	     	}
       		}
       		else
       		{
       			$data['msg'] = "Folder Aready Exist";
       		} 

       		           
                        $parent_id = $this->session->parent_id;
						$condition_array1 = array(
						'parent_id' =>$parent_id,
						'type'      =>'dir',
						'directory.project_id'=>$this->session->project_id
						);

						$condition_array2 = array(
						'parent_id' =>$parent_id,
						'type'      =>'file',
						'directory.project_id'=>$this->session->project_id
						);

						//print_r($parent_id);//exit();
						$data['dataArrfile'] = $this->Database_conn->fetch_data_id('directory',$condition_array2,'name','asc');
						$data['dataArrfolder'] = $this->Database_conn->fetch_data_id('directory',$condition_array1,'name','asc');
						$this->load->view('create_folder',$data);
       	}
       	else
       	{
       		redirect('da_projects/create_folder');
       	}
       }






######################################################################################################################################
 //  function for uploading form 


      public function upload_form()
      {
      	if($this->session->username)
      	{
           $submit = $this->input->post('submit');
           if($submit)
           {             //function for getting current path

           	       $p  = "";
           	       $id = $this->session->parent_id;
					do {
					
					$con = array(
                     'id' => $id,
                     'type' => 'dir'
					);	
					$name = $this->Database_conn->fetch_edit('directory','', $con);
						if(sizeof($name)>0)
						{
						$p = $name['0']['name']."/".$p;
						$id = $name['0']['parent_id'];
					    }
					} while(sizeof($name)>0&&$name['0']['parent_id']!=0);

					$path = $_SERVER['DOCUMENT_ROOT']."/".WEBSITE."/application/upload/".$this->session->project_id.$p;
                    
					$config = array(
					'upload_path' => $path,
					
					'allowed_types' => "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp|dwg|dxf",

					'overwrite' => TRUE,
					'max_size' => "10240000", // Can be set to particular file size , here it is 10 MB(10240 Kb)
					'max_height' => "768",
					'max_width' => "1024"
					);


	               $this->load->library('upload',$config);
					if($this->upload->do_upload('upload'))
					{
					$data = array('upload_data' => $this->upload->data());
					}
                    
                    $link =base_url()."application/upload/".$data['upload_data']['file_name'];
                    	
                    $user_fullname = $this->Database_conn2->get_fullname('users');
                    $email_subject = 'A New File Uploaded';
                    $email_message = 'A new file '.$data['upload_data']['file_name'].' has been uploaded by '.$user_fullname['0']['full_name'].' in '.$user_fullname['0']['project_name'].' project';
                    $email_message .= '<br>File Description : '.$this->input->post('description');
                    $email_message .= '<br>'.$data['upload_data']['file_name'].'</a><br>';
                    
                     
					$insertData = array(
                    'name'      => $data['upload_data']['file_name'],
                    'parent_id'  => $this->session->parent_id,
                    'project_id' =>$this->session->project_id,
                    'company_id' =>$this->session->company_id,
                    'type'       => 'file',
                    'description'=> $this->input->post('description'),
                    'created_by' => $this->session->user_id
					);
					 $insert = $this->Database_conn->insert('directory', $insertData);
                     $last_id = $this->Database_conn2->get_last_id('directory');
                      $this->sendMail($email_subject , $email_message , $last_id);
					if($insert)
					{
						$data['msg']=" File Uploaded Successfully ";
						
						
					}
					else
					{
						$data['msg'] = " Unable to upload File ";
					}
                      
					    $parent_id = $this->session->parent_id;
						$condition_array1 = array(
						'parent_id' =>$parent_id,
						'type'      =>'dir',
						'directory.project_id' =>$this->session->project_id
						);

						$condition_array2 = array(
						'parent_id' =>$parent_id,
						'type'      =>'file',
						'directory.project_id' =>$this->session->project_id
						);

						//print_r($parent_id);//exit();
						$data['dataArrfile'] = $this->Database_conn->fetch_data_id('directory',$condition_array2,'name','asc');
						$data['dataArrfolder'] = $this->Database_conn->fetch_data_id('directory',$condition_array1,'name','asc');
						$this->load->view('create_folder',$data);
           }
           else
           {
           $this->create_folder();
           }
      	}
      	else
      	{
      		$this->login();
      	}
      }  







######################################################################################################################################
 // delete function for directory structure



       public function delete()
        {
        	$btn  = $this->input->post('delete');
        	$id   = $this->input->post('delete_id');
            $type = $this->input->post('type');
            if(isset($btn))
            {
	        	$this->deletefromdirectory($id,$type); 
	        	$delete = $this->Database_conn->deleteData('directory',$id,$type); 
				
				$parent_id = $this->session->parent_id;
				$condition_array1 = array(
				'parent_id' =>$parent_id,
				'type'      =>'dir',
				'directory.project_id' =>$this->session->project_id
				);

				$condition_array2 = array(
				'parent_id' =>$parent_id,
				'type'      =>'file',
				'directory.project_id' =>$this->session->project_id
				);

				//print_r($parent_id);//exit();
				$data['dataArrfile'] = $this->Database_conn->fetch_data_id('directory',$condition_array2,'name','asc');
				$data['dataArrfolder'] = $this->Database_conn->fetch_data_id('directory',$condition_array1,'name','asc');
				$data['msg'] = " Delete Successfully ";
				$this->load->view('create_folder',$data);
		    }
		    else
		    {
		    	redirect('da_projects/create_folder');
		    }

        } 


        public function deletefromdirectory($id , $type)
        {        
                $path = $_SERVER['DOCUMENT_ROOT']."/".WEBSITE."/application/upload/";   
        	    $p   = "";
        	    $id1 = $id;
               
        	    do{
        		$con = array(
				'id' => $id
				);	
				$name = $this->Database_conn->fetch_edit('directory','', $con);
				if(sizeof($name)>0)
				{
					if($p!="")
					{
						$p = $name['0']['name']."/".$p;
					}
					else
					{
						$p = $name['0']['name'];
					}
				
				$id = $name['0']['parent_id'];
				}
				} while(sizeof($name)>0&&$name['0']['parent_id']!=0);
                
                $condition = array(
                  'id' =>$id1
                ); 
                $name = $this->Database_conn->fetch_edit('directory','', $condition);
                
                    
		                if($p!="")
		                {
		                   $path = $path.$p;
		                }
		                else
		                {
		                	$path = $path;
		                }

		            if($type=="file")
		            {
						chown($path, 666);
						unlink($path);
		            }
		            else 
		            {  
		            	$this->rrmdir($path);
		            }
        }


					public function rrmdir($dir) 
					{
					    if (is_dir($dir)) 
					    {
							$objects = scandir($dir);
							foreach ($objects as $object) 
							{
							    if ($object != "." && $object != "..") 
							    {
									if (filetype($dir."/".$object) == "dir") 
									$this->rrmdir($dir."/".$object); 
									else unlink   ($dir."/".$object);
								}
					        }
							reset($objects);
							rmdir($dir);
					    }
					}




######################################################################################################################################

         public function comment_ajax()
         {
         	$file_id = $this->input->post('file_id');
              if(isset($file_id))
              {
             	$comment = $this->Database_conn2->get_all_comment($file_id);
             	var_dump($comment);
             	$output = "";
             	if(sizeof($comment)>0){
             	$output .= "<thead>
							<tr>
							<th align='center' style='width:20%'>User Name</th>
							<th align='center' style='width:40%'>Comment</th>
							<th align='center' style='width:20%'>Comment Date</th>
							<th align='center' style='width:20%'>Comment Time</th>
							</tr>
							</thead>
							<tbody>";
					foreach($comment as $data)
					{   $date = strtotime($data['date']); 
			            $output .= "<tr><td align='center' style='width:20%'>".$data['username']."</td>";
			            $output .= "<td align='center' style='width:40%'>".$data['comment']."</td>";
			            $output .= "<td align='center' style='width:20%'>".date("d-m-Y",$date)."</td>";
			            $output .= "<td align='center' style='width:20%'>".date("H:s:i",$date)."</td></tr>";
			        }
			         $output .= "</tbody>";
			         }
			    echo $output;                 

              }
         	
            
         }

######################################################################################################################################


			public function comment()
			{ 
			   
               $submit = $this->input->post('submit');
               if(isset($submit))
               {             
                                
               	        $file_id   = $this->input->post('file_id'); 	
		               	$condition = array(
		                 'file_id' => $file_id,
		                 'comment' => $this->input->post('add_comment'),
		                 'user_id' => $this->session->user_id
		               	);
		               	
		               	$insert = $this->Database_conn->insert_data('directory_files_comment',$condition);
			               	if($insert)
			               	{
			               		$data['msg'] = " Comment Added Successfully ";
                                
                                if(isset($this->session->comment_file_link))
                                {  
                                	
                                   $link = $this->session->comment_file_link;	
                                   $parent_id = $this->session->parent_id;
                                }
                                else
                                {
                                	
                                	$parent_id = $this->Database_conn2->get_parent_id('directory',$file_id);
                                	$link = base_url('da_projects/access_folder/'.$parent_id);
                                	$this->session->set_userdata('comment_file_link',$link);

                                }

                                if(!$this->session->parent_id)
                                {
                                	$parent_id = $this->Common->getDataSingle('directory','parent_id',array('id'=>$file_id));
                                    $this->session->set_userdata('parent_id',$parent_id);
                                }
			               		
			               		//echo $link;exit();
			               		$get_users_detail = $this->Database_conn2->get_users_comment_detail();
			               		$get_file_name    = $this->Database_conn2->get_file_name('directory',$file_id);

			               		$email_message  = $get_users_detail['0']['full_name']." commented on ".$get_file_name['0']['name']." of " .$get_users_detail['0']['project_name']." project. " ;
			               		$email_message .= "<br> You can view the comment by clicking on the link below: ";
			               		$email_message .= '';
			               		

			               		$email_subject = "New Comment";
			               		$this->sendMail($email_subject , $email_message ,'', $link);
			               	}
			               	else
			               	{
			               		$data['msg'] = " Unable To Add Comment ";
			               	}
			               	        $parent_id = $this->session->parent_id;
									$condition_array1 = array(
									'parent_id' =>$parent_id,
									'type'      =>'dir',
									'directory.project_id' =>$this->session->project_id
									);

									$condition_array2 = array(
									'parent_id' =>$parent_id,
									'type'      =>'file',
									'directory.project_id' =>$this->session->project_id
									);

									//print_r($parent_id);//exit();
									$data['dataArrfile'] = $this->Database_conn->fetch_data_id('directory',$condition_array2,'name','asc');
									$data['dataArrfolder'] = $this->Database_conn->fetch_data_id('directory',$condition_array1,'name','asc');
									//echo "<pre>";print_r($data);echo "</pre>";
									$this->load->view('create_folder',$data);
               }
               else
               {
               	redirect('da_projects/create_folder');
               }
			}
######################################################################################################################################
         //for fetching file and user detail for a particular file  for viewall button in front of folder in create folder page

			public function folder_fetch_ajax()
			{
					$folder_id = $this->input->post('folder_id');
					if(isset($folder_id))
					{
						$dataArr = $this->Database_conn2->get_all_file_of_folder($folder_id);
                           $output ="";
						 if(sizeof($dataArr)>0)
						 { 
						 	$i=0;
						 	

						 	foreach ($dataArr as $data) 
						 	{   $date = strtotime($data['date_created']);
						 	
								$output .= "<thead>
								</thead>
								<tbody>";
								$output .= "<tr style='font-size:13px;'>
								           <th align='center' style='width:5%'>".++$i."</th>";
								$output .= "<th align='center' style='widt:20%'>".$data['name']."</th>";
								$output .= "<th align='center' style='width:40%'>
								<a href='#' class='comment-popover' onclick='popover$i()'>".read_more($data['description'],50,true)."</a>
								<div class='popover-on-modal$i popover-on-modal' >".$data['description']."</div>
								</th>";
								$output .= "<th align='center' style='width:20%'>".date("d-m-Y",$date)."</th>";
								$output .= "<th align='center' style='width:15%'>".date("H:i:s",$date)."</th><tr>";

								$comment = $this->Database_conn2->get_all_comment($data['id']);
								if(sizeof($comment)>0){
								$output .= "<tr><td colspan='5'><table width='100%'>
								
								<tr  style='font-size:14px;'>
								<td align='center' style='width:5%'> S.No </td>
								<td align='center' style='width:20%'>User Name</td>
								<td align='center' style='width:40%'>Comment</td>
								<td align='center' style='width:20%'>Comment Date</td>
								<td align='center' style='width:15%'>Comment Time</td>
								</tr>";
								$j=0;
								foreach($comment as $data1)
								{
									$date = strtotime($data1['date']);
								$output .= "
								<tr style='font-size:13px;'><td align='center' style='width:5%'>".++$j."</td>
								            <td align='center' style='width:20%'>".$data1['username']."</td>";
								$output .= "<td align='center' style='width:40%'>".$data1['comment']."</td>";
								$output .= "<td align='center' style='width:20%'>".date("d-m-Y",$date)."</td>";
								$output .= "<td align='center' style='width:15%'>".date("H:i:s",$date)."</td></tr>";
								}
								$output .= "<tr><td colspan='5'><br></td></tr></table></td></tr></tbody>";
								}
								else 
								{
									$output .="<tr><td colspan='5'>
									<table width='100%'>
									<tr><td colspan='5' align='center'><p>No Comment Found</p><br></td></tr>
									</table></td></tr></tbody>";
								}
								$output .="<script>function popover$i(){
                                   $('.popover-on-modal$i').toggle();
                                    }</script>";
							}


						 }
						 else
						 {
						 	$output .= "<thead><tr><th colspan='5' style='text-align:center'><p>No File Found</p></th></tr></thead> ";
						 }
						 
						 echo $output;
					}
			}
   

######################################################################################################################################

 // budget function 


      public function budget()
      {
      	if($this->session->username)
      	{
      		$project_id           = $this->session->project_id;
			$data['dataArr']      = $this->Database_conn->fetch_wbs_trn();
            //$data['dataArr'] = $this->Database_conn->fetch_catandsubcat();
            $this->load->view('budget',$data);
      	}
      	else
      	{
      		$this->login();
      	}
      }  



######################################################################################################################################
       


					public function sendMail($subject='' , $message = '' ,  $file_id = '' , $link='')
					{
						$config = Array(
						'protocol' => 'smtp',
						'smtp_host' => 'ssl://smtp.googlemail.com',
						'smtp_port' => 465,
						'smtp_user' => ADMIN_EMAIL, // change it to yours
						'smtp_pass' => ADMIN_EMAIL_PASS, // change it to yours
						'mailtype' => 'html',
						'charset' => 'iso-8859-1',
						'wordwrap' => TRUE
					);

						$email_subject = ($subject!='')?($subject):'';
						
						

						

						$this->load->library('email', $config);
						$this->email->set_newline("\r\n");
						$this->email->from(ADMIN_EMAIL); // change it to yours
						$this->email->subject($email_subject);
						$email_message1 = (isset($message)&&$message!='')?($message):'';
                        $file_link = ""; 
						$get_users = $this->Database_conn2->get_project_user_email('users');
                         
                        // echo "<pre>";print_r($get_users);exit();
						if(isset($get_users))
						{$i=0;
							foreach ($get_users as $email) 
							{
								$email_message = '';
								$custom_link = '';
								if($file_id!='')
								{
								   $email_message = ($message!='')?($message):''; 
								   $username = $this->url_encrypt($email['username']);
								   $password = $this->url_encrypt($email['password']);
								   $project_id = $this->url_encrypt($email['project_id']);
								   $user_type = $this->url_encrypt($email['user_type']);
								   $file = $this->url_encrypt($file_id);
								   $file_link = create_file_link($file_id);
								   $file_path = "file:///E:/xampp/htdocs/ci_da_project/application/upload/".$this->session->project_id.$file_link;
                                   $custom_link = '<a href="'.base_url('da_projects/comments/').$username."/".$password."/".$project_id."/".$user_type."/".$file.'" target="_blank" > Add Comment </a> (if required)';
								   $email_message = $email_message.$custom_link;
								   
								 }
								 else if(isset($link)&&$link!='')
								 {
								   $file_link = "";
								   $email_message = ($message!='')?($message):''; 
								   $username = $this->url_encrypt($email['username']);
								   $password = $this->url_encrypt($email['password']);
								   $project_id = $this->url_encrypt($email['project_id']);
								   $user_type = $this->url_encrypt($email['user_type']);
								   $file = $this->url_encrypt($file_id);
                                   $custom_link = '<a href="'.$link.'/'.$username."/".$password."/".$project_id."/".$user_type.'" target="_blank" > View Comment </a> ';
								   $email_message = $email_message."<br> ".$custom_link;
								  
								 }
								 // var_dump($file_path);
								//echo $email_message;echo "<br>";//exit();  
								$final_message = (isset($email_message)&&$email_message!='')?($email_message):($email_message1);
								$this->email->message($final_message);
								$this->email->to($email['email_id']);// change it to yours
								if($file_link!=''&&sizeof($file_link)>0)
								{
								   $this->email->attach($file_path);	
								}
								
								    
								    //var_dump($this->email->send());
									if($this->email->send())
									{
									    //echo 'Email sent.';
									    //echo "<script>alert('Email Send Successfully to all Users in this Project.')</script>";
									}
									else
									{
									    //show_error($this->email->print_debugger());
									    //echo 'Email Not sent.<br>';
									}
							}

						}
						

					}   

####################################################################################################################################

              public function comments($user_name = '' , $password = '' , $project = '' , $usertype = '' , $file='')
              {

				 $this->session->unset_userdata('username');
				 $this->session->unset_userdata('user_id');
				 $this->session->unset_userdata('parent_id');
				 $this->session->unset_userdata('parent_id2');
				 $this->session->unset_userdata('project_id');
				 $this->session->unset_userdata('user_type');
				 $this->session->unset_userdata('comment_file_link');
                 
                 $username = $this->url_decrypt($user_name);
                 $pass = $this->url_decrypt($password);
                 $project_id = $this->url_decrypt($project);
                 $user_type = $this->url_decrypt($usertype);
                 $file_id = $this->url_decrypt($file);


                 $condition =array(
                 'username'   => $username,
                 'password'   => $pass,
                 'project_id' => $project_id,
                 'user_type'  => $user_type
                );
                
				$check=$this->Database_conn->check_login($condition);
				if(sizeof($check)>0)
				{   
					//print_r($check);
					$id = $check->id;
					$username = $check->username;
					$project_id = $check->project_id;
					$user_type = $check->user_type;
					$this->session->set_userdata('project_id',$project_id);
					$this->session->set_userdata('username',$username);
					$this->session->set_userdata('user_id',$id);
					$this->session->set_userdata('user_type',$user_type);
					

				}
				if($this->session->user_id)
				{
					  
					  if(isset($file_id))
		              { //echo $file_id;
		             	$comment = $this->Database_conn2->get_all_comment($file_id);
		             	$output = "";
		             	if(sizeof($comment)>0){
		             	$output .= "<thead>
									<tr>
									<th align='left'>User Name</th>
									<th align='left'>Comment</th>
									<th align='center'>Comment Date</th>
									<th align='center'>Comment Time</th>
									</tr>
									</thead>
									<tbody>";
							foreach($comment as $data)
							{   $date = strtotime($data['date']); 
						        $output .= "<tr><td colspan='4' align='center'><br></td></tr>";
					            $output .= "<tr><td align='left' style='width:20%'>".$data['username']."</td>";
					            $output .= "<td align='left' style='width:20%'>".$data['comment']."</td>";
					            $output .= "<td align='center' style='width:20%'>".date("d-m-Y",$date)."</td>";
					            $output .= "<td align='center' style='width:20%'>".date("H:s:i",$date)."</td></tr>";
					        }
					         $output .= "</tbody>";
					         $data['table'] = $output;
					         $data['file_id'] = $file_id;
					         }
					         else
					         {
					         	$data['file_id'] = $file_id;
					         	$data['table'] = "<thead>
									<tr>
									<th align='center'>User Name</th>
									<th align='center'>Comment</th>
									<th align='center'>Comment Date</th>
									<th align='center'>Comment Time</th>
									</tr>
									</thead>
									<tbody> <tr><td colspan='4' align='center'><br></td></tr>
									<tr><td colspan='4' align='center'><strong>NO Record Found</storng></td<tr></tbody>";
					         }
					         $this->load->view('comment',$data);
					      }
				else
				{ 
					$this->login();
				}
              }
          }









############################################################################################################################################
              //function for list of projects

                  public function project_list()
                  {
                  	if($this->session->user_id)
                  	{  
                  		 $submit = $this->input->post('login_project');
                  		if(isset($submit))
                  		{
                           $project_id = $this->input->post('project_id');
                           $this->session->set_userdata('project_id',$project_id);
                           $this->dashboard();
                  		}
                  		else
                  		{
	                       $data['projects'] = $this->Database_conn2->getallprojects();
	                       //echo "<pre>";print_r($data['projects']);
	                       $this->load->view('select_project',$data);
	                   }
                  	}
                  	else
                  	{
                  		$this->login();
                  	}
                  }



#######################################################################################################################################




                public function popup( $project_id , $category)
                {
                	$budget = $this->Database_conn2->get_category_project_cost('wbs_transaction', $category,$project_id);
                	echo "<pre>";
                	print_r($budget);exit();
                }





#####################################################################################################################################


                public function category_price()
                {
                    if($this->session->user_id)
                    {
                       $this->load->view('category_price');
                    }
                    else
                    {
                    	$this->login();
                    }
                }

######################################################################################################################################

                public function po_invoice()
                {
                	$this->load->view('po_invoice');
                }




######################################################################################################################################
     // for tracking sheet form

                public function tracking_sheet($form = "inline_form")
                {
                	if($this->session->user_id)
                    {  
                    	$submit = $this->input->post('save');
                    	$update = $this->input->post('update');
                    	$email_notification = $this->input->post('email_notification');
                    	$data['horizontal_form']=$form;

                    	if(isset($submit))
                    	{
                           
							$array = array(
							'project_id'               => $this->session->project_id,
							'company_id'               => $this->session->company_id,
							'tracking_number'          => $this->input->post('tracking_number'),
							'noting_place'             => $this->input->post('noting_place'),
							'noting_date'              => $this->input->post('noting_date'),
							'points'                   => $this->input->post('points'),
							'target_date'              => $this->input->post('target_date'),
							'actual_date'              => $this->input->post('actual_date'),
							'status'                   => $this->input->post('status'),
							'responsibility'           => $this->input->post('responsibility'),
							'email_to'                 => $this->input->post('responsibility'),
							'reminder_days'            => $this->input->post('reminder_days'), 
							'reminder_time'            => $this->input->post('reminder_time'),
							'remark'                   => $this->input->post('remark'),
							'noting_title'             => $this->input->post('noting_title'),
							'risk'                     => $this->input->post('risk'),
							'email_notification'       => (isset($email_notification))?($email_notification):'0',
							'created_by'               => $this->session->user_id,
							'created_on'               => date("Y-m-d")
							);

							$insert = $this->Database_conn->insert_data('tracking_detail',$array);
							$prefix = date('y');
                            $invoice_id = $this->Database_conn->autoGenerateNextSerialNumber($prefix,'tracking_number','8',true);
				            $this->Database_conn->updateNextSerialNumber('tracking_number',true);
							$data['msg'] = (isset($insert))?' Save Successfully ':' Could not Save ';
							$data['category']     = $this->Database_conn->fetch_category('wbs_category','category_name');
							$this->load->view('tracking_sheet',$data);
                    	}
                    	else if(isset($update))
                    	{
                    		//$tracking_id = $this->input->post('');
							$array = array(
							'noting_place'             => $this->input->post('noting_place'),
							'noting_date'              => $this->input->post('noting_date'),
							'points'                   => $this->input->post('points'),
							'target_date'              => $this->input->post('target_date'),
							'actual_date'              => $this->input->post('actual_date'),
							'status'                   => $this->input->post('status'),
							'remark'                   => $this->input->post('remark'),
							'noting_title'             => $this->input->post('noting_title'),
							'responsibility'           => $this->input->post('responsibility'),
							'email_to'                 => $this->input->post('responsibility'),
							'reminder_days'            => $this->input->post('reminder_days'), 
							'reminder_time'            => $this->input->post('reminder_time'),
							'risk'                     => $this->input->post('risk'),
							'updated_on'               => 'now()'
							);
                             $update_id = $this->input->post('update_id');
                             $update = $this->Database_conn->update('tracking_detail',$array,'id',$update_id);
                             $data['msg'] = (isset($update))?' Updated Successfully ':' Unable to update ';
                             $data['category']     = $this->Database_conn->fetch_category('wbs_category','category_name');
							 $this->load->view('tracking_sheet',$data);
                    	}
                    	else
                    	{
                    		
                    		$data['category']     = $this->Database_conn->fetch_category('wbs_category','category_name');
                    	    $this->load->view('tracking_sheet',$data);	
                    	}

                       
                    }
                    else
                    {
                    	$this->login();
                    }
                }


#######################################################################################################################


                public function edit_tracking($row_id='' , $form = "inline_form")
                {

                	if($this->session->user_id)
                	{
                	   $edit_btn = $this->input->post('edit');
                	   $view_btn = $this->input->post('view');
                	   //$data['horizontal_form'] = $this->input->post('form_type');
						$data['category'] = $this->Database_conn->fetch_category('wbs_category','category_name');
						$data['subcat1'] = $this->Database_conn->fetch_category('wbs_sub_category1','sub_category_name1');
						$data['subcat2'] = $this->Database_conn->fetch_category('wbs_sub_category2','sub_category_name2');
						$data['subcat3'] = $this->Database_conn->fetch_category('wbs_sub_category3','sub_category_name3');
						$data['subcat4'] = $this->Database_conn->fetch_category('wbs_sub_category4','sub_category_name4');
						$data['subcat5'] = $this->Database_conn->fetch_category('wbs_sub_category5','sub_category_name5');

                       if(isset($view_btn))
	                   {
                         $data['tracking_id'] = $this->input->post('view_id');
                         $this->load->view('popup_tracking',$data);
	                   }
	                   else
	                   {
	                   	 $tracking_id = $row_id;
	                       $data['updateFlag'] = 1;
	                       $condition = array(
	                       'project_id'=>$this->session->project_id,
	                       'id'=>$row_id
	                       );
	                       $data['horizontal_form']=$form;
	                       $data['edit_data'] = $this->Database_conn2->edit_tracking_data('tracking_detail',$condition);
	                       //echo "<pre>";print_r($data);
	                       $this->load->view('tracking_sheet',$data);
	                   }
                	}
                	else
                	{
                		$this->login();
                	}
                }


################################################################################################################################


                public function assign_email_notification()
                {
                    if($this->session->user_id)
                    {
                        
						$submit = $this->input->post('submit');
						$update = $this->input->post('update');
						if(isset($submit)||isset($update))
						{
							$to = $this->input->post('to');
							$cc = $this->input->post('cc');
							if(isset($to))
							{
							   $array_to = implode(",", $to);	
							}
							else
							{
								$array_to = '';
							}
							
						    if(isset($cc))
						    {
							   $array_cc = implode(",", $cc);
							}
							else
							{
								$array_cc = '';
							}
							
							$array = array(
                             'email_to'=>$array_to,
                             'email_cc'=>$array_cc
							);
							$update_id = $this->input->post('edit_id');
							$data['row_id'] = $update_id;
							$updt = $this->Database_conn->update('tracking_detail',$array,'id',$update_id);
							$data['msg'] = (isset($updt))?' Assigned Email Notification Successfully ':'Unable to Assign Email Notification ';
							//$data = $this->email_cron_job($data);
                             //print_r($value);exit();
							$this->load->view('assign_email',$data);
						}
						else
						{
						   $data['row_id'] = $this->input->post('edit_id');
                           if(isset($data['row_id'])&&$data['row_id']!='')
                           $this->load->view('assign_email',$data);
                           else
                           	$this->tracking_sheet();
							
						}
                    }
                    else
                    {
                    	$this->login();
                    }
                }


####################################################################################################################################


                public function email_cron_job($data = '')
                {

                	date_default_timezone_set('Asia/Kolkata');
                	$all_tracking_detail1 = $this->Database_conn2->get_all_tracking('tracking_detail');
                	foreach ($all_tracking_detail1 as $all_tracking_detail) 
                	{
                		$email_array_to =explode("," , $all_tracking_detail['email_to']);
	                    $email_array_cc =explode("," , $all_tracking_detail['email_cc']);
	                    $tracking_id = $all_tracking_detail['id'];
			            $noting_date1 = date("d-m-Y",strtotime($all_tracking_detail['noting_date']));
			            $task_name = $all_tracking_detail['noting_title'];
                      	$task_target = date("d-m-Y",strtotime($all_tracking_detail['target_date']));
                      	$tracking_id = $all_tracking_detail['id'];
	                    //variable for else if 
	                    if(isset($all_tracking_detail)&&($all_tracking_detail['email_to']!=''||$all_tracking_detail['email_cc']!=''))
		                 {  
		                 	if($all_tracking_detail['last_remainder_date']!='0000-00-00')
		                    {
			                    $noting_date = $all_tracking_detail['noting_date'];
			                    $last_remainder_date = $all_tracking_detail['last_remainder_date'];
			                    $start_date=date_create($noting_date);
			                    $last_email_date=date_create($last_remainder_date);
			                    $now_date=date_create(date("Y-m-d"));
			                }
		                    //var_dump($start_date>=$last_email_date);var_dump($last_email_date);var_dump($start_date==$now_date);

		                    // email to all selected user when the tracking is created 
		                	if(isset($all_tracking_detail['last_remainder_date'])&&$all_tracking_detail['last_remainder_date']=='0000-00-00')
		                	{
		                        //send first mail 
		                        
		                        $cond = array('id'=>$all_tracking_detail['created_by']);
	                          	$created_by = $this->Common->get_data_single('users','username',$cond);
	                          	
	                          	
                                 
                                 foreach ($email_array_to as $value) 
                                 {
                                 	$full_name = $this->Common->get_data_single('users','full_name',array('id'=>$value));
                                     
                                 	$mesg = '<bold>Dear '.ucfirst($full_name).' <br><br> A New task ('.$task_name.') is assign  to you by '.$created_by.'.<br>The Task start Date is '.$noting_date1.' and the excepted complete date is '.$task_target.'.</bold>';
                                 	$subject = $task_name." Task";
                                 	//echo $mesg;exit();

                                 	$email_to = $this->Common->get_data_single('users','email_id',array('id'=>$value));
                                 	 $email_to_cc_str = '';
			                                  foreach ($email_array_cc as $key) 
			                                 {
			                                 	$email_to_cc = $this->Common->get_data_single('users','email_id',array('id'=>$key));
			                                 	$email_to_cc_str .= (isset($email_to_cc_str)&&$email_to_cc_str=='')?$email_to_cc:" , ".$email_to_cc;
		                                 	 }
		                                 	 $this->Mail_notification($subject , $mesg , $email_to , $email_to_cc_str );
                                  $update = $this->Common->update('tracking_detail',array('last_remainder_date'=>date('Y-m-d')),array('id'=>$tracking_id));
                                 }//end of foreach

		                	}
		                	//email to all selected users when the tracking is started 
		                	else if($start_date>$last_email_date&&$start_date==$now_date)
		                	{
		                          
								   $cond = array('id'=>$all_tracking_detail['created_by']);
								   $created_by = $this->Common->get_data_single('users','username',$cond);
									
									
								 
								   foreach ($email_array_to as $value) 
								   {
									 	$full_name = $this->Common->get_data_single('users','full_name',array('id'=>$value));
									     
									 	$mesg = '<bold>Dear '.ucfirst($full_name).' <br><br> A New task ('.$task_name.') is assign  to you by '.$created_by.'.<br>The Task start Date is '.$noting_date1.' and the excepted complete date is '.$task_target.'.</bold>';
									 	$subject = $task_name." Task";
									 	//echo $mesg;

									 	$email_to = $this->Common->get_data_single('users','email_id',array('id'=>$value));
									 	 $email_to_cc_str = '';
			                                  foreach ($email_array_cc as $key) 
			                                 {
			                                 	$email_to_cc = $this->Common->get_data_single('users','email_id',array('id'=>$key));
			                                 	$email_to_cc_str .= (isset($email_to_cc_str)&&$email_to_cc_str=='')?$email_to_cc:" , ".$email_to_cc;
			                                 	//var_dump($email_to_cc_str);
		                                 	 }
		                                 	 $this->Mail_notification($subject , $mesg , $email_to , $email_to_cc_str );
                                       //$update = $this->Common->update('tracking_detail',array('last_remainder_date'=>date('Y-m-d')),array('id'=>$tracking_id));
								    }//end of foreach
							    	    
		                	}
		                	//email to all user on the day selected by the superadmin
		                	else
		                	{	
								$date = $all_tracking_detail['last_remainder_date'];
			                    $date1=date_create($date);
								$date2=date_create(date("Y-m-d"));
								$diff=date_diff($date1,$date2);
								$days=(int)$diff->format("%R%a");

			                       if($days>=$all_tracking_detail['reminder_days']&&$days>=0)
			                       {
			                       	
			                       	   $time = date("H:i:s");
			                          if($time>=$all_tracking_detail['reminder_time']&&$time>=0)
			                          {
			                          	 
			                          	
			                          	$cond = array('id'=>$all_tracking_detail['created_by']);
			                          	$created_by = $this->Common->get_data_single('users','username',$cond);
			                          	
			                          	
		                                 
		                                 foreach ($email_array_to as $value) 
		                                 {
		                                 	$full_name = $this->Common->get_data_single('users','full_name',array('id'=>$value));
		                                     
		                                 	$mesg = '<bold>Dear '.ucfirst($full_name).' <br><br> A New task ('.$task_name.') is assign  to you by '.$created_by.'.<br>The Task start Date is '.$noting_date1.' and the excepted complete date is '.$task_target.'.<br> Please Complete the '.$task_name.' task before '.$task_target.'.</bold>';
		                                 	$subject = $task_name." Task";
		                                 	//echo $mesg;

		                                 	$email_to = $this->Common->get_data_single('users','email_id',array('id'=>$value));
		                                 	 
		                                 	  $email_to_cc_str = '';
			                                  foreach ($email_array_cc as $key) 
			                                 {
			                                 	$email_to_cc = $this->Common->get_data_single('users','email_id',array('id'=>$key));
			                                 	$email_to_cc_str .= (isset($email_to_cc_str)&&$email_to_cc_str=='')?$email_to_cc:" , ".$email_to_cc;
		                                 	 }
		                                 	 $this->Mail_notification($subject , $mesg , $email_to , $email_to_cc_str );
                                             $update = $this->Common->update('tracking_detail',array('last_remainder_date'=>date('Y-m-d')),array('id'=>$tracking_id));    
		                                 }//end of foreach
			                          }
			                       }

			                       
	                        }//end else condition
					}   }
					return $data;
                }


###########################################################################################################################


                public function Mail_notification($subject='' , $message = '' , $to = '' , $all_cc_str = '')
					{
						$config = Array(
						'protocol' => 'smtp',
						'smtp_host' => 'ssl://smtp.googlemail.com',
						'smtp_port' => 465,
						'smtp_user' => ADMIN_EMAIL, // change it to yours
						'smtp_pass' => ADMIN_EMAIL_PASS, // change it to yours
						'mailtype' => 'html',
						'charset' => 'iso-8859-1',
						'wordwrap' => TRUE
					);
						$all_cc_array = explode(',', $all_cc_str);

                        //print_r($all_cc_array);var_dump($all_cc_str);
						$email_subject = ($subject!='')?($subject):'';
						
						$email_message = ($message!='')?($message):'';

						$this->load->library('email', $config);
						$this->email->set_newline("\r\n");
						$this->email->from(ADMIN_EMAIL); // change it to yours
						$this->email->subject($email_subject);
						$this->email->message($email_message);
						$this->email->to($to);// change it to yours
						foreach ($all_cc_array as $value) 
						{
							$this->email->cc($value);
						}
								    
								    //var_dump($this->email->send());
									if($this->email->send())
									{
									    //echo 'Email sent.';
									}
									else
									{
									    //show_error($this->email->print_debugger());
									    //echo 'Email Not sent.<br>';
									}
						return ;
					}  



##################################################################################################################################
   
      public function select_category()
      {
      	if($this->session->user_id)
      	{
      		$submit = $this->input->post('select_category');
      		$update = $this->input->post('update_category');

           if(isset($submit)||isset($update))
           {
               $cat = $this->input->post('cat');
               $subcat1 = $this->input->post('subcat1');
               $subcat2 = $this->input->post('subcat2');
               $subcat3 = $this->input->post('subcat3');
               $subcat4 = $this->input->post('subcat4');
               $subcat5 = $this->input->post('subcat5');
               //echo "<pre>";print_r($_POST);exit();
                $cat_id = $subcat1_id = $subcat2_id = $subcat3_id = $subcat4_id = $subcat5_id ='';
               if(sizeof($cat)>0)
               	{
               		$cat_id = implode(",",$cat);
               	}
               	if(sizeof($subcat1)>0)
               	{
                    $subcat1_id = implode(",",$subcat1);
                 }
                if(sizeof($subcat2)>0)
               	{    
                    $subcat2_id = implode(",",$subcat2);
                }
               if(sizeof($subcat3)>0)
               	{ 
                    $subcat3_id = implode(",",$subcat3);
                }
               if(sizeof($subcat4)>0)
               	{ 
                    $subcat4_id = implode(",",$subcat4);
                }
                if(sizeof($subcat5)>0)
               	{
               	    $subcat5_id = implode(",",$subcat5);
               	}

               $array = array(
               'project_id' =>$this->session->project_id,
               'company_id' =>$this->session->company_id,
               'category_id'=> $cat_id,
               'subcat1_id' =>$subcat1_id,
               'subcat2_id' =>$subcat2_id,
               'subcat3_id' =>$subcat3_id,
               'subcat4_id' =>$subcat4_id,
               'subcat5_id' =>$subcat5_id
               );
               if(isset($submit))
               {
               	       $array1 = array(
               	       'created_on' =>date("Y-m-d"),
                       'created_by' =>$this->session->user_id
                        );
               	       $array2 = array_merge($array,$array1);
		               $insert = $this->Database_conn->insert('user_wbd_category_subcategory',$array2);
		               $data['msg'] = ($insert)?" Category And Subcategory Assigned Successfully":" Unable to Assign Category And Subcategory ";
               }
               else if(isset($update))
               {
               	       $array1 = array(
               	       'updated_on' =>date("Y-m-d H:i:s")
                       );
               	       $array2 = array_merge($array,$array1);
               	       $pid = $this->session->project_id;
		               $insert = $this->Database_conn->update('user_wbd_category_subcategory',$array2,'project_id',$pid);
		               $data['msg'] = ($insert)?" Category And Subcategory Assigned Successfully":" Unable to Assign Category And Subcategory ";
               }
               $this->load->view('select_category',$data);
           }
           else
           {
           	$this->load->view('select_category');
           }
      	}
      	else
      	{
      		$this->login();
      	}
      }
      					 


#####################################################################################################################################
    

     public function budget_summary()
      {
      	if($this->session->user_id)
      	{
      		    $data = array();
      		    $tracking_budget = $this->input->post('tracking_budget');
      		    $save_budget = $this->input->post('save_budget');
      		   if(isset($save_budget)&&$save_budget!='')
      		   {
					$project = array(
					'project_id' => $this->session->project_id
					);
					$already_exist = $this->Database_conn->getsubcat('wbs_master',$project);

				if(sizeof($already_exist)>0)
				{
				    $master_id = $already_exist['0']['id'];
				}
				else
				{    
					$project1 = array(
					'project_id' => $this->session->project_id,
					'created_by' => $this->session->user_id ,
					'created_on' => date("Y-m-d H:i:s") 
					);
					$insert = $this->Database_conn->insert('wbs_master',$project1);
					$fetch_id = $this->Database_conn->getsubcat('wbs_master',$project);
					$master_id = $fetch_id['0']['id'];
				}
                    $category_exit = array(
                    'master_id'         => $master_id ,
                    'project_id'        => $this->session->project_id ,
					'category_id'       => $this->input->post('cat_id') ,
					'subcat_id1'        => $this->input->post('subcat_id1') ,
					'subcat_id2'        => $this->input->post('subcat_id2') ,
					'subcat_id3'        => $this->input->post('subcat_id3') ,
					'subcat_id4'        => $this->input->post('subcat_id4') ,
					'subcat_id5'        => $this->input->post('subcat_id5') 
                    );
                    $inserDataArr = array(
					'vendor_name'       => $this->input->post('person_name') ,
					'estimated_cost'    => $this->input->post('cost') ,
					'cost_unit'         => $this->input->post('cost') ,
					'remark'            => $this->input->post('remark'),
					// 'temp_data'      => '1' ,
					'created_by'        => $this->session->user_id ,
					'created_on'        => date("Y-m-d H:i:s") ,
					'mode_of_purchase'  => ''
					);

                    $cond_arr = array_merge($category_exit,$inserDataArr);

                    $check_exit = $this->Database_conn->alreadyexit('wbs_transaction',$category_exit);
                    
                    if(sizeof($check_exit)>0)
                    {
                        $update_id = $check_exit[0]['id'];
                        $query = $this->Database_conn->update('wbs_transaction',$cond_arr,'id',$update_id);
                        $data['msg'] = (isset($query))?" Update Successfully":"Unable To Update";
                    }
                    else
                    {
                        $query = $this->Database_conn->insert('wbs_transaction',$cond_arr);
                        $data['msg'] = (isset($query))?" Insert Successfully":"Unable To Insert";
                    }
               }
               else if(isset($tracking_budget)&&$tracking_budget!='')
               {
               	 
               	    $category_exit = array(
                    'project_id'        => $this->session->project_id ,
					'category_id'       => $this->input->post('cat_id') ,
					'subcat_id1'        => $this->input->post('subcat_id1') ,
					'subcat_id2'        => $this->input->post('subcat_id2') ,
					'subcat_id3'        => $this->input->post('subcat_id3') ,
					'subcat_id4'        => $this->input->post('subcat_id4') ,
					'subcat_id5'        => $this->input->post('subcat_id5') 
                    );
                   
                   $already_exist = $this->Database_conn->getsubcat('tracking_master_value',$category_exit);

				if(sizeof($already_exist)>0)
				{
				    $master_id = $already_exist['0']['id'];
                    $amount_tracking = $this->input->post('tracking_cost');
				    $update_tracking_master=$this->Database_conn->update('tracking_master_value',array('final_value'=>$amount_tracking),'id',$master_id);
                    
				}
				else
				{   
                    $amount_tracking = $this->input->post('tracking_cost');
					$category_exit = array_merge($category_exit,array('created_on'=>date("Y-m-d"),'created_by'=>$this->session->user_id,'initial_value'=>$amount_tracking,'final_value'=>$amount_tracking));
                    $insert = $this->Database_conn->insert('tracking_master_value',$category_exit);
					$fetch_id = $this->Database_conn->getsubcat('tracking_master_value',$category_exit);
					$master_id = $fetch_id['0']['id'];
                 
                 }

                    $trn_tracking = array(
                    'master_id' => $master_id,
                    'tracking_amount' => $amount_tracking,
                    'created_by' => $this->session->user_id,
                    'created_on' => date("Y-m-d H:i:s")
                    );
                    $tracking_trn = $this->Database_conn->insert('tracking_transaction_value',$trn_tracking);
           }

             $this->load->view('budget_detail',$data);
      	}
        else
        {
        	$this->login();
        }
      }


######################################################################################################################################



     public function vendor_registeration()
      {
      	if(isset($this->session->user_id))
		    {
		      	// extract($_POST);
		      	$data_insert=array(
				'project_id'              =>$this->session->project_id,
				'company_id'              =>$this->session->company_id,
				'vendor_name'             =>$this->input->post('vendor_name'),
				'business_nature'         =>$this->input->post('business_nature'),
				'contact_no_office'       =>$this->input->post('contact_no_office'),
				'gst_no'                  =>$this->input->post('gst_no'),
				'vendor_add'              =>$this->input->post('vendor_add'),
				'contact_name1'           =>$this->input->post('contact_name1'),
				'contact_mobile1'         =>$this->input->post('contact_mobile1'),
				'contact_email1'          =>$this->input->post('contact_email1'),
				'contact_name2'           =>$this->input->post('contact_name2'),
				'contact_mobile2'         =>$this->input->post('contact_mobile2'),
				'contact_email2'          =>$this->input->post('contact_email2'),
				'contact_name3'           =>$this->input->post('contact_name3'),
				'contact_mobile3'         =>$this->input->post('contact_mobile3'),
				'contact_email3'          =>$this->input->post('contact_email3'),
				'Preferred_contact_person'=>$this->input->post('Preferred_contact_person'),
				'created_by'              =>$this->session->user_id
		      	);
		      
		      	$check=$this->input->post('save');
		      	$update=$this->input->post('update');

		        if(isset($check))
		        {
		        	$alreadyExit = $this->Database_conn->alreadyexit('vendor_detail',array('vendor_name'=>$this->input->post('vendor_name'),'company_id'=>$this->session->company_id));
		        	if(!$alreadyExit)
		        	{
				          $date_array = array('created_on'=>date('Y-m-d H:i:s'));
				          $ins_array = array_merge($data_insert , $date_array);
				          $insert=$this->Database_conn->insert('vendor_detail',$ins_array);
				          $data['dataArr']=$this->Database_conn->getData('vendor_detail');
				          if($insert)
				          {
				          	$data['msg']="Save Successfully ";
				          }
				          else
				          {
				          	$data['msg']="Could not Save";
				          }
				    }
				    else
				    {
				    	$data['msg'] = "Vendor Already Exist";
				    }

				          $this->load->view('vendor_registeration',$data);
		        }
		        else if(isset($update))
		        {   
		          
		          $date_array = array('updated_on'=>date('Y-m-d H:i:s'));
		          $ins_array = array_merge($data_insert , $date_array);
		          $update_id=$this->input->post('update_id');
		          $update_data=$this->Database_conn->update('vendor_detail',$ins_array,'id',$update_id);
		          $data['dataArr']=$this->Database_conn->getData('vendor_detail');
		          if($update_data)
		          {
		          	$data['msg']="Updated Successfully ";
		          }
		          else
		          {
		          	$data['msg']="Could not Update";
		          }
		          $this->load->view('vendor_registeration',$data);
		        }
		        else
		        {  
		           $this->load->view('vendor_registeration');
		        }
		    }
		    else
		    {
		    	$this->login();
		    }
      }

#####################################################################################################################################

       public function   edit_vendor()
        {
	        if(isset($this->session->username))
		    {	
	        	

	        	$edit_id=$this->input->post('edit_id');
	        	if($edit_id)
	        	{
	        	$data['edit_data']=$this->Database_conn->getData('vendor_detail',array('id'=>$edit_id));
	        	$data['updateFlag']=1;
	        	// echo "<pre>";
	         //    print_r($data);
	            }
	        	$this->load->view('vendor_registeration',$data);
	        }
	        else
	        {
	        	$this->login();
	        }
        }


######################################################################################################################################

     public function trn_detail_ajax()
     {
         //$this->output->enable_profiler(TRUE);
     	if(isset($_POST['cat']))
     	{
     		$output = "";
     		$cat_array = array(
            'project_id'=>$this->session->project_id,
            'category_id'=>($_POST['cat']!='')?($_POST['cat']):'0',
            'subcat_id1' =>($_POST['sc1']!='')?($_POST['sc1']):'0',
            'subcat_id2' =>($_POST['sc2']!='')?($_POST['sc2']):'0',
            'subcat_id3' =>($_POST['sc3']!='')?($_POST['sc3']):'0',
            'subcat_id4' =>($_POST['sc4']!='')?($_POST['sc4']):'0',
            'subcat_id5' =>($_POST['sc5']!='')?($_POST['sc5']):'0'
     		);
            //print_r($cat_array);
     		$get_detail = $this->Database_conn->all_trn_detail('tracking_master_value',$cat_array);
     		//print_r($get_detail);
            if(isset($get_detail)&&sizeof($get_detail)>0)
             { 
            	$i=1;
            	foreach ($get_detail as $value) 
            	{     
            	
             	   $output .="<tr>";       	
                   $output .="<td align='center' width='20%'>".$i."</td>";
                   $output .="<td align='center' width='35%'>Update".$i."</td>";
                   $output .="<td align='center' width='35%'>".$value['tracking_amount']."</td>";
                   $output .="</tr>";
                   $i++;
             	}
            }
            echo $output;
     	}
     	
     }

####################################################################################################################################

    public function stockin_form()
    {
    	if(isset($this->session->user_id))
    	{
			$po_id = $this->input->post('po_id');
			$stock = $this->input->post('stock_in');

			if(isset($stock))
			{
				$data['po_id'] = $po_id;
				$this->load->view('stockin_form',$data);
			}
			else
			{
				$this->po_entry();
			}
    	}
    	else
    	{
    		$this->login();
    	}
    	
    }
###################################################################################################################################

    public function stock_entry()
    {
    	if(isset($this->session->user_id))
    	{
           $final_save = $this->input->post('final');
           $draft_save = $this->input->post('draft');

           $stock_in_arr = array(
           'project_id'=>$this->session->project_id,
           'stock_type'=>'po_stock_in',
           'po_number'=>$this->input->post('po_number_real'),
           'temp_stock'=>(isset($final_save)&&$final_save!='')?'0':'1',
           

           );
    	}
    	else
    	{
    		$this->login();
    	}
    }

#################################################################################################################################

    public function add_item()
    {
    	if($this->session->user_id)
    	{
          $this->load->view('add_po_item');
    	}
    	else
    	{
    		$this->login();
    	}
    }



######################################################################################################################################


        public function backend_search_item()
        {
        	if($this->session->user_id)
        	{
					if(isset($_REQUEST['item_id']))
					{
							$output = '';
							$name_id = $_REQUEST['item_id'];
							
							$vendor_list = $this->Database_conn->getData_ajaxNew1('po_item_list' , 'item_name' , $name_id);

							if(isset($vendor_list)&&sizeof($vendor_list)>0)
							{
								foreach ($vendor_list as $data) 
								{  
								    $output .= "<p class='change' id='".$data['id']."' title='".$data['item_name']."' onclick='get_item_id(this.id)'><span style='padding-left: 20px'>" . $data['item_name'] . "</span></p>";
								}
							} 
							
					   echo $output;
					}

        	}
        	else
        	{
        		$this->login();
        	}
        }

######################################################################################################################################

        public function po_bugdet_summary()
        {
        	if(isset($_POST['cat']))
        	{
        		$array_condition = array(                
        	    'project_id'=>$this->session->project_id,
                'category_id'=>($this->input->post('cat'))?$this->input->post('cat'):'0', 
                'subcat_id1'=>($this->input->post('sc1'))?$this->input->post('sc1'):'0', 
                'subcat_id2'=>($this->input->post('sc2'))?$this->input->post('sc2'):'0', 
                'subcat_id3'=>($this->input->post('sc3'))?$this->input->post('sc3'):'0', 
                'subcat_id4'=>($this->input->post('sc4'))?$this->input->post('sc4'):'0', 
                'subcat_id5'=>($this->input->post('sc5'))?$this->input->post('sc5'):'0' 
        		);
        		$po_details = $this->Common->getData('po_master',$array_condition);
        		//print_r($po_details);
        		$output = '<table class="table">';

        		if(isset($po_details)&&sizeof($po_details)>0)
        		{
        			$i=0;
        			$output .= "<tr><td>S No.</td>  <td>Vendor Name </td>  <td>Purchase Date</td>  <td>Total Amount</td>  <td>Total GST Amount </td>  </tr>";
        			foreach ($po_details as $data) 
        			{
        				$output .= "<tr><td>".++$i."</td>";
        				$output .= "<td>".$data['supplier_name']."</td>";
        				$output .= "<td>".date('d-M-Y',strtotime($data['po_date']))."</td>";
        				$output .= "<td>".number_format($data['contract_value'],2,".",",")."</td>";
        				$output .= "<td>".number_format($data['contract_value_gst'],2,".",",")."</td></tr>";

        			}
        		}
        		else
        		{
        			$output .= "<tr><td colspan='5' align='center'> No Record Found </td><tr>";
        		}
        		$output .= "</table>";
        		echo $output;
        	}
        }


######################################################################################################################################

        public function ajax_show_email()
        {
        	if(isset($_POST['user_id']))
        	{
        		$user_id = $_POST['user_id'];
        		$email = $this->Common->getDataSingle('users','email_id',array('id'=>$user_id));
        		echo $email;

        	}
        }


######################################################################################################################################

 // logout function 


      public function logout()
      {
      	$this->session->unset_userdata('username');
      	$this->session->unset_userdata('user_id');
      	$this->session->unset_userdata('parent_id');
      	$this->session->unset_userdata('parent_id2');
      	$this->session->unset_userdata('project_id');
      	$this->session->unset_userdata('user_type');
      	$this->session->unset_userdata('comment_file_link');
      	$this->session->unset_userdata('company_id');
      	$this->login();

      }  

    

		function url_encrypt($string) 
		{
		    $output = false;
		    $encrypt_method = "AES-256-CBC";
		    //pls set your unique hashing key
		    $secret_key = 'da_proj';
		    $secret_iv = 'da_projects';
		    // hash
		    $key = hash('sha256', $secret_key);
		    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
		    $iv = substr(hash('sha256', $secret_iv), 0, 16);
		    //do the encyption given text/string/number
		    $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
		    $output = base64_encode($output);
		    return $output;
		}



		function url_decrypt($string) 
		{
		    $output = false;
		    $encrypt_method = "AES-256-CBC";
		    //pls set your unique hashing key
		    $secret_key = 'da_proj';
		    $secret_iv = 'da_projects';
		    // hash
		    $key = hash('sha256', $secret_key);
		    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
		    $iv = substr(hash('sha256', $secret_iv), 0, 16);
		    //decrypt the given text/string/number
		    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
		    return $output;
		}







      

}
?>