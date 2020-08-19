<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<script>

		let mass = [1,5,3,5,5,"dsfsd"];
		let obj = {
			name : "Andrey",
			age : 27,
			x:15,
			text:"task23"
		}
		console.log(mass.length,Object.keys(obj).length);


		function function_name() {
			for (var i = 0; i < arguments.length; i++) {
				console.log( arguments[i])
			}
		}
		function_name(1,52,6,4);


		function perebor(arg) {
			let i =0;
			if(Array.isArray(arg)){
					arg.splice(3,1);
				}else{
					delete arg[Object.keys(obj)[3]];

				}

			for(a in arg){
					i===3? delete arg[a]:true;
					console.log(arg[a]);
					i++;
			}


			console.log("длина обьекта=",arg.length?arg.length:Object.keys(arg).length);
		}
		perebor(obj)


		var key = 'DYNAMIC_KEY',
		 	two = 'NEXT_KEY',
		    obj2 = {
		        [key]: '12312312!',
		        [two]:'asdsadsad'
		    };

		 function create(obj,key,val) {
		    	obj[key]=val;
		    }   
		    create(obj2,"asdas","12312321")
		console.log(obj2);
	</script>
	
</body>
</html>