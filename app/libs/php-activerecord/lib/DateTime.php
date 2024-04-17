<?php
namespace ActiveRecord;

class DateTime extends \DateTime
{
	private $model;
	private $attribute_name;

	public function attribute_of($model, $attribute_name)
	{
		$this->model = $model;
		$this->attribute_name = $attribute_name;
	}

	private function flag_dirty()
	{
		if ($this->model)
			$this->model->flag_dirty($this->attribute_name);
	}

	public function setDate($year,$month,$day): DateTime	
	{
		$this->flag_dirty();
		parent::setDate($year, $month, $day);
		return $this;
	}
	
	public function setISODate($year, $week, $day = 1): DateTime
	{
		$this->flag_dirty();
		parent::setISODate($year, $week, $day);
		return $this;
	}
	
	public function setTime($hour, $minute, $second = 0, $microsecond = 0): DateTime
	{
		$this->flag_dirty();
		parent::setTime($hour, $minute, $second, $microsecond);
		return $this;
	}
	

	public function setTimestamp($unixtimestamp): DateTime
		{
			$this->flag_dirty();
			parent::setTimestamp($unixtimestamp);
			return $this; // Devolver la instancia actual, que es del tipo ActiveRecord\DateTime
		}
}
?>