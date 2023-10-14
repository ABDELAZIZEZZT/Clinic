<nav class="navbar navbar-expand-lg navbar-expand-md bg-blue sticky-top">
    <div class="container">
        <div class="navbar-brand">
            <a class="fw-bold text-white m-0 text-decoration-none h3" href="./index.html">VCare</a>
        </div>
        <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
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
                {{-- <a type="button" class="btn btn-outline-light navigation--button" href="./doctors/index.html">Doctors</a> --}}
                {{-- <a type="button" class="btn btn-outline-light navigation--button" href="./login.html">login</a> --}}
                {{-- <a type="button" class="btn btn-outline-light navigation--button" href="{{ asset(' front') }}/index.html">Home</a> --}}
            </div>
        </div>
    </div>
</nav>
