<?php
class commonModel extends Model{
    function useradd($add){
      return $this->db ->insert($add);//mysql类中的方法。
    }
    function query($que){//执行sql语句操作
      return $this -> db ->query($que); //执行操作后，必须返回。
    }
    function fetch_array($fet){
      return $this ->db ->fetch_array($fet);
       
    }
}








