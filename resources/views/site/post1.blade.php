@extends('layouts.website')

@section('title')
    Improving convertion and sales using IDEO’s deep dive.
@endsection


@section('description')
    A convertion rate optimization (CRO) job done for a Brazilian language immersion company called The Fools. This study includes researches, data analysis, interviews, prototypes and A/B tests.
@endsection


@section('content')
    <div class="container text-container">
        <h1>Improving <strong>convertion</strong> and <strong>sales</strong> using IDEO’s deep dive design process.</h1>
        <p>A convertion rate optimization (CRO) job done for a Brazilian language immersion company called The Fools. This study includes researches, data analysis, interviews, prototypes and A/B tests.</p>
    </div>
    <div class="img-container">
        <img src="img/posts/img1-1.png" alt="The Fools">
    </div>
    <div class="container text-container">
        <h3>What is The Fools?</h3>
        <p>It’s a farm in Brazil where people who want to learn a specific language (specially English) go and spend some days or even weeks immersed in several activities from all over the world having lots of fun and being allowed to speak only the target language.</p>
    </div>
    <div class="img-container">
        <img src="img/posts/img1-2.png" alt="Without The Fools">
        <img src="img/posts/img1-2.png" alt="With Fools">
    </div>
    <div class="container text-container">
        <h3>The problem</h3>
        <p>Designers are nothing more than poblem solvers themselves. So it all started with a problem I was hired to solve: clients loved the company, they were interested in digital marketing, but the website was not converting at all. That’s when I came in.</p>

        <h3>The technique I used</h3>
        <p>I knew then that I had to really understand the company and its clients so that I could really get to know what the problem was, since people were subscribing through phone calls instead of using the website - which was supposed to be easier.</p>
        <p>I chose to use <a href="https://rapidbi.com/deep-dive-brainstorming-technique-ideo/" target="_blank">IDEO’s deep dive</a> tool, these are it’s steps:</p>
    </div>
    <div class="img-container">
        <img src="img/posts/img1-4.svg" class="desktop" alt="IDEO’s deep dive">
        <img src="img/posts/img1-4-mob.svg" class="mobile" alt="IDEO’s deep dive">
    </div>
    <div class="container text-container">
        <h3 class="special">Empathy <span>Immersion</span></h3>
        <p>What would be the best way to trully understand the clients needs and feelings? Being a client, even if just for one immersion. It’s called <a href="https://venturelab.org/empathy-walking-in-someones-shoes-like-entrepreneur/" target="_blank">walking in someone's shoes</a>.</p>
    </div>
    <div class="img-container">
        <img src="img/posts/img1-5.png" alt="The Fools Immersion">
        <span>This is me beeing a fool and having fun in English (Yes, I did dye my hair hahaha).</span>
    </div>
    <div class="container text-container">
        <h3 class="special">Definition <span>Raising data and defining the problem</span></h3>
        <p>I used <strong>Google Analytics</strong> to investigate the last 6 months of the website’s navigation and realized that most people were getting into the calendar page, but they were not finding what they were looking for. And also the ones who were going to the subscription page didn’t finish the forms to actually subscribe.</p>
    </div>
    <div class="img-container">
        <img src="img/posts/img1-6.png" alt="Without The Fools">
        <img src="img/posts/img1-7.png" alt="With Fools">
    </div>
    <div class="container text-container">
        <h3 class="special">Ideation <span>User interviews and hypothesis creation</span></h3>
        <p>Since I already knew what the problem was, I had to talk to people to create my hypothesis. In this stage I made several user interviews with the sales team and also real clients asking about what the subscription proccess was like for them.</p>

        <p><strong>Here are some topics I came up with:</strong></p>

        <div class="inner-level">
            <div class="level-block">
                <span class="number">1)</span>
                <p>As the immersions were not that cheap, users navigated through the website looking for the prices and to their surprise, they could just see them in the last step of subscription.</p>
                <img src="img/posts/img1-8.png" alt="The fools subscription">
            </div>
            <div class="level-block">
                <span class="number">2)</span>
                <p>The subscription had a simplified version so that those who had no time in that moment could send the information later. The salesteam was spending a lot of time making phone calls for these cold leads that hadn’t even seen the price yet and didn’t convert then.</p>
                <img src="img/posts/img1-9.png" alt="The fools subscription">
            </div>
            <div class="level-block">
                <span class="number">3)</span>
                <p>The calendar had no information about the duration of the immersion or its price.</p>
                <img src="img/posts/img1-10.png" alt="The fools calendar">
            </div>
        </div>
    </div>
    <div class="container text-container">
        <h3 class="special">Prototyping <span>Low and high fidelity</span></h3>
        <p>These are some sketches of the wireframe step, also including some other pages:</p>
    </div>
    <div class="img-container">
        <img src="img/posts/img1-11-3.png" alt="The fools wireframe 1">
    </div>
    <div class="container text-container margin-top">
        <p>And these are the final high fidelity prototypes:</p>
    </div>
    <div class="img-container">
        <img src="img/posts/img1-14.png" alt="The fools calendar 1">
        <img src="img/posts/img1-15.png" alt="The fools calendar 2">
    </div>
    <div class="container text-container margin-top">
        <p>These new calendar screens were projected to give the clients all the information they need, such as immersion duration, price, accommodations, check-in and check-out date.</p>
    </div>
    <div class="container text-container">
        <h3 class="special">Testing <span>A/B testes and results tracking</span></h3>
        <p>The next step was to validate the new approach. To do so, I used Google Optimize and compared the original version versus the new one.</p>
    </div>
    <div class="img-container">
        <img src="img/posts/img1-16.png" alt="A/B test result">
    </div>
    <div class="container text-container margin-top">
        <p>I also kept tracking the main results for the next few months.</p>
    </div>
    <div class="img-container">
        <img src="img/posts/img1-17.png" alt="A/B test result">
    </div>
    <div class="container text-container margin-top">
        <p>Being a part of this project is something that I’m really proud of. I really cherish the company. I hope you’ve enjoyed knowing a little bit about how I work. </p>
        <p>Thanks for reading ❤️</p>
    </div>
@endsection