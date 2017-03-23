<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-2.less', 'css/type-2.css');
        ?>
        <link href="css/type-2.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="type-comments">
            <div class="col-md-4 col-sm-6 col-xs-12"></div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="ibox">
                    <!--HEADING-->
                    <div class="ibox-title">
                        <h5>Alpha project</h5>
                        <div class="ibox-tools">
                            <a>
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Config option 1</a>
                                </li>
                                <li>
                                    <a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a>
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <!--/HEADING-->
                    <!--OVERVIEW-->
                    <div class="ibox-content ibox-heading">
                        <h3>You have meeting today!</h3>
                        <small><i class="fa fa-map-marker"></i>
                            Meeting is on 6:00am. Check your schedule to see detail.
                        </small>
                    </div>
                    <!--/OVERVIEW-->
                    <!--LIST COMMENT-->
                    <div class="ibox-content">
                        <!--ITEM COMMENT-->
                        <div class="timeline-item">
                            <div class="row">
                                <!--USER INFO-->
                                <div class="col-md-4 col-sm-12 col-xs-12 date">
                                    <a href="#" class="avatar-user">
                                        <img alt="image" class="img-circle" src="images/profile.jpg">
                                    </a>
                                    <div class="clear" style="clear: both"></div>
                                    <div>
                                        Points: 12345
                                    </div>
                                    <!--LEVEL-->
                                    <small class="text-navy">Senior</small>
                                    <!--/LEVEL-->
                                </div>
                                <!--/USER INFO-->
                                <div class="col-md-8 col-sm-12 col-xs-12 content no-top-border">
                                    <!-- COMMENT BIG -->
                                    <p class="m-b-xs"><strong>Meeting</strong></p>
                                    <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                    <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products. Below please find the current status of the
                                        sale.
                                    </p>
                                    <div class="like-dislike">
                                        <a href="#" class="like">
                                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>80
                                        </a>
                                        <a href="#" class="dislike">
                                            <i class="fa fa-thumbs-down" aria-hidden="true"></i>2
                                        </a>
                                    </div>
                                    <div class="clear" style="clear: both"></div>
                                    <!-- COMMENT SMALL -->
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <strong>Kim Smith</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                            <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                            <p>
                                                <a class="text-info" href="#">@Alan Marry</a> 
                                                I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </p>
                                            <small class="block"><i class="fa fa-clock-o"></i> 1 minuts ago</small>
                                            <div class="like-dislike">
                                                <a href="#" class="like">
                                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>80
                                                </a>
                                                <a href="#" class="dislike">
                                                    <i class="fa fa-thumbs-down" aria-hidden="true"></i>2
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <!--END COMMENT SMALL -->
                                    <!--END COMMENT BIG -->
                                </div>
                            </div>
                        </div>
                        <!--/ITEM COMMENT-->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12"></div>

        </div>
    </body>

</html>