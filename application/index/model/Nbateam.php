<?php 
namespace app\index\model;
use think\Model;
class Nbateam extends Model
{
	protected $table = 'nbateam';
	
	public function _get_team_info()
	{
		$data = $this->limit(5)->select();
		return $data;
	}
}
?>