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
		$str="";
		foreach($category as $value){
			$str.= "<li lass='box'>".$value['category'];
			if(isset($value['childs'])){
				$str.= "<ul class='hide box'>";
					$str.=Vue($value['childs']);
				$str.= "</ul>";
			}
			$str.= "</li>";
		}
		return $str;
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>task30</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
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
	<div class="container">
		<ul class="box">
			<?=Vue($category)?>
		</ul>
	</div>
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
	</script>
</body>
</html>