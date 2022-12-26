<div class="row">
    <div class="col-sm-3" style="margin-top: 15px;margin-left: 15px;">
        <!-- Add Functional -->
        <a href="#modal-Functional" class="btn btn-sm btn-primary" data-toggle="modal" title="Add Functional"><i class="fas fa-plus-circle"></i>
            <font class="f-action">Add Functional</font>
        </a>
        <div class="modal fade" id="modal-Functional">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="references_functional.php" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title">[Add Data] Functional</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdFunctionalCode">Functional Code <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameFunctionalCode" id="IdFunctionalCode" placeholder="Functional Code ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="IdFunctionalName">Functional Name <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameFunctionalName" id="IdFunctionalName" placeholder="Functional Name ..." required />
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="IdName">Name <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="Name" id="IdName" placeholder="Name ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
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
                            <a href="javascript:;" class="btn btn-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</a>
                            <button type="submit" name="add_functional" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Users -->
    </div>
</div>