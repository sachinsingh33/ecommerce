<html><head>
    <title>Home1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="jquery-3.1.0.min"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <style>
      hr {
          border: none;
          height: 1px;
          width: 1200px;
          /* Set the hr color */
          color: #333; /* old IE */
          background-color: #333; /* Modern Browsers */
      }
      .button {
          background-color: white; /* Green */
          border: 1px solid black;
          color: white;
          padding: 6px 10px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          cursor: pointer;
          float: left;
      }

      .button:hover {
          background-color: green;
      }
      .button:hover {
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
      }
      .button1 {
          background-color: white; /* Green */
          border: 1px solid black;
          color: white;
          padding: 6px 10px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          cursor: pointer;
          float: left;
      }

      .button1:hover {
          background-color: green;
      }
      .button1:hover {
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
      }
    </style>
  </head><body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>
              <b>ShopChus.com
                <hr width="50%">
              </b>
            </h2>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <button class="button">
            <li
                            @if($pagetype == "Home1")
                            class="active"
                            @else
                            class="hvr-sweep-to-bottom"
                            @endif
                            ><a href="Home1"
                            >Home</a>
                            </li></button>
            <button class="button">
            <li
                            @if($pagetype == "Mobilephones")
                            class="active"
                            @else
                            class="hvr-sweep-to-bottom"
                            @endif
                            ><a href="Mobilephones"
                            >Mobilephones</a>
                            </li></button>
            <button class="button"><li
                            @if($pagetype == "Tablets")
                            class="active"
                            @else
                            class="hvr-sweep-to-bottom"
                            @endif
                            ><a href="Tablets"
                            >Tablets</a>
                            </li></button>
            <button class="button"><li
                            @if($pagetype == "Laptops")
                            class="active"
                            @else
                            class="hvr-sweep-to-bottom"
                            @endif
                            ><a href="Laptops"
                            >Laptops</a>
                            </li></button>
            <button class="button"><li
                            @if($pagetype == "Motherboards")
                            class="active"
                            @else
                            class="hvr-sweep-to-bottom"
                            @endif
                            ><a href="Motherboards"
                            >Motherboards</a>
                            </li></button>
            <button class="button"><li
                            @if($pagetype == "Processors")
                            class="active"
                            @else
                            class="hvr-sweep-to-bottom"
                            @endif
                            ><a href="Processors"
                            >Processors</a>
                            </li></button>
            <button class="button"><li
                            @if($pagetype == "Offers")
                            class="active"
                            @else
                            class="hvr-sweep-to-bottom"
                            @endif
                            ><a href="Offers"
                            >Offers</a>
                            </li></button>
          <!--  <button class="button">Sales</button>-->
          </div>
          <div class="col-md-3">
            <button class="button1">
              <u><li
                            @if($pagetype == "SignUp")
                            class="active"
                            @else
                            class="hvr-sweep-to-bottom"
                            @endif
                            ><a href="SignUp"
                            >SignUp</a>
                            </li></u>
            </button>
            <button class="button1">
              <u><li
                            @if($pagetype == "Login")
                            class="active"
                            @else
                            class="hvr-sweep-to-bottom"
                            @endif
                            ><a href="Login"
                            >Login</a>
                            </li></u>
            </button>
          </div>
          <!-- <button class="button">Button</button>
          <button class="button">Button</button>-->
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center text-primary">By all Items at 50% Discount</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <a><img src="https://unsplash.imgix.net/photo-1422222948315-28aadb7a2cb8?w=1024&amp;q=50&amp;fm=jpg&amp;s=cfeadbd7a991e58b553bee29a7eeca55" class="img-responsive"></a>
            <h1>Men's wear</h1>
            <p></p>
          </div>
          <div class="col-md-4">
            <a><img src="https://ununsplash.imgix.net/photo-1417024321782-1375735f8987?w=1024&amp;q=50&amp;fm=jpg&amp;s=7af3f809a9c1b90b7fcbd71655b661bc" class="img-responsive"></a>
            <h2>Women's wear</h2>
            <p></p>
          </div>
          <div class="col-md-4">
            <a><img src="https://unsplash.imgix.net/photo-1421986527537-888d998adb74?w=1024&amp;q=50&amp;fm=jpg&amp;s=e633562a1da53293c4dc391fd41ce41d" class="img-responsive"></a>
            <h2>Kids</h2>
            <p></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <a><img src="https://unsplash.imgix.net/uploads/1411724908903377d4696/2e9b0cb2?w=1024&amp;q=50&amp;fm=jpg&amp;s=2016c4932a7b7a1b629cb6890bff9977" class="img-responsive"></a>
            <h1 contenteditable="true">Cameras</h1>
            <p></p>
          </div>
          <div class="col-md-4">
            <a><img src="https://unsplash.imgix.net/photo-1418479631014-8cbf89db3431?w=1024&amp;q=50&amp;fm=jpg&amp;s=478a9a2196033db7c0bf3c8ba3707f4d" class="img-responsive"></a>
            <h1>Cars</h1>
            <p></p>
          </div>
          <div class="col-md-4">
            <a><img src="https://ununsplash.imgix.net/uploads/1411115362846f0257a48/3f4eb74a?w=1024&amp;q=50&amp;fm=jpg&amp;s=15087518f9f4fccf7b7f6f1e73330099" class="img-responsive"></a>
            <h2>Home</h2>
            <p></p>
          </div>
        </div>
      </div>
    </div>


</body></html>