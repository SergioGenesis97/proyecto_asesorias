@extends('templates.layouts.footer')

@section('title', 'Añadir Alumno')

@section('content')

            <!-- Content -->
            <div class="content">
                <div>
                    <h2 class="title"> Horario </h2>
                </div>

                <div class="content">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="card card-calendar">
                                <div class="card-body ">
                                    <div id="fullCalendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Content -->

@endsection

@extends('templates.layouts.header')