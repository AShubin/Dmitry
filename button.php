<?php require_once "header.php"; ?>

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Buttons</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Buttons</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="container">
        <div class="row">
            <!--Buttons start-->
            <div class="col-lg-6 col-sm-6">
                <h3 class="skills">Default Buttons</h3>
                <div class="btn-row">
                    <button class="btn btn-default" type="button">Default</button>
                    <button class="btn btn-primary" type="button">Primary</button>
                    <button class="btn btn-success" type="button">Success</button>
                    <button class="btn btn-info" type="button">Info</button>
                    <button class="btn btn-warning" type="button">Warning</button>
                    <button class="btn btn-danger" type="button">Danger</button>
                </div>
                <h3 class="skills">Rounded Buttons</h3>
                <div class="btn-row">
                    <button class="btn btn-round btn-default" type="button">Default</button>
                    <button class="btn btn-round btn-primary" type="button">Primary</button>
                    <button class="btn btn-round btn-success" type="button">Success</button>
                    <button class="btn btn-round btn-info" type="button">Info</button>
                    <button class="btn btn-round btn-warning" type="button">Warning</button>
                    <button class="btn btn-round btn-danger" type="button">Danger</button>
                </div>
                <h3 class="skills">Dropdowns Button</h3>
                <div class="btn-row">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Default <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown">Primary <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-success dropdown-toggle btn-xs" data-toggle="dropdown">Success <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                </div>
                <h3 class="skills"> Split Dropdowns Button </h3>
                <div class="btn-row">
                    <div class="btn-group">
                        <button type="button" class="btn btn-white">Default</button>
                        <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-white">Dropup</button>
                        <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                </div>

                <h3 class="skills"> Group Button </h3>
                <div class="btn-row">
                    <div class="btn-row">
                        <div class="btn-group">
                            <button type="button" class="btn btn-white">Left</button>
                            <button type="button" class="btn btn-white">Middle</button>
                            <button type="button" class="btn btn-white">Right</button>
                        </div>
                        <div class="btn-group  btn-group-sm">
                            <button type="button" class="btn btn-white">Left</button>
                            <button type="button" class="btn btn-white">Middle</button>
                            <button type="button" class="btn btn-white">Right</button>
                        </div>
                    </div>
                    <p class="text-muted">Vertical button groups</p>
                    <div class="btn-row">
                        <div class="btn-group-vertical">
                            <button type="button" class="btn btn-white">Top</button>
                            <button type="button" class="btn btn-white">Middle</button>
                            <button type="button" class="btn btn-white">Bottom</button>
                        </div>
                    </div>
                    <p class="text-muted">Nested button groups</p>
                    <div class="btn-row">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default">1</button>
                            <button type="button" class="btn btn-danger">2</button>
                            <button type="button" class="btn btn-default">3</button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Dropdown <span class="caret"></span> </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Dropdown link 1</a></li>
                                    <li><a href="#">Dropdown link 2</a></li>
                                    <li><a href="#">Dropdown link 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <p class="text-muted">Multiple button groups</p>
                    <div class="btn-row">
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <button type="button" class="btn btn-info">1</button>
                                <button type="button" class="btn btn-info active">2</button>
                                <button type="button" class="btn btn-info">3</button>
                                <button type="button" class="btn btn-info">4</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">5</button>
                                <button type="button" class="btn btn-success">6</button>
                                <button type="button" class="btn btn-success">7</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning">8</button>
                            </div>
                        </div>
                    </div>

                    <p class="text-muted">Group Checkbox</p>
                    <div class="btn-row">
                        <div data-toggle="buttons" class="btn-group">
                            <label class="btn btn-primary">
                                <input type="checkbox"> Option 1
                            </label>
                            <label class="btn btn-primary">
                                <input type="checkbox"> Option 2
                            </label>
                            <label class="btn btn-primary">
                                <input type="checkbox"> Option 3
                            </label>
                        </div>
                    </div>

                    <p class="text-muted">Group Radio</p>
                    <div class="btn-row">
                        <div data-toggle="buttons" class="btn-group">
                            <label class="btn btn-default">
                                <input type="radio" id="option1" name="options"> Option 1
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" id="option2" name="options"> Option 2
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" id="option3" name="options"> Option 3
                            </label>
                        </div>
                    </div>
                </div>

            </div>
           <div class="col-lg-6 col-sm-6">
               <h3 class="skills"> Drop Shadow Buttons </h3>
               <div class="btn-row">
                   <button class="btn btn-shadow btn-default" type="button">Default</button>
                   <button class="btn btn-shadow btn-primary" type="button">Primary</button>
                   <button class="btn btn-shadow btn-success" type="button">Success</button>
                   <button class="btn btn-shadow btn-info" type="button">Info</button>
                   <button class="btn btn-shadow btn-warning" type="button">Warning</button>
                   <button class="btn btn-shadow btn-danger" type="button">Danger</button>
               </div>
               <h3 class="skills">  Buttons Size  </h3>
               <div class="btn-row">
                   <button class="btn btn-default btn-lg" type="button">Large Button</button>
                   <button class="btn btn-primary" type="button">Default Button</button>
                   <button class="btn btn-success btn-sm" type="button">Small Button</button>
                   <button class="btn btn-info btn-xs" type="button">Extra Small Button</button>
               </div>
               <h3 class="skills">  Buttons with Icon  </h3>
               <div class="btn-row">
                   <button class="btn btn-primary" type="button"><i class="fa fa-cloud"></i> Cloud</button>
                   <button class="btn btn-success" type="button"><i class="fa fa-eye"></i> View </button>
                   <button class="btn btn-info " type="button"><i class="fa fa-refresh"></i> Update</button>
                   <button class="btn btn-default " type="button"><i class="fa fa-cloud-upload"></i> Upload</button>
                   <button class="btn btn-white" data-toggle="button">
                       <i class="fa fa-thumbs-up text-info"></i>
                       55
                   </button>
                   <button class="btn btn-white" data-toggle="button">
                       <i class="fa fa-home"></i>
                   </button>
               </div>

               <h3 class="skills">   Justified Button groups   </h3>
               <div class="btn-row">
                   <div class="btn-group btn-group-justified">
                       <a href="#" class="btn btn-success">Left</a>
                       <a href="#" class="btn btn-info">Middle</a>
                       <a href="#" class="btn btn-danger">Right</a>
                   </div>
               </div>

               <h3 class="skills">    Block level button    </h3>
               <div class="btn-row">
                   <button class="btn btn-success btn-lg btn-block" type="button">Block level button</button>
                   <button class="btn btn-warning btn-block" type="button">Block level button</button>
                   <button class="btn btn-danger btn-xs btn-block" type="button">Block level button</button>
               </div>

               <h3 class="skills">    Social Icons   </h3>
               <ul class="social-link-footer list-unstyled">
                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                   <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                   <li><a href="#"><i class="fa fa-skype"></i></a></li>
                   <li><a href="#"><i class="fa fa-github"></i></a></li>
                   <li><a href="#"><i class="fa fa-youtube"></i></a></li>

                   <li><a href="#"><i class="fa fa-html5"></i></a></li>
                   <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                   <li><a href="#"><i class="fa fa-dropbox"></i></a></li>
                   <li><a href="#"><i class="fa fa-android"></i></a></li>
                   <li><a href="#"><i class="fa fa-gittip"></i></a></li>
                   <li><a href="#"><i class="fa fa-apple"></i></a></li>
                   <li><a href="#"><i class="fa fa-trello"></i></a></li>
                   <li><a href="#"><i class="fa fa-weibo"></i></a></li>

                   <li><a href="#"><i class="fa fa-adn"></i></a></li>
                   <li><a href="#"><i class="fa fa-bitbucket"></i></a></li>
                   <li><a href="#"><i class="fa fa-github"></i></a></li>
                   <li><a href="#"><i class="fa fa-renren"></i></a></li>
                   <li><a href="#"><i class="fa fa-vk"></i></a></li>
                   <li><a href="#"><i class="fa fa-linux"></i></a></li>
                   <li><a href="#"><i class="fa fa-maxcdn"></i></a></li>
                   <li><a href="#"><i class="fa fa-instagram"></i></a></li>

               </ul>

           </div>
            <!--Buttons end-->
        </div>

    </div>
    <!--container end-->

    <!--footer start-->
    <?php require_once "footer.php";?>
    <!--footer end-->

  <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>

    <script src="js/jquery.easing.min.js"></script>
    <script src="js/link-hover.js"></script>


     <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>


  <script>

  </script>

  </body>
</html>
