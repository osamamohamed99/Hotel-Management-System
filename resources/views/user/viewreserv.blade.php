@extends('layouts.app')

@section('content')

@section('stylesheet')
    <style>
      @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
@import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');

h2{float:left; width:100%; color:#fff; margin-bottom:40px; font-size: 14px; position:relartive; z-index:3; margin-top:30px}
h2 span{font-family: 'Libre Baskerville', serif; display:block; font-size:45px; text-transform:none; margin-bottom:20px; margin-top:30px; font-weight:700}
h2 a{color:#fff; font-weight:bold;}

body{background: #24C6DC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #514A9D, #24C6DC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #514A9D, #24C6DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
.head{float:left;width:100%;}
.search-box{width:90%; margin:0 auto 40px;margin-top: 100px;}
.listing-block{background:#fff; height:500px; padding-top:20px; }
.slimScrollDiv{width:41%!important;}
.media {background:#fff; position:relative; margin-bottom:15px;}
.media img{width:200px;margin:0; height:136px;}
.media-body{border:1px solid #bcbcbc; border-left:0; height:136px;}
.media .price{float:left; width:100%; font-size:25px;font-weight:600; color:#4765AB;}
.media .price small{display:block; font-size:17px; color:#232323;}
.media .stats{float:left; width:100%; margin-top:10px;}
.media .stats span{float:left; margin-right:10px; font-size:15px;}
.media .stats span i{margin-right:7px; color:#4765AB;}
.media .address{float:left; width:100%;font-size:14px; margin-top:5px; color:#888;}
.media .fav-box{position:absolute; right:10px; font-size:20px; top:4px; color:#E74C3C;}

.map-box{background-color:#A3CCFF;}

    </style>
@endsection

<div class="container-fluid" >

  


    <div class="row justify-content-center" style="background-color:steelblue">

      <div class="clearfix"></div>
      <section class="search-box">
        <h3 style="text-align: center;margin-bottom: 50px;color: white;font-weight: bold;text-decoration: underline;">My Reservation</h3>
        <div class="row">
            @foreach($results as $re)
              <div class="col-lg-6">
                <div class="media">
                  <div class="fav-box">
                    <form method="POST" action="{{ route('user.delete',$re->id) }}">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger" style="color:red;background: transparent;border:0;"><i class="fa fa-trash"></i></button>
                    </form>
                  </div>
                    <img class="d-flex align-self-start" src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?h=350&auto=compress&cs=tinysrgb">
                    <div class="media-body pl-3">
                      <div class="price">Reservation #{{ $re->id }}</div>
                      <div class="stats">
                          <span><i class="fas fa-hamburger"></i>&nbsp;{{$re->mealplan}}</span>
                          <span><i class="fa fa-bath"></i>&nbsp;{{$re->roomtype}}</span>
                          <span><i class="fa fa-key"></i>&nbsp;Room Id : {{$re->rooms_id}}</span>
                      </div>
                      <div class="stats">
                          <span><i class="fa fa-calendar"></i>&nbsp;{{$re->checkin}}</span>
                          <span style="color: white;background: black;font-size: 9px;padding: 5px;font-weight: bold;">TO</span>
                          <span><i class="fa fa-calendar"></i>&nbsp;{{$re->checkout}}</span>
                      </div>
                    </div>
                  </div>
              </div>
              @endforeach
        </div>
      </section>
        
        
    </div>
</div>

@endsection