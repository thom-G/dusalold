@extends('layouts.master')
@section('content')
    <div class="container-fluid _promo">
        <img src="img/promo.jpg">
        <div class="_search_f">
          <div class="col-lg-offset-2 col-lg-8">
            <div class="input-group  input-group-lg">
              <span class="input-group-btn _gr_btn">
                <button type="button" class="_gr_btn btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Шүүлтүүр
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </span>
              <input type="text" class="form-control _search_i" aria-describedby="sizing-addon1" placeholder="Хайх үгээ оруулна уу ...">
              <span class="input-group-btn _gr_btn">
                <button class="_gr_btn btn btn-secondary" type="button">Хайх</button>
              </span>
            </div>
          </div>        
        </div>
        <div class="row _butt_count">
            <div class="col-md-offset-4 col-md-5">
                <span>13</span><label>ЗОХИОГЧИЙН</label> <span>58</span><label>БҮТЭЭЛ БАЙНА.</label>      
            </div>
            <br><br>
            <div class="col-md-offset-5 "><a href="">Дэлгэрэнгүй хайлт</a></div>
        </div>
    </div>
    <div class="container _conwid">
        <div class="row">
            <div class="col-md-8 _context"></div>
            <div class="col-md-4 _rwidget">
                <div class="row">
                    <h4 class="col-md-6">Нэвтрэх хэсэг</h4>
                    <input type="button" class="btn btn-md btn-default col-md-6 _reg_btn" value="Бүртгүүлэх">
                </div><hr>
                <form>
                    <div class="input-group">
                      <span class="input-group-addon " id="basic-addon1">@</span>
                      <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                    </div><br>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">@</span>
                      <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                    </div><br>
                    <div class="row _log_btns">
                        <div>
                            <input type="button" class="col-md-6 btn btn-md btn-info _forg_pa" value="Нууц үг мартсан">
                            <input type="submit" class="col-md-6 btn btn-md btn-primary _log_b" value="Нэвтрэх">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid _supports">
        <div class="row">
            <h3 class="col-md-4 col-md-offset-4">Хамтрагч байгууллагууд</h3>
        </div>
        <div class="row _supp">
            <div class="_osupport col-md-2 col-md-offset-2">
              <div id="hexagon"><img src="img/hexagon-b.png"></div>
            </div>
            <div class="_osupport col-md-2">
              <div id="hexagon"><img src="img/hexagon-b.png"></div>
            </div>
            <div class="_osupport col-md-2">
              <div id="hexagon"><img src="img/hexagon-b.png"></div>
            </div>
            <div class="_osupport col-md-2">
              <div id="hexagon"><img src="img/hexagon-b.png"></div>
            </div>
        </div>
    </div>
@endsection

    {{-- <div class="container-fluid"> --}}

      <!-- Main component for a primary marketing message or call to action -->
      {{-- <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
        </p>
      </div>

    </div> --}} <!-- /container -->

@section('scripts')

@endsection