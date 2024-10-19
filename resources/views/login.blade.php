<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <style>
        body {
            background: rgb(199, 224, 234);
        }

        form {
            background: #ffffffff;
            border-radius: 10px;
            box-shadow: 10px #ffffff;
            width: 25rem;
            margin-left: 23rem;
            margin-top: 2rem;
            padding: 25px;
        }

        h1 {
            text-align: center;
        }

        .div2 {
            margin-bottom: 1rem
        }


        .email,
        .password {
            display: grid;
        }

        .email {
            margin-bottom: 1rem
        }

        input {
            border: 1px solid gray;
            padding: 7px;
            border-radius: 5px;
        }

        button {
            padding: 5px;
            width: 25rem;
            /* margin-left: 2.5rem; */
            background: skyblue;
            color: #ffffff;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            margin-top: 1rem;
        }

        button:hover {
            background: rgb(37, 173, 227);
        }

        .error {
            width: 50rem;
        }

        p {
          border: 1px solid red;
          border-radius: 5px;
          background: rgb(246, 151, 151);
          color: red;
          text-align: center;
          margin-left: 23rem
        }

    </style>
</head>
<body >
        {{-- show error message if any  --}}
        <div class="error">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

    <form method="post" action="/login">
         {{-- <!-- CSrF token: to avoid attacks  --> --}}
        @csrf
        <h1>Welcome back!</h1>

        <section>

            <div class="div2">
               <div class="email">
                <label>Email</label>
                <input
                  type="email"
                  name="email"
                  placeholder="Email"
                  value="{{old('email')}}">
               </div>


               <div class="password">
                <label>Password</label>
                <input
                 type="password"
                 name="password"
                 placeholder="Password"
                 value="{{old('password')}}">
               </div>
            </div>

            {{-- <div>
                <input type="checkbox" name="remember">
                <label>Remember me</label>
            </div> --}}

        </section>
        <button type="submit">Login</button>
    </form>
</body>
</html>

