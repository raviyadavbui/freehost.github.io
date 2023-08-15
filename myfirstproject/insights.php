<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <style>
    .large {
      position: relative;
      background-color: burlywood;
      overflow: hidden;
    }

    .midium {
      text-align: center;
      

    }

    .small {
      color: #fff;
      background-color: #333a4d;
     
      position: absolute;
      bottom: -100%;
      left: 0%;
      text-align: center;
      width: 100%;
      height: 20%;
      transition: all 0.3s;
    }

    .large:hover .small {
      bottom: 0;
    }

    .large:hover img {
      transform: scale(1.1);
      transition: all 0.2s;
    }

    .box2 {
      position: relative;
      /* overflow: hidden; */
      box-sizing: border-box;
      /* z-index: -1; */


    }

    .large2 {}

    .large3 {
      position: absolute;
      bottom: -40px;
      padding: 10px;
      padding-left: 56px;
      padding-right: 85px;
      overflow: hidden;
      background-color: #333a4d;
      color:#fff;
    }

    .span1 {
      color: #fff;
      background-color: #c18f59;
      
      position: absolute;
      bottom: -95%;
      left: 0%;
      text-align: center;
      width: 100%;
      height: 100%;
      /* visibility: hidden; */
      display: flex;
      justify-content: center;
      align-items: center;
      transition: all 0.3s;
    }

    .box2:hover .span1 {
      bottom: 0;
      /* visibility: visible; */

    }

    .box2:hover img {
      transform: scale(1.1);
      transition: all 0.2s;

        

    }

    .icon {
      position: absolute;
      top: -20px;
      padding: 15px;
      left: 200px;
      font-size: 20px;
      border-radius: 100%;
      background-color: #c18f59;
      color: #fff;
      
      
    }
    
  </style>
</head>

<body>
  <?php
  include "header.php";
  ?>
  <section class="insights-section-first">
    <div class="text-center  p-5 ">
      <h1>BLOGS</h1>
      <span>Premier Legal Services with Integrity and Expertise</span>
    </div>

  </section>

  <section class=" blog p-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="clearfix">
            <img src="images/Fotolia_39975530_Subscription_Monthly_XXL-400x300.jpg" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">

            <div>

              <span>
                CGK offers a diverse range of practice areas, catering to the complex legal needs of our clients.
                Our team of experienced professionals works diligently to deliver efficient and effective legal solutions.

              </span>
            </div>

            <p>
              Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue. Fusce dapibus, tellus ac cursus commodo, tortor mauris paddenstoel nibh, ut fermentum massa justo sit amet risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>

            <p>
              Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Id nullam tellus relem amet commodo telemque olemit. Sed posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
            </p>

            <p>
              Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lantaarnpaal quam venenatis vestibulum. Donec sed odio dui. Maecenas faucibus mollis interdum. Nullam quis risus eget urna salsa tequila vel eu leo. Donec id elit non mi porta gravida at eget metus.
            </p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="p-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div>
            <img src="images/Fotolia_1181532_Subscription_Monthly_L-750x380.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>


  






  <?php
  include "footer.php";
  ?>
</body>

</html>