<?php

    // LDAP
    $server = "172.16.100.3"; //dc1-nu
    $ou = 'ou=CMO-Staff';
    $dc = 'dc=cm,dc=co,dc=th';
    $attribute = 'sAMAccountName';

    $connect = ldap_connect($server) or die ("<b>Error ldap_connect</b>");
    @ldap_set_option($connect, LDAP_OPT_PROTOCOL_VERSION, 2);
    @ldap_set_option($connect, LDAP_OPT_REFERRALS, 0);

    $username = 'adinan.h';
    $password = 'H@j1d@r?';

    $user = $username.'@cm.co.th';
    $dn=$ou.','.$dc; // $dn='uid='.$username.','.$ou.','.$dc; // $dn = "uid=netbeans1,ou=people,dc=example,dc=com";
    $cn='cn='.$username.',dc=cm,dc=co,dc=th';

    $bind = @ldap_bind($connect, $user, $password) ;

    if($bind){


    }eles{

    }
    

    
    @ldap_close($connect);
}

