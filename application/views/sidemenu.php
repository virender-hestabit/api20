<div class="sidebar-nav">
      
        <?PHP
          $user_id = $this->session->user_id; 
          $menu  =  $this->Database_conn2->get_menu_tree('sidemenu',$user_id,'',0);
          echo $menu;
          ?>

    </div>