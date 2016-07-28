<div id="meta-compounds" class="modal fade" role="dialog" aria-labelledby="Compounds">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> <span class="ranking-action"><?php _e('Add', 'tainacan'); ?></span> <?php _e('Compounds Metadata', 'tainacan'); ?> </h4>
            </div>
            <div class="modal-body">
                <form id="submit_form_compounds" name="submit_compounds">
                    <div class="form-group">
                        <label for="compounds_name"><?php _e('Name','tainacan'); ?></label>
                        <input type="text" class="form-control" id="compounds_name" name="compounds_name" required="required" value="">
                    </div>
                    <div class="form-group">
                        <label for="socialdb_property_help"><?php _e('Text helper','tainacan'); ?></label>
                        <input type="text" class="form-control" id="socialdb_property_help" name="socialdb_property_help" />
                    </div>
                    <div class="form-group">
                        <label for="socialdb_property_help"><?php _e('Select the metadata below','tainacan'); ?></label>
                        <div style='height: 242px;' id="dynatree_properties_filter"></div>
                        <input type="hidden" name="search_data_orientation" value="left-column">
                    </div>
                    <div class="form-group">
                        <label for="socialdb_event_property_tab"><?php _e('Select the tab','tainacan'); ?></label>
                        <select class="socialdb_event_property_tab form-control" name="socialdb_event_property_tab">
                        </select>
                    </div>
                    <div class="form-group category-fit-column" style="display: inline-block; width: 59%">
                        <label for="property_term_required" style="display: block"><?php _e('Elements Quantity:','tainacan'); ?></label>
                        <input type="radio" 
                               name="socialdb_property_term_cardinality" 
                               id="socialdb_property_term_cardinality_1" 
                               checked="checked"  value="1">&nbsp;<?php _e('Unic value','tainacan') ?>
                        <input type="radio" 
                               name="socialdb_property_term_cardinality" 
                               id="socialdb_property_term_cardinality_n" 
                               value="n">&nbsp;<?php _e('Multiple values','tainacan') ?>
                    </div>
                    <div class="form-group" >
                        <input type="checkbox" 
                               name="property_term_required" 
                               id="property_term_required_true" 
                               value="true">&nbsp;
                        <b><?php _e('Required','tainacan'); ?></b>
                    </div>
                    <input type="hidden" name="search_data_orientation" value="left-column">
                    <input type="hidden" id="ranking_id" name="ranking_id" value="">
                    <input type="hidden" id="operation" name="operation" value="add">
                    <input type="hidden" id="search_collection_id" name="collection_id" value="<?php echo $collection_id; ?>">
                    <input type='hidden' id='counter_range' name="counter_range" value='0'>
                    <input type="hidden" name="property_category_id" id="property_category_id" value="<?php echo $category->term_id; ?>"><br>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left close-modal" data-dismiss="modal"><?php _e('Cancel','tainacan') ?></button>
                <button type="submit" class="btn btn-primary action-continue" form="submit_form_ranking">
                    <?php _e('Continue','tainacan') ?>
                </button>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_remove_ranking" tabindex="-1" role="dialog" aria-labelledby="modal_remove_ranking" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="submit_delete_ranking">
                <input type="hidden" id="ranking_delete_collection_id" name="collection_id" value="">
                <input type="hidden" id="ranking_delete_id" name="ranking_delete_id" value="">
                <input type="hidden" id="operation" name="operation" value="delete_ranking">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span>&nbsp;<?php echo __('Removing ranking', 'tainacan'); ?></h4>
                </div>
                <div class="modal-body">
                    <?php echo __('Confirm the exclusion of ', 'tainacan'); ?>&nbsp;<span id="deleted_ranking_name"></span>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __('Close', 'tainacan'); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo __('Save', 'tainacan'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>