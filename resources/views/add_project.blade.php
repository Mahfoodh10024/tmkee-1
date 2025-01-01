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



    <div class="steps">
        <span class="circle active">1</span>
        <span class="circle">2</span>
        <span class="circle">3</span>
        <span class="circle">4</span>
        <div class="progress-bar">
          <span class="indicator"></span>
        </div>
      </div>



        <div class="add">
            @yield('form')
        </div>
        
</div>

    
</body>
</html>