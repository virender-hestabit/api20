<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Database_conn2  extends MY_Model {

   
   public function getallproject()
   {
		$this->db->select('id, project_name');
		$this->db->from('projects');
		$this->db->order_by('project_name','asc');
		$query = $this->db->get();
		return $query->result_array();
   }

   public function getallcompany()
   {
		$this->db->select('id, company_name');
		$this->db->from('company_master');
		$this->db->order_by('company_name','asc');
		$this->db->where('is_active','1');
		$query = $this->db->get();
		return $query->result_array();
   }




//    public function get_menu_tree($table,$userID='',$additionalQstring='',$parent_id) 
// 	{
// 		$menu = "";
// 		if($userID != '' && intval($userID) != 0)
// 		{

// 			$menu_ids = ($userID != '') ? $this->getMenuIDsAssignedToUser($userID) : '';
// 			//$menu_ids = "(".$menu_ids.")";
//             //print_r($menu_ids);
//             $midArr = explode(',', $menu_ids);
// 			$this->db->where('is_active','1');
// 			$this->db->where('parent_id',$parent_id);
// 			$this->db->where_in('id', $midArr);
// 			$query  = $this->db->get($table);
// 			$query1 = $query->result_array();
// 		}
// 		else
// 		{
// 		    $this->db->where('is_active','1');
// 			$this->db->where('parent_id',$parent_id);
// 			$query  = $this->db->get($table);
// 			$query1 = $query->result_array();
// 		}

			
// 		foreach($query1 as $row) 
// 		{
// 			// If qstring is hash then href
// 			$href = '<a href="'.base_url($row['page_query_string']).$additionalQstring.'">'.$row['menu_name'].'</a>';
// 			$label_or_link = ($row['page_query_string'] != '#')?$href:$row['menu_name'];
// 			// If qstring is hash then class
// 		if($row['page_query_string'] == '#')
// 		{
// 			$class_ul = 'hide_menu';
// 			$class_li = 'expand_collapse';
// 			$plus_minus = '+';
// 		}
// 		else
// 		{
// 			$class_ul = 'show_menu';
// 			$class_li = '';
// 			$plus_minus = '-';
// 		}
// 			$menu .="<li class='".$class_li."'>";
// 			$menu .=$plus_minus.$label_or_link;

// 			$menu .= "<ul  class='".$class_ul."' style='padding-left: 10px;'>".$this->get_menu_tree($table,$userID,$additionalQstring,$row['id'])."</ul>"; //call  recursively

// 			$menu .= "</li>";

// 		}
// 		// echo $sqlquery;
// 			return $menu;
// 	}



//   public function getMenuIDsAssignedToUser($userID , $companyID="")
//  {
//     $this->db->select('comma_seperated_menu_ids');
//     $this->db->where('user_id',$userID);
//     // $this->db->where('company_id',$companyID);
//     $query  = $this->db->get('menu_user');
// 	$query1 = $query->result_array();
//     //print_r($query1);
   
//     if(sizeof($query1)>0)
//     {
//         $output = $query1['0']['comma_seperated_menu_ids'];
        
//     }
//     else
//     {
//         $output = '0';
//     }
   
//     return $output;
    
// }



public function get_menu_tree($table,$userID='',$additionalQstring='',$parent_id) 
	{
		$menu = "";
	    $menu_name = "";
		
		if($userID != '' && intval($userID) != 0)
		{

			$menu_ids = ($userID != '') ? $this->getMenuIDsAssignedToUser($userID) : '';
			//$menu_ids = "(".$menu_ids.")";
            //print_r($menu_ids);
            $midArr = explode(',', $menu_ids);
			$this->db->where('is_active','1');
			$this->db->where('parent_id',$parent_id);
			$this->db->where_in('id', $midArr);
			$query  = $this->db->order_by('display_order')->get($table);
			$query1 = $query->result_array();
		}
		else
		{
		    $this->db->where('is_active','1');
			$this->db->where('parent_id',$parent_id);
			$query  = $this->db->order_by('display_order')->get($table);
			$query1 = $query->result_array();
		}

			
		foreach($query1 as $row) 
		{
			// If qstring is hash then href
			$href = '<a href="'.base_url($row['page_query_string']).$additionalQstring.'" >'.$row['menu_name'].'</a>';
			$label_or_link = ($row['page_query_string'] != '#')?$href:$row['menu_name'];
			// If qstring is hash then class
		if($row['page_query_string'] == '#')
		{
			$class_ul = 'hide_menu';
			$class_li = 'expand_collapse';
			$plus_minus = '+';
			$menu_name .='<a href="#'.$row['jquery_event'].'"  class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>'.$row['menu_name'].'<i class="icon-chevron-up"></i></a>
               <ul id="'.$row['jquery_event'].'" class="nav nav-list collapse">';
              $ul="</ul>";
		}
		else
		{  
			$class_ul = 'show_menu';
			$class_li = '';
			$plus_minus = '-';
		    $ul = "";
			$menu_name .="<li>";
			$menu_name .=$label_or_link."</li>";
        }
			$menu_name .= $this->get_menu_tree($table,$userID,$additionalQstring,$row['id']); //call  recursively

			$menu_name .= $ul;

		}
		
			return $menu_name;
	}



  public function getMenuIDsAssignedToUser($userID , $companyID="")
 {
    $this->db->select('comma_seperated_menu_ids');
    $this->db->where('user_id',$userID);
    // $this->db->where('company_id',$companyID);
    $query  = $this->db->get('menu_user');
	$query1 = $query->result_array();
    //print_r($query1);
   
    if(sizeof($query1)>0)
    {
        $output = $query1['0']['comma_seperated_menu_ids'];
        
    }
    else
    {
        $output = '0';
    }
   
    return $output;
    
}


######################################################################################################################################
//function for getting all comment

   public function get_all_comment($file_id)
   {
   	 $this->db->select('directory_files_comment.*,directory.created_by,users.full_name,users.username');
   	 $this->db->from('directory_files_comment');
   	 $this->db->join('directory','directory.id=directory_files_comment.file_id','left');
   	 $this->db->join('users','users.id=directory_files_comment.user_id','left');
   	 $this->db->where('directory_files_comment.file_id',$file_id);
   	 $this->db->order_by('date','desc');
   	 $query = $this->db->get();
     
     return $query->result_array();
   }   



######################################################################################################################################
//function for getting all files in a folder


     public function get_all_file_of_folder($folder_id)
     {
     	 $this->db->select('directory.*,users.full_name,users.username');
	   	 $this->db->from('directory');
	   	 $this->db->join('users','users.id=directory.created_by','left');
	   	 $this->db->where('directory.parent_id',$folder_id);
	   	 $this->db->where('directory.type','file');
	   	 $this->db->order_by('directory.date_created','desc');
	   	 $query = $this->db->get();
	     
	     return $query->result_array();
     }

#########################################################################################################################################
        public function getallprojects()
        {
        	$this->db->select('projects.*,project_type.project_type');
        	$this->db->order_by('projects.project_name','asc');
        	$this->db->join('project_type','project_type.id=projects.type_of_project','left');
        	$this->db->where('projects.company_id',$this->session->company_id);
        	$this->db->where('project_type.is_active','1');
        	$query = $this->db->get('projects');
        	return $query->result_array();
        }


########################################################################################################################################
        public function get_project_cost($table_name , $project_id)
        {
        	$price = 'estimated_cost';
			$this->db->select('SUM(estimated_cost)');
			$this->db->where('project_id',$project_id);
			$query = $this->db->get($table_name);
			return $query->result_array();
        }





########################################################################################################################################
			

			public function get_category_wise_cost($table_name , $project_id , $cat='' , $subcat1='' , $subcat2='' , $subcat3='' ,$subcat4='' ,$subcat5='')
			{

				$group = '';
				$group_id = 0;
				$this->db->select('SUM(estimated_cost)');
				$this->db->where('project_id',$project_id);
				$this->db->where('category_id',$cat);
				$group = 'category_id';
				$group_id = $cat;
				if($subcat1!=''&&$subcat1!=0)
				{
					$this->db->where('subcat_id1',$subcat1);
					$group = 'subcat_id1';
				    $group_id = $cat;
				}
				
			    if($subcat2!=''&&$subcat2!=0)
			    {
			    	$this->db->where('subcat_id2',$subcat2);
			    	$group = 'subcat_id2';
			    }
				
				if($subcat3!=''&&$subcat3!=0)
				{
					$this->db->where('subcat_id3',$subcat3);
					$group = 'subcat_id3';
				}
				
				if($subcat4!=''&&$subcat4!=0)
				{
					$this->db->where('subcat_id4',$subcat4);
					$group = 'subcat_id4';
				}
				
				if($subcat5!=''&&$subcat5!=0)
				{
					$this->db->where('subcat_id5',$subcat5);
					$group = 'subcat_id5';
				}
				
			    $this->db->group_by($group);
				$query = $this->db->get($table_name);
				return $query->result_array();
			}



########################################################################################################################################
        public function get_category_project_cost($table_name , $category , $project_id)
        {
        	if($category=='category')
        	{	
	        	$condition = array(
	             'project_id' => $project_id,
	             'subcat_id1' => '0' ,
	             'subcat_id2' => '0' ,
	             'subcat_id3' => '0' ,
	             'subcat_id4' => '0' ,
	             'subcat_id5' => '0' 
	        	);
            }
              
              if($category=='sub_category1')
        	{	
	        	$condition = array(
	             'project_id' => $project_id,
	             'subcat_id2' => '0' ,
	             'subcat_id3' => '0' ,
	             'subcat_id4' => '0' ,
	             'subcat_id5' => '0' 
	        	);
            }

            if($category=='sub_category2')
        	{	
	        	$condition = array(
	             'project_id' => $project_id,
	             'subcat_id3' => '0' ,
	             'subcat_id4' => '0' ,
	             'subcat_id5' => '0' 
	        	);
            }

            if($category=='sub_category3')
        	{	
	        	$condition = array(
	             'project_id' => $project_id,
	             'subcat_id4' => '0' ,
	             'subcat_id5' => '0' 
	        	);
            }


            if($category=='sub_category4')
        	{	
	        	$condition = array(
	             'project_id' => $project_id,
	             'subcat_id5' => '0' 
	        	);
            }

            if($category=='sub_category5')
        	{	
	        	$condition = array(
	             'project_id' => $project_id,
	        	);
            }
			$this->db->select('SUM(estimated_cost),project_name');
			$this->db->join('projects' , 'projects.id = wbs_transaction.project_id' , 'left');
			$this->db->where($condition);
			$query = $this->db->get($table_name);


			return $query->result_array();
        }



################################################################################################################################

 public function get_category_project_cost1($table_name , $category , $cat_id , $project_id)
        {
        	if($category=='category')
        	{	
	        	$condition = array(
	             'project_id' => $project_id,
	             'category_id'=> $cat_id,
	             'subcat_id1' => '0' ,
	             'subcat_id2' => '0' ,
	             'subcat_id3' => '0' ,
	             'subcat_id4' => '0' ,
	             'subcat_id5' => '0' 
	        	);
            }
              
              if($category=='sub_category1')
        	{	
	        	$condition = array(
	             'project_id' => $project_id,
	             'subcat_id1' => $cat_id ,
	              'subcat_id2' => '0' ,
	             'subcat_id3' => '0' ,
	             'subcat_id4' => '0' ,
	             'subcat_id5' => '0' 
	        	);
            }

            if($category=='sub_category2')
        	{	
	        	$condition = array(
	             'project_id' => $project_id,
	             'subcat_id2' => $cat_id,
	             'subcat_id3' => '0' ,
	             'subcat_id4' => '0' ,
	             'subcat_id5' => '0'  
	        	);
            }

            if($category=='sub_category3')
        	{	
	        	$condition = array(
	             'project_id' => $project_id,
	             'subcat_id3' => $cat_id ,
	             'subcat_id4' => '0' ,
	             'subcat_id5' => '0' 
	        	);
            }


            if($category=='sub_category4')
        	{	
	        	$condition = array(
	             'project_id' => $project_id,
	             'subcat_id4' => $cat_id ,
	             'subcat_id5' => '0' 
	        	);
            }

            if($category=='sub_category5')
        	{	
	        	$condition = array(
	             'project_id' => $project_id,
	             'subcat_id5' => $cat_id ,
	        	);
            }
			$this->db->select('SUM(estimated_cost),project_name');
			$this->db->join('projects' , 'projects.id = wbs_transaction.project_id' , 'left');
			$this->db->where($condition);
			$query = $this->db->get($table_name);


			return $query->result_array();
        }



################################################################################################################################

          public function fetch_data_id($table_name,$condition,$orderby='',$asc_dsc="asc")
    {
      if($orderby!="")
      {
      $this->db->order_by($orderby,$asc_dsc);
      }
     
      $this->db->where($condition);
      $query = $this->db->get($table_name);
      return $query->result_array();
    }


###################################################################################################################################

            public function fetch_po_transaction($table_name , $po_number)
            {   
            	$this->db->select('po_transaction.*,po_item_list.item_name');
            	$this->db->where('po_transaction.project_id' , $this->session->project_id);
            	$this->db->where('po_number' , $po_number);
            	$this->db->join('po_item_list','po_item_list.id=po_transaction.item_id','left');
            	$this->db->order_by('item_name');
            	$query = $this->db->get($table_name);
            	return $query->result_array();

            }



##################################################################################################################################

             public function get_ponumber($table_name='' , $row_id)
             {
             	$this->db->where('project_id',$this->session->project_id);
             	$this->db->where('id' , $row_id);
             	$query = $this->db->get($table_name);
             	$query1 = $query->result_array();
             	return $query1['0']['po_number'];
             }





####################################################################################################################################
    //       public function send_mail()
    //       {
				// $to = ($email_to!='')?($email_to):ADMIN_EMAIL;
				// $subject = isset($subject)?$subject:'Welcome To ';
				// $txt = isset($email_text)?$email_text:'';
				// $headers = "MIME-Version: 1.0" . "\r\n";
				// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				// // More headers
				// $headers .= 'From: <sales@nxtden.com>' . "\r\n";


				// if(@mail($to,$subject,$txt,$headers))
				// {
				// $msg = "Mail Send Successfully";
				// }
				// else
				// {
				// $msg = "Unable to send the Mail";
				// }
    //       }

#######################################################################################################################################


             public function getSingleData($table_name , $col_name , $condition)
             {
             	$this->db->select($col_name);
             	$this->db->where($condition);
             	$query = $this->db->get($table_name);
             	return $query->result_array();
             }


#######################################################################################################################################

           public function getallcategory($select_column , $cat_id='' , $subcat_id1='',$subcat_id2='',$subcat_id3='',$subcat_id4='')
           {
           	  $project_id = $this->session->project_id;
           	  $this->db->select($select_column);
           	  $this->db->distinct();
           	    
           	    if($cat_id!='')
           	  	  $this->db->where('category_id' , $cat_id);

           	  	if($subcat_id1!='')
           	  	  $this->db->where('subcat_id1' , $subcat_id1);

           	  	if($subcat_id2!='')
           	  	  $this->db->where('subcat_id2' , $subcat_id2);

           	  	if($subcat_id3!='')
           	  	  $this->db->where('subcat_id3' , $subcat_id3);

           	  	if($subcat_id4!='')
           	  	  $this->db->where('subcat_id4' , $subcat_id4);

           	  	

           	  
           	  $this->db->where('project_id' , $project_id);
           	  $query = $this->db->get('wbs_transaction');
           	  // $query1 = $query->result_array();
           	  // echo "<pre>";print_r($query1);exit();
           	  return $query->result_array();
           }

#########################################################################################################################################

         public function get_total_cost($cat_id='',$subcat_id1='',$subcat_id2='',$subcat_id3='',$subcat_id4='',$subcat_id5='')
         {
         	 $project_id = $this->session->project_id;
              
              if(isset($cat_id)&&($cat_id!=''))
              {
              	$condition =array(
                 'category_id' => $cat_id
              	);
              }
               if(isset($subcat_id1)&&($subcat_id1!=''))
              {
              	$condition =array(
                 'category_id' => $cat_id,
                 'subcat_id1'  =>$subcat_id1
              	);
              }
             
              if(isset($subcat_id2)&&($subcat_id2!=''))
              {
              	$condition =array(
                 'category_id' => $cat_id,
                 'subcat_id1'  =>$subcat_id1,
                 'subcat_id2'  =>$subcat_id2
              	);
              }

              if(isset($subcat_id3)&&($subcat_id3!=''))
              {
              	$condition =array(
                 'category_id' => $cat_id,
                 'subcat_id1'  =>$subcat_id1,
                 'subcat_id2'  =>$subcat_id2,
                 'subcat_id3'  =>$subcat_id3
              	);
              }

                if(isset($subcat_id4)&&($subcat_id4!=''))
              {
              	$condition =array(
                 'category_id' => $cat_id,
                 'subcat_id1'  =>$subcat_id1,
                 'subcat_id2'  =>$subcat_id2,
                 'subcat_id3'  =>$subcat_id3,
                 'subcat_id4'  =>$subcat_id4
              	);
              }
             
              if(isset($subcat_id5)&&($subcat_id5!=''))
              {
              	$condition =array(
                 'category_id' => $cat_id,
                 'subcat_id1'  =>$subcat_id1,
                 'subcat_id2'  =>$subcat_id2,
                 'subcat_id3'  =>$subcat_id3,
                 'subcat_id4'  =>$subcat_id4,
                 'subcat_id5'  =>$subcat_id5
              	);
              }



              $this->db->select('sum(estimated_cost)');
              $this->db->where('company_id' , $this->session->company_id);
              if($this->session->project_id)
              {
              	$this->db->where('project_id' , $this->session->project_id);
              }
              $this->db->where($condition);
              // $query1 = $query->result_array();
           	  // echo "<pre>";print_r($query1);exit();
              $query = $this->db->get('wbs_transaction');
              return $query->result_array();


         }



#########################################################################################################################################


         public function get_subcat_name($table_name='' , $row_id='' )
         { 
         	$this->db->where('id' , $row_id);
         	$query = $this->db->get($table_name);
         	return $query->result_array();

         }



###########################################################################################################################################

         public function get_project_user_email($table_name)
         {
         	$project_id = $this->session->project_id;
         	$this->db->where('project_id',$project_id);
         	$query = $this->db->get($table_name);
         	return $query->result_array();
         }


############################################################################################################################################

         public function get_fullname($table_name='')
         {
         	$id = $this->session->user_id;
         	$this->db->select('users.full_name,projects.project_name');
         	$this->db->from($table_name);
         	$this->db->join('projects','users.project_id=projects.id','left');
         	$this->db->where('users.id',$id);
         	$query = $this->db->get();
            return $query->result_array();
         }

############################################################################################################################################


        public function get_users_comment_detail()
        {
        	$user_id    = $this->session->user_id;
        	$project_id = $this->session->project_id;

        	$this->db->select('users.full_name,projects.project_name');
        	$this->db->from('users');
        	$this->db->join('projects','projects.id=users.project_id','left');
        	$this->db->where('users.id',$user_id);
        	$this->db->where('projects.id',$project_id);
        	$query = $this->db->get();
        	return $query->result_array();
        }

#############################################################################################################################################


        public function get_file_name($table_name='' , $file_id='')
        {
        	$this->db->select('name')->from($table_name)->where('id', $file_id);
            $query = $this->db->get();
            return $query->result_array();
        }


        public function get_all_users($table_name)
        {   
        	$cond = array('project_id'=>$this->session->project_id);
        	$query = $this->db->select('id,email_id,username,full_name')->where($cond)->where('id!=',$this->session->user_id)->get($table_name);
        	return $query->result_array();
        }
##################################################################################################################################



        public function get_tracking_status($tab_name)
        {
        	$query = $this->db->get($tab_name);
        	return $query->result_array();
        }

#################################################################################################################################

      public function fetch_alltracking_detail($tab_name)
      {

      	$project_id = $this->session->project_id;
      	$query = $this->db->select('projects.project_name,tracking_status.name,users.username,users.full_name,tracking_detail.*')->from($tab_name)
      	->join('projects','projects.id=tracking_detail.project_id','left')
      	->join('tracking_status','tracking_status.id=tracking_detail.status','left')
      	->join('users','users.id=tracking_detail.created_by','left')->where('tracking_detail.project_id',$project_id)->order_by('tracking_detail.created_on DESC')->get();
      	return $query->result_array();
      }


##############################################################################################################################


      public function edit_tracking_data($tab_name , $condition)
      {

      	$query = $this->db->where($condition)->get($tab_name);
      	return $query->result_array();
      }

#############################################################################################################################



      public function get_tracking_ids($tab_name,$id='')
      {
      	$query = $this->db->where('id',$id)->get($tab_name);
      	return $query->result_array();
      	//echo "<pre>";print_r($q);exit();

      }

##############################################################################################################################

      public function get_all_tracking($tab_name)
      {
      	 $condition= array(
          'email_notification'=>'0',
      	  );
      	 $query = $this->db->where($condition)->where('status!=','100')->get($tab_name);
      	 return $query->result_array();
      }


###############################################################################################################################

         public function get_last_id($tab_name)
         {
         	$query = $this->db->select('MAX(id)')->from($tab_name)->where('type','file')->get();
         	$q = $query->result_array();
         	//echo "<pre>";print_r($q);exit();
         	if(isset($q))
         	{
         		return $q['0']['MAX(id)'];
         	}
         	else
         	{
         		return 0;
         	}
         }


##############################################################################################################################

        public function get_parent_id($tab_name  , $file_id = '')
        {
        	$query = $this->db->select('parent_id')->from($tab_name)->where('id',$file_id)->get();
        	$q = $query->result_array();
        	if(isset($q))
        	{
        		return $q['0']['parent_id'];
        	}
        	else
        	{
        		return 0;
        	}
        }






###############################################################################################################################


         public function get_total_file($tab_name , $condition)
         {
            
            $query = $this->db->select('count(id)')->from($tab_name)->where_in('parent_id',$condition)->where('type','file')->get();
            $q = $query->result_array();
            if(isset($q))
              return $q['0']['count(id)'];
            else
            	return '';


         }

 ################################################################################################################################


         public function get_all_category()
         {
         	$query = $this->db->select('wbs_sub_category5.*,wbs_sub_category4.sub_category_name4,wbs_sub_category3.sub_category_name3,wbs_sub_category2.sub_category_name2,wbs_sub_category1.sub_category_name1,wbs_category.category_name')
         	->from('wbs_sub_category5')
         	->join('wbs_sub_category4','wbs_sub_category4.id=wbs_sub_category5.subcat_id4','left')
         	->join('wbs_sub_category3','wbs_sub_category3.id=wbs_sub_category5.subcat_id3','left')
         	->join('wbs_sub_category2','wbs_sub_category2.id=wbs_sub_category5.subcat_id2','left')
         	->join('wbs_sub_category1','wbs_sub_category1.id=wbs_sub_category5.subcat_id1','left')
         	->join('wbs_category','wbs_category.id=wbs_sub_category5.category_id','left')
         	->order_by('wbs_sub_category5.category_id')
         	->order_by('wbs_sub_category5.subcat_id1')
         	->order_by('wbs_sub_category5.subcat_id2')
         	->order_by('wbs_sub_category5.subcat_id3')
         	->order_by('wbs_sub_category5.subcat_id4')
         	->order_by('wbs_sub_category5.sub_category_name5')
         	->get();
         	return $query->result_array();
         }



####################################################################################################################################


         public function get_category()
         {
         	$query = $this->db->get('wbs_category');
         	return $query->result_array();
         }

###################################################################################################################################


         public function get_subcat($tabname='',$array='')
         {
            $query = $this->db->where($array)->get($tabname);
            return $query->result_array();
         }

####################################################################################################################################


         public function get_user_category()
         { 
         	$category = $this->Common->getDataSingle('user_wbd_category_subcategory','category_id',array('project_id'=>$this->session->project_id));
         	$user_category_array = explode(',',$category);
            $query = $this->db->where_in('id',$user_category_array)->get('wbs_category');
         	return $query->result_array();
         }

###################################################################################################################################


         public function get_user_subcat($tabname='',$array='' , $cond_array=array())
         {
            $query = $this->db->where($array)->where_in('id',$cond_array)->get($tabname);
            return $query->result_array();
         }


###################################################################################################################################

         public function get_all_data($tabname='')
         {
         	if($this->session->project_id)
         	{
         		$this->db->where('project_id',$this->session->project_id);
         	}
         	$this->db->where('company_id',$this->session->company_id);
         	$query = $this->db->get($tabname);
         	$q = $query->result_array();
         	return $q['0'];
         }




###################################################################################################################################
         public function get_total_budget( $tab_name, $condition,$colname)
         {
         	  
         	  $project = $this->session->project_id;
              $this->db->select($colname);
              $this->db->where('project_id' , $project);
              $this->db->where($condition);
              $query = $this->db->get($tab_name);
              $q = $query->result_array();
              if(isset($q['0'])&&$q['0']!='')
              {
              	return $q['0'];
              }
              else
              {
              return 0;
              }
         }

###################################################################################################################################
         public function get_tracking_amount( $condition)
         {
         	  //$this->output->enable_profiler(TRUE);
         	  $project = $this->session->project_id;
              $this->db->select('sum(initial_value),sum(final_value)');
              $this->db->where('project_id' , $project);
              $this->db->where($condition);
              $query = $this->db->get('tracking_master_value');
              $q = $query->result_array();
              //print_r($q);
              if(isset($q)&&sizeof($q)>0)
              {
              	return $q['0'];
              }
              else
              {
                return ;
              }
               
         }



###################################################################################################################################
         public function get_total_tracking_amount( $condition)
         {
         	  
         	  //$this->output->enable_profiler(TRUE);
         	  $project = $this->session->project_id;
              $this->db->select('sum(final_value)');
              $this->db->where('project_id' , $project);
              $this->db->where($condition);
              $query = $this->db->get('tracking_master_value');
              $q = $query->result_array();
              //print_r($q);
              if(isset($q)&&sizeof($q)>0)
              {
              	return $q['0']['sum(final_value)'];
              }
              else
              {
                return ;
              }
         }


#################################################################################################################################

         public function get_total_detail($tab_name , $condition)
         {
              $array = array(
              'category_id'=>'0',
              'subcat_id1'=>'0',
              'subcat_id2'=>'0',
              'subcat_id3'=>'0',
              'subcat_id4'=>'0',
              'subcat_id5'=>'0'
         	  );
              $con = array_merge($array , $condition);
              $project = $this->session->project_id;
              $this->db->select('contract_value_gst');
              $this->db->where('project_id' , $project);
              $this->db->where($con);
              // $query1 = $query->result_array();
           	  // echo "<pre>";print_r($query1);exit();
              $query = $this->db->get($tab_name);
              $q = $query->result_array();
              if(isset($q)&&sizeof($q)>0)
              {
                return $q['0'];	
              }
              else
              {
              	return 0;
              }
              

         }

###################################################################################################################################################








}
?>
