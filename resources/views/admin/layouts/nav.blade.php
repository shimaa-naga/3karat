


<li class=" treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i> <span>Site Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="{{url('/adminpanel/sitesetting')}}"><i class="fa fa-circle-o"></i> Main Setting</a></li>
        <li><a href="index2.html"><i class="fa fa-circle-o"></i> Other Setting</a></li>
    </ul>
</li>


{{-- users --}}


<li class=" treeview">
    <a href="#">
        <i class="fa fa-users pull-left"></i> <span>Controll in Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="{{url('/adminpanel/users/create')}}"><i class="fa fa-circle-o"></i> Add User </a></li>
        <li><a href="{{url('/adminpanel/users')}}"><i class="fa fa-circle-o"></i> All Users </a></li>
    </ul>
</li>



{{-- Buildings --}}


<li class=" treeview">
    <a href="#">
        <i class="fa fa-users pull-left"></i> <span>Controll in Buildings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="{{url('/adminpanel/bu/create')}}"><i class="fa fa-circle-o"></i> Add Building </a></li>
        <li><a href="{{url('/adminpanel/bu')}}"><i class="fa fa-circle-o"></i> All Buildings </a></li>
    </ul>
</li>