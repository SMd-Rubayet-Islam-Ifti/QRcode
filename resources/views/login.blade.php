<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <script src="{{asset('JS/script.js')}}" defer></script>
        <title>Sign In</title>

    <style>
        body {
            font-family: "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 300;
            margin: 0; /* Reset default margin */
            padding: 0; /* Reset default padding */
        }

        .nav {
            color: white;

            font-weight: bolder;
            z-index: 10; /* Ensure the navbar appears above other elements */
        }

        .content-container {
            padding-top: 0px; /* Adjust top padding to avoid overlap */
        }

        @media (min-width: 768px) {
            .content-container {
                padding-top: 120px; /* Adjust top padding for larger screens if needed */
            }
        }
        .footer {
            background-color: #4a98f7;
            color: #fff;
            text-align: center;
            padding: 5px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<nav class="nav">
    <i class="uil uil-bars navOpenBtn"></i>
    <a href="{{route('home')}}" class="logo">ScanHub</a>

    <ul class="nav-links">
        <i class="uil uil-times navCloseBtn"></i>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('tools')}}">Tools</a></li>
        <li><a href="#">Signin</a></li>
    </ul>
</nav>
<div class="content-container">
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div
            class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0"
        >
            <!-- left side -->
            <div class="flex flex-col justify-center p-8 md:p-14">
                <span class="mb-3 text-4xl font-bold">Welcome back</span>
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <span class="font-light text-gray-400 mb-8">
                Welcom back! Please enter your details
              </span>
                <form action="{{route('Logged')}}" method="post">
                    @csrf
                <div class="py-4">
                    <span class="mb-2 text-md">Email</span>
                    <input
                        type="text"
                        @if(isset($_COOKIE['email']))
                            value="{{ $_COOKIE['email'] }}"
                        @endif
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                        name="email"
                        id="email"
                    />
                </div>
                <div class="py-4">
                    <span class="mb-2 text-md">Password</span>
                    <input
                        type="password"
                        name="password"
                        id="pass"
                        @if(isset($_COOKIE['password']))
                            value="{{ $_COOKIE['password'] }}"
                        @endif
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                    />
                </div>
                <div class="flex justify-between w-full py-4">
                    <div class="mr-24">
                        <input type="checkbox" name="remember" id="ch"
                               @if(isset($_COOKIE['email']))
                                   checked=""
                               @endif
                               class="mr-2" />
                        <span class="text-md">Remember Me</span>
                    </div>
                    <a href="forget" class="font-bold text-md">Forgot password</a>
                </div>
                <button type="submit"
                    class="w-full bg-black text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300"
                >
                    Sign in
                </button>
                </form>

                <div class="text-center text-gray-400">
                    Dont' have an account?
                    <a href="{{route('alter')}}"><span class="font-bold text-black">Sign up for free</span></a>
                </div>
            </div>
            <!-- {/* right side */} -->
            <div class="relative">

                <img
                    src="{{asset('/Photo/407388772_1571564950313630_1448468611101014233_n.png')}}"
                    alt="img"
                    class="w-[500px] h-full hidden rounded-r-2xl md:block object-cover"
                />
                <!-- text on image  -->
                <div
                    class="absolute hidden bottom-10 right-6 p-6 bg-white bg-opacity-30 backdrop-blur-sm rounded drop-shadow-lg md:block"
                >

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
