<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta name="description" content="Creative One Page Parallax Template">
  <meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> 
  <meta name="author" content=""> 
  <title>BashaBhara.com</title>
  <link href=" {{ asset('/css/bootstrap.min.css') }}" rel="stylesheet"> 
  <link href=" {{ asset('/home/css/prettyPhoto.css') }}" rel="stylesheet">
  <link href=" {{ asset('/home/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href=" {{ asset('/home/css/animate.css') }}" rel="stylesheet">
  <link href=" {{ asset('/home/css/main.css') }}" rel="stylesheet">
 <link href=" {{ asset('/home/css/responsive.css') }}" rel="stylesheet">
  <link href=" {{ asset('/css/bashavara.css') }}" rel="stylesheet">
  <link href=" {{ asset('/css/extra.css') }}" rel="stylesheet">
  <!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
  <script src="js/respond.min.js"></script> <![endif]--> 
  <link rel="shortcut icon" href="images/ico/favicon.png"> 
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('/home/images/ico/apple-touch-icon-144-precomposed.png') }}"> 
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('/home/images/ico/apple-touch-icon-114-precomposed.png') }}"> 
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('/home/images/ico/apple-touch-icon-72-precomposed.png') }}"> 
  <link rel="apple-touch-icon-precomposed" href="{{ asset('/home/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head>

<body>

    <!-- Navigation -->
    <div class="preloader">
    <div class="preloder-wrap">
      <div class="preloder-inner"> 
        <div class="ball"></div> 
        <div class="ball"></div> 
        <div class="ball"></div> 
        <div class="ball"></div> 
        <div class="ball"></div> 
        <div class="ball"></div> 
        <div class="ball"></div>
      </div>
    </div>
  </div><!--/.preloader-->

    <!-- Navigation -->
<header id="navigation"> 
    <div class="navbar navbar-inverse navbar-fixed-top" role="banner" style="background: #F6F6F6"> 
      <div class="container"> 
        <div class="navbar-header"> 
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
          </button> 
          <a class="navbar-brand" id="home-brand" href="{{URL::to('/')}}"><h1><img src="{{asset('/home/images/logop.png')}}" alt="logo"></h1></a>
          
        </div> 
        <div class="collapse navbar-collapse"> 
          <div class="row">
          <ul class="nav navbar-nav navbar-right" id="head-nav1"> 
            
            @if(Session::get('userlogin'))
                        
                <li class="scroll"><a href="{{ URL::to('/MyProfile')}}"><i class="fa fa-user"></i> {{ Session::get('username')}}</a></li>
                <li class="scroll"><a href="{{ URL::to('/Logout')}}"><i class="fa fa-sign-out"></i>Log Out</a></li>
                       
           @endif

           @if(!Session::get('userlogin'))
                        
                <li class="scroll"><a href="{{ URL::to('/LogIn')}}"><i class="fa fa-sign-in"></i>Log In</a></li>
                <li class="scroll"><a href="{{ URL::to('/Register')}}"><i class="fa fa-user-plus"></i>Register</a></li>

           @endif 
          </ul> 
          </div>
          <div class="row">
          <ul class="nav navbar-nav navbar-right" id="head-nav2"> 
          
          <li class="scroll"><a href="{{ URL::to('/Rent')}}"><i class="fa fa-money"></i>Rent</a></li>
          <!--<li class="scroll"><a href="#clients"><i class="fa fa-suitcase"></i>Buy</a></li> --> 
          <li class="scroll"><a href="{{ URL::to('/PostAd')}}"><i class="fa fa-pencil"></i>Advertise</a></li>  
          <li class="scroll"><a href="{{ URL::to('/MyProfile')}}"><i class="fa fa-list-alt"></i>My Advertisement</a></li> 
            <li class="scroll"><a href="#clients"><i class="fa fa-bookmark"></i>My WishList</a></li> 
            <li class="scroll"><a href="#blog"><i class="fa fa-thumb-tack"></i>Create Alert</a></li> 
            <li class="scroll"><a href="#contact"><i class="fa fa-bell"></i>Notifications</a></li>
                
          </ul> 
          </div>
        </div>

        
        
      </div> 
    </div><!--/navbar--> 
</header>

    <br><br>
    <div class="row">
        <div class="col-md-3" style="padding-left:6%">
        <label class="control-label"><h3>Advanced Search</h3></label>
        <hr id="advanceHr">
    </div>
    </div>
       
    <div class="col-md-3" style="padding-left:5%">   
      <form class="form-horizontal" action="Rent" method="POST">
        <fieldset>
            
            <div class="control-group">
              <select class="form-control" id="sel1" value="1" name="city">
                <option>Select City</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Sylhet">Sylhet</option>
                <option value="Khulna">Khulna</option>
                <option value="Barishal">Barishal</option>
                <option value="Rangpur">Rangpur</option>
                <option value="Mymensingh">Mymensingh</option>
              </select>
            </div>
            <br>
            <div class="control-group">
                        <select class="form-control" id="sel1" value="1" name="area">
                            <option>Select Area</option>
                            <option value="Uttara">Uttara</option>
                            <option value="Mirpur">Mirpur</option>
                            <option value="Mohamadpur">Mohamadpur</option>
                            <option value="Gulsan">Gulsan</option>
                            <option value="Banani">Banani</option>
                            <option value="Lalbag">Lalbag</option>
                            <option value="Jatrabari">Jatrabari</option>
                            <option value="Dhanmondi">Dhanmondi</option>
                            <option value="Mohakhali">Mohakhali</option>
                            <option value="Motijheel">Motijheel</option>
                            <option value="Shantinogor">Shantinogor</option>
                            <option value="Arambag">Arambag</option>
                        </select>
            </div>

            <label class="control-label" style="padding-top:0"><h3>Rent Type</h3></label>
            <hr id="advanceHr">
            <div class="control-group">
               <label class="radio-inline"><input type="radio" value="Residential" name="ltype">Residential</label>
               <label class="radio-inline"><input type="radio" value="Commercial" name="ltype">Commercial</label>
            </div>

            <label class="control-label" style="padding-top:0"><h3>Property Type</h3></label>
            <hr id="advanceHr">
            <div class="control-group">
                <div class="col-md-6">
                    <div><label ><input type="checkbox" value="1" name="flat"> Flat</label></div>
                    <div><label ><input type="checkbox" value="1" name="house"> House</label></div>
                    <div><label ><input type="checkbox" value="1" name="single_room"> Single Room</label></div>
                </div>
                <div class="col-md-6">
                    <div><label ><input type="checkbox" value="1" name="floor_space"> Floor Space</label></div>
                    <div><label ><input type="checkbox" value="1" name="duplex"> Duplex</label></div>
                    <div><label ><input type="checkbox" value="1" name="sublet"> Sublet</label></div>
                </div>
            </div>

            <label class="control-label" style="padding-top:0"><h3>Price Range (TK)</h3></label>
            <hr id="advanceHr">
            <div class="control-group" id="chuthia">
                <div class="col-md-5" >
                     <input type="text" id="textBox2"placeholder="" class="input-large" name="prange1">
                  </div>
                  <div class="col-md-2" style="text-align: center">
                     <label class="control-label">to</label>
                  </div>
                  <div class="col-md-5">
                     <input type="text" id="textBox2"placeholder="" class="input-large" name="prange2">
                  </div>
               
            </div>
            
            <label class="control-label" style="padding-top:0"><h3>Features</h3></label>
            <hr id="advancehr">
            <div class="control-group">
                <div class="col-md-5" >
                    <div class="form-group controls">
                        <select class="form-control" id="sel1" name="Bed">
                            <option>Bed</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="5+">5+</option>
                        </select>
                    </div>
                </div>
                
                <div class="col-md-2" >
                </div>

                <div class="col-md-5">
                     <div class="form-group controls">
                        <select class="form-control" id="sel1" name="Bath">
                            <option>Bath</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="3+">3+</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="control-group">
                   <label><input type="checkbox" value="1" name="lift"> Lift</label>
                   <label style="padding-left:37%"><input type="checkbox" value="1" name="garage"> Garage</label>
            </div>
            <br>
            <div class="control-group">
                <div class="col-md-6">
                   <label class="control-label"  for="username">Size (sq.feet)</label>
                </div>
                <div class="col-md-6">
                     <input type="text" id="textBox2"placeholder="" class="input-large" name="psize">
                </div>
          </div>
          <br><br><br>
          <div class="control-group">
            <!-- Button -->
            <div class="controls">
              <button type="Submit" class="btn btn-primary"> Advanced Search</button>
            </div>
          </div>

        </fieldset>
      </form>
    </div>


    <!---Right part -->

    <div class="col-md-9" >
      <div class="container-fluid" style="padding-top:0">
        <!-- Project One -->

        @for($i=0;$i<count($adv_data);$i++)
        <div class="row">
            <div class="col-md-5">
                <a href="#">

                    @if(!empty($adv_data[$i]->adid))
                       <?php $link = "/images/".$adv_data[$i]->adid."/Image0.jpg"; ?>
                       <?php $link2 = "/AdDetails/".$adv_data[$i]->adid; ?>
                    @endif
                    <img class="img-responsive" src="{{asset($link)}}" alt="">
                </a>
            </div>
            <div class="col-md-7">
                <h3>Address: {{ $adv_data[$i]->address}}</h3>
                <h4>Price: {{ $adv_data[$i]->price}} Tk</h4>
                <h4>Bed: {{ $adv_data[$i]->bed}}</h4>
                <h4>Bath: {{ $adv_data[$i]->bath}}</h4>
                <a class="btn btn-info" href="#"><span class="glyphicon glyphicon-star-empty"> </span> Add to WishList</a>
                <a class="btn btn-success" href="{{ URL::to($link2)}}">Show Details<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        @endfor

      </div>
    </div>
        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        

    
    
    <!-- /.container -->

    <br><br><br><br>

    <footer id="footer"> 
    <div class="container"> 
      <div class="text-center"> 
        <p>Copyright &copy; 2015 - <a href="">BashaBhara.com</a> | All Rights Reserved</p> 
      </div> 
    </div> 
  </footer> <!--/#footer--> 

  <script src="{{ asset('/home/js/jquery.js') }}"></script> 
  <script src="{{ asset('/home/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/home/js/smoothscroll.js') }}"></script> 
  <script src="{{ asset('/home/js/jquery.isotope.min.js') }}"></script>
  <script src="{{ asset('/home/js/jquery.prettyPhoto.js') }}"></script> 
  <script src="{{ asset('/home/js/jquery.parallax.js') }}"></script> 
  <script src="{{ asset('/home/js/main.js') }}"></script>  




</body></html>