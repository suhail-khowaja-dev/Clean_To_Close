<style>
    html,
    body {
        scroll-behavior: smooth;
    }

    body {
        background: whitesmoke;
    }

    h1 {
        padding-top: 7rem;
        font-family: gilroybold;
        color: #495653;
        font-size: 44px;
        text-transform: capitalize;
    }

    .cstm-checkbox {
        display: block;
        position: relative;
        padding-left: 35px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        font-family: 'gilroymedium';
        margin: 0;
    }

    .cstm-checkbox label {
        margin: 0;
    }
    button.canc{
        position: relative;
        bottom: 3.7rem;
    }
    .cstm-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .checkmark {
        position: absolute;
        top: 5px;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border: 3px solid #b3c3c0;
        border-radius: 5px;
    }

    .asd button {
        width: 100%;
        background-color: transparent;
        border: transparent;
        font-family: 'gilroymedium';
        margin-left: 5px;
    }

    .select-all .checkmark {
        right: 0;
        left: unset;
    }

    .cstm-checkbox:hover input~.checkmark {}

    .cstm-checkbox input:checked~.checkmark {}

    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .cstm-checkbox input:checked~.checkmark:after {
        display: block;
        background-image: url("../assets/front_assets/images/tick.svg");
        /*background: url(../assets/front_assets/images/tick.svg);*/
        background-repeat: no-repeat;
    }

    .cstm-checkbox .checkmark:after {
        left: -1px;
        top: -7px;
        width: 34px;
        height: 27px;

    }

    .cstm-container {
        max-width: 1440px;
        padding: 0 2rem;
        margin: 0 auto;
    }

    .small-fnt label {
        font-size: 18px;
        font-family: 'gilroybold';
        color: #666666;
    }

    .checkbox label,
    .before label,
    .after label {
        margin-left: 10px;
        color: #000;
        font-weight: 700;
    }

    .arrived,
    .property-pics,
    .completion-pg,
    .property-task {
        background: #fff;
        padding: 1rem 2rem;
        box-shadow: 0px 0px 10px -5px rgb(0 0 0 / 90%);
        -webkit-box-shadow: 0px 0px 10px -5px rgb(0 0 0 / 90%);
        -moz-box-shadow: 0px 0px 10px -5px rgb(0 0 0 / 90%);
        border-radius: 10px;
        margin: 30px 0;
    }

    .f20 {
        font-size: 20px;
    }

    .arrived-at,
    .left-at {
        background-color: #F2F2F2;
        margin: 10px 0;
        border-radius: 5px;
        padding: 1rem;
    }

    .property-picture label,
    .signed-completion label,
    .property-task-list label {
        font-size: 20px;
    }

    .before label,
    .after label {
        margin-top: 2rem;
        margin-left: 0;
        font-family: 'gilroybold';
    }

    .upload-de {
        margin: 15px 0 !important;
        display: flex;
        align-items: center;
    }

    .upload-de label:nth-child(1) {
        color: #666666 !important;
        font-weight: 700 !;
        margin-bottom: 0 !important;
    }

    .upload-btn {
        padding: 0.5rem 1.2rem !important;
        background: #b3c3c0 !important;
        border-radius: 5px !important;
        margin-left: 15px !important;
        font-family: 'gilroybold';
        margin-bottom: 0;
    }

    .completion-pg .upload-de label {
        font-weight: 600;
        color: #000 !important;
        margin-left: 33px !important;
    }

    .select-all .checkbox {
        flex-direction: row-reverse;
    }

    .select-all .checkbox label {
        margin: 0;
    }

    .select-all .select {
        font-weight: 500;
        margin-left: 0;
        color: #666666;
        margin-right: 40px !important;
        font-size: 15px;
    }

    .property-task-list {
        margin-bottom: 1rem;
    }

    .property-task .whole-house-checks .checkbox {
        margin: 10px 0;
    }

    .property-task .whole-house-checks .checkbox label {
        margin-left: 0;
        color: #666666;
    }

    .extra-span {
        font-size: 13px;
        color: #666666;
    }

    .ex-span {
        width: 100px;
    }

    .extra-span span {
        margin-left: 10px;
    }

    .buttons button {
        margin: 1rem 0 1rem 0.5rem;
    }

    .show-name {
        white-space: nowrap;
        width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        margin: 0;
    }

    .small-fnt {
        padding-left: 0;
        margin: 10px 0;
    }

    .small-fnt label {
        font-size: 16px;
    }

    .small-fnt .checkmark {
        right: 0;
        left: unset;
    }

    .sbmt,
    .canc {
        font-family: 'gilroybold';
        background: #b3c3c0;
        padding: 10px 13px;
        border-radius: 10px;
        border: none;
        color: #000;
    }

    .canc {
        background: #d2d2d2;
    }

    .show-name {
        margin-left: 0 !important;
        color: #212529;
        font-weight: 100;
    }

    :host(img) {
        height: 100%;
        width: 100%;
        object-fit: contain;
    }

    #transmod .modal-dialog {
        height: 90vh;
    }

    .cancel_button {
        position: relative;
        bottom: 3.5rem;
    }
</style>

<div class="cstm-container">

    <h1 class="text-center">Upload/Submission Page</h1>
    <form action="<?= g('base_url'); ?>account/upload_images" method="post" enctype="multipart/form-data" id="uploadimage">
        <div class="row">
            <input type="hidden" name="uploaddocument[upload_document_reltor_id]" value="<?php echo $arrival_time['arrival_time_reltor_id'] ?>">
            <input type="hidden" name="uploaddocument[upload_document_cleaning_id]" value="<?php echo $arrival_time['arrival_time_cleaning_id'] ?>">
            <input type="hidden" name="uploaddocument[upload_document_arrival_time_id]" value="<?php echo $arrival_time['arrival_time_id'] ?>">
            <input type="hidden" name="uploaddocument[upload_document_left_time_id]" value="<?php echo $left_time['left_time_id'] ?>">
            <input type="hidden" name="uploaddocument[upload_document_cleaner_id]" value="<?php echo $this->userid ?>">
            <input hidden name="cleanerid[cleaning_service_id]" value="<?php echo $_GET['id'] ?>">
            <input hidden name="cleanerid[cleaning_service_upload_user_id]" value="<?php echo $this->userid ?>">

            <div class="col-lg-6">
                <div class="arrived">
                    <div class="arrived-at">
                        <label class="cstm-checkbox">
                            <label for="check1" class="f20"> I Arrived at : <?php echo $arrival_time['arrival_time_datetime'] ?></label>
                            <input type="checkbox"  name="uploaddocument[upload_document_arrive_time]" value="" <?php if ($arrival_time['arrival_time_datetime'] != '') { ?> <?php echo 'checked' ?> <?php } ?> >
                            <input type="hidden" name="" value="<?php echo $arrival_time['arrival_time_datetime'] ?>" id="hiddetime">
                            <span class="checkmark"></span>
                        </label>

                    </div>

                    <div class="left-at">
                        <label class="cstm-checkbox">
                            <label for="check2" class="f20"> I Left at : <?php echo $left_time['left_time_datetime'] ?></label>
                            <input type="checkbox"   name="uploaddocument[upload_document_left_time]" value="" <?php if ($left_time['left_time_datetime'] != '') { ?> <?php echo 'checked' ?> <?php } ?>>
                            
                            <input type="hidden" name="" value="<?php echo $left_time['left_time_datetime'] ?>" id="hiddentimeleft">

                            <span class="checkmark"></span>
                        </label>

                    </div>
                </div>
                <div class="property-pics">
                    <div class="property-picture">
                        <label class="cstm-checkbox">
                            <label for="check3"> Property Pictures</label>
                            <input type="checkbox" id="propert_picture" name="uploaddocument[upload_document_property_image_id]" value="">
                            <span class="checkmark"></span>
                        </label>

                    </div>
                    <div class="before">
                        <label for="">Before</label>
                    </div>
                    <div class="upload-de">
                        <label for="">1.</label>
                        <label for="upload1" class="upload-btn uploadBtn uploadAble Transcript">
                            Upload
                        </label>
                        <div class="asd"></div>
                        <input type="file" class="upload-s TranscriptInp upload1" id="upload1" name="uploaddocument[upload_document_before1_image]" hidden>
                        <label for="" class="show-name"></label>
                    </div>
                    <div class="upload-de">
                        <label for="">2.</label>
                        <label for="upload2" class="upload-btn">
                            Upload
                        </label>
                        <div class="asd"></div>
                        <input type="file" class="upload-s TranscriptInp upload1" id="upload2" name="uploaddocument[upload_document_before2_image]" hidden>
                        <label for="" class="show-name"></label>
                    </div>
                    <div class="upload-de">
                        <label for="">3.</label>
                        <label for="upload3" class="upload-btn">
                            Upload
                        </label>
                        <div class="asd"></div>
                        <input type="file" class="upload-s TranscriptInp upload1" id="upload3" name="uploaddocument[upload_document_before3_image]" hidden>
                        <label for="" class="show-name"></label>
                    </div>
                    <div class="after">
                        <label for="">After</label>
                    </div>
                    <div class="upload-de">
                        <label for="">1.</label>
                        <label for="upload5" class="upload-btn">
                            Upload
                        </label>
                        <div class="asd"></div>
                        <input type="file" class="upload-s TranscriptInp upload1" id="upload5" name="uploaddocument[upload_document_after1_image]" hidden>
                        <label for="" class="show-name"></label>
                    </div>
                    <div class="upload-de">
                        <label for="">2.</label>
                        <label for="upload6" class="upload-btn">
                            Upload
                        </label>
                        <div class="asd"></div>
                        <input type="file" class="upload-s TranscriptInp upload1" id="upload6" name="uploaddocument[upload_document_after2_image]" hidden>
                        <label for="" class="show-name"></label>
                    </div>
                    <div class="upload-de">
                        <label for="">3.</label>
                        <label for="upload7" class="upload-btn">
                            Upload
                        </label>
                        <div class="asd"></div>
                        <input type="file" class="upload-s TranscriptInp upload1" id="upload7" name="uploaddocument[upload_document_after3_image]" hidden>
                        <label for="" class="show-name"></label>
                    </div>
                </div>
                <div class="completion-pg">
                    <div class="signed-completion">
                        <label class="cstm-checkbox">
                            <label for="check4"> Signed Completion Page</label>
                            <input type="checkbox" id="signed_picture" name="uploaddocument[upload_document_signedcompl_image_id]" value="">
                            <span class="checkmark"></span>
                        </label>

                    </div>
                    <div class="upload-de d-flex ">
                        <label for="upload9" class="upload-btn">
                            Upload
                        </label>
                        <input type="file" id="upload9" class="upload-label " name="uploaddocument[upload_document_signed_image]" hidden>
                        <label for="" class="show-name" style="margin-left: 1px !important; font-weight:100 !important;"></label>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="property-task">
                    <div class="property-task-list">
                        <label class="cstm-checkbox">
                            <label for="check5">Property Task List</label>
                            <input type="checkbox" id="property_task" name="uploaddocument[upload_document_task]" value="">
                            <span class="checkmark"></span>
                        </label>

                    </div>
                    <div class="d-flex justify-content-end select-all">
                        <label class="cstm-checkbox">
                            <label for="checkAll" class="select">Select All</label>
                            <input id="checkAll" type="checkbox">
                            <span class="checkmark"></span>
                        </label>

                    </div>
                    <?php foreach ($package_1 as $value) { ?>
                        <?php
                        $para12['where']['package_service_type_id'] = $value['type_clean_package_id'];
                        $package_service_1 = $this->model_package_service->find_all_active($para12);
                        ?>
                        <div class="after">
                            <label for=""><?php echo  $value['type_clean_package_type'] ?></label>
                        </div>
                        <?php foreach ($package_service_1 as $key => $value_package_service) { ?>
                            <div class="whole-house-checks">
                                <label class="cstm-checkbox small-fnt">
                                    <label for="<?php echo  $key ?>"> <?php echo  $value_package_service['package_service_name'] ?></label>
                                    <input id="<?php echo  $key ?>" type="checkbox" class="checkItem" name="uploaddocument[<?php echo str_replace(' ', '_', $value['type_clean_package_type']) ?>][]" value="<?php echo $value_package_service['package_service_id']?>">
                                    <input id="<?php echo  $key ?>" type="hidden" name="uploaddocument[upload_document_package_id]" value="<?php echo $value_package_service['package_service_package_id']?>">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        <?php
                        }
                        ?>

                    <?php
                    }
                    ?>

                </div>
            </div>
            <div class="col-lg-12 d-flex justify-content-end buttons">
                <button class="sbmt" id="btn-Upload">Submit</button>
            </div>
        </div>
    </form>
    <div class="col-lg-12 cancel_btn">
         <a href="<?= g('base_url') ?>account/view_detail?id=<?php echo $_GET['id'] ?>"><button class="canc">Cancel</button></a>
<!--        <button class="sbmt" id="btn-Upload">Submit</button>-->
    </div>
</div>
<!--transcript modal-->

<!-- Modal -->
<div class="modal fade" id="transmod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content h-100">
            <div class="modal-body h-100">
                <!-- <i class="fa fa-times" data-bs-dismiss="modal" aria-label="Close"></i> -->
                <embed class="embededpdf" src="" width="100%" height="100%">
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script>
    $('.upload-s').change(function(event) {
        var showVal = event.target.parentNode.children[3];
        $(showVal).text(event.target.files[0].name)

    });
    $('.upload-label').change(function(event) {
        var showVal = event.target.parentNode.children[2];
        $(showVal).text(event.target.files[0].name)

    });
    
    $(document).ready(function(){
            $('#checkAll').click(function () {    
    $(':checkbox.checkItem').prop('checked', this.checked);    
 });
        // $('#check6').change(function() {
        //     // alert('yes');
        //     console.log(this)
        //     if (this.checked) {
        //         $('.whole-house-checks').each((i, e) => {
                      
        //             if (!$(e).find('input').is(':checked')) {
        //                 // alert('yes');
        //                 $(e).find('.cstm-checkbox').trigger('click')
        //             }
        //         })
        //     } else if (!this.checked) {
        //         //  alert('no');
        //         $('.whole-house-checks').each((i, e) => {
        //             if ($(e).find('input').is(':checked')) {
        //                 $(e).find('.cstm-checkbox').trigger('click')
        //             }
        //         })
        //     }
        // });

    });
</script>
<script>
    // multiple script
    $(".TranscriptInp").on('change', (event) => {
        // for (let i = 0; i < event.target.files.length; i++) {
            // if(event.target.files.length < 1){
                $(event.target.parentNode).find(".asd").empty()
                $(event.target.parentNode).find(".asd").append(`
                <button type="button" class="mod-btn" data-toggle="modal" data-target="#transmod" data-id="${URL.createObjectURL(event.target.files[0])}"       onclick="pdffunction(this)">
                    ${event.target.files[0].name}
                </button>
                    `)
            // }
            // else{
            //     return
            // }
            console.log(event.target.files.length)

        // }
    })
    $(".mod-btn").on('click', (e) => {
        console.log(e)
    })

    // on ready functions
    function pdffunction(e) {
        console.log('yes');
        console.log(e.dataset.id)
        $("#transmod .modal-body .embededpdf").attr("src", e.dataset.id + '#toolbar=0')
        setTimeout(() => {
            var ty = $('.embededpdf')
            console.log(ty.contentWindow)
        }, 500)
    }
</script>
<script>
    $("#btn-Upload").click(function(e) {
        var signed_picture = $('#signed_picture').val();
        var propert_picture = $('#propert_picture').val();
        var upload1 = $('#upload1').val();
        var upload2 = $('#upload2').val();
        var upload3 = $('#upload3').val();
        var upload5 = $('#upload5').val();
        var upload6 = $('#upload6').val();
        var upload7 = $('#upload7').val();
        var upload9 = $('#upload9').val();
        var property_task = $('#property_task').val();
        var hiddentime = $('#hiddetime').val();
        var hiddentimeleft = $('#hiddentimeleft').val();
        if (hiddentimeleft == '') {
            AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Kindly go back and select time left first</span>');
            return false;
        }
        if (hiddentime == '') {
            AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Kindly go back and select arrival time first</span>');
            return false;
        }
        // if (arive_time == 0) {
        //     AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Check First Arrival Time.</span>');
        //     return false;
        // }
        if (propert_picture == 0) {
            AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Check First Propert Picture.</span>');
            return false;
        }
        if (upload1 == '') {
            AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Upload Before Cleaning  Picture.</span>');
            return false;
        }
        if (upload2 == '') {
            AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Upload Before Cleaning  Picture.</span>');
            return false;
        }
        if (upload3 == '') {
            AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Upload Before Cleaning  Picture.</span>');
            return false;
        }
        
        if (upload5 == '') {
            AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Upload After Cleaning  Picture.</span>');
            return false;
        }
        if (upload6 == '') {
            AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Upload After Cleaning  Picture.</span>');
            return false;
        }
        if (upload7 == '') {
            AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Upload After Cleaning  Picture.</span>');
            return false;
        }
        if (signed_picture == 0) {
            AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Check First Signed Completion.</span>');
            return false;
        }
        if (upload9 == '') {
            AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Upload Signed Completion Document.</span>');
            return false;
        }
        if (property_task == 0) {
            AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Property Picture Missing.</span>');
            return false;
        }
        else {
            console.log('yes');
            var form = $(this).closest('form');
            e.preventDefault();
            Loader.show();
            setTimeout(function() {
                var url = form.attr('action');
                var data = new FormData(document.getElementById('uploadimage'));
                jQuery.ajax({
                url: url,
                type: "POST",
                data: data,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false, 
                dataType: 'json',
                success: function(response) {
                    Loader.hide();
                    AdminToastr.success(response.txt,'Success');
                    setTimeout(function(){
                    window.location.href =  base_url + "account/my_task";
                        return false;
                    },1000);
                },
            });  // JQUERY Native Ajax End
                
            }, 500);
        }
        return false;
    });
</script>