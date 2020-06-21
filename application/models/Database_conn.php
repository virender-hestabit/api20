<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Database_conn  extends MY_Model {

	
	public function check_login($condition)
	{
        $user=$this->db->get_where('users',$condition);
         return $user->row();       
	}

######################################################################################################################################
   // adding wbs category
	public function add_wbs_category($wbs)
	{
		
		$wbs_detail=array(
		'category_name'=>$wbs,
		'created_by'=>'5',
		'created_on'=>now()
	     );
        $user=$this->db->insert('wbs_category',$wbs_detail);
        if($user)
        {
        	return (1);
        }
        else
        {
        	return (0);
        }
     }

######################################################################################################################################
       //selecting all wbs category
     public function get_wbs_category()
     {
       $get_data=$this->db->get('wbs_category');
       return $get_data->result_array();
     }


######################################################################################################################################
// inserting create project  

    public function insert($table_name,$data)
    {
    	$insert=$this->db->insert($table_name,$data);
    	if($insert)
    	{
    		return 1;
    	}
    	else
    	{
    		return 0;
    	}
    }

 ######################################################################################################################################
       // fetching all projects 


       public function fetch_Data($table_name)
       {
        $project_id = $this->session->project_id;
        $this->db->where('id', $project_id);
       	$get_data=$this->db->get($table_name);
       	return $get_data->result_array();
       }   



######################################################################################################################################

        public function getData($table_name , $condition =array())
       {
         
        if(isset($condition)&&sizeof($condition)>0)
        {
          $this->db->where($condition);
        }
        $get_data=$this->db->get($table_name);
        return $get_data->result_array();
       }   


######################################################################################################################################

       public function getData_ajax($table_name ,$coloumn_name='', $condition ='' , $asc='ASC')
       {
         
         $project_id = $this->session->project_id;
        $this->db->where('project_id', $project_id);
        if(isset($condition)&&$condition!='')
        {
          $this->db->like($coloumn_name,$condition);
        }
        $this->db->order_by($coloumn_name , $asc);
        $get_data=$this->db->get($table_name);
        return $get_data->result_array();
       }   


######################################################################################################################################

       public function getData_ajaxNew($table_name ,$coloumn_name='', $condition ='' , $asc='ASC')
       {
         
         
        $this->db->where('company_id', $this->session->company_id);
        if(isset($condition)&&$condition!='')
        {
          $this->db->like($coloumn_name,$condition);
        }
        $this->db->order_by($coloumn_name , $asc);
        $get_data=$this->db->get($table_name);
        return $get_data->result_array();
       }   

######################################################################################################################################

       public function getData_ajaxNew1($table_name ,$coloumn_name='', $condition ='' , $asc='ASC')
       {
         
         
        $this->db->where('company_id', $this->session->company_id);
        if(isset($condition)&&$condition!='')
        {
          $this->db->like($coloumn_name,$condition);
        }
        $this->db->where('is_active','1');
        $this->db->order_by($coloumn_name , $asc);
        $get_data=$this->db->get($table_name);
        return $get_data->result_array();
       }   



 ######################################################################################################################################
          //fetching for editing project data

       public function fetch_edit($table_name,$edit_id='',$condition=array())
       {
        if($edit_id!="")
        {
        $array = array(
         'id'=>$edit_id
        );
        }
        
        if(sizeof($condition)>0)
        {
          $array = $condition;
        }
         
        $this->db->where($array);
        $query = $this->db->get($table_name);
        return $query->result_array();
       }

 
 ######################################################################################################################################
            // update create project

        public function update($table_name,$data,$coloumn,$update_id)
        {
                 $this->db->where($coloumn, $update_id);
          $query=$this->db->update($table_name, $data);
          return $query; 
           
        }



######################################################################################################################################
    //function for fetching data from wbs category and sub category

        public function fetch_category1($table_name,$coloumn_name)
        {
          $this->db->order_by($coloumn_name, "asc"); 
          $query = $this->db->get($table_name);
          return $query->result_array();
        }

        public function category($coloumn_name='category_name')
        {
          $this->db->select('wbs_category.* , users.username, users.id as user_id')->join('users','users.id=wbs_category.created_by')->order_by($coloumn_name, "asc"); 
          $query = $this->db->get('wbs_category');
          return $query->result_array();
        }

        public function disease($coloumn_name='disease_name')
        {
          $this->db->select('disease.* ,wbs_category.category_name, users.username, users.id as user_id')->join('wbs_category','disease.category=wbs_category.id')->join('users','users.id=disease.created_by')->order_by($coloumn_name, "asc"); 
          $query = $this->db->get('disease');
          return $query->result_array();
        }

//function for fetching data from wbs category and sub category

        // public function fetch_category($table_name,$coloumn_name,$condition)
        // {
        //   $this->db->order_by($coloumn_name, "asc"); 
        //   if(sizeof($condition)>0)
        //   {
        //     $query = $this->db->get_where($table_name,$condition);
        //   }
        //   else
        //   {
        //   $query = $this->db->get($table_name);
        //   }
        //   return $query->result_array();
        // }
############################################################################################################################################
//fetch cat and sub cat 

    public function fetch_catandsubcat()
    {
        //$this->db->select('*');
        $this->db->select('wbs_category.id as wbs_cat_id,wbs_category.category_name , 
          wbs_sub_category1.id as wbs_sub_cat1 , wbs_sub_category1.sub_category_name1 , 
          wbs_sub_category2.id as wbs_sub_cat2 , wbs_sub_category2.sub_category_name2 ,  
          wbs_sub_category3.id as wbs_sub_cat3 , wbs_sub_category3.sub_category_name3 , 
          wbs_sub_category4.id as wbs_sub_cat4 , wbs_sub_category4.sub_category_name4 ,  
          wbs_sub_category5.id as wbs_sub_cat5 , wbs_sub_category5.sub_category_name5');
        $this->db->from('wbs_category');
        $this->db->join('wbs_sub_category1', 'wbs_sub_category1.category_id = wbs_category.id','left');
        $this->db->join('wbs_sub_category2','wbs_sub_category2.subcat_id1 = wbs_sub_category1.id','left');
        $this->db->join('wbs_sub_category3','wbs_sub_category3.subcat_id2 = wbs_sub_category2.id','left');
        $this->db->join('wbs_sub_category4','wbs_sub_category4.subcat_id3 = wbs_sub_category3.id','left');
        $this->db->join('wbs_sub_category5','wbs_sub_category5.subcat_id4 = wbs_sub_category4.id','left');
        $this->db->order_by('wbs_category.id', 'asc');
        $this->db->order_by('wbs_sub_category1.id', 'asc');
        $this->db->order_by('wbs_sub_category2.id', 'asc');
        $this->db->order_by('wbs_sub_category3.id', 'asc');
        $this->db->order_by('wbs_sub_category4.id', 'asc');
        $this->db->order_by('wbs_sub_category5.id', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }   


############################################################################################################################################

    public function fetch_user_category($cat_ids='' ,$subcat_ids1='' ,$subcat_ids2='' ,$subcat_ids3='' ,$subcat_ids4='' ,$subcat_ids5='' )
    {
       if($cat_ids!='')
       {
          $cat_ids = explode(",", $cat_ids);
       }
       if($subcat_ids1!='')
       {
          $subcat_ids1 = explode(",", $subcat_ids1);
       }
       if($subcat_ids2!='')
       {
          $subcat_ids2 = explode(",", $subcat_ids2);
       }
       if($subcat_ids3!='')
       {
          $subcat_ids3 = explode(",", $subcat_ids3);
       }
       if($subcat_ids4!='')
       {
          $subcat_ids4 = explode(",", $subcat_ids4);
       }
       if($subcat_ids5!='')
       {
          $subcat_ids5 = explode(",", $subcat_ids5);
       }
      $this->db->select('wbs_category.id as wbs_cat_id,wbs_category.category_name , 
          wbs_sub_category1.id as wbs_sub_cat1 , wbs_sub_category1.sub_category_name1 , 
          wbs_sub_category2.id as wbs_sub_cat2 , wbs_sub_category2.sub_category_name2 ,  
          wbs_sub_category3.id as wbs_sub_cat3 , wbs_sub_category3.sub_category_name3 , 
          wbs_sub_category4.id as wbs_sub_cat4 , wbs_sub_category4.sub_category_name4 ,  
          wbs_sub_category5.id as wbs_sub_cat5 , wbs_sub_category5.sub_category_name5');
        $this->db->from('wbs_category');
        $this->db->join('wbs_sub_category1', 'wbs_sub_category1.category_id = wbs_category.id','left');
        $this->db->join('wbs_sub_category2','wbs_sub_category2.subcat_id1 = wbs_sub_category1.id','left');
        $this->db->join('wbs_sub_category3','wbs_sub_category3.subcat_id2 = wbs_sub_category2.id','left');
        $this->db->join('wbs_sub_category4','wbs_sub_category4.subcat_id3 = wbs_sub_category3.id','left');
        $this->db->join('wbs_sub_category5','wbs_sub_category5.subcat_id4 = wbs_sub_category4.id','left');
        $this->db->or_where_in('wbs_category.id',$cat_ids);
        $this->db->or_where_in('wbs_sub_category1.id',$subcat_ids1);
        $this->db->or_where_in('wbs_sub_category2.id',$subcat_ids2);
        $this->db->or_where_in('wbs_sub_category3.id',$subcat_ids3);
        $this->db->or_where_in('wbs_sub_category4.id',$subcat_ids4);
        $this->db->or_where_in('wbs_sub_category5.id',$subcat_ids5);
        $this->db->order_by('category_name', 'asc');
        $this->db->order_by('sub_category_name1', 'asc');
        $this->db->order_by('sub_category_name2', 'asc');
        $this->db->order_by('sub_category_name3', 'asc');
        $this->db->order_by('sub_category_name4', 'asc');
        $this->db->order_by('sub_category_name5', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }         


############################################################################################################################################
//fetch cat and sub cat 

    public function fetch_wbs_trn()
    {
        $project_id = $this->session->project_id;
        $this->db->select('wbs_transaction.*,wbs_category.category_name,wbs_sub_category1.sub_category_name1,wbs_sub_category2.sub_category_name2,wbs_sub_category3.sub_category_name3,wbs_sub_category4.sub_category_name4,wbs_sub_category5.sub_category_name5,projects.id as pid,projects.project_name');
        $this->db->from('wbs_transaction');
        //$this->db->group_by("project_id"); 
        $this->db->join('wbs_category', 'wbs_transaction.category_id = wbs_category.id' ,'left');
        $this->db->join('wbs_sub_category1', 'wbs_transaction.subcat_id1 = wbs_sub_category1.id','left');
        $this->db->join('wbs_sub_category2','wbs_transaction.subcat_id2 = wbs_sub_category2.id','left');
        $this->db->join('wbs_sub_category3','wbs_transaction.subcat_id3 = wbs_sub_category3.id','left');
        $this->db->join('wbs_sub_category4','wbs_transaction.subcat_id4 = wbs_sub_category4.id','left');
        $this->db->join('wbs_sub_category5','wbs_transaction.subcat_id5 = wbs_sub_category5.id','left');
        $this->db->join('projects','wbs_transaction.project_id = projects.id','left');
        if($this->session->project_id)
        {
          $this->db->where('wbs_transaction.project_id', $this->session->project_id);  
        }
        $this->db->where('wbs_transaction.company_id', $this->session->company_id);
        
        $this->db->order_by('wbs_category.category_name', 'asc');
        $this->db->order_by('wbs_sub_category1.sub_category_name1', 'asc');
        $this->db->order_by('wbs_sub_category2.sub_category_name2', 'asc');
        $this->db->order_by('wbs_sub_category3.sub_category_name3', 'asc');
        $this->db->order_by('wbs_sub_category4.sub_category_name4', 'asc');
        $this->db->order_by('wbs_sub_category5.sub_category_name5', 'asc');
        $query = $this->db->get();
          //$q = $query->result_array();
         //echo "<pre>";print_r($q);exit();
        return $query->result_array();
    }            



############################################################################################################################################
//fetch for edit 

    public function edit_wbs_trn($edit)
    {
        $this->db->select('wbs_transaction.id,wbs_transaction.category_id,wbs_transaction.subcat_id1,wbs_transaction.subcat_id2,wbs_transaction.subcat_id3,wbs_transaction.subcat_id4 ,wbs_transaction.subcat_id5 ,wbs_transaction.project_id, wbs_transaction.estimated_cost,wbs_transaction.vendor_name,wbs_master.remark');
        $this->db->from('wbs_transaction');
        $this->db->join('wbs_category', 'wbs_transaction.category_id = wbs_category.id','left');
        $this->db->join('wbs_sub_category1', 'wbs_transaction.subcat_id1 = wbs_sub_category1.id','left');
        $this->db->join('wbs_sub_category2','wbs_transaction.subcat_id2 = wbs_sub_category2.id','left');
        $this->db->join('wbs_sub_category3','wbs_transaction.subcat_id3 = wbs_sub_category3.id','left');
        $this->db->join('wbs_sub_category4','wbs_transaction.subcat_id4 = wbs_sub_category4.id','left');
        $this->db->join('wbs_sub_category5','wbs_transaction.subcat_id5 = wbs_sub_category5.id','left');
        $this->db->join('projects','wbs_transaction.project_id = projects.id','left');
        $this->db->join('wbs_master','wbs_transaction.master_id = wbs_master.id','left');
        $this->db->where('wbs_transaction.id' , $edit);
        $this->db->order_by('category_name', 'asc');
        $this->db->order_by('sub_category_name1', 'asc');
        $this->db->order_by('sub_category_name2', 'asc');
        $this->db->order_by('sub_category_name3', 'asc');
        $this->db->order_by('sub_category_name4', 'asc');
        $this->db->order_by('sub_category_name5', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }            


############################################################################################################################################
// insert data function


    public function insert_data($table_name,$array)
    {
        $query = $this->db->insert($table_name,$array);
        return $query;
    }

############################################################################################################################################
    // fetch data function 

    public function fetch_data_id($table_name,$condition,$orderby='',$asc_dsc="asc")
    {
      if($orderby!="")
      {
      $this->db->order_by($orderby,$asc_dsc);
      }
      $this->db->select('username,full_name,user_type,company,directory.*');
      $this->db->join('users', 'directory.created_by = users.id','left');
      $this->db->where($condition);
      $query = $this->db->get($table_name);
      return $query->result_array();
    }

############################################################################################################################################
    //fetch data function for ajax

    public function fetch_data_id_ajax($table_name,$condition,$orderby='',$asc_dsc="asc")
    {
      if($orderby!="")
      {
      $this->db->order_by($orderby,$asc_dsc);
      }
      $query = $this->db->get_where($table_name , $condition);
      return $query->result_array();
    }



############################################################################################################################################
    // fetch data function 

    public function getsubcat($table_name,$array)
    {
      $query = $this->db->get_where($table_name , $array);
      return $query->result_array();
    }




############################################################################################################################################
    // check already exit or not function 

    public function alreadyexit($table_name,$array)
    {
      $query = $this->db->get_where($table_name , $array);
      return $query->result_array();
    }

############################################################################################################################################   

// function for deleting file or folder from directory structure
 
    public function deleteData($table_name , $id,$type="")
    {
      $condition = array(
       'id' => $id
       );
      $this->db->delete($table_name , $condition);

        if($type=="dir")
        {  
            $condition = array(
            'parent_id' => $id
            );
            $query = $this->db->get_where($table_name , $condition);
            $query1 = $query->result_array();
            foreach($query1 as $query2)
            {
              if($query2['type']=="file")
              {
                $condition = array(
                'id' => $query2['id']
                );
                $this->db->delete($table_name , $condition);
              }
              else
              {
                 $this->deleteData('directory',$query2['id'],"dir");
                 return;
              }
            }
        }
    }


################################################################################################################################################


   public function get_all_po_trn()
   {
     $project_id = $this->session->project_id;
     $query = $this->db->select('po_master.po_number,po_master.po_date,po_transaction.item_package_name,po_transaction.quantity')
              ->from('po_transaction')
              ->join('po_master','po_transaction.po_number=po_master.po_number','left')
              ->where('po_master.project_id',$project_id)
              ->group_by('item_package_name')
              ->get();
     return $query->result_array();
   }


###############################################################################################################################################

   public function all_trn_detail($table_name , $condition)
   {

     $query = $this->db->select('tracking_transaction_value.tracking_amount')
                       ->from($table_name)
                       ->join('tracking_transaction_value','tracking_transaction_value.master_id=tracking_master_value.id','left')
                       ->where($condition)
                       ->get();
                       //print_r($query);
      return $query->result_array();
   }
 ######################################################################################################################################
       // fetching all projects  charter


       
#################################################################################################################################################### 
public function getActiveYearShort() 
{
global $link;  
$current = date('y');
return $current;
}
####################################################################################################################################################
public function getActiveYearLong() 
{
global $link;  
$current = date('Y');
return $current;
}
####################################################################################################################################################
public function getActiveFinancialYear() 
{
global $link;  
$current = date('Y');
$next = intval($current)+1; 
return $current.'-'.$next;
}
####################################################################################################################################################
public function getActiveFinancialYearShort() 
{
global $link;  
$current = date('y');
$next = intval($current)+1; 
return $current.'-'.$next;
}
####################################################################################################################################################
public function getActiveMonthNumeric() 
{
global $link;  
$current = date('m');
// //echo $current;
return $current;
}
####################################################################################################################################################
public function getActiveMonthStringShort() 
{
global $link;  
$current = date('M');
return strtoupper($current);
}

####################################################################################################################################################


public function getNextSerialNumber($serialNumberFor,$prefixOnly=false) 
{
global $link;
$activeY = $this->getActiveYearLong();
$activeFY = $this->getActiveFinancialYear() ;
$activeM = $this->getActiveMonthNumeric();
if($prefixOnly)
{
    $selq = $this->db->select('max(serial_number) as last_slno')->where('project_id',$this->session->project_id)->where('company_id',$this->session->company_id)->where('serial_number_for',$serialNumberFor)->from('next_serial_number')->get();
}
else
{
  $selq = $this->db->select('max(serial_number) as last_slno')->where('project_id',$this->session->project_id)->where('company_id',$this->session->company_id)->where('active_year',$activeY)->where('serial_number_for',$serialNumberFor)->from('next_serial_number')->get();  
}
$selq = $selq->result_array();
$output = array();
if($selq['0']['last_slno']!= NULL)
{
   $output = intval($selq['0']['last_slno']) + 1;
}
else
{
   $slno = 0;
   $selq = $this->Common->insertData('next_serial_number',array('project_id'=>$this->session->project_id,'company_id'=>$this->session->company_id,'serial_number'=>$slno,'active_month'=>$activeM,'active_year'=>$activeY,'financial_year'=>$activeFY,'serial_number_for'=>$serialNumberFor));
   $output = $slno+1;

}
return $output;
}

####################################################################################################################################################











function updateNextSerialNumber($serialNumberFor,$prefixOnly=false) 
{
$nextSerialNumber = $this->getNextSerialNumber($serialNumberFor,$prefixOnly);
$lastSerialNumber = intval($nextSerialNumber)-1;
global $link;
$activeY = $this->getActiveYearLong();
$activeFY = $this->getActiveFinancialYear() ;
$activeM = $this->getActiveMonthNumeric();

if($prefixOnly)
{
    $selq = $this->Common->update('next_serial_number',array('serial_number'=>$nextSerialNumber),array('serial_number_for'=>$serialNumberFor,'serial_number'=>$lastSerialNumber,'project_id'=>$this->session->project_id));
}
else
{
  $selq = $this->Common->update('next_serial_number',array('serial_number'=>$nextSerialNumber),array('serial_number_for'=>$serialNumberFor,'serial_number'=>$lastSerialNumber,'project_id'=>$this->session->project_id,'active_year'=>$activeY));
}

}

function autoGenerateNextSerialNumber($prefix='', $serialNumberFor='',$serialNumberDigits='', $prefixOnly=false) 
{

global $link;
$cur_year =  $this->getActiveYearLong();
$cur_month = $this->getActiveMonthNumeric();
$serial_no = $this->getNextSerialNumber($serialNumberFor,$prefixOnly);
$serialNumberDigits = ($serialNumberDigits=='')?'%05s':'%0'.$serialNumberDigits.'s';
// //echo $serialNumberDigits;
if($prefixOnly)
{
$output = $prefix.sprintf($serialNumberDigits,$serial_no);
}
else
{
$output = $prefix."/".$cur_year.$cur_month."/".sprintf($serialNumberDigits,$serial_no);   
}

return $output;
} 


}
?>