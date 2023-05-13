<!-- Primeira parte -->
<div id="main" class="center">
    <span style="color:#9bbd46">- NAVEGAR -</span>
    <h2>Insira um novo lugar</h2>
</div>

<!-- Segunda parte -->
<div id="insert">
<p> Local </p>
<input type="text" id="nome" class="caixa-de-texto" placeholder="nome...">
</div>
<div id="blast">
    <div class="container">
        <form method="post" action="?i=blast&results">
            <!-- Tipo de blast -->
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default active">
                    <input type="radio" name="tipo" value="p" autocomplete="off" title="BLAST PROTEIN -> PROTEIN" checked> Comum
                </label>
                <label class="btn btn-default">
                    <input type="radio" name="tipo" value="x" autocomplete="off" title="BLAST NUCLEOTIDE -> PROTEIN"> InComum
                </label>
            </div>
            <label> <!-- mostra imagens aqui com um random -->

            </label>
            <div>

            </div>
            <p class="center">
                <br>
                <input type="submit" name="submit" value="Pesquisar" class="btn btn-primary btn-lg">
            </p>



            <?php // Processamento em PHP
            if (isset($_POST['submit'])) {
                $query = addslashes($_POST['query']);
                $tipo = addslashes($_POST['tipo']);
                switch ($tipo) {
                    case 'p':
                        $programa = "blastp";
                        break;

                    case 'x':
                        $programa = "blastx";
                        break;

                    default:
                        $programa = "blastp";
                        break;
                }

                $tmp = fopen("app/data/tmp.fasta", "w");
                fwrite($tmp, ">Query\n" . $query);
                fclose($tmp);

                //Executa blast
                system("cd app/data && ../bin/$programa -query tmp.fasta -subject seq.fasta > results.txt");
                echo "<h1>Resultados ($programa)</h1>";
                $arquivo = file("app/data/results.txt");
                echo "<pre>";
                foreach ($arquivo as $linha) {
                    print $linha;
                }
                echo "</pre>";
            }

            ?>
    </div>
</div>