<?php 
namespace app\index\model;
use think\Model;

class News extends Model
{
	protected $table = DB_NEWS_TAB;
		
	public function saveInfo($data){
		$affectRow = $this->save($data);
		return $affectRow;
	}
	
	public function updateInfoByCondition($condition,$data){
		$affectRow = $this->where($condition)->update($data);
		return $affectRow;
	}
	
	public function deleteInfoByCondition($condition){
		$affectRow = $this->where($condition)->delete();
		return $affectRow;
	}
}
?>