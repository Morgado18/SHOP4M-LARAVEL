@extends("layouts.structure")

@section("title", "Dashboard")

@section("link")
<link rel="stylesheet" href="/estilos/user/dash.css">
@endsection("link")

@section("content")


    <!-- DADOS USER -->

    <section class="information my-3">
        <div class="dadosUser">
            <div class="avaliacoes">
                <h6 class="text-light">Reviews</h6>
                <div class="stars">
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                </div>
            </div>
            <div class="img">
                <div class="my_img">
                    <img src="/imgs/unknown.jpg" alt="My Image" class="rounded-pill" width="100" height="100">
                </div>
            </div>
        </div>
        <hr>
    </section>


    <!-- SCHEDULE AND NOTIFICATION -->

    <section class="scheduleNotification my-3">
        <div class="schedule">
            <h4 class="text-muted">
                Schedule
                {{-- <i class="fa-solid fa-book"></i> --}}
            </h4>
            <p>There are not sessions of ## available</p>
        </div>
        <div class="notification">
            <h4 class="text-muted">
                Notification
                {{-- <i class="fa-sollid fa-dumbdel"></i> --}}
            </h4>
            
            <div class="cadastro">
                <div class="circle_cad_icon">
                    <i class="fa-sollid fa-phone"></i>
                </div>
                <a href="" style="text-decoration: none;">
                    <div class="text_cad text-dark">
                        <span>Complete your registrion</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- EM DESTAQUE -->

    <section class="destaq my-3">
        <h3><!--Em destaque</h3>

        <!--  -->
        <div class="categoria">
            <sub>
                <!--  -->
            </sub>
            <br><br>

            
        </div>
    </section>
    
@endsection("content")
