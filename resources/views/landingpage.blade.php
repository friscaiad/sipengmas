<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/> 
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">  
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        body {
            font-family: 'Poppins';font-size: 22px;
        }
        </style>
    <title>Landing Page</title>
</head>
<body onload="loading()">
    <section id="loading">
        <div class="loader-wrapper">
            <div class="loader">
                <div class="loader loader-inner"></div>
            </div>
        </div>
    </section>

    <section>
        <nav class="navbar fixed-top container1">
            <img class="float-left img-fluid logo" src="{{ asset('images/home/SIABDI.jpg') }}" width="90-px" ><a href=" landingpage"></a></img>
            <!-- The order that we place the checkbox and label here is important because we will use css only for the click event to open the menu on mobile. -->
            <input type="checkbox" id="toggler">
            <label for="toggler"><i class="ri-menu-line"></i></label>
            <div class="menu">
              <ul class="list">
                <li><a href="#about">Home</a></li>
                <li><a href="#Berita">Berita</a></li>
                <li><a href="#dokumen">Dokumentasi</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="{{ url("/login") }}">Login</a></li>
              </ul>
            </div>
          </nav>
    </section>

    <header style="padding-top: 10rem;
    padding-bottom: calc(10rem - 4.5rem);
    background: linear-gradient(to bottom, rgba(5, 67, 94, 0), rgba(5, 67, 94, 0.83));
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;">

    <div class="container">
      <div class="row">
        <div class="col-6">
            <div class="siabdi">
                <h3 class="text"><b> Hallo, Selamat Datang!</b></h3>
                <img src="{{ asset('images/home/SIABDI.png') }}" width="25%" alt="">
                <h4 class="pt-4" >SIABDI adalah sebuah sistem informasi yang memuat seluruh data pengabdian masyarakat yang telah dilakukan oleh sivitas akademika Politeknik Elektronika Negeri Surabaya. SIABDI bertujuan untuk mempermudah dan mempercepat proses pengelolaan data oleh dosen juga P3M PENS</h4>
            </div>
        </div>
        <div class="col-6">
          <img src="{{ asset('images/home/images.jpg') }}" class="img" 
          style=" box-sizing= border-box; background-color:rgba(11, 114, 158, 0.83); border= none; padding: 20px;" alt="">
        </div>
      </div>
    </div>
     
  </header> 
    <section id="Berita">
      <div class="container3">
        <h3><b> Berita Seputar Pengmas </b></h3>
        <p> Dapatkan berita terupdate dibawah ini </p>
        <div class="row berita-pengmas">
          <div class="col-md-4">
            <figure class="course-card figure">
              <img id="img-design" src="{{ asset('images/home/berita1.png') }}" class="figure-image img-fluid" style="background-color: rgb(219, 221, 255)" alt="">
              <div class="badge">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMiIgaGVpZ2h0PSIxMiIgdmlld0JveD0iMCAwIDEyIDEyIj4KICAgIDxwYXRoIGZpbGw9IiNGRkYiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTYuMzkuODU0TDcuNzIyIDMuNjhjLjA2My4xMzUuMTg2LjIyOC4zMjcuMjVsMi45NzguNDUzYy4zNTcuMDU0LjUuNTEzLjI0MS43NzdMOS4xMTQgNy4zNThjLS4xMDMuMTA1LS4xNS4yNTUtLjEyNi40MDNsLjUxIDMuMTA1Yy4wNi4zNzMtLjMxMy42NTYtLjYzMi40OEw2LjIwMiA5Ljg4MmMtLjEyNi0uMDctLjI3OC0uMDctLjQwNCAwbC0yLjY2NCAxLjQ2NmMtLjMxOS4xNzUtLjY5Mi0uMTA4LS42MzEtLjQ4bC41MDktMy4xMDZjLjAyNC0uMTQ4LS4wMjMtLjI5OC0uMTI2LS40MDNsLTIuMTU0LTIuMmMtLjI1OC0uMjYzLS4xMTYtLjcyMi4yNC0uNzc2bDIuOTc5LS40NTRjLjE0MS0uMDIxLjI2NC0uMTE0LjMyNy0uMjQ5TDUuNjEuODU0Yy4xNi0uMzM5LjYyLS4zMzkuNzggMCIvPgo8L3N2Zz4K" alt="star" class="">
                "Most Popular"
              </div>
              <figcaption class="figure-caption">
                <div class="heading">
                  <div class="name">Berita 1</div>
                  <div class="duration">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VGRjRGNyIgZD0iTTE3LjYgMTAuNWMwIDMuODY2LTMuMTM0IDctNyA3cy03LTMuMTM0LTctNyAzLjEzNC03IDctNyA3IDMuMTM0IDcgNyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMS40IDEuNSkiLz4KICAgICAgICA8cGF0aCBzdHJva2U9IiMyMDJENTAiIGQ9Ik0xNi41IDguNWMwIDQuNDE4LTMuNTgyIDgtOCA4cy04LTMuNTgyLTgtOCAzLjU4Mi04IDgtOCA4IDMuNTgyIDggOHoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuNCAxLjUpIi8+CiAgICAgICAgPHBhdGggc3Ryb2tlPSIjMjAyRDUwIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGQ9Ik04LjUgNC41TDguNSA4LjUgMTIuNSA4LjUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuNCAxLjUpIi8+CiAgICA8L2c+Cjwvc3ZnPgo=" alt="clock" class=""> 33 Mins</div>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae vel ratione at eum molestiae perferendis nobis. Hic dolorum, libero earum sunt error, odio non optio quaerat reiciendis eius vel aliquid.</p>
                </figcaption>
            </figure>
          </div>
          <div class="col-md-4">
            <figure class="course-card figure">
              <img id="img-design" src="{{ asset('images/home/berita1.png') }}" class="figure-image img-fluid" style="background-color: rgb(219, 221, 255)" alt="">
              <div class="badge">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMiIgaGVpZ2h0PSIxMiIgdmlld0JveD0iMCAwIDEyIDEyIj4KICAgIDxwYXRoIGZpbGw9IiNGRkYiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTYuMzkuODU0TDcuNzIyIDMuNjhjLjA2My4xMzUuMTg2LjIyOC4zMjcuMjVsMi45NzguNDUzYy4zNTcuMDU0LjUuNTEzLjI0MS43NzdMOS4xMTQgNy4zNThjLS4xMDMuMTA1LS4xNS4yNTUtLjEyNi40MDNsLjUxIDMuMTA1Yy4wNi4zNzMtLjMxMy42NTYtLjYzMi40OEw2LjIwMiA5Ljg4MmMtLjEyNi0uMDctLjI3OC0uMDctLjQwNCAwbC0yLjY2NCAxLjQ2NmMtLjMxOS4xNzUtLjY5Mi0uMTA4LS42MzEtLjQ4bC41MDktMy4xMDZjLjAyNC0uMTQ4LS4wMjMtLjI5OC0uMTI2LS40MDNsLTIuMTU0LTIuMmMtLjI1OC0uMjYzLS4xMTYtLjcyMi4yNC0uNzc2bDIuOTc5LS40NTRjLjE0MS0uMDIxLjI2NC0uMTE0LjMyNy0uMjQ5TDUuNjEuODU0Yy4xNi0uMzM5LjYyLS4zMzkuNzggMCIvPgo8L3N2Zz4K" alt="star" class="">
                "Most Popular"
              </div>
              <figcaption class="figure-caption">
                <div class="heading">
                  <div class="name">Berita 1</div>
                  <div class="duration">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VGRjRGNyIgZD0iTTE3LjYgMTAuNWMwIDMuODY2LTMuMTM0IDctNyA3cy03LTMuMTM0LTctNyAzLjEzNC03IDctNyA3IDMuMTM0IDcgNyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMS40IDEuNSkiLz4KICAgICAgICA8cGF0aCBzdHJva2U9IiMyMDJENTAiIGQ9Ik0xNi41IDguNWMwIDQuNDE4LTMuNTgyIDgtOCA4cy04LTMuNTgyLTgtOCAzLjU4Mi04IDgtOCA4IDMuNTgyIDggOHoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuNCAxLjUpIi8+CiAgICAgICAgPHBhdGggc3Ryb2tlPSIjMjAyRDUwIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGQ9Ik04LjUgNC41TDguNSA4LjUgMTIuNSA4LjUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuNCAxLjUpIi8+CiAgICA8L2c+Cjwvc3ZnPgo=" alt="clock" class=""> 33 Mins</div>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet magni id voluptatibus placeat vero obcaecati incidunt necessitatibus vel earum, neque, non odit distinctio odio quod doloremque sunt, alias animi quis?</p>
                </figcaption>
            </figure>
          </div>
          <div class="col-md-4">
            <figure class="course-card figure">
              <img id="img-design" src="{{asset('images/home/berita1.png')}}" class="figure-image img-fluid" style="background-color: rgb(219, 221, 255)" alt="">
              <div class="badge">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMiIgaGVpZ2h0PSIxMiIgdmlld0JveD0iMCAwIDEyIDEyIj4KICAgIDxwYXRoIGZpbGw9IiNGRkYiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTYuMzkuODU0TDcuNzIyIDMuNjhjLjA2My4xMzUuMTg2LjIyOC4zMjcuMjVsMi45NzguNDUzYy4zNTcuMDU0LjUuNTEzLjI0MS43NzdMOS4xMTQgNy4zNThjLS4xMDMuMTA1LS4xNS4yNTUtLjEyNi40MDNsLjUxIDMuMTA1Yy4wNi4zNzMtLjMxMy42NTYtLjYzMi40OEw2LjIwMiA5Ljg4MmMtLjEyNi0uMDctLjI3OC0uMDctLjQwNCAwbC0yLjY2NCAxLjQ2NmMtLjMxOS4xNzUtLjY5Mi0uMTA4LS42MzEtLjQ4bC41MDktMy4xMDZjLjAyNC0uMTQ4LS4wMjMtLjI5OC0uMTI2LS40MDNsLTIuMTU0LTIuMmMtLjI1OC0uMjYzLS4xMTYtLjcyMi4yNC0uNzc2bDIuOTc5LS40NTRjLjE0MS0uMDIxLjI2NC0uMTE0LjMyNy0uMjQ5TDUuNjEuODU0Yy4xNi0uMzM5LjYyLS4zMzkuNzggMCIvPgo8L3N2Zz4K" alt="star" class="">
                "Most Popular"
              </div>
              <figcaption class="figure-caption">
                <div class="heading">
                  <div class="name">Berita 1</div>
                  <div class="duration">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VGRjRGNyIgZD0iTTE3LjYgMTAuNWMwIDMuODY2LTMuMTM0IDctNyA3cy03LTMuMTM0LTctNyAzLjEzNC03IDctNyA3IDMuMTM0IDcgNyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMS40IDEuNSkiLz4KICAgICAgICA8cGF0aCBzdHJva2U9IiMyMDJENTAiIGQ9Ik0xNi41IDguNWMwIDQuNDE4LTMuNTgyIDgtOCA4cy04LTMuNTgyLTgtOCAzLjU4Mi04IDgtOCA4IDMuNTgyIDggOHoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuNCAxLjUpIi8+CiAgICAgICAgPHBhdGggc3Ryb2tlPSIjMjAyRDUwIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGQ9Ik04LjUgNC41TDguNSA4LjUgMTIuNSA4LjUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuNCAxLjUpIi8+CiAgICA8L2c+Cjwvc3ZnPgo=" alt="clock" class=""> 33 Mins</div>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt necessitatibus velit facilis commodi qui maiores nihil, pariatur, laborum eligendi aliquid repellat delectus iusto neque aliquam! Enim, rem. Accusamus, quod hic?</p>
                </figcaption>
            </figure>
          </div>
          <div class="col-md-4">
            <figure class="course-card figure">
              <img id="img-design" src="{{asset('images/home/berita1.png')}}" class="figure-image img-fluid" style="background-color: rgb(219, 221, 255)" alt="">
              <div class="badge">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMiIgaGVpZ2h0PSIxMiIgdmlld0JveD0iMCAwIDEyIDEyIj4KICAgIDxwYXRoIGZpbGw9IiNGRkYiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTYuMzkuODU0TDcuNzIyIDMuNjhjLjA2My4xMzUuMTg2LjIyOC4zMjcuMjVsMi45NzguNDUzYy4zNTcuMDU0LjUuNTEzLjI0MS43NzdMOS4xMTQgNy4zNThjLS4xMDMuMTA1LS4xNS4yNTUtLjEyNi40MDNsLjUxIDMuMTA1Yy4wNi4zNzMtLjMxMy42NTYtLjYzMi40OEw2LjIwMiA5Ljg4MmMtLjEyNi0uMDctLjI3OC0uMDctLjQwNCAwbC0yLjY2NCAxLjQ2NmMtLjMxOS4xNzUtLjY5Mi0uMTA4LS42MzEtLjQ4bC41MDktMy4xMDZjLjAyNC0uMTQ4LS4wMjMtLjI5OC0uMTI2LS40MDNsLTIuMTU0LTIuMmMtLjI1OC0uMjYzLS4xMTYtLjcyMi4yNC0uNzc2bDIuOTc5LS40NTRjLjE0MS0uMDIxLjI2NC0uMTE0LjMyNy0uMjQ5TDUuNjEuODU0Yy4xNi0uMzM5LjYyLS4zMzkuNzggMCIvPgo8L3N2Zz4K" alt="star" class="">
                "Most Popular"
              </div>
              <figcaption class="figure-caption">
                <div class="heading">
                  <div class="name">Berita 1</div>
                  <div class="duration">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VGRjRGNyIgZD0iTTE3LjYgMTAuNWMwIDMuODY2LTMuMTM0IDctNyA3cy03LTMuMTM0LTctNyAzLjEzNC03IDctNyA3IDMuMTM0IDcgNyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMS40IDEuNSkiLz4KICAgICAgICA8cGF0aCBzdHJva2U9IiMyMDJENTAiIGQ9Ik0xNi41IDguNWMwIDQuNDE4LTMuNTgyIDgtOCA4cy04LTMuNTgyLTgtOCAzLjU4Mi04IDgtOCA4IDMuNTgyIDggOHoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuNCAxLjUpIi8+CiAgICAgICAgPHBhdGggc3Ryb2tlPSIjMjAyRDUwIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGQ9Ik04LjUgNC41TDguNSA4LjUgMTIuNSA4LjUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuNCAxLjUpIi8+CiAgICA8L2c+Cjwvc3ZnPgo=" alt="clock" class=""> 33 Mins</div>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum illo, molestias praesentium odio distinctio fugit magni ullam at consequuntur blanditiis eum quia, nostrum, quo et omnis molestiae delectus inventore laborum!</p>
                </figcaption>
            </figure>
          </div>
          <div class="col-md-4">
            <figure class="course-card figure">
              <img id="img-design" src="{{asset('images/home/berita1.png')}}" class="figure-image img-fluid" style="background-color: rgb(219, 221, 255)" alt="">
              <div class="badge">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMiIgaGVpZ2h0PSIxMiIgdmlld0JveD0iMCAwIDEyIDEyIj4KICAgIDxwYXRoIGZpbGw9IiNGRkYiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTYuMzkuODU0TDcuNzIyIDMuNjhjLjA2My4xMzUuMTg2LjIyOC4zMjcuMjVsMi45NzguNDUzYy4zNTcuMDU0LjUuNTEzLjI0MS43NzdMOS4xMTQgNy4zNThjLS4xMDMuMTA1LS4xNS4yNTUtLjEyNi40MDNsLjUxIDMuMTA1Yy4wNi4zNzMtLjMxMy42NTYtLjYzMi40OEw2LjIwMiA5Ljg4MmMtLjEyNi0uMDctLjI3OC0uMDctLjQwNCAwbC0yLjY2NCAxLjQ2NmMtLjMxOS4xNzUtLjY5Mi0uMTA4LS42MzEtLjQ4bC41MDktMy4xMDZjLjAyNC0uMTQ4LS4wMjMtLjI5OC0uMTI2LS40MDNsLTIuMTU0LTIuMmMtLjI1OC0uMjYzLS4xMTYtLjcyMi4yNC0uNzc2bDIuOTc5LS40NTRjLjE0MS0uMDIxLjI2NC0uMTE0LjMyNy0uMjQ5TDUuNjEuODU0Yy4xNi0uMzM5LjYyLS4zMzkuNzggMCIvPgo8L3N2Zz4K" alt="star" class="">
                "Most Popular"
              </div>
              <figcaption class="figure-caption">
                <div class="heading">
                  <div class="name">Berita 1</div>
                  <div class="duration">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VGRjRGNyIgZD0iTTE3LjYgMTAuNWMwIDMuODY2LTMuMTM0IDctNyA3cy03LTMuMTM0LTctNyAzLjEzNC03IDctNyA3IDMuMTM0IDcgNyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMS40IDEuNSkiLz4KICAgICAgICA8cGF0aCBzdHJva2U9IiMyMDJENTAiIGQ9Ik0xNi41IDguNWMwIDQuNDE4LTMuNTgyIDgtOCA4cy04LTMuNTgyLTgtOCAzLjU4Mi04IDgtOCA4IDMuNTgyIDggOHoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuNCAxLjUpIi8+CiAgICAgICAgPHBhdGggc3Ryb2tlPSIjMjAyRDUwIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGQ9Ik04LjUgNC41TDguNSA4LjUgMTIuNSA4LjUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuNCAxLjUpIi8+CiAgICA8L2c+Cjwvc3ZnPgo=" alt="clock" class=""> 33 Mins</div>
                  </div>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias beatae a saepe doloribus vitae corrupti laborum molestiae porro quas, itaque nobis exercitationem earum harum quos neque similique necessitatibus, atque voluptate.</p>
                </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <h1 id="dokumen" class="text-center pt-3"><b>DOKUMENTASI</b></h1>
        <div class="row pt-4">
          <div class="col-md-4">
            <div class="dokumentasi-1">
              <img src="{{asset('images/home/banner1.jpg')}}" width="100%" alt="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="dokumentasi-1">
              <img src="{{asset('images/home/banner1.jpg')}}" width="100%" alt="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="dokumentasi-1">
              <img src="{{asset('images/home/banner1.jpg')}}" width="100%" alt="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="dokumentasi-1">
              <img src="{{asset('images/home/banner1.jpg')}}" width="100%" alt="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="dokumentasi-1">
              <img src="{{asset('images/home/banner1.jpg')}}" width="100%" alt="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="dokumentasi-1">
              <img src="{{asset('images/home/banner1.jpg')}}" width="100%" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
        <div class="container">
            <div class="parallax"></div>
        </div>
    </section>

    <footer style="background-image: url('images/home/bg2.jpg');
    background-color: #fff;
     height: auto; 
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover;"> 
    <section id="contact" class="footer text-white ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="map" ></div>
                        </div>
                        <div class="col-md-6">
                            <h1 class="ms-4">
                                <b>Contact Us</b></h1>
                                <ul class="DataPens">
                                    <li> Jl. Raya ITS, Keputih, Kec. Sukolilo <br>
                                    Surabaya - Jawa Timur - Indonesia</li>
                                    <li>pens.ac.id</li>
                                    <li>Telf (031) 5947280</li>
                                </ul>
                                <div class="icons-wrapper">
                                    <i class="ri-instagram-line icon"></i>
                                    <i class="ri-facebook-circle-line icon"></i>
                                    <i class="ri-youtube-line icon"></i>
                                </div>
                        </div>
                        <div class="col-lg-12">
                            <p class="copyright">Copyright © 2022 POLITEKNIK ELEKTRONIKA NEGERI SURABAYA</p>
                        </div>
                    </div>
                </div>
    </section>
  </footer>
     <!-- Optional JavaScript; choose one of the two! -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

    <script>
        let load;
        function loading(){
            load = setTimeout(masukHalaman,5000)
        }
        function masukHalaman(){
            document.getElementById('loading').style.display = "none"
        }
    </script>

    <script>
        const map = L.map('map').setView([-7.275644888212839, 112.7938093406499], 12);

        const tiles = L.tileLayer(
        "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw",
        {
          maxZoom: 18,
          attribution:
            'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery ©️ <a href="https://www.mapbox.com/">Mapbox</a>',
          id: "mapbox/streets-v11",
          tileSize: 512,
          zoomOffset: -1,
        }
      ).addTo(map);
      var marker = L.marker([-7.275644888212839, 112.7938093406499]).addTo(map);
      marker.bindPopup("<b>PENS</b>").openPopup();
	</script>

</body>
</html>