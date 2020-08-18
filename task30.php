<?php
	require 'config.php';
	require 'bdConect.php';
	$row =$dbh->query("SELECT * FROM `task30`  ");
	$rez = $row->fetchAll(PDO::FETCH_ASSOC);
	function print_arr($arr)
	{
		echo "<pre>".print_r($arr,true)."</pre>";
	}
	function map_tree($arr)
	{
		$tree = array();
		foreach($arr as $id => &$node){
			if (empty($node['parent_id'])) {
				$tree[$id+1] = &$node ;
			}else{
				$arr[$node['parent_id']-1]['childs'][$id] = &$node;
			}
		}
		return $tree;
	}
	$category = map_tree($rez);
	function Vue($category)
	{	
		foreach($category as $value){
			echo "<li lass='box'>".$value['category'];
			if(isset($value['childs'])){
				echo "<ul class='hide box'>";
					echo Vue($value['childs']);
				echo "</ul>";
			}
			echo "</li>";
		}
		return;
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>task30</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
	<!-- <link rel="stylesheet" href="css/main.css">-->
	<script src="js/jquery-3.4.0.js"></script>
	<style>
		.hide{
			display: none;
		}
		.filter{
			width: 400px;

		}
	</style>
</head>
<body>
	<!-- <div class="filter">
		<form action="">
			<div class="form-group form ">
				<select name="select" id="select" class="form-control form-control-sm">
					<?php foreach($category as $val):?>
						<option value="<? echo $val['id']?>"><? echo $val['category']?></option>
					<?php endforeach;?>
				</select>
			</div>
			<div class="form-group form ">
				<select name="select"  class="form-control form-control-sm">
					<?php foreach($category[1]['childs'] as $val):?>
						<option value="<? echo $val['id']?>"><? echo $val['category']?></option>
					<?php endforeach;?>
				</select>
			</div>	
			<div class="form-group form ">
				<input type="submit" class="btn btn-success">
			</div>
		</form>
	</div> -->

<ul class="box">
	<?=Vue($category)?>
</ul>





	<script>
		let elem = document.querySelectorAll('.box');
		elem.forEach((e)=>{
			e.addEventListener('click',show_hide,false)
		})
		function show_hide(e) {
			e.stopPropagation();
			let arr =[...e.target.children[0].classList];
			if (arr.includes('hide')) {
				e.target.children[0].classList.remove('hide');
			}else {
				e.target.children[0].classList.add('hide')
			}
		}
		/*let select = $("#select").on('change', foo);
		
		function foo() {
			let r = $("#select :selected").val()
			
		}*/
	</script>
</body>
</html>