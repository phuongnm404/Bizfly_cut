<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Fonts -->
    <title>Bizfly</title>
    <link href="https://fonts.gstatic.com" rel="preconnect" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ mix('css/app.css') }}" rel="stylesheet" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    @include('layout.header')
    @include('layout.slidebar')

    @yield('content')

    @include('layout.footer')
    <script>
        function filter_chiendich() {
            var search_value = document.getElementById('searchvalue_chiendich').value;
            var search_list = document.getElementsByClassName('list_chiendich');
            for(var i of search_list) {
                if(i.innerHTML.search(search_value)== -1) {
                    i.style.display = "none";
                } else {
                    i.style.display = "block";
                }
            }   
        }
        function filter_nhom() {
            var search_value = document.getElementById('searchvalue_nhom').value;
            var search_list = document.getElementsByClassName('list_nhom');
            for(var i of search_list) {
                if(i.innerHTML.search(search_value)== -1) {
                    i.style.display = "none";
                } else {
                    i.style.display = "block";
                }
            }   
        }

    </script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>