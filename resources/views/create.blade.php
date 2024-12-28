<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['/resources/css/create.css' ,'resources/js/signup.js'])
  

  <title>Singup</title>
</head>
<body>

          <div id="dia" class="policy">
        1-aff

        2-faf

        3-

        4-
        <button id="btnd" type="button" >agree</button>
      </div>

    <div  class="frame-24"> 
      


          <div class="div1"> 
            <h4>إنشاء حساب</h4>

            <form action="{{route('account.store')}}" method="post">
              @csrf

              <div class="d1">
                <input name="name" required type="text" placeholder="الاسم الرباعي">
              </div>
              
  
              <div class="d3">
                <input name="phone" required type="tel" placeholder="الهانف">
              </div>
  

              <div class="d2">
                <input name="city" required type="text" placeholder="المدينة">
              </div>


              <div class="d5">
                <input name="email" required type="email" placeholder="البريد الالكتروني">
              </div>
  

              <div class="d6">
                <input name="password"  required type="password" placeholder="كلمة المرور">
              </div>
  

              <div class="d4">
                <input type="checkbox" required name="policy" id="">
                <button id="agree">قبول شروط الخدمه</button>
              </div>

              <button type="submit">تسجيل</button>             
            </form>




            <div class="d8">
                <a href="{{route('login')}}">
                  <h6 style="color: orangered">تسجيل الدخول <h6>
                </a>
                <h5> لدي حساب ؟ </h5>
            </div>

          </div>

          <div class="frame-25">
            <img src="create/frame-250.png" />
          </div>

    </div>


  </div>
  
</body>
</html>