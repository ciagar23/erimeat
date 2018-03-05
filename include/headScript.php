<meta charset="utf-8" />
<title>Teamire - Catalyst in Continuous Improvement</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="Catalyst in Continuous Improvement" name="description" />
<meta content="Coderthemes" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" href="">

<!-- App favicon -->
<link rel="shortcut icon" href="../include/assets/images/favicon.ico">

<!--calendar css-->
   <!-- DataTables -->
<link href="../include/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="../include/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../include/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../include/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../include/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../include/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
<link href="../include/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../include/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="../include/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />

     <!-- Plugins css-->
<link href="../include/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
<link href="../include/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
<link href="../include/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="../include/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

<!-- App css -->
<link href="../include/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../include/assets/css/core.css" rel="stylesheet" type="text/css" />
<link href="../include/assets/css/components.css" rel="stylesheet" type="text/css" />
<link href="../include/assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="../include/assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="../include/assets/css/pages.css" rel="stylesheet" type="text/css" />
<link href="../include/assets/css/metismenu.min.css.css" rel="stylesheet" type="text/css" />
<link href="../include/assets/css/menu.css" rel="stylesheet" type="text/css" />

<link href="../include/assets/css/responsive.css" rel="stylesheet" type="text/css" />
<script src="../include/assets/js/modernizr.min.js"></script>
<style type="text/css">
	.main-text
{
    position: absolute;
    top: 200px;
    width: 96.66666666666666%;
    color: #fff;
}
.main-text h1 {
	  color: #fff;
	   -webkit-text-stroke-width: 1px;
   -webkit-text-stroke-color: black;
}
.btn-min-block
{
    min-width: 170px;
    line-height: 26px;
}
.btn-clear
{
    color: #FFF;
    background-color: transparent;
    border-color: #FFF;
    margin-right: 15px;
}
.btn-clear:hover
{
    color: #000;
    background-color: #FFF;
}
.carousel-fade .carousel-inner .item {
  opacity: 0;
  transition-property: opacity;
}

.carousel-fade .carousel-inner .active {
  opacity: 1;
}

.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}

.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}

.carousel-fade .carousel-control {
  z-index: 2;
}
@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
}
.carousel-caption {
    text-shadow: 0 1px 4px rgba(0,0,0,.9);
  font-size:17px
}
.carousel-caption h3 {
  font-size: 30px;
  font-family: 'Lato', sans-serif;
}
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  left: 0;
  background-color: rgba(255, 255, 255, 0.7);
  top: -200px;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: all 0.1s ease-out 0.5s;
  transition: all 0.1s ease-out 0.5s;
}

.hovereffect:hover .overlay {
  opacity: 1;
   background: linear-gradient(#fff,#4489e4);
  filter: alpha(opacity=100);
  top: 0px;
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}

.hovereffect img {
  display: block;
  position: relative;
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
  -webkit-transform: translateY(-200px);
  -ms-transform: translateY(-200px);
  transform: translateY(-200px);
  -webkit-transition: all ease-in-out 0.1s;
  transition: all ease-in-out 0.1s;
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}

.hovereffect:hover h2 {
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}


#box-design{
	  box-shadow: 5px 10px #888888;
                border-style: solid;
                border-color: #3399cc;

}
.btn-file {
    position: relative;
    overflow: hidden;
    border-radius: 1%;



}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;

    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: center;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;


}
</style>
