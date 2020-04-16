<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu" data-widget="tree">
            <div align="center">
                <span class="logo-mini"></span>
            </div>
            <li align="center" class="header"><?php echo GRUPO ?></li>

<?php foreach ($menu_navegacion as $item_menu => $menu) { ?>
    <?php
        if ( CONTROLADOR == $menu_navegacion[$item_menu][0]){
            echo '<li class="active treeview">';
        }
        else{
            echo '<li class="treeview">';
        }
    ?>
                <a href="#">
                    <i class="<?php echo $menu_navegacion[$item_menu][1]; ?>"></i>
                    <span><?php echo $menu_navegacion[$item_menu][2]; ?></span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <?php
                        foreach ($menu as $metodo){
                            if ( is_array($metodo) ){
                                ?>
                                <li class="">
                                    <a href="<?php
                                        echo get_url($menu_navegacion[$item_menu][0],
                                            $metodo['metodo'],SESSION_ID);
                                    ?>">
                                        <?php
                                            if ($metodo['metodo'] == METODO && CONTROLADOR == $menu_navegacion[$item_menu][0]){
                                                echo '<i class="fa fa-circle"></i>';
                                            }
                                            else{
                                                echo '<i class="fa fa-circle-o"></i>';
                                            }
                                        ?>
                                        <?php echo $metodo['label']; ?>
                                    </a>
                                </li>
                    <?php
                            } // end if
                        }// end foreach ($menu as $metodo)
                    ?>
                </ul>
            </li>
<?php } // fin del for menu_navegacion ?>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>