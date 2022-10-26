<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguro Saúde</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #142136;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.9);
            padding: 40px;
			margin: 30px;
            border-radius: 15px;
            width: 30%;
        }

        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
			font-size: 30px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-color: dodgerblue;
            width: 100%;
			margin: 0 auto;
            border: none;
            padding: 15px;
            color: white;
            font-size: 20px;
            cursor: pointer;
            border-radius: 10px;
		}
        #submit:hover{
            background-color: deepskyblue;
        }
		.faixa{
			width: 110px;
			color: white;
			background-color: black;
			font-family: Arial;
			font-size: 15px;
		}

    </style>
</head>
<body>
	<br><br>
    <div class="box">
        <form action="dados.php" method="POST">
            <div>
                <legend><b>Seguro Saúde</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
				<div>
					<select class="faixa" name="idade" required>
						<option>Faixa etária:</option>
						<option value="1">20 ou menos</option>
						<option value="2">21 a 30</option>
						<option value="3">31 a 41</option>
						<option value="4">41 a 50</option>
						<option value="5">51 a 65</option>
						<option value="6">66 ou mais</option>
					</select>
				</div>
				<br>
                <p>Portador de doença prévia:</p>
                <input type="radio" id="sim" name="doenca" value="sim" >
                <label>Sim</label>
                <input type="radio" id="nao" name="doenca" value="nao" >
                <label>Não</label>
                <br><br>
                <button type="submit" name="submit" id="submit">Calcular valor do Seguro Saúde</button>
            </div>
        </form>

    </div>
</body>
</html>