<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examica</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
            color: #242424;
        }
        body{
            font-family: "Poppins", sans-serif;
        }
        /* bell badge */
        .badge{
            position: absolute;
            top: -2px;
            right: -2px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: lightskyblue;
            color: white;
            font-size: 12px;
        }
    </style>
</head>
<body class="w-full h-screen text-sm">
    <div class="w-full h-full flex">
        <!-- w-56 = 14rem -->
        <!-- sidebar -->
        <aside class="w-full hidden lg:block lg:w-56 h-full bg-slate-100 p-6 space-y-12">
            <div class="w-full flex items-center gap-2">
                <i class='bx bx-file-blank text-xl rotate-45'></i>
                <span class="font-medium text-2xl">examica</span>
            </div>

            <button class="w-full flex items-center justify-between gap-2 outline-none p-2 bg-blue-500 hover:bg-blue-600/90 rounded">
                <span class="text-white">New test</span>
                <i class="bx bx-plus text-xl text-white"></i>
            </button>

            <ul class="w-full space-y-2 tracking-wider">
                <li class="w-full flex items-center justify-between hover:bg-slate-400 hover:text-white rounded p-2">
                    <a href="#" class="w-full">All Tests</a>
                    <i class="bx bx-chevron-right text-lg"></i>
                </li>
                <li class="w-full flex items-center justify-between hover:bg-slate-400 hover:text-white rounded p-2">
                    <a href="#" class="w-full">Score sheets</a>
                    <i class="bx bx-chevron-right text-lg"></i>
                </li>
                <li class="w-full flex items-center justify-between hover:bg-slate-400 hover:text-white rounded p-2">
                    <a href="#" class="w-full">Students</a>
                    <i class="bx bx-chevron-right text-lg"></i>
                </li>
                <li class="w-full flex items-center justify-between hover:bg-slate-400 hover:text-white rounded p-2">
                    <a href="#" class="w-full">Settings</a>
                    <i class="bx bx-chevron-right text-lg"></i>
                </li>
                <li class="w-full flex items-center justify-between hover:bg-slate-400 hover:text-white rounded p-2">
                    <a href="#" class="w-full">Support</a>
                    <i class="bx bx-chevron-right text-lg"></i>
                </li>
            </ul>

            <a href="/logout" class="w-full flex items-center justify-between gap-2 outline-none p-2 bg-red-400 hover:bg-red-500/90 rounded">
                <span class="text-white">Logout</span>
                <i class="bx bx-x text-xl text-white"></i>
            </a>

        </aside>

        <!-- main area -->
        <!-- w-[100%-14rem] -->
        <main class="w-[calc(100%-14rem)] h-full p-8">
            <!-- Navbar -->
            <!-- h-14 = 56px|3.5rem -->
            <nav class="w-full h-14 flex items-center justify-between">
                <!-- left -->
                <div class="w-fit bg-slate-100 py-1 px-2 flex items-center gap-1 rounded">
                    <input class="outline-none p-2 bg-transparent" type="text" name="search" placeholder="Search here..."/>
                    <i class="bx bx-search text-lg text-slate-500"></i>
                </div>

                <!-- right -->
                <div>
                    <div class="flex items-center gap-2">
                        <div class="flex flex-col items-end">
                            <p class="font-semibold">Michael Jankowska</p>
                            <small>michaeljankowska@gmail.com</small>
                        </div>
                        <img class="w-10 h-10 rounded-lg object-contain" src="https://lineone.piniastudio.com/images/avatar/avatar-19.jpg" alt="avatar"/>

                        <!-- bell -->
                        <button class="w-10 h-10 rounded-lg outline-none bg-slate-100 relative">
                            <i class="bx bx-bell text-lg"></i>
                            <span class="badge">3</span>
                        </button>
                    </div>
                </div>
            </nav>

            <!-- main content area -->
            <!-- h-[100%-3.5rem] -->
            <section class="w-full h-[calc(100%-3.5rem)] max-h-[calc(100%-3.5rem)] overflow-y-auto pt-12 space-y-4">
                <div class="w-full flex justify-between items-center px-4">
                    <div>
                        <h2 class="text-2xl font-semibold tracking-wider">Create Test</h2>
                        <small class="text-slate-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam tenetur illo a blanditiis veniam numquam?
                        </small>
                    </div>

                     <!-- buttons   -->
                    <button class="px-4 px-2 py-1 rounded-lg bg-sky-500 hover:bg-sky-600 outline-none flex justify-center items-center text-white" id="addQuestionButton">Add question</button>
                </div>
                <hr/>

                <!-- Questions and Options -->
                <div class="w-full space-y-4" id="questions">
                    <!-- question 1 -->

                </div>
            </section>
        </main>
    </div>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/data.js')}}"></script>
    <script src="{{asset('js/functions.js')}}"></script>
</body>
</html>



