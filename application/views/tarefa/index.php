<section id="content">
    <div class="container js-container-da-tarefa">
        <div class="col-sm-12">

            <!-- Todo Lists -->
            <div id="todo-lists" style="background: #20B2AA; color: #fff; margin-bottom: 30px; font-family: inherit; box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);">
                <div class="tl-header">
                    <h2>Tarefas</h2>
                    <small>Adicione e edite suas tarefas</small>
                </div>

                <div class="clearfix"></div>

                <div class="tl-body" id="tarefas">
                    <div id="add-tl-item">
                        <i class="add-new-item zmdi zmdi-plus"></i>
                        <div class="add-tl-body">
                            <input type="text" class="input-sm input-lg form-control" id="message" placeholder="Ex: Criar orçamento para o cliente...">
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
                                              echo "<a class='zmdi-delete' href='". base_url() . "index.php/tarefa/excluir?id=". $tarefa->id ."'><i class='zmdi zmdi-delete'></i></a>";
                                          echo "</li";
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