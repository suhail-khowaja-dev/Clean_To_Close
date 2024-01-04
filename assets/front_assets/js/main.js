function detectScroll() {
    $(window).scroll(function (e) {
        var t = $(window).scrollTop(),
            n = document.getElementById("navbar"),
            o = document.getElementById("navbar").getElementsByClassName("logo");
        t >= 100 ? (n.style.backgroundColor = "#ecf0ef", n.style.boxShadow = '7px 5px 20px -4px #b3c2c1') : t < 100 && (n.style.backgroundColor = "#ffffff", n.style.boxShadow = 'none')
    }), $(document).ready(function () {
        let e = document.getElementById("footer"),
            t = window.innerHeight,
            n = window.innerWidth;
        1366 == t && 1024 == n && (e.style.position = "absolute", e.style.bottom = "0px")
    })
}
function removecomma() {
    var t = document.getElementsByClassName('uniComnma')[0]
    if (t == undefined) {
        return false
    }

    $('.uniComnma').html(window.localStorage.getItem('arrty'))
}
function changeTab(e, t, con) {
    myFile2Text = $("#myFile2Text").val();
    myFile3Text = $("#myFile3Text").val();
    window.scrollTo(0, 0);
    if (e == 'tab7') {
        $('.forsumaryedit').removeClass('dnone');
    } else {
        $('.forsumaryedit').addClass('dnone');
    }
    var submitted = false;
    var num_val;
    var errorField;
    if (con != undefined) {
        $('#' + con).find('.validation').each((i, e) => {
            if (e.type != 'checkbox' && !submitted) {
                $('#' + con).find('.validation')[i].classList.remove('error')
                if(con == 'tab1'){
                    if (e.value == '' || e.value == null || e.value == 'N/A') {
                        $('#' + con).find('.validation')[i].classList.add('error')
                        submitted = true;
                        var ty = $('#' + con).find('.validation')[i].parentNode
                        errorField = $(ty).find('label').text()
                        if ($('#' + con).find('.validation')[i].type == 'number') {
                            num_val = $('#' + con).find('.validation')[i].value
                        }
                    }
                }else{
                    if (e.value == '' || e.value == null || e.value == 'N/A' || e.value == '0') {
                        $('#' + con).find('.validation')[i].classList.add('error')
                        submitted = true;
                        var ty = $('#' + con).find('.validation')[i].parentNode
                        errorField = $(ty).find('label').text()
                        if ($('#' + con).find('.validation')[i].type == 'number') {
                            num_val = $('#' + con).find('.validation')[i].value
                        }
                    }
                }
            }
        })
    }

    if (e != 'tab7') {
        if (!submitted) {
            window.localStorage.setItem('place-order-active-tab', e)
            for (var n = document.getElementsByClassName("tab-pane"), o = document.getElementsByClassName("tabb"), a = document.getElementById(e), c = document.getElementById(t), s = 0; s < n.length; s++) n[s].classList.remove("active"), n[s].classList.remove("show"), o[s].classList.remove("active"), o[s].classList.remove("show");
            a.classList.add("active"), a.classList.add("show"), c.classList.add("active"), c.classList.add("show"), "tab3" == e ? $("#GetToKnowHead").text("Pick Your Subscription") : "tab2" == e ? $("#GetToKnowHead").text("") : $("#GetToKnowHead").text("Let Us Get To Know You Better!");

            setTimeout(() => {
                if (removecomma()) {
                    removecomma()
                }
            }, 500)
        }

        else {
            AdminToastr.error(`<span for="%s" style="color:#fff" class="has-error help-block">${errorField} field is required.</span>`, 'Error');
        }
    } else {
        if (submitted == false) {
            if (
                document.getElementById('packageCl2').checked ||
                document.getElementById('packageCl').checked ||
                document.getElementById('packageCl3').checked
            ) {
                window.localStorage.setItem('place-order-active-tab', e)
                for (var n = document.getElementsByClassName("tab-pane"), o = document.getElementsByClassName("tabb"), a = document.getElementById(e), c = document.getElementById(t), s = 0; s < n.length; s++) n[s].classList.remove("active"), n[s].classList.remove("show"), o[s].classList.remove("active"), o[s].classList.remove("show");
                a.classList.add("active"), a.classList.add("show"), c.classList.add("active"), c.classList.add("show"), "tab3" == e ? $("#GetToKnowHead").text("Pick Your Subscription") : "tab2" == e ? $("#GetToKnowHead").text("") : $("#GetToKnowHead").text("Let Us Get To Know You Better!");

                setTimeout(() => {
                    if (removecomma()) {
                        removecomma()
                    }
                }, 500)
            } else {
                AdminToastr.error(`<span for="%s" style="color:#fff" class="has-error help-block">'Package' field is required.</span>`, 'Error');
            }
        } else {
            if (num_val) {
                AdminToastr.error(`<span for="%s" style="color:#fff" class="has-error help-block">${errorField} field must be greater than 0 .</span>`, 'Error');
            }
            else {
                AdminToastr.error(`<span for="%s" style="color:#fff" class="has-error help-block">${errorField} field is required.</span>`, 'Error');
            }
        }

    }

    var currentSTR = localStorage.getItem('currentSqft')
    setTimeout(() => {
        var ty = $("#squareft ~ .select-selected");

        if(currentSTR != null && ty.length > 0){
            if (currentSTR != ty[0]['innerText']) {
                document.getElementById('packageCl2').checked = false;
                document.getElementById('packageCl').checked = false;
                document.getElementById('packageCl3').checked = false;
    
                $('#get_package_value1').text(`$${0}`);
                $('#get_package_value').text(`$${0}`);
    
                $(".total_amount").text(`$${0}`);
                $(".totalamount").text(`$${0}`);
            }
        }

        setTimeout(() => {
            if(ty.length > 0)
            {localStorage.setItem('currentSqft', ty[0]['innerText'])}
        }, 500)
    })
}
detectScroll();
var counter = 0;
var arr = [];

function addDivsTeam() {

    var e = `<div class="row timesHove" id="appendRow${++counter}">\n    <div class="col-lg-4">\n      <input type="text" placeholder="Name" name="signup[signup_team_name][]" class="formCustomInput">\n    </div> <div class="col-lg-4">\n      <input type="text" placeholder="Email" name="signup[signup_team_email][]" class="formCustomInput">\n    </div>\n    <div class="col-lg-4">\n      <input type="text" placeholder="Phone Number" name="signup[signup_team_contact][]" class="formCustomInput" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);" minlength="14">\n      <div class="cross">\n       <i class="fa fa-times" onclick="removeDiv('appendRow'+${counter})"></i>\n      </div>\n    </div> </div>`;
    $("#appendDiv").append(e);
    arr.push(+counter)
    hidePlus();

}

function hidePlus() {
    arr.forEach(element => {
        let ai = document.getElementById('appendRow' + element)
        if (ai != null) {
            document.getElementById('appendRow' + element).classList.remove('currentAddRow')
        }
    });
    if (document.getElementById('appendRow' + arr[arr.length - 1]) != null) {
        document.getElementById('appendRow' + arr[arr.length - 1]).classList.add('currentAddRow');
    }
    if (arr.length == 1) {
        if (document.getElementById('appendRow' + arr[0]) != null) {
            document.getElementById('appendRow' + arr[0]).classList.add('firstRowAddRow')
        }
    } else {
        arr.forEach(element => {
            let ai = document.getElementById('appendRow' + element)
            if (ai != null) {
                document.getElementById('appendRow' + element).classList.remove('firstRowAddRow')
            }
        });
    }

}

function removeDiv(e) {
    arr.map((val, i) => {
        if (val == e.split('w')[1]) {
            arr.splice(i, 1)
        }
    })
    var t = document.getElementById(e);
    t.parentElement.removeChild(t);
    hidePlus();
}
$(document).ready(function () {
    var e = $(".containerRadio input").change(function () {
        "1" == e.filter(":checked").val() ? ($(".temRadio").css({
            display: "none"
        }), $(".clInf2").text("Are you Insured?")) : ($(".temRadio").css({
            display: "block"
        }), $(".clInf2").text("Is your team insured?"))
    });
    var fg = $(".areYouInsured .containerRadio.radiobutton input").change(function () {
        "1" == fg.filter(":checked").val() ?
            ($(".cg67").css({
                display: "none"
            })) :
            ($(".cg67").css({
                display: "block"
            }))
    });

    var f = $(".TeamInsured .containerRadio.radiobutton input").change(function () {
        "1" == f.filter(":checked").val() ?
            ($(".temRadio2").css({
                display: "none"
            })) :
            ($(".temRadio2").css({
                display: "block"
            }))
    });

    addDivsTeam();
    $('.nav-link.withOutBtn.dropdown-toggle').hover(function () {
        $('.nav-item.dropdown').addClass("show");
        $('.dropdown-menu').addClass("show");
    }, function () {
        $('.nav-item.dropdown').removeClass("show");
        $('.dropdown-menu').removeClass("show");
    });
    $('.dropdown-menu').hover(function () {
        $(this).addClass("show");
    }, function () {
        $(this).removeClass("show");
    });



    $('#myFile').on('click', () => {
        document.getElementById('myFile1').click();
        
    });
    $('#myFile1').on('change', (e) => {
        $('.btnTxt1').text(e.target.files[0].name);
    });
    $('#myFile2Btn').on('click', () => {
        document.getElementById('myFile2').click();
    });
    $('#myFile2').on('change', (e) => {
        var fup = document.getElementById('myFile2');
        var fname = fup.value;
            var files = e.originalEvent.target.files;
        for (var i=0, len=files.length; i<len; i++){
            var n = files[i].name,
                s = files[i].size,
                t = files[i].type;
        }
    });

    $('#myFile3Btn').on('click', () => {
        document.getElementById('myFile3').click();
    });
    $('#myFile3').on('change', (e) => {
        var fup = document.getElementById('myFile3');
        var fname = fup.value;
            var files = e.originalEvent.target.files;
        for (var i=0, len=files.length; i<len; i++){
            var n = files[i].name,
                s = files[i].size,
                t = files[i].type;
                console.log(s);
                $("#myFile3Text").val("");
        }
    });


    $('#myFile3Btn452').on('click', () => {
        document.getElementById('myFile3').click();
    });
    $('#myFile223').on('change', (e) => {
        $('.btnTxt252').text(e.target.files[0].name);
    });

    $('#myFile3Btn453').on('click', () => {
        document.getElementById('myFile3').click();
    });
    $('#myFile224').on('change', (e) => {
        $('.btnTxt253').text(e.target.files[0].name);
    });

    $('.propertyAddBoxtab4.b1').hide();
    $('.propertyAddBoxtab4.b2').hide();
    $('.containerChk.sndf input').on('change', (e) => {
        e.target.value == 'Seller' ?
            ($('.propertyAddBoxtab4.b1').hide(), $('.propertyAddBoxtab4.b2').show(), $('.propertyAddBoxtab4.b3').hide()) :
            e.target.value == 'Buyer' ?
                ($('.propertyAddBoxtab4.b1').show(), $('.propertyAddBoxtab4.b2').hide(), $('.propertyAddBoxtab4.b3').hide()) :
                e.target.value == 'Agent' ?
                    ($('.propertyAddBoxtab4.b1').hide(), $('.propertyAddBoxtab4.b2').hide(), $('.propertyAddBoxtab4.b3').show()) :
                    null
    })

    $('.greenBtn').on('click', () => {
        setTimeout(() => {
            $('.uploadBtn2').on('click', (e) => {
                var parent = e.target.parentNode
                $(parent).find('input').trigger('click');
                $(parent).find('input').change((e) => {
                    $(parent).find('span').text(e.target.files[0].name)
                })
            })
        })
    })


});

$(document).ready(function () {
    $('.sikn').on('click', function () {
        var parent = this;
        var shortString;
        $(this).find('input').change((e) => {
            if (e.target.files[0].name.split('.')[0].length > 15) {
                var shortString = e.target.files[0].name.split('.')[0].slice(0, 15) + '...' + e.target.files[0].name.split('.')[1];
            }

            $(parent).find(`span.ml10`).text(shortString)
        });
    });
    toastr.options = {
        "positionClass": "toast-bottom-right",
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    $("#propert_picture").on('click', function () {
        if (this.checked) {
            $('#propert_picture').val(1);
        } else {
            $('#propert_picture').val(0);
        }
    });

    // after picture js
    $("#afterpic1").on('click', function () {
        var property_picture = $('#propert_picture').val();
        if (property_picture == 0) {
            toastr.error('Check First Property Pictures');
            return false;
        }
    });
    $("#afterpic2").on('click', function () {
        var property_picture = $('#propert_picture').val();
        if (property_picture == 0) {
            toastr.error('Check First Property Pictures');
            return false;
        }
    });
    $("#afterpic3").on('click', function () {
        var property_picture = $('#propert_picture').val();
        if (property_picture == 0) {
            toastr.error('Check First Property Pictures');
            return false;
        }
    });
    $("#signed_picture").on('click', function () {
        if (this.checked) {
            $('#signed_picture').val(1);
        } else {
            $('#signed_picture').val(0);
        }
    });
    $("#arive_time").on('click', function () {
        if (this.checked) {
            $('#arive_time').val(1);
        } else {
            $('#arive_time').val(0);
        }
    });

    $("#left_time").on('click', function () {
        if (this.checked) {
            $('#left_time').val(1);
        } else {
            $('#left_time').val(0);
        }
    });

    $("#property_task").on('click', function () {
        if (this.checked) {
            $('#property_task').val(1);
        } else {
            $('#property_task').val(0);
        }
    });
});
var first_name =  $('.first_name').val();
var last_name =  $('.last_name').val();

var teamMem = [];
var currentMem, currentMemID;

function openFil(id){
    //console.log(id)
    $(id).trigger('click')
    $(id).change((e)=>{
        var span = id.split('#')[1]
        $('.'+span+'-span').text(e.target.files[0].name)
    })
}

function checkAppendersW9(id) {
    teamMem = []
    $('.appendedByTeam').empty()
    $('.appendedByTeam').append(`
        <div class="cardfg">
        <div class="col-lg-12 mt10">
          <div class="bCheck">
            Background Check
          </div>
          <div class="">
          <div class="flexi">
            <div class="note noti2">
                            
              <span class="notered">Note:</span>
              
                <div class="beckgoriund">
                ${cleaner_note}
                </div>
<!--              <span>-->
<!--              We require all applicants to complete a background check. There is a one time fee of $18.95 per applicant.-->
<!--             </span>-->
            </div>
          </div>
            <div class="mt-2">
                <a href="javascript:void(0);">
                <label hidden>User background form</label>
                <input type="text" id="individual_watchDog" class="validation" hidden />
                    <button class=" formBtn greenBtn formModalData" type="button" data-toggle="modal" data-target="#criminalWatchModal" onclick="getFormBtnVal(event,'individual_watchDog')" value="individual">
                        Click Here
                    </button>
                </a>
                <span class="btnTxt1"></span>
                <input type="file" name="" id="" hidden />
                <div class="uploadMem">
                    <div class="mt-2">
                        <label hidden>Background Check Document</label>
                        <div class="d-flex align-items-center ">
                            <button class="formBtn greenBtn" type="button" onclick="openFil('#myFile2220')">
                                UPLOAD
                            </button>
                            <div class=" asd ml-3 myFile2220-span"></div>
                        </div>
                        <input type="file" name="sfas" id="myFile2220" class="validation TranscriptInp" hidden />
                    </div>
                </div>
            </div>
        </div>
        `)
        teamMem.push({ 'member_name': 'individual' })
    if ($('#tab1 .col-lg-12.flexCol .containerRadio input[type=radio]:checked').val() == 2) {
        var ad = $(`#${id}`)
        // ad[0].children
        for (i = 0; i < ad[0].children.length; i++) {
            var name;
            if ($(ad[0].children[i]).find('input').attr('placeholder') == 'Name') {
                name = $(ad[0].children[i]).find('input').val();
                teamMem.push({ 'member_name': name })
            }
            $('.appendedByTeam').append(`
            <div class="cardfg">
            <div class="col-lg-12 mmem">
              <h6>Team Member: ${name}</h6>
            </div>
            <div class="col-lg-12 mt10">
              <div class="bCheck">
                Background Check
              </div>
              <div class="flexi">
                <div class="note noti2">
                  <span class="notered">Note:</span>
                  
                <div class="beckgoriund">
                    ${cleaner_note}
                </div>
                <!--                  <span>-->
                <!--                  We require all applicants to complete a background check. There is a one time fee of $18.95 per applicant.-->
                <!--                  </span>-->
                </div>
              </div>
                <div class="mt-2">
                    <a href="javascript:void(0);">
                    <label hidden>${name} background form</label>
                    <input type="text" id="${name.replace(/ /g, '')}_watchDog" class="validation" hidden />
                    <button class=" formBtn greenBtn formModalData" type="button" data-toggle="modal" data-target="#criminalWatchModal" onclick="getFormBtnVal(event,'${name.replace(/ /g, '')}_watchDog')" value="${name}">
                        Click Here
                    </button>
                    </a>
                    <span class="btnTxt1"></span>
                    <input type="file" name="signup[signup_background_check_image]" id="myFile1" hidden />
                    <div class="uploadMem">
                    <div class="mt-2">
                        <label hidden>Backgroundcheck Document</label>
                        <div class="d-flex align-items-center ">
                            <button class="formBtn greenBtn" type="button" onclick="openFil('#myFile22210'+${i})">
                                UPLOAD
                            </button>
                            <div class=" asd ml-3 myFile22210${i}-span"></div>
                        </div>
                        <input type="file" name="sfas" id="myFile22210${i}" class="validation TranscriptInp" hidden />
                    </div>
                </div>
                </div>
            </div>
         </div>
         
            `)
        }
    } else if ($('#tab1 .col-lg-12.flexCol .containerRadio input[type=radio]:checked').val() == 1) {

    }

}

function getFormBtnVal(e, id) {
    currentMemID = id
    currentMem = e.target.value
}
var zChar = new Array(' ','(',')','-','.');
var maxphonelength = 14;
var phonevalue1;
var phonevalue2;
var cursorposition;

function ParseForNumber1(object) {
    phonevalue1 = ParseChar(object.value, zChar);
}

function ParseForNumber2(object) {
    phonevalue2 = ParseChar(object.value, zChar);
}

function backspacerUP(object, e) {
    if (e) {
        e = e
    } else {
        e = window.event
    }
    if (e.which) {
        var keycode = e.which
    } else {
        var keycode = e.keyCode
    }

    ParseForNumber1(object)

    if (keycode >= 48) {
        ValidatePhone(object)
    }
}

function backspacerDOWN(object, e) {

    if (e) {
        e = e
    } else {
        e = window.event
    }
    if (e.which) {
        var keycode = e.which
    } else {
        var keycode = e.keyCode
    }
    ParseForNumber2(object)
}

function GetCursorPosition() {

    var t1 = phonevalue1;
    var t2 = phonevalue2;
    var bool = false
    for (i = 0; i < t1.length; i++) {
        if (t1.substring(i, 1) != t2.substring(i, 1)) {
            if (!bool) {
                cursorposition = i
                bool = true
            }
        }
    }
}

function ValidatePhone(object) {

    var p = phonevalue1

    p = p.replace(/[^\d]*/gi, "" )

    if (p.length < 3) {
        object.value = p
    } else if (p.length == 3) {
        pp = p;
        d4 = p.indexOf('(')
        d5 = p.indexOf(')')
        if (d4 == -1) {
            pp = "(" + pp;
        }
        if (d5 == -1) {
            pp = pp + ")";
        }
        object.value = pp;
    } else if (p.length > 4 && p.length < 8) {
        p = "(" + p;
        l30 = p.length;
        p30 = p.substring(0, 4);
        p30 = p30 + ") " 

        p31 = p.substring(4, l30);
        pp = p30 + p31;

        object.value = pp;

    } else if (p.length >= 8) {
        p = "(" + p;
        l30 = p.length;
        p30 = p.substring(0, 4);
        p30 = p30 + ") " 

        p31 = p.substring(4, l30);
        pp = p30 + p31;

        l40 = pp.length;
        p40 = pp.substring(0, 9);
        p40 = p40 + "-"

        p41 = pp.substring(8, l40);
        ppp = p40 + p41;

        object.value = ppp.substring(0, maxphonelength);
    }

    GetCursorPosition()

    if (cursorposition >= 0) {
        if (cursorposition == 0) {
            cursorposition = 2
        } else if (cursorposition <= 2) {
            cursorposition = cursorposition + 1
        } else if (cursorposition <= 5) {
            cursorposition = cursorposition + 2
        } else if (cursorposition == 6) {
            cursorposition = cursorposition + 2
        } else if (cursorposition == 7) {
            cursorposition = cursorposition + 4
            e1 = object.value.indexOf(') ')
            e2 = object.value.indexOf('-')
            if (e1 > -1 && e2 > -1) {
                if (e2 - e1 == 4) {
                    cursorposition = cursorposition - 1
                }
            }
        } else if (cursorposition < 11) {
            cursorposition = cursorposition + 3
        } else if (cursorposition == 11) {
            cursorposition = cursorposition + 1
        } else if (cursorposition >= 12) {
            cursorposition = cursorposition
        }


        txtRange.moveStart("character", cursorposition);
        txtRange.moveEnd("character", cursorposition - object.value.length);
        txtRange.select();
    }

}

function ParseChar(sStr, sChar) {
    if (sChar.length == null) {
        zChar = new Array(sChar);
    } else zChar = sChar;

    for (i = 0; i < zChar.length; i++) {
        sNewStr = "";

        var iStart = 0;
        var iEnd = sStr.indexOf(sChar[i]);

        while (iEnd != -1) {
            sNewStr += sStr.substring(iStart, iEnd);
            iStart = iEnd + 1;
            iEnd = sStr.indexOf(sChar[i], iStart);
        }
        sNewStr += sStr.substring(sStr.lastIndexOf(sChar[i]) + 1, sStr.length);

        sStr = sNewStr;
    }

    return sNewStr;
}
$(document).keydown(function(e){
    if(e.which === 123){
       return false;
    }
});
