<!doctype html>
<html lang="en">

<head>
  <title>Registro</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset ('assets/estilos.css')}}">

</head>

<body>
    <div class="container">
        <section class="h-100 gradient-form">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                  <div class="row g-0">
                    <div class="col-lg-6">
                      <div class="card-body p-md-5 mx-md-4">
        
                        <div class="text-center">
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                            style="width: 185px;" alt="logo">
                          <h4 class="mt-1 mb-5 pb-1">Crea tu cuenta</h4>
                        </div>
        
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                    
                            <!-- Name -->
                            <div class="form-outline mt-4 mb-4">
                                <label class="form-label" for="name" :value="__('name')">Nombre completo</label>
                                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                    
                            <!-- Email Address -->
                            <div class="form-outline mt-4 mb-4">
                                <label class="form-label" for="email" :value="__('Email')">Correo electronico</label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                    
                            <!-- Password -->
                            <div class="form-outline mb-4 mt-4">
                                <label class="form-label" for="password" :value="__('Password')" >contraseña</label>
                    
                                <input id="password" class="form-control"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                    
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                    
                            <!-- Confirm Password -->
                            <div class="form-outline mb-4 mt-4">
                                <label class="form-label" for="password_confirmation" :value="__('Confirm Password')" >Confirmar contraseña</label>
                    
                                <input id="password_confirmation" class="form-control"
                                                type="password"
                                                name="password_confirmation" required autocomplete="new-password" />
                    
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                    
                            <div class="d-flex align-items-center justify-content-center pb-4 mt-4">
                                <a type="button" class="btn btn-outline-danger me-3" href="{{ route('login') }}">
                                    {{ __('Ya estas registrado?') }}
                                </a>
                                <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 me-3">Crear Cuenta</button>
                              </div>
                        </form>
        
                      </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                      <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                        <h4 class="mb-4">Disfruta tu estadia</h4>
                        <p class="small mb-0">Siempre buscamos garantizar la mejor experiencia para los clientes
                          dando asi un paso y una oportunidad de crecer y demostrar la calidad que podemos ofrecer.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
        
    
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>