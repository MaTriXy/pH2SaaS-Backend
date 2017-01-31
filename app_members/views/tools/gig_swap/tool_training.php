<aside id="left-panel">

   <div class="login-info">
      <span>
         <img src="<?= base_url(); ?>assets/img/booster-icon.png" alt="Boosterr" class="img-circle" />
         <span class="nav-hidden">
            Gig Swap
         </span>
      </span>
   </div>

   <nav>
      <ul>
         <li class="nav-hidden">
            <strong>Actions</strong>
         </li>
         <li>
            <a href="<?= base_url(); ?>tools/gig-swap"><i class="fa fa-lg fa-fw fa-exchange"></i> <span class="menu-item-parent">Swap a Gig</span></a>
         </li>
         <li>
            <a href="<?= base_url(); ?>tools/gig-swap/my-swaps"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">My Swaps</span></a>
         </li>
         <li>
            <a href="<?= base_url(); ?>tools/gig-swap/to-purchase"><i class="fa fa-lg fa-fw fa-shopping-cart"></i> <span class="menu-item-parent">To Purchase</span></a>
         </li>
         <li class="active">
            <a href="<?= base_url(); ?>tools/gig-swap/tool-training"><i class="fa fa-lg fa-fw fa fa-graduation-cap"></i> <span class="menu-item-parent">Tool Training</a>
         </li>
         <?php $this->load->view('quick_links'); ?>
      </ul>
   </nav>

   <span class="minifyme" data-action="minifyMenu">
      <i class="fa fa-arrow-circle-left hit"></i>
   </span>

</aside>

<div id="main" role="main">

   <div id="ribbon">
      <ol class="breadcrumb">
         <li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i></a></li>
         <li><a href="<?= base_url(); ?>tools">Tools</a></li>
         <li><a href="<?= base_url(); ?>tools/gig-swap">Gig Swap</a></li>
         <li>Tool Training</li>
      </ol>
   </div>

   <div id="content">

      <section id="widget-grid" class="">

         <div class="row">
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="jarviswidget" id="wdg-gs-training" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-sortable="false">
                  <header>
                     <span class="widget-icon"> <i class="fa fa-exchange"></i> </span>
                     <h2>Gig Swap Training</h2>

                  </header>
                  <div>
                     <div class="widget-body">

                        <br><br>
                        <h1 class="text-center">Video Here</h1>
                        <br><br>

                     </div>
                  </div>

               </div>
            </article>
         </div>

      </section>

   </div>

</div>