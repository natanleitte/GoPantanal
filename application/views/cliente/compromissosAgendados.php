<div class="card-body card-padding">                     
    <?php
    foreach ($tarefas->result() as $tarefa) {
        if ($tarefa->id_cliente === $cliente->id) {
            echo "<div class='p-timeline'>";
            echo "<div class='pt-line c-gray text-right'>";
            echo "<span class='d-block'>" . date('Y', strtotime($tarefa->data_ini)) . "</span>";
            echo date('d/M', strtotime($tarefa->data_ini));
            echo "</div>";
            echo "<div class='pt-body'>";
            echo "<div class='lightbox clearfix'>";
            echo "<h2 class='ptb-title'>" . $tarefa->descricao . "</h2>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    }
    ?>
</div>