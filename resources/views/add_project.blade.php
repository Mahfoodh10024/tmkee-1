<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/add_project.css' , 'resources/js/app.js'])


    <title>New project</title>



</head>
<body>


        
        <div class="progress">
            <div id="l1" class="p1">1</div>
            <div id="l2" class="p2">2</div>
            <div id="l3" class="p3">3</div>
            <div id="l4" class="p4">4</div>
        </div>


        <div class="add">
            @yield('form')
        </div>
        
</div>

    
</body>
</html>