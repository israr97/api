<html>

<head>
    <title>Test</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password],
        input[type=email] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for all buttons */
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn,
        .signupbtn {
            float: left;
            width: 50%;
        }

        /* Add padding to container elements */
        .container {
            padding: 16px;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {

            .cancelbtn,
            .signupbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>


    <form action="{{ route('userregister') }}" id="basic-form" method="post" style="border:1px solid #ccc">
        @csrf
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="text"><b>First name</b><span></label>
            <input type="text" placeholder="First name" name="name">

            <span style="color:red;">
                @error("name"){{$message}}@enderror
            </span><br>


            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter email" name="email"> <br>
            <span style="color:red;">
                @error("email"){{$message}}@enderror
            </span><br>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password">
            <span style="color:red;">
                @error("password"){{$message}}@enderror
            </span>
            <br>
            <label>
                <input type="checkbox" name="remember" style="margin-bottom:15px"> I agree
            </label>

            <span>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</span>

            <div class="clearfix">
                <input type="submit" value="Save">

            </div>
        </div>
    </form>


</body>

</html>