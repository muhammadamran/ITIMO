<div class="row">
    <div class="col-sm-3" style="margin-top: 15px;margin-left: 15px;">
        <!-- Add Department -->
        <a href="#modal-Department" class="btn btn-sm btn-primary" data-toggle="modal" title="Add Department"><i class="fas fa-plus-circle"></i>
            <font class="f-action">Add Department</font>
        </a>
        <div class="modal fade" id="modal-Department">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="references_department.php" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title">[Add Data] Department</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdDepartment">Department <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameDepartment" id="IdDepartment" placeholder="Department ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdDepartmentDescritption">Department Descritption <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameDepartmentDescritption" id="IdDepartmentDescritption" placeholder="Department Descritption ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdGeneralManager">General Manager <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="NameGeneralManager" id="IdGeneralManager" placeholder="General Manager ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdPT">PT <font style="color: red;">*</font></label>
                                            <select type="text" class="form-control" name="NamePT" id="IdPT" required>
                                                <option value="">Choose PT</option>
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
                            <button type="submit" name="add_department" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Users -->
    </div>
</div>