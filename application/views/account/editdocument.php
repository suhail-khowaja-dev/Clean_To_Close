<div class="Main">
    <div class="dashboard dash1 ">
        <div class="main-div contantPart">

            <div class="container">
                <!--Inner Start-->


                <!-- BEGIN SIDEBAR -->
                <? $this->load->view('account/header_main') ?>
                <!-- END SIDEBAR -->

                <!-- My Task Section -->
                <!-- <h4 class="text-center dashheading">Update Document</h4> -->
                <form action="<?= g('base_url'); ?>account/update_images" method="post" enctype="multipart/form-data" id="updateimage">
                    <div class="modal-body">
                        <span class="d-flex flex-column align-items-baseline">
                            <div class="uploHeadr">
                                Loreaum Ipsum dol sit abem sit
                            </div>
                        </span>
                        <span class="d-flex flex-column align-items-baseline">
                            <div class="modalheading">
                                Property Pictures
                            </div>
                            <input type="hidden" name="uploaddocument[upload_document_cleaner_id]" value="<?php echo $this->userid ?>">
                            <input type="hidden" name="uploaddocument[upload_document_id]" value="<?php echo $_GET['id'] ?>">
                            <div class="d-flex forMM">
                                <div class="uplo d-flex flex-column align-items-baseline">
                                    Before:
                                    <label for="before1" class="sikn mt5">
                                        <div class="d-flex align-items-center">
                                            <span>1.</span>
                                            <div class="upload ml10 cp" id="beforepic1">Upload</div>
                                            <a href="<?php echo get_image($upload_document['upload_document_before1_path'], $upload_document['upload_document_before1_image']) ?>" download>
                                                <button type="button" class="upload ml10 cp">View</button>
                                            </a>

                                        </div>
                                        <input type="file" id="before1" name="uploaddocument[upload_document_before1_image]" hidden>
                                        <span class="ml10"></span>
                                    </label>
                                    <label for="before2" class="sikn mt5">
                                        <div class="d-flex align-items-center">
                                            <span>2.</span>
                                            <div class="upload ml10 cp" id="beforepic2">Upload</div>
                                            <a href="<?php echo get_image($upload_document['upload_document_before2_path'], $upload_document['upload_document_before2_image']) ?>" download>
                                                <button type="button" class="upload ml10 cp" id="">View</button>
                                            </a>

                                        </div>
                                        <input type="file" id="before2" name="uploaddocument[upload_document_before2_image]" hidden>
                                        <span class="ml10"></span>
                                    </label>
                                    <label for="before3" class="sikn mt5">
                                        <div class="d-flex align-items-center">
                                            <span>3.</span>
                                            <div class="upload ml10 cp" id="beforepic3">Upload</div>
                                            <a href="<?php echo get_image($upload_document['upload_document_before3_path'], $upload_document['upload_document_before3_image']) ?>" download>
                                                <button type="button" class="upload ml10 cp" id="">View</button>
                                            </a>

                                        </div>
                                        <input type="file" id="before3" name="uploaddocument[upload_document_before3_image]" hidden>
                                        <span class="ml10"></span>
                                    </label>
                                </div>
                                <div class="uplo d-flex flex-column align-items-baseline ml30">
                                    After:
                                    <label for="after1" class="sikn mt5">
                                        <div class="d-flex align-items-center">
                                            <span>1.</span>
                                            <div class="upload ml10 cp" id="afterpic1">Upload</div>
                                            <a href="<?php echo get_image($upload_document['upload_document_after1_path'], $upload_document['upload_document_after1_image']) ?>" download>
                                                <button type="button" class="upload ml10 cp" id="">View</button>
                                            </a>

                                        </div>
                                        <input type="file" id="after1" name="uploaddocument[upload_document_after1_image]" hidden>
                                        <span class="ml10"></span>
                                    </label>
                                    <label for="after2" class="sikn mt5">
                                        <div class="d-flex align-items-center">
                                            <span>2.</span>
                                            <div class="upload ml10 cp" id="afterpic2">Upload</div>
                                            <a href="<?php echo get_image($upload_document['upload_document_after2_path'], $upload_document['upload_document_after2_image']) ?>" download>
                                                <button type="button" class="upload ml10 cp" id="">View</button>
                                            </a>

                                        </div>
                                        <input type="file" id="after2" name="uploaddocument[upload_document_after2_image]" hidden>
                                        <span class="ml10"></span>
                                    </label>
                                    <label for="after3" class="sikn mt5">
                                        <div class="d-flex align-items-center">
                                            <span>3.</span>
                                            <div class="upload ml10 cp" id="afterpic3">Upload</div>
                                            <a href="<?php echo get_image($upload_document['upload_document_after3_path'], $upload_document['upload_document_after3_image']) ?>" download>
                                                <button type="button" class="upload ml10 cp" id="">View</button>
                                            </a>
                                        </div>
                                        <input type="file" id="after3" name="uploaddocument[upload_document_after3_image]" hidden>
                                        <span class="ml10"></span>
                                    </label>
                                </div>
                            </div>
                        </span>
                        <div class="">
                            <div class="mb1 modalheading">Signed Completion Page :</div>
                            <label for="Signed" class="sikn mb10P">
                                <div class="d-flex align-items-center">
                                    <span>1.</span>
                                    <div class="upload ml10 cp" id="signed_picture_page">Upload</div>
                                    <a href="<?php echo get_image($upload_document['upload_document_signed_path'], $upload_document['upload_document_signed_image']) ?>" download>
                                        <button type="button" class="upload ml10 cp" id="">View</button>
                                    </a>
                                </div>
                                <input type="file" id="Signed" name="uploaddocument[upload_document_signed_image]" hidden>
                                <span class="ml10"></span>
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="viewDocBtn" id="btn-Back">Back</button>
                        <button type="button" class="viewDocBtn" id="btn-Update">Update Document</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
    $("#btn-Update").click(function(e) {
        // alert('yes');
        var form = $(this).closest('form');
        setTimeout(function() {
            // Prevent form submitting
            e.preventDefault();
            //var data = $('#form-subscribe').serialize();
            // Get action url
            var url = form.attr('action');
            var data = new FormData(document.getElementById('updateimage'));
            var response = FileUploadScript.fire(url, data, 'json', true);
            return false;
        }, 1000);
        return false;
    });

    document.getElementById('btn-Back').addEventListener('click', () => {
        window.history.back();
    });
</script>