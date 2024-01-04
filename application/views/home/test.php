<?php


if (isset($_POST['searchSubmit'])) {
    if (!empty($_POST['location'])) {
        $location = $_POST['location'];
    }

    if (!empty($_POST['loc_latitude'])) {
        $latitude = $_POST['loc_latitude'];
    }

    if (!empty($_POST['loc_longitude'])) {
        $longitude = $_POST['loc_longitude'];
    }

    if (!empty($_POST['distance_km'])) {
        $distance_km = $_POST['distance_km'];
    }
}
// Calculate distance and filter records by radius 
$sql_distance = $having = '';
if (!empty($distance_km) && !empty($latitude) && !empty($longitude)) {
    $radius_km = $distance_km;
    $sql_distance = " ,(((acos(sin((" . $latitude . "*pi()/180)) * sin((`p`.`test_latitude`*pi()/180))+cos((" . $latitude . "*pi()/180)) * cos((`p`.`test_latitude`*pi()/180)) * cos(((" . $longitude . "-`p`.`test_longitude`)*pi()/180))))*180/pi())*60*1.1515*1.609344) as distance ";

    $having = " HAVING (distance <= $radius_km) ";

    $order_by = ' distance ASC ';
} else {
    $order_by = ' p.test_id DESC ';
}

// Fetch places from the database 
$sql = "SELECT p.*" . $sql_distance . " FROM ctc_test p $having ORDER BY $order_by";
// $query = $db->query($sql); 
$que12 = $this->db->query($sql);
$usersData  = $que12->result_array();
// debug($que12,1);
?>

<head>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Google Maps JavaScript library -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCab5ahH6KkodUavDwBCigXTL7ZbrkzS94"></script>

    <script>
        var searchInput = 'location';

        $(document).ready(function() {
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                types: ['geocode'],
            });

            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var near_place = autocomplete.getPlace();
                document.getElementById('latitude').value = near_place.geometry.location.lat();
                document.getElementById('longitude').value = near_place.geometry.location.lng();
            });
        });

        $(document).on('change', '#' + searchInput, function() {
            document.getElementById('latitude').value = '';
            document.getElementById('longitude').value = '';
        });
    </script>
</head>
<div class="Main">
    <div class="faqMain text-center">
        <div class="container mb5 mt70">
            <form method="Post">
                <input type="text" name="location" id="location" value="<?php echo !empty($location) ? $location : ''; ?>" placeholder="Type location...">
                <input type="hidden" name="loc_latitude" id="latitude" value="<?php echo !empty($latitude) ? $latitude : ''; ?>">
                <input type="hidden" name="loc_longitude" id="longitude" value="<?php echo !empty($longitude) ? $longitude : ''; ?>">

                <select name="distance_km">
                    <option value="">Distance</option>
                    <option value="5" <?php echo (!empty($distance_km) && $distance_km == '5') ? 'selected' : ''; ?>>+5 KM</option>
                    <option value="10" <?php echo (!empty($distance_km) && $distance_km == '10') ? 'selected' : ''; ?>>+10 KM</option>
                    <option value="15" <?php echo (!empty($distance_km) && $distance_km == '15') ? 'selected' : ''; ?>>+15 KM</option>
                    <option value="20" <?php echo (!empty($distance_km) && $distance_km == '20') ? 'selected' : ''; ?>>+20 KM</option>
                </select>
                <input type="submit" name="searchSubmit" value="Search" />
            </form>

            <?php
            if ($usersData->num_rows > 0) {
                while ($row = $usersData->fetch_assoc()) {
            ?>
                    <div class="pbox">
                        <h4><?php echo $row['test_title']; ?></h4>
                        <p><?php echo $row['test_address']; ?></p>
                        <?php if (!empty($row['distance'])) { ?>
                            <p>Distance: <?php echo round($row['distance'], 2); ?> KM
                            <p>
                            <?php } ?>
                    </div>
            <?php
                }
            } else {
                echo '<h5>Place(s) not found...</h5>';
            }
            ?>

        </div>
    </div>
</div>