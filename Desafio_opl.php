<div class="titulo">Desafio Operadores Logicos</div>


<!-- 
    Dois Trabalhos -> terça e quinta!
    -Se os dois forem executado -> TV 50' e Sorvete
    -Se apenas um for executado -> Tv 32' e Sorvete
    - Se nenhum for executado -> Fica em casa é mais saudável
-->

<form action="#" method="post">
    <div>
        <label for = "t1"> Trabalho 1 (terça):</label>
        <select name="t1" id = "t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for = "t1"> Trabalho 2 (quinta):</label>
        <select name="t2" id = "t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select { 
        font-size: 1.8rem;
    }

</style>

<?php
//echo $_POST['t1'];
//echo $_POST['t2'];

echo '<br>';
if($_POST['t1'] == true && $_POST['t2'] == true ){ 
    echo 'TV 50º e Sorvete';
}
elseif($_POST['t1'] == true xor $_POST['t2'] == true){ 
    echo 'TV 32º e Sorvete';
}
elseif($_POST['t1'] == false && $_POST['t2'] == false) { 
    echo 'Fica em casa é mais saúdavel';
}
echo '<hr>'
?>