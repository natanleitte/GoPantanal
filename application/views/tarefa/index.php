<section id="content">
    <div class="container">
        <div class="col-sm-12">

            <!-- Todo Lists -->
            <div id="todo-lists" style="background: #20B2AA; color: #fff; margin-bottom: 30px; font-family: inherit; box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);">
                <div class="tl-header">
                    <h2>Tarefas</h2>
                    <small>Adicione e edite suas tarefas</small>
                    <ul class="actions actions-alt">
                        <li class="dropdown">
                            <a href="" data-toggle="dropdown">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="">Refresh</a>
                                </li>
                                <li>
                                    <a href="">Manage Widgets</a>
                                </li>
                                <li>
                                    <a href="">Widgets Settings</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="clearfix"></div>

                <div class="tl-body" id="tarefas">
                    <div id="add-tl-item">
                        <i class="add-new-item zmdi zmdi-plus"></i>

                        <div class="add-tl-body">
                            <div class="fg-line">
                                <input type="text" class="input-sm input-lg form-control" id="message" placeholder="Ex: Criar orçamento para o cliente...">
                            </div>
                            <input type="hidden" id="base_url" value="<?php echo base_url(); ?>"/>
                            <div class="add-tl-actions">
                                <a href="" data-tl-action="dismiss"><i class="zmdi zmdi-close"></i></a>
                                <a href="" data-tl-action="save"><i class="zmdi zmdi-check"></i></a>
                            </div>
                        </div>
                    </div>

                    <?php
                       foreach ($tarefas->result() as $tarefa) {
                           echo "<div class='checkbox media' >";
                           echo "<div class='pull-right'>";
                           echo "<ul class='actions actions-alt'>";
                           echo "<li class='dropdown'>";
                           echo "<a href='' data-toggle='dropdown'>";
                           echo "<i class='zmdi zmdi-more-vert'></i>";
                           echo "</a>";

                           echo "<ul class='dropdown-menu dropdown-menu-right'>";
                           echo "<li><a href='". base_url() . "index.php/tarefa/excluir?id=". $tarefa->id ."'>Delete</a></li>";
                           echo "<li><a href=''>Archive</a></li>";
                           echo "</ul>";
                           echo "</li>";
                           echo "</ul>";
                           echo "</div>";
                           echo "<div class='media-body'>";
                           echo "<label>";
                           echo "<input id='" . $tarefa->id . "' class='js-tarefa-cadastrada' type='checkbox'>";
                           echo "<i class='input-helper'></i>";
                           echo "<span>" . $tarefa->titulo . "</span>";
                           echo "</label>";
                           echo "</div>";
                           echo "</div>";
                       }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>