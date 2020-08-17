<?php

require 'config.php';
require 'bdConect.php';
	$sth=$dbh->prepare("INSERT INTO `task29`(`ip`) VALUES (:ip)");
	$r =$sth->execute(array('ip'=>$_SERVER['REMOTE_ADDR']));
	$dbh = null;
	echo $_SERVER['HTTP_REFERER'];
	$badSite = array('http://3.testsite.co.ua/task29_site2_page2.php','http://3.testsite.co.ua/task29_site2_page1.php');
	/*$badSite = array('http://andreybugaiov.loc/task29_site2_page2.php','http://3.testsite.co.ua/task29_site2_page1.php');*/
	$status ;
	if(isset( $_SERVER['HTTP_REFERER'])){
		foreach ($badSite as $value ) {
			if($value === $_SERVER['HTTP_REFERER']){
				$status = true;
			}
		}
	}
	if ($status) {
		header ( 'Location: ', 'TRUE' , '403' ) ;
	}
//phpinfo();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body>
    <header>
	  <div class="bg-dark collapse" id="navbarHeader" style="">
	    <div class="container">
	      <div class="row">
	        <div class="col-sm-8 col-md-7 py-4">
	          <h4 class="text-white">About</h4>
	          <p class="text-muted">Создать два сайта.
Один должен всегда сохранять в базу адрес с которого пришел клиент. Данный параметр можно найти в глобальной переменной сервер.
На втором сайте нужно создать три, четыре, любое произвольное количество страниц и ссылку на на первый сайт.
Заблокировать посещение сайта с определённые ссылки (если видим что пользователь пришел с такой страницы).
Должен быть соответствующий статус в header и определённый контент, что доступ закрыт с данной ссылки. Если заходим с другой, контент нормальный.
</p>
	        </div>
	       
	      </div>
	    </div>
	  </div>
	  <div class="navbar navbar-dark bg-dark shadow-sm">
	    <div class="container d-flex justify-content-between">
	    	<?php if($status) :?>
	    	<h2 style='color:red'>Доступ к сайту ограничен</h2>
	    	<? endif;?> 
	    	<span style='color:white'><?='IP = '.$_SERVER['REMOTE_ADDR']?></span>
	      <a href="#" class="navbar-brand d-flex align-items-center">
	        
	        <strong><a href="http://3.testsite.co.ua/task29_site2.php">Bugaiov</a></strong>
	      </a>
	      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	    </div>
	  </div>
	</header>
	
	<main role="main">
		<?php if($status) :?>
	    	<section class="jumbotron text-center">
		    <div class="container">
		      <h1>Сайт запоминает ваш ip адрес</h1>
		      <p class="lead text-muted">Доступ к сайту закрыт. Попробуйте воспользоваться другой ссылкой </p>
		 
		    </div>
		  </section>
	    <? exit();endif ; ?> 

	  <section class="jumbotron text-center">
	    <div class="container">
	      <h1>Сайт запоминает ваш ip адрес</h1>
	      <p class="lead text-muted">должен всегда сохранять в базу адрес с которого пришел клиент. Данный параметр можно найти в глобальной переменной сервер. </p>
	 
	    </div>
	  </section>

	  <div class="album py-5 bg-light">
	    <div class="container">

	      <div class="row">
	        <div class="col-md-4">
	          <div class="card mb-4 shadow-sm">
	            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
	            <div class="card-body">
	              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	              <div class="d-flex justify-content-between align-items-center">
	                <div class="btn-group">
	                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
	                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
	                </div>
	                <small class="text-muted">9 mins</small>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4">
	          <div class="card mb-4 shadow-sm">
	            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
	            <div class="card-body">
	              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	              <div class="d-flex justify-content-between align-items-center">
	                <div class="btn-group">
	                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
	                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
	                </div>
	                <small class="text-muted">9 mins</small>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4">
	          <div class="card mb-4 shadow-sm">
	            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
	            <div class="card-body">
	              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	              <div class="d-flex justify-content-between align-items-center">
	                <div class="btn-group">
	                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
	                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
	                </div>
	                <small class="text-muted">9 mins</small>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>

	</main>

	<footer class="text-muted">
	  <div class="container">
	    <p class="float-right">
	      <a href="#">Back to top</a>
	    </p>
	    <p>Album example is © Bootstrap, but please download and customize it for yourself!</p>
	    <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.5/getting-started/introduction/">getting started guide</a>.</p>
	  </div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>