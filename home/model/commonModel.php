<?php
class commonModel extends Model{
    function useradd($add){
      return $this->db ->insert($add);//mysql���еķ�����
    }
    function query($que){//ִ��sql������
      return $this -> db ->query($que); //ִ�в����󣬱��뷵�ء�
    }
    function fetch_array($fet){
      return $this ->db ->fetch_array($fet);
       
    }
}








