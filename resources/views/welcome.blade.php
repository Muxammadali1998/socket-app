<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div> Hello ali</div>

<script>
        Echo.channel('public-chanel')
            .listen('PublicEvent', (e)=>{
                console.log(e)
            })
</script>
</body>
</html>
