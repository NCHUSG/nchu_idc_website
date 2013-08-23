<style type="text/css">
  body {
    margin-top: 41px;
  }

  #bs_nav_menu {
    z-index:1;
  }

  #bs_nav_btn {
    z-index:2;
  }  
</style>

<div id="bs_nav">
  <div id="bs_nav_menu" class="navbar navbar-inverse navbar-fixed-top hide">
    <div class="navbar-inner">
      <div class="container">
   
        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        
        <!-- Be sure to leave the brand out there if you want it shown -->
        <ul class="nav pull-left">

          <li><a id="bs_nav_hide" class="brand" >NCHUSG</a></li>
          <li><a href="#">Main</a></li>
          <li><a href="#">Team</a></li>
          <li><a href="#">News</a></li>
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              App
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">學生權益申訴系統</a></li>
              <li><a href="#">海報欄位申請系統</a></li>
              <li class="divider"></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">學生會幹部權限</a>
                <ul class="dropdown-menu">
                  <li><a href="#">會費繳費狀況查詢</a></li>
                  <li><a href="#">會產借用系統</a></li>
                </ul>
                
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Activity
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">三合一選舉</a></li>
              <li><a href="#">新生盃球類競賽</a></li>
              <li><a href="#">黑天鵝盃電競賽</a></li>
            </ul>
          </li>
          <li><a href="http://www.sg.nchu.edu.tw/wiki" target="_blank">Wiki</a></li>
          <li><a href="#">Weekly</a></li>
          <li><a href="https://www.facebook.com/nchusg" target="_blank">Page</a></li>
        </ul>

        <ul class="nav pull-right">
          <li><a id="login_btn" href="login" data-toggle="modal">Login</a></li>
        </ul>

        <!-- Everything you want hidden at 940px or less, place within here -->
        <div class="nav-collapse collapse">
          
          
          <!-- .nav, .navbar-search, .navbar-form, etc -->
        </div>
   
      </div>
    </div>
  </div>

  <div id="bs_nav_btn" style="position:fixed; left:3px; top:0px;">
    <img width="40" src="http://www.sg.nchu.edu.tw/favicon.ico" />
  </div>

  <div id="bs_nav_login" class="modal hide fade">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h3>Login / 登入</h3>
    </div>
    <form class="form-horizontal">
      <div class="modal-body">
        <div class="control-group">
           <label class="control-label" for="inputEmail">帳號</label>
          <div class="controls">
            <input id="inputEmail" type="text" />
          </div>
        </div>
        <div class="control-group">
           <label class="control-label" for="inputPassword">密碼</label>
          <div class="controls">
            <input id="inputPassword" type="password" />
          </div>
        </div>        
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-primary">送出</a>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
  $("#bs_nav_btn").click(function(){
     $('#bs_nav_menu').toggle('slow');
  });

  $("#login_btn").click(function(){
     $('#bs_nav_login').modal('show')
  });  


</script>
