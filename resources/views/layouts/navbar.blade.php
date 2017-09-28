<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">User</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-dashboard"></i>
        <p class="hidden-lg hidden-md">Dashboard</p>
                    </a>
                </li>
                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-globe"></i>
                            <b class="caret hidden-sm hidden-xs"></b>
                            <span class="notification hidden-sm hidden-xs">5</span>
          <p class="hidden-lg hidden-md">
            5 Notifications
            <b class="caret"></b>
          </p>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Notification 1</a></li>
                        <li><a href="#">Notification 2</a></li>
                        <li><a href="#">Notification 3</a></li>
                        <li><a href="#">Notification 4</a></li>
                        <li><a href="#">Another notification</a></li>
                      </ul>
                </li>
                <li>
                    <p style="padding-top: 14px">
                        <form method="get" action="{{ route("contacts.index") }}">
                          <div class="form-group has-success has-feedback">
                          <div class="input-group">
                                <span class="input-group-addon">Search Contacts
                                <i class="fa fa-search"></i></span>
                                <input name="term" value="{{Request::get("term")}}" type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" placeholder="E.g. Amin Khoshzahmat">
                          </div>
                         </div>
                        </form>
                    </p>
                </li>
            </ul>
 
                <ul class="nav navbar-nav navbar-right">
                <li>
                   <a href="/contacts/create" class="btn btn-default">
                       <p><i class="pe-7s-plus"></i> Account</p>
                    </a>
                </li>
                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <p>
            Dropdown
            <b class="caret"></b>
          </p>

                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                </li>
                <li>
                    <a href="#">
                        <p>Log out</p>
                    </a>
                </li>
    <li class="separator hidden-lg hidden-md"></li>
            </ul>
        </div>
    </div>
</nav>