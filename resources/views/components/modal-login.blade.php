<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
</head>
<body>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div id="modalLogin" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Realize seu login</h5>

                        <button type="button" class="close" data-dismiss="modal">
                            <span>x</span>
                            <span class="sr-only">Fechar</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group has-feedback">
                            <label for="email">Email</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" name="email" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="password">Senha</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                        </div>

                        <a id="forgotPass" href="{{ route('password.request') }}" class="btn btn-link">Esqueceu a senha?</a>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" id="submitForm" class="btn">Entrar</button>
                        <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>

        </div>

    </form>

</body>
</html>
