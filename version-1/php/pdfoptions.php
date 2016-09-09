<form action="print.php">
    <div class="modal fade" tabindex="-1" role="dialog" id="print-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">
                        <?php
                        echo $ext_string["tools.p"];
                        ?>
                    </h4>
                </div>
                <div class="modal-body">
                    <ul>
                        <?php
                        $titles = array(
                            0 => "experience",
                            1 => "education",
                            2 => "courses",
                            3 => "knowledge",
                            4 => "statistics",
                            5 => "interests",
                            6 => "goals",
                            7 => "referees"
                        );
                        $hl = $_SESSION['hl'];
                        foreach ($titles as $ind => $val) {
                            ?>

                            <li>
                                <?php echo $val; ?>
                                <ul>
                                    <li>
                                        Child node 1
                                    </li>
                                    <li>
                                        Child node 2
                                    </li>
                                </ul>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">
                        Generate Pdf
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>