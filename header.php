 <div class="pre-loader">
    <div class="loading-img"></div>
  </div>

  <header class="nav-menu fixed-top">
   <nav class="navbar normal">
    <div class="container-fluid">
     <div class="navbar-header">
      <a class="navbar-brand" href="index-2.html">
        <div class="mold-logo">
          <div class="mold">Mold</div>
          <div class="logo"></div>
          <div class="logo-txt">Discover</div>
        </div>
      </a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="navbar-collapse collapse" id="main-navbar">
    <ul class="nav navbar-nav">
        <li class="dropdown  megamenu">
            <a href="index.php" class="dropdown-toggle">Home</a>
        </li>
        <li class="dropdown submenu">
            <a href="#" class="dropdown-toggle">About Us</a>
        </li>

        <li class="dropdown submenu">
            <a href="#" class="dropdown-toggle">Halls</a>
        </li>

        <li>
            <a data-toggle="modal" data-target="#myModal"><span class="icon-user"></span>Sign Up</a>
        </li>

        <li>
            <a data-toggle="modal" data-target="#myModalLogin"><span class="icon-user"></span>Login</a>
        </li>

        <li class="last-menu-item">
            <a href="#" title="Search your hall"><i id="" class="fa fa-search slide-icon" style="color:white !important;"></i></a>
        </li>
    </ul> 

  <!-- modal pop-up -->
      <div style="" class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">   
    <!-- Modal content-->
    <div class="modal-content col-xs-10 col-xs-offset-1" style="overflow: auto;margin-top: 5%">
      <div class="modal-header" style="background-color: #3a203e">
        <button style="color:white;opacity: 0.9" type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:white">SignUp Form!</h4>
      </div>
      <div class="modal-body">
        <!-- <p>somw test</p> -->

        <div class="form-box col-md-12 col-xs-12" style="z-index:999;background-color: #F1F2F8">

          <div class="form-body">
            <form>
              <div class="form-group col-md-6 col-sm-6 col-xs-12"  style="padding:0px">                  
                <div class="input-group pad">
                  <div class="input-group-addon"><i class="fa fa-institution"></i></div>
                  <input type="text" name="hallname" class="form-control" placeholder="Hall Name"/>
                </div>
              </div>

              <div class="form-group col-md-6 col-sm-6 col-xs-12" style="padding:0px">                   
                <div class="input-group">
                  <div class="input-group-addon icon-user" style="color: #3a203e"></div>
                  <input type="text" name="username" class="form-control" placeholder="User Name"/>
                </div>
              </div>
            </form>
          </div>

          <div class="form-group col-md-6 col-sm-6 col-xs-12"  style="padding:0px">  
            <div class="input-group pad">
              <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
              <input type="email" name="email" class="form-control" placeholder="Email"/>
            </div>
          </div>
          <div class="form-group col-md-6 col-sm-6 col-xs-12" style="padding:0px">

            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-phone"></i></div>
              <input type="tel" name="contact" class="form-control" placeholder="Contact"/>
            </div>
          </div>

          <div class="form-group col-md-6 col-sm-6 col-xs-12"  style="padding:0px">

            <div class="input-group pad">
              <div class="input-group-addon"><i class="fa fa-lock"></i></div>
              <input type="password" name="password" class="form-control" placeholder="Enter Password"/>
            </div>
          </div>
          <div class="form-group col-md-6 col-sm-6 col-xs-12" style="padding:0px">

            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-lock"></i></div>
              <input type="password" name="confirmpass" class="form-control" placeholder="Confirm Password"/>
            </div>
          </div>

          <div class="form-group col-md-6 col-sm-6 col-xs-12" style="padding:0px">
            <div class="input-group pad">
              <div class="input-group-addon" style="padding: 0 14px;"><i class="fa fa-map-marker"></i></div>
              <div id="selection">
                <select id="listBox" class="form-control" onchange='selct_district(this.value)'>
                  <option selected disabled>State</option>

                </select>
              </div>
            </div>
          </div>

          <div class="form-group col-md-6 col-sm-6 col-xs-12" style="padding:0px">
            <div class="input-group">
              <div class="input-group-addon" style="padding: 0 14px;"><i class="fa fa-map-marker"></i></div>
              <div id="selection">
                <select id='secondlist' class="form-control">
                  <option selected disabled>City</option>

                </select>
              </div>
            </div>
          </div>

          <div class="form-group col-md-6 col-sm-6 col-xs-12"  style="padding:0px">

            <div class="input-group pad">
              <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
              <input type="text" name="area" class="form-control" placeholder="Enter Area Name"/>
            </div>
          </div>
          <div class="form-group col-md-6 col-sm-6 col-xs-12" style="padding:0px">

            <div class="input-group pad">
              <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
              <input type="text" name="landmark" class="form-control" placeholder="Enter Landmark"/>
            </div>
          </div>

          <div class="form-group" style="padding:0px">

            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
              <input type="tel" name="pincode" class="form-control" placeholder="Enter Pincode"/>
            </div>
          </div>

          <div class="form-group col-md-6 col-sm-6 col-xs-12" style="padding:0px">
            <div class="input-group pad">
              <div class="input-group-addon" style="padding: 0 14px;"><i class="fa fa-group"></i></div>
              <div id="selection">
                <select id='secondlist' class="form-control">
                  <option selected disabled>Enter Capacity</option>
                  <option>0-500</option>
                  <option>500-1000</option>
                  <option>1000-1500</option>
                  <option>1500-2000</option>
                  <option>2000-2500</option>
                  <option>2500-3000</option>
                  <option>3000-3500</option>

                </select>
              </div>
            </div>
          </div>

          <div class="form-group col-md-6 col-sm-6 col-xs-12" style="padding:0px">         
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-rupee"></i></div>
              <input type="text" name="price" class="form-control" placeholder="Enter Price"/>
            </div>
          </div>

          <button type="submit" id="registercust" class="btn btn-primary hvr-sweep-to-right">SignUp</button>

        </div>
      </div>
    </div>
    </div>
    </div>

  <!-- /modal pop-up -->

  <!-- Login modal pop-up -->
      <div style="" class="modal fade" id="myModalLogin" role="dialog">
  <div class="modal-dialog">   
    <!-- Modal content-->
    <div class="modal-content col-xs-10 col-xs-offset-1" style="overflow: auto;margin-top: 5%">
      <div class="modal-header" style="background-color: #3a203e">
        <button style="color:white;opacity: 0.9" type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:white">Login Form!</h4>
      </div>
      <div class="modal-body">
        <!-- <p>somw test</p> -->

        <div class="form-box col-md-12 col-xs-12" style="z-index:999;background-color: #F1F2F8">

          <div class="form-body">
            <form>
              <div class="form-group col-md-12 col-sm-12 col-xs-12"  style="padding:0px">  
                <div class="input-group pad">
                  <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                  <input type="email" name="email" class="form-control" placeholder="Email"/>
                </div>
              </div>

              <div class="form-group col-md-12 col-sm-12 col-xs-12"  style="padding:0px">
                <div class="input-group pad">
                  <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                  <input type="password" name="password" class="form-control" placeholder="Enter Password"/>
                </div>
              </div>

              <button type="submit" id="registercust" class="btn btn-primary hvr-sweep-to-right">Login</button>

            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

  <!-- Login modal pop-up ends -->
</nav>

<p style="text-align:center" class="p-hide-search">
  <a href="#" title="Search your hall"><i id="" class="fa fa-search slide-icon" style="color:#3a203e"></i></a>
</p>
</header>