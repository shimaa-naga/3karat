


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
        <li><a href="{{url('/adminpanel/bu/new')}}"><i class="fa fa-circle-o"></i> New Buildings </a></li>
        <li><a href="{{url('/adminpanel/bu')}}"><i class="fa fa-circle-o"></i> All Buildings </a></li>
    </ul>
</li>



{{-- Contact --}}


<li class=" treeview">
    <a href="#">
        <i class="fa fa-envelope-o pull-left"></i> <span>Website Messages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="{{url('/adminpanel/contact/newmessages')}}"><i class="fa fa-envelope"></i> New Messages</a></li>
        <li><a href="{{url('/adminpanel/contact')}}"><i class="fa fa-envelope-square"></i> All Messages</a></li>
    </ul>
</li>