<html><head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="jquery-3.1.0.min"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <style>
      .sign{background-color:Lightblue;
      }
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
            <h1 class="sign" contenteditable="true">Login</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form role="form">
              <div class="form-group">
                <label class="control-label" for="exampleInputEmail1">Email address</label>
                <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
              </div>
              <div class="form-group">
                <label class="control-label" for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
              <br>
              <a href=""><br><u>Forgot Password?</u></a>
            </form>
          </div>
        </div>
      </div>
    </div>


</body></html>