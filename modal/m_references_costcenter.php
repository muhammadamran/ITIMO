<div class="row">
    <div class="col-sm-3" style="margin-top: 15px;margin-left: 15px;">
        <!-- Add Cost Center -->
        <a href="#modal-Cost-Center" class="btn btn-sm btn-primary" data-toggle="modal" title="Add Cost Center"><i class="fas fa-plus-circle"></i>
            <font class="f-action">Add Cost Center</font>
        </a>
        <div class="modal fade" id="modal-Cost-Center">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="references_costcenter.php" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title">[Add Data] Cost Center</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="IdCostCenter">Cost Center <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="CostCenter" id="IdCostCenter" placeholder="Cost Center ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="IdRemarks">Remarks <font style="color: red;">*</font></label>
                                            <textarea type="text" class="form-control" name="Remarks" id="IdRemarks" placeholder="Remarks ..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <font style="color: red;">*</font> <i>Required.</i>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="modal-footer">
                            <a href="javascript:;" class="btn btn-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                            <button type="submit" name="add_costcenter" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Cost Center -->
    </div>
</div>