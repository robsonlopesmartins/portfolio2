@extends('layouts.website')

@section('title')
    Mobile app and desktop platform both in one single design system.
@endsection


@section('description')
    How did I designed an entire app and desktop platform with a complete and multi device design system. I’m also showing how I organized the files and flows.  
@endsection


@section('content')
    <div class="container text-container">
        <h1>Mobile app and desktop platform both in one single <strong>design system</strong>.</h1>
        <p>How did I designed an entire app and desktop platform with a complete and multi device design system. I’m also showing how I organized the files and flows.</p>
    </div>
    <div class="img-container">
        <img src="img/posts/img8-1.png" alt="Retail app mockup">
    </div>
    <div class="container text-container">
        <h3>The design system</h3>
        <div class="img-left">
            <img src="img/posts/img8-2.png" alt="Figma pages cross platform product">
            <div class="texts">
                <p>That’s how I managed to organize both <strong>desktop</strong> and <strong>mobile</strong> design systems at the same <strong>Figma</strong>'s file.</p>
                <p>I made pseudo divisors using renamed Figma pages and grouped everything that is common to both the applications (wich is basically <strong>brand colors</strong>, <strong>typography</strong> and <strong>visual ID elements</strong>) in one page and separated pages for mobile and desktop.</p>
            </div>
        </div>
    </div>
    <div class="container text-container margin-top">
        <p>That's a small exemple of how some of the <strong>components</strong> in the DS look like on this project:</p>
    </div>
    <div class="img-container">
        <img src="img/posts/img8-3.png" alt="Design system organization">
    </div>
    <div class="container text-container">
        <h3>What about Figma organization?</h3>
        <p>Each device has it’s on <strong>Figma project</strong> (Product app and Product desktop). Each Figma project has as many <strong>Figma files</strong> as the first level menu of the application has, on mobile the pages relate to the bottom tabs of the app.</p>

        <p>Besides that, inside of each page you can find a pseudo divisor for the features in <strong>discovery</strong> or <strong>development</strong> steps. Each group of flows in the app (related to the same subject) receive a <strong>Figma page</strong>, in this page you can find the flows organized like this:</p>
    </div>
    <div class="img-container">
        <img src="img/posts/img8-4.png" alt="Figma flow organization">
    </div>
    <div class="container text-container margin-top">
        <p>Flow steps are positioned in a horizontal direction while page variations are positioned in vertical direction. If the page has some <strong>specific business rule</strong> or behavior, you can also find a <strong>documentation</strong> frame below some of the screens.</p>
    </div>
    <div class="container text-container">
        <h3>What else?</h3>
        <p>I’ll show you some pages of this beautiful app I love.</p>
    </div>
    <div class="img-container">
        <img src="img/posts/img8-5.png" alt="Retail app screens">
    </div>
    <div class="container text-container margin-top">
        <p>Hope you’ve enjoyed it, thanks for reading ❤️</p>
    </div>
@endsection