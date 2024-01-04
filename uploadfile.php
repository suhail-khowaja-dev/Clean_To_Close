<?php
$user_data = $this->model_signup->find_by_pk($this->userid);
?>
<div class="Main cspss">
    <div class="dashboard  ">

        <div class="main-div contantPart pb5">
            <div class="container">
                <? $this->load->view('account/header_main') ?>
                <form action="<?= g('base_url'); ?>account/upload_images" method="post" enctype="multipart/form-data" id="uploadimage">
                    <div class="chkBoxxii">
                        <input type="hidden" name="uploaddocument[upload_document_reltor_id]" value="<?php echo $arrival_time['arrival_time_reltor_id'] ?>">
                        <input type="hidden" name="uploaddocument[upload_document_cleaning_id]" value="<?php echo $arrival_time['arrival_time_cleaning_id'] ?>">
                        <input type="hidden" name="uploaddocument[upload_document_arrival_time_id]" value="<?php echo $arrival_time['arrival_time_id'] ?>">
                        <input type="hidden" name="uploaddocument[upload_document_left_time_id]" value="<?php echo $left_time['left_time_id'] ?>">
                        <input type="hidden" name="uploaddocument[upload_document_cleaner_id]" value="<?php echo $this->userid ?>">

                        <input hidden name="cleanerid[cleaning_service_id]" value="<?php echo $_GET['id'] ?>">
                        <input hidden name="cleanerid[cleaning_service_upload_user_id]" value="<?php echo $this->userid ?>">
                        <div class="d-flex align-items-center">
                            <label class="cscop ticker">
                                <input type="checkbox" id="arive_time" name="uploaddocument[upload_document_arrive_time]" value="0">
                                <span class="checkmark"></span>
                            </label>
                            <span>I Arrived at <?php echo $arrival_time['arrival_time_datetime'] ?></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <label class="cscop ticker">
                                <input type="checkbox" id="left_time" name="uploaddocument[upload_document_left_time]" value="0">
                                <span class="checkmark"></span>
                            </label>
                            <span>I Left at  <?php echo $left_time['left_time_datetime'] ?></span>
                        </div>
                        <div class="d-flex align-items-baseline">
                            <label class="cscop ticker" style="top: -5px;">
                                <input type="checkbox" id="property_task" name="uploaddocument[upload_document_task]" value="0">
                                <span class="checkmark"></span>
                            </label>
                            <span class="d-flex flex-column align-items-baseline">
                            Property Task List

                                <div class="d-flex forMM">
                                    <div class="uplo d-flex flex-column align-items-baseline">
                                        <label class="sikn mt20">
                                            <div class="d-flex align-items-center">
                                                <span>1.</span>
                                            </div>
                                            <span class="ml10"></span>
                                        </label>
                                        <label class="sikn mt20">
                                            <div class="d-flex align-items-center">
                                                <span>3.</span>
                                            </div>
                                            <span class="ml10"></span>
                                        </label>
                                    </div>
                                    <div class="uplo d-flex flex-column align-items-baseline">
                                        <label class="sikn mt20">
                                            <div class="d-flex align-items-center">
                                                <span>2.</span>
                                            </div>
                                            <span class="ml10"></span>
                                        </label>
                                        <label class="sikn mt20">
                                            <div class="d-flex align-items-center">
                                                <span>4.</span>
                                            </div>
                                            <span class="ml10"></span>
                                        </label>
                                    </div>
                                </div>
                            </span>
                        </div>
                        <div class="d-flex align-items-baseline">
                            <label class="cscop ticker" style="top: -5px;">
                                <input type="checkbox" id="propert_picture" name="uploaddocument[upload_document_property_image_id]" value="">
                                <span class="checkmark"></span>
                            </label>
                            <span class="d-flex flex-column align-items-baseline">
                                Property Pictures

                                <div class="d-flex forMM">
                                    <div class="uplo d-flex flex-column align-items-baseline">
                                        Before:
                                        <label for="before1" class="sikn mt20">
                                            <div class="d-flex align-items-center">
                                                <span>1.</span>
                                                <div class="upload ml10 cp" id="beforepic1">Upload</div>
                                            </div>
                                            <input type="file" id="before1" name="uploaddocument[upload_document_before1_image]" hidden>
                                            <span class="ml10"></span>
                                        </label>
                                        <label for="before2" class="sikn mt20">
                                            <div class="d-flex align-items-center">
                                                <span>2.</span>
                                                <div class="upload ml10 cp" id="beforepic2">Upload</div>
                                            </div>
                                            <input type="file" id="before2" name="uploaddocument[upload_document_before2_image]" hidden>
                                            <span class="ml10"></span>
                                        </label>
                                        <label for="before3" class="sikn mt20">
                                            <div class="d-flex align-items-center">
                                                <span>3.</span>
                                                <div class="upload ml10 cp" id="beforepic3">Upload</div>
                                            </div>
                                            <input type="file" id="before3" name="uploaddocument[upload_document_before3_image]" hidden>
                                            <span class="ml10"></span>
                                        </label>
                                    </div>
                                    <div class="uplo d-flex flex-column align-items-baseline ml30">
                                        After:
                                        <label for="after1" class="sikn mt20">
                                            <div class="d-flex align-items-center">
                                                <span>1.</span>
                                                <div class="upload ml10 cp" id="afterpic1">Upload</div>
                                            </div>
                                            <input type="file" id="after1" name="uploaddocument[upload_document_after1_image]" hidden>
                                            <span class="ml10"></span>
                                        </label>
                                        <label for="after2" class="sikn mt20">
                                            <div class="d-flex align-items-center">
                                                <span>2.</span>
                                                <div class="upload ml10 cp" id="afterpic2">Upload</div>
                                            </div>
                                            <input type="file" id="after2" name="uploaddocument[upload_document_after2_image]" hidden>
                                            <span class="ml10"></span>
                                        </label>
                                        <label for="after3" class="sikn mt20">
                                            <div class="d-flex align-items-center">
                                                <span>3.</span>
                                                <div class="upload ml10 cp" id="afterpic3">Upload</div>
                                            </div>
                                            <input type="file" id="after3" name="uploaddocument[upload_document_after3_image]" hidden>
                                            <span class="ml10"></span>
                                        </label>
                                    </div>
                                </div>
                            </span>

                        </div>
                        <div class="d-flex align-items-center mt50">
                            <label class="cscop ticker">
                                <input type="checkbox" id="signed_picture" name="uploaddocument[upload_document_signedcompl_image_id]" value="">
                                <span class="checkmark"></span>
                            </label>
                            <span>Signed Completion Page</span>
                            <label for="Signed" class="sikn">
                                <div class="upload ml10 cp" id="signed_picture_page">Upload</div>
                                <input type="file" id="Signed" name="uploaddocument[upload_document_signed_image]" hidden>
                                <span class="ml10"></span>
                            </label>
                        </div>

                        <button class="upload mt50" id="btn-Upload">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script>
    $("#btn-Upload").click(function(e) {

        var form = $(this).closest('form');

        setTimeout(function() {
            // Prevent form submitting
            e.preventDefault();
            //var data = $('#form-subscribe').serialize();
            // Get action url
            var url = form.attr('action');
            var data = new FormData(document.getElementById('uploadimage'));
            var response = FileUploadScript.fire(url, data, 'json', true);
            window.location.href = base_url + "account/my_task";
        }, 1000);


        return false;
    });
</script>
<!-- <script>
    $(document).ready(function() {
        var obj;
        $("#upload_data").click(function(e) {
            e.preventDefault();
            Loader.show();
            setTimeout(function() {
                // Prevent form submit
                var obj = $("#uploadpicture");
                // Get form data
                var data = obj.serialize();
                // Get post url
                var url = obj.attr('action');
                // Submit action
                var response = AjaxRequest.fire(url, data);
                if (response.status) {
                    location.reload();
                }
                // Add return
                return false;
            }, 1000);
            return false;
        });
    });
</script> -->





 <!-- <div class="after">
                    <label for="">Kitchen</label>
                </div>
                <div class="whole-house-checks">
                    <label class="cstm-checkbox small-fnt">
                        <label for="check10">1. Countertops</label>
                        <input id=check10 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check11">2. Sinks</label>
                        <input id=check11 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check12">3. Exterior of Cabinets</label>
                        <input id=check12 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check13">4. Exterior of Refrigerators</label>
                        <input id=check13 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check14">5. Exterior of Oven/Range</label>
                        <input id=check14 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check15">6. Exterior of Microwave</label>
                        <input id=check15 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check16">7. Exterior of Dishwasher</label>
                        <input id=check16 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                </div>
                <div class="after">
                    <label for="">Bathrooms</label>
                </div>
                <div class="whole-house-checks">
                    <label class="cstm-checkbox small-fnt">
                        <label for="check17">1. Countertops</label>
                        <input id=check17 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check18">2. Sinks</label>
                        <input id=check18 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check19">3. Exterior of Cabinets</label>
                        <input id=check19 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check20">4. Toilets</label>
                        <input id=check20 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check21">5. Tubs/Showers</label>
                        <input id=check21 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check22">6. Mirrors</label>
                        <input id=check22 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                </div>
                <div class="after">
                    <label for="">Interior Cleaning Of</label>
                </div>

                <div class="whole-house-checks">
                    <label class="cstm-checkbox small-fnt">
                        <label for="check23">1. Kitchen Cabinets</label>
                        <input id=check23 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check24">2. Bathroom Cabinets</label>
                        <input id=check24 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check25">3. Refrigerator</label>
                        <input id=check25 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check26">4. Ovens/Range</label>
                        <input id=check26 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check27">5. Microwave</label>
                        <input id=check27 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check28">6. Dishwasher</label>
                        <input id=check5 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                </div>
                <div class="after">
                    <label for="">Dusting Of</label>
                </div>
                <div class="whole-house-checks">
                    <label class="cstm-checkbox small-fnt">
                        <label for="check29">1. Windowsills</label>
                        <input id=check29 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check30">2. Baseboards</label>
                        <input id=check30 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt extra-span">
                        <label for="check31">3. Fans</label><span class="ex-span">(Exclude fixtures that are out of reach)</span>
                        <input id=check31 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt extra-span">
                        <label for="check31">4. Light Fixtures</label> <span class="ex-span"> (Exclude chandeliers and fixtures that
                            are out of reach)</span>
                        <input id=check31 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check32">5. Blinds</label>
                        <input id=check32 type="checkbox">
                        <span class="checkmark"></span>
                    </label>


                </div>
                <div class="after">
                    <label for="">Wiping Down Of</label>
                </div>
                <div class="whole-house-checks">
                    <label class="cstm-checkbox small-fnt">
                        <label for="check33">1. Door Knobs</label>
                        <input id=check33 type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="cstm-checkbox small-fnt">
                        <label for="check34">2. Light Switches</label>
                        <input id=check34 type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div> -->