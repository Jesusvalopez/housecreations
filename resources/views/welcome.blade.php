@extends('layouts.app')

@section('title', "HouseCreations") 


@section('content') 


<!-- === MAIN Background === -->
	<section id="home" class="slide story">
		<div class="container">
			<div id="home-row-1" class="row clearfix">
				<div class="col-12">
                    
					<h1 class="wow bounceInDown rotate"  data-wow-delay="0.5s"><span class="font-thin">HOUSE CREATIONS</span></h1>
                  <div class="row line-row">
				<div class="hrhome wow fadeIn" data-wow-delay="1s">&nbsp;</div>
			</div><!-- /row -->
					<h4 class="font-thin wow bounce"  data-wow-delay="0.8s">Desarrollando<span class="font-semibold"> soluciones</span></h4>
					
				</div><!-- /col-12 -->
			</div><!-- /row -->
			<div id="home-row-2" class="row clearfix">
			
            <div class="col-12 col-sm-12 "><div class="wow bounceIn home-hover"><a class="smoothScroll" href="#intro"><img src="images/abajo.png"></a></div></div>
				
			</div><!-- /row -->
		</div><!-- /container -->
	</section><!-- /slide1 -->



 @include('layouts.partials.nav') 


<!-- === Slide 2 === -->
	<section id="intro" class="slide story" data-slide="2">
		<div class="container" >
		
			<div class="row title-row">
				<div class="col-12 font-thin">Desarrollamos soluciones <span class="font-semibold">inteligentes</span> para tu negocio.
                </div>
			
        </div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div>
			
			
			<div class="row content-row">
			<div class="col-md-4 col-sm-6">
      <div class="plan wow bounceInLeft" data-wow-delay="0.3s">
        <div class="plan_title">
        <p><i class="icon icon-laptop"></i></p>
					<h2 class="font-thin">Páginas <span class="font-semibold">estáticas</span></h2>
        </div>
        <div class="plan_sub_title">
          <p>Ideal para personas y empresas que quieren tener su espacio en la red</p>
           </div>
        <ul>
          <li>3 CUERPOS</li>
          <li>BLABLA</li>
          <li>BLABLA</li>
        </ul>
        <button class="btn btn-warning">Cotizar</button>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="plan wow fadeIn" data-wow-delay="0.6s">
        <div class="plan_title">
          <p><i class="icon icon-tablet"></i></p>
					<h2 class="font-thin">Páginas <span class="font-semibold">dinámicas</span></h2>
        </div>
        <div class="plan_sub_title">
          <p>¿Siempre tienes nuevo contenido para mostrar? Nuestras páginas autogestionables son para ti</p> </div>
        <ul>
          <li>BASES DE DATOS</li>
          <li>GALERIA DE IMAGENES</li>
          <li>BLABLA</li>
        </ul>
        <button class="btn btn-warning">Cotizar</button>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="plan wow bounceInRight" data-wow-delay="0.3s">
        <div class="plan_title">
         <p><i class="icon icon-shopping-cart"></i></p>
					<h2 class="font-thin">Tiendas<span class="font-semibold"> online</span></h2>
        </div>
        <div class="plan_sub_title">
          <p>De el salto al e-commerce y comience a llegar a más clientes</p> </div>
        <ul>
          <li>CARRITO DE COMPRAS</li>
          <li>PAGOS CON TDC</li>
          <li>100% AUTOGESTIONABLE</li>
        </ul>
        <button class="btn btn-warning">Cotizar</button>
      </div>
    </div>
            </div>
			
		</div><!-- /container -->
       
	</section><!-- /slide2 -->
	
	<!-- === SLide 3 - Portfolio -->
    
   
    
                                  
                    
                                    
	<section class="slide story" id="portafolio" data-slide="3">
        
        
        <div class="container">
        
        <div class="col-md-12 col-sm-12 col-xs-12 card">
        
		<div class="row title-row">
            	<div class="col-13 font-thin">Nuestro trabajo</div>
            	
           </div>
           <div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div>
            <div class="col-md-12 col-sm-12"></div>
            
            
          
            
            <div class="center-portfolio">
			
			
			@foreach($portafolios as $portafolio)
			<!-- Modal -->
                   
      <div class="modal fade" id="myModal_{{$portafolio->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						         
						          <a href="http://{{$portafolio->url}}"><h4 class="modal-title">{{$portafolio->name}}</h4></a>
						        </div>
						        <div class="modal-body">
						          <p><img class="img-responsive" src="images/portafolio/{{$portafolio->image_url}}" alt=""></p>
						          <p>{{$portafolio->description}}</p>
						          
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="button button-sm" data-dismiss="modal">Cerrar</button>
						        </div>
						      </div><!-- /.modal-content -->
						    </div><!-- /.modal-dialog -->
						  </div><!-- /.modal --> 
			
			
			<div class="items col-md-5">
			<h4>{{$portafolio->name}}</h4>
			<a data-toggle="modal" href="#myModal_{{$portafolio->id}}" data-fancybox-group="portfolio" class="fancybox">
			
			<img class="thumb" src="images/portafolio/{{$portafolio->image_url}}" alt=""></a>
			<span class="category">{{$portafolio->category}}</span>
			</div>
			@endforeach
			
			

			
			</div>
			</div>
		</div><!-- /row -->
	</section><!-- /slide3 -->
	
	<!-- === Slide 6 / Contact === -->
	<section class="slide story" id="contacto" data-slide="4">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin">Contáctanos</div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				
				
	<div class="contact-center">
	<div class="col-md-1"></div>		
<div class="col-md-6">



{!! Form::open(['route' => 'messages.store', 'method' => 'POST']) !!}

<div class="form-group col-md-12">

{!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre y apellido']) !!}
</div>

<div class="form-group col-md-12">

{!! Form::text('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'Correo electrónico']) !!}
</div>




<div class="form-group col-md-12">

{!! Form::text('subject', null, ['class' => 'form-control', 'required', 'placeholder' => 'Asunto']) !!}
</div>

<div class="form-group col-md-12">

{!! Form::textarea('body', null, ['class' => 'form-control', 'size' => '20x5', 'required', 'placeholder' => 'Escriba su mensaje']) !!}
</div>


   
   <div class="col-md-4">
<div class="form-group text-center">
    <div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
    {!! Form::submit('Enviar mensaje', ['class' => 'button'])!!}
    
</div>
</div>
{!! Form::close() !!}
   
    
</div>




    </div>
    <div class="col-md-4">
        <address>
      
      
       <ul>
           
           <li class="fa icon-phone"> (+58) 0424-900-76-17      </li><br>
           <li class="fa icon-envelope"> Contacto@HouseCreations.com.ve</li><br>
           <li class="fa icon-map-marker"> Calle 1 cruce con calle 3 local 4 
           </li>
       </ul>
        
    </address>
    
    </div>
    </div>
</div>
				
				
			</div><!-- /row -->
					</div><!-- /container -->
</section><!-- /Slide 6 -->


@endsection
