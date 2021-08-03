@extends('layouts.website')

@section('title')
    Robson Lopes - UX Designer and Front end Developer
@endsection


@section('description')
I’m a UX designer based in Brazil. I have a background in front-end development and over 5 years experience creating web products, apps and ecommerces focused on convertion and usabillity.
@endsection


@section('content')
    <div class="container">
        <div class="hello-home">
            <div class="left">
                <h1>Hi <img src="img/waving.png" alt="Hi" class="waving"> I'm <strong class="special">Robson</strong>,<br>but you can call me <strong>Rob</strong>.</h1>

                <div class="texts">
                    <p>I’m a UX designer based in <strong>Brazil</strong>.</p>
                    <p>I have a background in front-end development and over 5 years experience creating web products, apps and ecommerces focused on convertion and usabillity.</p>
                </div>

                <button type="button" class="btn-action">Know my work</button>
            </div>
            <div class="right">
                <svg class="triangles" xmlns="http://www.w3.org/2000/svg" width="451" height="409" viewBox="0 0 451 409" fill="none">
                    <g clip-path="url(#clip0)">
                        <path class="dashed" d="M95.4026 38.3383L95.7897 33.4014L96.2881 33.4405L96.4321 31.6045L98.1837 32.1734L98.3381 31.6978L103.048 33.2275L102.893 33.703L107.603 35.2327L107.758 34.7572L112.468 36.2868L112.313 36.7624L117.023 38.2921L117.177 37.8165L121.887 39.3462L121.733 39.8217L126.443 41.3514L126.597 40.8758L131.307 42.4055L131.152 42.8811L135.862 44.4107L136.017 43.9352L140.726 45.4649L140.572 45.9404L145.282 47.4701L145.436 46.9945L150.146 48.5242L149.992 48.9997L154.701 50.5294L154.856 50.0538L159.566 51.5835L159.411 52.0591L164.121 53.5887L164.275 53.1132L168.985 54.6428L168.831 55.1184L173.541 56.648L173.695 56.1725L178.405 57.7022L178.25 58.1777L182.96 59.7074L183.115 59.2318L187.825 60.7615L187.67 61.237L192.38 62.7667L192.534 62.2911L197.244 63.8208L197.09 64.2964L201.799 65.826L201.954 65.3505L206.664 66.8801L206.509 67.3557L211.219 68.8853L211.373 68.4098L216.083 69.9395L215.929 70.415L220.639 71.9447L220.793 71.4691L225.503 72.9988L225.348 73.4743L230.058 75.004L230.213 74.5284L234.923 76.0581L234.768 76.5337L239.478 78.0633L239.632 77.5878L244.342 79.1175L244.188 79.593L248.897 81.1226L249.052 80.6471L253.762 82.1768L253.607 82.6523L258.317 84.182L258.472 83.7064L263.181 85.2361L263.027 85.7116L267.737 87.2413L267.891 86.7658L272.601 88.2954L272.447 88.771L277.156 90.3006L277.311 89.8251L282.021 91.3548L281.866 91.8303L286.576 93.36L286.73 92.8844L291.44 94.4141L291.286 94.8896L295.996 96.4193L296.15 95.9438L300.86 97.4734L300.705 97.949L305.415 99.4786L305.57 99.0031L310.279 100.533L310.125 101.008L314.835 102.538L314.989 102.062L319.699 103.592L319.545 104.068L324.254 105.597L324.409 105.122L329.119 106.651L328.964 107.127L333.674 108.657L333.828 108.181L338.538 109.711L338.384 110.186L343.094 111.716L343.248 111.24L347.958 112.77L347.803 113.246L352.513 114.775L352.668 114.3L357.377 115.829L357.223 116.305L361.933 117.835L362.087 117.359L366.797 118.889L366.643 119.364L371.352 120.894L371.507 120.418L376.217 121.948L376.062 122.424L380.772 123.953L380.927 123.478L385.636 125.007L385.482 125.483L386.856 125.929L385.634 126.746L385.912 127.162L381.754 129.942L381.476 129.526L377.318 132.305L377.596 132.721L373.438 135.501L373.16 135.085L369.002 137.865L369.28 138.28L365.122 141.06L364.845 140.644L360.687 143.424L360.964 143.839L356.807 146.619L356.529 146.203L352.371 148.983L352.649 149.398L348.491 152.178L348.213 151.762L344.055 154.542L344.333 154.957L340.175 157.737L339.897 157.321L335.739 160.101L336.017 160.516L331.859 163.296L331.581 162.88L327.423 165.66L327.701 166.076L323.543 168.855L323.265 168.439L319.107 171.219L319.385 171.635L315.227 174.414L314.949 173.998L310.791 176.778L311.069 177.194L306.911 179.973L306.633 179.558L302.475 182.337L302.753 182.753L298.595 185.532L298.317 185.117L294.159 187.896L294.437 188.312L290.279 191.091L290.001 190.676L285.844 193.455L286.121 193.871L281.963 196.65L281.686 196.235L277.528 199.014L277.806 199.43L273.648 202.209L273.37 201.794L269.212 204.573L269.49 204.989L265.332 207.769L265.054 207.353L260.896 210.132L261.174 210.548L257.016 213.328L256.738 212.912L252.58 215.691L252.858 216.107L248.7 218.887L248.422 218.471L244.264 221.251L244.542 221.666L240.384 224.446L240.106 224.03L235.948 226.81L236.226 227.225L232.068 230.005L231.79 229.589L227.632 232.369L227.91 232.784L223.752 235.564L223.474 235.148L219.316 237.928L219.594 238.343L215.436 241.123L215.158 240.707L211 243.487L211.278 243.903L207.12 246.682L206.843 246.266L202.685 249.046L202.962 249.462L198.804 252.241L198.527 251.825L194.369 254.605L194.647 255.021L190.489 257.8L190.211 257.384L186.053 260.164L186.331 260.58L182.173 263.359L181.895 262.944L177.737 265.723L178.015 266.139L173.857 268.918L173.579 268.503L169.421 271.282L169.699 271.698L165.541 274.477L165.263 274.062L161.105 276.841L161.383 277.257L157.225 280.036L156.947 279.621L152.789 282.4L153.067 282.816L148.909 285.596L148.631 285.18L144.473 287.959L144.751 288.375L140.593 291.155L140.315 290.739L136.157 293.518L136.435 293.934L132.277 296.714L131.999 296.298L127.841 299.078L128.119 299.493L123.961 302.273L123.684 301.857L119.526 304.637L119.803 305.052L115.646 307.832L115.368 307.416L111.21 310.196L111.488 310.611L107.33 313.391L107.052 312.975L102.894 315.755L103.172 316.17L99.0137 318.95L98.7359 318.534L94.5779 321.314L94.8558 321.729L90.6978 324.509L90.42 324.093L86.262 326.873L86.5399 327.289L82.3819 330.068L82.1041 329.652L77.9461 332.432L78.224 332.848L74.066 335.627L73.7882 335.211L72.5661 336.028L72.679 334.588L72.1806 334.548L72.5676 329.612L73.0661 329.651L73.4531 324.714L72.9546 324.675L73.3417 319.738L73.8401 319.777L74.2272 314.84L73.7287 314.801L74.1158 309.864L74.6142 309.903L75.0013 304.966L74.5028 304.927L74.8898 299.991L75.3883 300.03L75.7753 295.093L75.2769 295.054L75.6639 290.117L76.1624 290.156L76.5494 285.219L76.0509 285.18L76.438 280.243L76.9364 280.282L77.3235 275.345L76.825 275.306L77.212 270.37L77.7105 270.409L78.0975 265.472L77.5991 265.433L77.9861 260.496L78.4846 260.535L78.8716 255.598L78.3731 255.559L78.7602 250.622L79.2586 250.661L79.6457 245.724L79.1472 245.685L79.5342 240.749L80.0327 240.788L80.4197 235.851L79.9213 235.812L80.3083 230.875L80.8068 230.914L81.1938 225.977L80.6953 225.938L81.0824 221.001L81.5808 221.04L81.9679 216.103L81.4694 216.064L81.8564 211.128L82.3549 211.167L82.7419 206.23L82.2435 206.191L82.6305 201.254L83.129 201.293L83.516 196.356L83.0175 196.317L83.4046 191.38L83.903 191.419L84.2901 186.482L83.7916 186.443L84.1786 181.507L84.6771 181.546L85.0641 176.609L84.5657 176.57L84.9527 171.633L85.4512 171.672L85.8382 166.735L85.3397 166.696L85.7268 161.759L86.2252 161.798L86.6123 156.861L86.1138 156.822L86.5008 151.886L86.9993 151.925L87.3864 146.988L86.8879 146.949L87.2749 142.012L87.7734 142.051L88.1604 137.114L87.6619 137.075L88.049 132.138L88.5475 132.177L88.9345 127.24L88.436 127.201L88.8231 122.264L89.3215 122.304L89.7086 117.367L89.2101 117.328L89.5971 112.391L90.0956 112.43L90.4826 107.493L89.9842 107.454L90.3712 102.517L90.8697 102.556L91.2567 97.6194L90.7582 97.5803L91.1453 92.6434L91.6437 92.6825L92.0308 87.7457L91.5323 87.7066L91.9193 82.7698L92.4178 82.8089L92.8048 77.872L92.3064 77.8329L92.6934 72.8961L93.1919 72.9352L93.5789 67.9983L93.0804 67.9593L93.4675 63.0224L93.9659 63.0615L94.353 58.1247L93.8545 58.0856L94.2415 53.1488L94.74 53.1878L95.127 48.251L94.6286 48.2119L95.0156 43.2751L95.5141 43.3142L95.9011 38.3773L95.4026 38.3383Z" fill="white" stroke="#888888" stroke-dasharray="5 5"/>
                        <path class="solid" d="M107.325 388.025L131.191 83.6013L421.616 177.926L107.325 388.025Z" fill="white" stroke="#F72585"/>
                    </g>
                </svg>
            </div>
        </div>

        <div class="work-list">
            <h2>These are some of my works as a <strong>UX designer</strong></h2>

            <ul class="list-tabs">
                <li class="active" data-cat="all">All</li>
                <li data-cat="ux-research">UX research</li>
                <li data-cat="visual-ui-design">Visual UI design</li>
                <li data-cat="motion-design">Motion design</li>
                <li data-cat="ux-analysis">UX analysis</li>
                <li data-cat="product-design">Product design</li>
            </ul>

            <div class="list-blocks">
                <div class="item" data-cat="ux-research">
                    <a href="/improving-convertion-and-sales-using-ideo-deep-dive" title="Improving convertion and sales using IDEO’s deep dive.">
                        <img src="img/thumbs/thumb-1.png" alt="Improving convertion and sales using IDEO’s deep dive.">
                        <h4>Improving convertion and sales using IDEO’s deep dive.</h4>
                    </a>
                </div>
                <div class="item" data-cat="product-design,visual-ui-design">
                    <a href="/mobile-app-and-desktop-both-in-one-single-design-system" title="Mobile app and desktop both in one single design system.">
                        <img src="img/thumbs/thumb-2.png" alt="Mobile app and desktop both in one single design system.">
                        <h4>Mobile app and desktop both in one single design system.</h4>
                    </a>
                </div>
                <div class="item" data-cat="visual-ui-design">
                    <a href="/making-a-complex-storytelling-looks-simple-in-a-home-page" title="Making a complex storytelling looks simple in a home page.">
                        <img src="img/thumbs/thumb-3.png" alt="Making a complex storytelling looks simple in a home page.">
                        <h4>Making a complex storytelling looks simple in a home page.</h4>
                    </a>
                </div>
                <div class="item" data-cat="motion-design">
                    <a href="/ux-motion-design-for-a-birthday-wrapped-page-using-ae" title="UX motion design for a birthday wrapped page using AE.">
                        <img src="img/thumbs/thumb-4.png" alt="UX motion design for a birthday wrapped page using AE.">
                        <h4>UX motion design for a birthday wrapped page using AE.</h4>
                    </a>
                </div>
                <div class="item" data-cat="visual-ui-design">
                    <a href="/creating-a-new-website-for-a-health-professionals-platform" title="Creating a new website for a health professionals platform.">
                        <img src="img/thumbs/thumb-5.png" alt="Creating a new website for a health professionals platform.">
                        <h4>Creating a new website for a health professionals platform.</h4>
                    </a>
                </div>
                <div class="item" data-cat="ux-analysis">
                    <a href="/user-experience-analysis-for-a-wine-retail-ecommerce" title="User Experience analysis for a wine retail ecommerce.">
                        <img src="img/thumbs/thumb-6.png" alt="User Experience analysis for a wine retail ecommerce.">
                        <h4>User Experience analysis for a wine retail ecommerce.</h4>
                    </a>
                </div>
                <div class="item" data-cat="visual-ui-design,product-design">
                    <a href="/admin-dashboard-design-for-a-wine-company-providers" title="Admin dashboard design for a wine company’s providers.">
                        <img src="img/thumbs/thumb-7.png" alt="Admin dashboard design for a wine company’s providers.">
                        <h4>Admin dashboard design for a wine company’s providers.</h4>
                    </a>
                </div>
                <div class="item" data-cat="product-design">
                    <a href="/dashboard-design-to-help-store-managers-improving-sales" title="Dashboard design to help store managers improving sales.">
                        <img src="img/thumbs/thumb-8.png" alt="Dashboard design to help store managers improving sales.">
                        <h4>Dashboard design to help store managers improving sales.</h4>
                    </a>
                </div>
                <div class="item empty" data-cat=""></div>
            </div>
        </div>
    </div>
@endsection