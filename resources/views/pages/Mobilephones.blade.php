<html><head>
    <title>Mobilephones</title>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
  </head><body>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="jquery-3.1.0.min"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <style>
      .new{
      background-color:Lightgreen}
      .new1{
      background-color:Lightgreen}
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
            <h1 class="new1">Mobile Phones</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img src="https://n1.sdlcdn.com/imgs/a/9/f/large/Samsung-J5-8GB-Espresso-Brown-SDL848531361-1-4642d.jpg" class="img-responsive">
            <h2>Samsung J7</h2>
            <p>Rs.13939</p>
          </div>
          <div class="col-md-3">
            <img class="img-responsive" src="https://n1.sdlcdn.com/imgs/b/a/b/large/Samsung-Galaxy-Note-5-32GB-SDL802329833-1-6efb9.jpg">
            <h2>Samsung note5</h2>
            <p>Rs. 68000</p>
          </div>
          <div class="col-md-3">
            <img src="https://n1.sdlcdn.com/imgs/b/x/u/large/Samsung-Galaxy-S7-32GB-4G-SDL097478876-1-0bf39.jpg" class="img-responsive img-rounded">
            <h2>Samsung S7</h2>
            <p>Rs.68000</p>
          </div>
          <div class="col-md-3">
            <img src="https://n1.sdlcdn.com/imgs/a/4/y/large/Panasonic-P55-novo-2gb-16GB-SDL737033341-1-cb628.jpg" class="img-responsive">
            <h2>Panasonic K10</h2>
            <p>Rs.22200</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img src="https://n1.sdlcdn.com/imgs/a/n/3/230x258/Apple-iPhone-6-Plus-GB-SDL694722384-1-ea4d6.jpeg" class="img-responsive">
            <h2>iphone 6s 16gb&nbsp;</h2>
            <p>RS . &nbsp;42000</p>
          </div>
          <div class="col-md-3">
            <img src="https://n2.sdlcdn.com/imgs/a/j/x/230x258/Apple-iPhone-5S-32-GB-SDL219180564-1-ba9a2.webp" class="img-responsive">
            <h2>iphone 6 16gb</h2>
            <p>Rs. 40000</p>
          </div>
          <div class="col-md-3">
            <img src="https://n1.sdlcdn.com/imgs/a/n/3/230x258/Apple-iPhone-6-Plus-GB-SDL694722384-1-ea4d6.jpeg" class="img-responsive img-rounded">
            <h2>iphone 6s 16gb</h2>
            <p>Rs. 48960</p>
          </div>
          <div class="col-md-3">
            <img src="https://n1.sdlcdn.com/imgs/a/n/3/230x258/Apple-iPhone-6-Plus-GB-SDL694722384-1-ea4d6.jpeg" class="img-responsive">
            <h2>iphone &nbsp;632gb</h2>
            <p>Rs. 48800</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="new">Top selling products</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <img src="https://n3.sdlcdn.com/imgs/b/s/6/large/SDL270332702_1-59459.jpg" class="img-responsive">
            <h2>Lotto</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div class="col-md-3">
            <img src="https://n3.sdlcdn.com/imgs/a/t/5/large/F-D-A110-2-1-SDL028841668-1-f01ed.jpg" class="img-responsive">
            <h2>Philips</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div class="col-md-3">
            <img src="https://n3.sdlcdn.com/imgs/b/p/0/large/Headly-30-Kg-Home-Gym-SDL680121695-1-fb5c2.jpg" class="img-responsive img-rounded">
            <h2>Gymnacium</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div class="col-md-3">
            <img src="https://n3.sdlcdn.com/imgs/b/v/d/large/Ishin-Black-Bhagalpuri-Silk-Saree-SDL807844319-1-27814.jpg" class="img-responsive">
            <h2>Silk</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img src="https://n3.sdlcdn.com/imgs/b/p/k/large/L220_23feb-96c9b.jpg" class="img-responsive">
            <h2>Epson</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div class="col-md-3">
            <img src="https://n3.sdlcdn.com/imgs/a/v/i/large/Yonex-Muscle-Power-29-Lite-SDL065874839-1-ce871.jpg" class="img-responsive">
            <h2>Reebok</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div class="col-md-3">
            <img src="https://n3.sdlcdn.com/imgs/c/v/q/large/Sunflame-Diamond-4B-SS-GT-SDL538749379-1-bc8d3.jpg" class="img-responsive img-rounded">
            <h2>Stove</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div class="col-md-3">
            <img src="https://n3.sdlcdn.com/imgs/b/5/u/large/NewTide-46f1b.jpg" class="img-responsive">
            <h2>Excel</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p contenteditable="true">&nbsp;</p>
            <h2>ABOUT SHOPCHUS</h2>
            <br>
            <br>About Shopchus – India’s Ultimate Online Shopping Destination Snapdeal’s
            vision is to create India’s most reliable and frictionless commerce ecosystem
            that creates life-changing experiences for buyers and sellers. In February
            2010, Kunal Bahl along with Rohit Bansal, started Snapdeal.com - India’s
            largest online marketplace, with the widest assortment of 35 million plus
            products across 800 plus diverse categories from over 125,000 regional,
            national, and international brands and retailers. With millions of users
            and more than 300,000 sellers, Snapdeal is the shopping destination for
            Internet users across the country, delivering to 6000+ cities and towns
            in India. In its journey till now, Snapdeal has partnered with several
            global marquee investors and individuals such as SoftBank
            <p></p>
          </div>
        </div>
      </div>
    </div>


</body></html>