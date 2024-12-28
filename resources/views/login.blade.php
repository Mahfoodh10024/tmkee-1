<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['/resources/css/login.css' ,'resources/js/signup.js'])
  

  <title>Login</title>
</head>
<body>

    
    <div class="frame-24">  

          <div class="div1"> 
            <h4>تسجيل الدخول</h4>

            <div class="4">
              <input type="email" placeholder="البريد الالكتروني">
            </div>
            <div class="5">
              <input type="password" placeholder="كلمة المرور">
            </div>


            <a href="">
              <div class="d5">
                <h5>تسجيل</h5>              
              </div>
            </a>

            <div class="d6">
                <a href="{{route('create')}}">
                  <h6 style="color: orangered"> إنشاء حساب <h6>
                </a>
                <h5>ليس لدي حساب    </h5>
            </div>

          </div>

          <div class="frame-25">
            <img src="create/frame-250.png" />
          </div>

    </div>

  </div>
  
</body>
</html>