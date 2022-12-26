<div class="row">
    <div class="col-sm-3" style="margin-top: 15px;margin-left: 15px;">
        <!-- Add Business Unit & Functional -->
        <a href="#modal-Business-Unit" class="btn btn-sm btn-primary" data-toggle="modal" title="Add Business Unit & Functional"><i class="fas fa-plus-circle"></i>
            <font class="f-action">Add Business Unit & Functional</font>
        </a>
        <div class="modal fade" id="modal-Business-Unit">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="references_bu.php" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title">[Add Data] Business Unit & Functional</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdBusinessUnitName">Business Unit & Functional Name <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameBusinessUnitName" id="IdBusinessUnitName" placeholder="Business Unit & Functional Name ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdBusinessUnitCode">Business Unit & Functional Code <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameBusinessUnitCode" id="IdBusinessUnitCode" placeholder="Business Unit & Functional Code ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdBusinessUnitDesc">Business Unit & Functional Desc <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameBusinessUnitDesc" id="IdBusinessUnitDesc" placeholder="Business Unit & Functional Desc ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdUnder">Under <font style="color: red;">*</font></label>
                                            <select type="text" class="form-control" name="NameUnder" id="IdUnder" required>
                                                <option value="">Choose Under</option>
                                                <option value="PT. Kuehne Nagel Indonesia">PT. Kuehne Nagel Indonesia</option>
                                                <option value="Naku Logistics Indonesia">Naku Logistics Indonesia</option>
                                            </select>
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
                            <button type="submit" name="add_bu" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Business Unit & Functional -->
    </div>
</div>