<head>
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

                <a href="{{ url('/main/add/product') }}"> Add new product</a>

            @endif
        </div>
    </div>

</body>
