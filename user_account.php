<html>
<head>
  <meta charset="utf-8">
  <title>Clarket-User Profile</title>
  <link rel="stylesheet" type="text/css" href="signin.css">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f3f3;
}

.wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 650px;
  display: flex;
  box-shadow: 4px 4px 10px #726d6d;
}

.wrapper .left{
  width: 35%;
  background: linear-gradient(to right,#f8800f,#f87a04);
  padding: 30px 25px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  text-align: center;
  color: #fff;
}

.wrapper .left img{
  border-radius: 5px;
  margin-bottom: 10px;
}

.wrapper .left h4{
  margin-bottom: 10px;
}

.wrapper .left p{
  font-size: 12px;
}

.wrapper .right{
  width: 65%;
  background: #fff;
  padding: 30px 25px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

.wrapper .right .info,
.wrapper .right .products{
  margin-bottom: 25px;
}

.wrapper .right .info h3,
.wrapper .right .products h3{
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 1px solid #e0e0e0;
    color: #353c4e;
  text-transform: uppercase;
  letter-spacing: 5px;
}

.wrapper .right .info_data,
.wrapper .right .products_data{
  display: flex;
  justify-content: space-between;
}

.wrapper .right .info_data .data,
.wrapper .right .products_data .data{
  width: 45%;
}

.wrapper .right .info_data .data h4,
.wrapper .right .products_data .data h4{
    color: #353c4e;
    margin-bottom: 5px;
}

.wrapper .right .info_data .data p,
.wrapper .right .products_data .data p{
  font-size: 13px;
  margin-bottom: 10px;
  color: #919aa3;
}

.wrapper .social_media ul{
  display: flex;
}

.wrapper .social_media ul li{
  width: 45px;
  height: 45px;
  background: linear-gradient(to right,#f8800f,#f87a04);
  margin-right: 10px;
  border-radius: 5px;
  text-align: center;
  line-height: 45px;
  position:relative;
}

.wrapper .social_media ul li a{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%, -50%);
  color :#fff;
  display: block;
  font-size: 18px;
}

i{
    width: fit-content;
    margin: auto;
}
  </style>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="#" rel="dofollow">CLARKET</a></h1>
        </div>
              <div class="wrapper">
                <div class="left">
                    <img src="assets/user_img.png" 
                    alt="user" width="100">
                    <h4>Naman</h4>
                     <p>Clarket Plus Customer</p>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>Information</h3>
                        <div class="info_data">
                             <div class="data">
                                <h4>Email</h4>
                                <p>naman@gmail.com</p>
                             </div>
                             <div class="data">
                               <h4>Phone</h4>
                                <p>9839478256</p>
                          </div>
                        </div>
                    </div>
                  
                  <div class="products">
                        <h3>Product</h3>
                        <div class="products_data">
                             <div class="data">
                                <h4>Recent Viewed Product</h4>
                                <p>Boat Headphones</p>
                             </div>
                             <div class="data">
                               <h4>Most Viewed Category</h4>
                                <p>Electronics</p>
                          </div>
                        </div>
                    </div>
                  
                    <div class="social_media">
                        <ul>
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                  </div>
                </div>
            </div>
          <div class="footer-link padding-top--24">
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="#">© Clarket</a></span>
              <span><a href="#">Contact</a></span>
              <span><a href="#">Privacy & terms</a></span>
            </div>
         
      </div>
    </div>
  </div>
</body>

</html>