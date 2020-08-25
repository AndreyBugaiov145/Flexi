<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<script>

    let mass = [1, 5, 3, 5, 5, "dsfsd"];
    let obj = {
        name: "Andrey",
        age: 27,
        x: 15,
        text: "task23"
    }
    console.log(mass.length, Object.keys(obj).length);


    function elemFromArguments() {
        for (var i = 0; i < arguments.length; i++) {
            console.log(arguments[i])
        }
    }

    elemFromArguments(1, 52, 6, 4);


    function perebor(arg) {
        let i = 0;
        if (Array.isArray(arg)) {
            arg.splice(3, 1);
        } else {
            delete arg[Object.keys(obj)[3]];
        }

        for (a in arg) {
            console.log(arg[a]);
        }
        console.log("длина обьекта=", arg.length ? arg.length : Object.keys(arg).length);
    }

    perebor(obj)


    var key = 'DYNAMIC_KEY',
        two = 'NEXT_KEY',
        obj2 = {
            [key]: '12312312!',
            [two]: 'asdsadsad'
        };

    function create(obj, key, val) {
        obj[key] = val;
    }

    create(obj2, "asdas", "12312321")
    console.log(obj2);
</script>
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;top:0;">Вернуться к списку заданий</a>
</body>
</html>