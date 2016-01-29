<section id="content">

    <div class="container">

        <div class="block-header">
            <h2>Clientes<small>Manage your contact information</small></h2>

            <ul class="actions m-t-20 hidden-xs">
                <li class="dropdown">
                    <a href="" data-toggle="dropdown">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="">Privacy Settings</a>
                        </li>
                        <li>
                            <a href="">Account Settings</a>
                        </li>
                        <li>
                            <a href="">Other Settings</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Add button -->
        <button onclick="window.location.href='../index.php/cliente/inserir'" class="btn btn-float btn-danger m-btn"><i class="zmdi zmdi-plus"></i></button>


        <div class="card">
            <div class="lv-header-alt clearfix m-b-5">
                <h2 class="lvh-label hidden-xs">19,453 Records</h2>

                <div class="lvh-search">
                    <input type="text" placeholder="Start typing..." class="lvhs-input" id="busca">

                    <i class="lvh-search-close">&times;</i>
                </div>

                <ul class="lv-actions actions">
                    <li>
                        <a href="" class="lvh-search-trigger">
                            <i class="zmdi zmdi-search"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="zmdi zmdi-time"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                            <i class="zmdi zmdi-sort"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="">Last Modified</a>
                            </li>
                            <li>
                                <a href="">Last Edited</a>
                            </li>
                            <li>
                                <a href="">Name</a>
                            </li>
                            <li>
                                <a href="">Date</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="zmdi zmdi-info"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="" data-toggle="dropdown"="" aria-expanded="false" aria-haspopup="true">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="">Refresh</a>
                            </li>
                            <li>
                                <a href="">Settings</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>


            <div class="card-body card-padding">

                <div class="contacts clearfix row" id="clientes">

                    <?php
                       foreach ($clientes->result() as $cliente) {
                           echo "<div class='col-md-2 col-sm-4 col-xs-6' id='" . $cliente->id . $cliente->nome . "'>";
                           echo "<div class='c-item'>";
                           echo "<a href='" . base_url() . "index.php/cliente/profile?id=" . $cliente->id . "' class='ci-avatar'>";
                           echo "<img src='" . base_url() . "assets/img/contacts/anonimo.png' alt=''>";
                           echo "</a>";

                           echo "<div class='c-info'>";
                           echo "<strong>" . $cliente->nome . "</strong>";
                           echo "<small>" . $cliente->email . "</small>";
                           echo "</div>";

                           echo "<div class='c-footer'>";
                           echo "<button class='waves-effect'><i class='zmdi zmdi-person-add'></i> Add</button>";
                           echo "</div>";
                           echo "</div>";
                           echo "</div>";
                       }
                    ?>                  

                </div>

                <div class="load-more">
                    <a href=""><i class="zmdi zmdi-refresh-alt"></i> Load More...</a>
                </div>
            </div>
        </div>
    </div>  

</section>

