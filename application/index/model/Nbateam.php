<?php 
namespace app\index\model;
use think\Model;

class Nbateam extends Model
{
	protected $table = DB_NBATEAM_TAB;
	
	public function _get_team_info()
	{
		$field = [DB_NBATEAM_NAME,DB_NBATEAM_WIN,DB_NBATEAM_LOSE,DB_NBATEAM_PARTITION];
		$where[DB_NBATEAM_WIN] = ['elt',20];
		$where[DB_NBATEAM_LOSE] = ['egt',20];
		$order = [DB_NBATEAM_WIN => 'asc', DB_NBATEAM_ID => 'desc'];
		$data = $this->limit(5)->field($field)->where($where)->order($order)->select();
		//$data = $this->max(DB_NBATEAM_WIN);
		//$data = $this->count();
		return $data;
	}
	
	public function _get_team_by_paginate()
	{
		return $this->paginate();
	}
	
}
?>