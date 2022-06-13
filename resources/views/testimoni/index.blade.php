@extends('layouts.desain')

@section('head')
<style>
    body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    background-color: rgb(233, 150, 150);
    font-family: 'Open Sans';
}
#demo{
    background: linear-gradient(112deg, #ffffff 50%, antiquewhite 50%);
    max-width: 900px;
    margin: auto;
}
.carousel-caption {
    position: initial;
    z-index: 10;
    padding: 5rem 8rem;
    color: rgba(78, 77, 77, 0.856);
    text-align: center;
    font-size: 1.2rem;
    font-style: italic;
    font-weight: bold;
    line-height: 2rem;
}
@media(max-width:767px){
    .carousel-caption {
        position: initial;
        z-index: 10;
        padding: 3rem 2rem;
        color: rgba(78, 77, 77, 0.856);
        text-align: center;
        font-size: 0.7rem;
        font-style: italic;
        font-weight: bold;
        line-height: 1.5rem;
    }
}
.carousel-caption img{
    width: 6rem;
    border-radius: 5rem;
    margin-top: 2rem;
}
@media(max-width:767px){
    .carousel-caption img{
        width: 4rem;
        border-radius: 4rem;
        margin-top: 1rem;
    }
}
#image-caption{
    font-style: normal;
    font-size: 1rem;
    margin-top: 0.5rem;
}
@media(max-width:767px){
    #image-caption{
        font-style: normal;
        font-size: 0.6rem;
        margin-top: 0.5rem;
    }
}
i{
    background-color: rgb(223, 56, 89);
    padding: 1.4rem;
}
@media(max-width:767px){
    i{
        padding: 0.8rem;
    }
}
.carousel-control-prev{
    justify-content: flex-start;
}

.carousel-control-next {
    justify-content: flex-end;
}
.carousel-control-prev,.carousel-control-next{
    transition: none;
    opacity: unset;
}
</style>
@endsection

@section('content')
<div class="container">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carousel-caption">
              <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code,
                  I don't know what will.This was the very best explanation of frameworks for brginners 
                  that I've ever seen.
              </p>
              <img src="https://i.imgur.com/lE89Aey.jpg">
              <div id="image-caption">Nick Doe</div>
            </div>   
          </div>
          <div class="carousel-item">
            <div class="carousel-caption">
              <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code,
                I don't know what will.This was the very best explanation of frameworks for brginners 
                that I've ever seen.</p>
                <img src="https://i.imgur.com/QptVdsp.jpg" class="img-fluid">
                <div id="image-caption">Cromption Greves</div>
            </div>   
          </div>
          <div class="carousel-item">
            <div class="carousel-caption">
              <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code,
                I don't know what will.This was the very best explanation of frameworks for brginners 
                that I've ever seen.</p>
                <img src="https://i.imgur.com/jQWThIn.jpg" class="img-fluid">
                <div id="image-caption">Harry Mon</div>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <i class='fas fa-arrow-left'></i>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <i class='fas fa-arrow-right'></i>
        </a>
      </div>      
</div>
@endsection