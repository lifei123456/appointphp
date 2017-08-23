<?php
/**
 * Created by PhpStorm.
 * User: zhengwei
 * Date: 2017/4/12
 * Time: 下午10:42
 */

class mysqlDb{
    private $link;

    public function __construct(){
        $this->link=new PDO('mysql:host=localhost;dbname=appoint', 'root', 'WEIwei66291');
        $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->link->exec('set names utf8');
    }

    public function addNew($userid,$title,$content="",$srctype,$data,$tableName='info') {
        $addtime=time();
        $sql="insert into `$tableName` (`userid`, `title`, `content`, `addtime`, `srctype`, `data`) VALUES ('$userid','$title','$content','$addtime','$srctype','$data')";
//        $test=$this->link->exec($sql);
        return $this->link->exec($sql);
    }

    public function getNewId($userid) {
        $sql = "select * from `info` where `userid`='$userid' order by `addtime` desc limit 1";
//        file_put_contents("../test.txt",$sql.PHP_EOL,FILE_APPEND);
        $rs=$this->link->query($sql);
        $rs->setFetchMode(PDO::FETCH_ASSOC);
        $res = $rs->fetch();
        return $res['id'];
    }

    public function getAllInfo($userid) {
        $sql = "select * from `info` where `userid`='$userid'";
        $rs=$this->link->query($sql);
        $rs->setFetchMode(PDO::FETCH_ASSOC);
        return $rs->fetchAll();
    }

    public function getAllReply($userid) {
        $sql = "select * from `info` where `userid`='$userid'";
        $rs=$this->link->query($sql);
        $rs->setFetchMode(PDO::FETCH_ASSOC);
        return $rs->fetchAll();
    }

    public function getOneInfo($id) {
        $sql = "select a.*,b.name from `info` as a , `user` as b where a.userid = b.userid and a.id='$id'";
        $rs=$this->link->query($sql);
        $rs->setFetchMode(PDO::FETCH_ASSOC);
        return $rs->fetch();
    }

    public function getCount($userid,$tableName='info') {
        $sql = "select count(*) as count from `$tableName` where `userid`='$userid'";
        $rs=$this->link->query($sql);
        $rs->setFetchMode(PDO::FETCH_ASSOC);
        $res = $rs->fetch();
        return $res['count'];
    }

    public function addNewUser($userid,$name) {
        $addtime=time();
        $sql="insert into `user` (`userid`, `name`, `creatime`) VALUES ('$userid','$name','$addtime')";
        return $this->link->exec($sql);
    }
}

?>



