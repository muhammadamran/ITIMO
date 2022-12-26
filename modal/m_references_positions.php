<div class="row">
    <div class="col-sm-3" style="margin-top: 15px;margin-left: 15px;">
        <!-- Add Dept. & Positions -->
        <a href="#modal-Dept-Positions" class="btn btn-sm btn-primary" data-toggle="modal" title="Add Dept. & Positions"><i class="fas fa-plus-circle"></i>
            <font class="f-action">Add Dept. & Positions</font>
        </a>
        <div class="modal fade" id="modal-Dept-Positions">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="references_positions.php" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title">[Add Data] Dept. & Positions</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdBusineesUnit">Business Unit & Functional <font style="color: red;">*</font></label>
                                            <select class="form-control" data-live-search="true" name="NameBusineesUnit" id="IdBusineesUnit" placeholder="Business Unit & Functional ..." required>
                                                <option value="">Choose Business Unit & Functional</option>
                                                <?php
                                                $dataBU = $db->query("SELECT * FROM references_bu ORDER BY id ASC");
                                                foreach ($dataBU as $optionBU) {
                                                ?>
                                                    <option data-tokens="<?= $optionBU['bu_name'] ?>" value="<?= $optionBU['bu_name'] ?>"><?= $optionBU['bu_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdDeptPositionsName">Dept. & Positions Name <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameDeptPositionsName" id="IdDeptPositionsName" placeholder="Dept. & Positions Name ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdDeptPositionsCode">Dept. & Positions Code <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameDeptPositionsCode" id="IdDeptPositionsCode" placeholder="Dept. & Positions Code ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdDeptPositionsDescritption">Dept. & Positions Descritption</label>
                                            <input type="text" class="form-control" name="NameDeptPositionsDescritption" id="IdDeptPositionsDescritption" placeholder="Dept. & Positions Descritption ..." />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <font style="color: red;">*</font> <i>Required.</i>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="modal-footer">
                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                            <button type="submit" name="add_positions" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Dept. & Positions -->
    </div>
</div>