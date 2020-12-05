<ul class="sidebar-menu" data-widget="tree">
   <li class="active ">
     <a href="{{ url('/admin') }}">
      <i class="fa fa-home"></i>
      <span>Accueil</span>
      </a>
  </li>
</ul>
<ul class="sidebar-menu" data-widget="tree">
   <li class="active treeview">
     <a href="#">
      <i class="fa fa-dashboard"></i>
      <span>Parametre de site</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="{{url('/admin/sitesetting')}}"><i class="fa fa-circle-o"></i> Parametres generales</a></li>
      </ul>
  </li>
</ul>



<ul class="sidebar-menu" data-widget="tree">
   <li class="active treeview">
     <a href="#">
      <i class="fa fa-users"></i>
      <span>Gerer les membres</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('admin/users') }}"><i class="fa fa-circle-o"></i> Liste des membres</a></li>
        <li><a href="{{ url('admin/users/create') }}"><i class="fa fa-circle-o"></i> Ajouter un membre</a></li>
      </ul>
  </li>
</ul>

<ul class="sidebar-menu" data-widget="tree">
   <li class="active treeview">
     <a href="#">
      <i class="fa fa-users"></i>
      <span>Gerer les Universite</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('admin/universite') }}"><i class="fa fa-circle-o"></i> Liste des Universites</a></li>
      
      </ul>
  </li>
</ul>