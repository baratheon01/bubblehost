<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BubbleHost</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        /*.container{
            border: solid black 2px;
        }*/

        html {
         scroll-behavior: smooth;
       }
       
    </style>
</head>
<body>
    <div class="container grid grid-cols-3 gap-y-20">
      <div class="col-span-4">
      <nav class="flex items-center justify-between flex-wrap bg-blue-600 p-6 rounded-lg">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
          
          <span class="font-extrabold text-4xl tracking-tight">BubbleHost</span>
        </div>
        <div class="block lg:hidden">
          <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white transition ease-in-out duration-700" id="dropbutton">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
        <div class="ml-6 w-full block flex-grow lg:flex lg:items-center lg:w-auto hidden" id="navselect">
          <div class="text-xl lg:flex-grow">
            <a href="#asesoria" class="block mt-2 p-2 hover:no-underline hover:bg-blue-400 transition duration-150 ease-out rounded  lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-6">
              Asesoria
            </a>
            <a href="#planes" class="block mt-2 p-2 hover:no-underline hover:bg-blue-400 transition duration-150 ease-out rounded lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-6">
              Planes
            </a>
            <a href="#contacto" class="block mt-2 p-2 hover:no-underline hover:bg-blue-400 transition duration-150 ease-out rounded lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
              Contacto
            </a>
          </div>
          <div>
            <i class="fab fa-facebook fa-3x sm:fa-2x py-2 cursor-pointer text-white p-2 mt-2"></i>
          <i class="fab fa-instagram-square fa-3x py-2 cursor-pointer text-white p-2 mt-2"></i>
          </div>
        </div>
      </nav>
    </div> 
            <div class="hero gap-x-40 col-span-3 sm:col-span-3 md:col-span-3 lg:col-span-2 xl:col-span-2 flex h-xl " id="hero">

                  <div class="" >
                    <h1 class="ml-12 mt-20 font-extrabold text-4xl text-blue-700 ">BubbleHost</h1>
                    <br>
                    <h2 class="ml-12"><span class="font-semibold text-4xl text-blue-400 "> el mejor socio web para tu negocio</span></h2>
                  </div> 
            </div>
            <div class="col-span-1 " id="img-hero">
              <div class=" hidden p-3 lg:inline-flex lg:flex-row xl:flex-col justify-items-end items-center mt-6" >
                <img src="img/i1.png" alt="i1" class="">
              </div>
            </div>
            <div class="services col-span-3 h-full bg-gradient-to-t from-blue-500 rounded-lg" id="asesoria">
              <div class="grid grid-cols-1 grid-flow-row sm:grid-cols-1 p-4 md:grid-cols-1 lg:grid-cols-3 xl:grid-cols-3">
                <div class=" flex justify-center py-4 px-2 mr-0 xl:mr-6 sm:mr-3">
                 

                  <div class="p-6  bg-white rounded-lg shadow-2xl" >
                    <h3 class="mb-6 text-center font-semibold text-2xl text-blue-600">Hosting web</h3>
                    <p class="mb-2"> Con nuestros servicios de host podrás tener tu negocio alojado en nuestros servidores</p>
                  </div>
                </div>
                <div class="flex justify-center py-4 px-2 mr-0 xl:mr-6 sm:mr-3 ">
                  <div class="p-6 bg-white rounded-lg shadow-2xl" >
                    <h3 class="mb-6 text-center font-semibold text-2xl text-blue-600" >Host para tu sitio web</h3>
                    <p class="mb-2"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo voluptatum eaque neque omnis nostrum dolore!</p>
                  </div>
                </div>
                <div class="flex justify-center py-4 px-2 mr-0 xl:mr-3 sm:mr-3">
                  <div class="p-6 bg-white rounded-lg shadow-2xl ">
                    <h3 class="mb-6 text-center font-semibold text-2xl text-blue-600" >Host para tu sitio web</h3>
                    <p class="mb-2" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, odio. Eum maiores natus alias</p>
                  </div>
                </div>
            </div>
            </div>
            <div class="col-span-3 text-center text-blue-600" id="planes">
              <h2 class="text-2xl font-extrabold  sm:text-3xl ">Nuestros planes</h2>
          </div>
            <div class="pricing-table col-span-3 h-full" ">
                <div class="grid grid-cols-1 grid-flow-row sm:grid-cols-1 p-4 md:grid-cols-1 lg:grid-cols-3 xl:grid-cols-3">
                    <div class=" flex justify-center py-4">
                     
    
                      <div class="p-8 border  border-blue-700 rounded-lg shadow-2xl">
                        <div class="divide-y divide-blue-300">
                          <h3 class=" divide-y divide-blue-300 mb-6 text-center font-semibold text-2xl text-blue-600"> Plan Bronce</h3>
                          <p class="mb-2" ><span class="fa fa-check-circle"></span> 1GB de ram</p>
                        </div>
                        

                        
                        <p class="mb-2"><span class="fa fa-check-circle"></span> 10GB de transferencia</p>
                        <p class="mb-2"><span class="fa fa-check-circle"></span> 20 Correos cosporativos</p>
                        <p class="mb-2"><span class="fa fa-check-circle"></span> Creador de sitios web</p>
                        
                        <p class="mb-6"><span class="fa fa-check-circle"></span> Certificado SSL</p>
                        <div class="text-center">
                          {{-- <a class="font-bold" href="">!Contactenos¡</a> --}}
                          <button class="w-full font-bold border rounded-lg transition duration-500 ease-in-out bg-white hover:bg-blue-300 transform hover:-translate-y-1 hover:scale-110 "> <a href="#contact" class="hover:no-underline">Contactenos!</a> </button>
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-center py-4 ">
                      <div class="p-8  border  border-blue-700 rounded-lg shadow-2xl" >
                        <div class="divide-y divide-blue-300">
                          <h3 class="mb-6 text-center font-semibold text-2xl text-blue-600" >Plan Oro</h3>
                          <p class="mb-2" ><span class="fa fa-check-circle"></span> 3GB de ram</p>
                        </div>
                        
                        <p class="mb-2"><span class="fa fa-check-circle"></span> 30GB de transferencia</p>
                        <p class="mb-2"><span class="fa fa-check-circle"></span> 40 Correos cosporativos</p>
                        <p class="mb-2"><span class="fa fa-check-circle"></span> Creador de sitios web</p>
                        
                        <p class="mb-6"><span class="fa fa-check-circle"></span> Certificado SSL</p>
                        <div class="text-center">
                          <button class="w-full font-bold border rounded-lg transition duration-500 ease-in-out bg-white hover:bg-blue-300 transform hover:-translate-y-1 hover:scale-110 "> <a href="#contact" class="hover:no-underline">Contactenos!</a></button>
                        </div>
                      </div>
                    </div>
                    <div class="flex justify-center py-4">
                      <div class="p-8  border  border-blue-800 rounded-lg shadow-2xl ">
                        <div class="divide-y divide-blue-300"> 
                          <h3 class="mb-6 text-center font-semibold text-2xl text-blue-600" >Plan Diamante</h3>
                          <p class="mb-2 " ><span class="fa fa-check-circle"></span> 5GB de ram</p>
                        </div>
                        
                        <p class="mb-2"><span class="fa fa-check-circle"></span> 50GB de transferencia</p>
                        <p class="mb-2"><span class="fa fa-check-circle"></span> 60 Correos cosporativos</p>
                        <p class="mb-2"><span class="fa fa-check-circle"></span> Creador de sitios web</p>
                        <p class="mb-6"><span class="fa fa-check-circle"></span> Certificado SSL</p>
                        <div class="text-center">
                          <button class="w-full font-bold border rounded-lg transition duration-500 ease-in-out bg-white hover:bg-blue-300 transform hover:-translate-y-1 hover:scale-110 "> <a href="#contact" class="hover:no-underline">Contactenos!</a></button>
                        </div>
                        
                      </div>
                    </div>
                    
                </div>
            </div>
            <div class=" col-span-3 text-center text-blue-600">
                <h2 class="text-2xl font-extrabold  sm:text-3xl">Tabla comparativa</h2>
            </div>
            <div class="col-span-3 h-full" id="tabla" >
              <div class="grid col-span-3">
              <table class="table-auto  rounded-sm xl:rounded-lg text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl" >
                  <thead>
                    <tr class="xl:px-12 py-2 text-blue-600 text-center">
                      <th class="px-0 py-0 ">Recursos</th>
                      <th class="px-0 py-0 ">Bronce</th>
                      <th class="px-0 py-0 ">Oro</th>
                      <th class="px-0 py-0">Diamante</th>
                    </tr>
                  </thead>
                  <tbody class="text-center sm:px-0 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                    <tr>
                      <td  class="border px-0 py-0 hover:bg-blue-200 transition duration-500 ease-in-out cursor-default">Bases de datos MySQL </td>
                      <td class="border px-4 py-2 text-blue-600">1</td>
                      <td class="border px-4 py-2 text-blue-600">1</td>
                      <td class="border px-4 py-2 text-blue-600">2</td>
                  </tr>
                  <tr>
                    <td  class="border px-4 py-2 hover:bg-blue-200 transition duration-500 ease-in-out cursor-default">Wordpress y otras aplicaciones</td>
                    <td class="border px-4 py-2 text-blue-600"><i class="fas fa-check"></i></td>
                    <td class="border px-4 py-2 text-blue-600"><i class="fas fa-check"></i></td>
                    <td class="border px-4 py-2 text-blue-600"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td  class="border px-4 py-2 hover:bg-blue-200 transition duration-500 ease-in-out cursor-default">Subdominios Ilimitados</td>
                    <td class="border px-4 py-2 text-blue-600"><i class="fas fa-times"></i></td>
                    <td class="border px-4 py-2 text-blue-600"><i class="fas fa-times"></i></td>
                    <td class="border px-4 py-2 text-blue-600"><i class="fas fa-check"></i></td>
              </tr>
               <tr>
                    <td  class="border px-4 py-2 hover:bg-blue-200 transition duration-500 ease-in-out cursor-default">Acceso a Cpanel</td>
                    <td class="border px-4 py-2 text-blue-600"><i class="fas fa-check"></i></td>
                    <td class="border px-4 py-2 text-blue-600"><i class="fas fa-check"></i></td>
                    <td class="border px-4 py-2 text-blue-600"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td  class="border px-4 py-2 hover:bg-blue-200 transition duration-500 ease-in-out cursor-default">Cuentas FTP</td>
                    <td class="border px-4 py-2 text-blue-600">2</td>
                    <td class="border px-4 py-2 text-blue-600">3</td>
                    <td class="border px-4 py-2 text-blue-600">5</td>
                </tr>
                <tr>
                    <td  class="border px-4 py-2 hover:bg-blue-200 transition duration-500 ease-in-out cursor-default">Soporte</td>
                    <td class="border px-4 py-2 text-blue-600"><i class="fas fa-check"></i></td>
                    <td class="border px-4 py-2 text-blue-600"><i class="fas fa-check"></i></td>
                    <td class="border px-4 py-2 text-blue-600"><i class="fas fa-check"></i></td>
                  </tr>
                  </tbody>
                </table>
            </div>
            </div>
            <div class="contact col-span-3" id="contacto">
              <div class="card w-full">
                <div class="card-header text-center text-blue-600">
                  <h2 class="text-2xl font-extrabold  sm:text-3xl">Contactanos</h2> 
                </div>
                <div class="card-body ">
                    <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data" class="formulario-enviado">
                        @csrf
                        <div class="form-group">
                            <select name="select" id="" class="form-control">
                                <option>Selecciona un plan</option>
                                <option>Plan Bronce</option>
                                <option>Plan Oro</option>
                                <option>Plan Diamante</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="msg">Msg</label>
                            <textarea name="msg" id="" class="form-control"></textarea>
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary ">Enviar </button>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
            </div>
            
            <div class="bg-blue-700 col-span-3"></div>
        </div>
        @error('name')
        <script>  
          Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'Debes llenar el campo nombre',
          showConfirmButton: false,
          timer: 2500
          })
      </script>
        @enderror
        @error('email')
        <script>  
          Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'Debes introducir un email correcto',
          showConfirmButton: false,
          timer: 2500
          })
      </script>
        @enderror
        @error('select')
        <script>  
          Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'Debes seleccionar un plan',
          showConfirmButton: false,
          timer: 2500
          })
      </script>
        @enderror
        @error('msg')
        <script>  
          Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'Debes llenar el campo msg',
          showConfirmButton: false,
          timer: 2500
          })
      </script>
        @enderror
        @if (session('enviado')== 'ok')
        <script>  
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Tu mensaje se ha enviado exitosamente!',
            showConfirmButton: false,
           timer: 1500
            })
        </script>
           
        @endif

       <script>
         const boton =document.querySelector('#dropbutton');
         const menu = document.querySelector('#navselect');

          boton.addEventListener('click', () =>{
           console.log('me diste click')

           menu.classList.toggle('hidden')
         })
       </script>
        
   
</body>
</html>