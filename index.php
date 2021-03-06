<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Clarket-College ki dukaan</title>
  </head>

  <body>
    <img src="assets/hero-media-illustration-light.svg" class="hero-image" />
    <header class="site-header">
      <div class="container">
        <div class="site-header-inner">
          <div class="brand header-brand">
            <h1 class="m-0">
              <div href="#">
                <img
                  class="header-logo-image asset-light"
                  src="assets/logo-light.svg"
                  alt="Logo"
                />
              </div>
            </h1>
          </div>
        </div>
      </div>
    </header>
    <div class="align-horizontal">
      <img src="assets/Wavy_Bus-17_Single-09.jpg" class="vector-image" />
      <div>
        <p class="home-heading">Clarket</p>
        <p class="home-subheading">
          Your Student <br />
          Utility Marketplace
        </p>
        <p class="home-subsubheading">
          Platform to buy and sell college commodities. <br />
          For Students. By Students.
        </p>
        <a href="sell2.php">Explore</a>
      </div>
    </div>
    <br />
    <br />
    <hr />
    <img src="assets/features-illustration-light.svg" class="second-bg-image" />
    <div class="align-horizontal">
      <div>
        <p class="who-are-we">Who are We?</p>
        <p class="who-are-we-body">
          Clarket is a budding startup by a group of 5 entreprenurial minds with
          a vision to make the lives of students easier by providing a platform
          to trade college related commodities.
        </p>
      </div>
      <div class="trusted">
        <p>Trusted by students from</p>
        <div class="align-horizontal">
          <div class="cards-pair" width="350px">
            <img
              class="card"
              src="assets/2560px-Harvard_University_logo.svg-removebg-preview.png"
            />
            <img class="card" src="assets/download-removebg-preview.png" />
          </div>
          <div class="cards-pair pair-2" width="250px">
            <img class="card" src="assets/ucb-removebg-preview.png" />
            <img class="card" src="assets/u_penn-removebg-preview.png" />
          </div>
        </div>
      </div>
    </div>
    <br />
    <div
      id="carouselExampleCaptions"
      class="carousel carousel-dark slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active slidebutton"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          class="slidebutton"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          class="slidebutton"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/user1.jpg" class="user-icon-image" />
          <img
            src="assets/IIITD.jpg"
            class="d-block w-100 reviewimage"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Shivam Singla</h5>
            <p>
              "Experience with Clarket was seamless. Helped me in setting
              <br />up the perfect environment for my hostel room. "
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/user2.jpg" class="user-icon-image" />
          <img
            src="assets/IIITD.jpg"
            class="d-block w-100 reviewimage"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Abdus Samad</h5>
            <p>
              "Cleared all the apprehensions of my parents. <br />Best quality
              and low cost products available here"
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/user3.jpg" class="user-icon-image" />
          <img
            src="assets/NSUT.jpg"
            class="d-block w-100 reviewimage"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Vanshika Maurya</h5>
            <p>
              "Awesome user interface and good customer support. <br />10/10,
              will recommend to everyone. "
            </p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br />
    <img
      src="assets/features-illustration-top-light.svg"
      class="bottom-hero-image"
    />
    <div class="align-content-end">
      <div class="popular-locations">
        <p>Popular Locations</p>
        <p class="location">New Delhi</p>
        <p class="location">Mumbai</p>
        <p class="location">Bengaluru</p>
      </div>
      <div class="connect">
        <p>Connect With Us</p>
        <div class="connect-images">
          <img class="connect-logo" src="assets/instagram-logo.png" />
          <img class="connect-logo" src="assets/fb_logo.png" />
          <img class="connect-logo" src="assets/ld_logo.png" />
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
