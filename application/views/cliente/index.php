<section id="content">

    <div class="container">

        <div class="block-header">
            <h2>Clientes</h2>
        </div>

        <!-- Add button -->
        <button onclick="window.location.href = '../index.php/cliente/inserir'" class="btn btn-float btn-danger m-btn"><i class="zmdi zmdi-plus"></i></button>


        <div class="card">
            <div class="lv-header-alt clearfix m-b-5">
                <!--<h2 class="lvh-label hidden-xs">19,453 Records</h2>-->

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
                        echo "<strong>" . ($cliente->nome === '' ? "Nome não informado" : $cliente->nome)  . "</strong>";
                        echo "<small>" . ($cliente->email === '' ? "Email não informado" : $cliente->email) . "</small>";
                        echo "</div>";
                        echo "<form action='" . base_url() . "index.php/cliente/profile'>";
                        echo "<div class='c-footer'>";
                        echo "<input type='hidden' name='id' value='" . $cliente->id . "' />";
                        echo "<button class='btn-primary'><i class='zmdi zmdi-person-add'></i>Ver</button>";
                        echo "</div>";
                        echo "</form>";
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>                  

                </div>
            </div>
        </div>
    </div>  

</section>

