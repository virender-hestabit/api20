
<?php include('header.php');?><?php include('sidemenu.php');?>
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Roboto);

body {
    background-color: #f2f2f2;
    color: #000;
    font-family: 'Roboto', sans-serif;
}

.column-chart {
  position: relative;
  z-index: 20;
  bottom: 0;
  left: 50%;
  width: 100%;
  height: 320px;
  margin-top: 40px;
  margin-left: -50%;
}

@media (min-width: 568px) {
  .column-chart {
    width: 80%;
    margin-left: -40%;
  }
}

@media (min-width: 768px) {
  .column-chart {
    width: 60%;
    margin-left: -30%;
  }
}

@media (min-width: 992px) {
  .column-chart {
    width: 40%;
    margin-left: -20%;
  }
}

@media (min-width: 1024px) {
  .column-chart {
    width: 36%;
    margin-left: -18%;
  }
}

.column-chart:before,
.column-chart:after {
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  width: calc(100% + 30px);
  height: 25%;
  margin-left: -15px;
  border-top: 1px dashed #b4b4b5;
  border-bottom: 1px dashed #b4b4b5;
}

.column-chart:after {
  top: 50%;
}

.column-chart > .legend {
  position: absolute;
  z-index: -1;
  top: 0;
}

.column-chart > .legend.legend-left {
  left: 0;
  width: 25px;
  height: 75%;
  margin-left: -55px;
  border: 1px solid #b4b4b5;
  border-right: none;
}

.column-chart > .legend.legend-left > .legend-title {
  display: block;
  position: absolute;
  top: 50%;
  left: 0;
  width: 65px;
  height: 50px;
  line-height: 50px;
  margin-top: -25px;
  margin-left: -60px;
  font-size: 28px;
  letter-spacing: 1px;
}

.column-chart > .legend.legend-right {
  right: 0;
  width: 100px;
  height: 100%;
  margin-right: -115px;
}

.column-chart > .legend.legend-right > .item {
  position: relative;
  width: 100%;
  height: 25%;
}

.column-chart > .legend.legend-right > .item > h4 {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  width: 100px;
  height: 40px;
  line-height: 40px;
  margin-top: -20px;
  font-size: 16px;
  text-align: right;
}

.column-chart > .chart {
  position: relative;
  z-index: 20;
  bottom: 0;
  left: 50%;
  width: 98%;
  height: 100%;
  margin-left: -49%;
}

.column-chart > .chart > .item {
  position: relative;
  float: left;
  height: 100%;
}

.column-chart > .chart > .item:before {
  position: absolute;
  z-index: -1;
  content: '';
  bottom: 0;
  left: 50%;
  width: 1px;
  height: calc(100% + 15px);
  border-right: 1px dashed #b4b4b5;
}

.column-chart > .chart > .item > .bar {
  position: absolute;
  bottom: 0;
  left: 3px;
  width: 60%;
  height: 100%;
}

.column-chart > .chart > .item > .bar > span.percent {
  display: block;
  position: absolute;
  z-index: 25;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 26px;
  line-height: 26px;
  color: #fff;
  background-color: #3e50b4;
  font-size: 14px;
  font-weight: 700;
  text-align: center;
  letter-spacing: 1px;
}

.column-chart > .chart > .item > .bar > .item-progress {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 20%;
  color: #fff;
  background-color: #ff4081;
}

.column-chart > .chart > .item > .bar > .item-progress > .title {
  position: absolute;
  top: calc(50% - 13px);
  left: 50%;
  font-size: 14px;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 2px;
  -moz-transform: translateX(-50%) translateY(-50%) rotate(-90deg);
  -webkit-transform: translateX(-50%) translateY(-50%) rotate(-90deg);
  transform: translateX(-50%) translateY(-50%) rotate(-90deg);
}

@media (min-width: 360px) {
  .column-chart > .chart > .item > .bar > .item-progress > .title {
    font-size: 16px;
  }
}

@media (min-width: 480px) {
  .column-chart > .chart > .item > .bar > .item-progress > .title {
    font-size: 18px;
  }
}    
</style>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">Project Activity</h1>
        </div>
        
        <div class="container-fluid">
          <div class="row">
          <a href="<?php echo base_url('Task_Planner/create_task'); ?>" class="btn btn-primary" style="font-size: 12px;margin: 10px 10px 10px 50px;">Add New Task  </a>
          </div>
            <div class="row-fluid">

	<div class="row-fluid">
	</div>
<div class="row-fluid">&nbsp;</div>
<div class="well">


  <?php if(isset($msg))
  { ?>
  <h4 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h4>
  <?php } ?>
  
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center text-uppercase">
                <h2>Project Activity</h2>
            </div>
            <!-- //.text-center -->
            
            <div class="column-chart">
               
            
                <div class="legend legend-right hidden-xs">
                    <div class="item">
                        <h4>100%</h4>
                    </div>
                    <!-- //.item -->
            
                    <div class="item">
                        <h4>75%</h4>
                    </div>
                    <!-- //.item -->
            
                    <div class="item">
                        <h4>50%</h4>
                    </div>
                    <!-- //.item -->
            
                    <div class="item">
                        <h4>25%</h4>
                    </div>
                    <!-- //.item -->
                </div>
                <!-- //.legend -->
        
                <div class="chart clearfix">
                    

                    <div class="item">
                        <div class="bar">
                            <span class="percent">100%</span>
            
                            <div class="item-progress" data-percent="100">
                                <span class="title">Creativity</span>
                            </div>
                            <!-- //.item-progress -->
                        </div>
                        <!-- //.bar -->
                    </div>
                    <!-- //.item -->
            
                    <div class="item">
                        <div class="bar">
                            <span class="percent">71%</span>
            
                            <div class="item-progress" data-percent="71">
                                <span class="title">Reliable</span>
                            </div>
                            <!-- //.item-progress -->
                        </div>
                        <!-- //.bar -->
                    </div>
                    <!-- //.item -->
            
                    <div class="item">
                        <div class="bar">
                            <span class="percent">82%</span>
            
                            <div class="item-progress" data-percent="82">
                                <span class="title">Comunication</span>
                            </div>
                            <!-- //.item-progress -->
                        </div>
                        <!-- //.bar -->
                    </div>
                    <!-- //.item -->
            
                    <div class="item">
                        <div class="bar">
                            <span class="percent">58%</span>
            
                            <div class="item-progress" data-percent="58">
                                <span class="title">Leadership</span>
                            </div>
                            <!-- //.item-progress -->
                        </div>
                        <!-- //.bar -->
                    </div>
                    <!-- //.item -->
            
                    <div class="item">
                        <div class="bar">
                            <span class="percent">67%</span>
            
                            <div class="item-progress" data-percent="67">
                                <span class="title">Persuasion</span>
                            </div>
                            <!-- //.item-progress -->
                        </div>
                        <!-- //.bar -->
                    </div>
                    <!-- //.item -->

                </div>
                <!-- //.chart -->
            </div>
            <!-- //.column-chart -->
        </div>
        <!-- //.col-md-6 -->
    </div>
    <!-- //.row -->
</div>
<!-- //.container -->  

  </div>


                    
            </div>
        </div>
    </div>
    
<?php require('footer.php'); ?>

    <script src="<?php echo base_url('application/assests/lib/bootstrap/js/bootstrap.js');?>"></script>
    <script type="text/javascript">

$(document).ready(function(){
columnChart();

function columnChart(){
var item = $('.chart', '.column-chart').find('.item'),
itemWidth = 100 / item.length;
item.css('width', itemWidth + '%');

$('.column-chart').find('.item-progress').each(function(){
    var itemProgress = $(this),
    itemProgressHeight = $(this).parent().height() * ($(this).data('percent') / 100);
    itemProgress.css('height', itemProgressHeight);
});
};
});
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>