<div class="row">
    <div class="col-sm-3" style="margin-top: 15px;margin-left: 15px;">
        <!-- New -->
        <a href="#modal-New" class="btn btn-sm btn-primary" data-toggle="modal" title="Add New"><i class="fas fa-user-circle"></i>
            <font class="f-action">New</font>
        </a>
        <div class="modal fade" id="modal-New">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="onboard_joiner_new.php" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title">[Add Data] New</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdFullName">Full Name <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="FullName" id="IdFullName" placeholder="Full Name ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="IdKNCode">KN Code <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="KNCode" id="IdKNCode" placeholder="KN Code ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="IdJoinDate">Join Date <font style="color: red;">*</font></label>
                                            <input type="date" class="form-control" name="JoinDate" id="IdJoinDate" placeholder="Join Date ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdTitleDesc">Title Description <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="TitleDesc" id="IdTitleDesc" placeholder="Title Description ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="IdDirectReportto">Direct Report to <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="DirectReportto" id="IdDirectReportto" placeholder="Direct Report to ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdEmail">Email <font style="color: red;">*</font></label>
                                            <input type="email" class="form-control" name="Email" id="IdEmail" placeholder="Email ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdUnder">Under <font style="color: red;">*</font></label>
                                            <select type="text" class="form-control" name="Under" id="IdUnder" required>
                                                <option value="">Choose Under</option>
                                                <option value="PT. Kuehne Nagel Indonesia">PT. Kuehne Nagel Indonesia</option>
                                                <option value="Naku Logistics Indonesia">Naku Logistics Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdBranch">Branch <font style="color: red;">*</font></label>
                                            <select type="text" class="form-control" name="Branch" id="IdBranch" required>
                                                <option value="">Choose Branch</option>
                                                <?php
                                                $dataBU = $db->query("SELECT * FROM references_branch ORDER BY id ASC");
                                                foreach ($dataBU as $optionBU) {
                                                ?>
                                                    <option data-tokens="<?= $optionBU['branch_name'] ?>" value="<?= $optionBU['branch_name'] ?>"><?= $optionBU['branch_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdHandoverLocation">Handover Location <font style="color: red;">*</font></label>
                                            <select type="text" class="form-control" name="HandoverLocation" id="IdHandoverLocation" required>
                                                <option value="">Choose Handover Location</option>
                                                <?php
                                                $dataBU = $db->query("SELECT * FROM references_branch ORDER BY id ASC");
                                                foreach ($dataBU as $optionBU) {
                                                ?>
                                                    <option data-tokens="<?= $optionBU['branch_name'] ?>" value="<?= $optionBU['branch_name'] ?>"><?= $optionBU['branch_name'] ?></option>
                                                <?php } ?>
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
                            <button type="submit" name="add_" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End New -->
        <!-- Replacement -->
        <a href="#modal-Replacement" class="btn btn-sm btn-primary" data-toggle="modal" title="Replacement"><i class="far fa-user-circle"></i>
            <font class="f-action">Replacement</font>
        </a>
        <div class="modal fade" id="modal-Replacement">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="onboard_joiner_new.php" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title">[Add Data] New Joiner</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdFullName">Full Name <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="FullName" id="IdFullName" placeholder="Full Name ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdKNCode">KN Code <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="KNCode" id="IdKNCode" placeholder="KN Code ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="IdJoinDate">Join Date <font style="color: red;">*</font></label>
                                            <input type="date" class="form-control" name="JoinDate" id="IdJoinDate" placeholder="Join Date ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="IdTitleDesc">Title Description <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="TitleDesc" id="IdTitleDesc" placeholder="Title Description ..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="IdDirectReportto">Direct Report to <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="DirectReportto" id="IdDirectReportto" placeholder="Direct Report to ..." required />
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
                            <button type="submit" name="add_" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Replacement -->
    </div>
</div>