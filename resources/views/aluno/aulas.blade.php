@extends('layouts.dashboard')

@section('content')

<div class='row m-1'>
    {{-- VIDEO --}}
    <div class="col-md-9 mx-0 px-0">
        
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/M7lc1UVf-VE" allowfullscreen></iframe>
        </div>
    </div>

    {{-- COLLAPSE CURSOS --}}
    <div class="col-md-3 mx-0 px-0">
        <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                  style="color: black; text-decoration: none; font-style: bold">
                    Chapter 01 - Greetings 
                  </button>
                </h5>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                        <label class="form-check-label" for="flexCheckDefault1">
                          01. Saying Hello
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                        <label class="form-check-label" for="flexCheckDefault2">
                          02. Saying Bye
                        </label>
                      </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                  style="color: black; text-decoration: none; font-style: bold">
                    Chapter 02 - To be 
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <li>Aula 01 - Introduction</li>
                    <li>Aula 02 - Saying Hello</li>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                  style="color: black; text-decoration: none; font-style: bold">
                    Chapter 03 - objects
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <li>Aula 01 - Introduction</li>
                    <li>Aula 02 - Saying Hello</li>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>


@endsection