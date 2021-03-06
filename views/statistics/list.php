<?php
include_once(dirname(__FILE__).'/../../helpers/view_helper.php');
include_once(dirname(__FILE__).'/../../helpers/log/log_helper.php');
include_once(dirname(__FILE__).'/../../models/log/log_model.php');
$_log_helper = new LogHelper();

include_once('inc/i18n_strs.php'); 
include_once('js/list_js.php');
?>
<div class="col-md-12 statistics-container no-padding">

    <?php $_log_helper->render_statistic_menu(); ?>

    <div id="statistics-config" class="col-md-3 ui-widget-header no-padding">

        <div class="form-group period-config">
            <label class="title-pipe">
                <span class="prepend-filter-label glyphicon-chevron-down blue glyphicon sec-color" style="color: #79a6ce !important;"></span>
                <?php _t('Period',true); ?>
            </label>
            <div class="date-range-filter">
                <p> <span> <?php _t('From',1) ?> </span>
                    <input size="7" type="text" class="input_date form-control" value="" placeholder="dd/mm/aaaa" id="from_period" name="from_period">
                </p>
                <p> <span> <?php _t('until',1) ?> </span>
                    <input type="text" class="input_date form-control" size="7" value="" placeholder="dd/mm/aaaa" id="to_period" name="to_period"> <br />
                </p>
            </div>
        </div>
        <div class="form-group">
            <label for="object_tags" class="title-pipe">
                <span class="prepend-filter-label glyphicon-chevron-down blue glyphicon sec-color" style="color: #79a6ce !important;"></span>
                <?php _t('Report type',true); ?>
            </label>
            <div id="report_type_stat"></div>
        </div>
    </div>

    <div id="charts-display" class="col-md-9">

        <div class="chart-header btn-group col-md-12">
            
            <?php $_log_helper->render_config_title(_t('Repository statistics')); ?>
            
            <div class="user-config-control col-md-12 no-padding">
                <div class="col-md-4 pull-left no-padding">
                    <span class="config-title"><?php _t('Filters:',1); ?></span>
                    <span class="current-chart"><?php _t('User Stats',1); ?></span>
                </div>

                <div class="col-md-1 pull-right no-padding">
                    <button class="btn btn-default" data-toggle="dropdown" type="button" id="downloadStat">
                        <?php _t('Download: ',true); ?> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu downloadStat" aria-labelledby="downloadStat">
                        <?php $_log_helper->getDownloadTypes(); ?>
                    </ul>
                </div>

                <div class="col-md-4 pull-right no-padding">
                    <span class="config-title"><?php _t('Mode:',1); ?></span>

                    <button data-toggle="dropdown" class="btn btn-default" id="statChartType" type="button">
                        <img src="<?php echo $_log_helper->getChartsType()[0]['img']; ?>" alt="<?php echo $_log_helper->getChartsType()[0]['className']; ?>">
                    </button>

                    <ul class="dropdown-menu statChartType" aria-labelledby="statChartType">
                        <?php $_log_helper->renderChartsDropdown(); ?>
                    </ul>
                </div>
            </div>
        </div>

        <div id="charts-container" class="col-md-12" style="text-align: center">
            <div id="defaultchart_div"></div> <!--Div that will hold the pie chart-->
            <div id="piechart_div" class="hide" style="width: 650px; height: 300px;"></div>
            <div id="barchart_div" class="hide"></div>

            <div id="no_chart_data" class="hide">
                <h3> <?php _t('There is no data yet for this report!', 1); ?> </h3>
            </div>

            <input type="hidden" value="default" class="selected_chart_type" />
            <input type="hidden" class="current_parent_report" value="" />
            <input type="hidden" class="get_collection_stats" value="<?php echo $collec_id; ?>" />
        </div>
        
        <div id="charts-resume" class="col-md-12">
            <table>
                <tbody>
                <tr class="headers"> <th class="curr-parent"> <?php _t('Status',1); ?> </th> </tr>
                <tr class="content"> <td class="curr-filter"> <?php _t('Users:',1); ?> </td> </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-12 no-padding" style="background: #e3e3c7; margin-top: 10px; text-align: center">
            <?php include_once "inc/pdf.php"; ?>
        </div>
    </div>

    <div class="temp-set" style="display: none"></div>

</div>