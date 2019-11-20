<?php

/* @var $this yii\web\View */
/* @var $organCount */
/* @var $roomCount */
/* @var $doctorCount */
/* @var $appointmentCount */
/* @var $dayArray */
/* @var $allArray */
/* @var $confirmArray */

$this->title = Yii::$app->name . '-控制台';

use yii\helpers\Url; ?>
<div class="site-index">

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>111</h3>

                    <p>xx总数</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="javascript:;" class="small-box-footer">更多 <i
                            class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>222</h3>

                    <p>xx总数</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="javascript:;" class="small-box-footer">更多 <i
                            class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>333</h3>

                    <p>xx总数</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="javascript:;" class="small-box-footer">更多 <i
                            class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>444</h3>

                    <p>xx总数</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="javascript:;" class="small-box-footer">更多 <i
                            class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div id="main" style="width: 100%;height:500px;"></div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
<?php \app\widgets\JsBlock::begin() ?>
<script type="text/javascript">
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));

    // 指定图表的配置项和数据
    var option = {
        xAxis: {
            type: 'category',
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        },
        yAxis: {
            type: 'value'
        },
        series: [{
            data: [820, 932, 901, 934, 1290, 1330, 1320],
            type: 'line',
            smooth: true
        }]
    };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
</script>
<?php \app\widgets\JsBlock::end() ?>