<?php
/**
 * Description of Mapi_Ip_Hotspot
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ip_Hotspot  extends Mapi_Query{
    /**
     *
     * @var type array
     */
    private $param;
    
    function __construct($param) {
        $this->param = $param;
        parent::__construct($param);
    }
    
    /**
     * This method is used to add the user hotspot
     * @param type $param array
     * @return type array
     * 
     */
   public function add_hotspot_user($param){
        $input = array(
            'command'       => '/ip/hotspot/user/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to disable user hotspot by id
     * @param type $id string
     * @return type array
     * 
     */
    public function disable_hotspot_user($id){
        $input = array(
            'command'       => '/ip/hotspot/user/disable',
            'id'            => $id
        );
        return $this->query($input);        
    }
    
    /**
     * This method is used to activate the user hotspot by id
     * @param type $id string
     * @return type array
     * 
     */
    public function enable_hotspot_user($id){
        $input = array(
            'command'       => '/ip/hotspot/user/enable',
            'id'            => $id
        );
        return $this->query($input); 
    }
    
    /**
     * This method is used to change users hotspot based on the id
     * @param type $param array
     * @param type $id string
     * @return type array
     * 
     */
    public function set_hotspot_user($param, $id){
        $input = array(
                    'command'   => '/ip/hotspot/user/set',
                    'id'        => $id
        );
        $out=array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to remove the user hotspot by id
     * @param type $id string
     * @return type array
     * 
     */
    public function delete_hotspot_user($id){
         $input = array(
                   'command'    => '/ip/hotspot/user/remove',
                   'id'         => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to display
     * all users hotspot
     * @return type array
     * 
     */
    public function get_all_hotspot_user(){
         return $this->query('/ip/hotspot/user/getall');
    }
    
    /**
     * This method is used to display one user hotspot 
     * in detail based on the id
     * @param type $id string
     * @return type array
     * 
     */
    public function detail_hotspot_user($id){
        $input = array(
                   'command'    => '/ip/hotspot/user/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to display
     * all hotspot
     * @return type array 
     * 
     */
    public function get_all_hotspot(){
        return $this->query('/ip/hotspot/getall');
    }
    
    /**
     * This method is used to activate the hotspot by id
     * @param type $id string
     * @return type array
     * 
     */
     public function enable_hotspot($id){
        $input = array(
                    'command'       => '/ip/hotspot/enable',
                    'id'            => $id
        );
        return $this->query($input);
    }
    
     /**
     * This method is used to disable hotspot by id
     * @param type $id string
     * @return type array
     * 
     */
     public function disable_hotspot($id){
        $input = array(
                    'command'       => '/ip/hotspot/disable',
                    'id'            => $id
        );
        return $this->query($input);
    }
    
     /**
     * This method is used to remove the hotspot by id
     * @param type $id string
     * @return type array
     * 
     */
     public function delete_hotspot($id){
        $input = array(
                   'command'    => '/ip/hotspot/remove',
                   'id'         => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to change hotspot based on the id
     * @param type $param array
     * @param type $id string
     * @return type array
     * 
     */
      public function set_hotspot($param, $id){
        $input = array(
                    'command'   => '/ip/hotspot/set',
                    'id'        => $id
        );
        $out=array_merge($input, $param);
        return $this->query($out);
    }     
    
    /**
     * This method is used to display one hotspot 
     * in detail based on the id
     * @param type $id string
     * @return type array
     * 
     */
     public function detail_hotspot($id){
        $input = array(
                   'command'    => '/ip/hotspot/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
    
    /**
     * This function is used to add hotspot
     * @return type array
     */
    public function setup_hotspot(){
        $input = array(
                    'command'       => '/ip/hotspot/add',
                    ''
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
}
