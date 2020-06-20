<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Common  extends MY_Model {

   
   public function get_data_single($tab_name , $coloumn , $condition)
   {
   	    $select = $tab_name.".".$coloumn;
		$this->db->select($select);
		$this->db->from($tab_name);
		$this->db->limit(100);
		$this->db->where($condition);
		$query = $this->db->get();
		$q = $query->result_array();
		if(isset($q)&&sizeof($q)>0)
		{ 
			return $q['0'][$coloumn];
		}
		else
		{   
			return ;
		}
   }


   public function getData($tab_name , $condition=array())
   {
		$this->db->from($tab_name);
		$this->db->where($condition);
		$this->db->limit(100);
		$query = $this->db->get();
		$q = $query->result_array();
			return $q;
   }



#############################################################################################################################33

   public function getBoqClient()
   {
      $query = $this->db->select('boq_master.*,po_item_list.item_name')
                        ->from('boq_master')
                        ->where('boq_master.project_id',$this->session->project_id)
                        ->join('po_item_list','po_item_list.id=boq_master.item_id','left')
                        ->order_by('boq_number DESC')
                        ->limit(100)
                        ->get();
      return $query->result_array();
   }

#############################################################################################################################33

   public function get_user($table_name='' , $condition=array(), $colname='')
   {
      $query = $this->db->select($colname)
                        ->from($table_name)
                        ->where($condition)
                        ->join('projects','projects.id=users.project_id','left')
                        ->order_by('users.created_on DESC')
                        ->limit(100)
                        ->get();
      return $query->result_array();
   }


#####################################################################################################################################
            // update create project

        public function update($table_name,$data,$condition)
        {
                 $this->db->where($condition);
          $query=$this->db->update($table_name, $data);
          return $query; 
           
        }


#####################################################################################################################################
            // update create project

        public function deleteData($table_name,$condition)
        {
          $query=$this->db->delete($table_name,$condition);
          return $query; 
           
        }

###################################################################################################################################

        public function getPoData($tab_name , $condition)
         {
          $this->db->from($tab_name);
          $this->db->where($condition);
          $this->db->join('po_item_list','po_item_list.id=po_transaction.item_id','left');
          $this->db->limit(100);
          $query = $this->db->get();
          $q = $query->result_array();
            return $q;
         }

         public function getPoDataSelect($tab_name , $condition)
         {
          $this->db->select('po_transaction.*,po_item_list.item_name');
          $this->db->from($tab_name);
          $this->db->where($condition);
          $this->db->join('po_item_list','po_item_list.id=po_transaction.item_id','left');
          $this->db->limit(100);
          $query = $this->db->get();
          $q = $query->result_array();
            return $q;
         }


###############################################################################################################################


        public function inventoryFromPo()
         {
          $this->db->select('po_transaction.*,po_item_list.item_name,po_master.po_date');
          $this->db->from('po_master');
          $this->db->where('po_master.project_id',$this->session->project_id);
          $this->db->join('po_transaction','po_transaction.po_number=po_master.po_number','left');
          $this->db->join('po_item_list','po_item_list.id=po_transaction.item_id','left');
          $this->db->limit(100);
          //$this->db->group_by('po_number');
          $query = $this->db->get();
          $q = $query->result_array();
          //echo "<pre>";print_r($q);
            return $q;
         }


###############################################################################################################################

      public function insertData($table_name , $condition)
      {
        $query = $this->db->insert($table_name , $condition);
        if(isset($query)&&$query!='')
        {
          return 1;
        }
        else
        {
          return ;
        }
      }



##############################################################################################################################

  public function getDataSingle($tab_name , $coloumn , $condition)
   {
    $this->db->select($coloumn);
    $this->db->from($tab_name);
    $this->db->limit(100);
    $this->db->where($condition);
    $query = $this->db->get();
    $q = $query->result_array();
    if(isset($q)&&sizeof($q)>0)
    { 
      return $q['0'][$coloumn];
    }
    else
    {   
      return ;
    }
   } 

###################################################################################################################################
      
   public function can_see_assign_menu()
   {
      $menu_id = $this->getDataSingle('sidemenu', 'id' ,array('page_query_string'=>'admin/assign_menu'));

      $page_assign = $this->getDataSingle('menu_user','comma_seperated_menu_ids',array('user_id'=>$this->session->user_id));

      $all_page = explode(',',$page_assign);

      if(in_array($menu_id,$all_page))
      {
        return 1;
      }
      else
      {
        return 0;
      }

   }


####################################################################################################################################

   public function get_all_page()
   {
      $all_page = $this->getData('sidemenu',array());
      return $all_page;
   }




#####################################################################################################################################

   public function get_all_assign_page_id($user_id = '')
   {
        $page_assign = $this->getDataSingle('menu_user','comma_seperated_menu_ids',array('user_id'=>$user_id));
        if(isset($page_assign))
        {
           $all_page = explode(',',$page_assign);  
        }
        else
        {

          $all_page = array();
        }
        return $all_page;
   }

#########################################################################################################################################

   public function get_user_list()
   {
      $query = $this->getData('users',array('company_id'=>$this->session->company_id));
      if(isset($query))
      {
        return $query;
      }
      else
      {
        return array();
      }
   }
#########################################################################################################################################
   
   public function get_all_project($condition=array())
   {
              $this->db->select('projects.*,project_type.project_type,project_type.is_active,project_type.id as project_type_id');
              $this->db->join('project_type','project_type.id=projects.type_of_project','left');
              $this->db->order_by('created_on','desc');
              $this->db->order_by('updated_on','desc');
              $this->db->where($condition);
              $this->db->limit(100);
              $this->db->from('projects');
     $query = $this->db->get();
     return $query->result_array();

   }

#########################################################################################################################################

   public function get_all_table()
   {
              $query = $this->db->select('table_name')
                       ->from('information_schema.tables')
                       ->where('table_type','base table')
                       ->where('table_schema','da_projects_db')
                       ->get();
              return $query->result_array();
   }   


#####################################################################################################################################
            // update create project

        public function validateUser($table_name,$colname,$colvalue)
        {
                 $this->db->like($colname,$colvalue);
                 $this->db->where('company_id',$this->session->company_id);
                 $query=$this->db->get($table_name);
          return $query->result_array(); 
           
        }
######################################################################################################################################

        public function getUserType()
        {
          $user_level = $this->getDataSingle('user_type','user_level',array('user_type'=>$this->session->user_type));
          $query = $this->db->where('company_id',$this->session->company_id)
                            ->where(array('user_level <='=>$user_level,'user_level <'=>3))
                            ->from('user_type')
                            ->get();
          return $query->result_array();
        }

######################################################################################################################################

        public function getUserDeatil()
        {
                   $superadmin = $this->getDataSingle('user_type','user_type',array('user_level'=>3));
                   //echo $superadmin;exit;
                   $admin = $this->getDataSingle('user_type','user_type',array('user_level'=>2));
                   $this->db->select('projects.project_name,users.*,company_master.company_name');
                   $this->db->where('users.company_id',$this->session->company_id);
                   $this->db->join('projects','users.project_id=projects.id','left');
                   $this->db->join('company_master','users.company_id=company_master.id','left');
                   if($this->session->user_type==$superadmin)
                   {
                       $this->db->where(array('users.user_type !='=>$superadmin));
                   }
                   else if($this->session->user_type==$admin)
                   {
                      $this->db->where(array('users.user_type !='=>$superadmin));
                   }
                   else
                   {
                     $this->db->where_not_in('users.user_type',array($superadmin,$admin));
                   }
                   $this->db->order_by('users.created_on','desc' );
          $query = $this->db->get('users');
          return $query->result_array();
        }

#########################################################################################################################################

        public function getProjectCharter()
        {
          $superadmin = $this->getDataSingle('user_type','user_type',array('user_level'=>3));
          $admin = $this->getDataSingle('user_type','user_type',array('user_level'=>2));
          $this->db->select('project_charter.*,projects.project_name');
          $this->db->where('project_charter.company_id',$this->session->company_id);
           if($this->session->project_id!='')
           {
              $this->db->where('project_charter.project_id',$this->session->project_id);
           }
           $this->db->join('projects','projects.id=project_charter.project_id','left');
           $query = $this->db->get('project_charter');
           return $query->result_array();
       }

}