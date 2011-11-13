<?php

/**
 * Description of Mapi_interface_Bonding
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interface_Bonding extends Mapi_Query {
    /**
     *
     * @var type array
     */
    private $param;
    
    function __construct($param ) {
        $this->param = $param;
        parent::__construct($param);
    }
    
    /**
     * This method is used to add interface bonding
     * @param type $param array
     * @return type array
     */
     public function add_bonding($param){
        $input = array(
                    'command'       => '/interface/bonding/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to display all interface bonding
     * @return type array
     */
     public function get_all_bonding(){
        return $this->query('/interface/bonding/getall');
    }
    
    /**
     * This method is used to enable interface bonding by id
     * @param type $id string
     * @return type array
     */
     public function enable_bonding($id){
        $input = array(
                    'command'       => '/interface/bonding/enable',
                    'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to disable interface bonding by id
     * @param type $id string
     * @return type array
     */
     public function disable_bonding($id){
        $input = array(
                    'command'       => '/interface/bonding/disable',
                    'id'            => $id
        );
        return $this->query($input);
    }
      
    /**
     * This method is used to set or edit interface bonding by id
     * @param type $param array
     * @param type $id string
     * @return type array
     */
      public function set_bonding($param, $id){
        $input = array(
                    'command'   => '/interface/bonding/set',
                    'id'        => $id
        );
        $out=array_merge($input, $param);
        return $this->query($out);
    }     
    
    /**
     * This method is used to display one interface bonding
     * in detail based on the id
     * @param type $id string
     * @return type array
     */
     public function detail_bonding($id){
        $input = array(
                   'command'    => '/interface/bonding/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
    /**
     * This method is used to delete interface vrrp by id
     * @param type $id string
     * @return type array
     */
     public function delete_vrrp($id){
        $input = array(
                   'command'    => '/interface/bonding/remove',
                   'id'         => $id
        );
        return $this->query($input);
    }
}