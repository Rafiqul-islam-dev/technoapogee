  <!--Full width header Start-->
  <div class="full-width-header">
    <!--Header Start-->
    <header id="rs-header" class="rs-header style2 header-transparent">
        <!-- Topbar Area Start -->
        <div class="topbar-area style1">
            <div class="container custom">
                <div class="row y-middle">
                    <div class="col-lg-7">
                        <div class="topbar-contact">
                           <ul>
                               <li>
                                   <i class="flaticon-email"></i>
                                   <a href="mailto:info@technoapogee.com">info@technoapogee.com</a>
                               </li>
                               <li>
                                   <i class="flaticon-call"></i>
                                   <a href="tel:+8801714378008"> +880 1714378008</a>
                               </li>
                               <li>
                                   <i class="flaticon-location"></i>
                                   House # 09, Road# 1/B, Banani
                               </li>
                           </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="toolbar-sl-share">
                            <ul>
                                 <li class="opening"> <em><i class="flaticon-clock"></i>Saturday - Thursday / 9AM - 6PM</em> </li>
                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar Area End -->

        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container custom">
                <div class="row-table">
                    <div class="col-cell header-logo">                                  
                        <div class="logo-area">
                            <a href="index.html">
                                <img src="{{ asset('image/fontend/img/TALogo.PNG')}}" alt="logo">  
                            </a>
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <nav class="rs-menu hidden-md">
                                    <ul class="nav-menu">
                                        <li class="current-menu-item">
                                            <a href="{{('/')}}">Home</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="">About Us</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('our-mission-vision')}}">Our Mission & Vision</a></li>
                                                <li><a href="{{ route('our-team')}}">Our Team</a></li>
                                                <li><a href="{{ route('our-expertise')}}">Our Expertise</a></li>
                                                <li><a href="{{ route('strategic-partners')}}">Strategic Partners</a></li>
                                                
                                            </ul>
                                        </li>
                                        
                                       
                                        <li class="menu-item-has-children">
                                            <a href="#">PRODUCT & SERVICES</a>
                                            <ul class="mega-menu">
                                                <li>
                                                    <div class="sub-menu-mega">
                                                        <div class="meu-item " style="padding-left: 56px;">
                                                            <a href="{{ route('design-consultancy-services')}}">DESIGN & CONSULTANCY SERVICES</a>
                                                           <ul>
                                                            @foreach ($menu as $item)

                                                                @if ($item->parentid== 2)
                                                                {{-- <li><a href="{{ url('str_replace("page", " "', $item->slug)}}">{{$item->name}}</a></li> --}}
                                                                <li><a href="{{ url( $item->slug ) }}">{{$item->name}}</a></li>
                                                                @endif
                                                                
                                                           @endforeach
                                                               
                                                           </ul>
                                                        </div>
                                                        <div class="meu-item ">
                                                            <a href="{{ route('electrical-solution')}}">ELECTRICAL SOLUTION</a>
                                                            <ul>
                                                                @foreach ($menu as $item)
                                                                @if ($item->parentid== 3)
                                                                    
                                                                <li><a href="{{ url($item->slug)}}">{{$item->name}}</a></li>
                                                                @endif
                                                                
                                                              @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="meu-item">
                                                            <a href="{{ route('fire-electrical-solution')}}">FIRE SOLUTION</a>
                                                            <ul>
                                                                @foreach ($menu as $item)
                                                                @if ($item->parentid== 4)
                                                                    
                                                                <li><a href="{{ url($item->slug)}}">{{$item->name}}</a></li>
                                                                @endif
                                                                
                                                              @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="meu-item">
                                                            <a href="{{ route('automation-solution')}}">AUTOMATION SOLUTION</a>
                                                            <ul>
                                                                @foreach ($menu as $item)
                                                                @if ($item->parentid== 5)
                                                                    
                                                                <li><a href="{{ url($item->slug)}}">{{$item->name}}</a></li>
                                                                @endif
                                                                
                                                              @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="{{ route('project.our-project')}}">Our project</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('project.ongoing-project')}}">Ongoing Project</a></li>
                                                <li class="menu-item-has-children-sub">
                                                    <a href="{{ route('project.complete-project')}}">Complete Project</a>
                                                    <ul>
                                                        <li><a href="{{ route('project.industry-projects')}}">Industry Projects</a></li>
                                                        <li><a href="{{ route('project.bank-financial-projects')}}">Bank & Financial Projects</a></li>
                                                        <li><a href="{{ route('project.ngo')}}">NGO</a></li>
                                                        <li><a href="{{ route('project.club')}}">Club</a></li>
                                                        <li><a href="{{ route('project.hotel-resorts')}}">Hotel & Resorts</a></li>
                                                        <li><a href="{{ route('project.govt-projects')}}">Govt. Projects</a></li>
                                                        <li><a href="{{ route('project.commercial-building-projects')}}">Commercial Building Projects</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Blog</a>
                                        </li>
                                        <li class="">
                                            <a href="{{ route('contact-us')}}">Contact</a>
                                        </li>
                                    </ul> <!-- //.nav-menu -->
                                </nav>
                            </div> <!-- //.main-menu -->
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="expand-btn-inner">
                            <ul>
                                
                                <li class="humburger">
                                    <a id="nav-expander" class="nav-expander bar" href="#">
                                        <div class="bar">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                            <span class="dot4"></span>
                                            <span class="dot5"></span>
                                            <span class="dot6"></span>
                                            <span class="dot7"></span>
                                            <span class="dot8"></span>
                                            <span class="dot9"></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

       

        <!-- Canvas Mobile Menu start -->
        <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
            <div class="close-btn">
                <a id="nav-close2" class="nav-close">
                    <div class="line">
                        <span class="line1"></span>
                        <span class="line2"></span>
                    </div>
                </a>
            </div>
            <ul class="nav-menu">
                <li class="menu-item-has-children current-menu-item">
                    <a href="index.html">Home</a>
                    
                </li>
                {{-- <li class="menu-item-has-children">
                    <a href="#">Pages</a>                                                        
                   
                </li> --}}
                <li class="menu-item-has-children">
                    <a href="#">About Us</a>
                    <ul class="sub-menu">
                        <li><a href="portfolio.html">Our Mission & Vision</a></li>
                        <li><a href="portfolio2.html">Our Team</a></li>
                        <li><a href="portfolio3.html">Our Expertise</a></li>
                        <li><a href="portfolio3.html">Strategic Partners</a></li>
                       
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">PRODUCT & SERVICES</a>
                    <ul class="sub-menu">
                        <li><a href="services-style1.html">DESIGN & CONSULTANCY SERVICES</a></li>
                        <li><a href="services-style2.html">ELECTRICAL SOLUTION</a></li>
                        <li><a href="business-planning.html">FIRE SOLUTION</a></li>
                        <li><a href="business-planning.html">AUTOMATION SOLUTION</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="blog.html">Our project</a>
                </li>
                <li>
                    <a href="blog.html">Blog</a>
                </li>
               
                <li class="menu-item-has-children">
                    <a href="#">Contact</a>
                    
                </li>
            </ul> <!-- //.nav-menu -->
            <div class="canvas-contact">
                  <div class="address-area">
                      <div class="address-list">
                          <div class="info-icon">
                              <i class="flaticon-location"></i>
                          </div>
                          <div class="info-content">
                              <h4 class="title">Address</h4>
                              <em>05 kandi BR. New York</em>
                          </div>
                      </div>
                      <div class="address-list">
                          <div class="info-icon">
                              <i class="flaticon-email"></i>
                          </div>
                          <div class="info-content">
                              <h4 class="title">Email</h4>
                              <em><a href="mailto:support@rstheme.com">support@rstheme.com</a></em>
                          </div>
                      </div>
                      <div class="address-list">
                          <div class="info-icon">
                              <i class="flaticon-call"></i>
                          </div>
                          <div class="info-content">
                              <h4 class="title">Phone</h4>
                              <em>+019988772</em>
                          </div>
                      </div>
                  </div>
            </div>
        </nav>
        <!-- Canvas Menu end -->
    </header>
    <!--Header End-->
</div>
<!--Full width header End-->