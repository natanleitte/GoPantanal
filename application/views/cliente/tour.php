<?php
foreach ($tour->result() as $row) {
    $tour = $row;
}
?>


<section id="content">
    <div class="container">

        <div class="block-header">
            <h2>Malinda Hollaway <small>Web/UI Developer, Edinburgh, Scotland</small></h2>

            <ul class="actions m-t-20 hidden-xs">
                <li class="dropdown">
                    <a href="" data-toggle="dropdown">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="">Privacy Settings</a>
                        </li>
                        <li>
                            <a href="">Account Settings</a>
                        </li>
                        <li>
                            <a href="">Other Settings</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="card c-timeline" id="profile-main">
            <div class="pm-overview c-overflow">
                <div class="pmo-pic">
                    <div class="p-relative">
                        <a href="">
                            <img class="img-responsive" src="img/profile-pics/profile-pic-2.jpg" alt=""> 
                        </a>

                        <div class="dropdown pmop-message">
                            <a data-toggle="dropdown" href="" class="btn bgm-white btn-float z-depth-1">
                                <i class="zmdi zmdi-comment-text-alt"></i>
                            </a>

                            <div class="dropdown-menu">
                                <textarea placeholder="Write something..."></textarea>

                                <button class="btn bgm-green btn-float"><i class="zmdi zmdi-mail-send"></i></button>
                            </div>
                        </div>

                        <a href="" class="pmop-edit">
                            <i class="zmdi zmdi-camera"></i> <span class="hidden-xs">Update Profile Picture</span>
                        </a>
                    </div>


                    <div class="pmo-stat">
                        <h2 class="m-0 c-white">1562</h2>
                        Total Connections
                    </div>
                </div>

                <div class="pmo-block pmo-contact hidden-xs">
                    <h2>Contact</h2>

                    <ul>
                        <li><i class="zmdi zmdi-phone"></i> 00971 12345678 9</li>
                        <li><i class="zmdi zmdi-email"></i> malinda-h@gmail.com</li>
                        <li><i class="zmdi zmdi-facebook-box"></i> malinda.hollaway</li>
                        <li><i class="zmdi zmdi-twitter"></i> @malinda (twitter.com/malinda)</li>
                        <li>
                            <i class="zmdi zmdi-pin"></i>
                            <address class="m-b-0 ng-binding">
                                44-46 Morningside Road,<br>
                                Edinburgh,<br>
                                Scotland
                            </address>
                        </li>
                    </ul>
                </div>

                <div class="pmo-block pmo-items hidden-xs">
                    <h2>Connections</h2>

                    <div class="pmob-body">
                        <div class="row">
                            <a href="" class="col-xs-2">
                                <img class="img-circle" src="img/profile-pics/1.jpg" alt="">
                            </a>
                            <a href="" class="col-xs-2">
                                <img class="img-circle" src="img/profile-pics/2.jpg" alt="">
                            </a>
                            <a href="" class="col-xs-2">
                                <img class="img-circle" src="img/profile-pics/3.jpg" alt="">
                            </a>
                            <a href="" class="col-xs-2">
                                <img class="img-circle" src="img/profile-pics/4.jpg" alt="">
                            </a>
                            <a href="" class="col-xs-2">
                                <img class="img-circle" src="img/profile-pics/5.jpg" alt="">
                            </a>
                            <a href="" class="col-xs-2">
                                <img class="img-circle" src="img/profile-pics/6.jpg" alt="">
                            </a>
                            <a href="" class="col-xs-2">
                                <img class="img-circle" src="img/profile-pics/7.jpg" alt="">
                            </a>
                            <a href="" class="col-xs-2">
                                <img class="img-circle" src="img/profile-pics/8.jpg" alt="">
                            </a>
                            <a href="" class="col-xs-2">
                                <img class="img-circle" src="img/profile-pics/1.jpg" alt="">
                            </a>
                            <a href="" class="col-xs-2">
                                <img class="img-circle" src="img/profile-pics/2.jpg" alt="">
                            </a>
                            <a href="" class="col-xs-2">
                                <img class="img-circle" src="img/profile-pics/3.jpg" alt="">
                            </a>
                            <a href="" class="col-xs-2">
                                <img class="img-circle" src="img/profile-pics/4.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pm-body clearfix">
                <ul class="tab-nav tn-justified">
                    <li class="waves-effect"><a href="profile-about.html">About</a></li>
                    <li class="active waves-effect"><a href="profile-timeline.html">Timeline</a></li>
                    <li class="waves-effect"><a href="profile-photos.html">Photos</a></li>
                    <li class="waves-effect"><a href="profile-connections.html">Connections</a></li>
                </ul>


                <div class="timeline">
                    <div class="t-view" data-tv-type="text">
                        <div class="tv-header media">
                            <a href="" class="tvh-user pull-left">
                                <img class="img-responsive" src="img/profile-pics/profile-pic-2.jpg" alt="">
                            </a>
                            <div class="media-body p-t-5">
                                <strong class="d-block">Data do Início do Tour: <?php echo $tour->data_tour_ini;?></strong>
                                <small class="c-gray"></small>
                            </div>

                            <ul class="actions m-t-20 hidden-xs">
                                <li class="dropdown">
                                    <a href="" data-toggle="dropdown">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="">Edit</a>
                                        </li>
                                        <li>
                                            <a href="">Delete</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tv-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sem dolor, posuere convallis blandit sit amet, aliquet in est. Ut condimentum magna enim, non venenatis elit interdum accumsan. In hac habitasse platea dictumst. Etiam molestie felis non mollis viverra. In ipsum lorem, fermentum vitae lectus in, accumsan malesuada neque.</p>

                            <p>Suspendisse vehicula urna nisi, in luctus lacus consequat at. Nam purus dolor, tristique id lacinia sed, tincidunt congue metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec gravida leo. Sed nec ligula porta, dignissim elit molestie, finibus ligula. Nunc venenatis malesuada est ac molestie. Phasellus ornare nibh eu nisl rhoncus, vitae porttitor ante feugiat. Nulla vehicula erat nec odio dignissim, sit amet porttitor lorem auctor. Maecenas fermentum tellus ex, ac aliquet nisl malesuada id.</p>

                            <div class="clearfix"></div>

                            <ul class="tvb-stats">
                                <li class="tvbs-comments">54 Comments</li>
                                <li class="tvbs-likes">254 Likes</li>
                                <li class="tvbs-views">23K Views</li>
                            </ul>

                            <a class="tvc-more" href=""><i class="zmdi zmdi-mode-comment"></i> View all 54 Comments</a>
                        </div>

                        <div class="tv-comments">
                            <ul class="tvc-lists">
                                <li class="media">
                                    <a href="" class="tvh-user pull-left">
                                        <img class="img-responsive" src="img/profile-pics/1.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <strong class="d-block">David Peiterson</strong>
                                        <small class="c-gray">April 23, 2014 at 05:10</small>

                                        <div class="m-t-10">Maecenas fermentum tellus ex, ac aliquet nisl malesuada id.</div>

                                    </div>
                                </li>

                                <li class="media">
                                    <a href="" class="tvh-user pull-left">
                                        <img class="img-responsive" src="img/profile-pics/2.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <strong class="d-block">Wernall Parnell</strong>
                                        <small class="c-gray">April 22, 2014 at 13:00</small>

                                        <div class="m-t-10">Nulla vehicula erat nec odio dignissim, sit amet porttitor lorem auctor. Maecenas fermentum tellus ex, ac aliquet nisl malesuada id.</div>

                                    </div>
                                </li>

                                <li class="media">
                                    <a href="" class="tvh-user pull-left">
                                        <img class="img-responsive" src="img/profile-pics/3.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <strong class="d-block">Shane Lee Yong</strong>
                                        <small class="c-gray">April 19, 2014 at 10:10</small>

                                        <div class="m-t-10">Sit amet porttitor lorem auctor. Maecenas fermentum tellus ex, ac aliquet nisl malesuada idwoon lorem ipsum.</div>
                                    </div>
                                </li>

                                <li class="p-20">
                                    <div class="fg-line">
                                        <textarea class="form-control auto-size" placeholder="Write a comment..."></textarea>
                                    </div>

                                    <button class="m-t-15 btn btn-primary btn-sm">Post</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="t-view" data-tv-type="image">
                        <div class="tv-header media">
                            <a href="" class="tvh-user pull-left">
                                <img class="img-responsive" src="img/profile-pics/profile-pic-2.jpg" alt="">
                            </a>
                            <div class="media-body p-t-5">
                                <strong class="d-block">Malinda Hollaway</strong>
                                <small class="c-gray">April 05, 2014 at 11:00</small>
                            </div>

                            <ul class="actions m-t-20 hidden-xs">
                                <li class="dropdown">
                                    <a href="" data-toggle="dropdown">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="">Edit</a>
                                        </li>
                                        <li>
                                            <a href="">Delete</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tv-body">

                            <div class="lightbox m-b-20">
                                <div data-src="img/headers/sm/4.png">
                                    <div class="lightbox-item pull-left">
                                        <img src="img/headers/sm/4.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sem dolor, posuere convallis blandit sit amet, aliquet in est. Ut condimentum magna enim, non venenatis elit interdum accumsan. In hac habitasse platea dictumst. Etiam molestie felis non mollis viverra. In ipsum lorem, fermentum vitae lectus in, accumsan malesuada neque.</p>

                            <div class="clearfix"></div>

                            <ul class="tvb-stats">
                                <li class="tvbs-comments"><i class="zmdi zmdi-comment"></i> 120 <span class="hidden-xs">Comments</span></li>
                                <li class="tvbs-likes"><i class="zmdi zmdi-thumb-up"></i> 34K <span class="hidden-xs">Likes</span></li>
                                <li class="tvbs-views"><i class="zmdi zmdi-remove-red-eye"></i> 105K <span class="hidden-xs">Views</span></li>
                            </ul>

                            <a class="tvc-more" href=""><i class="zmdi zmdi-mode-comment"></i> View all 290 Comments</a>
                        </div>

                        <div class="tv-comments">
                            <ul class="tvc-lists">
                                <li class="media">
                                    <a href="" class="tvh-user pull-left">
                                        <img class="img-responsive" src="img/profile-pics/1.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <strong class="d-block">Jolla Hatkin</strong>
                                        <small class="c-gray">April 23, 2014 at 05.00</small>

                                        <div class="m-t-10">Donec vel metus nisl. Nam euismod neque et finibus vulputate. Integer in vestibulum orci. Phasellus ut iaculis arcu, vitae commodo justo. Ut eu feugiat lorem, quis ornare risus</div>

                                    </div>
                                </li>

                                <li class="media">
                                    <a href="" class="tvh-user pull-left">
                                        <img class="img-responsive" src="img/profile-pics/2.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <strong class="d-block">David Simpson</strong>
                                        <small class="c-gray">April 23, 2014 at 05.00</small>

                                        <div class="m-t-10">Nulla vehicula erat nec odio dignissim, sit amet porttitor lorem auctor. Maecenas fermentum tellus ex, ac aliquet nisl malesuada id.</div>

                                    </div>
                                </li>
                                <li class="p-20">
                                    <div class="fg-line">
                                        <textarea class="form-control auto-size" placeholder="Write a comment..."></textarea>
                                    </div>

                                    <button class="m-t-15 btn btn-primary btn-sm">Post</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="t-view" data-tv-type="video">
                        <div class="tv-header media">
                            <a href="" class="tvh-user pull-left">
                                <img class="img-responsive" src="img/profile-pics/profile-pic-2.jpg" alt="">
                            </a>
                            <div class="media-body p-t-5">
                                <strong class="d-block">Malinda Hollaway</strong>
                                <small class="c-gray">April 01, 2014 at 15:00</small>
                            </div>

                            <ul class="actions m-t-20 hidden-xs">
                                <li class="dropdown">
                                    <a href="" data-toggle="dropdown">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="">Edit</a>
                                        </li>
                                        <li>
                                            <a href="">Delete</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tv-body">

                            <div class="embed-responsive embed-responsive-16by9 m-b-20">
                                <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/aaZXDm3RXuo"></iframe>
                            </div>

                            <p>Duis sem dolor, posuere convallis blandit sit amet, aliquet in est. Ut condimentum magna enim, non venenatis elit interdum accumsan. In hac habitasse platea dictumst. Etiam molestie felis non mollis viverra. In ipsum lorem, fermentum vitae lectus in, accumsan malesuada neque.</p>

                            <div class="clearfix"></div>

                            <ul class="tvb-stats">
                                <li class="tvbs-comments">21 Comments</li>
                                <li class="tvbs-likes">156 Likes</li>
                                <li class="tvbs-views">2365 Views</li>
                            </ul>

                            <a class="tvc-more" href=""><i class="zmdi zmdi-mode-comment"></i> View all 14 Comments</a>
                        </div>

                        <div class="tv-comments">
                            <ul class="tvc-lists">
                                <li class="media">
                                    <a href="" class="tvh-user pull-left">
                                        <img class="img-responsive" src="img/profile-pics/6.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <strong class="d-block">Jolla Hatkin</strong>
                                        <small class="c-gray">April 23, 2014 at 05.00</small>

                                        <div class="m-t-10">Donec vel metus nisl. Nam euismod neque et finibus vulputate. Integer in vestibulum orci. Phasellus ut iaculis arcu, vitae commodo justo. Ut eu feugiat lorem, quis ornare risus</div>

                                    </div>
                                </li>

                                <li class="media">
                                    <a href="" class="tvh-user pull-left">
                                        <img class="img-responsive" src="img/profile-pics/5.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <strong class="d-block">Sean Paul Jr.</strong>
                                        <small class="c-gray">April 23, 2014 at 05.00</small>

                                        <div class="m-t-10">Nulla vehicula erat nec odio dignissim, sit amet porttitor lorem auctor. Maecenas fermentum tellus ex, ac aliquet nisl malesuada id.</div>

                                    </div>
                                </li>
                                <li class="p-20">
                                    <div class="fg-line">
                                        <textarea class="form-control auto-size" placeholder="Write a comment..."></textarea>
                                    </div>

                                    <button class="m-t-15 btn btn-primary btn-sm">Post</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="t-view" data-tv-type="image">
                        <div class="tv-header media">
                            <a href="" class="tvh-user pull-left">
                                <img class="img-responsive" src="img/profile-pics/profile-pic-2.jpg" alt="">
                            </a>
                            <div class="media-body p-t-5">
                                <strong class="d-block">Malinda Hollaway</strong>
                                <small class="c-gray">March 11, 2014 at 09:00</small>
                            </div>

                            <ul class="actions m-t-20 hidden-xs">
                                <li class="dropdown">
                                    <a href="" data-toggle="dropdown">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="">Edit</a>
                                        </li>
                                        <li>
                                            <a href="">Delete</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tv-body">

                            <div class="lightbox tvb-lightbox clearfix">
                                <div data-src="media/gallery/1.jpg" class="col-sm-2 col-xs-3">
                                    <div class="lightbox-item">
                                        <img src="media/gallery/thumbs/1.jpg" alt="" />
                                    </div>
                                </div>

                                <div data-src="media/gallery/2.jpg" class="col-sm-2 col-xs-3">
                                    <div class="lightbox-item">
                                        <img src="media/gallery/thumbs/2.jpg" alt=""  />
                                    </div>
                                </div>

                                <div data-src="media/gallery/3.jpg" class="col-sm-2 col-xs-3">
                                    <div class="lightbox-item">
                                        <img src="media/gallery/thumbs/3.jpg" alt=""  />
                                    </div>
                                </div>

                                <div data-src="media/gallery/4.jpg" class="col-sm-2 col-xs-3">
                                    <div class="lightbox-item">
                                        <img src="media/gallery/thumbs/4.jpg" alt=""  />
                                    </div>
                                </div>
                            </div>

                            <p>Ut condimentum magna enim, non venenatis elit interdum accumsan. In hac habitasse platea dictumst. Etiam molestie felis non mollis viverra. In ipsum lorem, fermentum vitae lectus in, accumsan malesuada neque.</p>

                            <div class="clearfix"></div>

                            <ul class="tvb-stats">
                                <li class="tvbs-comments">33 Comments</li>
                                <li class="tvbs-likes">983 Likes</li>
                                <li class="tvbs-views">19889 Views</li>
                            </ul>

                            <a class="tvc-more" href=""><i class="zmdi zmdi-mode-comment"></i> View all 89 Comments</a>
                        </div>

                        <div class="tv-comments">
                            <ul class="tvc-lists">
                                <li class="media">
                                    <a href="" class="tvh-user pull-left">
                                        <img class="img-responsive" src="img/profile-pics/6.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <strong class="d-block">Jolla Hatkin</strong>
                                        <small class="c-gray">March 30, 2014 at 05.00</small>

                                        <div class="m-t-10">Donec vel metus nisl. Nam euismod neque et finibus vulputate. Integer in vestibulum orci. Phasellus ut iaculis arcu, vitae commodo justo. Ut eu feugiat lorem, quis ornare risus</div>

                                    </div>
                                </li>

                                <li class="media">
                                    <a href="" class="tvh-user pull-left">
                                        <img class="img-responsive" src="img/profile-pics/5.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <strong class="d-block">Marwell Wecker</strong>
                                        <small class="c-gray">March 31, 2014 at 05.00</small>

                                        <div class="m-t-10">Nulla vehicula erat nec odio dignissim, sit amet porttitor lorem auctor. Maecenas fermentum tellus ex, ac aliquet nisl malesuada id.</div>

                                    </div>
                                </li>
                                <li class="p-20">
                                    <div class="fg-line">
                                        <textarea class="form-control auto-size" placeholder="Write a comment..."></textarea>
                                    </div>

                                    <button class="m-t-15 btn btn-primary btn-sm">Post</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="load-more">
                        <a href=""><i class="zmdi zmdi-refresh-alt"></i> Load More...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>