<?php

class htmlHelper
{
	public function NewLink($pageName)
	{
		print '<a href="?p='.$pageName.'_new" class="newEntry">New Entry</a>';	
	}
	
	
	public function validImage($name)
	{
		$a = explode(".", $name);
		if(count($a) < 2)
			return false;
		$ext = strtolower($a[count($a) - 1]);
		if($ext == "jpg" || $ext == "png" )
			return true;
		return false;	
	}
	
	public function validFile($name)
	{
		$a = explode(".", $name);
		if(count($a) < 2)
			return false;
		$ext = strtolower($a[count($a) - 1]);
		if($ext == "doc" || $ext == "docx" || $ext == "pdf")
			return true;
		return false;	
	}
	
	
	public function BeginForm($s = "",$leg="New Entry Form")
	{
		print '<form method="post" action="" '.$s.' >
				<fieldset>
				<legend>'.$leg.'</legend>';	
	}
	
	public function FieldText($name, $value)
	{
		print '
<input type="text" class="form-control col-sm-4" placeholder="'.ucwords($name).'" name="'.$name.'" id="'.$name.'" value="'.$value.'" autofocus/>';		
	}
	
	public function FieldDate($name, $value)
	{
		print '
<input type="date" class="form-control col-sm-4" name="'.$name.'" id="'.$name.'" value="'.$value.'" autofocus/>';		
	}
	
	public function FieldPassword($name)
	{
		print '
<input type="password" placeholder="'.ucwords($name).'" class="form-control col-sm-4" name="'.$name.'" id="'.$name.'"/>';		
	}
	
	public function FieldRadio($lebel="",$name, $value)
	{
		print '<label class="star">'.ucwords($lebel).'  </label>
<input class="star" type="radio" name="'.$name.'" id="'.$name.'" value="'.$value.'"/> '.$value."  ";		
	}
	
	public function FieldFile($name)
	{
		print '<label>'.ucwords($name).'</label><br>
<input class="form-control"  type="file" name="'.$name.'" id="'.$name.'"/>';		
	}
	
	public function FieldTextArea($name, $value)
	{
		print '
<textarea class="form-control col-sm-6" placeholder="'.ucwords($name).'"  name="'.$name.'" id="'.$name.'">'.$value.'</textarea>';		
	}
	
	public function FieldSelect($name, $option)
	{
		print '<label>'.ucwords($name).'</label><br>
			<select class="form-control"  name="'.$name.'" id="'.$name.'">
			<option value="0">Select</option>'.$option.'</select>';	
	}
	
	public function Error($value)
	{
		print '<span class="error">'.$value.'</span>';	
	}
	
	public function BreakLine()
	{
		print '<br><br>';	
	}
	
	public function EndForm($name="submit", $value="Insert")
	{
		print '<input  class="btn btn-lg btn-primary btn-block" 
 type="submit" name="'.$name.'" value="'.$value.'"/>
				</fieldset>
				</form>';	
	}
	
}



?>