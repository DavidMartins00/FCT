<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="../../../../public/assetsDBM/img/apple-icon.png">
<link rel="icon" type="image/png" href="../../../../public/assetsDBM/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>
    Perfil
</title>
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<!-- CSS Files -->
<link href="{{asset('assetsDBM/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet"/>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit o seu profile</h4>
                        <p class="card-category">Complete your profile</p>
                    </div>
                    <div class="card-body">
                        <form class="main__form" action="/perfil/{{$var->id}}" method="post">
                            @csrf
                            @method('put')

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nome</label>
                                        <input type="text" name="name" id="name" value="{{$var->name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="email" name="email" id="email" value="{{$var->email}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Telefone</label>
                                        <input type="text" name="telefone" value="{{$var->telefone}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Password</label>
                                        <input type="password" name="password" id="password"  class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Morada</label>
                                        <input type="text" name="morada" value="{{$var->morada}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Codigo Postal</label>
                                        <input type="text" name="codpost" value="{{$var->codpost}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">NIF</label>
                                        <input type="text" name="nif" value="{{$var->nif}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Localidade</label>
                                        <input type="text" name="localidade" value="{{$var->localidade}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div>
            <a href="/" class="btn btn-primary btn-round">Voltar</a>
        </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
