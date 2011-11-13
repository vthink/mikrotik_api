#Mikrotik RouterOS API
This spark library for working with Mikrotik RouterOS API. The Library is developing 
from Denis Basta (denis.basta@gmail.com) routeros_api class and we change it to our
core class with name Mapi_Core. We have been tested with RouterOS version 3 and above.
This spark library allow you to manipulating your Mikrotik RouterOS, but in this version
there is much thing not have done yet. In the future release we will developing compelete
library for manipulation Mikrotik RouterOS.

Support In Version 0.5.0

   * IP Address
   * IP Accounting
   * IP ARP
   * IP DHCP Client
   * IP DHCP Relay
   * IP DHCP Server
   * IP DNS
   * IP Pool
   * IP Firewall
   * IP Hotspot
   * IP Route
   * IP Service
   * Interface Bonding
   * Interface Eoip
   * Interface Ethernet
   * Interface IpIp
   * Interface PPPOE Client
   * Interface PPPOE Server
   * Interface VLAN
   * Interface VRRP
   * PPP AAA
   * PPP Active
   * PPP Profile
   * PPP Secret
   * System
   * File

##Documentation
We still build documentation for this spark library, 
so to get update information about documentation and spark libary update 
please go to our site at  http://vthink.web.id/index.php/content/categories/21. 
And to know more about Mikrotik RouterOS API Manual
you can go to site at  http://wiki.mikrotik.com/wiki/Manual:API


##Requirement
This spark library need minimum requirement for doing well on run.

    * CodeIgniter       : version 2.0.3
    * PHP               : version 5.2.x and above
    * Mikrotik RouterOS : version 3.xx and above

##Instalation
For Install this spark, open your terminal and write down this command

    php tools/spark install mikrotik_api -v0.5.0

##Configuration
You need to define your connection and authentication information in config file.<br>
The config file is located in sparks/mikrotik_api/0.5.0/config/mikrotik.php

    $config['mikrotik']['host']         = '192.168.88.1';
    $config['mikrotik']['port']         = '8728';
    $config['mikrotik']['username']     = 'admin';
    $config['mikrotik']['password']     = '';
    $config['mikrotik']['debug']        = FALSE;
    $config['mikrotik']['attempts']     = 5;
    $config['mikrotik']['delay']        = 2;
    $config['mikrotik']['timeout']      = 2;

Descriptions:

    $config['mikrotik']['host']         = '192.168.88.1'; --> ip address or domain of your Mikrotik RouterOS
    $config['mikrotik']['port']         = '8728'; --> port of your Mikrotik RouterOS API service 
    $config['mikrotik']['username']     = 'admin'; --> username of your Mikrotik RouterOS
    $config['mikrotik']['password']     = ''; --> password of your Mikrotik RouterOS 
    $config['mikrotik']['debug']        = FALSE; --> if TRUE, the library will write the output of your command
    $config['mikrotik']['attempts']     = 5; --> how many times the library will attempt a connection before declare Connection Error
    $config['mikrotik']['delay']        = 2; --> how long delay between attempt a new connection
    $config['mikrotik']['timeout']      = 2; --> how long the library will declare a timeout when there is no response from Mikrotik RouterOS 


##Run
Okey, if you have finished yet to configure, lets try this code

    class Test extends CI_Controller {
        function __construct() {
            parent::__construct(); 
            $this->load->spark('mikrotik_api/0.5.0');
        }

        public function index(){
            $test = $this->mikrotik_api->ip()->address()->get_all_address();
            print_r($test);
        }

    }


##Bugs
Please send us email when you got bugs or some idea for this spark library
    * nunenuh@gmail.com
    * krisna.pranata@gmail.com
