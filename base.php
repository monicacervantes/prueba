<?php
class mysqlDB
{
	var $myserver = "localhost";
	var $myuser = "tziqejmy_tester";
	var $mypass = "tohoshinki13";
	var $mydb = "tziqejmy_test";
	var $rowstotal;
	var $connect;
	var $search;
	var $row = array();


	function mysqlDB() 
	{
	  $this->connect = mysql_connect($this->myserver, $this->myuser, $this->mypass);
	  mysql_select_db($this->mydb,$this->connect);		
	  if (!$this->connect) 
	  { 
		echo "[*CNT_SRV*]";
		exit;
	  }
	  return $this->connect;
	}

	function query($sqlstring) 
	{
	  $this->search = @mysql_query($sqlstring, $this->connect);
	  if(!$this->search)
	  {
		echo "[Q_Q]";
	  }
	  return $this->search;
	}


	function fetch()
	{
		if (isset($this->search)) 
		{
			return $this->row = @mysql_fetch_array($this->search);
		}
		else 
		{
			echo "[RW_ST]";
		}
    }
	
	function rows() 
	{
      $this->rowstotal = @mysql_num_rows($this->search);
	  return $this->rowstotal;
    }
}?>