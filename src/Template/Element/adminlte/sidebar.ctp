<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <?php
            echo $this->Html->image(
                'TwitterBootstrap.user2-160x160.jpg',
                ['class'=>'img-circle',  "alt"=>"User Image"]
            );
        ?>
    </div>
    <div class="pull-left info">
      <p>Lorelei Lourenço</p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- search form (Optional) -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Pesquisar...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form>
  <!-- /.search form -->

  <!-- Sidebar Menu -->
  <?php
	if($group == '' || $loguser == 'manager'){
		include 'teste.ctp';
	}else{
		include 'menu/'.$group.'.ctp';
	}
  ?>
  
  <ul class="sidebar-menu">
    <li class="header">---------------</li>
    <!-- Optionally, you can add icons to the links -->
	<li class="treeview">
      <a href="#"><i class="fa fa-plus"></i> <span>Outras opções</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o  text-blue"></i> Mural de avisos</a></li>
		<li><a href="#"><i class="fa fa-circle-o text-red"></i> Carregar módulos</a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Ajuda</a></li>
		<li><?= $this->Html->link(__('Sair'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
      </ul>
    </li>   
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->