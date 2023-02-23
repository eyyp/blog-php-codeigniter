<?php
   class Vt extends CI_Model
   {
       public function logincontrol($uname,$password)
       {
          $result = $this->db->select('*')
          ->from('users')
          ->where('uname',$uname)
          ->where('password',$password)
          ->get()
          ->row();

          if( $result == NULL)
          {
              return false;
          }
          else
          {
              return $result;
          }
       }
       public function abone($email)
       {
            $result = $this->db->insert('abone',$email);
            return $result;
       }
       public function postsdbinsert($data=array())
       {
          $result = $this->db->insert('posts',$data);
          return $result;
       }
       public function post($link)
       {
            $result = $this->db->select('*')
            ->from('posts')
            ->where('postslink',$link)
            ->get()
            ->row();
            if($result != NULL)
            {
            return $result;
            }
            else
            { 
                return false;
            }
       }
       public function allposts($per,$segment)
       {
           $result = $this->db
           ->select('*')
           ->from('posts')
           ->order_by("createDate","DESC")
           ->limit($segment,$per)
           ->get()
           ->result();
           return $result;
       }
       public function allpostsadmin()
       {
           $result = $this->db
           ->select('*')
           ->from('posts')
           ->order_by("createDate","DESC")
           ->get()
           ->result();
           return $result;
       }

       public function postsdelete($id)
       {
          $result = $this->db->delete('posts',array('id'=>$id)); 
          return $result;
       }
       public function categorysdelete($id)
       {
          $result = $this->db->delete('categorys',array('id'=>$id)); 
          return $result;
       }
       
       public function oneposts($id)
       {
           $result = $this->db->select('*')->from('posts')->where('id',$id)->get()->row();
           return $result; 
       }

       public function postsedit($data,$id)
       {
          $result = $this->db->update('posts',$data,array('id'=>$id));
          return $result;
       }

       public function onecategory($id)
       {
        $result = $this->db->select('*')->from('categorys')->where('id',$id)->get()->row();
        return $result;
       }
       
       public function categorysedit($data,$id)
       {
          $result = $this->db->update('categorys',$data,array('id'=>$id));
          return $result;
       }


       public function postscount()
       {
           $result = $this->db->select('id')
           ->from('posts')
           ->count_all_results();

           return $result;
       }
    
       public function allCategory()
       {
            $result = $this->db->select('*')
            ->from('categorys')
            ->get()
            ->result();

            if( $result == NULL)
            {
                return false;
            }
            else
            {
                return $result;
            }
        }
        public function categoryCount()
        {            
            $result = $this->db->select('*')
            ->from('categorys')
            ->get()
            ->result();

            if( $result == NULL)
            {
                return false;
            }
            else
            {
                return $result;
            }
        }
        function catorgy()
        {         
            $this->load->model('vt');
            $catogorys = $this->vt->allcatogory();
            foreach($catogorys as $row)
            {

                 
            }
        }

        public function categoryinsert($data)
        {
             $result = $this->db->insert('categorys',$data);
             return $result;
        }

        public function navbarset($data)
        {
            $result = $this->db->update('navbar',$data,array('id'=>1));
          return $result;
        }

        public function navbarget()
        {
            $result = $this->db->select('*')
            ->from('navbar')
            ->get()
            ->result();

            if( $result == NULL)
            {
                return false;
            }
            else
            {
                return $result;
            }
        }

        public function allAdvertisement()
        {
            $result = $this->db->select('*')
            ->from('advertisement')
            ->where('situation',"Aktif")
            ->get()
            ->result();

            if( $result == NULL)
            {
                return false;
            }
            else
            {
                return $result;
            }
        }

        function postscategoryedit($name1,$name2=array())
        {
          $result = $this->db->update('posts',$name2,array('categories'=>$name1));
          return $result;
        }

        public function categorylist($categoryName)
        {
            $result = $this->db->select('*')
            ->from('posts')
            ->where('categories',$categoryName)
            ->get()
            ->result();
            if($result == NULL )
            {
                return false;
            }
            else
            {
                return $result;
            }
        }
        public function allRecommendation()
        {
            $result = $this->db->select('*')
            ->from('recommendation')
            ->get()
            ->result();

            if( $result == NULL)
            {
                return false;
            }
            else
            {
                return $result;
            }
        }

        public function messageSend($data)
        {
            $result = $this->db->insert('messages',$data);
            return $result;
        }

        function allMessages()
        {
            $result = $this->db->select('*')
            ->from('messages')
            ->order_by('readmessage',"DESC")
            ->get()
            ->result();
            if( $result == NULL)
            {
                return false;
            }
            else
            {
                return $result;
            }
        }

        public function readmessage()
       {
          $this->db->update('messages',['readmessage'=>'false'],array('readmessage'=>'true'));
       }

   }