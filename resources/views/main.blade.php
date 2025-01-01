<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    @vite(['resources/css/style.css' , 'resources/js/app.js'])
  
</head>
<body>
    
  
  <div class="frame-3">

    <div class="frame-6">
      <div class="frame-7">
        <div class="ar">AR</div>
        <img class="vector" src="Mainpage/vector0.svg" />
      </div>
      <img class="notification" src="Mainpage/notification0.svg" />
    </div>

    <div class="frame-39">
      <input type="text" name="" placeholder="إبحث" id="">  
      
      <a href="">
        <div class="sea">
          <img src="Mainpage/search.svg" alt="">
        </div>
      </a>
    </div>

    <img class="vector3" src="Mainpage/vector2.svg" />
  </div>


  <div class="frame-40">
    <div class="div9">الجميع</div>
    <div class="div10">الرئيسيه</div>
    <div class="div11">الرئيسيه</div>
    <div class="div12">الرئيسيه</div>
    <div class="div13">الرئيسيه</div>
  </div>
  
  <div class="projects">
    @foreach ($projects as $pro)
    <div class="frame-50">
      <img class="frame-182" src="Mainpage/frame-181.png" />
      <div class="frame-21">
        <div class="info">
  
          <div class="inf">      
          <div class="">{{$pro->name}}</div>
          <div class="">بواسطة| نجم علي</div>
          <div class="">{{$pro->created_at}}</div></div>
  
          <div class="">{{$pro->budget}} :التمويل الحالي</div>
  
  
        </div>
  
  
        <div class="div16">
          {{$pro->description}}
        </div>
      </div>
    </div>
    @endforeach
  </div>


</body>
</html>