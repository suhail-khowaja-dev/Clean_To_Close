<div class="container">
<div class="row">

<div class="col-md-12 mt-5">
<span class="heading">
<?php echo $punter_detail['punter_year_title']?>
</span>
</div>

<div class="col-md-12 mt-2 homeDesc">

</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="row mt-5">
<div class="col-md-12 sbhfirst text-center">
<h2>P3K Rated punters – <?php echo $punter_detail['punter_year_title']?></h2>
</div>
</div>
</div>

<div class="container">
<div class="row">

<?php foreach ($prospect as $key => $value) { ?>
<div class="col-md-4 stars">
<h4 style="color: #fff;margin-bottom: 1.5rem;font-size: 1.3rem;"><?php echo $value['prospect_title']?></h4>

<!-- Star Rating Starts -->
<!-- <?php if($value['prospect_rating'] == 2){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>nostar.png" >
<img src="<?=g('images_root')?>nostar.png" >
<img src="<?=g('images_root')?>nostar.png" >

<?} elseif($value['prospect_rating'] == 2.5){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_half.png" >
<img src="<?=g('images_root')?>nostar.png" >
<img src="<?=g('images_root')?>nostar.png" >


<?} elseif($value['prospect_rating'] == 3){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>nostar.png" >
<img src="<?=g('images_root')?>nostar.png" >


<?} elseif($value['prospect_rating'] == 3.5){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_half.png" >
<img src="<?=g('images_root')?>nostar.png" >

<?} elseif($value['prospect_rating'] == 4){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>nostar.png" >

<?} elseif($value['prospect_rating'] == 4.5){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_half.png" >

<?} elseif($value['prospect_rating'] == 5){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<?} elseif($value['prospect_rating'] == 6){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<?} elseif($value['prospect_rating'] == 7){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<?php } ?> -->
<!-- Star Rating Ends-->
</div>

<?php }?>




<!-- <div class="col-md-4 stars">
<h4 style="color: #fff;"><?php echo $prospect_detail['cms_page_d2_prospect']?></h4>


<?php if($prospect_detail['cms_page_d2_rating'] == 1){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>nostar.png" >
<img src="<?=g('images_root')?>nostar.png" >
<img src="<?=g('images_root')?>nostar.png" >
<img src="<?=g('images_root')?>nostar.png" >

<?} elseif($prospect_detail['cms_page_d2_rating'] == 2){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>nostar.png" >
<img src="<?=g('images_root')?>nostar.png" >
<img src="<?=g('images_root')?>nostar.png" >

<?} elseif($prospect_detail['cms_page_d2_rating'] == 3){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>nostar.png" >
<img src="<?=g('images_root')?>nostar.png" >

<?} elseif($prospect_detail['cms_page_d2_rating'] == 4){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>nostar.png" >

<?} elseif($prospect_detail['cms_page_d2_rating'] == 5){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<?php } ?>

</div>


<div class="col-md-4 stars">
<h4 style="color: #fff;"><?php echo $prospect_detail['cms_page_d3_prospect']?></h4>


<?php if($prospect_detail['cms_page_d3_rating'] == 1){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>nostar.png" >
<img src="<?=g('images_root')?>nostar.png" >
<img src="<?=g('images_root')?>nostar.png" >
<img src="<?=g('images_root')?>nostar.png" >

<?} elseif($prospect_detail['cms_page_d3_rating'] == 2){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>nostar.png" >
<img src="<?=g('images_root')?>nostar.png" >
<img src="<?=g('images_root')?>nostar.png" >

<?} elseif($prospect_detail['cms_page_d3_rating'] == 3){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>nostar.png" >
<img src="<?=g('images_root')?>nostar.png" >

<?} elseif($prospect_detail['cms_page_d3_rating'] == 4){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>nostar.png" >

<?} elseif($prospect_detail['cms_page_d3_rating'] == 5){?>
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<img src="<?=g('images_root')?>star_full.png" >
<?php } ?>

</div> -->


</div>  
</div>
<div class="container-fluid" style="background-color: #1B1830;">
<div class="searchtable mt-5">
<div class="col-lg-12">
<div class="row">
<div class="col-md-12 tableCol" style="padding: 0px">
    <?php if ($this->adminid == 1){ ?>
    <div class="row" style="align-items: center;">
        <div class="col-md-4">
            
            <a href="javascript:void(0)" class="btn default yellow-stripe btn-sort-data" style="background-color: #7a43aa;color: #fff;">
                                <i class="fa fa-plus" style="margin-right:10px"></i>
                                <span class="hidden-480">
                  Sort Data </span>
                            </a>
            
            
        </div>
        <div class="col-md-4 col-md-offset-4">
            <div class="sorting">
                <span>Sort By:</span>
                <select class="form-select" id="sorting" attr-year="<?php echo $punter_year_id?>" aria-label="Default select example">
                  <option id="reset">Reset</option> 
                  <option value="7">D1 FBS Ready</option>
                  <option value="6">D1 FBS Power 5 Ready</option>
                  <option value="5">D1 FBS Group 5 Ready</option>
                  <option value="4.5">D1 FCS Ready</option>
                  <option value="4">D2 Ready</option>
                  <option value="3.5">D2 Potential</option>
                  <option value="3">D3 Ready- 3 star</option>
                  <option value="2.5">Developing with Minor Adjustments</option>
                  <option value="2">Still Developing</option>
                </select>
            </div>
        </div>
    </div>
    <?php } ?>
<div class="table-responsive">          
<?php  if(count($punter_ranking) > 0){?>
<table class="table" style="color: #fff;">

<thead>
<tr>
<th><?=g('db.admin.rank')?></th>
<th><?=g('db.admin.name')?></th>
<th><?=g('db.admin.last_name')?></th>
<th><?=g('db.admin.graduation_year')?></th>
<th><?=g('db.admin.state')?></th>
<th><?=g('db.admin.offers')?></th>
<th><?=g('db.admin.commited')?></th>
<th><?=g('db.admin.prospect')?></th>
</tr>
</thead>

<tbody <?php if($this->adminid == 1){?> id="punters" <?php }?>>

<?php 
$counter = 0;
foreach ($punter_ranking as $key => $value) { ?>
<tr>
<input type="hidden"  value="<?= $value['punter_ranking_id'] ?>" class="get_id">
        <td><?php echo ++$counter; ?></td>
        <td><?php echo $value['punter_ranking_title']?></td>
        <td><?php echo $value['punter_ranking_last_name']?></td>
        <td><?php echo $value['punter_year_title']?></td>
        <td><?php echo $value['punter_ranking_state']?></td>
        <td width="200px"><?php echo $value['punter_ranking_offers']?></td>
        <td width="200px"><?php echo $value['punter_ranking_commited']?></td>
        <td class="stars">
            <?php if($value['punter_ranking_prospect'] == 2){?>
                            Still Developing
                            <!-- <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>nostar.png" >
                            <img src="<?=g('images_root')?>nostar.png" >
                            <img src="<?=g('images_root')?>nostar.png" > -->

                        <?} elseif($value['punter_ranking_prospect'] == 2.5){?>
                            Developing with Minor Adjustments
                            <!-- <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_half.png" >
                            <img src="<?=g('images_root')?>nostar.png" >
                            <img src="<?=g('images_root')?>nostar.png" > -->

                        <?} elseif($value['punter_ranking_prospect'] == 3){?>
                            D3 Ready 
                            <!-- <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>nostar.png" >
                            <img src="<?=g('images_root')?>nostar.png" > -->

                        <?} elseif($value['punter_ranking_prospect'] == 3.5){?>
                            D2 Potential
                            <!-- <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_half.png" >
                            <img src="<?=g('images_root')?>nostar.png" > -->

                        <?} elseif($value['punter_ranking_prospect'] == 4){?>
                            D2 Ready
                            <!-- <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>nostar.png" > -->

                        <?} elseif($value['punter_ranking_prospect'] == 4.5){?>

                            D1 FCS Ready
                         <!--    <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_half.png" > -->

                        <?} elseif($value['punter_ranking_prospect'] == 5){?>
                            D1 FBS Group 5 Ready - 5 stars
                            <!-- <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" > -->
                        <?} elseif($value['punter_ranking_prospect'] == 6){?>
                            D1 FBS Power 5 Ready - 5 star
                            <!-- <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" > -->
                        <?} elseif($value['punter_ranking_prospect'] == 7){?>
                            D1 FBS Ready - 5 star
                            <!-- <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" >
                            <img src="<?=g('images_root')?>star_full.png" > -->
                        <?php } ?>
<!-- <img src="<?=g('images_root')?>stars.png" width="30%"> -->
</td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } else{?>
<h1 style="text-align: center;color:#fff;margin:20px;">No Data Found(s)</h1>
<?php }?>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- <div class="row d-flex justify-content-center mt-4">
<a href="#">
<img src="assets/images/more.png" width="70%">
</a>
</div> -->

<script async src="<?php echo g('js_root');?>jquery-ui.js"></script>

<script>
    $(document).ready(function() {

        $("#sorting").change(function() { 

            var id = $("#sorting").val();
            var year = $(this).attr('attr-year');
            // alert(id);

            var params = {};
            params.id = id;
            params.year = year;
            var res = AjaxRequest.fire(base_url + "punter/get_punter_ranking" , params);
           if(res.status == 1)
           {
                $('#punters').html(res.html);
           }
           else
           {
                $('#punters').html('');                  
           }

        });
        });
    $(document).ready(function () {


        $("#punters").sortable();
        $("#punters").disableSelection();

        $('.btn-sort-data').click(function () {
            //alert('');
            var _class = $('#punters').find('input');
            var div = $('#punters').find('input');
            var arr = '';


            var prod = [];
            var str = '';
            $(".get_id").each(function (i) {

                // prod.push($(this).val());
                str += ',' + $(this).val();
                //

            });
            //console.log('Product');
            // console.log(prod);
            // console.log(str);

            // $.each(div , function(key , value){

            //   console.log(key);
            //   console.log(value);

            //   // arr +=  $(value).find('input[type=checkbox]').val();
            //   // arr += '~';
            // });

            var data = {str: str};
            var url = "<?=g('base_url')?>punter/set_positions";
            var response = AjaxRequest.formrequest(url, data);
            if (response.status == 1) {
                AdminToastr.success(response.txt, 'Sucess');
                location.reload().delay(3000);
            } else {
                AdminToastr.error('error', 'Error');
            }
        });


    });

    $("#sorting").change(function() {
      var id = $(this).children(":selected").attr("id");
      // alert(id);
      if(id == 'reset'){
        location.reload();
      }
      else{}
    });
</script>