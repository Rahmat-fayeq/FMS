<?php
	require_once('conn.php');

class model	
{
	public function insert_all($con,$tb,$data)
	{
		$keys=array_keys($data);
		$rkeys=implode(',', $keys);
		$vals=array_values($data);
		$rvals=implode("','", $vals);
		$ins="insert into $tb($rkeys) values('$rvals')";
        //echo $ins;
        //exit;
		$res=$con->query($ins);
		return $res;
	}

	public function select_all($con,$tb)
	{
		$sel="select * from $tb";
		$res=$con->query($sel);
		while($r=$res->fetch_object())
		{
			$arr[]=$r;
		}
		return $arr;
	}


	 public function select_where($con,$tb,$where)
    {
        $key=array_keys($where);
        $val=array_values($where);
        $s="select * from $tb where 1=1";
        $i=0;
        foreach($where as $w)
        {
            $s.=" AND $key[$i]='$val[$i]'";
            $i++;
        }
        //echo $s;
        //exit;
        $res=$con->query($s);

        return $res;
    }

    public function update_all($con,$tb,$data,$where)
    {
        $key=array_keys($data);
        $val=array_values($data);
        $up="update $tb set";
        $i=0;
        $count=sizeof($data);
        foreach($data as $d)
        {
            if($count==$i+1)
            {
                $up.=" $key[$i]='$val[$i]'";
            }
            else{
                $up.=" $key[$i]='$val[$i]',";
            }
            $i++;
        }
        $up.="where 1=1";
        $wkey=array_keys($where);
        $wval=array_values($where);
               $j=0;
        foreach($where as $w)
        {
              $up.=" AND $wkey[$j]='$wval[$j]'";
              $j++;
        }
             $res=$con->query($up);
              return $res;
    }

    public function delete_all($con,$tb,$where)
    {
        $keys=array_keys($where);
        $vals=array_values($where);
        $del="delete from $tb where 1=1";
        $i=0;
        foreach ($where as $w) 
        {
            $del.=" AND $keys[$i]='$vals[$i]'";
            $i++;
        }
        $res=$con->query($del);
        return $res;
    }

}
?>