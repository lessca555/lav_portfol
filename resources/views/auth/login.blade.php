<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/feather-icons"></script>

    <title>Login Admin</title>
</head>

<body>
    <style>
        /* login */
        :root {
            --primary: #0e352b;
            --bg: #fefefe;
            --btn: #e0111e;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
        }

        body {
            font-family: "Poppins", sans-serif;
            background-color: var(--primary);
            color: var(--bg);
            /* min-height: 5000px; */
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .login {
            background-color: var(--bg);
            color: var(--primary);
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 20px;
            margin-top: 5%;
        }

        .login form {
            flex: 1 1 45rem;
            padding: 5rem 2rem;
            text-align: center;
        }

        .login form .input-group p {
            color: var(--primary);
        }

        .login form .input-group {
            display: flex;
            align-items: center;
            margin-top: 2rem;
            background-color: var(--bg);
            border: 1px solid #eee;
            padding-left: 2rem;
        }

        .login form .input-group input {
            width: 100%;
            padding: 2rem;
            font-size: 1.2rem;
            background: none;
            color: var(--primary);
        }

        .login form .btn {
            margin-top: 3rem;
            display: inline-block;
            padding: 1rem 3rem;
            font-size: 1.7rem;
            background-color: var(--btn);
            color: var(--bg);
            cursor: pointer;
        }

        /* Mobile */
        @media (max-width: 450px) {
            html {
                font-size: 55%;
            }

            .login{
                width: 100%;
                display: flex;
                flex-direction: column;

            }

        }
    </style>
    <div class="login">
        <h1>LOGIN ADMIN</h1>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-group">
                <p>
                    <i data-feather="user"></i>
                </p>
                <input type="email" placeholder="Email" name="email" />
            </div>
            <div class="input-group">
                <p>
                    <i data-feather="lock"></i>
                </p>
                <input type="password" placeholder="Password" name="password"/>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>


        <script>
            feather.replace();
        </script>
    </div>
</body>

</html>
