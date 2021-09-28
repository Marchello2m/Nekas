<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
<link rel="stylesheet" href="style.css">
<div class="container ">
    <br>

        <div class="row">
            <a href="https://www.weatherapi.com/" title="Free Weather API"><img src='//cdn.weatherapi.com/v4/images/weatherapi_logo.png' alt="Weather data by WeatherAPI.com" border="0"></a>
            <?php foreach($data as $dat):?>

                <div class="main container">
                    <div class="row">
                        <div class="">
                            <div class="">
                                <div class="">
                                    <h2><?php echo $dat->country." ".$dat->region;?><br><small></small></h2>
                                    <h3><?php echo $dat->localtime ;?><br><small></small></h3>
                                    <?php endforeach;?>
                                    <div class="text-center" style="font-size: 44px">
                                    <p ><i></i><a >Temp</a>  <?php echo $dat->temp_c;?>°C</p>
                                    </div>       </div>
                                <div >
                                    <div class="text-center">
                                        <span>Atmosfēras Spiediens <?php echo $dat->pressure_in;?> kPs</span>
                                        <br>

                                    </div>
                                    <div class="text-center">
                                        <div >
                                            <label>Vēja ātrums <?php echo $dat->wind_kph;?> km/h</label>
                                            <br>

                                        </div>
                                        <div class=" text-center">
                                            <div >
                                                <span>Vēja Viriens <?php echo $dat->wind_dir;?></span>
                                                <br>

                                            </div>
                                            <div class=" text-center">
                                                <div >
                                                    <span>Mākoņu daudzums <?php echo $dat->cloud;?> %</span>
                                                    <br>
                                                </div>
                                                </div>
                                            </div>
                                </div>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<br><br>



<h2>Pirmdienas</h2>

<table>
    <tr>
        <td>Vēja ātrums </td>
        <td>Tempretūra</td>

    </tr>
    <?php foreach( $weekly as $weekl):?>
    <tr>
        <td><?php echo $weekl->wind_kph;?></td>
        <td><?php echo $weekl->temp_c;?></td>
    </tr>
    <?php endforeach;?>
</table>


<br><br>
<h2>Otradienas</h2>

<table>
    <tr>
        <td>Vēja ātrums </td>
        <td>Tempretūra</td>

    </tr>
    <?php foreach( $weekly as $weekl):?>
        <tr>
            <td><?php echo $weekl->wind_kph;?></td>
            <td><?php echo $weekl->temp_c;?></td>
        </tr>
    <?php endforeach;?>
</table>


<br><br>

</html>