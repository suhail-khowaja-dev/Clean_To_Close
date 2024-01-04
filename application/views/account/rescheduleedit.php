<style>
    /* ::-webkit-scrollbar {
            display: none;
        } */
    .time-input {
        position: relative;
        width: 100%;
    }

    .time-input i {
        position: absolute;
        color: #b1b1b1;
        right: 10px;
        top: 12px;

    }

    .time-field {
        box-shadow: 2px 9px 20px 3px rgb(212 212 212 / 75%);
        -webkit-box-shadow: 2px 9px 20px 3px rgb(212 212 212 / 75%);
        -moz-box-shadow: 2px 9px 20px 3px rgb(212 212 212 / 75%);
        /* display: flex;
            justify-content: center;
            align-items: center; */
        width: 100%;
        padding: 10px;
        /* border-radius: 0; */
        /* border-bottom-left-radius: 10px; */
        border-radius: 10px;
        padding-bottom: 5px;
        position: absolute;
        right: 0;
        background-color: #fff;
        z-index: 9;
    }

    .time-box {
        /* width: 120px; */
        height: 170px;
        display: flex;
        /* justify-content: space-around; */
    }

    .hours,
    .mins,
    .am {
        display: flex;
        overflow-y: scroll;
        overflow-x: hidden;
        flex-direction: column;
        margin: 0 auto;
        /* width: 40px; */
        text-align: center;
    }

    .hours::-webkit-scrollbar,
    .mins::-webkit-scrollbar,
    .am::-webkit-scrollbar {
        display: none;

    }

    .hours span,
    .mins span,
    .am span {
        /* width: 100%; */
        margin: 5px;
        cursor: pointer;
        font-family: sans-serif;
        /* width: 20px;
            height: 20px; */
        padding: 8px;
        font-size: 12px;
        text-align: center;
        border-radius: 8px;
    }

    .hours span:hover,
    .mins span:hover,
    .am span:hover {
        background-color: #b3c3c0;

    }

    .hide {
        display: none;
    }

    .show-field {
        font-family: gilroylight;
        border: none;
        background-color: #ffffff;
        border-radius: 3px;
        height: 40px;
        outline: 0;
        color: #000;
        width: 100%;
        display: flex;
        /* justify-content: space-around; */
        align-items: center;
        padding: 0 46px 0 0;
        border: 1px solid #ced4da;

    }

    .hrs,
    .min,
    .pm {
        margin: 0 auto;
        text-align: center;
        width: 30px;

    }

    .clicked {
        background-color: #b3c3c0;
        border-radius: 8px;
    }
</style>
<div class="Main">
    <div class="dashboard  ">


        <div class="contantPart">

            <div class="container">

                <div class="Main mt30">
                    <div class="letsGetMain">
                        <form action="<?= g('base_url') ?>account/update_detail" method="post" id="saveForm" class="footTop">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12 text-center mb3">
                                        <h3 class="orderHeading">Reschedule Cleaning</h3>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- <h3 class="orderHeading">Reschedule Cleaning</h3> -->
                                        <div class="form-group">
                                        <input type="hidden" name="cleaning_data[cleaning_service_cleaner_id]" value="<?php echo $cleaning['cleaning_service_cleaner_id']?>" />
                                            
                                            <input type="hidden" name="cleaning_data[cleaning_service_id]" value="<?php echo $_GET['id'] ?>" />
                                            <!-- <input type="hidden" name="cleaning_data[cleaning_service_update_status]" value="1"> -->
                                            <label for="" class="col-form-label"><b>Current date and time of cleaning:</b></label>
                                            <label for="" class="col-form-label"><?php echo date("m/d/Y", strtotime($cleaning['cleaning_service_closing_date'])) ?> <?php echo date("g:i A", strtotime($cleaning['cleaning_service_closing_time'])) ?></label>
                                            <label for="" class="col-form-label"><b>New proposed cleaning date and time:</b> </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">
                                                <input type="date" name="cleaning_data[cleaning_service_closing_date]" class="form-control" value="" id="date">
                                            </label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">
                                                <input type="time" placeholder="Time" name="cleaning_data[cleaning_service_closing_time]" class="form-control" value="" id="time">
                                            </label>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-4">
                                        <label hidden="">Time of Cleaning</label>
                                        <!--<label style="    margin-left: 3%;margin-bottom: 1px;color: #676767;font-size: 14px;margin-bottom: 5px;">Time</label>-->
                                        <input type="time" placeholder="Time" name="cleaning_data[cleaning_service_closing_time]" class="formCustomInput datechk validation" id="time" hidden="">
                                        <label for="" class="col-form-label">
                                            <div class="time-input ">
                                                <i class="fa fa-clock"></i>
                                                <div class="show-field">
                                                    <div class="hrs"> 01</div>:
                                                    <div class="min"> 00</div>
                                                    <div class="pm">AM</div>
                                                </div>
                                                <div class="time-field hide">
                                                    <div class="time-box">
                                                        <div class="hours">
                                                            <span class="clicked"> 01</span>
                                                            <span> 02</span>
                                                            <span> 03</span>
                                                            <span> 04</span>
                                                            <span> 05</span>
                                                            <span> 06</span>
                                                            <span> 07</span>
                                                            <span> 08</span>
                                                            <span> 09</span>
                                                            <span> 10 </span>
                                                            <span> 11 </span>
                                                            <span> 12 </span>
                                                        </div>
                                                        <div class="mins">
                                                            <span class="clicked"> 00</span>
                                                            <!-- <span> 01</span>
                                                            <span> 02</span>
                                                            <span> 03</span>
                                                            <span> 04</span>
                                                            <span> 05</span>
                                                            <span> 06</span>
                                                            <span> 07</span>
                                                            <span> 08</span>
                                                            <span> 09</span>
                                                            <span> 10 </span>
                                                            <span> 11 </span>
                                                            <span> 12 </span>
                                                            <span> 13 </span>
                                                            <span> 14 </span> -->
                                                            <span> 15 </span>
                                                            <!-- <span> 16 </span>
                                                            <span> 17 </span>
                                                            <span> 18 </span>
                                                            <span> 19 </span>
                                                            <span> 20 </span>
                                                            <span> 21 </span>
                                                            <span> 22 </span>
                                                            <span> 23 </span>
                                                            <span> 24 </span>
                                                            <span> 25 </span>
                                                            <span> 26 </span>
                                                            <span> 27 </span>
                                                            <span> 28 </span>
                                                            <span> 29 </span> -->
                                                            <span> 30 </span>
                                                            <!-- <span> 31 </span>
                                                            <span> 32 </span>
                                                            <span> 34 </span>
                                                            <span> 35 </span>
                                                            <span> 36 </span>
                                                            <span> 37 </span>
                                                            <span> 38 </span>
                                                            <span> 39 </span>
                                                            <span> 40 </span>
                                                            <span> 41 </span>
                                                            <span> 42 </span>
                                                            <span> 43 </span>
                                                            <span> 44 </span> -->
                                                            <span> 45 </span>
                                                            <!-- <span> 46 </span>
                                                            <span> 47 </span>
                                                            <span> 48 </span>
                                                            <span> 49 </span>
                                                            <span> 50 </span>
                                                            <span> 51 </span>
                                                            <span> 52 </span>
                                                            <span> 53 </span>
                                                            <span> 54 </span>
                                                            <span> 55 </span>
                                                            <span> 56 </span>
                                                            <span> 57 </span>
                                                            <span> 58 </span>
                                                            <span> 59 </span> -->
                                                        </div>
                                                        <div class="am">
                                                            <span class="clicked">AM</span>
                                                            <span>PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="nxtBtn">
                                    <button type="button" class="btn btn-primary greenBtn" id="backTbn">Back</button>
                                    <button type="button" class="btn btn-primary greenBtn" id="submitInfo">Update</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).on('click', (e) => {
        if ($(e.target).hasClass("fa-clock") || $(e.target).hasClass('time-field') || $(e.target).hasClass('clicked') || $(e.target).hasClass('am')) {
            console.log('asd')
        } else {
            $(".time-field").addClass("hide")
        }

    })
    $(".fa-clock").on('click', () => {
        $(".time-field").toggleClass("hide")
    })
    $(".hours span").on('click', (e) => {
        var hrs = e.target.innerHTML
        console.log(e.target.innerHTML)
        $(".hrs").text(e.target.innerHTML)
        for (let i = 0; i < hrs.length; i++) {
            $(".hours span").removeClass("clicked")
        }
        $(e.target).addClass('clicked')
        timer(e.target.innerHTML, 'hours')
    })
    $(".mins span").on('click', (e) => {
        var mins = e.target.innerHTML
        $(".min").text(e.target.innerHTML)
        for (let i = 0; i < mins.length; i++) {
            $(".mins span").removeClass("clicked")
        }
        $(e.target).addClass('clicked')
        timer(e.target.innerHTML, 'mins')
    })
    $(".am span").on('click', (e) => {
        var am = e.target.innerHTML
        $(".pm").text(e.target.innerHTML)
        for (let i = 0; i < am.length; i++) {
            $(".am span").removeClass("clicked")
        }
        $(e.target).addClass('clicked')
        timer(e.target.innerHTML, 'ampm')
    })

    var arrDaty = {
        'hours': 00,
        'mins': '00',
        'ampm': 00
    }
    var finaTm;

    function timer(data, key) {
        console.log('ad')
        arrDaty[key] = data;
        if (arrDaty.hours != 00 && arrDaty.ampm != 00) {
            var date = `${arrDaty.hours}:${arrDaty.mins}:${arrDaty.ampm}`
            var finl = date.replace(/ /g, '');
        }
        if (date != undefined) {
            console.log(timeConversion(finl))
            finaTm = `${timeConversion(finl)}00`
            $('input#time').val(finaTm)
            // $(".time-field").addClass("hide")
            console.log(finaTm)
        }
    }

    function timeConversion(s) {
        // Write your code here
        const arr = s.split(":")
        const isAM = arr[2].includes("AM")
        if (isAM) {
            arr[0] = arr[0].padStart(2, '0');
            arr[2] = arr[2].replace("AM", "");
            if (arr[0] === "12") arr[0] = "00"

        } else {
            arr[0] = (+arr[0] + 12).toString();
            arr[2] = arr[2].replace("PM", "");
            if (arr[0] === "24") arr[0] = "12"
        }
        return (arr.join(":"))
    }

    $(document).ready(function() {
        $('#backTbn').on('click', () => {
            document.location.href = '<?= g('base_url') ?>account/orderhistory', true;
        })
        var obj;
        $("#submitInfo").click(function(e) {
            var date = $('#date').val();
            if (date == '') {
                AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Date field is required.</span>', 'Error');
                return false;
            }
            var time = $('#time').val();
            if (time == '') {
                AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Time field is required.</span>', 'Error');
                return false;
            } else {
                e.preventDefault();
                Loader.show();
                setTimeout(function() {
                    // Prevent form submit
                    var obj = $("#saveForm");
                    // Get form data
                    var data = obj.serialize();
                    // Get post url
                    var url = obj.attr('action');
                    // Submit action
                    var response = AjaxRequest.fire(url, data);            
                        if (response.status) {
                            // return false;
                            window.location = '<?= g('base_url') ?>account/orderhistory';
                        
                        }
                    // Add return
                    return false;
                }, 3000);
                return false;
            }
        });
    });
</script>