<div class="row">
    <div class="col-sm-3" style="margin-top: 15px;margin-left: 15px;">
        <!-- Add Business Unit -->
        <a href="#modal-Business-Unit" class="btn btn-sm btn-primary" data-toggle="modal" title="Add Business Unit"><i class="fas fa-plus-circle"></i>
            <font class="f-action">Add Business Unit</font>
        </a>
        <div class="modal fade" id="modal-Business-Unit">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="references_bu.php" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title">[Add Data] Business Unit</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdBusinessUnitName">Business Unit Name <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameBusinessUnitName" id="IdBusinessUnitName" placeholder="Business Unit Name ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdBusinessUnitDesc">Business Unit Desc <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameBusinessUnitDesc" id="IdBusinessUnitDesc" placeholder="Business Unit Desc ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdUnder">Under <font style="color: red;">*</font></label>
                                            <select type="text" class="form-control" name="NameUnder" id="IdUnder" required>
                                                <option value="">Choose Under</option>
                                                <option value="PT. Kuehne Nagel Indonesia">PT. Kuehne Nagel Indonesia</option>
                                                <option value="Naku Logistics Indonesia">Naku Logistics Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdName">Name <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="Name" id="IdName" placeholder="Name ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdKNCode">KN Code <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameKNCode" id="IdNameKNCode" placeholder="KN Code ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdEmail">Email <font style="color: red;">*</font></label>
                                            <input type="email" class="form-control" name="Email" id="IdEmail" placeholder="Email ..." required />
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
                            <button type="submit" name="add_bu" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Users -->
    </div>
</div>