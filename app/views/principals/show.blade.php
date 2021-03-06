@extends('master')

@section('content')


<!-- Main -->
<div class="container">
<div class="row">
<div class="col-md-3">
    <!-- Left column -->
 <br/><br/>

    <ul class="nav nav-pills nav-stacked">
        <li class="nav-header"></li>
        <li><a href="#"><i class="fa fa-list"></i> Layouts &amp; Templates</a></li>
        <li><a href="{{ URL::route('departments.index') }}"><i class="fa fa-briefcase"></i> View Departments</a></li>
        <li><a href="{{ URL::route('hods.index') }}"><i class="fa fa-link"></i> View HOD's</a></li>
        <li><a href="#"><i class="fa fa-list-alt"></i> Reports</a></li>
        <li><a href="#"><i class="fa fa-book"></i> Pages</a></li>
        <li><a href="#"><i class="fa fa-star"></i> Social Media</a></li>
    </ul>

    <hr>
    <ul class="nav nav-stacked">
        <li class="active"><a href="http://bootply.com" title="The Bootstrap Playground" target="ext">Playground</a></li>
        <li><a href="/tagged/bootstrap-3">Bootstrap 3</a></li>
        <li><a href="/61518" title="Bootstrap 3 Panel">Panels</a></li>
        <li><a href="/61521" title="Bootstrap 3 Icons">Glyphicons</a></li>
        <li><a href="/61523" title="Bootstrap 3 ListGroup">List Groups</a></li>
        <li><a href="#">GitHub</a></li>
        <li><a href="/61518" title="Bootstrap 3 Slider">Carousel</a></li>
        <li><a href="/62603">Layout</a></li>
    </ul>

    <hr>
</div><!-- /col-3 -->
<div class="col-md-9">

<!-- column 2 -->
<ul class="list-inline pull-right">
    <li><a href="#"><i class="fa fa-cog"></i></a></li>
    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-comment"></i><span class="count">3</span></a><ul class="dropdown-menu" role="menu"><li><a href="#">1. Is there a way..</a></li><li><a href="#">2. Hello, admin. I would..</a></li><li><a href="#"><strong>All messages</strong></a></li></ul></li>
    <li><a href="#"><i class="fa fa-user"></i>Welcome {{ Auth::user()->name}}</a></li>
    <li><a  href="{{ URL::to('logout') }}"><span class="fa fa-sign-out"></span>Logout</a></li>
</ul>
<a href="#"><strong><i class="fa fa-dashboard"></i> My Dashboard</strong></a>

<hr>

<div class="row">



    <!-- center left-->
    <div class="col-md-6">
        <ul class="nav nav-pills">
            <li><a href="{{ URL::route('departments.create') }} ">Add Department</a></li>
            <li><a href="{{ URL::route('hods.create') }} ">Add Hod</a></li>

        </ul>
        <div class="well">Inbox Messages <span class="badge pull-right">3</span></div>

        <hr>

        <div class="btn-group btn-group-justified">
            <a href="#" class="btn btn-primary col-sm-3">
                <i class="fa fa-plus"></i><br>
                Service
            </a>
            <a href="#" class="btn btn-primary col-sm-3">
                <i class="fa fa-cloud"></i><br>
                Cloud
            </a>
            <a href="#" class="btn btn-primary col-sm-3">
                <i class="fa fa-cog"></i><br>
                Tools
            </a>
            <a href="#" class="btn btn-primary col-sm-3">
                <i class="fa fa-question-sign"></i><br>
                Help
            </a>
        </div>

        <hr>

        <div class="panel panel-default">
            <div class="panel-heading"><h4>Reports</h4></div>
            <div class="panel-body">

                <small>Success</small>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                        <span class="sr-only">72% Complete</span>
                    </div>
                </div>
                <small>Info</small>
                <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                    </div>
                </div>
                <small>Warning</small>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">60% Complete (warning)</span>
                    </div>
                </div>
                <small>Danger</small>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80% Complete</span>
                    </div>
                </div>

            </div><!--/panel-body-->
        </div><!--/panel-->

        <hr>

        <!--tabs-->
        <div class="container">
            <div class="col-md-4">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                    <li><a href="#messages" data-toggle="tab">Messages</a></li>
                    <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                        <h4><i class="fa fa-user"></i></h4>
                        Lorem profile dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                            dolor, in sagittis nisi.</p>
                    </div>
                    <div class="tab-pane" id="messages">
                        <h4><i class="fa fa-comment"></i></h4>
                        Message ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        <p>Quisque mauris augu.</p>
                    </div>
                    <div class="tab-pane" id="settings">
                        <h4><i class="fa fa-cog"></i></h4>
                        Lorem settings dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        <p>Quisque mauris augue, molestie.</p>
                    </div>
                </div>
            </div>
        </div>

        <!--/tabs-->

        <hr>

        <div class="panel panel-default">
            <div class="panel-heading"><h4>New Requests</h4></div>
            <div class="panel-body">
                <div class="list-group">
                    <a href="#" class="list-group-item active">Hosting virtual mailbox serv..</a>
                    <a href="#" class="list-group-item">Dedicated server doesn't..</a>
                    <a href="#" class="list-group-item">RHEL 6 install on new..</a>
                </div>
            </div>
        </div>

    </div><!--/col-->
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Notices</h4></div>
            <div class="panel-body">

                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a dismissable alert.. just sayin'.
                </div>

                This is a dashboard-style layout that uses Bootstrap 3. You can use this template as a starting point to create something more unique.
                <br><br>
                Visit the Bootstrap Playground at <a href="http://bootply.com">Bootply</a> to tweak this layout or discover more useful code snippets.
            </div>
        </div>

        <table class="table table-striped">
            <thead>
            <tr><th>Visits</th><th>ROI</th><th>Source</th></tr>
            </thead>
            <tbody>
            <tr><td>45</td><td>2.45%</td><td>Direct</td></tr>
            <tr><td>289</td><td>56.2%</td><td>Referral</td></tr>
            <tr><td>98</td><td>25%</td><td>Type</td></tr>
            <tr><td>..</td><td>..</td><td>..</td></tr>
            <tr><td>..</td><td>..</td><td>..</td></tr>
            </tbody>
        </table>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">
                    <i class="fa fa-wrench pull-right"></i>
                    <h4>Post Request</h4>
                </div>
            </div>
            <div class="panel-body">

                <form class="form form-vertical">

                    <div class="control-group">
                        <label>Name</label>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Enter Name">
                        </div>
                    </div>

                    <div class="control-group">
                        <label>Message</label>
                        <div class="controls">
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label>Category</label>
                        <div class="controls">
                            <select class="form-control"><option>options</option></select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-primary">
                                Post
                            </button>
                        </div>
                    </div>

                </form>


            </div><!--/panel content-->
        </div><!--/panel-->
        <div class="panel panel-default">
            <div class="panel-heading"><div class="panel-title"><h4>Engagement</h4></div></div>
            <div class="panel-body">
                <div class="col-xs-4 text-center"><img src="http://placehold.it/80/BBBBBB/FFF" class="img-circle img-responsive"></div>
                <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EFEFEF/555" class="img-circle img-responsive"></div>
                <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EEEEEE/222" class="img-circle img-responsive"></div>
            </div>
        </div><!--/panel-->

    </div><!--/col-span-6-->

</div><!--/row-->

<hr>

<a href="#"><strong><i class="fa fa-comment"></i> Discussions</strong></a>

<hr>

<div class="row">
    <div class="col-md-12">
        <ul class="list-group">
            <li class="list-group-item"><a href="#"><i class="fa fa-flash"></i> <small>(3 mins ago)</small> The 3rd page reports don't contain any links. Does anyone know why..</a></li>
            <li class="list-group-item"><a href="#"><i class="fa fa-flash"></i> <small>(1 hour ago)</small> Hi all, I've just post a report that show the relationship betwe..</a></li>
            <li class="list-group-item"><a href="#"><i class="fa fa-heart"></i> <small>(2 hrs ago)</small> Paul. That document you posted yesterday doesn't seem to contain the over..</a></li>
            <li class="list-group-item"><a href="#"><i class="fa fa-heart-empty"></i> <small>(4 hrs ago)</small> The map service on c243 is down today. I will be fixing the..</a></li>
            <li class="list-group-item"><a href="#"><i class="fa fa-heart"></i> <small>(yesterday)</small> I posted a new document that shows how to install the services layer..</a></li>
            <li class="list-group-item"><a href="#"><i class="fa fa-flash"></i> <small>(yesterday)</small> ..</a></li>
        </ul>
    </div>
</div>
</div><!--/col-span-9-->
</div>
</div>
<!-- /Main -->




@stop