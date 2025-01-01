<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>form</title>
</head>
<body>

        <form action="{{route('addproject.store')}}" method="post">

            @csrf

            <div class="inp1">
                <input required name="name" type="text" placeholder="إسم المشروع">
            </div>
            <div class="inp2">
                <input required name="type" type="text" placeholder="نوع المشروع">
            </div>
            <div class="inp3">
                <input required name="budget" type="text" placeholder="الميزانيه">
            </div>
            <div class="inp4">
                <textarea required placeholder="وصف المشروع" name="description"  cols="30" rows="10"></textarea>
            </div>

            <input type="submit" value="إرسال">
        </form>
        
        <div class="tog">
            <a href="questions">
                <div>السابق</div>
            </a>
            <a href="/info1">
                <div>التالي</div>
            </a>
        </div>

</body>

</html>