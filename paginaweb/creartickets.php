<?php

$conexion = mysqli_connect("localhost", "mymisticke7b", "aSW43LqM","creartickets");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    

    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    font-family: 'Roboto', sans-serif;
}

body{
    background-image: url(bg4.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}

main{
    width: 100%;
    padding: 20px;
    margin: auto;
    margin-top: 100px;
}

.contenedor__todo{
    width: 100%;
    max-width: 800px;
    margin: auto;
    position: relative;
}

.caja__trasera{
    width: 100%;
    padding: 10px 20px;
    display: flex;
    justify-content: center;
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    background-color: rgba(0, 128, 255, 0.5);

}

.caja__trasera div{
    margin: 100px 40px;
    color: white;
    transition: all 500ms;
}


.caja__trasera div p,
.caja__trasera button{
    margin-top: 30px;
}

.caja__trasera div h3{
    font-weight: 400;
    font-size: 26px;
}

.caja__trasera div p{
    font-size: 16px;
    font-weight: 300;
}

.caja__trasera button{
    padding: 10px 40px;
    border: 2px solid #fff;
    font-size: 14px;
    background: transparent;
    font-weight: 600;
    cursor: pointer;
    color: white;
    outline: none;
    transition: all 300ms;
}

.caja__trasera button:hover{
    background: #fff;
    color: #46A2FD;
}

/*Formularios*/

.contenedor__login-register{
    display: flex;
    align-items: center;
    width: 100%;
    max-width: 380px;
    position: relative;
    top: -185px;
    left: 10px;

    /*La transicion va despues del codigo JS*/
    transition: left 500ms cubic-bezier(0.175, 0.885, 0.320, 1.275);
}

.contenedor__login-register form{
    width: 100%;
    padding: 80px 20px;
    background: white;
    position: absolute;
    border-radius: 20px;
}

.contenedor__login-register form h2{
    font-size: 30px;
    text-align: center;
    margin-bottom: 20px;
    color: #46A2FD;
}

.contenedor__login-register form input{
    width: 100%;
    margin-top: 20px;
    padding: 10px;
    border: none;
    background: #F2F2F2;
    font-size: 16px;
    outline: none;
}

.contenedor__login-register form button{
    padding: 10px 40px;
    margin-top: 40px;
    border: none;
    font-size: 14px;
    background: #46A2FD;
    font-weight: 600;
    cursor: pointer;
    color: white;
    outline: none;
}




.formulario__login{
    opacity: 1;
    display: block;
}
.formulario__register{
    display: none;
}



@media screen and (max-width: 850px){

    main{
        margin-top: 50px;
    }

    .caja__trasera{
        max-width: 350px;
        height: 300px;
        flex-direction: column;
        margin: auto;
    }

    .caja__trasera div{
        margin: 0px;
        position: absolute;
    }


    /*Formularios*/

    .contenedor__login-register{
        top: -10px;
        left: -5px;
        margin: auto;
    }

    .contenedor__login-register form{
        position: relative;
    }
}


header{
	background-color: #f2f2f2;
	text-align: center;
	padding: 25px;
}
nav a{
	display: inline-block;
	text-decoration: none;
	color: #696969;
	margin: 0 30px;
	padding: 5px 15px;
	border-radius: 30px;
}
nav a:hover {
	background-color: #000;
	color: #fff;
}
.encabezado-img{

	background-size: cover;
	height: 450px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	color: #fff;
}
.encabezado-img p{
	font-size: 18px;
}
.encabezado-img h1{
	font-size: 50px;
	padding: 15px 0;

}


#sobremi:before,
#portfolio:before,
#blog:before,
#contacto:before{
  position: absolute;
  content: " ";
  display: block;
  height: 166px;
  margin-top: -166px;
  padding-top: -166px;
  visibility: hidden;
  position: relative;
}
.sobremi{
 text-align: center;
 background-color: grey;
}
.titulo-seccion{
  font-size: 60px;
  font-family: 'BazarMedium';
  text-transform: uppercase;
  color: #f6edd8;
  text-align: center;
  text-shadow: 1px 2px #fcfaf7, 3px 4px #484a4d;
}
.separador{
  font-size: 22px;
  text-align: center;
  line-height: 22px;
  margin: 5px 0;
}
.separador span{
  position: relative;
  display: inline-block;
}
.separador span:before{
  right: 100%;
  margin-right: 8px;
}
.separador span:before, .separador span:after{
  content: " ";
  position: absolute;
  height: 6px;
  border-bottom: 2px solid #f6edd8;
  top: 5px;
  width: 40px;
}
.separador span:after{
  left: 100%;
  margin-left: 8px;
}
.subtitulo-seccion{
  text-transform: uppercase;
  text-align: center;
  font-size: 16px;
  font-family: 'Oswald';
}
.sobremi .fila{
  
  position: relative;
 
}
.sobremi .fila .item{
  padding: 0 10px;
}

.sobremi .fila .item h4{
  margin: 10px 0;
  text-align: center;
  font-family: 'BazarMedium';
  font-size: 27px;
  color: #f6edd8;
}
.sobremi .fila .item .texto{
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  margin-bottom: 10px;
  font-family: 'Roboto Slab';
  color: #f6edd8;
}
.sobremi .fila .item hr{
  border: none;
  background-color: #f6edd8;
  height: 3px;
  width: 40px;
  margin: 0 auto 10px auto;
}
.sobremi .fila .item p{
  font-family: 'Roboto Slab';
  font-size: 20px;
  color: #f6edd8;
}



.contacto{
    
    padding: 30px 0;
    position: relative;
    color: #f6edd8;
  }
  .claro-titulo{
    color: #f6edd8;
    text-align: center;
    text-shadow: 1px 2px #484a4d, 3px 4px #fcfaf7;
  }
  .claro span:before, .claro span:after{
    border-bottom: 2px solid #f6edd8;
  }
  .claro-txt{
    color: #f6edd8;
  }

.contacto .formulario{
    max-width: 480px;
    margin: auto;
  }
  .contacto .formulario input, .contacto .formulario textarea{
    font-weight: 400;
    width: 100%;
    padding: 8px;
    color: #383a3c;
    border: none;
    border-radius: 3px;
    margin-bottom: 10px;
    font-family: 'Roboto Slab';
    font-size: 16px;
    outline: none;
  }
  .contacto button{
    display: inline-block;
    padding: 4px 16px;
    margin-bottom: 4px;
    color: #383a3c;
    background-color: #fcfaf7;
    font-family: 'Roboto Slab';
    border: none;
    border-radius: 3px;
    font-size: 16px;
    cursor: pointer;
  }
  .contacto h5{
    text-align: center;
    font-family: 'BazarMedium';
    text-transform: uppercase;
    font-size: 24px;
    margin: 20px 0;
  }
  .contacto .redes{
    text-align: center;
    display: flex;
    justify-content: center;
  }
  .contacto .redes a{
    transition: .5s;
    display: block;
    font-size: 45px;
    width: 80px;
    height: 80px;
    text-align: center;
    border-radius: 50%;
    color: #383a3c;
    background-color: #f5eee3;
    box-shadow: inset 0 0 0 2px #f5eee3, inset 0 0 0 4px #383a3c;
    margin: 0 7px;
    position: relative;
    bottom: 0;
  }

  .contacto .redes a:hover{
    bottom: 10px;
  }
    </style>
</head>
<body>

<header>
		<nav>
			<a href="principal.html">Inicio</a>
			<a href="principal.html">Servicios</a>
			<a href="tickets.php">Tickets</a>
			<a href="#contact">Contáctanos</a>
		</nav>
	</header>

  <div id="sobremi"></div>
        <section class="sobremi">
            <div class="contenido-seccion">
                <h2 class="titulo-seccion">CREAR TICKETS</h2>

                <div class="separador">
                    <span>&#215;&#215;&#215;</span>
                </div>

        
        </div>

           <form action="operacion_guardar.php" method="POST">
                <label for="titulo">Escribe nombre de empresa:</label>
                <input type="text" id="titulo" name="titulo"><br>

                <label for="estado">Selecciona estado:</label><br>
                <input type="radio" id=urgente name="estado" value="urgente">
                <label for="urgente">Urgente</label>
                <input type="radio" id=espera name="estado" value="espera">
                <label for="espera">En espera</label>
                <input type="radio" id=noi name="estado" value="noi">
                <label for="noi">No importante</label>

                <br>
                <label for="fecha">Escribe la fecha de hoy:</label>
                <input type="date" id="fecha" name="fecha"><br>
                <label for="solicitante">Escribe nombre de solicitante:</label>
                <input type="text" id="solicitante" name="solicitante"><br>

                <label for="categoria">Selecciona categoría:</label><br>
                <input type="radio" id=urgente name="categoria" value="hardware">
                <label for="urgente">Hardware</label>
                <input type="radio" id=espera name="categoria" value="software">
                <label for="espera">Software</label>
                <input type="radio" id=noi name="categoria" value="otro">
                <label for="noi">Otro</label><br>

                <label for="descripcion">Escribe una descripción</label><br>
                <textarea name="descripcion" id="descripcion" cols="20" rows="5"></textarea><br>
                <button>Subir ticket</button>

           </form>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>
