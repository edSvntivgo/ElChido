<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesion</title>
	{!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    <script src="https://use.fontawesome.com/9f31dcd63f.js"></script>
	
</head>
<body>
 <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">PreFlix</a>
            </div>
           

        

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{!!URL::to('/quien')!!}"><i class="fa fa-eye"></i>  Quienes somos</a>
                            
                        </li>
                        <li>
                            <a href="{!!URL::to('/obten')!!}"><i class="fa fa-credit-card"></i>  Como obtener tu cuenta</a>
                        </li>

                        <li>
                            <a href="{!!URL::to('/social')!!}"><i class="fa fa-handshake-o"></i>  Redes Sociales</a>
                        </li>

                    </ul>
                </div>
            </div>

     </nav>
      <div id="page-wrapper" style="background-image: url('images/bac.png'); color: white;">
      
            {!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
                <h3>{!!Form::label('Inicio de Session')!!}</h3>
                {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'example@examp.com'])!!}
                {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa Password'])!!}
                {!!Form::submit('Iniciar',['class'=>'btn btn-primary form-control'])!!}
            {!!Form::close()!!}
            @include('alerts.errors')
      @include('alerts.request')
        </div>
    </div>

    </div>


    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}
</body>
</html>