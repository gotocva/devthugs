@extends('layouts.app')

@section('title') DevThugs @endsection

@section('content')
    <!-- Blog post list section -->
    <div class="section blog-section">
        <div class="container">
            <div class="columns">

                <div class="column is-8">

                    <!-- Blog post -->
                    <div class="is-post light-bordered">
                        <div class="featured-post-image">
                            <img src="https://via.placeholder.com/1200x300"
                                 data-demo-src="{{asset('/img/demo/posts/post-1.jpg')}}" alt="">
                            <div class="post-date">
                                <div class="post-date-inner">
                                    <span>Oct</span>
                                    <span>23</span>
                                </div>
                            </div>
                        </div>

                        <div class="featured-post-body">
                            <div class="featured-post-title">
                                <div class="title-avatar">
                                    <img src="https://via.placeholder.com/250x250" alt=""
                                         data-demo-src="{{asset('/img/avatars/alan.jpg')}}">
                                </div>
                                <div class="title-meta">
                                    <h2 class="post-title">How design has become critical in business Projects</h2>
                                    <h4 class="post-subtitle">
                                        <span>by <a class="author-name" href="#">Alan Maynard</a></span>
                                        <i class="fa fa-circle"></i>
                                        <span>Posted in <a href="#">Web Design</a></span>
                                    </h4>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacinia euismod urna, in
                                gravida leo efficitur a. Sed tempus augue risus, eget faucibus urna hendrerit a. Donec
                                pulvinar maximus dui ut porttitor. Nullam tristique tortor et ipsum tristique, ac
                                lacinia
                                diam faucibus. Nunc cursus massa eget consectetur laoreet ...</p>

                            <a class="read-more-link" href="{{url('/')}}/blog-single-page">
                                Read More <span>&#10230;</span>
                            </a>
                        </div>
                    </div>

                    <!-- Blog post -->
                    <div class="is-post light-bordered">
                        <div class="featured-post-image">
                            <img src="https://via.placeholder.com/1200x300"
                                 data-demo-src="{{asset('/img/demo/posts/post-2.jpg')}}" alt="">
                            <div class="post-date">
                                <div class="post-date-inner">
                                    <span>Oct</span>
                                    <span>22</span>
                                </div>
                            </div>
                        </div>

                        <div class="featured-post-body">
                            <div class="featured-post-title">
                                <div class="title-avatar">
                                    <img src="https://via.placeholder.com/250x250" alt=""
                                         data-demo-src="{{asset('/img/avatars/carolin.png')}}">
                                </div>
                                <div class="title-meta">
                                    <h2 class="post-title">5 Things you should know when planning for a new online store
                                    </h2>
                                    <h4 class="post-subtitle">
                                        <span>by <a class="author-name" href="#">Marjory Cambell</a></span>
                                        <i class="fa fa-circle"></i>
                                        <span>Posted in <a href="#">Ecommerce</a></span>
                                    </h4>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacinia euismod urna, in
                                gravida leo efficitur a. Sed tempus augue risus, eget faucibus urna hendrerit a. Donec
                                pulvinar maximus dui ut porttitor. Nullam tristique tortor et ipsum tristique, ac
                                lacinia
                                diam faucibus. Nunc cursus massa eget consectetur laoreet ...</p>

                            <a class="read-more-link">
                                Read More <span>&#10230;</span>
                            </a>
                        </div>
                    </div>

                    <!-- Blog post -->
                    <div class="is-post light-bordered">
                        <div class="featured-post-image">
                            <img src="https://via.placeholder.com/1200x300"
                                 data-demo-src="{{asset('/img/demo/posts/post-3.jpg')}}" alt="">
                            <div class="post-date">
                                <div class="post-date-inner">
                                    <span>Oct</span>
                                    <span>19</span>
                                </div>
                            </div>
                        </div>

                        <div class="featured-post-body">
                            <div class="featured-post-title">
                                <div class="title-avatar">
                                    <img src="https://via.placeholder.com/250x250" alt=""
                                         data-demo-src="{{asset('/img/avatars/marc.jpg')}}">
                                </div>
                                <div class="title-meta">
                                    <h2 class="post-title">Power up your SPA developments by using Vue js</h2>
                                    <h4 class="post-subtitle">
                                        <span>by <a class="author-name" href="#">Marc Walters</a></span>
                                        <i class="fa fa-circle"></i>
                                        <span>Posted in <a href="#">Development</a></span>
                                    </h4>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacinia euismod urna, in
                                gravida leo efficitur a. Sed tempus augue risus, eget faucibus urna hendrerit a. Donec
                                pulvinar maximus dui ut porttitor. Nullam tristique tortor et ipsum tristique, ac
                                lacinia
                                diam faucibus. Nunc cursus massa eget consectetur laoreet ...</p>

                            <a class="read-more-link">
                                Read More <span>&#10230;</span>
                            </a>
                        </div>
                    </div>

                    <!-- Blog post -->
                    <div class="is-post light-bordered">
                        <div class="featured-post-image">
                            <img src="https://via.placeholder.com/1200x300"
                                 data-demo-src="{{asset('/img/demo/posts/post-4.jpg')}}" alt="">
                            <div class="post-date">
                                <div class="post-date-inner">
                                    <span>Oct</span>
                                    <span>15</span>
                                </div>
                            </div>
                        </div>

                        <div class="featured-post-body">
                            <div class="featured-post-title">
                                <div class="title-avatar">
                                    <img src="https://via.placeholder.com/250x250" alt=""
                                         data-demo-src="{{asset('/img/avatars/elie.jpg')}}">
                                </div>
                                <div class="title-meta">
                                    <h2 class="post-title">Using Figma to speed up the design process</h2>
                                    <h4 class="post-subtitle">
                                        <span>by <a class="author-name" href="#">Elie Daniels</a></span>
                                        <i class="fa fa-circle"></i>
                                        <span>Posted in <a href="#">Design</a></span>
                                    </h4>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacinia euismod urna, in
                                gravida leo efficitur a. Sed tempus augue risus, eget faucibus urna hendrerit a. Donec
                                pulvinar maximus dui ut porttitor. Nullam tristique tortor et ipsum tristique, ac
                                lacinia
                                diam faucibus. Nunc cursus massa eget consectetur laoreet ...</p>

                            <a class="read-more-link">
                                Read More <span>&#10230;</span>
                            </a>
                        </div>
                    </div>

                    <!-- Blog post -->
                    <div class="is-post light-bordered">
                        <div class="featured-post-image">
                            <img src="https://via.placeholder.com/1200x300"
                                 data-demo-src="{{asset('/img/demo/posts/post-5.jpg')}}" alt="">
                            <div class="post-date">
                                <div class="post-date-inner">
                                    <span>Oct</span>
                                    <span>12</span>
                                </div>
                            </div>
                        </div>

                        <div class="featured-post-body">
                            <div class="featured-post-title">
                                <div class="title-avatar">
                                    <img src="https://via.placeholder.com/250x250" alt=""
                                         data-demo-src="{{asset('/img/avatars/helen.jpg')}}">
                                </div>
                                <div class="title-meta">
                                    <h2 class="post-title">8 Tips to chose the best payment provider for your
                                        business</h2>
                                    <h4 class="post-subtitle">
                                        <span>by <a class="author-name" href="#">Helen Miller</a></span>
                                        <i class="fa fa-circle"></i>
                                        <span>Posted in <a href="#">Business</a></span>
                                    </h4>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacinia euismod urna, in
                                gravida leo efficitur a. Sed tempus augue risus, eget faucibus urna hendrerit a. Donec
                                pulvinar maximus dui ut porttitor. Nullam tristique tortor et ipsum tristique, ac
                                lacinia
                                diam faucibus. Nunc cursus massa eget consectetur laoreet ...</p>

                            <a class="read-more-link">
                                Read More <span>&#10230;</span>
                            </a>
                        </div>
                    </div>

                    <!-- Blog post -->
                    <div class="is-post light-bordered">
                        <div class="featured-post-image">
                            <img src="https://via.placeholder.com/1200x300"
                                 data-demo-src="{{asset('/img/demo/posts/post-6.jpg')}}" alt="">
                            <div class="post-date">
                                <div class="post-date-inner">
                                    <span>Oct</span>
                                    <span>10</span>
                                </div>
                            </div>
                        </div>

                        <div class="featured-post-body">
                            <div class="featured-post-title">
                                <div class="title-avatar">
                                    <img src="https://via.placeholder.com/250x250" alt=""
                                         data-demo-src="{{asset('/img/avatars/anthony.jpg')}}">
                                </div>
                                <div class="title-meta">
                                    <h2 class="post-title">How to assess an idea and start working on the MVP</h2>
                                    <h4 class="post-subtitle">
                                        <span>by <a class="author-name" href="#">Anthony Briggs</a></span>
                                        <i class="fa fa-circle"></i>
                                        <span>Posted in <a href="#">Business</a></span>
                                    </h4>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacinia euismod urna, in
                                gravida leo efficitur a. Sed tempus augue risus, eget faucibus urna hendrerit a. Donec
                                pulvinar maximus dui ut porttitor. Nullam tristique tortor et ipsum tristique, ac
                                lacinia
                                diam faucibus. Nunc cursus massa eget consectetur laoreet ...</p>

                            <a class="read-more-link">
                                Read More <span>&#10230;</span>
                            </a>
                        </div>
                    </div>

                    <div class="load-more has-text-centered">
                        <button class="button button-cta">Load More</button>
                    </div>
                </div>

                <div class="column is-4">

                    <div class="blog-sidebar">

                        <!-- Search blog -->
                        <div class="control has-icons-right blog-sidebar-search">
                            <input class="input is-large" type="text" placeholder="Search posts...">
                            <span class="icon is-small is-right">
                                <i class="sl sl-icon-magnifier"></i>
                            </span>
                        </div>

                        <!--Recent Posts-->
                        <div class="blog-sidebar-posts">
                            <h4>Recent Posts</h4>

                            <div class="blog-sidebar-posts-inner">

                                <!-- Recent Post -->
                                <a href="#" class="blog-sidebar-post">
                                    <div class="post-image">
                                        <img src="https://via.placeholder.com/1600x900" alt=""
                                             data-demo-src="{{asset('/img/demo/posts/thumb-1.jpg')}}">
                                    </div>
                                    <div class="post-content">
                                        <h3>Learning design has become trendy in 2020</h3>
                                        <div class="meta">
                                            <img src="https://via.placeholder.com/250x250" alt=""
                                                 data-demo-src="{{asset('/img/avatars/helen.jp')}}g">
                                            <span>Helen Miller</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- Recent Post -->
                                <a href="#" class="blog-sidebar-post">
                                    <div class="post-image">
                                        <img src="https://via.placeholder.com/1600x900" alt=""
                                             data-demo-src="{{asset('/img/demo/posts/thumb-2.jpg')}}">
                                    </div>
                                    <div class="post-content">
                                        <h3>3 Strategies around customer emgagement</h3>
                                        <div class="meta">
                                            <img src="https://via.placeholder.com/250x250" alt=""
                                                 data-demo-src="{{asset('/img/avatars/elie.jpg')}}">
                                            <span>Elie Daniels</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- Recent Post -->
                                <a href="#" class="blog-sidebar-post">
                                    <div class="post-image">
                                        <img src="https://via.placeholder.com/1600x900" alt=""
                                             data-demo-src="{{asset('/img/demo/posts/thumb-3.jpg')}}">
                                    </div>
                                    <div class="post-content">
                                        <h3>Let me tell you why jQuery is not dead yet</h3>
                                        <div class="meta">
                                            <img src="https://via.placeholder.com/250x250" alt=""
                                                 data-demo-src="{{asset('/img/avatars/nick.jpg')}}">
                                            <span>Nick Motta</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- Recent Post -->
                                <a href="#" class="blog-sidebar-post">
                                    <div class="post-image">
                                        <img src="https://via.placeholder.com/1600x900" alt=""
                                             data-demo-src="{{asset('/img/demo/posts/thumb-4.jpg')}}">
                                    </div>
                                    <div class="post-content">
                                        <h3>Feeling alone in front of customer design choices?</h3>
                                        <div class="meta">
                                            <img src="https://via.placeholder.com/250x250" alt=""
                                                 data-demo-src="{{asset('/img/avatars/henry.jpg')}}">
                                            <span>Donald Baker</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--Categories-->
                        <div class="blog-sidebar-categories">
                            <h4>Categories</h4>

                            <div class="blog-sidebar-categories-inner">

                                <!--Category-->
                                <a href="#" class="blog-sidebar-category">
                                    <span>Business</span>
                                    <div class="post-count">
                                        <span>18</span>
                                    </div>
                                </a>

                                <!--Category-->
                                <a href="#" class="blog-sidebar-category">
                                    <span>Startups</span>
                                    <div class="post-count">
                                        <span>31</span>
                                    </div>
                                </a>

                                <!--Category-->
                                <a href="#" class="blog-sidebar-category">
                                    <span>Technology</span>
                                    <div class="post-count">
                                        <span>64</span>
                                    </div>
                                </a>

                                <!--Category-->
                                <a href="#" class="blog-sidebar-category">
                                    <span>Development</span>
                                    <div class="post-count">
                                        <span>112</span>
                                    </div>
                                </a>

                                <!--Category-->
                                <a href="#" class="blog-sidebar-category">
                                    <span>Management</span>
                                    <div class="post-count">
                                        <span>7</span>
                                    </div>
                                </a>

                                <!--Category-->
                                <a href="#" class="blog-sidebar-category">
                                    <span>Envato</span>
                                    <div class="post-count">
                                        <span>12</span>
                                    </div>
                                </a>

                                <!--Category-->
                                <a href="#" class="blog-sidebar-category">
                                    <span>Javascript</span>
                                    <div class="post-count">
                                        <span>29</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--Tags-->
                        <div class="blog-sidebar-tags">
                            <h4>Tags</h4>

                            <div class="tags">
                                <a class="tag is-medium">Aesthetics</a>
                                <a class="tag is-medium">Bulkit</a>
                                <a class="tag is-medium">CSS Frameworks</a>
                                <a class="tag is-medium">Envato</a>
                                <a class="tag is-medium">Web Design</a>
                                <a class="tag is-medium">Templates</a>
                                <a class="tag is-medium">Interactions</a>
                                <a class="tag is-medium">Bulma</a>
                                <a class="tag is-medium">Bootstrap</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
