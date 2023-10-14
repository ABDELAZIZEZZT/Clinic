<footer class="container-fluid bg-blue text-white py-3">
    <div class="row gap-2">

        <div class="col-sm order-sm-1">
            <h1 class="h1">About Us</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus itaque,
                laborum
                saepe
                enim maxime, delectus, dicta cumque error cupiditate nobis officia quam perferendis consequatur
                cum
                iure
                quod facere.</p>
        </div>
        <div class="col-sm order-sm-2">
            <h1 class="h1">Links</h1>
            <div class="links d-flex gap-2 flex-wrap">
                <form  action="{{route("index")}}" method="get">
                    <button class="btn btn-outline-light navigation--button">Home</button>

                </form>
                <form action="{{route('majors')}}" method="get">
                    <button class="btn btn-outline-light navigation--button">majors</button>
                </form>
                <form action="{{route('Doctors')}}" method="get">
                    <button class="btn btn-outline-light navigation--button">Doctors</button>
                </form>
                <form action="{{route('login')}}" method="get">
                    <button class="btn btn-outline-light navigation--button">login</button>
                </form>
                <form action="{{route('Contact')}}" method="get">
                    <button class="btn btn-outline-light navigation--button">Contact</button>
                </form>
                {{-- <a href="./index.html" class="link text-white">Home</a>
                <a href="./majors.html" class="link text-white">Majors</a>
                <a href="./doctors/index.html" class="link text-white">Doctors</a>
                <a href="./login.html" class="link text-white">Login</a> --}}
                {{-- <a href="./contact.html" class="link text-white">Contact</a> --}}

                {{-- <a href="./register.html" class="link text-white">Register</a> --}}
            </div>
        </div>
    </div>
</footer>
