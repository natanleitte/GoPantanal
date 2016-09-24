<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>Dashboard</h2>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <!-- Todo Lists -->
                <div id="todo-lists" style="color: #fff; margin-bottom: 10px; font-family: inherit; box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);">
                    <div class="tl-header">
                        <h2>Tarefas Pendentes</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="tl-body">
                        <?php
                        foreach ($ultimasTarefas->result() as $tarefa) {
                            echo "<div class='checkbox media' >";
                            echo "<div class='pull-right'>";
                            echo "</div>";
                            echo "<div class='media-body'>";
                            echo "<label>";
                            echo "<span><b>" . $tarefa->nome . "</b> - " . $tarefa->titulo . " - " . date('d/m/Y', strtotime($tarefa->data_ini)) . "</span>";
                            echo "</label>";
                            echo "</div>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <!-- Calendar -->
                <div id="calendar-widget"></div>
            </div>
        </div>
    </div>
</section>
