<x-layoutLR title="Blog - Login" titleName='Login'>
    <form method="POST" action="{{route('user.login_action')}}">
        @csrf

        <x-forms.text-input
            type="email"
            name="email"
            label="Email"
            placeholder="Digite seu email"
        />

        <x-forms.text-input
            type="password"
            name="password"
            label="Senha"
            placeholder="Digiete sua senha"
        />

        <div class="button_forms_create">
            <x-buttons.button type='reset'>Limpar</x-buttons.button>
            <x-buttons.button type='submit'>Logar</x-buttons.button>

        </div>

        <div class="alert">
            <a  href="/register">Se você não tem conta, clique aqui!</a>
        </div>

        <div class="alert">
            <a  href="/">Voltar a pagina Home.</a>
        </div>

    </form>
</x-layoutLR>
