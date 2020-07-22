<?php

class allfunctions {


    function connect()
    {
		mysql_connect("localhost","root","");
		mysql_select_db("logiio");
    }

    function insertdb() {
        $j = 0;
        $col = '';
        $val = '';
        $info = func_get_args();
        $num = func_num_args();

        $table = "`" . $info[0] . "`";

        for ($j = 1; $j < $num; $j++) {
            if (($j % 2) == 0) {
                $val = $val . "'" . $info[$j] . "',";
            }
            if (($j % 2) == 1) {

                $col = $col . "`" . $info[$j] . "`,";
            }
        }
        $val = rtrim($val, ",");
        $col = rtrim($col, ",");
        $query=mysql_query("insert into $table($col) values($val)");
        if($query!=0)
        {
            return "true";
        }
        else
        {
            return "false";
        }
    }
    
    function returnIP()
			{
				if(!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
   				{
      			$ip=$_SERVER['HTTP_CLIENT_IP'];
    			}
    			elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    			{
      			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    			}
    			else
    			{
      			$ip=$_SERVER['REMOTE_ADDR'];
    			}
				return $ip;
			}
//    function login($username,$password,$tablename)
//    {
//
//    $query=mysql_query("select * from ".$tablename." where name like '$username' and password like'$password'");
//    $row=mysql_num_rows($query);
//    return $row;
//   
//    }
}
?>
