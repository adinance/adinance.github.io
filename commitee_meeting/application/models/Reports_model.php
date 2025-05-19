<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reports_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function access_list() {

        $result = $this->db->query('

           /*     select distinct

                    cm_users.id,
                    cm_logs.source_ip as ip,
                    cm_users.name as users,
                    cm_permissions.permission,
                    cm_users.last_login,
                    cm_users.last_logout

            from cm_users 
            inner join cm_logs on cm_users.username = cm_logs.username
            inner join cm_permissions on cm_users.permission = cm_permissions.id

            order by last_login desc, last_logout desc

            */

          select distinct a.* -- , cm_users.last_ip as ip
from (

						select distinct

                    cm_users.id,
                --    cm_logs.source_ip as ip,
										cm_users.name as username,
                    cm_users.name as users,
										cm_users.last_ip as ip,
                    cm_permissions.permission,
                --    cm_users.last_login,
                --    cm_users.last_logout
                    DATE_FORMAT(cm_users.last_login, \'%Y-%m-%d %H:%i\') AS last_login,
                    DATE_FORMAT(cm_users.last_logout, \'%Y-%m-%d %H:%i\') AS last_logout

            from cm_users 
            inner join cm_logs on cm_users.username = cm_logs.username
            inner join cm_permissions on cm_users.last_permission = cm_permissions.id

            order by last_login desc, last_logout desc


) as a

left join cm_logs on a.username = cm_logs.username


        ');
      
        return $result->result();

    }


    public function activity_list() {

        $result = $this->db->query('

             select 
                    -- cm_logs.time,
                    DATE_FORMAT(cm_logs.time, \'%Y-%m-%d %H:%i\') AS time,
                    cm_users.id,
                    cm_logs.source_ip as source,
                    cm_logs.destination_ip as destination,
                    cm_users.name as users,
                    cm_permissions.permission,
                    cm_logs.action,
                    cm_logs.user_agent as ua
                    

            from cm_users 
            inner join cm_logs on cm_users.username = cm_logs.username
            inner join cm_permissions on cm_users.permission = cm_permissions.id

            order by time desc

        ');
      
        return $result->result();

    }





}