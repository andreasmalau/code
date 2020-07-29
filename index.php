<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style>
      img{
    width: 80px;
    height: 80px;
}

.jumbotron{
    background-image: url(img/corona.jpg);
    background-size: cover;
    width: 100%;
    height: 340px;
    position: relative;
}

.jumbotron .display-4{
    font-size: 20px;
    z-index: 1;
    font-weight: bold;
}

.jumbotron p{
    font-size: 15px;
    z-index: 1;
}



.jumbotron::after{
    content: '';
    display: block;
    position: absolute;
    background-image: linear-gradient(to top, rgba(0,0,0,1), rgba(0,0,0,0));
    height: 340px;
    width: 100%;
    bottom: 0;
}

.panel{
    margin-top: -80px;
}

.bd{
    border-radius: 40px;
    box-shadow: 0 10px 100px rgba(0, 0, 0, 0.5);
    color: white;
    margin-bottom: 10px;
    margin-right: 10px;
    margin-left: 10px;
    padding-top: 30px;
}




@media (min-width: 992px) {

.jumbotron{
    height: 440px;
}

.jumbotron .display-4{
    font-size: 50px;
    font-weight: 200;
}

.jumbotron p{
    font-size: 30px;
    z-index: 1;
}

.bd{
    margin-bottom: 30px;
}

}
    </style>
    <!-- CSS -->
    
    <title>Info Corona</title>
  </head>
  <body>

<!-- JUMBOTRON -->
  <div class="jumbotron jumbotron-fluid bg-success text-white">
  <div class="container text-center">
    <h1 class="display-4">Update Informasi COVID-19 Di-Indonesia<br>Secara Realtime</h1>
    <p class="lead mt-5 capt">Berikut data Covid-19 di-Indonesia</p>
    <img src="img/indonesia.svg" alt="">
  </div>
</div>

<!-- Akhir Jumbotron -->

    
    <!-- PANEL -->
    <div class="container panel">
    <div class="row justify-content-center">
    <div class="col-12 padd">
        <div class="row bd">
        <div class="col-lg bg-danger bd">
        <img src="img/sad.svg" alt="" class="float-left mr-5">
        <h4 class="">Positif</h4>
        <p id="data-positif">12345</p>
        <p>Orang</p>
        </div>
        <div class="col-lg bg-success bd">
        <img src="img/happy.svg" alt="" class="float-left mr-5">
        <h4>Sembuh</h4>
        <p id="data-sembuh">12345</p>
        <p>Orang</p>
        </div>
        <div class="col-lg bg-dark bd">
        <img src="img/cry.svg" alt="" class="float-left mr-5">
        <h4>Meninggal</h4>
        <p id="data-meninggoy">12345</p>
        <p>Orang</p>
        </div>
        </div>
    </div></div></div>
    




  


<div class="footer text-center">
<a href="#" class="badge badge-success">&copy; 2020 Info Corona by Andreas Malau</a>
</div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

<script>

$(document).ready(function(){

    datanegara();

    function datanegara(){
        $.ajax({
            url : 'https://coronavirus-19-api.herokuapp.com/countries',
            success:function(data){
            try {
                
                var json = data;
                var html = [];
                
                if (json.lenght > 0){
                    var 1;

                    for (i=0; i<json.lenght; i++){
                        var datanegara = json[i];
                        var datanegara = datanegara.county;

                        if(namanegara==='Indonesia'){
                            var kasus= datanegara.cases;
                            var mati = datanegara.deaths;
                            var sembuh = datanegara.recovered;
                                $('#data-positif').html(kasus);
                                $('#data-sembuh').html(sembuh);
                                $('#data-meninggoy').html(mati);

                            
                        }
                    }
                }
            } catch 
            {
                alert('ERROR');
            }
            }
        });
    }
});

</script>