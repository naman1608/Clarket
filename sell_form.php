<?php
 session_start(); 
include 'partials/_dbconnect.php';
function redirect($url) {
  ob_start();
  header('Location: '.$url);
  ob_end_flush();
  die();
}

if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)){
  redirect("signin.php");
  // exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $category = $_POST["slct1"];
    $product = $_POST["slct2"];
    $title = $_POST["adTitle"];
    $condition = $_POST["adCondtion"];
    $description = $_POST["adDescription"];
    $price = $_POST["adPrice"];
    $phone = $_SESSION['mobile'];
    $seller_name = $_SESSION['username'];
    $seller_email = $_SESSION['email'];
    $college= $_SESSION['college'];
    $filename = $_FILES["inpFile"]["name"];
    $tempname = $_FILES["inpFile"]["tmp_name"];    
        $folder = "image/".$filename;

        echo $_SESSION["college"];

        echo $filename;
        echo $folder;
          $msg="";
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)){
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }

      echo $msg;
   // echo $username." ".$password;
    
    // function redirect($url) {
    //   ob_start();
    //   header('Location: '.$url);
    //   ob_end_flush();
    //   die();
    // }

    $sql = "INSERT INTO products (category, product, title, description, price, phone, seller_name,img_name,product_condition,email,college)
    VALUES ('$category','$product', '$title','$description', '$price', '$phone', '$seller_name','$filename','$condition','$seller_email','$college')";
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    //redirect("signin.php");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>


<html>
<head>
  <meta charset="utf-8">
  <title>Clarket-Product Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="signin.css">

  <style>
    .image-preview {
      width: 300px;
      min-height: 100px;
      border: 2px solid rgba(223, 207, 207, 0.867);
      margin-top: 15px;

      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: rgba(236, 213, 213, 0.867);
    }

    .image-preview__image {
      display: none;
      width: 100%;
    }

    body {
      background: linear-gradient(to right,#f8800f,#ffffff);
    }

    .form {
      border-radius: 3%;
      position: flex;
      margin-top: 15%;
      margin: auto;
      width: fit-content;
      padding: 5%;
      background-color: rgb(253, 253, 253);
      align-items: center;
      box-shadow: 4px 4px 2px #000000;
    }

    #slct1, #slct2 {
      width : 100%;
    }

    .closeSellPopupDiv{
      margin: 20px; 
    }

    .fas{
      color: black;
      text-decoration: none;
    }

    html, body {
width: 100%;
height:100%;
}

body {
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
}

@keyframes gradient {
  0% {
      background-position: 0% 50%;
  }
  50% {
      background-position: 100% 50%;
  }
  100% {
      background-position: 0% 50%;
  }
}

.btn{
width: 50%;
display: block;
margin: auto !important;
}
.headingDiv{
text-align: center;
}

.image-preview{
margin: auto;
}



  </style>
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
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="#" rel="dofollow">Place Your Product...</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <form id="sellForm" action="sell_form.php" method="post" enctype="multipart/form-data">
                  <div class="field padding-bottom--24">
                    <label for="slct1">Choose Product Category</label>
                    <select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
                    <option value="Furniture">Furniture</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Books">Books</option>
                    <option value="Beddings">Beddings</option>
                    <option value="Bathroom Accessories">Bathroom Accessories</option>
                    <option value="Kitchen Accessories">
                        Kitchen Accessories
                    </option></select>
                  </div>
        
                <label for="slct2">Choose Product</label>
                <select id="slct2" name="slct2"></select
                ><br />
                <br>            
                
                    <div >                        
                        <label for="adTitle">Title</label>                  
                        <input type="text" name="adTitle" required /><br />                        
                    </div>
                    <div >
                            <label for="adCondition">Condition</label>
                            <input type="text" name="adCondtion" required /><br />
                    </div>
                    <div >
                            <label for="adDescription">Description</label>
                            <input type="text" name="adDescription" required /><br />
                    </div>
                    <div>
                            <label for="adPrice">Price</label>
                            <input type="number"  name="adPrice" required /><br />
                    </div>
                <br>
                <table>
                    <tr>
                        <td>
                            <label for="adImage">Product Image</label>
                        </td>
                        <td>
                            <input type="file" name="inpFile" id="inpFile" /><br />
                        </td>
                    </tr>
                </table>
        
                <div class="image-preview" id="imagePreview">
                  <span class="image-preview__default-text">Image Preview</span>
                  <img src="" alt="Image Preview" class="image-preview__image" />
                </div>
                <br>
                <div class="field padding-bottom--24">
                    <input type="submit" name="submit" value="ADD">
                </div>
              </form>
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
    </div>
  </div>
  <script src="scripts/index.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
</body>

</html>