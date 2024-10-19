<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

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

        .div1,
        .div2,
        .div3 {
            display: flex;
            justify-content: center;
            gap: 1rem
        }

        .div1,
        .div2,
        .div3 {
            margin-bottom: 1rem
        }

        .first,
        .last,
        .email,
        .company,
        .address,
        .date {
            display: grid;
        }

        input {
            border: 1px solid gray;
            padding: 5px;
            border-radius: 5px;
        }

        button {
            padding: 5px;
            width: 20rem;
            margin-left: 2.5rem;
            background: skyblue;
            color: #ffffff;
            border-radius: 5px;
            border: none;
            cursor: pointer;
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

    <form method="post" action="{{route('register')}}">
         {{-- <!-- CSrF token: to avoid attacks  --> --}}
        @csrf
        <h1>Registration</h1>

        <section>
            <div class="div1">
               <div class="first">
                <label>First name</label>
                <input
                 type="text"
                 name="first_name"
                 placeholder="First name"
                 value="{{old('first_name')}}">
               </div>

               <div class="last">
                <label>Last name</label>
                <input
                 type="text"
                 name="last_name"
                 placeholder="Last name"
                 value="{{old('last_name')}}">
               </div>
            </div>

            <div class="div2">
               <div class="email">
                <label>Email</label>
                <input
                  type="email"
                  name="email"
                  placeholder="Email"
                  value="{{old('email')}}">
               </div>

               <div class="company">
                <label>Company</label>
                <input
                 type="text"
                 name="company"
                 placeholder="Company"
                 value="{{old('company')}}">
               </div>
            </div>

            <div class="div3">
               <div class="address">
                <label>Address</label>
                <input
                 type="text"
                 name="address"
                 placeholder="Address"
                 value="{{old('address')}}">
               </div>

               <div class="date">
                <label>Password</label>
                <input
                 type="password"
                 name="password"
                 placeholder="Password"
                 value="{{old('password')}}">
               </div>
            </div>

        </section>
        <button type="submit">Register</button>
    </form>
</body>
</html>
