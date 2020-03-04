<?php

    /*!
   * POCKET v1.8
   *
   * http://droidoxy.oxywebs.com
   * droid@oxywebs.com, yash@oxywebs.com
   *
   * Copyright 2016 DroidOXY ( http://droidoxy.oxywebs.com/ )
 */

    include_once($_SERVER['DOCUMENT_ROOT']."/muqamicash/core/init.inc.php");

    if (!admin::isSession()) {

        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>InstantlyCash </title>

    <!-- Bootstrap core CSS -->

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/icheck/flat/green.css" rel="stylesheet">

  <link href="js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

  <script src="js/jquery.min.js"></script>
        <style type="text/css">
              
.chatperson:hover{
  text-decoration: none;
  border-bottom: 1px solid orange;
}
.namechat {
    display: inline-block;
    vertical-align: middle;
}
.chatperson .chatimg img{
  width: 40px;
  height: 40px;
  background-image: url('http://i.imgur.com/JqEuJ6t.png');
}
.chatperson .pname{
  font-size: 18px;
  padding-left: 5px;
}
.chatperson .lastmsg{
  font-size: 12px;
  padding-left: 5px;
  color: #ccc;
}


.col-md-2, .col-md-10{
    padding:0;
}
.panel{
    margin-bottom: 0px;
}
.chat-window{
    bottom:0;
    position:fixed;
    float:right;
    margin-left:10px;
}
.chat-window > div > .panel{
    border-radius: 5px 5px 0 0;
}
.icon_minim{
    padding:2px 10px;
}
.msg_container_base{
  background: #e5e5e5;
  margin: 0;
  padding: 0 10px 10px;
  max-height:300px;
  overflow-x:hidden;
}
.top-bar {
  background: #666;
  color: white;
  padding: 10px;
  position: relative;
  overflow: hidden;
}
.msg_receive{
    padding-left:0;
    margin-left:0;
}
.msg_sent{
    padding-bottom:20px !important;
    margin-right:0;
}
.messages {
  background: white;
  padding: 10px;
  border-radius: 2px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  max-width:100%;
}
.messages > p {
    font-size: 13px;
    margin: 0 0 0.2rem 0;
  }
.messages > time {
    font-size: 11px;
    color: #ccc;
}
.msg_container {
    padding: 10px;
    overflow: hidden;
    display: flex;
}
img {
    display: block;
    width: 100%;
}
.avatar {
    position: relative;
}
.base_receive > .avatar:after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 0;
    height: 0;
    border: 5px solid #FFF;
    border-left-color: rgba(0, 0, 0, 0);
    border-bottom-color: rgba(0, 0, 0, 0);
}

.base_sent {
  justify-content: flex-end;
  align-items: flex-end;
}
.base_sent > .avatar:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 0;
    border: 5px solid white;
    border-right-color: transparent;
    border-top-color: transparent;
    box-shadow: 1px 1px 2px rgba(black, 0.2); // not quite perfect but close
}

.msg_sent > time{
    float: right;
}



.msg_container_base::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}
.msg_container_base::-webkit-scrollbar
{
    width: 12px;
    background-color: #F5F5F5;
}
.msg_container_base::-webkit-scrollbar-thumb
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
}
.btn-group.dropup{
    position:fixed;
    left:0px;
    bottom:0;
}
  .ticketno {
    margin-top: -23px;
}
                  </style>

    <!--[if lt IE 9]>
      <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<?php

 include_once 'connect_database.php';

?>
  <body class="nav-md">

    <div class="container body">


      <div class="main_container">

        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

            <div class="navbar nav_title" style="border: 0;">
              <a href="admin.php" class="site_title"><i class="fa fa-gift"></i> <span>InstantlyCash</span></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="../<?php echo $image_url; ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $display_name; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->


            <br />

            <!-- sidebar menu -->
     
		   <?php include('../sidebar.php'); ?>
		  <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $image_url; ?>" alt=""><?php echo $display_name; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">  Profile</a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        <span>Settings</span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">Help</a>
                    </li>
                    <li><a href="/admin/logout.php/?access_token=<?php echo admin::getAccessToken(); ?>&continue=/"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                    Requests
                </h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">


            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>All Requests</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
            
  <!--Table head-->
  <?php
//database connection
include_once '../connect_database.php'; 

  $connect    = new mysqli($host, $user, $pass,$database) or die("Error : ".mysql_error());
      if(isset($_GET['id'])){
        $ID = $_GET['id'];
      }else{
        $ID = "";
      }
$sql = "SELECT id, user_id, ticket_number, issue_selection, subject, message, created_at FROM tickets WHERE id = $ID ORDER BY id DESC";  

$sql_ticket = "SELECT id,message, sender_id,created_at FROM tickets_reply WHERE ticket_id = $ID ORDER BY id DESC";  

?>
  
<!--Table-->
  <!--Table head-->
  <!--Table head-->
<div class="container">
  <div class="row">     
                 <div class="col-sm-12">
                  <div class="chatbody">
                  <div class="panel panel-primary">
                <div class="panel-heading top-bar">
                    <div class="col-md-8 col-xs-8">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat</h3>
                    </div>
                </div>
                <div class="panel-body msg_container_base">
                    <div class="row msg_container base_sent">
                     <?php foreach ($connect->query($sql) as $row) {  ?> 
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_sent">
                                <p><?php echo $row['message']; ?></p>
                                <span class="pull-right ticketno">Ticket No:&nbsp;<?php echo $row['ticket_number']; ?></span>
                                <time><?php echo $row['created_at']; ?></time>
                            </div>
                        </div>
                      <?php } ?>
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                        </div>
                    </div>
                   <?php foreach ($connect->query($sql_ticket) as $key => $value) {
                      if(isset($value)){
                    ?>

                    <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                        </div>
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_receive">
                                <p><?php echo $value['message']; ?></p>
                                <time datetime=""><?php echo $value['created_at']; ?></time>
                            </div>
                        </div>
                    </div>
                  <?php } } ?>
                  
                </div>
                <div class="panel-footer">
                  <form method="post" action="https://api.muqamicash.com/ticket/success/replay_message.php">
                    <div class="input-group">
                      <input type="hidden" name="ticket_id" value="<?php echo $ID; ?>">
                      <input type="hidden" name="sender_id" value="1">
                        <input id="btn-input" type="text" name="message" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                        <span class="input-group-btn">
                           <!--  <input type="submit" value="Proceed to Add"> -->
                        <button type="submit" class="btn btn-primary btn-sm" id="btn-chat"><i class="fa fa-send fa-1x" aria-hidden="true"></i></button>
                        </span>
                    </div>
                  </form>
                </div>
        </div>

<!--Table-->
                </div>
              </div>
            </div>

                </div>
              </div>
            </div>
            <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div >
            <div align="center"> 
           Pocket - Powerd by <a href="http://droidoxy.oxywebs.com" target="_blank" >DroidOxy</a>
</div></div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
                </div>

        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
          <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
          </ul>
          <div class="clearfix"></div>
          <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="js/bootstrap.min.js"></script>

        <!-- bootstrap progress js -->
        <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
        <!-- icheck -->
        <script src="js/icheck/icheck.min.js"></script>

        <script src="js/custom.js"></script>


        <!-- Datatables -->
        <!-- <script src="js/datatables/js/jquery.dataTables.js"></script>
  <script src="js/datatables/tools/js/dataTables.tableTools.js"></script> -->

        <!-- Datatables-->
        <script src="js/datatables/jquery.dataTables.min.js"></script>
        <script src="js/datatables/dataTables.bootstrap.js"></script>
        <script src="js/datatables/dataTables.buttons.min.js"></script>
        <script src="js/datatables/buttons.bootstrap.min.js"></script>
        <script src="js/datatables/jszip.min.js"></script>
        <script src="js/datatables/pdfmake.min.js"></script>
        <script src="js/datatables/vfs_fonts.js"></script>
        <script src="js/datatables/buttons.html5.min.js"></script>
        <script src="js/datatables/buttons.print.min.js"></script>
        <script src="js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="js/datatables/dataTables.keyTable.min.js"></script>
        <script src="js/datatables/dataTables.responsive.min.js"></script>
        <script src="js/datatables/responsive.bootstrap.min.js"></script>
        <script src="js/datatables/dataTables.scroller.min.js"></script>


        <!-- pace -->
        <script src="js/pace/pace.min.js"></script>
        <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>
</body>
</html>
<?php
// 
?>