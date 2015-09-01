@extends('master')

@section('title', 'Dominique Randolph - Portfolio')



@section('content')

    <img src='images/port.jpg' class="img-responsive" style="min-width: 100%;"></img>


<div class="container">
    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Resume Creation. <span class="text-muted">Easy as answering a few questions.</span></h2>
            <p class="lead">
                This website is created by Dominique Randolph for practice using Laravel + Bootstrap. So take a moment to create an account. Take all your life experiences and achievements and add them to your profile. Your resume is automatically generated and hosted by our website.
            </p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="/images/step_one.jpg" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Scope + MVC. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">You can visit the <b>Github</b> <a href="https://github.com/domran91/port">repository</a> to see all the code that was created. There are classes to handle each form of information and views to each page view.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" src="/images/step_two.jpg" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Why I created this site? <span class="text-muted">Simple Presentation.</span></h2>
            <p class="lead">While I have worked on many projects not many are live right now. So I created this site to demonstrate my programming skills. It is also a crafty way to show you my resume. Thank you for considering me for your job position. Now lets take the next step and start planning and creating the next big thing together.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="/images/step_three.jpg" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

</div>
@stop