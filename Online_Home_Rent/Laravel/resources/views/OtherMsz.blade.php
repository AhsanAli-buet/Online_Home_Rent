<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap 3 Admin</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href=" {{ asset('/css/bootstrap.min.css') }}" rel="stylesheet"> 
        <link href=" {{ asset('/css/style.css') }}" rel="stylesheet">
	</head>
	<body id="adminbody">
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                @if(Session::get('adminlogin'))

                    <li><a href="#"><i class="glyphicon glyphicon-user"></i> {{ Session::get('adminname')}}</a></li>
                    <li><a href="{{URL::to('/Logout')}}"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>

                @endif
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->
            <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>

            <hr>

            <ul class="nav nav-stacked">
                <li class="nav-header">
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                        <li><a href="{{URL::to('/AdminPanel')}}"><i class="glyphicon glyphicon-comment"></i> Disscussions</a></li>
                        <li><a href="{{URL::to('/ReportedAd')}}"><i class="glyphicon glyphicon-alert"></i> Reported Advertisements</a></li>
                        <li><a href="{{URL::to('/UserList')}}"><i class="glyphicon glyphicon-user"></i> User List</a></li>   
                        <li><a href="{{URL::to('/OtherAdmin')}}"><i class="glyphicon glyphicon-bookmark"></i> Other Admins</a></li>
                        <li><a href="{{URL::to('/OtherMsz')}}"><i class="glyphicon glyphicon-envelope"></i> Other Messages</a></li>
                        <li><a href="{{URL::to('/Logout')}}"<i class="glyphicon glyphicon-off"></i> Logout</a></li>
                    </ul>
                </li>

                
            </ul>

        </div>
        <!-- /col-3 -->
        <div class="col-sm-9" style="padding-right:3%">

            <!-- column 2 -->
            <a href="#"><strong>Other Messages</strong></a>
                    
            <!--/row-->

            <hr>
            
            @for($i=0;$i<count($msz_data);$i++)

            <!---Here should be the codes of Other messages-->
                <div class="row" style="padding:2%;margin-right:10;border: 2px solid rgb(153, 153, 153)">
                    <div class="row">
                        <div class="col-md-4" style="text-left"><label>Name: {{ $msz_data[$i]->name}}</label></div>
                        <div class="col-md-4" style="text-left"><label>Email: {{ $msz_data[$i]->email}}</label></div>
                        <div class="col-md-4" style="text-right"><label>{{ $msz_data[$i]->date}}</label></div>
                    <div>
                    <hr id="foken">
                    <div class="row">
                        <p style="padding-left:3%;padding-right:3%">{{ $msz_data[$i]->msz}}</p>
                    </div>
                    <div style="padding-left:1%">
                        <a class="btn btn-info" href="#"><span class="glyphicon glyphicon-star"> </span>Mark as read</a>
                    </div>   
                </div>

            @endfor



            </div>
        </div>
        <!--/col-span-9-->
    </div>
</div>
<!-- /Main -->

<div class="modal" id="addWidgetModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Widget</h4>
            </div>
            <div class="modal-body">
                <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dalog -->
</div>
<!-- /.modal -->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>