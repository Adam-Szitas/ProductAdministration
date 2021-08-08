<head>
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .left{
            float: left;
        }
        .right{
            float:right;
        }
        .navbar{
            margin: 0 auto;
            width: 90%;
            height: 80px;
            box-sizing: border-box;
            border: 1px solid grey;
            margin-bottom: 10px
        }
        .navbar .left > *, .navbar .right > *{
            text-decoration: none;
            font-size: 22px;
            margin: 5px;
            padding: 20px 10px;
            font-weight: 700;
        }
        .navbar .right > *:hover{
            background-color: lightgray;
            transition: background-color 500ms ease-in-out;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="left">
            @if(isset(Auth::user()->name))
                <strong>Hello {{ Auth::user()->name }}</strong>
            @endif
        </div>
        <div class="right">
            @if(isset(Auth::user()->name))
                <a href="{{ url('/main/successLogin') }}">Home</a>
                <a href="{{ url('/main/add/product') }}"> Add new product</a>
            @endif
        </div>
    </div>

</body>
