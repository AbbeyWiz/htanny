@extends('layouts.app')


@section('title', 'Tanny & Hiphy')


@section('menu')
  <!--menu bar starts from here-->
  <div class="resonsive-tab">
    <div class="header">
    <div class="container">
            <div class="logo-responsive pull-left"> <a href="index.html"><img class="img-responsive" src="{{asset('img/logo.png')}}" alt="logo"></a></div>
            <div class="hamburger pull-right button-wrap"> <div class="button"></div></div>
          </div>
      <div class="clearfix"></div>
  </div>
  </div>
  <div id="dl-menu" class="section1 navbar navbar-default navbar-fixed-top">
        <div class="vertical-menu">
      <div class="logo-s2"> <a href="index.html" data-menu="index"> <img src="{{ asset('img/logo.png') }}" alt="logo"> </a> </div>
      <div class="mobile-menu">
            <ul class="dl-menu nav navbar-nav menubar-s2 horizontal_iconmenu" style="position: relative;">
              <li data-animation="1" class="hvr-overline-from-center hover_active"> <a href="#0" data-menu="index"> <svg version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve" fill="#f0394d">
                <g>
                  <g>
                    <path d="M6.355,25.149c-0.17,0-0.34-0.066-0.467-0.198c-0.251-0.258-0.244-0.671,0.014-0.921l18.645-18.09
                  c0.253-0.245,0.654-0.245,0.907,0l5.376,5.216V8.003c0-0.36,0.292-0.651,0.651-0.651h5.099c0.36,0,0.651,0.292,0.651,0.651v9.364
                  l6.867,6.663c0.258,0.25,0.264,0.663,0.014,0.921c-0.25,0.258-0.662,0.265-0.921,0.014l-7.065-6.855
                  c-0.126-0.123-0.198-0.291-0.198-0.468V8.654h-3.797v4.04c0,0.262-0.156,0.498-0.397,0.6c-0.241,0.102-0.52,0.049-0.708-0.132
                  L25,7.314L6.809,24.965C6.682,25.087,6.518,25.149,6.355,25.149z" />
                  </g>
                  <g>
                    <path d="M38.386,44.244h-8.393c-0.36,0-0.651-0.292-0.651-0.651V30.221h-8.684v13.372c0,0.36-0.292,0.651-0.651,0.651h-8.393
                  c-0.36,0-0.651-0.292-0.651-0.651V24.076c0-0.36,0.292-0.651,0.651-0.651c0.36,0,0.651,0.292,0.651,0.651v18.865h7.09V29.569
                  c0-0.36,0.292-0.651,0.651-0.651h9.987c0.36,0,0.651,0.292,0.651,0.651v13.372h7.09V24.604c0-0.36,0.292-0.651,0.651-0.651
                  c0.36,0,0.651,0.292,0.651,0.651v18.989C39.038,43.953,38.746,44.244,38.386,44.244z" />
                  </g>
                </g>
                </svg>
                <div class="clearfix"></div>
                Home </a> </li>
              <li data-animation="2" class="hvr-overline-from-center"> <a href="#0" data-menu="couple"> <svg version="1.1" id="Layer_2" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                <g>
                  <g>
                    <path d="M16.363,45.372c-3.876,0-7.493-0.221-10.186-0.621c-3.556-0.529-5.142-1.296-5.142-2.487c0-0.089,0.018-0.177,0.054-0.259
                  l1.66-3.834c0.073-3.544,2.96-6.408,6.512-6.446l3.43-0.732v-2.76c-2.056-1.346-3.913-3.741-5.189-6.685
                  c-0.078,0.012-0.158,0.018-0.237,0.018c-1.233,0-2.435-1.456-2.923-3.54c-0.236-1.007-0.26-2.01-0.069-2.825
                  c0.228-0.973,0.743-1.599,1.448-1.765c0.143-0.033,0.292-0.045,0.44-0.037C6.99,8.42,11.388,4.628,16.509,4.628
                  c5.175,0,9.522,3.728,10.35,8.768c0.707,0.133,1.249,0.731,1.526,1.686c0.233,0.804,0.26,1.807,0.075,2.825
                  c-0.401,2.219-1.67,3.808-2.961,3.68c-1.342,3.082-3.299,5.53-5.462,6.83v2.57l3.71,0.74c3.561,0.035,6.455,2.912,6.517,6.467
                  l1.389,3.85c0.026,0.071,0.039,0.146,0.039,0.221c0,1.191-1.586,1.958-5.142,2.487C23.857,45.152,20.239,45.372,16.363,45.372z
                   M2.379,42.305c0.619,0.764,5.635,1.765,13.984,1.765c8.395,0,13.421-1.013,13.994-1.778l-1.357-3.761
                  c-0.026-0.071-0.039-0.146-0.039-0.221c0-2.912-2.369-5.281-5.281-5.281c-0.043,0-0.085-0.004-0.127-0.012l-4.295-0.856
                  c-0.305-0.061-0.524-0.328-0.524-0.639v-3.482c0-0.239,0.131-0.459,0.342-0.573c2.134-1.152,4.172-3.742,5.45-6.929
                  c0.073-0.183,0.225-0.322,0.413-0.38c0.188-0.058,0.392-0.027,0.555,0.083c0.039,0.026,0.074,0.042,0.105,0.048
                  c0.015,0.003,0.029,0.004,0.042,0.004c0.444,0,1.242-0.995,1.536-2.616c0.147-0.812,0.131-1.625-0.045-2.231
                  c-0.125-0.433-0.328-0.734-0.517-0.769c-0.042-0.008-0.081-0.001-0.135,0.016c-0.185,0.055-0.387,0.026-0.548-0.081
                  c-0.162-0.107-0.267-0.281-0.287-0.474c-0.498-4.678-4.425-8.206-9.137-8.206c-4.722,0-8.742,3.681-9.152,8.381
                  C7.338,14.537,7.202,14.736,7,14.837c-0.203,0.102-0.443,0.09-0.636-0.03c-0.138-0.086-0.256-0.123-0.346-0.102
                  c-0.187,0.044-0.374,0.355-0.477,0.794c-0.144,0.614-0.119,1.427,0.069,2.231c0.368,1.57,1.211,2.534,1.654,2.534
                  c0.019,0,0.037-0.002,0.054-0.006c0.034-0.008,0.073-0.03,0.117-0.067c0.161-0.133,0.375-0.182,0.577-0.129
                  c0.202,0.052,0.367,0.197,0.444,0.391c1.216,3.073,3.166,5.638,5.218,6.862c0.197,0.118,0.318,0.33,0.318,0.559v3.647
                  c0,0.307-0.215,0.573-0.515,0.637l-4.011,0.856c-0.045,0.009-0.09,0.014-0.136,0.014c-2.912,0-5.281,2.369-5.281,5.281
                  c0,0.089-0.018,0.177-0.054,0.259L2.379,42.305z" />
                  </g>
                  <g>
                    <path d="M29.319,32.04c-0.301,0-0.571-0.21-0.636-0.516c-0.075-0.352,0.149-0.698,0.501-0.773l2.831-0.604v-2.158
                  c-1.404-0.937-2.723-2.483-3.742-4.396c-0.169-0.318-0.049-0.712,0.268-0.881c0.317-0.17,0.712-0.049,0.881,0.268
                  c0.986,1.85,2.256,3.303,3.578,4.091c0.197,0.118,0.318,0.33,0.318,0.559v3.044c0,0.307-0.215,0.573-0.515,0.637l-3.346,0.714
                  C29.41,32.035,29.364,32.04,29.319,32.04z" />
                  </g>
                  <g>
                    <path d="M35.958,42.105c-0.172,0-0.317,0-0.434-0.001c-0.36-0.002-0.649-0.296-0.647-0.656c0.003-0.36,0.296-0.644,0.656-0.647
                  c7.024,0.046,11.41-0.764,12.085-1.403l-1.108-3.072c-0.026-0.071-0.039-0.146-0.039-0.221c0-2.371-1.928-4.299-4.298-4.299
                  c-0.043,0-0.085-0.004-0.127-0.012l-3.584-0.713c-0.305-0.061-0.524-0.328-0.524-0.639v-2.906c0-0.239,0.131-0.46,0.342-0.573
                  c1.759-0.949,3.441-3.089,4.499-5.727c0.073-0.183,0.226-0.323,0.414-0.381c0.188-0.057,0.393-0.027,0.556,0.084
                  c0.011,0.007,0.031,0.02,0.046,0.022c0.074,0.017,0.283-0.085,0.522-0.408c0.305-0.409,0.548-1.024,0.668-1.685
                  c0.12-0.662,0.107-1.322-0.035-1.812c-0.112-0.386-0.272-0.552-0.347-0.565c-0.007-0.001-0.027-0.001-0.061,0.01
                  c-0.185,0.056-0.387,0.027-0.549-0.08c-0.162-0.107-0.267-0.281-0.288-0.474c-0.409-3.848-3.64-6.751-7.516-6.751
                  c-1.822,0-3.582,0.658-4.955,1.852c-0.271,0.236-0.683,0.207-0.919-0.064c-0.236-0.271-0.207-0.683,0.064-0.919
                  c1.61-1.4,3.674-2.171,5.81-2.171c4.346,0,8.001,3.114,8.73,7.334c0.596,0.145,1.05,0.662,1.282,1.467
                  c0.199,0.687,0.222,1.541,0.066,2.406c-0.157,0.865-0.478,1.657-0.904,2.231c-0.47,0.631-1.037,0.956-1.605,0.933
                  c-1.117,2.534-2.732,4.553-4.518,5.646v1.995l2.999,0.597c3.019,0.035,5.471,2.471,5.534,5.484l1.153,3.196
                  c0.026,0.071,0.039,0.146,0.039,0.221c0,0.221-0.068,0.552-0.392,0.874C46.867,41.972,38.528,42.105,35.958,42.105z" />
                  </g>
                </g>
                </svg>
                <div class="clearfix"></div>
                couple </a> </li>
              <li data-animation="3" class="hvr-overline-from-center"> <a href="#0" data-menu="projects">
                <svg version="1.1" id="Layer_3" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                <path d="M25,41.457c-0.099,0-0.199-0.023-0.29-0.068c-0.188-0.094-4.654-2.336-9.194-6.235C9.441,29.934,6.23,24.242,6.23,18.692
                  c0-4.906,2.233-10.148,8.5-10.148c1.243,0,2.438,0.161,3.551,0.479c0.346,0.099,0.546,0.459,0.448,0.805
                  c-0.099,0.346-0.458,0.547-0.805,0.447c-0.997-0.285-2.071-0.429-3.193-0.429c-6.678,0-7.197,6.771-7.197,8.846
                  c0,11.653,15.165,20.157,17.467,21.38c2.303-1.224,17.468-9.735,17.468-21.38c0-2.075-0.519-8.846-7.197-8.846
                  c-7.18,0-9.643,5.901-9.667,5.961c-0.099,0.246-0.338,0.408-0.604,0.408l0,0c-0.266,0-0.505-0.161-0.604-0.408
                  c-0.007-0.017-0.789-1.897-2.711-3.525c-0.275-0.232-0.308-0.643-0.076-0.918c0.232-0.275,0.644-0.308,0.918-0.076
                  c1.196,1.013,1.996,2.103,2.479,2.893c1.199-1.93,4.28-5.638,10.264-5.638c6.266,0,8.499,5.242,8.499,10.148
                  c0,5.55-3.211,11.243-9.286,16.462c-4.539,3.9-9.006,6.141-9.194,6.235C25.199,41.434,25.1,41.457,25,41.457z" />
                </svg>
                <div class="clearfix"></div>
                Events</a> </li>
              <li data-animation="6" class="hvr-overline-from-center"> <a href="#0" data-menu="projects">
                  <svg version="1.1" id="Layer_6" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                    <g>
                      <g>
                        <path d="M41.796,40.02H8.204c-2.514,0-4.559-2.045-4.559-4.559V19.59c0-2.493,2.025-4.641,4.514-4.788l9.298-0.547
                      c1.97-0.116,4.382-1.048,5.268-2.036c1.125-1.255,3.851-2.238,6.206-2.238h2.482c2.338,0,5.177,0.968,6.463,2.204
                      c1.061,1.02,3.28,2.097,4.846,2.352c2.005,0.327,3.636,2.594,3.636,5.054v15.871C46.356,37.975,44.31,40.02,41.796,40.02z
                       M28.93,11.283c-1.961,0-4.359,0.827-5.236,1.805c-1.117,1.246-3.823,2.329-6.161,2.467l-9.298,0.547
                      c-1.813,0.107-3.288,1.671-3.288,3.487v15.871c0,1.796,1.461,3.257,3.257,3.257h33.593c1.796,0,3.257-1.461,3.257-3.257V19.59
                      c0-1.818-1.165-3.544-2.543-3.768c-1.845-0.301-4.278-1.486-5.539-2.698c-1.038-0.998-3.584-1.84-5.56-1.84H28.93z" />
                      </g>
                      <g>
                        <path d="M30.404,36.405c-5.917,0-10.732-4.795-10.732-10.688c0-5.893,4.814-10.687,10.732-10.687s10.732,4.794,10.732,10.687
                      c0,2.007-0.562,3.963-1.625,5.657c-0.191,0.305-0.593,0.397-0.898,0.205c-0.305-0.191-0.397-0.593-0.205-0.898
                      c0.932-1.486,1.425-3.202,1.425-4.964c0-5.175-4.23-9.385-9.429-9.385c-5.199,0-9.429,4.21-9.429,9.385
                      c0,5.175,4.23,9.385,9.429,9.385c1.594,0,3.17-0.403,4.556-1.167c0.315-0.173,0.711-0.059,0.885,0.256
                      c0.173,0.315,0.059,0.711-0.256,0.885C34.01,35.946,32.217,36.405,30.404,36.405z" />
                      </g>
                      <g>
                        <path d="M24.267,26.369c-0.36,0-0.651-0.292-0.651-0.651c0-3.728,3.045-6.761,6.787-6.761c0.36,0,0.651,0.292,0.651,0.651
                      c0,0.36-0.292,0.651-0.651,0.651c-3.024,0-5.485,2.448-5.485,5.458C24.919,26.077,24.627,26.369,24.267,26.369z" />
                      </g>
                      <g>
                        <path d="M16.353,39.903c-0.36,0-0.651-0.292-0.651-0.651V22.663c0-0.36,0.292-0.651,0.651-0.651c0.36,0,0.651,0.292,0.651,0.651
                      v16.589C17.004,39.612,16.713,39.903,16.353,39.903z" />
                      </g>
                      <g>
                        <path d="M9.856,16.039c-1.342,0-2.476-1.045-2.581-2.38c-0.054-0.688,0.164-1.356,0.614-1.88c0.45-0.523,1.077-0.841,1.766-0.895
                      l6.618-0.516c1.424-0.109,2.674,0.97,2.784,2.372c0.054,0.688-0.164,1.356-0.614,1.88c-0.449,0.524-1.076,0.842-1.766,0.896
                      l-6.617,0.516C9.991,16.036,9.923,16.039,9.856,16.039z M16.477,11.661c-0.034,0-0.069,0.002-0.103,0.004l-6.618,0.516
                      c-0.343,0.027-0.655,0.185-0.879,0.445c-0.223,0.26-0.331,0.589-0.304,0.929c0.055,0.695,0.673,1.227,1.385,1.176l6.617-0.516
                      c0.343-0.027,0.655-0.185,0.879-0.445c0.223-0.26,0.331-0.59,0.304-0.93C17.706,12.18,17.144,11.661,16.477,11.661z" />
                      </g>
                    </g>
                  </svg>
                  <div class="clearfix"></div>
                  Gallery</a> </li>
              <li data-animation="4" class="hvr-overline-from-center"> <a href="#0" data-menu="projects">
                <svg version="1.1" id="Layer_4" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                  <g>
                    <g>
                      <g>
                        <g>
                          <path d="M25.038,17.105c-2.9,0-4.999-3.802-4.999-6.365c0-2.756,2.242-4.998,4.999-4.998s4.999,2.242,4.999,4.998
                            C30.037,13.303,27.938,17.105,25.038,17.105z M25.038,7.044c-2.038,0-3.696,1.658-3.696,3.696c0,2.21,1.792,5.063,3.696,5.063
                            c1.904,0,3.696-2.852,3.696-5.063C28.734,8.702,27.076,7.044,25.038,7.044z" />
                        </g>
                        <g>
                          <path d="M31.061,31.541h-2.275c-0.36,0-0.651-0.292-0.651-0.651c0-0.36,0.292-0.651,0.651-0.651h1.671l0.752-9.932
                            c-0.708-0.402-2.735-1.345-6.172-1.345c-3.433,0-5.461,0.942-6.172,1.345l0.752,9.932h1.671c0.36,0,0.651,0.292,0.651,0.651
                            c0,0.36-0.292,0.651-0.651,0.651h-2.275c-0.341,0-0.624-0.263-0.65-0.602l-0.827-10.925c-0.017-0.221,0.08-0.435,0.257-0.569
                            c0.097-0.073,2.42-1.786,7.243-1.786c4.824,0,7.147,1.713,7.243,1.786c0.177,0.134,0.274,0.348,0.257,0.569l-0.827,10.925
                            C31.685,31.278,31.402,31.541,31.061,31.541z" />
                        </g>
                        <g>
                          <path d="M27.408,44.259h-4.741c-0.333,0-0.612-0.251-0.648-0.581L20.641,30.96c-0.039-0.358,0.22-0.679,0.577-0.718
                            c0.358-0.04,0.679,0.22,0.718,0.577l1.316,12.136h3.572l1.315-12.136c0.039-0.358,0.359-0.617,0.718-0.577
                            c0.357,0.039,0.616,0.36,0.577,0.718l-1.378,12.718C28.02,44.008,27.741,44.259,27.408,44.259z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M37.227,19.757c-2.653,0-4.574-3.469-4.574-5.807c0-2.522,2.052-4.574,4.574-4.574c2.522,0,4.574,2.052,4.574,4.574
                            C41.801,16.288,39.88,19.757,37.227,19.757z M37.227,10.678c-1.804,0-3.271,1.468-3.271,3.271c0,1.967,1.586,4.505,3.271,4.505
                            c1.685,0,3.271-2.538,3.271-4.505C40.498,12.146,39.031,10.678,37.227,10.678z" />
                        </g>
                        <g>
                          <path d="M42.662,32.783H40.61c-0.36,0-0.651-0.292-0.651-0.651s0.292-0.651,0.651-0.651h1.449l0.664-8.767
                            c-1.058-0.381-3.745-1.281-5.495-1.281c-2.211,0-5.23,1.119-5.261,1.13c-0.336,0.125-0.712-0.045-0.838-0.382
                            c-0.126-0.337,0.045-0.712,0.382-0.838c0.132-0.049,3.268-1.213,5.717-1.213c2.453,0,6.258,1.474,6.418,1.537
                            c0.267,0.104,0.434,0.37,0.413,0.656l-0.746,9.858C43.286,32.52,43.003,32.783,42.662,32.783z" />
                        </g>
                        <g>
                          <path d="M39.366,42.852c-0.027,0-0.053-0.002-0.081-0.005c-0.357-0.044-0.611-0.369-0.567-0.726l1.244-10.068
                            c0.044-0.357,0.368-0.611,0.726-0.567c0.357,0.044,0.611,0.369,0.567,0.726L40.012,42.28
                            C39.971,42.61,39.691,42.852,39.366,42.852z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M12.773,19.757c-2.653,0-4.574-3.469-4.574-5.807c0-2.522,2.052-4.574,4.574-4.574c2.522,0,4.574,2.052,4.574,4.574
                            C17.347,16.288,15.427,19.757,12.773,19.757z M12.773,10.678c-1.804,0-3.271,1.468-3.271,3.271c0,1.967,1.586,4.505,3.271,4.505
                            c1.685,0,3.271-2.538,3.271-4.505C16.045,12.146,14.577,10.678,12.773,10.678z" />
                        </g>
                        <g>
                          <path d="M9.391,32.783H7.338c-0.341,0-0.624-0.263-0.65-0.602l-0.747-9.858c-0.022-0.285,0.146-0.552,0.413-0.656
                            c0.161-0.063,3.965-1.537,6.419-1.537c2.456,0,5.679,1.277,5.815,1.331c0.334,0.134,0.496,0.512,0.363,0.846
                            c-0.133,0.334-0.512,0.498-0.846,0.363c-0.031-0.012-3.128-1.238-5.331-1.238c-1.752,0-4.438,0.9-5.495,1.281l0.664,8.767h1.449
                            c0.36,0,0.651,0.292,0.651,0.651S9.75,32.783,9.391,32.783z" />
                        </g>
                        <g>
                          <path d="M10.634,42.852c-0.324,0-0.605-0.242-0.646-0.571L8.744,32.212c-0.044-0.357,0.21-0.682,0.567-0.726
                            c0.361-0.044,0.682,0.21,0.726,0.567l1.244,10.068c0.044,0.357-0.21,0.682-0.567,0.726C10.687,42.85,10.66,42.852,10.634,42.852
                            z" />
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
                <div class="clearfix"></div>
                Friends </a> </li>
              <li data-animation="5" class="hvr-overline-from-center"> <a href="#0" data-menu="projects">
                <svg version="1.1" id="Layer_5" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                  <path d="M36.835,43.864c-0.104,0-0.209-0.025-0.304-0.075L25,37.702l-11.531,6.087c-0.219,0.116-0.486,0.097-0.687-0.049
                  c-0.201-0.146-0.301-0.393-0.259-0.638l2.226-12.848l-9.353-9.086C5.218,20.995,5.154,20.736,5.23,20.5
                  c0.077-0.236,0.281-0.408,0.527-0.443l9.853-1.415c0.359-0.049,0.686,0.196,0.737,0.552c0.051,0.356-0.196,0.686-0.552,0.737
                  l-8.541,1.226l8.649,8.402c0.154,0.15,0.225,0.366,0.188,0.578l-2.059,11.881l10.663-5.629c0.19-0.1,0.418-0.1,0.608,0l10.663,5.629
                  l-2.059-11.881c-0.037-0.212,0.034-0.428,0.188-0.578l8.649-8.402L30.81,19.443c-0.213-0.031-0.397-0.164-0.492-0.357L25,8.264
                  l-3.924,7.984c-0.159,0.323-0.55,0.456-0.872,0.297c-0.323-0.159-0.456-0.549-0.297-0.872L24.415,6.5
                  c0.11-0.223,0.336-0.364,0.585-0.364s0.475,0.141,0.585,0.364l5.751,11.703l12.907,1.853c0.246,0.035,0.45,0.207,0.527,0.443
                  c0.077,0.236,0.012,0.495-0.166,0.668l-9.353,9.086l2.226,12.848c0.042,0.245-0.058,0.492-0.259,0.638
                  C37.105,43.822,36.97,43.864,36.835,43.864z" />
                </svg>
                <div class="clearfix"></div>
                Bridals </a> </li>


              <li data-animation="8" class="hvr-overline-from-center"> <a href="#0" data-menu="projects">
                <svg version="1.1" id="Layer_8" x="0px" y="0px"
                                       viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                <g>
                  <g>
                    <path d="M13.666,26.761c-0.167,0-0.333-0.064-0.461-0.191c-0.254-0.254-0.254-0.667,0-0.921L35.246,3.61
                  c0.254-0.254,0.667-0.254,0.921,0c0.254,0.254,0.254,0.667,0,0.921l-22.041,22.04C13.999,26.698,13.832,26.761,13.666,26.761z" />
                  </g>
                  <g>
                    <path d="M3.81,48.617c-0.914,0-1.387-0.275-1.689-0.576c-0.771-0.771-1.367-2.666,2.356-10.181
                  c1.963-3.963,4.245-7.687,4.268-7.724c0.027-0.044,0.058-0.083,0.094-0.12l5.076-5.077c0.254-0.254,0.667-0.254,0.921,0
                  c0.254,0.254,0.254,0.667,0,0.921l-5.022,5.022c-0.31,0.51-2.379,3.936-4.174,7.562c-3.554,7.177-2.789,8.486-2.599,8.675
                  c0.19,0.189,1.499,0.955,8.681-2.603c3.626-1.796,7.047-3.861,7.556-4.171l2.684-2.686c0.254-0.254,0.667-0.254,0.921,0
                  c0.254,0.254,0.254,0.667,0,0.921l-2.74,2.741c-0.036,0.036-0.076,0.068-0.12,0.094c-0.037,0.023-3.761,2.304-7.724,4.268
                  C7.725,47.95,5.233,48.617,3.81,48.617z" />
                  </g>
                  <g>
                    <path d="M22.894,38.302c-0.167,0-0.333-0.064-0.46-0.191c-0.254-0.254-0.254-0.667,0-0.921L45.63,13.994
                  c0.254-0.254,0.667-0.254,0.921,0c0.254,0.254,0.254,0.667,0,0.921L23.355,38.111C23.228,38.238,23.061,38.302,22.894,38.302z" />
                  </g>
                  <g>
                    <path d="M9.156,46.274c-0.273,0-0.527-0.173-0.618-0.445c-0.009-0.026-0.468-1.356-1.485-2.374
                  c-1.038-1.038-2.451-1.561-2.465-1.566c-0.338-0.123-0.512-0.497-0.389-0.835c0.123-0.338,0.498-0.512,0.835-0.389
                  c0.069,0.025,1.7,0.629,2.94,1.868c1.246,1.247,1.778,2.817,1.8,2.883c0.113,0.341-0.071,0.71-0.412,0.824
                  C9.293,46.263,9.224,46.274,9.156,46.274z" />
                  </g>
                  <g>
                    <path d="M19.405,41.102c-0.217,0-0.429-0.109-0.553-0.306c-0.016-0.026-1.634-2.596-4.045-5.007
                  c-2.417-2.417-5.15-4.196-5.177-4.213c-0.302-0.195-0.389-0.599-0.193-0.901c0.195-0.302,0.598-0.389,0.9-0.193
                  c0.116,0.075,2.873,1.868,5.391,4.386c2.521,2.52,4.16,5.128,4.229,5.238c0.191,0.305,0.098,0.707-0.207,0.897
                  C19.642,41.07,19.523,41.102,19.405,41.102z" />
                  </g>
                  <g>
                    <path d="M46.091,15.106c-0.208,0-0.412-0.099-0.538-0.284c-0.021-0.031-2.104-3.067-4.625-5.588
                  c-2.525-2.525-5.558-4.605-5.588-4.626C35.042,4.405,34.966,4,35.169,3.703c0.203-0.297,0.608-0.373,0.905-0.17
                  c0.128,0.087,3.164,2.17,5.774,4.781c2.609,2.61,4.692,5.646,4.78,5.775c0.203,0.297,0.126,0.702-0.17,0.905
                  C46.345,15.069,46.217,15.106,46.091,15.106z" />
                  </g>
                  <g>
                    <path d="M42.254,18.942c-0.208,0-0.412-0.099-0.538-0.284c-0.021-0.03-2.104-3.067-4.626-5.588
                  c-2.525-2.524-5.558-4.604-5.588-4.625c-0.297-0.203-0.373-0.608-0.171-0.905c0.203-0.297,0.609-0.374,0.905-0.171
                  c0.128,0.087,3.165,2.17,5.775,4.78c2.61,2.61,4.693,5.646,4.78,5.774c0.203,0.297,0.126,0.702-0.17,0.905
                  C42.508,18.905,42.381,18.942,42.254,18.942z" />
                  </g>
                  <g>
                    <path d="M45.784,13.82c-0.167,0-0.333-0.064-0.461-0.191c-0.254-0.254-0.254-0.667,0-0.921c1.371-1.371,1.961-2.673,1.803-3.979
                  c-0.142-1.174-0.892-2.425-2.292-3.825c-2.876-2.876-5.023-2.971-7.655-0.338c-0.254,0.254-0.667,0.254-0.921,0
                  c-0.254-0.254-0.254-0.667,0-0.921c4.105-4.104,7.386-1.772,9.497,0.338c1.614,1.615,2.486,3.116,2.664,4.59
                  c0.209,1.73-0.502,3.383-2.176,5.056C46.117,13.757,45.951,13.82,45.784,13.82z" />
                  </g>
                  <g>
                    <path d="M19.402,34.809c-0.167,0-0.333-0.064-0.461-0.191c-0.254-0.254-0.254-0.667,0-0.921l16.874-16.873
                  c0.254-0.254,0.667-0.254,0.921,0c0.254,0.254,0.254,0.667,0,0.921L19.863,34.618C19.735,34.745,19.569,34.809,19.402,34.809z" />
                  </g>
                  <g>
                    <path d="M15.667,31.072c-0.167,0-0.333-0.064-0.46-0.191c-0.254-0.254-0.254-0.667,0-0.921l16.873-16.873
                  c0.254-0.254,0.667-0.254,0.921,0c0.254,0.254,0.254,0.667,0,0.921L16.128,30.882C16,31.009,15.834,31.072,15.667,31.072z" />
                  </g>
                </g>
                </svg> RSVP </a> </li>

        </ul>
          </div>
    </div>
      </div>
@endsection


@section('home')
  <div class="main-page-area">
    <div id="pt-main" class="pt-perspective">
      <div class="pt-page-1">
            <div class="container-fluid bg-main-image">
          <div class=" blur-img bg-home"></div>
          <div class="page-fixed">
                <div class="bg-main-image-overlay">
              <div class="main-section-s2">
                    <div class=" inner-data">
                  <div class="couple-name wow fadeInUp">
                        <h1 class="wow fadeInLeft">Hiphy </h1>
                        <span class="glyphicon glyphicon-heart"></span>
                        <h1 class="wow fadeInRight">Tanny </h1>
                      </div>
                  <div class="tag-line wow fadeInUp">
                        <p><span><blink>We’re getting married.</blink></span></p>
                      </div>
                  <div class="clearfix"></div>
                  <div class="countdown countdown-container container">
                        <div class="clock row">
                      <div class="clock-item clock-days countdown-time-value wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.25s">
                            <div class="wrap">
                          <div class="inner">
                                <div id="canvas-days" class="clock-canvas"></div>
                                <div class="text">
                              <p class="val">0</p>
                              <p class="type-days type-time">days</p>
                            </div>
                              </div>
                        </div>
                          </div>
                      <div class="clock-item clock-hours countdown-time-value wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.33s">
                            <div class="wrap">
                          <div class="inner">
                                <div id="canvas-hours" class="clock-canvas"></div>
                                <div class="text">
                              <p class="val">0</p>
                              <p class="type-hours type-time">hours</p>
                            </div>
                              </div>
                        </div>
                          </div>
                      <div class="clock-item clock-minutes countdown-time-value wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.37s">
                            <div class="wrap">
                          <div class="inner">
                                <div id="canvas-minutes" class="clock-canvas"></div>
                                <div class="text">
                              <p class="val">0</p>
                              <p class="type-minutes type-time">minutes</p>
                            </div>
                              </div>
                        </div>
                          </div>
                      <div class="clock-item clock-seconds countdown-time-value wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.42s">
                            <div class="wrap">
                          <div class="inner">
                                <div id="canvas-seconds" class="clock-canvas"></div>
                                <div class="text">
                              <p class="val">0</p>
                              <p class="type-seconds type-time">seconds</p>
                            </div>
                              </div>
                        </div>
                          </div>
                    </div>
                      </div>
                </div>
                  </div>
            </div>
              </div>
        </div>
          </div>




      <div class="pt-page-2">
            <div class="container-fluid display_none bg-main-image">
          <div class="blur-img bg-couple"></div>
          <div class="page-scroll">
                <div class="bg-main-image-overlay-2">
              <div class="main-section-s2">
                    <div class="col-md-12">
                  <div class="page-title wow fadeInUp" data-class="fadeInUp">
                        <h2>Coming soon <span><i class="glyphicon glyphicon-heart"></i></span></h2>
                      </div>
                  <div class="container">
                        <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1 wow fadeInLeft responsive-margin couple-responsive-padding" data-class="fadeInLeft">
                      <div class="col-md-12 couple-responsive-padding">
                            <div class="the-couple groom-color text-center">
                          <div class="the-couple-title">
                                <p><span>Groom</span></p>
                              </div>
                          <div class="the-couple-img col-md-12 col-md-offset-0 col-xs-12">
                                <div class="person-image"> <img src="images/groom.jpg" alt="the-couple image" class="img-circle">
                              <div class="the-couple-img-hover">
                                    <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                  </div>
                            </div>
                              </div>
                          <div class="the-couple-data">
                                <h3>leonore simmons</h3>
                                <p>02/02/1990</p>
                                <p class="about-the-couple">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat dui non justo scelerisque interdum. Mauris cursus gravida efficitur. Aliquam viverra semper sodales. Cras sed scelerisque orci. Vivamus vitae nulla quis justo suscipit interdum.</p>
                              </div>
                        </div>
                          </div>
                    </div>
                        <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1 responsive-margin wow fadeInRight couple-responsive-padding" data-class="fadeInRight">
                      <div class="col-md-12 couple-responsive-padding">
                            <div class="the-couple bride-color text-center">
                          <div class="the-couple-title">
                                <p><span>Bride</span></p>
                              </div>
                          <div class="the-couple-img col-md-12 col-md-offset-0 col-xs-12">
                                <div class="person-image"> <img src="images/bride.jpg" alt="the-couple image" class="img-circle">
                              <div class="the-couple-img-hover">
                                    <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                  </div>
                            </div>
                              </div>
                          <div class="the-couple-data">
                                <h3>bianca pawlikowski </h3>
                                <p>22/05/1992</p>
                                <p class="about-the-couple">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat dui non justo scelerisque interdum. Mauris cursus gravida efficitur. Aliquam viverra semper sodales. Cras sed scelerisque orci. Vivamus vitae nulla quis justo suscipit interdum.</p>
                              </div>
                        </div>
                          </div>
                    </div>
                      </div> 
                </div>
                  </div>
            </div>
              </div>
        </div>
          </div>




      <div class="pt-page-3">
            <div class="container-fluid display_none bg-main-image">
          <div class="blur-img bg-loveline"></div>
          <div class="page-scroll">
                <div class="bg-main-image-overlay-2">
              <div class="main-section-s2">
                    <div class="col-md-12">
                  <div class="page-title wow fadeInUp" data-class="fadeInUp">
                        <h2>Loveline <span><i class="glyphicon glyphicon-heart"></i></span></h2>
                      </div>
                  <div class="col-md-12 text-center vector-img"> <img class="img" src="images/loveline-vector.png" alt="vector-img" /> </div>
                  <div class="clearfix"></div>
                  {{-- <div class="container-fluid display_none">
                        <ul class="timeline">
                          <li>
                                <div class="timeline-badge"><a><i class="glyphicon glyphicon-heart"></i></a></div>
                                <div class="timeline-panel wow fadeInLeft" data-class="fadeInLeft" data-wow-delay="1.6s">
                              <div class="timeline-heading">
                                    <h3 class="timeline-title">Pre Wedding Shots</h3>
                                    <span class="label label-default">26 Mar 2017</span> </div>
                              <div class="ceremony-slider">
                                    <div> <img class="img-responsive" src="images/timeline-slider/1.jpg" alt="engaged1" /> </div>
                                    <div> <img class="img-responsive" src="images/timeline-slider/2.jpg" alt="engaged2" /> </div>
                                    <div> <img class="img-responsive" src="images/timeline-slider/3.jpg" alt="engaged3" /> </div>
                                    <div> <img class="img-responsive" src="images/timeline-slider/4.jpg" alt="engaged4" /> </div>
                                    <div> <img class="img-responsive" src="images/timeline-slider/5.jpg" alt="engaged5" /> </div>
                                    <div> <img class="img-responsive" src="images/timeline-slider/6.jpg" alt="engaged6" /> </div>
                                    <div> <img class="img-responsive" src="images/timeline-slider/7.jpg" alt="engaged7" /> </div>
                                    <div> <img class="img-responsive" src="images/timeline-slider/8.jpg" alt="engaged8" /> </div>
                                    <div> <img class="img-responsive" src="images/timeline-slider/9.jpg" alt="engaged9" /> </div>
                                  </div>
                              <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat dui non justo scelerisque interdum. Mauris cursus gravida efficitur. Aliquam viverra semper sodales. Cras sed scelerisque orci. Vivamus vitae nulla quis justo suscipit interdum. Suspendisse potenti. Quisque felis est, blandit sed laoreet quis.</p>
                                  </div>
                            </div>
                              </li>
                      <li class="timeline-inverted">
                            <div class="timeline-badge"><a href="#" target="_blank"><i class="glyphicon glyphicon-heart"></i></a></div>
                            <div class="timeline-panel wow fadeInRight" data-class="fadeInRight" data-wow-delay="1.3s">
                          <div class="timeline-heading">
                                <h3 class="timeline-title">Bachelors Eve & Bridal Showers</h3>
                                <span class="label label-default">10 Feb 2015</span> </div>

                          <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat dui non justo scelerisque interdum. Mauris cursus gravida efficitur. Aliquam viverra semper sodales. Cras sed scelerisque orci. Vivamus vitae nulla quis justo suscipit interdum. Suspendisse potenti. Quisque felis est, blandit sed laoreet quis.</p>
                              </div>
                        </div>
                          </li>
                      <li>
                            <div class="timeline-badge"><a><i class="glyphicon glyphicon-heart"></i></a></div>
                            <div class="timeline-panel wow fadeInLeft" data-class="fadeInLeft" data-wow-delay="1.6s">
                          <div class="timeline-heading">
                                <h3 class="timeline-title">We are Engaged</h3>
                                <span class="label label-default">05 Mar 2016</span> </div>
                          <div class="ceremony-slider">
                                <div> <img class="img-responsive" src="images/timeline-slider/1.jpg" alt="engaged1" /> </div>
                                <div> <img class="img-responsive" src="images/timeline-slider/2.jpg" alt="engaged2" /> </div>
                                <div> <img class="img-responsive" src="images/timeline-slider/3.jpg" alt="engaged3" /> </div>
                                <div> <img class="img-responsive" src="images/timeline-slider/4.jpg" alt="engaged4" /> </div>
                                <div> <img class="img-responsive" src="images/timeline-slider/5.jpg" alt="engaged5" /> </div>
                                <div> <img class="img-responsive" src="images/timeline-slider/6.jpg" alt="engaged6" /> </div>
                                <div> <img class="img-responsive" src="images/timeline-slider/7.jpg" alt="engaged7" /> </div>
                                <div> <img class="img-responsive" src="images/timeline-slider/8.jpg" alt="engaged8" /> </div>
                                <div> <img class="img-responsive" src="images/timeline-slider/9.jpg" alt="engaged9" /> </div>
                              </div>
                          <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat dui non justo scelerisque interdum. Mauris cursus gravida efficitur. Aliquam viverra semper sodales. Cras sed scelerisque orci. Vivamus vitae nulla quis justo suscipit interdum. Suspendisse potenti. Quisque felis est, blandit sed laoreet quis.</p>
                              </div>
                        </div>
                          </li>
                      <li class="timeline-inverted">
                            <div class="timeline-badge"><a><i class="glyphicon glyphicon-heart"></i></a></div>
                            <div class="timeline-panel">
                          <div class="timeline-heading">
                                <h3 class="timeline-title">Outdoor Tour</h3>
                                <span class="label label-default">05 May 2016</span> </div>
                          <div class="timeline-body">
                                <div class="embed-responsive embed-responsive-4by3 tour-video">
                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KRY0Z9CAZdk"></iframe>
                            </div>
                              </div>
                        </div>
                          </li>
                      <li>
                            <div class="timeline-badge"><a><i class="glyphicon glyphicon-heart"></i></a></div>
                            <div class="timeline-panel wow fadeInLeft" data-class="fadeInLeft" data-wow-delay="2.2s">
                          <div class="timeline-heading">
                                <h3 class="timeline-title">Getting married</h3>
                                <span class="label label-default">22nd April 2017</span> </div>
                          <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat dui non justo scelerisque interdum. Mauris cursus gravida efficitur. Aliquam viverra semper sodales. Cras sed scelerisque orci. Vivamus vitae nulla quis justo suscipit interdum. Suspendisse potenti. Quisque felis est, blandit sed laoreet quis.</p>
                              </div>
                        </div>
                          </li>
                      <li class="clearfix no-float"></li>
                    </ul>
                      </div>
                </div> --}}
                  </div>
            </div>
              </div>
        </div>
          </div>



      <div class="pt-page-4">
            <div class="container-fluid display_none bg-main-image">
          <div class="blur-img bg-people"></div>
          <div class="page-fixed">
                <div class="bg-main-image-overlay-fixed">
              <div class="main-section-s2">
                    <div class="col-md-12">
                  <div class="page-title wow fadeInUp" data-class="fadeInUp">
                        <h2>The people <span><i class="glyphicon glyphicon-heart"></i></span></h2>
                      </div>
                  {{-- <div class="container">
                        <div class="col-md-12 about-the-people">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat dui non justo scelerisque interdum. Mauris cursus gravida efficitur. Aliquam viverra semper sodales. Cras sed scelerisque orci. Vivamus vitae nulla quis justo suscipit interdum. Suspendisse potenti. Quisque felis est, blandit sed laoreet quis.</p>
                    </div>
                      </div>
                  <div class="container">
                        <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-12 wow fadeInLeft responsive-margin-double" data-class="fadeInLeft">
                      <div class="col-md-12 text-center couple-responsive-padding">
                            <div class="cat-title">
                          <p><span class="label label-default">groomsmen</span></p>
                        </div>
                            <div class="the-people  text-center">
                          <div class="the-people-slider">
                                <div>
                              <div class="the-couple-img col-md-12 padding-left-right-zero">
                                    <div class="person-image img-circle"> <img src="images/groom/1.jpg" alt="the-couple" class="img-circle img-responsive">
                                  <div class="the-couple-img-hover">
                                        <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                      </div>
                                </div>
                                  </div>
                              <div class="the-couple-data">
                                    <h4>John Snow </h4>
                                    <p>Best Men</p>
                                  </div>
                            </div>
                                <div>
                              <div class="the-couple-img col-md-12 padding-left-right-zero">
                                    <div class="person-image  img-circle"> <img src="images/groom/2.jpg" alt="the-couple" class="img-circle img-responsive">
                                  <div class="the-couple-img-hover">
                                        <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                      </div>
                                </div>
                                  </div>
                              <div class="the-couple-data">
                                    <h4>Edward Moore </h4>
                                    <p>Brother</p>
                                  </div>
                            </div>
                                <div>
                              <div class="the-couple-img col-md-12 padding-left-right-zero">
                                    <div class="person-image  img-circle"> <img src="images/groom/3.jpg" alt="the-couple" class="img-circle img-responsive">
                                  <div class="the-couple-img-hover">
                                        <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                      </div>
                                </div>
                                  </div>
                              <div class="the-couple-data">
                                    <h4>David Smith </h4>
                                    <p>Class Mate</p>
                                  </div>
                            </div>
                                <div>
                              <div class="the-couple-img col-md-12 padding-left-right-zero">
                                    <div class="person-image  img-circle"> <img src="images/groom/4.jpg" alt="the-couple" class="img-circle img-responsive">
                                  <div class="the-couple-img-hover">
                                        <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                      </div>
                                </div>
                                  </div>
                              <h4>Joseph Brown </h4>
                              <p>Best Friend</p>
                            </div>
                                <div>
                              <div class="the-couple-img col-md-12 padding-left-right-zero">
                                    <div class="person-image  img-circle"> <img src="images/groom/5.jpg" alt="the-couple" class="img-circle img-responsive">
                                  <div class="the-couple-img-hover">
                                        <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                      </div>
                                </div>
                                  </div>
                              <h4>Robert Green </h4>
                              <p>College Friend</p>
                            </div>
                                <div>
                              <div class="the-couple-img col-md-12 padding-left-right-zero">
                                    <div class="person-image  img-circle"> <img src="images/groom/6.jpg" alt="the-couple" class="img-circle img-responsive">
                                  <div class="the-couple-img-hover">
                                        <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                      </div>
                                </div>
                                  </div>
                              <h4>Jeff Nelson </h4>
                              <p>College Friend</p>
                            </div>
                                <div>
                              <div class="the-couple-img col-md-12 padding-left-right-zero">
                                    <div class="person-image  img-circle"> <img src="images/groom/7.jpg" alt="the-couple" class="img-circle img-responsive">
                                  <div class="the-couple-img-hover">
                                        <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                      </div>
                                </div>
                                  </div>
                              <h4>Kevin Wilson </h4>
                              <p>College Friend</p>
                            </div>
                                <div>
                              <div class="the-couple-img col-md-12 padding-left-right-zero">
                                    <div class="person-image  img-circle"> <img src="images/groom/8.jpg" alt="the-couple" class="img-circle img-responsive">
                                  <div class="the-couple-img-hover">
                                        <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                      </div>
                                </div>
                                  </div>
                              <h4>Jason Parker </h4>
                              <p>College Friend</p>
                            </div>
                              </div>
                        </div>
                          </div>
                    </div>
                        <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-12 pull-right wow fadeInRight" data-class="fadeInRight">
                      <div class="col-md-12 text-center couple-responsive-padding">
                            <div class="cat-title">
                          <p><span class="label label bride-color">Bridesmaids</span></p>
                        </div>
                            <div class="the-people  text-center">
                          <div class="the-people-slider">
                                <div>
                              <div class="the-couple-img col-md-12 padding-left-right-zero">
                                    <div class="person-image  img-circle"> <img src="images/bride/1.jpg" alt="the-couple" class="img-circle img-responsive">
                                  <div class="the-couple-img-hover">
                                        <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                      </div>
                                </div>
                                  </div>
                              <div class="the-couple-data">
                                    <h4>Patricia Adams </h4>
                                    <p>Best Women</p>
                                  </div>
                            </div>
                                <div>
                              <div class="the-couple-img col-md-12 padding-left-right-zero">
                                    <div class="person-image  img-circle"> <img src="images/bride/2.jpg" alt="the-couple" class="img-circle img-responsive">
                                  <div class="the-couple-img-hover">
                                        <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                      </div>
                                </div>
                                  </div>
                              <div class="the-couple-data">
                                    <h4>Linda Mitchell </h4>
                                    <p>Sister</p>
                                  </div>
                            </div>
                                <div>
                              <div class="the-couple-img col-md-12 padding-left-right-zero">
                                    <div class="person-image  img-circle"> <img src="images/bride/3.jpg" alt="the-couple" class="img-circle img-responsive">
                                  <div class="the-couple-img-hover">
                                        <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                      </div>
                                </div>
                                  </div>
                              <div class="the-couple-data">
                                    <h4>Lisa Jones </h4>
                                    <p>Best Friend</p>
                                  </div>
                            </div>
                                <div>
                              <div class="the-couple-img col-md-12 padding-left-right-zero">
                                    <div class="person-image  img-circle"> <img src="images/bride/4.jpg" alt="the-couple" class="img-circle img-responsive">
                                  <div class="the-couple-img-hover">
                                        <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                      </div>
                                </div>
                                  </div>
                              <h4>Jennifer Lewis </h4>
                              <p>class Mate</p>
                            </div>
                                <div>
                              <div class="the-couple-img col-md-12 padding-left-right-zero">
                                    <div class="person-image  img-circle"> <img src="images/bride/5.jpg" alt="the-couple" class="img-circle img-responsive">
                                  <div class="the-couple-img-hover">
                                        <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                      </div>
                                </div>
                                  </div>
                              <h4>Susan Edwards </h4>
                              <p>College Friend</p>
                            </div>
                                <div>
                              <div class="the-couple-img col-md-12 padding-left-right-zero">
                                    <div class="person-image  img-circle"> <img src="images/bride/6.jpg" alt="the-couple" class="img-circle img-responsive">
                                  <div class="the-couple-img-hover">
                                        <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                      </div>
                                </div>
                                  </div>
                              <h4>Nancy Lee </h4>
                              <p>College Friend</p>
                            </div>
                                <div>
                              <div class="the-couple-img col-md-12 padding-left-right-zero">
                                    <div class="person-image  img-circle"> <img src="images/bride/7.jpg" alt="the-couple" class="img-circle img-responsive">
                                  <div class="the-couple-img-hover">
                                        <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                      </div>
                                </div>
                                  </div>
                              <h4>Carol Williams </h4>
                              <p>College Friend</p>
                            </div>
                                <div>
                              <div class="the-couple-img col-md-12 padding-left-right-zero">
                                    <div class="person-image  img-circle"> <img src="images/bride/8.jpg" alt="the-couple" class="img-circle img-responsive">
                                  <div class="the-couple-img-hover">
                                        <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                      </div>
                                </div>
                                  </div>
                              <h4>Sharon Lopez </h4>
                              <p>College Friend</p>
                            </div>
                              </div>
                        </div>
                          </div>
                    </div>
                      </div> --}}
                </div>
                  </div>
            </div>
              </div>
        </div>
          </div>



      <div class="pt-page-5">
            <div class="container-fluid display_none bg-main-image">
          <div class="blur-img bg-wedding"></div>
          <div class="page-fixed">
                <div class="bg-main-image-overlay-fixed">
              <div class="main-section-s2">
                    <div class="col-md-12">
                  <div class="page-title wow fadeInUp" data-class="fadeInUp">
                        <h2>Wedding<span><i class="glyphicon glyphicon-heart"></i></span></h2>
                      </div>
                  {{-- <div class="container wedding-person">
                        <div class="couple-name">
                      <h1 class="wow fadeInLeft" data-class="fadeInLeft">leonore simmons</h1>
                      <span class="glyphicon glyphicon-heart"></span>
                      <h1 class="wow fadeInRight" data-class="fadeInRight">bianca pawlikowski </h1>
                    </div>
                      </div>
                  <div class="container">
                        <div class="col-md-12 about-the-people">
                      <p class="col-md-6 col-md-offset-3 col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat dui non justo scelerisque interdum. Mauris cursus gravida efficitur.</p>
                    </div>
                      </div>
                  <div class="container ceremony-section">
                        <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 responsive-margin text-center wow fadeInLeft padding-left-right-zero" data-class="fadeInLeft">
                      <div class="white-box ceremony-detail">
                        <svg version="1.1"
                                                       x="0px" y="0px" width="338.7px" height="355.1px" viewBox="0 0 338.7 355.1" style="enable-background: new 0 0 338.7 355.1;"
                                                       xml:space="preserve">
                          <defs></defs>
                          <path class="st0" d="M338.1,3.8C337,1.5,334.7,0,332.2,0H6.5C4,0,1.7,1.5,0.6,3.8c-1.1,2.3-0.7,5,0.9,6.9l125.7,148.5v151.1h-12.9
                            c-12.4,0-22.4,10.1-22.4,22.4c0,12.4,10.1,22.4,22.4,22.4h110.1c12.4,0,22.4-10.1,22.4-22.4c0-12.4-10.1-22.4-22.4-22.4h-12.9V159.2
                            l78.8-93.1c2.3-2.7,2-6.8-0.8-9.2c-2.7-2.3-6.8-2-9.2,0.8L200,152.6c-1,1.2-1.5,2.7-1.5,4.2v153.5h-58.2V156.8c0-1.5-0.5-3-1.5-4.2
                            L20.5,13h297.6l-15.4,18.2c-2.3,2.7-2,6.8,0.8,9.2c2.7,2.3,6.8,2,9.2-0.8l24.5-28.9C338.8,8.8,339.2,6.1,338.1,3.8z M233.8,332.7
                            c0,5.2-4.2,9.4-9.4,9.4H114.3c-5.2,0-9.4-4.2-9.4-9.4s4.2-9.4,9.4-9.4h110.1C229.6,323.3,233.8,327.5,233.8,332.7z" />
                        </svg>
                            <h5> Bachelor<br>
                            party </h5>
                            <h4>04 Mar 2016 at 7:30 pm</h4>
                            <img class="pin-icon" src="images/pin.png" alt="locationimage">
                            <p>121 King Street, Melbourne, Victoria 3000 Australia </p>
                      </div>
                    </div>
                        <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 responsive-margin text-center wow fadeInUp padding-left-right-zero" data-class="fadeInUp">
                      <div class="white-box ceremony-detail"> <svg version="1.1"
                                                       x="0px" y="0px" width="150.273px" height="161.365px" viewBox="0 0 150.273 161.365" enable-background="new 0 0 150.273 161.365"
                                                       xml:space="preserve">
                        <defs></defs>
                        <g>
                          <g>
                            <g>
                              <g>
                                <path d="M28.969,54.002c-13.733,0-23.674-18.113-23.674-30.324C5.295,10.622,15.915,0,28.969,0
  					s23.674,10.622,23.674,23.678C52.643,35.889,42.702,54.002,28.969,54.002z M28.969,5c-10.297,0-18.674,8.379-18.674,18.678 --}}
  					{{-- c0,11.058,9.056,25.324,18.674,25.324c9.618,0,18.674-14.267,18.674-25.324C47.643,13.379,39.266,5,28.969,5z" />
                              </g>
                              <g>
                                <path d="M14.485,109.707H5.695c-1.308,0-2.395-1.008-2.493-2.312L0.007,65.185
  					c-0.064-0.848,0.308-1.671,0.986-2.184c0.373-0.281,9.346-6.897,27.976-6.897c18.632,0,27.602,6.616,27.975,6.898
  					c0.539,0.406,0.89,1.014,0.974,1.683l4.628,36.883c0.172,1.37-0.799,2.62-2.169,2.792c-1.372,0.176-2.62-0.8-2.792-2.169
  					l-4.482-35.726c-2.451-1.444-10.369-5.361-24.133-5.361c-13.282,0-21.122,3.648-23.862,5.205l2.907,38.398h6.471
  					c1.381,0,2.5,1.119,2.5,2.5C16.985,108.588,15.865,109.707,14.485,109.707z" />
                              </g>
                              <g>
                                <path d="M38.126,158.842H19.811c-1.276,0-2.348-0.962-2.485-2.23l-5.326-49.135
  					c-0.148-1.373,0.844-2.606,2.216-2.755c1.37-0.157,2.606,0.843,2.755,2.216l5.084,46.904h13.828l5.084-46.904
  					c0.149-1.373,1.376-2.373,2.755-2.216c1.372,0.148,2.364,1.382,2.216,2.755l-5.325,49.135
  					C40.474,157.88,39.403,158.842,38.126,158.842z" />
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M80.321,54.002c-13.733,0-23.675-18.113-23.675-30.324C56.647,10.622,67.267,0,80.321,0
  					c13.054,0,23.674,10.622,23.674,23.678C103.995,35.889,94.055,54.002,80.321,54.002z M80.321,5
  					c-10.297,0-18.675,8.379-18.675,18.678c0,11.058,9.056,25.324,18.675,25.324c9.618,0,18.674-14.267,18.674-25.324
  					C98.995,13.379,90.618,5,80.321,5z" />
                              </g>
                              <g>
                                <path d="M80.321,139.924c-28.066,0-40.193-8.449-40.696-8.809c-1.123-0.804-1.382-2.365-0.578-3.488
  					c0.801-1.12,2.354-1.381,3.479-0.584c0.127,0.089,11.55,7.881,37.795,7.881c0.39-0.003,0.811,0,1.209-0.004
  					c1.38-0.029,2.512,1.096,2.524,2.476c0.013,1.381-1.096,2.511-2.476,2.524C81.165,139.924,80.744,139.924,80.321,139.924z" />
                              </g>
                              <g>
                                <path d="M109.909,100.562c-0.977,0-1.904-0.576-2.306-1.533l-14.106-33.58
  					c-1.694-1.045-6.998-3.983-13.028-3.983c-13.488,0-23.706,5.653-23.808,5.711c-1.2,0.677-2.728,0.249-3.404-0.955
  					c-0.676-1.204-0.249-2.728,0.955-3.404c0.462-0.259,11.474-6.352,26.257-6.352c8.926,0,16.174,5.048,16.478,5.263
  					c0.383,0.271,0.682,0.643,0.862,1.074l14.404,34.291c0.535,1.273-0.064,2.738-1.337,3.273
  					C110.561,100.498,110.233,100.562,109.909,100.562z" />
                              </g>
                              <g>
                                <path d="M90.06,139.635c-1.341,0-2.45-1.063-2.496-2.413c-0.048-1.38,1.031-2.538,2.411-2.585
  					c15.297-0.53,24.827-3.201,29.281-4.814l-20.483-23.241c-0.912-1.036-0.813-2.616,0.223-3.529
  					c1.037-0.912,2.616-0.813,3.529,0.223l22.783,25.852c0.503,0.571,0.719,1.341,0.586,2.09c-0.134,0.75-0.601,1.397-1.27,1.761
  					c-0.439,0.238-11.025,5.845-34.476,6.656C90.118,139.635,90.089,139.635,90.06,139.635z" />
                              </g>
                              <g>
                                <path d="M87.403,161.365H74.451c-1.253,0-2.312-0.927-2.478-2.168l-2.871-21.441
  					c-0.184-1.369,0.777-2.627,2.146-2.81c1.368-0.187,2.627,0.777,2.81,2.145l2.581,19.273h8.527l2.175-19.508
  					c0.153-1.372,1.387-2.357,2.762-2.207c1.372,0.152,2.36,1.39,2.207,2.762l-2.423,21.73
  					C89.746,160.408,88.676,161.365,87.403,161.365z" />
                              </g>
                            </g>
                          </g>
                          <g>
                            <path d="M28.969,86.436c-0.861,0-1.664-0.443-2.122-1.178L16.749,69.057c-0.729-1.172-0.372-2.714,0.8-3.444
  			c1.169-0.728,2.712-0.374,3.444,0.8L28.777,78.9l10.587-20.287c0.64-1.226,2.15-1.699,3.373-1.061
  			c1.225,0.64,1.699,2.149,1.061,3.373L31.186,85.092c-0.415,0.796-1.225,1.308-2.121,1.342C29.032,86.435,29,86.436,28.969,86.436z
  			" />
                          </g>
                          <g>
                            <path d="M110.21,87.061c-1.342,0-2.451-1.064-2.497-2.416l-0.607-18.053c-0.046-1.38,1.035-2.536,2.415-2.583
  			c1.385-0.065,2.536,1.035,2.583,2.415l0.607,18.053c0.046,1.38-1.035,2.536-2.415,2.583
  			C110.268,87.061,110.238,87.061,110.21,87.061z" />
                          </g>
                          <g>
                            <path d="M109.908,100.561c-0.623,0-1.246-0.231-1.731-0.696c-0.996-0.956-1.028-2.539-0.072-3.535l25.209-26.262
  			c0.957-0.996,2.537-1.027,3.535-0.072c0.996,0.956,1.028,2.539,0.072,3.535l-25.209,26.262
  			C111.221,100.303,110.565,100.561,109.908,100.561z" />
                          </g>
                          <g>
                            <path d="M126.394,77.464c-1.124,0-2.256-0.119-3.363-0.354c-4.406-0.935-8.133-3.602-10.44-7.413
  			c-0.643-0.023-1.281-0.102-1.905-0.235c-6.065-1.289-9.952-7.271-8.663-13.336c0.702-3.305,2.882-6.112,5.848-7.649
  			c0.781-5.492,5.516-9.729,11.221-9.729c4.481,0,8.516,2.674,10.325,6.674c0.108,0.021,0.218,0.042,0.326,0.065
  			c4.359,0.926,8.067,3.556,10.382,7.309c0.417,0.038,0.828,0.101,1.231,0.186c2.943,0.625,5.463,2.356,7.1,4.876
  			c1.637,2.519,2.193,5.524,1.569,8.463c-1.096,5.163-5.719,8.911-10.99,8.911l0,0c-0.784,0-1.573-0.083-2.346-0.247
  			c-0.403-0.086-0.806-0.196-1.207-0.331C132.804,76.474,129.63,77.464,126.394,77.464z M114.052,64.641
  			c0.956,0,1.841,0.549,2.258,1.429c1.51,3.182,4.338,5.423,7.759,6.149c3.325,0.706,6.838-0.173,9.452-2.344
  			c0.761-0.632,1.821-0.756,2.707-0.316c0.509,0.253,1,0.427,1.499,0.533c0.432,0.092,0.871,0.138,1.307,0.138
  			c2.925,0,5.49-2.081,6.1-4.95c0.347-1.632,0.037-3.301-0.872-4.7c-0.908-1.4-2.309-2.361-3.941-2.708
  			c-0.495-0.104-1.034-0.143-1.575-0.12c-0.965,0.044-1.916-0.499-2.355-1.39c-1.527-3.09-4.328-5.271-7.683-5.984
  			c-0.446-0.094-0.896-0.161-1.334-0.198c-1.037-0.09-1.91-0.813-2.191-1.814c-0.766-2.719-3.271-4.618-6.092-4.618
  			c-3.473,0-6.302,2.809-6.334,6.274c0.003,0.053,0.005,0.11,0.005,0.149c0,1.075-0.688,2.029-1.707,2.371
  			c-2.13,0.712-3.678,2.44-4.142,4.623c-0.716,3.368,1.443,6.69,4.813,7.406c0.662,0.14,1.36,0.166,2.033,0.088
  			C113.857,64.646,113.954,64.641,114.052,64.641z" />
                          </g>
                        </g>
                        </svg>
                            <h5> the wedding<br>
                          ceremony </h5>
                            <h4>05 Mar 2016 at 3:30 pm</h4>
                            <img class="pin-icon" src="images/pin.png" alt="locationimage">
                            <p>121 King Street, Melbourne, Victoria 3000 Australia </p>
                          </div>
                    </div>
                        <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 responsive-margin text-center wow fadeInRight padding-left-right-zero" data-class="fadeInRight">
                      <div class="white-box ceremony-detail"> <svg version="1.1"
                                                       x="0px" y="0px" width="150.273px" height="161.365px" viewBox="0 0 150.273 161.365" enable-background="new 0 0 150.273 161.365"
                                                       xml:space="preserve">
                        <defs></defs>
                        <g>
                          <g>
                            <g>
                              <g>
                                <path d="M28.969,54.002c-13.733,0-23.674-18.113-23.674-30.324C5.295,10.622,15.915,0,28.969,0
  					s23.674,10.622,23.674,23.678C52.643,35.889,42.702,54.002,28.969,54.002z M28.969,5c-10.297,0-18.674,8.379-18.674,18.678
  					c0,11.058,9.056,25.324,18.674,25.324c9.618,0,18.674-14.267,18.674-25.324C47.643,13.379,39.266,5,28.969,5z" />
                              </g>
                              <g>
                                <path d="M14.485,109.707H5.695c-1.308,0-2.395-1.008-2.493-2.312L0.007,65.185
  					c-0.064-0.848,0.308-1.671,0.986-2.184c0.373-0.281,9.346-6.897,27.976-6.897c18.632,0,27.602,6.616,27.975,6.898
  					c0.539,0.406,0.89,1.014,0.974,1.683l4.628,36.883c0.172,1.37-0.799,2.62-2.169,2.792c-1.372,0.176-2.62-0.8-2.792-2.169
  					l-4.482-35.726c-2.451-1.444-10.369-5.361-24.133-5.361c-13.282,0-21.122,3.648-23.862,5.205l2.907,38.398h6.471
  					c1.381,0,2.5,1.119,2.5,2.5C16.985,108.588,15.865,109.707,14.485,109.707z" />
                              </g>
                              <g>
                                <path d="M38.126,158.842H19.811c-1.276,0-2.348-0.962-2.485-2.23l-5.326-49.135
  					c-0.148-1.373,0.844-2.606,2.216-2.755c1.37-0.157,2.606,0.843,2.755,2.216l5.084,46.904h13.828l5.084-46.904
  					c0.149-1.373,1.376-2.373,2.755-2.216c1.372,0.148,2.364,1.382,2.216,2.755l-5.325,49.135
  					C40.474,157.88,39.403,158.842,38.126,158.842z" />
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M80.321,54.002c-13.733,0-23.675-18.113-23.675-30.324C56.647,10.622,67.267,0,80.321,0
  					c13.054,0,23.674,10.622,23.674,23.678C103.995,35.889,94.055,54.002,80.321,54.002z M80.321,5
  					c-10.297,0-18.675,8.379-18.675,18.678c0,11.058,9.056,25.324,18.675,25.324c9.618,0,18.674-14.267,18.674-25.324
  					C98.995,13.379,90.618,5,80.321,5z" />
                              </g>
                              <g>
                                <path d="M80.321,139.924c-28.066,0-40.193-8.449-40.696-8.809c-1.123-0.804-1.382-2.365-0.578-3.488
  					c0.801-1.12,2.354-1.381,3.479-0.584c0.127,0.089,11.55,7.881,37.795,7.881c0.39-0.003,0.811,0,1.209-0.004
  					c1.38-0.029,2.512,1.096,2.524,2.476c0.013,1.381-1.096,2.511-2.476,2.524C81.165,139.924,80.744,139.924,80.321,139.924z" />
                              </g>
                              <g>
                                <path d="M109.909,100.562c-0.977,0-1.904-0.576-2.306-1.533l-14.106-33.58
  					c-1.694-1.045-6.998-3.983-13.028-3.983c-13.488,0-23.706,5.653-23.808,5.711c-1.2,0.677-2.728,0.249-3.404-0.955
  					c-0.676-1.204-0.249-2.728,0.955-3.404c0.462-0.259,11.474-6.352,26.257-6.352c8.926,0,16.174,5.048,16.478,5.263
  					c0.383,0.271,0.682,0.643,0.862,1.074l14.404,34.291c0.535,1.273-0.064,2.738-1.337,3.273
  					C110.561,100.498,110.233,100.562,109.909,100.562z" />
                              </g>
                              <g>
                                <path d="M90.06,139.635c-1.341,0-2.45-1.063-2.496-2.413c-0.048-1.38,1.031-2.538,2.411-2.585
  					c15.297-0.53,24.827-3.201,29.281-4.814l-20.483-23.241c-0.912-1.036-0.813-2.616,0.223-3.529
  					c1.037-0.912,2.616-0.813,3.529,0.223l22.783,25.852c0.503,0.571,0.719,1.341,0.586,2.09c-0.134,0.75-0.601,1.397-1.27,1.761
  					c-0.439,0.238-11.025,5.845-34.476,6.656C90.118,139.635,90.089,139.635,90.06,139.635z" />
                              </g>
                              <g>
                                <path d="M87.403,161.365H74.451c-1.253,0-2.312-0.927-2.478-2.168l-2.871-21.441
  					c-0.184-1.369,0.777-2.627,2.146-2.81c1.368-0.187,2.627,0.777,2.81,2.145l2.581,19.273h8.527l2.175-19.508
  					c0.153-1.372,1.387-2.357,2.762-2.207c1.372,0.152,2.36,1.39,2.207,2.762l-2.423,21.73
  					C89.746,160.408,88.676,161.365,87.403,161.365z" />
                              </g>
                            </g>
                          </g>
                          <g>
                            <path d="M28.969,86.436c-0.861,0-1.664-0.443-2.122-1.178L16.749,69.057c-0.729-1.172-0.372-2.714,0.8-3.444
  			c1.169-0.728,2.712-0.374,3.444,0.8L28.777,78.9l10.587-20.287c0.64-1.226,2.15-1.699,3.373-1.061
  			c1.225,0.64,1.699,2.149,1.061,3.373L31.186,85.092c-0.415,0.796-1.225,1.308-2.121,1.342C29.032,86.435,29,86.436,28.969,86.436z
  			" />
                          </g>
                          <g>
                            <path d="M110.21,87.061c-1.342,0-2.451-1.064-2.497-2.416l-0.607-18.053c-0.046-1.38,1.035-2.536,2.415-2.583
  			c1.385-0.065,2.536,1.035,2.583,2.415l0.607,18.053c0.046,1.38-1.035,2.536-2.415,2.583
  			C110.268,87.061,110.238,87.061,110.21,87.061z" />
                          </g>
                          <g>
                            <path d="M109.908,100.561c-0.623,0-1.246-0.231-1.731-0.696c-0.996-0.956-1.028-2.539-0.072-3.535l25.209-26.262
  			c0.957-0.996,2.537-1.027,3.535-0.072c0.996,0.956,1.028,2.539,0.072,3.535l-25.209,26.262
  			C111.221,100.303,110.565,100.561,109.908,100.561z" />
                          </g>
                          <g>
                            <path d="M126.394,77.464c-1.124,0-2.256-0.119-3.363-0.354c-4.406-0.935-8.133-3.602-10.44-7.413
  			c-0.643-0.023-1.281-0.102-1.905-0.235c-6.065-1.289-9.952-7.271-8.663-13.336c0.702-3.305,2.882-6.112,5.848-7.649
  			c0.781-5.492,5.516-9.729,11.221-9.729c4.481,0,8.516,2.674,10.325,6.674c0.108,0.021,0.218,0.042,0.326,0.065
  			c4.359,0.926,8.067,3.556,10.382,7.309c0.417,0.038,0.828,0.101,1.231,0.186c2.943,0.625,5.463,2.356,7.1,4.876
  			c1.637,2.519,2.193,5.524,1.569,8.463c-1.096,5.163-5.719,8.911-10.99,8.911l0,0c-0.784,0-1.573-0.083-2.346-0.247
  			c-0.403-0.086-0.806-0.196-1.207-0.331C132.804,76.474,129.63,77.464,126.394,77.464z M114.052,64.641
  			c0.956,0,1.841,0.549,2.258,1.429c1.51,3.182,4.338,5.423,7.759,6.149c3.325,0.706,6.838-0.173,9.452-2.344
  			c0.761-0.632,1.821-0.756,2.707-0.316c0.509,0.253,1,0.427,1.499,0.533c0.432,0.092,0.871,0.138,1.307,0.138
  			c2.925,0,5.49-2.081,6.1-4.95c0.347-1.632,0.037-3.301-0.872-4.7c-0.908-1.4-2.309-2.361-3.941-2.708
  			c-0.495-0.104-1.034-0.143-1.575-0.12c-0.965,0.044-1.916-0.499-2.355-1.39c-1.527-3.09-4.328-5.271-7.683-5.984
  			c-0.446-0.094-0.896-0.161-1.334-0.198c-1.037-0.09-1.91-0.813-2.191-1.814c-0.766-2.719-3.271-4.618-6.092-4.618
  			c-3.473,0-6.302,2.809-6.334,6.274c0.003,0.053,0.005,0.11,0.005,0.149c0,1.075-0.688,2.029-1.707,2.371
  			c-2.13,0.712-3.678,2.44-4.142,4.623c-0.716,3.368,1.443,6.69,4.813,7.406c0.662,0.14,1.36,0.166,2.033,0.088
  			C113.857,64.646,113.954,64.641,114.052,64.641z" />
                          </g>
                        </g>
                        </svg>
                            <h5> reception<br> --}}
                          ceremony </h5>
                            <h4>06 Mar 2016 at 6:30 pm</h4>
                            <img class="pin-icon" src="images/pin.png" alt="locationimage">
                            <p>121 King Street, Melbourne, Victoria 3000 Australia </p>
                          </div>
                    </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 text-center padding-left-right-zero">
                      <div class="timer rsvp-button">
                            <ul id="example">
                          <li class="timer-border-right">
                                <h2 class="days">00</h2>
                                <p class="days_text">Days</p>
                              </li>
                          <li class="timer-border-right">
                                <h2 class="hours">00</h2>
                                <p class="hours_text">Hours</p>
                              </li>
                          <li class="timer-border-right">
                                <h2 class="minutes">00</h2>
                                <p class="minutes_text">Minutes</p>
                              </li>
                          <li>
                                <h2 class="seconds">00</h2>
                                <p class="seconds_text">Seconds</p>
                              </li>
                        </ul>
                          </div>
                      <div class="clearfix"></div>
                    </div>
                        <div class="clearfix"></div>
                      </div>
                </div>
                  </div>
            </div>
              </div>
        </div>
          </div>



      <div class="pt-page-6">
            <div class="container-fluid display_none bg-main-image">
          <div class="blur-img bg-gallery"></div>
          <div class="page-scroll">
                <div class="bg-main-image-overlay-2-gallery">
              <div class="main-section-s2">
                    <div class="col-md-12">
                  <div class="page-title wow fadeInUp" data-class="fadeInUp">
                        <h2>Gallery<span><i class="glyphicon glyphicon-heart"></i></span></h2>
                      </div>
                  <div class="page-top display_none">
                        <div class="gridlayout-main">
                      <div class="gridlayout">
                            <div class="grid-item"> <a class="fancybox" href="images/gallery/shutterstock_100589818.jpg" data-fancybox-group="gallery"> <img class="img-responsive" alt="gallery-image" src="images/gallery/shutterstock_100589818.jpg">
                              <div class="gallery-image-hover"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item"> <a class="fancybox" href="images/gallery/shutterstock_168631928.jpg" data-fancybox-group="gallery"> <img class="img-responsive" alt="gallery-image" src="images/gallery/shutterstock_168631928.jpg">
                              <div class="gallery-image-hover"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item"> <a class="fancybox" href="images/gallery/shutterstock_208711399.jpg" data-fancybox-group="gallery"> <img class="img-responsive" alt="gallery-image" src="images/gallery/shutterstock_208711399.jpg">
                              <div class="gallery-image-hover"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item"> <a class="fancybox" href="images/gallery/shutterstock_247468876.jpg" data-fancybox-group="gallery"> <img class="img-responsive" alt="gallery-image" src="images/gallery/shutterstock_247468876.jpg">
                              <div class="gallery-image-hover"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item"> <a class="fancybox" href="images/gallery/shutterstock_260753231.jpg" data-fancybox-group="gallery"> <img class="img-responsive" alt="gallery-image" src="images/gallery/shutterstock_260753231.jpg">
                              <div class="gallery-image-hover"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item"> <a class="fancybox" href="images/gallery/shutterstock_302834375.jpg" data-fancybox-group="gallery"> <img class="img-responsive" alt="gallery-image" src="images/gallery/shutterstock_302834375.jpg">
                              <div class="gallery-image-hover"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item"> <a class="fancybox" href="images/gallery/shutterstock_331200281.jpg" data-fancybox-group="gallery"> <img class="img-responsive" alt="gallery-image" src="images/gallery/shutterstock_331200281.jpg">
                              <div class="gallery-image-hover"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item"> <a class="fancybox" href="images/gallery/shutterstock_362067602.jpg" data-fancybox-group="gallery"> <img class="img-responsive" alt="gallery-image" src="images/gallery/shutterstock_362067602.jpg">
                              <div class="gallery-image-hover"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item"> <a class="fancybox" href="images/gallery/shutterstock_367304696.jpg" data-fancybox-group="gallery"> <img class="img-responsive" alt="gallery-image" src="images/gallery/shutterstock_367304696.jpg">
                              <div class="gallery-image-hover"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item"> <a class="fancybox" href="images/gallery/shutterstock_376909501.jpg" data-fancybox-group="gallery"> <img class="img-responsive" alt="gallery-image" src="images/gallery/shutterstock_376909501.jpg">
                              <div class="gallery-image-hover"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item"> <a class="fancybox" href="images/gallery/shutterstock_379972348.jpg" data-fancybox-group="gallery"> <img class="img-responsive" alt="gallery-image" src="images/gallery/shutterstock_379972348.jpg">
                              <div class="gallery-image-hover"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item"> <a class="fancybox" href="images/gallery/shutterstock_381423748.jpg" data-fancybox-group="gallery"> <img class="img-responsive" alt="gallery-image" src="images/gallery/shutterstock_381423748.jpg">
                              <div class="gallery-image-hover"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item"> <a class="fancybox" href="images/gallery/shutterstock_394250656.jpg" data-fancybox-group="gallery"> <img class="img-responsive" alt="gallery-image" src="images/gallery/shutterstock_394250656.jpg">
                              <div class="gallery-image-hover"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                          </div>
                    </div>
                      </div>
                </div>
                  </div>
            </div>
              </div>
        </div>
      </div>



      <div class="pt-page-7">
            <div class="container-fluid display_none bg-main-image">
          <div class="blur-img bg-gifts"></div>
          <div class="page-scroll">
                <div class="bg-main-image-overlay-2 ">
              <div class="main-section-s2">
                    <div class="col-md-12">
                  <div class="page-title wow fadeInUp" data-class="fadeInUp">
                        <h2>Gifts Registry<span><i class="glyphicon glyphicon-heart"></i></span></h2>
                      </div>
                  <div class="container">
                        <div class="col-md-12 about-the-people">
                      <p class="col-md-6 col-md-offset-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat dui non justo scelerisque interdum. Mauris cursus gravida efficitur.</p>
                    </div>
                      </div>
                  <div class="container">
                        <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 text-center wow bounceIn" data-class="bounceIn"> <a href="#" target="_blank">
                          <div class="logo-box"> <img class="img-responsive zoomeffect" src="images/logo1.png" alt="giftlogo" /> </div>
                          </a> </div>
                        <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 text-center wow bounceIn" data-class="bounceIn"> <a href="#" target="_blank">
                          <div class="logo-box"> <img class="img-responsive  zoomeffect" src="images/amazon.png" alt="giftlogo" /> </div>
                          </a> </div>
                        <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 text-center wow bounceIn" data-class="bounceIn"> <a href="#" target="_blank">
                          <div class="logo-box"> <img class="img-responsive  zoomeffect" src="images/beyond.png" alt="giftlogo" /> </div>
                          </a> </div>
                        <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 text-center wow bounceIn" data-class="bounceIn"> <a href="#" target="_blank">
                          <div class="logo-box"> <img class="img-responsive  zoomeffect" src="images/decor.png" alt="giftlogo" /> </div>
                          </a> </div>
                        <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 text-center wow bounceIn" data-class="bounceIn"> <a href="#" target="_blank">
                          <div class="logo-box"> <img class="img-responsive zoomeffect" src="images/gifts.png" alt="giftlogo" /> </div>
                          </a> </div>
                        <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 text-center wow bounceIn" data-class="bounceIn"> <a href="#" target="_blank">
                          <div class="logo-box"> <img class="img-responsive zoomeffect" src="images/john.png" alt="giftlogo" /> </div>
                          </a> </div>
                        <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 text-center wow bounceIn" data-class="bounceIn"> <a href="#" target="_blank">
                          <div class="logo-box"> <img class="img-responsive zoomeffect" src="images/gifts.png" alt="giftlogo" /> </div>
                          </a> </div>
                        <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 text-center wow bounceIn" data-class="bounceIn"> <a href="#" target="_blank">
                          <div class="logo-box"> <img class="img-responsive zoomeffect" src="images/luckxry.png" alt="giftlogo" /> </div>
                          </a> </div>
                        <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 text-center wow bounceIn" data-class="bounceIn"> <a href="#" target="_blank">
                          <div class="logo-box"> <img class="img-responsive zoomeffect" src="images/belk.png" alt="giftlogo" /> </div>
                          </a> </div>
                        <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 text-center wow bounceIn" data-class="bounceIn"> <a href="#" target="_blank">
                          <div class="logo-box"> <img class="img-responsive zoomeffect" src="images/decor.png" alt="giftlogo" /> </div>
                          </a> </div>
                        <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 text-center wow bounceIn" data-class="bounceIn"> <a href="#" target="_blank">
                          <div class="logo-box"> <img class="img-responsive zoomeffect" src="images/gifts.png" alt="giftlogo" /> </div>
                          </a> </div>
                        <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 text-center wow bounceIn" data-class="bounceIn"> <a href="#" target="_blank">
                          <div class="logo-box"> <img class="img-responsive zoomeffect" src="images/john.png" alt="giftlogo" /> </div>
                          </a> </div>
                      </div>
                </div>
                  </div>
            </div>
              </div>
        </div>
          </div>
      <div class="pt-page-8">
            <div class="container-fluid display_none bg-main-image">
          <div class="blur-img bg-rsvp"></div>
          <div class="page-fixed">
                <div class="bg-main-image-overlay-fixed ">
              <div class="main-section-s2">
                    <div class="col-md-12">
                  <div class="page-title wow fadeInUp" data-class="fadeInUp">
                        <h2>Rsvp / Contact<span><i class="glyphicon glyphicon-heart"></i></span></h2>
                      </div>
                  <div class="container">
                        <div class="rsvp">
                      <div class="rsvp-form white-box wow fadeInUp col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12" data-class="fadeInUp">
                            <p> If you received an invitation, we’d like to plan in advance. Kindly reply, for any question please fill the form by <br>
                          <span>17 Nov 2016</span> </p>
                            <div id="Success" class="successalert" style=" display:none;"> <strong>Thank you</strong>. </div>
                            <div id="Error" class="errorelert" style="display:none;"> <strong>Error occurred while sending email.</strong> Try again later. </div>
                            <form class="form floating-label text-left form-validate" name="frm" id="frm">
                          <div class="form-group">
                                <input type="text" class="form-control" id="Name" name="Name" required data-rule-minlength="2" />
                                <label for="Name">Name</label>
                              </div>
                          <div class="form-group">
                                <input type="text" class="form-control" id="Contactnumber" name="Contactnumber" data-rule-number="true" required />
                                <label for="Contactnumber">Contact Number</label>
                              </div>
                          <div class="form-group">
                                <input type="email" class="form-control" id="Emailaddress" name="Emailaddress" required />
                                <label for="Emailaddress">Email Address</label>
                              </div>
                          <div class="row">
                                <div class="col-md-6">
                              <div class="form-group">
                                    <select id="attendiesDetails" name="attendiesDetails" class="form-control select2-list dirty" required>
                                  <option value="">Select Presense</option>
                                  <option value='0'>Yes</option>
                                  <option value='1'>No</option>
                                  <option value='2'>Not Sure</option>
                                </select>
                                    <label for="attendiesDetails">I am attending?</label>
                                  </div>
                            </div>
                                <div class="col-md-6">
                              <div class="form-group">
                                    <select id="guestDetails" name="guestDetails" class="form-control select2-list dirty" required>
                                  <option value="">Select Attendee(s)</option>
                                  <option value='0'>0</option>
                                  <option value='1'>1</option>
                                  <option value='2'>2</option>
                                  <option value='3'>3</option>
                                </select>
                                    <label for="guestDetails">Guests</label>
                                  </div>
                            </div>
                              </div>
                          <div class="form-group">
                                <textarea class="form-control" id="message" name="message"></textarea>
                                <label>Drop line to </label>
                              </div>
                          <div class="rsvp-button text-center">
                                <button type="submit" class="hvr-sweep-to-right">SUBMIT</button>
                                <div id="loding" style="display:none; padding-left:20px;"><img src="images/ajax-loader.gif" alt="Loader"></div>
                              </div>
                        </form>
                          </div>
                    </div>
                      </div>
                </div>
                  </div>
            </div>
              </div>
        </div>
          </div>
      <div class="pt-page-9">
            <div class="container-fluid display_none bg-main-image">
          <div class="blur-img bg-couple"></div>
          <div class="page-fixed">
                <div class="bg-main-image-overlay-2">
              <div class="main-section-s2">
                    <div class="col-md-12">
                  <div class="page-title wow fadeInUp" data-class="fadeInUp">
                        <h2>The Couple <span><i class="glyphicon glyphicon-heart"></i></span></h2>
                      </div>
                  <div class="container">
                        <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1  wow fadeInLeft responsive-margin couple-responsive-padding" data-class="fadeInLeft">
                      <div class="couple-area-s2">
                            <div class="the-couple groom-color text-center">
                          <div class="the-couple-title">
                                <p><span>Groom</span></p>
                              </div>
                          <div class="the-couple-img-s2"> <img src="images/groom-bi.jpg" alt="the-couple-image" class="img-rounded">
                                <div class="the-couple-img-s2-hover">
                              <div class="social-s2 text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                            </div>
                              </div>
                          <div class="the-couple-data">
                                <h3>leonore simmons</h3>
                                <p>02/02/1990</p>
                                <p class="about-the-couple">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat dui non justo scelerisque interdum. Mauris cursus gravida efficitur. Aliquam viverra semper sodales. Cras sed scelerisque orci. Vivamus vitae nulla quis justo suscipit interdum.</p>
                              </div>
                        </div>
                          </div>
                    </div>
                        <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1  wow fadeInLeft responsive-margin couple-responsive-padding" data-class="fadeInRight">
                      <div class="couple-area-s2">
                            <div class="the-couple bride-color text-center">
                          <div class="the-couple-title">
                                <p><span>Bride</span></p>
                              </div>
                          <div class="the-couple-img-s2"> <img src="images/bride-bi.jpg" alt="the-couple image" class="img-rounded">
                                <div class="the-couple-img-s2-hover">
                              <div class="social-s2 text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                            </div>
                              </div>
                          <div class="the-couple-data">
                                <h3>bianca pawlikowski </h3>
                                <p>22/05/1992</p>
                                <p class="about-the-couple">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat dui non justo scelerisque interdum. Mauris cursus gravida efficitur. Aliquam viverra semper sodales. Cras sed scelerisque orci. Vivamus vitae nulla quis justo suscipit interdum.</p>
                              </div>
                        </div>
                          </div>
                    </div>
                      </div>
                </div>
                  </div>
            </div>
              </div>
        </div>
          </div>
      <div class="pt-page-10">
            <div class="container-fluid display_none bg-main-image">
          <div class="blur-img bg-loveline"></div>
          <div class="page-scroll">
                <div class="bg-main-image-overlay-2">
              <div class="main-section-s2">
                    <div class="col-md-12">
                  <div class="page-title wow fadeInUp" data-class="fadeInUp">
                        <h2>Loveline <span><i class="glyphicon glyphicon-heart"></i></span></h2>
                      </div>
                  <div class="col-md-12 text-center vector-img"> <img class="img" src="images/loveline-vector.png" alt="vectorimage" /> </div>
                  <div class="clearfix"></div>
                  <div class="container-fluid display_none">
                        <div class="col-md-12 text-center timeline-year wow fadeInUp" data-class="fadeInUp"><span class="label label-default">2015</span> </div>
                        <div class="clearfix"></div>
                        <ul class="timeline">
                      <li>
                            <div class="timeline-badge"><a><i class="glyphicon glyphicon-heart"></i></a></div>
                            <div class="timeline-panel wow fadeInLeft" data-class="fadeInLeft">
                          <div class="timeline-heading">
                                <h3 class="timeline-title">How we met</h3>
                                <span class="label label-default">02 Jan 2015</span> </div>
                          <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat dui non justo scelerisque interdum. Mauris cursus gravida efficitur. Aliquam viverra semper sodales. Cras sed scelerisque orci. Vivamus vitae nulla quis justo suscipit interdum. Suspendisse potenti. Quisque felis est, blandit sed laoreet quis.</p>
                              </div>
                        </div>
                          </li>
                      <li class="timeline-inverted">
                            <div class="timeline-badge"><a href="#"><i class="glyphicon glyphicon-heart"></i></a></div>
                            <div class="timeline-panel wow fadeInRight" data-class="fadeInRight">
                          <div class="timeline-heading">
                                <h3 class="timeline-title">The first date</h3>
                                <span class="label label-default">10 Feb 2015</span> </div>
                          <div class="timeline-img"> <img class="img-responsive" src="images/shutterstock_367304696.jpg" alt="coupledate" /> </div>
                          <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat dui non justo scelerisque interdum. Mauris cursus gravida efficitur. Aliquam viverra semper sodales. Cras sed scelerisque orci. Vivamus vitae nulla quis justo suscipit interdum. Suspendisse potenti. Quisque felis est, blandit sed laoreet quis.</p>
                              </div>
                        </div>
                          </li>
                      <li class="clearfix no-float"></li>
                    </ul>
                        <div class="clearfix"></div>
                        <div class="col-md-12 text-center timeline-year wow fadeInUp" data-class="fadeInUp"><span class="label label-default">2015</span> </div>
                        <div class="clearfix"></div>
                        <ul class="timeline">
                      <li>
                            <div class="timeline-badge"><a><i class="glyphicon glyphicon-heart"></i></a></div>
                            <div class="timeline-panel wow fadeInLeft" data-class="fadeInLeft">
                          <div class="timeline-heading">
                                <h3 class="timeline-title">We are Engaged</h3>
                                <span class="label label-default">05 Mar 2016</span> </div>
                          <div class="ceremony-slider">
                                <div> <img class="img-responsive" src="images/timeline-slider/1.jpg" alt="engaged1" /> </div>
                                <div> <img class="img-responsive" src="images/timeline-slider/2.jpg" alt="engaged2" /> </div>
                                <div> <img class="img-responsive" src="images/timeline-slider/3.jpg" alt="engaged3" /> </div>
                                <div> <img class="img-responsive" src="images/timeline-slider/4.jpg" alt="engaged4" /> </div>
                                <div> <img class="img-responsive" src="images/timeline-slider/5.jpg" alt="engaged5" /> </div>
                                <div> <img class="img-responsive" src="images/timeline-slider/6.jpg" alt="engaged6" /> </div>
                                <div> <img class="img-responsive" src="images/timeline-slider/7.jpg" alt="engaged7" /> </div>
                                <div> <img class="img-responsive" src="images/timeline-slider/8.jpg" alt="engaged8" /> </div>
                                <div> <img class="img-responsive" src="images/timeline-slider/9.jpg" alt="engaged9" /> </div>
                              </div>
                          <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat dui non justo scelerisque interdum. Mauris cursus gravida efficitur. Aliquam viverra semper sodales. Cras sed scelerisque orci. Vivamus vitae nulla quis justo suscipit interdum. Suspendisse potenti. Quisque felis est, blandit sed laoreet quis.</p>
                              </div>
                        </div>
                          </li>
                      <li class="timeline-inverted">
                            <div class="timeline-badge"><a><i class="glyphicon glyphicon-heart"></i></a></div>
                            <div class="timeline-panel">
                          <div class="timeline-heading">
                                <h3 class="timeline-title">Outdoor Tour</h3>
                                <span class="label label-default">05 May 2016</span> </div>
                          <div class="timeline-body">
                                <div class="embed-responsive embed-responsive-4by3 tour-video">
                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KRY0Z9CAZdk"></iframe>
                            </div>
                              </div>
                        </div>
                          </li>
                      <li>
                            <div class="timeline-badge"><a><i class="glyphicon glyphicon-heart"></i></a></div>
                            <div class="timeline-panel wow fadeInLeft" data-class="fadeInLeft">
                          <div class="timeline-heading">
                                <h3 class="timeline-title">Getting married</h3>
                                <span class="label label-default">05 May 2016</span> </div>
                          <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat dui non justo scelerisque interdum. Mauris cursus gravida efficitur. Aliquam viverra semper sodales. Cras sed scelerisque orci. Vivamus vitae nulla quis justo suscipit interdum. Suspendisse potenti. Quisque felis est, blandit sed laoreet quis.</p>
                              </div>
                        </div>
                          </li>
                      <li class="clearfix no-float"></li>
                    </ul>
                      </div>
                </div>
                  </div>
            </div>
              </div>
        </div>
          </div>
      <div class="pt-page-11">
            <div class="container-fluid display_none bg-main-image">
          <div class="blur-img bg-people"></div>
          <div class="page-scroll">
                <div class="bg-main-image-overlay-2">
              <div class="main-section-s2">
                    <div class="col-md-12">
                  <div class="page-title wow fadeInUp" data-class="fadeInUp">
                        <h2>The people <span><i class="glyphicon glyphicon-heart"></i></span></h2>
                      </div>
                  {{-- <div class="container">
                        <div id="parentHorizontalTab">
                      <ul class="resp-tabs-list hor_1">
                            <li class="groom-acc groom-tab wow fadeInLeft" data-class="fadeInLeft">groomsmen </li>
                            <li class="bride-acc bride-tab wow fadeInRight" data-class="fadeInRight">bridesmaids</li>
                          </ul>
                      <div class="resp-tabs-container hor_1">
                            <div>
                          <div class="the-people-s2 wow fadeInUp" data-class="fadeInUp">
                                <div class="the-couple-img">
                              <div class="person-image"> <img src="images/groom/1.jpg" alt="the-couple image" class="img-circle">
                                    <div class="the-couple-img-hover">
                                  <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                                  </div>
                            </div>
                                <div class="the-couple-data">
                              <h4>John Snow </h4>
                              <p>Best Men</p>
                            </div>
                              </div>
                          <div class="the-people-s2 wow fadeInUp" data-class="fadeInUp">
                                <div class="the-couple-img">
                              <div class="person-image"> <img src="images/groom/2.jpg" alt="the-couple image" class="img-circle">
                                    <div class="the-couple-img-hover">
                                  <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                                  </div>
                            </div>
                                <div class="the-couple-data">
                              <h4>Edward Moore </h4>
                              <p>Brother</p>
                            </div>
                              </div>
                          <div class="the-people-s2 wow fadeInUp" data-class="fadeInUp">
                                <div class="the-couple-img">
                              <div class="person-image"> <img src="images/groom/3.jpg" alt="the-couple image" class="img-circle">
                                    <div class="the-couple-img-hover">
                                  <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                                  </div>
                            </div>
                                <div class="the-couple-data">
                              <h4>David Smith </h4>
                              <p>class Mate</p>
                            </div>
                              </div>
                          <div class="the-people-s2 wow fadeInUp" data-class="fadeInUp">
                                <div class="the-couple-img">
                              <div class="person-image"> <img src="images/groom/4.jpg" alt="the-couple image" class="img-circle">
                                    <div class="the-couple-img-hover">
                                  <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                                  </div>
                            </div>
                                <div class="the-couple-data">
                              <h4>Joseph Brown </h4>
                              <p>Best Friend</p>
                            </div>
                              </div>
                          <div class="the-people-s2 wow fadeInUp" data-class="fadeInUp">
                                <div class="the-couple-img">
                              <div class="person-image"> <img src="images/groom/5.jpg" alt="the-couple image" class="img-circle">
                                    <div class="the-couple-img-hover">
                                  <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                                  </div>
                            </div>
                                <div class="the-couple-data">
                              <h4>Robert Green </h4>
                              <p>College Friend</p>
                            </div>
                              </div>
                          <div class="the-people-s2 wow fadeInUp" data-class="fadeInUp">
                                <div class="the-couple-img">
                              <div class="person-image"> <img src="images/groom/6.jpg" alt="the-couple image" class="img-circle">
                                    <div class="the-couple-img-hover">
                                  <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                                  </div>
                            </div>
                                <div class="the-couple-data">
                              <h4>Jeff Nelson </h4>
                              <p>College Friend</p>
                            </div>
                              </div>
                          <div class="the-people-s2 wow fadeInUp" data-class="fadeInUp">
                                <div class="the-couple-img">
                              <div class="person-image"> <img src="images/groom/7.jpg" alt="the-couple image" class="img-circle">
                                    <div class="the-couple-img-hover">
                                  <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                                  </div>
                            </div>
                                <div class="the-couple-data">
                              <h4>Kevin Wilson </h4>
                              <p>College Friend</p>
                            </div>
                              </div>
                          <div class="the-people-s2 wow fadeInUp" data-class="fadeInUp">
                                <div class="the-couple-img">
                              <div class="person-image"> <img src="images/groom/8.jpg" alt="the-couple image" class="img-circle">
                                    <div class="the-couple-img-hover">
                                  <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                                  </div>
                            </div>
                                <div class="the-couple-data">
                              <h4>Jason Parker </h4>
                              <p>College Friend</p>
                            </div>
                              </div>
                        </div>
                            <div>
                          <div class="the-people-s2 wow fadeInUp" data-class="fadeInUp">
                                <div class="the-couple-img">
                              <div class="person-image"> <img src="images/bride/1.jpg" alt="the-couple image" class="img-circle">
                                    <div class="the-couple-img-hover">
                                  <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                                  </div>
                            </div>
                                <div class="the-couple-data">
                              <h4>Patricia Adams </h4>
                              <p>Best Women</p>
                            </div>
                              </div>
                          <div class="the-people-s2 wow fadeInUp" data-class="fadeInUp">
                                <div class="the-couple-img">
                              <div class="person-image"> <img src="images/bride/2.jpg" alt="the-couple image" class="img-circle">
                                    <div class="the-couple-img-hover">
                                  <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                                  </div>
                            </div>
                                <div class="the-couple-data">
                              <h4>Linda Mitchell </h4>
                              <p>Sister</p>
                            </div>
                              </div>
                          <div class="the-people-s2 wow fadeInUp" data-class="fadeInUp">
                                <div class="the-couple-img">
                              <div class="person-image"> <img src="images/bride/3.jpg" alt="the-couple image" class="img-circle">
                                    <div class="the-couple-img-hover">
                                  <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                                  </div>
                            </div>
                                <div class="the-couple-data">
                              <h4>Lisa Jones </h4>
                              <p>Best Friend</p>
                            </div>
                              </div>
                          <div class="the-people-s2 wow fadeInUp" data-class="fadeInUp">
                                <div class="the-couple-img">
                              <div class="person-image"> <img src="images/bride/4.jpg" alt="the-couple image" class="img-circle">
                                    <div class="the-couple-img-hover">
                                  <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                                  </div>
                            </div>
                                <div class="the-couple-data">
                              <h4>Jennifer Lewis </h4>
                              <p>class Mate</p>
                            </div>
                              </div>
                          <div class="the-people-s2 wow fadeInUp" data-class="fadeInUp">
                                <div class="the-couple-img">
                              <div class="person-image"> <img src="images/bride/5.jpg" alt="the-couple image" class="img-circle">
                                    <div class="the-couple-img-hover">
                                  <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                                  </div>
                            </div>
                                <div class="the-couple-data">
                              <h4>Susan Edwards </h4>
                              <p>College Friend</p>
                            </div>
                              </div>
                          <div class="the-people-s2 wow fadeInUp" data-class="fadeInUp">
                                <div class="the-couple-img">
                              <div class="person-image"> <img src="images/bride/6.jpg" alt="the-couple image" class="img-circle">
                                    <div class="the-couple-img-hover">
                                  <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                                  </div>
                            </div>
                                <div class="the-couple-data">
                              <h4>Nancy Lee </h4>
                              <p>College Friend</p>
                            </div>
                              </div>
                          <div class="the-people-s2 wow fadeInUp" data-class="fadeInUp">
                                <div class="the-couple-img">
                              <div class="person-image"> <img src="images/bride/7.jpg" alt="the-couple image" class="img-circle">
                                    <div class="the-couple-img-hover">
                                  <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                                  </div>
                            </div>
                                <div class="the-couple-data">
                              <h4>Carol Williams </h4>
                              <p>College Friend</p>
                            </div>
                              </div>
                          <div class="the-people-s2 wow fadeInUp" data-class="fadeInUp">
                                <div class="the-couple-img">
                              <div class="person-image"> <img src="images/bride/8.jpg" alt="the-couple image" class="img-circle">
                                    <div class="the-couple-img-hover">
                                  <div class="social text-center"><a class="fb-color" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="tw-color" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="gp-color" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                                  </div>
                            </div>
                                <div class="the-couple-data">
                              <h4>Sharon Lopez </h4>
                              <p>College Friend</p>
                            </div>
                              </div>
                        </div>
                          </div>
                    </div>
                      </div> --}}
                </div>
                  </div>
            </div>
              </div>
        </div>
          </div>
      <div class="pt-page-12">
            <div class="container-fluid display_none bg-main-image">
          <div class="blur-img bg-gallery"></div>
          <div class="page-scroll">
                <div class="bg-main-image-overlay-2">
              <div class="main-section-s2">
                    <div class="col-md-12">
                  <div class="page-title wow fadeInUp" data-class="fadeInUp">
                        <h2>Gallery<span><i class="glyphicon glyphicon-heart"></i></span></h2>
                      </div>
                  {{-- <div class="page-top display_none">
                        <div class="gridlayout-main">
                      <div class="gridlayout-s2">
                            <div class="grid-item-s2"> <a class="fancybox2" href="images/gallery/shutterstock_208711399.jpg" data-fancybox-group="gallery"> <img class="img-responsive img-circle" src="images/gallery2/shutterstock_208711399.jpg" alt="Galleryimage">
                              <div class="gallery-image-hover-s2"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item-s2"> <a class="fancybox2" href="images/gallery/shutterstock_247468876.jpg" data-fancybox-group="gallery"> <img class="img-responsive img-circle" src="images/gallery2/shutterstock_247468876.jpg" alt="Galleryimage">
                              <div class="gallery-image-hover-s2"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item-s2"> <a class="fancybox2" href="images/gallery/shutterstock_260753231.jpg" data-fancybox-group="gallery"> <img class="img-responsive img-circle" src="images/gallery2/shutterstock_260753231.jpg" alt="Galleryimage">
                              <div class="gallery-image-hover-s2"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item-s2"> <a class="fancybox2" href="images/gallery/shutterstock_302834375.jpg" data-fancybox-group="gallery"> <img class="img-responsive img-circle" src="images/gallery2/shutterstock_302834375.jpg" alt="Galleryimage">
                              <div class="gallery-image-hover-s2"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item-s2"> <a class="fancybox2" href="images/gallery/shutterstock_362067602.jpg" data-fancybox-group="gallery"> <img class="img-responsive img-circle" src="images/gallery2/shutterstock_362067602.jpg" alt="Galleryimage">
                              <div class="gallery-image-hover-s2"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item-s2"> <a class="fancybox2" href="images/gallery/shutterstock_367304696.jpg" data-fancybox-group="gallery"> <img class="img-responsive img-circle" src="images/gallery2/shutterstock_367304696.jpg" alt="Galleryimage">
                              <div class="gallery-image-hover-s2"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item-s2"> <a class="fancybox2" href="images/gallery/shutterstock_376909501.jpg" data-fancybox-group="gallery"> <img class="img-responsive img-circle" src="images/gallery2/shutterstock_376909501.jpg" alt="Galleryimage">
                              <div class="gallery-image-hover-s2"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item-s2"> <a class="fancybox2" href="images/gallery/shutterstock_379972348.jpg" data-fancybox-group="gallery"> <img class="img-responsive img-circle" src="images/gallery2/shutterstock_379972348.jpg" alt="Galleryimage">
                              <div class="gallery-image-hover-s2"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item-s2"> <a class="fancybox2" href="images/gallery/shutterstock_381423748.jpg" data-fancybox-group="gallery"> <img class="img-responsive img-circle" src="images/gallery2/shutterstock_381423748.jpg" alt="Galleryimage">
                              <div class="gallery-image-hover-s2"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                            <div class="grid-item-s2"> <a class="fancybox2" href="images/gallery/shutterstock_394250656.jpg" data-fancybox-group="gallery"> <img class="img-responsive img-circle" src="images/gallery2/shutterstock_394250656.jpg" alt="Galleryimage">
                              <div class="gallery-image-hover-s2"><i class="glyphicon glyphicon-search"></i></div>
                              </a> </div>
                          </div>
                    </div>
                      </div> --}}
                </div>
                  </div>
            </div>
              </div>
        </div>
          </div>
    </div>
      </div>

@endsection

@section('wishes')
  <div id="" style="display:none" class="alert alert-warning alert-dismissible" role="alert">
    <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $(document).ready(function () {
            // If not 'Confirmed', show #myAlert
            if (sessionStorage.Alert !== 'Confirmed') {
                $('#myAlert').show();
            }
        });

        $('#myAlert .close').click(function () {
            // Set 'Alert' to 'Confirmed' when user click the close button
            sessionStorage.Alert = "Confirmed";
            $(this).closest('#myAlert').hide().save();
        });
    });
</script>






  <div class="afix" id="myAlert" >

    <audio id="audioplayer"  controls> <!-- Remove the "Controls" Attrebute if you dont want the visual controls -->
    </audio>

<div class="panel panel-danger">
  <div class="panel-heading">
    <small>Send your wishes to see the couple.</small>
  </div>
  <div class="panel-body">
        <form method="POST" action="#" role="form" >
          {{ csrf_field() }}
          <div class="form-group {{ $errors->has('email')? 'has-error':'' }}">
            <label for="username">Name</label>
            <input type="text" class="form-control" value="{{ old('email') }}" placeholder="Your name or nickname" required autofocus  >
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group {{ $errors->has('password')? 'has-error':'' }}">
            <label for="exampleTextarea">Example textarea</label>
            <textarea class="form-control"  rows="4" placeholder="Write your wishes here" required ></textarea>


            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Upload Pics</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Upload pics with size not more than 1MB</small>
          </div>

          <button type="submit" name="button" class="btn btn-danger btn-sm pull-right" >Save</button>
          <button type="button" name="button" class="btn close"></button>


        </form>
      </div>
</div>

<style media="screen">


.afix{
width: 300px;
  position: fixed;
  margin: auto;
  top: 30%;
  left: 0;
  background-color: rgba(0,0,0, 0.5);
  height: 100px;
  right: 0;
}




  audio::-webkit-media-controls {
  overflow: hidden !important
}
audio::-webkit-media-controls-enclosure {
  width: calc(100% + 32px);
  margin-left: auto;
}




</style>
<script>

  window.setTimeout(function(){
  $('#audioplayer').addClass("player");

}, 15000);

  </script>

<script>

var lastSong = null;
var selection = null;
var playlist = [
  //
  // "https://dl-web.dropbox.com/get/IfeWeds/0.mp3?_subject_uid=308336895&duc_id=dropbox_duc_id&w=AAA-TX0HeH6efiQoIptiwYQSC9Wo8_STc7WRkZ_2Wn5awg",
  // "https://dl-web.dropbox.com/get/IfeWeds/1.mp3?_subject_uid=308336895&duc_id=dropbox_duc_id&w=AAAjV6SUZvsRusAUlLrt2b0UlEm08KrfI_WUzIAm5VAc1w",
  // "https://dl-web.dropbox.com/get/IfeWeds/2.mp3?_subject_uid=308336895&duc_id=dropbox_duc_id&w=AADPrXTO5Ip6wYAzwroouwHwGTLmRG0x0HTIGpah0D8KtQ"
  //
   "{{ asset('audio/1.mp3') }}",
  "{{ asset('audio/2.mp3') }}"
  // "http://cdn.naijaextra.com/wp-content/uploads/2017/01/Simi-Smile-For-Me.mp3",
  //  "http://tooxclusive.com/wp-content/uploads/2014/02/Timi-Dakolo-Iyawo-Mi_tooXclusive.com_.mp3",
  //  "http://www.flexymusic.com/wp-content/uploads/2015/06/Tiwa_Savage_-_Ife_Wa_Gbona_Ft_Leo_Wonder_www.flexymusic.com_.mp3"

   //"http://tooxclusive.com/wp-content/uploads/2016/05/Solidstar-ft.-Patoranking-x-Tiwa-Savage-Wait-Refix.mp3"
 ]; // List of Songs
var player = document.getElementById("audioplayer"); // Get Audio Element
player.autoplay=true;
player.addEventListener("ended", selectRandom); // Run function when song ends
player.volume=0.5;



function mute(){
  player.volume = 0;
}


function selectRandom(){
while(selection == lastSong){ // Repeat until different song is selected
  selection = Math.floor(Math.random() * playlist.length);
}
lastSong = selection; // Remember last song
player.src = playlist[selection]; // Tell HTML the location of the new Song

}

selectRandom(); // Select initial song
player.play(); // Start Song


$(window).ready(function(){
  setInterval(function(){
    $("audio").addClass("player")
  }, 2000);

});

</script>
  </div>




@endsection





@section('footer')

</div>
</div>
@endsection
